<?php
$GLOBALS["lang"][' Default, currently '] = ' Padrão, atualmente ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Se algo não funcionar como esperado, sua primeira coisa a fazer é verificar os registros.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' Agora é suportado com um arquivo de idioma. Para mudar seu usuário para usar este idioma, clique ';

$GLOBALS["lang"][' seconds'] = ' segundos';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', mas não precisa se lembrar de um conjunto separado de credenciais de logon.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', dos quais nós fornecemos mais de trinta como um conjunto padrão. Usuários profissionais não podem alterar isso, mas um usuário da Enterprise tem habilidades completas de personalização, incluindo criar a sua própria.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = 'Você <i>Deve</i> Estar usando https em seu servidor Open-AudIT para usar Entra para Auth. Por favor, configure Apache para usar <strong>https</strong> Antes de configurar Entra para Auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Para ativar isso, edite o item de configuração para ';

$GLOBALS["lang"]['10 Minutes'] = '10 minutos.';

$GLOBALS["lang"]['15 Minutes'] = '15 minutos.';

$GLOBALS["lang"]['30 Minutes'] = '30 Minutos';

$GLOBALS["lang"]['5 Minutes'] = '5 Minutos';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 controles agrupados em categorias organizacionais, pessoas, físicas e tecnológicas';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>NOTA</strong> Você está acessando essa URL do servidor local Open-AudIT. O script baixado não será capaz de enviar quando executado em qualquer outra máquina. Se precisar auditar outras máquinas, baixe o script de qualquer máquina remota, não usando um navegador no servidor Open-AudIT.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">NOTA</strong> Deve ter credenciais SSH ou SSH Key para executar referências em um dispositivo alvo.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Baseline</strong> O documento abrangente que contém a definição de base e os testes de políticas individuais.<br/> <br/> <strong>Políticas</strong> - Os testes individuais contidos em uma base. Cada teste é para um item específico. Um exemplo seria testar para SSH versão 1.2.3.<br/> <br/> <strong>Detalhes</strong> Baselines podem comparar portas, usuários e software.<br/> <br/> <strong>Software</strong> Para comparar o software, verificamos o nome e a versão. Porque os números de versão não são todos padronizados em formato, quando recebemos um resultado de auditoria criamos um novo atributo chamado software_acolchoado que armazenamos no banco de dados junto com o resto dos detalhes de software para cada pacote. Por essa razão, as linhas de base usando políticas de software não funcionarão quando forem executadas contra um dispositivo que não foi auditado até 1,10 (pelo menos). Políticas de software podem testar contra a versão ser "igual a", "maior que" ou "igual ou maior que".<br/> <br/> <strong>Portos Netstat</strong> - O porto de Netstat usa uma combinação de número de porta, protocolo e programa. Se todos estiverem presentes, a política passa.<br/> <br/> <strong>Usuários</strong> - Usuários trabalham como o Netstat Ports. Se um usuário existe com um nome, status e senha correspondentes (alterável, expira, necessário) então a política passa.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Um local é um endereço físico que pode ter dispositivos associados a ele.<br/> <br/>Você pode atribuir coordenadas (lat/long) e se houver dispositivos atribuídos, a localização aparecerá no mapa da Open-AudIT Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Uma rede é derivada de entradas de descoberta e atributos de dispositivo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Um resumo exibirá uma lista de itens, agrupados pelos valores distintos do atributo especificado pelo <code>table</code> e <code>column</code> atributos.<br/> <br/>Quando um resumo é executado, o resultado será uma lista de valores distintos para isso. <code>table</code> e <code>column</code>. Haverá links nos valores que permitem ao usuário ver os dispositivos correspondentes.<br/> <br/>Se o atributo de <code>extra_columns</code> É povoada, a página resultante conterá estas colunas além das colunas padrão do dispositivo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agentes permitem que você audite PCs sem uma descoberta. Instale o agente e ele fará check-in com o servidor todos os dias e se auditoriará. Não importa se seus computadores estão em firewall, dados de auditoria ainda aparecerão no Open-AudIT.</p><p>Ao testar <strong>se</strong> Um agente deve realizar ações, todos os três testes devem passar (se o teste estiver definido). <strong>Então...</strong> As ações são tomadas.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Aplicações são definidas por você, o usuário e armazenadas para Open-AudIT usar e associar com dispositivos.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Atributos são armazenados para Open-AudIT para usar em campos específicos.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Ser capaz de determinar quais máquinas são configuradas o mesmo é uma parte importante da administração de sistemas e auditoria - e agora relatar sobre isso será feito simples e automatizado. Uma vez que você definir sua linha de base, ele automaticamente será executado contra um conjunto de dispositivos em um cronograma pré-determinado. A saída dessas linhas de base executadas estará disponível para visualização na web, importação para um sistema de terceiros ou mesmo como um relatório impresso.<br/> <br/> As linhas de base permitem combinar dados de auditoria com um conjunto de atributos que você definiu anteriormente (sua linha de base) para determinar a conformidade dos dispositivos.<br/> <br/> Por exemplo, você pode criar uma linha de base a partir de um dispositivo rodando Centos 6 que age como um de seus servidores apache em um cluster. Você sabe que esse servidor em particular está configurado do jeito que você quer, mas você não tem certeza se outros servidores no cluster estão configurados exatamente da mesma forma. As linhas de base permitem determinar isso.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Clusters são armazenados em Open-AudIT para associar dispositivos para registrar, gerenciar e estimar custos de licenciamento.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Componentes é um termo genérico usado para as tabelas que armazenam os atributos de um dispositivo. Essas tabelas são: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, netstat, netstat, netmap, optic, pagefile, partition, policy, print_queue, processador, radio, route, san, scsi, server_item, service, share, software, software_key, sound, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> Além disso, classificamos as seguintes tabelas como relacionadas com dispositivos: aplicação, apego, cluster, credencial, imagem.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>As credenciais são criptografadas quando armazenadas no banco de dados.<br/> <br/>Quando uma Discovery é executada, um dispositivo tem suas credenciais recuperadas e testadas para conexão primeiro. <code>credential</code> mesa). Se estes falharem, então credenciais associadas com a dada Org <code>credentials.org_id</code> também é testado contra o dispositivo. Credenciais de trabalho são armazenados em um nível de dispositivo individual na tabela de credenciais (nota - sem "s" no nome da tabela).<br/> <br/>Chaves SSH são testadas antes do nome de usuário / senha SSH. Ao testar SSH, credenciais também serão marcadas como trabalhando com sudo ou sendo raiz.<br/> <br/>Para facilitar o uso, senhas do Windows não devem conter uma única ou dupla citação. Essa é uma limitação remota do WMI, não uma limitação do Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Credenciais são usados para acessar dispositivos.<br/> <br/>Configurar credenciais deve ser uma das primeiras coisas que você faz depois de instalar Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Defina suas prateleiras e coloque dispositivos em suas posições. Você já tem seus dispositivos em Open-AudIT e você sabe suas localizações. Open-AudIT estende isso para permitir que você crie um rack e atribua dispositivos a ele. O Open-AudIT fornecerá uma visualização do rack e dos dispositivos contidos. Se você fornecer uma foto do dispositivo, essa foto será usada na visualização. Você pode olhar para o rack na tela e ver os mesmos itens que você veria se estivesse em frente dele.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Dispositivos em sua rede precisam ser gerenciados. Mas como mantém seus registros atualizados? Uma planilha, não. Isso será desatualizado em horas, se não em dias. Por que manualmente tentar acompanhar. Use Open-AudIT para escanear automaticamente suas redes e gravar seus dispositivos - fabricante, modelo, série e mais de 100 outros atributos. Listas completas de software, serviços, discos, portas abertas, usuários, etc. Veja automaticamente se um atributo foi adicionado, removido ou alterado.<br/> <br/>Quando o Open-AudIT estiver pronto, pode sentar e relaxar. Mudanças de relatórios por e-mail para você em um horário, por exemplo - que novos dispositivos descobrimos esta semana? Que novo software foi instalado esta semana? Houve alguma mudança de hardware no mês passado?<br/> <br/>Expanda os campos armazenados facilmente com seus próprios atributos personalizados.<br/> <br/>Mesmo adicionar dispositivos que não estão conectados à sua rede ou aqueles dispositivos que seu servidor Open-AudIT não pode alcançar.<br/> <br/>Computadores, interruptores, roteadores, impressoras ou qualquer outro dispositivo na sua rede.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Descobrimentos estão no centro do que Open-AudIT faz.<br/> <br/>Como você saberia "O que tem na minha rede?"<br/> <br/>Descobertas são itens de dados preparados que permitem que você execute uma descoberta em uma rede em um único clique, sem entrar nos detalhes dessa rede cada vez.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Descoberta As opções são um cenário global mudado no <a href="../configuration?configuration.name=discovery_default_scan_option">configuração</a>. Se você tem uma licença da Open-AudIT Enterprise estes são settable por descoberta e além disso mais personalizável como necessário. Descoberta As opções são as seguintes:<br/><br/><strong>UltraFast</strong>: <i>1 segundo.</i>. Analise apenas as portas que Open-AudIT precisa usar para falar com o dispositivo e detectar um dispositivo IOS (WMI, SSH, SNMP, Apple Sync). Um <code>open|filtered</code> O porto é considerado aberto. A <code>filtered</code> O porto não é considerado aberto. O dispositivo deve responder a um Nmap ping. Use o timing agressivo.<br/><br><strong>Super rápido</strong>: <i>5 segundos.</i>. Escaneie as 10 portas TCP e UDP, bem como a porta 62078 (Detecção IOS de maçã). Um <code>open|filtered</code> O porto é considerado aberto. A <code>filtered</code> O porto não é considerado aberto. O dispositivo deve responder a um Nmap ping. Use o timing agressivo.<br><br/><strong>Rápido.</strong>: <i>40 segundos.</i>. Analise as 100 portas TCP e UDP, bem como a porta 62078 (Detecção de IOS de maçã). Um <code>open|filtered</code> O porto é considerado aberto. A <code>filtered</code> O porto não é considerado aberto. O dispositivo deve responder a um Nmap ping. Use o timing agressivo.<br/><br/><strong>Médio (Clássico)</strong>: <i>90 segundos.</i>. O mais perto possível de uma varredura Open-AudIT. Escaneie as 1000 portas TCP, assim como 62078 (Detecção de IOS de maçã) e UDP 161 (SNMP). Um <code>open|filtered</code> O porto é considerado aberto. A <code>filtered</code> A porta é considerada aberta (e irá ativar a detecção do dispositivo). Os dispositivos são digitalizados independentemente de uma resposta a um Nmap ping. Use o timing agressivo.<br/><br/><strong>Médio.</strong>: <i>100 segundos.</i>. Analise as 1000 portas TCP e UDP, assim como a porta 62078 (Detecção de IOS de maçã). Um <code>open|filtered</code> O porto é considerado aberto. A <code>filtered</code> O porto não é considerado aberto. O dispositivo deve responder a um Nmap ping. Use o timing agressivo.<br/><br/><strong>Devagar.</strong>: <i>4 minutos.</i>. Analise as 1000 portas TCP e UDP, assim como a porta 62078 (Detecção de IOS de maçã). Detecção de versões ativada. Um <code>open|filtered</code> O porto é considerado aberto. A <code>filtered</code> A porta é considerada aberta (e irá ativar a detecção do dispositivo). O dispositivo deve responder a um Nmap ping. Use o tempo normal.<br/><br/><strong>UltraSlow</strong>: <i>20 minutos.</i>. Não recomendado. Examinem as 1000 portas TCP e UDP, bem como a porta 62078 (Detecção de IOS de maçã). Os dispositivos são digitalizados independentemente de uma resposta a um Nmap ping. Detecção de versões ativada. Um <code>open|filtered</code> O porto é considerado aberto. A <code>filtered</code> A porta é considerada aberta (e irá ativar a detecção do dispositivo). Use o timing educado.<br/><br/><strong>Personalizado</strong>: <i>Tempo desconhecido</i>. Quando opções diferentes das definidas por uma descoberta padrão são alteradas.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Grupos são usados como listas simples de dispositivos que correspondem às condições necessárias. Se solicitado usando o JSON eles devolvem uma lista de <code>devices.id</code> Apenas. Se solicitado usando a interface web, eles retornam a lista de atributos de coluna padrão.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Se o usuário entrar no Open-AudIT não tem acesso ao LDAP de busca (e você está usando OpenLDAP), você pode usar outra conta que tenha esse acesso. Use o <code>ldap_dn_account</code> e <code>ldap_dn_password</code> Para configurar isso.<br/> <br/><strong>Documentação útil</strong><br/> <br/><a href="/index.php/auth/help">Ajuda Geral Auth</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Usando Entra para Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Usando OKTA para Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Solução de problemas LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Usuários, papéis e orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Se você adicionar um tipo de dispositivo, para exibir o ícone associado você terá que copiar manualmente o arquivo formatado .svg para o diretório:<br/><em>Linux</em>Tradução e Sincronia:<br/><em>Janelas</em>Tradução e Sincronia:<br/> <br/>Se você adicionar um tipo de localização, para exibir o ícone associado você terá que copiar manualmente o ícone 32x32px para o diretório:<br/><em>Linux</em>Tradução e Sincronia:<br/><em>Janelas</em>Tradução e Sincronia:</p><p>Quando o <i>recurso</i> é um <code>device</code>, válido <i>Tipos</i> são: <code>class</code>, <code>environment</code>, <code>status</code> e <code>type</code>. Se o <i>recurso</i> É <code>locations</code> ou <code>org</code> O único válido <i>Tipo</i> É <code>type</code>. Se o <i>recurso</i> é um <code>query</code> O único válido <i>Tipo</i> É <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Se você pretende auditar completamente suas máquinas de nuvem, não se esqueça que você também precisará dessas credenciais salvas em Open-AudIT.</p><p>Certifique-se de permitir as portas corretas se você estiver usando Microsoft Azure (22 para SSH, etc). Verifique sua máquina virtual. Regras de rede.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Se você selecionar um tipo de lista, o campo "valores" será ativado. Deveria colocar uma lista separada de valores selecionáveis aqui. Eles serão exibidos em uma caixa sempre que o campo for editado.<br/> <br/>Como a maioria dos outros atributos, Fields pode ser editado em massa. Use a função Bulk Edit como normalmente faria e verá que os Campos estão disponíveis para entrada.<br/> <br/>Veja a tela de detalhes do dispositivo, abra a seção que contém o campo e (se você tiver acesso suficiente) você pode clicar no valor do campo para editá-lo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>No mundo em constante mudança da segurança do computador onde novas vulnerabilidades estão sendo descobertas e reparadas todos os dias, forçar a conformidade com a segurança deve ser um processo contínuo. Também precisa incluir uma forma de fazer ajustes nas políticas, assim como avaliação periódica e monitoramento de risco. O ecossistema OpenSCAP fornece ferramentas e políticas personalizáveis para uma implementação rápida, econômica e flexível desses processos.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrações permitem que você configure a seleção de dispositivos e horários para Open-AudIT para falar com sistemas externos.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Sistemas de desktop Windows têm limitações de rede que podem afetar o desempenho do Open-AudIT. A pilha TCP/IP limita o número de tentativas simultâneas de conexão TCP incompletas. Depois que o limite for alcançado, tentativas de conexão subsequentes são colocadas em uma fila e serão resolvidas a uma taxa fixa (10 por segundo). Se muitos entrarem na fila, podem ser largados. E finalmente, Apache será reiniciado pelo SO. Por esta razão, instalar Open-AudIT em um sistema operacional de desktop Windows não é suportado.<br/><br/>Não há nada de errado com o código Open-AudIT, nem podemos fazer nada para resolver esse problema em máquinas clientes do Windows.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Os detalhes do tempo do mapa são encontrados na parte inferior desta página vinculada. <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. Daquela página:<br/> <br/><em>Se você estiver em uma boa conexão de banda larga ou ethernet, eu recomendaria sempre usar -T4 (Agressivo). Algumas pessoas amam -T5 (Insana) embora seja muito agressivo para o meu gosto. Às vezes, as pessoas especificam -T2 (polite) porque acham que é menos provável que os anfitriões caiam ou porque se consideram educados em geral. Eles muitas vezes não percebem o quão lento -T2 realmente é. A varredura pode demorar dez vezes mais do que uma varredura padrão. Quedas de máquina e problemas de largura de banda são raros com as opções de tempo padrão -T3 (Normal) e então eu normalmente recomendo isso para scanners cautelosos. Omitir detecção de versão é muito mais eficaz do que jogar com valores de tempo na redução desses problemas.</em><footer>Gordon. <i>Fyodor.</i> Lyon.</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT pode ser configurado para usar métodos diferentes para autenticar um usuário e, além disso, para criar uma conta de usuário usando funções atribuídas e orgs baseados em membros do grupo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open-Aud. A TI pode recuperar detalhes sobre um arquivo ou diretório de arquivos e monitorar esses arquivos para alterações conforme outros atributos no banco de dados Open-AudIT.<br/> <br/>Este recurso funciona fora da caixa para servidores Linux Open-AudIT, mas precisa de uma mudança no nome da conta de serviço sob um servidor Windows Open-AudIT.<br/> <br/>Clientes suportados são Windows e Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open-Aud. Pode recuperar detalhes sobre um arquivo, perguntar ao gerente de pacotes nativo se eles são conhecidos por ele e monitorar esses arquivos para alterações de acordo com outros atributos no banco de dados Open-AudIT.<br/> <br/>Clientes apoiados são apenas Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-Aud. Pode armazenar informações em campos personalizados que estão associados a cada dispositivo.<br/> <br/>Uma vez criado um Campo Adicional pode ser usado em consultas e grupos como qualquer outro atributo no banco de dados.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT vem com muitas perguntas integradas. Se você precisa de uma consulta específica e nenhuma das consultas pré-embaladas se encaixam em suas necessidades, é muito fácil criar uma nova e carregá-la em Open-AudIT para execução.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT vem com muitos resumos embutidos. Se você precisa de um resumo específico e nenhum dos resumos pré-embalados se encaixam em suas necessidades, é muito fácil criar um novo e carregá-lo em Open-AudIT para execução.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT é apoiado pela FirstWave com um nível incrível de apoio. Se você prefere uma comunidade ativa de doadores de apoio, há isso também. Onde mais você pode falar diretamente com os desenvolvedores e obter uma resposta em 24 horas? Tente isso com outros produtos! Apoio incrível. Parada total. Você precisa de apoio, nós fornecemos apoio. Sem "se" ou "mas". Grande apoio. Ponto final.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT fornece multi-dotação fora da caixa!<br/> <br/>Orgs (organizações) em Open-AudIT são um item chave. Um usuário tem uma Org primária, bem como uma lista de Orgs que podem acessar. Um usuário combina isso com uma lista de "Roles" que definem quais ações podem tomar sobre os itens atribuídos aos orgs a que têm acesso. A combinação dos usuários "orgs" e "roles" define o que eles podem e não podem fazer no Open-AudIT.<br/> <br/>A maioria dos itens do Open-AudIT são atribuídos a uma Org.<br/> <br/>Orgs podem ter filhos Orgs. Pense em uma estrutura organizacional. Se um usuário tem acesso a uma Org específica, eles também têm acesso a descendentes de Orgs. Para mais informações, veja isso. <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT fornece multi-dotação fora da caixa!<br/> <br/>Orgs (organizações) em Open-AudIT são um item chave. Um usuário tem uma Org primária, bem como uma lista de Orgs que podem acessar. Um usuário combina isso com uma lista de "Roles" que definem quais ações podem tomar sobre os itens atribuídos aos orgs a que têm acesso. A combinação dos usuários "orgs" e "roles" define o que eles podem e não podem fazer no Open-AudIT.<br/> <br/>A maioria dos itens do Open-AudIT são atribuídos a uma Org.<br/> <br/>Orgs podem ter filhos Orgs. Pense em uma estrutura organizacional. Se um usuário tem acesso a uma Org específica, eles também têm acesso a descendentes de Orgs.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Veja rapidamente o status dos dispositivos em sua rede.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Papel em Open-Aud TI é um item chave. Um usuário tem uma Org primária, bem como uma lista de Orgs que podem acessar. Um usuário combina isso com uma lista de papéis que definem quais ações podem tomar sobre itens atribuídos aos orgs aos quais têm acesso. A combinação dos usuários "orgs" e "roles" define o que eles podem e não podem fazer no Open-AudIT.<br/> <br/>Obtenha a experiência completa da Open-AudIT Enterprise. Criar papéis permite um bom controle sobre o que seus usuários podem fazer dentro do Open-AudIT.<br/> <br/>O principal método de autorização (o que um usuário pode fazer) é baseado nos papéis dos usuários. Funções padrão são definidas como admin, org_admin, repórter e usuário. Cada papel tem um conjunto de permissões para cada ponto final. A habilidade de definir papéis adicionais e editar papéis existentes está habilitada na Open-AudIT Enterprise.<br/> <br/>Funções também podem ser usadas com autorização LDAP (Active Directory e OpenLDAP). Instalações licenciadas têm a capacidade de personalizar o grupo LDAP para cada papel definido.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Regras examinam atributos e fazem cahnges baseado na regra apropriada.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Opções de digitalização permitem que você aplique facilmente um conjunto de opções a uma descoberta.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Mapeamento geográfico simples, intuitivo e preciso fornecido pelo Google Maps. Bens do Open-AudIT Google Maps para fornecer ao vivo, mapeamento geográfico interativo de locais de dispositivos. Conversão automática de endereços de rua para geocódigos e longitude/latitude.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Pacotes de software são usados para determinar se antivírus, backup, firewall, software aprovado ou proibido está instalado.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Alguns exemplos de atributos válidos da Subnet são: 192.168.1.1 (um único endereço IP), 192.168.1.0/24 (uma subnet), 192.168.1-3.1-20 (uma gama de endereços IP).<br/> <br/><em>NOTA</em> - Apenas uma sub-rede (de acordo com os exemplos - 192.168.1.0/24) será capaz de criar automaticamente uma rede válida para Open-AudIT. <br/> <br/>Se você usar um tipo de diretório ativo, certifique-se de ter credenciais apropriadas para falar com seu controlador de domínio já em <a href="../credentials">Credenciais</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Os padrões são armazenados em Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Clientes apoiados são apenas Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>As tarefas têm um cronograma que reflete o cronograma do Unix Cron. Os atributos de minuto, hora, dia de mês, mês, dia de semana todos agem de acordo com as definições do cron. Você pode selecionar múltiplos destes usando valores separados por vírgula (sem espaços). Você pode selecionar cada valor usando *.<br/> <br/>O <code>type</code> da tarefa pode ser uma das: baselines, colecionadores, descobertas, consultas, relatórios ou resumos.<br/> <br/>Se você deseja agendar um Baseline ou Discovery, você precisará criar isso antes de criar as tarefas. Você deve usar a identificação do tipo de item em <code>sub_resource_id</code>. Por exemplo, se você deseja agendar uma Discovery, use essa identidade em particular Discoveries em <code>sub_resource_id</code>.<br/> <br/>O valor para <code>uuid</code> é específico para cada servidor Open-AudIT. Seu valor único pode ser encontrado na configuração.<br/> <br/>O <code>options</code> atributo é um documento JSON contendo quaisquer atributos extras necessários para executar a tarefa. Os atributos extras para relatórios, consultas e resumos são: <code>email_address</code> e <code>format</code>. O atributo extra para Bselines é <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>O <code>type</code> do local atribuirá seu ícone.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>O endpoint dos atributos permite adicionar valores personalizados a diferentes atributos em Open-AudIT, no momento este recurso funciona na Classe, Ambiente, Estado e Atributos de Tipo em Dispositivos, o atributo Type para tanto Locais e Orgs, bem como a Categoria Menu para Consultas. Se você ver um item de um dos tipos primitivos (diga ver um Lkocation) você vai notar que o atributo Type deve ser selecionado de uma caixa suspensa. Aqui é onde esses valores são armazenados. Portanto, se você gostaria de adicionar um novo Tipo para ser escolhido para uma Localização, adicione usando o recurso Atributos.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>O recurso Collectors permite gerenciar facilmente muitos computadores "colecionadores" que realizam a descoberta da rede. Todos os Colecionadores são controlados centralmente do servidor. As únicas portas de rede necessárias entre o coletor e o servidor são 80 e/ou 443.<br/> <br/>Torna o gerenciamento de redes díspares rápido, fácil e simples. Licenças da Open-AudIT Enterprise têm uma única licença de colecionador incluída e têm a opção de comprar mais conforme necessário.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>A seção SELECT de seu SQL <em>Deve</em> contém colunas totalmente qualificadas. IE... <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>A seção ONDE do seu SQL <em>Deve</em> Conter <code>WHERE @filter</code> Então Open-AudIT sabe restringir sua consulta aos Orgs apropriados. SQL não conter essa condição resultará na falha da consulta, a menos que você tenha o papel de administrador.<br/> <br/>Uma consulta exemplo SQL mostrando atributos em dispositivos que têm um <code>os_group</code> atributo de "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>A seção SELECT de seu SQL <em>Deve</em> Apenas contém <code>DISTINCT(devices.id)</code>.<br/> <br/>A seção ONDE do seu SQL <em>Deve</em> Conter <code>WHERE @filter</code> Então Open-AudIT sabe restringir sua consulta aos Orgs apropriados. SQL não contendo esta condição resultará em o grupo não ser criado.<br/> <br/>Um exemplo para SQL selecionar todos os dispositivos rodando o sistema operacional Debian - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>O ponto final da licença permite rastrear o número de licenças encontradas em seus dispositivos.<br/> <br/>Para criar uma entrada para rastrear suas licenças. <em>Deve</em> Para fornecer um nome, uma organização, o número de licenças adquiridas e o nome do software. No campo <code>match_string</code> Você deve fornecer o nome do software que você quer rastrear, você pode usar o sinal de porcentagem (%) como um wildcard no match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>A rede deve estar no formato 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Os itens secundários primários e opcionais devem ser totalmente qualificados - ou seja, dispositivos. Tipo ou software. Nome.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Não há necessidade de fazer nada se você estiver rodando Open-AudIT em um servidor Linux.<br/><br/>Os clientes do Windows estão bem e não precisam de ações especiais, no entanto... para habilitar esse recurso o script de auditoria deve ser executado localmente no sistema Windows alvo. Não pode ser executado remotamente como fazemos com as chamadas WMI ao executar o script de auditoria em uma máquina do Windows, enquanto mira uma segunda máquina do Windows. Para fazer isso, precisamos copiar o script de auditoria para a máquina do Windows e executá-lo. Infelizmente a conta de serviço em que o Apache é executado é a conta do Sistema Local. Esta conta não tem acesso a recursos remotos. Para resolver esta questão, o serviço deve ser executado sob outra conta. É mais fácil usar a conta de administrador local, mas você pode tentar qualquer conta que você gosta, desde que tenha os privilégios necessários. A conta do Sistema Local tem tanto acesso local quanto a conta do Administrador local.<br/><br/>Veja nossa página sobre habilitação <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Executando o Serviço Apache Open-AudIT em Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Estes são os dispositivos que vivem dentro de uma prateleira.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Este endpoint permite adicionar seus detalhes de infraestrutura na nuvem. O Open-AudIT irá então alcançar suas nuvens usando sua API nativa e retornar seus servidores, como qualquer outro dispositivo em Open-AudIT.<br/> <br/><em>NOTA</em> - Para usar este recurso, nós <em>Deve</em> ativar os itens de configuração match_mac (para AWS) e match_hostname (para Azure). Isso será feito automaticamente na primeira vez que uma descoberta na nuvem for executada.<br/> <br/>Credenciais para sua nuvem.<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure.</a> ou <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) são necessários.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Vulnerabilidades reportadas com base na transmissão do NIST CVE.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Inicialmente configuramos a lista padrão de scripts com as opções padrão. Esses scripts padrão não podem ser apagados. Você pode criar scripts adicionais para uso por você, conforme necessário. Seu roteiro será baseado em um dos scripts existentes e terá opções personalizadas aplicadas. Os scripts podem ser baixados da página da lista no menu -> Descubra -> Scripts de auditoria -> Listar scripts de auditoria<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Ao usar Regex para combinar, uma página útil pode ser encontrada no <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Site PHP</a>. Algumas diferenças para Perl Regex podem ser encontradas. <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Aqui.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets podem ser facilmente criados para mostrar o que é específico do seu ambiente em seus painéis.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Com Open-AudIT Profissional e Enterprise você pode automatizar e programar descobertas, relatar geração, ou verificação de base para executar quando quiser, e quantas vezes precisar. Agende suas descobertas para correrem todas as noites e relatórios para serem gerados e enviados para o pessoal chave todas as manhãs. Horários complexos ou simples, descoberta de dispositivos e geração de relatórios estão a apenas um clique de distância.<br/> <br/>Criar horários de descoberta individuais para cada sub-rede ou controlador AD, adicionar relatórios a serem criados para o público-alvo. Desenvolver horários simples ou complexos para apoiar as necessidades da empresa, evitar backups ou impactos às operações, ou simplesmente espalhar a carga e acelerar a conclusão da auditoria.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Você pode criar um script com todas as opções para qualquer um dos scripts de auditoria existentes - não apenas Windows. AIX, ESX, Linux, OSX e Windows estão todos cobertos.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Você pode usar a porcentagem de sinal como uma carta no jogo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Suas prateleiras ajudam a refinar exatamente onde seus dispositivos estão localizados.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>NOTA</strong> Você está acessando essa URL do servidor local Open-AudIT. O script baixado não será capaz de enviar quando executado em qualquer outra máquina. Se precisar auditar outras máquinas, baixe o script de qualquer máquina remota, não usando um navegador no servidor Open-AudIT.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Um item CVE que não contém um filtro para determinar os itens afetados.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Um Google Maps API A chave é necessária para esta função.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Uma série JSON de IDs de dispositivos que executarão essa referência.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Uma série JSON de objetos correspondentes ao nome do software tirado da CVE, enriquecido com o nome do software recuperado pela Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Uma série JSON de valores para testar para esta vulnerabilidade.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Um documento da JSON contendo as orgs atribuídas a este usuário. Identidades tiradas de <code>orgs.id</code>. Se um usuário tem acesso a uma Org, eles têm acesso a descendentes de Orgs.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Um documento da JSON contendo os atributos necessários dependendo de <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Um documento JSON contendo os atributos necessários sobrepondo as opções escolhidas.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Um documento JSON contendo os atributos necessários sobrepondo as opções de correspondência padrão do dispositivo.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Um documento da JSON contendo os papéis atribuídos a esse usuário. Nomes de papéis retirados de <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Um objeto JSON contendo uma série de atributos para mudar se a correspondência ocorrer.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Um objeto JSON contendo uma série de atributos para combinar.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Um objeto JSON contendo opções específicas de coleção.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Um objeto JSON povoado através de uma descoberta em nuvem.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Uma representação da JSON contendo os detalhes do item da fila a ser executado.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Uma representação JSON dos campos para esta integração.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Uma representação JSON dos testes individuais e seus resultados em todos os dispositivos que esta linha de base tem sido contra.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Uma representação da JSON dos testes que compõem esta política.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Uma LAN pode ser conectada a uma WAN usando um roteador.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Uma rede de área metropolitana (MAN) é uma grande rede de computadores que geralmente abrange uma cidade ou um grande campus.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Seed Discovery usa um IP inicial para recuperar os IPs de qualquer outro dispositivo que conheça, adiciona esses IPs à lista e verifica aqueles - novamente pedindo por qualquer IPs que esses dispositivos adicionais saibam. Enxaguar e repetir. Ele é inteligente o suficiente para saber se ele já digitalizou um determinado IP em sua execução e descarta qualquer já digitalizado (ou mesmo na lista para ser digitalizado).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Uma descoberta da Subnet irá analisar os IPs fornecidos.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Uma URL fornecida ao agente que irá então baixar o arquivo e armazená-lo no disco local.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Um URL para um arquivo para baixar.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Uma rede de backbone é parte de uma infraestrutura de rede de computadores que fornece um caminho para a troca de informações entre diferentes LANs ou sub-redes. Uma espinha dorsal pode unir diversas redes dentro do mesmo prédio, através de diferentes edifícios, ou sobre uma ampla área.<br/><br/>Por exemplo, uma grande empresa pode implementar uma rede de backbone para conectar departamentos que estão localizados ao redor do mundo. O equipamento que une as redes departamentais constitui a espinha dorsal da rede. Ao projetar uma espinha dorsal da rede, o desempenho da rede e o congestionamento da rede são fatores críticos para levar em conta. Normalmente, a capacidade da rede é maior que a das redes individuais conectadas a ela.<br/><br/>Outro exemplo de uma rede de coluna vertebral é a espinha dorsal da Internet, que é o conjunto de redes de ampla área (WANs) e roteadores centrais que ligam todas as redes conectadas à Internet.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Um campo calculado que exibe o número de vezes que este software foi encontrado nos computadores da Org selecionada (e seus descendentes se configurados).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Uma rede de área do campus (CAN) é composta de uma interconexão de LANs dentro de uma área geográfica limitada. Os equipamentos de rede (switches, roteadores) e mídia de transmissão (fibra óptica, planta de cobre, cabeamento Cat5, etc.) são quase inteiramente propriedade do inquilino do campus / proprietário (uma empresa, universidade, governo, etc.).<br/><br/>Por exemplo, uma rede universitária do campus provavelmente ligará uma variedade de edifícios do campus para conectar faculdades acadêmicas ou departamentos, a biblioteca e residências estudantis.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Uma porta fechada é acessível (recebe e responde aos pacotes de sonda Nmap), mas não há nenhum aplicativo ouvindo. Eles podem ser úteis em mostrar que um host está em um endereço IP (descoberta do host, ou digitalização de ping), e como parte da detecção de SO. Como as portas fechadas são acessíveis, talvez valha a pena escanear mais tarde, caso se abra. Os administradores podem querer considerar bloquear tais portas com um firewall. Então eles apareceriam no estado filtrado, discutidos a seguir.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Um colecionador está no modo Colecionador ou Sozinho.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Uma lista separada de CVEs aplicáveis.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Uma lista separada de valores, um dos quais pode ser selecionado.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Um comando para correr. Quando o agente está baseado no Windows, este comando é executado de dentro do agente Powershell.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Um painel é composto de três colunas e duas fileiras do que chamamos <i>widgets</i>. Um widget é muito semelhante a um resumo, só que levamos o conceito sumário um pouco mais longe. Widgets são criados de forma simples usando um par de caixas ou você pode escolher usar seu próprio SQL para personalização completa.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Uma porta filtrada é considerada aberta (e ativará a detecção do dispositivo).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Uma rede de área global (GAN) é uma rede usada para apoiar dispositivos móveis em um número arbitrário de LANs sem fio, áreas de cobertura por satélite, etc. O principal desafio nas comunicações móveis é distribuir comunicações de usuários de uma área de cobertura local para outra. No Projeto 802, isto envolve uma sucessão de LANs terrestres sem fio.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Uma rede de home area (HAN) é uma LAN residencial usada para comunicação entre dispositivos digitais normalmente implantados em casa, geralmente um pequeno número de computadores pessoais e acessórios, como impressoras e dispositivos de computação móvel. Uma função importante é o compartilhamento do acesso à Internet, muitas vezes um serviço de banda larga através de uma TV a cabo ou linha de assinante digital (DSL) fornecedor.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Uma lista de portas TCP personalizadas para escanear (22 é SSH, 135 é WMI, 62078 é sincronização para iPhone).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Uma lista de portas UDP personalizadas para escanear (161 é SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Uma rede de área local (LAN) é uma rede que conecta computadores e dispositivos em uma área geográfica limitada, como uma casa, escola, prédio de escritórios, ou um grupo de edifícios bem posicionados. Cada computador ou dispositivo na rede é um nó. LANs com fio são baseadas na tecnologia Ethernet. Novos padrões como ITU-T G.hn também fornecem uma forma de criar uma LAN com fio usando fiação existente, como cabos coaxiais, linhas telefônicas e linhas de energia.<br/><br/>As características definidoras de uma LAN, em contraste com uma ampla rede de área (WAN), incluem taxas de transferência de dados mais elevadas, faixa geográfica limitada, e falta de confiança em linhas alugadas para fornecer conectividade. Ethernet atual ou outras tecnologias IEEE 802.3LAN operam a taxas de transferência de dados de até 100 Gbit/s, padronizadas pela IEEE em 2010. Atualmente, 400 Gbits. A Ethernet está sendo desenvolvida.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Um local é um endereço físico que pode ter dispositivos associados a ele. Você pode atribuir coordenadas e se houver dispositivos atribuídos, a localização aparecerá no mapa quando você tiver uma licença da Open-AudIT Enterprise.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Um nome de localização ajudará a encontrar esses dispositivos no futuro.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Um número menor significa que será aplicado antes de outras regras.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Um número menor significa que será aplicado antes de outras regras. O peso padrão é de 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Um novo usuário entrou na Open-AudIT e foi autenticado e autorizado pela LDAP Sever. Esse usuário foi criado em Open-AudIT e conectado. Sucesso.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Um pacote é um pedaço de softare instalado. Um pacote tem um tipo - antivírus, aprovado, backup, banido, nuvem, firewall, ignorado, licença ou outro.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Uma senha (armazenada como hash) que permite o logon ao usar a autenticação do aplicativo.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Uma pessoa tem uma conta no aplicativo Open-AudIT. Sua conta de usuário tem uma lista de papéis e organizações associadas. Os papéis que o usuário tem determinam o que pode fazer. As organizações que um usuário tem determina quais itens podem agir.<br/><br/>Quando um usuário solicita para executar uma operação (criar, ler, atualizar, excluir) em um item de coleção, as funções são consultadas para ver se eles são autorizados a executar essa ação, então as orgs são consultadas para determinar se o item de coleção pertence a uma org que o usuário tem permissão para agir.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Uma rede de área pessoal (PAN) é uma rede de computadores usada para comunicação entre computadores e diferentes dispositivos tecnológicos de informação perto de uma pessoa. Alguns exemplos de dispositivos que são usados em um PAN são computadores pessoais, impressoras, faxes, telefones, PDAs, scanners e até consoles de videogame. Um PAN pode incluir dispositivos com fio e sem fio. O alcance de um PAN normalmente se estende a 10 metros. Um PAN com fio geralmente é construído com conexões USB e FireWire enquanto tecnologias como Bluetooth e comunicação infravermelha normalmente formam um PAN sem fio.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Uma consulta é essencialmente uma declaração SQL. Esta declaração é executada contra o banco de dados com a adição automática do limite, filtrado para aplicar apenas aos itens solicitados e apenas os itens que o usuário tem permissão para ver. Uma consulta pode ser criada usando o menu -> Gerenciar -> Consultas -> Criar Consultas. Consultas contêm uma org_id e, portanto, são restritas aos usuários apropriados. Um usuário deve ter a função org_admin ou repórter(es) para criar, atualizar ou excluir uma consulta. Todos os usuários podem executar uma consulta. Uma consulta tem um atributo de nome usado para o item do menu, bem como um atributo de categoria de menu. Isso diz à GUI do Open-Audit em que submenu colocar a consulta. Há também o menu que deve ser definido para <i>Sim.</i> para permitir a consulta na GUI (<i>n</i> para evitar que a consulta apareça. A consulta ainda seria executada se chamado usando o seu <code>id</code>, independentemente do menu mostra valor.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Um rack é uma coleção de dispositivos que são atribuídos uma posição e altura dentro do rack. Um dispositivo pode ter uma foto associada a ela. Um rack é colocado em uma fileira. Criamos um sistema muito granular para posicionamento de racks, que é o seguinte. No nível superior (como sempre) está a Organização (Org). Uma Org pode ter vários locais (como sempre foi o caso). Com a adição do recurso Racks, uma localização agora pode conter um ou mais edifícios. Um prédio pode conter um ou mais andares. Um andar pode conter um ou mais quartos. Um quarto pode conter uma ou mais fileiras. Isso parece muito trabalho, mas padrões são criados para você. Crie um novo local e os subcomponentes serão criados automaticamente para você. Se precisar de mais itens (edifícios, quartos, etc.) pode adicioná-los como quiser. Um rack também pode ser parte de um <i>pod</i> De prateleiras. O atributo pod funciona como uma etiqueta, ao invés de um modelo de herança hierárquica como por edifícios, pisos, etc.<br/><br/>Racks são um recurso disponível para clientes licenciados da Open-AudIT Enterprise.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Um domínio de roteamento ou espaço de endereço onde os endereços IP e MAC são únicos.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Um arquivo cron para Linux está abaixo. Isso deve ser colocado';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Uma zona de segurança é um domínio administrativo ou político dentro do Domínio da Rede.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Uma descoberta de sementes é outro tipo de descoberta, onde você fornece o IP de um único <i>semente</i> Dispositivo. Este dispositivo é auditado, e quaisquer IPs que ele saiba são adicionados à lista de IPs a serem auditados. Então, esses dispositivos são auditados e todos os IPs que eles sabem também são adicionados à lista de IPs para auditoria. Este processo continua dentro dos parâmetros configurados pelo usuário.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Uma breve descrição do registro.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Uma rede de área de armazenamento (SAN) é uma rede dedicada que fornece acesso ao armazenamento de dados consolidado, nível de bloco. SANs são usados principalmente para fazer dispositivos de armazenamento, tais como matrizes de disco, bibliotecas de fita e jukeboxes ópticos, acessíveis aos servidores para que os dispositivos pareçam dispositivos localmente ligados ao sistema operacional. Um SAN normalmente tem sua própria rede de dispositivos de armazenamento que geralmente não são acessíveis através da rede local por outros dispositivos. O custo e a complexidade dos SANs caíram no início dos anos 2000 para níveis que permitem uma adoção mais ampla em ambientes empresariais e de pequeno a médio porte.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Uma corda que combina com a <code>software.name</code> Atributo. Você pode usar o padrão SQL Wildcard de porcentagem (%) para combinar um ou mais caracteres.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Um sistema estruturado para gerenciar informações sensíveis.';

$GLOBALS["lang"]['A timestamp.'] = 'Um timetamp.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Um usuário tem uma Org primária, bem como uma lista de Orgs que podem acessar. Um usuário combina isso com uma lista de papéis atribuídos que definem quais ações podem tomar sobre os itens atribuídos aos orgs a que têm acesso. A combinação de usuários <i>orgs</i> e <i>papéis</i> Defina o que eles podem e não podem fazer dentro do Open-AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Um usuário terá uma lista de organizações associadas (orgs). Cada org que o usuário tem permitirá que eles ajam sobre os itens dentro dessa org como por seu papel.<br/><br/>Todas as orgs exceto as orgs padrão têm um pai. Pense em um Org Chart. Se um usuário tem permissão de um Org, eles também têm permissão de qualquer descendente daquele Org.<br/><br/>Os usuários também têm permissão em uma org para ver os itens de orgs pais para certas coleções. São: painéis, opções, campos, arquivos, grupos, consultas, relatórios, papéis, regras, scripts, resumos, widgets.<br/><br/>Não se esqueça que você tem controle granular sobre o que os usuários podem ver e fazer usando papéis na Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Um usuário terá uma lista de organizações associadas (orgs). Cada org que o usuário tem permitirá que eles ajam sobre os itens dentro dessa org como por seu papel.<br/><br/>Todas as orgs exceto as orgs padrão têm um pai. Pense em um Org Chart. Se um usuário tem permissão de um Org, eles também têm permissão de qualquer descendente daquele Org.<br/><br/>Também permitimos que um usuário com permissão em uma org infantil veja os itens de orgs pais para certas coleções. São: painéis, opções, campos, arquivos, grupos, consultas, papéis, regras, scripts, resumos, widgets.<br/><br/>Não esqueça que você tem controle granular sobre o que os usuários podem ver e fazer usando';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Uma rede privada virtual (VPN) é uma rede sobreposta em que algumas das ligações entre nós são transportadas por conexões abertas ou circuitos virtuais em alguma rede maior (por exemplo, a Internet) em vez de por fios físicos. Os protocolos da camada de ligação de dados da rede virtual são ditos ser túnel através da rede maior quando este é o caso. Um aplicativo comum é comunicação segura através da Internet pública, mas uma VPN não precisa ter recursos de segurança explícitos, como autenticação ou criptografia de conteúdo. VPNs, por exemplo, podem ser usadas para separar o tráfego de diferentes comunidades de usuários em uma rede subjacente com fortes recursos de segurança.<br/><br/>VPN pode ter melhor desempenho, ou pode ter um acordo de nível de serviço definido (SLA) entre o cliente VPN e o provedor de serviço VPN. Geralmente, uma VPN tem uma topologia mais complexa que ponto-a-ponto.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Uma vulnerabilidade que afeta a disponibilidade pode permitir que os atacantes interrompam os serviços, sistemas de choque ou causem negação de serviço (DoS) (Nenhum, Baixo, Alto).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Uma vulnerabilidade que afeta a confidencialidade pode permitir que os atacantes leiam dados confidenciais, como informações pessoais, credenciais ou dados de negócios proprietários (Nenhum, Baixo, Alto).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Uma vulnerabilidade que afeta a integridade pode permitir que os atacantes modifiquem dados, injetem código malicioso ou alterem as configurações do sistema.';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Uma vulnerabilidade pode ser editada e nomes de pacotes mais específicos desde que os dados de enriquecimento sejam insuficientes ou o SQL gerado não esteja correto.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Um item de vulnerabilidade em Open-AudIT pode ser considerado essencialmente uma consulta contra seu banco de dados para determinar sua exposição potencial a um dado relatório CVE. Uma vulnerabilidade é composta do relatório CVE, junto com dados de enriquecimento da FirstWave. Estes dois itens são combinados para produzir uma consulta adequada que é automaticamente baixado da FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Uma ampla rede de área (WAN) é uma rede de computadores que cobre uma grande área geográfica, como uma cidade, país, ou abrange distâncias intercontinentais. Uma WAN usa um canal de comunicação que combina muitos tipos de mídia, como linhas telefônicas, cabos e ondas de ar. Uma WAN muitas vezes faz uso de instalações de transmissão fornecidas por transportadores comuns, como companhias telefônicas. Tecnologias de WAN geralmente funcionam nas três camadas inferiores do modelo de referência da OSI: a camada física, a camada de ligação de dados e a camada de rede.';

$GLOBALS["lang"]['AD Group'] = 'Grupo AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, RDIS, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Todos os IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'Documentação da API';

$GLOBALS["lang"]['API Key required.'] = 'Chave API necessária.';

$GLOBALS["lang"]['API Result'] = 'Resultado da API';

$GLOBALS["lang"]['About'] = 'Sobre';

$GLOBALS["lang"]['Above are the only required items.'] = 'Acima estão os únicos itens necessários.';

$GLOBALS["lang"]['Accept'] = 'Aceite.';

$GLOBALS["lang"]['Access Model'] = 'Modelo de acesso';

$GLOBALS["lang"]['access_point'] = 'Ponto de Acesso';

$GLOBALS["lang"]['Access Point'] = 'Ponto de Acesso';

$GLOBALS["lang"]['access_token'] = 'Acesse o Token';

$GLOBALS["lang"]['Access Token'] = 'Acesse o Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Acesso ao administrador e RPC usa o protocolo SMB2.';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Ack Date';

$GLOBALS["lang"]['Ack Date'] = 'Ack Date';

$GLOBALS["lang"]['ack_time'] = 'Hora da Ack';

$GLOBALS["lang"]['Ack Time'] = 'Hora da Ack';

$GLOBALS["lang"]['action'] = 'Ação.';

$GLOBALS["lang"]['Action'] = 'Ação.';

$GLOBALS["lang"]['action_audit'] = 'Audição de Ação';

$GLOBALS["lang"]['Action Audit'] = 'Audição de Ação';

$GLOBALS["lang"]['action_command'] = 'Comando de Ação';

$GLOBALS["lang"]['Action Command'] = 'Comando de Ação';

$GLOBALS["lang"]['action_date'] = 'Data de Ação';

$GLOBALS["lang"]['Action Date'] = 'Data de Ação';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Dispositivos de ação designados para localização';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Dispositivos de ação designados para localização';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Dispositivos de ação designados para Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Dispositivos de ação designados para Org';

$GLOBALS["lang"]['action_download'] = 'Action Download';

$GLOBALS["lang"]['Action Download'] = 'Action Download';

$GLOBALS["lang"]['action_uninstall'] = 'Ação Desinstalar';

$GLOBALS["lang"]['Action Uninstall'] = 'Ação Desinstalar';

$GLOBALS["lang"]['actioned'] = 'Acionado.';

$GLOBALS["lang"]['Actioned'] = 'Acionado.';

$GLOBALS["lang"]['actioned_by'] = 'Agitado por';

$GLOBALS["lang"]['Actioned By'] = 'Agitado por';

$GLOBALS["lang"]['actioned_date'] = 'Data Acionada';

$GLOBALS["lang"]['Actioned Date'] = 'Data Acionada';

$GLOBALS["lang"]['actions'] = 'Ações';

$GLOBALS["lang"]['Actions'] = 'Ações';

$GLOBALS["lang"]['Activate'] = 'Ativar';

$GLOBALS["lang"]['Activate Free License'] = 'Ativar Licença Livre';

$GLOBALS["lang"]['Activate Key'] = 'Ativar chave';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Ative uma licença gratuita da Enterprise.';

$GLOBALS["lang"]['Active'] = 'Ativo.';

$GLOBALS["lang"]['Active / Active'] = 'Activo / Activo';

$GLOBALS["lang"]['Active / Passive'] = 'Ativo / passivo';

$GLOBALS["lang"]['Active Directory'] = 'Diretório Activo';

$GLOBALS["lang"]['Active Directory Domain'] = 'Domínio de Diretório Ativo';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Servidor de diretório ativo';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Diretório Activo e OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Domínio de Anúncios';

$GLOBALS["lang"]['Ad Domain'] = 'Domínio de Anúncios';

$GLOBALS["lang"]['ad_group'] = 'Grupo de Anúncios';

$GLOBALS["lang"]['Ad Group'] = 'Grupo de Anúncios';

$GLOBALS["lang"]['ad_server'] = 'Servidor de anúncios';

$GLOBALS["lang"]['Ad Server'] = 'Servidor de anúncios';

$GLOBALS["lang"]['Add'] = 'Adicionar';

$GLOBALS["lang"]['Add Credentials'] = 'Adicionar credenciais';

$GLOBALS["lang"]['Add Device'] = 'Adicionar dispositivo';

$GLOBALS["lang"]['Add Device to Application'] = 'Adicionar dispositivo à aplicação';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Adicionar dispositivo ao cluster';

$GLOBALS["lang"]['Add Exception'] = 'Adicionar exceção';

$GLOBALS["lang"]['Add Field'] = 'Adicionar campo';

$GLOBALS["lang"]['Add If'] = 'Adicionar se';

$GLOBALS["lang"]['Add Policies from Device'] = 'Adicione políticas do dispositivo.';

$GLOBALS["lang"]['Add Policy'] = 'Adicionar Política';

$GLOBALS["lang"]['Add Then'] = 'Adicione então.';

$GLOBALS["lang"]['Add Your Credentials'] = 'Adicione suas credenciais';

$GLOBALS["lang"]['Add image'] = 'Adicionar imagem';

$GLOBALS["lang"]['additional_items'] = 'Itens Adicionais';

$GLOBALS["lang"]['Additional Items'] = 'Itens Adicionais';

$GLOBALS["lang"]['address'] = 'Endereço';

$GLOBALS["lang"]['Address'] = 'Endereço';

$GLOBALS["lang"]['Address any nonconformities'] = 'Endereçar qualquer inconformidade';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Endereçar resultados de auditoria e ações corretivas';

$GLOBALS["lang"]['Admin'] = 'Administrador.';

$GLOBALS["lang"]['admin_status'] = 'Status do administrador';

$GLOBALS["lang"]['Admin Status'] = 'Status do administrador';

$GLOBALS["lang"]['advanced'] = 'Avançado.';

$GLOBALS["lang"]['Advanced'] = 'Avançado.';

$GLOBALS["lang"]['Afghanistan'] = 'Afeganistão';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Depois que uma integração for criada, quando você ver os detalhes de uma integração você vai notar um campo chamado Debug. Isso está definido como não por padrão. Mudá-lo para sim fornece registro extra quando uma integração é executada. Depurar não deve ser deixado como sim. Isso é porque a saída de depuração conterá tudo recuperado de sistemas externos, incluindo itens como WMI e credenciais SNMP. A opção de depuração só deve ser usada quando um problema ocorreu e você deseja investigar mais fundo para ver se pode determinar o porquê.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Depois de completar o acima, desinstalar o agente.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agente? Descoberta? Credenciais?';

$GLOBALS["lang"]['agents'] = 'Agentes.';

$GLOBALS["lang"]['Agents'] = 'Agentes.';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Entradas de agentes podem ser criadas que especificam uma duração, uma rede e um sistema operacional. Se todos os testes corresponderem, o servidor pede ao agente para executar ações. Se algum teste não está definido, ele está excluído do <i>Todos devem corresponder.</i> Exigência.<br/><br/>Você pode criar vários agentes e ter o servidor checando uma ou todas as entradas do agente. Você poderia (por exemplo) especificar um agente que diz <i>Se o IP do agente estiver nessa subrede, defina a localização do dispositivo.</i>.<br/><br/>Outro exemplo pode ser não fazer uma auditoria, mas baixar um script e executá-lo. Se o agente é instalado com direitos de administração, agora você pode gerenciar suas máquinas sem abrir <strong>qualquer</strong> Portos dele para o mundo.<p>Habilitar agentes avançados significa que um agente pode ser instruído a baixar qualquer arquivo e executar qualquer comando. <strong>ATENÇÃO</strong>: Isso vem com riscos de segurança. Esta configuração vai <strong>Apenas</strong> função ao executar Open-AudIT usando HTTPS e um certificado válido (certificate Authority fornecido) para </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agressivo.';

$GLOBALS["lang"]['Aland Islands'] = 'Ilhas Aland';

$GLOBALS["lang"]['Albania'] = 'Albânia';

$GLOBALS["lang"]['Albanian'] = 'Albanês';

$GLOBALS["lang"]['alert_style'] = 'Alerta Estilo';

$GLOBALS["lang"]['Alert Style'] = 'Alerta Estilo';

$GLOBALS["lang"]['Algeria'] = 'Argélia';

$GLOBALS["lang"]['algorithm'] = 'Algoritmo';

$GLOBALS["lang"]['Algorithm'] = 'Algoritmo';

$GLOBALS["lang"]['alias'] = 'Apelido';

$GLOBALS["lang"]['Alias'] = 'Apelido';

$GLOBALS["lang"]['All'] = 'Todos';

$GLOBALS["lang"]['All IPs'] = 'Todos os IPs';

$GLOBALS["lang"]['All Policies'] = 'Todas as Políticas';

$GLOBALS["lang"]['All Queued Items'] = 'Todos os itens em fila';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Todas as coleções usam o formato.';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Todas as sub-mesas de dispositivos contêm algumas colunas importantes.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Todos dispositivos com um tipo de computador.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Todos os dispositivos com um tipo de computador ou roteador.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Todos os dispositivos sem um tipo de interruptor e impressora.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Todos os dispositivos sem um tipo de interruptor e impressora. Essencialmente o mesmo que a consulta acima.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Todas as opções de descoberta regulares também estão disponíveis para uso em Descobertas de Sementes de Dispositivo.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Todas as tarefas podem ser criadas da mesma forma no Windows e Linux. Tarefas usam o método CRON para agendar execução.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Juntamente com este pedido de informação, enviamos de volta aos pontos de dados da FirstWave que nos dará informações muito necessárias sobre o uso de recursos e sua instalação.';

$GLOBALS["lang"]['Also can be created from the'] = 'Também pode ser criado a partir do';

$GLOBALS["lang"]['Alternatives'] = 'Alternativas';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Campos';

$GLOBALS["lang"]['American Samoa'] = 'Samoa Americana';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Uma descoberta do Active Directory irá consultar o Active Directory para uma lista de redes e digitalizar os IPs associados como uma descoberta regular da Subnet.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Um Org (organização) é o dono da maioria dos itens em coleções dentro Open-AudIT. Com exceção de itens globais como <i>configuração</i>A maioria dos itens é atribuída a uma Org. Um usuário tem acesso a esses itens em uma coleção, que abaixo para uma Org onde o usuário tem permissão.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Uma aplicação está aceitando conexões TCP, datagramas UDP ou associações SCTP nesta porta. Encontrar isso é muitas vezes o objetivo principal da varredura de portas. As pessoas de segurança sabem que cada porto aberto é uma avenida para ataque. Atacadores e pesquisadores querem explorar as portas abertas, enquanto administradores tentam fechá-las ou protegê-las com firewalls sem impedir usuários legítimos. Portas abertas também são interessantes para escaneamentos de segurança porque mostram serviços disponíveis para uso na rede.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Uma variedade de <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Uma variedade de <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Um conjunto de objetos representando links externos para mais informações.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Um palpite da identidade e tipo de dispositivo.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Um documento criptografado JSON contendo os atributos necessários dependendo do <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Uma rede privada empresarial é uma rede que uma única organização constrói para interligar seus escritórios (por exemplo, locais de produção, sedes, escritórios remotos, lojas) para que possam compartilhar recursos de computador.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Uma entrada pode ser criada usando a interface web se o usuário atual tiver um papel que contenha';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Um exemplo de corpo JSON POST está abaixo. Isso deve ser anexado ao item "dados".';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Um exemplo de widget SQL mostrando dispositivos contados por localização.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Um usuário existente do Open-AudIT foi autenticado e autorizado pelo servidor LDAP. Sucesso.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Uma indicação do nível de serviço exigido por este site.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Um campo interno que indica se a descoberta foi concluída.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Uma porta aberta é considerada aberta (e ativará a detecção do dispositivo).<br/>Anteriormente em Open-Aud... A TI considerou uma resposta Nmap de';

$GLOBALS["lang"]['An optional GeoCode'] = 'Um GeoCode opcional';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Uma senha opcional para usar sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Analisado';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'E finalmente, clique em Enviar para executar esta descoberta.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'E se algo der errado?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'E finalmente clique <i>Submeta-se.</i> para criar seu método Open-AudIT Auth para a Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'E, por último, não é uma questão de segurança. Mais paz de espírito. As estruturas de dados estão abertas e documentadas. Você pode vê-los.';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'E fornecer um nome - nós humildemente recomendamos Open-AudIT, mas você pode chamá-lo como quiser. Certifique-se da opção para <i>Integre qualquer outra aplicação que não encontre na galeria.</i> é selecionado. E então clique <i>Criar<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'E muito mais.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Controles Anexo A';

$GLOBALS["lang"]['Antarctica'] = 'Antártica';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Pacotes AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antígua e Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivírus.';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Qualquer porto TCP (comma separado, sem espaços) que você deseja excluir desta descoberta. Só disponível quando usar Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Qualquer porta UDP (comma separado, sem espaços) que você deseja excluir desta descoberta. Só disponível quando usar Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Qualquer documentação adicional que precisar.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Quaisquer notas adicionais que queira fazer.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Qualquer atributo seguido de um * indica que dados CVSS menores que v4 foram usados para completar este campo. Por padrão, tentamos usar campos v4, no entanto, se eles não forem povoados, vamos voltar para a(s) versão(s) anterior(s) para atributos.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Qualquer dispositivo será atribuído a esta Org quando eles executarem seu script de auditoria (se definido).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Qualquer dispositivo será atribuído a esta Org quando eles executarem seu script de auditoria (se definido). Links para <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Qualquer dispositivo descoberto será atribuído a este local se estiver pronto. Links para <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Qualquer dispositivo descoberto será atribuído a este local quando executarem seu script de auditoria (se definido).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Qualquer dispositivo descoberto será atribuído a este local quando executarem seu script de auditoria (se definido). Links para <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Qualquer dispositivo descoberto será atribuído a esta Org se estiver pronto. Se não estiverem prontos, eles serão designados para o <code>org_id</code> desta descoberta. Links para <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Qualquer arquivo encontrado desta forma é armazenado no <i>executável</i> tabela como por qualquer outro componente do dispositivo.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Qualquer filtro necessário. Quando tipo = tráfego, isso representa o ícone de fonte incrível.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Qualquer porta TCP específica que você deseja testar (comma separado, sem espaços).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Qualquer porta UDP específica que você deseja testar (comma separado, sem espaços).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Qualquer usuário carregado imagens são colocadas aqui.';

$GLOBALS["lang"]['Application'] = 'Aplicação';

$GLOBALS["lang"]['Application Definitions'] = 'Definição da Aplicação';

$GLOBALS["lang"]['application_id'] = 'ID do aplicativo';

$GLOBALS["lang"]['Application ID'] = 'ID do aplicativo';

$GLOBALS["lang"]['Application Licenses'] = 'Licenças de inscrição';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Aplicação, sistema operacional ou hardware.';

$GLOBALS["lang"]['applications'] = 'Aplicações';

$GLOBALS["lang"]['Applications'] = 'Aplicações';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'As aplicações são uma característica única da Enterprise.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'As aplicações estão sendo introduzidas em Open-AudIT 2.2 com o objetivo de expandir o conceito enquanto o desenvolvimento é feito.';

$GLOBALS["lang"]['applied'] = 'Aplicado';

$GLOBALS["lang"]['Applied'] = 'Aplicado';

$GLOBALS["lang"]['Approved'] = 'Aprovado.';

$GLOBALS["lang"]['Approved Packages'] = 'Pacotes Aprovados';

$GLOBALS["lang"]['April'] = 'Abril';

$GLOBALS["lang"]['Arabic'] = 'Árabe.';

$GLOBALS["lang"]['architecture'] = 'Arquitetura';

$GLOBALS["lang"]['Architecture'] = 'Arquitetura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Tem certeza que quer apagar esse item de entrada?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Tem certeza que quer apagar esse item de saída?';

$GLOBALS["lang"]['Are you sure?'] = 'Tem certeza?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Tem certeza? Isso removerá todas as entradas da fila e impedirá que os IPs restantes sejam descobertos.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Tem certeza? Isso irá redefinir a contagem de processamento da fila e pode causar carga no servidor.';

$GLOBALS["lang"]['area'] = 'Área';

$GLOBALS["lang"]['Area'] = 'Área';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Arménia';

$GLOBALS["lang"]['arp'] = 'Arp.';

$GLOBALS["lang"]['Arp'] = 'Arp.';

$GLOBALS["lang"]['Aruba'] = 'Aruba.';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Como um lembrete de como as autorizações funcionam em Open-AudIT, veja';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Como resultado, nós <strong>Deve</strong> Tem o compartilhamento administrativo disponível para o usuário de credenciais de descoberta. Por favor, verifique o alvo que a máquina Windows fornece. <i>escrever</i> Acesso para o usuário de credenciais de descoberta.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Como mencionado acima, os desenvolvedores não falam todas as línguas de tradução oferecidas. Isso significa que não podemos revisar com precisão, o texto traduzido. Tentamos fazer uma revisão superficial. Se vir algo que não está traduzido corretamente, pode mudar você mesmo. Edite o arquivo de linguagem apropriado (como abaixo) e encontre o texto a ser alterado. Talvez não exista e você precisa adicioná-lo. Basta mudar o texto, salvar o arquivo e atualizar sua página. Não há necessidade de reiniciar nenhum serviço/demônio para que ele faça efeito. Talvez precise atualizar seu navegador.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'De acordo com as referências do OpenSCAP... <i>Não tente implementar nenhuma das configurações neste benchmark sem primeiro testá-las em um ambiente não operacional. Os criadores deste benchmark não assumem qualquer responsabilidade por seu uso por outras partes, e não faz garantias, expressas ou implícitas, sobre sua qualidade, confiabilidade, ou qualquer outra característica.</i><br/><br/>Sério, não comece cegamente. <i>Consertando</i> Problemas revelados após executar uma referência sem primeiro testar completamente em um ambiente não-produção, idêntico.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'De acordo com os atributos para ambientes de dispositivos. Produção, Treinamento, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Como o script de auditoria usa Bash, você pode usar o wildcard de * quando você está definindo diretórios e exclusões.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Como sempre, vá ao menu → Gerenciar → Integração → Criar Integração. Como acima, se você está rodando em Linux e você tem NMIS no mesmo servidor, você não precisa fazer nada além de clicar <i>Submeta-se.</i>. Não posso facilitar as coisas.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Ao executarmos Discoveries e coletarmos os resultados do dispositivo, nós preenchemos a lista de redes. O recurso do Beato Subnets usa esta lista de redes para apenas aceitar dados de dispositivos nessas redes.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Como você tem Colecionadores registrados, por favor, escolha onde executar esta descoberta.';

$GLOBALS["lang"]['Ask me later'] = 'Pergunte-me depois.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Peça ajuda à Comunidade ou contribua com respostas para os outros.';

$GLOBALS["lang"]['aspect_ratio'] = 'Razão de Aspectos';

$GLOBALS["lang"]['Aspect Ratio'] = 'Razão de Aspectos';

$GLOBALS["lang"]['Asset ID'] = 'ID do Activo';

$GLOBALS["lang"]['asset_ident'] = 'Ident do Activo';

$GLOBALS["lang"]['Asset Ident'] = 'Ident do Activo';

$GLOBALS["lang"]['asset_number'] = 'Número de ativos';

$GLOBALS["lang"]['Asset Number'] = 'Número de ativos';

$GLOBALS["lang"]['asset_tag'] = 'Marca de Activo';

$GLOBALS["lang"]['Asset Tag'] = 'Marca de Activo';

$GLOBALS["lang"]['Assign Device to Application'] = 'Atribuir dispositivo para aplicação';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Atribuir dispositivo para cluster';

$GLOBALS["lang"]['Assign Device to Location'] = 'Atribuir dispositivo para localização';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Atribuir Dispositivo à Organização';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Atribuir Dispositivos para Localização';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Atribuir Dispositivos à Organização';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Atribua um gerente ou equipe do ISMS';

$GLOBALS["lang"]['Assign an Operator'] = 'Atribuir um Operador';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Atribuir qualquer dispositivo auditado a esta Org. Deixe em branco para deixar o dispositivo em Org atualmente atribuído (ou para definir padrão).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Atribuir o dispositivo para uma localização';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Atribua o dispositivo a uma Org.';

$GLOBALS["lang"]['Assigned To'] = 'Atribuído';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Atribuindo dispositivos descobertos';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'No momento podemos usar netstat_ports, software e usuários.';

$GLOBALS["lang"]['attached_device_id'] = 'ID do dispositivo anexado';

$GLOBALS["lang"]['Attached Device ID'] = 'ID do dispositivo anexado';

$GLOBALS["lang"]['attached_to'] = 'Anexado a';

$GLOBALS["lang"]['Attached To'] = 'Anexado a';

$GLOBALS["lang"]['attachment'] = 'Anexo';

$GLOBALS["lang"]['Attachment'] = 'Anexo';

$GLOBALS["lang"]['attachments'] = 'Anexos';

$GLOBALS["lang"]['Attachments'] = 'Anexos';

$GLOBALS["lang"]['attack_complexity'] = 'Complexidade de ataque';

$GLOBALS["lang"]['Attack Complexity'] = 'Complexidade de ataque';

$GLOBALS["lang"]['attack_requirements'] = 'Exigências de ataque';

$GLOBALS["lang"]['Attack Requirements'] = 'Exigências de ataque';

$GLOBALS["lang"]['attack_vector'] = 'Ataque Vetor!';

$GLOBALS["lang"]['Attack Vector'] = 'Ataque Vetor!';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Tente rastrear o dispositivo se não estivermos auditando o host local.';

$GLOBALS["lang"]['Attribute'] = 'Atributo';

$GLOBALS["lang"]['attributes'] = 'Atributos';

$GLOBALS["lang"]['Attributes'] = 'Atributos';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Atributos são armazenados para o Open-AudIT usar para campos específicos, atualmente todos os campos são baseados nos dispositivos, locais, orgs e tabelas de consultas. Os atributos que você pode editar estão associados com as seguintes colunas: Classe, Meio Ambiente, Estado e Tipo.';

$GLOBALS["lang"]['Audit'] = 'Audição';

$GLOBALS["lang"]['Audit AIX'] = 'Audição AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Audição DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Audição ESXI';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Diário de Auditoria';

$GLOBALS["lang"]['Audit Log'] = 'Diário de Auditoria';

$GLOBALS["lang"]['Audit Mount Point'] = 'Ponto de Montagem da Auditoria';

$GLOBALS["lang"]['Audit My PC'] = 'Audite meu PC.';

$GLOBALS["lang"]['Audit Netstat'] = 'Audit Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Audição OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Resultado da auditoria Entrada';

$GLOBALS["lang"]['Audit Software'] = 'Software de Auditoria';

$GLOBALS["lang"]['Audit Status'] = 'Situação da Auditoria';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audição Win32 Produto';

$GLOBALS["lang"]['Audit Windows'] = 'Janelas de auditoria';

$GLOBALS["lang"]['Audit the Device'] = 'Audite o dispositivo.';

$GLOBALS["lang"]['Audits'] = 'Audições';

$GLOBALS["lang"]['August'] = 'Agosto';

$GLOBALS["lang"]['Australia'] = 'Austrália';

$GLOBALS["lang"]['Austria'] = 'Áustria';

$GLOBALS["lang"]['Auth'] = 'Auth.';

$GLOBALS["lang"]['auth'] = 'Auth.';

$GLOBALS["lang"]['Auth Methods'] = 'Métodos de Auth';

$GLOBALS["lang"]['Authenticate only'] = 'Autenticar apenas';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Senha da Autenticação';

$GLOBALS["lang"]['Authentication Protocol'] = 'Protocolo de autenticação';

$GLOBALS["lang"]['authority_key_ident'] = 'ID da Chave da Autoridade';

$GLOBALS["lang"]['Authority Key Ident'] = 'ID da Chave da Autoridade';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto povoado pelo servidor Open-AudIT.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatável.';

$GLOBALS["lang"]['Automatable'] = 'Automatável.';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automaticamente povoado baseado no sistema operacional Colecionador.';

$GLOBALS["lang"]['availability'] = 'Disponibilidade';

$GLOBALS["lang"]['Availability'] = 'Disponibilidade';

$GLOBALS["lang"]['Available Benchmarks'] = 'Benchmarks disponíveis.';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Aguardo Análise';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaijão';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaijão.';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'Total BTU';

$GLOBALS["lang"]['Backbone network'] = 'Rede de espinha dorsal.';

$GLOBALS["lang"]['Backup'] = 'Reforço';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas...';

$GLOBALS["lang"]['Bahrain'] = 'Bahrein.';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh.';

$GLOBALS["lang"]['bank'] = 'Banco.';

$GLOBALS["lang"]['Bank'] = 'Banco.';

$GLOBALS["lang"]['Banned'] = 'Banido';

$GLOBALS["lang"]['Banned Packages'] = 'Pacotes banidos';

$GLOBALS["lang"]['bar_code'] = 'Código de barras';

$GLOBALS["lang"]['Bar Code'] = 'Código de barras';

$GLOBALS["lang"]['Barbados'] = 'Barbados.';

$GLOBALS["lang"]['Base DN'] = 'Base DN';

$GLOBALS["lang"]['base_score'] = 'Pontuação Base';

$GLOBALS["lang"]['Base Score'] = 'Pontuação Base';

$GLOBALS["lang"]['base_severity'] = 'Severidade Base';

$GLOBALS["lang"]['Base Severity'] = 'Severidade Base';

$GLOBALS["lang"]['based_on'] = 'Baseado em';

$GLOBALS["lang"]['Based On'] = 'Baseado em';

$GLOBALS["lang"]['baseline'] = 'Baseline';

$GLOBALS["lang"]['Baseline'] = 'Baseline';

$GLOBALS["lang"]['baseline_id'] = 'ID inicial';

$GLOBALS["lang"]['Baseline ID'] = 'ID inicial';

$GLOBALS["lang"]['baselines'] = 'Bases';

$GLOBALS["lang"]['Baselines'] = 'Bases';

$GLOBALS["lang"]['baselines_policies'] = 'Políticas de Baseline';

$GLOBALS["lang"]['Baselines Policies'] = 'Políticas de Baseline';

$GLOBALS["lang"]['Baselines Policy'] = 'Política de Bases';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Detalhes da Política de Baselines';

$GLOBALS["lang"]['baselines_results'] = 'Resultados das Bases';

$GLOBALS["lang"]['Baselines Results'] = 'Resultados das Bases';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Baselines podem comparar portas netstat, usuários e software.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'As linhas de base permitem combinar dados de auditoria com um conjunto de atributos que você definiu anteriormente (sua linha de base) para determinar a conformidade dos dispositivos.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Bases para comparação de dispositivos';

$GLOBALS["lang"]['Basic'] = 'Básico.';

$GLOBALS["lang"]['Basque'] = 'Basco.';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Porque tentamos ser o mais transparentes possível, aqui estão seus dados reais que enviamos.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Ser capaz de determinar quais máquinas são configuradas da mesma forma é uma parte importante da administração e auditoria de sistemas - e agora relatar sobre isso será feito simples e automatizado. Uma vez que você definir sua linha de base, ele automaticamente será executado contra um conjunto de dispositivos em um cronograma pré-determinado. A saída dessas linhas de base executadas estará disponível para visualização na web, importação para um sistema de terceiros ou mesmo como um relatório impresso.<br/><br/>Para fins de auditoria e gerenciamento, pode ser vantajoso para os dispositivos individuais de base contra um dispositivo fixo e conhecido. As linhas de base permitem combinar dados de auditoria com um conjunto de atributos que você definiu anteriormente (sua linha de base) para determinar a conformidade dos dispositivos.';

$GLOBALS["lang"]['Belarus'] = 'Bielorrússia';

$GLOBALS["lang"]['Belgium'] = 'Bélgica';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Abaixo está um exemplo do formato necessário.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Abaixo destas linhas estão as variáveis injetadas no script. Seguindo o nosso exemplo anterior, o script de auditoria Linux é povoado com nosso diretório assim';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Abaixo você pode ver um exemplo Org Chart. Se um usuário tem permissão para <i>Finanças A</i> Org, eles também têm permissão para os Orgs descendentes do Departamento A, B & C. Isso é independente da coleção solicitada.<br/><br/>Se a coleção solicitada permite ascendentes, então o usuário também terá acesso aos itens da Companhia #1 e da Org Padrão. Isso é para consultas, grupos, etc.<br/><br/>Nota - Um usuário pode ter acesso a uma consulta da Default Org, mas essa é a consulta em si não o resultado. O resultado só mostrará dispositivos que o usuário tem acesso aos dispositivos IE da Finance A e Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark.';

$GLOBALS["lang"]['benchmark_id'] = 'ID de Benchmark';

$GLOBALS["lang"]['Benchmark ID'] = 'ID de Benchmark';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Tarefas de Benchmark são criadas automaticamente quando uma referência é criada.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'A execução e o processamento da Benchmark podem levar muito tempo, daí a preferência de programá-los e não executá-los ad hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Benchmarks Excepções';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Benchmarks Excepções';

$GLOBALS["lang"]['benchmarks_log'] = 'Diário de Benchmarks';

$GLOBALS["lang"]['Benchmarks Log'] = 'Diário de Benchmarks';

$GLOBALS["lang"]['benchmarks_policies'] = 'Políticas de Benchmarks';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Políticas de Benchmarks';

$GLOBALS["lang"]['benchmarks_result'] = 'Benchmarks Resultado';

$GLOBALS["lang"]['Benchmarks Result'] = 'Benchmarks Resultado';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks são criados fornecendo um sistema operacional e Versão, combinado com um guia específico e uma lista de máquinas para executá-lo. Após a criação, os benchmarks são executados contra a lista de máquinas em um horário.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks para melhor configuração prática';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarks fornecem recomendações de segurança para seus computadores, usando as ferramentas e políticas do OpenSCAP.<p><i>Da página inicial do OpenSCAP:</i> No mundo em constante mudança da segurança do computador onde novas vulnerabilidades estão sendo descobertas e reparadas todos os dias, forçar a conformidade com a segurança deve ser um processo contínuo. Também precisa incluir uma forma de fazer ajustes nas políticas, assim como avaliação periódica e monitoramento de risco. O ecossistema OpenSCAP fornece ferramentas e políticas personalizáveis para uma implementação rápida, econômica e flexível desses processos.</p>';

$GLOBALS["lang"]['Benefits'] = 'Benefícios';

$GLOBALS["lang"]['Bengali'] = 'Bengali.';

$GLOBALS["lang"]['Benin'] = 'Benin.';

$GLOBALS["lang"]['Bermuda'] = 'Bermudas';

$GLOBALS["lang"]['best_practises'] = 'Melhores Práticas';

$GLOBALS["lang"]['Best Practises'] = 'Melhores Práticas';

$GLOBALS["lang"]['Bhutan'] = 'Butão.';

$GLOBALS["lang"]['bios'] = 'Bios.';

$GLOBALS["lang"]['Bios'] = 'Bios.';

$GLOBALS["lang"]['body'] = 'Corpo';

$GLOBALS["lang"]['Body'] = 'Corpo';

$GLOBALS["lang"]['Bolivia'] = 'Bolívia';

$GLOBALS["lang"]['Boolean'] = 'Booleano.';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = 'Dispositivo de inicialização';

$GLOBALS["lang"]['Boot Device'] = 'Dispositivo de inicialização';

$GLOBALS["lang"]['bootable'] = 'Bootable';

$GLOBALS["lang"]['Bootable'] = 'Bootable';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bósnia e Herzegovina';

$GLOBALS["lang"]['Both forms of'] = 'Ambas as formas de';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Ilha Bouvet (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasil';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Português Brasileiro';

$GLOBALS["lang"]['Breaking it Down'] = 'Quebrando';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Território Britânico do Oceano Índico (Arquipélago de Chagos)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Ilhas Virgens Britânicas';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Navegue pela árvore até Console Root Serviços de componentes -> Computadores -> Meu computador.<br/><br/>Clique com o botão direito. <i>Meu computador.</i> e selecionar propriedades<br/><br/>Selecione o <i>Propriedades Predefinidas</i> aba';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max.';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max.';

$GLOBALS["lang"]['btu_total'] = 'Btu Total';

$GLOBALS["lang"]['Btu Total'] = 'Btu Total';

$GLOBALS["lang"]['build_number'] = 'Número de construção';

$GLOBALS["lang"]['Build Number'] = 'Número de construção';

$GLOBALS["lang"]['build_number_full'] = 'Construir o Número Completo';

$GLOBALS["lang"]['Build Number Full'] = 'Construir o Número Completo';

$GLOBALS["lang"]['Building'] = 'Edifício';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Constrói confiança com clientes e parceiros';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgária';

$GLOBALS["lang"]['Bulgarian'] = 'Búlgaro';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Editar';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Formulário de Edição em Massa';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Atributos do dispositivo de edição em massa';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Seleções em massa não serão selecionadas depois de clicar na próxima página.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Requisitos de Negócios';

$GLOBALS["lang"]['Business Requirements'] = 'Requisitos de Negócios';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Mas eu só tenho máquinas para clientes do Windows disponíveis!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Mas eu não quero ter que mudar o arquivo de idioma toda vez que eu atualizar!';

$GLOBALS["lang"]['Buy'] = 'Compre';

$GLOBALS["lang"]['Buy More'] = 'Compre mais.';

$GLOBALS["lang"]['Buy More Licenses'] = 'Compre mais licenças';

$GLOBALS["lang"]['By'] = 'Por';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Por padrão, integramos todos os dispositivos com seu atributo nmis_manage definido para <i>Sim.</i>. Com 4.2.0 também enviamos uma regra que diz <i>Se descobrirmos um dispositivo e ele tiver um OID SNMP válido, marque esse dispositivo como gerenciado pela NMIS.</i>. Obviamente você pode desativar isso se não é o que você quer.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Por padrão, pulamos a validação do certificado porque os clientes usam certificados auto assinados. Para habilitar a validação do certificado, edite o arquivo abaixo.';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Máscara';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEs com status de recebidos, aguardando análise, em análise, rejeitados. Estes CVEs (principalmente) não contêm informações suficientes para nos permitir gerar uma consulta SQL correta.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Calculado pela descoberta.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Calculado número total de endereços IP válidos para esta rede.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Calculado após a conclusão, o tempo necessário para executar este item.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Calculado quando a integração é executada e contém uma representação JSON dos dispositivos nesta integração. Cada ligação para <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Calculado quando a integração é executada e contém uma representação JSON dos locais nesta integração. Cada ligação para <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Calculado quando a integração é executada e contém o número de dispositivos selecionados do Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Calculado quando a integração é executada e contém o número de dispositivos selecionados no sistema externo.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Calculado quando a integração é executada e contém o número de dispositivos a serem atualizados no sistema externo.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Calculado quando a integração é executada e contém o número de dispositivos atualizados em Open-AudIT.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Chame um prompt de comando clicando em Iniciar e procurar <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Camboja';

$GLOBALS["lang"]['Cameroon'] = 'Camarões';

$GLOBALS["lang"]['Campus Area Network'] = 'Rede de Área do Campus';

$GLOBALS["lang"]['Campus area network'] = 'Rede de área do campus.';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Pode ser <code>active</code>, <code>passive</code> ou em branco.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Pode ser <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> ou em branco.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Pode ser <code>auto</code>, <code>fixed</code>, <code>other</code> ou em branco.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Pode ser <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> ou em branco.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Pode ser <code>line</code>, <code>pie</code> ou <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Pode ser <code>user</code> ou <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Pode ser definido por descoberta ou usuário.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Pode ser definido por descoberta ou usuário. Usa a identificação da tabela de locais.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'O usuário pode editar este item.';

$GLOBALS["lang"]['Canada'] = 'Canadá';

$GLOBALS["lang"]['Cancel'] = 'Cancelar';

$GLOBALS["lang"]['capabilities'] = 'Capacidades';

$GLOBALS["lang"]['Capabilities'] = 'Capacidades';

$GLOBALS["lang"]['Capacity'] = 'Capacidade';

$GLOBALS["lang"]['Cape Verde'] = 'Cabo Verde';

$GLOBALS["lang"]['Capitalise'] = 'Capitalizar';

$GLOBALS["lang"]['caption'] = 'Legenda:';

$GLOBALS["lang"]['Caption'] = 'Legenda:';

$GLOBALS["lang"]['Catalan'] = 'Catalão';

$GLOBALS["lang"]['Cayman Islands'] = 'Ilhas Cayman';

$GLOBALS["lang"]['Cellular Details'] = 'Detalhes Celulares';

$GLOBALS["lang"]['Central African Republic'] = 'República Centro-Africana';

$GLOBALS["lang"]['certificate'] = 'Certificado';

$GLOBALS["lang"]['Certificate'] = 'Certificado';

$GLOBALS["lang"]['certificate_file'] = 'Arquivo de Certificado';

$GLOBALS["lang"]['Certificate File'] = 'Arquivo de Certificado';

$GLOBALS["lang"]['certificate_name'] = 'Nome do certificado';

$GLOBALS["lang"]['Certificate Name'] = 'Nome do certificado';

$GLOBALS["lang"]['certificates'] = 'Certificados';

$GLOBALS["lang"]['Certificates'] = 'Certificados';

$GLOBALS["lang"]['Certification'] = 'Certificação';

$GLOBALS["lang"]['Certification Audit'] = 'Auditoria de Certificação';

$GLOBALS["lang"]['Certification Process'] = 'Processo de Certificação';

$GLOBALS["lang"]['Chad'] = 'Chad.';

$GLOBALS["lang"]['Change'] = 'Mudança';

$GLOBALS["lang"]['change_id'] = 'Mudar ID';

$GLOBALS["lang"]['Change ID'] = 'Mudar ID';

$GLOBALS["lang"]['change_log'] = 'Mudar o Log';

$GLOBALS["lang"]['Change Log'] = 'Mudar o Log';

$GLOBALS["lang"]['Change Logs'] = 'Mudar registros';

$GLOBALS["lang"]['change_type'] = 'Mudar Tipo';

$GLOBALS["lang"]['Change Type'] = 'Mudar Tipo';

$GLOBALS["lang"]['check_minutes'] = 'Cheque os Minutos.';

$GLOBALS["lang"]['Check Minutes'] = 'Cheque os Minutos.';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Procure por SSH nestas portas.';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Verifique esta porta para qualquer serviço SSH.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'China';

$GLOBALS["lang"]['Chinese'] = 'Chinês.';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Chinês (tradicional)';

$GLOBALS["lang"]['Choose'] = 'Escolha';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Escolha (selecionar OS primeiro)';

$GLOBALS["lang"]['Choose a Device'] = 'Escolha um dispositivo';

$GLOBALS["lang"]['Choose a Table'] = 'Escolha uma mesa';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Escolha o tipo de tarefa da primeira vez. Isso configurará os campos adicionais necessários dependendo do tipo de tarefa.';

$GLOBALS["lang"]['Christmas Island'] = 'Ilha de Natal';

$GLOBALS["lang"]['cidr'] = 'Cidra.';

$GLOBALS["lang"]['Cidr'] = 'Cidra.';

$GLOBALS["lang"]['circuit_count'] = 'Contagem de circuito';

$GLOBALS["lang"]['Circuit Count'] = 'Contagem de circuito';

$GLOBALS["lang"]['circuit_status'] = 'Estado do Circuito';

$GLOBALS["lang"]['Circuit Status'] = 'Estado do Circuito';

$GLOBALS["lang"]['city'] = 'Cidade';

$GLOBALS["lang"]['City'] = 'Cidade';

$GLOBALS["lang"]['class'] = 'Classe';

$GLOBALS["lang"]['Class'] = 'Classe';

$GLOBALS["lang"]['class_text'] = 'Texto da Classe';

$GLOBALS["lang"]['Class Text'] = 'Texto da Classe';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Clique <i>Novo segredo de cliente.</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Clique em Enviar para Executar';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Clique em <i>Propriedades</i> debaixo da <i>Gerenciar</i> Cabeçalho na coluna do menu central. Entendido. <i>URL de acesso do usuário</i>. Uma vez copiado, cole no editor de texto. Você precisará copiar uma parte deste campo.<br/><br/>Nosso campo de exemplo é assim.<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>A seção que precisamos é <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (Identificação do inquilino). Este é usado em Open-AudIT como o <i>Tenant.</i> Campo, então cole aí.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Clique em Registros de aplicativos para criar uma nova Aplicação, em seguida, clique em Registro de Novos Aplicativos. Dê-lhe um nome (eu usei Open-AudIT), selecione Web app / API como o tipo e fornecer qualquer URL (a URL não é importante) e agora clique em Criar.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Clique em OK e feche a janela DCOMCNFG.<br/><br/>As mudanças acima exigirão uma reinicialização para fazer efeito.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Clique no aplicativo que você acabou de criar. O ID do aplicativo exibido é o ID do cliente.<br/><br/>Para criar o segredo do cliente, clique em Configurações e em Chaves. Dê um nome chave e selecione uma data de validade apropriada e clique em Salvar.<br/><br/>O valor será preenchido para você. Este é o Segredo do Cliente.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Clique no botão Excluir para remover os dispositivos de exemplo do Open-AudIT.<br/>Isso removerá os dispositivos abaixo do banco de dados. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Clique no botão Editar para <i>SAML básico Configuração</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Clique no botão Importar abaixo para preencher o Open-AudIT com dados do dispositivo de exemplo.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Clique no ícone à direita do campo que deseja editar. Mude o campo e clique no ícone verde para enviar.';

$GLOBALS["lang"]['Client ID'] = 'ID do cliente';

$GLOBALS["lang"]['Client ID and Secret'] = 'ID do cliente e Segredo';

$GLOBALS["lang"]['client_ident'] = 'ID do Cliente';

$GLOBALS["lang"]['Client Ident'] = 'ID do Cliente';

$GLOBALS["lang"]['client_secret'] = 'Segredo do Cliente';

$GLOBALS["lang"]['Client Secret'] = 'Segredo do Cliente';

$GLOBALS["lang"]['client_site_name'] = 'Nome do Site do Cliente';

$GLOBALS["lang"]['Client Site Name'] = 'Nome do Site do Cliente';

$GLOBALS["lang"]['Close'] = 'Feche.';

$GLOBALS["lang"]['Closed'] = 'Fechado.';

$GLOBALS["lang"]['Cloud'] = 'Nuvem';

$GLOBALS["lang"]['Cloud Details'] = 'Detalhes da Nuvem';

$GLOBALS["lang"]['Cloud Discovery'] = 'Descoberta das Nuvens';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Descoberta de Nuvem e Auditoria';

$GLOBALS["lang"]['cloud_id'] = 'ID da nuvem';

$GLOBALS["lang"]['Cloud ID'] = 'ID da nuvem';

$GLOBALS["lang"]['cloud_log'] = 'Diário da nuvem';

$GLOBALS["lang"]['Cloud Log'] = 'Diário da nuvem';

$GLOBALS["lang"]['cloud_name'] = 'Nome da nuvem';

$GLOBALS["lang"]['Cloud Name'] = 'Nome da nuvem';

$GLOBALS["lang"]['Cloud Network'] = 'Rede Nuvem';

$GLOBALS["lang"]['clouds'] = 'Nuvens';

$GLOBALS["lang"]['Clouds'] = 'Nuvens';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Nuvens são um recurso disponível para clientes licenciados da Open-AudIT Enterprise.';

$GLOBALS["lang"]['cluster'] = 'Cluster';

$GLOBALS["lang"]['Cluster'] = 'Cluster';

$GLOBALS["lang"]['cluster_id'] = 'Cluster ID';

$GLOBALS["lang"]['Cluster ID'] = 'Cluster ID';

$GLOBALS["lang"]['cluster_name'] = 'Nome do grupo';

$GLOBALS["lang"]['Cluster Name'] = 'Nome do grupo';

$GLOBALS["lang"]['cluster_type'] = 'Tipo Cluster';

$GLOBALS["lang"]['Cluster Type'] = 'Tipo Cluster';

$GLOBALS["lang"]['clusters'] = 'Aglomerados';

$GLOBALS["lang"]['Clusters'] = 'Aglomerados';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Agrupamentos e Relatórios';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Ilhas Cocos (Keeling)';

$GLOBALS["lang"]['Collection'] = 'Colecção';

$GLOBALS["lang"]['Collections'] = 'Coleções';

$GLOBALS["lang"]['Collector'] = 'Colecionador';

$GLOBALS["lang"]['Collector (UUID)'] = 'Colecionador (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Coletor/Servidor é uma característica única da Enterprise. Clientes da empresa recebem uma licença de colecionador de graça. Licenças adicionais podem ser compradas conforme necessário.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Colecionador / servidor é projetado para que você possa ter um controle remoto ou <i>Colecionador</i> instância de Open-AudIT rodando em uma máquina remota. Essa instância de colecionador pode estar em outra zona de segurança, sub-rede, nuvem ou em um site de clientes. O colecionador remoto está fazendo toda a descoberta e auditoria de dispositivos localmente evitando redes e complexidade de firewalls. O Colecionador uma vez registrado é completamente controlado pelo <i>servidor</i>. Isso significa que você só precisa de uma conexão HTTP ou HTTPS daquele coletor para o servidor.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Colecionador Dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Nome do colecionador';

$GLOBALS["lang"]['collector_uuid'] = 'Coletor Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Coletor Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'As tarefas do colecionador são automaticamente configuradas quando o recurso do colecionador é ativado. Tarefas de colecionador não devem ser criadas diretamente pelos usuários. As tarefas de colecionador podem ter sua frequência editada após a criação. Se o servidor Open-AudIT tem Colecionadores reportando-se a ele, uma queda adicional é fornecida. Você pode selecionar isso para especificar qual Colecionador a tarefa deve continuar. Apenas tarefas Discovery são suportadas para Colecionadores.';

$GLOBALS["lang"]['Collectors'] = 'Colecionadores';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Colecionadores podem operar em um dos dois modos: colecionador e autônomo. Quando no modo Colecionador, a instância do Open-AudIT é gerenciada pelo servidor principal. Quando em modo Stand Alone, a instância é gerenciada localmente e encaminha qualquer dispositivo encontrado para o servidor principal.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Colecionadores para descoberta remota';

$GLOBALS["lang"]['Colombia'] = 'Colômbia';

$GLOBALS["lang"]['color'] = 'Cor';

$GLOBALS["lang"]['Color'] = 'Cor';

$GLOBALS["lang"]['Column'] = 'Coluna';

$GLOBALS["lang"]['Columns'] = 'Colunas';

$GLOBALS["lang"]['command'] = 'Comando';

$GLOBALS["lang"]['Command'] = 'Comando';

$GLOBALS["lang"]['command_options'] = 'Opções de Comando';

$GLOBALS["lang"]['Command Options'] = 'Opções de Comando';

$GLOBALS["lang"]['command_output'] = 'Saída de Comando';

$GLOBALS["lang"]['Command Output'] = 'Saída de Comando';

$GLOBALS["lang"]['command_status'] = 'Estado do Comando';

$GLOBALS["lang"]['Command Status'] = 'Estado do Comando';

$GLOBALS["lang"]['command_time_to_execute'] = 'Hora de comando para executar';

$GLOBALS["lang"]['Command Time To Execute'] = 'Hora de comando para executar';

$GLOBALS["lang"]['comment'] = 'Comentário';

$GLOBALS["lang"]['Comment'] = 'Comentário';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Comente a linha abaixo (cerca da linha 49 ou assim). Basta colocar um haxixe # no início da linha.';

$GLOBALS["lang"]['comments'] = 'Comentários';

$GLOBALS["lang"]['Comments'] = 'Comentários';

$GLOBALS["lang"]['commercial'] = 'Comercial';

$GLOBALS["lang"]['Commercial'] = 'Comercial';

$GLOBALS["lang"]['Commercial Support'] = 'Suporte Comercial';

$GLOBALS["lang"]['common_name'] = 'Nome comum';

$GLOBALS["lang"]['Common Name'] = 'Nome comum';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Normalmente chamado de cliente.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Comumente referido como o cliente Secreto.';

$GLOBALS["lang"]['Community'] = 'Comunidade';

$GLOBALS["lang"]['Community Questions'] = 'Questões Comunitárias';

$GLOBALS["lang"]['Community String'] = 'Corda comunitária';

$GLOBALS["lang"]['Comoros the'] = 'Comores o';

$GLOBALS["lang"]['Compact'] = 'Compacto';

$GLOBALS["lang"]['Company'] = 'Companhia.';

$GLOBALS["lang"]['Complete these steps.'] = 'Complete esses passos.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complexidade do ataque (baixo ou alto).';

$GLOBALS["lang"]['Component Table'] = 'Tabela de componentes';

$GLOBALS["lang"]['Components (All Devices)'] = 'Componentes (Todos os dispositivos)';

$GLOBALS["lang"]['Compute'] = 'Computar';

$GLOBALS["lang"]['Condition'] = 'Condição';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Faça uma avaliação de risco.';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Conduzir programas de conscientização e treinamento';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Realizar reuniões de revisão de gestão';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Realizar auditorias de vigilância regulares (geralmente anualmente)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Dirigido por um organismo acreditado em duas etapas.';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Padrão de configuração, atualmente ';

$GLOBALS["lang"]['config_file'] = 'Arquivo de configuração';

$GLOBALS["lang"]['Config File'] = 'Arquivo de configuração';

$GLOBALS["lang"]['config_manager_error_code'] = 'Código de erro do gerenciador de configuração';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Código de erro do gerenciador de configuração';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Controle de Acesso Baseado em Papel Configurável (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Configuração';

$GLOBALS["lang"]['Configuration'] = 'Configuração';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Detecção e Relatório de Mudança de Configuração';

$GLOBALS["lang"]['Configure'] = 'Configurar';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Configure o servidor do agente para realizar auditorias em um cronograma.';

$GLOBALS["lang"]['Congo'] = 'Congo';

$GLOBALS["lang"]['Congo the'] = 'Congo.';

$GLOBALS["lang"]['Connected To'] = 'Conectado a';

$GLOBALS["lang"]['connection'] = 'Conexão';

$GLOBALS["lang"]['Connection'] = 'Conexão';

$GLOBALS["lang"]['Connection Options'] = 'Opções de conexão';

$GLOBALS["lang"]['connection_status'] = 'Estado da conexão';

$GLOBALS["lang"]['Connection Status'] = 'Estado da conexão';

$GLOBALS["lang"]['connections'] = 'Conexões';

$GLOBALS["lang"]['Connections'] = 'Conexões';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Considere filtrado. Portas abertas';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Considerem aberto Portas abertas';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Consultoria, implementação e outros serviços estão disponíveis através';

$GLOBALS["lang"]['contact'] = 'Contato';

$GLOBALS["lang"]['Contact'] = 'Contato';

$GLOBALS["lang"]['contact_name'] = 'Nome do contato';

$GLOBALS["lang"]['Contact Name'] = 'Nome do contato';

$GLOBALS["lang"]['contained_in'] = 'Contido em';

$GLOBALS["lang"]['Contained In'] = 'Contido em';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Contém um objeto JSON detalha os widgets associados e suas posições.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Contém os campos que determinam se devemos usar opções de descoberta SSH, SNMP e WMI. Um objeto JSON.';

$GLOBALS["lang"]['Context & Leadership'] = 'Contexto e Liderança';

$GLOBALS["lang"]['Context Engine ID'] = 'ID do motor de contexto';

$GLOBALS["lang"]['Context Name'] = 'Nome do Contexto';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Melhore continuamente o ISMS.';

$GLOBALS["lang"]['contractual_obligations'] = 'Obrigações Contratuais';

$GLOBALS["lang"]['Contractual Obligations'] = 'Obrigações Contratuais';

$GLOBALS["lang"]['Cook Islands'] = 'Ilhas Cook.';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Copie e cole um resultado de auditoria.';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Copie e cole o abaixo nos fóruns, outra instância de Open-AudIT ou em qualquer outro lugar que você precise fornecer este item.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Entendido. <i>ID do aplicativo</i> E colar no Open-AudIT <i>ID do cliente</i> Campo para o novo método Auth.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Entendido. <i>ID do cliente</i> e colar no Open-AudIT <i>ID do cliente</i> Campo.<br/>Se não há segredo, clique. <i>Gerar um novo segredo</i>Então copie o valor e cole no Open-AudIT. <i>Segredo do Cliente</i> Campo.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Copie o valor e cole no formulário Open-AudIT para o <i>Segredo do Cliente</i> Campo.';

$GLOBALS["lang"]['core_count'] = 'Contagem Principal';

$GLOBALS["lang"]['Core Count'] = 'Contagem Principal';

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

$GLOBALS["lang"]['Create Example Devices'] = 'Criar dispositivos de exemplo';

$GLOBALS["lang"]['create_external_count'] = 'Criar contagem externa';

$GLOBALS["lang"]['Create External Count'] = 'Criar contagem externa';

$GLOBALS["lang"]['create_external_from_internal'] = 'Criar externo de interno';

$GLOBALS["lang"]['Create External From Internal'] = 'Criar externo de interno';

$GLOBALS["lang"]['Create File'] = 'Criar arquivo';

$GLOBALS["lang"]['Create Geocode'] = 'Criar Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Criar contagem interna';

$GLOBALS["lang"]['Create Internal Count'] = 'Criar contagem interna';

$GLOBALS["lang"]['create_internal_from_external'] = 'Criar interno de externo';

$GLOBALS["lang"]['Create Internal From External'] = 'Criar interno de externo';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Crie dispositivos NMIS de Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Crie Open-AudIT Dispositivos de ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Crie Open-AudIT Dispositivos da NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Criar uma linha de base para o dispositivo exemplo';

$GLOBALS["lang"]['Create a Discovery'] = 'Criar uma Descoberta';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Criar uma Declaração de Aplicabilidade (SoA)';

$GLOBALS["lang"]['created_by'] = 'Criado por';

$GLOBALS["lang"]['Created By'] = 'Criado por';

$GLOBALS["lang"]['created_date'] = 'Data de Criação';

$GLOBALS["lang"]['Created Date'] = 'Data de Criação';

$GLOBALS["lang"]['Creating'] = 'Criando';

$GLOBALS["lang"]['Creating Credentials'] = 'Criando Credenciais';

$GLOBALS["lang"]['Creating Device'] = 'Criando dispositivo';

$GLOBALS["lang"]['Creating Widgets'] = 'Criando Widgets';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Criando uma Descoberta Entrada de opções de varredura';

$GLOBALS["lang"]['Creating a Query'] = 'Criando uma Consulta';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Criando uma Declaração SQL para Grupos';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Criando uma Declaração SQL para Consultas';

$GLOBALS["lang"]['Creating an Integration'] = 'Criando uma Integração';

$GLOBALS["lang"]['creator'] = 'Criador';

$GLOBALS["lang"]['Creator'] = 'Criador';

$GLOBALS["lang"]['credential'] = 'Credencial';

$GLOBALS["lang"]['Credential'] = 'Credencial';

$GLOBALS["lang"]['Credentials'] = 'Credenciais';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credenciais ID do cliente';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Assinatura de Credenciais ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credenciais Identidade do inquilino';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'As credenciais estão guardadas no <i>Credenciais</i> Tabela de banco de dados. A informação da credencial está criptografada no armazenamento. Quando uma Discovery é executada, um dispositivo tem suas credenciais específicas recuperadas do banco de dados, decodificadas e testadas. Se estes falharem, a lista de credenciais também é recuperada, descriptografada e então testada contra o dispositivo começando com credenciais conhecidas por ter funcionado anteriormente. Credenciais específicas do dispositivo são armazenadas em um nível individual de dispositivo no <i>Credencial</i> tabela (nota - não <i>S</i> no nome da mesa). Chaves SSH são testadas antes do nome de usuário / senha SSH. Ao testar SSH, credenciais também serão marcadas como trabalhando com sudo ou sendo raiz.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Credenciais podem ter um de alguns tipos diferentes - snmp v.1 / v.2, snmp v.3, ssh, ssh chave, janelas estão todas implementadas. CAVEAT - Ssh chaves não são implementadas para Windows Open-AudIT servidores ainda.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Credenciais para Amazon AWS usados em Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Credenciais para Microsoft Azure usado em Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Crítico.';

$GLOBALS["lang"]['criticality'] = 'Crítica';

$GLOBALS["lang"]['Criticality'] = 'Crítica';

$GLOBALS["lang"]['Croatia'] = 'Croácia';

$GLOBALS["lang"]['Cuba'] = 'Cuba';

$GLOBALS["lang"]['current'] = 'Atual';

$GLOBALS["lang"]['Current'] = 'Atual';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Processos de Descoberta Atual';

$GLOBALS["lang"]['Current date & time is '] = 'Data atual e hora é ';

$GLOBALS["lang"]['Currently Installed'] = 'Atualmente Instalado';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Os tipos atualmente suportados são <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> ou <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Campos Personalizados';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Portos TCP personalizados';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Portos TCP personalizados. Todas as portas específicas que liuke escanearia, além dos portos TCP. Separado, sem espaço.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'UDP personalizado Portos';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Portos UDP personalizados. Qualquer porta específica que liuke escanearia, além dos portos UDP. Separado, sem espaço.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Opções de digitalização personalizáveis por descoberta';

$GLOBALS["lang"]['Cve'] = 'Cve.';

$GLOBALS["lang"]['Cyprus'] = 'Chipre';

$GLOBALS["lang"]['Czech'] = 'Tcheco';

$GLOBALS["lang"]['Czech Republic'] = 'República Checa';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN Conta (opcional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Senha (opcional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = 'Dinamarquês';

$GLOBALS["lang"]['dashboard_id'] = 'ID do painel';

$GLOBALS["lang"]['Dashboard ID'] = 'ID do painel';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Widgets de painel';

$GLOBALS["lang"]['dashboards'] = 'Painéis';

$GLOBALS["lang"]['Dashboards'] = 'Painéis';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Painéis e Widgets permitem aos clientes licenciados da Enterprise criar, ler, atualizar e excluir ambas as coleções para garantir que sua homepage é exatamente o que eles precisam ver. Não só isso, mas um usuário é capaz de definir um painel como sua própria homepage. Todos não precisam usar a mesma homepage, nem os mesmos widgets no painel. Clientes profissionais licenciados podem escolher entre dois painéis predefinidos para definir como sua própria homepage.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Os painéis fornecem <i>em um olhar</i> visibilidade importante para mudanças que ocorrem em sua rede, além de fornecer links rápidos para tipos de dispositivos, fabricantes e sistemas operacionais e muito mais.';

$GLOBALS["lang"]['Dashboards use'] = 'Painéis usam';

$GLOBALS["lang"]['Data'] = 'Dados';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Exportação de dados - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Retenção de dados';

$GLOBALS["lang"]['Database'] = 'Banco de dados';

$GLOBALS["lang"]['db_action'] = 'Ação do banco de dados';

$GLOBALS["lang"]['Database Action'] = 'Ação do banco de dados';

$GLOBALS["lang"]['db_column'] = 'Coluna do Banco de Dados';

$GLOBALS["lang"]['Database Column'] = 'Coluna do Banco de Dados';

$GLOBALS["lang"]['Database Definition'] = 'Definição do Banco de Dados';

$GLOBALS["lang"]['db_row'] = 'Linha de Banco de Dados';

$GLOBALS["lang"]['Database Row'] = 'Linha de Banco de Dados';

$GLOBALS["lang"]['Database Schema'] = 'Esquema de Banco de Dados';

$GLOBALS["lang"]['Database Server Discovery'] = 'Servidor de banco de dados Discovery';

$GLOBALS["lang"]['db_table'] = 'Tabela de banco de dados';

$GLOBALS["lang"]['Database Table'] = 'Tabela de banco de dados';

$GLOBALS["lang"]['Database Tables'] = 'Tabelas de banco de dados';

$GLOBALS["lang"]['dataset_title'] = 'Título do conjunto de dados';

$GLOBALS["lang"]['Dataset Title'] = 'Título do conjunto de dados';

$GLOBALS["lang"]['date'] = 'Data';

$GLOBALS["lang"]['Date'] = 'Data';

$GLOBALS["lang"]['Date D-M-Y'] = 'Data D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Encontro M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Encontro Agora';

$GLOBALS["lang"]['date_of_manufacture'] = 'Data de fabricação';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Data de fabricação';

$GLOBALS["lang"]['date_paid'] = 'Data paga';

$GLOBALS["lang"]['Date Paid'] = 'Data paga';

$GLOBALS["lang"]['date_received'] = 'Data recebida';

$GLOBALS["lang"]['Date Received'] = 'Data recebida';

$GLOBALS["lang"]['Date Y-M-D'] = 'Encontro Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Data e hora em que a CVE foi atualizada pela última vez.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Data e hora em que a CVE foi publicada.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Data em que a CVE foi publicada.';

$GLOBALS["lang"]['DateTime Now'] = 'Hora do Encontro Agora';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Data Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Dia do Mês';

$GLOBALS["lang"]['Day Of Month'] = 'Dia do Mês';

$GLOBALS["lang"]['day_of_week'] = 'Dia da Semana';

$GLOBALS["lang"]['Day Of Week'] = 'Dia da Semana';

$GLOBALS["lang"]['Day of Month'] = 'Dia do Mês';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Identificador';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Identificador';

$GLOBALS["lang"]['Debug'] = 'Depurar';

$GLOBALS["lang"]['Debugging'] = 'Depuração';

$GLOBALS["lang"]['Debugging a Script'] = 'Depurando um script';

$GLOBALS["lang"]['December'] = 'Dezembro';

$GLOBALS["lang"]['Decommission'] = 'Desativar.';

$GLOBALS["lang"]['Default'] = 'Predefinição';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Autenticação padrão Nível... Preparar para conectar';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Personagem padrão Nível... Pronto para identificar';

$GLOBALS["lang"]['Default Items'] = 'Itens Predefinidos';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Grupos Orgs padrão';

$GLOBALS["lang"]['Default Roles Groups'] = 'Grupos de papéis padrão';

$GLOBALS["lang"]['Default Value'] = 'Valor padrão';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Padrão de 389. Normalmente 636 usados para o Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Predefinição de <code>3</code> para LDAP e Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Predefinições';

$GLOBALS["lang"]['Deferred'] = 'Deferido';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Defina escopo e objetivos do projeto.';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Defina o escopo do ISMS.';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Defina o contexto da organização (questões internas/externas)';

$GLOBALS["lang"]['delay_minutes'] = 'Minutos de atraso';

$GLOBALS["lang"]['Delay Minutes'] = 'Minutos de atraso';

$GLOBALS["lang"]['Delete'] = 'Apagar';

$GLOBALS["lang"]['Delete Example Devices'] = 'Excluir dispositivos de exemplo';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Excluir o Externo do Interno';

$GLOBALS["lang"]['Delete External From Internal'] = 'Excluir o Externo do Interno';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Delete NMIS Dispositivos se não em Open-AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Apague uma entrada.';

$GLOBALS["lang"]['Delete from Application'] = 'Apagar da Aplicação';

$GLOBALS["lang"]['Delete from Cluster'] = 'Exclua do grupo';

$GLOBALS["lang"]['Denmark'] = 'Dinamarca';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Derivado por auditoria ou manualmente definido pelo usuário.';

$GLOBALS["lang"]['Derived by audit.'] = 'Derivado por auditoria.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Derivado de <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Derivado de <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Derivado da descoberta do Coletor.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Derivado do nome do SO.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Derivado da descoberta da nuvem.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Derivado de auditorias de dispositivos.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Derivado do tipo de dispositivo e SO.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Derivado da descoberta.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Derivado do nome do host, nome do sistema, nome do host e IP nessa ordem.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Derivado da gravidade inteira.';

$GLOBALS["lang"]['description'] = 'Descrição';

$GLOBALS["lang"]['Description'] = 'Descrição';

$GLOBALS["lang"]['destination'] = 'Destino';

$GLOBALS["lang"]['Destination'] = 'Destino';

$GLOBALS["lang"]['detail'] = 'Detalhe';

$GLOBALS["lang"]['Detail'] = 'Detalhe';

$GLOBALS["lang"]['Details'] = 'Detalhes';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detalhes de quem pode entrar em contato aqui.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Determine quantas vezes você quer verificar o banco de dados e criar um relatório agendado.';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Determinar opções de tratamento de risco.';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Desenvolva um plano de tratamento de risco';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Desenvolva políticas, procedimentos e controles';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Desenvolva documentação ISMS necessária (políticas, procedimentos, etc.)';

$GLOBALS["lang"]['device'] = 'Dispositivo';

$GLOBALS["lang"]['Device'] = 'Dispositivo';

$GLOBALS["lang"]['Device Audits'] = 'Audições de dispositivos';

$GLOBALS["lang"]['Device Component Names'] = 'Nomes do Componente do Dispositivo';

$GLOBALS["lang"]['Device ID'] = 'ID do dispositivo';

$GLOBALS["lang"]['device_id'] = 'ID do dispositivo';

$GLOBALS["lang"]['device_id_a'] = 'ID do dispositivo A';

$GLOBALS["lang"]['Device ID A'] = 'ID do dispositivo A';

$GLOBALS["lang"]['device_id_b'] = 'ID do dispositivo B';

$GLOBALS["lang"]['Device ID B'] = 'ID do dispositivo B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Regras de correspondência do dispositivo';

$GLOBALS["lang"]['Device Name'] = 'Nome do dispositivo';

$GLOBALS["lang"]['Device Result'] = 'Resultado do Dispositivo';

$GLOBALS["lang"]['Device Results'] = 'Resultados do dispositivo';

$GLOBALS["lang"]['Device Seed'] = 'Semente de Dispositivo';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Semente de Dispositivo Descobertas são uma boa opção se você sabe que sua rede consiste em uma variedade de subredes, mas você não tem certeza do que são. Semeou a descoberta com um roteador local e viu sua rede se desdobrar diante de seus olhos.';

$GLOBALS["lang"]['Device Seed IP'] = 'IP de Semente de Dispositivo';

$GLOBALS["lang"]['Device Status'] = 'Estado do dispositivo';

$GLOBALS["lang"]['Device Types'] = 'Tipos de Dispositivos';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Dispositivo e Software e Auditoria de Hardware';

$GLOBALS["lang"]['Device is in the Subnet'] = 'O dispositivo está na Subnet.';

$GLOBALS["lang"]['Devices'] = 'Dispositivos';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Dispositivos designados para localização';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Dispositivos designados para localização';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Dispositivos designados para org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Dispositivos designados para org';

$GLOBALS["lang"]['Devices Audited'] = 'Dispositivos Auditados';

$GLOBALS["lang"]['Devices Collection'] = 'Coleção de dispositivos';

$GLOBALS["lang"]['Devices Created in '] = 'Dispositivos criados em ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Dispositivos criados em Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Dispositivos Colunas de exibição padrão';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Dispositivos Colunas de exibição padrão';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Dispositivos encontrados nos últimos 7 dias';

$GLOBALS["lang"]['Devices Found Today'] = 'Dispositivos encontrados hoje';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Dispositivos encontrados ontem';

$GLOBALS["lang"]['Devices Missing Information'] = 'Dispositivos faltando informações';

$GLOBALS["lang"]['Devices Not Audited'] = 'Dispositivos não auditados';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Dispositivos não vistos 30 dias';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Dispositivos não vistos 7 dias';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Dispositivos não vistos há 90 dias';

$GLOBALS["lang"]['Devices Older Than X'] = 'Dispositivos mais velhos que X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Dispositivos recuperados via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Dispositivos selecionados de ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Dispositivos selecionados do Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Dispositivos atualizados em ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Dispositivos atualizados em Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Dispositivos estão sendo avaliados.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Dispositivos não estão sendo avaliados.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Dispositivos podem ser avaliados.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Dispositivos da Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Dispositivos em estado de execução';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Dispositivos em estado parado';

$GLOBALS["lang"]['Devices in this'] = 'Dispositivos aqui.';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Os dispositivos não serão combinados se seu status estiver definido. <i>deletado</i>. Qualquer outro status permitirá que uma combinação ocorra.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Dispositivos com mandados expirados';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Desviado do tipo ou SO.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Activado';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Activado';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expira';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expira';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Obtido';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Obtido';

$GLOBALS["lang"]['dhcp_server'] = 'Servidor Dhcp';

$GLOBALS["lang"]['Dhcp Server'] = 'Servidor Dhcp';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'O comando completou com sucesso e devolveu dados esperados.';

$GLOBALS["lang"]['direction'] = 'Direção';

$GLOBALS["lang"]['Direction'] = 'Direção';

$GLOBALS["lang"]['directory'] = 'Diretório';

$GLOBALS["lang"]['Directory'] = 'Diretório';

$GLOBALS["lang"]['disabled'] = 'Deficiente.';

$GLOBALS["lang"]['Disabled'] = 'Deficiente.';

$GLOBALS["lang"]['discard'] = 'Descartar';

$GLOBALS["lang"]['Discard'] = 'Descartar';

$GLOBALS["lang"]['Discover'] = 'Descubra';

$GLOBALS["lang"]['Discoveries'] = 'Descobertas';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Descobrimentos estão no centro do que Open-AudIT faz. Como você saberia? <i>O que há na sua rede?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Descobertas são entradas que permitem executar uma descoberta em uma rede em um único clique, sem entrar nos detalhes dessa rede cada vez.';

$GLOBALS["lang"]['Discovery'] = 'Descoberta';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Discovery Change Logs';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Retenção de Dados Discovery';

$GLOBALS["lang"]['discovery_id'] = 'ID Discovery';

$GLOBALS["lang"]['Discovery ID'] = 'ID Discovery';

$GLOBALS["lang"]['Discovery Issues'] = 'Problemas de Descoberta';

$GLOBALS["lang"]['discovery_log'] = 'Diário Discovery';

$GLOBALS["lang"]['Discovery Log'] = 'Diário Discovery';

$GLOBALS["lang"]['Discovery Match Options'] = 'Opções de combinação de descoberta';

$GLOBALS["lang"]['Discovery Name'] = 'Discovery Name';

$GLOBALS["lang"]['Discovery Options'] = 'Opções de Descoberta';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Discovery Fila Conde';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Limite da Fila de Descoberta';

$GLOBALS["lang"]['discovery_run'] = 'Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Opções de digitalização';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Opções de digitalização';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Scan Opções são apenas outra coleção de itens. Usuários corporativos podem criar, ler, atualizar e excluir entradas conforme necessário. Usuários profissionais podem ler todas as entradas, mas não criar novas entradas, atualizar entradas existentes ou excluir entradas. Usuários comunitários não têm GUI que permita acesso a essa coleção.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Discovery Scan Tipos';

$GLOBALS["lang"]['Discovery Support'] = 'Discovery Support';

$GLOBALS["lang"]['Discovery has stopped working'] = 'A descoberta parou de funcionar.';

$GLOBALS["lang"]['disk'] = 'Disco';

$GLOBALS["lang"]['Disk'] = 'Disco';

$GLOBALS["lang"]['display_version'] = 'Mostrar versão';

$GLOBALS["lang"]['Display Version'] = 'Mostrar versão';

$GLOBALS["lang"]['Display in Menu'] = 'Mostrar no Menu';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Mostra um formulário padrão para submissão ao POST.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Exibe um formulário padrão para submissão ao POST / coleta / importação.';

$GLOBALS["lang"]['district'] = 'Distrito';

$GLOBALS["lang"]['District'] = 'Distrito';

$GLOBALS["lang"]['Djibouti'] = 'Djibuti';

$GLOBALS["lang"]['dns'] = 'DNS';

$GLOBALS["lang"]['Dns'] = 'DNS';

$GLOBALS["lang"]['dns_domain'] = 'Domínio de DNS';

$GLOBALS["lang"]['Dns Domain'] = 'Domínio de DNS';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'DNS Domain Reg Activado';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'DNS Domain Reg Activado';

$GLOBALS["lang"]['dns_fqdn'] = 'DNS FQDN';

$GLOBALS["lang"]['Dns Fqdn'] = 'DNS FQDN';

$GLOBALS["lang"]['dns_host_name'] = 'Nome do anfitrião do DNS';

$GLOBALS["lang"]['Dns Host Name'] = 'Nome do anfitrião do DNS';

$GLOBALS["lang"]['dns_hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['dns_server'] = 'Servidor de DNS';

$GLOBALS["lang"]['Dns Server'] = 'Servidor de DNS';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Não se esqueça da wiki Open-AudIT para toda sua documentação.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Não se esqueça que há uma montanha de documentação na wiki.';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Não escaneie essas portas TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Não escaneie essas portas UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Não me mostre de novo.';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Você tem um exemplo perfeito dessa configuração? Talvez um dispositivo localizado em um ambiente de laboratório ou uma estação de trabalho que você usa para clonar VMs de estação de trabalho.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Você quer usar transporte seguro (LDAPS) ou LDAP regular não criptografado.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Quer ver a barra lateral à esquerda?';

$GLOBALS["lang"]['documentation'] = 'Documentação';

$GLOBALS["lang"]['Documentation'] = 'Documentação';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Documentação sobre uma coleção em particular.';

$GLOBALS["lang"]['Does Not Equal'] = 'Não é igual';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'A licença se aplica a órgãos infantis?';

$GLOBALS["lang"]['domain'] = 'Domínio';

$GLOBALS["lang"]['Domain'] = 'Domínio';

$GLOBALS["lang"]['domain_controller_address'] = 'Endereço do controlador de domínio';

$GLOBALS["lang"]['Domain Controller Address'] = 'Endereço do controlador de domínio';

$GLOBALS["lang"]['domain_controller_name'] = 'Controlador de Domínio Nome';

$GLOBALS["lang"]['Domain Controller Name'] = 'Controlador de Domínio Nome';

$GLOBALS["lang"]['domain_role'] = 'Papel de Domínio';

$GLOBALS["lang"]['Domain Role'] = 'Papel de Domínio';

$GLOBALS["lang"]['domain_short'] = 'Domínio Curto';

$GLOBALS["lang"]['Domain Short'] = 'Domínio Curto';

$GLOBALS["lang"]['Dominica'] = 'Dominica.';

$GLOBALS["lang"]['Dominican Republic'] = 'República Dominicana';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Não segure minha mão, sei o que estou fazendo. Sem filtro e a habilidade de se juntar a mesas personalizadas.';

$GLOBALS["lang"]['Download'] = 'Baixe';

$GLOBALS["lang"]['Download a File'] = 'Baixar um arquivo';

$GLOBALS["lang"]['Download a file from URL'] = 'Baixe um arquivo da URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Baixe o script test_windows_client.vbs diretamente';

$GLOBALS["lang"]['Download your updated version from'] = 'Baixe sua versão atualizada de';

$GLOBALS["lang"]['driver'] = 'Motorista.';

$GLOBALS["lang"]['Driver'] = 'Motorista.';

$GLOBALS["lang"]['duplex'] = 'Duplex.';

$GLOBALS["lang"]['Duplex'] = 'Duplex.';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Duplicar dispositivos / dispositivos em falta';

$GLOBALS["lang"]['duration'] = 'Duração';

$GLOBALS["lang"]['Duration'] = 'Duração';

$GLOBALS["lang"]['Dutch'] = 'Holandês';

$GLOBALS["lang"]['ESXi'] = 'ESXI';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Cada IP é escaneado com as opções de descoberta configuradas (veja Discovery Scan Options and Discovery - Community vs Professional vs Enterprise no wiki). Em geral, Nmap irá testar para portos 22 (ssh), 135 (wmi), 62078 (iPhone) e UDP 161 (snmp). Se 22, 135 ou 161 responderem a lista de credenciais é recuperada e cada credencial testado por sua vez. As primeiras credenciais de trabalho são usadas para mais perguntas diretamente do dispositivo. Nota: se um dispositivo foi descoberto e tem credenciais de trabalho, essas credenciais são testadas primeiro. Só se esses falharem são as outras credenciais então tentarão.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Cada vez que um dispositivo é descoberto ou um resultado de auditoria é processado, todas as regras são recuperadas do banco de dados e executado contra os atributos do dispositivo específico. Regras contra um dispositivo de cada vez - não há como dizer <i>Execute as regras contra todos os dispositivos.<i> ou <i>Execute as regras contra esses dispositivos.<i>. Uma regra individual testará um ou mais atributos do dispositivo e se corresponderem à regra, o resultado será aplicado. Vários atributos podem ser testados. Vários atributos podem ser definidos. Pense nisso como um "Se Isto", então aquele sistema de Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Facilmente executar uma descoberta em uma rede em um único clique, sem entrar nos detalhes dessa rede cada vez.';

$GLOBALS["lang"]['Ecuador'] = 'Equador';

$GLOBALS["lang"]['Edit'] = 'Editar';

$GLOBALS["lang"]['edit_log'] = 'Editar registro';

$GLOBALS["lang"]['Edit Log'] = 'Editar registro';

$GLOBALS["lang"]['editable'] = 'Editável';

$GLOBALS["lang"]['Editable'] = 'Editável';

$GLOBALS["lang"]['edited_by'] = 'Editado por';

$GLOBALS["lang"]['Edited By'] = 'Editado por';

$GLOBALS["lang"]['edited_date'] = 'Data Edição';

$GLOBALS["lang"]['Edited Date'] = 'Data Edição';

$GLOBALS["lang"]['edition'] = 'Edição';

$GLOBALS["lang"]['Edition'] = 'Edição';

$GLOBALS["lang"]['Egypt'] = 'Egito';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon, Google ou Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Nenhum ou presente.

<strong>Nenhum.</strong> O ataque bem sucedido não depende das condições de implantação e execução do sistema vulnerável. O agressor pode esperar ser capaz de alcançar a vulnerabilidade e executar a exploração sob todos ou a maioria dos casos da vulnerabilidade.

<strong>Presente</strong> O ataque bem sucedido depende da presença de condições específicas de implantação e execução do sistema vulnerável que permitem o ataque. Estes incluem:

Uma condição racial deve ser ganha para explorar com sucesso a vulnerabilidade. O sucesso do ataque está condicionado a condições de execução que não estão sob controle total do agressor. O ataque pode precisar ser lançado várias vezes contra um único alvo antes de ser bem sucedido.

Injecção de rede. O atacante deve se injetar no caminho lógico da rede entre o alvo e o recurso solicitado pela vítima (por exemplo, vulnerabilidades que exigem um agressor no caminho).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'E-mail';

$GLOBALS["lang"]['Email'] = 'E-mail';

$GLOBALS["lang"]['email_address'] = 'Endereço de e-mail';

$GLOBALS["lang"]['Email Address'] = 'Endereço de e-mail';

$GLOBALS["lang"]['Email Configuration'] = 'Configuração do e-mail';

$GLOBALS["lang"]['Email to send test to'] = 'E-mail para enviar teste para';

$GLOBALS["lang"]['Enable'] = 'Activar';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Activar comunicação distribuída neste computador - Opção verificada';

$GLOBALS["lang"]['enabled'] = 'Activado';

$GLOBALS["lang"]['Enabled'] = 'Activado';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Ativando o recurso sob as janelas';

$GLOBALS["lang"]['encryption'] = 'Criptografia';

$GLOBALS["lang"]['Encryption'] = 'Criptografia';

$GLOBALS["lang"]['encryption_method'] = 'Método de criptografia';

$GLOBALS["lang"]['Encryption Method'] = 'Método de criptografia';

$GLOBALS["lang"]['encryption_status'] = 'Estado de criptografia';

$GLOBALS["lang"]['Encryption Status'] = 'Estado de criptografia';

$GLOBALS["lang"]['end_date'] = 'Data de Fim';

$GLOBALS["lang"]['End Date'] = 'Data de Fim';

$GLOBALS["lang"]['End OF Life Product ID'] = 'ID do Produto Fim da Vida';

$GLOBALS["lang"]['end_of_life'] = 'Fim da Vida';

$GLOBALS["lang"]['End Of Life'] = 'Fim da Vida';

$GLOBALS["lang"]['end_of_production'] = 'Fim da Produção';

$GLOBALS["lang"]['End Of Production'] = 'Fim da Produção';

$GLOBALS["lang"]['end_of_service'] = 'Fim do serviço';

$GLOBALS["lang"]['End Of Service'] = 'Fim do serviço';

$GLOBALS["lang"]['end_of_service_life'] = 'Fim da Vida de Serviço';

$GLOBALS["lang"]['End Of Service Life'] = 'Fim da Vida de Serviço';

$GLOBALS["lang"]['Endpoint'] = 'Ponto final';

$GLOBALS["lang"]['English'] = 'Inglês';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Aumenta a conformidade regulatória.';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'O enriquecimento está completo. A CVE tem metadados completos e é considerada estável.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Garantir que a documentação seja controlada e acessível.';

$GLOBALS["lang"]['enterprise'] = 'Enterprise.';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise.';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Rede Privada Empresa';

$GLOBALS["lang"]['Enterprise private network'] = 'Rede privada empresarial';

$GLOBALS["lang"]['Entitlement Type'] = 'Tipo de Direito';

$GLOBALS["lang"]['Entra'] = 'Entra.';

$GLOBALS["lang"]['environment'] = 'Ambiente';

$GLOBALS["lang"]['Environment'] = 'Ambiente';

$GLOBALS["lang"]['Equal To'] = 'Igual a';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Igual ou Maior que';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Igual ou menor que';

$GLOBALS["lang"]['Equals'] = 'Igual';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Guiné Equatorial';

$GLOBALS["lang"]['Eritrea'] = 'Eritreia';

$GLOBALS["lang"]['Error'] = 'Erro';

$GLOBALS["lang"]['Error Code'] = 'Código de Erro';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Estabelecer um plano de projeto e linha do tempo';

$GLOBALS["lang"]['Establish an information security policy'] = 'Estabelecer uma política de segurança da informação';

$GLOBALS["lang"]['Established'] = 'Estabelecido';

$GLOBALS["lang"]['Estonia'] = 'Estônia';

$GLOBALS["lang"]['Estonian'] = 'Estoniano';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethernet Mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethiopia'] = 'Etiópia';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Avaliar o ISMS internamente.';

$GLOBALS["lang"]['Every'] = 'Cada';

$GLOBALS["lang"]['Every Day'] = 'Todos os dias';

$GLOBALS["lang"]['Example'] = 'Exemplo';

$GLOBALS["lang"]['Example Devices'] = 'Dispositivos de Exemplo';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Exemplo Org Chart com Acesso';

$GLOBALS["lang"]['Example text from'] = 'Exemplo de texto de';

$GLOBALS["lang"]['Examples'] = 'Exemplos';

$GLOBALS["lang"]['Exceptions'] = 'Excepções';

$GLOBALS["lang"]['exclude'] = 'Excluir';

$GLOBALS["lang"]['Exclude'] = 'Excluir';

$GLOBALS["lang"]['exclude_ip'] = 'Excluir IP';

$GLOBALS["lang"]['Exclude IP'] = 'Excluir IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Excluir endereços IP';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Excluir endereços IP (IP individual - 192.168.1.20, intervalos - 192.168.1.30-40 ou subnets - 192.168.1.100/30) listados para serem digitalizados. Separado, sem espaço.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Excluir portos TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Excluir portos TCP';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Excluir portos TCP';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Excluir portos UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Excluir os portos Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Excluir os portos Udp';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Excluir todas as portas listadas de serem escaneadas. Separado, sem espaço.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Excluir esses endereços IP de serem digitalizados.';

$GLOBALS["lang"]['Excluded'] = 'Excluído';

$GLOBALS["lang"]['exclusion_reasons'] = 'Razões de Exclusão';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Razões de Exclusão';

$GLOBALS["lang"]['executable'] = 'Executável';

$GLOBALS["lang"]['Executable'] = 'Executável';

$GLOBALS["lang"]['executable_id'] = 'ID executável';

$GLOBALS["lang"]['Executable ID'] = 'ID executável';

$GLOBALS["lang"]['executables'] = 'Executáveis';

$GLOBALS["lang"]['Executables'] = 'Executáveis';

$GLOBALS["lang"]['Execute'] = 'Executar';

$GLOBALS["lang"]['Executing'] = 'Executar';

$GLOBALS["lang"]['exemption_reason'] = 'Razão de Isenção';

$GLOBALS["lang"]['Exemption Reason'] = 'Razão de Isenção';

$GLOBALS["lang"]['Existing Building'] = 'Edifício existente';

$GLOBALS["lang"]['Existing Floor'] = 'Piso existente';

$GLOBALS["lang"]['Existing Room'] = 'Sala Existente';

$GLOBALS["lang"]['Existing Row'] = 'Linha Existente';

$GLOBALS["lang"]['expire_date'] = 'Expirar Data';

$GLOBALS["lang"]['Expire Date'] = 'Expirar Data';

$GLOBALS["lang"]['expire_minutes'] = 'Expirar Minutos';

$GLOBALS["lang"]['Expire Minutes'] = 'Expirar Minutos';

$GLOBALS["lang"]['expires'] = 'Expira';

$GLOBALS["lang"]['Expires'] = 'Expira';

$GLOBALS["lang"]['expiry_date'] = 'Data de expiração';

$GLOBALS["lang"]['Expiry Date'] = 'Data de expiração';

$GLOBALS["lang"]['exploit_maturity'] = 'Explora a maturidade.';

$GLOBALS["lang"]['Exploit Maturity'] = 'Explora a maturidade.';

$GLOBALS["lang"]['Export'] = 'Exportar';

$GLOBALS["lang"]['Export by Device'] = 'Exportar por Dispositivo';

$GLOBALS["lang"]['Export by Policy'] = 'Exportar por Política';

$GLOBALS["lang"]['Export data to'] = 'Exportar dados para';

$GLOBALS["lang"]['Exporting a Device'] = 'Exportando um dispositivo';

$GLOBALS["lang"]['expose'] = 'Expor';

$GLOBALS["lang"]['Expose'] = 'Expor';

$GLOBALS["lang"]['External'] = 'Exterior';

$GLOBALS["lang"]['External Field Name'] = 'Nome do Campo Externo';

$GLOBALS["lang"]['External Field Type'] = 'Tipo de Campo Externo';

$GLOBALS["lang"]['External Field Types'] = 'Tipos de Campo Externo';

$GLOBALS["lang"]['external_ident'] = 'Identidade Externa';

$GLOBALS["lang"]['External Ident'] = 'Identidade Externa';

$GLOBALS["lang"]['external_link'] = 'Link Externo';

$GLOBALS["lang"]['External Link'] = 'Link Externo';

$GLOBALS["lang"]['extra_columns'] = 'Colunas extras';

$GLOBALS["lang"]['Extra Columns'] = 'Colunas extras';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Extra e baseado em tempo Relatório';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Registro extra e mais verboso é gerado para solução de problemas.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Revisão FW';

$GLOBALS["lang"]['Fail'] = 'Falhou.';

$GLOBALS["lang"]['Failed'] = 'Falhou.';

$GLOBALS["lang"]['Failed Severity'] = 'Severidade Falhou';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Ilhas Malvinas';

$GLOBALS["lang"]['Family'] = 'Família.';

$GLOBALS["lang"]['Faroe Islands'] = 'Ilhas Faroé';

$GLOBALS["lang"]['Features'] = 'Características';

$GLOBALS["lang"]['February'] = 'Fevereiro';

$GLOBALS["lang"]['field'] = 'Campo';

$GLOBALS["lang"]['Field'] = 'Campo';

$GLOBALS["lang"]['field_id'] = 'ID do campo';

$GLOBALS["lang"]['Field ID'] = 'ID do campo';

$GLOBALS["lang"]['Field Name'] = 'Nome do campo';

$GLOBALS["lang"]['Field Type'] = 'Tipo de Campo';

$GLOBALS["lang"]['Fields'] = 'Campos';

$GLOBALS["lang"]['fields'] = 'Campos';

$GLOBALS["lang"]['Fields attributes are'] = 'Os atributos dos campos são';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji Ilhas Fiji';

$GLOBALS["lang"]['File'] = 'Arquivo';

$GLOBALS["lang"]['File Auditing'] = 'Auditoria de arquivos';

$GLOBALS["lang"]['File Import'] = 'Importar Arquivo';

$GLOBALS["lang"]['File Input'] = 'Arquivo de Entrada';

$GLOBALS["lang"]['file_name'] = 'Nome do arquivo';

$GLOBALS["lang"]['File Name'] = 'Nome do arquivo';

$GLOBALS["lang"]['File Share Discovery'] = 'Arquivo Compartilhar Discovery';

$GLOBALS["lang"]['file_size'] = 'Tamanho do arquivo';

$GLOBALS["lang"]['File Size'] = 'Tamanho do arquivo';

$GLOBALS["lang"]['filename'] = 'Nome do arquivo';

$GLOBALS["lang"]['Filename'] = 'Nome do arquivo';

$GLOBALS["lang"]['files'] = 'Arquivos';

$GLOBALS["lang"]['Files'] = 'Arquivos';

$GLOBALS["lang"]['files_id'] = 'ID dos arquivos';

$GLOBALS["lang"]['Files ID'] = 'ID dos arquivos';

$GLOBALS["lang"]['filter'] = 'Filtro';

$GLOBALS["lang"]['Filter'] = 'Filtro';

$GLOBALS["lang"]['filtered'] = 'Filtrado';

$GLOBALS["lang"]['Filtered'] = 'Filtrado';

$GLOBALS["lang"]['Filtered Ports'] = 'Portos Filtrados';

$GLOBALS["lang"]['Finland'] = 'Finlândia';

$GLOBALS["lang"]['Finnish'] = 'Finlandês';

$GLOBALS["lang"]['Firewall'] = 'Firewall.';

$GLOBALS["lang"]['Firewall Packages'] = 'Pacotes Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Regra Firewall';

$GLOBALS["lang"]['Firewall Rule'] = 'Regra Firewall';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Revisão de Firmware';

$GLOBALS["lang"]['Firmware Revision'] = 'Revisão de Firmware';

$GLOBALS["lang"]['First'] = 'Primeiro.';

$GLOBALS["lang"]['First Name'] = 'Primeiro Nome';

$GLOBALS["lang"]['first_run'] = 'Primeira Corrida';

$GLOBALS["lang"]['First Run'] = 'Primeira Corrida';

$GLOBALS["lang"]['first_seen'] = 'Primeiro Visto';

$GLOBALS["lang"]['First Seen'] = 'Primeiro Visto';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Primeiro foco no que o fim precisa é: está tentando usar software, usuários ou dados do Netstat? Qual é a coisa importante para comparar e relatar?';

$GLOBALS["lang"]['FirstWave'] = 'Primeira Onda';

$GLOBALS["lang"]['Fix'] = 'Consertar.';

$GLOBALS["lang"]['Fixed'] = 'Consertado.';

$GLOBALS["lang"]['Fixing the Issue'] = 'Consertando o problema';

$GLOBALS["lang"]['Floor'] = 'Andar';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Siga qualquer um dos links abaixo e descubra como usar Open-AudIT para descobrir <b>O que há na sua rede?</b>';

$GLOBALS["lang"]['For'] = 'Pelo';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Pelo <i>Tipo</i> Certifique-se de selecionar Baseline, e para Grupo você deve selecionar um grupo de dispositivos, se aplicável a esta linha de base, que melhor representam os dispositivos para aplicar a linha de base contra. Isso evitará entradas erradas.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Para a execução Debian/Ubuntu, incluindo definir dpkg para lembrar de seu cancelamento para que uma atualização do apt-get não rompa';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Para SNMP Open-AudIT pode usar credenciais v1, v2 e v3. O dispositivo é questionado independentemente de ser um roteador, interruptor (dispositivos de rede regulares) ou um computador (Linux e Windows muitas vezes executam SNMP para ferramentas de monitoramento).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Para um primer em Cron, veja esta página da Wikipédia.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Para uma descoberta de sementes, devo apenas descobrir IPs no espaço de IP privado.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Para uma descoberta de sementes, devo apenas descobrir IPs na subrede escolhida.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Para uma descoberta de sementes, devo rastrear a subrede antes de executar a descoberta.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Para entrada avançada de uma consulta SQL crua. Como por exemplo, você deve incluir <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Para cada processo gerado, ocorre o abaixo.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Por exemplo - você pode criar uma linha de base de um dispositivo rodando Redhat 9 que age como um de seus servidores Apache em um cluster. Você sabe que esse servidor em particular está configurado do jeito que você quer, mas você não tem certeza se outros servidores no cluster estão configurados exatamente da mesma forma. As bases permitem determinar isso.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Por exemplo - você pode criar uma linha de base de um dispositivo rodando Redhat 9 que age como um de seus servidores Apache em um cluster. Você sabe que esse servidor em particular está configurado do jeito que você quer, mas você não tem certeza se outros servidores no cluster estão configurados exatamente da mesma forma. As linhas de base permitem determinar isso.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Para mais informações, veja a wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Para licenças que não são perpétuas, quando a licença expira.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Para informações mais detalhadas, verifique a Base de Conhecimento Open-AudIT.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Para mais informações, veja o seguinte guia que inclui um vídeo. Use';

$GLOBALS["lang"]['For more information, see'] = 'Para mais informações, veja';

$GLOBALS["lang"]['form_factor'] = 'Fator de Forma';

$GLOBALS["lang"]['Form Factor'] = 'Fator de Forma';

$GLOBALS["lang"]['format'] = 'Formato';

$GLOBALS["lang"]['Format'] = 'Formato';

$GLOBALS["lang"]['Forth'] = 'Adiante.';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'França, República Francesa';

$GLOBALS["lang"]['free'] = 'Livre';

$GLOBALS["lang"]['Free'] = 'Livre';

$GLOBALS["lang"]['French'] = 'Francês';

$GLOBALS["lang"]['French Guiana'] = 'Guiana Francesa';

$GLOBALS["lang"]['French Polynesia'] = 'Polinésia Francesa';

$GLOBALS["lang"]['French Southern Territories'] = 'Territórios Franceses do Sul';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Perguntas frequentes';

$GLOBALS["lang"]['Friday'] = 'Sexta-feira';

$GLOBALS["lang"]['From 100 Devices'] = 'De 100 Dispositivos';

$GLOBALS["lang"]['From 500 Devices'] = 'De 500 Dispositivos';

$GLOBALS["lang"]['From that page'] = 'Daquela página';

$GLOBALS["lang"]['full_name'] = 'Nome completo';

$GLOBALS["lang"]['Full Name'] = 'Nome completo';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Auditoria de nuvem completa com todos os detalhes de uma auditoria de Open-Audit regular e detalhes como o tipo e tamanho da máquina.';

$GLOBALS["lang"]['function'] = 'Função';

$GLOBALS["lang"]['Function'] = 'Função';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPO POR';

$GLOBALS["lang"]['Gabon'] = 'Gabão.';

$GLOBALS["lang"]['Galician'] = 'Galego';

$GLOBALS["lang"]['Gambia the'] = 'Gâmbia o';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Análise de Gap (opcional)';

$GLOBALS["lang"]['gateway'] = 'Portão';

$GLOBALS["lang"]['Gateway'] = 'Portão';

$GLOBALS["lang"]['gateways'] = 'Portais';

$GLOBALS["lang"]['Gateways'] = 'Portais';

$GLOBALS["lang"]['Generated By'] = 'Gerado por';

$GLOBALS["lang"]['geo'] = 'Geo.';

$GLOBALS["lang"]['Geo'] = 'Geo.';

$GLOBALS["lang"]['Geographical Maps'] = 'Mapas geográficos';

$GLOBALS["lang"]['Georgia'] = 'Georgia.';

$GLOBALS["lang"]['German'] = 'Alemão';

$GLOBALS["lang"]['Germany'] = 'Alemanha';

$GLOBALS["lang"]['Get Lat/Long'] = 'Obter Lat / Long';

$GLOBALS["lang"]['Get News'] = 'Receba notícias';

$GLOBALS["lang"]['Get Started'] = 'Comecem.';

$GLOBALS["lang"]['Get a Free License'] = 'Pegue uma licença grátis.';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Conheça a plataforma Open-AudIT e explore algumas de suas características.';

$GLOBALS["lang"]['Getting Started'] = 'Começando';

$GLOBALS["lang"]['Ghana'] = 'Gana.';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar.';

$GLOBALS["lang"]['Github'] = 'Github.';

$GLOBALS["lang"]['Global Discovery Options'] = 'Opções de Descoberta Global';

$GLOBALS["lang"]['Global area network'] = 'Rede de área global';

$GLOBALS["lang"]['Go'] = 'Vá.';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Volte para seu servidor Open-AudIT e crie uma descoberta com o endereço IP do computador Windows como a sub-rede (isto salvará ter que descobrir toda a sub-rede novamente). Execute a descoberta, tomando nota de qualquer problema. Para qualquer problema encontrado, tome medidas apropriadas.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Vá para o Windows PC (ou use RDP) e faça login como o usuário usado pelo seu conjunto de credenciais de descoberta.';

$GLOBALS["lang"]['Go to menu'] = 'Vá para o menu.';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Vá para o <i>Aplicações</i> -> <i>Registros de aplicativos</i> item de menu à esquerda. Procure por Open-AudIT. Clique na entrada Open-AudIT na lista (supondo que você nomeou o aplicativo Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Vá para o <i>Certificados e segredos</i> item do menu em baixo <i>Gerenciar</i> no menu central.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Vá para o <i>Um único sinal.</i> item do menu e clique em SAML para <i>Selecione um único método de sinal.</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Credenciais';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Chave';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Ótimo, então você pode ajudar! Envie Primeiro Acene o texto mostrado na GUI e o que deve ser mostrado. Vamos incluir que no arquivo de idioma, então, indo em frente, a tradução é melhorada e você não precisa se preocupar em atualizá-lo para cada lançamento!';

$GLOBALS["lang"]['Greater Than'] = 'Maior que';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Maior ou Igual';

$GLOBALS["lang"]['Greece'] = 'Grécia';

$GLOBALS["lang"]['Greek'] = 'Grego.';

$GLOBALS["lang"]['Green Query'] = 'Consulta Verde';

$GLOBALS["lang"]['Greenland'] = 'Groenlândia';

$GLOBALS["lang"]['Grenada'] = 'Granada.';

$GLOBALS["lang"]['Group'] = 'Grupo';

$GLOBALS["lang"]['group_by'] = 'Grupo By';

$GLOBALS["lang"]['Group By'] = 'Grupo By';

$GLOBALS["lang"]['group_id'] = 'ID do grupo';

$GLOBALS["lang"]['Group ID'] = 'ID do grupo';

$GLOBALS["lang"]['groups'] = 'Grupos';

$GLOBALS["lang"]['Groups'] = 'Grupos';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Grupos são usados como listas simples de dispositivos que correspondem às condições necessárias. Se solicitado usando o JSON eles devolvem uma lista de <i>Dispositivos.</i> Apenas. Se solicitado usando a interface web, eles retornam a lista de atributos de coluna padrão. Grupos podem ser usados para Integração, Baselines e outros itens.';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadalupe.';

$GLOBALS["lang"]['Guam'] = 'Guam.';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey.';

$GLOBALS["lang"]['guest_device_id'] = 'ID do dispositivo convidado';

$GLOBALS["lang"]['Guest Device ID'] = 'ID do dispositivo convidado';

$GLOBALS["lang"]['guid'] = 'Guid.';

$GLOBALS["lang"]['Guid'] = 'Guid.';

$GLOBALS["lang"]['Guinea'] = 'Guiné';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guiné-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guiana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'Revisão HW';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Índice do disco rígido';

$GLOBALS["lang"]['Hard Drive Index'] = 'Índice do disco rígido';

$GLOBALS["lang"]['Hardware'] = 'Hardware.';

$GLOBALS["lang"]['hardware_revision'] = 'Revisão de Hardware';

$GLOBALS["lang"]['Hardware Revision'] = 'Revisão de Hardware';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Esta política foi aplicada nesta organização.';

$GLOBALS["lang"]['hash'] = 'Hash.';

$GLOBALS["lang"]['Hash'] = 'Hash.';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Faça o agente sempre executar o mais recente script de auditoria (se você atualizar Open-AudIT e copiar manualmente os scripts para os alvos, em seguida, definir cron - você precisará atualizar esses scripts para cada atualização).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Faça seu usuário abrir um prompt de comando (usando <i>Corra como administrador.</i>). Colar o abaixo no prompt para baixar o agente.';

$GLOBALS["lang"]['Head'] = 'Cabeça.';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Ilha Ouvida e Ilhas McDonald';

$GLOBALS["lang"]['Hebrew'] = 'Hebraico';

$GLOBALS["lang"]['height'] = 'Altura';

$GLOBALS["lang"]['Height'] = 'Altura';

$GLOBALS["lang"]['Height in RU'] = 'Altura na RU';

$GLOBALS["lang"]['Help'] = 'Socorro!';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Ajuda e perguntas frequentes';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Ajuda a gerenciar e mitigar os riscos de segurança da informação.';

$GLOBALS["lang"]['Hide Audit Window'] = 'Ocultar janela de auditoria';

$GLOBALS["lang"]['high'] = 'Alto.';

$GLOBALS["lang"]['High'] = 'Alto.';

$GLOBALS["lang"]['High Availability'] = 'Alta Disponibilidade';

$GLOBALS["lang"]['Hindi'] = 'Hindi.';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Santa Sé (Estado da Cidade do Vaticano)';

$GLOBALS["lang"]['Home'] = 'Casa';

$GLOBALS["lang"]['home'] = 'Casa';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Home area network'] = 'Rede de área residencial';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong.';

$GLOBALS["lang"]['host'] = 'Host.';

$GLOBALS["lang"]['Host'] = 'Host.';

$GLOBALS["lang"]['hostname'] = 'Nome da máquina';

$GLOBALS["lang"]['Hostname'] = 'Nome da máquina';

$GLOBALS["lang"]['hour'] = 'Hora';

$GLOBALS["lang"]['Hour'] = 'Hora';

$GLOBALS["lang"]['How Does It Work?'] = 'Como funciona?';

$GLOBALS["lang"]['How Does it Work?'] = 'Como funciona?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Quanto tempo leva?';

$GLOBALS["lang"]['How and Why is'] = 'Como e por quê?';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Como e por que Open-AudIT é mais seguro';

$GLOBALS["lang"]['How do they work?'] = 'Como eles funcionam?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Como um Device Seed Discovery acha IPs conhecidos?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Quanto tempo o comando levou para executar.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Quanto tempo Nmap deve esperar por uma resposta, por dispositivo.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Quantos circuitos de alimentação para esta prateleira.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Quantas políticas resultam em um fracasso.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Quantas políticas resultam em um passe.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Quantas tomadas de força nesta prateleira.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Quantas unidades em altura é essa prateleira?';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Com que frequência o colecionador deveria pedir ao servidor uma tarefa.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Como devemos selecionar dispositivos para serem integrados (usando um atributo, consulta ou um grupo).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Como a vulnerabilidade é explorada (por exemplo, rede, adjacente, local, física).';

$GLOBALS["lang"]['How to compare'] = 'Como comparar';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Explicação humana da vulnerabilidade.';

$GLOBALS["lang"]['Hungarian'] = 'Húngaro';

$GLOBALS["lang"]['Hungary'] = 'Hungria';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hiperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hiperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Eu li a EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Espero que este posto tenha aliviado qualquer preocupação que tenha com a Open-AudIT e Segurança. Se tiver alguma pergunta, não hesite em nos contatar aqui na FirstWave. Estamos sempre felizes em discutir suas preocupações e necessidades. E talvez se sua pergunta não for algo que eu tenha abordado aqui, posso adicioná-la aqui para futuros usuários.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'Sim';

$GLOBALS["lang"]['IMPORTANT'] = 'IMPORTANTE';

$GLOBALS["lang"]['INPUTS'] = 'INPUTS';

$GLOBALS["lang"]['IOS Version'] = 'Versão do IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Endereço IP';

$GLOBALS["lang"]['IP Addresses'] = 'Endereços IP';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Última Vestida';

$GLOBALS["lang"]['IP Set By'] = 'IP definido por';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Apenas ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Islândia';

$GLOBALS["lang"]['icon'] = 'Ícone';

$GLOBALS["lang"]['Icon'] = 'Ícone';

$GLOBALS["lang"]['Icon and Text'] = 'Ícone e texto';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Apenas ícone, texto ou ícone e texto.';

$GLOBALS["lang"]['id_internal'] = 'Id Interno';

$GLOBALS["lang"]['Id Internal'] = 'Id Interno';

$GLOBALS["lang"]['id_number'] = 'Número de identificação';

$GLOBALS["lang"]['Id Number'] = 'Número de identificação';

$GLOBALS["lang"]['identification'] = 'Identificação';

$GLOBALS["lang"]['Identification'] = 'Identificação';

$GLOBALS["lang"]['Identify information assets'] = 'Identifique os ativos.';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Identifique os interessados e seus requisitos.';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Identifique as partes interessadas e atribua papéis.';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identifique os dispositivos que são seus exemplares, ou <i>Imagem de ouro</i> Você quer comparar dispositivos similares contra.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Identificar e avaliar riscos de segurança';

$GLOBALS["lang"]['If'] = 'Sim';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Se um dispositivo for descoberto individualmente usando o <i>Descobrir dispositivo</i> link na página de detalhes do dispositivo, primeiro verificamos se este dispositivo foi descoberto anteriormente (por Discovery) e, se assim for, usamos as opções de descoberta dessa varredura. Se ainda não foi descoberto, voltamos ao item de configuração discovery_default_scan_option as configurações.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Se um novo Org é criado, um nome de grupo LDAP é automaticamente derivado do nome. Por exemplo, se um novo Org é criado e é chamado Test, o grupo LDAP correspondente será chamado teste aberto-audit_orgs_.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Se uma porta responder com filtro, devemos considerá-la disponível.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Se uma porta responder com filtro aberto, devemos considerá-la disponível.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Se um dispositivo remoto não existe nos dispositivos Open-AudIT selecionados, devemos excluí-lo do sistema externo.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Se um dispositivo Open-AudIT foi alterado, devemos atualizar o sistema externo.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Se um dispositivo Open-AudIT não estiver no sistema externo, devemos criá-lo.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Se um agente relatar que seu IP primário está nesta subrede, execute as ações.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Se algum destes portos (comma separado, sem espaços) são detectados, suponha que SSH está correndo sobre eles e usá-los para auditoria. Não há necessidade de adicionar esta porta às portas TCP Personalizadas - será adicionada automaticamente.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Se nenhum operador for especificado, o padrão é =. Propriedades devem ser totalmente qualificadas - ou seja, dispositivos. Nome do host (não apenas nome do host).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Se nenhum valor está presente, forneça esse valor. Para system.nmis_group/configuration. Grupo que usamos.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Se definido, possui uma matriz JSON de colunas de dispositivos específicos que este usuário escolheu para ver, além da configuração padrão.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Se a Família OS (como relatado pelo dispositivo) contém este item, passe.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Se o servidor Open-AudIT tem Colecionadores reportando-se a ele, uma queda adicional é fornecida. Você pode selecionar isso para especificar qual Colecionador a tarefa deve continuar. Apenas tarefas Discovery são suportadas para Colecionadores.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Se a família agente OS (caso insensível) contém esta corda, execute as ações.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Se o binário não for encontrado em nenhum desses locais, uma mensagem de aviso será exibida no instalador.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Se as seguintes condições forem cumpridas:<br/><ul><li>Um papel tem um ad_group atribuído</li><li>Um Org tem um ad_group atribuído</li><li>Um LDAP Servidor tem papéis de uso definidos para y</li><li>um usuário existe no LDAP (sendo o Active Directory ou OpenLDAP) e está nos ad_groups atribuídos</li></ul>Esse usuário pode acessar o Open-AudIT sem uma conta no Open-AudIT precisando ser criada. Open-AudIT irá consultar o LDAP em questão e se o usuário estiver nos grupos necessários, mas não no Open-AudIT, seus atributos de usuário (nome, nome completo, e-mail, papéis, orgs, etc) dentro do Open-AudIT serão automaticamente preenchidos e eles serão logados.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Se o campo local é verdadeiro (bool) ou y (string) ou Y (string) ou 1 (inteiro) então defina os dados externos para 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Se o campo local é verdadeiro (bool) ou y (string) ou Y (string) ou 1 (inteiro) então defina os dados externos para y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Se o IP primário (como relatado pelo dispositivo) estiver nesta subrede, passe.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Se a conta do usuário não existe realmente dentro Open-AudIT e <code>use_authorisation</code> Está definido, o usuário será criado. Se existir, detalhes como e-mail, nome completo, etc. serão preenchidos.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Se o usuário não tem credenciais válidas ou não está em pelo menos um papel e grupo Open-AudIT (quando usar <code>use_authorisation</code>), Open-AudIT vai voltar a usar os detalhes locais do usuário Open-AudIT e tentar autenticação e autorização lá. Se falhar, o usuário não terá acesso.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Se o usuário entrar no Open-AudIT não tem acesso ao LDAP de busca, você pode usar outra conta que tenha esse acesso.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Se o usuário entrar no Open-AudIT não tem acesso para pesquisar OpenLDAP, você pode usar outra conta que tenha esse acesso. Use a conta e a senha para configurar isso.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Se o valor não estiver definido, a hora atual será usada.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Se o valor for definido, o valor da hora será usado.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Se essa mudança não funcionar para você, nem tudo está perdido. Nós adicionamos um item de configuração (definido para n por padrão, então ele não usará esta nova opção fora da caixa) chamada discovery_use_org_id_match. Se você mudar para y então o OrgID atribuído ao dispositivo pela descoberta será usado nas regras de jogo relevantes.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Se tantos minutos (ou mais) passaram desde que o servidor viu o dispositivo, passe.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Se tantos ou mais minutos passaram desde que o dispositivo contatou o servidor, execute as ações.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Se isso ocorrer então o problema que você está vendo está relacionado com o controle da mesa sendo usado na página web. Só guarda em memória o estado das caixas de cheques para a página atual ser vista. Se você fizer seleções, então as seleções serão perdidas. Você pode, no entanto, realizar o que quiser expandindo o número de dispositivos mostrados em cada página. No canto superior esquerdo está um drop-down chamado "gravações por página"; use isso para expandir o número de entradas exibidas até que você veja tudo o que você quer selecionar para Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Se detectarmos o software de gestão San, devemos fazer uma auto-descoberta antes da consulta.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Se você adicionar um tipo de localização, adicione esses ícones para';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Se você adicionar um tipo de dispositivo, para exibir o ícone associado você terá que copiar manualmente o arquivo formatado .svg para o diretório';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Se você é um cliente apoiado FirstWave, alguns itens vão facilitar sua ajuda. Abra um ticket de suporte com a FirstWave e anexe o arquivo de registro. Também inclui a saída do botão de suporte na parte superior direita do';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Se você é um cliente suportado e abrir um ticket de suporte com a FirstWave, por favor, anexe esses arquivos.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Se você está tendo problemas com as chaves da API do Google Maps ou sua empresa não tem acesso para criar chaves da API do Google Maps, por favor, contate a equipe de suporte da FirstWave.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Se você está no Windows ou seu servidor NMIS é remoto, você precisará fornecer o URL, nome de usuário e senha para acessar esse servidor.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Se você estiver em uma boa conexão de banda larga ou ethernet, eu recomendaria sempre usar -T4 (Agressivo). Algumas pessoas amam -T5 (Insana) embora seja muito agressivo para o meu gosto. Às vezes, as pessoas especificam -T2 (polite) porque acham que é menos provável que os anfitriões caiam ou porque se consideram educados em geral. Eles muitas vezes não percebem o quão lento -T2 realmente é. A varredura pode demorar dez vezes mais do que uma varredura padrão. Quedas de máquina e problemas de largura de banda são raros com as opções de tempo padrão -T3 (Normal) e então eu normalmente recomendo isso para scanners cautelosos. Omitir detecção de versão é muito mais eficaz do que jogar com valores de tempo na redução desses problemas.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Se você está executando um sistema RedHat ou Centos e você atualizou Nmap, por favor, reponha o SUID no binário por';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Se você está executando um servidor Open-AudIT no Linux, isso não afeta você.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Se você estiver usando Open-AudIT no Windows ou se seu servidor NMIS não estiver em seu Open-AudIT Server (no caso de algumas instalações Linux), você precisará fornecer credenciais de acesso e uma URL para o NMIS remoto - mas isso é tudo! Sim - Integração entre NMIS e Open-AudIT até mesmo funcionam com Windows baseado em Open-AudIT agora!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Se você escolher um Colecionador, será programado para executar no próximo limite de 5 minutos.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Se você normalmente definir dispositivos_atribuídos_para_org e o item de configuração estiver habilitado, então o OrgID será usado para refinar ainda mais a correspondência.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Se você normalmente não definir dispositivos atribuídos paraorg, então ele não terá efeito. Nós só checamos usando o OrgID se ele foi definido em descoberta (ou manualmente em um script de auditoria) e ativado na configuração.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Se você habilitar o item de configuração, use a descoberta para atribuir uma Org e, em seguida, mude o OrgID de um dispositivo após a descoberta, então você provavelmente terá um novo dispositivo criado na próxima vez que a descoberta for executada. Neste caso, você provavelmente deveria apenas desativar dispositivos designados para_org antes de executar descobertas subsequentes. Isso é porque (neste caso) você disse Open-AudIT <i>Estes dispositivos desta descoberta pertencem a Org X.<i>, mas então mudou a Org do dispositivo. Você mudou as informações dos dispositivos armazenados. Neste caso, não há mais um dispositivo pertencente à Org X, então criamos um novo.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Se você tem software Anti-Virus rodando, permitindo que os serviços de Opmantek (omkd), Apache (apache2.2) e MySQL (mysql) para iniciar e executar auto é essencial. Esses serviços são usados pela Open-AudIT. Só precisa fazer isso uma vez. Se o seu programa Anti-Virus continuar te alertando sobre Open-AudIT, por favor, publique nos fóruns ou envie um e-mail para apoiar com o nome e versão do seu software Anti-Virus.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Se você tem credenciais de trabalho, pode esperar toda a informação possível.<br/><br/>Obviamente, a melhor maneira de usar Open-AudIT é ter credenciais de trabalho para os dispositivos que estão sendo descobertos (ser WMI, SSH, ou credenciais SNMP).<br/><br/>Também temos uma página de auditoria sem credenciais.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Se você incluir o campo \"id\" <strong>e</strong> Defina com um número, esse item será atualizado ao invés de criado.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Se precisar configurar o acesso ao Active Directory, pode usar o exemplo de <code>cn=Users,dc=your,dc=domain,dc=com</code> para o seu <code>base_dn</code>. Não há necessidade de definir <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Se você precisa configurar o acesso OpenLDAP para seus usuários e um determinado acesso de usuários DN é normalmente <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> Então você deve definir <code>base_dn</code> para <code>dc=your,dc=domain,dc=com</code> e <code>user_dn</code> para <code>uid=@username@@domain,cn=People</code>. As palavras especiais <code>@username</code> e <code>@domain</code> será substituído pelos detalhes de login fornecidos pelo usuário na página de login.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Se você executar a descoberta em uma subrede que o servidor (ou coletor) está diretamente instalado, você pode esperar o seguinte para responder dispositivos';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Se você executar a descoberta em uma subrede que seu servidor (ou coletor) não está diretamente instalado, você pode esperar o seguinte para responder dispositivos';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Se você selecionar um tipo de lista, um campo adicional aparecerá chamado Valores. Deveria colocar uma lista separada de valores selecionáveis aqui. Eles serão exibidos em uma caixa sempre que o campo for editado.';

$GLOBALS["lang"]['If you set the values for'] = 'Se você definir os valores para';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Se quiserem forçar seus agentes a usarem uma determinada configuração, podem fornecer a identificação da entrada dos agentes a usar, como abaixo (substitua $id pelo número da entrada dos agentes). Quando este agente for instalado, ele vai verificar com o Sevrer e <strong>Apenas</strong> Verifique aquele indivíduo. Adições de agentes (testes e ações). Isso pode ser útil se você for um MSP - criar uma entrada de agentes para um cliente em particular e ter seus dispositivos todos usam esta entrada, que os atribui a uma Org e Localização.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Se você deseja entrar e personalizar a integração, clique no botão Avançado (e tente não ser sobrecarregado!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Se você deseja executar uma Discovery em um dispositivo fornecido externamente, selecione a opção e quando a integração é criada, então é a Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Se você gostaria de usar o roteiro fora da Discovery nós criamos outro ponto final chamado <i>scripts</i>. Veja a documentação.';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Se seu usuário não tem <i>Corra como administrador.</i> direitos, eles ainda podem baixar o agente (primeiro comando acima) e executá-lo para apresentar uma auditoria como abaixo. Será uma auditoria única sem que o agente seja instalado ou agendado.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Se a última mudança';

$GLOBALS["lang"]['Iflastchange'] = 'Se a última mudança';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignorar SSL inválido';

$GLOBALS["lang"]['Ignored'] = 'Ignorado.';

$GLOBALS["lang"]['image'] = 'Imagem';

$GLOBALS["lang"]['Image'] = 'Imagem';

$GLOBALS["lang"]['Images'] = 'Imagens';

$GLOBALS["lang"]['impact_availability'] = 'Disponibilidade de Impacto';

$GLOBALS["lang"]['Impact Availability'] = 'Disponibilidade de Impacto';

$GLOBALS["lang"]['impact_confidentiality'] = 'Confidencialidade do Impacto';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Confidencialidade do Impacto';

$GLOBALS["lang"]['impact_integrity'] = 'Integridade do Impacto';

$GLOBALS["lang"]['Impact Integrity'] = 'Integridade do Impacto';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Implementar controles e procedimentos selecionados.';

$GLOBALS["lang"]['Implementation'] = 'Implementação';

$GLOBALS["lang"]['implementation_notes'] = 'Notas de implementação';

$GLOBALS["lang"]['Implementation Notes'] = 'Notas de implementação';

$GLOBALS["lang"]['Import'] = 'Importar';

$GLOBALS["lang"]['Import Example Data'] = 'Importar Dados de Exemplo';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importar várias coleções usando um CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Oportunidades de Melhoria';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Oportunidades de Melhoria';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Melhora a continuidade e resiliência dos negócios.';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Em uma segunda guia ou janela vá para o seu console OKTA e clique <i>Criar integração de aplicativos</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Em uma segunda guia ou janela de sinal para o seu';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Na minha opinião pessoal, a melhor maneira de encontrar e auditar cada item em sua rede é uma descoberta de sementes para cada sub-rede, restrita a essa sub-rede (usando credenciais). Seed Discoveries usa interruptor, roteador e computador MAC tabelas de endereço para não perder um único dispositivo. Se está conectado à rede e usa TCP/IP, um interruptor/roteador/computador tem que saber que está lá - é assim que TCP/IP funciona. Combine isso com portas TCP e/ou UDP personalizadas e então você deve ser capaz de determinar o tipo de dispositivo também. Mas essa é minha preferência pessoal.';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Para que o Open-AudIT possa aplicar permissões de usuários em itens, mandamos o usuário de <code>WHERE @filter</code>. Se você não usar este formato, a consultaCreateForm lançará um aviso. Apenas usuários com o papel de administrador são autorizados a criar consultas que carecem desse atributo e mesmo assim, apenas após o item de configuração para <i>Consultas avançadas</i> foi ativado.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Para ativar o Google Maps, você precisará de uma chave de API do Google. Siga este link e faça login com o seu Conta do Google,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Para usar a API Azure Rest, você precisará criar um aplicativo Azure Active Directory que é usado para autenticação.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Para usar esta funcionalidade, deve ser ativado na configuração - clique';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Na lista (comma separado)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'No caso de <code>in</code> e <code>notin</code>, você deve incluir os valores entre parênteses redondos e separá-los usando uma vírgula (apenas uma vírgula, não uma vírgula, então espaço).<br/><br/>Com estes operadores você pode filtrar completamente.<br/><br/>Quando você adiciona dados e filtra em várias colunas, essas colunas são combinadas usando <strong>E</strong>. Você não pode filtrar usando um <strong>OU</strong> condição. Com a inclusão de <code>notin</code>Você deve conseguir que a maioria das buscas funcione. E para aqueles que realmente exigem seleções sem suporte e complexas, você sempre pode escrever uma consulta real.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'No caso em que armazenamos vários campos (geralmente no formato JSON) dentro de um campo MySQL BIGTEXT (por exemplo: credenciais. credenciais - a coluna de credenciais na tabela de credenciais), você deve usar o formato';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'No comando prompt shell, navegue até o diretório de download (provavelmente <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Inativo';

$GLOBALS["lang"]['Incomplete'] = 'Incompleto';

$GLOBALS["lang"]['Index'] = 'Índice';

$GLOBALS["lang"]['India'] = 'Índia';

$GLOBALS["lang"]['Indonesia'] = 'Indonésia';

$GLOBALS["lang"]['Indonesian'] = 'Indonésio';

$GLOBALS["lang"]['Info'] = 'Informação';

$GLOBALS["lang"]['Information only.'] = 'Apenas informação.';

$GLOBALS["lang"]['Informational'] = 'Informação';

$GLOBALS["lang"]['initial_size'] = 'Tamanho inicial';

$GLOBALS["lang"]['Initial Size'] = 'Tamanho inicial';

$GLOBALS["lang"]['Initial login credentials are'] = 'As credenciais iniciais de login são';

$GLOBALS["lang"]['Initiation'] = 'Iniciação';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Entrada';

$GLOBALS["lang"]['Input Type'] = 'Tipo de Entrada';

$GLOBALS["lang"]['inputs'] = 'Entradas';

$GLOBALS["lang"]['Inputs'] = 'Entradas';

$GLOBALS["lang"]['Insane'] = 'Louca.';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Insira uma nova entrada.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Insira dados de exemplo e descubra tudo que o Open-AudIT pode dizer.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Insira o seu Licença comprada Chave';

$GLOBALS["lang"]['install'] = 'Instalar';

$GLOBALS["lang"]['Install'] = 'Instalar';

$GLOBALS["lang"]['install_date'] = 'Data de instalação';

$GLOBALS["lang"]['Install Date'] = 'Data de instalação';

$GLOBALS["lang"]['install_directory'] = 'Instalar diretório';

$GLOBALS["lang"]['Install Directory'] = 'Instalar diretório';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Instale OpenScap se necessário';

$GLOBALS["lang"]['install_source'] = 'Instalar fonte';

$GLOBALS["lang"]['Install Source'] = 'Instalar fonte';

$GLOBALS["lang"]['Install Support'] = 'Instalar suporte';

$GLOBALS["lang"]['installed_by'] = 'Instalado por';

$GLOBALS["lang"]['Installed By'] = 'Instalado por';

$GLOBALS["lang"]['installed_on'] = 'Instalado em';

$GLOBALS["lang"]['Installed On'] = 'Instalado em';

$GLOBALS["lang"]['Installing'] = 'Instalando';

$GLOBALS["lang"]['Installing on Linux'] = 'Instalando no Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Instalando no MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Instalando no Windows';

$GLOBALS["lang"]['instance'] = 'Instância';

$GLOBALS["lang"]['Instance'] = 'Instância';

$GLOBALS["lang"]['instance_ident'] = 'Identificador de instância';

$GLOBALS["lang"]['Instance Ident'] = 'Identificador de instância';

$GLOBALS["lang"]['instance_options'] = 'Opções da instância';

$GLOBALS["lang"]['Instance Options'] = 'Opções da instância';

$GLOBALS["lang"]['instance_provider'] = 'Provedor de instância';

$GLOBALS["lang"]['Instance Provider'] = 'Provedor de instância';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Reserva de instância Ident';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Reserva de instância Ident';

$GLOBALS["lang"]['instance_state'] = 'Estado de instância';

$GLOBALS["lang"]['Instance State'] = 'Estado de instância';

$GLOBALS["lang"]['instance_tags'] = 'Marcas de instância';

$GLOBALS["lang"]['Instance Tags'] = 'Marcas de instância';

$GLOBALS["lang"]['instance_type'] = 'Tipo de instância';

$GLOBALS["lang"]['Instance Type'] = 'Tipo de instância';

$GLOBALS["lang"]['Integer'] = 'Inteiro.';

$GLOBALS["lang"]['Integration'] = 'Integração';

$GLOBALS["lang"]['integrations'] = 'Integração';

$GLOBALS["lang"]['Integrations'] = 'Integração';

$GLOBALS["lang"]['integrations_id'] = 'ID de Integração';

$GLOBALS["lang"]['Integrations ID'] = 'ID de Integração';

$GLOBALS["lang"]['integrations_log'] = 'Diário de Integração';

$GLOBALS["lang"]['Integrations Log'] = 'Diário de Integração';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'As integrações podem ser programadas como desejado. Isso é deixado para o usuário.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'As integrações podem ser programadas conforme Discoveries, Consultas, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Painéis Interativos';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Painéis interativos dão visibilidade instantânea ao status do inventário de rede permitindo que as equipes de TI localizem dispositivos recém-descobertos e um comportamento incomum do dispositivo.';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'Interface ID';

$GLOBALS["lang"]['Interface ID'] = 'Interface ID';

$GLOBALS["lang"]['interface_type'] = 'Tipo de Interface';

$GLOBALS["lang"]['Interface Type'] = 'Tipo de Interface';

$GLOBALS["lang"]['Internal'] = 'Interno.';

$GLOBALS["lang"]['Internal Audit'] = 'Auditoria Interna';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Auditoria Interna e Revisão';

$GLOBALS["lang"]['Internal Field Name'] = 'Nome do Campo Interno';

$GLOBALS["lang"]['Internal ID'] = 'ID interno';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'JSON interno de fichas de acesso válidas para este usuário.';

$GLOBALS["lang"]['Introduction'] = 'Introdução';

$GLOBALS["lang"]['invoice'] = 'Fatura';

$GLOBALS["lang"]['Invoice'] = 'Fatura';

$GLOBALS["lang"]['invoice_id'] = 'ID da fatura';

$GLOBALS["lang"]['Invoice ID'] = 'ID da fatura';

$GLOBALS["lang"]['invoice_item'] = 'Itens de Fatura';

$GLOBALS["lang"]['Invoice Item'] = 'Itens de Fatura';

$GLOBALS["lang"]['ios_version'] = 'Versão Ios';

$GLOBALS["lang"]['Ios Version'] = 'Versão Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Endereço IP Externo A';

$GLOBALS["lang"]['Ip Address External A'] = 'Endereço IP Externo A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Endereço IP Externo B';

$GLOBALS["lang"]['Ip Address External B'] = 'Endereço IP Externo B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Endereço IP Interno A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Endereço IP Interno A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Endereço IP Interno B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Endereço IP Interno B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Audited Conde';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Audited Conde';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Discovered Conde';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Discovered Conde';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Activado';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Activado';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Responding Conde';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Responding Conde';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Scaned Conde';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Scaned Conde';

$GLOBALS["lang"]['Iran'] = 'Irã';

$GLOBALS["lang"]['Iraq'] = 'Iraque';

$GLOBALS["lang"]['Ireland'] = 'Irlanda';

$GLOBALS["lang"]['Irish'] = 'Irlandês';

$GLOBALS["lang"]['Is FRU'] = 'É FRU';

$GLOBALS["lang"]['is_fru'] = 'É Fru.';

$GLOBALS["lang"]['Is Fru'] = 'É Fru.';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'O servidor NMIS é local ou remoto?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Esta conta está ativa? Se estiver pronto para <code>n</code>O usuário não pode fazer logon.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Esta consulta está restrita a clientes licenciados.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Esta tarefa está habilitada (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Ilha de Man';

$GLOBALS["lang"]['Israel'] = 'Israel';

$GLOBALS["lang"]['Issue'] = 'Questão';

$GLOBALS["lang"]['issuer'] = 'Emissor';

$GLOBALS["lang"]['Issuer'] = 'Emissor';

$GLOBALS["lang"]['issuer_name'] = 'Nome do emissor';

$GLOBALS["lang"]['Issuer Name'] = 'Nome do emissor';

$GLOBALS["lang"]['Issues'] = 'Problemas';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Ele. <i>Apenas funciona.</i> com NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Está disponível no Menu -> Socorro!';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'É importante notar que quando Open-AudIT determinar uma combinação de quaisquer propriedades definidas para <i>Sim.</i> Deve corresponder exatamente (e não estar em branco) para que o Open-AudIT determine que o dispositivo descoberto corresponde a um dispositivo já no banco de dados. Se nenhuma das propriedades marcadas <i>Sim.</i> Então, uma nova entrada de dispositivo será criada, o que pode resultar em entradas duplicadas de dispositivo. Em situações em que as propriedades são duplicadas, por exemplo, um dbus_id é copiado durante um clone de VM, então um dispositivo existente pode incorretamente ser substituído/atualizado em vez de uma nova entrada sendo criada resultando em dispositivos faltando.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Não é incomum ter um espaço de endereço sobreposto em uma dada organização. Não é ideal, mas não é incomum.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'É muito comum que os fabricantes de placas-mãe de segundo nível não ajustem isso, para definir tudo. <i>0</i>É ou até mesmo tudo <i>F.</i>S.';

$GLOBALS["lang"]['Italian'] = 'Italiano';

$GLOBALS["lang"]['Italy'] = 'Itália';

$GLOBALS["lang"]['Items not in Baseline'] = 'Itens não no Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON para importar';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'Janeiro';

$GLOBALS["lang"]['Japan'] = 'Japão';

$GLOBALS["lang"]['Japanese'] = 'Japonês';

$GLOBALS["lang"]['Jersey'] = 'Jersey.';

$GLOBALS["lang"]['Jordan'] = 'Jordan.';

$GLOBALS["lang"]['July'] = 'Julho';

$GLOBALS["lang"]['June'] = 'Junho';

$GLOBALS["lang"]['Kazakhstan'] = 'Cazaquistão';

$GLOBALS["lang"]['Kenya'] = 'Quênia';

$GLOBALS["lang"]['kernel_version'] = 'Versão do Kernel';

$GLOBALS["lang"]['Kernel Version'] = 'Versão do Kernel';

$GLOBALS["lang"]['Key'] = 'Chave';

$GLOBALS["lang"]['Key Components'] = 'Componentes-chave';

$GLOBALS["lang"]['Key Password (optional)'] = 'Senha da chave (opcional)';

$GLOBALS["lang"]['keys'] = 'Chaves';

$GLOBALS["lang"]['Keys'] = 'Chaves';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati.';

$GLOBALS["lang"]['Korea'] = 'Coreia';

$GLOBALS["lang"]['Korean'] = 'Coreano';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz'] = 'Quirguiz.';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'República Quirguiz';

$GLOBALS["lang"]['LDAP Group'] = 'Grupo LDAP';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'O LDAP foi procurado por esse usuário e sua conta foi encontrada.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'O LDAP foi procurado por esse usuário e sua conta não foi encontrada. Verifique os registros do servidor LDAP. As credenciais de usuário funcionaram, mas o usuário não foi encontrado. Também verifique se você especificou o atributo base DN correto quando criou o servidor LDAP em Open-AudIT.';

$GLOBALS["lang"]['lang'] = 'Lang.';

$GLOBALS["lang"]['Lang'] = 'Lang.';

$GLOBALS["lang"]['language'] = 'Linguagem';

$GLOBALS["lang"]['Language'] = 'Linguagem';

$GLOBALS["lang"]['Lao'] = 'Lao.';

$GLOBALS["lang"]['last_changed'] = 'Última Mudança';

$GLOBALS["lang"]['Last Changed'] = 'Última Mudança';

$GLOBALS["lang"]['last_finished'] = 'Último Concluído';

$GLOBALS["lang"]['Last Finished'] = 'Último Concluído';

$GLOBALS["lang"]['last_logon'] = 'Último logon';

$GLOBALS["lang"]['Last Logon'] = 'Último logon';

$GLOBALS["lang"]['Last Name'] = 'Sobrenome';

$GLOBALS["lang"]['last_os_update'] = 'Última atualização de Os';

$GLOBALS["lang"]['Last Os Update'] = 'Última atualização de Os';

$GLOBALS["lang"]['last_result'] = 'Último Resultado';

$GLOBALS["lang"]['Last Result'] = 'Último Resultado';

$GLOBALS["lang"]['last_run'] = 'Última corrida';

$GLOBALS["lang"]['Last Run'] = 'Última corrida';

$GLOBALS["lang"]['last_seen'] = 'Última Vista';

$GLOBALS["lang"]['Last Seen'] = 'Última Vista';

$GLOBALS["lang"]['last_seen_by'] = 'Última Vista Por';

$GLOBALS["lang"]['Last Seen By'] = 'Última Vista Por';

$GLOBALS["lang"]['last_user'] = 'Último Usuário';

$GLOBALS["lang"]['Last User'] = 'Último Usuário';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'O último é WMI. Para Windows como em Linux, um usuário com acesso nível Administrador é preferido (veja Configuração do Cliente Alvo no wiki).';

$GLOBALS["lang"]['lastModified'] = 'ÚltimaModificada';

$GLOBALS["lang"]['LastModified'] = 'ÚltimaModificada';

$GLOBALS["lang"]['latitude'] = 'Latitude';

$GLOBALS["lang"]['Latitude'] = 'Latitude';

$GLOBALS["lang"]['Latvia'] = 'Letónia';

$GLOBALS["lang"]['Latvian'] = 'Letão';

$GLOBALS["lang"]['Layout'] = 'Layout';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn Conta';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn Conta';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Senha';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Senha';

$GLOBALS["lang"]['Learn About'] = 'Saiba sobre';

$GLOBALS["lang"]['Learn More'] = 'Saiba mais';

$GLOBALS["lang"]['lease_expiry_date'] = 'Data de termo do contrato';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Data de termo do contrato';

$GLOBALS["lang"]['Lebanon'] = 'Líbano';

$GLOBALS["lang"]['legal_requirements'] = 'Requisitos legais';

$GLOBALS["lang"]['Legal Requirements'] = 'Requisitos legais';

$GLOBALS["lang"]['Lesotho'] = 'Lesoto.';

$GLOBALS["lang"]['Less Than'] = 'Menos do que';

$GLOBALS["lang"]['Less Than or Equals'] = 'Menos ou iguais';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Vamos depurar o registro. Copie o arquivo:';

$GLOBALS["lang"]['level'] = 'Nível';

$GLOBALS["lang"]['Level'] = 'Nível';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Nível de privilégios necessários para explorar (Nenhum, Baixo, Alto).';

$GLOBALS["lang"]['Liberia'] = 'Libéria';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Bibliotecas (ou seja, código que outro programa pode incluir). Estes são tipicamente itens como extensões do Wordpress, extensões drupal, bibliotecas node.js, bibliotecas Android / iPhone / Windows, bibliotecas python, etc.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Jamahiriya Árabe Líbia';

$GLOBALS["lang"]['License'] = 'Licença.';

$GLOBALS["lang"]['License Key'] = 'Chave da licença';

$GLOBALS["lang"]['License Required'] = 'Licença necessária.';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Usuários licenciados são livres para adicionar ou modificar as regras como achar melhor. Se você tem um dispositivo com um OID SNMP que não corresponde a um modelo já no arquivo - agora você pode adicioná-lo facilmente. Chega de esperar por um remendo e adicioná-lo à base de códigos para você.<br/><br/>Quando você criar uma entrada de regras, você precisará fornecer um nome e uma lista de entradas e saídas. As entradas e saídas são armazenadas como matrizes JSON dentro do banco de dados.<br/><br/>Entradas têm uma tabela e atributo, um operador e um valor. Ao executar a condição, funciona assim: Se a tabela de $. $atribute $operator $valor, então aplique as saídas.<br/><br/>Uma regra de exemplo para combinar um OID SNMP e definir o modelo está abaixo.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Licenças';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein.';

$GLOBALS["lang"]['Like'] = 'Como...';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Como a maioria dos outros atributos, Campos Adicionais podem ser editados em massa. Use a função Bulk Edit como normalmente faria e verá que os Campos Adicionais estão disponíveis para entrada.';

$GLOBALS["lang"]['Like versus Equals'] = 'Como contra iguais';

$GLOBALS["lang"]['limit'] = 'Limite';

$GLOBALS["lang"]['Limit'] = 'Limite';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Limite a consulta aos primeiros itens X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Limitado a 100 fileiras.';

$GLOBALS["lang"]['line_amount'] = 'Quantidade da Linha';

$GLOBALS["lang"]['Line Amount'] = 'Quantidade da Linha';

$GLOBALS["lang"]['Line Graph'] = 'Gráfico de Linha';

$GLOBALS["lang"]['line_number_a'] = 'Linha número A';

$GLOBALS["lang"]['Line Number A'] = 'Linha número A';

$GLOBALS["lang"]['line_number_b'] = 'Linha número B.';

$GLOBALS["lang"]['Line Number B'] = 'Linha número B.';

$GLOBALS["lang"]['line_text'] = 'Texto da Linha';

$GLOBALS["lang"]['Line Text'] = 'Texto da Linha';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Os gráficos devem retornar data ou data, descrição ou descrição e contagem.';

$GLOBALS["lang"]['link'] = 'Link';

$GLOBALS["lang"]['Link'] = 'Link';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Avançado)';

$GLOBALS["lang"]['Linked Files'] = 'Arquivos ligados';

$GLOBALS["lang"]['links'] = 'Links';

$GLOBALS["lang"]['Links'] = 'Links';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Liga esta descoberta à nuvem associada (se necessário). Links para <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Links para <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Links para <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Links para <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Pacotes Linux';

$GLOBALS["lang"]['List'] = 'Lista';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Listar todas as portas NMAP, protocolos e programas para cada dispositivo';

$GLOBALS["lang"]['List Devices'] = 'Listar dispositivos';

$GLOBALS["lang"]['List Discoveries'] = 'List Discoveries';

$GLOBALS["lang"]['list_table_format'] = 'Formato da tabela da lista';

$GLOBALS["lang"]['List Table Format'] = 'Formato da tabela da lista';

$GLOBALS["lang"]['List Tables'] = 'Listar tabelas';

$GLOBALS["lang"]['Lithuania'] = 'Lituânia';

$GLOBALS["lang"]['Lithuanian'] = 'Lituano';

$GLOBALS["lang"]['Load Balancing'] = 'Equilíbrio de Carga';

$GLOBALS["lang"]['Local'] = 'Local';

$GLOBALS["lang"]['Local Area Network'] = 'Rede de Área Local';

$GLOBALS["lang"]['local_port'] = 'Porto Local';

$GLOBALS["lang"]['Local Port'] = 'Porto Local';

$GLOBALS["lang"]['Local area network'] = 'Rede local.';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Localização';

$GLOBALS["lang"]['Location'] = 'Localização';

$GLOBALS["lang"]['Location A'] = 'Localização A';

$GLOBALS["lang"]['Location B'] = 'Localização B';

$GLOBALS["lang"]['location_id'] = 'Localização ID';

$GLOBALS["lang"]['Location ID'] = 'Localização ID';

$GLOBALS["lang"]['location_id_a'] = 'Localização ID A';

$GLOBALS["lang"]['Location ID A'] = 'Localização ID A';

$GLOBALS["lang"]['location_id_b'] = 'Localização ID B';

$GLOBALS["lang"]['Location ID B'] = 'Localização ID B';

$GLOBALS["lang"]['location_latitude'] = 'Localização Latitude';

$GLOBALS["lang"]['Location Latitude'] = 'Localização Latitude';

$GLOBALS["lang"]['location_level'] = 'Nível de localização';

$GLOBALS["lang"]['Location Level'] = 'Nível de localização';

$GLOBALS["lang"]['location_longitude'] = 'Localização Longitude';

$GLOBALS["lang"]['Location Longitude'] = 'Localização Longitude';

$GLOBALS["lang"]['Location Name'] = 'Nome da localização';

$GLOBALS["lang"]['location_rack'] = 'Rack de localização';

$GLOBALS["lang"]['Location Rack'] = 'Rack de localização';

$GLOBALS["lang"]['location_rack_position'] = 'Localização Rack Posição';

$GLOBALS["lang"]['Location Rack Position'] = 'Localização Rack Posição';

$GLOBALS["lang"]['location_rack_size'] = 'Tamanho do Rack de Localização';

$GLOBALS["lang"]['Location Rack Size'] = 'Tamanho do Rack de Localização';

$GLOBALS["lang"]['location_room'] = 'Sala de Localização';

$GLOBALS["lang"]['Location Room'] = 'Sala de Localização';

$GLOBALS["lang"]['location_suite'] = 'Suíte de Localização';

$GLOBALS["lang"]['Location Suite'] = 'Suíte de Localização';

$GLOBALS["lang"]['Locations'] = 'Locais';

$GLOBALS["lang"]['Locations in this'] = 'Locais aqui.';

$GLOBALS["lang"]['log'] = 'Diário';

$GLOBALS["lang"]['Log'] = 'Diário';

$GLOBALS["lang"]['log_format'] = 'Formato do log';

$GLOBALS["lang"]['Log Format'] = 'Formato do log';

$GLOBALS["lang"]['Log Line'] = 'Linha de registro';

$GLOBALS["lang"]['log_path'] = 'Caminho do Diário';

$GLOBALS["lang"]['Log Path'] = 'Caminho do Diário';

$GLOBALS["lang"]['log_rotation'] = 'Rotação do log';

$GLOBALS["lang"]['Log Rotation'] = 'Rotação do log';

$GLOBALS["lang"]['log_status'] = 'Estado do registro';

$GLOBALS["lang"]['Log Status'] = 'Estado do registro';

$GLOBALS["lang"]['Logging in'] = 'Entrando.';

$GLOBALS["lang"]['Logical Cores '] = 'Núcleos Lógicos ';

$GLOBALS["lang"]['logical_count'] = 'Contagem lógica';

$GLOBALS["lang"]['Logical Count'] = 'Contagem lógica';

$GLOBALS["lang"]['Logout'] = 'Sair';

$GLOBALS["lang"]['Logs'] = 'Diários';

$GLOBALS["lang"]['longitude'] = 'Longitude';

$GLOBALS["lang"]['Longitude'] = 'Longitude';

$GLOBALS["lang"]['low'] = 'Baixo.';

$GLOBALS["lang"]['Low'] = 'Baixo.';

$GLOBALS["lang"]['Lower Case'] = 'Embaixo.';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Nome de host minúsculo';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburgo';

$GLOBALS["lang"]['MAC Address'] = 'Endereço MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fabricante';

$GLOBALS["lang"]['mac'] = 'Mac.';

$GLOBALS["lang"]['Mac'] = 'Mac.';

$GLOBALS["lang"]['Mac Address'] = 'Endereço Mac';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'Pacotes MacOS';

$GLOBALS["lang"]['Macao'] = 'Macau.';

$GLOBALS["lang"]['Macedonia'] = 'Macedônia';

$GLOBALS["lang"]['Madagascar'] = 'Madagáscar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Mantenha registros de avaliações de risco e tratamentos.';

$GLOBALS["lang"]['maintenance_expires'] = 'Manutenção expira';

$GLOBALS["lang"]['Maintenance Expires'] = 'Manutenção expira';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Faça meu painel padrão';

$GLOBALS["lang"]['Make this install a Collector'] = 'Faça isso instalar um coletor.';

$GLOBALS["lang"]['Malawi'] = 'Malawi.';

$GLOBALS["lang"]['Malay'] = 'Malaio.';

$GLOBALS["lang"]['Malaysia'] = 'Malásia';

$GLOBALS["lang"]['Maldives'] = 'Maldivas';

$GLOBALS["lang"]['Mali'] = 'Mali.';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Gerenciar';

$GLOBALS["lang"]['Manage Licenses'] = 'Gerenciar licenças';

$GLOBALS["lang"]['Manage in NMIS'] = 'Gerencie em NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Gerencie incidentes e inconformidades.';

$GLOBALS["lang"]['Managed'] = 'Gerenciado.';

$GLOBALS["lang"]['managed_by'] = 'Gerenciado por';

$GLOBALS["lang"]['Managed By'] = 'Gerenciado por';

$GLOBALS["lang"]['Manual Input'] = 'Entrada Manual';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Manualmente definido pelo usuário, padrão para Produção.';

$GLOBALS["lang"]['Manually set by user.'] = 'Manualmente definido pelo usuário.';

$GLOBALS["lang"]['manufacture_date'] = 'Data de fabricação';

$GLOBALS["lang"]['Manufacture Date'] = 'Data de fabricação';

$GLOBALS["lang"]['manufacturer'] = 'Fabricante';

$GLOBALS["lang"]['Manufacturer'] = 'Fabricante';

$GLOBALS["lang"]['manufacturer_code'] = 'Código do fabricante';

$GLOBALS["lang"]['Manufacturer Code'] = 'Código do fabricante';

$GLOBALS["lang"]['Map'] = 'Mapa';

$GLOBALS["lang"]['maps'] = 'Mapas';

$GLOBALS["lang"]['Maps'] = 'Mapas';

$GLOBALS["lang"]['March'] = 'Marche.';

$GLOBALS["lang"]['Marshall Islands'] = 'Ilhas Marshall';

$GLOBALS["lang"]['Martinique'] = 'Martinica.';

$GLOBALS["lang"]['mask'] = 'Máscara';

$GLOBALS["lang"]['Mask'] = 'Máscara';

$GLOBALS["lang"]['Match'] = 'Match';

$GLOBALS["lang"]['match_options'] = 'Opções de Combinação';

$GLOBALS["lang"]['Match Options'] = 'Opções de Combinação';

$GLOBALS["lang"]['Match Order'] = 'Ordem de jogo';

$GLOBALS["lang"]['Match Process'] = 'Processo de correspondência';

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'Atributo Correspondente';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Dispositivos de correspondência, incluindo OrgID.';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Combinando dispositivos Linux';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'A correspondência é conduzida na seguinte ordem:';

$GLOBALS["lang"]['maturity_level'] = 'Nível de maturidade';

$GLOBALS["lang"]['Maturity Level'] = 'Nível de maturidade';

$GLOBALS["lang"]['maturity_score'] = 'Pontuação de maturidade';

$GLOBALS["lang"]['Maturity Score'] = 'Pontuação de maturidade';

$GLOBALS["lang"]['Mauritania'] = 'Mauritânia';

$GLOBALS["lang"]['Mauritius'] = 'Maurício';

$GLOBALS["lang"]['max_file_size'] = 'Tamanho máximo do arquivo';

$GLOBALS["lang"]['Max File Size'] = 'Tamanho máximo do arquivo';

$GLOBALS["lang"]['Max Length'] = 'Comprimento máximo';

$GLOBALS["lang"]['max_size'] = 'Tamanho máximo';

$GLOBALS["lang"]['Max Size'] = 'Tamanho máximo';

$GLOBALS["lang"]['May'] = 'Maio.';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte.';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mede a probabilidade de a vulnerabilidade ser atacada, e é baseada no estado atual de técnicas de exploração, explore disponibilidade de código, ou exploração ativa, "na selva".';

$GLOBALS["lang"]['medium'] = 'Médio.';

$GLOBALS["lang"]['Medium'] = 'Médio.';

$GLOBALS["lang"]['members'] = 'Membros';

$GLOBALS["lang"]['Members'] = 'Membros';

$GLOBALS["lang"]['memory'] = 'Memória';

$GLOBALS["lang"]['Memory'] = 'Memória';

$GLOBALS["lang"]['memory_count'] = 'Contagem de memória';

$GLOBALS["lang"]['Memory Count'] = 'Contagem de memória';

$GLOBALS["lang"]['memory_slot_count'] = 'Contagem da Fenda de Memória';

$GLOBALS["lang"]['Memory Slot Count'] = 'Contagem da Fenda de Memória';

$GLOBALS["lang"]['menu_category'] = 'Categoria do Menu';

$GLOBALS["lang"]['Menu Category'] = 'Categoria do Menu';

$GLOBALS["lang"]['menu_display'] = 'Menu Display';

$GLOBALS["lang"]['Menu Display'] = 'Menu Display';

$GLOBALS["lang"]['message'] = 'Mensagem';

$GLOBALS["lang"]['Message'] = 'Mensagem';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Última Mudança';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Última Mudança';

$GLOBALS["lang"]['metric'] = 'Métrico';

$GLOBALS["lang"]['Metric'] = 'Métrico';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Rede de Área Metropolitana';

$GLOBALS["lang"]['Metropolitan area network'] = 'Rede de área metropolitana';

$GLOBALS["lang"]['Mexico'] = 'México';

$GLOBALS["lang"]['Micronesia'] = 'Micronésia.';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Microtime';

$GLOBALS["lang"]['Microtime'] = 'Microtime';

$GLOBALS["lang"]['minute'] = 'Minuto';

$GLOBALS["lang"]['Minute'] = 'Minuto';

$GLOBALS["lang"]['Minutes'] = 'Minutos';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minutos desde a última auditoria são maiores que';

$GLOBALS["lang"]['model'] = 'Modelo';

$GLOBALS["lang"]['Model'] = 'Modelo';

$GLOBALS["lang"]['model_family'] = 'Família modelo.';

$GLOBALS["lang"]['Model Family'] = 'Família modelo.';

$GLOBALS["lang"]['Modified'] = 'Modificado';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Modificando um script existente';

$GLOBALS["lang"]['module'] = 'Módulo';

$GLOBALS["lang"]['Module'] = 'Módulo';

$GLOBALS["lang"]['module_index'] = 'Índice do Módulo';

$GLOBALS["lang"]['Module Index'] = 'Índice do Módulo';

$GLOBALS["lang"]['Modules'] = 'Módulos';

$GLOBALS["lang"]['Moldova'] = 'Moldávia';

$GLOBALS["lang"]['Monaco'] = 'Mônaco';

$GLOBALS["lang"]['Monday'] = 'Segunda-feira';

$GLOBALS["lang"]['Mongolia'] = 'Mongólia';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Monitore e meça o desempenho do ISMS.';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Mês';

$GLOBALS["lang"]['Month'] = 'Mês';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Mais Informações';

$GLOBALS["lang"]['More Secure'] = 'Mais seguro.';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'SQL mais elaborado pode ser usado para agrupar atributos dentro de um intervalo. Abaixo mostra o SQL para dispositivos não vistos em uma tabela de tortas agrupadas pela última faixa de datas vistas.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Mais informações sobre depuração isso pode ser encontrado em uma linha útil Stack Overflow';

$GLOBALS["lang"]['Morocco'] = 'Marrocos';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Provavelmente o firewall do Windows (ou um firewall de terceiros) está negando a tentativa de conexão.<br/><br/>Por favor, entre na máquina do Windows e verifique as configurações do firewall.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'A maioria da Open-AudIT está licenciada com a GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Motherboard.';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard.';

$GLOBALS["lang"]['mount_point'] = 'Ponto de Montagem';

$GLOBALS["lang"]['Mount Point'] = 'Ponto de Montagem';

$GLOBALS["lang"]['mount_type'] = 'Tipo de Montagem';

$GLOBALS["lang"]['Mount Type'] = 'Tipo de Montagem';

$GLOBALS["lang"]['Mozambique'] = 'Moçambique';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Deve responder ao Ping. Se estiver pronto, Nmap tentará enviar e ouvirá uma resposta ICMP. Se o dispositivo não responder, não haverá mais varredura.<br/>Anteriormente, um dispositivo não precisava responder a um ping para o Open-AudIT continuar a varredura.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Deve responder a Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Meu AntiVirus está me levando a negar/permitir coisas.';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Meu tempo acabou em Open-AudIT.';

$GLOBALS["lang"]['Myanmar'] = 'Mianmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-para-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Serviço de Negócios';

$GLOBALS["lang"]['NMIS Customer'] = 'Cliente NMIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'Opções do dispositivo NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Seleção de dispositivos NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Nome do campo NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Tipo de Campo NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'Grupo NMIS';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Papel';

$GLOBALS["lang"]['NOTE'] = 'NOTA';

$GLOBALS["lang"]['NOTE #2'] = 'NOTA #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NOTA - Para mais informações nos formatos DateTime, veja';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'NOTA - Se você pedir um formato CSV, XML ou JSON baixado (uma única credencial, ou a coleção completa) os detalhes reais da credencial serão enviados. Não o texto criptografado, o nome de usuário, senha, texto comunitário, etc. Todos os detalhes sensíveis não são exibidos na web GUI, mas são disponibilizados através de outros formatos. Para evitar esta exportação, um item de configuração está disponível chamado descriptografar_credenciais.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'NOTA - Os colchetes curly nos dados arquivados devem ser usados como está (não substituído como por outros exemplos acima).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTA - Você pode evitar credenciais de texto simples sendo exibido abaixo, definindo o item de configuração para <code>decrypt_credentials</code> para <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nome';

$GLOBALS["lang"]['Name'] = 'Nome';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Nome: o nome que você está dando para este campo. Idealmente deve ser único.';

$GLOBALS["lang"]['Namibia'] = 'Namíbia';

$GLOBALS["lang"]['Nauru'] = 'Nauru.';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Índice Net';

$GLOBALS["lang"]['Net Index'] = 'Índice Net';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Antilhas Holandesas';

$GLOBALS["lang"]['Netherlands the'] = 'Países Baixos';

$GLOBALS["lang"]['netmask'] = 'Netmask.';

$GLOBALS["lang"]['Netmask'] = 'Netmask.';

$GLOBALS["lang"]['netstat'] = 'Netstat.';

$GLOBALS["lang"]['Netstat'] = 'Netstat.';

$GLOBALS["lang"]['Netstat Policies'] = 'Políticas do Netstat';

$GLOBALS["lang"]['Netstat Ports'] = 'Portos Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports usa uma combinação de número de porta, protocolo e programa. Se todos estiverem presentes, a política passa.';

$GLOBALS["lang"]['Network'] = 'Rede';

$GLOBALS["lang"]['network_address'] = 'Endereço da Rede';

$GLOBALS["lang"]['Network Address'] = 'Endereço da Rede';

$GLOBALS["lang"]['Network Discovery'] = 'Rede Discovery';

$GLOBALS["lang"]['network_domain'] = 'Domínio de Rede';

$GLOBALS["lang"]['Network Domain'] = 'Domínio de Rede';

$GLOBALS["lang"]['Network Types'] = 'Tipos de Rede';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'O tipo de rede é definido como Local Area Network por padrão, mas pode ser alterado pelo usuário como achar melhor. Os tipos suportados estão abaixo (com graças à Wikipédia).<br/><br/>Uma rede pode ser caracterizada por sua capacidade física ou seu propósito organizacional. O uso da rede, incluindo autorização do usuário e direitos de acesso, diferem de acordo.';

$GLOBALS["lang"]['networks'] = 'Redes';

$GLOBALS["lang"]['Networks'] = 'Redes';

$GLOBALS["lang"]['Networks Generated By'] = 'Redes geradas por';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Redes são atualizadas com todas as descobertas. Itens como IPs disponíveis e IPs usados, juntamente com Gateways, DHCP e DNS Servers são adicionados como encontrados.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'As redes respondem diferente dependendo de como são configuradas. Alguns roteadores e/ou firewalls podem responder. <i>em nome de</i> de IPs do outro lado de suas interfaces para o Open-AudIT Server. É muito comum ver Nmap reportar uma sonda para SNMP (porta UDP 161) responder como um filtro aberto para dispositivos que fazem e não existem. Isso é enganoso, pois não há nenhum dispositivo no IP, mas acaba com uma entrada de dispositivo no banco de dados. 99,9% das vezes, não é Open-AudIT, nem mesmo Nmap, mas a rede causando este problema. Agora que temos as opções para tratar portas abertas como abertas ou fechadas, podemos eliminar muita dessa confusão. Usuários corporativos até têm a opção de mudar isso por descoberta (mais do que usar o item Médio (Classic), como acima).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Redes usando uma máscara CIDR de';

$GLOBALS["lang"]['New Building Name'] = 'Novo nome do prédio';

$GLOBALS["lang"]['New Caledonia'] = 'Nova Caledônia';

$GLOBALS["lang"]['New Floor Name'] = 'Novo nome do andar';

$GLOBALS["lang"]['New Room Name'] = 'Novo Nome do Quarto';

$GLOBALS["lang"]['New Row Name'] = 'Nome da Nova Linha';

$GLOBALS["lang"]['New Zealand'] = 'Nova Zelândia';

$GLOBALS["lang"]['News'] = 'Notícias';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Notícias fazem check-in cada vez que você faz login para consultas atualizadas e pacotes, recomendações de configuração, anúncios de lançamento, posts de blog e muito mais.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Notícias são nossa maneira de mantê-lo atualizado com as últimas correções, anúncios, atualizações de consultas, versões de software e muito mais.<br/><br/>Você não precisa ficar em cima da wiki ou verificar novos lançamentos, podemos enviar isso para você!';

$GLOBALS["lang"]['next_hop'] = 'Próximo Hop';

$GLOBALS["lang"]['Next Hop'] = 'Próximo Hop';

$GLOBALS["lang"]['next_run'] = 'Próxima corrida';

$GLOBALS["lang"]['Next Run'] = 'Próxima corrida';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Próximo clique <i>Crie sua própria aplicação.</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Em seguida, clique em OK, depois clique com o botão direito no serviço Apache 2.4 e clique em Reiniciar. Feito!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Em seguida, clique com o botão direito do mouse no serviço Apache2.4 e selecione Propriedades, em seguida, clique na guia Log On.';

$GLOBALS["lang"]['Nicaragua'] = 'Nicarágua';

$GLOBALS["lang"]['Niger'] = 'Níger';

$GLOBALS["lang"]['Nigeria'] = 'Nigéria';

$GLOBALS["lang"]['Niue'] = 'Niue.';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap não pode determinar se a porta está aberta porque a filtragem de pacotes impede suas sondas de alcançar a porta. A filtragem pode ser de um dispositivo de firewall dedicado, regras de roteador ou software de firewall baseado em host. Esses portos frustram atacantes porque fornecem tão pouca informação. Às vezes eles respondem com mensagens de erro ICMP, como código 13 tipo 3 (destino inalcançável: comunicação proibida administrativamente), mas filtros que simplesmente soltam sondas sem responder são muito mais comuns. Isso força Nmap a tentar várias vezes, caso a sonda tenha caído devido ao congestionamento da rede, em vez de filtrar. Isso retarda a varredura dramaticamente.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap coloca portas neste estado quando é incapaz de determinar se uma porta é aberta ou filtrada. Isso ocorre para tipos de varredura em que portas abertas não dão resposta. A falta de resposta também pode significar que um filtro de pacotes deixou cair a sonda ou qualquer resposta que tenha provocado. Então Nmap não sabe ao certo se a porta está aberta ou sendo filtrada. As varreduras UDP, IP, FIN, NULL e Xmas classificam as portas desta forma.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Os detalhes do tempo do mapa são encontrados na parte inferior desta página vinculada.';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Cliente';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Cliente';

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

$GLOBALS["lang"]['nmis_role'] = 'Nmis Role';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Role';

$GLOBALS["lang"]['No'] = 'Não.';

$GLOBALS["lang"]['No Devices Returned'] = 'Nenhum dispositivo retornado.';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Nenhuma API do Google Maps Chave presente, você não será capaz de exibir o mapa.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Sem licença para profissionais ou empresas.';

$GLOBALS["lang"]['No Results'] = 'Sem resultados.';

$GLOBALS["lang"]['No data in License Key'] = 'Nenhum dado na chave da licença.';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Não é necessário atualizar o banco de dados.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Nenhum dispositivo está no banco de dados.';

$GLOBALS["lang"]['Node'] = 'Nó';

$GLOBALS["lang"]['None'] = 'Nenhum.';

$GLOBALS["lang"]['Norfolk Island'] = 'Ilha Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normal.';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Ilhas Marianas do Norte';

$GLOBALS["lang"]['Norway'] = 'Noruega';

$GLOBALS["lang"]['Norwegian'] = 'Norueguês';

$GLOBALS["lang"]['Not Applicable'] = 'Não aplicável.';

$GLOBALS["lang"]['Not Checked'] = 'Não checado.';

$GLOBALS["lang"]['Not Equals'] = 'Não é igual';

$GLOBALS["lang"]['Not In'] = 'Não em';

$GLOBALS["lang"]['Not Like'] = 'Não Como';

$GLOBALS["lang"]['Not Set'] = 'Não está definido.';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Nem todo computador será capaz de completar uma referência. Vimos em algumas falhas em testes por razões além do nosso controle. Os registros devem ajudá-lo na direção certa para esses itens.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Não na lista (comma separado)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Não normalmente usado. Se estiver pronto, isso requer que o dispositivo tenha uma porta aberta (como por opção de varredura) para ser considerado respondendo. Um endereço MAC, resposta Arp ou resposta Ping não é considerado suficiente para ser considerado respondendo. Útil se um roteador ou firewall entre o servidor Open-AudIT e IP de destino estiver respondendo às varreduras de porta em nome dos IPs.';

$GLOBALS["lang"]['Note'] = 'Nota.';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Nota - Selecionar um pai automaticamente fornecerá acesso aos seus filhos (embora não seja mostrado aqui).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Note que o dispositivo 100 licença Enterprise não inclui suporte.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Note, você pode precisar fazer o script executável com';

$GLOBALS["lang"]['Notes'] = 'Notas';

$GLOBALS["lang"]['notes'] = 'Notas';

$GLOBALS["lang"]['Notice'] = 'Observe.';

$GLOBALS["lang"]['notin'] = 'Notin.';

$GLOBALS["lang"]['Notin'] = 'Notin.';

$GLOBALS["lang"]['November'] = 'Novembro';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Agora para a identificação da assinatura, clique em Todos os Serviços, Assinaturas e copiá-lo.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Agora precisamos dar acesso ao Azure Active Directory à sua assinatura.<br/><br/>Clique em Grupos de Recursos e, em seguida, o grupo de recursos que você gostaria que seu aplicativo Azure Active Directory tivesse acesso.<br/><br/>Clique em Adicionar. O papel deve ser Contribuinte e então procurar pelo aplicativo (AudIT aberto). Então clique em Salvar.<br/><br/>Agora o aplicativo tem acesso à assinatura, então podemos fazer chamadas API. As chamadas da API serão solicitadas em nome da aplicação, não do seu usuário.';

$GLOBALS["lang"]['nvd_json'] = 'NVD Json';

$GLOBALS["lang"]['Nvd Json'] = 'NVD Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDEM POR';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'Famílias OS';

$GLOBALS["lang"]['OS Family'] = 'Família OS';

$GLOBALS["lang"]['OS Group'] = 'Grupo OS';

$GLOBALS["lang"]['OUTPUTS'] = 'OUTPUTS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Ident do objeto';

$GLOBALS["lang"]['Object Ident'] = 'Ident do objeto';

$GLOBALS["lang"]['Obtain top management support'] = 'Obter suporte de gerenciamento superior';

$GLOBALS["lang"]['October'] = 'Outubro';

$GLOBALS["lang"]['Offset'] = 'Desvio';

$GLOBALS["lang"]['Okta'] = 'Okta.';

$GLOBALS["lang"]['Oman'] = 'Omã.';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid.';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid.';

$GLOBALS["lang"]['On'] = 'Em';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'No Windows, Open-AudIT usa WMI como método primário de auditoria. Windows tem uma reputação notória no que diz respeito ao WMI remoto. Ele tende a qualquer um dos dois. <i>Apenas trabalho.</i> ou algum item misterioso no alvo requer mudança. Se você está tendo dificuldade em auditar computadores remotos do Windows, criamos um script chamado test_windows_client.vbs. Você pode executar este script <strong>localmente</strong> na máquina em questão, após assinar como o usuário que é usado pela Open-AudIT para realizar a auditoria. O roteiro faz <strong>Sem mudanças.</strong> Para os dispositivos de alvo. Verifica a maioria dos itens abaixo e gera etiquetas PASS, FAIL e INFO para várias propriedades. NOTA - Se seu sistema alvo está sendo auditado corretamente, você não deve mudar nenhuma configuração. Alguns dos abaixo não existem em computadores Windows que são capazes de ser auditados e alguns existem. Só mude as configurações se suas descobertas em PCs não estiverem funcionando como planejado.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Na página da lista de tarefas, clique no <i>Adicionar Novo</i> botão para configurar uma tarefa.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'No campo <i>Match String</i> Você deve fornecer o nome do software que você quer rastrear. Você pode usar o sinal de porcentagem (%) como um wildcard onde for necessário.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Na próxima página você poderá selecionar Access Keys e ver sua chave ou criar uma nova chave.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'No PC do Windows, execute o utilitário DCOM e verifique (ou defina) os atributos abaixo. Comece -> Corra, digite DCOMCNFG e pressione OK. Isso vai abrir a janela DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'No canto superior direito (debaixo da barra de menu) você verá vários botões. Isso permite selecionar outro painel, definir o painel atual como sua homepage (se ainda não estiver) e editar o painel atual (se você tiver permissão).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'Em Premise, não Cloud.';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Uma vez criado um Campo Adicional pode ser usado em consultas e grupos como qualquer outro atributo no banco de dados.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Uma vez comentado, seu certificado será validado, mas também pode falhar esta validação se você estiver usando certificados autoassinados e não tiver configurado seu servidor corretamente.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Uma vez que o script tenha executado em um alvo, se o script excluir-se.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Uma vez que as consultas iniciais (snmp, ssh, wmi) estejam completas, se o dispositivo for suportado pelos scripts de auditoria (Windows, Linux, OSX, AIX, HP-UX, Solaris e ESXi), o script de auditoria correto será copiado para o alvo e executado. O roteiro de auditoria se apagará após a conclusão. O resultado será armazenado na máquina alvo como um arquivo XML. O servidor Open-AudIT recuperará o arquivo de resultado para processamento e apagará o arquivo de resultado no alvo. A localização para a qual o script de auditoria é copiado no dispositivo alvo (pelo menos para auditorias SSH) é configurável editando o item de configuração discovery_linux_script_directory. Por padrão está definido como /tmp/. Isso pode precisar mudar se o Tmp tiver noexec. O arquivo do resultado é processado e os detalhes do dispositivo atualizados no Open-AudIT.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Quando clicar no botão de execução, o Open-AudIT gerará um processo para iniciar a descoberta e devolver o usuário à página de detalhes da descoberta. O processo recém gerado pega as opções de descoberta configuradas e executa comandos Nmap para determinar a lista inicial de endereços IP a serem digitalizados (ou consultas Active Directory se esse tipo for usado). Cada IP a ser escaneado é colocado em uma fila. Uma vez concluído o processo inicial (e há IPs a serem digitalizados na fila), vários processos serão gerados para analisar cada IP em paralelo. Este número de processos é configurável na configuração, edite o atributo <i>fila_ limite</i>. Por padrão, está definido como 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Depois de escolher seus dispositivos para editar, clique no botão lápis no canto superior direito da mesa.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Assim que fizer isso, o Open-AudIT tentará verificar os detalhes do logon do usuário contra o método de autenticação configurado. Se o usuário tem credenciais válidas e <code>use_authorisation</code> Está definido, Open-AudIT vai pedir a lista de grupos que o usuário pertence. Se o usuário estiver nos grupos correspondentes para funções e orgs Open-AudIT, esses papéis e orgs serão aplicados a esse usuário.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Uma vez que você tenha gerado uma definição de base você pode programar para ser executado contra um grupo específico de dispositivos.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Uma vez que você tem esses itens, em Open-AudIT Enterprise, você pode ir para o menu -> Descubra -> Nuvens Criar Nuvens, selecione o <i>Amazon AWS</i> Digite e cole. Feito.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Uma vez que você tem esses itens, em Open-AudIT Enterprise, você pode ir para o menu -> Descubra -> Nuvens Criar Nuvens, selecione o <i>Microsoft Azure</i> Digite e cole. Feito.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Uma vez que você tem suas credenciais de nuvem, é apenas uma questão de criar uma nova nuvem e executar a descoberta - ou agendar as primeiras / futuras descobertas. Certifique-se de também ter as credenciais necessárias para acessar suas máquinas de nuvem, e tudo é feito para você como uma descoberta regular. Credenciais para sua nuvem';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Um de <code>3x2</code>, <code>4x2</code>, <code>4x3</code> ou <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Rede de Área do Campus, Rede de Nuvem, Rede Corporativa Privada, Rede de Área Inicial, Rede de Área Local Local Local, Rede de Área Óptica Passiva, Rede de Área Pessoal, Rede de Área de Armazenamento, Rede de Área de Sistema, Rede Virtual Privada, Rede de Área Ampla, Rede de Área Local Sem Fios.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Um de Desenvolvimento, Recuperação de Desastres, Avaliação, Pré-Produção, Produção, Testes, Treinamento, Teste de Aceitação do Usuário';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Um dos alocados, delegados, planejados, reservados, não alocados, desconhecidos, não gerenciados. Padrões alocados.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Um dos dois. <code>active directory</code> ou <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Um: antivírus, backup, firewall, aprovado, banido, ignorado ou outro.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Outro item para ter cuidado. Certifique-se de usar o nome do host (ou fqdn) do seu LDAP. Servidor que corresponde ao que está no certificado (não apenas o endereço IP do servidor LDAP) ao criar a entrada LDAP em Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Documentação Online';

$GLOBALS["lang"]['Open'] = 'Abra.';

$GLOBALS["lang"]['Open Data'] = 'Abrir Dados';

$GLOBALS["lang"]['Open Source'] = 'Código aberto';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open-AudIT Código fonte comunitário está disponível no GitHub. Você é encorajado a inspecionar qualquer código que você tenha preocupações, e porque é de código aberto - você também é encorajado a nos perguntar sobre quaisquer problemas que você tenha ou relatar quaisquer descobertas. Estamos sempre mais do que felizes em aceitar contribuições de código, relatórios de vulnerabilidade, ou até perguntas simples. Estamos aqui para ajudar.<br/><br/>Os próprios scripts de auditoria (Windows, Linux, MacOS, et al) são deliberadamente escritos em script de shell nativo legível (VBScript para Windows, Bash para *nix). Você pode ver exatamente quais comandos são executados. Você pode remover os comandos que achar que não precisa. Você pode pedir a um terceiro para inspecionar o código para você e (se você quiser) relatar quaisquer descobertas.<br/><br/>Open-AudIT A Enterprise realiza as funções comerciais adicionais para a Comunidade Open-AudIT. Está incluído como um único arquivo compilado sem dependências externas. Onde a própria Enterprise executa a(s) função(s), se você estiver preocupado com qualquer problema Primeira onda está feliz em trabalhar com eles com você - apenas pergunte! Tente isso com outro fornecedor de software comercial!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Seleção de Dispositivos Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open-AudIT Enterprise tem a habilidade de escolher entre uma lista pré-definida de opções de varredura de descobertas e também de personalizar opções individuais por descoberta.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Enterprise Open-Audit. Descoberta flexível de alta escala e solução de auditoria para grandes redes. Todas as características do Professional plus: Linhas de Base, Auditoria de Arquivos, Descoberta de Nuvem, Gerenciamento de Rack, Controle de Acesso Baseado em Papel Configurável, incluindo Active Directory e LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nome do Campo Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Licenças Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Opções Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional e Enterprise incluem recursos de relatórios melhorados, incluindo recursos baseados no tempo, histórico e muti-query baseados em vários formatos.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open-AudIT Profissional tem a habilidade de escolher entre uma lista pré-definida de opções de varredura por descoberta.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Profissional de Audit Aberto. O mundo\\';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open-Aud. TI pode ser configurada para usar servidores LDAP (Microsoft Active Directory e/ou OpenLDAP) para autenticar e autorizar um usuário e, além disso, para criar uma conta de usuário em Open-AudIT usando funções atribuídas e orgs baseados em membros de grupo LDAP. Ele também pode usar';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open-Aud. Pode ser executado em seu servidor no seu data center. Não precisa de acesso à internet. Até a instalação no Linux onde usamos o gerenciador de pacotes de distribuição para nossos pré-requisitos pode ser negada por você usando um repositório de pacotes interno e aprovado pela equipe de segurança.<br/><br/>Open-Aud. Não armazena nenhum de seus dados na nuvem. Mesmo as informações de licenciamento podem ser fornecidas sem ter que acessar a internet do servidor Open-AudIT.<br/><br/>Claro, é mais fácil permitir que ele acesse a internet para baixar pacotes (incluindo correções de segurança) para sua distribuição, mas isso depende de você e suas políticas de segurança. Open-AudIT não precisa da internet.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT pode baixar, analisar e usar relatórios de vulnerabilidade NIST CVE.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open-Aud. Ela pode mostrar em uma de várias línguas. Como você pode melhorar isso?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open-Aud. Pode armazenar informações em campos adicionais que estão associados a cada dispositivo.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT pode usar o Microsoft Entra (anteriormente conhecido como Microsoft Azure Active Directory) como um método de autenticação. Isso significa que seu usuário em Open-AudIT pode clicar no Logon usando o botão Entra na página de logon e usar suas credenciais Entra para logon. Esse usuário precisa já existir dentro do Open-AudIT (e ser designado';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT pode usar OKTA como um método de autenticação. Isso significa que seu usuário em Open-AudIT pode clicar no Logon usando o botão OKTA na página de logon e usar suas credenciais OKTA para logon. Esse usuário precisará já existir dentro do Open-AudIT (e receber papéis e orgs), mas não precisará se lembrar de um conjunto separado de credenciais de logon.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT vem com muitas perguntas integradas. Se você precisa de uma consulta específica e nenhuma das consultas pré-embaladas se encaixam em suas necessidades, é muito fácil criar uma nova e carregá-la em Open-AudIT para execução.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT tem uma API descanso JSON para ser usado tanto na interface web quanto através de pedidos JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open-Aud. TI tem um sistema de permissões granulares para determinar o que um usuário dentro da Open-AudIT pode fazer, e os itens que ele pode fazer. Open-AudIT pode ser totalmente auto-suficiente, ou usar Active Directory ou OpenLDAP para autenticação e/ou autorização.<br/><br/>Depende inteiramente do administrador da Open-AudIT como eles gostariam que o Controle de Acesso Baseado em Papel funcionasse.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open-Aud. TI tem um poderoso mecanismo de detecção de mudanças. Qualquer atributo de dispositivo que seja adicionado, removido ou alterado será detectado e armazenado. Essas mudanças podem ser relatadas e os dados relevantes confirmados quanto ao que era esperado da sua empresa, processo de mudança e liberação.<br/><br/>Quando um dispositivo é auditado, atributos são divididos em seções que correspondem a tabelas no banco de dados.<br/><br/>Cada dispositivo (computador, roteador, impressora, et al) tem uma entrada no <code>devices</code> mesa. Cada entrada na mesa de dispositivos tem um <code>id</code> coluna. Este valor é único, é uma identificação auto-incrementante.<br/><br/>Quando o resultado da auditoria é processado, cada item em cada seção tem seu resultado de auditoria comparado ao que está no banco de dados.<br/><br/>Para cada seção, se as colunas-chave (ver tabela abaixo) contêm os mesmos valores, ele é considerado já instalado e tem o seu <code>last_seen</code> Atributo atualizado. Nenhuma entrada do Change_log é criada.<br/><br/>Se alguma das colunas-chave não corresponder, é considerado um novo atributo e está inserido. A <code>change_log</code> A entrada é criada se o dispositivo tiver outros atributos já presentes na tabela.<br/><br/>Na conclusão do processo de auditoria, qualquer item de banco de dados que não tenha sido atualizado (ou inserido) é considerado não estar presente. O <code>current</code> atributo para este item está definido como <i>n</i> e uma entrada de change_log é gerada.<br/><br/>Então, podemos determinar se algo está atualmente instalado - a coluna atual é <i>Sim.</i>.<br/><br/>Podemos determinar quando algo foi inicialmente detectado. <i>Primeiro visto</i>.<br/><br/>Podemos determinar se algo foi instalado após a auditoria inicial. A primeira vista será diferente nas tabelas de componentes e dispositivos.<br/><br/>Podemos determinar se algo não está instalado, mas antes estava - atual = <i>n</i>.<br/><br/>Podemos determinar a última vez que detectamos um item.<br/><br/>Em qualquer ponto, podemos determinar o que havia em um sistema usando a tabela de audit_log e selecionando os componentes relevantes com base no primeiro e último visto.<br/><br/>Cada seção e suas colunas correspondentes estão abaixo.<br/><br/>NOTA - Há algumas exceções detalhadas abaixo.<br/><br/>*1 - Para cartões de rede, se o computador é uma máquina VMware Esx, ele também usa o net_index e colunas de conexão.<br/><br/>Para partições, se o computador é uma máquina AIX, usamos o nome da partição.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT é um programa projetado para rastrear e relatar seus dados de TI e ativos relacionados e configuração. Open-AudIT pode dizer <i>O que está na sua rede?</i>, como está configurado e se houve alguma mudança. Open-AudIT oferece uma plataforma elegante, flexível e fácil de usar para a descoberta de dispositivos, auditoria de TI e automação de gerenciamento de inventário direto da caixa.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open-Aud. É fácil editar os atributos de vários dispositivos ao mesmo tempo.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open-Aud. A TI precisa de permissões específicas para criar arquivos, carregar resultados, etc. Por favor, coloque como abaixo.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT fornece muitas consultas integradas e torna simples criar suas próprias.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud. Naves de TI com papéis embutidos para admin, org_admin e usuário.<br/><br/>Geralmente, um usuário que é um administrador do aplicativo Open-AudIT em si deve ter funções administrativas e possíveis org_admin.<br/><br/>Um usuário pode ter vários papéis. A permissão será aplicada no nível mais permissivo - ou seja, se um usuário tem o papel de usuário e org_admin, ele será capaz de criar locais porque org_admin concede essa permissão, mesmo que o papel de usuário não.<br/><br/>A função de administrador permite acesso a coleções como configuração, banco de dados, grupos, servidores ldap, registros, consultas e papéis. Itens globais que afetam toda a aplicação.<br/><br/>A função org_admin geralmente permite criar, ler, atualizar e excluir ações para qualquer coleção que contenha a coluna org_id. Praticamente todos os dados exceto algumas das coleções mencionadas acima conterão um <code>org_id</code> coluna.<br/><br/>O papel do usuário geralmente permite ler apenas acesso a todos os itens com uma coluna org_id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud. Naves de TI com papéis embutidos para admin, org_admin e usuário.<br/><br/>Geralmente, um usuário que é um administrador do aplicativo Open-AudIT em si deve ter funções administrativas e possíveis org_admin.<br/><br/>Um usuário pode ter vários papéis. A permissão será aplicada no nível mais permissivo - ou seja, se um usuário tem o papel de usuário e org_admin, ele será capaz de criar locais porque org_admin concede essa permissão, mesmo que o papel de usuário não.<br/><br/>A função de administrador permite acesso a coleções como configuração, banco de dados, grupos, servidores ldap, registros, consultas e papéis. Itens globais que afetam toda a aplicação.<br/><br/>A função org_admin geralmente permite criar, ler, atualizar e excluir ações para qualquer coleção que contenha a coluna org_id. Praticamente todos os dados exceto algumas das coleções mencionadas acima conterão uma coluna org_id.<br/><br/>O papel do usuário geralmente permite ler apenas acesso a todos os itens com uma coluna org_id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Naves Open-AudIT com vários painéis pré-configurados. Se você é um usuário profissional, você pode selecionar entre dois destes e defini-lo como sua página padrão quando você logon. Se você é um usuário da Enterprise, você não só pode selecionar entre os cinco painéis pré-configurados, mas também tem a capacidade de criar o seu próprio.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT deve ser instalado em 64bit Windows <strong>Servidor</strong> Apenas sistemas. Windows 10 e Windows 11 são <strong>Não.</strong> Apoiado.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT usa Nmap em sua função Discovery. Nmap sonda dispositivos para portas abertas. Dispositivos devem responder com portas abertas. Dispositivos não respondem com isso. As diferentes respostas estão detalhadas abaixo.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT usa Nmap em sua função Discovery. Sem Nmap, Open-AudIT não funcionará corretamente. Cada instalação Open-AudIT assume que Nmap está instalada e também irá testá-la nas páginas da Discovery. Mais informações sobre Open-AudIT e Nmap estão disponíveis aqui.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT usa Nmap em sua função Discovery. Sem Nmap, Open-AudIT não funcionará corretamente. Cada instalação Open-AudIT assume que Nmap está instalado e testará para ele nas páginas da Discovery.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open-Aud. A TI usa credenciais para acessar seus dispositivos. São criptografadas e armazenadas, como você esperaria.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT foi escrito por um inglês falando australiano. Tudo na aplicação usa palavras em inglês. No entanto Open-AudIT sempre apoiou vários idiomas para exibição. Essas traduções nem sempre são corretas, porque os desenvolvedores não falam nativamente a língua de cada tradução oferecida.<br/><br/>O que pode fazer se algo não estiver correto na tradução?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap está instalado.';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Abrindo um ticket de apoio?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Dn Usuário Openldap';

$GLOBALS["lang"]['Openldap User Dn'] = 'Dn Usuário Openldap';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Atributo de Membro do Usuário Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Atributo de Membro do Usuário Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Aberto, filtrado.';

$GLOBALS["lang"]['Open|filtered'] = 'Aberto, filtrado.';

$GLOBALS["lang"]['Operating System'] = 'Sistema operacional.';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Família do sistema operacional contém';

$GLOBALS["lang"]['Operating Systems'] = 'Sistemas Operacionais';

$GLOBALS["lang"]['Operators'] = 'Operadores';

$GLOBALS["lang"]['optical'] = 'Óptico';

$GLOBALS["lang"]['Optical'] = 'Óptico';

$GLOBALS["lang"]['Optimized'] = 'Otimizado.';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Opção #1 - Mude os dados';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Opção #2 - Mude o arquivo de tradução';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Auditoria Opcional Baseada em Agente';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Versão opcional como auditada pela Open-AudIT. Use o sinal de porcentagem como uma carta.';

$GLOBALS["lang"]['options'] = 'Opções';

$GLOBALS["lang"]['Options'] = 'Opções';

$GLOBALS["lang"]['Options, options, options'] = 'Opções, opções, opções.';

$GLOBALS["lang"]['Or'] = 'Ou';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Ou selecione nos campos abaixo.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendents';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendents';

$GLOBALS["lang"]['org_id'] = 'ORG ID';

$GLOBALS["lang"]['Org ID'] = 'ORG ID';

$GLOBALS["lang"]['Organisation'] = 'Organização';

$GLOBALS["lang"]['organisation'] = 'Organização';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organização Descendentes';

$GLOBALS["lang"]['Organisations'] = 'Organizações';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'As organizações podem estender e aumentar o nível de detalhe que é armazenado contra cada dispositivo descoberto usando campos personalizados e o núcleo aberto permite fácil integração em CMDB, gerenciamento de eventos e sistemas de ticketing.';

$GLOBALS["lang"]['orgs'] = 'Orgulhos';

$GLOBALS["lang"]['Orgs'] = 'Orgulhos';

$GLOBALS["lang"]['Orgs Name'] = 'Nome dos orgs';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs em Open-AudIT são um item chave. Um usuário tem uma Org primária, bem como uma lista de Orgs que podem acessar. Um usuário combina isso com uma lista de papéis atribuídos que definem quais ações podem tomar sobre os itens atribuídos aos orgs a que têm acesso. A combinação de usuários <i>orgs</i> e <i>papéis</i> Defina o que eles podem e não podem fazer dentro do Open-AudIT.<br/><br/>A maioria dos itens do Open-AudIT são atribuídos a uma org.<br/><br/>Orgs podem ter filhos Orgs. Pense em uma estrutura organizacional. Se um usuário tem acesso a uma Org específica, na maioria das vezes (nem sempre) eles também têm acesso a esses descendentes de Orgs.';

$GLOBALS["lang"]['orientation'] = 'Orientação';

$GLOBALS["lang"]['Orientation'] = 'Orientação';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Versão de Os Exibição';

$GLOBALS["lang"]['Os Display Version'] = 'Versão de Os Exibição';

$GLOBALS["lang"]['os_family'] = 'Família Os';

$GLOBALS["lang"]['Os Family'] = 'Família Os';

$GLOBALS["lang"]['os_group'] = 'Grupo Os';

$GLOBALS["lang"]['Os Group'] = 'Grupo Os';

$GLOBALS["lang"]['os_installation_date'] = 'Data de instalação';

$GLOBALS["lang"]['Os Installation Date'] = 'Data de instalação';

$GLOBALS["lang"]['os_licence_expiry'] = 'Expiração da licença';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Expiração da licença';

$GLOBALS["lang"]['os_license'] = 'Licença de Os';

$GLOBALS["lang"]['Os License'] = 'Licença de Os';

$GLOBALS["lang"]['os_license_code'] = 'Código de Licença dos Os';

$GLOBALS["lang"]['Os License Code'] = 'Código de Licença dos Os';

$GLOBALS["lang"]['os_license_mode'] = 'Modo de Licença de Os';

$GLOBALS["lang"]['Os License Mode'] = 'Modo de Licença de Os';

$GLOBALS["lang"]['os_license_type'] = 'Tipo de Licença de Os';

$GLOBALS["lang"]['Os License Type'] = 'Tipo de Licença de Os';

$GLOBALS["lang"]['os_name'] = 'Nome dos Os';

$GLOBALS["lang"]['Os Name'] = 'Nome dos Os';

$GLOBALS["lang"]['os_version'] = 'Versão de Os';

$GLOBALS["lang"]['Os Version'] = 'Versão de Os';

$GLOBALS["lang"]['Other'] = 'Outro';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Além dessa restrição, você está livre para selecionar atributos conforme necessário. É uma boa ideia usar o menu.';

$GLOBALS["lang"]['Others'] = 'Outros';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Nossa integração padrão também permite uma descoberta em qualquer dispositivo fornecido externamente. Então enviamos uma descoberta padrão para a integração padrão fora da caixa. Eles usam as regras padrão, mas também habilitam a correspondência no endereço IP.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Nossos exemplos usarão o <i>Tipo</i> coluna.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Nosso framework envia arquivos aqui para processamento, e depois os deleta. Pense nos resultados da auditoria, etc.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Nosso objetivo com o lançamento das integrações iniciais foi especificamente para a NMIS para a integração Open-AudIT para <i>Apenas trabalho.</i>. Se você está usando os programas no Linux, você pode literalmente clicar em um único botão para executar a integração. Nada mais é necessário. Dito isso, a integração em si é extremamente configurável - então se algo não é à sua preferência, pode ser facilmente mudado.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Nosso novo recurso chamado Vulnerabilidades lhe dá a capacidade de determinar rapidamente se algum dispositivo é afetado por qualquer CVE (Exposição Comum Vulnerabilidade) - mas como?<br/><br/>A primeira onda consome constantemente a saída da alimentação Nist NVD. Pegamos isso e aplicamos algumas restrições, extraimos os programas afetados e construímos uma consulta SQL para reportar. Sua instância Open-AudIT chega à FirstWave e pede novas vulnerabilidades regularmente. Quando recebe um novo registro de vulnerabilidade, é executado contra o banco de dados e o resultado armazenado. Cada vez que um dispositivo é processado, todas as vulnerabilidades correspondentes são novamente executadas e o resultado armazenado. Isso significa que quando vemos uma lista de vulnerabilidade, não precisamos calcular todos os dispositivos afetados - já temos o resultado. Quando você vê um registro de vulnerabilidade individual, nós realmente recalculamos o resultado para essa vulnerabilidade singular.<br/><br/>Então, você está sempre atualizado!<br/><br/>Além disso, também calculamos o resultado de todas as vulnerabilidades para todos os dispositivos diariamente (geralmente em um momento silencioso, digamos 2 da manhã).<br/><br/>No seu caso de Open-AudIT, permitimos que você selecione quais fornecedores você gosta. Ou seja, não adianta recuperar registros de vulnerabilidade de um vendedor cujo software você não usa ou instalou. Por padrão, nossa lista de fornecedores é Adobe, Apple, Cisco, Google, Microsoft, Mozilla e Redhat.<br/><br/>Tudo isso soa muito simples, mas nos bastidores <b>Lote</b> Está acontecendo. Por exemplo, o registro CVE contém uma lista de softwares afetados, mas esses nomes de software não coincidem com o que recebemos quando auditamos um computador. Um bom exemplo é Apache. Normalmente, um registro CVE dirá que o software afetado é http_server. Na realidade, isso aparece como apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - e outros. Então, primeiro temos que determinar qual é o nome real do programa que recebemos quando perguntamos a um computador, e pode haver vários nomes. Depois disso, devemos analisar o registro CVE e criar uma declaração SQL correspondente. Permitindo vários nomes de programas como acima, e várias versões, intervalos de versões, e até mesmo várias peças diferentes de software (um exemplo é Thunderbird e Firefox em um único CVE). E seu caso de Open-AudIT deve pegar isso e aplicar filtragem Orgs também. E isso é apenas um CVE. Que tal determinar quais CVE você tem e não tem? Que tal adicionar um vendedor à lista mais tarde? Tantas coisas para considerar!<br/><br/>Assim como os relatórios de sempre, também temos novos widgets disponíveis para Dashboards, baseados em dados de vulnerabilidades.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Nosso tempo para uma resposta SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Nosso tempo para uma resposta WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Nosso tempo para uma resposta SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Nosso tempo limite para uma resposta do script de auditoria';

$GLOBALS["lang"]['output'] = 'Saída';

$GLOBALS["lang"]['Output'] = 'Saída';

$GLOBALS["lang"]['outputs'] = 'Saídas';

$GLOBALS["lang"]['Outputs'] = 'Saídas';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Pontuação geral de gravidade (0-10).';

$GLOBALS["lang"]['overwrite'] = 'Sobrescrever';

$GLOBALS["lang"]['Overwrite'] = 'Sobrescrever';

$GLOBALS["lang"]['owner'] = 'Dono.';

$GLOBALS["lang"]['Owner'] = 'Dono.';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec é uma re-implementação livremente redistribuível do programa popular SysInternal/Microsofts PsExec. PAExec pretende ser uma queda em substituição ao PsExec, então o uso da linha de comando é idêntico, com opções adicionais também suportadas. Este trabalho foi originalmente inspirado por Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Dados de postagem';

$GLOBALS["lang"]['Package'] = 'Pacote';

$GLOBALS["lang"]['packages'] = 'Pacotes';

$GLOBALS["lang"]['Packages'] = 'Pacotes';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Pacotes são usados para relatar coisas como <i>Software banido.</i>, AntiVirus em servidores, etc.<br/><br/>Open-AudIT fornece widgets que se baseiam em repots também fornecidos para determinar o status de antivírus, firewall e outros softwares.';

$GLOBALS["lang"]['pagefile'] = 'Arquivo da página';

$GLOBALS["lang"]['Pagefile'] = 'Arquivo da página';

$GLOBALS["lang"]['Pakistan'] = 'Paquistão';

$GLOBALS["lang"]['Palau'] = 'Palau.';

$GLOBALS["lang"]['Palestinian Territory'] = 'Território palestino';

$GLOBALS["lang"]['Panama'] = 'Panamá';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Nova Guiné';

$GLOBALS["lang"]['Paraguay'] = 'Paraguai';

$GLOBALS["lang"]['Parameters'] = 'Parâmetros';

$GLOBALS["lang"]['Paranoid'] = 'Paranóico';

$GLOBALS["lang"]['Parent'] = 'Pai.';

$GLOBALS["lang"]['parent_id'] = 'ID dos pais';

$GLOBALS["lang"]['Parent ID'] = 'ID dos pais';

$GLOBALS["lang"]['parent_name'] = 'Nome dos pais';

$GLOBALS["lang"]['Parent Name'] = 'Nome dos pais';

$GLOBALS["lang"]['part_number'] = 'Número da Parte';

$GLOBALS["lang"]['Part Number'] = 'Número da Parte';

$GLOBALS["lang"]['part_of_domain'] = 'Parte do Domínio';

$GLOBALS["lang"]['Part Of Domain'] = 'Parte do Domínio';

$GLOBALS["lang"]['Partition'] = 'Partição';

$GLOBALS["lang"]['partition_count'] = 'Contagem de partição';

$GLOBALS["lang"]['Partition Count'] = 'Contagem de partição';

$GLOBALS["lang"]['partition_disk_index'] = 'Índice de Disco de Partição';

$GLOBALS["lang"]['Partition Disk Index'] = 'Índice de Disco de Partição';

$GLOBALS["lang"]['Pass'] = 'Passo.';

$GLOBALS["lang"]['Passed'] = 'Passado';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Rede de Área Local Óptica Passiva';

$GLOBALS["lang"]['Password'] = 'Senha';

$GLOBALS["lang"]['password'] = 'Senha';

$GLOBALS["lang"]['password_changeable'] = 'Palavra-passe mutável';

$GLOBALS["lang"]['Password Changeable'] = 'Palavra-passe mutável';

$GLOBALS["lang"]['password_disabled'] = 'Senha Desativada';

$GLOBALS["lang"]['Password Disabled'] = 'Senha Desativada';

$GLOBALS["lang"]['password_expires'] = 'A senha expira';

$GLOBALS["lang"]['Password Expires'] = 'A senha expira';

$GLOBALS["lang"]['password_last_changed'] = 'Senha Última Mudança';

$GLOBALS["lang"]['Password Last Changed'] = 'Senha Última Mudança';

$GLOBALS["lang"]['password_required'] = 'Senha necessária';

$GLOBALS["lang"]['Password Required'] = 'Senha necessária';

$GLOBALS["lang"]['patch_panel'] = 'Painel de patch';

$GLOBALS["lang"]['Patch Panel'] = 'Painel de patch';

$GLOBALS["lang"]['patch_panel_port'] = 'Porta do Painel de Patch';

$GLOBALS["lang"]['Patch Panel Port'] = 'Porta do Painel de Patch';

$GLOBALS["lang"]['path'] = 'Caminho';

$GLOBALS["lang"]['Path'] = 'Caminho';

$GLOBALS["lang"]['Performance'] = 'Performance';

$GLOBALS["lang"]['Performed'] = 'Realizado';

$GLOBALS["lang"]['Permission'] = 'Permissão.';

$GLOBALS["lang"]['Permission Required'] = 'Permissão necessária.';

$GLOBALS["lang"]['permissions'] = 'Permissões.';

$GLOBALS["lang"]['Permissions'] = 'Permissões.';

$GLOBALS["lang"]['Persian'] = 'Persa';

$GLOBALS["lang"]['Personal Area Network'] = 'Rede de Área Pessoal';

$GLOBALS["lang"]['Personal area network'] = 'Rede de área pessoal';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filipinas';

$GLOBALS["lang"]['phone'] = 'Telefone';

$GLOBALS["lang"]['Phone'] = 'Telefone';

$GLOBALS["lang"]['Physical CPUs'] = 'CPUs físicas';

$GLOBALS["lang"]['physical_count'] = 'Contagem física';

$GLOBALS["lang"]['Physical Count'] = 'Contagem física';

$GLOBALS["lang"]['physical_depth'] = 'Profundidade Física';

$GLOBALS["lang"]['Physical Depth'] = 'Profundidade Física';

$GLOBALS["lang"]['physical_height'] = 'Altura Física';

$GLOBALS["lang"]['Physical Height'] = 'Altura Física';

$GLOBALS["lang"]['physical_width'] = 'Largura física';

$GLOBALS["lang"]['Physical Width'] = 'Largura física';

$GLOBALS["lang"]['picture'] = 'Foto';

$GLOBALS["lang"]['Picture'] = 'Foto';

$GLOBALS["lang"]['pid'] = 'Pid.';

$GLOBALS["lang"]['Pid'] = 'Pid.';

$GLOBALS["lang"]['Pie Chart'] = 'Gráfico de Tortas';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Gráficos de tortas devem retornar nome ou nome, descrição ou descrição e contagem.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Ping Target';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Ilhas Pitcairn';

$GLOBALS["lang"]['placement'] = 'Colocação';

$GLOBALS["lang"]['Placement'] = 'Colocação';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Planeje e realize auditorias internas.';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Por favor, tenha um administrador Open-AudIT logon e atualize o banco de dados.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Por favor, entre e mude isso o mais rápido possível.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Por favor, entre no Open-AudIT Server ( Windows ou Linux) e execute <code>nslookup IP_ADDRESS_OF_TARGET</code> no comando prompt ou shell. Deve ser capaz de resolver o IP com um nome.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Por favor, note que a caixa de seleção substituirá a caixa de entrada de texto.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Por favor, veja o FAQ.';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Por favor, envie todos os três arquivos para seu contato de apoio na Opmantek e descreva seu problema.';

$GLOBALS["lang"]['Please set using'] = 'Por favor, prepare-se.';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Por favor, visite a homepage em';

$GLOBALS["lang"]['pod'] = 'Pod.';

$GLOBALS["lang"]['Pod'] = 'Pod.';

$GLOBALS["lang"]['Poland'] = 'Polônia';

$GLOBALS["lang"]['Policies'] = 'Políticas';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Políticas têm exceções.';

$GLOBALS["lang"]['policy'] = 'Política';

$GLOBALS["lang"]['Policy'] = 'Política';

$GLOBALS["lang"]['policy_id'] = 'ID da Política';

$GLOBALS["lang"]['Policy ID'] = 'ID da Política';

$GLOBALS["lang"]['Policy Result'] = 'Resultado da Política';

$GLOBALS["lang"]['Policy Results'] = 'Resultados da Política';

$GLOBALS["lang"]['Polish'] = 'Polonês';

$GLOBALS["lang"]['Polite'] = 'Educado.';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Preencha os valores abaixo:';

$GLOBALS["lang"]['Populated by audit.'] = 'Populado por auditoria.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Populado por descoberta e auditoria.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Populado dinamicamente.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Populado do DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Populado da descoberta da SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Populado de auditorias de dispositivos.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Populado do nome do hospedeiro.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populado do ID de máquina no Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Populado do IP para a rota padrão ou o IP detectado na descoberta.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Populado do comando hostname.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Com dados adicionais do sistema externo, em uma representação da JSON.';

$GLOBALS["lang"]['port'] = 'Porto';

$GLOBALS["lang"]['Port'] = 'Porto';

$GLOBALS["lang"]['port_name'] = 'Nome do Porto';

$GLOBALS["lang"]['Port Name'] = 'Nome do Porto';

$GLOBALS["lang"]['port_number'] = 'Número do porto.';

$GLOBALS["lang"]['Port Number'] = 'Número do porto.';

$GLOBALS["lang"]['ports_in_order'] = 'Portos em ordem';

$GLOBALS["lang"]['Ports In Order'] = 'Portos em ordem';

$GLOBALS["lang"]['ports_stop_after'] = 'Portos param depois';

$GLOBALS["lang"]['Ports Stop After'] = 'Portos param depois';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, República Portuguesa';

$GLOBALS["lang"]['Portuguese'] = 'Português';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Português (Brasil)';

$GLOBALS["lang"]['position'] = 'Posição';

$GLOBALS["lang"]['Position'] = 'Posição';

$GLOBALS["lang"]['Post-Certification'] = 'Pós-certificação';

$GLOBALS["lang"]['postcode'] = 'Código postal';

$GLOBALS["lang"]['Postcode'] = 'Código postal';

$GLOBALS["lang"]['power_circuit'] = 'Circuito de Energia';

$GLOBALS["lang"]['Power Circuit'] = 'Circuito de Energia';

$GLOBALS["lang"]['power_sockets'] = 'Meias de Energia';

$GLOBALS["lang"]['Power Sockets'] = 'Meias de Energia';

$GLOBALS["lang"]['Predictable'] = 'Previsível';

$GLOBALS["lang"]['Preferences'] = 'Preferências';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Prepare-se para a recertificação a cada 3 anos.';

$GLOBALS["lang"]['Prerequisites'] = 'Pré-requisitos';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Pré-requisitos e testes';

$GLOBALS["lang"]['present'] = 'Presente';

$GLOBALS["lang"]['Present'] = 'Presente';

$GLOBALS["lang"]['previous_value'] = 'Valor anterior';

$GLOBALS["lang"]['Previous Value'] = 'Valor anterior';

$GLOBALS["lang"]['primary'] = 'Primário.';

$GLOBALS["lang"]['Primary'] = 'Primário.';

$GLOBALS["lang"]['Primary Key'] = 'Chave Primária';

$GLOBALS["lang"]['print_queue'] = 'Imprimir Fila';

$GLOBALS["lang"]['Print Queue'] = 'Imprimir Fila';

$GLOBALS["lang"]['printer_color'] = 'Cor da Impressora';

$GLOBALS["lang"]['Printer Color'] = 'Cor da Impressora';

$GLOBALS["lang"]['printer_duplex'] = 'Impressora Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Impressora Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Nome da porta da impressora';

$GLOBALS["lang"]['Printer Port Name'] = 'Nome da porta da impressora';

$GLOBALS["lang"]['printer_shared'] = 'Impressora Compartilhada';

$GLOBALS["lang"]['Printer Shared'] = 'Impressora Compartilhada';

$GLOBALS["lang"]['printer_shared_name'] = 'Nome compartilhado da impressora';

$GLOBALS["lang"]['Printer Shared Name'] = 'Nome compartilhado da impressora';

$GLOBALS["lang"]['priority'] = 'Prioridade';

$GLOBALS["lang"]['Priority'] = 'Prioridade';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Senha de privacidade';

$GLOBALS["lang"]['Privacy Protocol'] = 'Protocolo de privacidade';

$GLOBALS["lang"]['privileges_required'] = 'Privilégios necessários.';

$GLOBALS["lang"]['Privileges Required'] = 'Privilégios necessários.';

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

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Nome do produto: ';

$GLOBALS["lang"]['products'] = 'Produtos';

$GLOBALS["lang"]['Products'] = 'Produtos';

$GLOBALS["lang"]['Professional'] = 'Profissional.';

$GLOBALS["lang"]['profile'] = 'Perfil';

$GLOBALS["lang"]['Profile'] = 'Perfil';

$GLOBALS["lang"]['program'] = 'Programa';

$GLOBALS["lang"]['Program'] = 'Programa';

$GLOBALS["lang"]['Properties'] = 'Propriedades';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Proprietário. Se você quiser modificar HighCharts você pode exigir um';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Protege a confidencialidade, integridade e disponibilidade de informações.';

$GLOBALS["lang"]['protocol'] = 'Protocolo';

$GLOBALS["lang"]['Protocol'] = 'Protocolo';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Dê uma descrição e selecione e expire a duração.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Providencie um nome - nós humildemente recomendamos Open-AudIT, mas você pode dar o nome que quiser.<br/>Do formulário Open-AudIT, copie o valor para o <i>Redirecionar URI</i> campo e colar no <i>Redirecionar URIs</i> Campo em OKTA.<br/>O redirecionamento de URIs é opcional, mas se quiser, pode usar áudio/índice aberto. php/logout com seu endereço http dos servidores Open-AudIT, conforme a imagem.<br/>Normalmente o seu A URL do Open-AudIT vai parecer algo como';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Desde que você tenha as credenciais corretas, Device Seed Discovery funciona como segue.';

$GLOBALS["lang"]['provider'] = 'Provedor';

$GLOBALS["lang"]['Provider'] = 'Provedor';

$GLOBALS["lang"]['published'] = 'Publicado';

$GLOBALS["lang"]['Published'] = 'Publicado';

$GLOBALS["lang"]['published_date'] = 'Data de publicação';

$GLOBALS["lang"]['Published Date'] = 'Data de publicação';

$GLOBALS["lang"]['publisher'] = 'Editora';

$GLOBALS["lang"]['Publisher'] = 'Editora';

$GLOBALS["lang"]['Puerto Rico'] = 'Porto Rico.';

$GLOBALS["lang"]['Purchase'] = 'Compra';

$GLOBALS["lang"]['purchase_amount'] = 'Quantidade de Compra';

$GLOBALS["lang"]['Purchase Amount'] = 'Quantidade de Compra';

$GLOBALS["lang"]['purchase_cost_center'] = 'Centro de Custos de Compra';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Centro de Custos de Compra';

$GLOBALS["lang"]['purchase_count'] = 'Contagem de Compras';

$GLOBALS["lang"]['Purchase Count'] = 'Contagem de Compras';

$GLOBALS["lang"]['purchase_date'] = 'Data de compra';

$GLOBALS["lang"]['Purchase Date'] = 'Data de compra';

$GLOBALS["lang"]['purchase_invoice'] = 'Compre Fatura';

$GLOBALS["lang"]['Purchase Invoice'] = 'Compre Fatura';

$GLOBALS["lang"]['purchase_order'] = 'Ordem de Compra';

$GLOBALS["lang"]['Purchase Order'] = 'Ordem de Compra';

$GLOBALS["lang"]['purchase_order_number'] = 'Número da Ordem de Compra';

$GLOBALS["lang"]['Purchase Order Number'] = 'Número da Ordem de Compra';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Número do contrato de serviço de compra';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Número do contrato de serviço de compra';

$GLOBALS["lang"]['purchase_vendor'] = 'Compra Fornecedor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Compra Fornecedor';

$GLOBALS["lang"]['purpose'] = 'Propósito';

$GLOBALS["lang"]['Purpose'] = 'Propósito';

$GLOBALS["lang"]['Qatar'] = 'Catar';

$GLOBALS["lang"]['queries'] = 'Consultas';

$GLOBALS["lang"]['Queries'] = 'Consultas';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Consultas são uma parte importante do Open-AudIT. Eles são o que permite obter informações significativas de todos os dados do dispositivo que você descobriu. Juntamente com resumos e grupos, eles fornecem um poderoso mecanismo para extrair informações cruciais.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Consultas para grupos devem selecionar apenas o';

$GLOBALS["lang"]['Query'] = 'Consulta';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Consulte este atributo Active Directory primeiro para determinar a unidade de trabalho dos usuários.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Consulte este atributo Active Directory para determinar a unidade de trabalho dos usuários.';

$GLOBALS["lang"]['queue'] = 'Fila.';

$GLOBALS["lang"]['Queue'] = 'Fila.';

$GLOBALS["lang"]['Queue Limit'] = 'Limite da Fila';

$GLOBALS["lang"]['Queued Device Audits'] = 'Auditorias de dispositivos em fila';

$GLOBALS["lang"]['Queued IP Scans'] = 'Escaneamentos IP em fila';

$GLOBALS["lang"]['Queued Items'] = 'Itens em fila';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC para Active Directory e openLDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Iniciar';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Nível RX';

$GLOBALS["lang"]['RX Power'] = 'RX Power';

$GLOBALS["lang"]['RX Profile'] = 'Perfil RX';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Dispositivos Rack';

$GLOBALS["lang"]['Rack Devices'] = 'Dispositivos Rack';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Gestão de Rack e Relatórios';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Rádio';

$GLOBALS["lang"]['Radio'] = 'Rádio';

$GLOBALS["lang"]['Radio MAC'] = 'Rádio MAC';

$GLOBALS["lang"]['rationale'] = 'Racional';

$GLOBALS["lang"]['Rationale'] = 'Racional';

$GLOBALS["lang"]['raw'] = 'Raw.';

$GLOBALS["lang"]['Raw'] = 'Raw.';

$GLOBALS["lang"]['read'] = 'Leia.';

$GLOBALS["lang"]['Read'] = 'Leia.';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Leia nossa documentação on-line na Wiki Open-AudIT.';

$GLOBALS["lang"]['Read through the log file at'] = 'Leia o arquivo de registro em';

$GLOBALS["lang"]['Received'] = 'Recebido.';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Recentemente nos perguntaram se você considera Open-AudIT mais seguro do que outros programas similares? Como na maioria das coisas, a resposta é <i>Depende.</i>.<br/><br/>Open-Aud. Pode ser operado de forma a ser extremamente seguro. Mas, como de costume, com a segurança baseada em computador, quanto mais seguro você deseja fazer algo, mais inconveniente se torna usar. A velha frase <i>O computador mais seguro é um que está desligado e no armário.<i> vem à mente.<br/><br/>Abaixo descreveremos algumas opções que podem ser usadas com Open-AudIT que aumentarão a segurança. Como a maioria dos itens da Open-AudIT, essas são opções e não obrigatórias. Até onde você leva a segurança é com você.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Recertificação: É necessário a cada três anos.';

$GLOBALS["lang"]['Red Query'] = 'Consulta Vermelha';

$GLOBALS["lang"]['Redirect URI'] = 'Redirecionar URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirecionar Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirecionar Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Reduz o risco de violação de dados e ameaças cibernéticas.';

$GLOBALS["lang"]['references'] = 'Referências';

$GLOBALS["lang"]['References'] = 'Referências';

$GLOBALS["lang"]['region'] = 'Região';

$GLOBALS["lang"]['Region'] = 'Região';

$GLOBALS["lang"]['registered_user'] = 'Usuário registrado';

$GLOBALS["lang"]['Registered User'] = 'Usuário registrado';

$GLOBALS["lang"]['Rejected'] = 'Rejeitado.';

$GLOBALS["lang"]['rel'] = 'Rel.';

$GLOBALS["lang"]['Rel'] = 'Rel.';

$GLOBALS["lang"]['Release'] = 'Soltar';

$GLOBALS["lang"]['remediation'] = 'Remediação';

$GLOBALS["lang"]['Remediation'] = 'Remediação';

$GLOBALS["lang"]['Remote'] = 'Remoto';

$GLOBALS["lang"]['remote_address'] = 'Endereço remoto';

$GLOBALS["lang"]['Remote Address'] = 'Endereço remoto';

$GLOBALS["lang"]['remote_port'] = 'Porto Remoto';

$GLOBALS["lang"]['Remote Port'] = 'Porto Remoto';

$GLOBALS["lang"]['Remove'] = 'Remova';

$GLOBALS["lang"]['Remove Exception'] = 'Remova a exceção';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Repita até que você tenha um PC Windows completamente descoberto e auditado.';

$GLOBALS["lang"]['Report'] = 'Relatório';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Relatório sobre seus dispositivos, redes e mais';

$GLOBALS["lang"]['reportable'] = 'Relatável.';

$GLOBALS["lang"]['Reportable'] = 'Relatável.';

$GLOBALS["lang"]['Reports'] = 'Relatórios';

$GLOBALS["lang"]['request'] = 'Pedido';

$GLOBALS["lang"]['Request'] = 'Pedido';

$GLOBALS["lang"]['Request Method'] = 'Método de Pedido';

$GLOBALS["lang"]['Request Vulnerability'] = 'Requisito Vulnerabilidade.';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Pedir uma específica. CVE';

$GLOBALS["lang"]['requested'] = 'Solicitado.';

$GLOBALS["lang"]['Requested'] = 'Solicitado.';

$GLOBALS["lang"]['require_port'] = 'Exigir Porto';

$GLOBALS["lang"]['Require Port'] = 'Exigir Porto';

$GLOBALS["lang"]['Require an Open Port'] = 'Requer um porto aberto.';

$GLOBALS["lang"]['Required'] = 'Necessário.';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Necessárias permissões de usuário do AWS';

$GLOBALS["lang"]['Required Fields'] = 'Campos Obrigatórios';

$GLOBALS["lang"]['Reset'] = 'Reiniciar';

$GLOBALS["lang"]['Reset All Data'] = 'Reinicie todos os dados';

$GLOBALS["lang"]['Reset to Default'] = 'Reiniciar ao padrão';

$GLOBALS["lang"]['resource'] = 'Recurso';

$GLOBALS["lang"]['Resource'] = 'Recurso';

$GLOBALS["lang"]['Resource Name'] = 'Nome do recurso';

$GLOBALS["lang"]['Resources'] = 'Recursos';

$GLOBALS["lang"]['response'] = 'Resposta';

$GLOBALS["lang"]['Response'] = 'Resposta';

$GLOBALS["lang"]['responsibility'] = 'Responsabilidade';

$GLOBALS["lang"]['Responsibility'] = 'Responsabilidade';

$GLOBALS["lang"]['Restore my Licenses'] = 'Restaure minhas licenças.';

$GLOBALS["lang"]['Restrict to Private'] = 'Restrição ao soldado';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Restrição à Subnet';

$GLOBALS["lang"]['result'] = 'Resultado';

$GLOBALS["lang"]['Result'] = 'Resultado';

$GLOBALS["lang"]['Resulting Function'] = 'Função resultante';

$GLOBALS["lang"]['Results'] = 'Resultados';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Recupere uma lista de dispositivos no';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Recuperar uma lista de dispositivos com o nome do sistema operacional como Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Recupere todos os detalhes sobre o dispositivo com ID 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Recupere todos os dispositivos rodando Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Recuperar todos os dispositivos com as colunas padrão';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Recupere os primeiros 10 dispositivos rodando Windows ordenados pelo hostname';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Recuperar as propriedades ID, ip, nome do host, domínio, tipo de todos os dispositivos';

$GLOBALS["lang"]['retrieved'] = 'Recuperado.';

$GLOBALS["lang"]['Retrieved'] = 'Recuperado.';

$GLOBALS["lang"]['retrieved_ident'] = 'Identidade recuperada';

$GLOBALS["lang"]['Retrieved Ident'] = 'Identidade recuperada';

$GLOBALS["lang"]['retrieved_name'] = 'Nome recuperado.';

$GLOBALS["lang"]['Retrieved Name'] = 'Nome recuperado.';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retirado do dispositivo - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris: smbios, AIX: Nome.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Recuperando uma lista de credenciais';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Recuperando ou Criando';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Devolva uma coleção de dispositivos com o conjunto padrão de colunas (dispositivos.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.fabricante, devices.os_family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Devolva uma lista de todos os módulos instalados em Routers.';

$GLOBALS["lang"]['Return an individual device details'] = 'Devolva um dispositivo individual\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Devolve uma lista de "coleções".';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Devolve os detalhes.';

$GLOBALS["lang"]['Reunion'] = 'Reunião';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Reveja as práticas atuais contra os requisitos da ISO 27001.';

$GLOBALS["lang"]['revision'] = 'Revisão';

$GLOBALS["lang"]['Revision'] = 'Revisão';

$GLOBALS["lang"]['risk_assesment_result'] = 'Resultado da avaliação de risco';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Resultado da avaliação de risco';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Avaliação e tratamento de risco';

$GLOBALS["lang"]['Risk Management'] = 'Gestão de Riscos';

$GLOBALS["lang"]['Role'] = 'Papel';

$GLOBALS["lang"]['roles'] = 'Funções';

$GLOBALS["lang"]['Roles'] = 'Funções';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Os papéis só podem ser criados e editados se você tiver uma licença da Open-AudIT Enterprise. Para a maioria dos usuários, o conjunto padrão de papéis deve ser tudo o que é necessário.';

$GLOBALS["lang"]['Romania'] = 'Roménia';

$GLOBALS["lang"]['Romanian'] = 'Romeno';

$GLOBALS["lang"]['Room'] = 'Quarto';

$GLOBALS["lang"]['route'] = 'Rota';

$GLOBALS["lang"]['Route'] = 'Rota';

$GLOBALS["lang"]['Row'] = 'Reme.';

$GLOBALS["lang"]['Row Count'] = 'Contagem de filas';

$GLOBALS["lang"]['row_position'] = 'Posição da Linha';

$GLOBALS["lang"]['Row Position'] = 'Posição da Linha';

$GLOBALS["lang"]['Rows'] = 'Filas.';

$GLOBALS["lang"]['ru_height'] = 'Ru Height.';

$GLOBALS["lang"]['Ru Height'] = 'Ru Height.';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Grupo de Regras';

$GLOBALS["lang"]['Rule Group'] = 'Grupo de Regras';

$GLOBALS["lang"]['rules'] = 'Regras';

$GLOBALS["lang"]['Rules'] = 'Regras';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Regras são criadas e executadas contra um dispositivo quando o dispositivo é descoberto ou um resultado de auditoria é processado. Regras podem ser usadas para definir um atributo de dispositivo baseado em outros atributos.<br/><br/>NOTA - No momento não podemos excluir uma entrada ou saída de regra que contenha um /. Isso é porque o framework está analisando o / como parte da URL e retornando um 404, mesmo antes de nosso código ser executado. A solução para isso é apagar a regra em si, e então recriar as entradas e saídas conforme necessário. Felizmente entradas e saídas que contêm um / são raros (de fato, nenhum existe por padrão).';

$GLOBALS["lang"]['Run Discovery'] = 'Corra Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Corra Discovery em dispositivos';

$GLOBALS["lang"]['Run Your Discovery'] = 'Faça sua descoberta';

$GLOBALS["lang"]['Run a Command'] = 'Execute um comando';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Faça uma descoberta e descubra <b>O que há na sua rede?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Passe o script digitando <code>cscript test_windows_client.vbs</code> no console.';

$GLOBALS["lang"]['Run this Command'] = 'Execute este comando.';

$GLOBALS["lang"]['runas'] = 'Runas.';

$GLOBALS["lang"]['Runas'] = 'Runas.';

$GLOBALS["lang"]['Running'] = 'Correndo.';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Executando o Serviço Apache Open-AudIT em Windows';

$GLOBALS["lang"]['Russian'] = 'Russo.';

$GLOBALS["lang"]['Russian Federation'] = 'Federação Russa';

$GLOBALS["lang"]['Rwanda'] = 'Ruanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq.';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq.';

$GLOBALS["lang"]['rx_level'] = 'Nível Rx';

$GLOBALS["lang"]['Rx Level'] = 'Nível Rx';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Perfil RX';

$GLOBALS["lang"]['Rx Profile'] = 'Perfil RX';

$GLOBALS["lang"]['SAN Audit'] = 'Audição SAN';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-descoberta';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Versão SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Detalhes';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'Versão SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Avançado)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Declarações de Criação SQL';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL não contendo esta condição resultará em o widget não ser executado.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Chave';

$GLOBALS["lang"]['SW Revision'] = 'Revisão da SW';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Santa Helena.';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'São Cristóvão e Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Santa Lúcia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin.';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'São Pedro e Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'São Vicente e Granadinas';

$GLOBALS["lang"]['Samoa'] = 'Samoa.';

$GLOBALS["lang"]['san'] = 'San.';

$GLOBALS["lang"]['San'] = 'San.';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'São Tomé e Príncipe';

$GLOBALS["lang"]['Saturday'] = 'Sábado';

$GLOBALS["lang"]['Saudi Arabia'] = 'Arábia Saudita';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Salve e execute o arquivo. Certifique-se de executar o arquivo como administrador para instalá-lo (clique direito, execute como administrador).';

$GLOBALS["lang"]['Save as Default'] = 'Salvar como padrão';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Salve o arquivo baixado.';

$GLOBALS["lang"]['scaling'] = 'Escala';

$GLOBALS["lang"]['Scaling'] = 'Escala';

$GLOBALS["lang"]['scan_options'] = 'Opções de digitalização';

$GLOBALS["lang"]['Scan Options'] = 'Opções de digitalização';

$GLOBALS["lang"]['Scan Options ID'] = 'Opções de digitalização ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Procure por esta porta e se for detectada aberta, use esta porta para comunicação SSH. Isto é adicionado à lista de portos TCP personalizados acima (se não já incluído), então não há necessidade de incluí-lo nessa lista também. Separado, sem espaço.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Analise o número máximo de portas TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Analise o número máximo de portas UDP do Nmap.';

$GLOBALS["lang"]['schedule'] = 'Agendar';

$GLOBALS["lang"]['Schedule'] = 'Agendar';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'A descoberta de dispositivos agendados e relatórios fazem do Open-AudIT Professional uma solução eficiente para profissionais de TI ocupados procurando reduzir as despesas gerais e aumentar as percepções.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Agendamento - descoberta, reportando e mais';

$GLOBALS["lang"]['scope'] = 'Escopo';

$GLOBALS["lang"]['Scope'] = 'Escopo';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Escopo é conhecido como Escopo de Autorização, representando se uma vulnerabilidade afeta recursos além da autoridade de segurança original do componente vulnerável.<br/><br/>Os únicos dois valores válidos para este atributo são';

$GLOBALS["lang"]['script_timeout'] = 'Tempo limite do script';

$GLOBALS["lang"]['Script Timeout'] = 'Tempo limite do script';

$GLOBALS["lang"]['scripts'] = 'Roteiros';

$GLOBALS["lang"]['Scripts'] = 'Roteiros';

$GLOBALS["lang"]['scsi'] = 'Scsi.';

$GLOBALS["lang"]['Scsi'] = 'Scsi.';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus.';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus.';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Unidade Lógica Scsi';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Unidade Lógica Scsi';

$GLOBALS["lang"]['scsi_port'] = 'Porto Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Porto Scsi';

$GLOBALS["lang"]['Search'] = 'Busca.';

$GLOBALS["lang"]['Search For a Device'] = 'Procure por um dispositivo.';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Procurando usando tabelas de dados';

$GLOBALS["lang"]['Second'] = 'Segundo.';

$GLOBALS["lang"]['secondary'] = 'Secundário';

$GLOBALS["lang"]['Secondary'] = 'Secundário';

$GLOBALS["lang"]['Secondary Text'] = 'Texto Secundário';

$GLOBALS["lang"]['Secret Key'] = 'Chave secreta';

$GLOBALS["lang"]['section'] = 'Seção';

$GLOBALS["lang"]['Section'] = 'Seção';

$GLOBALS["lang"]['secure'] = 'Seguro.';

$GLOBALS["lang"]['Secure'] = 'Seguro.';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Protocolo de Automação de Conteúdo de Segurança';

$GLOBALS["lang"]['Security Level'] = 'Nível de segurança';

$GLOBALS["lang"]['Security Name'] = 'Nome da Segurança';

$GLOBALS["lang"]['Security Status'] = 'Status de segurança';

$GLOBALS["lang"]['security_zone'] = 'Zona de Segurança.';

$GLOBALS["lang"]['Security Zone'] = 'Zona de Segurança.';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Veja em cima. NOTA - Isso também pode ser causado por um certificado auto assinado no servidor LDAP. Estamos trabalhando para permitir isso em um futuro lançamento.';

$GLOBALS["lang"]['See our page on enabling'] = 'Veja nossa página sobre habilitação';

$GLOBALS["lang"]['Seed Discoveries'] = 'Descobertas de Sementes';

$GLOBALS["lang"]['seed_ip'] = 'Semente IP';

$GLOBALS["lang"]['Seed IP'] = 'Semente IP';

$GLOBALS["lang"]['seed_ping'] = 'Ping de semente';

$GLOBALS["lang"]['Seed Ping'] = 'Ping de semente';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Semente Restrita a Privado';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Semente Restrita a Privado';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Restrição de sementes à subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Restrição de sementes à subnet';

$GLOBALS["lang"]['Select'] = 'Selecionar';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Selecione administrador -> Tarefas -> Criar Tarefa do menu.';

$GLOBALS["lang"]['Select All'] = 'Selecionar tudo';

$GLOBALS["lang"]['Select All Devices'] = 'Selecione todos os dispositivos';

$GLOBALS["lang"]['select_external_attribute'] = 'Selecione o atributo externo';

$GLOBALS["lang"]['Select External Attribute'] = 'Selecione o atributo externo';

$GLOBALS["lang"]['select_external_count'] = 'Selecione contagem externa';

$GLOBALS["lang"]['Select External Count'] = 'Selecione contagem externa';

$GLOBALS["lang"]['select_external_type'] = 'Selecione Externo Tipo';

$GLOBALS["lang"]['Select External Type'] = 'Selecione Externo Tipo';

$GLOBALS["lang"]['select_external_value'] = 'Selecione Externo Valor';

$GLOBALS["lang"]['Select External Value'] = 'Selecione Externo Valor';

$GLOBALS["lang"]['select_internal_attribute'] = 'Selecione o atributo interno';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Selecione o atributo interno';

$GLOBALS["lang"]['select_internal_count'] = 'Selecione contagem interna';

$GLOBALS["lang"]['Select Internal Count'] = 'Selecione contagem interna';

$GLOBALS["lang"]['select_internal_type'] = 'Selecionar Interno Tipo';

$GLOBALS["lang"]['Select Internal Type'] = 'Selecionar Interno Tipo';

$GLOBALS["lang"]['select_internal_value'] = 'Selecionar Interno Valor';

$GLOBALS["lang"]['Select Internal Value'] = 'Selecionar Interno Valor';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Selecione o menu -> Gerenciar -> Bases da lista.';

$GLOBALS["lang"]['Select a Table'] = 'Selecione uma tabela';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Selecione um organismo de certificação acreditado.';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Selecione e aplique controles apropriados (Anexo A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Selecione o <i>COM Segurança.</i> aba<br/><br/>Clique em Permissões de Acesso. Editar padrão';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Selecione o <i>Assine.</i> tab e copie o valor para <i>Emissor</i> (apenas o URL em si). Colar isso no Open-AudIT <i>Emissor</i> Campo.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Selecione o <i>Esta conta.</i> caixa de seleção e fornecer o nome da conta e senha.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Selecione o menu Iniciar e digite <i>Serviços. Clique no ícone Serviços.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Selecione o tipo de Auth Menthod para criar e inserir os detalhes relevantes.';

$GLOBALS["lang"]['Self Delete'] = 'Self Delete';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Sensibilidade';

$GLOBALS["lang"]['Sensitivity'] = 'Sensibilidade';

$GLOBALS["lang"]['September'] = 'Setembro';

$GLOBALS["lang"]['Serbia'] = 'Sérvia';

$GLOBALS["lang"]['serial'] = 'Serial';

$GLOBALS["lang"]['Serial'] = 'Serial';

$GLOBALS["lang"]['serial_imei'] = 'Serial Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Serial Imei';

$GLOBALS["lang"]['serial_sim'] = 'Sim Serial';

$GLOBALS["lang"]['Serial Sim'] = 'Sim Serial';

$GLOBALS["lang"]['series'] = 'Série';

$GLOBALS["lang"]['Series'] = 'Série';

$GLOBALS["lang"]['server'] = 'Servidor';

$GLOBALS["lang"]['Server'] = 'Servidor';

$GLOBALS["lang"]['server_id'] = 'ID do servidor';

$GLOBALS["lang"]['Server ID'] = 'ID do servidor';

$GLOBALS["lang"]['Server Is'] = 'Servidor é';

$GLOBALS["lang"]['server_item'] = 'Item do Servidor';

$GLOBALS["lang"]['Server Item'] = 'Item do Servidor';

$GLOBALS["lang"]['Server Status'] = 'Status do servidor';

$GLOBALS["lang"]['Servers'] = 'Servidores';

$GLOBALS["lang"]['Servers Only'] = 'Apenas Servidores';

$GLOBALS["lang"]['service'] = 'Serviço';

$GLOBALS["lang"]['Service'] = 'Serviço';

$GLOBALS["lang"]['service_identifier'] = 'Identificador de Serviço';

$GLOBALS["lang"]['Service Identifier'] = 'Identificador de Serviço';

$GLOBALS["lang"]['service_level_a'] = 'Serviço Nível A';

$GLOBALS["lang"]['Service Level A'] = 'Serviço Nível A';

$GLOBALS["lang"]['service_level_b'] = 'Nível de serviço B';

$GLOBALS["lang"]['Service Level B'] = 'Nível de serviço B';

$GLOBALS["lang"]['service_network'] = 'Rede de Serviço';

$GLOBALS["lang"]['Service Network'] = 'Rede de Serviço';

$GLOBALS["lang"]['service_number'] = 'Número de Serviço';

$GLOBALS["lang"]['Service Number'] = 'Número de Serviço';

$GLOBALS["lang"]['service_pack'] = 'Pacote de Serviço';

$GLOBALS["lang"]['Service Pack'] = 'Pacote de Serviço';

$GLOBALS["lang"]['service_plan'] = 'Plano de Serviço';

$GLOBALS["lang"]['Service Plan'] = 'Plano de Serviço';

$GLOBALS["lang"]['service_provider'] = 'Prestador de Serviços';

$GLOBALS["lang"]['Service Provider'] = 'Prestador de Serviços';

$GLOBALS["lang"]['service_tag'] = 'Marca de Serviço';

$GLOBALS["lang"]['Service Tag'] = 'Marca de Serviço';

$GLOBALS["lang"]['service_type'] = 'Tipo de Serviço';

$GLOBALS["lang"]['Service Type'] = 'Tipo de Serviço';

$GLOBALS["lang"]['Service Under Windows'] = 'Serviço em Windows';

$GLOBALS["lang"]['service_version'] = 'Versão de serviço';

$GLOBALS["lang"]['Service Version'] = 'Versão de serviço';

$GLOBALS["lang"]['Set'] = 'Preparar.';

$GLOBALS["lang"]['set_by'] = 'Preparar';

$GLOBALS["lang"]['Set By'] = 'Preparar';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Definido pela função Discovery - normalmente não definir isso manualmente.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Definido pelo domínio da auditoria ou scripts de domínio da descoberta. Não se preparem.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Defina o texto externo para versão capitalizada dos dados internos.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Ajuste o texto externo para minúsculas.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Coloque o texto externo em maiúsculas.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Defina o tamanho (normal ou compacto) das tabelas nas telas da Lista.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Ajuste isso se quiser inserir sistemas de AD que podem não ser contatáveis, mas foram vistos por AD desde aquela data.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Configurar Discovery em uma subrede é quase idêntico a executar uma descoberta regular através da interface web. Os únicos itens adicionais são a hora agendada e o(s) dia(s) e um nome para a própria tarefa agendada. Você pode aproveitar isso para agendar múltiplas descobertas usando diferentes conjuntos de credenciais.<br/><br/>De acordo com a Subnet Discovery, o Active Directory Discovery também é simplesmente os mesmos campos que um Active Directory Discovery regular com a adição de um dia, hora e nome.<br/><br/>Se o servidor Open-AudIT tem Colecionadores reportando-se a ele, uma queda adicional é fornecida. Você pode selecionar isso para especificar qual Colecionador a tarefa deve continuar. Apenas tarefas Discovery são suportadas para Colecionadores. Especifique os mesmos itens como uma Descoberta normal, mas forneça ao Colecionador alternativo para executar esta tarefa.';

$GLOBALS["lang"]['severity'] = 'Severidade';

$GLOBALS["lang"]['Severity'] = 'Severidade';

$GLOBALS["lang"]['severity_text'] = 'Texto de Severidade';

$GLOBALS["lang"]['Severity Text'] = 'Texto de Severidade';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'A gravidade é calculada a partir do <code>base_score</code> E pode ser um dos: nenhum, baixo, médio, alto, crítico.';

$GLOBALS["lang"]['Seychelles'] = 'Seychelles.';

$GLOBALS["lang"]['share'] = 'Compartilhar';

$GLOBALS["lang"]['Share'] = 'Compartilhar';

$GLOBALS["lang"]['Share Name'] = 'Compartilhar Nome';

$GLOBALS["lang"]['shared'] = 'Compartilhado.';

$GLOBALS["lang"]['Shared'] = 'Compartilhado.';

$GLOBALS["lang"]['shared_name'] = 'Nome compartilhado';

$GLOBALS["lang"]['Shared Name'] = 'Nome compartilhado';

$GLOBALS["lang"]['shell'] = 'Shell.';

$GLOBALS["lang"]['Shell'] = 'Shell.';

$GLOBALS["lang"]['Ship Date'] = 'Data da nave';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Enviados são um conjunto de itens padrão. Estes podem ser encontrados indo para o menu';

$GLOBALS["lang"]['short'] = 'Curto.';

$GLOBALS["lang"]['Short'] = 'Curto.';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Devo remover todos os dados não atuais deste dispositivo?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Se este arquivo (ou padrão) for usado para excluir arquivos de serem reportados. Normalmente, para auditoria de arquivos, isso está definido para <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Se esse vendedor for usado para recuperar vulnerabilidades da FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Devemos adicionar dispositivos do serviço remoto, localmente.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Devemos aplicar esta licença aos Org selecionados, assim como às crianças Orgs?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Devemos auditar um san se o software de gerenciamento for detectado.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Devemos auditar pontos de montagem.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Devemos auditar as portas do netstat (sim, não, apenas servidores).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Devemos auditar o software instalado.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Devemos considerar uma porta filtrada como uma porta aberta e, portanto, sinalizar este IP como tendo um dispositivo ligado?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Devemos considerar uma porta aberta filtrada como uma porta aberta e, portanto, sinalizar este IP como tendo um dispositivo ligado?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Devemos converter o nome do hospedeiro em minúsculas.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Devemos criar um arquivo baseado no resultado da auditoria.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Devemos expor esse grupo na interface web?';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Devemos expor esta consulta na lista de relatórios no menu Relatório na interface web?';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Devemos expor esta consulta na lista de relatórios sob o menu Relatórios na interface web.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Devemos esconder a janela do script de auditoria quando executarmos.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Devemos ignorar um certificado SSL inválido ou auto assinado e enviar o resultado de qualquer maneira.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Devemos instalar Open-Scap na máquina alvo.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Devemos combinar um dispositivo baseado em endereço Mac mesmo que seja uma provável cópia da VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Devemos combinar um dispositivo baseado em seu DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Devemos combinar um dispositivo baseado em seu nome DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Devemos combinar um dispositivo baseado em seu UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Devemos combinar um dispositivo baseado em seu Dbus ID.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Devemos combinar um dispositivo baseado em seu fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Devemos combinar um dispositivo baseado no nome do hospedeiro e UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Devemos combinar um dispositivo baseado em seu nome de host e Dbus ID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Devemos combinar um dispositivo baseado em seu nome de hospedeiro e serial.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Devemos combinar um dispositivo baseado em seu IP se tivermos um dispositivo existente sem dados.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Devemos combinar um dispositivo baseado em seu IP.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Devemos combinar um dispositivo baseado no endereço do Mac.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Devemos combinar um dispositivo baseado em seu tipo e série.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Devemos combinar um dispositivo baseado no número de série.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Devemos combinar um dispositivo baseado apenas em seu nome SNMP e série.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Devemos combinar um dispositivo baseado apenas no sistema SNMP.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Devemos combinar um dispositivo baseado apenas no nome do hospedeiro.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Devemos rastrear o IP antes de tentar escaneá-lo? Se não responder ao sinal, pule este dispositivo.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Devemos povoar o sistema externo de nossos dispositivos locais.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Devemos recuperar todos os nomes do DNS';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Devemos fazer uma auditoria e apresentá-la.';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Devemos testar SNMP usando UDP port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Devemos testar para SSH usando porta TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Devemos testar para WMI usando porta 135 TCP.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Devemos desinstalar o agente.';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Devemos usar o sistema ou proxy de nível de usuário para enviar o resultado da auditoria.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Devemos usar a classe WMI win32_product (não recomendado pela Microsoft) para recuperar o software instalado.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Devemos usar esse método para autenticar credenciais de usuário? Preparar para <code>y</code> ou <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Devemos usar esse método para preencher papéis de usuários? O campo. <code>use_auth</code> deve ser definido para <code>y</code> Para usar isso. Preparar para <code>y</code> ou <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Devemos usar esse valor para combinar dispositivos externos e internos. Nossa integração padrão usa IP e UUID aqui. Se qualquer um destes combinar entre dispositivo externo e interno, nós os consideramos o mesmo dispositivo.';

$GLOBALS["lang"]['Show All'] = 'Mostrar tudo';

$GLOBALS["lang"]['sid'] = 'Sid.';

$GLOBALS["lang"]['Sid'] = 'Sid.';

$GLOBALS["lang"]['sidebar'] = 'Barra lateral';

$GLOBALS["lang"]['Sidebar'] = 'Barra lateral';

$GLOBALS["lang"]['Sierra Leone'] = 'Serra Leoa';

$GLOBALS["lang"]['Singapore'] = 'Singapura';

$GLOBALS["lang"]['Site A'] = 'Site A';

$GLOBALS["lang"]['Site B'] = 'Local B';

$GLOBALS["lang"]['site_hours_a'] = 'Horário do site A';

$GLOBALS["lang"]['Site Hours A'] = 'Horário do site A';

$GLOBALS["lang"]['site_hours_b'] = 'Horário do site B';

$GLOBALS["lang"]['Site Hours B'] = 'Horário do site B';

$GLOBALS["lang"]['size'] = 'Tamanho';

$GLOBALS["lang"]['Size'] = 'Tamanho';

$GLOBALS["lang"]['slaves'] = 'Escravos.';

$GLOBALS["lang"]['Slaves'] = 'Escravos.';

$GLOBALS["lang"]['Slovak'] = 'Eslovaco';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Eslováquia (República Eslovaca)';

$GLOBALS["lang"]['Slovenia'] = 'Eslovénia';

$GLOBALS["lang"]['Slovenian'] = 'Esloveno';

$GLOBALS["lang"]['Smart Status'] = 'Status Inteligente';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Nome da empresa Snmp';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Nome da empresa Snmp';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Versão Snmp';

$GLOBALS["lang"]['Snmp Version'] = 'Versão Snmp';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Então um roteiro não está funcionando em um dispositivo recalcitrante. Grrr. Os scripts para Windows, Linux e MacOS aceitam o argumento de depuração. Isso pode ser definido no próprio script, ou fornecido na linha de comando. Execute o script usando essa opção definida como 5 e você deve ver em que seção do script a falha ocorre. Por exemplo';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Então, além de uma palavra normal, que outras opções existem? De acordo com a API padrão Open-AudIT, temos vários operadores para filtragem. Operadores que podem preceder o valor são';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Então você tem um problema fornecendo credenciais Open-AudIT para descobrir seus dispositivos. Eu tenho uma resposta - então não! Claro, quero dizer, descobrir é a melhor coisa desde pão fatiado. Você não precisa saber com antecedência. <i>O que está em sua rede?</i>. Mas como você pode extrair dados de dispositivos sem fornecer credenciais?<br/><br/>No caso dos computadores, uma opção fácil é copiar o script de auditoria apropriado para as máquinas alvo e defini-lo para executar em um cronograma. Mais detalhes sobre a wiki. As máquinas enviarão seus dados para o Open-AudIT nessa programação, quase como se você estivesse executando a descoberta. O dispositivo simplesmente executa o script de auditoria em um cronograma (novamente, você pode ler o script de auditoria) como o usuário que você diz e envia a saída para o servidor. Nenhuma credencial está envolvida.<br/><br/>E agora temos agentes para Windows. As vantagens de um agente realmente instalado são';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software encontrado nos últimos 7 dias';

$GLOBALS["lang"]['Software Found Today'] = 'Software encontrado hoje';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software encontrado ontem';

$GLOBALS["lang"]['software_key'] = 'Chave de Software';

$GLOBALS["lang"]['Software Key'] = 'Chave de Software';

$GLOBALS["lang"]['Software License Reporting'] = 'Relatório de Licença de Software';

$GLOBALS["lang"]['software_name'] = 'Nome do software';

$GLOBALS["lang"]['Software Name'] = 'Nome do software';

$GLOBALS["lang"]['Software Policies'] = 'Políticas de Software';

$GLOBALS["lang"]['software_revision'] = 'Revisão de Software';

$GLOBALS["lang"]['Software Revision'] = 'Revisão de Software';

$GLOBALS["lang"]['software_version'] = 'Versão de software';

$GLOBALS["lang"]['Software Version'] = 'Versão de software';

$GLOBALS["lang"]['Solaris'] = 'Solaris.';

$GLOBALS["lang"]['Solomon Islands'] = 'Ilhas Salomão';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somália, República da Somália';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Algumas coleções podem ser executadas - consultas, etc - veja abaixo.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Alguns exemplos estão no final desta página. Todos os terminais também têm uma lista mínima de campos obrigatórios. Estes estão abaixo.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Alguns de nossos modelos suportam o novo movimento para tabelas de dados, usando processamento lateral do servidor. Este massivley melhora o tempo de carga.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Outro erro ocorreu ao tentar se ligar ao servidor LDAP. É contactável (ou seja, o <i>Conectar</i> acima funcionou), mas por alguma outra razão, não ocorreu ligação. Verifique os registros no servidor LDAP.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Algo deu muito errado. Open-AudIT não pode ler o <i>orgs</i> mesa.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Algo deu muito errado. Open-AudIT não pode ler o <i>papéis</i> mesa.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Às vezes, descoberta sem agente não se encaixa no seu caso de uso. Talvez seus PCs tenham firewalls apertados. Talvez não estejam na rede quando suas descobertas estão programadas. Talvez sejam usados por trabalhadores remotos. Qualquer que seja o caso, é aqui que um agente pode ajudar. Instale na máquina alvo e ela irá <i>Check-in</i> com seu servidor Open-AudIT em um horário e aceitar tarefas. A tarefa mais comum que o servidor solicita é que o agente faça a auditoria e envie o resultado.';

$GLOBALS["lang"]['Sort'] = 'Ordenar';

$GLOBALS["lang"]['sound'] = 'Som';

$GLOBALS["lang"]['Sound'] = 'Som';

$GLOBALS["lang"]['source'] = 'Fonte';

$GLOBALS["lang"]['Source'] = 'Fonte';

$GLOBALS["lang"]['South Africa'] = 'África do Sul';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Geórgia do Sul e Ilhas Sandwich do Sul';

$GLOBALS["lang"]['Spain'] = 'Espanha';

$GLOBALS["lang"]['Spanish'] = 'Espanhol';

$GLOBALS["lang"]['Specific to Azure.'] = 'Específico para Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Específico para OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Especifica uma lista separada por vírgula de alvos (sem espaços) a serem excluídos da varredura. A lista que você passa usa sintaxe Nmap normal, para que possa incluir nomes de host, blocos de rede CIDR, intervalos de octet, etc.';

$GLOBALS["lang"]['speed'] = 'Velocidade';

$GLOBALS["lang"]['Speed'] = 'Velocidade';

$GLOBALS["lang"]['speed_down_a'] = 'Acelere para baixo A';

$GLOBALS["lang"]['Speed Down A'] = 'Acelere para baixo A';

$GLOBALS["lang"]['speed_down_b'] = 'Acelere para baixo B';

$GLOBALS["lang"]['Speed Down B'] = 'Acelere para baixo B';

$GLOBALS["lang"]['speed_up_a'] = 'Acelere A';

$GLOBALS["lang"]['Speed Up A'] = 'Acelere A';

$GLOBALS["lang"]['speed_up_b'] = 'Acelerar B';

$GLOBALS["lang"]['Speed Up B'] = 'Acelerar B';

$GLOBALS["lang"]['sql'] = 'Sql.';

$GLOBALS["lang"]['Sql'] = 'Sql.';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh timeout';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Fase 1: Revisão da documentação';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Etapa 2: Implementação e revisão de eficácia';

$GLOBALS["lang"]['Stand-Alone'] = 'Sozinho.';

$GLOBALS["lang"]['Standard'] = 'Padrão';

$GLOBALS["lang"]['standard_id'] = 'ID padrão';

$GLOBALS["lang"]['Standard ID'] = 'ID padrão';

$GLOBALS["lang"]['standards'] = 'Padrões';

$GLOBALS["lang"]['Standards'] = 'Padrões';

$GLOBALS["lang"]['standards_policies'] = 'Políticas de Padrões';

$GLOBALS["lang"]['Standards Policies'] = 'Políticas de Padrões';

$GLOBALS["lang"]['standards_results'] = 'Resultados dos Padrões';

$GLOBALS["lang"]['Standards Results'] = 'Resultados dos Padrões';

$GLOBALS["lang"]['start_date'] = 'Data de início';

$GLOBALS["lang"]['Start Date'] = 'Data de início';

$GLOBALS["lang"]['start_mode'] = 'Modo Iniciar';

$GLOBALS["lang"]['Start Mode'] = 'Modo Iniciar';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Iniciar um navegador e ir para';

$GLOBALS["lang"]['started_date'] = 'Data de início';

$GLOBALS["lang"]['Started Date'] = 'Data de início';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'A partir de junho de 2018 O Google implementou um modelo de preços para as APIs da Plataforma Google Maps. Anteriormente, a maioria dos usuários com uso moderado poderia usar o Google Maps, que são incorporados em opCharts e Open-AudIT Professional/Enterprise, de graça. A nova política do Google está delineada aqui,';

$GLOBALS["lang"]['Starts With'] = 'Começa com';

$GLOBALS["lang"]['state'] = 'Estado';

$GLOBALS["lang"]['State'] = 'Estado';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'Situação';

$GLOBALS["lang"]['Status'] = 'Situação';

$GLOBALS["lang"]['Storage'] = 'Armazenagem';

$GLOBALS["lang"]['storage_count'] = 'Contagem de armazenamento';

$GLOBALS["lang"]['Storage Count'] = 'Contagem de armazenamento';

$GLOBALS["lang"]['Storage area network'] = 'Rede de área de armazenamento';

$GLOBALS["lang"]['Storage-Area Network'] = 'Rede Área de Armazenamento';

$GLOBALS["lang"]['string'] = 'Cordas';

$GLOBALS["lang"]['String'] = 'Cordas';

$GLOBALS["lang"]['sub_resource_id'] = 'ID do Sub Recurso';

$GLOBALS["lang"]['Sub Resource ID'] = 'ID do Sub Recurso';

$GLOBALS["lang"]['sub_type'] = 'Subtipo';

$GLOBALS["lang"]['Sub Type'] = 'Subtipo';

$GLOBALS["lang"]['subject_key_ident'] = 'ID da Chave do Assunto';

$GLOBALS["lang"]['Subject Key Ident'] = 'ID da Chave do Assunto';

$GLOBALS["lang"]['Submit'] = 'Submeta-se.';

$GLOBALS["lang"]['Submit Online'] = 'Enviar on-line';

$GLOBALS["lang"]['Submitted From'] = 'Enviado de';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet Discoveries';

$GLOBALS["lang"]['Subscription ID'] = 'ID da assinatura';

$GLOBALS["lang"]['suburb'] = 'Subúrbio';

$GLOBALS["lang"]['Suburb'] = 'Subúrbio';

$GLOBALS["lang"]['Success'] = 'Sucesso';

$GLOBALS["lang"]['Sudan'] = 'Sudão';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo Senha';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Senha (opcional)';

$GLOBALS["lang"]['suite'] = 'Suíte';

$GLOBALS["lang"]['Suite'] = 'Suíte';

$GLOBALS["lang"]['summaries'] = 'Sumários';

$GLOBALS["lang"]['Summaries'] = 'Sumários';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Resumos são uma única consulta contra o banco de dados com um <i>Agrupar por</i> Comando. Usando este método simples podemos facilmente criar um resumo para praticamente qualquer atributo.<br/><br/>Não precisamos mais de um relatório separado para cada <i>Tipo</i> de um dispositivo. Agora simplesmente temos um resumo que agrupa por <i>Dispositivos. Tipo</i> e mostra o resultado. Você pode clicar em um determinado tipo da lista e ver os dispositivos correspondentes. Neste caso, um resumo substitui (potencialmente) 78 relatórios (há 78 tipos de dispositivos).<br/><br/>Um resumo é diferente de uma consulta em que um resumo é projetado para agrupar itens por um dado atributo, então fornecer um <i>Clique em</i> Ligação com os dispositivos reais. Uma consulta é simplesmente uma lista de itens sem mais links. Como acima - isto de um resumo como uma combinação <i>relatório + sub-relato</i>, enquanto uma consulta é simplesmente um único relatório.<br/><br/>Resumos têm um modelo de coleção diferente dos outros recursos dentro do Open-AudIT. Este modelo mostra o resumo como você esperaria e também mostra botões com conta de outros recursos. Esta página foi projetada para ser a Página Inicial da Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Resumos são projetados para agrupar itens por uma coluna em particular e fornecer um link para dispositivos individuais. Nas versões anteriores do Open-AudIT, isso teria sido dois itens diferentes - um relatório e sub-relatório. Agora nós juntamos isso no que chamamos de Resumo.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Resumos fornecem capacidade de relatórios de perfuração. Simples, intuitivo, poderoso.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Resumos tomam os mesmos argumentos que as Consultas.';

$GLOBALS["lang"]['Summary'] = 'Resumo';

$GLOBALS["lang"]['Sunday'] = 'Domingo';

$GLOBALS["lang"]['supplier'] = 'Fornecedor';

$GLOBALS["lang"]['Supplier'] = 'Fornecedor';

$GLOBALS["lang"]['Support'] = 'Suporte';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Tipos apoiados são <code>subnet</code>, <code>seed</code> e <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Suporta o cumprimento dos requisitos legais e regulatórios.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Auditorias de Vigilância: Auditorias anuais para manter a certificação';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Ilhas Svalbard e Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Suazilândia';

$GLOBALS["lang"]['Sweden'] = 'Suécia';

$GLOBALS["lang"]['Swedish'] = 'Sueco';

$GLOBALS["lang"]['switch_device_id'] = 'Mudar o ID do dispositivo';

$GLOBALS["lang"]['Switch Device ID'] = 'Mudar o ID do dispositivo';

$GLOBALS["lang"]['switch_port'] = 'Mude de porto';

$GLOBALS["lang"]['Switch Port'] = 'Mude de porto';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Suíça, Confederação Suíça';

$GLOBALS["lang"]['Symptom'] = 'Sintoma';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'República Árabe Síria';

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

$GLOBALS["lang"]['system_component'] = 'Componente do Sistema';

$GLOBALS["lang"]['System Component'] = 'Componente do Sistema';

$GLOBALS["lang"]['System-Area Network'] = 'Rede de Área do Sistema';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'Nível TX';

$GLOBALS["lang"]['TX Power'] = 'TX Power';

$GLOBALS["lang"]['TX Profile'] = 'Perfil TX';

$GLOBALS["lang"]['Table'] = 'Mesa';

$GLOBALS["lang"]['tag'] = 'Marca';

$GLOBALS["lang"]['Tag'] = 'Marca';

$GLOBALS["lang"]['tag_1'] = 'Marca 1';

$GLOBALS["lang"]['Tag 1'] = 'Marca 1';

$GLOBALS["lang"]['tag_2'] = 'Marca 2';

$GLOBALS["lang"]['Tag 2'] = 'Marca 2';

$GLOBALS["lang"]['tag_3'] = 'Etiqueta 3';

$GLOBALS["lang"]['Tag 3'] = 'Etiqueta 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog.';

$GLOBALS["lang"]['tags'] = 'Etiquetas';

$GLOBALS["lang"]['Tags'] = 'Etiquetas';

$GLOBALS["lang"]['Tags :: '] = 'Etiquetas: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tajiquistão';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Tome nota de toda a saída e ação de cada item, conforme apropriado.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzânia';

$GLOBALS["lang"]['Target Computer'] = 'Computador alvo.';

$GLOBALS["lang"]['task'] = 'Tarefa';

$GLOBALS["lang"]['Task'] = 'Tarefa';

$GLOBALS["lang"]['tasks'] = 'Tarefas';

$GLOBALS["lang"]['Tasks'] = 'Tarefas';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Tarefas podem ser de vários tipos distintos: base, descoberta, relatório, consulta, resumo ou coletor.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Technical Details'] = 'Detalhes técnicos';

$GLOBALS["lang"]['tenant'] = 'Tenant.';

$GLOBALS["lang"]['Tenant'] = 'Tenant.';

$GLOBALS["lang"]['Tenant ID'] = 'ID do inquilino';

$GLOBALS["lang"]['Tennant ID'] = 'ID Tennant';

$GLOBALS["lang"]['ternary'] = 'Ternario';

$GLOBALS["lang"]['Ternary'] = 'Ternario';

$GLOBALS["lang"]['Test 1'] = 'Teste 1';

$GLOBALS["lang"]['Test 2'] = 'Teste 2';

$GLOBALS["lang"]['Test 3'] = 'Teste 3';

$GLOBALS["lang"]['Test Email'] = 'E-mail de teste';

$GLOBALS["lang"]['test_minutes'] = 'Minutos de Teste';

$GLOBALS["lang"]['Test Minutes'] = 'Minutos de Teste';

$GLOBALS["lang"]['test_os'] = 'Teste de Os';

$GLOBALS["lang"]['Test Os'] = 'Teste de Os';

$GLOBALS["lang"]['test_subnet'] = 'Subnet de Teste';

$GLOBALS["lang"]['Test Subnet'] = 'Subnet de Teste';

$GLOBALS["lang"]['tests'] = 'Testes';

$GLOBALS["lang"]['Tests'] = 'Testes';

$GLOBALS["lang"]['Text'] = 'Texto';

$GLOBALS["lang"]['Thai'] = 'Tailandês';

$GLOBALS["lang"]['Thailand'] = 'Tailândia';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Obrigado por começar sua jornada com a melhor ferramenta de descoberta e inventário.';

$GLOBALS["lang"]['Thanks to'] = 'Graças a você.';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'É isso! Você acabou de editar os atributos de quantos dispositivos precisar.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'O <i>Funções</i> Endpoint permite que você gerencie o conjunto de permissões (Criar, Ler, Atualizar, Apagar) que são concedidas aos usuários e são aplicadas a cada endpoint.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'A API usa um cookie. Você pode solicitar um cookie enviando um POST para a URL abaixo, contendo os atributos e valores do nome de usuário e senha:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'O domínio Active Directory para recuperar uma lista de sub-redes.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'O servidor do Active Directory para recuperar uma lista de subredes.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'O endpoint de Aplicações permite definir um aplicativo que você pode associar a um dispositivo (ou dispositivos).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'O endpoint dos atributos permite adicionar valores personalizados a diferentes atributos em Open-AudIT, no momento este recurso funciona na Classe, Ambiente, Estado e Atributos de Tipo em Dispositivos, o atributo Type para tanto Locais e Orgs, bem como a Categoria Menu para Consultas. Se você ver um item de um dos tipos primitivos (diga ver um Lkocation) você vai notar que o atributo Type deve ser selecionado de uma caixa suspensa. Aqui é onde esses valores são armazenados. Portanto, se você gostaria de adicionar um novo Tipo para ser escolhido para uma Localização, adicione usando o recurso Atributos.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'A métrica automatável captura a resposta à pergunta. <strong>Um atacante pode automatizar eventos de exploração para essa vulnerabilidade em vários alvos?</strong> baseado nos passos 1-4 da cadeia de matar. Estes passos são reconhecimento, armamento, entrega e exploração.';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'A CVE foi marcada como inválida ou retirada na lista CVE. Ele permanece na NVD mas está excluído dos resultados de busca padrão.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'O CVE foi publicado na lista CVE e incluído no conjunto de dados NVD. Apenas ingestão inicial.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'A CVE foi atualizada após a análise inicial. Os dados de enriquecimento NVD podem ter sido revistos.';

$GLOBALS["lang"]['The CVE identifier.'] = 'O identificador CVE.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'A CVE está sendo enriquecida com escores CVSS, classificações CWE, etiquetas de referência e aplicabilidade de CPE.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'O CVE não é priorizado para enriquecimento devido a restrições de recursos ou outras razões.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'O CVE está na fila para enriquecimento por analistas da NVD. Sem metadados detalhados ainda.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'A nuvem que possui este item. Links para <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'O Device Seed Discovery é o mais novo método altamente eficaz para rastreamento de rede, dando-lhe a capacidade de direcionar sua rede tão estreita ou tão ampla quanto você precisa. É rápido, funciona e é ótimo.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'O Scan Discovery As opções que enviamos estão detalhadas na tabela abaixo. Como acima, usuários da Enterprise podem criar mais desses ou editar os itens enviados.';

$GLOBALS["lang"]['The Elevated User query'] = 'A Consulta do Usuário Elevado';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'O recurso Executáveis verifica o disco de um dispositivo como parte da auditoria e verifica que cada arquivo executável é conhecido pelo gerenciador de pacotes. Porque ele usa o gerenciador de pacotes, o recurso se aplica apenas aos dispositivos de destino Linux, e além disso, apenas distribuições baseadas em rpm ou deb. Qualquer coisa baseada em Redhat ou Debian deve funcionar.';

$GLOBALS["lang"]['The FROM'] = 'O DESDE';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'O Grupo costumava dirigir o Baseline. Links para <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'A identificação da tabela de dispositivos (o nome do dispositivo será exibido) da NTU neste final da conexão. Links para <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'A identificação da política de referência importada.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'A identificação da tabela de locais (o nome local será exibido) deste final da conexão. Links para <code>locations.id</code>. A localização A geralmente é <code>FROM</code> Localização.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'A identificação da tabela de locais (o nome local será exibido) deste final da conexão. Links para <code>locations.id</code>. A localização B geralmente é <code>TO</code> Localização.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'A identificação do dispositivo associado (se houver). Links para <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'A identificação da descoberta associada. Ligado a <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'A identificação do item do tipo associado.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'A identificação desta orgão de pais. Ligado a <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'A identidade fornecida pelo provedor.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'A identificação foi recuperada de uma descoberta na nuvem.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'O endereço IP desse colecionador costumava se comunicar com o servidor.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'O IP do dispositivo para iniciar uma descoberta de sementes.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'O IP da interface externa.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'O IP da interface interna.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'O processo de certificação ISO/IEC 27001 e seus elementos-chave.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'O ISP ou Telco fornecendo este link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'O registro da JSON de Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'O registro da JSON da transmissão da NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'O LDAP OU deste usuário (se LDAP for usado).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'O servidor LDAP não poderia estar conectado. De jeito nenhum. Verifique se é pingável do servidor Open-AudIT. Verifique se a porta correta está aberta para o servidor Open-AudIT. Um mapa do servidor Open-AudIT mostrará isso. Substitua seu IP de servidores LDAP por $ip. Tente.<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'O tipo de servidor LDAP é inválido. Deveria ser qualquer um dos dois. <i>diretório ativo</i> ou <i>Openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'O servidor LDAP estava conectado e as credenciais de usuário aceitas para vinculação.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'O instalador Linux Open-AudIT testará e, se necessário, instalará dependências Open-AudITs do seu repositório de distribuições, incluindo a configuração do Nmap SetUID. Isso é necessário para a detecção de SNMP (UDP 161) por um usuário não-raiz. Isso é suportado no RedHat/CentOS e Debian/Ubuntu. Se precisar instalar manualmente Nmap:<br/><br/>Para RedHat/CentOS fazer (NOTE - se você atualizar usando yum, você vai precisar reaplicar isso <i>chmod</i> Setting).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'A localização que contém esta rede. Links para <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'O NVD atribuiu o status de base.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'O Instituto Nacional de Padrões e Tecnologia é a agência de tecnologia federal. Eles avançam tecnologia oficial, ciência de medição e padrões.';

$GLOBALS["lang"]['The Network to Discover'] = 'A Rede para Descobrir';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'O tempo predefinido do Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'O SO contra o qual este pacote deve ser relatado. Em branco para todos. Use o sinal de porcentagem como uma carta. Será testado contra os grupos, família e nome nessa ordem.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'A API Open-AudIT';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'O id Open-AudIT da nuvem conectada. Links para <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'O Open-Aud O código do servidor de TI foi emitido dentro deste arquivo.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'O Open-Aud O código do servidor de TI foi executado nessa função.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'O ecossistema OpenSCAP fornece várias ferramentas para ajudar administradores e auditores com avaliação, medição e aplicação de bases de segurança, incluindo uma grande variedade de guias de endurecimento e bases de configuração desenvolvidos pela comunidade de código aberto, garantindo que você possa escolher uma política de segurança que melhor se adapte às necessidades de sua organização, independentemente de seu tamanho.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'O projeto OpenSCAP é uma coleção de ferramentas de código aberto para implementar e aplicar este padrão, e recebeu a certificação SCAP 1.2 pela NIST em 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'A organização que possui este item. Links para <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'O identificador de processo da descoberta associada.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'O position da ER do topo deste dispositivo.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'O recurso Racks é usado para gerenciar e visualizar seu uso com uma Organização, Localização, Edifício, Piso, Sala e Linha.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'O SCAP é uma especificação para expressar e manipular dados de segurança de forma padronizada. SCAP usa várias especificações individuais em conjunto para automatizar monitoramento contínuo, gerenciamento de vulnerabilidade e avaliação de conformidade de políticas de segurança.';

$GLOBALS["lang"]['The SELECT'] = 'O SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'A seção SELECT da consulta deve usar nota completa e também solicitar o campo com seu nome completo. Dispositivos de seleção. Identifique-se como "dispositivos". Cada campo deve ser selecionado desta forma para permitir a filtragem de atributos laterais da GUI.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'A seção SELECT de seu SQL deve conter colunas totalmente qualificadas e especificar certas colunas.';

$GLOBALS["lang"]['The SNMP community string.'] = 'A corda da comunidade SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'A senha de autenticação SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'O protocolo de autenticação SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'A senha de privacidade SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Protocolo de Privacidade SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'O nível de segurança SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'O nome de segurança SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'A ID do motor de contexto SNMPv3 (opcional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'O nome do contexto SNMPv3 (opcional).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'O SQL não pode conter <strong>ONDE @filter OU</strong>. Esse SQL não será executado, no entanto. <strong>Onde @filter e</strong> As consultas são permitidas.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'As consultas SQL usadas no Open-AudIT requerem o uso do backtick - ` caractere e NÃO a citação simples padrão para campos. Na maioria dos teclados dos EUA Windows a tecla backtick está localizada no canto superior esquerdo do teclado junto com o til ~. Em um teclado americano Mac a tecla backtick está localizada ao lado da tecla SHIFT. A citação simples padrão ainda é usada para incluir valores como os exemplos abaixo ilustram.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'A consulta SQL é essencialmente dividida em três partes.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'A funcionalidade Standards em Open-AudIT permite que você, antes do tempo, complete as perguntas que os auditores exigem ao completar a certificação ISO 27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'A URL do sistema externo.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'A URL do seu Open-AudIT Servidor ao qual este Colecionador se reportará.';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'O URL para o qual os scripts de auditoria devem enviar o resultado.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'O Endpoint do Usuário permite gerenciar contas de usuários dentro do Open-AudIT.';

$GLOBALS["lang"]['The WHERE'] = 'O ONDE';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'A seção ONDE do seu SQL <em>Deve</em> Conter';

$GLOBALS["lang"]['The Windows'] = 'As Janelas';

$GLOBALS["lang"]['The Windows log may say the following'] = 'O registro do Windows pode dizer o seguinte:';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'A conta deve ter uma senha, WMI não permite senhas em branco.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'A senha da conta não deve conter \" (aspas duplas). Isso é porque cscript (e wscript) não pode analisar valores de argumento contendo aspas duplas. Eles são simplesmente despojados. Não, antes de perguntar, fugir não vai funcionar. Esta é uma limitação de script e nada a ver com Open-AudIT.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'O nome completo desse usuário.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'O endereço da página do servidor Open-AudIT.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'O administrador forneceu credenciais que foram usadas para ligar à LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'O administrador forneceu credenciais para ligar ao servidor LDAP, mas não foram aceitas pelo LDAP. Verifique se as credenciais funcionam no servidor LDAP, e então verifique (ou reinicie-as) na entrada Open-AudIT LDAP Server.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'O agente e o servidor também são inteligentes o suficiente para auto-atualizar o agente se uma versão mais nova for instalada no servidor (diga depois de atualizar Open-AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'O agente deve baixar uma nova cópia do script de auditoria, executá-lo e enviar o resultado para o servidor.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'A aplicação cria receitas de auditoria temporárias aqui, copia-as para as máquinas-alvo, e apaga-as.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'A linha de base associada. Links para <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'A descoberta associada (se necessário). Links para <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'O atributo para testar. <code>devices</code> mesa).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'O atributo para testar (deve corresponder a um nome de campo externo de baixo).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Os atributos para opções de escaneamento estão abaixo.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'O roteiro de auditoria para basear suas personalizações.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'O script de auditoria usará o array de arquivos e recuperará os detalhes do arquivo.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Todos os scripts de auditoria aceitam um argumento de depuração. Você pode executar o roteiro utilizando isso e ver em mais detalhes qual é o problema. E se você não consegue entender, é para isso que estamos aqui! Abra um caso de apoio e faremos as coisas funcionarem logo.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'O caminho base para procurar usuários.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Os passos abaixo não são a culpa ou exclusivo de Open-AudIT e afetaria <strong>qualquer</strong> Aplicação de descoberta usando WMI remoto e/ou Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'O tipo de referência.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'O prédio onde o rack está localizado.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'O número calculado de dispositivos a serem criados externamente.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'O número calculado de dispositivos a serem criados em Open-AudIT.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'A identificação do cliente é a identificação de um aplicativo Azure Active Directory. O segredo do cliente é a chave que você dá.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'O colecionador é essencialmente uma instalação completa de Open-AudIT em <i>Colecionador</i> Modo. O colecionador foi projetado para executar a descoberta na rede em que está situado. Não é restrito apenas a essa rede, mas idealmente seria essencialmente um colecionador por subrede, quando necessário. O coletor é conduzido em uma programação pelo servidor e executa a descoberta na rede como especificado.<br/>Quando em pé Sozinho o colecionador age como um servidor independente, simplesmente encaminhando todos os dispositivos encontrados para o servidor principal.<br/><br/>Uma vez instalado e configurado, o controle do coletor é realizado no servidor (não no modo Stand Alone).<br/><br/>As únicas portas de rede necessárias entre o coletor e o servidor são 80 ou 443 (conexão TCP estabelecida do Coletor para o Servidor). O banco de dados Open-AudIT não é (e não pode ser) compartilhado entre essas instalações.<br/><br/>Por padrão, o colecionador (não no modo Stand Alone) solicitará ao servidor quaisquer tarefas de descoberta a cada 5 minutos (você pode configurar isso no servidor para novos Colecionadores usando o item de configuração colecionador_check_minutes) para que quaisquer tarefas de descoberta para o colecionador sejam programadas para 0, 5, 10, 15, etc minutos.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'O colecionador é essencialmente uma instalação completa de Open-AudIT em <i>Colecionador</i> Modo. Este modo reduziria a funcionalidade visível em um esforço para simplificar e focar a aplicação. Ele foi projetado para coletar informações sobre redes e dispositivos locais, onde o firewall e/ou a transmissão de rede é um problema do servidor.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'O IP interno dos coletores usado quando é descoberto.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'O nome da coluna da mesa estrangeira. Deve ser uma classe, ambiente, status, tipo ou categoria de menu.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'O comando executado no dispositivo alvo ou código do servidor Open-AudIT executado durante a descoberta.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'A configuração do seu cluster pode ser: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> ou em branco.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'A senha das credenciais. Se as credenciais são uma chave SSH, esta é a senha usada para desbloquear a chave e é opcional.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'As credenciais fornecidas pelo usuário falharam.';

$GLOBALS["lang"]['The credentials username.'] = 'O nome de usuário das credenciais.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'A data e hora atuais no formato: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'A data atual em formato Y-M-D.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'O status atual da Descoberta da Nuvem.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'A situação atual da descoberta.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'O painel que será mostrado por padrão para este usuário. Links para <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Os dados armazenados no banco de dados não aparecem na aplicação traduzida. Deixamos os dados como estão. No entanto, não há nada que o impeça, o usuário, mudando o nome (por exemplo) de um item no banco de dados para o seu idioma.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Os dados que você inserir será usado em um <code>LIKE</code> Cláusula, não <code>equals</code> Cláusula. Outro exemplo - se você entrar <code>comput</code>Ainda devolveria todos os computadores. E porque estamos usando um <code>LIKE</code> Cláusula, é insensível.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'O esquema de banco de dados pode ser encontrado no aplicativo se o usuário tiver o banco de dados::ler permissão indo para o menu: Admin -> Banco de dados ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'A versão do banco de dados e a versão web são inconsistentes.';

$GLOBALS["lang"]['The date of license expiration.'] = 'A data de expiração da licença.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'A data em que o software é descontinuado pelo fabricante. Normalmente substituído por uma versão mais nova. A manutenção ainda pode estar disponível.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'A data em que o software não recebe mais atualizações e é efetivamente descontinuado. Manutenção interrompida.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'A data em que este item foi alterado ou adicionado (leia apenas). NOTA - Esta é a hora do servidor.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'A data/hora em que esse resultado foi criado.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'O dia do mês em que esta tarefa deve ser executada (* para cada dia).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'O dia da semana em que esta tarefa deve ser executada (* para cada dia).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'O nível de depuração (sairá para a janela de comando). Menos significa menos saída sem saída.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'A opção padrão de varredura é o conjunto UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'A linguagem padrão atribuída a qualquer usuário criado por este método.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'O dispositivo deve responder a um sinal Nmap antes de ser considerado online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'O dispositivo dentro do Open-AudIT. Links para <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'O link direto para o roteiro é';

$GLOBALS["lang"]['The email address of the reciever'] = 'O endereço de e-mail do recepcionista.';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'A empresa binária da FirstWave é necessária para uma licença. Por favor, baixe Open-AudIT de';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Toda a linha de base associada a este resultado é de.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'A vulnerabilidade explorada pode afetar recursos além da autoridade de segurança do componente vulnerável. Isso geralmente significa que um privilégio ou limite de confiança é cruzado (por exemplo, escapar de um contêiner para o sistema operacional hospedeiro).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'A vulnerabilidade explorada só impacta os recursos dentro da mesma autoridade de segurança que o componente vulnerável. Em outras palavras, as ações do agressor permanecem dentro do limite de confiança original.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'A identificação de localização externa. Geralmente povoado por auditorias em nuvem.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Os campos associados a uma integração são armazenados no banco de dados como uma matriz JSON de objetos. Cada campo tem os seguintes atributos:';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'A primeira vez que o Open-AudIT recuperou detalhes deste dispositivo.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'O chão onde o rack está localizado.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'A mesa estrangeira para referência. Deve ser um dos dispositivos, locais, orgs ou consultas.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'O formato dos seus dados deve estar no formulário.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'O formato usado para a saída ser enviada por e-mail.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'A coluna totalmente qualificada para agrupar. Quando tipo = tráfego, isso representa o ID vermelho da consulta.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'O nome totalmente qualificado retornado pelo sistema externo. Para NMIS usamos configuração. Papel Tipo.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'A mesa totalmente qualificada. Coluna. Múltiplos podem ser fornecidos, separados por uma vírgula (sem espaços).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'A consulta SQL gerada para testar essa vulnerabilidade. Este campo pode ser editado para corrigir a consulta como necessário.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'O grupo de dispositivos em que a linha de base foi contratada.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'O grupo que fornece uma lista de dispositivos para a integração. Links para <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'A hora do dia em que esta tarefa deve ser executada (* por cada hora).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'A identificação do dispositivo conectado. Links para <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'A coluna identificadora (inteiro) no banco de dados (apenas leitura).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'A importância desta linha de base (ainda não utilizada).';

$GLOBALS["lang"]['The integer of severity.'] = 'O inteiro da gravidade.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'O valor interno, reformatado neste formato.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'O endereço IP do método Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'A linguagem para traduzir a interface para o usuário.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'A última data e hora deste item foi executado (apenas leitura).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'A última vez que o Open-AudIT recuperou detalhes deste dispositivo.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'A última vez que esses parâmetros foram executados.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'A última vez que essa integração foi executada.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'O ponto final da licença permite rastrear o número de licenças encontradas em seus dispositivos.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'O número de linha atribuído pelo provedor para a linha neste final da conexão.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'A localização da prateleira está localizada. Links para <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'O endereço dos locais.';

$GLOBALS["lang"]['The locations area.'] = 'A área de localização.';

$GLOBALS["lang"]['The locations city.'] = 'Os locais da cidade.';

$GLOBALS["lang"]['The locations country.'] = 'O país dos locais.';

$GLOBALS["lang"]['The locations district.'] = 'O distrito de locações.';

$GLOBALS["lang"]['The locations latitude.'] = 'Os locais latitude.';

$GLOBALS["lang"]['The locations level.'] = 'O nível de localização.';

$GLOBALS["lang"]['The locations longitude.'] = 'Os locais longitude.';

$GLOBALS["lang"]['The locations phone.'] = 'O telefone dos locais.';

$GLOBALS["lang"]['The locations postcode.'] = 'Os locais do código postal.';

$GLOBALS["lang"]['The locations region.'] = 'A região dos locais.';

$GLOBALS["lang"]['The locations room.'] = 'A sala de localização.';

$GLOBALS["lang"]['The locations state.'] = 'Os locais do estado.';

$GLOBALS["lang"]['The locations suburb.'] = 'O subúrbio dos locais.';

$GLOBALS["lang"]['The locations suite.'] = 'A suíte de localização.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'A lógica para correspondência de dispositivos está contida no arquivo devices_helper.php, que em uma instalação Linux pode ser encontrada aqui.';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'As configurações de permissão padrão de máquina não concedem permissão de ativação local para o aplicativo COM Server com';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'O peso físico máximo (em KGs) que esta prateleira pode segurar.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'O máximo total de BTUs esta prateleira é avaliado para.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Os atributos mínimos necessários para atributos são';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'O minuto da hora em que esta tarefa deve ser executada (* para cada minuto).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'O mês do ano em que esta tarefa deve ser executada (* para cada mês).';

$GLOBALS["lang"]['The name given to this item.'] = 'O nome dado a este item.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'O nome dado a este item. Idealmente deve ser único.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'O nome dado a este usuário (usado para login). Idealmente deve ser único.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'O nome da nuvem associada (se necessário).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'O nome do pacote de software, como auditado pela Open-AudIT. Use o sinal de porcentagem como uma carta.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'O nome do usuário que mudou ou adicionou este item.';

$GLOBALS["lang"]['The name provided by the provider.'] = 'O nome fornecido pelo provedor.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'A rede no formato 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'A sub-rede da rede para executar a descoberta.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'O novo agente executa uma versão PowerShell do antigo roteiro de auditoria em preparação para a depreciação do VBScript (sim, está chegando).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'O número de ERs que este dispositivo ocupa.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'O número de locais associados. Links para <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'O número de redes associadas. Links para <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'O número de dispositivos auditados nesta nuvem. Links para <code>devices.cloud_id</code> e <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'O número de vulnerabilidades críticas de gravidade mantidas pela FirstWave (não em seu banco de dados).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'O número de dispositivos encontrados por esta descoberta.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'O número de dispositivos no grupo associado.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'O número de dispositivos nesta nuvem com estado de execução. Links para <code>devices.cloud_id</code> e <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'O número de dispositivos nesta nuvem com um estado de parada. Links para <code>devices.cloud_id</code> e <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'O número de dispositivos nesta nuvem. Links para <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'O número de dispositivos que esta referência será executada. Derivado de <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'O número de dispositivos para limitar esta descoberta.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'O número de vulnerabilidades de alta gravidade mantidas pela FirstWave (não em seu banco de dados).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'O número de vulnerabilidades de baixa gravidade mantidas pela FirstWave (não em seu banco de dados).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'O número de vulnerabilidades de gravidade média mantidas pela FirstWave (não em seu banco de dados).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'O número de licenças compradas.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'O número de segundos para tentar se comunicar com o IP alvo.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'O número de vulnerabilidades sem uma gravidade mantida pela FirstWave (não em seu banco de dados).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'O offset é a contagem de dispositivos que deseja devolver dados.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'A única permissão necessária / nome de política (em nossos testes) é';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'A coluna secundária opcional. Quando type = tráfego, isso representa o ID amarelo da consulta.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'A terceira coluna opcional. Quando type = tráfego, isso representa o id da consulta verde.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'A ordem de recuperação de informação é snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'A orientação deste dispositivo.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'A senha (se não usar o usuário executando o script).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'A senha do atributo dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'A senha usada para acessar o sistema externo.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'O caminho para o arquivo ou diretório.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'O caminho para o arquivo ou diretório. Os diretores devem terminar com um corte.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'A profundidade física (em CMs) da prateleira.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'A altura física (em CMs) da prateleira.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'O peso físico (em KGs) da prateleira no momento.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'O peso físico (em KGs) do rack quando vazio.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'A largura física (em CMs) da prateleira.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'A cápsula (se houver) que esta prateleira faz parte.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'O circuito de energia que esta prateleira liga.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'A principal tabela de banco de dados sobre a qual basear este widget.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'O principal método de autorização (o que um usuário pode fazer) é agora baseado nos papéis dos usuários. Funções são definidas como admin, org_admin, repórter e usuário por padrão. Cada papel tem um conjunto de permissões para cada ponto final. Os papéis padrão devem cobrir 99,9% dos casos de uso. A habilidade de definir papéis adicionais e editar papéis existentes está habilitada na Open-AudIT Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'O identificador do processo deste item da fila.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'O processo que foi usado por último para recuperar detalhes sobre o dispositivo';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'O objetivo desta página de licenciamento é listar os produtos e licenças incluídos em produtos comerciais da Firstwave, incluindo produtos baseados em obras de código aberto. A Open-AudIT está licenciada na Firstwave sob AGPLv3 ou posterior com a Enterprise e a funcionalidade profissional licenciada sob termos comerciais. Open-AudIT quando baixado da FirstWave pode incluir as seguintes bibliotecas e projetos, que são fornecidos não modificados e licenciados como indicado:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'A consulta que fornece uma lista de dispositivos para a integração. Links para <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'O número do ativo.';

$GLOBALS["lang"]['The rack asset tag.'] = 'A etiqueta dos ativos.';

$GLOBALS["lang"]['The rack bar code.'] = 'O código de barras.';

$GLOBALS["lang"]['The rack model.'] = 'O modelo de rack.';

$GLOBALS["lang"]['The rack serial.'] = 'O rack serial.';

$GLOBALS["lang"]['The rack series.'] = 'A série de rack.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'O rack em que este dispositivo está localizado. Links para <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'O processo recomendado de abordar e corrigir vulnerabilidades de segurança identificadas. Isso geralmente envolve aplicar correções, atualizações ou outras medidas para eliminar o risco colocado pelas vulnerabilidades.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'A notação de domínio regular do seu diretório. Eg... <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'As propriedades solicitadas devem estar em uma lista separada por vírgulas. Propriedades devem ser totalmente qualificadas - ou seja, system.hostname (não apenas hostname).';

$GLOBALS["lang"]['The result of the command.'] = 'O resultado do comando.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'O quarto onde o rack está localizado.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'A fila onde o rack está localizado.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'A busca por grupo no servidor LDAP falhou. Verifique os registros do servidor LDAP. Você criou esses grupos (para papéis e orgs) no servidor LDAP e atribuiu usuários LDAP a eles?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'A chave secreta usada em conjunto com sua chave AWS EC2 API.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'A data de fim de vida do software.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'A data de fim de vida do software.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'A coluna específica do banco de dados da tabela especificada.';

$GLOBALS["lang"]['The specific database table.'] = 'A tabela específica do banco de dados.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'As opções padrão de tempo Nmap. Anteriormente em T4 (agressivo).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'As opções padrão de tempo Nmap. Normalmente usamos T4 (Agressivo) como isso é recomendado para uma boa conexão de banda larga ou ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'O status desta integração';

$GLOBALS["lang"]['The status of this queued item.'] = 'O status deste item na fila.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Os passos abaixo descrevem o processo.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'O alvo IP este registro de registro refere-se a (se houver).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'O computador alvo para auditoria significa host local.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'O modelo para o link ser gerado por linha de resultados.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'O texto para a parte inferior do gráfico em um gráfico de linha (somente).';

$GLOBALS["lang"]['The text that is displayed.'] = 'O texto que é exibido.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'A hora após a qual, esta tarefa deve ser executada. Por exemplo, execute uma tarefa depois de 1o de junho de 2017 às 10h. <code>2017-06-01 09:59:00</code>. Este valor deve ser zero acolchoado (isto é, 09, não 9). Este valor é padrão para <code>2000-01-01 00:00:00</code> O que significa que por padrão, uma tarefa programada será executada na próxima execução programada.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'O top 10, 100 ou 1000 (ou nenhum) portas TCP comumente em uso de acordo com Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'O top 10, 100 ou 1000 (ou nenhum) portas UDP comumente em uso de acordo com Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'A saída total da BTU por este rack.';

$GLOBALS["lang"]['The type of device.'] = 'O tipo de dispositivo.';

$GLOBALS["lang"]['The type of organisation.'] = 'O tipo de organização.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'O tipo de rack (computação, energia, rede, etc).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'O tipo de tarefa a ser executada. Um dos: base, referência, descoberta de nuvem, descoberta, integração, relatório, consulta.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'O tipo de integração (normalmente nomeado em homenagem ao sistema externo).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'O estado não filtrado significa que um porto é acessível, mas Nmap é incapaz de determinar se está aberto ou fechado. Apenas a varredura ACK, que é usada para mapear conjuntos de regras de firewall, classifica portas neste estado. Escanear portas não filtradas com outros tipos de escaneamento, como Janela, SYN ou FIN, pode ajudar a resolver se a porta está aberta.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'O identificador único deste servidor.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'A conta de usuário que esse colecionador usa. Links para <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'O usuário do Active Directory / OpenLDAP deve ser um membro direto dos grupos Open-AudIT necessários para papéis e orgs. Um membro de um grupo que é membro de outro grupo que é membro do grupo Open-AudIT não vai funcionar.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'O usuário está no LDAP e suas credenciais são válidas, mas não está em nenhum dos grupos LDAP Open-AudIT para Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'O usuário está no LDAP e suas credenciais são válidas, mas não está em nenhum dos grupos LDAP Open-AudIT para papéis.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'O usuário está no LDAP e suas credenciais são válidas, mas não está em nenhum dos grupos de LDAP Open-AudIT necessários.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'O usuário está no grupo LDAP que combina com este Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'O usuário está no grupo LDAP que combina com este papel.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'O usuário não está no grupo LDAP que combina com este Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'O usuário não está no grupo LDAP que combina com este papel.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'O usuário que foi especificado existe no LDAP, mas Open-AudIT não está configurado para consumir os grupos LDAP para papéis e que o usuário não existe dentro do Open-AudIT. - Seleciona. <i>Use LDAP para papéis</i> no LDAP Open-AudIT Tela do servidor ou criar esse usuário dentro do Open-AudIT e atribuir papéis e orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'O nome de usuário (se não usar o usuário executando o script).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'O nome de usuário usado para acessar o sistema externo.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Os detalhes dos usuários não foram recuperados do LDAP. Verifique os registros do servidor LDAP.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Os detalhes dos usuários foram recuperados do LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'O endereço de e-mail dos usuários.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'As horas habituais de operação neste local.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'O valor atribuído ao item.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'O valor que está guardado para este item em particular.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'O nome do vendedor de acordo com as entradas do CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'O vendedor pegou do CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'O diretório web no host que Open-AudIT está instalado (requer uma barra de rastreamento).';

$GLOBALS["lang"]['The widget at position '] = 'O widget na posição ';

$GLOBALS["lang"]['The width of this device.'] = 'A largura deste dispositivo.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Seus OrgIDs e seus descendentes';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Apenas suas OrgIDs.';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Seus OrgIDs, ascendentes e descendentes';

$GLOBALS["lang"]['Then'] = 'Então...';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Então crie um novo método Auth em Open-AudIT, indo para o menu -> Admin. Métodos de Auth -> Crie Auth. Dê um nome e defina o <i>Tipo</i> à Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Então você pode usar Open-AudIT (não suportado) para receber dados de auditoria diretamente dos clientes. Descoberta <strong>Vai falhar.</strong>, mas se você não está usando Discovery (o principal recurso Open-AudIT foi projetado ao redor), você ainda pode obter dados do dispositivo. Você precisaria executar os scripts de auditoria diretamente nos clientes usando Cron, ou usar o recurso do Agente do Windows (apenas na empresa).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Há um botão para exportar para JSON. Isso mostrará apenas a tabela de atributos do dispositivo. Para exportar o dispositivo com todas as tabelas de componentes associadas, veja os detalhes do dispositivo e adicione';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Não há necessidade de editar manualmente cada dispositivo individual.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Não há necessidade de fazer nada se você estiver rodando Open-AudIT em um servidor Linux.<br/><br/>Os clientes do Windows estão bem e não precisam de ações especiais, no entanto... para habilitar esse recurso o script de auditoria deve ser executado localmente no sistema Windows alvo. Não pode ser executado remotamente como fazemos com as chamadas WMI ao executar o script de auditoria em uma máquina do Windows, enquanto mira uma segunda máquina do Windows. Para fazer isso, precisamos copiar o script de auditoria para a máquina do Windows e executá-lo. Infelizmente a conta de serviço em que o Apache é executado é a conta do Sistema Local. Esta conta não tem acesso a recursos remotos. Para resolver esta questão, o serviço deve ser executado sob outra conta. É mais fácil usar a conta de administrador local, mas você pode tentar qualquer conta que você gosta, desde que tenha os privilégios necessários. A conta do Sistema Local tem tanto acesso local quanto a conta do Administrador local.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Estes são apenas exemplos. Você pode precisar ajustar esses atributos para se adequar ao seu LDAP particular.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Esses parâmetros permitem que você audite apenas o que é útil e relevante para você, economizando tempo de processamento e permitindo que você descubra sua rede de forma ordenada.';

$GLOBALS["lang"]['Thing'] = 'Coisa.';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Pense em mail.domain1.com e mail.domain2.com - mesmo nome de host.';

$GLOBALS["lang"]['Third'] = 'Terceiro.';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Esta CVE será recuperada e sobrescreverá a CVE existente se existir.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Este Org não tem nenhum grupo de AD especificado. Verifique os detalhes dos papéis no Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Este Org não tem nenhum grupo de AD especificado. Verifique os detalhes dos papéis no Open-AudIT. <span class=\'\"confluence-link\"\'>Você criou esses grupos (para orgs) no servidor LDAP e atribuiu usuários LDAP a eles?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Este papel não tem nenhum grupo AD especificado. Verifique os detalhes dos papéis no Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Este atributo é armazenado como um objeto JSON. É a lista de todas as coleções e contém o nome da coleção junto com <code>c</code>, <code>r</code>, <code>u</code> e, ou, <code>d</code> que representam criar, ler, atualizar e deletar. Estas são as ações que um usuário pode realizar em itens dessa coleção em particular.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Isso pode ser um varchar (um campo de texto), uma lista (uma lista de valores que podem ser selecionados) ou uma data.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Este código depende do grande trabalho feito pelo';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Este colecionador é identificador universalmente único.';

$GLOBALS["lang"]['This column is required by'] = 'Esta coluna é exigida por';

$GLOBALS["lang"]['This column is required by '] = 'Esta coluna é exigida por ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Esta descrição é auto-população e deve ser deixada como está.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Este endpoint permite adicionar as conexões que fazem parte da sua infraestrutura de rede, permite personalizar uma variedade de atributos, especificar onde esta conexão está localizada e a organização que ela pertence.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Este erro indica que SMB1 foi desativado ou removido da máquina alvo. Isso é normal para a versão moderna do Windows e você só verá essa mensagem quando a tentativa de conexão SMB2 falhar. Se a conexão SMB2 falhar, tentamos permitir a descoberta em versões antigas do Windows. Se o alvo máquina Windows <i>É</i> Fazendo uma versão antiga do Windows, é provável que suas credenciais tenham falhado. Nesse caso, veja';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Este erro indica que não há memória virtual suficiente ou cota de arquivos de chamada disponível para completar a operação especificada. Deveria tentar de novo mais tarde.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Este erro indica que as credenciais usadas estão incorretas, não existem ou não têm privilégios suficientes para acessar remotamente a máquina do Windows. Você deve verificar as credenciais e verificar o abaixo.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Este exemplo cria uma lista de todos os módulos marcados como';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Este exemplo cria uma lista de dispositivos e os portos abertos, protocolos e programas encontrados pela varredura NMAP.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Este exemplo cria uma lista de dispositivos onde os campos Função ou Descrição estão em branco ou a data de compra é o padrão.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Esta consulta de exemplo recupera uma lista de dispositivos com mais de 3 anos. A consulta usa hoje.';

$GLOBALS["lang"]['This example uses'] = 'Este exemplo usa';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Este recurso requer uma licença profissional ou uma Enterprise.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Este recurso, porque ele tem a capacidade de afetar dispositivos alvo mais do que o normal deve ser ativado manualmente. Para ativar esta funcionalidade, mude o item de configuração feature_executables para <i>Sim.</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Este arquivo diz ao Linux para pesquisar o aplicativo para determinar se há tarefas agendadas que devem ser executadas.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Este formulário fornece uma maneira simples de começar a descobrir os dispositivos em sua rede. Para mais (muito mais) opções detalhadas, você pode criar individualmente';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Também é assim que o PAExec funciona.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Esta é uma opção de configuração opcional, ativada ao definir discovery_use_org_id_match na configuração global.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Esta é geralmente a coluna primária, a menos que seja configurada de outra forma. Quando tipo = tráfego, este representa o texto secundário.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Isso provavelmente é devido ao tempo de folga do MySQL. O MySQL normalmente usa o tempo do host. Você pode verificar isso por';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Isso é definido pelos usuários e mesmo que deva ser globalmente único, certamente não há garantia disso.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Este é o diretório onde guardamos qualquer ligação a dispositivos.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Isso é para ser usado como o primeiro ponto de chamada quando resolver problemas de Open-AudIT. Você pode clicar no botão Exportar no canto superior direito para recuperar isso como um arquivo JSON (para ser adicionado ao ticket / email de suporte.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Esta questão está sob investigação.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Este item deve corresponder ao valor do atributo selecionado ou contém o ID da consulta a ser usada.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Este item deve corresponder ao valor do atributo selecionado.';

$GLOBALS["lang"]['This license expires on'] = 'Esta licença expira em';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Essa permissão de segurança pode ser modificada usando a ferramenta administrativa dos Serviços Componentes.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Isso deve ser comentado após a solução de problemas como modo de depuração irá gerar muitos registros no disco para nenhum benefício.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Isso deveria ser globalmente único, mas já vi casos em que não é.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Deve ser 1 ou a altura da prateleira.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Este deve ser o nome de campo qualificado no banco de dados. Atualmente, colunas do sistema, campos e quadros de credenciais são suportados. Sistema.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Este estado é usado quando Nmap é incapaz de determinar se uma porta é fechada ou filtrada. Só é usado para o ID IP.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Isso vai auto-popular.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Isso vai atrasar consideravelmente o exame de descoberta.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Isso apagará as linhas atuais na';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Isso vai revelar permanentemente esta licença.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Isso mostrará o formulário Bulk Edit. Qualquer atributo que você definir neste formulário será aplicado a todos os dispositivos selecionados. Você pode definir múltiplos atributos ao mesmo tempo.';

$GLOBALS["lang"]['Thursday'] = 'Quinta-feira.';

$GLOBALS["lang"]['time_caption'] = 'Legenda do Tempo';

$GLOBALS["lang"]['Time Caption'] = 'Legenda do Tempo';

$GLOBALS["lang"]['time_daylight'] = 'Hora da luz do dia';

$GLOBALS["lang"]['Time Daylight'] = 'Hora da luz do dia';

$GLOBALS["lang"]['Time to Execute'] = 'Hora de executar';

$GLOBALS["lang"]['timeout'] = 'Tempo.';

$GLOBALS["lang"]['Timeout'] = 'Tempo.';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Tempo por alvo (segundos)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Tempo por alvo. Espere X segundos para uma resposta alvo.';

$GLOBALS["lang"]['Timesatamp'] = 'Timetamp';

$GLOBALS["lang"]['Timestamp'] = 'Timetamp';

$GLOBALS["lang"]['timing'] = 'Tempo';

$GLOBALS["lang"]['Timing'] = 'Tempo';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Título';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Para um novo arquivo chamado Env (no mesmo diretório). Agora edite o novo arquivo e desacompanhe (remove o #) a linha abaixo (linha 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Para realmente executar a consulta, adicione um execute, assim /aberto-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Para auditar uma máquina, você deve ter credenciais e acesso ao nível de administrador.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Para auditar uma máquina remota em um domínio do Active Directory, seu usuário fornecido (ou se não for fornecido, o usuário executando o script) deve ser um membro do grupo de administradores de máquinas-alvo (ou subgrupo).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Para auditar uma máquina remota que não está em um domínio, você deve usar a conta Administrador (não <i>Um</i> Conta de administrador, <i>O</i> Conta de administrador) no PC alvo. #1 e #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Para auditar o host local, quaisquer credenciais fornecidas são desconsideradas e a conexão é feita usando os detalhes do usuário executando o script.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Para comparar o software, verificamos o nome e a versão. Porque os números de versão não são todos padronizados em formato, quando recebemos um resultado de auditoria criamos um novo atributo chamado software_acolchoado que armazenamos no banco de dados junto com o resto dos detalhes de software para cada pacote. Por essa razão, as linhas de base usando políticas de software não funcionarão quando forem executadas contra um dispositivo que não foi auditado até 1,10 (pelo menos). Políticas de software podem testar contra a versão ser <i>igual a</i>, <i>maior que</i> ou <i>igual ou maior que</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Para criar uma nova entrada, clique no botão Criar no canto superior direito.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Para criar um recurso, você deve postar os dados necessários.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Para permitir que uma máquina remota (Vista ou acima) seja auditada que não está em um domínio, por uma conta no grupo Administradores, que não seja a conta do Administrador, veja a seção abaixo no UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Para habilitar isso, crie um novo item Auth indo para o menu -> Admin. Auth -> Crie o método Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Para executar o script do Windows Powershell, abra um prompt de comando como Administrador e use o seguinte comando';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Para executar o script de auditoria, abra um terminal e use o seguinte comando:';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Para filtrar pelo valor da propriedade, use o nome da propriedade. Operadores que devem preceder o valor são';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Para instalar o Nmap no Windows, visite a página do Nmap.';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Para fazer a mudança, siga os passos abaixo.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Para recuperar a identidade do Tenant. Abra o portal Azure, clique no Azure Active Directory, Propriedades e o Tenant ID é exibido como seu ID do diretório - não me culpe pelo nome descompasso, é assim que a Microsoft rola.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Para recuperar sua chave, entre na Console da AWS e selecione seu nome de usuário, então Minhas Credenciais de Segurança.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Para devolver um item específico.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Devolver todos os itens para um tipo compreensivo para um dispositivo específico.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Devolver todos os itens para um tipo de componente. Se você quisesse todo o software você usaria';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Para reverter a ordem, inserir um menos, assim';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Para executar o script de teste no PC do Windows alvo';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Para selecionar dispositivos a serem integrados, usamos nmis_manage = y, mas você pode gostar (por exemplo) tipo = roteador. Você também pode usar um Grupo ou Consulta se preferir algo mais complexo.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Para classificar por uma coluna de banco de dados, use';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Para usar esse recurso Enterprise, você primeiro precisa criar seu usuário em Open-AudIT como de costume. Atribuir uma senha não é necessário. Você tem que atribuir papéis e orgs. O nome de usuário no Open-AudIT deve ser igual ao da Entra. <i>Nome de usuário preferido</i> Atributo. Não há necessidade de um nome completo ou e-mail - estes serão povoados da Entra. Se você não conhece seus usuários <i>Nome de usuário preferido</i>Não tenha medo. Você pode criar o novo método Auth em Open-AudIT e o aplicativo Enterprise em Entra e quando um usuário tenta entrar em Open-AudIT sem um usuário pré-existente, verifique os logs e você verá seus <i>Nome de usuário preferido</i> Registrado para sua conveniência.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Para usar esse recurso Enterprise, você primeiro precisa criar seu usuário em Open-AudIT como de costume. Atribuir uma senha não é necessário. Você tem que atribuir papéis e orgs. O nome de usuário no Open-AudIT deve corresponder ao OKTA. <i>Nome</i> Atributo. Não há necessidade de um nome completo ou e-mail - estes serão povoados da OKTA. Se você não conhece seus usuários <i>Nome<i>Não tenha medo. Você pode criar o novo Auth Menthod em Open-AudIT e o aplicativo em OKTA e quando um usuário tenta entrar em Open-AudIT sem um usuário pré-existente, verifique os logs e você verá seus <i>Nome<i> Registrado para sua conveniência.<br/><p>Então crie um novo método Auth em Open-AudIT, indo para o menu -> Admin. Métodos de Auth -> Crie Auth. Dê um nome e defina o <i>Tipo</i> a Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Para usar este recurso você deve ativar os itens de configuração match_mac (para AWS) e match_hostname (para Azure). Isso será feito automaticamente na primeira vez que uma descoberta na nuvem for executada. Para mais sobre as regras de combinação de Open-AudITs veja AQUI:';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Para ver os detalhes de uma consulta, a estrutura de URL padrão de /aberto-audito/índice. Deve ser usado.';

$GLOBALS["lang"]['Togo'] = 'Togo.';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau.';

$GLOBALS["lang"]['Tonga'] = 'Tonga.';

$GLOBALS["lang"]['toolbar_style'] = 'Estilo de Barra de Ferramentas';

$GLOBALS["lang"]['Toolbar Style'] = 'Estilo de Barra de Ferramentas';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Portos TCP Top Nmap. O top 10, 100, 1000 portas para verificar as opções "top ports" do Nmaps.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Nmap UDP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. O top 10, 100, 1000 portas para verificar as opções "top ports" do Nmaps.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Chinês tradicional';

$GLOBALS["lang"]['Traffic Light'] = 'Luz de Tráfego';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad e Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Solução de problemas';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Solução de problemas LDAP Logins';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Tente Open-AudIT Enterprise, em nós sem limite de tempo. Todas as características da Enterprise. Limitado a 20 dispositivos.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Tente todas as últimas características com uma licença gratuita de 100 dispositivos da Open-AudIT Enterprise. Por favor, leia o ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Tente entrar usando um usuário de LDAP. Estamos assumindo que isso vai falhar (caso contrário, por que você ainda está lendo isso?). Em seguida, comente a linha do arquivo acima.';

$GLOBALS["lang"]['Tuesday'] = 'Terça-feira.';

$GLOBALS["lang"]['Tunisia'] = 'Tunísia';

$GLOBALS["lang"]['Turkey'] = 'Peru.';

$GLOBALS["lang"]['Turkish'] = 'Turco';

$GLOBALS["lang"]['Turkmenistan'] = 'Turcomenistão';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Ilhas Turks e Caicos';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu.';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq.';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq.';

$GLOBALS["lang"]['tx_level'] = 'Nível Tx';

$GLOBALS["lang"]['Tx Level'] = 'Nível Tx';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Perfil TX';

$GLOBALS["lang"]['Tx Profile'] = 'Perfil TX';

$GLOBALS["lang"]['type'] = 'Tipo';

$GLOBALS["lang"]['Type'] = 'Tipo';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Tipo: isso pode ser um varchar (um campo de texto) ou uma Lista (uma lista de valores que podem ser selecionados).';

$GLOBALS["lang"]['Types of Networks'] = 'Tipos de redes';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Portos Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Portos Udp';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ucrânia';

$GLOBALS["lang"]['Ukrainian'] = 'Ucraniano';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Revisão de documentos';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Revisão de execução';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Análise em andamento';

$GLOBALS["lang"]['Unfiltered'] = 'Sem filtro.';

$GLOBALS["lang"]['uninstall'] = 'Desinstalar';

$GLOBALS["lang"]['Uninstall'] = 'Desinstalar';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Desinstale o agente.';

$GLOBALS["lang"]['United Arab Emirates'] = 'Emirados Árabes Unidos';

$GLOBALS["lang"]['United Kingdom'] = 'Reino Unido';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Ilhas Menores dos Estados Unidos';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Ilhas Virgens dos Estados Unidos';

$GLOBALS["lang"]['United States of America'] = 'Estados Unidos da América';

$GLOBALS["lang"]['Unknown'] = 'Desconhecido';

$GLOBALS["lang"]['unlock_pin'] = 'Desbloquear Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Desbloquear Pin';

$GLOBALS["lang"]['Unscheduled'] = 'Não programado';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Não usado como em 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Não usado.';

$GLOBALS["lang"]['Update'] = 'Atualizar';

$GLOBALS["lang"]['update_external_count'] = 'Atualizar contagem externa';

$GLOBALS["lang"]['Update External Count'] = 'Atualizar contagem externa';

$GLOBALS["lang"]['update_external_from_internal'] = 'Atualização externa do interno';

$GLOBALS["lang"]['Update External From Internal'] = 'Atualização externa do interno';

$GLOBALS["lang"]['update_internal_count'] = 'Atualizar contagem interna';

$GLOBALS["lang"]['Update Internal Count'] = 'Atualizar contagem interna';

$GLOBALS["lang"]['update_internal_from_external'] = 'Atualizar interno de externo';

$GLOBALS["lang"]['Update Internal From External'] = 'Atualizar interno de externo';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Atualizar dispositivos NMIS de Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Atualizar Open-AudIT Dispositivos de ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Atualizar Open-AudIT Dispositivos da NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Atualizar vulnerabilidades';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Atualizar um atributo de uma entrada de coleção.';

$GLOBALS["lang"]['Update attributes'] = 'Atualizar atributos';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Atualizada cada vez que a descoberta foi executada com IPs detectados para responder.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Atualizado cada vez que a descoberta foi executada com IPs que foram digitalizados pelo Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Atualizada cada vez que a descoberta foi executada com dispositivos que pudemos auditar.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Atualizado cada vez que a descoberta foi executada com dispositivos que fomos capazes de consultar.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Atualizada cada vez que a descoberta foi executada.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Atualizada cada vez que a descoberta foi executada.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Atualizada cada vez que a descoberta completa a execução.';

$GLOBALS["lang"]['Updating'] = 'Atualizando';

$GLOBALS["lang"]['Upgrade'] = 'Atualização';

$GLOBALS["lang"]['Upload an audit result file'] = 'Envie um arquivo de resultados de auditoria.';

$GLOBALS["lang"]['Upper Case'] = 'Caso Superior';

$GLOBALS["lang"]['uptime'] = 'Tempo livre.';

$GLOBALS["lang"]['Uptime'] = 'Tempo livre.';

$GLOBALS["lang"]['Urdu'] = 'Urdu.';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguai, República Oriental de';

$GLOBALS["lang"]['usb'] = 'USB';

$GLOBALS["lang"]['Usb'] = 'USB';

$GLOBALS["lang"]['use'] = 'Use';

$GLOBALS["lang"]['Use'] = 'Use';

$GLOBALS["lang"]['use_authentication'] = 'Use a autenticação.';

$GLOBALS["lang"]['Use Authentication'] = 'Use a autenticação.';

$GLOBALS["lang"]['use_authorisation'] = 'Use a autorização.';

$GLOBALS["lang"]['Use Authorisation'] = 'Use a autorização.';

$GLOBALS["lang"]['Use Proxy'] = 'Use o Proxy.';

$GLOBALS["lang"]['Use SNMP'] = 'Use SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Use SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Use seguro (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Use o serviço de detecção de versões.';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Use o Serviço de Detecção de Versão. Quando uma porta detectada é detectada como aberta, <i>Sim.</i>, Nmap irá consultar o dispositivo alvo na tentativa de determinar a versão do serviço em execução nesta porta.<br/>Isso pode ser útil ao identificar dispositivos não classificados. Isso não foi usado anteriormente.';

$GLOBALS["lang"]['Use WMI'] = 'Use o WMI.';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Use um. <i>Método de entrada</i> OIDC - OpenID Connect e um <i>Tipo de Aplicação</i> da Aplicação Web. Clique <i>Próxima</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Use para autenticação';

$GLOBALS["lang"]['Use for Roles'] = 'Uso para papéis';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Use as opções de instalação padrão quando exibido e clique no <i>Concordo.</i>, <i>Próxima</i> e <i>Instalar</i> botões para instalar Nmap.';

$GLOBALS["lang"]['used'] = 'Usado';

$GLOBALS["lang"]['Used'] = 'Usado';

$GLOBALS["lang"]['used_count'] = 'Contagem usada';

$GLOBALS["lang"]['Used Count'] = 'Contagem usada';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Usado apenas pelo OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Usado internamente ao descobrir um único dispositivo.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Usado internamente ao descobrir um único dispositivo. Links para <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Usados quando os servidores LDAP foram configurados para preencher os detalhes dos usuários, isso inclui os Orgs aos quais eles têm acesso. Se um usuário está neste grupo LDAP, eles são designados esta org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Usado quando servidores LDAP foram configurados para preencher os detalhes dos usuários, isso inclui os papéis que são atribuídos. Se um usuário está neste grupo LDAP, eles são designados para este papel.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Usado ao pesquisar OpenLDAP para combinar um usuário com um grupo de membros. Predefinição de <code>memberUid</code>. Usado apenas pelo OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Usado com Integrações e aplicações de monitoramento da FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Usado com Integrações e aplicações de monitoramento da FirstWave. Se o SNMP funcionar detectado pela descoberta.';

$GLOBALS["lang"]['user'] = 'Usuário';

$GLOBALS["lang"]['User'] = 'Usuário';

$GLOBALS["lang"]['User DN'] = 'DN do usuário';

$GLOBALS["lang"]['user_group'] = 'Grupo de Usuários';

$GLOBALS["lang"]['User Group'] = 'Grupo de Usuários';

$GLOBALS["lang"]['user_id'] = 'ID do usuário';

$GLOBALS["lang"]['User ID'] = 'ID do usuário';

$GLOBALS["lang"]['user_interaction'] = 'Interação do usuário';

$GLOBALS["lang"]['User Interaction'] = 'Interação do usuário';

$GLOBALS["lang"]['User Membership Attribute'] = 'Atributo de Membro do Usuário';

$GLOBALS["lang"]['user_name'] = 'Nome do usuário';

$GLOBALS["lang"]['User Name'] = 'Nome do usuário';

$GLOBALS["lang"]['User Policies'] = 'Políticas do usuário';

$GLOBALS["lang"]['Username'] = 'Nome de usuário';

$GLOBALS["lang"]['username'] = 'Nome de usuário';

$GLOBALS["lang"]['users'] = 'Usuários';

$GLOBALS["lang"]['Users'] = 'Usuários';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Usuários trabalham como o Netstat Ports. Se um usuário existe com um nome, status e senha correspondentes (alterável, expira, necessário) então a política passa.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Usuários, papéis e orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Usa o Framework PHP CodeIgniter.';

$GLOBALS["lang"]['Using'] = 'Usando';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Usando Entra para Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Usando LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Usando OKTA para Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Usar a opção de formato é útil ao usar um navegador, mas você deseja ver o resultado no formato JSON. Adicionando formato=json consegue isso. Normalmente um navegador da web vai definir seu cabeçalho aceito em HTML, então nesse caso, devolvemos a página renderizada. Usando uma API para recuperar JSON você deve definir o cabeçalho de aceitação para';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Geralmente Mbs, da Localização A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Geralmente Mbs, da localização B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Geralmente Mbs, para Localização A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Geralmente Mbs, para a localização B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Normalmente deve ser de 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbequistão';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'ID VLAN';

$GLOBALS["lang"]['valid_from'] = 'Válido De';

$GLOBALS["lang"]['Valid From'] = 'Válido De';

$GLOBALS["lang"]['valid_from_raw'] = 'Válido do Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Válido do Raw';

$GLOBALS["lang"]['valid_to'] = 'Válido para';

$GLOBALS["lang"]['Valid To'] = 'Válido para';

$GLOBALS["lang"]['valid_to_raw'] = 'Válido para Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Válido para Raw';

$GLOBALS["lang"]['Valid Values'] = 'Valores válidos';

$GLOBALS["lang"]['value'] = 'Valor';

$GLOBALS["lang"]['Value'] = 'Valor';

$GLOBALS["lang"]['Value Types'] = 'Tipos de Valor';

$GLOBALS["lang"]['values'] = 'Valores';

$GLOBALS["lang"]['Values'] = 'Valores';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Valores: No caso de... <i>lista</i> Field, esta deve ser uma lista separada por vírgula de valores válidos.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu.';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar.';

$GLOBALS["lang"]['variable'] = 'Variável';

$GLOBALS["lang"]['Variable'] = 'Variável';

$GLOBALS["lang"]['Various'] = 'Vários.';

$GLOBALS["lang"]['vendor'] = 'Vendedor';

$GLOBALS["lang"]['Vendor'] = 'Vendedor';

$GLOBALS["lang"]['Vendor Report'] = 'Relatório do Fornecedor';

$GLOBALS["lang"]['vendors'] = 'Vendedores';

$GLOBALS["lang"]['Vendors'] = 'Vendedores';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['Version'] = 'Versão';

$GLOBALS["lang"]['version_padded'] = 'Versão Acolchoada';

$GLOBALS["lang"]['Version Padded'] = 'Versão Acolchoada';

$GLOBALS["lang"]['version_raw'] = 'Versão Raw';

$GLOBALS["lang"]['Version Raw'] = 'Versão Raw';

$GLOBALS["lang"]['version_string'] = 'Versão String';

$GLOBALS["lang"]['Version String'] = 'Versão String';

$GLOBALS["lang"]['video'] = 'Vídeo';

$GLOBALS["lang"]['Video'] = 'Vídeo';

$GLOBALS["lang"]['Vietnam'] = 'Vietnã';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnamita';

$GLOBALS["lang"]['View'] = 'Vista';

$GLOBALS["lang"]['View All'] = 'Ver tudo';

$GLOBALS["lang"]['View Details'] = 'Ver detalhes';

$GLOBALS["lang"]['View Device'] = 'Ver Dispositivo';

$GLOBALS["lang"]['View Discovery'] = 'Veja Discovery';

$GLOBALS["lang"]['View Policy'] = 'Ver Política';

$GLOBALS["lang"]['View Racks'] = 'Veja Racks.';

$GLOBALS["lang"]['View the'] = 'Veja o';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Veja a descoberta em questão e clique no botão Suporte na barra de ferramentas superior direita. Isso fornecerá as configurações de descoberta, itens de configuração, a lista de dispositivos de descoberta, bem como os registros dessa descoberta em particular.';

$GLOBALS["lang"]['View the release notes on the'] = 'Veja as notas de lançamento no';

$GLOBALS["lang"]['Virtual Private Network'] = 'Rede Virtual Privada';

$GLOBALS["lang"]['Virtual private network'] = 'Rede virtual privada';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualização';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Visite nosso canal do YouTube para vídeos instrucionais.';

$GLOBALS["lang"]['vlan'] = 'Vlan.';

$GLOBALS["lang"]['Vlan'] = 'Vlan.';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'ID do dispositivo VM';

$GLOBALS["lang"]['Vm Device ID'] = 'ID do dispositivo VM';

$GLOBALS["lang"]['vm_group'] = 'Grupo Vm';

$GLOBALS["lang"]['Vm Group'] = 'Grupo Vm';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Vm Server Name';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm Server Name';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Situação Vuln';

$GLOBALS["lang"]['Vuln Status'] = 'Situação Vuln';

$GLOBALS["lang"]['vulnerabilities'] = 'Vulnerabilidades';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulnerabilidades';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Vulnerabilidades Cache';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Vulnerabilidades Cache';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Vulnerabilidades e resultados';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerabilidades inicialmente publicadas antes de 1 de janeiro de 2025 (por padrão). Não vemos sentido em retornar vulnerabilidades de anos antes. Isso pode ser alterado na configuração.';

$GLOBALS["lang"]['vulnerability_id'] = 'ID de vulnerabilidade';

$GLOBALS["lang"]['Vulnerability ID'] = 'ID de vulnerabilidade';

$GLOBALS["lang"]['Vulnerability Status'] = 'Situação de vulnerabilidade';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'ATENÇÃO - Ao criar uma linha de base usando políticas de software, atualmente Centos e RedHat pacote o kernel usando os nomes <i>kernel</i> e <i>kernel-devel</i>. Pode haver vários pacotes com este nome e versões diferentes simultaneamente instalados. Distribuição baseada em Debian usa nomes como <i>Linux-image-3.13.0-24-generic</i>Note que o número da versão está incluído no nome do pacote. Porque os sistemas operacionais baseados em RedHat usam este formato e, posteriormente, têm vários nomes de pacotes idênticos com versões diferentes que atualmente excluem <i>kernel</i> e <i>kernel-devel</i> de políticas de software. Isso pode ser abordado em uma atualização futura.';

$GLOBALS["lang"]['WHERE'] = 'Onde';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Credenciais Requisitos';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Espere terminar e cole na próxima linha para instalar o agente.';

$GLOBALS["lang"]['wall_port'] = 'Porto da Parede';

$GLOBALS["lang"]['Wall Port'] = 'Porto da Parede';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis e Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Quer saber mais?';

$GLOBALS["lang"]['Warning'] = 'Aviso';

$GLOBALS["lang"]['warranty'] = 'Garantia';

$GLOBALS["lang"]['Warranty'] = 'Garantia';

$GLOBALS["lang"]['warranty_duration'] = 'Duração da Garantia';

$GLOBALS["lang"]['Warranty Duration'] = 'Duração da Garantia';

$GLOBALS["lang"]['warranty_expires'] = 'Garantia expira';

$GLOBALS["lang"]['Warranty Expires'] = 'Garantia expira';

$GLOBALS["lang"]['warranty_status'] = 'Estado da Garantia';

$GLOBALS["lang"]['Warranty Status'] = 'Estado da Garantia';

$GLOBALS["lang"]['warranty_type'] = 'Tipo de Garantia';

$GLOBALS["lang"]['Warranty Type'] = 'Tipo de Garantia';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Nós também temos uma opção de Ping Before Scan (importante para roteadores com caches ARP de longa vida). Normalmente é uma boa ideia.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Também temos nossos itens de ação (que são executados na ordem abaixo):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Muitas vezes nos perguntam isso e a resposta é: <i>Depende.</i>. Depende do número de IPs a serem digitalizados, da velocidade da conexão de rede, da velocidade dos dispositivos sendo digitalizados, do tipo de dispositivos sendo digitalizados, do número de credenciais diferentes sendo testadas e da velocidade do servidor Open-AudIT. Não temos uma calculadora que nos permita inserir essas variáveis e devolver um valor. É simplesmente muito complexo. Geralmente eu limito minhas descobertas a 256 endereços IP - ou seja, uma sub-rede 24. Tivemos clientes escaneando sub-redes 16 (endereços 65k) e funciona, mas pode levar muito tempo. Você está muito melhor escaneando em 24 quarteirões. Se você simplesmente não sabe quais são seus endereços, então este é um bom caso para uma descoberta de sementes.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Temos instruções mais detalhadas sobre';

$GLOBALS["lang"]['We have tests for:'] = 'Temos testes para:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Esperamos que ache o Open-AudIT tão útil quanto nós.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Inicialmente configuramos a lista padrão de scripts com as opções padrão. A lista de roteiros é visualizável. Esses scripts padrão não podem ser apagados. Você pode criar scripts adicionais para uso por você, conforme necessário. Seu roteiro será baseado em um dos scripts existentes e terá opções personalizadas aplicadas. Os scripts podem ser baixados da lista no menu: Scripts de Auditoria -> Lista de Scripts de Auditoria.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Precisamos de algumas credenciais para poder falar com os dispositivos da sua rede.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Só enviamos a quantidade mínima de dados e nada de natureza sensível. Enviamos nossos dados de licença (nome, tipo, etc), nossos dados de aplicação (nome, versão, plataforma, fuso horário, etc), quaisquer erros registrados, uma contagem de tipos de dispositivo e uma contagem dos recursos usados. <i>Qualquer</i> O ambiente tem dispositivos e essa é a única parte dos seus dados que enviamos. E só o tipo de dispositivo e a contagem. Nem o fabricante, nem o modelo. Não enviamos nada especial. Sem redes. Sem endereços IP. Nenhuma versão do sistema operacional. Sem nomes de software. Os campos UUID e Server são codificados sha256 (então não sabemos o valor). Enviamos os dados necessários para melhorar o produto. Esperamos que veja o benefício para todos nós com essa informação. Vai nos dar uma direção guiada sobre onde focar melhorias e novas características no produto.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Nós tendemos a usar a extensão do Google Chrome chamada Postman para testar consultas descansadas. Talvez queira instalar e testar com isso.';

$GLOBALS["lang"]['Web'] = 'Web.';

$GLOBALS["lang"]['Web Application Routes'] = 'Rotas de Aplicação Web';

$GLOBALS["lang"]['Web Server Discovery'] = 'Descoberta do Servidor Web';

$GLOBALS["lang"]['Webserver'] = 'Servidor Web';

$GLOBALS["lang"]['Website'] = 'Site';

$GLOBALS["lang"]['Wednesday'] = 'Quarta-feira';

$GLOBALS["lang"]['weight'] = 'Peso';

$GLOBALS["lang"]['Weight'] = 'Peso';

$GLOBALS["lang"]['weight_current'] = 'Peso atual';

$GLOBALS["lang"]['Weight Current'] = 'Peso atual';

$GLOBALS["lang"]['weight_empty'] = 'Peso Vazio';

$GLOBALS["lang"]['Weight Empty'] = 'Peso Vazio';

$GLOBALS["lang"]['weight_max'] = 'Peso Max';

$GLOBALS["lang"]['Weight Max'] = 'Peso Max';

$GLOBALS["lang"]['Welcome'] = 'Bem-vindo.';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Bem-vindo, Dashboard.';

$GLOBALS["lang"]['Welcome to'] = 'Bem-vindo a';

$GLOBALS["lang"]['Western Sahara'] = 'Saara Ocidental';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'O que posso esperar se não tenho credenciais?';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'E os campos que eu quero da NMIS que não estão em Open-AudIT? Nós cuidamos de você. Quaisquer campos no sistema externo (NMIS) que não existam no Open-AudIT serão criados automaticamente como campos Open-AudIT Custom.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'E outros dispositivos de rede? Pense em interruptores, roteadores, impressoras, etc. Obviamente, é melhor se você puder fornecer algumas credenciais SNMP para estes dispositivos. Eles só precisam <i>Apenas leitura</i> Acesso. Mas se você não quer fazer mesmo isso, não há nada que o impeça de executar a descoberta, encontrar os dispositivos, e fazer uma ou duas regras para identificá-los (talvez usar o prefixo MAC Endereço em combinação com portas abertas, por exemplo). Você não terá muita informação, mas saberá que estão na rede, o que são, e quando a última vez que foram vistos foi. Você também vai ver se algo novo aparece na rede.';

$GLOBALS["lang"]['What do we send?'] = 'O que enviamos?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'O que isso realmente significa para você?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Qual é o propósito desta prateleira?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Qual é o tipo deste lugar. Tipos permitidos mantidos em <code>attributes</code> mesa.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Quando o Open-AudIT no Linux descobre uma máquina Windows, para executar um comando remoto que usamos';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Quando Open-AudIT no Windows descobre uma máquina Windows, para executar um comando remoto que usamos';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Quando Open-Aud A TI recebe dados sobre um dispositivo, seja descobrindo o dispositivo durante uma auditoria ou pelo usuário que importa o dispositivo, ele deve determinar se este dispositivo descoberto corresponde a um dispositivo que já existe em seu banco de dados, ou se é um novo dispositivo que deve ser adicionado. Open-AudIT usa uma série de 12 jogos de propriedade para determinar isso. As regras de jogo funcionam como comparações, não e. Isso significa que a primeira regra que combina um campo no dispositivo descoberto com um no dB resolve como um dispositivo existente. Todas as regras de jogo têm que falhar para que um dispositivo seja novo e resulte em um novo recorde sendo criado.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Quando postar dados, você deve incluir um token de acesso. Um token de acesso é gerado com cada tipo de pedido, então faça um GET (por exemplo) e aceite: aplicativo/json, analise a resposta para meta→access_token, e inclua isso com seu pedido. Isso deve ser colocado nos dados de campo, ou seja, no nível superior.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Quando um dispositivo é descoberto o script de auditoria será injetado com os detalhes do arquivo (ou diretório). Ambos audit_linux.sh e audit_windows.vbs serão povoados, independentemente do caminho do arquivo. Se você está pensando <i>Mas colocar um caminho Linux em uma máquina Windows vai quebrar as coisas!</i>, ele não vai quebrar, você só não vai receber quaisquer dados desse arquivo ou entrada de diretório.<br/>Os detalhes recuperados serão armazenados no <i>arquivo</i> tabela de banco de dados e são armazenados como qualquer outro atributo. Os detalhes dos arquivos serão armazenados como qualquer outro atributo e gerarão alertas se algum dos seguintes atributos mudar. <i>full_name</i>, <i>Haxixe</i>, <i>inode</i>, <i>Última mudança</i>. A tabela contém um system_id, primeiro_visto, último_visto e colunas atuais, bem como os detalhes do arquivo.<br/>Os atributos registrados são:<br/><ul><li>Windows - nome, tamanho, diretório, hash SHA1 (do conteúdo do arquivo), última alteração, permissões, proprietário, versão (arquivo permitindo).</li><br/><li>Linux - nome, tamanho, diretório, hash SHA1 (do conteúdo do arquivo), última alteração, meta dados alterados, permissões, proprietário, grupo, inode.</li></ul>Você verá uma seção nos scripts de auditoria Windows e Linux como abaixo.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Quando uma descoberta é executada, a opção de varredura relevante é escolhida e essas configurações são usadas pelo Nmap para escanear os dispositivos alvo. As opções de varredura determinam quais portas nmap scans, quão rápido eles escaneiam e se o nmap ping é usado para determinar se o IP está ao vivo ou não.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Quando uma descoberta é executada, a opção de varredura relevante é escolhida e as configurações usadas pelo Nmap para escanear os dispositivos alvo. Se nenhum conjunto de opções for escolhido, o item de configuração padrão (descovery_default_scan_option) é selecionado e usado. Open-AudIT Community usará as opções padrão conforme a configuração para todas as descobertas.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Quando uma descoberta da sub-rede é executada, ela é executada pela primeira vez, se selecionada, uma varredura de ping Nmap no intervalo ou endereços IP. Qualquer dispositivo que responder será escaneado. Se uma varredura de ping não for solicitada, cada IP é digitalizado individualmente. Que portos? Isso é determinado pelo';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Ao auditar um dispositivo Linux via SSH, algumas distribuições Linux não permitem que comandos sudo sejam passados sem um TTY (o que estamos fazendo). Para auditar completamente uma dessas distribuições linux é melhor fornecer as credenciais de usuário raiz. Se nenhuma raiz é fornecida e sudo sem um TTY não é possível, o script de auditoria será executado mas não conterá a quantidade de dados como seria de outra forma. Auditorias posteriores usando root (ou executado localmente usando sudo) fornecerão detalhes extras sobre o sistema e gerarão vários <i>Mudanças</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Ao combinar dispositivos, qual sistema é a fonte autorizada de informação.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Quando terminar, feche a janela de comando e você está acabado!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Ao criar um widget, se você selecionar o <i>Avançado.</i> botão você terá a capacidade de carregar seu próprio SQL personalizado.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Ao integrar dispositivos do sistema externo, se o dispositivo não existe em Open-AudIT devemos criá-lo?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Ao integrar dispositivos do sistema externo, se o dispositivo foi atualizado no sistema externo devemos atualizá-lo em Open-AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Ao investigar uma Discovery, o apoio solicitará os Diários Exportados. Para recuperar isso, vá para o menu -> Descobertas';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Ao combinar um dispositivo baseado em Linux, preferimos usar o Dbus id concatenado com o nome do host. Também podemos usar outras opções de acordo com a tabela abaixo, mas podemos recuperar o Dbus ID sem raiz. Para recuperar o UUID (da placa-mãe), precisamos executar o dmidecode, que requer raiz. Infelizmente, quando você clona um convidado do ESXI, o Dbus ID não é recriado, daí nossa concatenação com o nome do hospedeiro. Há um bom artigo relacionado aqui que detalha o <i>Por quê?</i> de identidades de hardware.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Ao solicitar JSON, por padrão, nenhum limite é definido. Ao solicitar tela, o limite é de 1000 por padrão. Isso pode ser alterado na configuração. Veja o <i>Tamanho da página</i> item';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Quando recuperarmos um dispositivo externo, devemos procurar por ele?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Ao executar Open-AudIT no Windows a conta de serviço Apache deve ser a de um <i>regular</i> usuário (ou administrador). Isso é porque... <i>Sistema Local</i> Conta normalmente usada para executar Apache não tem acesso a nenhum recurso de rede. Não podemos usar o Apache como conta do Sistema Local para copiar o script de auditoria para PCs Windows.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Quando a opção de configuração é definida, levamos isso em conta para dispositivos para um determinado subconjunto definido de regras de jogo onde o item de configuração foi ativado. Essas regras são:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Quando as regras forem descobertas, as regras correspondentes aparecerão no registro de descobertas. Veja abaixo como exemplo.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Quando esta referência estiver programada para ser executada. Derivado do associado <code>tasks.type</code> e <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Quando este tronco foi criado.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Quando este item da fila começou a processar.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Ao usar Open-AudIT Professional ou Enterprise, widgets estão disponíveis e personalizáveis para serem exibidos em painéis.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Quando estamos convertendo um dispositivo selecionado internamente para um objeto para o sistema externo, quais seriam os dados externos. EG: inteiro, corda, etc.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Quando executarmos essa linha de base, devemos checar itens em dispositivos que não estão em uma política para essa linha de base.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Quando recebermos um porto aberto, devemos tentar testar a versão do serviço que está em cima dele? Isso ajuda a confirmar os serviços reais.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Quando você estiver usando Nuvens para descobrir suas instâncias Amazon AWS, você precisará de dois itens de credencial - chave e chave secreta. Sua chave já deveria ser conhecida por você e sua chave secreta também. Note-se que você não pode recuperar sua chave secreta usando a Consola AWS fornecida pela Amazon. Se você o perdeu, precisará gerar um novo.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Quando você estiver usando Clouds para descobrir suas instâncias da Microsoft Azure, você precisará de quatro itens de credencial - identidade de assinatura, identidade de inquilino, identidade de cliente e segredo de cliente.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Quando você cria uma descoberta, você tem uma opção para dispositivos designados para_org. Isso significa que qualquer dispositivo descoberto para esta descoberta será atribuído <code>devices.org_id</code> Pronto para) sua organização escolhida.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Quando você cria uma nova descoberta se você clicar no botão Avançado, você tem muitas outras opções para mudar, uma delas é o tipo de descoberta. Os tipos sempre foram Subnet (compondo o intervalo acima, subnet, opções IP) e Active Directory. Como na v4.1, Open-AudIT tem um novo tipo de descoberta chamado Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Quando você permite que uma Consulta seja executada em um horário, a consulta é enviada para o seu endereço escolhido. Você deve ter configurado e-mail através do menu -> Admin. Enterprise -> Email Config. Nós também temos um <i>E-mail de teste<i> Botão nessa página. Coloque seus detalhes, guarde e teste. Você deve ter uma caixa modal que te informa se foi bem ou não e obviamente um e-mail de teste deve chegar se for bem sucedido. Uma vez configurado o e-mail, sua consulta agendada pode ser configurada.<br/><br/>Dê um nome, descrição opcional, escolha. <i>Consulta</i> Digite, selecione a consulta desejada, forneça um endereço de e-mail, escolha um formato e defina o cronograma.<br/><br/>Forneça uma hora (somente hora, sem minutos até agora), dê um nome à tarefa (este não é o nome da consulta agendada propriamente dita), selecione quais dias você gostaria de executar a consulta, escolha qual consulta você gostaria de executar, forneça um endereço de e-mail e escolha um formato de consulta e você está pronto.<br/>As consultas serão enviadas com um corpo de e-mail da consulta (em formato html) e a consulta anexada no formato solicitado.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Quando você digita texto em um dos cabeçalhos da coluna, você pode simplesmente usar uma palavra normal. Por exemplo, quando você entra <code>computer</code> na caixa de busca acima da <i>Tipo</i> coluna, a busca retornará todos os dispositivos com o tipo de computador. Essencialmente, Open-Aud A TI pede dados usando uma URL como <code>devices?devices.type=computer</code>. Agora há uma diferença significativa ao usar as tabelas de dados busca, versus o padrão';

$GLOBALS["lang"]['where'] = 'Onde?';

$GLOBALS["lang"]['Where'] = 'Onde?';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Onde $x é um número. Essas entradas LDAP estão no DB e foram recuperadas.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Onde na tela dos detalhes do dispositivo você gostaria de ver este campo aparecer.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Onde o rack está na fila.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Se a vulnerabilidade afeta componentes além dos seus usando Impacto, Disponibilidade e Confidencialidade.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Se a interação do usuário é necessária (nenhuma, passiva, ativa).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'A qual sistema operacional se aplica essa referência.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Que dispositivos devem Open-AudIT criar a partir do sistema externo (se houver). Usando tudo, nenhum ou um determinado atributo.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Que rede devemos descobrir? Isso deve ser no formato de';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Em qual submenu devemos mostrar esta consulta.';

$GLOBALS["lang"]['Who made this rack.'] = 'Quem fez esta prateleira.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Por que só o Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Por que excluímos essa política?';

$GLOBALS["lang"]['Wide Area Network'] = 'Rede de Ampla Área';

$GLOBALS["lang"]['Wide area network'] = 'Rede de área ampla';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget #';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Tipo de Widget';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgets são projetados para serem usados em painéis. Usuários corporativos têm total liberdade para criar, atualizar e excluir widgets conforme necessário.';

$GLOBALS["lang"]['width'] = 'Largura';

$GLOBALS["lang"]['Width'] = 'Largura';

$GLOBALS["lang"]['windows'] = 'Janelas';

$GLOBALS["lang"]['Windows'] = 'Janelas';

$GLOBALS["lang"]['Windows Packages'] = 'Pacotes Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Programa de Teste do Windows';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Unidade de Trabalho do Usuário do Windows #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Unidade de Trabalho do Usuário do Windows #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'As janelas também podem ter bloqueado o serviço. No alvo iniciar o applet de segurança do Windows e garantir que o executável WinExeSvc é autorizado a executar (clique em Permitir no dispositivo e, em seguida, Iniciar ações).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Página Winexe em Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe requer que os seguintes serviços do Windows sejam iniciados e executados: serviços netlogon e rpc para serem executados.<br/><br/>Por favor, entre na máquina do Windows e verifique se o netlogon e o rpc estão funcionando.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe usa o administrador$ e RPC (início de serviço de rede) para instalar e iniciar um serviço remoto (winexesvc). Este serviço inicializa um pipe chamado que é usado para transportar comandos do servidor Open-AudIT para o alvo e a saída no sentido inverso. Quando terminado, o tubo nomeado fecha e o winexesvc espera por mais conexões ou desinstalações (dependendo das opções dadas).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Rede local sem fio';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Com a versão 3.3.0 do Open-AudIT introduzimos o conceito de um cluster. Isto intuitivamente mapeia a ideia de um cluster web, banco de dados ou cluster de arquivos (ou um de vários outros propósitos) em um determinado tipo (alta disponibilidade, redundância, escala, etc).<br/><br/>Dependendo do propósito do cluster escolhido, o relatório será ligeiramente diferente.<br/><br/>Por exemplo, se você criar um cluster com um propósito de virtualização, quando você adicionar dispositivos a ele, você também verá as máquinas virtuais nesses dispositivos.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Com a introdução do recurso Clouds, você pode fornecer detalhes de sua nuvem, Amazon AWS ou Microsoft Azure, e Open-AudIT usará a API relevante para recuperar uma lista de locais, redes e instâncias, e descobrir cada uma dessas instâncias.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Falhou';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Falhou';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi timeout';

$GLOBALS["lang"]['workgroup'] = 'Grupo de trabalho';

$GLOBALS["lang"]['Workgroup'] = 'Grupo de trabalho';

$GLOBALS["lang"]['Working Credentials'] = 'Credenciais de trabalho';

$GLOBALS["lang"]['Wrap Up'] = 'Terminar';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Escrito na linguagem de script PHP.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Consulta Amarela';

$GLOBALS["lang"]['Yemen'] = 'Iêmen';

$GLOBALS["lang"]['Yes'] = 'Sim.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Você é capaz de definir diretórios extras para serem digitalizados como entradas na coleção Executáveis. Quando definido, o diretório e todos os sub-diretórios são digitalizados para arquivos que são executáveis. Você também pode definir diretórios e arquivos a serem excluídos. Quando ativados, estes são injetados no script de auditoria linux e executados sempre que são executados (geralmente como parte de uma descoberta). Se quiser isso em um script, pode copiar manualmente para o alvo, use o menu -> Descubra -> Scripts -> List Scripts e baixe o script de lá.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Você é sempre livre para modificar os roteiros de auditoria para atender suas necessidades específicas. Você vai precisar (re)incorporar essas alterações sempre que você atualizar como eles serão substituídos pelos scripts padrão. Eu sugiro salvar uma cópia mestre do seu script modificado, atualizar Open-AudIT, em seguida, executar uma diferença entre o novo script padrão e seu script modificado e aplicar as diferenças. Os scripts de auditoria são scripts nativos (Windows é VBScript, todos os outros são Bash). Simples e fácil de modificar. Certifique-se de ter uma cópia de suas alterações antes de atualizar.';

$GLOBALS["lang"]['You are running version'] = 'Você está executando a versão';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Você pode acessar a coleção usando a API normal do Open-AudIT JSON. Como qualquer outra coleção. Por favor, veja.';

$GLOBALS["lang"]['You can also'] = 'Você também pode.';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Você também pode ver na parte inferior da página uma tabela mostrando os dispositivos que as mudanças serão aplicadas.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Você também pode especificar propriedades usando o formato abaixo.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Você sempre pode executar a primeira onda VM em sua infraestrutura virtual (ESX, Azure, et al). A primeira onda VM roda Debian Linux e está livre de problemas e limitações de licenciamento do sistema operacional. Ou instalar em seu próprio Linux distro da escolha. Apoiamos Redhat 9, Ubuntu 20.04, 22.04 e 24.04, bem como Debian 11 e 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Você pode atribuir dispositivos a uma localização usando automaticamente';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Você pode atribuir dispositivos usando personalizado';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Você pode auditar uma máquina remota sem usar a conta de administrador real criando uma chave de registro. Crie a chave abaixo em cada máquina a ser auditada e certifique-se de que as credenciais de usuário usadas sejam um membro do grupo Administradores.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Você certamente pode executar uma descoberta sem quaisquer credenciais válidas nos dispositivos dentro da rede, no entanto, a informação recuperada será um subconjunto muito pequeno do que Open-AudIT tem a capacidade de recuperar <i>com</i> Credenciais.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Você pode criar uma linha de base, executá-la contra um grupo de dispositivos e visualizar os resultados, adicionar execução agendada, adicionar mais tabelas para comparação (atualmente apenas software, portas de netstat e usuários estão habilitados), no lugar edição de linha de base, arquivamento de resultados e muito mais.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Você pode criar um script com todas as opções para qualquer um dos scripts de auditoria existentes - não apenas Windows. AIX, ESX, Linux, OSX e Windows estão todos cobertos.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Você pode personalizar toda a integração até qual sistema (NMIS ou Open-AudIT) é a autoridade em uma base de campo. Existem opções para criar e/ou atualizar dispositivos em Open-AudIT ou NMIS. Devemos executar uma descoberta em um dispositivo criado ou atualizado e muito mais. Há explicações para cada item do lado direito da página.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Você pode definir uma aplicação e associar um dispositivo a esta aplicação. Um dispositivo pode estar associado a mais de uma aplicação. Uma aplicação pode estar associada a mais de um dispositivo.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Você pode editar o valor do Campo Adicional para cada dispositivo na página de detalhes do dispositivo. Veja a tela de detalhes do dispositivo, abra a seção contendo o campo e';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Você pode limitar a Descoberta de Semente de Dispositivo para se enquadrar em um conjunto restrito de parâmetros, incluindo: <i>Restrição à Subnet</i> e <i>Restrição ao soldado</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Você pode atribuir dispositivos manualmente usando';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Você pode sobrepor isso fornecendo a opção de formato na URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Você pode selecionar dispositivos individuais clicando em suas caixas de seleção no lado direito ou selecionando todos os dispositivos clicando na caixa de seleção no canto superior direito da tabela (debaixo do botão Editar que se parece com um lápis).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Você pode selecionar os dispositivos a serem integrados escolhendo qualquer atributo na tabela do sistema (dispositivo) e correspondência (ver menu → Admin → Banco de dados → Lista tabelas → sistema para uma lista de campos). Uma combinação de atributos só pode corresponder a um único valor.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Você pode transformar qualquer servidor em um colecionador indo para o menu -> Admin. Colecionadores -> Faça isto instalar um coletor. Você precisará de credenciais para acessar o servidor que esta instalação irá reportar.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Você pode ver clicando no ícone da vista azul. Você também pode editar ou excluir se tiver permissões.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Você não tem a extensão PHP MBString instalada. Esta extensão é necessária.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Você não tem a extensão PHP SNMP instalada. Esta extensão é altamente recomendada.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Você pode querer copiar e colar esta URL em um e-mail para sua equipe.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Você pode querer ter Active Directory ou OpenLDAP autenticar seus usuários, mas não fornecer autorização. Para fazer isso, certifique-se <i>Use para autenticação</i> Está definido para Y e <i>Uso para papéis</i> Está definido para N. As credenciais serão validadas pelo LDAP, mas você precisará ter o usuário já criado e atribuído papéis em Open-AudIT. Isso também. <i>automaticamente</i> se aplica a';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Você deve ter notado que essas regras de jogo são para itens que podem não ser globalmente únicos. Alguns exemplos:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Você deve excluir sua licença existente antes de adicionar uma nova licença.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Você deve ter credenciais SSH para executar uma referência. Os seguintes sistemas operacionais são atualmente suportados: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Planejamos expandir com mais lançamentos.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Você deve copiar e colar todo o arquivo na caixa de texto. No caso abaixo, copie todo o texto.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Você não deve incluir os campos editados e editados. Estes serão automaticamente ajustados.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Você só deve mudar a segunda frase do texto, o';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Você deve substituir a coluna necessária (por exemplo, org_id) por ATTRIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Você deve usar uma linha de cabeçalho contendo os nomes das colunas que deseja preencher, então suas linhas de dados abaixo disso.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Você deve usar apenas aquelas tabelas que contêm atributos que você precisa. Costumo usar uma junta à esquerda. Por exemplo';

$GLOBALS["lang"]['You will need a'] = 'Você vai precisar de um';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Você precisará das portas para WMI no firewall do Windows aberto em cada computador Windows alvo. Para janelas Servidores centrais, certifiquem-se de permitir as conexões de firewall.';

$GLOBALS["lang"]['You will see a list of'] = 'Você verá uma lista de';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutoriais do YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Sua chave AWS EC2 API.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Seu Google Compute credenciais como JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Seu. Host é';

$GLOBALS["lang"]['Your Licenses'] = 'Suas licenças.';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Sua identidade de cliente da Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Seu cliente secreto da Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Sua assinatura da Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Sua identidade da Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your PHP version is'] = 'Sua versão PHP é';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Seu SQL para selecionar atributos que irão preencher esta consulta.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Seu SQL para selecionar dispositivos que irão povoar este grupo.';

$GLOBALS["lang"]['Your SSH key.'] = 'Sua chave SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Suas credenciais de acesso, conforme a API nativa.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Seus dados são seus dados. Pode extrair quando quiser. Nós até fornecemos as exportações para CSV, JSON e XML. E temos uma API JSON. E você pode escrever relatórios personalizados e ter essas saídas em CSV, XML e JSON! Mais uma vez, são seus dados, não mais ninguém. Pode estar confiante que a segurança de seus dados está em suas mãos.';

$GLOBALS["lang"]['Your database platform is'] = 'Sua plataforma de banco de dados é';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Sua descrição do status desta conexão (provisionada, aposentada, etc.)';

$GLOBALS["lang"]['Your description of this item.'] = 'Sua descrição deste item.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Seu nome genérico para este software.';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Sua versão genérica para este software.';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Seu usuário deve agora ser capaz de logon clicando no <i>Logon com Entra</i> botão na página de logon Open-AudIT. Como mencionado acima, se o logn falhar, verifique o arquivo de registro e verifique os usuários. <i>Nome de usuário preferido</i>.<br/><br/>E isso deve ser tudo o que há. Agora seus usuários devem ter um conjunto a menos de credenciais para lembrar!<br/><br/>Como sempre, se você tiver problemas com esse recurso, por favor envie um e-mail.';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Seu usuário deve agora ser capaz de logon clicando no <i>Logon com OKTA</i> botão na página de logon Open-AudIT. Como mencionado acima, se o logn falhar, verifique o arquivo de registro e verifique os usuários. <i>Nome</i>.<br/><br/>E isso deve ser tudo o que há. Agora seus usuários devem ter um conjunto a menos de credenciais para lembrar!<br/><br/>Como sempre, se você tiver problemas com esse recurso, por favor envie um e-mail.';

$GLOBALS["lang"]['Your web server is'] = 'Seu servidor web é';

$GLOBALS["lang"]['Zambia'] = 'Zâmbia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabué';

$GLOBALS["lang"]['a String'] = 'Uma corda';

$GLOBALS["lang"]['active'] = 'ativo';

$GLOBALS["lang"]['active directory'] = 'diretório ativo';

$GLOBALS["lang"]['active/active'] = 'ativo/ativo';

$GLOBALS["lang"]['active/passive'] = 'ativo/passivo';

$GLOBALS["lang"]['advertisement'] = 'Publicidade';

$GLOBALS["lang"]['alert'] = 'Alerta.';

$GLOBALS["lang"]['all'] = 'Todos';

$GLOBALS["lang"]['allocated'] = 'Atribuído';

$GLOBALS["lang"]['amazon'] = 'amazona';

$GLOBALS["lang"]['an Integer'] = 'Um Inteiro';

$GLOBALS["lang"]['and'] = 'e';

$GLOBALS["lang"]['and / or'] = 'e / ou';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'e um ticket de suporte será criado e acionado.';

$GLOBALS["lang"]['and another'] = 'e outro';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'e baixar o auto-instalador da última versão. Talvez precise descer a página para encontrá-la.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'e vá para Aplicações -> Aplicações Corporativas (menu à esquerda), em seguida, clique <i>Novo aplicativo</i>.';

$GLOBALS["lang"]['and its current time is'] = 'E sua hora atual é';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'e procura uma data de validade antes de hoje.';

$GLOBALS["lang"]['and review what is possible.'] = 'e rever o que é possível.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'E o redirecionamento da URI';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'E as linhas finais provavelmente serão mais interessantes. Essas linhas devem dar o ponto exato em que o login falhou.';

$GLOBALS["lang"]['antivirus'] = 'Antivirus';

$GLOBALS["lang"]['application'] = 'Aplicação';

$GLOBALS["lang"]['approved'] = 'aprovado.';

$GLOBALS["lang"]['are required.'] = 'são necessários.';

$GLOBALS["lang"]['are used.'] = 'são usados.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'como um dispositivo respondendo nesta porta.<br/>Isso causou problemas em alguns clientes onde firewalls respondem em nome de um dispositivo não existente, e, portanto, causam detecção de dispositivo falso positivo. Agora temos este atributo disponível para definir por varredura.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'como ponto de referência e filtra todas as máquinas virtuais através de uma verificação do sistema. Campo em série para VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'Assumindo que trabalho e cliente povoaram o DNS';

$GLOBALS["lang"]['attribute'] = 'atributo';

$GLOBALS["lang"]['auto'] = 'Auto';

$GLOBALS["lang"]['backup'] = 'Apoio';

$GLOBALS["lang"]['banned'] = 'Proibido.';

$GLOBALS["lang"]['blog'] = 'blogue';

$GLOBALS["lang"]['blue'] = 'Azul';

$GLOBALS["lang"]['bottom'] = 'fundo';

$GLOBALS["lang"]['building'] = 'construção';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'pode ser usado para autenticação do usuário (é o nome do usuário e senha correta) bem como autorização do usuário (que papéis e orgs um usuário tem).<br/><br/>Se um usuário não está no LDAP configurado, mas está no Open-AudIT (por exemplo: <i>admin</i> O Open-AudIT vai voltar a usar-se para autenticação e autorização.<br/><br/>Open-Aud. Ela usa grupos específicos de LDAP para papéis e orgs. Um usuário deve ser um membro direto desses grupos para que o Open-AudIT determine o acesso dos usuários.<br/><br/>Quando configurado corretamente, o uso do LDAP pode remover completamente a necessidade de criar usuários em Open-AudIT. Basta configurar Open-AudIT para usar LDAP para autenticação e autorização. Se o usuário não existe em Open-AudIT, mas existe em LDAP e suas credenciais estão corretas e eles são um membro dos grupos necessários Open-AudIT irá criar a conta de usuário automaticamente.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'Agora pode recuperar detalhes sobre um arquivo ou diretório de arquivos e monitorar esses arquivos para alterações como por outros atributos no banco de dados Open-AudIT. Este recurso funciona fora da caixa para servidores Linux Open-AudIT, mas precisa de uma mudança no nome da conta de serviço sob um servidor Windows Open-AudIT. Clientes suportados são Windows e Linux.';

$GLOBALS["lang"]['changed'] = 'mudada.';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'Escolhido. De lá, se uma porta para WMI, SSH ou SNMP é detectada respondendo o dispositivo é mais procurado usando ';

$GLOBALS["lang"]['cloud'] = 'Nuvem';

$GLOBALS["lang"]['code'] = 'Código';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'Coleções e páginas de detalhes é um ícone a ser executado.';

$GLOBALS["lang"]['collector'] = 'Colecionador';

$GLOBALS["lang"]['collectors'] = 'Colecionadores';

$GLOBALS["lang"]['column'] = 'coluna';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'coluna conterá qualquer um <i>Sim.</i> ou <i>n</i>. Isso indica se esta linha está presente no dispositivo. Por exemplo, software pode ser instalado (o que resultaria em <i>Software.current = y</i>), mas em uma auditoria posterior pode não ser detectado. Open-AudIT então mudará esse atributo atual para <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'coluna. O';

$GLOBALS["lang"]['compute'] = 'Computação';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'console';

$GLOBALS["lang"]['contains'] = 'contém';

$GLOBALS["lang"]['create'] = 'criar';

$GLOBALS["lang"]['created'] = 'criado';

$GLOBALS["lang"]['credentials'] = 'Credenciais';

$GLOBALS["lang"]['critical'] = 'crítico';

$GLOBALS["lang"]['cve'] = 'CVE';

$GLOBALS["lang"]['database'] = 'banco de dados';

$GLOBALS["lang"]['debug'] = 'depurar';

$GLOBALS["lang"]['delegated'] = 'Delegado';

$GLOBALS["lang"]['delete'] = 'deletar';

$GLOBALS["lang"]['deleted'] = 'deletado';

$GLOBALS["lang"]['denied'] = 'Negado.';

$GLOBALS["lang"]['details'] = 'detalhes';

$GLOBALS["lang"]['devices'] = 'Dispositivos';

$GLOBALS["lang"]['digitalocean'] = 'Digitalocean';

$GLOBALS["lang"]['discoveries'] = 'descobertas';

$GLOBALS["lang"]['documentation for further details.'] = 'documentação para mais detalhes.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'Sim. <strong>Não.</strong> fornecer relatórios de vulnerabilidade para o seguinte:';

$GLOBALS["lang"]['does not equal'] = 'Não é igual.';

$GLOBALS["lang"]['emergency'] = 'Emergência.';

$GLOBALS["lang"]['entra'] = 'entre';

$GLOBALS["lang"]['equals'] = 'igual';

$GLOBALS["lang"]['error'] = 'Erro';

$GLOBALS["lang"]['established'] = 'estabelecida';

$GLOBALS["lang"]['excluded'] = 'Excluído';

$GLOBALS["lang"]['expired'] = 'expirado.';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'Extremo - sem o qual, a organização falharia.

Funções essenciais para a sobrevivência das organizações e devem ser restauradas imediatamente.

Funções importantes que devem ser restauradas rapidamente, mas podem ter um tempo de recuperação um pouco maior.

Funções que são necessárias, mas podem tolerar mais tempo de inatividade.

funções não essenciais que podem ser adiadas sem impacto significativo.

O padrão até ser definido.';

$GLOBALS["lang"]['fail'] = 'Falhar.';

$GLOBALS["lang"]['false'] = 'Falso';

$GLOBALS["lang"]['file'] = 'arquivo';

$GLOBALS["lang"]['firewall'] = 'firewall';

$GLOBALS["lang"]['first'] = 'Primeiro.';

$GLOBALS["lang"]['fixed'] = 'Consertado.';

$GLOBALS["lang"]['floor'] = 'piso';

$GLOBALS["lang"]['for'] = 'porque';

$GLOBALS["lang"]['for authentication'] = 'para autenticação';

$GLOBALS["lang"]['for this information.'] = 'para esta informação.';

$GLOBALS["lang"]['from Audit Script Result'] = 'Resultado do script de auditoria';

$GLOBALS["lang"]['from NMIS'] = 'DE NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'do endereço LocalHost (Usando LRPC) correndo no recipiente de aplicação';

$GLOBALS["lang"]['front'] = 'Frente';

$GLOBALS["lang"]['front-left'] = 'frente-esquerda.';

$GLOBALS["lang"]['front-right'] = 'frente-direita';

$GLOBALS["lang"]['github'] = 'Github.';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'maior ou igual';

$GLOBALS["lang"]['greater than'] = 'maior que';

$GLOBALS["lang"]['group'] = 'Grupo';

$GLOBALS["lang"]['has not been set'] = 'Não foi definido.';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'Tem um IP resolvível para o PC do Windows.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'ter a habilidade de ser executado. No...';

$GLOBALS["lang"]['head'] = 'Cabeça.';

$GLOBALS["lang"]['here'] = 'Aqui.';

$GLOBALS["lang"]['high availability'] = 'Alta disponibilidade.';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Se você clonar uma máquina virtual Linux, a menos que você regenere manualmente isso (e na minha experiência, as pessoas não) continuará a mesma.';

$GLOBALS["lang"]['ignored'] = 'ignorada';

$GLOBALS["lang"]['import the example device data'] = 'Importar o exemplo de dados do dispositivo';

$GLOBALS["lang"]['in'] = 'Em';

$GLOBALS["lang"]['in Enterprise.'] = 'Na Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Em Entradas pode ter os seguintes valores.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'Em Saídas pode ter os seguintes valores.';

$GLOBALS["lang"]['inactive'] = 'inativo';

$GLOBALS["lang"]['incomplete'] = 'incompleta.';

$GLOBALS["lang"]['info'] = 'Informação';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'O instalador irá testar a presença de Nmap em seus locais de instalação padrão de';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, texto, bool (y/n), etc';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'É padrão americano mantido pelo Instituto Nacional de Padrões e Tecnologia';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'é um padrão internacional para gerenciar a segurança da informação. Fornece uma estrutura para estabelecer, implementar, manter e melhorar continuamente um Sistema de Gestão de Segurança da Informação (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'é baseado em';

$GLOBALS["lang"]['is licensed to'] = 'é licenciado para';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'é o próximo da lista e Open-AudIT pode usar senha e autenticação de chaves. Open-AudIT também pode usar um usuário habilitado sudo em oposição ao uso root diretamente (embora também possa usar root). Para melhores resultados, o usuário raiz ou um usuário habilitado sudo deve ser usado (ver Auditoria Linux sem configuração de cliente raiz e alvo no wiki). Os dispositivos Windows também podem executar ssh, no entanto, se Open-AudIT detectar isso, irá parar as consultas SSH e em vez disso usar WMI (assumindo credenciais WMI funcionando).';

$GLOBALS["lang"]['is the link to the'] = 'é a ligação com o';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'item para ver as tabelas específicas e suas colunas. Isso permitirá que você encontre exatamente o que precisa, ao invés de arrastar através do console MySQL do roteiro de criação de esquemas.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'Chave necessária para recuperar lat/long e mostrar mapa. Veja';

$GLOBALS["lang"]['left'] = 'esquerda';

$GLOBALS["lang"]['less or equals'] = 'menor ou igual.';

$GLOBALS["lang"]['less than'] = 'Menos do que';

$GLOBALS["lang"]['license'] = 'Licença';

$GLOBALS["lang"]['licenses'] = 'Licenças';

$GLOBALS["lang"]['like'] = 'Como';

$GLOBALS["lang"]['line'] = 'Linha';

$GLOBALS["lang"]['list'] = 'lista';

$GLOBALS["lang"]['list View, using the Create button'] = 'list View, usando o botão Criar';

$GLOBALS["lang"]['load balancing'] = 'balanceamento de carga';

$GLOBALS["lang"]['location'] = 'Localização';

$GLOBALS["lang"]['locations'] = 'Locais';

$GLOBALS["lang"]['managed'] = 'Gerenciado.';

$GLOBALS["lang"]['methods'] = 'métodos';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'Ponto de montagem';

$GLOBALS["lang"]['must'] = 'Deve';

$GLOBALS["lang"]['network'] = 'Rede';

$GLOBALS["lang"]['news'] = 'Notícias';

$GLOBALS["lang"]['no'] = 'Não.';

$GLOBALS["lang"]['node'] = 'nó';

$GLOBALS["lang"]['none'] = 'Nenhum';

$GLOBALS["lang"]['normal'] = 'normal';

$GLOBALS["lang"]['not applicable'] = 'não aplicável.';

$GLOBALS["lang"]['not in'] = 'Não em';

$GLOBALS["lang"]['not like'] = 'Não como';

$GLOBALS["lang"]['notice'] = 'Note.';

$GLOBALS["lang"]['notification'] = 'Notificação';

$GLOBALS["lang"]['okta'] = 'Okta.';

$GLOBALS["lang"]['on devices where'] = 'em dispositivos onde';

$GLOBALS["lang"]['openldap'] = 'Openldap';

$GLOBALS["lang"]['optimized'] = 'Otimizado.';

$GLOBALS["lang"]['optionally '] = 'Opcionalmente. ';

$GLOBALS["lang"]['or'] = 'ou';

$GLOBALS["lang"]['or the GitHub page at'] = 'Ou a página GitHub em';

$GLOBALS["lang"]['other'] = 'outro';

$GLOBALS["lang"]['package'] = 'Pacote';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'Page. Exportar seu servidor LDAP do menu -> Admin. Servidores LDAP -> Detalhes para JSON e salvar e incluir esses dados também.';

$GLOBALS["lang"]['partition'] = 'partição';

$GLOBALS["lang"]['pass'] = 'Passe.';

$GLOBALS["lang"]['pending'] = 'Esperando';

$GLOBALS["lang"]['performance'] = 'performance';

$GLOBALS["lang"]['performed'] = 'Realizado';

$GLOBALS["lang"]['permission'] = 'Permissão';

$GLOBALS["lang"]['permissions required per endpoint'] = 'Permissões necessárias por ponto final.';

$GLOBALS["lang"]['pie'] = 'Torta.';

$GLOBALS["lang"]['planning'] = 'planejamento';

$GLOBALS["lang"]['predictable'] = 'previsível.';

$GLOBALS["lang"]['query'] = 'Consulta';

$GLOBALS["lang"]['rear'] = 'atrás';

$GLOBALS["lang"]['rear-left'] = 'para trás-esquerda';

$GLOBALS["lang"]['rear-right'] = 'traseira-direita';

$GLOBALS["lang"]['regex'] = 'Regex.';

$GLOBALS["lang"]['release'] = 'Soltar';

$GLOBALS["lang"]['removed from display, but has been set'] = 'Foi removido da tela, mas foi definido.';

$GLOBALS["lang"]['reserved'] = 'Reservado';

$GLOBALS["lang"]['right'] = 'Certo.';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'Pode clicar no valor do campo para editá-lo.';

$GLOBALS["lang"]['role'] = 'Papel';

$GLOBALS["lang"]['room'] = 'Quarto';

$GLOBALS["lang"]['row'] = 'Reme.';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'O serviço não começou devido ao seguinte erro:';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Então Open-AudIT sabe restringir sua consulta aos Orgs apropriados.';

$GLOBALS["lang"]['stand-alone'] = 'stand-alone';

$GLOBALS["lang"]['standard'] = 'padrão';

$GLOBALS["lang"]['starts with'] = 'Começa com';

$GLOBALS["lang"]['storage'] = 'Armazenamento';

$GLOBALS["lang"]['subnet'] = 'Subrede';

$GLOBALS["lang"]['table'] = 'mesa';

$GLOBALS["lang"]['table and insert the original rows.'] = 'mesa e inserir as linhas originais.';

$GLOBALS["lang"]['team'] = 'time';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'Mensagem. O primeiro é o índice de matriz e deve ser deixado como está. O índice é usado nos modelos para procurar o texto traduzido.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'Então clique no botão de detalhes para a mesa.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'Então clique no botão de detalhes para a mesa. Os detalhes do dispositivo estão armazenados no';

$GLOBALS["lang"]['timestamp'] = 'Timetamp';

$GLOBALS["lang"]['to'] = 'para';

$GLOBALS["lang"]['to create an item of this type'] = 'para criar um item deste tipo';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'Para a URL, você receberá a entrada completa do banco de dados, incluindo todas as tabelas de componentes, de um determinado dispositivo.';

$GLOBALS["lang"]['to the user'] = 'para o usuário';

$GLOBALS["lang"]['top'] = 'Topo';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'Altamente secreto, classificação militar/governo. Divulgação causaria grande perigo à segurança nacional.

Segredo - Classificação militar / governamental. A divulgação causaria sérios danos à segurança nacional.

confidencial - Classificação militar/governo e setor privado. Dados confidenciais incluem segredos comerciais, dados intelectuais, código de programação de aplicativos, e outros dados que podem afetar seriamente a organização se a divulgação não autorizada ocorrer. Os dados neste nível estariam disponíveis apenas para o pessoal da organização cujas necessidades de trabalho, ou estão diretamente relacionadas, aos dados acessados. Acesso a dados confidenciais geralmente requer autorização para cada acesso.

Classificação do setor privado. Dados que são privados incluem qualquer informação relacionada ao pessoal, incluindo registros de recursos humanos, registros médicos e informações salariais, que é usada apenas dentro da organização.

Classificação militar/governo e setor privado. Dados confidenciais incluem informações financeiras organizacionais e requer medidas extras para garantir sua CIA e precisão. A divulgação pode prejudicar a segurança nacional.

Classificação do setor privado. Dados públicos são dados que geralmente são compartilhados com o público e não causariam um impacto negativo na organização. Exemplos de dados públicos incluem quantas pessoas trabalham na organização e quais produtos uma organização fabrica ou vende.

Classificação militar/governo. Qualquer informação que possa ser distribuída ao público sem qualquer ameaça ao interesse nacional.

O padrão até ser definido.';

$GLOBALS["lang"]['traffic'] = 'Tráfego';

$GLOBALS["lang"]['true'] = 'Verdade.';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'Verdadeiro ou falso (no contexto JSON)';

$GLOBALS["lang"]['unallocated'] = 'não alocado';

$GLOBALS["lang"]['unauthorised'] = 'Não autorizado.';

$GLOBALS["lang"]['unchanged'] = 'Não, não.';

$GLOBALS["lang"]['unknown'] = 'desconhecido';

$GLOBALS["lang"]['unmanaged'] = 'não gerenciado';

$GLOBALS["lang"]['unused'] = 'não utilizado';

$GLOBALS["lang"]['update'] = 'atualização';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'usa os dados coletados de seus dispositivos e combina com o software instalado com o valor fornecido, conta as correspondências calcula quantas licenças foram usadas e quantas sobraram. Permite o uso de curingas no <i>combine string</i> campo que combina com o software. Atributo de nome.';

$GLOBALS["lang"]['using the main menu items.'] = 'usando os itens principais do menu.';

$GLOBALS["lang"]['valid'] = 'válido';

$GLOBALS["lang"]['version'] = 'Versão';

$GLOBALS["lang"]['virtualisation'] = 'virtualização';

$GLOBALS["lang"]['warning'] = 'Aviso.';

$GLOBALS["lang"]['web'] = 'Web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'com permissão de acesso local e remoto.';

$GLOBALS["lang"]['with devices::update permission.'] = 'Com dispositivos: permissão de atualização.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'com o sinal de redirecionamento da URI sendo';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'com a intenção de fornecer acesso simples e intuitivo de uma forma familiar aos desenvolvedores. Além desta API, a interface web usará o mesmo formato de solicitação e fornecerá algumas ações adicionais (por exemplo: formulários HTML para criar itens).';

$GLOBALS["lang"]['yes'] = 'Sim.';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'Você não precisa de uma licença HighCharts para usar produtos Firstwave. Licença.';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'Você vai atribuir qualquer dispositivo encontrado para que Org ou Localização.';

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

