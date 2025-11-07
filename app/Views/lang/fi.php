<?php
$GLOBALS["lang"][' Default, currently '] = ' Oletus ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' on nyt tuettu kielitiedosto. Voit vaihtaa käyttäjää käyttää tätä kieltä, klikkaa ';

$GLOBALS["lang"][' seconds'] = ' sekuntia';

$GLOBALS["lang"]['10 Minutes'] = '10 minuuttia';

$GLOBALS["lang"]['15 Minutes'] = '15 minuuttia';

$GLOBALS["lang"]['30 Minutes'] = '30 minuuttia';

$GLOBALS["lang"]['5 Minutes'] = '5 minuuttia';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>Huomautus</strong> - Käytät tätä verkko- osoitetta paikalliselta Open-AudIT-palvelimelta. Ladattu skripti ei voi lähettää kun ajaa millään muulla koneella. Jos haluat tarkastaa muita koneita, lataa skripti mistä tahansa etäkoneesta, älä käytä selainta Open-AudIT-palvelimella.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">Huomautus</strong> - Sinulla täytyy olla SSH- tai SSH- avaintunnukset suorittaaksesi vertailuarvot kohdelaitteella.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Lähtötaso</strong> - Yleisasiakirja, joka sisältää perustason määritelmän ja yksittäiset poliittiset testit.<br/> <br/> <strong>Politiikat</strong> - Yksittäiset testit sisältyvät lähtötilanteeseen. Jokainen testi koskee tiettyä ainetta. Esimerkkinä voidaan mainita SSH-version 1.2.3 testaus.<br/> <br/> <strong>Yksityiskohdat</strong> - Lähtökohdissa voidaan vertailla verkkotilastoportteja, käyttäjiä ja ohjelmistoja.<br/> <br/> <strong>Ohjelmisto</strong> - Ohjelmiston vertaamiseksi tarkistamme nimen ja version. Koska kaikki versionumerot eivät ole vakiomuotoisia, kun saamme tarkastuksen tulos luomme uuden ominaisuuden nimeltä software_padded jonka tallennamme tietokantaan yhdessä muiden ohjelmistojen yksityiskohtia kunkin paketin. Tästä syystä perusarvot, joissa käytetään ohjelmistopolitiikkaa, eivät toimi, kun niitä verrataan laitteeseen, jota ei ole tarkastettu 1.10:ssä (ainakaan). Ohjelmistokäytännöillä voidaan testata, että versio on "yhtä suuri" tai "yhtä suuri tai suurempi."<br/> <br/> <strong>Netstat-satamat</strong> - Netstat Ports käyttää yhdistelmä portin numero, protokolla ja ohjelma. Jos kaikki ovat läsnä, politiikka hyväksytään.<br/> <br/> <strong>Käyttäjät</strong> - Käyttäjät toimivat kuten Netstat Ports. Jos käyttäjä on olemassa, jossa on vastaava nimi, tila ja salasana tiedot (vaihdettavissa, voimassaolo päättyy, vaaditaan), sitten käytäntö kulkee.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Sijainti on fyysinen osoite, johon voi liittyä laitteita.<br/> <br/>Voit määrittää sen koordinaatit (lat/long), ja jos on olemassa laitteita, sijainti näkyy Open-AudIT Enterprise -kartassa.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Verkko on johdettu hakutuloksista ja laitteen ominaisuuksista.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Tiivistelmässä esitetään luettelo kohteista, jotka on ryhmitelty ominaisuuden erillisten arvojen mukaan. <code>table</code> sekä <code>column</code> ominaisuudet.<br/> <br/>Kun yhteenveto on toteutettu, tulos on luettelo erillisiä arvoja, että <code>table</code> sekä <code>column</code>. On linkkejä arvoja, joiden avulla käyttäjä voi nähdä vastaavia laitteita.<br/> <br/>Jos <code>extra_columns</code> on asutettu, tuloksena sivu sisältää nämä sarakkeet lisäksi standardin laite sarakkeita.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agentit antoivat sinun tarkastaa tietokoneet ilman löytöä. Asenna agentti ja se tarkistaa palvelimen päivittäin ja itse. Ei ole väliä, jos tietokoneesi on palomuurissa, tarkastustiedot näkyvät edelleen Open-AudITissa.</p><p>Testi <strong>jos</strong> aineen on tehtävä toimenpiteitä, kaikkien kolmen testin on läpäistävä (jos testi on asetettu). <strong>Sitten</strong> toimet toteutetaan.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Sovellukset määrittelee sinä, käyttäjä ja tallentaa Open-AudIT käyttää ja liittää laitteisiin.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Ominaisuudet tallennetaan Open-AudIT käyttää tiettyjä kenttiä.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Pystyy määrittämään, mitkä koneet on konfiguroitu sama on merkittävä osa järjestelmien hallinnon ja tarkastuksen . Nyt raportointi siitä tehdään yksinkertainen ja automatisoitu. Kun määrität perustason, se tulee automaattisesti kulkemaan vastaan joukko laitteita ennalta määrätty aikataulu. Toteutettujen perusarvojen tuotos on saatavilla web-katselua, tuontia kolmannen osapuolen järjestelmään tai jopa painettuna raporttina.<br/> <br/> Lähtökohtien avulla voit yhdistää tarkastustiedot aiemmin määrittelemiisi attribuuteihin (perustasoosi) laitteiden vaatimustenmukaisuuden määrittämiseksi.<br/> <br/> Esimerkiksi - saatat luoda perustason laitteesta, joka käyttää Centos 6:ta, joka toimii yhtenä apache-palvelimista klusterissa. Tiedät, että tämä palvelin on konfiguroitu juuri niin kuin haluat sen, mutta olet epävarma, jos muut palvelimet klusteri on määritetty täsmälleen sama. Lähtökohtien avulla voit määrittää tämän.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Clusters tallennetaan Open-AudIT liittää laitteet paremmin kirjaamaan, hallita ja arvioida lisensoinnin kustannuksia.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponentit on yleinen termi, jota käytetään tauluissa, joissa säilytetään laitteen ominaisuudet. Nämä taulukot ovat: access_point, arp, bios, Certificate, cli_config, levy, dns, tiedosto, ip, lisenssi, loki, muisti, moduuli, monitor, emolevy, netstat, verkko, nmap, optinen, sivutiedosto, osio, politiikka, print_queue, prosessori, radio, reitti, San, scsi, palvelin_ite, palvelu, jakaa, ohjelmisto, ohjelmisto_key, ääni, tehtävä, usb, käyttäjä, käyttäjä_ryhmä, muuttuja, video, vm, ikkunat.</p><p> Lisäksi luokittelemme seuraavat taulukot myös laitteisiin liittyviksi: sovellus, kiinnitys, klusteri, tunnus, kuva.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Valtakirjat salataan, kun ne tallennetaan tietokantaan.<br/> <br/>Kun Discovery on käynnissä, laitteen tiedot on noudettu ja testattu yhteyden ensin (alkaen <code>credential</code> Taulukko). Jos nämä epäonnistuvat, niin tiedot liittyvät annettuun Orga <code>credentials.org_id</code> testataan myös laitetta vastaan. Työtunnukset tallennetaan yksittäiselle laitetasolle tunnistetaulukossa (note - no s) taulukon nimessä).<br/> <br/>SSH-näppäimet testataan ennen SSH-käyttäjätunnusta / salasanaa. SSH:n testauksessa tunnusmerkit merkitään myös sudolla työskentelyksi tai rootiksi.<br/> <br/>Käytön helpottamiseksi Windows-salasanat eivät saisi sisältää yhtä tai kaksinkertaista lainausta. Tämä on WMI-rajoitus, ei Open-AudIT-rajoitus.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Laitteiden käyttämiseen käytetään valtakirjaa.<br/> <br/>Tunnusten määrittelyn pitäisi olla yksi ensimmäisistä asioista Open-AudIT-asennuksen jälkeen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Määrittele telineet ja aseta laitteet heidän asemiinsa. Sinulla on jo laitteesi Open-AudITissa ja tiedät sijaintisi. Open-AudIT laajentaa tämän avulla voit luoda teline ja asettaa laitteita siihen. Open-AudIT tarjoaa jopa visualisointi teline ja laitteet sisällä. Jos annat laitteen kuvan, tätä kuvaa käytetään visualisoinnissa. Voit katsoa teline näytöllä ja nähdä samat kohteet näkisit jos seisoisit edessä.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Verkkosi laitteita on hallittava. Miten pidät tietosi ajan tasalla? Laskentataulukko - ei. Se on vanhentunut muutamassa tunnissa, ellei päivässä. Miksi manuaalisesti yrittää pysyä mukana. Käytä Open-AudITia verkkojesi automaattiseen skannaukseen ja tallenna laitteet - valmistaja, malli, sarja ja yli 100 muuta ominaisuutta. Täydelliset luettelot ohjelmistoista, palveluista, levyistä, avoimista satamista, käyttäjistä jne. Tarkista automaattisesti, onko ominaisuus lisätty, poistettu tai muutettu.<br/> <br/>Kun Open-AudIT on asetettu, voit istua ja rentoutua. Oletko muuttanut raportteja sähköpostilla aikataulussa, esimerkiksi - mitä uusia laitteita löysimme tällä viikolla? Mitä uutta ohjelmistoa asennettiin tällä viikolla? Oliko viime kuussa laitteistomuutoksia?<br/> <br/>Laajenna tallennettuja kenttiä helposti omilla attribuuteillasi.<br/> <br/>Lisää jopa laitteita, joita ei ole liitetty verkkoon tai niihin laitteisiin, joita Open-AudIT-palvelimesi ei tavoita.<br/> <br/>Tietokoneet, kytkimet, reitittimet, tulostimet tai mikä tahansa muu verkkosi laite - Open-AudIT voi tarkastaa ne kaikki.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Löydökset ovat Open-AudITin ydin.<br/> <br/>Miten muuten tietäisit, mitä verkossani on?<br/> <br/>Löydöt ovat valmiita tietokohteita, joiden avulla voit tehdä löydön verkossa yhdellä napsautuksella, kirjoittamatta verkon yksityiskohtia joka kerta.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Vaihtoehdot ovat maailmanlaajuinen tilanne muuttunut <a href="../configuration?configuration.name=discovery_default_scan_option">kokoonpano</a>. Jos sinulla on Open-AudIT Enterprise -lisenssi, ne ovat asetettavissa löytöä kohti ja lisäksi futeer muokattavissa tarpeen mukaan. Discovery Vaihtoehdot ovat seuraavat (mukaan lukien indicatiivinen aika yksittäisen IP:n skannaamiseen):<br/><br/><strong>UltraFast</strong>: <i>1 sekunti</i>. Skannaa vain portit, joita Open-AudIT tarvitsee puhuakseen laitteelle ja havaitakseen IOS-laitteen (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> satama katsotaan avoimeksi. A <code>filtered</code> satamaa ei pidetä avoimena. Laitteen täytyy vastata Nmap ping. Käytä aggressiivista ajoitusta.<br/><br><strong>SuperFast</strong>: <i>5 sekuntia</i>. Skannaa 10 TCP- ja UDP-porttia sekä portti 62078 (Apple IOS-tunnistus). An <code>open|filtered</code> satama katsotaan avoimeksi. A <code>filtered</code> satamaa ei pidetä avoimena. Laitteen täytyy vastata Nmap ping. Käytä aggressiivista ajoitusta.<br><br/><strong>Nopea</strong>: <i>40 sekuntia</i>. Skannaa top 100 TCP- ja UDP-portit sekä portti 62078 (Apple IOS-tunnistus). An <code>open|filtered</code> satama katsotaan avoimeksi. A <code>filtered</code> satamaa ei pidetä avoimena. Laitteen täytyy vastata Nmap ping. Käytä aggressiivista ajoitusta.<br/><br/><strong>Keskikokoinen (klassinen)</strong>: <i>90 sekuntia</i>. Niin lähellä perinteistä Open-AudIT-skannausta kuin mahdollista. Skannaa 1000 TCP-porttia sekä 62078 (Apple IOS detection) ja UDP 161 (SNMP). An <code>open|filtered</code> satama katsotaan avoimeksi. A <code>filtered</code> Porttia pidetään avoimena (ja se laukaisee laitteen havaitsemisen). Laitteet skannataan riippumatta vasteesta Nmap ping. Käytä aggressiivista ajoitusta.<br/><br/><strong>Keskisuuri</strong>: <i>100 sekuntia</i>. Skannaa top 1000 TCP ja top 100 UDP-portit sekä portti 62078 (Apple IOS-tunnistus). An <code>open|filtered</code> satama katsotaan avoimeksi. A <code>filtered</code> satamaa ei pidetä avoimena. Laitteen täytyy vastata Nmap ping. Käytä aggressiivista ajoitusta.<br/><br/><strong>Hitaasti.</strong>: <i>4 minuuttia</i>. Skannaa top 1000 TCP ja top 100 UDP-portit sekä portti 62078 (Apple IOS-tunnistus). Versiotunnistus aktivoitu. An <code>open|filtered</code> satama katsotaan avoimeksi. A <code>filtered</code> Porttia pidetään avoimena (ja se laukaisee laitteen havaitsemisen). Laitteen täytyy vastata Nmap ping. Käytä normaalia ajoitusta.<br/><br/><strong>UltraSlow</strong>: <i>20 minuuttia</i>. Ei suositella. Skannaa 1000 TCP- ja UDP-porttia sekä porttia 62078 (Apple IOS-tunnistus). Laitteet skannataan riippumatta vasteesta Nmap ping. Versiotunnistus aktivoitu. An <code>open|filtered</code> satama katsotaan avoimeksi. A <code>filtered</code> Porttia pidetään avoimena (ja se laukaisee laitteen havaitsemisen). Käytä kohteliasta ajoitusta.<br/><br/><strong>Oma</strong>: <i>Tuntematon aika</i>. Kun muita kuin standardin mukaisen löydön asettamia vaihtoehtoja muutetaan.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Ryhmiä käytetään yksinkertaisina luetteloina laitteista, jotka vastaavat vaadittuja ehtoja. Jos JSONia pyydetään, he palauttavat luettelon <code>devices.id</code> Vain. Jos sitä pyydetään web-käyttöliittymän avulla, ne palauttavat vakiosarakkeen ominaisuusluettelon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Jos käyttäjä kirjautuu Open-AudIT:iin, hänellä ei ole pääsyä hakuun LDAP (ja käytät OpenLDAP:tä), voit käyttää toista tiliä, jolla on tämä pääsy. Käytä <code>ldap_dn_account</code> sekä <code>ldap_dn_password</code> määrittääksesi tämän.<br/> <br/><strong>Auttava dokumentaatio</strong><br/> <br/><a href="/index.php/auth/help">Yleisohje</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Entran käyttö Authille</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">OKTA:n käyttö Authille</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Vianmääritys</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Käyttäjät, roolit ja orgit</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Jos lisäät laitetyypin, näyttääksesi siihen liittyvän kuvakkeen sinun on käsin kopioitava .svg-muodossa oleva tiedosto kansioon:<br/><em>Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Ikkunat</em>c:\xamp\htdocs\open-audit\ device_images<br/> <br/>Jos lisäät sijaintityypin, näyttääksesi siihen liittyvän kuvakkeen sinun täytyy käsin kopioida 32x32px kuvake hakemistoon:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Ikkunat</em>c:\xamp\htdocs\open-audit\images\map_icons</p><p>Kun <i>resurssi</i> a <code>device</code>, voimassa <i>tyypit</i> ovat: <code>class</code>, <code>environment</code>, <code>status</code> sekä <code>type</code>. Jos <i>resurssi</i> on <code>locations</code> tai <code>org</code> ainoa pätevä <i>tyyppi</i> on <code>type</code>. Jos <i>resurssi</i> a <code>query</code> ainoa pätevä <i>tyyppi</i> on <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Jos aiot tarkastaa pilvikoneesi kokonaan, älä unohda, että tarvitset myös ne tiedot, jotka tallennetaan Open-AudITissa.</p><p>Varmista, että annat oikeat portit, jos käytät Microsoft Azurea (22 SSH:lle jne.). Tarkista virtuaalikoneesi -> Verkkosäännöt.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Jos valitset List-tyypin, kenttä "arvot" on käytössä. Sinun pitäisi laittaa pilkku erotettu luettelo valittavissa olevista arvoista tähän. Nämä näkyvät pudotusruudussa aina kun kenttää muokataan.<br/> <br/>Kuten useimmat muut ominaisuudet, Fields voidaan irtotavarana muokata. Käytä Bulk Edit funktio kuten normaalisti ja näet Fields ovat saatavilla syöttää.<br/> <br/>Näytä laitteen tiedot näytöllä, avaa kenttää sisältävä osio ja (jos sinulla on riittävä pääsy) voit napsauttaa kenttäarvoa muokataksesi sitä.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Tietoturvallisuuden alati muuttuvassa maailmassa, jossa havaitaan ja korjataan päivittäin uusia haavoittuvuuksia, turvallisuusvaatimusten noudattamisen on oltava jatkuva prosessi. Siihen on myös sisällyttävä tapa, jolla politiikkoja voidaan mukauttaa, sekä säännöllinen arviointi ja riskien seuranta. OpenSCAP-ekosysteemi tarjoaa välineitä ja muokattavissa olevia toimintalinjoja näiden prosessien nopeaa, kustannustehokasta ja joustavaa täytäntöönpanoa varten.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integraatioiden avulla voit asettaa laitteen valinnan ja aikataulut Open-AudIT puhua ulkoisille järjestelmille.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Tämän linkitetyn sivun alareunassa on Nmap-aikatiedot <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. Tältä sivulta:<br/> <br/><em>Jos sinulla on kunnollinen laajakaista- tai eetteriyhteys, suosittelen aina käyttämään -T4 (Aggressiivinen). Jotkut rakastavat -T5 (Hullu) vaikka se on liian aggressiivinen minun makuuni. Ihmiset joskus määritellä -T2 (Polite), koska he ajattelevat, että se on vähemmän todennäköisesti kaatua isännät tai koska he pitävät itseään kohteliaita yleensä. He eivät usein ymmärrä, kuinka hidas -T2 todella on. Skannaus voi kestää kymmenen kertaa kauemmin kuin oletusskannaus. Koneen kaatumiset ja kaistanleveyden ongelmat ovat harvinaisia oletus ajoituksen vaihtoehtoja -T3 (Normal) ja niin yleensä suosittelen, että varovaisia skannereita. Versiotunnistuksen jättäminen pois on paljon tehokkaampaa kuin ajoitusarvojen pelaaminen näiden ongelmien vähentämiseksi.</em><footer>Gordon. <i>Fjodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT voidaan konfiguroida käyttämään erilaisia menetelmiä käyttäjän todentamiseksi ja lisäksi luomaan käyttäjätili ryhmän jäsenyyden perusteella annettujen roolejen ja orgien avulla.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open-Aud IT voi hakea tiedoston tai tiedostojen hakemiston tiedot ja seurata näitä tiedostoja muutosten varalta Open-AudIT-tietokannan muiden ominaisuuksien mukaisesti.<br/> <br/>Tämä ominaisuus toimii Linux Open-AudIT -palvelimien laatikosta, mutta tarvitsee muutoksen palvelutilinnimeen Windows Open-AudIT -palvelimella.<br/> <br/>Tuetut asiakkaat ovat Windows ja Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open-Aud IT voi hakea tietoja tiedostosta, kysyä alkuperäiseltä pakettipäälliköltä, jos he ovat sen tiedossa, ja seurata näitä tiedostoja muutosten varalta Open-AudIT-tietokannan muiden ominaisuuksien mukaisesti.<br/> <br/>Tuetut asiakkaat ovat vain Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-Aud IT voi tallentaa tietoja räätälöidyille kentille, jotka liittyvät jokaiseen laitteeseen.<br/> <br/>Kun lisäkenttä on luotu, sitä voidaan käyttää kyselyissä ja ryhmissä kuten mitä tahansa muuta ominaisuutta tietokannassa.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT tulee monia kyselyjä sisäänrakennettu. Jos tarvitset tietyn kyselyn eikä mikään valmiiksi pakatuista kyselyistä vastaa tarpeitasi, on melko helppoa luoda uusi kysely ja ladata se Open-AudITiin.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT mukana monia tiivistelmiä sisäänrakennettu. Jos tarvitset tietyn yhteenvedon eikä mikään valmiiksi pakattu yhteenveto vastaa tarpeitasi, on melko helppoa luoda uusi ja ladata se Open-AudITiin.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT tukee FirstWave hämmästyttävällä tukitasolla. Jos haluat aktiivisen yhteisön tuen antajat, on myös se. Missä muualla voit puhua suoraan kehittäjille ja saada vastauksen 24 tunnin kuluessa? Kokeile sitä muiden tuotteiden kanssa! Uskomaton tuki. Pysähdy. Tarvitsette tukea, me tuemme. Ei jossittelua tai muttia. Hienoa tukea. Piste.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT tarjoaa multi-tenance ulos laatikosta!<br/> <br/>Open-AudITin orgit (organisaatiot) ovat avainkohde. Käyttäjällä on ensisijainen Org sekä luettelo Orgs he voivat käyttää. Käyttäjä yhdistää tämän listan osoitettu "Roles," joka määrittelee, mitä toimia he voivat toteuttaa kohteita annetaan Orgs heillä on pääsy. Käyttäjien "orgs" ja "roles" yhdistelmä määrittelee, mitä he voivat ja eivät voi tehdä Open-AudIT:ssä.<br/> <br/>Useimmat Open-AudITin kohteet on osoitettu Org. Laitteet, sijainnit, verkot, jne.<br/> <br/>Orgit voivat saada lapsiorgeja. Ajattele organisaatiokaaviota (puita). Jos käyttäjällä on pääsy tiettyyn Orgaan, heillä on myös pääsy Orgsin jälkeläisiin. Lisätietoja: <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT tarjoaa multi-tenance ulos laatikosta!<br/> <br/>Open-AudITin orgit (organisaatiot) ovat avainkohde. Käyttäjällä on ensisijainen Org sekä luettelo Orgs he voivat käyttää. Käyttäjä yhdistää tämän listan osoitettu "Roles," joka määrittelee, mitä toimia he voivat toteuttaa kohteita annetaan Orgs heillä on pääsy. Käyttäjien "orgs" ja "roles" yhdistelmä määrittelee, mitä he voivat ja eivät voi tehdä Open-AudIT:ssä.<br/> <br/>Useimmat Open-AudITin kohteet on osoitettu Org. Laitteet, sijainnit, verkot, jne.<br/> <br/>Orgit voivat saada lapsiorgeja. Ajattele organisaatiokaaviota (puita). Jos käyttäjällä on pääsy tiettyyn Orgaan, heillä on myös pääsy Orgsin jälkeläisiin.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Katsele nopeasti verkon laitteiden tilaa.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roolit avoimessa Audissa IT on avaintekijä. Käyttäjällä on ensisijainen Org sekä luettelo Orgs he voivat käyttää. Käyttäjä yhdistää tämän listan osoitettu Rooleja, jotka määrittelevät, mitä toimia he voivat toteuttaa kohteita annetaan Orgas he ovat käytettävissä. Käyttäjien "orgs" ja "roles" yhdistelmä määrittelee, mitä he voivat ja eivät voi tehdä Open-AudIT:ssä.<br/> <br/>Hanki täydellinen Open-AudIT Enterprise kokemus. Roolien luominen mahdollistaa hienorakeisen hallinnan siitä, mitä käyttäjät voivat tehdä Open-AudITissa.<br/> <br/>Ensisijainen menetelmä luvan (mitä käyttäjä voi tehdä) perustuu käyttäjien Roolit. Oletusroolit määritellään admin, org_admin, toimittaja ja käyttäjä. Jokaisella roolilla on kunkin päätepisteen käyttöoikeudet (Luo, Lue, Päivitä, Poista). Open-AudIT Enterprisessa on mahdollista määritellä lisärooleja ja muokata olemassa olevia rooleja.<br/> <br/>Rooleja voidaan käyttää myös LDAP (Active Directory ja OpenLDAP) luvan. Yrityksillä, joilla on toimilupa, on mahdollisuus räätälöidä LDAP-ryhmä kutakin tiettyä tehtävää varten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Säännöt tarkastelevat ominaisuuksia ja tekevät cahnges perustuu asianmukaiseen sääntöön.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Skannausvaihtoehtojen avulla voit helposti soveltaa useita vaihtoehtoja löydökseen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Google Mapsin tarjoama yksinkertainen, intuitiivinen ja tarkka maantieteellinen kartoitus. Open-AudIT -edut Google Maps tarjota live, interaktiivinen maantieteellinen kartoitus laitteen sijaintia. Automaattinen muuntaminen katujen osoitteet geokoodeja ja pituus- / leveysaste.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Ohjelmistopaketteja käytetään sen selvittämiseen, onko antivirus, varmuuskopio, palomuuri, hyväksytty vai kielletty ohjelmisto on asennettu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Joitakin esimerkkejä voimassa olevista Subnet-attribuuteista ovat: 192.168.1.1 (yksi IP-osoite), 192.168.1.0/24 (alaverkko), 192.168.1-3.1-20 (eri IP-osoitteita).<br/> <br/><em>Huomautus</em> - Vain aliverkko (esimerkkien mukaan - 192.168.1.0/24) pystyy automaattisesti luomaan kelvollisen verkon Open-AudITille. <br/> <br/>Jos käytät aktiivista kansiotyyppiä, varmista, että sinulla on asianmukaiset valtuudet puhua verkkotunnuksen valvojalle jo <a href="../credentials">Valtakirja</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standardit säilytetään Open-AudITissa.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Tuetut asiakkaat ovat vain Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Tehtävät on aikataulu, joka heijastaa Unix Cron aikataulu. Attribuutit minuutin, tunnin, päivä_of_month, kuukausi, päivä_of_week kaikki toimivat cron määritelmät. Voit valita useita näistä käyttäen pilkkuja erillään (ei välilyöntejä). Voit valita jokaisen arvon käyttämällä *.<br/> <br/>• <code>type</code> tehtävä voi olla yksi: perustasot, keräilijät, löydöt, kyselyt, raportit tai yhteenvedot.<br/> <br/>Jos haluat ajoittaa perustason tai Discovery, sinun täytyy luoda nämä ennen tehtävien luomista. Sinun on käytettävä kohteen tyypin tunnistetta <code>sub_resource_id</code>. Esimerkiksi jos haluat ajoittaa Discovery, käytä tätä erityistä Discovery ID <code>sub_resource_id</code>.<br/> <br/>Arvo <code>uuid</code> on spesifinen jokaiselle Open-AudIT-palvelimelle. Ainutlaatuinen arvosi löytyy konfiguraatiosta.<br/> <br/>• <code>options</code> attribuutti on JSON-asiakirja, joka sisältää kaikki tehtävän suorittamiseen tarvittavat lisäattribuutit. Raporttien, kyselyjen ja yhteenvetojen lisäattribuutit ovat seuraavat: <code>email_address</code> sekä <code>format</code>. Lisäattribuutti Bselines on <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>• <code>type</code> sijainti määrittää sen kuvake.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Attribuuttien päätetapahtuman avulla voit lisätä mukautetut arvot Open-AudIT:n eri attribuuteille, tällä hetkellä tämä ominaisuus toimii Devices-luokan, ympäristön, tilan ja tyypin attribuutteihin, sekä sijaintien että orgien tyyppiattribuutteihin sekä kyselyjen valikkokategoriaan. Jos näet jonkin tyypistä (say view a Lkocation), huomaat, että tyyppi-attribuutti on valittava pudotusruudusta. Tähän nämä arvot tallennetaan. Joten, jos haluat lisätä uuden tyyppi valitaan Sijainti, Lisää se käyttäen attribuutit ominaisuus.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Keräilijät ominaisuus avulla voit helposti hallita monia "keräilijä" tietokoneita, jotka suorittavat verkon löytö. Kaikki Keräilijät ovat keskitetysti hallinnassa Palvelin. Ainoat vaaditut verkkoportit Collectorin ja Serverin välillä ovat 80 ja/tai 443.<br/> <br/>Se tekee erilaisten verkkojen hallinnasta nopeaa, helppoa ja yksinkertaista. Open-AudIT Enterprise lisenssinsaajat saavat yhden keräilylisenssin ja voivat ostaa tarvittaessa lisää.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>SQL:n SELECT-osio <em>on</em> sisältää täysin päteviä sarakkeita. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>SQL-osio <em>on</em> sisältää <code>WHERE @filter</code> Joten Open-AudIT tietää rajoittaa kyselysi asianmukaisiin orgeihin. SQL ei sisällä tätä ehtoa johtaa kysely ei ole luotu, ellei sinulla ole Admin rooli.<br/> <br/>Esimerkkikysely SQL osoittaa ominaisuuksia laitteilla, joilla on <code>os_group</code> "Linux" -attribuutti <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>SQL:n SELECT-osio <em>on</em> Ainoastaan sisältävät <code>DISTINCT(devices.id)</code>.<br/> <br/>SQL-osio <em>on</em> sisältää <code>WHERE @filter</code> Joten Open-AudIT tietää rajoittaa kyselysi asianmukaisiin orgeihin. Jos SQL ei sisällä tätä ehtoa, ryhmän perustaminen epäonnistuu.<br/> <br/>Esimerkki SQL:lle kaikkien Debianin käyttöjärjestelmän käytössä olevien laitteiden valitsemisesta - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Lisenssin päätepisteen avulla voit seurata laitteissasi olevien lisenssien määrää.<br/> <br/>Luodaksesi merkinnän seurata lisenssejäsi <em>on</em> antaa nimi, organisaatio, hankittujen lisenssien määrä ja ohjelmiston nimi. Kentällä <code>match_string</code> sinun täytyy antaa ohjelman nimi, jota haluat seurata, voit käyttää prosenttimerkkiä (%) wildcardina ottelussa_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Verkon olisi oltava muodossa 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Ensisijaisten ja valinnaisten toissijaisten tuotteiden olisi oltava täysin päteviä eli laitteita. tyyppi tai ohjelmisto. Nimi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Mitään ei tarvitse tehdä, jos suoritat Open-AudIT-palvelimella.<br/><br/>Windows-asiakkaat ovat aivan kunnossa eivätkä vaadi erityisiä toimia, mutta... jotta tämä ominaisuus voidaan suorittaa paikallisesti kohde Windows-järjestelmässä. Sitä ei voi ajaa etäältä, kuten WMI-puheluilla, kun suoritamme yhden Windows-koneen tarkastusskriptiä, samalla kun kohdistamme toisen Windows-koneen. Voit tehdä tämän meidän täytyy kopioida tarkastus skripti kohde Windows kone ja sitten ajaa sen. Valitettavasti Apachen palvelutili on paikallisjärjestelmän tili. Tällä tilillä ei ole pääsyä etäresursseihin (verkkoihin). Tätä asiaa varten palvelu on hoidettava toisella tilillä. On helpointa käyttää paikallista hallintovirkamiestiliä, mutta voit kokeilla mitä tahansa tiliä niin kauan kuin sillä on tarvittavat oikeudet. Paikallisjärjestelmän tilillä on yhtä paljon paikallista käyttöä kuin paikallishallinnon tilillä.<br/><br/>Katso sivumme mahdollistaa <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Open-AudIT Apache -palvelun käyttö Windowsissa</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Nämä laitteet elävät telineessä.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Tämän päätepisteen avulla voit lisätä pilviinfrastruktuurin yksityiskohtia. Open-AudIT ottaa sitten yhteyttä pilviisi käyttäen heidän alkuperäistä API ja palauttaa palvelimet, kuten mikä tahansa muu laite Open-AudIT.<br/> <br/><em>Huomautus</em> - Käyttää tätä ominaisuutta, me <em>on</em> käytössä asetukset match_mac (AWS) ja match_hostname (Azure). Tämä tehdään automaattisesti ensimmäisen kerran, kun pilvi löytö tehdään.<br/> <br/>Pilvitiedot (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> tai <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) ovat tarpeen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Haavoittuvuusraportointi perustuu NIST CVE-rehuun.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Alun perin asetamme oletuslistan skriptejä oletusvalinnoilla. Näitä oletusskriptejä ei voida poistaa. Voit luoda lisäskriptejä, joita voit käyttää tarpeen mukaan. Skripti perustuu yhteen olemassa olevista skripteistä ja on mukautettuja vaihtoehtoja sovelletaan. Skriptit voidaan ladata listalta valikosta -> Tutustu -> Audit Scripts -> Listaa tarkastusskriptit<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Kun käytät Regexiä matching, hyödyllinen sivu löytyy <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP:n verkkosivusto</a>. Joitakin eroja Perl Regex löytyy <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Tässä.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgetit voidaan helposti luoda näyttämään, mikä on erityinen ympäristösi kojelauta.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Open-AudIT Professional ja Enterprise voit automatisoida ja ajoittaa löytöjä, raportoida sukupolven, tai perustason tarkastukset suorittaa milloin haluat, ja niin usein kuin tarvitset. Aikataulu löytöjä ajaa yöllä ja raportteja syntyy ja sähköpostia avainhenkilöille joka aamu. Monimutkainen tai yksinkertainen aikataulut, laitteen löytö ja raportin sukupolvi on vain klikkauksen päässä.<br/> <br/>Luo yksilölliset hakuaikataulut jokaiselle aliverkolle tai AD-ohjaimelle, lisää raportteihin, jotka luodaan kohdeyleisöille. Kehitä yksinkertaisia tai monimutkaisia aikatauluja tukemaan yrityksen tarpeita, välttämään varmuuskopioita tai vaikutuksia toimintaan tai yksinkertaisesti levittämään kuormitusta ja nopeuttamaan tarkastuksen loppuun saattamista.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Voit luoda skriptin kaikilla vaihtoehdoilla minkä tahansa nykyisen auditointiskriptien - ei vain Windows. AIX, ESX, Linux, OSX ja Windows ovat kaikki katettu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Voit käyttää %-merkkiä wildcardina ottelun_merkkijonossa.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Sinun teline auttaa tarkentaa täsmälleen missä laitteet sijaitsevat.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Google Maps API Tähän tehtävään tarvitaan avain.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'JSON-sarja laitetunnisteita, jotka suoritetaan.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'JSON-kokoelma esineitä, jotka vastaavat CVE:stä otettua ohjelmiston nimeä.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'JSON-sarja tämän haavoittuvuuden testaamiseksi.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'JSON-dokumentti, joka sisältää tälle käyttäjälle osoitetut orgit. Henkilötunnukset <code>orgs.id</code>. Jos käyttäjällä on pääsy Orgiin, heillä on pääsy Orgsin jälkeläisiin.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'JSONin asiakirja, joka sisältää vaaditut ominaisuudet riippuen <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'JSONin asiakirja, joka sisältää vaaditut ominaisuudet valittujen löytö_scan_valintojen ohittamiseksi.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'JSONin asiakirja, joka sisältää vaaditut ominaisuudet, jotka ohittavat oletuslaitteen asetukset.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'JSON-dokumentti, joka sisältää tälle käyttäjälle annetut tehtävät. Roolien nimet otettu <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'JSON-objekti, joka sisältää joukon ominaisuuksia, joita voidaan muuttaa, jos osuma tapahtuu.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'JSON-objekti, joka sisältää joukon vastaavia ominaisuuksia.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'JSONin objekti, joka sisältää kokoelmakohtaisia vaihtoehtoja.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'JSONin objekti asutettiin pilvilöydön kautta.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'JSONin esitys, joka sisältää yksityiskohtaiset tiedot suoritettavasta jonosta.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON edustaa tämän yhdentymisen aloja.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'JSON esittää yksittäiset testit ja niiden tulokset kaikissa laitteissa tämä perustaso on ollut ristiriidassa.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON edustaa kokeita, jotka muodostavat tämän politiikan.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL ladattavaan tiedostoon.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Laskettu kenttä, joka näyttää, kuinka monta kertaa tämä ohjelmisto löytyi tietokoneista valitussa Org (ja sen jälkeläiset, jos konfiguroitu).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Keräilijä on joko Collector tai Stand-Alone tilassa.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Pilkku eroteltu luettelo sovellettavista CVE.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Pilkkuerotettu arvoluettelo, josta yksi voidaan valita.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Käsky suorittaa. Kun agentti on Windows-pohjainen, tämä komento johdetaan Powershell-agentin sisältä.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Luettelo mukautettuja TCP-portteja skannattavaksi (22 on SSH, 135 on WMI, 62078 on iPhone synkronoitu).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Luettelo mukautettuja UDP-portteja skannattavaksi (161 on SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Pienempi määrä tarkoittaa, että sitä sovelletaan ennen muita sääntöjä.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Pienempi määrä tarkoittaa, että sitä sovelletaan ennen muita sääntöjä. Oletuspaino on 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Salasana (tallennettu nimellä hash), joka mahdollistaa kirjautumisen, kun käytetään sovelluksen todentamista.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Reititysalue tai osoitetila, jossa IP-osoitteet ja MAC-osoitteet ovat ainutlaatuisia.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Turvavyöhyke on verkkoalueen hallinnollinen tai poliittinen verkkoalue.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Lyhyt kuvaus lokikirjasta.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Naru, joka sopii <code>software.name</code> ominaisuus. Voit käyttää vakio SQL wildcard prosenttia (%) yhden tai useamman merkin.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Haavoittuvuus, joka vaikuttaa saatavuuteen, voi antaa hyökkääjille mahdollisuuden häiritä palveluja, kaatumisjärjestelmiä tai aiheuttaa palvelun epäämisen (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Luottamuksellisuuteen vaikuttava haavoittuvuus voi antaa hyökkääjille mahdollisuuden lukea arkaluonteisia tietoja, kuten henkilökohtaisia tietoja, valtakirjoja tai yrityskohtaisia tietoja (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Eheyteen vaikuttava haavoittuvuus voi antaa hyökkääjille mahdollisuuden muuttaa tietoja, syöttää pahansuopaa koodia tai muuttaa järjestelmän konfiguraatioita (None, Low, High).';

$GLOBALS["lang"]['AD Group'] = 'AD-ryhmä';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN jne.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Kaikki IP:t';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API-dokumentaatio';

$GLOBALS["lang"]['API Key required.'] = 'API avain vaaditaan.';

$GLOBALS["lang"]['API Result'] = 'API-tulos';

$GLOBALS["lang"]['About'] = 'Tietoja';

$GLOBALS["lang"]['Accept'] = 'Hyväksy';

$GLOBALS["lang"]['access_point'] = 'Pääsypiste';

$GLOBALS["lang"]['Access Point'] = 'Pääsypiste';

$GLOBALS["lang"]['access_token'] = 'Käytä Tokenia';

$GLOBALS["lang"]['Access Token'] = 'Käytä Tokenia';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Ack- päivämäärä';

$GLOBALS["lang"]['Ack Date'] = 'Ack- päivämäärä';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'Toiminto';

$GLOBALS["lang"]['Action'] = 'Toiminto';

$GLOBALS["lang"]['action_audit'] = 'Toimien tarkastus';

$GLOBALS["lang"]['Action Audit'] = 'Toimien tarkastus';

$GLOBALS["lang"]['action_command'] = 'Toimintakomento';

$GLOBALS["lang"]['Action Command'] = 'Toimintakomento';

$GLOBALS["lang"]['action_date'] = 'Toimintapäivä';

$GLOBALS["lang"]['Action Date'] = 'Toimintapäivä';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Sijaintiin osoitetut toimintalaitteet';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Sijaintiin osoitetut toimintalaitteet';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Orgaanille osoitetut toimintalaitteet';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Orgaanille osoitetut toimintalaitteet';

$GLOBALS["lang"]['action_download'] = 'Toimintolataa';

$GLOBALS["lang"]['Action Download'] = 'Toimintolataa';

$GLOBALS["lang"]['action_uninstall'] = 'Toiminnon poistaminen';

$GLOBALS["lang"]['Action Uninstall'] = 'Toiminnon poistaminen';

$GLOBALS["lang"]['actioned'] = 'Toimii';

$GLOBALS["lang"]['Actioned'] = 'Toimii';

$GLOBALS["lang"]['actioned_by'] = 'Toiminut';

$GLOBALS["lang"]['Actioned By'] = 'Toiminut';

$GLOBALS["lang"]['actioned_date'] = 'Päivämäärä';

$GLOBALS["lang"]['Actioned Date'] = 'Päivämäärä';

$GLOBALS["lang"]['actions'] = 'Toimet';

$GLOBALS["lang"]['Actions'] = 'Toimet';

$GLOBALS["lang"]['Activate'] = 'Aktivoi';

$GLOBALS["lang"]['Activate Free License'] = 'Aktivoi ilmainen lisenssi';

$GLOBALS["lang"]['Activate Key'] = 'Aktivoi avain';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktivoi ilmainen Enterprise-lisenssi';

$GLOBALS["lang"]['Active'] = 'Aktiivinen';

$GLOBALS["lang"]['Active / Active'] = 'Aktiivinen / aktiivinen';

$GLOBALS["lang"]['Active / Passive'] = 'Aktiivinen / passiivinen';

$GLOBALS["lang"]['Active Directory'] = 'Aktiivinen kansio';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Aktiivinen kansio Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Aktiivinen kansio Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Aktiivikansiopalvelin';

$GLOBALS["lang"]['ad_domain'] = 'Ad- verkkoalue';

$GLOBALS["lang"]['Ad Domain'] = 'Ad- verkkoalue';

$GLOBALS["lang"]['ad_group'] = 'Ad-ryhmä';

$GLOBALS["lang"]['Ad Group'] = 'Ad-ryhmä';

$GLOBALS["lang"]['ad_server'] = 'Ad- palvelin';

$GLOBALS["lang"]['Ad Server'] = 'Ad- palvelin';

$GLOBALS["lang"]['Add'] = 'Lisää';

$GLOBALS["lang"]['Add Credentials'] = 'Lisää valtakirjat';

$GLOBALS["lang"]['Add Device'] = 'Lisää laite';

$GLOBALS["lang"]['Add Device to Application'] = 'Lisää laite sovellukseen';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Lisää laite klusteriin';

$GLOBALS["lang"]['Add Exception'] = 'Lisää poikkeus';

$GLOBALS["lang"]['Add Field'] = 'Lisää kenttä';

$GLOBALS["lang"]['Add If'] = 'Lisää If';

$GLOBALS["lang"]['Add Policies from Device'] = 'Lisää käytäntöjä laitteesta';

$GLOBALS["lang"]['Add Policy'] = 'Lisää politiikka';

$GLOBALS["lang"]['Add Then'] = 'Lisää sitten';

$GLOBALS["lang"]['Add image'] = 'Lisää kuva';

$GLOBALS["lang"]['additional_items'] = 'Lisäerät';

$GLOBALS["lang"]['Additional Items'] = 'Lisäerät';

$GLOBALS["lang"]['address'] = 'Osoite';

$GLOBALS["lang"]['Address'] = 'Osoite';

$GLOBALS["lang"]['Admin'] = 'Hallinto';

$GLOBALS["lang"]['admin_status'] = 'Hallitse tilaa';

$GLOBALS["lang"]['Admin Status'] = 'Hallitse tilaa';

$GLOBALS["lang"]['advanced'] = 'Lisäasetukset';

$GLOBALS["lang"]['Advanced'] = 'Lisäasetukset';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistan';

$GLOBALS["lang"]['agents'] = 'Asiamiehet';

$GLOBALS["lang"]['Agents'] = 'Asiamiehet';

$GLOBALS["lang"]['Aggressive'] = 'Aggressiivinen';

$GLOBALS["lang"]['Aland Islands'] = 'Ahvenansaaret';

$GLOBALS["lang"]['Albania'] = 'Albania';

$GLOBALS["lang"]['alert_style'] = 'Hälytystyyli';

$GLOBALS["lang"]['Alert Style'] = 'Hälytystyyli';

$GLOBALS["lang"]['Algeria'] = 'Algeria';

$GLOBALS["lang"]['algorithm'] = 'Algoritmi';

$GLOBALS["lang"]['Algorithm'] = 'Algoritmi';

$GLOBALS["lang"]['alias'] = 'Peitenimet';

$GLOBALS["lang"]['Alias'] = 'Peitenimet';

$GLOBALS["lang"]['All'] = 'Kaikki';

$GLOBALS["lang"]['All IPs'] = 'Kaikki IP:t';

$GLOBALS["lang"]['All Policies'] = 'Kaikki politiikat';

$GLOBALS["lang"]['All Queued Items'] = 'Kaikki jonotetut kohdat';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Kentät';

$GLOBALS["lang"]['American Samoa'] = 'Amerikan Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Joukko <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Joukko <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Joukko esineitä, jotka edustavat ulkoisia linkkejä lisätietoja.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Salattu JSON-asiakirja, joka sisältää vaaditut ominaisuudet riippuen <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Ilmoitus tämän sivuston edellyttämästä palvelun tasosta.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Sisäinen kenttä, joka osoittaa, onko löytö valmis.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Valinnainen GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Valinnainen salasana käyttää sudo.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Etelämanner';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua ja Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Kaikki TCP-portit (sis. erilliset, ei välilyöntejä) haluat jättää tämän löydön ulkopuolelle. Saatavilla vain Nmap 7+:n käytön yhteydessä.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Kaikki UDP-portit (sis. eristetyt, ei välilyöntejä) haluat jättää tämän löydön ulkopuolelle. Saatavilla vain Nmap 7+:n käytön yhteydessä.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Tarvitset lisää asiakirjoja.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Haluatko tehdä lisää muistiinpanoja?';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Kaikki laitteet osoitetaan tähän Orgaan, kun ne suorittavat tarkastusskriptin (jos asetettu). Linkit <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Kaikki löydetyt laitteet osoitetaan tähän paikkaan, jos ne on asetettu. Linkit <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Kaikki löydetyt laitteet osoitetaan tähän paikkaan, kun ne suorittavat tarkastusskriptin (jos asetettu). Linkit <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Kaikki löydetyt laitteet osoitetaan tähän Org jos asetettu. Jos ei asetettu, ne on osoitettu <code>org_id</code> Tämän löydön. Linkit <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Tarvittava suodatin. HUOM: Kun tyyppi = liikenne, tämä edustaa fontti-awesome kuvaketta.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Kaikki tietyt TCP-portit haluat testata (comma erillinen, ei välilyöntejä).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Kaikki tietyt UDP-satamia haluat testata (comma seperated, ei välilyöntejä).';

$GLOBALS["lang"]['Application'] = 'Hakemus';

$GLOBALS["lang"]['application_id'] = 'Hakemuksen tunniste';

$GLOBALS["lang"]['Application ID'] = 'Hakemuksen tunniste';

$GLOBALS["lang"]['Application Licenses'] = 'Sovelluslisenssit';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Sovellus, käyttöjärjestelmä tai laitteisto.';

$GLOBALS["lang"]['applications'] = 'Hakemukset';

$GLOBALS["lang"]['Applications'] = 'Hakemukset';

$GLOBALS["lang"]['applied'] = 'Sovellettu';

$GLOBALS["lang"]['Applied'] = 'Sovellettu';

$GLOBALS["lang"]['Approved'] = 'Hyväksytty';

$GLOBALS["lang"]['April'] = 'Huhtikuu';

$GLOBALS["lang"]['architecture'] = 'Arkkitehtuuri';

$GLOBALS["lang"]['Architecture'] = 'Arkkitehtuuri';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Haluatko varmasti poistaa tämän syötteen?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Haluatko varmasti poistaa tämän tulosteen?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Oletko varma? Tämä poistaa kaikki jonomerkinnät ja estää jäljellä olevien IP:ien löytymisen.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Oletko varma? Tämä nollaa jonotuslaskennan ja voi aiheuttaa latauksen palvelimelle.';

$GLOBALS["lang"]['area'] = 'Alue';

$GLOBALS["lang"]['Area'] = 'Alue';

$GLOBALS["lang"]['Argentina'] = 'Argentiina';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Laiteympäristöjen ominaisuuksien mukaisesti. Tuotanto, koulutus jne.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Koska olet keräilijät rekisteröity, valitse missä suorittaa tämän löydön.';

$GLOBALS["lang"]['Ask me later'] = 'Kysy myöhemmin';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Pyydä apua tai vastaa muille.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspektisuhde';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspektisuhde';

$GLOBALS["lang"]['Asset ID'] = 'Omaisuuden tunniste';

$GLOBALS["lang"]['asset_ident'] = 'Omaisuuserän tunniste';

$GLOBALS["lang"]['Asset Ident'] = 'Omaisuuserän tunniste';

$GLOBALS["lang"]['asset_number'] = 'Omaisuuserän numero';

$GLOBALS["lang"]['Asset Number'] = 'Omaisuuserän numero';

$GLOBALS["lang"]['asset_tag'] = 'Varallisuustunniste';

$GLOBALS["lang"]['Asset Tag'] = 'Varallisuustunniste';

$GLOBALS["lang"]['Assign Device to Application'] = 'Aseta laite sovellukseen';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Aseta laite klusteriin';

$GLOBALS["lang"]['Assign Device to Location'] = 'Aseta laite sijaintiin';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Aseta laite organisaatiolle';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Aseta laitteet sijaintiin';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Aseta laitteet organisaatioon';

$GLOBALS["lang"]['Assign an Operator'] = 'Määrittele lentotoiminnan harjoittaja';

$GLOBALS["lang"]['Assigned To'] = 'Määrätty';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Tällä hetkellä voimme käyttää netstat_portteja, ohjelmistoja ja käyttäjiä.';

$GLOBALS["lang"]['attached_device_id'] = 'Liitteenä olevan laitteen tunniste';

$GLOBALS["lang"]['Attached Device ID'] = 'Liitteenä olevan laitteen tunniste';

$GLOBALS["lang"]['attached_to'] = 'Liitetty';

$GLOBALS["lang"]['Attached To'] = 'Liitetty';

$GLOBALS["lang"]['attachment'] = 'Liite';

$GLOBALS["lang"]['Attachment'] = 'Liite';

$GLOBALS["lang"]['attachments'] = 'Liitteet';

$GLOBALS["lang"]['Attachments'] = 'Liitteet';

$GLOBALS["lang"]['attack_complexity'] = 'Hyökkäyskompleksi';

$GLOBALS["lang"]['Attack Complexity'] = 'Hyökkäyskompleksi';

$GLOBALS["lang"]['attack_requirements'] = 'Hyökkäysvaatimukset';

$GLOBALS["lang"]['Attack Requirements'] = 'Hyökkäysvaatimukset';

$GLOBALS["lang"]['attack_vector'] = 'Hyökkäys Vector';

$GLOBALS["lang"]['Attack Vector'] = 'Hyökkäys Vector';

$GLOBALS["lang"]['Attribute'] = 'Attribuutti';

$GLOBALS["lang"]['attributes'] = 'Ominaisuudet';

$GLOBALS["lang"]['Attributes'] = 'Ominaisuudet';

$GLOBALS["lang"]['Audit'] = 'Tarkastus';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Tarkastus ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Tarkastusloki';

$GLOBALS["lang"]['Audit Log'] = 'Tarkastusloki';

$GLOBALS["lang"]['Audit My PC'] = 'Audit Oma tietokone';

$GLOBALS["lang"]['Audit OSX'] = 'Tarkastus OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Tarkastustulos';

$GLOBALS["lang"]['Audit Status'] = 'Tarkastuksen tila';

$GLOBALS["lang"]['Audit Windows'] = 'Auditointiikkunat';

$GLOBALS["lang"]['Audit the Device'] = 'Tarkasta laite';

$GLOBALS["lang"]['Audits'] = 'Tarkastukset';

$GLOBALS["lang"]['August'] = 'Elokuu';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Itävalta';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Tunnistautumisen salalause';

$GLOBALS["lang"]['authority_key_ident'] = 'Auktoriteetin avain';

$GLOBALS["lang"]['Authority Key Ident'] = 'Auktoriteetin avain';

$GLOBALS["lang"]['Auto'] = 'Automaattinen';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Open-AudIT-palvelimen automaattisesti asuttama.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatisoitu';

$GLOBALS["lang"]['Automatable'] = 'Automatisoitu';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automaattisesti asutettu perustuu Collectors OS.';

$GLOBALS["lang"]['availability'] = 'Saatavuus';

$GLOBALS["lang"]['Availability'] = 'Saatavuus';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaidžan';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU yhteensä';

$GLOBALS["lang"]['Backup'] = 'Apu';

$GLOBALS["lang"]['Bahamas the'] = 'Bahama';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Pankki';

$GLOBALS["lang"]['Bank'] = 'Pankki';

$GLOBALS["lang"]['Banned'] = 'Kielletty';

$GLOBALS["lang"]['bar_code'] = 'Palkin koodi';

$GLOBALS["lang"]['Bar Code'] = 'Palkin koodi';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Perus DN';

$GLOBALS["lang"]['base_score'] = 'Peruspisteet';

$GLOBALS["lang"]['Base Score'] = 'Peruspisteet';

$GLOBALS["lang"]['base_severity'] = 'Perusvakaus';

$GLOBALS["lang"]['Base Severity'] = 'Perusvakaus';

$GLOBALS["lang"]['based_on'] = 'Perustuu';

$GLOBALS["lang"]['Based On'] = 'Perustuu';

$GLOBALS["lang"]['baseline'] = 'Lähtötaso';

$GLOBALS["lang"]['Baseline'] = 'Lähtötaso';

$GLOBALS["lang"]['baseline_id'] = 'Lähtötason tunniste';

$GLOBALS["lang"]['Baseline ID'] = 'Lähtötason tunniste';

$GLOBALS["lang"]['baselines'] = 'Lähtöarvot';

$GLOBALS["lang"]['Baselines'] = 'Lähtöarvot';

$GLOBALS["lang"]['baselines_policies'] = 'Perustasopolitiikka';

$GLOBALS["lang"]['Baselines Policies'] = 'Perustasopolitiikka';

$GLOBALS["lang"]['Baselines Policy'] = 'Perustasopolitiikka';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Perustaso';

$GLOBALS["lang"]['baselines_results'] = 'Lähtötilanteen tulokset';

$GLOBALS["lang"]['Baselines Results'] = 'Lähtötilanteen tulokset';

$GLOBALS["lang"]['Basic'] = 'Perus';

$GLOBALS["lang"]['Belarus'] = 'Venäjä';

$GLOBALS["lang"]['Belgium'] = 'Belgia';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Vertailuarvo';

$GLOBALS["lang"]['benchmark_id'] = 'Vertailuarvotunniste';

$GLOBALS["lang"]['Benchmark ID'] = 'Vertailuarvotunniste';

$GLOBALS["lang"]['benchmarks'] = 'Vertailuarvot';

$GLOBALS["lang"]['Benchmarks'] = 'Vertailuarvot';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Vertailuarvot Poikkeukset';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Vertailuarvot Poikkeukset';

$GLOBALS["lang"]['benchmarks_log'] = 'Vertailuarvojen loki';

$GLOBALS["lang"]['Benchmarks Log'] = 'Vertailuarvojen loki';

$GLOBALS["lang"]['benchmarks_policies'] = 'Vertailuarvot';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Vertailuarvot';

$GLOBALS["lang"]['benchmarks_result'] = 'Vertailuarvot Tulos';

$GLOBALS["lang"]['Benchmarks Result'] = 'Vertailuarvot Tulos';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Parhaat harjoitukset';

$GLOBALS["lang"]['Best Practises'] = 'Parhaat harjoitukset';

$GLOBALS["lang"]['Bhutan'] = 'Bhutan';

$GLOBALS["lang"]['bios'] = 'Biot';

$GLOBALS["lang"]['Bios'] = 'Biot';

$GLOBALS["lang"]['body'] = 'Keho';

$GLOBALS["lang"]['Body'] = 'Keho';

$GLOBALS["lang"]['Bolivia'] = 'Bolivia';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = 'Käynnistä laite';

$GLOBALS["lang"]['Boot Device'] = 'Käynnistä laite';

$GLOBALS["lang"]['bootable'] = 'Buutabletti';

$GLOBALS["lang"]['Bootable'] = 'Buutabletti';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnia ja Hertsegovina';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasilia';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brasilia';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Brittiläinen Intian valtameren alue (Chagos Saaristo)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Brittiläiset Neitsytsaaret';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Yhteensä';

$GLOBALS["lang"]['Btu Total'] = 'Btu Yhteensä';

$GLOBALS["lang"]['build_number'] = 'Koosta numero';

$GLOBALS["lang"]['Build Number'] = 'Koosta numero';

$GLOBALS["lang"]['build_number_full'] = 'Koosta numero täysi';

$GLOBALS["lang"]['Build Number Full'] = 'Koosta numero täysi';

$GLOBALS["lang"]['Building'] = 'Rakennus';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaria';

$GLOBALS["lang"]['Bulk Edit'] = 'Muokkaa';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk-editointilaitteen ominaisuudet';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Liiketoimintavaatimukset';

$GLOBALS["lang"]['Business Requirements'] = 'Liiketoimintavaatimukset';

$GLOBALS["lang"]['Buy'] = 'Osta';

$GLOBALS["lang"]['Buy More'] = 'Buy More';

$GLOBALS["lang"]['Buy More Licenses'] = 'Osta lisää lisenssit';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maski';

$GLOBALS["lang"]['cli_config'] = 'KLI Asetukset';

$GLOBALS["lang"]['CLI Config'] = 'KLI Asetukset';

$GLOBALS["lang"]['CPU'] = 'Suoritin';

$GLOBALS["lang"]['CPUs'] = 'Suorittimet';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Laskettu löydöstä.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Laskettu tämän verkon IP-osoitteiden kokonaismäärä.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Laskettu valmistuttua, tämän kohteen suorittamiseen kulunut aika.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Laskettu, kun integrointi suoritetaan ja sisältää JSON-esitelmän laitteista tässä integraatiossa. Jokainen linkki <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Laskettu, kun kotoutuminen on käynnissä ja sisältää JSON-esitelmän tämän integraation paikoista. Jokainen linkki <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Lasketaan, kun integrointi suoritetaan, ja se sisältää Open-AudITista valittujen laitteiden määrän.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Laskettu, kun integrointi suoritetaan ja sisältää ulkoisen järjestelmän valitsemien laitteiden määrän.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Lasketaan, kun integrointi suoritetaan, ja se sisältää ulkoisessa järjestelmässä päivitettävien laitteiden määrän.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Laskettu, kun integrointi suoritetaan, ja sisältää Open-AudIT-järjestelmässä päivitettyjen laitteiden määrän.';

$GLOBALS["lang"]['Cambodia'] = 'Kambodža';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Kampuksen alueverkko';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Voi olla <code>active</code>, <code>passive</code> tai tyhjä.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Voi olla <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> tai tyhjä.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Voi olla <code>auto</code>, <code>fixed</code>, <code>other</code> tai tyhjä.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Voi olla <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> tai tyhjä.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Voi olla <code>line</code>, <code>pie</code> tai <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Voi olla <code>user</code> tai <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Voidaan asettaa löytö tai käyttäjä.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Voidaan asettaa löytö tai käyttäjä. Käyttää tunnuksen sijaintitaulukkoon.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Voiko käyttäjä muokata tätä kohdetta.';

$GLOBALS["lang"]['Canada'] = 'Kanada';

$GLOBALS["lang"]['Cancel'] = 'Peruuta';

$GLOBALS["lang"]['capabilities'] = 'Kyvyt';

$GLOBALS["lang"]['Capabilities'] = 'Kyvyt';

$GLOBALS["lang"]['Capacity'] = 'Tilavuus';

$GLOBALS["lang"]['Cape Verde'] = 'Kap Verde';

$GLOBALS["lang"]['Capitalise'] = 'Pääomaa';

$GLOBALS["lang"]['caption'] = 'Kuvateksti';

$GLOBALS["lang"]['Caption'] = 'Kuvateksti';

$GLOBALS["lang"]['Cayman Islands'] = 'Caymansaaret';

$GLOBALS["lang"]['Cellular Details'] = 'Solukohtaiset tiedot';

$GLOBALS["lang"]['Central African Republic'] = 'Keski-Afrikan tasavalta';

$GLOBALS["lang"]['certificate'] = 'Todistus';

$GLOBALS["lang"]['Certificate'] = 'Todistus';

$GLOBALS["lang"]['certificate_file'] = 'Varmennetiedosto';

$GLOBALS["lang"]['Certificate File'] = 'Varmennetiedosto';

$GLOBALS["lang"]['certificate_name'] = 'Todistuksen nimi';

$GLOBALS["lang"]['Certificate Name'] = 'Todistuksen nimi';

$GLOBALS["lang"]['certificates'] = 'Todistukset';

$GLOBALS["lang"]['Certificates'] = 'Todistukset';

$GLOBALS["lang"]['Chad'] = 'Tšad';

$GLOBALS["lang"]['change_id'] = 'Muuta tunnistetta';

$GLOBALS["lang"]['Change ID'] = 'Muuta tunnistetta';

$GLOBALS["lang"]['change_log'] = 'Muuta lokia';

$GLOBALS["lang"]['Change Log'] = 'Muuta lokia';

$GLOBALS["lang"]['change_type'] = 'Muutostyyppi';

$GLOBALS["lang"]['Change Type'] = 'Muutostyyppi';

$GLOBALS["lang"]['check_minutes'] = 'Tarkistuspöytäkirja';

$GLOBALS["lang"]['Check Minutes'] = 'Tarkistuspöytäkirja';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Tarkista SSH näissä satamissa';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Tarkista tästä portista kaikki SSH-palvelut.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Kiina';

$GLOBALS["lang"]['Choose'] = 'Valitse';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Valitse (valitse käyttöjärjestelmä ensin)';

$GLOBALS["lang"]['Choose a Device'] = 'Valitse laite';

$GLOBALS["lang"]['Choose a Table'] = 'Valitse taulukko';

$GLOBALS["lang"]['Christmas Island'] = 'Joulusaari';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Piirien lukumäärä';

$GLOBALS["lang"]['Circuit Count'] = 'Piirien lukumäärä';

$GLOBALS["lang"]['circuit_status'] = 'Virran tila';

$GLOBALS["lang"]['Circuit Status'] = 'Virran tila';

$GLOBALS["lang"]['city'] = 'Kaupunki';

$GLOBALS["lang"]['City'] = 'Kaupunki';

$GLOBALS["lang"]['class'] = 'Luokka';

$GLOBALS["lang"]['Class'] = 'Luokka';

$GLOBALS["lang"]['class_text'] = 'Luokkateksti';

$GLOBALS["lang"]['Class Text'] = 'Luokkateksti';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Napsauta Poista-painiketta poistaaksesi Open-AudIT:n esimerkkilaitteet.<br/>Tämä poistaa alla olevat laitteet tietokannasta. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Napsauta Import-nappia alla, jotta voit populata Open-AudIT:n esimerkkilaitetiedoilla.';

$GLOBALS["lang"]['Client ID'] = 'Asiakkaan tunniste';

$GLOBALS["lang"]['client_ident'] = 'Asiakastunniste';

$GLOBALS["lang"]['Client Ident'] = 'Asiakastunniste';

$GLOBALS["lang"]['client_secret'] = 'Asiakassalaisuus';

$GLOBALS["lang"]['Client Secret'] = 'Asiakassalaisuus';

$GLOBALS["lang"]['client_site_name'] = 'Asiakkaan sivuston nimi';

$GLOBALS["lang"]['Client Site Name'] = 'Asiakkaan sivuston nimi';

$GLOBALS["lang"]['Close'] = 'Sulje';

$GLOBALS["lang"]['Cloud'] = 'Pilvi';

$GLOBALS["lang"]['Cloud Details'] = 'Pilvitiedot';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Pilvitunniste';

$GLOBALS["lang"]['Cloud ID'] = 'Pilvitunniste';

$GLOBALS["lang"]['cloud_log'] = 'Pilviloki';

$GLOBALS["lang"]['Cloud Log'] = 'Pilviloki';

$GLOBALS["lang"]['cloud_name'] = 'Pilvinimi';

$GLOBALS["lang"]['Cloud Name'] = 'Pilvinimi';

$GLOBALS["lang"]['Cloud Network'] = 'Pilviverkko';

$GLOBALS["lang"]['clouds'] = 'Pilvet';

$GLOBALS["lang"]['Clouds'] = 'Pilvet';

$GLOBALS["lang"]['cluster'] = 'Ryhmä';

$GLOBALS["lang"]['Cluster'] = 'Ryhmä';

$GLOBALS["lang"]['cluster_id'] = 'Klusterin tunnus';

$GLOBALS["lang"]['Cluster ID'] = 'Klusterin tunnus';

$GLOBALS["lang"]['cluster_name'] = 'Ryhmän nimi';

$GLOBALS["lang"]['Cluster Name'] = 'Ryhmän nimi';

$GLOBALS["lang"]['cluster_type'] = 'Ryhmätyyppi';

$GLOBALS["lang"]['Cluster Type'] = 'Ryhmätyyppi';

$GLOBALS["lang"]['clusters'] = 'Klusterit';

$GLOBALS["lang"]['Clusters'] = 'Klusterit';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kookossaaret (Keling)';

$GLOBALS["lang"]['Collector'] = 'Kerääjä';

$GLOBALS["lang"]['Collector (UUID)'] = 'Keräilijä (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Keräilijän nimi';

$GLOBALS["lang"]['collector_uuid'] = 'Keräilijä Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Keräilijä Uuid';

$GLOBALS["lang"]['collectors'] = 'Keräilijät';

$GLOBALS["lang"]['Collectors'] = 'Keräilijät';

$GLOBALS["lang"]['Colombia'] = 'Kolumbia';

$GLOBALS["lang"]['color'] = 'Väri';

$GLOBALS["lang"]['Color'] = 'Väri';

$GLOBALS["lang"]['column'] = 'Sarake';

$GLOBALS["lang"]['Column'] = 'Sarake';

$GLOBALS["lang"]['Columns'] = 'Sarakkeet';

$GLOBALS["lang"]['command'] = 'Komento';

$GLOBALS["lang"]['Command'] = 'Komento';

$GLOBALS["lang"]['command_options'] = 'Komentovalinnat';

$GLOBALS["lang"]['Command Options'] = 'Komentovalinnat';

$GLOBALS["lang"]['command_output'] = 'Komentotulostus';

$GLOBALS["lang"]['Command Output'] = 'Komentotulostus';

$GLOBALS["lang"]['command_status'] = 'Komentotila';

$GLOBALS["lang"]['Command Status'] = 'Komentotila';

$GLOBALS["lang"]['command_time_to_execute'] = 'Komentoaika suorittaa';

$GLOBALS["lang"]['Command Time To Execute'] = 'Komentoaika suorittaa';

$GLOBALS["lang"]['comment'] = 'Huomautus';

$GLOBALS["lang"]['Comment'] = 'Huomautus';

$GLOBALS["lang"]['comments'] = 'Huomautukset';

$GLOBALS["lang"]['Comments'] = 'Huomautukset';

$GLOBALS["lang"]['commercial'] = 'Kaupallinen';

$GLOBALS["lang"]['Commercial'] = 'Kaupallinen';

$GLOBALS["lang"]['common_name'] = 'Yleisnimi';

$GLOBALS["lang"]['Common Name'] = 'Yleisnimi';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Yleisesti kutsutaan asiakastunnus.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Yleisesti kutsutaan asiakasSalaisuudeksi.';

$GLOBALS["lang"]['Community'] = 'Yhteisö';

$GLOBALS["lang"]['Community Questions'] = 'Yhteisön kysymykset';

$GLOBALS["lang"]['Community String'] = 'Yhteisön merkkijono';

$GLOBALS["lang"]['Comoros the'] = 'Komorit';

$GLOBALS["lang"]['Compact'] = 'Kompakti';

$GLOBALS["lang"]['Company'] = 'Yritys';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Hyökkäyksen monitahoisuus (vähä tai korkea).';

$GLOBALS["lang"]['Component Table'] = 'Osataulukko';

$GLOBALS["lang"]['Components (All Devices)'] = 'Osat (kaikki laitteet)';

$GLOBALS["lang"]['Compute'] = 'Laske';

$GLOBALS["lang"]['Condition'] = 'Ehto';

$GLOBALS["lang"]['Config'] = 'Asetukset';

$GLOBALS["lang"]['Config Default, currently '] = 'Asetuksen oletus, tällä hetkellä ';

$GLOBALS["lang"]['config_file'] = 'Asetustiedosto';

$GLOBALS["lang"]['Config File'] = 'Asetustiedosto';

$GLOBALS["lang"]['config_manager_error_code'] = 'Asetuksenhallintavirhekoodi';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Asetuksenhallintavirhekoodi';

$GLOBALS["lang"]['configuration'] = 'Asetukset';

$GLOBALS["lang"]['Configuration'] = 'Asetukset';

$GLOBALS["lang"]['Configure'] = 'Määrittele';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo';

$GLOBALS["lang"]['Connected To'] = 'Yhdistetty';

$GLOBALS["lang"]['connection'] = 'Yhteys';

$GLOBALS["lang"]['Connection'] = 'Yhteys';

$GLOBALS["lang"]['Connection Options'] = 'Yhteyden asetukset';

$GLOBALS["lang"]['connection_status'] = 'Yhteystila';

$GLOBALS["lang"]['Connection Status'] = 'Yhteystila';

$GLOBALS["lang"]['connections'] = 'Yhteys';

$GLOBALS["lang"]['Connections'] = 'Yhteys';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Harkitse suodatettua Portit auki';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Harkitse suodatinta Portit auki';

$GLOBALS["lang"]['contact'] = 'Yhteystiedot';

$GLOBALS["lang"]['Contact'] = 'Yhteystiedot';

$GLOBALS["lang"]['contact_name'] = 'Yhteystiedot';

$GLOBALS["lang"]['Contact Name'] = 'Yhteystiedot';

$GLOBALS["lang"]['contained_in'] = 'Sisään';

$GLOBALS["lang"]['Contained In'] = 'Sisään';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Sisältää JSON objektin tiedot liittyvät elementit ja niiden kannat.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Sisältää kentät, jotka päättävät, jos meidän pitäisi käyttää ssh, snmp ja wmi löytö vaihtoehtoja. Json-esine.';

$GLOBALS["lang"]['Context Engine ID'] = 'Kontekstimoottorin tunnus';

$GLOBALS["lang"]['Context Name'] = 'Kontekstin nimi';

$GLOBALS["lang"]['contractual_obligations'] = 'Sopimusvelvoitteet';

$GLOBALS["lang"]['Contractual Obligations'] = 'Sopimusvelvoitteet';

$GLOBALS["lang"]['Cook Islands'] = 'Cookinsaaret';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopioi ja liitä tarkastuksen tulos';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopioi ja liitä alla foorumit, toinen instanssi Open-AudIT tai missä tahansa muualla sinun täytyy antaa tämä kohde.';

$GLOBALS["lang"]['core_count'] = 'Ydinmäärä';

$GLOBALS["lang"]['Core Count'] = 'Ydinmäärä';

$GLOBALS["lang"]['Cores'] = 'Ydin';

$GLOBALS["lang"]['cost_center'] = 'Kustannuskeskus';

$GLOBALS["lang"]['Cost Center'] = 'Kustannuskeskus';

$GLOBALS["lang"]['cost_code'] = 'Kustannuskoodi';

$GLOBALS["lang"]['Cost Code'] = 'Kustannuskoodi';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Norsunluurannikko';

$GLOBALS["lang"]['count'] = 'Lukumäärä';

$GLOBALS["lang"]['Count'] = 'Lukumäärä';

$GLOBALS["lang"]['country'] = 'Maa';

$GLOBALS["lang"]['Country'] = 'Maa';

$GLOBALS["lang"]['country_code'] = 'Maatunnus';

$GLOBALS["lang"]['Country Code'] = 'Maatunnus';

$GLOBALS["lang"]['cpu_count'] = 'Cpu-luku';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu-luku';

$GLOBALS["lang"]['Create'] = 'Luo';

$GLOBALS["lang"]['Create Example Devices'] = 'Luo esimerkkilaitteet';

$GLOBALS["lang"]['create_external_count'] = 'Luo ulkoinen luku';

$GLOBALS["lang"]['Create External Count'] = 'Luo ulkoinen luku';

$GLOBALS["lang"]['create_external_from_internal'] = 'Luo ulkoinen sisäisestä';

$GLOBALS["lang"]['Create External From Internal'] = 'Luo ulkoinen sisäisestä';

$GLOBALS["lang"]['Create Geocode'] = 'Luo geokoodi';

$GLOBALS["lang"]['create_internal_count'] = 'Luo sisäinen luku';

$GLOBALS["lang"]['Create Internal Count'] = 'Luo sisäinen luku';

$GLOBALS["lang"]['create_internal_from_external'] = 'Luo sisäinen ulkoisesta';

$GLOBALS["lang"]['Create Internal From External'] = 'Luo sisäinen ulkoisesta';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Luo NMIS-laitteet Open-AudITista';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Luo avoin Audit Laitteet ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Luo avoin Audit NMIS:n laitteet';

$GLOBALS["lang"]['created_by'] = 'Luonut';

$GLOBALS["lang"]['Created By'] = 'Luonut';

$GLOBALS["lang"]['created_date'] = 'Luotu päivämäärä';

$GLOBALS["lang"]['Created Date'] = 'Luotu päivämäärä';

$GLOBALS["lang"]['Creating'] = 'Luodaan';

$GLOBALS["lang"]['Creating Device'] = 'Luodaan laitetta';

$GLOBALS["lang"]['Creating a Query'] = 'Kyselyn luominen';

$GLOBALS["lang"]['creator'] = 'Luoja';

$GLOBALS["lang"]['Creator'] = 'Luoja';

$GLOBALS["lang"]['credential'] = 'Luotettavuus';

$GLOBALS["lang"]['Credential'] = 'Luotettavuus';

$GLOBALS["lang"]['credentials'] = 'Valtakirjat';

$GLOBALS["lang"]['Credentials'] = 'Valtakirjat';

$GLOBALS["lang"]['Credentials Client ID'] = 'Asiakastunnus';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Valtakirjojen tilaaminen Tunniste';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Valtakirjat';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Cloud Discoveryssä käytetyt Amazon AWS:n valtakirjat';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Microsoftin valtakirjat Azure käytetään Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Kriittinen';

$GLOBALS["lang"]['criticality'] = 'Kriittisyys';

$GLOBALS["lang"]['Criticality'] = 'Kriittisyys';

$GLOBALS["lang"]['Croatia'] = 'Kroatia';

$GLOBALS["lang"]['Cuba'] = 'Kuuba';

$GLOBALS["lang"]['current'] = 'Kuluva';

$GLOBALS["lang"]['Current'] = 'Kuluva';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Nykyiset hakuprosessit';

$GLOBALS["lang"]['Current date & time is '] = 'Nykyinen päivämäärä ja kellonaika on ';

$GLOBALS["lang"]['Currently Installed'] = 'Tällä hetkellä asennettu';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Tällä hetkellä tuetut tyypit ovat <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> tai <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Omat TCP-portit';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Oma UDP Satamat';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Kypros';

$GLOBALS["lang"]['Czech'] = 'tšekki';

$GLOBALS["lang"]['Czech Republic'] = 'Tšekki';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-tili (valinnainen)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Salasana (valinnainen)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS- isäntänimi';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard-tunniste';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard-tunniste';

$GLOBALS["lang"]['dashboards'] = 'taulut';

$GLOBALS["lang"]['Dashboards'] = 'taulut';

$GLOBALS["lang"]['Database'] = 'Tietokanta';

$GLOBALS["lang"]['db_action'] = 'Tietokannan toiminto';

$GLOBALS["lang"]['Database Action'] = 'Tietokannan toiminto';

$GLOBALS["lang"]['db_column'] = 'Tietokantasarake';

$GLOBALS["lang"]['Database Column'] = 'Tietokantasarake';

$GLOBALS["lang"]['Database Definition'] = 'Tietokannan määritelmä';

$GLOBALS["lang"]['db_row'] = 'Tietokantarivi';

$GLOBALS["lang"]['Database Row'] = 'Tietokantarivi';

$GLOBALS["lang"]['Database Schema'] = 'Tietokanta Schema';

$GLOBALS["lang"]['db_table'] = 'Tietokantataulukko';

$GLOBALS["lang"]['Database Table'] = 'Tietokantataulukko';

$GLOBALS["lang"]['dataset_title'] = 'Tiedonkeruun otsikko';

$GLOBALS["lang"]['Dataset Title'] = 'Tiedonkeruun otsikko';

$GLOBALS["lang"]['date'] = 'Päivämäärä';

$GLOBALS["lang"]['Date'] = 'Päivämäärä';

$GLOBALS["lang"]['Date D-M-Y'] = 'Päivämäärä';

$GLOBALS["lang"]['Date M-D-Y'] = 'Päivämäärä';

$GLOBALS["lang"]['Date Now'] = 'Päivämäärä';

$GLOBALS["lang"]['date_of_manufacture'] = 'Valmistuspäivä';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Valmistuspäivä';

$GLOBALS["lang"]['date_paid'] = 'Maksettu päivä';

$GLOBALS["lang"]['Date Paid'] = 'Maksettu päivä';

$GLOBALS["lang"]['date_received'] = 'Vastaanottamispäivä';

$GLOBALS["lang"]['Date Received'] = 'Vastaanottamispäivä';

$GLOBALS["lang"]['Date Y-M-D'] = 'Päivämäärä';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Päivämäärä ja kellonaika, jolloin CVE päivitettiin viimeksi.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'CVE:n julkaisupäivä ja -aika.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'CVE:n julkaisupäivä.';

$GLOBALS["lang"]['DateTime Now'] = 'Aika';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Päivämäärä Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Kuukausipäivä';

$GLOBALS["lang"]['Day Of Month'] = 'Kuukausipäivä';

$GLOBALS["lang"]['day_of_week'] = 'Viikonpäivä';

$GLOBALS["lang"]['Day Of Week'] = 'Viikonpäivä';

$GLOBALS["lang"]['Day of Month'] = 'Kuukausipäivä';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus-tunniste';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus-tunniste';

$GLOBALS["lang"]['Debug'] = 'Vianetsintä';

$GLOBALS["lang"]['December'] = 'Joulukuu';

$GLOBALS["lang"]['Default'] = 'Oletus';

$GLOBALS["lang"]['Default Items'] = 'Oletuserät';

$GLOBALS["lang"]['Default Value'] = 'Oletusarvo';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389. Normaalisti 636 käytetään aktiivisessa LDAPS-hakemistossa.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Oletus <code>3</code> LDAP:lle ja Active Directorylle.';

$GLOBALS["lang"]['Defaults'] = 'Oletukset';

$GLOBALS["lang"]['delay_minutes'] = 'Viivepöytäkirja';

$GLOBALS["lang"]['Delay Minutes'] = 'Viivepöytäkirja';

$GLOBALS["lang"]['Delete'] = 'Poista';

$GLOBALS["lang"]['Delete Example Devices'] = 'Poista esimerkkilaitteet';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Poista ulkoinen sisäisestä';

$GLOBALS["lang"]['Delete External From Internal'] = 'Poista ulkoinen sisäisestä';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Poista NMIS Laitteet, jos ei Open-AudITissa';

$GLOBALS["lang"]['Delete from Application'] = 'Poista sovelluksesta';

$GLOBALS["lang"]['Delete from Cluster'] = 'Poista klusterista';

$GLOBALS["lang"]['Denmark'] = 'Tanska';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Johtuu auditoimalla tai manuaalisesti käyttäjän.';

$GLOBALS["lang"]['Derived by audit.'] = '- Johtui tilintarkastuksesta.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Tuotettu <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Tuotettu <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Se on peräisin keräilijän löydöstä.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Ajoin OS-nimestä.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Pilvilöydöstä.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Johdettu laiteauditoinneista.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Tuotettu laitetyypistä ja käyttöjärjestelmästä.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Löysin sen.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Johdettu isäntänimestä, sysName, dns Hostname ja IP tässä järjestyksessä.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Johtunut kokonaisluku vakavuus.';

$GLOBALS["lang"]['description'] = 'Tavaran kuvaus';

$GLOBALS["lang"]['Description'] = 'Tavaran kuvaus';

$GLOBALS["lang"]['destination'] = 'Määräpaikka';

$GLOBALS["lang"]['Destination'] = 'Määräpaikka';

$GLOBALS["lang"]['detail'] = 'Yksityiskohdat';

$GLOBALS["lang"]['Detail'] = 'Yksityiskohdat';

$GLOBALS["lang"]['Details'] = 'Yksityiskohdat';

$GLOBALS["lang"]['details'] = 'Yksityiskohdat';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Yksityiskohdat siitä, kuka on yleensä yhteydessä tällä sivustolla.';

$GLOBALS["lang"]['device'] = 'Laite';

$GLOBALS["lang"]['Device'] = 'Laite';

$GLOBALS["lang"]['Device Audits'] = 'Laitetarkastukset';

$GLOBALS["lang"]['Device ID'] = 'Laitteen tunniste';

$GLOBALS["lang"]['device_id'] = 'Laitteen tunniste';

$GLOBALS["lang"]['device_id_a'] = 'Laite ID A';

$GLOBALS["lang"]['Device ID A'] = 'Laite ID A';

$GLOBALS["lang"]['device_id_b'] = 'Laite ID B';

$GLOBALS["lang"]['Device ID B'] = 'Laite ID B';

$GLOBALS["lang"]['Device Name'] = 'Laitteen nimi';

$GLOBALS["lang"]['Device Result'] = 'Laitetulos';

$GLOBALS["lang"]['Device Results'] = 'Laitteen tulokset';

$GLOBALS["lang"]['Device Seed'] = 'Laitelevy';

$GLOBALS["lang"]['Device Seed IP'] = 'Laitelevyn IP';

$GLOBALS["lang"]['Device Status'] = 'Laitteen tila';

$GLOBALS["lang"]['Device Types'] = 'Laitetyypit';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Laite on aliverkossa';

$GLOBALS["lang"]['Devices'] = 'Laitteet';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Sijaintiin osoitetut laitteet';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Sijaintiin osoitetut laitteet';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Orgaanille osoitetut laitteet';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Orgaanille osoitetut laitteet';

$GLOBALS["lang"]['Devices Audited'] = 'Laitteet tarkastettu';

$GLOBALS["lang"]['Devices Created in '] = 'Laitteet luotu ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open-AudIT-järjestelmässä luodut laitteet';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Laitteiden oletusnäytön sarakkeet';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Laitteiden oletusnäytön sarakkeet';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Viimeiset 7 päivää';

$GLOBALS["lang"]['Devices Found Today'] = 'Tänään löytyneet laitteet';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Laitteita löytyi eilen';

$GLOBALS["lang"]['Devices Not Audited'] = 'Laitteet, joita ei ole tarkastettu';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = '30 päivää näkemättömät laitteet';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = '7 päivää näkemättömät laitteet';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Laitteet, joita ei ole nähty 90 päivää';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API:n avulla noudetut laitteet';

$GLOBALS["lang"]['Devices Selected from '] = 'Valitut laitteet ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Open-AudITista valitut laitteet';

$GLOBALS["lang"]['Devices Updated in '] = 'Päivitetyt laitteet ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Laitteet päivitetty Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Laitteita vertaillaan.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Laitteita ei arvosteta.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Laitteita voidaan vertailla.';

$GLOBALS["lang"]['Devices in Running State'] = 'Juoksevan tilan laitteet';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Pysäytetyn tilan laitteet';

$GLOBALS["lang"]['Devices in this'] = 'Tässä tarkoitetut laitteet';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Deviroitunut tyypistä tai kokonaiselossaoloajasta.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Käytössä';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Käytössä';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Vuokrasopimus päättyy';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Vuokrasopimus päättyy';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Saatu vuokra';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Saatu vuokra';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp- palvelin';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp- palvelin';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Täynsikö komento onnistuneesti ja palauttaa odotetut tiedot.';

$GLOBALS["lang"]['direction'] = 'Suunta';

$GLOBALS["lang"]['Direction'] = 'Suunta';

$GLOBALS["lang"]['directory'] = 'Kansio';

$GLOBALS["lang"]['Directory'] = 'Kansio';

$GLOBALS["lang"]['disabled'] = 'Ei käytössä';

$GLOBALS["lang"]['Disabled'] = 'Ei käytössä';

$GLOBALS["lang"]['discard'] = 'Hävitä';

$GLOBALS["lang"]['Discard'] = 'Hävitä';

$GLOBALS["lang"]['Discover'] = 'Etsi';

$GLOBALS["lang"]['discoveries'] = 'Havainnot';

$GLOBALS["lang"]['Discoveries'] = 'Havainnot';

$GLOBALS["lang"]['Discovery'] = 'Discovery';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Etsi muutoslokit';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Löydä tietojen säilyttäminen';

$GLOBALS["lang"]['discovery_id'] = 'Etsi tunniste';

$GLOBALS["lang"]['Discovery ID'] = 'Etsi tunniste';

$GLOBALS["lang"]['Discovery Issues'] = 'Discovery kysymykset';

$GLOBALS["lang"]['discovery_log'] = 'Etsi loki';

$GLOBALS["lang"]['Discovery Log'] = 'Etsi loki';

$GLOBALS["lang"]['Discovery Match Options'] = 'Löydä Match-valinnat';

$GLOBALS["lang"]['Discovery Name'] = 'Löytönimi';

$GLOBALS["lang"]['Discovery Options'] = 'Löydä asetukset';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Löytöjonomäärä';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Löydä jonoraja';

$GLOBALS["lang"]['discovery_run'] = 'Löytöajo';

$GLOBALS["lang"]['Discovery Run'] = 'Löytöajo';

$GLOBALS["lang"]['discovery_scan_options'] = 'Löydä skannausasetukset';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Löydä skannausasetukset';

$GLOBALS["lang"]['disk'] = 'Levy';

$GLOBALS["lang"]['Disk'] = 'Levy';

$GLOBALS["lang"]['display_version'] = 'Näytä versio';

$GLOBALS["lang"]['Display Version'] = 'Näytä versio';

$GLOBALS["lang"]['Display in Menu'] = 'Näytä valikossa';

$GLOBALS["lang"]['district'] = 'Alue';

$GLOBALS["lang"]['District'] = 'Alue';

$GLOBALS["lang"]['Djibouti'] = 'Djibouti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg Ota käyttöön';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg Ota käyttöön';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns-palvelimen nimi';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns-palvelimen nimi';

$GLOBALS["lang"]['dns_hostname'] = 'Dns- isäntänimi';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns- isäntänimi';

$GLOBALS["lang"]['dns_server'] = 'Dns- palvelin';

$GLOBALS["lang"]['Dns Server'] = 'Dns- palvelin';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Älä skannaa näitä TCP-portteja.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Älä skannaa näitä UDP-portteja.';

$GLOBALS["lang"]['Do not show me again'] = 'Älä näytä minulle enää.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Haluatko käyttää turvallista kuljetusta (LDAPS) tai säännöllistä salaamatonta LDAP:tä.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Haluatko nähdä tavallisen sivupalkin vasemmalla?';

$GLOBALS["lang"]['documentation'] = 'Asiakirjat';

$GLOBALS["lang"]['Documentation'] = 'Asiakirjat';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Koskeeko lisenssi lapsiorgiaa?';

$GLOBALS["lang"]['domain'] = 'Verkkoalue';

$GLOBALS["lang"]['Domain'] = 'Verkkoalue';

$GLOBALS["lang"]['domain_controller_address'] = 'Verkkoalueen controllerin osoite';

$GLOBALS["lang"]['Domain Controller Address'] = 'Verkkoalueen controllerin osoite';

$GLOBALS["lang"]['domain_controller_name'] = 'Verkkoalueen valvoja Nimi';

$GLOBALS["lang"]['Domain Controller Name'] = 'Verkkoalueen valvoja Nimi';

$GLOBALS["lang"]['domain_role'] = 'Aihealue';

$GLOBALS["lang"]['Domain Role'] = 'Aihealue';

$GLOBALS["lang"]['domain_short'] = 'Alan lyhyt';

$GLOBALS["lang"]['Domain Short'] = 'Alan lyhyt';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominikaaninen tasavalta';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Älä pidä minua kädestä, tiedän mitä teen. Ei suodatinta ja kyky liittyä mukautettuihin taulukoihin.';

$GLOBALS["lang"]['Download'] = 'Lataa';

$GLOBALS["lang"]['Download a file from URL'] = 'Lataa tiedosto URL-osoitteesta';

$GLOBALS["lang"]['driver'] = 'Kuljettaja';

$GLOBALS["lang"]['Driver'] = 'Kuljettaja';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Kesto';

$GLOBALS["lang"]['Duration'] = 'Kesto';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Ecuador';

$GLOBALS["lang"]['Edit'] = 'Muokkaa';

$GLOBALS["lang"]['edit_log'] = 'Muokkaa lokia';

$GLOBALS["lang"]['Edit Log'] = 'Muokkaa lokia';

$GLOBALS["lang"]['editable'] = 'Muokattava';

$GLOBALS["lang"]['Editable'] = 'Muokattava';

$GLOBALS["lang"]['edited_by'] = 'Muokkaa';

$GLOBALS["lang"]['Edited By'] = 'Muokkaa';

$GLOBALS["lang"]['edited_date'] = 'Muokkattu päivämäärä';

$GLOBALS["lang"]['Edited Date'] = 'Muokkattu päivämäärä';

$GLOBALS["lang"]['edition'] = 'Painos';

$GLOBALS["lang"]['Edition'] = 'Painos';

$GLOBALS["lang"]['Egypt'] = 'Egypti';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Joko Amazon, Google tai Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Ei mitään eikä läsnä.

<strong>Ei ole</strong> - Onnistunut hyökkäys ei riipu heikossa asemassa olevan järjestelmän käyttöönotto- ja toteutusolosuhteista. Hyökkääjä voi odottaa voivansa saavuttaa haavoittuvuuden ja toteuttaa hyväksikäytön kaikissa tai useimmissa haavoittuvuustapauksissa.

<strong>Paikalla</strong> - Onnistunut hyökkäys riippuu siitä, onko olemassa erityisiä laukaisu- ja teloitusolosuhteita haavoittuvassa järjestelmässä, joka mahdollistaa hyökkäyksen. Näitä ovat:

On voitettava rotu, jotta haavoittuvuus voidaan hyödyntää. Hyökkäyksen onnistuminen riippuu teloitusolosuhteista, jotka eivät ole täysin hyökkääjän hallinnassa. Hyökkäys on ehkä käynnistettävä useita kertoja yhtä kohdetta vastaan ennen onnistumista.

Verkkoruiske. Hyökkääjän on ruiskutettava itsensä kohteen ja uhrin pyytämän resurssin väliseen loogiseen verkkopolkuun (esim. haavoittuvuudet, jotka edellyttävät väylähyökkääjää).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'Sähköposti';

$GLOBALS["lang"]['Email'] = 'Sähköposti';

$GLOBALS["lang"]['email_address'] = 'Sähköpostiosoite';

$GLOBALS["lang"]['Email Address'] = 'Sähköpostiosoite';

$GLOBALS["lang"]['Email Configuration'] = 'Sähköpostin asetukset';

$GLOBALS["lang"]['Email to send test to'] = 'Sähköposti lähettää testi';

$GLOBALS["lang"]['Enable'] = 'Käytä';

$GLOBALS["lang"]['enabled'] = 'Käytössä';

$GLOBALS["lang"]['Enabled'] = 'Käytössä';

$GLOBALS["lang"]['encryption'] = 'Salaus';

$GLOBALS["lang"]['Encryption'] = 'Salaus';

$GLOBALS["lang"]['encryption_method'] = 'Salausmenetelmä';

$GLOBALS["lang"]['Encryption Method'] = 'Salausmenetelmä';

$GLOBALS["lang"]['encryption_status'] = 'Salauksen tila';

$GLOBALS["lang"]['Encryption Status'] = 'Salauksen tila';

$GLOBALS["lang"]['end_date'] = 'Päättymispäivä';

$GLOBALS["lang"]['End Date'] = 'Päättymispäivä';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Henkilopun tuotetunniste';

$GLOBALS["lang"]['end_of_life'] = 'Elämän loppu';

$GLOBALS["lang"]['End Of Life'] = 'Elämän loppu';

$GLOBALS["lang"]['end_of_production'] = 'Tuotannon lopettaminen';

$GLOBALS["lang"]['End Of Production'] = 'Tuotannon lopettaminen';

$GLOBALS["lang"]['end_of_service'] = 'Palvelun loppu';

$GLOBALS["lang"]['End Of Service'] = 'Palvelun loppu';

$GLOBALS["lang"]['end_of_service_life'] = 'Työsuhteen päättyminen';

$GLOBALS["lang"]['End Of Service Life'] = 'Työsuhteen päättyminen';

$GLOBALS["lang"]['English'] = 'englanti';

$GLOBALS["lang"]['enterprise'] = 'Yritys';

$GLOBALS["lang"]['Enterprise'] = 'Yritys';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Yksityinen yritysverkosto';

$GLOBALS["lang"]['Entitlement Type'] = 'Oikeustyyppi';

$GLOBALS["lang"]['environment'] = 'Ympäristö';

$GLOBALS["lang"]['Environment'] = 'Ympäristö';

$GLOBALS["lang"]['Equal To'] = 'Yhtä suuri kuin';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Yhtä suuri tai suurempi kuin';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Yhtä suuri tai pienempi kuin';

$GLOBALS["lang"]['Equals'] = 'Yhtäläiset';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Guinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Virhe';

$GLOBALS["lang"]['Error Code'] = 'Virhekoodi';

$GLOBALS["lang"]['Established'] = 'Perustettu';

$GLOBALS["lang"]['Estonia'] = 'Viro';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopia';

$GLOBALS["lang"]['Every'] = 'Joka';

$GLOBALS["lang"]['Every Day'] = 'Joka päivä';

$GLOBALS["lang"]['Exceptions'] = 'Poikkeukset';

$GLOBALS["lang"]['exclude'] = 'Poista';

$GLOBALS["lang"]['Exclude'] = 'Poista';

$GLOBALS["lang"]['exclude_ip'] = 'Poista IP';

$GLOBALS["lang"]['Exclude IP'] = 'Poista IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Poista IP-osoitteet';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Ei sisällä TCP-portteja';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Poista Tcp- portit';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Poista Tcp- portit';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Pois lukien UDP- satamat';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Poista Udp-portit';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Poista Udp-portit';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Poista nämä IP-osoitteet Nmapin luotauksesta.';

$GLOBALS["lang"]['Excluded'] = 'Ei koske';

$GLOBALS["lang"]['exclusion_reasons'] = 'Poissulkemisperusteet';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Poissulkemisperusteet';

$GLOBALS["lang"]['executable'] = 'Suoritettava';

$GLOBALS["lang"]['Executable'] = 'Suoritettava';

$GLOBALS["lang"]['executable_id'] = 'Suoritettavan tunniste';

$GLOBALS["lang"]['Executable ID'] = 'Suoritettavan tunniste';

$GLOBALS["lang"]['executables'] = 'Suoritettavat tiedostot';

$GLOBALS["lang"]['Executables'] = 'Suoritettavat tiedostot';

$GLOBALS["lang"]['Execute'] = 'Suorita';

$GLOBALS["lang"]['Executing'] = 'Toteutetaan';

$GLOBALS["lang"]['exemption_reason'] = 'Vapautuksen peruste';

$GLOBALS["lang"]['Exemption Reason'] = 'Vapautuksen peruste';

$GLOBALS["lang"]['Existing Building'] = 'Olemassa oleva rakennus';

$GLOBALS["lang"]['Existing Floor'] = 'Olemassa oleva kerros';

$GLOBALS["lang"]['Existing Room'] = 'Olemassa oleva huone';

$GLOBALS["lang"]['Existing Row'] = 'Olemassa oleva rivi';

$GLOBALS["lang"]['expire_date'] = 'Päivämäärä';

$GLOBALS["lang"]['Expire Date'] = 'Päivämäärä';

$GLOBALS["lang"]['expire_minutes'] = 'Loppupöytäkirja';

$GLOBALS["lang"]['Expire Minutes'] = 'Loppupöytäkirja';

$GLOBALS["lang"]['expires'] = 'Päättyy';

$GLOBALS["lang"]['Expires'] = 'Päättyy';

$GLOBALS["lang"]['expiry_date'] = 'Viimeinen voimassaolopäivä';

$GLOBALS["lang"]['Expiry Date'] = 'Viimeinen voimassaolopäivä';

$GLOBALS["lang"]['exploit_maturity'] = 'Hyödynnä maturiteetti';

$GLOBALS["lang"]['Exploit Maturity'] = 'Hyödynnä maturiteetti';

$GLOBALS["lang"]['Export'] = 'Vie';

$GLOBALS["lang"]['Export by Device'] = 'Vie laitteella';

$GLOBALS["lang"]['Export by Policy'] = 'Vienti politiikan mukaan';

$GLOBALS["lang"]['Export data to'] = 'Vie tiedot';

$GLOBALS["lang"]['expose'] = 'Paljasta';

$GLOBALS["lang"]['Expose'] = 'Paljasta';

$GLOBALS["lang"]['External'] = 'Ulkoiset';

$GLOBALS["lang"]['External Field Name'] = 'Ulkoisen kentän nimi';

$GLOBALS["lang"]['External Field Type'] = 'Ulkoisen kentän tyyppi';

$GLOBALS["lang"]['external_ident'] = 'Ulkoinen tunnistus';

$GLOBALS["lang"]['External Ident'] = 'Ulkoinen tunnistus';

$GLOBALS["lang"]['external_link'] = 'Ulkoinen linkki';

$GLOBALS["lang"]['External Link'] = 'Ulkoinen linkki';

$GLOBALS["lang"]['extra_columns'] = 'Ylimääräiset sarakkeet';

$GLOBALS["lang"]['Extra Columns'] = 'Ylimääräiset sarakkeet';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Extra ja enemmän verbose hakkuu syntyy vianmääritys.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW:n revisio';

$GLOBALS["lang"]['Fail'] = 'Virhe';

$GLOBALS["lang"]['Failed'] = 'Ei onnistunut';

$GLOBALS["lang"]['Failed Severity'] = 'Vaikeus';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandinsaaret (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Perhe';

$GLOBALS["lang"]['Faroe Islands'] = 'Färsaaret';

$GLOBALS["lang"]['Features'] = 'Ominaisuudet';

$GLOBALS["lang"]['February'] = 'Helmikuu';

$GLOBALS["lang"]['field'] = 'Kenttä';

$GLOBALS["lang"]['Field'] = 'Kenttä';

$GLOBALS["lang"]['field_id'] = 'Kenttätunnus';

$GLOBALS["lang"]['Field ID'] = 'Kenttätunnus';

$GLOBALS["lang"]['Field Name'] = 'Kentän nimi';

$GLOBALS["lang"]['Field Type'] = 'Kentän tyyppi';

$GLOBALS["lang"]['Fields'] = 'Kentät';

$GLOBALS["lang"]['fields'] = 'Kentät';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidži';

$GLOBALS["lang"]['File'] = 'Tiedosto';

$GLOBALS["lang"]['File Import'] = 'Tiedoston tuonti';

$GLOBALS["lang"]['File Input'] = 'Tiedostosyöte';

$GLOBALS["lang"]['file_name'] = 'Tiedostonimi';

$GLOBALS["lang"]['File Name'] = 'Tiedostonimi';

$GLOBALS["lang"]['file_size'] = 'Tiedoston koko';

$GLOBALS["lang"]['File Size'] = 'Tiedoston koko';

$GLOBALS["lang"]['filename'] = 'Tiedostonimi';

$GLOBALS["lang"]['Filename'] = 'Tiedostonimi';

$GLOBALS["lang"]['files'] = 'Tiedostot';

$GLOBALS["lang"]['Files'] = 'Tiedostot';

$GLOBALS["lang"]['files_id'] = 'Tiedoston tunniste';

$GLOBALS["lang"]['Files ID'] = 'Tiedoston tunniste';

$GLOBALS["lang"]['filter'] = 'Suodatin';

$GLOBALS["lang"]['Filter'] = 'Suodatin';

$GLOBALS["lang"]['filtered'] = 'suodatettu';

$GLOBALS["lang"]['Filtered'] = 'suodatettu';

$GLOBALS["lang"]['Finland'] = 'Suomi';

$GLOBALS["lang"]['Firewall'] = 'Palomuuri';

$GLOBALS["lang"]['firewall_rule'] = 'Palomuurin sääntö';

$GLOBALS["lang"]['Firewall Rule'] = 'Palomuurin sääntö';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revision';

$GLOBALS["lang"]['First Name'] = 'Etunimi';

$GLOBALS["lang"]['first_run'] = 'Ensimmäinen suorita';

$GLOBALS["lang"]['First Run'] = 'Ensimmäinen suorita';

$GLOBALS["lang"]['first_seen'] = 'Ensimmäinen';

$GLOBALS["lang"]['First Seen'] = 'Ensimmäinen';

$GLOBALS["lang"]['FirstWave'] = 'Ensimmäinen Wave';

$GLOBALS["lang"]['Fix'] = 'Korjaa';

$GLOBALS["lang"]['Fixed'] = 'Kiinteä';

$GLOBALS["lang"]['Floor'] = 'Lattia';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Seuraa alla olevia linkkejä ja selvitä, miten Open-AudIT:ia käytetään selvittääksesi <b>Mitä verkossasi on?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Siemenlöytöä varten, pitäisikö minun vain löytää IP-osoitteen tila.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Siemenlöydöstä, jos löydän vain IP:t valitusta aliverkosta.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Siemenlöytöä varten, pitäisikö minun etsiä aliverkko ennen löytöä.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Raakaa SQL-kyselyä varten. Kuten per Queries, sinun täytyy sisällyttää <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Luvista, jotka eivät ole ikuisia, milloin lisenssi päättyy.';

$GLOBALS["lang"]['form_factor'] = 'Muoto';

$GLOBALS["lang"]['Form Factor'] = 'Muoto';

$GLOBALS["lang"]['format'] = 'Muoto';

$GLOBALS["lang"]['Format'] = 'Muoto';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Ranska';

$GLOBALS["lang"]['free'] = 'Vapaa';

$GLOBALS["lang"]['Free'] = 'Vapaa';

$GLOBALS["lang"]['French'] = 'ranska';

$GLOBALS["lang"]['French Guiana'] = 'Ranskan Guyana';

$GLOBALS["lang"]['French Polynesia'] = 'Ranskan Polynesia';

$GLOBALS["lang"]['French Southern Territories'] = 'Ranskan eteläiset alueet';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Usein kysytyt kysymykset';

$GLOBALS["lang"]['Friday'] = 'Perjantai';

$GLOBALS["lang"]['From 100 Devices'] = '100 laitteesta';

$GLOBALS["lang"]['From 500 Devices'] = '500 laitteesta';

$GLOBALS["lang"]['full_name'] = 'Koko nimi';

$GLOBALS["lang"]['Full Name'] = 'Koko nimi';

$GLOBALS["lang"]['function'] = 'Toiminto';

$GLOBALS["lang"]['Function'] = 'Toiminto';

$GLOBALS["lang"]['GROUP BY'] = 'RYHMÄ';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['gateway'] = 'Portti';

$GLOBALS["lang"]['Gateway'] = 'Portti';

$GLOBALS["lang"]['gateways'] = 'Portti';

$GLOBALS["lang"]['Gateways'] = 'Portti';

$GLOBALS["lang"]['Generated By'] = 'Luonut';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'Saksa';

$GLOBALS["lang"]['Germany'] = 'Saksa';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Aloita';

$GLOBALS["lang"]['Get a Free License'] = 'Hanki ilmainen lisenssi';

$GLOBALS["lang"]['Getting Started'] = 'Aloittaminen';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery Options';

$GLOBALS["lang"]['Go'] = 'Mene.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Computen kentät';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Mapsin sovellusliittymä Avain';

$GLOBALS["lang"]['Greater Than'] = 'Suurempi kuin';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Suurempi kuin tai yhtä suuri kuin';

$GLOBALS["lang"]['Greece'] = 'Kreikka';

$GLOBALS["lang"]['Green Query'] = 'Vihreä kysely';

$GLOBALS["lang"]['Greenland'] = 'Grönlanti';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Ryhmä';

$GLOBALS["lang"]['group_by'] = 'Ryhmä';

$GLOBALS["lang"]['Group By'] = 'Ryhmä';

$GLOBALS["lang"]['group_id'] = 'Ryhmän tunnus';

$GLOBALS["lang"]['Group ID'] = 'Ryhmän tunnus';

$GLOBALS["lang"]['groups'] = 'Ryhmät';

$GLOBALS["lang"]['Groups'] = 'Ryhmät';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'Vieraan laitteen tunniste';

$GLOBALS["lang"]['Guest Device ID'] = 'Vieraan laitteen tunniste';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW- revisio';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Kovalevyindeksi';

$GLOBALS["lang"]['Hard Drive Index'] = 'Kovalevyindeksi';

$GLOBALS["lang"]['hardware_revision'] = 'Laitteiston tarkistus';

$GLOBALS["lang"]['Hardware Revision'] = 'Laitteiston tarkistus';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Onko tätä käytäntöä sovellettu tässä organisaatiossa?';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Pää';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard ja McDonaldsaaret';

$GLOBALS["lang"]['height'] = 'Korkeus';

$GLOBALS["lang"]['Height'] = 'Korkeus';

$GLOBALS["lang"]['Height in RU'] = 'Rautatieyrityksen korkeus';

$GLOBALS["lang"]['Help'] = 'Ohje';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Apua ja usein kysyttyä';

$GLOBALS["lang"]['high'] = 'Korkea';

$GLOBALS["lang"]['High'] = 'Korkea';

$GLOBALS["lang"]['High Availability'] = 'Korkea saatavuus';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Pyhä istuin (Vatikaanivaltio)';

$GLOBALS["lang"]['Home'] = 'Alkuun';

$GLOBALS["lang"]['home'] = 'Alkuun';

$GLOBALS["lang"]['Home Area Network'] = 'Kotialueverkko';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Palvelin';

$GLOBALS["lang"]['Host'] = 'Palvelin';

$GLOBALS["lang"]['hostname'] = 'Verkkonimi';

$GLOBALS["lang"]['Hostname'] = 'Verkkonimi';

$GLOBALS["lang"]['hour'] = 'Tunti';

$GLOBALS["lang"]['Hour'] = 'Tunti';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Miten ja miksi Open-AudIT on turvallisempi';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Kuinka kauan komento kesti?';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Kauanko Nmapin pitäisi odottaa vastausta?';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Montako piiriä tähän telineeseen syötetään?';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Kuinka moni politiikka johtaa epäonnistumiseen.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Kuinka monta politiikkaa johtaa pass.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Montako pistorasiaa telineessä on?';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Montako hyllyä tämä on?';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Kuinka usein keräilijän pitäisi pyytää palvelimelta tehtävää.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Miten valitsemme integroidut laitteet (käyttäen Attribuuttia, kyselyä tai ryhmää).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Miten haavoittuvuutta hyödynnetään (esim. verkko, Adjacent, Paikallinen, Fyysinen).';

$GLOBALS["lang"]['How to compare'] = 'Vertailu';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Ihmisen luettavissa oleva selitys haavoittuvuudesta.';

$GLOBALS["lang"]['Hungary'] = 'Unkari';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperkierre';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperkierre';

$GLOBALS["lang"]['I have read the EULA.'] = 'Olen lukenut EULA:n.';

$GLOBALS["lang"]['id'] = 'Tunniste';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'IOS-versio';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP- osoite';

$GLOBALS["lang"]['IP Addresses'] = 'IP-osoitteet';

$GLOBALS["lang"]['IP Last Seen'] = 'IP- viimeksi nähty';

$GLOBALS["lang"]['IP Set By'] = 'IP- asetus';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Ainoastaan ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Islanti';

$GLOBALS["lang"]['icon'] = 'Kuvake';

$GLOBALS["lang"]['Icon'] = 'Kuvake';

$GLOBALS["lang"]['Icon and Text'] = 'Kuvake ja teksti';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Vain kuvake, teksti tai kuvake ja teksti.';

$GLOBALS["lang"]['id_internal'] = 'Sisäinen tunniste';

$GLOBALS["lang"]['Id Internal'] = 'Sisäinen tunniste';

$GLOBALS["lang"]['id_number'] = 'Tunnistenumero';

$GLOBALS["lang"]['Id Number'] = 'Tunnistenumero';

$GLOBALS["lang"]['identification'] = 'Tunnistetiedot';

$GLOBALS["lang"]['Identification'] = 'Tunnistetiedot';

$GLOBALS["lang"]['If'] = 'Jos';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Jos portti reagoi suodatettu, pitäisikö meidän pitää se saatavilla.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Jos satama vastaa avoimella suodatetulla, pitäisikö meidän katsoa sen olevan saatavilla?';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Jos etälaitetta ei ole Open-AudIT-valituissa laitteissa, poistamme sen ulkoisesta järjestelmästä.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Jos Open-AudIT-laitetta on muutettu, meidän pitäisi päivittää ulkoinen järjestelmä.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Jos Open-AudIT-laite ei ole ulkoisessa järjestelmässä, meidän pitäisi luoda se.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Jos agentti ilmoittaa IP:n olevan tässä aliverkossa, suorita toimet.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Jos jokin näistä (samanlainen, ei välilyöntejä) porteista havaitaan, oleta SSH:n käyttävän niitä ja käyttävän niitä tilintarkastukseen. Ei tarvitse lisätä tätä porttia Custom TCP-portteihin - se lisätään automaattisesti.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Jos valittu, sinulla on JSON-joukko erityisiä laite sarakkeita, jotka käyttäjä on valinnut nähtäväksi, muu kuin asetus oletus.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Jos välittäjä OS-perhe (tapaus tunteeton) sisältää tämän merkkijonon, suorittaa toimia.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Jos seuraavat edellytykset täyttyvät:<br/><ul><li>a Rooli on osoitettu ad_group</li><li>an Orgalla on osoitettu ad_group</li><li>LDAP Palvelin on käyttää_roles asetettu y</li><li>käyttäjä on olemassa LDAP (olipa se aktiivinen Directory tai OpenLDAP) ja on osoitettu ad_groups</li></ul>Että käyttäjä voi kirjautua Open-AudIT ilman tiliä Open-AudIT tarvitsee luoda. Open-AudIT tiedustelee kyseessä olevaa LDAP:tä ja jos käyttäjä on vaadituissa ryhmissä, mutta ei Open-AudIT:ssä, heidän käyttäjäattribuuttinsa (nimi, koko nimi, sähköposti, roolit, orgit jne.) Open-AudIT:ssä tulevat automaattisesti asutuiksi ja kirjautuvat sisään.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Jos käyttäjä kirjautuu Open-AudITiin, hänellä ei ole pääsyä LDAP-hakuun, voit käyttää toista tiliä, jolla on tämä pääsy.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Jos tämä useita tai useampia minuutteja on kulunut siitä, kun laite otti yhteyttä palvelimeen, suorittaa toimia.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Jos valitset Collector, se on tarkoitus suorittaa seuraavan 5 minuutin raja.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignored'] = 'Ei huomioitu';

$GLOBALS["lang"]['image'] = 'Kuva';

$GLOBALS["lang"]['Image'] = 'Kuva';

$GLOBALS["lang"]['Images'] = 'Kuvat';

$GLOBALS["lang"]['impact_availability'] = 'Vaikutusten saatavuus';

$GLOBALS["lang"]['Impact Availability'] = 'Vaikutusten saatavuus';

$GLOBALS["lang"]['impact_confidentiality'] = 'Vaikutus Luottamuksellisuus';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Vaikutus Luottamuksellisuus';

$GLOBALS["lang"]['impact_integrity'] = 'Vaikutusten eheys';

$GLOBALS["lang"]['Impact Integrity'] = 'Vaikutusten eheys';

$GLOBALS["lang"]['implementation_notes'] = 'Täytäntöönpano Huomautuksia';

$GLOBALS["lang"]['Implementation Notes'] = 'Täytäntöönpano Huomautuksia';

$GLOBALS["lang"]['Import'] = 'Tuo';

$GLOBALS["lang"]['Import Example Data'] = 'Tuo esimerkkitiedot';

$GLOBALS["lang"]['improvement_opportunities'] = 'Parannusmahdollisuudet';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Parannusmahdollisuudet';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['Inactive'] = 'Ei aktiivinen';

$GLOBALS["lang"]['Include'] = 'Sisältää';

$GLOBALS["lang"]['Incomplete'] = 'Epätäydellinen';

$GLOBALS["lang"]['Index'] = 'Hakemisto';

$GLOBALS["lang"]['India'] = 'Intia';

$GLOBALS["lang"]['Indonesia'] = 'Indonesia';

$GLOBALS["lang"]['Info'] = 'Tietoja';

$GLOBALS["lang"]['Informational'] = 'Tietoa';

$GLOBALS["lang"]['initial_size'] = 'Alkukoko';

$GLOBALS["lang"]['Initial Size'] = 'Alkukoko';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Syöttötyyppi';

$GLOBALS["lang"]['inputs'] = 'Panokset';

$GLOBALS["lang"]['Inputs'] = 'Panokset';

$GLOBALS["lang"]['Insane'] = 'Hullu';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Lisää esimerkkitiedot ja löydä kaikki, mitä Open-AudIT voi kertoa.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Lisää Ostolisenssi Avain';

$GLOBALS["lang"]['install'] = 'Asenna';

$GLOBALS["lang"]['Install'] = 'Asenna';

$GLOBALS["lang"]['install_date'] = 'Asennuspäivä';

$GLOBALS["lang"]['Install Date'] = 'Asennuspäivä';

$GLOBALS["lang"]['install_directory'] = 'Asenna kansio';

$GLOBALS["lang"]['Install Directory'] = 'Asenna kansio';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Asenna OpenScap tarvittaessa';

$GLOBALS["lang"]['install_source'] = 'Asenna lähdekoodi';

$GLOBALS["lang"]['Install Source'] = 'Asenna lähdekoodi';

$GLOBALS["lang"]['installed_by'] = 'Asennettu';

$GLOBALS["lang"]['Installed By'] = 'Asennettu';

$GLOBALS["lang"]['installed_on'] = 'Asennettu';

$GLOBALS["lang"]['Installed On'] = 'Asennettu';

$GLOBALS["lang"]['Installing on Linux'] = 'Asennus Linuxille';

$GLOBALS["lang"]['Installing on MacOS'] = 'Asennus MacOS-järjestelmään';

$GLOBALS["lang"]['Installing on Windows'] = 'Asennus Windowsissa';

$GLOBALS["lang"]['instance'] = 'Yhteisöjen tuomioistuin';

$GLOBALS["lang"]['Instance'] = 'Yhteisöjen tuomioistuin';

$GLOBALS["lang"]['instance_ident'] = 'Esityksen sidenttinen';

$GLOBALS["lang"]['Instance Ident'] = 'Esityksen sidenttinen';

$GLOBALS["lang"]['instance_options'] = 'Näytä valinnat';

$GLOBALS["lang"]['Instance Options'] = 'Näytä valinnat';

$GLOBALS["lang"]['instance_provider'] = 'Esimerkin tarjoaja';

$GLOBALS["lang"]['Instance Provider'] = 'Esimerkin tarjoaja';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Asia Tunniste';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Asia Tunniste';

$GLOBALS["lang"]['instance_state'] = 'Yhteisöjen tuomioistuin';

$GLOBALS["lang"]['Instance State'] = 'Yhteisöjen tuomioistuin';

$GLOBALS["lang"]['instance_tags'] = 'Instanssitagit';

$GLOBALS["lang"]['Instance Tags'] = 'Instanssitagit';

$GLOBALS["lang"]['instance_type'] = 'Esityksen tyyppi';

$GLOBALS["lang"]['Instance Type'] = 'Esityksen tyyppi';

$GLOBALS["lang"]['Integer'] = 'Kokonaisluku';

$GLOBALS["lang"]['Integration'] = 'Kotouttaminen';

$GLOBALS["lang"]['integrations'] = 'Integraatiot';

$GLOBALS["lang"]['Integrations'] = 'Integraatiot';

$GLOBALS["lang"]['integrations_id'] = 'Integraatioiden tunniste';

$GLOBALS["lang"]['Integrations ID'] = 'Integraatioiden tunniste';

$GLOBALS["lang"]['integrations_log'] = 'Integraatioloki';

$GLOBALS["lang"]['Integrations Log'] = 'Integraatioloki';

$GLOBALS["lang"]['interface'] = 'Liitäntä';

$GLOBALS["lang"]['Interface'] = 'Liitäntä';

$GLOBALS["lang"]['interface_id'] = 'Liitäntätunnus';

$GLOBALS["lang"]['Interface ID'] = 'Liitäntätunnus';

$GLOBALS["lang"]['interface_type'] = 'Liitäntätyyppi';

$GLOBALS["lang"]['Interface Type'] = 'Liitäntätyyppi';

$GLOBALS["lang"]['Internal'] = 'Sisäinen';

$GLOBALS["lang"]['Internal Field Name'] = 'Sisäinen kentän nimi';

$GLOBALS["lang"]['Internal ID'] = 'Sisäinen tunniste';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Sisäiset JSON-palkit tälle käyttäjälle.';

$GLOBALS["lang"]['Introduction'] = 'Johdanto';

$GLOBALS["lang"]['invoice'] = 'Lasku';

$GLOBALS["lang"]['Invoice'] = 'Lasku';

$GLOBALS["lang"]['invoice_id'] = 'Laskun tunniste';

$GLOBALS["lang"]['Invoice ID'] = 'Laskun tunniste';

$GLOBALS["lang"]['invoice_item'] = 'Laskukappale';

$GLOBALS["lang"]['Invoice Item'] = 'Laskukappale';

$GLOBALS["lang"]['ios_version'] = 'Ios-versio';

$GLOBALS["lang"]['Ios Version'] = 'Ios-versio';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Osoite ulkoinen A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Osoite ulkoinen A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip-osoite Ulkoinen B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip-osoite Ulkoinen B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip-osoite Sisäinen A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip-osoite Sisäinen A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip-osoite Sisäinen B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip-osoite Sisäinen B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip Kaikki luvut';

$GLOBALS["lang"]['Ip All Count'] = 'Ip Kaikki luvut';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Tarkastettu luku';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Tarkastettu luku';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Löytynyt määrä';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Löytynyt määrä';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Käytössä';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Käytössä';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Vastaus';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Vastaus';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip skannattu luku';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip skannattu luku';

$GLOBALS["lang"]['Iran'] = 'Iran';

$GLOBALS["lang"]['Iraq'] = 'Irak';

$GLOBALS["lang"]['Ireland'] = 'Irlanti';

$GLOBALS["lang"]['Is FRU'] = 'Onko FRU';

$GLOBALS["lang"]['is_fru'] = 'Onko Fru';

$GLOBALS["lang"]['Is Fru'] = 'Onko Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Onko NMIS-palvelin paikallinen (tällä Open-AudIT-palvelimella) vai etä?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Onko tämä tili aktiivinen? Jos valittu <code>n</code>, käyttäjä ei voi kirjautua sisään.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Onko tämä kysely rajoitettu lisensoituihin asiakkaisiin.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Onko tämä tehtävä käytössä (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Mansaari';

$GLOBALS["lang"]['Israel'] = 'Israel';

$GLOBALS["lang"]['Issue'] = 'Aihe';

$GLOBALS["lang"]['issuer'] = 'Liikkeeseenlaskija';

$GLOBALS["lang"]['Issuer'] = 'Liikkeeseenlaskija';

$GLOBALS["lang"]['issuer_name'] = 'Liikkeeseenlaskijan nimi';

$GLOBALS["lang"]['Issuer Name'] = 'Liikkeeseenlaskijan nimi';

$GLOBALS["lang"]['Issues'] = 'Ongelmat';

$GLOBALS["lang"]['Italy'] = 'Italia';

$GLOBALS["lang"]['Items not in Baseline'] = 'Erät, jotka eivät sisälly lähtötilanteeseen';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON tuo';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika';

$GLOBALS["lang"]['January'] = 'Tammikuu';

$GLOBALS["lang"]['Japan'] = 'Japani';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordania';

$GLOBALS["lang"]['July'] = 'Heinäkuu';

$GLOBALS["lang"]['June'] = 'Kesäkuu';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakstan';

$GLOBALS["lang"]['Kenya'] = 'Kenia';

$GLOBALS["lang"]['kernel_version'] = 'Ytimen versio';

$GLOBALS["lang"]['Kernel Version'] = 'Ytimen versio';

$GLOBALS["lang"]['Key'] = 'Avain';

$GLOBALS["lang"]['Key Password (optional)'] = 'Avainsalasana (valinnainen)';

$GLOBALS["lang"]['keys'] = 'Avaimet';

$GLOBALS["lang"]['Keys'] = 'Avaimet';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgisian tasavalta';

$GLOBALS["lang"]['lang'] = 'Lang.';

$GLOBALS["lang"]['Lang'] = 'Lang.';

$GLOBALS["lang"]['language'] = 'Kieli';

$GLOBALS["lang"]['Language'] = 'Kieli';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Viimeksi muutettu';

$GLOBALS["lang"]['Last Changed'] = 'Viimeksi muutettu';

$GLOBALS["lang"]['last_finished'] = 'Valmis';

$GLOBALS["lang"]['Last Finished'] = 'Valmis';

$GLOBALS["lang"]['last_logon'] = 'Viimeisin kirjautuminen';

$GLOBALS["lang"]['Last Logon'] = 'Viimeisin kirjautuminen';

$GLOBALS["lang"]['Last Name'] = 'Sukunimi';

$GLOBALS["lang"]['last_os_update'] = 'Viimeisin Os- päivitys';

$GLOBALS["lang"]['Last Os Update'] = 'Viimeisin Os- päivitys';

$GLOBALS["lang"]['last_result'] = 'Viimeisin tulos';

$GLOBALS["lang"]['Last Result'] = 'Viimeisin tulos';

$GLOBALS["lang"]['last_run'] = 'Viimeksi';

$GLOBALS["lang"]['Last Run'] = 'Viimeksi';

$GLOBALS["lang"]['last_seen'] = 'Viimeksi nähty';

$GLOBALS["lang"]['Last Seen'] = 'Viimeksi nähty';

$GLOBALS["lang"]['last_seen_by'] = 'Viimeksi nähty By';

$GLOBALS["lang"]['Last Seen By'] = 'Viimeksi nähty By';

$GLOBALS["lang"]['last_user'] = 'Viimeinen käyttäjä';

$GLOBALS["lang"]['Last User'] = 'Viimeinen käyttäjä';

$GLOBALS["lang"]['lastModified'] = 'LastMkodifioitu';

$GLOBALS["lang"]['LastModified'] = 'LastMkodifioitu';

$GLOBALS["lang"]['latitude'] = 'Pituusaste';

$GLOBALS["lang"]['Latitude'] = 'Pituusaste';

$GLOBALS["lang"]['Latvia'] = 'Latvia';

$GLOBALS["lang"]['Layout'] = 'Asettelu';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn -tili';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn -tili';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Salasana';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Salasana';

$GLOBALS["lang"]['Learn About'] = 'Opi';

$GLOBALS["lang"]['Learn More'] = 'Lisätietoja';

$GLOBALS["lang"]['lease_expiry_date'] = 'Vuokran päättymispäivä';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Vuokran päättymispäivä';

$GLOBALS["lang"]['Lebanon'] = 'Libanon';

$GLOBALS["lang"]['legal_requirements'] = 'Oikeudelliset vaatimukset';

$GLOBALS["lang"]['Legal Requirements'] = 'Oikeudelliset vaatimukset';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Alle';

$GLOBALS["lang"]['Less Than or Equals'] = 'Vähemmän tai yhtä suuri kuin';

$GLOBALS["lang"]['level'] = 'Taso';

$GLOBALS["lang"]['Level'] = 'Taso';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Hyödyntämiseen tarvittavien etuoikeuksien taso (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libya';

$GLOBALS["lang"]['License'] = 'Lisenssi';

$GLOBALS["lang"]['License Key'] = 'Lisenssin avain';

$GLOBALS["lang"]['License Required'] = 'Vaadittu lisenssi';

$GLOBALS["lang"]['licenses'] = 'Lisenssit';

$GLOBALS["lang"]['Licenses'] = 'Lisenssit';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Kuten';

$GLOBALS["lang"]['limit'] = 'Raja';

$GLOBALS["lang"]['Limit'] = 'Raja';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Rajoita kysely ensimmäiseen X-kohtaan.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Rajoitettu 100 riviin.';

$GLOBALS["lang"]['line_amount'] = 'Määrä';

$GLOBALS["lang"]['Line Amount'] = 'Määrä';

$GLOBALS["lang"]['Line Graph'] = 'Viivakaavio';

$GLOBALS["lang"]['line_number_a'] = 'Rivinumero A';

$GLOBALS["lang"]['Line Number A'] = 'Rivinumero A';

$GLOBALS["lang"]['line_number_b'] = 'Rivinumero B';

$GLOBALS["lang"]['Line Number B'] = 'Rivinumero B';

$GLOBALS["lang"]['line_text'] = 'Riviteksti';

$GLOBALS["lang"]['Line Text'] = 'Riviteksti';

$GLOBALS["lang"]['link'] = 'Yhteystiedot';

$GLOBALS["lang"]['Link'] = 'Yhteystiedot';

$GLOBALS["lang"]['Link (Advanced)'] = 'Linkki (Lisätty)';

$GLOBALS["lang"]['Linked Files'] = 'Linkit';

$GLOBALS["lang"]['links'] = 'Linkit';

$GLOBALS["lang"]['Links'] = 'Linkit';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Linkit tämä löytö siihen liittyvä pilvi (tarvittaessa). Linkit <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Linkit <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Linkit <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Linkit <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Luettelo';

$GLOBALS["lang"]['list_table_format'] = 'Luettelo taulukon muodosta';

$GLOBALS["lang"]['List Table Format'] = 'Luettelo taulukon muodosta';

$GLOBALS["lang"]['Lithuania'] = 'Liettua';

$GLOBALS["lang"]['Load Balancing'] = 'Lastaustasapainotus';

$GLOBALS["lang"]['Local'] = 'Paikallinen';

$GLOBALS["lang"]['Local Area Network'] = 'Paikallisverkko';

$GLOBALS["lang"]['local_port'] = 'Paikallinen satama';

$GLOBALS["lang"]['Local Port'] = 'Paikallinen satama';

$GLOBALS["lang"]['Localhost'] = 'Paikallinen isäntä';

$GLOBALS["lang"]['Localisation'] = 'Paikallistaminen';

$GLOBALS["lang"]['Location'] = 'Sijainti';

$GLOBALS["lang"]['Location A'] = 'Sijainti A';

$GLOBALS["lang"]['Location B'] = 'Sijainti B';

$GLOBALS["lang"]['location_id'] = 'Sijaintitunnus';

$GLOBALS["lang"]['Location ID'] = 'Sijaintitunnus';

$GLOBALS["lang"]['location_id_a'] = 'Sijaintitunnus A';

$GLOBALS["lang"]['Location ID A'] = 'Sijaintitunnus A';

$GLOBALS["lang"]['location_id_b'] = 'Sijaintitunnus B';

$GLOBALS["lang"]['Location ID B'] = 'Sijaintitunnus B';

$GLOBALS["lang"]['location_latitude'] = 'Sijainti Leveysaste';

$GLOBALS["lang"]['Location Latitude'] = 'Sijainti Leveysaste';

$GLOBALS["lang"]['location_level'] = 'Sijaintitaso';

$GLOBALS["lang"]['Location Level'] = 'Sijaintitaso';

$GLOBALS["lang"]['location_longitude'] = 'Sijainti Pituusaste';

$GLOBALS["lang"]['Location Longitude'] = 'Sijainti Pituusaste';

$GLOBALS["lang"]['location_rack'] = 'Sijainti';

$GLOBALS["lang"]['Location Rack'] = 'Sijainti';

$GLOBALS["lang"]['location_rack_position'] = 'Sijainti Rackin sijainti';

$GLOBALS["lang"]['Location Rack Position'] = 'Sijainti Rackin sijainti';

$GLOBALS["lang"]['location_rack_size'] = 'Sijaintihyllyn koko';

$GLOBALS["lang"]['Location Rack Size'] = 'Sijaintihyllyn koko';

$GLOBALS["lang"]['location_room'] = 'Sijaintihuone';

$GLOBALS["lang"]['Location Room'] = 'Sijaintihuone';

$GLOBALS["lang"]['location_suite'] = 'Sijaintisviitti';

$GLOBALS["lang"]['Location Suite'] = 'Sijaintisviitti';

$GLOBALS["lang"]['locations'] = 'Sijainti';

$GLOBALS["lang"]['Locations'] = 'Sijainti';

$GLOBALS["lang"]['Locations in this'] = 'Sijainti tässä';

$GLOBALS["lang"]['log'] = 'loki';

$GLOBALS["lang"]['Log'] = 'loki';

$GLOBALS["lang"]['log_format'] = 'Lokimuoto';

$GLOBALS["lang"]['Log Format'] = 'Lokimuoto';

$GLOBALS["lang"]['log_path'] = 'Lokipolku';

$GLOBALS["lang"]['Log Path'] = 'Lokipolku';

$GLOBALS["lang"]['log_rotation'] = 'Lokin pyöriminen';

$GLOBALS["lang"]['Log Rotation'] = 'Lokin pyöriminen';

$GLOBALS["lang"]['log_status'] = 'Lokin tila';

$GLOBALS["lang"]['Log Status'] = 'Lokin tila';

$GLOBALS["lang"]['Logical Cores '] = 'Loogiset ytimet ';

$GLOBALS["lang"]['logical_count'] = 'Looginen luku';

$GLOBALS["lang"]['Logical Count'] = 'Looginen luku';

$GLOBALS["lang"]['Logout'] = 'Kirjaudu ulos';

$GLOBALS["lang"]['Logs'] = 'Lokit';

$GLOBALS["lang"]['longitude'] = 'Pituusaste';

$GLOBALS["lang"]['Longitude'] = 'Pituusaste';

$GLOBALS["lang"]['low'] = 'Matala';

$GLOBALS["lang"]['Low'] = 'Matala';

$GLOBALS["lang"]['Lower Case'] = 'Pienempi';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC-osoite';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Valmistaja';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac- osoite';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['maintenance_expires'] = 'Huolto vanhenee';

$GLOBALS["lang"]['Maintenance Expires'] = 'Huolto vanhenee';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Tee oletustaulustani';

$GLOBALS["lang"]['Make this install a Collector'] = 'Tee tästä keräilijä';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malesia';

$GLOBALS["lang"]['Maldives'] = 'Malediivit';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Hallitse';

$GLOBALS["lang"]['Manage Licenses'] = 'Hallitse käyttölupia';

$GLOBALS["lang"]['Manage in NMIS'] = 'Hallitse NMIS:ssä';

$GLOBALS["lang"]['Managed'] = 'Hoidettu';

$GLOBALS["lang"]['managed_by'] = 'Hallitse';

$GLOBALS["lang"]['Managed By'] = 'Hallitse';

$GLOBALS["lang"]['Manual Input'] = 'Manuaalinen syöte';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Käyttäjän manuaalisesti asettama, oletukset tuotantoon.';

$GLOBALS["lang"]['Manually set by user.'] = 'Käyttäjä asettaa sen käsin.';

$GLOBALS["lang"]['manufacture_date'] = 'Valmistuspäivä';

$GLOBALS["lang"]['Manufacture Date'] = 'Valmistuspäivä';

$GLOBALS["lang"]['manufacturer'] = 'Valmistaja';

$GLOBALS["lang"]['Manufacturer'] = 'Valmistaja';

$GLOBALS["lang"]['manufacturer_code'] = 'Valmistajan koodi';

$GLOBALS["lang"]['Manufacturer Code'] = 'Valmistajan koodi';

$GLOBALS["lang"]['Map'] = 'Kartta';

$GLOBALS["lang"]['maps'] = 'Kartat';

$GLOBALS["lang"]['Maps'] = 'Kartat';

$GLOBALS["lang"]['March'] = 'Maaliskuu';

$GLOBALS["lang"]['Marshall Islands'] = 'Marshallinsaaret';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Maski';

$GLOBALS["lang"]['Mask'] = 'Maski';

$GLOBALS["lang"]['Match'] = 'Täsmää';

$GLOBALS["lang"]['match_options'] = 'Otteluasetukset';

$GLOBALS["lang"]['Match Options'] = 'Otteluasetukset';

$GLOBALS["lang"]['match_string'] = 'Ottelumerkkijono';

$GLOBALS["lang"]['Match String'] = 'Ottelumerkkijono';

$GLOBALS["lang"]['Matching Attribute'] = 'Vastaava attribuutti';

$GLOBALS["lang"]['maturity_level'] = 'Maturiteetti';

$GLOBALS["lang"]['Maturity Level'] = 'Maturiteetti';

$GLOBALS["lang"]['maturity_score'] = 'Maturiteetti';

$GLOBALS["lang"]['Maturity Score'] = 'Maturiteetti';

$GLOBALS["lang"]['Mauritania'] = 'Mauritania';

$GLOBALS["lang"]['Mauritius'] = 'Mauritiukse';

$GLOBALS["lang"]['max_file_size'] = 'Tiedoston enimmäiskoko';

$GLOBALS["lang"]['Max File Size'] = 'Tiedoston enimmäiskoko';

$GLOBALS["lang"]['Max Length'] = 'Enimmäispituus';

$GLOBALS["lang"]['max_size'] = 'Enimmäiskoko';

$GLOBALS["lang"]['Max Size'] = 'Enimmäiskoko';

$GLOBALS["lang"]['May'] = 'Toukokuu';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Se mittaa haavoittuvuuteen kohdistuvan hyökkäyksen todennäköisyyttä, ja se perustuu hyväksikäytön nykytilaan, koodien saatavuuteen tai aktiiviseen, villiin riistoon.';

$GLOBALS["lang"]['medium'] = 'Keskisuuri';

$GLOBALS["lang"]['Medium'] = 'Keskisuuri';

$GLOBALS["lang"]['members'] = 'Jäsenet';

$GLOBALS["lang"]['Members'] = 'Jäsenet';

$GLOBALS["lang"]['memory'] = 'Muisti';

$GLOBALS["lang"]['Memory'] = 'Muisti';

$GLOBALS["lang"]['memory_count'] = 'Muistiluku';

$GLOBALS["lang"]['Memory Count'] = 'Muistiluku';

$GLOBALS["lang"]['memory_slot_count'] = 'Muistin lähtölaskenta';

$GLOBALS["lang"]['Memory Slot Count'] = 'Muistin lähtölaskenta';

$GLOBALS["lang"]['menu_category'] = 'Valikkoluokka';

$GLOBALS["lang"]['Menu Category'] = 'Valikkoluokka';

$GLOBALS["lang"]['menu_display'] = 'Valikkonäyttö';

$GLOBALS["lang"]['Menu Display'] = 'Valikkonäyttö';

$GLOBALS["lang"]['message'] = 'Viesti';

$GLOBALS["lang"]['Message'] = 'Viesti';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Viimeksi muuttunut';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Viimeksi muuttunut';

$GLOBALS["lang"]['metric'] = 'Metrinen';

$GLOBALS["lang"]['Metric'] = 'Metrinen';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Suurkaupunkialueen verkko';

$GLOBALS["lang"]['Mexico'] = 'Meksiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikroaika';

$GLOBALS["lang"]['Microtime'] = 'Mikroaika';

$GLOBALS["lang"]['minute'] = 'Minuutti';

$GLOBALS["lang"]['Minute'] = 'Minuutti';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Pöytäkirja Koska viimeinen tarkastus ovat suurempia kuin';

$GLOBALS["lang"]['model'] = 'Malli';

$GLOBALS["lang"]['Model'] = 'Malli';

$GLOBALS["lang"]['model_family'] = 'Malliperhe';

$GLOBALS["lang"]['Model Family'] = 'Malliperhe';

$GLOBALS["lang"]['module'] = 'Moduuli';

$GLOBALS["lang"]['Module'] = 'Moduuli';

$GLOBALS["lang"]['module_index'] = 'Moduuliindeksi';

$GLOBALS["lang"]['Module Index'] = 'Moduuliindeksi';

$GLOBALS["lang"]['Modules'] = 'Moduulit';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Maanantai';

$GLOBALS["lang"]['Mongolia'] = 'Mongolia';

$GLOBALS["lang"]['monitor'] = 'Monitori';

$GLOBALS["lang"]['Monitor'] = 'Monitori';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Kuukausi';

$GLOBALS["lang"]['Month'] = 'Kuukausi';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Marokko';

$GLOBALS["lang"]['motherboard'] = 'Emolevy';

$GLOBALS["lang"]['Motherboard'] = 'Emolevy';

$GLOBALS["lang"]['mount_point'] = 'Liitospiste';

$GLOBALS["lang"]['Mount Point'] = 'Liitospiste';

$GLOBALS["lang"]['mount_type'] = 'Asennustyyppi';

$GLOBALS["lang"]['Mount Type'] = 'Asennustyyppi';

$GLOBALS["lang"]['Mozambique'] = 'Mosambik';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Täytyy vastata Ping';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS-yrityspalvelu';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS-asiakas';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS-laitteen asetukset';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS-laitteen valinta';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS-kentän nimi';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS-kentän tyyppi';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS-ryhmä';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Rooli';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'HUOMAUTUS - Voit estää alla olevien tekstitunnusten näyttämisen asettamalla asetuskohteen <code>decrypt_credentials</code> - <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nimi';

$GLOBALS["lang"]['Name'] = 'Nimi';

$GLOBALS["lang"]['Namibia'] = 'Namibia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Nettoindeksi';

$GLOBALS["lang"]['Net Index'] = 'Nettoindeksi';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Alankomaiden Antillit';

$GLOBALS["lang"]['Netherlands the'] = 'Alankomaat';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Politiikkaa';

$GLOBALS["lang"]['Network'] = 'Verkko';

$GLOBALS["lang"]['network_address'] = 'Verkkoosoite';

$GLOBALS["lang"]['Network Address'] = 'Verkkoosoite';

$GLOBALS["lang"]['network_domain'] = 'Verkkoalue';

$GLOBALS["lang"]['Network Domain'] = 'Verkkoalue';

$GLOBALS["lang"]['Network Types'] = 'Verkkotyypit';

$GLOBALS["lang"]['networks'] = 'Verkostot';

$GLOBALS["lang"]['Networks'] = 'Verkostot';

$GLOBALS["lang"]['Networks Generated By'] = 'Luodut verkot';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Verkostot, joissa käytetään CIDR Mask';

$GLOBALS["lang"]['New Building Name'] = 'Uusi rakennuksen nimi';

$GLOBALS["lang"]['New Caledonia'] = 'Uusi-Kaledonia';

$GLOBALS["lang"]['New Floor Name'] = 'Uusi kerroksen nimi';

$GLOBALS["lang"]['New Room Name'] = 'Uuden huoneen nimi';

$GLOBALS["lang"]['New Row Name'] = 'Uusi rivinimi';

$GLOBALS["lang"]['New Zealand'] = 'Uusi-Seelanti';

$GLOBALS["lang"]['News'] = 'Uutiset';

$GLOBALS["lang"]['next_hop'] = 'Seuraava Hop';

$GLOBALS["lang"]['Next Hop'] = 'Seuraava Hop';

$GLOBALS["lang"]['next_run'] = 'Seuraava';

$GLOBALS["lang"]['Next Run'] = 'Seuraava';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port - skannausvastaukset';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Portit';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Portit';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Portit';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Portit';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis-asiakas';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis-asiakas';

$GLOBALS["lang"]['nmis_group'] = 'Nmis-ryhmä';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis-ryhmä';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Nimi';

$GLOBALS["lang"]['Nmis Name'] = 'Nimi';

$GLOBALS["lang"]['nmis_notes'] = 'Muistiinpanot';

$GLOBALS["lang"]['Nmis Notes'] = 'Muistiinpanot';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis-rooli';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis-rooli';

$GLOBALS["lang"]['No'] = 'Ei';

$GLOBALS["lang"]['No Devices Returned'] = 'Ei laitteita palautettu';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Ei Google Mapsin sovellusliittymää Avain läsnä, et voi näyttää karttaa.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Ei lisenssiä ammattilaiselle tai yritykselle';

$GLOBALS["lang"]['No Results'] = 'Ei tuloksia';

$GLOBALS["lang"]['No data in License Key'] = 'Ei tietoja lisenssiavaimessa';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Tietokannan päivitystä ei tarvita tällä hetkellä.';

$GLOBALS["lang"]['Node'] = 'Solmu';

$GLOBALS["lang"]['None'] = 'Ei ole';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolkin saari';

$GLOBALS["lang"]['Normal'] = 'Normaali';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Pohjois-Marianansaaret';

$GLOBALS["lang"]['Norway'] = 'Norja';

$GLOBALS["lang"]['Not Applicable'] = 'Ei oleellinen';

$GLOBALS["lang"]['Not Checked'] = 'Ei tarkastettu';

$GLOBALS["lang"]['Not Equals'] = 'Ei yhtä suuri';

$GLOBALS["lang"]['Not In'] = 'Ei sisällä';

$GLOBALS["lang"]['Not Like'] = 'Ei kuten';

$GLOBALS["lang"]['Not Set'] = 'Ei asetettu';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Ei tavallisesti käytössä. Jos valittu, tämä edellyttää, että laitteessa on avoin portti (kuten skannausasetukset) katsotaan vastaaviksi. MAC-osoitetta, arp-vastetta tai ping-vastetta ei pidetä riittävänä vasteena. Hyödyllistä, jos Open-AudIT-palvelimen ja IP-kohteen välissä oleva reititin tai palomuuri vastaa IP:n puolesta oleviin porttiskannuksiin.';

$GLOBALS["lang"]['Note'] = 'Huomautus';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Huomautus - Vanhemman valitseminen tarjoaa automaattisesti pääsyn lastensa luo (vaikka sitä ei näytetä tässä).';

$GLOBALS["lang"]['Notes'] = 'Huomautuksia';

$GLOBALS["lang"]['notes'] = 'Huomautuksia';

$GLOBALS["lang"]['Notice'] = 'Ilmoitus';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Marraskuu';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'MÄÄRÄYS';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS-perheet';

$GLOBALS["lang"]['OS Family'] = 'OS-perhe';

$GLOBALS["lang"]['OS Group'] = 'OS-ryhmä';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Kohde';

$GLOBALS["lang"]['Object Ident'] = 'Kohde';

$GLOBALS["lang"]['October'] = 'Lokakuu';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Yksi <code>3x2</code>, <code>4x2</code>, <code>4x3</code> tai <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Yksi Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passiivinen Optical Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Yksi kehitys, Katastrofi Recovery, Arviointi, Esituotanto, Tuotanto, Testaus, Koulutus, Käyttäjän hyväksyntä Testaus';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Yksi jaettu, delegoitu, suunnittelu, varattu, kohdentamaton, tuntematon, hallitsematon. Oletukset jaettu.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Yksi kummastakaan <code>active directory</code> tai <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Yksi: antivirus, varmuuskopio, palomuuri, hyväksytty, kielletty, sivuutettu tai muu.';

$GLOBALS["lang"]['Online Documentation'] = 'Online-dokumentaatio';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open AudIT -yhteisö';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT- laitteen valinta';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Korkean mittakaavan joustava löytö- ja tilintarkastusratkaisu suurille verkoille. Kaikki ominaisuudet Professional plus: Lähtökohdat, Tiedostontarkastus, Cloud Discovery, Rack Management, Configurable Role Based Access Control mukaan lukien aktiivinen Directory ja LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT- kentän nimi';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT-lisenssit';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT- asetukset';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-AudIT Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. Maailma';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT ja Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap on asennettu';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldapin käyttäjän Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldapin käyttäjän Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldapin käyttäjäjäsenyys Attribuutti';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldapin käyttäjäjäsenyys Attribuutti';

$GLOBALS["lang"]['open|filtered'] = 'Avaa... suodatettu';

$GLOBALS["lang"]['Open|filtered'] = 'Avaa... suodatettu';

$GLOBALS["lang"]['Operating System'] = 'Käyttöjärjestelmä';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Käyttöjärjestelmäperhe sisältää';

$GLOBALS["lang"]['Operating Systems'] = 'Käyttöjärjestelmät';

$GLOBALS["lang"]['optical'] = 'Optiset';

$GLOBALS["lang"]['Optical'] = 'Optiset';

$GLOBALS["lang"]['Optimized'] = 'Optimoitu';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open-AudITin tarkastama valinnainen versio. Käytä prosenttimerkkiä % villinä korttina.';

$GLOBALS["lang"]['options'] = 'Valinnat';

$GLOBALS["lang"]['Options'] = 'Valinnat';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Tai valitse alla olevista kentistä.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'Organ ID';

$GLOBALS["lang"]['Org ID'] = 'Organ ID';

$GLOBALS["lang"]['Organisation'] = 'Organisaatio';

$GLOBALS["lang"]['organisation'] = 'Organisaatio';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organization Descentants';

$GLOBALS["lang"]['Organisations'] = 'Organisaatiot';

$GLOBALS["lang"]['orgs'] = 'Orgas';

$GLOBALS["lang"]['Orgs'] = 'Orgas';

$GLOBALS["lang"]['Orgs Name'] = 'Orgien nimi';

$GLOBALS["lang"]['orientation'] = 'Suunta';

$GLOBALS["lang"]['Orientation'] = 'Suunta';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os-näytön versio';

$GLOBALS["lang"]['Os Display Version'] = 'Os-näytön versio';

$GLOBALS["lang"]['os_family'] = 'Os-perhe';

$GLOBALS["lang"]['Os Family'] = 'Os-perhe';

$GLOBALS["lang"]['os_group'] = 'Os-ryhmä';

$GLOBALS["lang"]['Os Group'] = 'Os-ryhmä';

$GLOBALS["lang"]['os_installation_date'] = 'Os Asennuspäivä';

$GLOBALS["lang"]['Os Installation Date'] = 'Os Asennuspäivä';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Lisenssin voimassaolon päättyminen';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Lisenssin voimassaolon päättyminen';

$GLOBALS["lang"]['os_license'] = 'Os-lisenssi';

$GLOBALS["lang"]['Os License'] = 'Os-lisenssi';

$GLOBALS["lang"]['os_license_code'] = 'Os lisenssikoodi';

$GLOBALS["lang"]['Os License Code'] = 'Os lisenssikoodi';

$GLOBALS["lang"]['os_license_mode'] = 'Os-lisenssitila';

$GLOBALS["lang"]['Os License Mode'] = 'Os-lisenssitila';

$GLOBALS["lang"]['os_license_type'] = 'Os lisenssityyppi';

$GLOBALS["lang"]['Os License Type'] = 'Os lisenssityyppi';

$GLOBALS["lang"]['os_name'] = 'Os-nimi';

$GLOBALS["lang"]['Os Name'] = 'Os-nimi';

$GLOBALS["lang"]['os_version'] = 'Os-versio';

$GLOBALS["lang"]['Os Version'] = 'Os-versio';

$GLOBALS["lang"]['Other'] = 'Muut';

$GLOBALS["lang"]['Others'] = 'Muut';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'SSH-vastauksen aikalisä';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Aikalisä WMI-vastaukselle';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Aikalisä SNMP:n reaktiolle';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Meidän aikalisä audit käsikirjoitus vastaus';

$GLOBALS["lang"]['output'] = 'Tulos';

$GLOBALS["lang"]['Output'] = 'Tulos';

$GLOBALS["lang"]['outputs'] = 'Tuotokset';

$GLOBALS["lang"]['Outputs'] = 'Tuotokset';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Yleiset vaikeusastepisteet (0';

$GLOBALS["lang"]['overwrite'] = 'Korvaa';

$GLOBALS["lang"]['Overwrite'] = 'Korvaa';

$GLOBALS["lang"]['owner'] = 'Omistaja';

$GLOBALS["lang"]['Owner'] = 'Omistaja';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Pakkaus';

$GLOBALS["lang"]['packages'] = 'Paketit';

$GLOBALS["lang"]['Packages'] = 'Paketit';

$GLOBALS["lang"]['pagefile'] = 'Sivutiedosto';

$GLOBALS["lang"]['Pagefile'] = 'Sivutiedosto';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestiinalaisalue';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua-Uusi Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Paranoid'] = 'Paranoidi';

$GLOBALS["lang"]['Parent'] = 'Vanhempi';

$GLOBALS["lang"]['parent_id'] = 'Emotunniste';

$GLOBALS["lang"]['Parent ID'] = 'Emotunniste';

$GLOBALS["lang"]['parent_name'] = 'Vanhemman nimi';

$GLOBALS["lang"]['Parent Name'] = 'Vanhemman nimi';

$GLOBALS["lang"]['part_number'] = 'Osan numero';

$GLOBALS["lang"]['Part Number'] = 'Osan numero';

$GLOBALS["lang"]['part_of_domain'] = 'Osa verkkoaluetta';

$GLOBALS["lang"]['Part Of Domain'] = 'Osa verkkoaluetta';

$GLOBALS["lang"]['Partition'] = 'Jako';

$GLOBALS["lang"]['partition_count'] = 'Jakoluku';

$GLOBALS["lang"]['Partition Count'] = 'Jakoluku';

$GLOBALS["lang"]['partition_disk_index'] = 'Jakolevyindeksi';

$GLOBALS["lang"]['Partition Disk Index'] = 'Jakolevyindeksi';

$GLOBALS["lang"]['Pass'] = 'Ohita';

$GLOBALS["lang"]['Passed'] = 'Ohitettu';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Passiivinen optinen lähiverkko';

$GLOBALS["lang"]['Password'] = 'Salasana';

$GLOBALS["lang"]['password'] = 'Salasana';

$GLOBALS["lang"]['password_changeable'] = 'Salasana vaihdettava';

$GLOBALS["lang"]['Password Changeable'] = 'Salasana vaihdettava';

$GLOBALS["lang"]['password_disabled'] = 'Salasana poistettu';

$GLOBALS["lang"]['Password Disabled'] = 'Salasana poistettu';

$GLOBALS["lang"]['password_expires'] = 'Salasana päättyy';

$GLOBALS["lang"]['Password Expires'] = 'Salasana päättyy';

$GLOBALS["lang"]['password_last_changed'] = 'Salasana viimeksi muutettu';

$GLOBALS["lang"]['Password Last Changed'] = 'Salasana viimeksi muutettu';

$GLOBALS["lang"]['password_required'] = 'Salasana vaaditaan';

$GLOBALS["lang"]['Password Required'] = 'Salasana vaaditaan';

$GLOBALS["lang"]['patch_panel'] = 'Paikkapaneeli';

$GLOBALS["lang"]['Patch Panel'] = 'Paikkapaneeli';

$GLOBALS["lang"]['patch_panel_port'] = 'Paikkapaneelin portti';

$GLOBALS["lang"]['Patch Panel Port'] = 'Paikkapaneelin portti';

$GLOBALS["lang"]['path'] = 'Polku';

$GLOBALS["lang"]['Path'] = 'Polku';

$GLOBALS["lang"]['Performance'] = 'Suorituskyky';

$GLOBALS["lang"]['Performed'] = 'Esitetty';

$GLOBALS["lang"]['permission'] = 'Lupa';

$GLOBALS["lang"]['Permission'] = 'Lupa';

$GLOBALS["lang"]['permissions'] = 'Lupa';

$GLOBALS["lang"]['Permissions'] = 'Lupa';

$GLOBALS["lang"]['Personal Area Network'] = 'Henkilökohtainen alueverkko';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filippiinit';

$GLOBALS["lang"]['phone'] = 'Puhelin';

$GLOBALS["lang"]['Phone'] = 'Puhelin';

$GLOBALS["lang"]['Physical CPUs'] = 'Fyysiset suorittimet';

$GLOBALS["lang"]['physical_count'] = 'Fyysinen määrä';

$GLOBALS["lang"]['Physical Count'] = 'Fyysinen määrä';

$GLOBALS["lang"]['physical_depth'] = 'Fyysinen syvyys';

$GLOBALS["lang"]['Physical Depth'] = 'Fyysinen syvyys';

$GLOBALS["lang"]['physical_height'] = 'Fyysinen korkeus';

$GLOBALS["lang"]['Physical Height'] = 'Fyysinen korkeus';

$GLOBALS["lang"]['physical_width'] = 'Fyysinen leveys';

$GLOBALS["lang"]['Physical Width'] = 'Fyysinen leveys';

$GLOBALS["lang"]['picture'] = 'Kuva';

$GLOBALS["lang"]['Picture'] = 'Kuva';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie-kaavio';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairnsaaret';

$GLOBALS["lang"]['placement'] = 'Paikka';

$GLOBALS["lang"]['Placement'] = 'Paikka';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Ota Open-AudIT-hallinnoijan kirjautuminen ja päivitä tietokanta.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Huomaa, että valittu ruutu ohittaa tekstin syötelaatikon.';

$GLOBALS["lang"]['Please set using'] = 'Valitse';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Puola';

$GLOBALS["lang"]['Policies'] = 'Politiikat';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Politiikassa on poikkeuksia.';

$GLOBALS["lang"]['policy'] = 'Toimintaperiaatteet';

$GLOBALS["lang"]['Policy'] = 'Toimintaperiaatteet';

$GLOBALS["lang"]['policy_id'] = 'Toimintalinjan tunniste';

$GLOBALS["lang"]['Policy ID'] = 'Toimintalinjan tunniste';

$GLOBALS["lang"]['Policy Result'] = 'Politiikan tulos';

$GLOBALS["lang"]['Policy Results'] = 'Poliittiset tulokset';

$GLOBALS["lang"]['Polite'] = 'Kohteliaisuus';

$GLOBALS["lang"]['Populated by audit.'] = '-Tutkinnassa.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Löydöllä ja tilintarkastuksella.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Populoitu dynaamisesti.';

$GLOBALS["lang"]['Populated from DNS.'] = 'DNS:stä.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'SNMP-löydöstä.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Poimittu laiteauditoinneista.';

$GLOBALS["lang"]['Populated from hostname.'] = '- Poimittu isäntänimestä.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = '- Linuxissa.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Populattu IP:stä löydettäessä havaitun oletusreitin tai IP:n osalta.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Poimittu isäntänimikomennosta.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Lisätiedot ulkoisesta järjestelmästä JSON-esittelyssä.';

$GLOBALS["lang"]['port'] = 'Satama';

$GLOBALS["lang"]['Port'] = 'Satama';

$GLOBALS["lang"]['port_name'] = 'Sataman nimi';

$GLOBALS["lang"]['Port Name'] = 'Sataman nimi';

$GLOBALS["lang"]['port_number'] = 'Sataman numero';

$GLOBALS["lang"]['Port Number'] = 'Sataman numero';

$GLOBALS["lang"]['ports_in_order'] = 'Järjestyksessä olevat satamat';

$GLOBALS["lang"]['Ports In Order'] = 'Järjestyksessä olevat satamat';

$GLOBALS["lang"]['ports_stop_after'] = 'Portit pysähtyvät jälkeenpäin';

$GLOBALS["lang"]['Ports Stop After'] = 'Portit pysähtyvät jälkeenpäin';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugali';

$GLOBALS["lang"]['position'] = 'Sijainti';

$GLOBALS["lang"]['Position'] = 'Sijainti';

$GLOBALS["lang"]['postcode'] = 'Postinumero';

$GLOBALS["lang"]['Postcode'] = 'Postinumero';

$GLOBALS["lang"]['power_circuit'] = 'Virtapiiri';

$GLOBALS["lang"]['Power Circuit'] = 'Virtapiiri';

$GLOBALS["lang"]['power_sockets'] = 'Tehosukat';

$GLOBALS["lang"]['Power Sockets'] = 'Tehosukat';

$GLOBALS["lang"]['Predictable'] = 'Ennustettava';

$GLOBALS["lang"]['Preferences'] = 'Asetukset';

$GLOBALS["lang"]['Prerequisites'] = 'Edellytykset';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Edellytykset ja testit';

$GLOBALS["lang"]['present'] = 'Paikalla';

$GLOBALS["lang"]['Present'] = 'Paikalla';

$GLOBALS["lang"]['previous_value'] = 'Edellinen arvo';

$GLOBALS["lang"]['Previous Value'] = 'Edellinen arvo';

$GLOBALS["lang"]['primary'] = 'Ensisijainen';

$GLOBALS["lang"]['Primary'] = 'Ensisijainen';

$GLOBALS["lang"]['Primary Key'] = 'Ensisijainen avain';

$GLOBALS["lang"]['print_queue'] = 'Tulosta jono';

$GLOBALS["lang"]['Print Queue'] = 'Tulosta jono';

$GLOBALS["lang"]['printer_color'] = 'Tulostimen väri';

$GLOBALS["lang"]['Printer Color'] = 'Tulostimen väri';

$GLOBALS["lang"]['printer_duplex'] = 'Tulostimen kaksoispiste';

$GLOBALS["lang"]['Printer Duplex'] = 'Tulostimen kaksoispiste';

$GLOBALS["lang"]['printer_port_name'] = 'Tulostimen portin nimi';

$GLOBALS["lang"]['Printer Port Name'] = 'Tulostimen portin nimi';

$GLOBALS["lang"]['printer_shared'] = 'Tulostimen jaettu';

$GLOBALS["lang"]['Printer Shared'] = 'Tulostimen jaettu';

$GLOBALS["lang"]['printer_shared_name'] = 'Tulostimen jaetun nimen nimi';

$GLOBALS["lang"]['Printer Shared Name'] = 'Tulostimen jaetun nimen nimi';

$GLOBALS["lang"]['priority'] = 'Painopiste';

$GLOBALS["lang"]['Priority'] = 'Painopiste';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Yksityisyyden salauslause';

$GLOBALS["lang"]['privileges_required'] = 'Vaaditut oikeudet';

$GLOBALS["lang"]['Privileges Required'] = 'Vaaditut oikeudet';

$GLOBALS["lang"]['processor'] = 'Prosessori';

$GLOBALS["lang"]['Processor'] = 'Prosessori';

$GLOBALS["lang"]['processor_count'] = 'Prosessoriluku';

$GLOBALS["lang"]['Processor Count'] = 'Prosessoriluku';

$GLOBALS["lang"]['processor_slot_count'] = 'Prosessorin lähtölaskenta';

$GLOBALS["lang"]['Processor Slot Count'] = 'Prosessorin lähtölaskenta';

$GLOBALS["lang"]['processor_type'] = 'Prosessorityyppi';

$GLOBALS["lang"]['Processor Type'] = 'Prosessorityyppi';

$GLOBALS["lang"]['Processors'] = 'Jalostajat';

$GLOBALS["lang"]['product_name'] = 'Tuotteen nimi';

$GLOBALS["lang"]['Product Name'] = 'Tuotteen nimi';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Tuotteen nimi Ottelu CPE: ';

$GLOBALS["lang"]['products'] = 'Tuotteet';

$GLOBALS["lang"]['Products'] = 'Tuotteet';

$GLOBALS["lang"]['profile'] = 'Profiili';

$GLOBALS["lang"]['Profile'] = 'Profiili';

$GLOBALS["lang"]['program'] = 'Ohjelma';

$GLOBALS["lang"]['Program'] = 'Ohjelma';

$GLOBALS["lang"]['protocol'] = 'Pöytäkirja';

$GLOBALS["lang"]['Protocol'] = 'Pöytäkirja';

$GLOBALS["lang"]['provider'] = 'Tarjoaja';

$GLOBALS["lang"]['Provider'] = 'Tarjoaja';

$GLOBALS["lang"]['published'] = 'Julkaistu';

$GLOBALS["lang"]['Published'] = 'Julkaistu';

$GLOBALS["lang"]['published_date'] = 'Julkaistu';

$GLOBALS["lang"]['Published Date'] = 'Julkaistu';

$GLOBALS["lang"]['publisher'] = 'Julkaisija';

$GLOBALS["lang"]['Publisher'] = 'Julkaisija';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Osto';

$GLOBALS["lang"]['purchase_amount'] = 'Ostomäärä';

$GLOBALS["lang"]['Purchase Amount'] = 'Ostomäärä';

$GLOBALS["lang"]['purchase_cost_center'] = 'Ostokustannuskeskus';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Ostokustannuskeskus';

$GLOBALS["lang"]['purchase_count'] = 'Ostoluku';

$GLOBALS["lang"]['Purchase Count'] = 'Ostoluku';

$GLOBALS["lang"]['purchase_date'] = 'Ostopäivä';

$GLOBALS["lang"]['Purchase Date'] = 'Ostopäivä';

$GLOBALS["lang"]['purchase_invoice'] = 'Ostolasku';

$GLOBALS["lang"]['Purchase Invoice'] = 'Ostolasku';

$GLOBALS["lang"]['purchase_order'] = 'Ostojärjestys';

$GLOBALS["lang"]['Purchase Order'] = 'Ostojärjestys';

$GLOBALS["lang"]['purchase_order_number'] = 'Oston järjestysnumero';

$GLOBALS["lang"]['Purchase Order Number'] = 'Oston järjestysnumero';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Ostopalvelusopimuksen numero';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Ostopalvelusopimuksen numero';

$GLOBALS["lang"]['purchase_vendor'] = 'Ostomyyjä';

$GLOBALS["lang"]['Purchase Vendor'] = 'Ostomyyjä';

$GLOBALS["lang"]['purpose'] = 'Aihe';

$GLOBALS["lang"]['Purpose'] = 'Aihe';

$GLOBALS["lang"]['Qatar'] = 'Qatar';

$GLOBALS["lang"]['queries'] = 'Kysely';

$GLOBALS["lang"]['Queries'] = 'Kysely';

$GLOBALS["lang"]['Query'] = 'Kysely';

$GLOBALS["lang"]['queue'] = 'Jono';

$GLOBALS["lang"]['Queue'] = 'Jono';

$GLOBALS["lang"]['Queue Limit'] = 'Jonoraja';

$GLOBALS["lang"]['Queued Device Audits'] = 'Jonotetut laitetarkastukset';

$GLOBALS["lang"]['Queued IP Scans'] = 'Jonotetut IP- skannaukset';

$GLOBALS["lang"]['Queued Items'] = 'Jonotetut erät';

$GLOBALS["lang"]['RU Start'] = 'RU Käynnistä';

$GLOBALS["lang"]['RX Bitrate'] = 'RX bittinopeus';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX-taso';

$GLOBALS["lang"]['RX Power'] = 'RX-teho';

$GLOBALS["lang"]['RX Profile'] = 'RX-profiili';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack-laitteet';

$GLOBALS["lang"]['Rack Devices'] = 'Rack-laitteet';

$GLOBALS["lang"]['rack_id'] = 'Rackin tunnus';

$GLOBALS["lang"]['Rack ID'] = 'Rackin tunnus';

$GLOBALS["lang"]['Racks'] = 'Raketit';

$GLOBALS["lang"]['racks'] = 'Raketit';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Perustelu';

$GLOBALS["lang"]['Rationale'] = 'Perustelu';

$GLOBALS["lang"]['raw'] = 'Raaka';

$GLOBALS["lang"]['Raw'] = 'Raaka';

$GLOBALS["lang"]['read'] = 'Lue';

$GLOBALS["lang"]['Read'] = 'Lue';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Lue nettidokumenttimme Open-AudIT Wikistä.';

$GLOBALS["lang"]['Red Query'] = 'Punainen kysely';

$GLOBALS["lang"]['Redirect URI'] = 'Uudelleensuuntaa URI';

$GLOBALS["lang"]['redirect_uri'] = 'Uudelleenohjaa Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Uudelleenohjaa Uri';

$GLOBALS["lang"]['references'] = 'Lähteet';

$GLOBALS["lang"]['References'] = 'Lähteet';

$GLOBALS["lang"]['region'] = 'Alue';

$GLOBALS["lang"]['Region'] = 'Alue';

$GLOBALS["lang"]['registered_user'] = 'Rekisteröity käyttäjä';

$GLOBALS["lang"]['Registered User'] = 'Rekisteröity käyttäjä';

$GLOBALS["lang"]['rel'] = 'Reili';

$GLOBALS["lang"]['Rel'] = 'Reili';

$GLOBALS["lang"]['Release'] = 'Julkaisu';

$GLOBALS["lang"]['remediation'] = 'Korjaaminen';

$GLOBALS["lang"]['Remediation'] = 'Korjaaminen';

$GLOBALS["lang"]['Remote'] = 'Etä';

$GLOBALS["lang"]['remote_address'] = 'Etäosoite';

$GLOBALS["lang"]['Remote Address'] = 'Etäosoite';

$GLOBALS["lang"]['remote_port'] = 'Etäportti';

$GLOBALS["lang"]['Remote Port'] = 'Etäportti';

$GLOBALS["lang"]['Remove'] = 'Poista';

$GLOBALS["lang"]['Remove Exception'] = 'Poista poikkeus';

$GLOBALS["lang"]['Report'] = 'Kertomus';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Raportti laitteistasi, verkoistasi ja muista';

$GLOBALS["lang"]['reportable'] = 'Raportoitava';

$GLOBALS["lang"]['Reportable'] = 'Raportoitava';

$GLOBALS["lang"]['Reports'] = 'Kertomukset';

$GLOBALS["lang"]['request'] = 'Pyyntö';

$GLOBALS["lang"]['Request'] = 'Pyyntö';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Erityistä CVE';

$GLOBALS["lang"]['requested'] = 'Pyydetty';

$GLOBALS["lang"]['Requested'] = 'Pyydetty';

$GLOBALS["lang"]['require_port'] = 'Vaadi portti';

$GLOBALS["lang"]['Require Port'] = 'Vaadi portti';

$GLOBALS["lang"]['Require an Open Port'] = 'Vaadi avoin portti';

$GLOBALS["lang"]['Required'] = 'Vaaditaan';

$GLOBALS["lang"]['Reset'] = 'Nollaa';

$GLOBALS["lang"]['Reset All Data'] = 'Nollaa kaikki tiedot';

$GLOBALS["lang"]['Reset to Default'] = 'Nollaa oletus';

$GLOBALS["lang"]['resource'] = 'Resurssi';

$GLOBALS["lang"]['Resource'] = 'Resurssi';

$GLOBALS["lang"]['Resource Name'] = 'Resurssin nimi';

$GLOBALS["lang"]['Resources'] = 'Varat';

$GLOBALS["lang"]['response'] = 'Vaste';

$GLOBALS["lang"]['Response'] = 'Vaste';

$GLOBALS["lang"]['responsibility'] = 'Vastuu';

$GLOBALS["lang"]['Responsibility'] = 'Vastuu';

$GLOBALS["lang"]['Restore my Licenses'] = 'Palauta lisenssini';

$GLOBALS["lang"]['Restrict to Private'] = 'Rajoita yksityiseen';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Rajoita aliverkkoon';

$GLOBALS["lang"]['result'] = 'Tulos';

$GLOBALS["lang"]['Result'] = 'Tulos';

$GLOBALS["lang"]['Results'] = 'Tulokset';

$GLOBALS["lang"]['retrieved'] = 'Noudettu';

$GLOBALS["lang"]['Retrieved'] = 'Noudettu';

$GLOBALS["lang"]['retrieved_ident'] = 'Noudettu';

$GLOBALS["lang"]['Retrieved Ident'] = 'Noudettu';

$GLOBALS["lang"]['retrieved_name'] = 'Haettu nimi';

$GLOBALS["lang"]['Retrieved Name'] = 'Haettu nimi';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Haettu laitteesta - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hossvc/hostsummery, HP-UX:machinfo, Solaris: smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Jälleenyhdistyminen';

$GLOBALS["lang"]['revision'] = 'Uudelleentarkastelu';

$GLOBALS["lang"]['Revision'] = 'Uudelleentarkastelu';

$GLOBALS["lang"]['risk_assesment_result'] = 'Riskiarvion tulos';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Riskiarvion tulos';

$GLOBALS["lang"]['role'] = 'Rooli';

$GLOBALS["lang"]['Role'] = 'Rooli';

$GLOBALS["lang"]['roles'] = 'Roolit';

$GLOBALS["lang"]['Roles'] = 'Roolit';

$GLOBALS["lang"]['Romania'] = 'Romania';

$GLOBALS["lang"]['Room'] = 'Huone';

$GLOBALS["lang"]['route'] = 'Reitti';

$GLOBALS["lang"]['Route'] = 'Reitti';

$GLOBALS["lang"]['Row'] = 'Rivi';

$GLOBALS["lang"]['Row Count'] = 'Rivimäärä';

$GLOBALS["lang"]['row_position'] = 'Rivi';

$GLOBALS["lang"]['Row Position'] = 'Rivi';

$GLOBALS["lang"]['Rows'] = 'Rivit';

$GLOBALS["lang"]['ru_height'] = 'Ru Korkeus';

$GLOBALS["lang"]['Ru Height'] = 'Ru Korkeus';

$GLOBALS["lang"]['ru_start'] = 'Ru Käynnistä';

$GLOBALS["lang"]['Ru Start'] = 'Ru Käynnistä';

$GLOBALS["lang"]['rule_group'] = 'sääntöryhmä';

$GLOBALS["lang"]['Rule Group'] = 'sääntöryhmä';

$GLOBALS["lang"]['rules'] = 'Säännöt';

$GLOBALS["lang"]['Rules'] = 'Säännöt';

$GLOBALS["lang"]['Run Discovery'] = 'Suorita Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Suorita Discovery laitteissa';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Tee löytö ja ota selvää <b>Mitä verkossasi on?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Suorita komento';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open-AudIT Apache -palvelun käyttö Windowsissa';

$GLOBALS["lang"]['Russian Federation'] = 'Venäjän federaatio';

$GLOBALS["lang"]['Rwanda'] = 'Ruanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx bittinopeus';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx bittinopeus';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx-taso';

$GLOBALS["lang"]['Rx Level'] = 'Rx-taso';

$GLOBALS["lang"]['rx_power'] = 'Rx-teho';

$GLOBALS["lang"]['Rx Power'] = 'Rx-teho';

$GLOBALS["lang"]['rx_profile'] = 'Rx-profiili';

$GLOBALS["lang"]['Rx Profile'] = 'Rx-profiili';

$GLOBALS["lang"]['SELECT'] = 'VALINTA';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM-versio';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Yksityiskohdat';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP-versio';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Tarkistettu)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL-luontilausunnot';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Avain';

$GLOBALS["lang"]['SW Revision'] = 'SW-revisio';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint BarthelemeyCity name (optional, probably does not need a translation)';

$GLOBALS["lang"]['Saint Helena'] = 'Saint Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts ja Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint-Pierre ja Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent ja Grenadiinit';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'São Tomé ja Príncipe';

$GLOBALS["lang"]['Saturday'] = 'Lauantai';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saudi-Arabia';

$GLOBALS["lang"]['Save as Default'] = 'Tallenna oletuksena';

$GLOBALS["lang"]['scaling'] = 'Skaalaus';

$GLOBALS["lang"]['Scaling'] = 'Skaalaus';

$GLOBALS["lang"]['scan_options'] = 'Skannaa asetukset';

$GLOBALS["lang"]['Scan Options'] = 'Skannaa asetukset';

$GLOBALS["lang"]['Scan Options ID'] = 'Skannaa asetukset';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Skannaa Nmap TCP-porttien top numero.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Skannaa Nmap top määrä UDP-satamien.';

$GLOBALS["lang"]['schedule'] = 'Aikataulu';

$GLOBALS["lang"]['Schedule'] = 'Aikataulu';

$GLOBALS["lang"]['scope'] = 'Soveltamisala';

$GLOBALS["lang"]['Scope'] = 'Soveltamisala';

$GLOBALS["lang"]['script_timeout'] = 'Komentosarjan aikakatkaisu';

$GLOBALS["lang"]['Script Timeout'] = 'Komentosarjan aikakatkaisu';

$GLOBALS["lang"]['scripts'] = 'Skriptit';

$GLOBALS["lang"]['Scripts'] = 'Skriptit';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi-bussi';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi-bussi';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi Looginen yksikkö';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi Looginen yksikkö';

$GLOBALS["lang"]['scsi_port'] = 'Scsi Port';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi Port';

$GLOBALS["lang"]['Search'] = 'Etsi';

$GLOBALS["lang"]['Search For a Device'] = 'Etsi laitetta';

$GLOBALS["lang"]['Search for Device'] = 'Etsi laitetta';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Haetaan datataulukoita';

$GLOBALS["lang"]['secondary'] = 'Toissijainen';

$GLOBALS["lang"]['Secondary'] = 'Toissijainen';

$GLOBALS["lang"]['Secondary Text'] = 'Toissijainen teksti';

$GLOBALS["lang"]['section'] = 'Pääluokka';

$GLOBALS["lang"]['Section'] = 'Pääluokka';

$GLOBALS["lang"]['secure'] = 'Turvallinen';

$GLOBALS["lang"]['Secure'] = 'Turvallinen';

$GLOBALS["lang"]['Security Name'] = 'Turvanimi';

$GLOBALS["lang"]['Security Status'] = 'Turvallisuustilanne';

$GLOBALS["lang"]['security_zone'] = 'Turvavyöhyke';

$GLOBALS["lang"]['Security Zone'] = 'Turvavyöhyke';

$GLOBALS["lang"]['seed_ip'] = 'Siemen-IP';

$GLOBALS["lang"]['Seed IP'] = 'Siemen-IP';

$GLOBALS["lang"]['seed_ping'] = 'Siemenping';

$GLOBALS["lang"]['Seed Ping'] = 'Siemenping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Siementen rajoittaminen yksityiseen';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Siementen rajoittaminen yksityiseen';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Siementen rajoittaminen aliverkkoon';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Siementen rajoittaminen aliverkkoon';

$GLOBALS["lang"]['Select'] = 'Valitse';

$GLOBALS["lang"]['Select All'] = 'Valitse kaikki';

$GLOBALS["lang"]['select_external_attribute'] = 'Valitse ulkoinen kohde';

$GLOBALS["lang"]['Select External Attribute'] = 'Valitse ulkoinen kohde';

$GLOBALS["lang"]['select_external_count'] = 'Valitse ulkoinen luku';

$GLOBALS["lang"]['Select External Count'] = 'Valitse ulkoinen luku';

$GLOBALS["lang"]['select_external_type'] = 'Valitse ulkoinen Tyyppi';

$GLOBALS["lang"]['Select External Type'] = 'Valitse ulkoinen Tyyppi';

$GLOBALS["lang"]['select_external_value'] = 'Valitse ulkoinen Arvo';

$GLOBALS["lang"]['Select External Value'] = 'Valitse ulkoinen Arvo';

$GLOBALS["lang"]['select_internal_attribute'] = 'Valitse sisäinen attribuutti';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Valitse sisäinen attribuutti';

$GLOBALS["lang"]['select_internal_count'] = 'Valitse sisäinen luku';

$GLOBALS["lang"]['Select Internal Count'] = 'Valitse sisäinen luku';

$GLOBALS["lang"]['select_internal_type'] = 'Valitse sisäinen Tyyppi';

$GLOBALS["lang"]['Select Internal Type'] = 'Valitse sisäinen Tyyppi';

$GLOBALS["lang"]['select_internal_value'] = 'Valitse sisäinen Arvo';

$GLOBALS["lang"]['Select Internal Value'] = 'Valitse sisäinen Arvo';

$GLOBALS["lang"]['Select a Table'] = 'Valitse taulukko';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Herkkyys';

$GLOBALS["lang"]['Sensitivity'] = 'Herkkyys';

$GLOBALS["lang"]['September'] = 'Syyskuu';

$GLOBALS["lang"]['Serbia'] = 'Serbia';

$GLOBALS["lang"]['serial'] = 'Sarja';

$GLOBALS["lang"]['Serial'] = 'Sarja';

$GLOBALS["lang"]['serial_imei'] = 'Sarjakuva';

$GLOBALS["lang"]['Serial Imei'] = 'Sarjakuva';

$GLOBALS["lang"]['serial_sim'] = 'Sarja Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Sarja Sim';

$GLOBALS["lang"]['series'] = 'Sarja';

$GLOBALS["lang"]['Series'] = 'Sarja';

$GLOBALS["lang"]['server'] = 'Palvelin';

$GLOBALS["lang"]['Server'] = 'Palvelin';

$GLOBALS["lang"]['server_id'] = 'Palvelintunnus';

$GLOBALS["lang"]['Server ID'] = 'Palvelintunnus';

$GLOBALS["lang"]['Server Is'] = 'Palvelin on';

$GLOBALS["lang"]['server_item'] = 'Palvelimen kohde';

$GLOBALS["lang"]['Server Item'] = 'Palvelimen kohde';

$GLOBALS["lang"]['Server Status'] = 'Palvelimen tila';

$GLOBALS["lang"]['Servers'] = 'Palvelimet';

$GLOBALS["lang"]['service'] = 'Palvelu';

$GLOBALS["lang"]['Service'] = 'Palvelu';

$GLOBALS["lang"]['service_identifier'] = 'Palvelutunniste';

$GLOBALS["lang"]['Service Identifier'] = 'Palvelutunniste';

$GLOBALS["lang"]['service_level_a'] = 'Palvelutaso A';

$GLOBALS["lang"]['Service Level A'] = 'Palvelutaso A';

$GLOBALS["lang"]['service_level_b'] = 'Palvelutaso B';

$GLOBALS["lang"]['Service Level B'] = 'Palvelutaso B';

$GLOBALS["lang"]['service_network'] = 'Palveluverkko';

$GLOBALS["lang"]['Service Network'] = 'Palveluverkko';

$GLOBALS["lang"]['service_number'] = 'Palvelunumero';

$GLOBALS["lang"]['Service Number'] = 'Palvelunumero';

$GLOBALS["lang"]['service_pack'] = 'Palvelupakkaus';

$GLOBALS["lang"]['Service Pack'] = 'Palvelupakkaus';

$GLOBALS["lang"]['service_plan'] = 'Huoltosuunnitelma';

$GLOBALS["lang"]['Service Plan'] = 'Huoltosuunnitelma';

$GLOBALS["lang"]['service_provider'] = 'Palvelun tarjoaja';

$GLOBALS["lang"]['Service Provider'] = 'Palvelun tarjoaja';

$GLOBALS["lang"]['service_tag'] = 'Palvelutagi';

$GLOBALS["lang"]['Service Tag'] = 'Palvelutagi';

$GLOBALS["lang"]['service_type'] = 'Palvelutyyppi';

$GLOBALS["lang"]['Service Type'] = 'Palvelutyyppi';

$GLOBALS["lang"]['service_version'] = 'Palveluversio';

$GLOBALS["lang"]['Service Version'] = 'Palveluversio';

$GLOBALS["lang"]['Set'] = 'Aseta';

$GLOBALS["lang"]['set_by'] = 'Aseta';

$GLOBALS["lang"]['Set By'] = 'Aseta';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Aseta listan näytöillä olevien taulukoiden koko (normaali tai kompakti).';

$GLOBALS["lang"]['severity'] = 'Vakavuus';

$GLOBALS["lang"]['Severity'] = 'Vakavuus';

$GLOBALS["lang"]['severity_text'] = 'Vakavuusteksti';

$GLOBALS["lang"]['Severity Text'] = 'Vakavuusteksti';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Vakavuus lasketaan <code>base_score</code> ja voi olla yksi: Ei mitään, Matala, Keskisuuri, Korkea, Kriittinen.';

$GLOBALS["lang"]['Seychelles'] = 'Seychellit';

$GLOBALS["lang"]['share'] = 'Osuus';

$GLOBALS["lang"]['Share'] = 'Osuus';

$GLOBALS["lang"]['Share Name'] = 'Osakkeen nimi';

$GLOBALS["lang"]['shared'] = 'Jaettu';

$GLOBALS["lang"]['Shared'] = 'Jaettu';

$GLOBALS["lang"]['shared_name'] = 'Jaettu nimi';

$GLOBALS["lang"]['Shared Name'] = 'Jaettu nimi';

$GLOBALS["lang"]['shell'] = 'Kuori';

$GLOBALS["lang"]['Shell'] = 'Kuori';

$GLOBALS["lang"]['Ship Date'] = 'Aluksen päivämäärä';

$GLOBALS["lang"]['short'] = 'Lyhyt';

$GLOBALS["lang"]['Short'] = 'Lyhyt';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Pitäisikö minun poistaa kaikki käyttämättömät tiedot tästä laitteesta?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Jos tätä tiedostoa (tai kaavaa) käytetään jättämään tiedostot raportoimatta. Tavallisesti, tarkastaa tiedostoja, tämä on asetettu <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Jos tätä myyjää käytetään noutaessa haavoittuvuuksia FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Pitäisikö meidän lisätä laitteita etäpalvelusta, paikallisesti.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Pitäisikö meidän soveltaa tätä lisenssiä valittuun Organ sekä Orgas lapset?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Pitäisikö suodatetun portin katsoa olevan avoin satama - ja sen vuoksi merkitä, että tässä IP-osoitteessa on laite kiinnitettynä?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Pitäisikö meidän pitää avointa ja suodatettua satamaa avoimena porttina - ja sen vuoksi merkitä tämä IP-osoite laitteena?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Pitäisikö meidän paljastaa tämä ryhmä web-käyttöliittymässä.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Pitäisikö meidän paljastaa tämä kysely raporttien luettelossa raportin valikosta web-käyttöliittymässä.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Pitäisikö meidän paljastaa tämä kysely raporttien luettelossa raporttien valikossa web-käyttöliittymässä.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Pitäisikö meidän asentaa Open-Scap kohde koneeseen.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Pitäisikö meidän täsmätä laitteen mac-osoitteeseen, vaikka sen tunnettu todennäköisesti kopio VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Pitäisikö meidän yhdistää laite sen DNS fqdn:n perusteella?';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Pitäisikö meidän sovittaa laite perustuu sen DNS-käyttönimi.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Pitäisikö meidän yhdistää laite sen UUIDin perusteella?';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Pitäisikö meidän yhdistää laite sen dbus-tunnisteeseen?';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Pitäisikö meidän sovittaa laite sen fqdn:n perusteella?';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Pitäisikö meidän sovittaa laite sen isäntänimeen ja UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Pitäisikö meidän yhdistää laite, joka perustuu sen nimi ja dbus ID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Pitäisikö meidän sovittaa laite sen nimiin ja sarjaan?';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Pitäisikö täsmätä laitteeseen, joka perustuu IP:hen?';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Pitäisikö meidän sovittaa laite sen IP:n perusteella?';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Pitäisikö meidän verrata laitetta mac-osoitteeseen?';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Pitäisikö meidän sovittaa laite sarjaan ja tyyppiin?';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Pitäisikö meidän sovittaa laite sarjanumeroon?';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Pitäisikö meidän sovittaa laite perustuu vain sen SNMP sysName ja sarja.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Pitäisikö meidän sovittaa laite perustuu vain sen SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Pitäisikö meidän yhdistää laite vain sen isäntänimeen?';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Pitäisikö IP:n skannata? Jos se ei vastaa ping, ohittaa tämän laitteen.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Meidän pitäisi kansoittaa ulkoinen järjestelmä paikallisista laitteistamme.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Pitäisikö meidän tehdä tarkastus ja toimittaa se (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Pitäisikö meidän testata SNMP käyttäen UDP port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Pitäisikö meidän testata SSH TCP portti 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Pitäisikö meidän testata WMI TCP portilla 135?';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Pitäisikö meidän poistaa agentti (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Pitäisikö meidän käyttää tätä menetelmää käyttäjätunnusten todentamiseen? Aseta <code>y</code> tai <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Pitäisikö meidän käyttää tätä menetelmää käyttäjien roolit. Kenttä <code>use_auth</code> on asetettava <code>y</code> Käyttää tätä. Aseta <code>y</code> tai <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Näytä kaikki';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Sivupalkki';

$GLOBALS["lang"]['Sidebar'] = 'Sivupalkki';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapore';

$GLOBALS["lang"]['Site A'] = 'Alue A';

$GLOBALS["lang"]['Site B'] = 'Alue B';

$GLOBALS["lang"]['site_hours_a'] = 'Paikkatunteja A';

$GLOBALS["lang"]['Site Hours A'] = 'Paikkatunteja A';

$GLOBALS["lang"]['site_hours_b'] = 'Aluetunnit B';

$GLOBALS["lang"]['Site Hours B'] = 'Aluetunnit B';

$GLOBALS["lang"]['size'] = 'Koko';

$GLOBALS["lang"]['Size'] = 'Koko';

$GLOBALS["lang"]['slaves'] = 'Orjat';

$GLOBALS["lang"]['Slaves'] = 'Orjat';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakia (Slovakin tasavalta)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenia';

$GLOBALS["lang"]['Smart Status'] = 'Älykäs tila';

$GLOBALS["lang"]['smversion'] = 'Smversio';

$GLOBALS["lang"]['Smversion'] = 'Smversio';

$GLOBALS["lang"]['Sneaky'] = 'Ovela.';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp-yrityksen nimi';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp-yrityksen nimi';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp aikakatkaisu';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp aikakatkaisu';

$GLOBALS["lang"]['snmp_version'] = 'Snmp- versio';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp- versio';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Ohjelmisto';

$GLOBALS["lang"]['Software'] = 'Ohjelmisto';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Ohjelmisto löytyi viimeiset 7 päivää';

$GLOBALS["lang"]['Software Found Today'] = 'Ohjelmisto löytyi tänään';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Ohjelmisto löytyi eilen';

$GLOBALS["lang"]['software_key'] = 'Ohjelmistonäppäin';

$GLOBALS["lang"]['Software Key'] = 'Ohjelmistonäppäin';

$GLOBALS["lang"]['software_name'] = 'Ohjelmiston nimi';

$GLOBALS["lang"]['Software Name'] = 'Ohjelmiston nimi';

$GLOBALS["lang"]['Software Policies'] = 'Ohjelmistopolitiikka';

$GLOBALS["lang"]['software_revision'] = 'Ohjelmiston tarkistaminen';

$GLOBALS["lang"]['Software Revision'] = 'Ohjelmiston tarkistaminen';

$GLOBALS["lang"]['software_version'] = 'Ohjelmistoversio';

$GLOBALS["lang"]['Software Version'] = 'Ohjelmistoversio';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Salomonsaaret';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, Somalian tasavalta';

$GLOBALS["lang"]['sound'] = 'Ääni';

$GLOBALS["lang"]['Sound'] = 'Ääni';

$GLOBALS["lang"]['source'] = 'Lähde';

$GLOBALS["lang"]['Source'] = 'Lähde';

$GLOBALS["lang"]['South Africa'] = 'Etelä-Afrikka';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Etelä-Georgia ja Eteläiset Sandwichsaaret';

$GLOBALS["lang"]['Spain'] = 'Espanja';

$GLOBALS["lang"]['Spanish'] = 'espanja';

$GLOBALS["lang"]['Specific to Azure.'] = 'Erityisesti Azurelle.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Erityistä OKTAlle.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Määrittää pilkulla erotetun luettelon kohteista (ei välilyöntejä), jotka on jätettävä pois skannauksesta. Listan ohitat käyttää normaalia Nmap syntaksi, joten se voi sisältää isäntänimiä, CIDR netblocks, oktetteja jne.';

$GLOBALS["lang"]['speed'] = 'Nopeus';

$GLOBALS["lang"]['Speed'] = 'Nopeus';

$GLOBALS["lang"]['speed_down_a'] = 'Nopeus alas A';

$GLOBALS["lang"]['Speed Down A'] = 'Nopeus alas A';

$GLOBALS["lang"]['speed_down_b'] = 'Nopeus alas B';

$GLOBALS["lang"]['Speed Down B'] = 'Nopeus alas B';

$GLOBALS["lang"]['speed_up_a'] = 'Nopeus A';

$GLOBALS["lang"]['Speed Up A'] = 'Nopeus A';

$GLOBALS["lang"]['speed_up_b'] = 'Nopeus B';

$GLOBALS["lang"]['Speed Up B'] = 'Nopeus B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh- satamat';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh- satamat';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh aikakatkaisu';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh aikakatkaisu';

$GLOBALS["lang"]['Stand-Alone'] = 'Yksin';

$GLOBALS["lang"]['Standard'] = 'Standardi';

$GLOBALS["lang"]['standard_id'] = 'Vakiotunnus';

$GLOBALS["lang"]['Standard ID'] = 'Vakiotunnus';

$GLOBALS["lang"]['standards'] = 'Standardit';

$GLOBALS["lang"]['Standards'] = 'Standardit';

$GLOBALS["lang"]['standards_policies'] = 'Standardointipolitiikka';

$GLOBALS["lang"]['Standards Policies'] = 'Standardointipolitiikka';

$GLOBALS["lang"]['standards_results'] = 'Standardien tulokset';

$GLOBALS["lang"]['Standards Results'] = 'Standardien tulokset';

$GLOBALS["lang"]['start_date'] = 'Aloituspäivä';

$GLOBALS["lang"]['Start Date'] = 'Aloituspäivä';

$GLOBALS["lang"]['start_mode'] = 'Käynnistystila';

$GLOBALS["lang"]['Start Mode'] = 'Käynnistystila';

$GLOBALS["lang"]['started_date'] = 'Aloituspäivä';

$GLOBALS["lang"]['Started Date'] = 'Aloituspäivä';

$GLOBALS["lang"]['state'] = 'Tila';

$GLOBALS["lang"]['State'] = 'Tila';

$GLOBALS["lang"]['Stats'] = 'Tilasto';

$GLOBALS["lang"]['status'] = 'Tila';

$GLOBALS["lang"]['Status'] = 'Tila';

$GLOBALS["lang"]['Storage'] = 'Varastointi';

$GLOBALS["lang"]['storage_count'] = 'Varastointi';

$GLOBALS["lang"]['Storage Count'] = 'Varastointi';

$GLOBALS["lang"]['Storage-Area Network'] = 'Tallennus-alueverkko';

$GLOBALS["lang"]['string'] = 'Merkkijono';

$GLOBALS["lang"]['String'] = 'Merkkijono';

$GLOBALS["lang"]['sub_resource_id'] = 'Ala Resurssitunniste';

$GLOBALS["lang"]['Sub Resource ID'] = 'Ala Resurssitunniste';

$GLOBALS["lang"]['sub_type'] = 'Alatyyppi';

$GLOBALS["lang"]['Sub Type'] = 'Alatyyppi';

$GLOBALS["lang"]['subject_key_ident'] = 'Aihe';

$GLOBALS["lang"]['Subject Key Ident'] = 'Aihe';

$GLOBALS["lang"]['Submit'] = 'Lähetä';

$GLOBALS["lang"]['Submitted From'] = 'Lähetetty';

$GLOBALS["lang"]['subnet'] = 'Aliverkko';

$GLOBALS["lang"]['Subnet'] = 'Aliverkko';

$GLOBALS["lang"]['Subscription ID'] = 'Tilaustunnus';

$GLOBALS["lang"]['suburb'] = 'Esikaupunki';

$GLOBALS["lang"]['Suburb'] = 'Esikaupunki';

$GLOBALS["lang"]['Success'] = 'Onnistuminen';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo Salasana';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo salasana (valinnainen)';

$GLOBALS["lang"]['suite'] = 'Sviitti';

$GLOBALS["lang"]['Suite'] = 'Sviitti';

$GLOBALS["lang"]['summaries'] = 'Tiivistelmät';

$GLOBALS["lang"]['Summaries'] = 'Tiivistelmät';

$GLOBALS["lang"]['Summary'] = 'Yhteenveto';

$GLOBALS["lang"]['Sunday'] = 'Sunnuntai';

$GLOBALS["lang"]['supplier'] = 'Toimittaja';

$GLOBALS["lang"]['Supplier'] = 'Toimittaja';

$GLOBALS["lang"]['Support'] = 'Tuki';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Tuetut tyypit ovat <code>subnet</code>, <code>seed</code> sekä <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Swazimaa';

$GLOBALS["lang"]['Sweden'] = 'Ruotsi';

$GLOBALS["lang"]['switch_device_id'] = 'Vaihda laitteen tunnistetta';

$GLOBALS["lang"]['Switch Device ID'] = 'Vaihda laitteen tunnistetta';

$GLOBALS["lang"]['switch_port'] = 'Vaihda porttia';

$GLOBALS["lang"]['Switch Port'] = 'Vaihda porttia';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Sveitsi';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Syyria';

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

$GLOBALS["lang"]['system_component'] = 'Järjestelmäkomponentti';

$GLOBALS["lang"]['System Component'] = 'Järjestelmäkomponentti';

$GLOBALS["lang"]['System-Area Network'] = 'Järjestelmä-alueverkko';

$GLOBALS["lang"]['TX Bitrate'] = 'TX bittinopeus';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX-taso';

$GLOBALS["lang"]['TX Power'] = 'TX-teho';

$GLOBALS["lang"]['TX Profile'] = 'TX-profiili';

$GLOBALS["lang"]['table'] = 'Taulukko';

$GLOBALS["lang"]['Table'] = 'Taulukko';

$GLOBALS["lang"]['tag'] = 'Merkitys';

$GLOBALS["lang"]['Tag'] = 'Merkitys';

$GLOBALS["lang"]['tag_1'] = 'Merkintä 1';

$GLOBALS["lang"]['Tag 1'] = 'Merkintä 1';

$GLOBALS["lang"]['tag_2'] = 'Merkintä 2';

$GLOBALS["lang"]['Tag 2'] = 'Merkintä 2';

$GLOBALS["lang"]['tag_3'] = 'Merkintä 3';

$GLOBALS["lang"]['Tag 3'] = 'Merkintä 3';

$GLOBALS["lang"]['tags'] = 'Tunnisteet';

$GLOBALS["lang"]['Tags'] = 'Tunnisteet';

$GLOBALS["lang"]['Tags :: '] = 'Tunnisteet:: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadžikistan';

$GLOBALS["lang"]['Tanzania'] = 'Tansania';

$GLOBALS["lang"]['task'] = 'Tehtävä';

$GLOBALS["lang"]['Task'] = 'Tehtävä';

$GLOBALS["lang"]['tasks'] = 'Tehtävät';

$GLOBALS["lang"]['Tasks'] = 'Tehtävät';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp-satamat';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp-satamat';

$GLOBALS["lang"]['tenant'] = 'Vuokra';

$GLOBALS["lang"]['Tenant'] = 'Vuokra';

$GLOBALS["lang"]['ternary'] = 'Ternaari';

$GLOBALS["lang"]['Ternary'] = 'Ternaari';

$GLOBALS["lang"]['Test 1'] = 'Testi 1';

$GLOBALS["lang"]['Test 2'] = 'Testi 2';

$GLOBALS["lang"]['Test 3'] = 'Testi 3';

$GLOBALS["lang"]['test_minutes'] = 'Testipöytäkirja';

$GLOBALS["lang"]['Test Minutes'] = 'Testipöytäkirja';

$GLOBALS["lang"]['test_os'] = 'Testi Os';

$GLOBALS["lang"]['Test Os'] = 'Testi Os';

$GLOBALS["lang"]['test_subnet'] = 'Testin aliverkko';

$GLOBALS["lang"]['Test Subnet'] = 'Testin aliverkko';

$GLOBALS["lang"]['tests'] = 'Testit';

$GLOBALS["lang"]['Tests'] = 'Testit';

$GLOBALS["lang"]['Text'] = 'Teksti';

$GLOBALS["lang"]['Thailand'] = 'Thaimaa';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Aktiivisen hakemiston verkkotunnus, josta voit hakea listan aliverkoista.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory -palvelin, jolta voit hakea listan aliverkoista.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatable metri kaappaa vastauksen kysymykseen <strong>Voiko hyökkääjä automatisoida hyväksikäyttötapahtumat tämän haavoittuvuuden takia useissa kohteissa?</strong> Se perustuu tappoketjun vaiheisiin 1-4. Nämä vaiheet ovat tiedustelu, aseistus, toimitus ja hyväksikäyttö (ei määritelty, Ei, Kyllä).';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE-tunniste.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Pilvi, joka omistaa tämän esineen. Linkit <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Ryhmällä oli tapana tehdä vertailuanalyysi. Linkit <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'NTU:n laitetaulukon tunniste (laitteet.nimeä näytetään) yhteyden tässä päässä. Linkit <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Tuodun vertailuarvon tunniste.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Yhteyden tämän lopun tunnukset sijaintitaulukosta (sijainnit.nimi näytetään). Linkit <code>locations.id</code>. Sijainti on yleensä <code>FROM</code> Sijainti.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Yhteyden tämän lopun tunnukset sijaintitaulukosta (sijainnit.nimi näytetään). Linkit <code>locations.id</code>. B sijainti on yleensä <code>TO</code> Sijainti.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Tähän liittyvän laitteen (jos sellainen on) tunnistetiedot. Linkit <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Löytö on tunnistettu. Yhdistetty <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Tässä kohdassa tarkoitetaan vakavaraisuusasetuksen 429 artiklan 1 kohdan a alakohdan i alakohdan mukaisia arvopaperistamispositioita.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Tunnistus orgs vanhempi org. Yhdistetty <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Palveluntarjoajan antama tunniste.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Henkilökortti löytyi Pilvilöydöstä.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Keräilijän IP-osoite, jolla hän kommunikoi palvelimen kanssa.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'Laite käynnistää siemenlöydön.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'Ulkoisen rajapinnan IP.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'Sisäisen rajapinnan IP.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP tai Telco tarjoaa tämän linkin.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Json-levy Mitreltä.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON-levy NVD-syötteestä.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Tämän käyttäjän LDAP OU (jos käytetään LDAP:tä).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Sijainti, joka sisältää tämän verkon. Linkit <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD:n antama perusasema.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmapin ajoitus asetettu.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Käyttöönotto tästä paketista on ilmoitettava. Tyhjä kaikille. Käytä prosenttimerkkiä % villinä korttina. Testataan os_groupia, os_perhettä ja os_name tässä järjestyksessä.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Yhdistetyn pilven Open-AudIT-tunniste. Linkit <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open-Aud Tietopalvelimen koodi poistettiin tästä tiedostosta.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open-Aud IT-palvelimen koodi poistettiin tässä funktiossa.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organisaatio, joka omistaa tämän esineen. Linkit <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Juoksevan löydön prosessitunniste.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Tämän laitteen yläosan rautatieasema.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP-yhteisön merkkijono.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 -todentamislause.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 -todentamisprotokolla.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 turvataso.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 turvanimi.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3-kontekstimoottorin tunnus (valinnainen).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3-kontekstin nimi (valinnainen).';

$GLOBALS["lang"]['The URL of the external system.'] = 'Ulkoisen järjestelmän URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Avoimen audittisi URL Palvelin, jolle tämä keräilijä raportoi (ei jälkiviivaa).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Tarkastusskriptien on toimitettava tulos URL-osoitteeseen.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Tämän käyttäjän varsinainen koko nimi.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Tähän liittyvä perustaso. Linkit <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Tähän liittyvä löytö (tarvittaessa). Linkit <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Määrite testattavaksi (alkaen <code>devices</code> Taulukko).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Testattava attribuutti (on vastattava ulkoista kentän nimeä jäljempänä).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Auditointi skripti, johon voit perustaa räätälöinnit.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Peruspolku, josta etsiä käyttäjiä.';

$GLOBALS["lang"]['The benchmark type.'] = 'Vertailukohdetyyppi.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Rakennuksessa teline sijaitsee.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Ulkoisesti luotavien laitteiden laskettu määrä.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT:ssä luotujen laitteiden laskettu määrä.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Keräilijöiden sisäinen IP käytetään, kun se tekee löydön.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Vieraan pöydän sarakkeen nimi. Olisi oltava yksi: luokka, ympäristö, tila, tyyppi tai valikko_ luokka.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Kohdelaitteessa tai Open-AudIT-palvelimen koodissa suoritettu komento.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Klusterin kokoonpano voi olla: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> tai tyhjä.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Valtakirjan salasana. Jos tunnusluvut ovat SSH-avain, tämä on salasana, jota käytetään avaimen avaamiseen ja on valinnainen.';

$GLOBALS["lang"]['The credentials username.'] = 'Henkilötunnukset.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Pilvilöydön nykytila.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Löydön nykytila.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Kojelauta, joka näytetään oletuksena tälle käyttäjälle. Linkit <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Tietokannan versio ja web-versio ovat epäjohdonmukaisia.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Luvan voimassaolon päättymispäivä.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Päivämäärä, jona valmistaja lopettaa ohjelmiston. Yleensä se korvataan uudemmalla versiolla. Huolto voi olla vielä käytettävissä.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Päivä, jona ohjelmisto ei enää saa päivityksiä, ja se lakkautetaan kokonaan. Huolto lopetetaan.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Päivä, jona tätä kohtaa muutettiin tai lisättiin (lue vain). HUOM - Tämä on aikaleima palvelimelta.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Päivä/aika, jolloin tulos luotiin.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Kuukauden päivä, jona tämä tehtävä on suoritettava (* joka päivä).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Viikon päivä, jolloin tämä tehtävä on suoritettava (* joka päivä).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Oletuskieli annetaan kaikille käyttäjille luotu tällä menetelmällä.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Laitteen on vastattava Nmap ping ennen sitä pidetään verkossa.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Laite Open-AudITissa. Linkit <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Skriptin suora linkki on';

$GLOBALS["lang"]['The email address of the reciever'] = 'Vastaanottajan sähköpostiosoite';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Yrityksen binary FirstWave vaaditaan lisenssi. Lataa Open-AudIT';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Koko tähän liittyvä tulos on saatu.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Ulkoinen sijaintitunnus. Yleensä asutetaan pilviauditoinnit.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Ensimmäinen kerta, kun Open-AudIT sai tiedot tästä laitteesta.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Lattia teline sijaitsee.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Ulkomainen pöytä. Pitäisi olla yksi: laitteet, sijainnit, orgs tai kyselyt.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Lähetettävässä tulosteessa käytettävä muoto.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Täysin pätevä sarake, johon ryhmitellään. HUOMAUTUS: Kun tyyppi = liikenne, tämä edustaa punaista kyselyn tunnistetta.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Täysin pätevä taulukko. sarake. Pilkussa voi olla useita välilyöntejä.';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Luotu SQL kysely testata tätä haavoittuvuutta. Tämä kenttä voidaan muokata korjaamaan kyselyn tarpeen mukaan.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Laiteryhmä, jolla perustasoa on vastustettu.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Ryhmä, joka toimittaa luettelon laitteista integrointia varten. Linkit <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Päivän tunti, jolloin tämä tehtävä on suoritettava (* joka tunti).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Linkitetyn laitteen tunniste. Linkit <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Tietokannan tunnistesarake (integer) (lue vain).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Tämän perustason merkitys (ei vielä käytössä).';

$GLOBALS["lang"]['The integer of severity.'] = 'Tarkkuuden kokonaisluku.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth-menetelmän IP-osoite.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Kieli kääntää web-käyttöliittymän käyttäjälle.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Tämän erän viimeinen toteutuspäivä ja -aika (lue vain).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Viimeksi kun Open-AudIT sai tiedot tästä laitteesta.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Viimeksi nämä vertailuarvot toteutettiin.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Viimeksi tämä kotoutuminen tehtiin.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Linjanumero, jonka palveluntarjoaja on antanut linjalle yhteyden tässä päässä.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Sijainti teline sijaitsee. Linkit <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Paikan osoite.';

$GLOBALS["lang"]['The locations area.'] = 'Paikkakunta.';

$GLOBALS["lang"]['The locations city.'] = 'Paikkakunta.';

$GLOBALS["lang"]['The locations country.'] = 'Paikkakunta.';

$GLOBALS["lang"]['The locations district.'] = 'Paikkakunta.';

$GLOBALS["lang"]['The locations latitude.'] = 'Paikkakunta leveysasteella.';

$GLOBALS["lang"]['The locations level.'] = 'Paikat tasaavat.';

$GLOBALS["lang"]['The locations longitude.'] = 'Sijainnit pituusasteella.';

$GLOBALS["lang"]['The locations phone.'] = 'Paikan päällä.';

$GLOBALS["lang"]['The locations postcode.'] = 'Paikan postinumero.';

$GLOBALS["lang"]['The locations region.'] = 'Sijaintialue.';

$GLOBALS["lang"]['The locations room.'] = 'Paikkahuone.';

$GLOBALS["lang"]['The locations state.'] = 'Paikkakunta ilmoittaa.';

$GLOBALS["lang"]['The locations suburb.'] = 'Paikkakunta lähiössä.';

$GLOBALS["lang"]['The locations suite.'] = 'Paikkasviitti.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Suurin fyysinen paino (KG:inä) tämä teline kestää.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Maksimi BTUs tämä teline on luokiteltu.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Sen tunnin minuutti, jolloin tämä tehtävä on suoritettava (* joka minuutti).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Sen vuoden kuukausi, jolloin tehtävän pitäisi tapahtua (* joka kuukausi).';

$GLOBALS["lang"]['The name given to this item.'] = 'Tälle tuotteelle annettu nimi.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Tälle tuotteelle annettu nimi. Ihannetapauksessa sen pitäisi olla ainutlaatuinen.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Käyttäjälle annettu nimi (käytetään kirjautumiseen). Ihannetapauksessa sen pitäisi olla ainutlaatuinen.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Pilven nimi (tarvittaessa).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Ohjelmistopaketin nimi Open-AudITin tarkastamana. Käytä prosenttimerkkiä % villinä korttina.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Käyttäjän nimi, joka on viimeksi muuttanut tai lisännyt tämän kohdan (lue vain).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Palveluntarjoajan antama nimi.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Verkko muodossa 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Verkko aliverkko suorittaa löydön.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Tämän laitteen käytössä olevien rautatieyritysten lukumäärä.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Tähän liittyvien paikkojen lukumäärä. Linkit <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Yhdistettyjen verkkojen lukumäärä. Linkit <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Tarkastettujen laitteiden määrä tässä pilvessä. Linkit <code>devices.cloud_id</code> sekä <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWaven kriittisten vakavuusalttiuksien määrä (ei tietokannassasi).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Tämän löydön löytämien laitteiden määrä.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Tähän ryhmään kuuluvien laitteiden lukumäärä.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Tämän pilven laitteiden määrä, joiden toimintatila on käynnissä. Linkit <code>devices.cloud_id</code> sekä <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Tämän pilven laitteiden määrä pysähtyneenä. Linkit <code>devices.cloud_id</code> sekä <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Laitteiden määrä tässä pilvessä. Linkit <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Tämän vertailuarvon mukaisten laitteiden lukumäärä. Tuotettu <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Tämän löydön rajoittamiseen käytettävien laitteiden määrä.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWaven hallussa olevien vakavien haavoittuvuuksien määrä (ei tietokannassasi).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWaven heikkouksien määrä (ei tietokannassasi).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWaven heikkouksien määrä (ei tietokannassasi).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Ostettujen lisenssien määrä.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Sekuntien määrä, jolloin yritetään kommunikoida kohteen IP kanssa.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Haavoittuvuuksien määrä ilman vakavuutta FirstWave (ei tietokannassa).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Valinnainen toissijainen sarake. HUOM: Kun tyyppi = liikenne, tämä edustaa keltaista kyselyn tunniste.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Valinnainen kolmas sarake. HUOM: Kun tyyppi = liikenne, tämä edustaa vihreää kyselyn tunniste.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Tämän laitteen suunta.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Dn_account-attribuutin salasana.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Salasanalla pääsee ulkoiseen järjestelmään.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Polku tiedostoon tai kansioon.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Polku tiedostoon tai kansioon. Hakemistojen pitäisi päättyä jälkiviivaan.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Telineen fyysinen syvyys (CMs).';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Telineen fyysinen korkeus (CMs).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Tällä hetkellä telineen fyysinen paino (KG:inä).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Telineen fyysinen paino (KG:inä) tyhjänä.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Telineen fyysinen leveys (CM:inä).';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Kapseli (jos on) että tämä teline on osa.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Virtapiiri, johon tämä teline kiinnittyy.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Ensisijainen tietokanta taulukko, johon perustaa tämän widget.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Tämän jonon kohteen prosessitunniste.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Prosessi, jota käytettiin viimeksi hakemaan yksityiskohtia laitteesta';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Kysely, joka tarjoaa luettelon laitteista integrointia varten. Linkit <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Teippinumero.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Rintsikoiden tunnusluku.';

$GLOBALS["lang"]['The rack bar code.'] = 'Tangon viivakoodi.';

$GLOBALS["lang"]['The rack model.'] = 'Telinemalli.';

$GLOBALS["lang"]['The rack serial.'] = 'Se sarja.';

$GLOBALS["lang"]['The rack series.'] = 'Telinesarja.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Laite on telineessä. Linkit <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Suositellaan, että turvatoimien haavoittuvuutta käsitellään ja vahvistetaan. Tämä edellyttää tyypillisesti laikkujen, päivitysten tai muiden toimenpiteiden soveltamista haavoittuvuuksien aiheuttaman riskin poistamiseksi.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Säännöllinen verkkotunnus hakemistossa. Esim. <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'Käskyn tulos.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Huone, jossa teline sijaitsee.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Rivi teline sijaitsee.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Salainen avain käytetään yhdessä AWS EC2 API-avain.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Ohjelmiston päättymispäivä.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Ohjelmiston käyttöiän päättymispäivä.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Erityinen tietokantasarake määritetystä tietokantataulukosta.';

$GLOBALS["lang"]['The specific database table.'] = 'Tietokantataulukko.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Normaali Nmap ajoitus vaihtoehtoja. Käytämme yleensä -T4 (Aggressiivinen) koska tätä suositellaan kunnollinen laajakaista- tai eetteriyhteys.';

$GLOBALS["lang"]['The status of this integration'] = 'Tämän yhdentymisen asema';

$GLOBALS["lang"]['The status of this queued item.'] = 'Tämän jonotetun kohteen tila.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Kohde IP tämän loki merkintä viitteeksi (jos on).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Linkin malli tulosriviä kohti.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Kaavion alareunan teksti rivitaulukossa (vain).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Näytettävä teksti.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Aikaleima, jonka jälkeen tehtävän pitäisi toimia. Esimerkiksi suorittaa tehtävän jälkeen 1. kesäkuuta 2017 klo 10, asettaa <code>2017-06-01 09:59:00</code>. Tämän arvon ei pitäisi olla pehmustettu (ts. 09, ei 9). Tämä arvo on oletusarvo <code>2000-01-01 00:00:00</code> mikä tarkoittaa oletusarvoisesti, ajoitettu tehtävä suoritetaan seuraavan aikataulun toteutusaika.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = '10, 100 tai 1000 (tai ei yhtään) TCP-porttia yleisesti käytössä Nmapin mukaan.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Top 10, 100 tai 1000 (tai ei yhtään) UDP-portteja yleisesti käytössä Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Tämän telineen BTU-ulostulo.';

$GLOBALS["lang"]['The type of device.'] = 'Laitetyyppi.';

$GLOBALS["lang"]['The type of organisation.'] = 'Organisaation tyyppi.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Telinetyyppi (laskuri, teho, verkko jne.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Tehtävän tyyppi. Yksi: perustaso, vertailukohta, pilvilöytö, löytö, integrointi, raportti, kysely.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Integraation tyyppi (joka mainitaan yleensä ulkoisen järjestelmän mukaan).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Tämän palvelimen yksilöllinen tunniste.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Käyttäjätili, jota keräilijä käyttää. Linkit <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Käyttäjätunnus, jota käytettiin ulkoiseen järjestelmään.';

$GLOBALS["lang"]['The users email address.'] = 'Käyttäjien sähköpostiosoite.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Tavalliset aukioloajat.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Kappaleelle annettu arvo.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Tätä kohtaa varten tallennettava arvo.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'CPE-merkinnän mukainen myyjän nimi.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'CPE:stä viety myyjä.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Open-AudIT-palvelimen verkkohakemisto (vaatii jälkiviivan).';

$GLOBALS["lang"]['The widget at position '] = 'Asema ';

$GLOBALS["lang"]['The width of this device.'] = 'Tämän laitteen leveys.';

$GLOBALS["lang"]['Then'] = 'Sitten';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Tämä CVE haetaan ja korvaa olemassa olevan CVE:n, jos se on olemassa.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Tämä ominaisuus tallennetaan JSON objektina. Se on luettelo kaikista kokoelmista ja sisältää kokoelman nimen yhdessä <code>c</code>, <code>r</code>, <code>u</code> ja,tai <code>d</code> jotka edustavat luoda, lukea, päivittää ja poistaa. Nämä ovat toimia käyttäjä voi suorittaa kohteita kyseisen kokoelman.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Tämä voi olla joko varichar (tekstikenttä), luettelo (luettelo arvoista, jotka voidaan valita) tai päivämäärä.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Tämä keräilijä universaalisti yksilöllinen tunniste.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Tämä kuvaus on automaattisesti asutettu ja olisi mieluiten jätettävä sellaisenaan.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Tämä ominaisuus vaatii Professional tai Enterprise lisenssi.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Tämä on yleensä ensisijainen sarake, ellei toisin määrätä. HUOM: Kun tyyppi = liikenne, tämä on toissijainen teksti.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Tämän kohteen on vastattava valitun ominaisuuden arvoa tai siinä on käytettävän kyselyn tunniste.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Tämän erän on vastattava valitun ominaisuuden arvoa.';

$GLOBALS["lang"]['This license expires on'] = 'Tämän lisenssin voimassaolo päättyy';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Tämä olisi asetettava joko 1 tai korkeus teline.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Tämä pumppaa automaattisesti.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Tämä hidastaa huomattavasti löytöskannausta.';

$GLOBALS["lang"]['Thursday'] = 'Torstai';

$GLOBALS["lang"]['time_caption'] = 'Aikateksti';

$GLOBALS["lang"]['Time Caption'] = 'Aikateksti';

$GLOBALS["lang"]['time_daylight'] = 'Aika päivänvalo';

$GLOBALS["lang"]['Time Daylight'] = 'Aika päivänvalo';

$GLOBALS["lang"]['Time to Execute'] = 'Aika suorittaa';

$GLOBALS["lang"]['timeout'] = 'Aikakatkaisu';

$GLOBALS["lang"]['Timeout'] = 'Aikakatkaisu';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Aikakatkaisu kohdetta kohti (toisia)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Aikaleima';

$GLOBALS["lang"]['timing'] = 'Ajoitus';

$GLOBALS["lang"]['Timing'] = 'Ajoitus';

$GLOBALS["lang"]['Timor-Leste'] = 'Itä-Timor';

$GLOBALS["lang"]['Title'] = 'Osasto';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'TokelauCity name (optional, probably does not need a translation)';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Työkalupalkin tyyli';

$GLOBALS["lang"]['Toolbar Style'] = 'Työkalupalkin tyyli';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Portit';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP portit';

$GLOBALS["lang"]['Traditional Chinese'] = 'Perinteiset kiinalaiset';

$GLOBALS["lang"]['Traffic Light'] = 'Liikennevalo';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad ja Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Vianmääritys';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Kokeile uusia ominaisuuksia ilmaisella 100 laitteen lisenssillä Open-AudIT Enterprise. Lue <a href=\"';

$GLOBALS["lang"]['Tuesday'] = 'Tiistai';

$GLOBALS["lang"]['Tunisia'] = 'Tunisia';

$GLOBALS["lang"]['Turkey'] = 'Turkki';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenistan';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turks- ja Caicossaaret';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx bittinopeus';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx bittinopeus';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx-taso';

$GLOBALS["lang"]['Tx Level'] = 'Tx-taso';

$GLOBALS["lang"]['tx_power'] = 'Tx-teho';

$GLOBALS["lang"]['Tx Power'] = 'Tx-teho';

$GLOBALS["lang"]['tx_profile'] = 'Tx-profiili';

$GLOBALS["lang"]['Tx Profile'] = 'Tx-profiili';

$GLOBALS["lang"]['type'] = 'Tyyppi';

$GLOBALS["lang"]['Type'] = 'Tyyppi';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Portit';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Portit';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina';

$GLOBALS["lang"]['uninstall'] = 'Poista asennus';

$GLOBALS["lang"]['Uninstall'] = 'Poista asennus';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Poista agentin asennus';

$GLOBALS["lang"]['United Arab Emirates'] = 'Arabiemiirikunnat';

$GLOBALS["lang"]['United Kingdom'] = 'Yhdistynyt kuningaskunta';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Yhdysvallat Minor Outlyingsaaret';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Yhdysvallat';

$GLOBALS["lang"]['United States of America'] = 'Amerikan yhdysvallat';

$GLOBALS["lang"]['Unknown'] = 'Tuntematon';

$GLOBALS["lang"]['unlock_pin'] = 'Avaa Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Avaa Pin';

$GLOBALS["lang"]['Unscheduled'] = 'Odottamaton';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Ei käytetty, kuten 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Käyttämätön.';

$GLOBALS["lang"]['Update'] = 'Päivitä';

$GLOBALS["lang"]['update_external_count'] = 'Päivitä ulkoinen luku';

$GLOBALS["lang"]['Update External Count'] = 'Päivitä ulkoinen luku';

$GLOBALS["lang"]['update_external_from_internal'] = 'Päivitä ulkoinen sisäisestä';

$GLOBALS["lang"]['Update External From Internal'] = 'Päivitä ulkoinen sisäisestä';

$GLOBALS["lang"]['update_internal_count'] = 'Päivitä sisäinen luku';

$GLOBALS["lang"]['Update Internal Count'] = 'Päivitä sisäinen luku';

$GLOBALS["lang"]['update_internal_from_external'] = 'Päivitä sisäinen ulkoinen';

$GLOBALS["lang"]['Update Internal From External'] = 'Päivitä sisäinen ulkoinen';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Päivitä Open-AudITin NMIS-laitteet';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Päivitä Open-AudIT Laitteet ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Päivitä Open-AudIT NMIS:n laitteet';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Päivitetty aina kun löytö on tehty IP-osoituksilla, jotka on havaittu vastaaviksi.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Päivitetty aina kun löytö on toteutettu IPs jotka on skannattu Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Päivitetty aina kun löytö on tehty laitteilla, jotka pystyimme tarkastamaan.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Päivitetty aina kun löytö on tehty laitteilla, joita pystyimme tiedustelemaan.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Päivitetty aina kun löytö on tehty.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Päivitetty aina kun löytö on tehty.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Päivitetty aina kun löytö on suoritettu.';

$GLOBALS["lang"]['Updating'] = 'Päivittäminen';

$GLOBALS["lang"]['Upgrade'] = 'Päivitys';

$GLOBALS["lang"]['Upload an audit result file'] = 'Lataa auditoinnin tulostiedosto';

$GLOBALS["lang"]['Upper Case'] = 'Ylätapaus';

$GLOBALS["lang"]['uptime'] = 'Käyttöaika';

$GLOBALS["lang"]['Uptime'] = 'Käyttöaika';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguayn itäinen tasavalta';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Käyttö';

$GLOBALS["lang"]['Use'] = 'Käyttö';

$GLOBALS["lang"]['use_authentication'] = 'Käytä tunnistautumista';

$GLOBALS["lang"]['Use Authentication'] = 'Käytä tunnistautumista';

$GLOBALS["lang"]['use_authorisation'] = 'Käyttölupa';

$GLOBALS["lang"]['Use Authorisation'] = 'Käyttölupa';

$GLOBALS["lang"]['Use SNMP'] = 'Käytä SNMP:tä';

$GLOBALS["lang"]['Use SSH'] = 'Käytä SSH: ta';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Käyttää Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Käytä Palveluversion tunnistusta';

$GLOBALS["lang"]['Use WMI'] = 'Käytä WMI: tä';

$GLOBALS["lang"]['Use for Authentication'] = 'Tunnistaminen';

$GLOBALS["lang"]['Use for Roles'] = 'Käyttö Roolit';

$GLOBALS["lang"]['used'] = 'Käytetty';

$GLOBALS["lang"]['Used'] = 'Käytetty';

$GLOBALS["lang"]['used_count'] = 'Käytetty määrä';

$GLOBALS["lang"]['Used Count'] = 'Käytetty määrä';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Käytetään vain OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Käytetään sisäisesti yksittäisen laitteen löytämisessä.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Käytetään sisäisesti yksittäisen laitteen löytämisessä. Linkit <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Käytetään, kun LDAP-palvelimet on konfiguroitu käyttäjätietoihin - tämä sisältää Orgit, joihin heillä on pääsy. Jos käyttäjä on tässä LDAP-ryhmässä, heille annetaan tämä org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Käytetään, kun LDAP-palvelimet on konfiguroitu kansoittamaan käyttäjien tiedot - tämä sisältää Rooleja, jotka ne on osoitettu. Jos käyttäjä on tässä LDAP-ryhmässä, heille annetaan tämä rooli.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Käytetään OpenLDAP-haussa, jotta käyttäjä vastaa ryhmän jäseniä. Oletus <code>memberUid</code>. Käytetään vain OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Käytetään integraatioiden ja FirstWaven seurantasovellusten kanssa.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Käytetään integraatioiden ja FirstWaven seurantasovellusten kanssa. Aseta y:lle, jos SNMP havaitaan löydöksen perusteella.';

$GLOBALS["lang"]['user'] = 'Käyttäjä';

$GLOBALS["lang"]['User'] = 'Käyttäjä';

$GLOBALS["lang"]['User DN'] = 'Käyttäjän DN';

$GLOBALS["lang"]['user_group'] = 'Käyttäjäryhmä';

$GLOBALS["lang"]['User Group'] = 'Käyttäjäryhmä';

$GLOBALS["lang"]['user_id'] = 'Käyttäjätunnus';

$GLOBALS["lang"]['User ID'] = 'Käyttäjätunnus';

$GLOBALS["lang"]['user_interaction'] = 'Vuorovaikutus';

$GLOBALS["lang"]['User Interaction'] = 'Vuorovaikutus';

$GLOBALS["lang"]['User Membership Attribute'] = 'Käyttäjäjäsenyys Attribuutti';

$GLOBALS["lang"]['user_name'] = 'Käyttäjänimi';

$GLOBALS["lang"]['User Name'] = 'Käyttäjänimi';

$GLOBALS["lang"]['User Policies'] = 'Käyttäjäkäytännöt';

$GLOBALS["lang"]['Username'] = 'Käyttäjätunnus';

$GLOBALS["lang"]['username'] = 'Käyttäjätunnus';

$GLOBALS["lang"]['users'] = 'Käyttäjät';

$GLOBALS["lang"]['Users'] = 'Käyttäjät';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Käyttäjät, roolit ja orgit';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entran käyttö Authille';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA:n käyttö Authille';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Yleensä Mb/s, sijainnista A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Yleensä Mb/s, sijainnista B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Yleensä Mb/s, paikkaan A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Yleensä Mb/s, paikkaan B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistani';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN-tunniste';

$GLOBALS["lang"]['valid_from'] = 'Voimassa alkaen';

$GLOBALS["lang"]['Valid From'] = 'Voimassa alkaen';

$GLOBALS["lang"]['valid_from_raw'] = 'Valid from Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Valid from Raw';

$GLOBALS["lang"]['valid_to'] = 'Voimassa';

$GLOBALS["lang"]['Valid To'] = 'Voimassa';

$GLOBALS["lang"]['valid_to_raw'] = 'Valid to Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Valid to Raw';

$GLOBALS["lang"]['Valid Values'] = 'Voimassa olevat arvot';

$GLOBALS["lang"]['value'] = 'Arvo';

$GLOBALS["lang"]['Value'] = 'Arvo';

$GLOBALS["lang"]['values'] = 'Arvot';

$GLOBALS["lang"]['Values'] = 'Arvot';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Muuttuja';

$GLOBALS["lang"]['Variable'] = 'Muuttuja';

$GLOBALS["lang"]['vendor'] = 'Valmistaja';

$GLOBALS["lang"]['Vendor'] = 'Valmistaja';

$GLOBALS["lang"]['vendors'] = 'Valmistajat';

$GLOBALS["lang"]['Vendors'] = 'Valmistajat';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Versio';

$GLOBALS["lang"]['Version'] = 'Versio';

$GLOBALS["lang"]['version_padded'] = 'Lisätty versio';

$GLOBALS["lang"]['Version Padded'] = 'Lisätty versio';

$GLOBALS["lang"]['version_raw'] = 'Version Raw';

$GLOBALS["lang"]['Version Raw'] = 'Version Raw';

$GLOBALS["lang"]['version_string'] = 'Version merkkijono';

$GLOBALS["lang"]['Version String'] = 'Version merkkijono';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['View'] = 'Näytä';

$GLOBALS["lang"]['View All'] = 'Näytä kaikki';

$GLOBALS["lang"]['View Details'] = 'Näytä yksityiskohdat';

$GLOBALS["lang"]['View Device'] = 'Näytä laite';

$GLOBALS["lang"]['View Discovery'] = 'Näytä Discovery';

$GLOBALS["lang"]['View Policy'] = 'Näytä käytäntö';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuaalinen yksityinen verkko';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualisointi';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Käy meidän YouTube-kanavalla opetusvideoita.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm Laitteen tunniste';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm Laitteen tunniste';

$GLOBALS["lang"]['vm_group'] = 'Vm Group';

$GLOBALS["lang"]['Vm Group'] = 'Vm Group';

$GLOBALS["lang"]['vm_ident'] = 'Vm';

$GLOBALS["lang"]['Vm Ident'] = 'Vm';

$GLOBALS["lang"]['vm_server_name'] = 'Vm-palvelimen nimi';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm-palvelimen nimi';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Valmistaja';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Valmistaja';

$GLOBALS["lang"]['vuln_status'] = 'Vulnin tila';

$GLOBALS["lang"]['Vuln Status'] = 'Vulnin tila';

$GLOBALS["lang"]['vulnerabilities'] = 'Haavoittuvuus';

$GLOBALS["lang"]['Vulnerabilities'] = 'Haavoittuvuus';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Haavoittuvuusvälimuisti';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Haavoittuvuusvälimuisti';

$GLOBALS["lang"]['vulnerability_id'] = 'Haavoittuvuuden tunnus';

$GLOBALS["lang"]['Vulnerability ID'] = 'Haavoittuvuuden tunnus';

$GLOBALS["lang"]['WHERE'] = 'MISTÄ';

$GLOBALS["lang"]['wall_port'] = 'Seinäportti';

$GLOBALS["lang"]['Wall Port'] = 'Seinäportti';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis ja Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Haluatko tietää lisää?';

$GLOBALS["lang"]['Warning'] = 'Varoitus';

$GLOBALS["lang"]['warranty'] = 'Takuu';

$GLOBALS["lang"]['Warranty'] = 'Takuu';

$GLOBALS["lang"]['warranty_duration'] = 'Takuun kesto';

$GLOBALS["lang"]['Warranty Duration'] = 'Takuun kesto';

$GLOBALS["lang"]['warranty_expires'] = 'Takuu vanhenee';

$GLOBALS["lang"]['Warranty Expires'] = 'Takuu vanhenee';

$GLOBALS["lang"]['warranty_status'] = 'Takuu';

$GLOBALS["lang"]['Warranty Status'] = 'Takuu';

$GLOBALS["lang"]['warranty_type'] = 'Takuun tyyppi';

$GLOBALS["lang"]['Warranty Type'] = 'Takuun tyyppi';

$GLOBALS["lang"]['Web'] = 'Verkko';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Verkkosivusto';

$GLOBALS["lang"]['Wednesday'] = 'Keskiviikko';

$GLOBALS["lang"]['weight'] = 'Paino';

$GLOBALS["lang"]['Weight'] = 'Paino';

$GLOBALS["lang"]['weight_current'] = 'Painovirta';

$GLOBALS["lang"]['Weight Current'] = 'Painovirta';

$GLOBALS["lang"]['weight_empty'] = 'Paino tyhjä';

$GLOBALS["lang"]['Weight Empty'] = 'Paino tyhjä';

$GLOBALS["lang"]['weight_max'] = 'Paino Max';

$GLOBALS["lang"]['Weight Max'] = 'Paino Max';

$GLOBALS["lang"]['Welcome'] = 'Tervetulotoivotukset';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Tervetulotoivotukset';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Tervetuloa FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Länsi-Sahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Mitä voin odottaa, jos minulla ei ole valtakirjaa';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Mikä tämän telineen tarkoitus on?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Millainen tämä paikka on? Sallittavat tyypit <code>attributes</code> Pöytä.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Kun integroimme ulkoisen järjestelmän laitteita, jos laitetta ei ole olemassa Open-AudITissa, pitäisikö meidän luoda se?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Kun integroimme laitteita ulkoisesta järjestelmästä, jos laite on päivitetty ulkoisessa järjestelmässä pitäisikö meidän päivittää sitä Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Pitäisikö meidän tutkia ulkoinen laite?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Kun tämä vertailuarvo on tarkoitus toteuttaa. Johdettu liitännäisestä <code>tasks.type</code> sekä <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kun loki luotiin.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kun tämä jonoerä alkoi prosessoida.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kun toteutamme tämän perustason, pitäisikö meidän tarkistaa laitteita, jotka eivät kuulu tämän perustason politiikkaan?';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kun vastaanotamme avoimen sataman, pitäisikö meidän yrittää testata palvelun nykyistä versiota? Tämä auttaa vahvistamaan todelliset juoksevat palvelut.';

$GLOBALS["lang"]['where'] = 'jossa';

$GLOBALS["lang"]['Where'] = 'jossa';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Missä laitteen tiedot-näytössä haluat nähdä tämän kentän ilmestyvän.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Missä teline on rivissä.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Vaikuttaako haavoittuvuus omiin komponentteihinsa vaikutusten, saatavuuden ja luottamuksellisuuden avulla.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Tarvitaanko käyttäjien vuorovaikutusta (ei mitään, passiivinen, aktiivinen).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'OS, johon tätä vertailuarvoa sovelletaan.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Mitä laitteita Open-AudIT luo ulkoisesta järjestelmästä (jos sellainen on). Käyttämällä kaikkia, Ei yhtään tai tiettyä Attribuuttia.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Mikä alivalikko meidän pitäisi näyttää tämä kysely.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kuka tämän teki?';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Miksi vain Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Miksi suljemme tämän politiikan ulkopuolelle?';

$GLOBALS["lang"]['Wide Area Network'] = 'Laaja alueverkko';

$GLOBALS["lang"]['Widget'] = 'WidgetComment';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Widget- tyyppi';

$GLOBALS["lang"]['widgets'] = 'Widgetit';

$GLOBALS["lang"]['Widgets'] = 'Widgetit';

$GLOBALS["lang"]['width'] = 'Leveys';

$GLOBALS["lang"]['Width'] = 'Leveys';

$GLOBALS["lang"]['windows'] = 'Ikkunat';

$GLOBALS["lang"]['Windows'] = 'Ikkunat';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Langaton lähiverkko';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi- epäonnistumiset';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi- epäonnistumiset';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Aikakatkaisu';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Aikakatkaisu';

$GLOBALS["lang"]['workgroup'] = 'Työryhmä';

$GLOBALS["lang"]['Workgroup'] = 'Työryhmä';

$GLOBALS["lang"]['Working Credentials'] = 'Työvaltakirjat';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Keltainen kysely';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Kyllä';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Voit haluta kopioida ja liittää tämän URL-osoitteen sähköpostiin henkilöstöllesi.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Sinun on poistettava nykyinen lisenssisi ennen uuden lisenssin lisäämistä.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTuben tutoriaalit';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'AWS EC2-avain.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Google Compute -tunnuksesi JSONina.';

$GLOBALS["lang"]['Your Licenses'] = 'Lisenssit';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft Azure -asiakaskorttisi.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure -tilaustunnuksesi.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Sinun SQL valita ominaisuuksia, jotka populate tämän kyselyn.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Sinun SQL valita laitteita, jotka kansoittavat tämän ryhmän.';

$GLOBALS["lang"]['Your SSH key.'] = 'Avaimesi.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Sinun pääsytunnuksesi, kuten se pilvi natiivi API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Kuvaus yhteyden tilasta (varattu, eläkkeellä jne.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Kuvaus tästä esineestä.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Tämän ohjelmiston yleisnimi';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Tavallinen versio tästä ohjelmistosta';

$GLOBALS["lang"]['Zambia'] = 'Sambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'aktiivinen';

$GLOBALS["lang"]['active directory'] = 'aktiivinen kansio';

$GLOBALS["lang"]['active/active'] = 'aktiivinen/aktiivinen';

$GLOBALS["lang"]['active/passive'] = 'aktiivinen/passiivinen';

$GLOBALS["lang"]['advertisement'] = 'Mainos';

$GLOBALS["lang"]['alert'] = 'hälytys';

$GLOBALS["lang"]['all'] = 'kaikki';

$GLOBALS["lang"]['allocated'] = 'jaettu';

$GLOBALS["lang"]['amazon'] = 'amatsoni';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'sovellus';

$GLOBALS["lang"]['approved'] = 'hyväksytty';

$GLOBALS["lang"]['attribute'] = 'Ominaisuus';

$GLOBALS["lang"]['auto'] = 'Automaattinen';

$GLOBALS["lang"]['backup'] = 'varmuuskopio';

$GLOBALS["lang"]['banned'] = 'kielletty';

$GLOBALS["lang"]['blog'] = 'blogi';

$GLOBALS["lang"]['bottom'] = 'pohja';

$GLOBALS["lang"]['browser_lang'] = 'selain_lang';

$GLOBALS["lang"]['building'] = 'rakennus';

$GLOBALS["lang"]['cloud'] = 'pilvi';

$GLOBALS["lang"]['code'] = 'Koodi';

$GLOBALS["lang"]['collector'] = 'keräilijä';

$GLOBALS["lang"]['compute'] = 'Laske';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['contains'] = 'sisältää';

$GLOBALS["lang"]['create'] = 'luo';

$GLOBALS["lang"]['created'] = 'luotu';

$GLOBALS["lang"]['critical'] = 'kriittinen';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'tietokanta';

$GLOBALS["lang"]['debug'] = 'vianetsintä';

$GLOBALS["lang"]['delegated'] = 'delegoitu';

$GLOBALS["lang"]['delete'] = 'Poista';

$GLOBALS["lang"]['deleted'] = 'poistettu';

$GLOBALS["lang"]['denied'] = 'hylätty';

$GLOBALS["lang"]['devices'] = 'laitteet';

$GLOBALS["lang"]['digitalocean'] = 'digitoseeni';

$GLOBALS["lang"]['does not equal'] = 'ei ole yhtä suuri';

$GLOBALS["lang"]['emergency'] = 'hätätilanne';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'yhtä suuri kuin';

$GLOBALS["lang"]['error'] = 'virhe';

$GLOBALS["lang"]['established'] = 'vahvistettu';

$GLOBALS["lang"]['excluded'] = 'lukuun ottamatta';

$GLOBALS["lang"]['expired'] = 'voimassaolo päättyi';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'äärimmäinen - Ilman sitä organisaatio epäonnistuisi.

erittäin korkea - tehtävät, jotka ovat välttämättömiä järjestöjen selviytymisen ja on palautettava välittömästi.

korkea - Tärkeät toiminnot, jotka pitäisi palauttaa nopeasti, mutta voi olla hieman pidempi toipumisaika.

medium - Toiminnot, jotka ovat tarpeen, mutta voi sietää pidempi seisokki.

alhainen - Ei-olennaisia toimintoja, jotka voidaan lykätä ilman merkittävää vaikutusta.

Unsigned - Oletus kunnes asetettu.';

$GLOBALS["lang"]['fail'] = 'epäonnistui';

$GLOBALS["lang"]['false'] = 'väärä';

$GLOBALS["lang"]['file'] = 'tiedosto';

$GLOBALS["lang"]['firewall'] = 'palomuuri';

$GLOBALS["lang"]['fixed'] = 'kiinteä';

$GLOBALS["lang"]['floor'] = 'lattia';

$GLOBALS["lang"]['front'] = 'etu';

$GLOBALS["lang"]['front-left'] = 'etuvasen';

$GLOBALS["lang"]['front-right'] = 'etuoikea';

$GLOBALS["lang"]['github'] = 'githubi';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'suurempi tai yhtä suuri';

$GLOBALS["lang"]['greater than'] = 'suurempi kuin';

$GLOBALS["lang"]['group'] = 'ryhmä';

$GLOBALS["lang"]['head'] = 'pää';

$GLOBALS["lang"]['here'] = 'Tässä.';

$GLOBALS["lang"]['high availability'] = 'korkea saatavuus';

$GLOBALS["lang"]['howto'] = 'Miten';

$GLOBALS["lang"]['ignored'] = 'jätetty huomiotta';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['inactive'] = 'ei aktiivinen';

$GLOBALS["lang"]['incomplete'] = 'epätäydellistä';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, teksti, bool (y/n), jne.';

$GLOBALS["lang"]['is licensed to'] = 'on lisensoitu';

$GLOBALS["lang"]['left'] = 'vasemmalle';

$GLOBALS["lang"]['less or equals'] = 'pienempi tai yhtä suuri';

$GLOBALS["lang"]['less than'] = 'alle';

$GLOBALS["lang"]['license'] = 'lisenssi';

$GLOBALS["lang"]['like'] = 'Kuten';

$GLOBALS["lang"]['line'] = 'rivi';

$GLOBALS["lang"]['load balancing'] = 'kuorman tasapainotus';

$GLOBALS["lang"]['location'] = 'sijainti';

$GLOBALS["lang"]['managed'] = 'hoidettu';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'kiinnityspiste';

$GLOBALS["lang"]['network'] = 'verkko';

$GLOBALS["lang"]['news'] = 'uutiset';

$GLOBALS["lang"]['no'] = 'ei';

$GLOBALS["lang"]['node'] = 'solmu';

$GLOBALS["lang"]['none'] = 'ei yhtään';

$GLOBALS["lang"]['normal'] = 'normaali';

$GLOBALS["lang"]['not applicable'] = 'ei oleellinen';

$GLOBALS["lang"]['not in'] = 'ei';

$GLOBALS["lang"]['not like'] = 'ei kuten';

$GLOBALS["lang"]['notice'] = 'ilmoitus';

$GLOBALS["lang"]['notification'] = 'ilmoitus';

$GLOBALS["lang"]['okta'] = 'OKTA';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimoitu';

$GLOBALS["lang"]['optionally '] = 'valinnaisesti ';

$GLOBALS["lang"]['other'] = 'muu';

$GLOBALS["lang"]['package'] = 'Pakkaus';

$GLOBALS["lang"]['partition'] = 'osio';

$GLOBALS["lang"]['pass'] = 'ohita';

$GLOBALS["lang"]['pending'] = 'vireillä';

$GLOBALS["lang"]['performance'] = 'suorituskyky';

$GLOBALS["lang"]['performed'] = 'suoritettu';

$GLOBALS["lang"]['pie'] = 'piirakka';

$GLOBALS["lang"]['planning'] = 'suunnittelu';

$GLOBALS["lang"]['predictable'] = 'ennustettavissa';

$GLOBALS["lang"]['query'] = 'kysely';

$GLOBALS["lang"]['rear'] = 'taka';

$GLOBALS["lang"]['rear-left'] = 'takavasemmalla';

$GLOBALS["lang"]['rear-right'] = 'takaoikea';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'Julkaisu';

$GLOBALS["lang"]['reserved'] = 'varattu';

$GLOBALS["lang"]['right'] = 'oikea';

$GLOBALS["lang"]['room'] = 'huone';

$GLOBALS["lang"]['row'] = 'rivi';

$GLOBALS["lang"]['stand-alone'] = 'erillinen';

$GLOBALS["lang"]['standard'] = 'standardi';

$GLOBALS["lang"]['starts with'] = 'alkaa';

$GLOBALS["lang"]['storage'] = 'varastointi';

$GLOBALS["lang"]['timestamp'] = 'aikaleima';

$GLOBALS["lang"]['top'] = 'ylin';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'huippusalainen - sotilas- / hallitusluokitus. Tietojen julkistaminen aiheuttaisi poikkeuksellisen vakavan vaaran kansalliselle turvallisuudelle.

salainen - sotilas- / hallitusluokitus. Tietojen julkistaminen aiheuttaisi vakavaa vahinkoa kansalliselle turvallisuudelle.

luottamukselliset - sotilas- / hallinto- ja yksityissektorin luokitus. Luottamuksellisia tietoja ovat liikesalaisuudet, älylliset tiedot, sovelluksen ohjelmointikoodi ja muut tiedot, jotka voivat vakavasti vaikuttaa organisaatioon, jos luvaton paljastaminen tapahtuu. Tämän tason tiedot olisivat käytettävissä ainoastaan sen organisaation henkilöstölle, jonka työ tarvitsee tai liittyy suoraan käytettävissä olevaan tietoon. Salassapidettäviin tietoihin pääsy edellyttää yleensä jokaisen käyttöoikeuden myöntämistä.

yksityinen - yksityinen sektori luokitus. Yksityisiin tietoihin sisältyvät kaikki henkilöstötietoihin liittyvät tiedot, mukaan lukien henkilöstötiedot, potilastiedot ja palkkatiedot, joita käytetään vain organisaatiossa.

herkkä - sotilas-/hallinto- ja yksityinen sektoriluokitus. Data, joka on herkkä sisältää organisaation taloudellisia tietoja ja vaatii ylimääräisiä toimenpiteitä sen CIA ja tarkkuus. Tietojen julkistaminen voi vahingoittaa kansallista turvallisuutta.

julkinen - Yksityinen sektori luokitus. Julkinen tieto on tietoa, joka jaetaan yleensä yleisölle eikä aiheuta kielteisiä vaikutuksia organisaatioon. Esimerkkejä julkisesta tiedosta ovat se, kuinka moni työskentelee organisaatiossa ja mitä tuotteita organisaatio valmistaa tai myy.

Luokittelematon - Sotilas- / valtioluokitus. Kaikki tiedot, jotka voidaan yleensä jakaa yleisölle vaarantamatta kansallista etua.

Unsigned - Oletus kunnes asetettu.';

$GLOBALS["lang"]['traffic'] = 'liikenne';

$GLOBALS["lang"]['true'] = 'tosi';

$GLOBALS["lang"]['unallocated'] = 'kohdentamaton';

$GLOBALS["lang"]['unauthorised'] = 'luvaton';

$GLOBALS["lang"]['unknown'] = 'tuntematon';

$GLOBALS["lang"]['unmanaged'] = 'hoitamaton';

$GLOBALS["lang"]['unused'] = 'käyttämättä';

$GLOBALS["lang"]['update'] = 'päivitys';

$GLOBALS["lang"]['valid'] = 'voimassa';

$GLOBALS["lang"]['virtualisation'] = 'Virtualisointi';

$GLOBALS["lang"]['warning'] = 'varoitus';

$GLOBALS["lang"]['web'] = 'verkko';

$GLOBALS["lang"]['yes'] = 'kyllä';

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

