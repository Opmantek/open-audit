<?php
$GLOBALS["lang"][' Default, currently '] = ' Oletus ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Jos jokin ei toimi odotetusti, tarkista ensin lokit.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' on nyt tuettu kielitiedosto. Voit vaihtaa käyttäjää käyttää tätä kieltä, klikkaa ';

$GLOBALS["lang"][' seconds'] = ' sekuntia';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', mutta ei tarvitse muistaa erillinen joukko kirjautumistiedot.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', josta toimitamme yli 30 oletuksena asettaa. Ammattikäyttäjät eivät voi muuttaa näitä, mutta Enterprise käyttäjä on täydellinen räätälöinnin kykyjä - myös luoda oman.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', sinä <i>on</i> Käytä Open-AudIT-palvelimella olevaa httpssiä Entran käyttöön Authille. Määrittele käytettävä apache <strong>Luokka</strong> ennen Entran konfigurointia authille.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Tämän mahdollistamiseksi voit muokata asetustiedostoa ';

$GLOBALS["lang"]['10 Minutes'] = '10 minuuttia';

$GLOBALS["lang"]['15 Minutes'] = '15 minuuttia';

$GLOBALS["lang"]['30 Minutes'] = '30 minuuttia';

$GLOBALS["lang"]['5 Minutes'] = '5 minuuttia';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 valvontaa ryhmitelty organisaatioon, ihmisiin, fyysisiin ja teknisiin luokkiin';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>Huomautus</strong> - Käytät tätä verkko- osoitetta paikalliselta Open-AudIT-palvelimelta. Ladattu skripti ei voi lähettää kun ajaa millään muulla koneella. Jos haluat tarkastaa muita koneita, lataa skripti mistä tahansa etäkoneesta, älä käytä selainta Open-AudIT-palvelimella.';

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

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Windows-työpöytäjärjestelmillä on verkkorajoituksia, jotka voivat vaikuttaa Open-AudITin suorituskykyyn. TCP / IP pino rajoittaa samanaikaisesti keskeneräisiä TCP-yhteysyrityksiä. Kun raja on saavutettu, seuraavat yhteyden yritykset laitetaan jonoon ja ratkaistaan kiinteään hintaan (10 per sekunti). Jos liian monta syöttää jono, ne voidaan pudota. Ja lopuksi, käyttöjärjestelmä käynnistää Apassin uudelleen. Tästä syystä Open-AudIT:n asentamista Windows-työpöydän käyttöjärjestelmään ei tueta.<br/><br/>Open-AudIT-koodissa ei ole mitään vikaa, emmekä voi tehdä mitään tämän ongelman ratkaisemiseksi Windowsin asiakaskoneissa.</p>';

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

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>Huomautus</strong> - Käytät tätä verkko- osoitetta paikalliselta Open-AudIT-palvelimelta. Ladattu skripti ei voi lähettää kun ajaa millään muulla koneella. Jos haluat tarkastaa muita koneita, lataa skripti mistä tahansa etäkoneesta, älä käytä selainta Open-AudIT-palvelimella.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'CVE-kohde, joka ei sisällä suodatinta, jolla määritettäisiin kohde [s].';

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

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'LAN voidaan liittää WAN käyttäen reititin.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Metropolitan-alueverkko (MAN) on suuri tietokoneverkko, joka yleensä kattaa kaupungin tai suuren kampuksen.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Seed löytö käyttää alkuperäistä IP noutaa IP muiden laitteiden se tietää, lisää nämä IP:t luetteloon ja skannaa ne - jälleen pyytää mitään IP noiden lisälaitteiden tietää. Huuhtele ja toista. On riittävän fiksua tietää, onko se jo skannannut tietyn IP:n sen toteutuksessa ja poisheitossa jo skannattuja (tai jopa skannattavia).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Aliverkon löytö skannaa IP:t.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Agentille annettu URL, joka lataa tiedoston ja tallentaa sen paikalliselle levylle.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL ladattavaan tiedostoon.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Selkärankaverkko on osa tietoverkkoinfrastruktuuria, joka tarjoaa tien tietojen vaihdolle eri lähiverkkojen tai osaverkkojen välillä. Selkäranka voi yhdistää erilaisia verkostoja samassa rakennuksessa, eri rakennuksissa tai laajalla alueella.<br/><br/>Esimerkiksi suuri yritys voisi toteuttaa runkoverkon yhdistääkseen eri puolilla maailmaa sijaitsevat osastot. Laite, joka yhdistää osastoverkot, muodostaa verkon selkärangan. Verkkorunkoa suunniteltaessa verkon suorituskyky ja verkon ruuhkautuminen ovat ratkaisevia tekijöitä, jotka on otettava huomioon. Yleensä runkoverkon kapasiteetti on suurempi kuin siihen liitettyjen yksittäisten verkkojen.<br/><br/>Toinen esimerkki runkoverkosta on Internet-runkoverkko, joka on laaja-alaisten alueverkkojen (WAN) ja ydinreitittimien sarja, joka yhdistää kaikki Internetiin liitetyt verkot.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Laskettu kenttä, joka näyttää, kuinka monta kertaa tämä ohjelmisto löytyi tietokoneista valitussa Org (ja sen jälkeläiset, jos konfiguroitu).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Kampuksen alueverkko (CAN) koostuu lähiverkkojen yhteenliittämisestä rajatulla maantieteellisellä alueella. Verkkolaitteet (kytkimet, reitittimet) ja lähetysvälineet (optinen kuitu, kuparilaitos, Cat5 kaapelointi jne.) ovat lähes kokonaan kampuksen vuokralaisen / omistajan (yritys, yliopisto, hallitus jne.) omistuksessa.<br/><br/>Esimerkiksi yliopiston kampusverkosto yhdistää todennäköisesti erilaisia kampusrakennuksia yliopistojen tai laitosten, kirjaston ja opiskelija-asuntoloiden yhdistämiseksi.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Suljettu portti on käytettävissä (se vastaanottaa ja vastaa Nmap luotain paketteja), mutta sovellus ei kuuntele sitä. Ne voivat auttaa osoittamaan, että isäntä on ylös IP-osoite (host löytö, tai ping skannaus), ja osana käyttöjärjestelmän havaitsemista. Koska suljetut satamat ovat saavutettavissa, ne kannattaa tutkia myöhemmin, jos jotkut avautuvat. Hallintoviranomaiset saattavat harkita tällaisten satamien sulkemista palomuurilla. Sitten ne ilmestyisivät suodatetussa tilassa, josta keskusteltiin seuraavaksi.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Keräilijä on joko Collector tai Stand-Alone tilassa.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Pilkku eroteltu luettelo sovellettavista CVE.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Pilkkuerotettu arvoluettelo, josta yksi voidaan valita.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Käsky suorittaa. Kun agentti on Windows-pohjainen, tämä komento johdetaan Powershell-agentin sisältä.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Kojelauta koostuu kolmesta sarakkeesta ja kahdesta rivistä mitä kutsumme <i>elementit</i>. Widget on hyvin samanlainen yhteenveto, vain otamme yhteenveto käsite hieman pidemmälle. Widgetit luodaan yksinkertaisella tavalla käyttäen paria pudotuslaatikoita - tai voit valita käyttää omaa SQL täydellinen muokkaus.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Suodatettu portti katsotaan avoimeksi (ja se laukaisee laitteen havaitsemisen).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Maailmanlaajuinen alueverkko (GAN) on verkko, jota käytetään tukemaan mobiilia mielivaltaisella määrällä langattomia lähiverkkoja, satelliittivälitysalueita jne. Matkaviestinnän keskeinen haaste on käyttäjäviestinnän siirtäminen paikalliselta kattavuusalueelta toiselle. IEEE Projekti 802 sisältää useita maanpäällisiä langattomia lähiverkkoja.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Kotialueverkko (HAN) on asuinalueen lähiverkko, jota käytetään kodissa tyypillisesti käytettävien digitaalisten laitteiden väliseen viestintään, yleensä pieni määrä henkilökohtaisia tietokoneita ja lisävarusteita, kuten tulostimia ja mobiilitietokoneita. Tärkeä tehtävä on Internet-yhteyksien jakaminen, usein laajakaistapalvelujen tarjoaminen kaapelitelevision tai digitaalisen liittymän (DSL) välityksellä.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Luettelo mukautettuja TCP-portteja skannattavaksi (22 on SSH, 135 on WMI, 62078 on iPhone synkronoitu).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Luettelo mukautettuja UDP-portteja skannattavaksi (161 on SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Paikallisverkko (LAN) on verkko, joka yhdistää tietokoneita ja laitteita rajatulla maantieteellisellä alueella, kuten kodissa, koulussa, toimistorakennuksessa tai tiiviisti sijoitettujen rakennusten ryhmässä. Jokainen verkon tietokone tai laite on solmu. Langalliset lähiverkot perustuvat todennäköisesti Ethernet-teknologiaan. Uudemmat standardit, kuten ITU-T G.hn, tarjoavat myös tavan luoda langallinen LAN käyttämällä olemassa olevia kaapeleita, kuten koaksiaalikaapeleita, puhelinlinjoja ja voimalinjoja.<br/><br/>Laajakaistaverkon (WAN) sijaan LAN:n määritelmiin kuuluvat tietojensiirtojen korkeampi määrä, rajallinen maantieteellinen alue sekä se, ettei kiinteiden yhteyksien tarjoaminen ole riippuvainen kiinteiden yhteyksien käytöstä. Nykyiset Ethernet- tai muut IEEE 802.3LAN-teknologiat toimivat enintään 100 Gbit/s tiedonsiirtonopeuksilla, jotka IEEE standardisoi vuonna 2010. Tällä hetkellä 400 Gbit/s Ethernetiä kehitetään.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Sijainti on fyysinen osoite, johon voi liittyä laitteita. Voit määrittää koordinaatit ja jos on olemassa laitteita, sijainti näkyy kartalla, kun sinulla on Open-AudIT Enterprise -lisenssi.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Sijaintinimi auttaa sinua löytämään nämä laitteet tulevaisuudessa.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Pienempi määrä tarkoittaa, että sitä sovelletaan ennen muita sääntöjä.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Pienempi määrä tarkoittaa, että sitä sovelletaan ennen muita sääntöjä. Oletuspaino on 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Uusi käyttäjä kirjautui sisään Open-AudITiin ja LDAP-sever vahvisti ja hyväksyi sen. Käyttäjä luotiin Open-AudITissa ja kirjautui sisään. Menestys.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Paketti on pala asennettu softare. Paketissa on tyyppi - virustorjunta, hyväksytty, varmuuskopio, kielletty, pilvi, palomuuri, sivuutettu, lisenssi tai muu.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Salasana (tallennettu nimellä hash), joka mahdollistaa kirjautumisen, kun käytetään sovelluksen todentamista.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Henkilöllä on tili Open-AudIT-sovelluksessa. Heidän käyttäjätunnuksellaan on luettelo niihin liittyvistä Rooleista ja organisaatioista. Käyttäjän roolit määräävät, mitä hän voi tehdä. Organisaatiot käyttäjä on määrittää, mitä kohteita he voivat toimia.<br/><br/>Kun käyttäjä pyytää suorittaa toiminnon (luo, lukea, päivittää, poistaa) keräilykohteen, rooleja kysytään, jos he saavat suorittaa kyseisen toimen, sitten orgit kuullaan selvittää, onko keräilykohde kuuluu org käyttäjällä on lupa toimia.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Henkilökohtainen alueverkko (PAN) on tietokoneverkko, jota käytetään viestintään tietokoneiden ja eri tietoteknisten laitteiden välillä lähellä yhtä henkilöä. Joitakin esimerkkejä laitteista, joita käytetään PAN ovat henkilökohtaiset tietokoneet, tulostimet, faksit, puhelimet, PDA, skannerit, ja jopa videopelikonsolit. PAN voi sisältää langallisia ja langattomia laitteita. PAN:n ulottuma ulottuu yleensä 10 metriin. Langallinen PAN on yleensä rakennettu USB- ja FireWire-yhteyksillä, kun taas Bluetooth- ja infrapunaviestinnän kaltaiset teknologiat muodostavat tyypillisesti langattoman PAN-verkon.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Kysely on pohjimmiltaan SQL-lausunto. Tämä lausunto on ristiriidassa tietokannan kanssa automaattinen lisäys raja, suodatetaan koskemaan vain niitä pyydetty kohteita ja vain ne kohdat käyttäjällä on lupa tarkastella. Kysely voidaan luoda valikolla -> Hallitse -> Kyselyt -> Luo kyselyt. Kyselyt sisältävät org_id:n ja ovat siten rajattuja asianmukaisiin käyttäjiin. Käyttäjällä on oltava org_admin- tai reportterin rooli [s] luoda, päivittää tai poistaa kyselyn. Kaikki käyttäjät voivat suorittaa kyselyn. Kyselyssä on nimiattribuutti, jota käytetään valikossa sekä valikon kategoriaatteena. Tämä kertoo Open-Audit-käyttöliittymän, missä alivalikko asettaa kyselyn. On myös valikon näyttö, joka pitäisi asettaa <i>y</i> mahdollistaa kyselyn käyttöliittymässä (<i>n</i> estää kyselyn ilmestyminen ollenkaan). Kysely olisi edelleen käynnissä, jos kutsutaan käyttämällä sen <code>id</code>, riippumatta valikosta näyttää arvon.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Teline on kokoelma laitteita, joille on annettu asema ja korkeus teline. Laitteessa voi olla siihen liittyvä kuva. Teline asetetaan peräkkäin. Olemme luoneet hyvin rakeisen järjestelmän telineiden sijoitteluun. Ylimmällä tasolla (kuten aina) on organisaatio (Org). Orga voi olla useita paikkoja (kuten on aina ollut). Racks-ominaisuuden lisäämisen myötä sijainti voi nyt sisältää yhden tai useamman rakennuksen. Rakennuksessa voi olla yksi tai useampi kerros. Lattia voi sisältää yhden tai useampia huoneita. Huoneessa voi olla yksi tai useampi rivi. Tämä kuulostaa paljon työtä, mutta oletukset on luotu sinulle. Luo uusi sijainti ja alakomponentit luodaan automaattisesti sinulle. Jos tarvitset lisää kohteita (rakennukset, huoneet jne.), voit lisätä ne haluamallasi tavalla. Teline voi myös olla osa <i>kapseli</i> -Kyllä. Kapselin ominaisuus toimii tunnisteena eikä tiukkana hierarkkisena perintömallina rakennuksia, kerroksia jne.<br/><br/>Racks ovat ominaisuus saatavilla Open-AudIT Enterprise lisensoitu asiakkaille.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Reititysalue tai osoitetila, jossa IP-osoitteet ja MAC-osoitteet ovat ainutlaatuisia.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Linuxin näytekron-tiedosto on alla. Tämä tulee sijoittaa';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Turvavyöhyke on verkkoalueen hallinnollinen tai poliittinen verkkoalue.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Siemenlöytö on toisenlainen löytö, jossa annat IP yhden <i>siemenet</i> laite. Laite tarkastetaan, ja kaikki sen tuntemat teollis- ja tekijänoikeudet lisätään tarkastettujen IP:ien luetteloon. Sen jälkeen nämä laitteet tarkastetaan, ja kaikki heidän tuntemansa IP-tiedot lisätään myös tarkastuslaitosten luetteloon. Tämä prosessi jatkuu käyttäjän määrittelemien parametrien sisällä.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Lyhyt kuvaus lokikirjasta.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Varastoalueverkko (SAN) on erityinen verkko, joka mahdollistaa pääsyn konsolidoituun lohkotason tietojen tallennusjärjestelmään. SAN-laitteita käytetään ensisijaisesti niin, että tallennuslaitteet, kuten levyrakenteet, teippikirjastot ja optiset jukeboxit, ovat palvelimien ulottuvilla niin, että laitteet näkyvät kuin paikallisesti kiinnitetyt laitteet käyttöjärjestelmään. SAN:llä on tyypillisesti oma tallennuslaitteiden verkko, johon muut laitteet eivät yleensä pääse paikallisverkon kautta. SAN:ien kustannukset ja monimutkaisuus laskivat 2000-luvun alussa tasolle, joka mahdollisti sekä yritysten että pienten ja keskisuurten yritysten laajemman käyttöönoton.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Naru, joka sopii <code>software.name</code> ominaisuus. Voit käyttää vakio SQL wildcard prosenttia (%) yhden tai useamman merkin.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Arkaluonteisten tietojen hallintajärjestelmä';

$GLOBALS["lang"]['A timestamp.'] = 'Aikaleima.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Käyttäjällä on ensisijainen Org sekä luettelo Orgs he voivat käyttää. Käyttäjä yhdistää tämän ja listan annetuista rooleista, jotka määrittelevät, mitä toimia he voivat toteuttaa Orgeille osoitetuilla asioilla. Käyttäjien yhdistelmä <i>orgs</i> sekä <i>roolit</i> määritellä, mitä ne voivat ja eivät voi tehdä Open-AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Käyttäjällä on luettelo järjestöistä (orgs). Jokainen org käyttäjä on antaa heille mahdollisuuden toimia kohteita, jotka ovat kyseisen org kuten niiden rooleja.<br/><br/>Kaikki orgit paitsi oletusorg on vanhempi. Ajattele Org Chartia. Jos käyttäjällä on lupa orgiin, hänellä on myös lupa jälkeläisiin.<br/><br/>Käyttäjät saavat myös lapsen orgilla luvan nähdä kohteita vanhemmista orgeista tiettyihin kokoelmiin. Nämä ovat: kojelauta, löytö_scan_valinnat, kentät, tiedostot, ryhmät, kyselyt, raportit, roolit, säännöt, skriptit, yhteenvedot, widgetit.<br/><br/>Älä unohda sinulla on rakeinen valvonta mitä käyttäjät voivat nähdä ja tehdä Roles Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Käyttäjällä on luettelo järjestöistä (orgs). Jokainen org käyttäjä on antaa heille mahdollisuuden toimia kohteita, jotka ovat kyseisen org kuten niiden rooleja.<br/><br/>Kaikki orgit paitsi oletusorg on vanhempi. Ajattele Org Chartia. Jos käyttäjällä on lupa orgiin, hänellä on myös lupa jälkeläisiin.<br/><br/>Olemme myös sallineet käyttäjän luvalla lapsi org nähdä kohteita vanhempien orgs tiettyjen kokoelmien. Nämä ovat: kojelauta, löytö_scan_valinnat, kentät, tiedostot, ryhmät, kyselyt, roolit, säännöt, skriptit, yhteenvedot, widgetit.<br/><br/>Älä unohda, että sinulla on rakeinen valvonta mitä käyttäjät voivat nähdä ja tehdä käyttämällä';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Virtuaalinen yksityinen verkko (VPN) on overlay-verkko, jossa jotkin solmujen väliset yhteydet kulkevat avointen yhteyksien tai virtuaalipiirien kautta joissakin suuremmissa verkoissa (esim. Internetissä) fyysisten johtojen sijaan. Virtuaaliverkon datalinkkikerrosprotokollia kutsutaan silloin tunneliksi suuremman verkon läpi. Yksi yhteinen sovellus on turvallinen viestintä julkisen internetin kautta, mutta VPN:llä ei tarvitse olla selkeitä turvaominaisuuksia, kuten todentamista tai sisällön salausta. Esimerkiksi VPN:iä voidaan käyttää eri käyttäjäyhteisöjen liikenteen erottamiseen taustalla olevasta verkosta, jossa on vahvat turvaominaisuudet.<br/><br/>VPN:llä voi olla paras suorituskyky, tai sillä voi olla määritelty palvelutasosopimus VPN:n asiakkaan ja VPN:n palveluntarjoajan välillä. Yleensä VPN on topologia monimutkaisempi kuin piste-to-point.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Haavoittuvuus, joka vaikuttaa saatavuuteen, voi antaa hyökkääjille mahdollisuuden häiritä palveluja, kaatumisjärjestelmiä tai aiheuttaa palvelun epäämisen (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Luottamuksellisuuteen vaikuttava haavoittuvuus voi antaa hyökkääjille mahdollisuuden lukea arkaluonteisia tietoja, kuten henkilökohtaisia tietoja, valtakirjoja tai yrityskohtaisia tietoja (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Eheyteen vaikuttava haavoittuvuus voi antaa hyökkääjille mahdollisuuden muuttaa tietoja, syöttää pahansuopaa koodia tai muuttaa järjestelmän konfiguraatioita (None, Low, High).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Haavoittuvuutta voidaan muokata ja antaa tarkempia pakettien nimiä, jos rikastustiedot ovat riittämättömät tai jos tuotettu SQL ei ole aivan oikein.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Open-AudIT:n haavoittuvuuskohdetta voidaan pitää lähinnä tietokantaasi koskevana kyselynä, jossa määritetään mahdollinen altistuminen tietylle CVE-raportille. Haavoittuvuus muodostuu CVE:n raportista sekä FirstWaven rikastustiedoista. Nämä kaksi kohdetta yhdistetään tuottamaan sopiva kysely, joka ladataan automaattisesti FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Laaja alueverkko (WAN) on tietokoneverkko, joka kattaa suuren maantieteellisen alueen, kuten kaupungin, maan tai ulottuu jopa mannertenvälisille etäisyyksille. WAN käyttää viestintäkanavaa, joka yhdistää monenlaisia tiedotusvälineitä, kuten puhelinlinjoja, kaapeleita ja ilmaaaltoja. WAN käyttää usein yhteisten liikenteenharjoittajien, kuten puhelinyhtiöiden, tarjoamia siirtopalveluja. WAN-teknologiat toimivat yleensä OSI-vertailumallin kolmessa alemmassa kerroksessa: fyysisessä kerroksessa, datalinkkikerroksessa ja verkkokerroksessa.';

$GLOBALS["lang"]['AD Group'] = 'AD-ryhmä';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN jne.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Kaikki IP:t';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API-dokumentaatio';

$GLOBALS["lang"]['API Key required.'] = 'API avain vaaditaan.';

$GLOBALS["lang"]['API Result'] = 'API-tulos';

$GLOBALS["lang"]['About'] = 'Tietoja';

$GLOBALS["lang"]['Above are the only required items.'] = 'Yllä ovat ainoat vaaditut kohteet.';

$GLOBALS["lang"]['Accept'] = 'Hyväksy';

$GLOBALS["lang"]['Access Model'] = 'Pääsymalli';

$GLOBALS["lang"]['access_point'] = 'Pääsypiste';

$GLOBALS["lang"]['Access Point'] = 'Pääsypiste';

$GLOBALS["lang"]['access_token'] = 'Käytä Tokenia';

$GLOBALS["lang"]['Access Token'] = 'Käytä Tokenia';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Pääsy admin$-osakkeeseen ja RPC käyttää SMB2-protokollaa.';

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

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Aktiivinen kansio ja OpenLDAP';

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

$GLOBALS["lang"]['Add Your Credentials'] = 'Lisää valtakirjasi';

$GLOBALS["lang"]['Add image'] = 'Lisää kuva';

$GLOBALS["lang"]['additional_items'] = 'Lisäerät';

$GLOBALS["lang"]['Additional Items'] = 'Lisäerät';

$GLOBALS["lang"]['address'] = 'Osoite';

$GLOBALS["lang"]['Address'] = 'Osoite';

$GLOBALS["lang"]['Address any nonconformities'] = 'Mahdolliset vaatimustenvastaisuudet';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Puututaan tarkastuksen tuloksiin ja korjaaviin toimiin';

$GLOBALS["lang"]['Admin'] = 'Hallinto';

$GLOBALS["lang"]['admin_status'] = 'Hallitse tilaa';

$GLOBALS["lang"]['Admin Status'] = 'Hallitse tilaa';

$GLOBALS["lang"]['advanced'] = 'Lisäasetukset';

$GLOBALS["lang"]['Advanced'] = 'Lisäasetukset';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Kun integraatio on luotu, kun näet integraation yksityiskohdat huomaat kentän nimeltä Debug. Tämä on oletusarvoisesti nolla. Sen muuttaminen kyllä:ksi tarjoaa ylimääräistä kirjautumista, kun integraatio toteutetaan. Vianetsintää ei saa jättää "kyllä." Tämä johtuu siitä, että vianetsintäulostulo sisältää kaiken ulkoisista järjestelmistä löytyneen - mukaan lukien WMI- ja SNMP-tiedot. Vianetsintävaihtoehtoa tulisi käyttää vain silloin, kun jokin ongelma on tapahtunut ja haluat kaivaa syvemmälle selvittääksesi, miksi.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Kun olet täyttänyt edellä, poista agentti.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agentti? Löytö? Valtakirjat?';

$GLOBALS["lang"]['agents'] = 'Asiamiehet';

$GLOBALS["lang"]['Agents'] = 'Asiamiehet';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Agentit voidaan luoda, jotka määrittelevät kesto, verkko ja käyttöjärjestelmä. Jos kaikki testit täsmäävät, palvelin sitten pyytää agentti suorittaa toimia. Jos testiä ei ole asetettu, se jätetään pois <i>kaikkien täytyy täsmätä</i> vaatimus.<br/><br/>Voit luoda useita agentteja ja palvelimen tarkistaa yhden tai kaikki agentin merkinnät. Voit esimerkiksi määritellä yhden agentin, joka sanoo: <i>Jos välittäjä IP on tässä aliverkossa, aseta laitteen sijainti_tunniste</i>.<br/><br/>Toinen esimerkki voisi olla, ettei auditoida lainkaan, vaan lataa skripti ja suorita se. Jos agentti on asennettu admin oikeudet, voit nyt hallita koneita avaamatta <strong>mikä tahansa</strong> satamat siitä maailmaan.<p>Kehittyneiden agenttien mahdollistaminen tarkoittaa, että agenttia voidaan neuvoa lataamaan tiedostoja ja suorittamaan komento. <strong>VAROITUS</strong>: Tähän liittyy turvallisuusriskejä. Tämä asetus <strong>Ainoastaan</strong> toiminnon suoritettaessa Open-AudIT-järjestelmää HTTPS:llä ja voimassa olevalla (sertifikaattiviranomaisen antama) varmenteella </p>';

$GLOBALS["lang"]['Aggressive'] = 'Aggressiivinen';

$GLOBALS["lang"]['Aland Islands'] = 'Ahvenansaaret';

$GLOBALS["lang"]['Albania'] = 'Albania';

$GLOBALS["lang"]['Albanian'] = 'albania';

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

$GLOBALS["lang"]['All collections URLs use the format'] = 'Kaikki kokoelmat käyttävät muotoa';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Kaikki laite-alapöydät sisältävät pari tärkeää saraketta.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Kaikki laitteet, joissa on tietokone.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Kaikki laitteet, joilla on tietokoneen tai reitittimen tyyppi.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Kaikki laitteet ilman kytkintä ja tulostinta.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Kaikki laitteet ilman kytkintä ja tulostinta. Periaatteessa sama kuin edellä.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Kaikki säännölliset hakuvaihtoehdot ovat käytettävissä myös laitteen seed Discovery -sovelluksissa.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Kaikki tehtävät voidaan luoda samat Windows ja Linux. Tehtävät käyttävät CRON-menetelmää ajoitettaessa toteutusta.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Tämän tietopyynnön lisäksi lähetämme takaisin FirstWaven datapisteisiin, jotka antavat meille paljon tarvittavaa tietoa ominaisuustietojen käytöstä ja asennuksesta.';

$GLOBALS["lang"]['Also can be created from the'] = 'Myös voidaan luoda';

$GLOBALS["lang"]['Alternatives'] = 'Vaihtoehdot';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Kentät';

$GLOBALS["lang"]['American Samoa'] = 'Amerikan Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Active Directory löydöksen etsii Active Directory luettelo verkkojen ja skannaa niihin liittyvät IP-tiedot aivan kuten säännöllinen Subnet löytö.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Org (organisointi) on useimpien kokoelmien omistaja Open-AudIT:ssä. Lukuun ottamatta seuraavia maailmanlaajuisia kohteita: <i>kokoonpano</i>, useimmat kohteet on määrätty (omistaja) Org. Käyttäjällä on pääsy näihin kohteisiin kokoelmassa, joka alla on Org käyttäjällä on lupa.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Sovellus hyväksyy aktiivisesti TCP-yhteydet, UDP-datakuvat tai SCTP-yhdistykset tässä satamassa. Näiden löytäminen on usein sataman skannauksen ensisijainen tavoite. Turvahenkiset ihmiset tietävät, että jokainen avoin satama on keino hyökätä. Hyökkääjät ja kynätestaajat haluavat hyödyntää avoimia satamia, kun taas hallinnot yrittävät sulkea tai suojata niitä palomuureilla ilman, että ne estävät laillisia käyttäjiä. Avoimet satamat kiinnostavat myös muita kuin turvaskannauksia, koska niissä on verkossa käytettävissä olevia palveluja.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Joukko <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Joukko <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Joukko esineitä, jotka edustavat ulkoisia linkkejä lisätietoja.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Koulutettu arvaus laitteen henkilöllisyydestä ja tyypistä';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Salattu JSON-asiakirja, joka sisältää vaaditut ominaisuudet riippuen <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Yksityinen yritysverkosto on verkko, jonka yksi organisaatio rakentaa yhdistääkseen toimistonsa toimipisteet (esim. tuotantopaikat, pääkonttorit, etätoimistot, kaupat), jotta ne voivat jakaa tietokoneita.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Sisäänkirjautuminen voidaan luoda web-käyttöliittymällä, jos nykyinen käyttäjä kirjautuu sisään on rooli, joka sisältää';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Alla on esimerkki JSON POST -laitoksesta. Tämä olisi liitettävä tietolomakkeeseen.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Esimerkki widget SQL näyttää laitteet laskettu sijainti.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'LDAP-palvelin vahvisti ja hyväksyi olemassa olevan Open-AudIT-käyttäjän. Menestys.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Ilmoitus tämän sivuston edellyttämästä palvelun tasosta.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Sisäinen kenttä, joka osoittaa, onko löytö valmis.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Avoin suodatettu portti katsotaan avoimeksi (ja käynnistää laitteen havaitsemisen).<br/>Aiemmin tapahtunutta: IT katsoi, että';

$GLOBALS["lang"]['An optional GeoCode'] = 'Valinnainen GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Valinnainen salasana käyttää sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Analysoitu';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Ja lopuksi, klikkaa Lähetä suorittaa tämän löydön.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Entä jos jokin menee pieleen?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Ja lopuksi napsauta <i>Lähetä</i> luodaksesi Open-AudIT Auth -menetelmän Entralle.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Ja lopuksi, ei niinkään turvallisuuskysymys - enemmän mielenrauhaa. Tietorakenteet ovat avoimia ja dokumentoituja. Voit katsella niitä.';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Ja anna nimi - suosittelemme nöyrästi Open-AudIT . Mutta voit nimetä sen mitä haluat. Varmista vaihtoehto <i>Integroi kaikki muu sovellus, jota et löydä galleriasta (ei-galleria)</i> valittu. Ja sitten napsauta <i>Luo<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Ja paljon enemmän.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Liite A Valvonta';

$GLOBALS["lang"]['Antarctica'] = 'Etelämanner';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Viruslääkkeet';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua ja Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Kaikki TCP-portit (sis. erilliset, ei välilyöntejä) haluat jättää tämän löydön ulkopuolelle. Saatavilla vain Nmap 7+:n käytön yhteydessä.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Kaikki UDP-portit (sis. eristetyt, ei välilyöntejä) haluat jättää tämän löydön ulkopuolelle. Saatavilla vain Nmap 7+:n käytön yhteydessä.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Tarvitset lisää asiakirjoja.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Haluatko tehdä lisää muistiinpanoja?';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Kaikki attribuutit, joita seuraa * osoittavat, että CVSS-tietoja vähemmän kuin v4 käytettiin tämän kentän täydentämiseen. Oletuksena yritämme käyttää v4-kenttiä, mutta jos niitä ei ole asutettu, varaudumme edelliseen versioon [s] attribuuteille.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Kaikki laitteet osoitetaan tähän Orgaan, kun ne suorittavat tarkastusskriptin (jos asetettu).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Kaikki laitteet osoitetaan tähän Orgaan, kun ne suorittavat tarkastusskriptin (jos asetettu). Linkit <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Kaikki löydetyt laitteet osoitetaan tähän paikkaan, jos ne on asetettu. Linkit <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Kaikki löydetyt laitteet osoitetaan tähän paikkaan, kun ne suorittavat tarkastusskriptin (jos asetettu).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Kaikki löydetyt laitteet osoitetaan tähän paikkaan, kun ne suorittavat tarkastusskriptin (jos asetettu). Linkit <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Kaikki löydetyt laitteet osoitetaan tähän Org jos asetettu. Jos ei asetettu, ne on osoitettu <code>org_id</code> Tämän löydön. Linkit <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Kaikki tällä tavalla löydetyt tiedostot tallennetaan <i>Suoritettava</i> taulukko kuten mikä tahansa muu laitteen osa.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Tarvittava suodatin. HUOM: Kun tyyppi = liikenne, tämä edustaa fontti-awesome kuvaketta.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Kaikki tietyt TCP-portit haluat testata (comma erillinen, ei välilyöntejä).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Kaikki tietyt UDP-satamia haluat testata (comma seperated, ei välilyöntejä).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Kaikki ladatut kuvat asetetaan tähän.';

$GLOBALS["lang"]['Application'] = 'Hakemus';

$GLOBALS["lang"]['Application Definitions'] = 'Sovelluksen määritelmät';

$GLOBALS["lang"]['application_id'] = 'Hakemuksen tunniste';

$GLOBALS["lang"]['Application ID'] = 'Hakemuksen tunniste';

$GLOBALS["lang"]['Application Licenses'] = 'Sovelluslisenssit';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Sovellus, käyttöjärjestelmä tai laitteisto.';

$GLOBALS["lang"]['applications'] = 'Hakemukset';

$GLOBALS["lang"]['Applications'] = 'Hakemukset';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Sovellukset ovat vain Enterprisen ominaisuus.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Sovelluksia otetaan käyttöön Open-AudIT 2.2:ssa, jotta konseptia voitaisiin laajentaa jatkokehityksen myötä.';

$GLOBALS["lang"]['applied'] = 'Sovellettu';

$GLOBALS["lang"]['Applied'] = 'Sovellettu';

$GLOBALS["lang"]['Approved'] = 'Hyväksytty';

$GLOBALS["lang"]['Approved Packages'] = 'Hyväksytyt paketit';

$GLOBALS["lang"]['April'] = 'Huhtikuu';

$GLOBALS["lang"]['Arabic'] = 'arabia';

$GLOBALS["lang"]['architecture'] = 'Arkkitehtuuri';

$GLOBALS["lang"]['Architecture'] = 'Arkkitehtuuri';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Haluatko varmasti poistaa tämän syötteen?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Haluatko varmasti poistaa tämän tulosteen?';

$GLOBALS["lang"]['Are you sure?'] = 'Oletko varma?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Oletko varma? Tämä poistaa kaikki jonomerkinnät ja estää jäljellä olevien IP:ien löytymisen.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Oletko varma? Tämä nollaa jonotuslaskennan ja voi aiheuttaa latauksen palvelimelle.';

$GLOBALS["lang"]['area'] = 'Alue';

$GLOBALS["lang"]['Area'] = 'Alue';

$GLOBALS["lang"]['Argentina'] = 'Argentiina';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Muistutuksena siitä, miten luvat toimivat Open-AudITissa, katso';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Näin ollen <strong>on</strong> on admin$-osake saatavilla löydön tunnusluvut käyttäjälle. Tarkista kohde Windows kone tarjoaa <i>kirjoita</i> pääsy löytötunnusten käyttäjälle.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Kuten edellä mainittiin, kehittäjät eivät puhu kaikkia käännöskieliä tarjotaan. Tämä tarkoittaa, että emme voi tarkastella uudelleen acuracy, käännetty teksti. - Yritämme tehdä parannuksen. Jos näet jotain, joka ei ole käännetty oikein, voit muuttaa sitä itse. Muokkaa asianmukaista kielitiedostoa (kuten alla) ja etsi teksti muutettavaksi. Ehkä sitä ei ole olemassa. Muuta vain tekstiä, tallenna tiedosto ja päivittää sivu. Ei tarvitse käynnistää uudelleen palveluja / päivämääriä, jotta se tulee voimaan. Sinun täytyy ehkä pakottaa päivittämään selaimesi.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'OpenSCAPin vertailuarvojen mukaisesti - <i>Älä yritä toteuttaa mitään tämän vertailuarvon asetuksista testaamatta niitä ensin muussa kuin operatiivisessa ympäristössä. Tämän vertailuarvon luojat eivät ota vastuuta siitä, että muut osapuolet käyttävät sitä, eivätkä anna mitään takeita sen laadusta, luotettavuudesta tai mistään muusta ominaisuudesta.</i><br/><br/>Älä sokkona aloita. <i>kiinnitys</i> kysymykset, jotka paljastuivat vertailuarvon käytön jälkeen ilman ensin perusteellista testausta muussa kuin tuotannossa, identtisessä ympäristössä.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Laiteympäristöjen ominaisuuksien mukaisesti. Tuotanto, koulutus jne.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Koska tarkastus skripti käyttää bash, voit käyttää wildcard * kun määrittelet hakemistoja ja poissulkemisia.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Kuten tavallista, mene valikkoon → Hallitse → Integraatiot → Luo integraatio. Kuten edellä, jos olet käynnissä Linux ja sinulla on NMIS samalla palvelimella, sinun ei tarvitse tehdä mitään muuta kuin napsauttaa <i>Lähetä</i>. En voi tehdä sitä helpommaksi.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Kun suoritamme Discoveries ja keräämme laitteen tuloksia, kansoitamme luettelon verkostoista. Siunattu Subnets -ominaisuus käyttää tätä verkkoluetteloa vain hyväksyäkseen näiden verkkojen laitteista saatavat tiedot.';

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

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Aseta ISMS-manageri tai tiimi';

$GLOBALS["lang"]['Assign an Operator'] = 'Määrittele lentotoiminnan harjoittaja';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Aseta auditoidut laitteet tähän Org. Jätä nolla jättääksesi laitteen tällä hetkellä määrätty Org (tai asettaa oletus).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Aseta laite sijaintiin';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Aseta laite Org:iin';

$GLOBALS["lang"]['Assigned To'] = 'Määrätty';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Löytölaitteiden nimeäminen';

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

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Yritä jäljittää laite, ellemme tarkasta paikallista isäntää.';

$GLOBALS["lang"]['Attribute'] = 'Attribuutti';

$GLOBALS["lang"]['attributes'] = 'Ominaisuudet';

$GLOBALS["lang"]['Attributes'] = 'Ominaisuudet';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Ominaisuudet tallennetaan Open-AudIT käyttää tiettyjen kenttien, tällä hetkellä kaikki kentät perustuvat laitteisiin, paikoissa, orgs ja kyselytaulukot. Muokkaamasi ominaisuudet liittyvät seuraaviin sarakkeisiin: Luokka, ympäristö, tila ja tyyppi.';

$GLOBALS["lang"]['Audit'] = 'Tarkastus';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Audit DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Tarkastus ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Tarkastusloki';

$GLOBALS["lang"]['Audit Log'] = 'Tarkastusloki';

$GLOBALS["lang"]['Audit Mount Point'] = 'Tarkastus';

$GLOBALS["lang"]['Audit My PC'] = 'Audit Oma tietokone';

$GLOBALS["lang"]['Audit Netstat'] = 'Tilintarkastus';

$GLOBALS["lang"]['Audit OSX'] = 'Tarkastus OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Tarkastustulos';

$GLOBALS["lang"]['Audit Software'] = 'Audit-ohjelmisto';

$GLOBALS["lang"]['Audit Status'] = 'Tarkastuksen tila';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audit Win32 Tuote';

$GLOBALS["lang"]['Audit Windows'] = 'Auditointiikkunat';

$GLOBALS["lang"]['Audit the Device'] = 'Tarkasta laite';

$GLOBALS["lang"]['Audits'] = 'Tarkastukset';

$GLOBALS["lang"]['August'] = 'Elokuu';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Itävalta';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Ohjeet';

$GLOBALS["lang"]['Authenticate only'] = 'Tunnista vain';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Tunnistautumisen salalause';

$GLOBALS["lang"]['Authentication Protocol'] = 'Todentamispöytäkirja';

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

$GLOBALS["lang"]['Available Benchmarks'] = 'Käytettävissä olevat vertailuarvot';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Odotetaan analyysiä';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaidžan';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaidžani';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU yhteensä';

$GLOBALS["lang"]['Backbone network'] = 'Selkäluuverkko';

$GLOBALS["lang"]['Backup'] = 'Apu';

$GLOBALS["lang"]['Bahamas the'] = 'Bahama';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Pankki';

$GLOBALS["lang"]['Bank'] = 'Pankki';

$GLOBALS["lang"]['Banned'] = 'Kielletty';

$GLOBALS["lang"]['Banned Packages'] = 'Kielletyt paketit';

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

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Lähtökohdissa voidaan vertailla verkkotilastoportteja, käyttäjiä ja ohjelmistoja.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Lähtökohtien avulla voit yhdistää tarkastustiedot aiemmin määrittelemiisi attribuuteihin (perustasoosi) laitteiden vaatimustenmukaisuuden määrittämiseksi.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Laitevertailun lähtöarvot';

$GLOBALS["lang"]['Basic'] = 'Perus';

$GLOBALS["lang"]['Basque'] = 'Baski';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Koska yritämme olla mahdollisimman avoimia, tässä ovat lähettämämme tiedot.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Pystyy määrittämään, mitkä koneet on konfiguroitu samalla tavalla on merkittävä osa järjestelmien hallinnon ja tarkastuksen . Ja nyt raportointi siitä tehdään yksinkertainen ja automatisoitu. Kun määrität perustason, se tulee automaattisesti kulkemaan vastaan joukko laitteita ennalta määrätty aikataulu. Toteutettujen perusarvojen tuotos on saatavilla web-katselua, tuontia kolmannen osapuolen järjestelmään tai jopa painettuna raporttina.<br/><br/>Auditointia ja hallintaa varten se voi olla edullinen perustason yksittäisiä laitteita vastaan kiinteä, tunnettu hyvä laite. Lähtökohtien avulla voit yhdistää tarkastustiedot aiemmin määrittelemiisi attribuuteihin (perustasoosi) laitteiden vaatimustenmukaisuuden määrittämiseksi.';

$GLOBALS["lang"]['Belarus'] = 'Venäjä';

$GLOBALS["lang"]['Belgium'] = 'Belgia';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Alla on esimerkki vaaditusta csv-muodossa.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Näiden rivien alla muuttujat ruiskutetaan käsikirjoitukseen. Edellisestä esimerkistämme seuraa, että Linux-auditointiskripti on asutettu hakemistollamme kuten näin';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Alla on esimerkki Org Chart. Jos käyttäjällä on lupa <i>Rahoitus A</i> Org, heillä on myös lupa jälkeläisen Orgs of Dept A, B & C. Tämä on riippumatta kokoelmaa pyydetty.<br/><br/>Jos pyydetty kokoelma sallii tähtientendantit, käyttäjällä on myös pääsy Yhtiön #1 ja Oletusorgian kohteisiin. Tämä on (kuten edellä) kyselyt, ryhmät, et al.<br/><br/>Huomautus - Käyttäjällä voi olla pääsy tiedusteluun Oletusorgista, mutta se on kysely itsessään ei tulos. Tuloksena näkyy vain laitteet, joihin käyttäjällä on pääsy - IE laitteet Finance A ja Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Vertailuarvo';

$GLOBALS["lang"]['benchmark_id'] = 'Vertailuarvotunniste';

$GLOBALS["lang"]['Benchmark ID'] = 'Vertailuarvotunniste';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Esikuvatehtävät luodaan automaattisesti, kun vertailuarvo luodaan.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Vertailuarvon toteuttaminen ja käsittely voi kestää pitkän ajan, joten mieluummin aikatauluttaa niitä eikä tehdä niitä ad-hoc.';

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

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Vertailuarvot luodaan tarjoamalla käyttöjärjestelmä ja versio, yhdistettynä tiettyyn opas ja luettelo koneita toteuttaa sen. Luomisen jälkeen vertailuarvot toteutetaan suhteessa luettelon koneita aikataulussa.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Parhaan käytännön asetukset';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Vertailuarvot tarjoavat tietoturvasuosituksia tietokoneillesi käyttäen OpenSCAP-työkaluja ja -käytäntöjä.<p><i>OpenSCAP-sivulta:</i> Tietoturvallisuuden alati muuttuvassa maailmassa, jossa havaitaan ja korjataan päivittäin uusia haavoittuvuuksia, turvallisuusvaatimusten noudattamisen on oltava jatkuva prosessi. Siihen on myös sisällyttävä tapa, jolla politiikkoja voidaan mukauttaa, sekä säännöllinen arviointi ja riskien seuranta. OpenSCAP-ekosysteemi tarjoaa välineitä ja muokattavissa olevia toimintalinjoja näiden prosessien nopeaa, kustannustehokasta ja joustavaa täytäntöönpanoa varten.</p>';

$GLOBALS["lang"]['Benefits'] = 'Edut';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

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

$GLOBALS["lang"]['Both forms of'] = 'Molemmat';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasilia';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brasilia';

$GLOBALS["lang"]['Breaking it Down'] = 'Rikkoen sen';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Brittiläinen Intian valtameren alue (Chagos Saaristo)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Brittiläiset Neitsytsaaret';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Selaa puuta Console Root -> Osapalvelut -> Tietokoneet -> Tietokoneeni<br/><br/>Napsauta oikealle <i>Tietokoneeni</i> ja valitse ominaisuudet<br/><br/>Valitse <i>Oletusominaisuudet</i> välilehti';

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

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Luottaa asiakkaisiin ja kumppaneihin';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaria';

$GLOBALS["lang"]['Bulgarian'] = 'bulgaria';

$GLOBALS["lang"]['Bulk Edit'] = 'Muokkaa';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Bulk-muokkauslomake';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk-editointilaitteen ominaisuudet';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Bulk muokkauksen valinnat eivät pysy valittuna seuraavan sivun klikkaamisen jälkeen.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Liiketoimintavaatimukset';

$GLOBALS["lang"]['Business Requirements'] = 'Liiketoimintavaatimukset';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Mutta minulla on vain Windows Client Machines saatavilla!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Mutta en halua joutua muuttamaan kielitiedostoa joka kerta kun päivitän!';

$GLOBALS["lang"]['Buy'] = 'Osta';

$GLOBALS["lang"]['Buy More'] = 'Buy More';

$GLOBALS["lang"]['Buy More Licenses'] = 'Osta lisää lisenssit';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Oletuksena integroimme kaikki laitteet niiden nmis_manage attribuutti asetettu <i>y</i>. 4.2.0 lähetämme myös säännön, joka sanoo <i>Jos löydämme laitteen ja sillä on voimassa oleva SNMP OID, merkitse laite NMIS:n hallinnoimaksi</i>. Voit tietenkin poistaa tämän käytöstä, jos et halua sitä.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Oletuksena jätämme varmennevalidoinnin väliin, koska asiakkaat käyttävät itse allekirjoitettuja varmenteita. Varmenteen validoinnin mahdollistamiseksi muokkaa alla olevaa tiedostoa';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maski';

$GLOBALS["lang"]['cli_config'] = 'KLI Asetukset';

$GLOBALS["lang"]['CLI Config'] = 'KLI Asetukset';

$GLOBALS["lang"]['CPU'] = 'Suoritin';

$GLOBALS["lang"]['CPUs'] = 'Suorittimet';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVE:t, joiden tila on vastaanotettu, jotka odottavat analyysiä ja joita analysoidaan, hylättiin. Nämä CVES (useimmiten) eivät sisällä riittävästi tietoa, jotta voisimme luoda oikean SQL-kyselyn.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Laskettu löydöstä.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Laskettu tämän verkon IP-osoitteiden kokonaismäärä.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Laskettu valmistuttua, tämän kohteen suorittamiseen kulunut aika.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Laskettu, kun integrointi suoritetaan ja sisältää JSON-esitelmän laitteista tässä integraatiossa. Jokainen linkki <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Laskettu, kun kotoutuminen on käynnissä ja sisältää JSON-esitelmän tämän integraation paikoista. Jokainen linkki <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Lasketaan, kun integrointi suoritetaan, ja se sisältää Open-AudITista valittujen laitteiden määrän.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Laskettu, kun integrointi suoritetaan ja sisältää ulkoisen järjestelmän valitsemien laitteiden määrän.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Lasketaan, kun integrointi suoritetaan, ja se sisältää ulkoisessa järjestelmässä päivitettävien laitteiden määrän.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Laskettu, kun integrointi suoritetaan, ja sisältää Open-AudIT-järjestelmässä päivitettyjen laitteiden määrän.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Soita komentokehotus napsauttamalla Käynnistä ja etsi <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kambodža';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Kampuksen alueverkko';

$GLOBALS["lang"]['Campus area network'] = 'Kampuksen alueverkosto';

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

$GLOBALS["lang"]['Catalan'] = 'katalaani';

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

$GLOBALS["lang"]['Certification'] = 'Todistus';

$GLOBALS["lang"]['Certification Audit'] = 'Sertifiointi';

$GLOBALS["lang"]['Certification Process'] = 'Todistusprosessi';

$GLOBALS["lang"]['Chad'] = 'Tšad';

$GLOBALS["lang"]['Change'] = 'Muutos';

$GLOBALS["lang"]['change_id'] = 'Muuta tunnistetta';

$GLOBALS["lang"]['Change ID'] = 'Muuta tunnistetta';

$GLOBALS["lang"]['change_log'] = 'Muuta lokia';

$GLOBALS["lang"]['Change Log'] = 'Muuta lokia';

$GLOBALS["lang"]['Change Logs'] = 'Muuta lokia';

$GLOBALS["lang"]['change_type'] = 'Muutostyyppi';

$GLOBALS["lang"]['Change Type'] = 'Muutostyyppi';

$GLOBALS["lang"]['check_minutes'] = 'Tarkistuspöytäkirja';

$GLOBALS["lang"]['Check Minutes'] = 'Tarkistuspöytäkirja';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Tarkista SSH näissä satamissa';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Tarkista tästä portista kaikki SSH-palvelut.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Kiina';

$GLOBALS["lang"]['Chinese'] = 'Kiina';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Kiina (perinteinen)';

$GLOBALS["lang"]['Choose'] = 'Valitse';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Valitse (valitse käyttöjärjestelmä ensin)';

$GLOBALS["lang"]['Choose a Device'] = 'Valitse laite';

$GLOBALS["lang"]['Choose a Table'] = 'Valitse taulukko';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Valitse tehtävän tyyppi ensimmäisestä pudotuksesta. Tämä määrittää tarvittavat lisäkentät tehtävän tyypin mukaan.';

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

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Klikkaa <i>Uusi asiakassalaisuus</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Napsauta Lähetä suorittaa';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Klikkaa <i>Ominaisuudet</i> alle <i>Hallitse</i> otsikko keskivalikkorivissä. Kopioi <i>Käyttäjän käyttöosoite</i>. Kun se on kopioitu, liitä se tekstieditoriin. Sinun täytyy kopioida yksi osa tästä kentästä.<br/><br/>Esimerkkikenttämme näyttää tältä.<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Tarvitsemme sen osan. <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (vuokralaisen henkilötunnus). Tätä käytetään Open-AudIT- tutkimuksessa. <i>Vuokra</i> Laita se sinne.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Klikkaa App Registrations luoda uusi Sovellus, valitse Uusi Sovellus Rekisteröinti. Anna sille nimi (Käytin Open-AudIT), valitse Web app / API tyyppi ja anna tahansa URL (URL ei ole tärkeä) ja nyt napsauta Luo.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Klikkaa OK ja sulje DCOMCNFG-ikkuna.<br/><br/>Edellä mainitut muutokset edellyttävät uudelleenkäynnistystä voimaan.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Klikkaa juuri luomaasi sovellusta. Sovelluksen tunniste on asiakastunnus.<br/><br/>Luodaksesi asiakassalaisuuden, valitse Asetukset, sitten Avaimet. Anna avainnimi ja valitse sopiva viimeinen käyttöpäivämäärä ja valitse Tallenna.<br/><br/>Arvo merkitään sinulle - tämä on asiakassalaisuus.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Napsauta Poista-painiketta poistaaksesi Open-AudIT:n esimerkkilaitteet.<br/>Tämä poistaa alla olevat laitteet tietokannasta. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Napsauta Muokkaa-painiketta <i>Perus SAML Asetukset</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Napsauta Import-nappia alla, jotta voit populata Open-AudIT:n esimerkkilaitetiedoilla.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Napsauta kuvaketta sen kentän oikealle puolelle, jota haluat muokata. Vaihda kenttä ja klikkaa vihreää kuvaketta lähettää.';

$GLOBALS["lang"]['Client ID'] = 'Asiakkaan tunniste';

$GLOBALS["lang"]['Client ID and Secret'] = 'Asiakastunnus ja salaisuus';

$GLOBALS["lang"]['client_ident'] = 'Asiakastunniste';

$GLOBALS["lang"]['Client Ident'] = 'Asiakastunniste';

$GLOBALS["lang"]['client_secret'] = 'Asiakassalaisuus';

$GLOBALS["lang"]['Client Secret'] = 'Asiakassalaisuus';

$GLOBALS["lang"]['client_site_name'] = 'Asiakkaan sivuston nimi';

$GLOBALS["lang"]['Client Site Name'] = 'Asiakkaan sivuston nimi';

$GLOBALS["lang"]['Close'] = 'Sulje';

$GLOBALS["lang"]['Closed'] = 'Suljettu';

$GLOBALS["lang"]['Cloud'] = 'Pilvi';

$GLOBALS["lang"]['Cloud Details'] = 'Pilvitiedot';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery and Auditing';

$GLOBALS["lang"]['cloud_id'] = 'Pilvitunniste';

$GLOBALS["lang"]['Cloud ID'] = 'Pilvitunniste';

$GLOBALS["lang"]['cloud_log'] = 'Pilviloki';

$GLOBALS["lang"]['Cloud Log'] = 'Pilviloki';

$GLOBALS["lang"]['cloud_name'] = 'Pilvinimi';

$GLOBALS["lang"]['Cloud Name'] = 'Pilvinimi';

$GLOBALS["lang"]['Cloud Network'] = 'Pilviverkko';

$GLOBALS["lang"]['clouds'] = 'Pilvet';

$GLOBALS["lang"]['Clouds'] = 'Pilvet';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Pilvet ovat Open-AudIT Enterprisen lisensoimien asiakkaiden saatavilla.';

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

$GLOBALS["lang"]['Clusters and Reporting'] = 'Klusterit ja raportointi';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kookossaaret (Keling)';

$GLOBALS["lang"]['Collection'] = 'Kokoelma';

$GLOBALS["lang"]['Collections'] = 'Kokoelmat';

$GLOBALS["lang"]['Collector'] = 'Kerääjä';

$GLOBALS["lang"]['Collector (UUID)'] = 'Keräilijä (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Collector / Server on Enterprise vain ominaisuus. Yritysasiakkaat saavat yhden Collector lisenssin ilmaiseksi. Muita Collector lisenssit voidaan ostaa tarvittaessa.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Keräin / Palvelin on suunniteltu niin, että voit olla kaukosäädin tai <i>keräilijä</i> Open-AudIT toimii kauko-ohjauslaitteella. Kerääjäesiintyminen voi olla toisella turvavyöhykkeellä, aliverkossa, pilvessä tai asiakaspaikalla. Etäkeräin tekee sitten kaikki löytö ja tarkastus laitteiden paikallisesti välttäen verkottumista ja palomuurin monimutkaisuus. Kerääjä kun se on rekisteröity on täysin hallinnassa <i>palvelin</i>. Tämä tarkoittaa, että tarvitset vain HTTP- tai HTTPS-yhteyden tuolta Collectorilta palvelimelle.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Keräinlevy';

$GLOBALS["lang"]['Collector Name'] = 'Keräilijän nimi';

$GLOBALS["lang"]['collector_uuid'] = 'Keräilijä Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Keräilijä Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Keräilijän tehtävät ovat automaattisesti asetettu, kun keräintoiminto on käytössä. Käyttäjät eivät saa luoda keräilytehtäviä suoraan. Keräilijän tehtävät voidaan muokata niiden taajuus luomisen jälkeen. Jos Open-AudIT-palvelimella on Collectors raportoimassa sille, annetaan ylimääräinen pudotus. Voit valita tämän määrittääksesi, mikä Keräilijä tehtävä pitäisi suorittaa. Vain Discovery tehtäviä tuetaan Collectors.';

$GLOBALS["lang"]['Collectors'] = 'Keräilijät';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Keräilijät voivat toimia yhdessä kahdesta tilaa: Collector ja StandAlone. Collector-tilassa Open-AudIT-esiintymistä hallinnoi pääpalvelin. Stand Alone -tilassa instanssia hallinnoidaan paikallisesti ja siirtää kaikki löydetyt laitteet pääpalvelimelle.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Etähakujen kerääjät';

$GLOBALS["lang"]['Colombia'] = 'Kolumbia';

$GLOBALS["lang"]['color'] = 'Väri';

$GLOBALS["lang"]['Color'] = 'Väri';

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

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Kommentoi alla oleva viiva (noin linja 49 tai niin). Laita hasis # rivin alkuun.';

$GLOBALS["lang"]['comments'] = 'Huomautukset';

$GLOBALS["lang"]['Comments'] = 'Huomautukset';

$GLOBALS["lang"]['commercial'] = 'Kaupallinen';

$GLOBALS["lang"]['Commercial'] = 'Kaupallinen';

$GLOBALS["lang"]['Commercial Support'] = 'Kaupallinen tuki';

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

$GLOBALS["lang"]['Complete these steps.'] = 'Suorita nämä vaiheet.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Hyökkäyksen monitahoisuus (vähä tai korkea).';

$GLOBALS["lang"]['Component Table'] = 'Osataulukko';

$GLOBALS["lang"]['Components (All Devices)'] = 'Osat (kaikki laitteet)';

$GLOBALS["lang"]['Compute'] = 'Laske';

$GLOBALS["lang"]['Condition'] = 'Ehto';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Suorita riskinarviointi';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Toteuta tiedotus- ja koulutusohjelmat';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Johdon tarkastuskokoukset';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Tehdään säännöllisiä valvontatarkastuksia (yleensä vuosittain)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Akkreditoidun elimen kaksivaiheinen';

$GLOBALS["lang"]['Config'] = 'Asetukset';

$GLOBALS["lang"]['Config Default, currently '] = 'Asetuksen oletus, tällä hetkellä ';

$GLOBALS["lang"]['config_file'] = 'Asetustiedosto';

$GLOBALS["lang"]['Config File'] = 'Asetustiedosto';

$GLOBALS["lang"]['config_manager_error_code'] = 'Asetuksenhallintavirhekoodi';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Asetuksenhallintavirhekoodi';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Konfiguroitu roolipohjainen kulunvalvonta (PBAC)';

$GLOBALS["lang"]['configuration'] = 'Asetukset';

$GLOBALS["lang"]['Configuration'] = 'Asetukset';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Asetuksen muutoksen havaitseminen ja raportointi';

$GLOBALS["lang"]['Configure'] = 'Määrittele';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Aseta agentin palvelinpuoli suorittamaan tarkastukset aikataulussa';

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

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Neuvonta, toteutus ja muut palvelut ovat saatavilla';

$GLOBALS["lang"]['contact'] = 'Yhteystiedot';

$GLOBALS["lang"]['Contact'] = 'Yhteystiedot';

$GLOBALS["lang"]['contact_name'] = 'Yhteystiedot';

$GLOBALS["lang"]['Contact Name'] = 'Yhteystiedot';

$GLOBALS["lang"]['contained_in'] = 'Sisään';

$GLOBALS["lang"]['Contained In'] = 'Sisään';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Sisältää JSON objektin tiedot liittyvät elementit ja niiden kannat.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Sisältää kentät, jotka päättävät, jos meidän pitäisi käyttää ssh, snmp ja wmi löytö vaihtoehtoja. Json-esine.';

$GLOBALS["lang"]['Context & Leadership'] = 'Konteksti ja johtaminen';

$GLOBALS["lang"]['Context Engine ID'] = 'Kontekstimoottorin tunnus';

$GLOBALS["lang"]['Context Name'] = 'Kontekstin nimi';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Parannetaan jatkuvasti ISMS-järjestelmää';

$GLOBALS["lang"]['contractual_obligations'] = 'Sopimusvelvoitteet';

$GLOBALS["lang"]['Contractual Obligations'] = 'Sopimusvelvoitteet';

$GLOBALS["lang"]['Cook Islands'] = 'Cookinsaaret';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopioi ja liitä tarkastuksen tulos';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopioi ja liitä alla foorumit, toinen instanssi Open-AudIT tai missä tahansa muualla sinun täytyy antaa tämä kohde.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopioi <i>Hakemuksen tunniste</i> kenttä ja liitä se Open-AudIT <i>Asiakkaan tunniste</i> uuden Auth-menetelmän kenttä.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopioi <i>Asiakkaan tunniste</i> ja liitä se Open-AudIT <i>Asiakkaan tunniste</i> Kenttä.<br/>Jos salaisuutta ei ole, napsauta <i>Luo uusi salaisuus</i>, sitten kopioida arvo ja liitä se Open-AudIT <i>Asiakassalaisuus</i> Kenttä.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Kopioi arvo ja liitä se Open-AudIT- muotoon <i>Asiakassalaisuus</i> Kenttä.';

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

$GLOBALS["lang"]['Create File'] = 'Luo tiedosto';

$GLOBALS["lang"]['Create Geocode'] = 'Luo geokoodi';

$GLOBALS["lang"]['create_internal_count'] = 'Luo sisäinen luku';

$GLOBALS["lang"]['Create Internal Count'] = 'Luo sisäinen luku';

$GLOBALS["lang"]['create_internal_from_external'] = 'Luo sisäinen ulkoisesta';

$GLOBALS["lang"]['Create Internal From External'] = 'Luo sisäinen ulkoisesta';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Luo NMIS-laitteet Open-AudITista';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Luo avoin Audit Laitteet ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Luo avoin Audit NMIS:n laitteet';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Luo perustaso esimerkkilaitteelle';

$GLOBALS["lang"]['Create a Discovery'] = 'Luo löytö';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Luo ilmoitus sovellettavuudesta (SoA)';

$GLOBALS["lang"]['created_by'] = 'Luonut';

$GLOBALS["lang"]['Created By'] = 'Luonut';

$GLOBALS["lang"]['created_date'] = 'Luotu päivämäärä';

$GLOBALS["lang"]['Created Date'] = 'Luotu päivämäärä';

$GLOBALS["lang"]['Creating'] = 'Luodaan';

$GLOBALS["lang"]['Creating Credentials'] = 'Valtakirjojen luominen';

$GLOBALS["lang"]['Creating Device'] = 'Luodaan laitetta';

$GLOBALS["lang"]['Creating Widgets'] = 'Luodaan Widgettejä';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Discoveryn luominen Skannaa asetukset';

$GLOBALS["lang"]['Creating a Query'] = 'Kyselyn luominen';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Luodaan SQL-selvitys ryhmille';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Luodaan SQL-selvitys kyselyistä';

$GLOBALS["lang"]['Creating an Integration'] = 'Integroinnin luominen';

$GLOBALS["lang"]['creator'] = 'Luoja';

$GLOBALS["lang"]['Creator'] = 'Luoja';

$GLOBALS["lang"]['credential'] = 'Luotettavuus';

$GLOBALS["lang"]['Credential'] = 'Luotettavuus';

$GLOBALS["lang"]['Credentials'] = 'Valtakirjat';

$GLOBALS["lang"]['Credentials Client ID'] = 'Asiakastunnus';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Valtakirjojen tilaaminen Tunniste';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Valtakirjat';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Valtakirjat <i>Valtakirja</i> tietokantataulukko. Oikeat tiedot on salattu. Kun Discovery suoritetaan, laitteen erityiset tiedot on kerätty tietokannasta, purettu ja testattu. Jos nämä epäonnistuvat, myös luettelo valtakirjoista haetaan, puretaan ja testataan laitetta vastaan alkaen tunnuksista, joiden tiedetään toimineen aiemmin. Laitekohtaiset tunnusluvut tallennetaan yksittäisen laitteen tasolla <i>Uskottava</i> taulukko (huom. <i>tilu</i> taulukon nimessä). SSH-näppäimet testataan ennen SSH-käyttäjätunnusta / salasanaa. SSH:n testauksessa tunnusmerkit merkitään myös sudolla työskentelyksi tai rootiksi.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Valtuutukset voivat olla yksi muutamia eri tyyppejä - snmp v.1 / v.2, snmp v.3, ssh, ssh avain, ikkunat ovat kaikki käytössä. CAVEAT - ssh-avaimia ei ole vielä toteutettu Windows Open-AudIT -palvelimille.';

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

$GLOBALS["lang"]['Custom Fields'] = 'Omat kentät';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Omat TCP-portit';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Custom TCP Ports. Kaikki tietyt satamat, jotka skannataan TCP-porttien lisäksi. Pilkku eristetty, ei välilyöntejä.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Oma UDP Satamat';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Custom UDP Ports. Kaikki tietyt satamat skannattiin UDP-porttien lisäksi. Pilkku eristetty, ei välilyöntejä.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Customisable skannausasetukset / Discovery';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Kypros';

$GLOBALS["lang"]['Czech'] = 'tšekki';

$GLOBALS["lang"]['Czech Republic'] = 'Tšekki';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-tili (valinnainen)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Salasana (valinnainen)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS- isäntänimi';

$GLOBALS["lang"]['Danish'] = 'Tanska';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard-tunniste';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard-tunniste';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard Widgets';

$GLOBALS["lang"]['dashboards'] = 'taulut';

$GLOBALS["lang"]['Dashboards'] = 'taulut';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards ja Widgets avulla Enterprise lisensoitu asiakkaat voivat luoda, lukea, päivittää ja poistaa molemmat nämä kokoelmat varmistaa niiden kotisivu on juuri mitä heidän tarvitsee nähdä. Sen lisäksi käyttäjä voi asettaa tietyn kojelaudan omaksi kotisivukseen. Kaikkien ei tarvitse käyttää samaa kotisivua (pöytälauta), eikä samoja widgettejä kojelaudalla. Professional lisensoitu asiakkaat voivat valita kahden ennalta määritellyt kojelaudat asettaa oman kotisivun.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboardit tarjoavat <i>yhdellä silmäyksellä</i> tärkeä näkyvyys verkossa tapahtuville muutoksille sekä nopeat linkit laitetyyppeihin, valmistajiin ja käyttöjärjestelmiin ja niin edelleen.';

$GLOBALS["lang"]['Dashboards use'] = 'Levyjen käyttö';

$GLOBALS["lang"]['Data'] = 'Tiedot';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Data Export - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Tietojen säilyttäminen';

$GLOBALS["lang"]['Database'] = 'Tietokanta';

$GLOBALS["lang"]['db_action'] = 'Tietokannan toiminto';

$GLOBALS["lang"]['Database Action'] = 'Tietokannan toiminto';

$GLOBALS["lang"]['db_column'] = 'Tietokantasarake';

$GLOBALS["lang"]['Database Column'] = 'Tietokantasarake';

$GLOBALS["lang"]['Database Definition'] = 'Tietokannan määritelmä';

$GLOBALS["lang"]['db_row'] = 'Tietokantarivi';

$GLOBALS["lang"]['Database Row'] = 'Tietokantarivi';

$GLOBALS["lang"]['Database Schema'] = 'Tietokanta Schema';

$GLOBALS["lang"]['Database Server Discovery'] = 'Tietokannan palvelimen löytö';

$GLOBALS["lang"]['db_table'] = 'Tietokantataulukko';

$GLOBALS["lang"]['Database Table'] = 'Tietokantataulukko';

$GLOBALS["lang"]['Database Tables'] = 'Tietokantataulukot';

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

$GLOBALS["lang"]['Debugging'] = 'Vianetsintä';

$GLOBALS["lang"]['Debugging a Script'] = 'Komentosarjan vianetsintä';

$GLOBALS["lang"]['December'] = 'Joulukuu';

$GLOBALS["lang"]['Decommission'] = 'Poista käytöstä';

$GLOBALS["lang"]['Default'] = 'Oletus';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Oletustodentaminen Taso - Aseta yhteys';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Oletuskuvaus Taso - Tunnista';

$GLOBALS["lang"]['Default Items'] = 'Oletuserät';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Oletusryhmät';

$GLOBALS["lang"]['Default Roles Groups'] = 'Oletusroolien ryhmät';

$GLOBALS["lang"]['Default Value'] = 'Oletusarvo';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389. Normaalisti 636 käytetään aktiivisessa LDAPS-hakemistossa.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Oletus <code>3</code> LDAP:lle ja Active Directorylle.';

$GLOBALS["lang"]['Defaults'] = 'Oletukset';

$GLOBALS["lang"]['Deferred'] = 'Viivästetty';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Määrittele hankkeiden laajuus ja tavoitteet';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Määrittele ISMS-järjestelmän soveltamisala';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Määritellään organisaation konteksti (sisäiset ja ulkoiset kysymykset)';

$GLOBALS["lang"]['delay_minutes'] = 'Viivepöytäkirja';

$GLOBALS["lang"]['Delay Minutes'] = 'Viivepöytäkirja';

$GLOBALS["lang"]['Delete'] = 'Poista';

$GLOBALS["lang"]['Delete Example Devices'] = 'Poista esimerkkilaitteet';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Poista ulkoinen sisäisestä';

$GLOBALS["lang"]['Delete External From Internal'] = 'Poista ulkoinen sisäisestä';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Poista NMIS Laitteet, jos ei Open-AudITissa';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Poista {kokoelma} -merkintä.';

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

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Yksityiskohdat siitä, kuka on yleensä yhteydessä tällä sivustolla.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Määritä, kuinka usein haluat suorittaa lähtötason tarkistuksen tietokantaan ja luoda aikataulun mukaisen raportin';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Määritä riskinhoitovaihtoehdot';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Kehitetään riskinhallintasuunnitelma.';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Politiikan, menettelyjen ja valvonnan kehittäminen';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Kehitetään tarvittavat ISMS-asiakirjat (politiikat, menettelyt jne.)';

$GLOBALS["lang"]['device'] = 'Laite';

$GLOBALS["lang"]['Device'] = 'Laite';

$GLOBALS["lang"]['Device Audits'] = 'Laitetarkastukset';

$GLOBALS["lang"]['Device Component Names'] = 'Laitekomponentin nimet';

$GLOBALS["lang"]['Device ID'] = 'Laitteen tunniste';

$GLOBALS["lang"]['device_id'] = 'Laitteen tunniste';

$GLOBALS["lang"]['device_id_a'] = 'Laite ID A';

$GLOBALS["lang"]['Device ID A'] = 'Laite ID A';

$GLOBALS["lang"]['device_id_b'] = 'Laite ID B';

$GLOBALS["lang"]['Device ID B'] = 'Laite ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Laitteiden vastaavuussäännöt';

$GLOBALS["lang"]['Device Name'] = 'Laitteen nimi';

$GLOBALS["lang"]['Device Result'] = 'Laitetulos';

$GLOBALS["lang"]['Device Results'] = 'Laitteen tulokset';

$GLOBALS["lang"]['Device Seed'] = 'Laitelevy';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Laitelevy Löydöt ovat hyvä vaihtoehto, jos tiedät, että verkko koostuu useita aliverkkoja, mutta et ole varma, mitä ne ovat. Etsi löytö paikallisella reitittimellä ja katso, kun verkkosi avautuu silmiesi edessä.';

$GLOBALS["lang"]['Device Seed IP'] = 'Laitelevyn IP';

$GLOBALS["lang"]['Device Status'] = 'Laitteen tila';

$GLOBALS["lang"]['Device Types'] = 'Laitetyypit';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Laite ja ohjelmisto- ja laitteistotarkastus';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Laite on aliverkossa';

$GLOBALS["lang"]['Devices'] = 'Laitteet';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Sijaintiin osoitetut laitteet';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Sijaintiin osoitetut laitteet';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Orgaanille osoitetut laitteet';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Orgaanille osoitetut laitteet';

$GLOBALS["lang"]['Devices Audited'] = 'Laitteet tarkastettu';

$GLOBALS["lang"]['Devices Collection'] = 'Laitteiden kerääminen';

$GLOBALS["lang"]['Devices Created in '] = 'Laitteet luotu ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open-AudIT-järjestelmässä luodut laitteet';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Laitteiden oletusnäytön sarakkeet';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Laitteiden oletusnäytön sarakkeet';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Viimeiset 7 päivää';

$GLOBALS["lang"]['Devices Found Today'] = 'Tänään löytyneet laitteet';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Laitteita löytyi eilen';

$GLOBALS["lang"]['Devices Missing Information'] = 'Laitteet, jotka puuttuvat tiedot';

$GLOBALS["lang"]['Devices Not Audited'] = 'Laitteet, joita ei ole tarkastettu';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = '30 päivää näkemättömät laitteet';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = '7 päivää näkemättömät laitteet';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Laitteet, joita ei ole nähty 90 päivää';

$GLOBALS["lang"]['Devices Older Than X'] = 'Laitteet Vanhempia kuin X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API:n avulla noudetut laitteet';

$GLOBALS["lang"]['Devices Selected from '] = 'Valitut laitteet ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Open-AudITista valitut laitteet';

$GLOBALS["lang"]['Devices Updated in '] = 'Päivitetyt laitteet ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Laitteet päivitetty Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Laitteita vertaillaan.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Laitteita ei arvosteta.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Laitteita voidaan vertailla.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Open-AudITin laitteet';

$GLOBALS["lang"]['Devices in Running State'] = 'Juoksevan tilan laitteet';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Pysäytetyn tilan laitteet';

$GLOBALS["lang"]['Devices in this'] = 'Tässä tarkoitetut laitteet';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Laitteet eivät täsmää, jos niiden tila on asetettu <i>poistettu</i>. Mikä tahansa muu tila mahdollistaa täsmäämisen.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Vanhentuneet takuut sisältävät laitteet';

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

$GLOBALS["lang"]['Discoveries'] = 'Havainnot';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Löydökset ovat Open-AudITin ydin. Miten muuten tietäisit? <i>Mitä verkossasi on?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Löydöt ovat tietueita, joiden avulla voit tehdä löydön verkossa yhdellä napsautuksella, kirjoittamatta verkon yksityiskohtia joka kerta.';

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

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Scan Vaihtoehdot ovat vain yksi esinekokoelma. Yrityskäyttäjät voivat luoda, lukea, päivittää ja poistaa tietoja tarpeen mukaan. Ammattikäyttäjät voivat lukea kaikki merkinnät, mutta ei luoda uusia tietueita, päivittää nykyiset merkinnät tai poistaa merkinnät. Yhteisön käyttäjillä ei ole käyttöliittymää, joka mahdollistaisi pääsyn tähän kokoelmaan.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Löydä skannaustyypit';

$GLOBALS["lang"]['Discovery Support'] = 'Löydä tuki';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Discovery on lopettanut toimintansa';

$GLOBALS["lang"]['disk'] = 'Levy';

$GLOBALS["lang"]['Disk'] = 'Levy';

$GLOBALS["lang"]['display_version'] = 'Näytä versio';

$GLOBALS["lang"]['Display Version'] = 'Näytä versio';

$GLOBALS["lang"]['Display in Menu'] = 'Näytä valikossa';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Näyttää vakiomuotoisen web-lomakkeen toimittamista varten POST / {kokoelma}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Näyttää vakiomuotoisen web-lomakkeen toimittamista varten POST / {kokoelma} / tuonti.';

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

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Älä unohda Open-AudIT wikiä kaikissa asiakirjoissasi.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Älä unohda, että Wikissä on paljon asiakirjoja.';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Älä skannaa näitä TCP-portteja.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Älä skannaa näitä UDP-portteja.';

$GLOBALS["lang"]['Do not show me again'] = 'Älä näytä minulle enää.';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Onko sinulla täydellinen esimerkki tästä kokoonpanosta? Ehkä laite sijaitsee laboratoriossa tai työasema kloonata työasemien VM.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Haluatko käyttää turvallista kuljetusta (LDAPS) tai säännöllistä salaamatonta LDAP:tä.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Haluatko nähdä tavallisen sivupalkin vasemmalla?';

$GLOBALS["lang"]['documentation'] = 'Asiakirjat';

$GLOBALS["lang"]['Documentation'] = 'Asiakirjat';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentaatio tietystä kokoelmasta.';

$GLOBALS["lang"]['Does Not Equal'] = 'Ei yhtä suuri';

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

$GLOBALS["lang"]['Download a File'] = 'Lataa tiedosto';

$GLOBALS["lang"]['Download a file from URL'] = 'Lataa tiedosto URL-osoitteesta';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Lataa testi_ikkunat_client.vbs skripti suoraan';

$GLOBALS["lang"]['Download your updated version from'] = 'Lataa päivitetty versio osoitteesta';

$GLOBALS["lang"]['driver'] = 'Kuljettaja';

$GLOBALS["lang"]['Driver'] = 'Kuljettaja';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Kaksinkertaista laitteet / puuttuvat laitteet';

$GLOBALS["lang"]['duration'] = 'Kesto';

$GLOBALS["lang"]['Duration'] = 'Kesto';

$GLOBALS["lang"]['Dutch'] = 'hollanti';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Jokainen IP on skannattu löydön konfiguroitu vaihtoehtoja (ks. Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). Yleensä Nmap testaa satamille 22 (ssh), 135 (wmi), 62078 (iPhone) ja UDP 161 (snmp). Jos 22, 135 tai 161 vastaa, hakulista on noudettu ja jokainen todistus testataan vuorollaan. Ensimmäiset käyttötunnukset käytetään lisäkyselyihin suoraan laitteesta. Huomaa - jos laite on aiemmin löydetty ja sillä on käyttötunnukset, ne testataan ensin. Vain jos ne epäonnistuvat ovat muut valtuudet sitten yrittää.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Joka kerta kun laite löydetään tai tarkastustulos käsitellään, kaikki säännöt haetaan tietokannasta ja niitä käytetään kyseisen laitteen ominaisuuksia vastaan. Säännöt ovat yhtä laitetta vastaan kerrallaan - ei ole mahdollisuutta sanoa <i>Suorita säännöt kaikkia laitteita vastaan<i> tai <i>Aja säännöt näitä laitteita vastaan<i>. Yksittäinen sääntö testaa yhtä tai useampaa laitteen ominaisuutta, ja jos se vastaa sääntöä, käytetään tulosta. Useita ominaisuuksia voidaan testata. Useita ominaisuuksia voidaan asettaa. Ajattele tätä jos tämä, sitten järjestelmän Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Helposti suorittaa löydön verkossa yhdellä napsautuksella, syöttämättä yksityiskohtia kyseisen verkon joka kerta.';

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

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Ota käyttöön jaettu COM tällä tietokoneella - vaihtoehto tarkistetaan';

$GLOBALS["lang"]['enabled'] = 'Käytössä';

$GLOBALS["lang"]['Enabled'] = 'Käytössä';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Ominaisuuden mahdollistaminen ikkunoiden alla';

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

$GLOBALS["lang"]['Endpoint'] = 'Päätetapahtuma';

$GLOBALS["lang"]['English'] = 'englanti';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Lainsäädännön noudattamisen parantaminen';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Rikastus on valmis. CVE:llä on täydelliset metatiedot ja sitä pidetään vakaana.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Varmista, että asiakirjat ovat valvottuja ja saatavilla';

$GLOBALS["lang"]['enterprise'] = 'Yritys';

$GLOBALS["lang"]['Enterprise'] = 'Yritys';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Yksityinen yritysverkosto';

$GLOBALS["lang"]['Enterprise private network'] = 'Yksityinen yritysverkosto';

$GLOBALS["lang"]['Entitlement Type'] = 'Oikeustyyppi';

$GLOBALS["lang"]['Entra'] = 'Entra';

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

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Luodaan hankesuunnitelma ja aikataulu';

$GLOBALS["lang"]['Establish an information security policy'] = 'Luodaan tietoturvapolitiikka';

$GLOBALS["lang"]['Established'] = 'Perustettu';

$GLOBALS["lang"]['Estonia'] = 'Viro';

$GLOBALS["lang"]['Estonian'] = 'viro';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopia';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Arvioidaan ISMS:ää sisäisesti';

$GLOBALS["lang"]['Every'] = 'Joka';

$GLOBALS["lang"]['Every Day'] = 'Joka päivä';

$GLOBALS["lang"]['Example'] = 'Esimerkki';

$GLOBALS["lang"]['Example Devices'] = 'Esimerkkilaitteet';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Esimerkki Org Chart with Access';

$GLOBALS["lang"]['Example text from'] = 'Esimerkkiteksti osoitteesta';

$GLOBALS["lang"]['Examples'] = 'Esimerkkejä';

$GLOBALS["lang"]['Exceptions'] = 'Poikkeukset';

$GLOBALS["lang"]['exclude'] = 'Poista';

$GLOBALS["lang"]['Exclude'] = 'Poista';

$GLOBALS["lang"]['exclude_ip'] = 'Poista IP';

$GLOBALS["lang"]['Exclude IP'] = 'Poista IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Poista IP-osoitteet';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Ei sisällä IP-osoitteita (yksittäinen IP - 192.168.1.20, vaihteluvälit - 192.168.1.30-40 tai alaverkot - 192.168.1.100/30), jotka on lueteltu skannatusta. Pilkku eristetty, ei välilyöntejä.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Ei sisällä TCP-portteja';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Poista Tcp- portit';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Poista Tcp- portit';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Pois lukien UDP- satamat';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Poista Udp-portit';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Poista Udp-portit';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Ohita kaikki skannatut portit. Pilkku eristetty, ei välilyöntejä.';

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

$GLOBALS["lang"]['Exporting a Device'] = 'Laitteen vienti';

$GLOBALS["lang"]['expose'] = 'Paljasta';

$GLOBALS["lang"]['Expose'] = 'Paljasta';

$GLOBALS["lang"]['External'] = 'Ulkoiset';

$GLOBALS["lang"]['External Field Name'] = 'Ulkoisen kentän nimi';

$GLOBALS["lang"]['External Field Type'] = 'Ulkoisen kentän tyyppi';

$GLOBALS["lang"]['External Field Types'] = 'Ulkoiset kenttätyypit';

$GLOBALS["lang"]['external_ident'] = 'Ulkoinen tunnistus';

$GLOBALS["lang"]['External Ident'] = 'Ulkoinen tunnistus';

$GLOBALS["lang"]['external_link'] = 'Ulkoinen linkki';

$GLOBALS["lang"]['External Link'] = 'Ulkoinen linkki';

$GLOBALS["lang"]['extra_columns'] = 'Ylimääräiset sarakkeet';

$GLOBALS["lang"]['Extra Columns'] = 'Ylimääräiset sarakkeet';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Ekstra- ja aikapohjaiset raportit';

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

$GLOBALS["lang"]['Fields attributes are'] = 'Kentät ovat';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidži';

$GLOBALS["lang"]['File'] = 'Tiedosto';

$GLOBALS["lang"]['File Auditing'] = 'Tiedoston tarkastus';

$GLOBALS["lang"]['File Import'] = 'Tiedoston tuonti';

$GLOBALS["lang"]['File Input'] = 'Tiedostosyöte';

$GLOBALS["lang"]['file_name'] = 'Tiedostonimi';

$GLOBALS["lang"]['File Name'] = 'Tiedostonimi';

$GLOBALS["lang"]['File Share Discovery'] = 'Tiedostonjako Discovery';

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

$GLOBALS["lang"]['Filtered Ports'] = 'Suodatetut satamat';

$GLOBALS["lang"]['Finland'] = 'Suomi';

$GLOBALS["lang"]['Finnish'] = 'suomi';

$GLOBALS["lang"]['Firewall'] = 'Palomuuri';

$GLOBALS["lang"]['Firewall Packages'] = 'Palomuuripaketit';

$GLOBALS["lang"]['firewall_rule'] = 'Palomuurin sääntö';

$GLOBALS["lang"]['Firewall Rule'] = 'Palomuurin sääntö';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revision';

$GLOBALS["lang"]['First'] = 'Ensimmäinen';

$GLOBALS["lang"]['First Name'] = 'Etunimi';

$GLOBALS["lang"]['first_run'] = 'Ensimmäinen suorita';

$GLOBALS["lang"]['First Run'] = 'Ensimmäinen suorita';

$GLOBALS["lang"]['first_seen'] = 'Ensimmäinen';

$GLOBALS["lang"]['First Seen'] = 'Ensimmäinen';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Keskitytäänkö ensin siihen, mikä lopputarve on: yritätkö käyttää ohjelmistoja, käyttäjiä vai Netstat-tietoja? Mitä tärkeää on verrata ja raportoida?';

$GLOBALS["lang"]['FirstWave'] = 'Ensimmäinen Wave';

$GLOBALS["lang"]['Fix'] = 'Korjaa';

$GLOBALS["lang"]['Fixed'] = 'Kiinteä';

$GLOBALS["lang"]['Fixing the Issue'] = 'Asian korjaaminen';

$GLOBALS["lang"]['Floor'] = 'Lattia';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Seuraa alla olevia linkkejä ja selvitä, miten Open-AudIT:ia käytetään selvittääksesi <b>Mitä verkossasi on?</b>';

$GLOBALS["lang"]['For'] = 'For';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'For <i>Tyyppi</i> varmistettava, että valitset lähtötason, ja ryhmälle valitset ryhmän laitteita, jos se on sovellettavissa tähän perustasoon, jotka parhaiten edustavat perustason soveltamiseen soveltuvia laitteita. Tämä estää virheelliset merkinnät.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Debian/Ubuntu-ajolle, mukaan lukien dpkg:n asetus ohittamisen muistamiseksi, joten apt-get-päivitys ei katkea';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'SNMP Open-AudIT voi käyttää v1, v2 ja v3 tiedot. Laite on kysytty riippumatta siitä, onko se reititin, kytkin (säännöllinen verkkolaitteet) tai tietokone (Linux ja Windows usein käyttää SNMP seurantatyökaluja).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Jos pohjamaali Cron, katso tämä Wikipedia sivu';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Siemenlöytöä varten, pitäisikö minun vain löytää IP-osoitteen tila.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Siemenlöydöstä, jos löydän vain IP:t valitusta aliverkosta.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Siemenlöytöä varten, pitäisikö minun etsiä aliverkko ennen löytöä.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Raakaa SQL-kyselyä varten. Kuten per Queries, sinun täytyy sisällyttää <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Kutakin kutuista prosessia varten esiintyy alla.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Esimerkiksi - voit luoda perustason Redhat 9 -laitetta käyttävästä laitteesta, joka toimii yhtenä apache-palvelimistasi klusterissa. Tiedät, että tämä palvelin on konfiguroitu juuri niin kuin haluat sen, mutta olet epävarma, jos muut palvelimet klusteri on määritetty täsmälleen sama. Lähtökohtien avulla voit määrittää tämän.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Esimerkiksi - voit luoda perustason Redhat 9 -laitetta käyttävästä laitteesta, joka toimii yhtenä apache-palvelimistasi klusterissa. Tiedät, että tämä palvelin on konfiguroitu juuri niin kuin haluat sen, mutta olet epävarma, jos muut palvelimet klusteri on määritetty täsmälleen sama. Lähtökohtien avulla voit määrittää tämän.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Lisätietoja saa wikistä.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Luvista, jotka eivät ole ikuisia, milloin lisenssi päättyy.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Lisätietoja saat Open-AudIT Knowledge Basesta.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Lisätietoja on seuraavassa oppaassa, johon sisältyy video. Käyttö';

$GLOBALS["lang"]['For more information, see'] = 'Lisätietoja:';

$GLOBALS["lang"]['form_factor'] = 'Muoto';

$GLOBALS["lang"]['Form Factor'] = 'Muoto';

$GLOBALS["lang"]['format'] = 'Muoto';

$GLOBALS["lang"]['Format'] = 'Muoto';

$GLOBALS["lang"]['Forth'] = 'Forth';

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

$GLOBALS["lang"]['From that page'] = 'Tuolta sivulta';

$GLOBALS["lang"]['full_name'] = 'Koko nimi';

$GLOBALS["lang"]['Full Name'] = 'Koko nimi';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Täysi pilvi tilintarkastus kaikki tiedot säännöllisen Open-AudIT-auditin JA yksityiskohtia kuten koneen tyyppi ja koko.';

$GLOBALS["lang"]['function'] = 'Toiminto';

$GLOBALS["lang"]['Function'] = 'Toiminto';

$GLOBALS["lang"]['GROUP BY'] = 'RYHMÄ';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'galicia';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Gap Analysis (valinnainen)';

$GLOBALS["lang"]['gateway'] = 'Portti';

$GLOBALS["lang"]['Gateway'] = 'Portti';

$GLOBALS["lang"]['gateways'] = 'Portti';

$GLOBALS["lang"]['Gateways'] = 'Portti';

$GLOBALS["lang"]['Generated By'] = 'Luonut';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Maantieteelliset kartat';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'Saksa';

$GLOBALS["lang"]['Germany'] = 'Saksa';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat/Long';

$GLOBALS["lang"]['Get News'] = 'Hae uutisia';

$GLOBALS["lang"]['Get Started'] = 'Aloita';

$GLOBALS["lang"]['Get a Free License'] = 'Hanki ilmainen lisenssi';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Tutustu Open-AudIT-alustaan ja tutustu sen ominaisuuksiin.';

$GLOBALS["lang"]['Getting Started'] = 'Aloittaminen';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery Options';

$GLOBALS["lang"]['Global area network'] = 'Globaali alueverkko';

$GLOBALS["lang"]['Go'] = 'Mene.';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Palaa Open-AudIT-palvelimellesi ja luo löytö kohde Windows-tietokoneiden IP-osoitteella aliverkkona (tämä säästää koko aliverkon uudelleen löytymisen). Tutki löytö ja huomioi mahdolliset ongelmat. Kaikkien havaittujen kysymysten osalta on ryhdyttävä asianmukaisiin toimiin.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Mene kohde Windows PC (tai käytä RDP) ja kirjaudu käyttäjä käyttää löytö Credential asettaa.';

$GLOBALS["lang"]['Go to menu'] = 'Siirry valikkoon';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Mene <i>Hakemukset</i> -> <i>Sovellusten rekisteröinnit</i> Valikkokohta vasemmalla. Etsi Open-AudIT. Klikkaa Open-AudIT -merkintää luettelosta (olettaen, että nimesit sovelluksen Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Mene <i>Todistukset ja salaisuudet</i> valikon kohta alla <i>Hallitse</i> Keskimenussa.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Mene <i>Yksi kirjautuminen</i> valikon kohta ja napsauta SAML varten <i>Valitse yksi kirjautumismenetelmä</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Computen kentät';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Valtakirjat';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Mapsin sovellusliittymä Avain';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Hienoa, sitten voit auttaa! Lähetä ensin Heiluta käyttöliittymässä olevaa tekstiä ja mitä tulisi näyttää. Sisällytämme, että kielitiedoston niin eteenpäin, käännös on parannettu ja sinun ei tarvitse huolehtia päivittämisestä sen jokaisen julkaisun!';

$GLOBALS["lang"]['Greater Than'] = 'Suurempi kuin';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Suurempi kuin tai yhtä suuri kuin';

$GLOBALS["lang"]['Greece'] = 'Kreikka';

$GLOBALS["lang"]['Greek'] = 'kreikka';

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

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Ryhmiä käytetään yksinkertaisina luetteloina laitteista, jotka vastaavat vaadittuja ehtoja. Jos JSONia pyydetään, he palauttavat luettelon <i>laitteet.id</i> Vain. Jos sitä pyydetään web-käyttöliittymän avulla, ne palauttavat vakiosarakkeen ominaisuusluettelon. Ryhmiä voidaan käyttää integraatioihin, lähtökohtiin ja muihin kohteisiin.';

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

$GLOBALS["lang"]['Hardware'] = 'Laitteisto';

$GLOBALS["lang"]['hardware_revision'] = 'Laitteiston tarkistus';

$GLOBALS["lang"]['Hardware Revision'] = 'Laitteiston tarkistus';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Onko tätä käytäntöä sovellettu tässä organisaatiossa?';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'On agentti aina ajaa uusin tarkastus skripti (jos päivität Open-AudIT ja manuaalisesti kopioida skriptit kohteisiin, sitten asettaa Cron - sinun täytyy päivittää nämä skriptit kunkin päivityksen).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Käske käyttäjän avata komentokehote (käyttäen <i>Suorita hallinnoijana</i>) Liitä alla olevaan agentin lataamiseen.';

$GLOBALS["lang"]['Head'] = 'Pää';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard ja McDonaldsaaret';

$GLOBALS["lang"]['Hebrew'] = 'heprea';

$GLOBALS["lang"]['height'] = 'Korkeus';

$GLOBALS["lang"]['Height'] = 'Korkeus';

$GLOBALS["lang"]['Height in RU'] = 'Rautatieyrityksen korkeus';

$GLOBALS["lang"]['Help'] = 'Ohje';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Apua ja usein kysyttyä';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Auttaa hallitsemaan ja vähentämään tietoturvariskejä';

$GLOBALS["lang"]['Hide Audit Window'] = 'Piilota tarkastusikkuna';

$GLOBALS["lang"]['high'] = 'Korkea';

$GLOBALS["lang"]['High'] = 'Korkea';

$GLOBALS["lang"]['High Availability'] = 'Korkea saatavuus';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Pyhä istuin (Vatikaanivaltio)';

$GLOBALS["lang"]['Home'] = 'Alkuun';

$GLOBALS["lang"]['home'] = 'Alkuun';

$GLOBALS["lang"]['Home Area Network'] = 'Kotialueverkko';

$GLOBALS["lang"]['Home area network'] = 'Kotialueen verkko';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Palvelin';

$GLOBALS["lang"]['Host'] = 'Palvelin';

$GLOBALS["lang"]['hostname'] = 'Verkkonimi';

$GLOBALS["lang"]['Hostname'] = 'Verkkonimi';

$GLOBALS["lang"]['hour'] = 'Tunti';

$GLOBALS["lang"]['Hour'] = 'Tunti';

$GLOBALS["lang"]['How Does It Work?'] = 'Miten se toimii?';

$GLOBALS["lang"]['How Does it Work?'] = 'Miten se toimii?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Kauanko se kestää?';

$GLOBALS["lang"]['How and Why is'] = 'Miten ja miksi?';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Miten ja miksi Open-AudIT on turvallisempi';

$GLOBALS["lang"]['How do they work?'] = 'Miten ne toimivat?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Miten laite Seed Discovery löytää tunnetut IP?';

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

$GLOBALS["lang"]['Hungarian'] = 'Unkari';

$GLOBALS["lang"]['Hungary'] = 'Unkari';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperkierre';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperkierre';

$GLOBALS["lang"]['I have read the EULA.'] = 'Olen lukenut EULA:n.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Toivon, että tämä viesti on lievittänyt huolia, joita sinulla on Open-AudIT ja turvallisuus. Jos teillä on kysyttävää, älkää epäröikö ottaa yhteyttä meihin täällä FirstWavessa. Keskustelemme aina mielellämme huolistanne ja tarpeistanne. Ja ehkä jos kysymys ei ole jotain olen käsitellyt täällä, voin lisätä sen täällä tuleville käyttäjille';

$GLOBALS["lang"]['id'] = 'Tunniste';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'TÄRKEÄÄ';

$GLOBALS["lang"]['INPUTS'] = 'TUTKIMUKSET';

$GLOBALS["lang"]['IOS Version'] = 'IOS-versio';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP- osoite';

$GLOBALS["lang"]['IP Addresses'] = 'IP-osoitteet';

$GLOBALS["lang"]['IP Last Seen'] = 'IP- viimeksi nähty';

$GLOBALS["lang"]['IP Set By'] = 'IP- asetus';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

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

$GLOBALS["lang"]['Identify information assets'] = 'Tunnistetiedot';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Erittele asianomaiset ja niiden vaatimukset';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Määritellään keskeiset sidosryhmät ja annetaan tehtäviä';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Tunnista ne laitteet, jotka ovat esimerkillisiä, tai <i>kultainen kuva</i> Haluat verrata vastaavia laitteita.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Turvallisuusriskien tunnistaminen ja arviointi';

$GLOBALS["lang"]['If'] = 'Jos';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Jos laite löydetään erikseen käyttämällä <i>Etsi laite</i> linkki laitteen tiedot sivulla, tarkistamme ensin, onko tämä laite löydetty aiemmin (Discovery) ja jos on, käytä löydön vaihtoehtoja kyseisen skannauksen. Jos sitä ei ole aiemmin löydetty, palaamme asetuskohteen löydökseen_oletus_scan_valitse asetukset.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Jos uusi Orga luodaan, LDAP-ryhmän nimi on automaattisesti peräisin nimestä. Esimerkiksi, jos uusi Org on luotu ja on nimetty Test, vastaava LDAP ryhmä on nimeltään open-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Jos portti reagoi suodatettu, pitäisikö meidän pitää se saatavilla.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Jos satama vastaa avoimella suodatetulla, pitäisikö meidän katsoa sen olevan saatavilla?';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Jos etälaitetta ei ole Open-AudIT-valituissa laitteissa, poistamme sen ulkoisesta järjestelmästä.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Jos Open-AudIT-laitetta on muutettu, meidän pitäisi päivittää ulkoinen järjestelmä.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Jos Open-AudIT-laite ei ole ulkoisessa järjestelmässä, meidän pitäisi luoda se.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Jos agentti ilmoittaa IP:n olevan tässä aliverkossa, suorita toimet.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Jos jokin näistä (samanlainen, ei välilyöntejä) porteista havaitaan, oleta SSH:n käyttävän niitä ja käyttävän niitä tilintarkastukseen. Ei tarvitse lisätä tätä porttia Custom TCP-portteihin - se lisätään automaattisesti.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Jos käyttäjää ei ole määritelty, oletus on =. Ominaisuudet pitäisi olla täysin pätevä - eli laitteet.hostname (ei vain isäntänimi).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Jos arvoa ei ole, anna tämä arvo. EG: for system.nmis_group / configuration. ryhmä käytämme';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Jos valittu, sinulla on JSON-joukko erityisiä laite sarakkeita, jotka käyttäjä on valinnut nähtäväksi, muu kuin asetus oletus.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Jos OS-perhe (kuten laite on ilmoittanut) sisältää tämän kohteen, anna.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Jos Open-AudIT-palvelimella on Collectors raportoimassa sille, annetaan ylimääräinen pudotus. Voit valita tämän määrittääksesi, mikä Keräilijä tehtävä pitäisi suorittaa. Vain Discovery tehtäviä tuetaan Collectors.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Jos välittäjä OS-perhe (tapaus tunteeton) sisältää tämän merkkijonon, suorittaa toimia.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Jos binääriä ei löydy kummastakaan näistä paikoista, varoitusviesti näytetään asentajassa.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Jos seuraavat edellytykset täyttyvät:<br/><ul><li>a Rooli on osoitettu ad_group</li><li>an Orgalla on osoitettu ad_group</li><li>LDAP Palvelin on käyttää_roles asetettu y</li><li>käyttäjä on olemassa LDAP (olipa se aktiivinen Directory tai OpenLDAP) ja on osoitettu ad_groups</li></ul>Että käyttäjä voi kirjautua Open-AudIT ilman tiliä Open-AudIT tarvitsee luoda. Open-AudIT tiedustelee kyseessä olevaa LDAP:tä ja jos käyttäjä on vaadituissa ryhmissä, mutta ei Open-AudIT:ssä, heidän käyttäjäattribuuttinsa (nimi, koko nimi, sähköposti, roolit, orgit jne.) Open-AudIT:ssä tulevat automaattisesti asutuiksi ja kirjautuvat sisään.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Jos paikallinen kenttä on tosi (bool) tai y (string) tai Y (string) tai 1 (integer), aseta ulkoiset tiedot 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Jos paikallinen kenttä on tosi (bool) tai y (string) tai Y (string) tai 1 (integer), aseta ulkoiset tiedot y:lle.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Jos ensisijainen IP (laitteen ilmoittamana) on tässä aliverkossa, syötä.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Jos käyttäjätiliä ei ole olemassa Open-AudIT ja <code>use_authorisation</code> on asetettu, käyttäjä luodaan. Jos se on olemassa, lisätään tiedot, kuten sähköposti, koko nimi jne.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Jos käyttäjällä ei ole voimassa olevia tietoja tai ei ole vähintään yhtä Open-AudIT-roolia ja -ryhmää (käyttäessä <code>use_authorisation</code>) Open-AudIT varautuu paikallisten Open-AudIT-käyttäjätietojen käyttöön ja yrittää tunnistaa ja valtuuttaa siellä. Jos se ei onnistu, käyttäjältä evätään pääsy.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Jos käyttäjä kirjautuu Open-AudITiin, hänellä ei ole pääsyä LDAP-hakuun, voit käyttää toista tiliä, jolla on tämä pääsy.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Jos käyttäjällä ei ole pääsyä Open-AudIT-hakuun, voit käyttää toista tiliä, jolla on tämä pääsy. Käytä dn_accountia ja dn_ salasanaa määrittääksesi tämän.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Jos arvoa ei ole asetettu, käytetään nykyistä aikaleimaa.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Jos arvo on asetettu, käytetään aikaleiman arvoa.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Jos tämä muutos ei toimi, kaikki ei mene hukkaan. Olemme lisänneet asetuskohteen (aseta n oletuksena, joten se ei käytä tätä uutta valintaa pois ruudusta) kutsutaan dge_use_org_id_match. Jos muutat sen y:ksi, löydöksen kautta laitteeseen osoitettua OrgID:tä käytetään asiaankuuluvissa ottelusäännöissä.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Jos näin monta minuuttia (tai enemmän) on kulunut palvelimen viimeksi nähnyt laitteen, läpäise.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Jos tämä useita tai useampia minuutteja on kulunut siitä, kun laite otti yhteyttä palvelimeen, suorittaa toimia.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Jos näin tapahtuu sitten ongelma näet liittyy taulukon ohjaus käytetään verkkosivuilla. Se vain tallentaa muistiin nykyisen sivun valintaruutujen tilan. Jos teet valintoja, sivu eteenpäin / takaisin että valinnat menetetään. Voit kuitenkin saavuttaa haluamasi laajentamalla kunkin sivun laitteiden määrää. Ylhäällä vasemmassa kulmassa on pudotus-down-merkittyjä levyjä sivulla. Käytä tätä laajentaaksesi näyttöjen määrää kunnes näet kaiken haluat valita Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Jos havaitsemme San Management -ohjelmiston, meidän pitäisi etsiä se ennen kyselyä.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Jos lisäät sijaintityypin, lisää kuvakkeet';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Jos lisäät laitetyypin, näyttääksesi siihen liittyvän kuvakkeen sinun on käsin kopioitava .svg-muodossa oleva tiedosto hakemistoon';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Jos olet tuettu FirstWave asiakas, pari kohdetta helpottaa. Avaa tukilippu FirstWaven kanssa ja liitä lokitiedosto. Myös tuloste tuki-painikkeen yläoikealla';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Jos olet tuettu asiakas ja avaa tukilippu FirstWave, liitä nämä tiedostot.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Jos sinulla on ongelmia Google Mapsin sovellusliittymän avaimien kanssa tai yrityksesi ei voi luoda Google Mapsin sovellusliittymän avaimia, ota yhteyttä FirstWaven tukitiimiin.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Jos olet Windowsissa tai NMIS-palvelimesi on etäinen, sinun täytyy antaa URL, käyttäjätunnus ja salasana päästäksesi palvelimelle.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Jos sinulla on kunnollinen laajakaista- tai eetteriyhteys, suosittelen aina käyttämään -T4 (Aggressiivinen). Jotkut rakastavat -T5 (Hullu) vaikka se on liian aggressiivinen minun makuuni. Ihmiset joskus määritellä -T2 (Polite), koska he ajattelevat, että se on vähemmän todennäköisesti kaatua isännät tai koska he pitävät itseään kohteliaita yleensä. He eivät usein ymmärrä, kuinka hidas -T2 todella on. Skannaus voi kestää kymmenen kertaa kauemmin kuin oletusskannaus. Koneen kaatumiset ja kaistanleveyden ongelmat ovat harvinaisia oletus ajoituksen vaihtoehtoja -T3 (Normal) ja niin yleensä suosittelen, että varovaisia skannereita. Versiotunnistuksen jättäminen pois on paljon tehokkaampaa kuin ajoitusarvojen pelaaminen näiden ongelmien vähentämiseksi.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Jos käytät RedHat- tai Centos-järjestelmää ja olet päivittänyt Nmapin, nollaa SUID binäärillä';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Jos käytät Open-AudIT- palvelinta Linuxissa, tämä ei vaikuta sinuun.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Jos käytät Open-AudIT-palvelinta Windowsissa tai jos NMIS-palvelimesi ei ole Open-AudIT-palvelimellasi (joissakin Linux-asennuksessa), sinun on toimitettava käyttötunnukset ja URL kauko-ohjaimeen NMIS - mutta siinä kaikki! Kyllä - NMIS:n ja Open-AudIT:n väliset integraatiot toimivat jopa Windows-pohjaisen Open-AudIT:n kanssa nyt!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Jos valitset Collector, se on tarkoitus suorittaa seuraavan 5 minuutin raja.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Jos asetat tavallisesti laitteet_asigned_to_org ja asetus on käytössä, OrgID käytetään edelleen tarkentaa ottelu.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Jos et tavallisesti aseta laitteita_asigned_to_org, niin sillä ei ole vaikutusta. Tarkistamme vain käyttämällä OrgID jos se on asetettu löytö (tai manuaalisesti audit skripti) ja käytössä asetukset.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Jos otat asetuskohteen käyttöön, käytä löytöä määrittääksesi Orgin ja sen jälkeen muuttaaksesi laitteen OrgID-tunnisteen löydön jälkeen, sinulla on todennäköisesti uusi laite luotuna seuraavan kerran kun löytö tapahtuu. Tässä tapauksessa sinun pitäisi luultavasti vain unset devices_asigned_to_org ennen seuraavien löytöjen suorittamista. Tämä johtuu siitä (tässä tapauksessa) olet kertonut Open-AudIT <i>nämä laitteet tämän löydön kuuluvat Org X<i>, mutta sitten muutti Org laitteen. Olet muuttanut tallennettujen laitteiden tietoja. Tässä tapauksessa - ei ole enää laitetta kuuluu Org X, joten luomme uuden.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Jos sinulla on Anti-Virus-ohjelmisto käynnissä, on välttämätöntä, että Opmantek (omkd), Apache (apache2) ja MySQL (mysql) voivat aloittaa ja ajaa automaattisesti. Näitä palveluja käyttävät Open-AudIT. Sinun pitäisi tehdä tämä vain kerran. Jos Anti-Virus-ohjelmasi kehottaa sinua Open-AudITista, lähetä viesti foorumeille tai lähetä sähköpostia tukemaan Anti-Virus-ohjelmistosi nimeä ja versiota.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Jos sinulla on työvaltuudet, voit odottaa mahdollisimman paljon tietoa.<br/><br/>On selvää, että paras tapa käyttää Open-AudIT on olla työtunnuksia löydettävien laitteiden (olivatpa ne WMI, SSH, tai SNMP-tunnuksia).<br/><br/>Meillä on myös sivu tilintarkastus ilman valtuuksia.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Jos sisällytät kenttään\"id\" <strong>sekä</strong> asettaa sen numero, että kohde päivitetään eikä luoda.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Jos haluat määrittää aktiivisen kansion käytön, voit yleensä käyttää esimerkiksi <code>cn=Users,dc=your,dc=domain,dc=com</code> Sinun <code>base_dn</code>. Ei ole tarvetta asettaa <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Jos sinun täytyy määrittää OpenLDAP-yhteys käyttäjillesi ja tietty käyttäjä käyttää DN on yleensä <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> Sitten sinun pitäisi asettaa <code>base_dn</code> - <code>dc=your,dc=domain,dc=com</code> sekä <code>user_dn</code> - <code>uid=@username@@domain,cn=People</code>. Erityissanat <code>@username</code> sekä <code>@domain</code> korvataan käyttäjän kirjautumistiedoilla kirjautumissivulla.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Jos suoritat löydön aliverkolla, johon Palvelin (tai Collector) on asennettu suoraan, voit odottaa seuraavia vastaavia laitteita';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Jos suoritat löydön aliverkolla, johon palvelinta (tai Collectoria) ei ole asennettu suoraan, voit odottaa seuraavia vastattavia laitteita varten';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Jos valitset List-tyypin, ilmestyy lisäkenttä nimeltä Arvot. Sinun pitäisi laittaa pilkku erotettu luettelo valittavissa olevista arvoista tähän. Nämä näkyvät pudotusruudussa aina kun kenttää muokataan.';

$GLOBALS["lang"]['If you set the values for'] = 'Jos asetat arvot';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Jos haluat pakottaa agenttisi käyttämään tiettyä konfiguraatiota, voit antaa alla olevan agenttien tunnisteen (vaihda $id agenttien numerolla). Kun tämä agentti on asennettu, se kirjautuu sisään severrer ja <strong>Ainoastaan</strong> tarkistaa, että yksi henkilö Agenttien merkinnät ominaisuudet (testit ja toimet). Tämä voi olla hyödyllistä, jos olet MSP - luoda Agents merkintä tietylle asiakkaalle ja niiden laitteiden kaikki käyttää tätä merkintä, joka antaa ne Org ja sijainti.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Jos haluat kaivaa ja muokata integraatio, klikkaa Advanced-painiketta (ja yritä olla ylitse!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Jos haluat ajaa Discovery ulkoisesti varustettu laite, valitse vaihtoehto ja kun Integration luodaan, niin s Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Jos haluat käyttää komentosarjan ulkopuolella Discovery olemme luoneet toisen päätepisteen nimeltä <i>skriptit</i>. Ks. asiakirjat';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Jos käyttäjälläsi ei ole <i>Suorita hallinnoijana</i> oikeudet, he voivat edelleen ladata agentti (ensimmäinen komento edellä) ja suorittaa sen toimittaa tarkastuksen alla. Se on kertaluonteinen tarkastus ilman agenttia.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Jätä huomiotta virheellinen SSL';

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

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Toteuta valitut tarkastukset ja menettelyt';

$GLOBALS["lang"]['Implementation'] = 'Täytäntöönpano';

$GLOBALS["lang"]['implementation_notes'] = 'Täytäntöönpano Huomautuksia';

$GLOBALS["lang"]['Implementation Notes'] = 'Täytäntöönpano Huomautuksia';

$GLOBALS["lang"]['Import'] = 'Tuo';

$GLOBALS["lang"]['Import Example Data'] = 'Tuo esimerkkitiedot';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Tuo useita {kokoelma} käyttäen CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Parannusmahdollisuudet';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Parannusmahdollisuudet';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'parantaa liiketoiminnan jatkuvuutta ja kestävyyttä';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Toisessa välilehdessä tai ikkunassa mene OKTA-konsoliisi ja napsauta <i>Luo sovellusintegrointi</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Toisen välilehden tai ikkunan kirjautuminen';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Oman mielipiteeni mukaan paras tapa löytää ja tarkastaa kaikki verkon kohteet on seed Discovery jokaiselle aliverkolle, joka rajoittuu aliverkkoon (käyttäen valtakirjoja). Seed Discoveries käyttää kytkintä, reititintä ja tietokonetta MAC Osoitetaulukot olla missaamatta yhden laitteen. Jos se on liitetty verkkoon ja käyttää TCP / IP, kytkimen / reitittimen / tietokoneen on tiedettävä, että se on olemassa - juuri niin TCP / IP toimii. Yhdistä, että mukautettu TCP ja / tai UDP portit ja sinun pitäisi sitten pystyä määrittämään laitteen tyyppi samoin. Mutta se on vain oma suosikkini.';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Jotta Open-AudIT voisi soveltaa käyttöoikeuksia kohteisiin, valtuutamme käyttäjän <code>WHERE @filter</code>. Jos et käytä tätä muotoa, kyselyCreateForm heittää varoituksen. Vain käyttäjät, joilla on Admin rooli, saavat luoda kyselyjä, jotka puuttuvat tästä ominaisuudesta ja jopa silloin, vasta sen jälkeen kun asetus kohta <i>advanced_queries</i> on otettu käyttöön.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Google Mapsin mahdollistamiseksi tarvitset Google API -avaimen seuraa tätä linkkiä ja kirjaudu sisään Google-tili';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Jotta voit käyttää Azure Rest API, sinun täytyy luoda Azure Active Directory sovellus, jota käytetään todentamiseen.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Jotta voit käyttää tätä toimintoa, se on otettava käyttöön asetukset - napsauta';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Luettelossa (comma seperated)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Jos <code>in</code> sekä <code>notin</code>, sinun pitäisi liittää arvot pyörösuluissa ja erottaa ne pilkulla (vain pilkku, ei pilkku, sitten tilaa).<br/><br/>Näiden toimijoiden avulla voit suodattaa melko kattavasti.<br/><br/>Kun lisäät tietoja ja suodatat useita sarakkeita, nämä sarakkeet yhdistetään <strong>JA</strong>. Et voi suodattaa käyttämällä <strong>TAI</strong> kunto. Mukaan lukien <code>notin</code>, sinun pitäisi saada useimmat haut toimimaan. Ja niille, jotka todella vaativat kannattamattomia ja monimutkaisia valintoja, voit aina kirjoittaa todellinen kysely.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Jos säilytämme useita kenttiä (yleensä JSON-muodossa) BIGTEXT MySQL-kentässä (esim. tiedot). tunnukset - valtakirjataulun tunnussarake), sinun tulisi käyttää muotoa';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Navigoi komentokehikkoon lataushakemistoon (todennäköisesti <code>cd Downloads</code>)';

$GLOBALS["lang"]['Inactive'] = 'Ei aktiivinen';

$GLOBALS["lang"]['Incomplete'] = 'Epätäydellinen';

$GLOBALS["lang"]['Index'] = 'Hakemisto';

$GLOBALS["lang"]['India'] = 'Intia';

$GLOBALS["lang"]['Indonesia'] = 'Indonesia';

$GLOBALS["lang"]['Indonesian'] = 'Indonesia';

$GLOBALS["lang"]['Info'] = 'Tietoja';

$GLOBALS["lang"]['Information only.'] = 'Vain tietoa.';

$GLOBALS["lang"]['Informational'] = 'Tietoa';

$GLOBALS["lang"]['initial_size'] = 'Alkukoko';

$GLOBALS["lang"]['Initial Size'] = 'Alkukoko';

$GLOBALS["lang"]['Initial login credentials are'] = 'Alkukirjautumistiedot ovat';

$GLOBALS["lang"]['Initiation'] = 'Vireillepano';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Syöte';

$GLOBALS["lang"]['Input Type'] = 'Syöttötyyppi';

$GLOBALS["lang"]['inputs'] = 'Panokset';

$GLOBALS["lang"]['Inputs'] = 'Panokset';

$GLOBALS["lang"]['Insane'] = 'Hullu';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Lisää uusi {kokoelma} -merkintä.';

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

$GLOBALS["lang"]['Install Support'] = 'Asenna tuki';

$GLOBALS["lang"]['installed_by'] = 'Asennettu';

$GLOBALS["lang"]['Installed By'] = 'Asennettu';

$GLOBALS["lang"]['installed_on'] = 'Asennettu';

$GLOBALS["lang"]['Installed On'] = 'Asennettu';

$GLOBALS["lang"]['Installing'] = 'Asentaminen';

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

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integraatiot voidaan ajoittaa halutulla tavalla. Tämä on jätetty käyttäjälle.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integraatiot voidaan ajoittaa kohti Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Vuorovaikutteiset pöytätaulut';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interaktiiviset kojelaudat tarjoavat välitöntä näkyvyyttä verkkoinventaarion tilaan, jolloin IT-tiimit voivat havaita uudet laitteet ja epätavallisen laitteen käyttäytymisen yhdellä silmäyksellä.';

$GLOBALS["lang"]['interface'] = 'Liitäntä';

$GLOBALS["lang"]['Interface'] = 'Liitäntä';

$GLOBALS["lang"]['interface_id'] = 'Liitäntätunnus';

$GLOBALS["lang"]['Interface ID'] = 'Liitäntätunnus';

$GLOBALS["lang"]['interface_type'] = 'Liitäntätyyppi';

$GLOBALS["lang"]['Interface Type'] = 'Liitäntätyyppi';

$GLOBALS["lang"]['Internal'] = 'Sisäinen';

$GLOBALS["lang"]['Internal Audit'] = 'Sisäinen tarkastus';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Sisäinen tarkastus ja tarkastus';

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

$GLOBALS["lang"]['Irish'] = 'Irlanti';

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

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Se <i>Se vain toimii.</i> NMIS:n kanssa';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Se on saatavilla Menussa -> Apua ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'On tärkeää huomata, että kun Open-AudIT määrittää ottelun kaikki ominaisuudet asetettu <i>y</i> on vastattava tarkasti (eikä oltava tyhjä), jotta Open-AudIT voi määrittää, että löydetty laite vastaa laitetta jo tietokannassa. Jos mitään merkittyjä ominaisuuksia <i>y</i> ottelu, sitten luodaan uusi laitemerkintä, joka voi johtaa päällekkäisiin laitteen merkinnät. Jos ominaisuuksia kopioidaan, esimerkiksi dbus_id kopioidaan VM-kloonin aikana, olemassa oleva laite voi väärinkirjoittaa/päivittää sen sijaan, että luodaan uusi merkintä, josta puuttuu laitteita.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Ei ole harvinaista, että tietyssä organisaatiossa on päällekkäisiä osoitetiloja. Ei ihanteellista, mutta ei epätavallista.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'On hyvin yleistä, että toisen tason emolevyvalmistajat eivät aseta tätä, asettaa se kaikille <i>0</i>s tai jopa kaikki <i>F</i>a.';

$GLOBALS["lang"]['Italian'] = 'Italia';

$GLOBALS["lang"]['Italy'] = 'Italia';

$GLOBALS["lang"]['Items not in Baseline'] = 'Erät, jotka eivät sisälly lähtötilanteeseen';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON tuo';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika';

$GLOBALS["lang"]['January'] = 'Tammikuu';

$GLOBALS["lang"]['Japan'] = 'Japani';

$GLOBALS["lang"]['Japanese'] = 'Japani';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordania';

$GLOBALS["lang"]['July'] = 'Heinäkuu';

$GLOBALS["lang"]['June'] = 'Kesäkuu';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakstan';

$GLOBALS["lang"]['Kenya'] = 'Kenia';

$GLOBALS["lang"]['kernel_version'] = 'Ytimen versio';

$GLOBALS["lang"]['Kernel Version'] = 'Ytimen versio';

$GLOBALS["lang"]['Key'] = 'Avain';

$GLOBALS["lang"]['Key Components'] = 'Avainkomponentit';

$GLOBALS["lang"]['Key Password (optional)'] = 'Avainsalasana (valinnainen)';

$GLOBALS["lang"]['keys'] = 'Avaimet';

$GLOBALS["lang"]['Keys'] = 'Avaimet';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Korean'] = 'korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirgisia';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgisian tasavalta';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP-ryhmä';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP etsittiin tätä käyttäjää ja heidän tili löytyi.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP etsittiin tätä käyttäjää eikä heidän tiliään löydetty. Tarkista LDAP-palvelinlokit. Käyttäjätunnukset ovat toimineet, mutta käyttäjää ei löydetty. Tarkista myös, että olet määritellyt oikean Base DN -attribuutin luodessasi LDAP-palvelimen Open-AudITissa.';

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

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Viimeinen on WMI. Windows kuten Linux, käyttäjä Administrator-tason pääsy on suositeltavaa (ks. Target Client Configuration on the wiki).';

$GLOBALS["lang"]['lastModified'] = 'LastMkodifioitu';

$GLOBALS["lang"]['LastModified'] = 'LastMkodifioitu';

$GLOBALS["lang"]['latitude'] = 'Pituusaste';

$GLOBALS["lang"]['Latitude'] = 'Pituusaste';

$GLOBALS["lang"]['Latvia'] = 'Latvia';

$GLOBALS["lang"]['Latvian'] = 'Latvia';

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

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Asetetaan kirjautuminen vianetsintään. Kopioi tiedosto:';

$GLOBALS["lang"]['level'] = 'Taso';

$GLOBALS["lang"]['Level'] = 'Taso';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Hyödyntämiseen tarvittavien etuoikeuksien taso (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Kirjastot (eli koodi, että toinen ohjelma voisi sisältää). Nämä ovat tyypillisesti kohteita, kuten Wordpress laajennukset, drupal laajennukset, node.js kirjastot, Android / iPhone / Windows kirjastot, python kirjastot, jne.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libya';

$GLOBALS["lang"]['License'] = 'Lisenssi';

$GLOBALS["lang"]['License Key'] = 'Lisenssin avain';

$GLOBALS["lang"]['License Required'] = 'Vaadittu lisenssi';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Lisenssin saaneet käyttäjät voivat vapaasti lisätä tai muuttaa sääntöjä haluamallasi tavalla. Jos sinulla on SNMP OID -laite, joka ei vastaa jo tiedostossa olevaa mallia, voit lisätä sen helposti. Ei enää odotella, että saamme laastarin ja lisäämme sen koodipohjaan.<br/><br/>Kun luot sääntöjen merkinnän, sinun täytyy antaa nimi ja luettelo syötteistä ja tuotoksista. Tulot ja tuotokset tallennetaan JSON-järjestelminä tietokantaan.<br/><br/>Panoksissa on taulukko ja attribuutti, operaattori ja arvo. Kun täytät ehto, se toimii näin: Jos $ table . $attribute $operator $ arvo sitten soveltaa lähtöjä.<br/><br/>Esimerkkisääntö SNMP OID ja asettaa malli on alla.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Lisenssit';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Kuten';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Kuten useimmat muut ominaisuudet, Lisäkentät voidaan irtotavarana muokata. Käytä Bulk Edit funktio kuten normaalisti ja näet Lisäkentät ovat saatavilla syöte.';

$GLOBALS["lang"]['Like versus Equals'] = 'Kuten vastaan Equals';

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

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Line kaaviot on paluupäivä tai my_date, kuvaus tai minun_kuvaus ja laskea.';

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

$GLOBALS["lang"]['Linux Packages'] = 'Linux-paketit';

$GLOBALS["lang"]['List'] = 'Luettelo';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Listaa kaikki NMAP-portit, protokollat ja ohjelmat jokaiselle laitteelle';

$GLOBALS["lang"]['List Devices'] = 'Luettelo laitteista';

$GLOBALS["lang"]['List Discoveries'] = 'Luettelo löydöistä';

$GLOBALS["lang"]['list_table_format'] = 'Luettelo taulukon muodosta';

$GLOBALS["lang"]['List Table Format'] = 'Luettelo taulukon muodosta';

$GLOBALS["lang"]['List Tables'] = 'Luettelotaulukot';

$GLOBALS["lang"]['Lithuania'] = 'Liettua';

$GLOBALS["lang"]['Lithuanian'] = 'Liettua';

$GLOBALS["lang"]['Load Balancing'] = 'Lastaustasapainotus';

$GLOBALS["lang"]['Local'] = 'Paikallinen';

$GLOBALS["lang"]['Local Area Network'] = 'Paikallisverkko';

$GLOBALS["lang"]['local_port'] = 'Paikallinen satama';

$GLOBALS["lang"]['Local Port'] = 'Paikallinen satama';

$GLOBALS["lang"]['Local area network'] = 'Paikallisverkko';

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

$GLOBALS["lang"]['Location Name'] = 'Sijaintinimi';

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

$GLOBALS["lang"]['Locations'] = 'Sijainti';

$GLOBALS["lang"]['Locations in this'] = 'Sijainti tässä';

$GLOBALS["lang"]['log'] = 'loki';

$GLOBALS["lang"]['Log'] = 'loki';

$GLOBALS["lang"]['log_format'] = 'Lokimuoto';

$GLOBALS["lang"]['Log Format'] = 'Lokimuoto';

$GLOBALS["lang"]['Log Line'] = 'Lokirivi';

$GLOBALS["lang"]['log_path'] = 'Lokipolku';

$GLOBALS["lang"]['Log Path'] = 'Lokipolku';

$GLOBALS["lang"]['log_rotation'] = 'Lokin pyöriminen';

$GLOBALS["lang"]['Log Rotation'] = 'Lokin pyöriminen';

$GLOBALS["lang"]['log_status'] = 'Lokin tila';

$GLOBALS["lang"]['Log Status'] = 'Lokin tila';

$GLOBALS["lang"]['Logging in'] = 'Kirjautuminen sisään';

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

$GLOBALS["lang"]['Lowercase Hostname'] = 'Pienikokoinen palvelinnimi';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC-osoite';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Valmistaja';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac- osoite';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS-paketit';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Säilytä tiedot riskinarvioinnista ja hoidoista';

$GLOBALS["lang"]['maintenance_expires'] = 'Huolto vanhenee';

$GLOBALS["lang"]['Maintenance Expires'] = 'Huolto vanhenee';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Tee oletustaulustani';

$GLOBALS["lang"]['Make this install a Collector'] = 'Tee tästä keräilijä';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malaiji';

$GLOBALS["lang"]['Malaysia'] = 'Malesia';

$GLOBALS["lang"]['Maldives'] = 'Malediivit';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Hallitse';

$GLOBALS["lang"]['Manage Licenses'] = 'Hallitse käyttölupia';

$GLOBALS["lang"]['Manage in NMIS'] = 'Hallitse NMIS:ssä';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Tapahtumien ja vaatimustenvastaisuuksien hallinta';

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

$GLOBALS["lang"]['Match Order'] = 'Ottelujärjestys';

$GLOBALS["lang"]['Match Process'] = 'Sovita prosessi';

$GLOBALS["lang"]['match_string'] = 'Ottelumerkkijono';

$GLOBALS["lang"]['Match String'] = 'Ottelumerkkijono';

$GLOBALS["lang"]['Matching Attribute'] = 'Vastaava attribuutti';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Matching Devices - mukaan lukien OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Vastaavat Linux-laitteet';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Täsmäytys tehdään seuraavassa järjestyksessä:';

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

$GLOBALS["lang"]['Metropolitan area network'] = 'Suurkaupunkialueverkko';

$GLOBALS["lang"]['Mexico'] = 'Meksiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikroaika';

$GLOBALS["lang"]['Microtime'] = 'Mikroaika';

$GLOBALS["lang"]['minute'] = 'Minuutti';

$GLOBALS["lang"]['Minute'] = 'Minuutti';

$GLOBALS["lang"]['Minutes'] = 'Pöytäkirja';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Pöytäkirja Koska viimeinen tarkastus ovat suurempia kuin';

$GLOBALS["lang"]['model'] = 'Malli';

$GLOBALS["lang"]['Model'] = 'Malli';

$GLOBALS["lang"]['model_family'] = 'Malliperhe';

$GLOBALS["lang"]['Model Family'] = 'Malliperhe';

$GLOBALS["lang"]['Modified'] = 'Muokattu';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Muokkaa olemassa olevaa komentosarjaa';

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

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Tarkkaile ja mittaa ISMS-järjestelmän suorituskykyä';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Kuukausi';

$GLOBALS["lang"]['Month'] = 'Kuukausi';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Lisätietoja';

$GLOBALS["lang"]['More Secure'] = 'Turvallisempi';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Tarkempia SQL voi käyttää ryhmitellä attribuutteja alueella. Alla näkyy SQL laitteiden ei nähdä piirakka kaavio ryhmitelty viime nähty päivämäärän vaihteluvälejä.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Lisätietoja vianetsinnän vianetsinnästä löytyy hyödyllisestä Stack Overflow -langasta';

$GLOBALS["lang"]['Morocco'] = 'Marokko';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Todennäköisesti Windowsin palomuuri (tai kolmannen osapuolen palomuuri) kieltää yhteyden yritys.<br/><br/>Kirjaudu kohde Windows koneeseen ja tarkista palomuurin asetukset.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Useimmat Open-AudIT on lisensoitu GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Emolevy';

$GLOBALS["lang"]['Motherboard'] = 'Emolevy';

$GLOBALS["lang"]['mount_point'] = 'Liitospiste';

$GLOBALS["lang"]['Mount Point'] = 'Liitospiste';

$GLOBALS["lang"]['mount_type'] = 'Asennustyyppi';

$GLOBALS["lang"]['Mount Type'] = 'Asennustyyppi';

$GLOBALS["lang"]['Mozambique'] = 'Mosambik';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Täytyy vastata Pingiin. Jos valittu, Nmap yrittää lähettää ja kuunnella ICMP vastaus. Jos laite ei reagoi, skannausta ei enää tapahdu.<br/>Aiemmin laitteen ei tarvinnut vastata ping Open-AudIT jatkaa skannausta.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Täytyy vastata Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Antivirukseni kehottaa minua kieltämään/päästämään asioita';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Aikani loppuu Open-AudITissa.';

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

$GLOBALS["lang"]['NOTE'] = 'Huomautus';

$GLOBALS["lang"]['NOTE #2'] = 'Huomautus #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'HUOMAUTUS - Lisätietoja DateTime formaatteja, katso';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'HUOMAUTUS - Jos pyydät ladattua CSV-, XML- tai JSON-muotoa (joko yksi todistus tai koko kokoelma), lähetetään varsinaiset todistustiedot. Ei salattua merkkijonoa, varsinaista käyttäjätunnusta, salasanaa, yhteisön merkkijonoa jne. Kaikki arkaluonteiset tiedot eivät näy web-käyttöliittymässä, mutta ne ovat saatavilla muissa muodoissa. Jotta tämä vienti estettäisiin, on käytettävissä asetuskohde nimeltään salauksen purku.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'HUOMAUTUS - Toimitettujen tietojen kiharasulkuja on käytettävä sellaisena kuin ne ovat (ei vaihdeta muiden esimerkkien mukaisesti).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'HUOMAUTUS - Voit estää alla olevien tekstitunnusten näyttämisen asettamalla asetuskohteen <code>decrypt_credentials</code> - <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nimi';

$GLOBALS["lang"]['Name'] = 'Nimi';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Nimi, jonka annat tälle kentälle. Ihannetapauksessa sen pitäisi olla ainutlaatuinen.';

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

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat-satamat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports käyttää yhdistelmä portin numero, protokolla ja ohjelma. Jos kaikki ovat läsnä, politiikka hyväksytään.';

$GLOBALS["lang"]['Network'] = 'Verkko';

$GLOBALS["lang"]['network_address'] = 'Verkkoosoite';

$GLOBALS["lang"]['Network Address'] = 'Verkkoosoite';

$GLOBALS["lang"]['Network Discovery'] = 'Verkkohaku';

$GLOBALS["lang"]['network_domain'] = 'Verkkoalue';

$GLOBALS["lang"]['Network Domain'] = 'Verkkoalue';

$GLOBALS["lang"]['Network Types'] = 'Verkkotyypit';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Verkkotyyppi on asetettu oletuksena paikallisverkkoon, mutta käyttäjä voi muuttaa sitä parhaaksi katsomallaan tavalla. Tuetut tyypit ovat alla (Wikipedian ansiosta).<br/><br/>Verkostolle on ominaista sen fyysinen kapasiteetti tai sen organisaatiollinen tarkoitus. Verkon käyttö, mukaan lukien käyttöoikeudet ja käyttöoikeudet, vaihtelee vastaavasti.';

$GLOBALS["lang"]['networks'] = 'Verkostot';

$GLOBALS["lang"]['Networks'] = 'Verkostot';

$GLOBALS["lang"]['Networks Generated By'] = 'Luodut verkot';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Verkostot päivitetään jokaisella löydöksellä. Kohteita, kuten IPs käytettävissä ja IP Käytetty, sekä Gateways, DHCP ja DNS Servers lisätään löytyi.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Verkostot reagoivat eri tavalla riippuen siitä, miten ne on konfiguroitu. Jotkut reitittimet ja/tai palomuurit voivat vastata <i>puolesta</i> IP:t niiden rajapintojen toisella puolella Open-AudIT Server. On melko yleistä nähdä Nmap raportti luotain SNMP (UDP port 161) vastata avoimena. Tämä on harhaanjohtavaa, koska siinä IP:ssä ei ole laitetta, mutta se päätyy laitemerkintä tietokantaan. 99,9% ajasta, se ei ole Open-AudIT, eikä edes Nmap, vaan verkko aiheuttaa tämän ongelman. Nyt kun meillä on mahdollisuus käsitellä avoimia tai suljettuja satamia joko avoimina tai suljettuina, voimme poistaa suuren osan tästä sekaannuksesta. Yrityskäyttäjillä on jopa mahdollisuus muuttaa tätä löytökohtaisesti (enemmän kuin vain käyttämällä Medium (Classic) kohdetta, kuten edellä).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Verkostot, joissa käytetään CIDR Mask';

$GLOBALS["lang"]['New Building Name'] = 'Uusi rakennuksen nimi';

$GLOBALS["lang"]['New Caledonia'] = 'Uusi-Kaledonia';

$GLOBALS["lang"]['New Floor Name'] = 'Uusi kerroksen nimi';

$GLOBALS["lang"]['New Room Name'] = 'Uuden huoneen nimi';

$GLOBALS["lang"]['New Row Name'] = 'Uusi rivinimi';

$GLOBALS["lang"]['New Zealand'] = 'Uusi-Seelanti';

$GLOBALS["lang"]['News'] = 'Uutiset';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Uutiset tarkistaa- aina kun kirjaudut päivitettyjä kyselyitä & paketteja, konfigurointi suosituksia, julkaisuilmoituksia, blogikirjoituksia ja muuta.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Uutiset ovat tapamme pitää sinut ajan tasalla uusimmat korjaukset, ilmoitukset, kyselypäivitykset, ohjelmistoversiot ja paljon muuta.<br/><br/>Sinun ei tarvitse pitää päälle wiki tai tarkistaa uusia julkaisuja, voimme lähettää nämä sinulle!';

$GLOBALS["lang"]['next_hop'] = 'Seuraava Hop';

$GLOBALS["lang"]['Next Hop'] = 'Seuraava Hop';

$GLOBALS["lang"]['next_run'] = 'Seuraava';

$GLOBALS["lang"]['Next Run'] = 'Seuraava';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Seuraava <i>Luo oma sovellus</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Seuraavaksi klikkaa OK, sitten oikealla klikkaa Apache 2.4 palvelu ja napsauta Käynnistä uudelleen. Valmis!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Seuraava, oikealla klikkaa Apache2.4 palvelu ja valitse ominaisuudet, sitten klikkaa Loki välilehdessä.';

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

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap ei voi määrittää, onko portti auki, koska pakkaussuodatin estää sen luotaimia pääsemästä satamaan. Suodatus voisi olla omistettu palomuuri laite, reititin säännöt, tai isäntä-pohjainen palomuuri ohjelmisto. Nämä satamat turhauttavat hyökkääjiä, koska ne antavat niin vähän tietoa. Joskus ne vastaavat ICMP virheviesteihin, kuten tyyppi 3 koodi 13 (kohde tavoittamaton: viestintä hallinnollisesti kielletty), mutta suodattimet, jotka yksinkertaisesti pudottaa luotaimet vastaamatta ovat paljon yleisempiä. Tämä pakottaa Nmapin yrittämään uudelleen useita kertoja siltä varalta, että luotain putoaisi verkon ruuhkautumisen eikä suodatuksen vuoksi. Tämä hidastaa skannausta dramaattisesti.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Kartta asettaa satamat tähän tilaan, kun se ei pysty määrittämään, onko satama auki vai suodatettu. Tämä tapahtuu skannaustyypeille, joissa avoimet portit eivät vastaa. Responssin puute voi myös tarkoittaa sitä, että pakettisuodatin pudotti näytteenottimen tai sen aikaansaaman vasteen. Joten Nmap ei tiedä varmasti, onko portti auki vai suodatetaan. UDP, IP-protokolla, FIN, NULL ja Xmas-skannaukset luokittelevat portit näin.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Tämän linkitetyn sivun alareunassa on Nmap-aikatiedot';

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

$GLOBALS["lang"]['No devices are in the database.'] = 'Tietokannassa ei ole laitteita.';

$GLOBALS["lang"]['Node'] = 'Solmu';

$GLOBALS["lang"]['None'] = 'Ei ole';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolkin saari';

$GLOBALS["lang"]['Normal'] = 'Normaali';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Pohjois-Marianansaaret';

$GLOBALS["lang"]['Norway'] = 'Norja';

$GLOBALS["lang"]['Norwegian'] = 'Norja';

$GLOBALS["lang"]['Not Applicable'] = 'Ei oleellinen';

$GLOBALS["lang"]['Not Checked'] = 'Ei tarkastettu';

$GLOBALS["lang"]['Not Equals'] = 'Ei yhtä suuri';

$GLOBALS["lang"]['Not In'] = 'Ei sisällä';

$GLOBALS["lang"]['Not Like'] = 'Ei kuten';

$GLOBALS["lang"]['Not Set'] = 'Ei asetettu';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Jokainen tietokone ei onnistu täyttämään vertailuarvoa. Olemme nähneet joissakin tapauksissa epäonnistumisia testauksessa hallitsemattomista syistä. Lokit pitäisi auttaa sinua oikeaan suuntaan näitä kohteita.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Ei (comma seperated) -luettelossa';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Ei tavallisesti käytössä. Jos valittu, tämä edellyttää, että laitteessa on avoin portti (kuten skannausasetukset) katsotaan vastaaviksi. MAC-osoitetta, arp-vastetta tai ping-vastetta ei pidetä riittävänä vasteena. Hyödyllistä, jos Open-AudIT-palvelimen ja IP-kohteen välissä oleva reititin tai palomuuri vastaa IP:n puolesta oleviin porttiskannuksiin.';

$GLOBALS["lang"]['Note'] = 'Huomautus';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Huomautus - Vanhemman valitseminen tarjoaa automaattisesti pääsyn lastensa luo (vaikka sitä ei näytetä tässä).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Huomaa, että 100 laite Enterprise lisenssi ei sisällä tukea.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Huomaa, saatat joutua tekemään komentosarjan kanssa';

$GLOBALS["lang"]['Notes'] = 'Huomautuksia';

$GLOBALS["lang"]['notes'] = 'Huomautuksia';

$GLOBALS["lang"]['Notice'] = 'Ilmoitus';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Marraskuu';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Nyt tilaajatunnus, klikkaa Kaikki Palvelut, Tilaukset ja kopioi se.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Nyt meidän täytyy antaa Azure Active Directory sovelluksen pääsy tilauksesi.<br/><br/>Klikkaa Resurssiryhmiä ja sitten resurssiryhmä haluat Azure Active Directory Application on pääsy.<br/><br/>Klikkaa Lisää. Tehtävän tulisi olla Osallistuja ja sitten etsiä sovellus (Open-AudIT). Klikkaa sitten Save.<br/><br/>Nyt sovelluksella on pääsy tilaukseen, joten voimme soittaa API-puheluita. API-puheluita pyydetään sovelluksen puolesta, ei käyttäjän.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'MÄÄRÄYS';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS-perheet';

$GLOBALS["lang"]['OS Family'] = 'OS-perhe';

$GLOBALS["lang"]['OS Group'] = 'OS-ryhmä';

$GLOBALS["lang"]['OUTPUTS'] = 'TULOKSET';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Kohde';

$GLOBALS["lang"]['Object Ident'] = 'Kohde';

$GLOBALS["lang"]['Obtain top management support'] = 'Ylimmän johdon tuen saaminen';

$GLOBALS["lang"]['October'] = 'Lokakuu';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Windows, Open-AudIT käyttää WMI koska se on ensisijainen menetelmä tilintarkastus. Windowsilla on pahamaineinen maine etäviestinnässä. Se on yleensä joko <i>Vain työtä.</i> tai jokin mysteeri kohde vaatii muutosta. Jos sinulla on vaikeuksia tarkastaa etä Windows-tietokoneita, olemme luoneet skriptin nimeltä test_windows_client.vbs. Voit tehdä tämän käsikirjoituksen <strong>paikallisesti</strong> kyseisellä laitteella sen jälkeen, kun se on kirjautunut käyttäjäksi, jota Open-AudIT käyttää tarkastuksen suorittamiseen. Käsikirjoitus tekee <strong>ei muutoksia</strong> kohdelaitteisiin. Se tarkistaa useimmat (ei kaikki) kohteita alla ja tuottaa PASS, FAIL ja INFO tageja eri ominaisuuksia. HUOM. - Jos kohdejärjestelmäsi tarkastetaan oikein, et saa muuttaa mitään asetuksia. Osa alla olevista ei ole Windows-tietokoneita, jotka voidaan tarkastaa ja jotkut ovat olemassa. Muuta asetuksia vain, jos tiettyjen tietokoneiden löydöt eivät toimi suunnitellusti.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Tehtävälistan sivulla klikkaa <i>Lisää uusi</i> painike tehtävän määrittelemiseksi.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Kentällä <i>Ottelumerkkijono</i> Sinun pitäisi antaa ohjelman nimi, jota haluat seurata. Voit käyttää prosenttimerkkiä (%) villinä korttina tarvittaessa.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Seuraavalla sivulla voit valita Access Keys ja nähdä avaimen tai luoda uuden avaimen.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Windows-kohdetietokoneessa suorita DCOM- apuohjelma ja tarkista (tai aseta) alla olevat ominaisuudet. Aloita -> Juokse, syötä DCOMCNFG ja paina OK. Tämä avaa DCOMCNFG-ikkunan.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Oikealla yläkulmassa (valikon alla) on useita painikkeita. Näiden avulla voit valita toisen kojelauta, aseta nykyinen kojelauta kotisivuksi (jos se ei ole jo) ja muokata nykyistä kojelautaa (jos sinulla on lupa).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On-premise, ei pilvi';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Kun lisäkenttä on luotu, sitä voidaan käyttää kyselyissä ja ryhmissä kuten mitä tahansa muuta ominaisuutta tietokannassa.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Kun olet kommentoinut, varmenteesi validoidaan, mutta se voi myös epäonnistua, jos käytät itse allekirjoitettuja varmenteita etkä ole määrittänyt palvelintasi oikein.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Kun skripti on suoritettu kohteessa, pitäisikö skripti poistaa itsestään.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Kun nämä alustavat kyselyt (snmp, ssh, wmi) ovat valmiit, jos laite on apuna tarkastusskriptien (Windows, Linux, OSX, AIX, HP-UX, Solaris ja ESXi), oikea tarkastusskripti kopioidaan kohteeseen ja suoritetaan. Auditointiskripti poistetaan itse valmistuttua. Tulos tallennetaan kohde koneeseen XML-tiedostona. Open-AudIT-palvelin hakee tulostiedoston käsiteltäväksi ja poistaa tulostiedoston kohteesta. Sijaintiin, johon tarkastusskripti on kopioitu kohdelaitteessa (ainakin SSH-auditoinneissa), voidaan määrittää muokkaamalla löydöksen_linux_script_hakemiston konfig kohtaa. Oletuksena se on asetettu /tmp/. Tämä voi olla tarpeen muuttaa, jos /tmp on noexec set. Tulostiedosto käsitellään ja laitteen tiedot päivitetään Open-AudIT-järjestelmässä.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Kun napsautat suorita-painiketta, Open-AudIT synnyttää prosessin käynnistääksesi löydön ja palauttaaksesi käyttäjän löydön yksityiskohdat-sivulle. Hiljattain skannattu prosessi ottaa konfiguroidut löytövalinnat ja suorittaa Nmap-komennot skannattavien IP-osoitteiden alustavan luettelon määrittämiseksi (tai kyselyt Aktiivinen hakemisto, jos kyseistä tyyppiä käytetään). Jokainen skannattava IP asetetaan jonoon. Kun alkuprosessi on saatu päätökseen (ja jonossa on skannattavia IP:itä), useita prosesseja luodaan kunkin IP:n seuraamiseksi edelleen rinnakkain. Tämä prosessien määrä on konfiguroitava konfiguraatiossa, muokkaa ominaisuutta <i>jono_raja</i>. Oletuksena tämä on asetettu 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Kun olet valinnut laitteesi muokattavaksi, napsauta kynänappia pöydän oikeassa yläkulmassa.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Kun olet tehnyt tämän, Open-AudIT yrittää varmistaa käyttäjäsi lokitiedot vastaan määritetty Auth Meth. Jos käyttäjällä on voimassa olevat tiedot ja <code>use_authorisation</code> on asetettu, Open-AudIT pyytää luettelon ryhmistä, joihin käyttäjä kuuluu. Jos käyttäjä on vastaavissa ryhmissä Open-AudIT Roolit ja Orgas, nämä Roolit ja Orgas sovelletaan että käyttäjä.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Kun olet luonut lähtötason määritelmä voit ajoittaa se ajetaan vastaan tietyn ryhmän laitteita.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Kun saat ne tuotteet, Open-AudIT Yritys voi mennä valikkoon -> Tutustu -> Pilvet -> Luo Pilvet, valitse <i>Amazon AWS</i> Kirjoita ja liitä ne. Selvä.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Kun saat ne tuotteet, Open-AudIT Yritys voi mennä valikkoon -> Tutustu -> Pilvet -> Luo Pilvet, valitse <i>Microsoft Azure</i> Kirjoita ja liitä ne. Selvä.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Kun sinulla on pilvitiedot, kyse on vain uuden pilven luomisesta ja löydön johtamisesta - tai ensimmäisten ja tulevien löytöjen suunnittelusta. Varmista, että sinulla on myös tarvittavat tiedot kirjautua pilvikoneet, ja se on kaikki tehty sinulle aivan kuin säännöllinen löytö. Pilvitiedot';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Yksi <code>3x2</code>, <code>4x2</code>, <code>4x3</code> tai <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Yksi Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passiivinen Optical Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Yksi kehitys, Katastrofi Recovery, Arviointi, Esituotanto, Tuotanto, Testaus, Koulutus, Käyttäjän hyväksyntä Testaus';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Yksi jaettu, delegoitu, suunnittelu, varattu, kohdentamaton, tuntematon, hallitsematon. Oletukset jaettu.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Yksi kummastakaan <code>active directory</code> tai <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Yksi: antivirus, varmuuskopio, palomuuri, hyväksytty, kielletty, sivuutettu tai muu.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Yksi toinen asia on oltava varovainen - varmista, että käytät LDAP:n isäntänimi (tai fqdn) Server, joka vastaa mitä on varmenteessa (ei vain LDAP Servers IP-osoite), kun luodaan LDAP merkintä Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Online-dokumentaatio';

$GLOBALS["lang"]['Open'] = 'Avaa';

$GLOBALS["lang"]['Open Data'] = 'Avaa data';

$GLOBALS["lang"]['Open Source'] = 'Avaa lähdekoodi';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open-AudIT Yhteisön lähdekoodi on saatavilla GitHubissa. Sinua kannustetaan tarkastamaan kaikki koodit, joista olet huolissasi, ja koska se on avoin lähde - sinua kannustetaan myös kysymään meiltä kaikista asioista, joita sinulla on tai raportoimaan löydöistä. Olemme aina enemmän kuin iloisia voidessamme ottaa vastaan koodilahjoituksia, haavoittuvuusraportteja tai jopa yksinkertaisia kysymyksiä. Tulimme auttamaan.<br/><br/>Tarkastus skriptit itse (Windows, Linux, MacOS, et al) on tarkoituksellisesti kirjoitettu luettavissa natiivi kuori skripti (VBScript for Windows, Bash for *nix). Voit nähdä tarkalleen mitä komentoja suoritetaan. Voit poistaa komentoja, joita et mielestäsi tarvitse. Voit pyytää kolmatta osapuolta tarkastamaan koodin ja (jos haluat) ilmoittamaan löydökset.<br/><br/>Open-AudIT Yritys hoitaa Open-AudIT Communityn kaupallisia lisätoimintoja. Se sisältyy yhtenä koostettuna tiedostona ilman ulkoisia riippuvuuksia. Jos yritys itse suorittaa funktioita [s), jos sinulla on kysyttävää Ensimmäinen aalto on ilo työskennellä niiden läpi kanssasi - vain kysyä! Kokeile sitä toisen kaupallisen ohjelmistotoimittajan kanssa!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT- laitteen valinta';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open-AudIT Enterprise on kyky valita ennalta määritelty luettelo löytö skannaus vaihtoehtoja ja myös muokata yksittäisiä vaihtoehtoja löytö.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Korkean mittakaavan joustava löytö- ja tilintarkastusratkaisu suurille verkoille. Kaikki ominaisuudet Professional plus: Lähtökohdat, Tiedostontarkastus, Cloud Discovery, Rack Management, Configurable Role Based Access Control mukaan lukien aktiivinen Directory ja LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT- kentän nimi';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT-lisenssit';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT- asetukset';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional ja Enterprise sisältävät parannetut raportointiominaisuudet, mukaan lukien aikapohjaiset, historialliset ja muti-query-pohjaiset raportointiominaisuudet useissa muodoissa.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open-AudIT Professional on kyky valita ennalta määritelty luettelo löytö skannaus vaihtoehtoja, per löytö.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open-AudIT Professional. Maailma';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open-Aud IT voidaan konfiguroida käyttämään LDAP-palvelimia (Microsoft Active Directory ja/tai OpenLDAP) todentamaan ja valtuuttamaan käyttäjä ja lisäksi luomaan käyttäjätili Open-AudITissa LDAP-ryhmän jäsenyyden perusteella osoitettujen roolejen ja orgien avulla. Se voi myös käyttää';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open-Aud IT voidaan suorittaa palvelimellasi datakeskuksessa. Sen ei tarvitse lainkaan käyttää internetiä. Jopa Linuxin asennus, jossa käytämme jakelupaketinhallintaa ennakkoehtoihimme, voidaan mitätöidä käyttämällä sisäisen ja turvallisuustiimin hyväksymää pakettivarastoa.<br/><br/>Open-Aud IT ei tallenna tietojasi pilveen. Jopa lisensointitietoja voidaan antaa ilman internetyhteyttä Open-AudIT-palvelimelta.<br/><br/>Toki, on helpompaa antaa sen käyttää internetiä ladata paketteja (mukaan lukien tietoturvakorjauksia) jakelua varten, mutta se riippuu sinusta ja turvallisuuskäytännöistäsi. Open-AudIT ei tarvitse internetiä.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT voi ladata, jäsentää ja käyttää NIST CVE Haavoittuvuusraportteja.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open-Aud IT voi esiintyä yhdellä monista kielistä. Miten voit parantaa tätä?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open-Aud IT voi tallentaa tietoja lisäkentille, jotka liittyvät jokaiseen laitteeseen.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT voi käyttää Microsoft Entraa (aiemmin nimellä Microsoft Azure Active Directory) tunnistamismenetelmänä. Tämä tarkoittaa, että Open-AudIT-käyttäjäsi voi napsauttaa Logonia käyttäen Entra-painiketta kirjautumissivulla ja käyttää Entra-tunnuksiaan kirjautumiseen. Tämä käyttäjä on jo olemassa Open-AudIT (ja osoitetaan';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT voi käyttää OKTAa tunnistautumismenetelmänä. Tämä tarkoittaa, että Open-AudIT-käyttäjäsi voi napsauttaa Logonia kirjautumissivun OKTA-painikkeella ja kirjautua sisään. Tämä käyttäjä tarvitsee jo olemassa Open-AudIT (ja osoitetaan Rooleja ja Orgs), mutta ei tarvitse muistaa erillinen joukko kirjautumistunnukset.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT tulee monia kyselyjä sisäänrakennettu. Jos tarvitset tietyn kyselyn eikä mikään valmiiksi pakatuista kyselyistä vastaa tarpeitasi, on melko helppoa luoda uusi kysely ja ladata se Open-AudITiin.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT on JSON Restful API käytetään sekä web-käyttöliittymä ja JSON pyyntöjä.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open-Aud IT on rakeinen lupajärjestelmä määrittää, mitä käyttäjä Open-AudIT voi tehdä, ja kohteita hän voi tehdä. Open-AudIT voi olla täysin itsenäinen tai käyttää Active Directory tai OpenLDAP tunnistamiseen ja / tai valtuutus.<br/><br/>Open-AudITin ylläpitäjä päättää, miten he haluaisivat Roole Based Access Controlin toimivan.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open-Aud IT:ssä on voimakas muutoksentunnistusmoottori. Kaikki laitteen ominaisuudet, jotka lisätään, poistetaan tai muutetaan, havaitaan ja tallennetaan. Nämä muutokset voidaan raportoida ja asiaankuuluvat tiedot vahvistaa siitä, mitä yrityksen muutos- ja julkaisuprosessilta odotettiin.<br/><br/>Kun laite tarkastetaan, ominaisuudet jaetaan osiin, jotka vastaavat tietokannan taulukoita.<br/><br/>Jokainen laite (tietokone, reititin, tulostin jne.) on merkitty <code>devices</code> Pöytä. Jokaisessa laitetaulukossa on <code>id</code> sarake. Tämä arvo on ainutlaatuinen - se on auto-incrementing id.<br/><br/>Kun tarkastuksen tulos käsitellään, kunkin jakson kunkin erän tarkastustulos on suhteessa tietokantaan.<br/><br/>Kunkin jakson osalta, jos avainsarakkeet (ks. alla oleva taulukko) sisältävät samat arvot, sitä pidetään jo asennettuna ja sillä on <code>last_seen</code> määrite päivitetty. Muuta_logia ei ole luotu.<br/><br/>Jos jokin avainsarakkeista ei täsmää, se katsotaan uudeksi ominaisuudeksi ja lisätään. A <code>change_log</code> merkintä luodaan, jos laitteessa oli jo muita ominaisuuksia taulukossa.<br/><br/>Auditointiprosessin päätyttyä ei katsota, että tietokantoja, joita ei ole päivitetty (tai lisätty), ei ole. • <code>current</code> Tämän erän ominaisuus on asetettu <i>n</i> ja change_log merkintä luodaan.<br/><br/>Joten voimme selvittää, onko jokin tällä hetkellä asennettu - nykyinen sarake on <i>y</i>.<br/><br/>Voimme selvittää, milloin jotain alunperin havaittiin - <i>ensimmäinen</i>.<br/><br/>Voimme selvittää, jos jokin on asennettu ensimmäisen tarkastuksen jälkeen - ensimmäinen nähty on erilainen osa- ja laitetaulukot.<br/><br/>Voimme määrittää, jos jotain ei ole asennettu, mutta aiemmin oli - nykyinen = <i>n</i>.<br/><br/>Voimme määrittää viimeisen kerran kun havaitsimme kohteen - last_shen.<br/><br/>Missä tahansa vaiheessa, voimme määrittää, mitä oli järjestelmässä - käyttämällä audit_log taulukko ja valitsemalla asiaankuuluvat komponentit perustuu first_seen ja last_seen.<br/><br/>Kukin jakso ja sen keskeiset sarakkeet ovat alla.<br/><br/>HUOM - Seuraavassa on joitakin poikkeuksia.<br/><br/>*1 - Verkkokortteihin, jos tietokone on VMware Esx kone se käyttää myös net_index ja yhteys sarakkeet.<br/><br/>*2 - Osat, f tietokone on AIX kone, käytämme osion nimi.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT on ohjelma, jonka tarkoituksena on seurata ja raportoida IT-tietojasi ja niihin liittyviä ominaisuuksiasi sekä konfiguraatiotasi. Open-AudIT voi kertoa <i>Mitä verkossasi on?</i>, miten se on määritetty ja jos on ollut muutoksia. Open-AudIT tarjoaa tyylikkään, joustavan ja helppokäyttöisen alustan laitteiden löytämiseen, IT-auditointiin ja varastonhallinnan automaatioon suoraan laatikosta.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open-Aud IT helpottaa useiden laitteiden ominaisuuksien muokkaamista kerralla.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open-Aud IT tarvitsee erityisiä hakemiston käyttölupia, jotta voit luoda tiedostoja, ladata tuloksia jne. Aseta alla.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT tarjoaa monia sisäänrakennettuja kyselyjä ja tekee oman luomisen helpoksi.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud IT-alukset sisäänrakennettu roolit admin, org_admin ja käyttäjä.<br/><br/>Yleensä käyttäjän, joka on ylläpitäjä Open-AudIT-sovelluksen itse pitäisi olla admin ja mahdollisia org_admin rooleja.<br/><br/>Käyttäjä voi olla useita rooleja. Lupaa sovelletaan kaikkein sallivin tasolla - IE, jos käyttäjällä on roolit käyttäjän ja org_admin, he voivat luoda paikkoja, koska org_admin myöntää tämän luvan, vaikka käyttäjän rooli ei.<br/><br/>Admin rooli mahdollistaa pääsyn kokoelmiin, kuten kokoonpano, tietokanta, ryhmät, ldap palvelimet, lokit, kyselyt ja roolit. Maailmanlaajuiset kohteet, jotka vaikuttavat koko sovellukseen.<br/><br/>Org_admin-rooli mahdollistaa yleensä org_id- sarakkeen sisältävien kokoelman toimintojen luomisen, lukemisen, päivittämisen ja poistamisen. Lähes kaikki tiedot paitsi jotkut edellä mainituista kokoelmista sisältävät <code>org_id</code> sarake.<br/><br/>Käyttäjän rooli mahdollistaa yleensä vain lukemisen kaikkiin kohteisiin, joissa on org_id-sarake.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-Aud IT-alukset sisäänrakennettu roolit admin, org_admin ja käyttäjä.<br/><br/>Yleensä käyttäjän, joka on ylläpitäjä Open-AudIT-sovelluksen itse pitäisi olla admin ja mahdollisia org_admin rooleja.<br/><br/>Käyttäjä voi olla useita rooleja. Lupaa sovelletaan kaikkein sallivin tasolla - IE, jos käyttäjällä on roolit käyttäjän ja org_admin, he voivat luoda paikkoja, koska org_admin myöntää tämän luvan, vaikka käyttäjän rooli ei.<br/><br/>Admin rooli mahdollistaa pääsyn kokoelmiin, kuten kokoonpano, tietokanta, ryhmät, ldap palvelimet, lokit, kyselyt ja roolit. Maailmanlaajuiset kohteet, jotka vaikuttavat koko sovellukseen.<br/><br/>Org_admin-rooli mahdollistaa yleensä org_id- sarakkeen sisältävien kokoelman toimintojen luomisen, lukemisen, päivittämisen ja poistamisen. Lähes kaikki tiedot paitsi jotkin edellä mainituista kokoelmista sisältävät org_id-sarakkeen.<br/><br/>Käyttäjän rooli mahdollistaa yleensä vain lukemisen kaikkiin kohteisiin, joissa on org_id-sarake.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open-AudIT-alukset, joissa on useita ennalta konfiguroituja tauluja. Jos olet ammattimainen käyttäjä, voit valita näistä kahdesta ja asettaa sen oletussivuksi kirjauduttaessasi. Jos olet Enterprisen käyttäjä, voit paitsi valita viiden ennalta määritetty Dashboards, mutta sinulla on myös kyky luoda oman.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT tulisi asentaa 64bit Windowsiin <strong>Palvelin</strong> Vain järjestelmät. Windows 10 ja Windows 11 ovat <strong>ei</strong> tukea.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT käyttää Nmapia Discovery-toiminnossaan. Nmap luotainten laitteet avointen porttien. Laitteiden olisi ihannetapauksessa reagoitava avoimin ovin. Laitteet eivät useinkaan vastaa tähän. Seuraavassa esitetään yksityiskohtaisesti erilaiset vastaukset.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT käyttää Nmapia Discovery-toiminnossaan. Ilman Nmap, Open-AudIT ei toimi oikein. Jokainen Open-AudIT asennus olettaa Nmap on asennettu ja myös testata sitä Discovery verkkosivuilla. Lisätietoa Open-AudITista ja Nmapista löydät täältä';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT käyttää Nmapia Discovery-toiminnossaan. Ilman Nmap, Open-AudIT ei toimi oikein. Jokainen Open-AudIT asennus olettaa Nmap on asennettu ja testaa sitä Discovery verkkosivuilla.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open-Aud IT käyttää tietoja päästäkseen käsiksi laitteisiin. Nämä ovat salattuja ja tallennettuja.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT kirjoitti Englanti puhuva australia. Kaikki hakemuksessa käytetään englanninkielistä sanamuotoa. Open-AudIT on kuitenkin aina tukenut useita kieliä. Nämä käännökset eivät aina pidä paikkaansa, koska kehittäjät eivät puhu syntyperäisesti jokaisen tarjotun käännöksen kieltä.<br/><br/>Mitä voit tehdä, jos jokin ei ole oikein käännös?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap on asennettu';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Avaatko tukilipun?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldapin käyttäjän Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldapin käyttäjän Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldapin käyttäjäjäsenyys Attribuutti';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldapin käyttäjäjäsenyys Attribuutti';

$GLOBALS["lang"]['open|filtered'] = 'Avaa... suodatettu';

$GLOBALS["lang"]['Open|filtered'] = 'Avaa... suodatettu';

$GLOBALS["lang"]['Operating System'] = 'Käyttöjärjestelmä';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Käyttöjärjestelmäperhe sisältää';

$GLOBALS["lang"]['Operating Systems'] = 'Käyttöjärjestelmät';

$GLOBALS["lang"]['Operators'] = 'Toimijat';

$GLOBALS["lang"]['optical'] = 'Optiset';

$GLOBALS["lang"]['Optical'] = 'Optiset';

$GLOBALS["lang"]['Optimized'] = 'Optimoitu';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Vaihtoehto # 1 - Muuta tietoja';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Vaihtoehto # 2 - Muuta käännöstiedosto';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Valinnainen agenttiperusteinen tilintarkastus';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open-AudITin tarkastama valinnainen versio. Käytä prosenttimerkkiä % villinä korttina.';

$GLOBALS["lang"]['options'] = 'Valinnat';

$GLOBALS["lang"]['Options'] = 'Valinnat';

$GLOBALS["lang"]['Options, options, options'] = 'Vaihtoehdot, vaihtoehdot, vaihtoehdot';

$GLOBALS["lang"]['Or'] = 'Tai';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Tai valitse alla olevista kentistä.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'Organ ID';

$GLOBALS["lang"]['Org ID'] = 'Organ ID';

$GLOBALS["lang"]['Organisation'] = 'Organisaatio';

$GLOBALS["lang"]['organisation'] = 'Organisaatio';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organization Descentants';

$GLOBALS["lang"]['Organisations'] = 'Organisaatiot';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organisaatiot voivat laajentaa ja parantaa yksityiskohtaa, joka tallennetaan jokaista löydettyä laitetta vastaan käyttäen mukautettuja kenttiä ja avoin ydin mahdollistaa helpon integraation CMDB:hen, tapahtumien hallintaan ja lipunmyyntijärjestelmiin.';

$GLOBALS["lang"]['orgs'] = 'Orgas';

$GLOBALS["lang"]['Orgs'] = 'Orgas';

$GLOBALS["lang"]['Orgs Name'] = 'Orgien nimi';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgit Open-AudIT ovat avainkohde. Käyttäjällä on ensisijainen Org sekä luettelo Orgs he voivat käyttää. Käyttäjä yhdistää tämän ja listan annetuista rooleista, jotka määrittelevät, mitä toimia he voivat toteuttaa Orgeille osoitetuilla asioilla. Käyttäjien yhdistelmä <i>orgs</i> sekä <i>roolit</i> määritellä, mitä ne voivat ja eivät voi tehdä Open-AudIT.<br/><br/>Useimmat Open-AudIT:n kohteet on osoitettu Org. Laitteet, sijainnit, verkostot jne.<br/><br/>Orgit voivat saada lapsiorgeja. Ajattele organisaatiokaaviota (puita). Jos käyttäjällä on pääsy tiettyyn Orgaan, heillä on useimmiten (ei aina) pääsy myös Orgsin jälkeläisiin.';

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

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Muuta kuin että rajoitus, voit vapaasti valita ominaisuudet tarpeen mukaan. On hyvä käyttää valikkoa';

$GLOBALS["lang"]['Others'] = 'Muut';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Oletusintegrointimme mahdollistaa myös löydön ulkoisesti toimitetuista laitteista. Joten lähetämme oletuslöydöksen oletusintegroinnille laatikosta. Niissä käytetään oletusyhteensopivuussääntöjä, mutta myös IP-osoitteessa.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Esimerkkejämme käytetään <i>tyyppi</i> sarake.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Kehyksemme lataa tiedostoja tänne käsittelyä varten ja poistaa ne sitten. Ajattele toimitettuja tarkastuksen tuloksia jne.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Tavoitteenamme alkuperäisten integraatioiden julkaisu oli erityisesti NMIS Open-AudIT integraatio <i>Vain työtä.</i>. Jos käytät ohjelmia Linuxissa, voit kirjaimellisesti napsauttaa yhtä painiketta suorittaaksesi integraation. Mitään muuta ei tarvita. Tämän sanottuani, integraatio itsessään on erittäin konfiguroitu - joten jos jokin ei ole haluasi, se voidaan helposti muuttaa.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Uusi ominaisuus nimeltään Haavoittuvuus antaa sinulle mahdollisuuden nopeasti määrittää, jos jokin laite vaikuttaa CVE (Common Haavoittuvuus Altistuminen) - mutta miten?<br/><br/>FirstWave kuluttaa jatkuvasti Nist NVD -syötteen tuotosta. Otamme tämän ja soveltaa joitakin rajoituksia, sitten poimia vaikuttaa ohjelmia ja rakentaa SQL kyselyn raportointi. Open-AudIT-esimerkkisi ottaa yhteyttä FirstWaveen ja pyytää uusia haavoittuvuuksia säännöllisesti. Kun se saa uuden haavoittuvuus ennätyksen, se ajetaan tietokannan ja tulos tallennetaan. Joka kerta kun laitetta käsitellään, kaikki vastaavat haavoittuvuudet toteutetaan uudelleen ja tulos tallennetaan. Tämä tarkoittaa sitä, että kun katsomme haavoittuvuusluetteloa, meidän ei tarvitse laskea kaikkia siihen vaikuttavia laitteita - meillä on jo tulos. Kun tarkastelette yksittäisiä haavoittuvuustietoja, laskemme todellakin uudelleen tämän yksittäisen haavoittuvuuden tuloksen.<br/><br/>Olet aina ajan tasalla!<br/><br/>Tämän lisäksi laskemme myös kaikkien haavoittuvuuksien tuloksen kaikille laitteille päivittäin (yleensä hiljaiseen aikaan, esimerkiksi 2am).<br/><br/>Sinun tapauksessasi Open-AudIT, voit valita, mistä myyjät välität. Toisin sanoen ei ole mitään hyötyä hakea haavoittuvuustietoja myyjältä, jonka ohjelmistoa et käytä tai ole asentanut. Oletuksena myyjälistamme on Adobe, Apple, Cisco, Google, Microsoft, Mozilla ja Redhat.<br/><br/>Tämä kaikki kuulostaa hyvin yksinkertainen, mutta kulissien takana <b>Lot</b> Se jatkuu. Esimerkiksi CVE-ennätys sisältää luettelon siihen vaikuttavista ohjelmistoista - mutta nuo ohjelmistojen nimet eivät vastaa sitä, mitä saamme tietokoneen tarkastuksen yhteydessä. Hyvä esimerkki on apassi. Tyypillisesti, CVE-ennätys sanoo vaikuttaa ohjelmisto on http_server. Todellisuudessa tämä näkyy apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - ja muut. Meidän on ensin selvitettävä, mikä on ohjelman oikea nimi, kun kysymme tietokonetta. Sen jälkeen meidän täytyy jäsentää CVE-ennätys ja luoda vastaava SQL-lausunto. Sallitaan useita ohjelmanimiä kuten edellä, ja useita versioita, versioalueet, ja jopa useita eri osia ohjelmistoja (esimerkiksi Thunderbird ja Firefox yhdessä CVE). Ja sinun esimerkki Open-AudIT on otettava tämä ja soveltaa Orgs suodatus samoin. Ja se on vain yksi CVE. Entä mitä CVE:tä sinulla on ja mitä ei ole? Mitä jos lisäisit myyjän listalle myöhemmin? Niin paljon mietittävää!<br/><br/>Kuten tavallista raportointia, meillä on myös muutamia uusia widgettejä saatavilla Dashboards, perustuu Vulnerabilities tietoja.';

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

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec on SysSisä/Microsofts suositun PsExec-ohjelman vapaasti jaettavissa oleva uudelleentoteutus. PAExec pyrkii olemaan pudotus PsExecin korvaamisessa, joten komentorivin käyttö on identtistä, ja myös muita vaihtoehtoja tuetaan. Teoksen inspiroi alun perin Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Postitustiedot';

$GLOBALS["lang"]['Package'] = 'Pakkaus';

$GLOBALS["lang"]['packages'] = 'Paketit';

$GLOBALS["lang"]['Packages'] = 'Paketit';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Pakettien avulla raportoidaan esimerkiksi <i>kielletty ohjelmisto</i>, AntiVirus palvelimet, jne.<br/><br/>Open-AudIT tarjoaa widgetit, jotka perustuvat myös toimitettu repot detemiini tila antivirus, palomuuri ja muut ohjelmistot.';

$GLOBALS["lang"]['pagefile'] = 'Sivutiedosto';

$GLOBALS["lang"]['Pagefile'] = 'Sivutiedosto';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestiinalaisalue';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua-Uusi Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Parametrit';

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

$GLOBALS["lang"]['Permission'] = 'Lupa';

$GLOBALS["lang"]['Permission Required'] = 'Lupa vaaditaan';

$GLOBALS["lang"]['permissions'] = 'Lupa';

$GLOBALS["lang"]['Permissions'] = 'Lupa';

$GLOBALS["lang"]['Persian'] = 'persia';

$GLOBALS["lang"]['Personal Area Network'] = 'Henkilökohtainen alueverkko';

$GLOBALS["lang"]['Personal area network'] = 'Henkilökohtainen alueverkko';

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

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie kaaviot on palautettava nimi tai minun_nimi, kuvaus tai minun_kuvaus ja laskea.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Ping- kohde';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairnsaaret';

$GLOBALS["lang"]['placement'] = 'Paikka';

$GLOBALS["lang"]['Placement'] = 'Paikka';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Suunnitelma ja sisäisten tarkastusten suorittaminen';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Ota Open-AudIT-hallinnoijan kirjautuminen ja päivitä tietokanta.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Kirjaudu sisään ja vaihda nämä heti.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Kirjaudu Open-AudIT-palvelimelle (joko Windows tai Linux) ja suorita <code>nslookup IP_ADDRESS_OF_TARGET</code> komentokehotteessa tai -kuoressa. Sen on pystyttävä ratkaisemaan tutkimusajanjakso nimeltä.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Huomaa, että valittu ruutu ohittaa tekstin syötelaatikon.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Katso usein kysytyt kysymykset';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Lähetä kaikki kolme tiedostoa Opmantekin tukiyhteyshenkilöllesi ja kuvaile ongelmaasi.';

$GLOBALS["lang"]['Please set using'] = 'Valitse';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Käy kotisivulla osoitteessa';

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

$GLOBALS["lang"]['Polish'] = 'Puola';

$GLOBALS["lang"]['Polite'] = 'Kohteliaisuus';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Populoidaan seuraavat arvot:';

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

$GLOBALS["lang"]['Portuguese'] = 'portugali';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugali (brasiili)';

$GLOBALS["lang"]['position'] = 'Sijainti';

$GLOBALS["lang"]['Position'] = 'Sijainti';

$GLOBALS["lang"]['Post-Certification'] = 'Varmennuksen jälkeen';

$GLOBALS["lang"]['postcode'] = 'Postinumero';

$GLOBALS["lang"]['Postcode'] = 'Postinumero';

$GLOBALS["lang"]['power_circuit'] = 'Virtapiiri';

$GLOBALS["lang"]['Power Circuit'] = 'Virtapiiri';

$GLOBALS["lang"]['power_sockets'] = 'Tehosukat';

$GLOBALS["lang"]['Power Sockets'] = 'Tehosukat';

$GLOBALS["lang"]['Predictable'] = 'Ennustettava';

$GLOBALS["lang"]['Preferences'] = 'Asetukset';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Valmistaudu uudelleensertifiointiin kolmen vuoden välein';

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

$GLOBALS["lang"]['Privacy Protocol'] = 'Yksityisyyden suoja';

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

$GLOBALS["lang"]['Professional'] = 'Ammattimainen';

$GLOBALS["lang"]['profile'] = 'Profiili';

$GLOBALS["lang"]['Profile'] = 'Profiili';

$GLOBALS["lang"]['program'] = 'Ohjelma';

$GLOBALS["lang"]['Program'] = 'Ohjelma';

$GLOBALS["lang"]['Properties'] = 'Ominaisuudet';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Omistusoikeus. Jos haluat muuttaa HighChartsia, saatat tarvita';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Suojaa luottamuksellisuutta, eheyttä ja tietojen saatavuutta';

$GLOBALS["lang"]['protocol'] = 'Pöytäkirja';

$GLOBALS["lang"]['Protocol'] = 'Pöytäkirja';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Anna kuvaus ja valitse ja päättyy kesto.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Anna nimi - me nöyrästi uudelleenkomento Open-AudIT . Mutta voit nimetä sen mitä haluat.<br/>Open-AudIT-lomakkeella kopioi arvo <i>Uudelleensuuntaa URI</i> kenttä ja liitä se <i>Kirjaudu sisään uudelleensuuntausURIt</i> Kenttä OKTA:ssa.<br/>Sign-out uudelleenohjaus URIt on valinnainen, mutta jos haluat voit käyttää avoimen tarkastuksen / index. php/logout kanssa Open-AudIT-palvelimet http-osoite, kuten kuvakaappauksen.<br/>Yleensä Open-AudIT URL näyttää jotain';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Jos sinulla on oikeat tiedot, laitteen seed Discovery toimii seuraavasti:';

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

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Kyselyt ovat tärkeä osa Open-AudITia. Niiden avulla voit saada mielekästä tietoa kaikista löytämistäsi laitetiedoista. Yhdessä yhteenvetojen ja ryhmien, ne tarjoavat tehokkaan mekanismin poimia tärkeää tietoa.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Kyselyt ryhmille tulisi valita vain';

$GLOBALS["lang"]['Query'] = 'Kysely';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Kysy tämä aktiivinen hakemisto attribuutti ensin määrittää käyttäjien työyksikkö.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Kysy tämä aktiivinen hakemisto-attribuutti toiseksi määrittää käyttäjien työyksikön.';

$GLOBALS["lang"]['queue'] = 'Jono';

$GLOBALS["lang"]['Queue'] = 'Jono';

$GLOBALS["lang"]['Queue Limit'] = 'Jonoraja';

$GLOBALS["lang"]['Queued Device Audits'] = 'Jonotetut laitetarkastukset';

$GLOBALS["lang"]['Queued IP Scans'] = 'Jonotetut IP- skannaukset';

$GLOBALS["lang"]['Queued Items'] = 'Jonotetut erät';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC aktiivisen hakemiston ja openLDAP';

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

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack Management ja raportointi';

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

$GLOBALS["lang"]['Read through the log file at'] = 'Lue lokitiedoston läpi osoitteessa';

$GLOBALS["lang"]['Received'] = 'Saatu';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Äskettäin meille on esitetty kysymys - pidättekö Open-AudITia turvallisempana kuin muita vastaavia ohjelmia? Kuten useimmat asiat, vastaus on <i>Riippuu</i>.<br/><br/>Open-Aud IT:tä voidaan käyttää erittäin turvallisella tavalla. Mutta kuten tavallista tietokonepohjaisessa turvassa, mitä varmemmin haluat tehdä jotain, sitä hankalammaksi se tulee. Vanha lause <i>turvallisin tietokone on yksi, joka on sammutettu ja kaapissa<i> Tulee mieleen.<br/><br/>Seuraavassa hahmottelemme joitakin vaihtoehtoja, joita voidaan käyttää Open-AudIT:n kanssa, mikä lisää turvallisuutta. Kuten useimmat Open-AudIT:n kohteet, nämä ovat vaihtoehtoja eivätkä pakollisia. Miten pitkälle viet turvatoimia, riippuu sinusta.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Uudelleensertifiointi: Vaaditaan joka kolmas vuosi';

$GLOBALS["lang"]['Red Query'] = 'Punainen kysely';

$GLOBALS["lang"]['Redirect URI'] = 'Uudelleensuuntaa URI';

$GLOBALS["lang"]['redirect_uri'] = 'Uudelleenohjaa Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Uudelleenohjaa Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Vähentää tietoturvaloukkausten ja verkkouhkien riskiä';

$GLOBALS["lang"]['references'] = 'Lähteet';

$GLOBALS["lang"]['References'] = 'Lähteet';

$GLOBALS["lang"]['region'] = 'Alue';

$GLOBALS["lang"]['Region'] = 'Alue';

$GLOBALS["lang"]['registered_user'] = 'Rekisteröity käyttäjä';

$GLOBALS["lang"]['Registered User'] = 'Rekisteröity käyttäjä';

$GLOBALS["lang"]['Rejected'] = 'Hylättiin';

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

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Toista, kunnes olet täysin löydetty ja tarkastettu Windows PC.';

$GLOBALS["lang"]['Report'] = 'Kertomus';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Raportti laitteistasi, verkoistasi ja muista';

$GLOBALS["lang"]['reportable'] = 'Raportoitava';

$GLOBALS["lang"]['Reportable'] = 'Raportoitava';

$GLOBALS["lang"]['Reports'] = 'Kertomukset';

$GLOBALS["lang"]['request'] = 'Pyyntö';

$GLOBALS["lang"]['Request'] = 'Pyyntö';

$GLOBALS["lang"]['Request Method'] = 'Pyyntömenetelmä';

$GLOBALS["lang"]['Request Vulnerability'] = 'Pyyntö Haavoittuvuus';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Erityistä CVE';

$GLOBALS["lang"]['requested'] = 'Pyydetty';

$GLOBALS["lang"]['Requested'] = 'Pyydetty';

$GLOBALS["lang"]['require_port'] = 'Vaadi portti';

$GLOBALS["lang"]['Require Port'] = 'Vaadi portti';

$GLOBALS["lang"]['Require an Open Port'] = 'Vaadi avoin portti';

$GLOBALS["lang"]['Required'] = 'Vaaditaan';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Vaaditut AWS-käyttöoikeudet';

$GLOBALS["lang"]['Required Fields'] = 'Vaaditut kentät';

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

$GLOBALS["lang"]['Resulting Function'] = 'Tulosfunktio';

$GLOBALS["lang"]['Results'] = 'Tulokset';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Hae luettelo laitteista';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Hae luettelo laitteista, joiden käyttöjärjestelmänimi on kuten Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Hae kaikki laitteen tiedot ID 88:lla.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Nouda kaikki Windowsia käyttävät laitteet.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Hae kaikki laitteet vakiosarakkeilla';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Hae ensimmäiset 10 Windows-laitetta, jotka on tilattu isäntänimellä';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Hae ominaisuudet id, ip, isäntänimi, verkkotunnus, kirjoita kaikista laitteista';

$GLOBALS["lang"]['retrieved'] = 'Noudettu';

$GLOBALS["lang"]['Retrieved'] = 'Noudettu';

$GLOBALS["lang"]['retrieved_ident'] = 'Noudettu';

$GLOBALS["lang"]['Retrieved Ident'] = 'Noudettu';

$GLOBALS["lang"]['retrieved_name'] = 'Haettu nimi';

$GLOBALS["lang"]['Retrieved Name'] = 'Haettu nimi';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Haettu laitteesta - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hossvc/hostsummery, HP-UX:machinfo, Solaris: smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Valtuutusluettelon hakeminen';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Haetaan tai luodaan';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Palauta kokoelma laitteita oletusjoukko sarakkeita (laitteet.id, laitteet.icon, laitteet.tyyppi, laitteet.nimi, laitteet.ip, laitteet.dns_fqdn, laitteet.tunnistus, laitteet.kuvaus, laitteet.valmistaja, laitteet.os_perhe, laitteet.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Palauta luettelo kaikista reitittimiin asennetuista moduuleista';

$GLOBALS["lang"]['Return an individual device details'] = 'Palauta yksittäinen laite';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Palauttaa luettelon {kokoelma}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Palauttaa {kokoelma} tiedot.';

$GLOBALS["lang"]['Reunion'] = 'Jälleenyhdistyminen';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Käydään läpi nykyiset käytännöt ISO 27001 -vaatimusten suhteen';

$GLOBALS["lang"]['revision'] = 'Uudelleentarkastelu';

$GLOBALS["lang"]['Revision'] = 'Uudelleentarkastelu';

$GLOBALS["lang"]['risk_assesment_result'] = 'Riskiarvion tulos';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Riskiarvion tulos';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Riskien arviointi ja hoito';

$GLOBALS["lang"]['Risk Management'] = 'Riskienhallinta';

$GLOBALS["lang"]['Role'] = 'Rooli';

$GLOBALS["lang"]['roles'] = 'Roolit';

$GLOBALS["lang"]['Roles'] = 'Roolit';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roolit voidaan luoda ja muokata vain, jos sinulla on Open-AudIT Enterprise -lisenssi. Useimmille käyttäjille, oletusjoukko Roolit pitäisi olla kaikki, mitä tarvitaan.';

$GLOBALS["lang"]['Romania'] = 'Romania';

$GLOBALS["lang"]['Romanian'] = 'romania';

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

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Säännöt luodaan ja niitä käytetään laitetta vastaan, kun laite löydetään tai tarkastustulos käsitellään. Sääntöjä voidaan käyttää laiteattribuutin asettamiseen muiden ominaisuuksien perusteella.<br/><br/>HUOMAUTUS - Tällä hetkellä emme voi poistaa sääntöä syöte tai tuloste, joka sisältää /. Tämä johtuu siitä, että kehys jäsentää / osana URL ja palauttaa 404, jopa ennen koodi toimii. Tätä varten on tarkoitus poistaa itse sääntö ja luoda syötteet ja tuotokset uudelleen tarpeen mukaan. Onneksi syötteet ja lähdöt, jotka sisältävät / ovat harvinaisia (dedeed, ei ole olemassa oletusarvoisesti).';

$GLOBALS["lang"]['Run Discovery'] = 'Suorita Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Suorita Discovery laitteissa';

$GLOBALS["lang"]['Run Your Discovery'] = 'Aja Discovery';

$GLOBALS["lang"]['Run a Command'] = 'Suorita komento';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Tee löytö ja ota selvää <b>Mitä verkossasi on?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Suorita skripti kirjoittamalla <code>cscript test_windows_client.vbs</code> konsolissa.';

$GLOBALS["lang"]['Run this Command'] = 'Suorita komento';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Suoritetaan';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open-AudIT Apache -palvelun käyttö Windowsissa';

$GLOBALS["lang"]['Russian'] = 'Venäjä';

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

$GLOBALS["lang"]['SAN Audit'] = 'SAN-tarkastus';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-Discover';

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

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL ei sisällä tätä ehtoa johtaa widget epäonnistuminen.';

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

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Tallenna ja tarkista tiedosto. Varmista, että suoritat tiedoston ylläpitäjänä, jotta voit asentaa sen (napsauta oikein, Suorita ylläpitäjänä).';

$GLOBALS["lang"]['Save as Default'] = 'Tallenna oletuksena';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Tallenna ladattu tiedosto.';

$GLOBALS["lang"]['scaling'] = 'Skaalaus';

$GLOBALS["lang"]['Scaling'] = 'Skaalaus';

$GLOBALS["lang"]['scan_options'] = 'Skannaa asetukset';

$GLOBALS["lang"]['Scan Options'] = 'Skannaa asetukset';

$GLOBALS["lang"]['Scan Options ID'] = 'Skannaa asetukset';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Skannaa tämä portti [s] ja jos se havaitaan auki, käytä tätä porttia SSH- viestintään. Tämä on lisätty luetteloon Custom TCP Ports edellä (jos ei jo sisälly), joten ei ole tarvetta sisällyttää sitä luetteloon samoin. Pilkku eristetty, ei välilyöntejä.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Skannaa Nmap TCP-porttien top numero.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Skannaa Nmap top määrä UDP-satamien.';

$GLOBALS["lang"]['schedule'] = 'Aikataulu';

$GLOBALS["lang"]['Schedule'] = 'Aikataulu';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Aikataulullinen laitteen löytäminen ja raportointi tekevät Open-AudIT Professionalista tehokkaan ratkaisun kiireisille IT-ammattilaisille, jotka haluavat vähentää yleiskustannuksia ja lisätä oivalluksia.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Aikataulu - löytö, raportointi ja enemmän';

$GLOBALS["lang"]['scope'] = 'Soveltamisala';

$GLOBALS["lang"]['Scope'] = 'Soveltamisala';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Soveltamisala tunnetaan Valtuutuksen soveltamisalana, joka edustaa sitä, vaikuttaako haavoittuvuus resursseihin, jotka ylittävät haavoittuvan osan alkuperäisen turvallisuusviranomaisen.<br/><br/>Vain kaksi pätevää arvoa tälle ominaisuudelle ovat';

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

$GLOBALS["lang"]['Searching Using DataTables'] = 'Haetaan datataulukoita';

$GLOBALS["lang"]['Second'] = 'Toinen';

$GLOBALS["lang"]['secondary'] = 'Toissijainen';

$GLOBALS["lang"]['Secondary'] = 'Toissijainen';

$GLOBALS["lang"]['Secondary Text'] = 'Toissijainen teksti';

$GLOBALS["lang"]['Secret Key'] = 'Salainen avain';

$GLOBALS["lang"]['section'] = 'Pääluokka';

$GLOBALS["lang"]['Section'] = 'Pääluokka';

$GLOBALS["lang"]['secure'] = 'Turvallinen';

$GLOBALS["lang"]['Secure'] = 'Turvallinen';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Turvallisuussisällön automatisointiprotokolla';

$GLOBALS["lang"]['Security Level'] = 'Turvataso';

$GLOBALS["lang"]['Security Name'] = 'Turvanimi';

$GLOBALS["lang"]['Security Status'] = 'Turvallisuustilanne';

$GLOBALS["lang"]['security_zone'] = 'Turvavyöhyke';

$GLOBALS["lang"]['Security Zone'] = 'Turvavyöhyke';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Ks. edellä. HUOMAUTUS - Tämä voi johtua myös LDAP-palvelimella allekirjoitetusta varmenteesta. Teemme työtä sen mahdollistamiseksi tulevassa julkaisussa.';

$GLOBALS["lang"]['See our page on enabling'] = 'Katso sivumme mahdollistaa';

$GLOBALS["lang"]['Seed Discoveries'] = 'Seed Discoveries';

$GLOBALS["lang"]['seed_ip'] = 'Siemen-IP';

$GLOBALS["lang"]['Seed IP'] = 'Siemen-IP';

$GLOBALS["lang"]['seed_ping'] = 'Siemenping';

$GLOBALS["lang"]['Seed Ping'] = 'Siemenping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Siementen rajoittaminen yksityiseen';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Siementen rajoittaminen yksityiseen';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Siementen rajoittaminen aliverkkoon';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Siementen rajoittaminen aliverkkoon';

$GLOBALS["lang"]['Select'] = 'Valitse';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Valitse admin -> Tehtävät > Luo Tehtävä valikosta.';

$GLOBALS["lang"]['Select All'] = 'Valitse kaikki';

$GLOBALS["lang"]['Select All Devices'] = 'Valitse kaikki laitteet';

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

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Valitse valikko -> Hallitse -> Lähtökohdat -> Luettelo lähtökohdista.';

$GLOBALS["lang"]['Select a Table'] = 'Valitse taulukko';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Valitse akkreditoitu sertifiointielin';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Valitse ja käytä asianmukaisia tarkastuksia (liite A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Valitse <i>KOM Turvallisuus</i> välilehti<br/><br/>Klikkaa Käyttöoikeuksia Muokkaa oletusta';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Valitse <i>Allekirjoita</i> välilehti ja kopioi arvo <i>Liikkeeseenlaskija</i> (vain URL itse). Liitä tämä Open-AudITiin <i>Liikkeeseenlaskija</i> Kenttä.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Valitse <i>Tämä tili</i> valintaruutu ja anna tilin nimi ja salasana.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Valitse aloitusvalikko ja kirjoita <i>palvelut <.i> Napsauta Palveluiden kuvaketta.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Valitse Auth Menthodin tyyppi luodaksesi ja syöttääksesi tarvittavat tiedot.';

$GLOBALS["lang"]['Self Delete'] = 'Poista itse';

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

$GLOBALS["lang"]['Servers Only'] = 'Vain palvelimet';

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

$GLOBALS["lang"]['Service Under Windows'] = 'Palvelu Windowsissa';

$GLOBALS["lang"]['service_version'] = 'Palveluversio';

$GLOBALS["lang"]['Service Version'] = 'Palveluversio';

$GLOBALS["lang"]['Set'] = 'Aseta';

$GLOBALS["lang"]['set_by'] = 'Aseta';

$GLOBALS["lang"]['Set By'] = 'Aseta';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Asettaa Discovery toiminto - älä yleensä aseta tätä käsin.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Audit_domin tai löydä_domin skriptejä. Älä asetu.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Aseta ulkoinen teksti sisäisten tietojen kapitalisoituun versioon.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Aseta ulkoinen teksti pieneen koteloon.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Aseta ulkoinen teksti isoiksi kirjaimiksi.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Aseta listan näytöillä olevien taulukoiden koko (normaali tai kompakti).';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Aseta tämä, jos haluat lisätä järjestelmän AD, joka ei ehkä ole yhteyttä, mutta on nähnyt AD alkaen siitä päivästä.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Perustaminen Discovery aliverkko on lähes identtinen käynnissä säännöllinen Discovery kautta web-käyttöliittymä. Ainoat ylimääräiset kohteet ovat aikataulutettu tunti ja päivä [s] ja nimi aikataulutettu tehtävä itse. Voit hyödyntää tätä ajoittaa useita löytöjä käyttäen erilaisia valtakirjoja.<br/><br/>Kuten Subnet Discovery, Aktiivinen Directory Discovery on myös yksinkertaisesti samat kentät kuin säännöllinen Aktiivinen Directory Discovery lisäämällä päivän, tunnin [s] ja nimen.<br/><br/>Jos Open-AudIT-palvelimella on Collectors raportoimassa sille, annetaan ylimääräinen pudotus. Voit valita tämän määrittääksesi, mikä Keräilijä tehtävä pitäisi suorittaa. Vain Discovery tehtäviä tuetaan Collectors. Määrittele samat kohteet kuin säännöllinen Discovery, mutta anna vaihtoehtoinen Collector suorittaa tämän tehtävän.';

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

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Lähetetyt ovat oletuskohteita. Nämä löytyvät menemällä valikkoon';

$GLOBALS["lang"]['short'] = 'Lyhyt';

$GLOBALS["lang"]['Short'] = 'Lyhyt';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Pitäisikö minun poistaa kaikki käyttämättömät tiedot tästä laitteesta?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Jos tätä tiedostoa (tai kaavaa) käytetään jättämään tiedostot raportoimatta. Tavallisesti, tarkastaa tiedostoja, tämä on asetettu <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Jos tätä myyjää käytetään noutaessa haavoittuvuuksia FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Pitäisikö meidän lisätä laitteita etäpalvelusta, paikallisesti.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Pitäisikö meidän soveltaa tätä lisenssiä valittuun Organ sekä Orgas lapset?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Pitäisikö meidän tarkastaa SAN, jos hallinta ohjelmisto havaitaan.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Pitäisikö meidän tarkastaa pisteet?';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Pitäisikö meidän tarkastaa netstat portit (kyllä, ei, vain palvelimet).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Pitäisikö meidän tarkastaa asennettu ohjelmisto?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Pitäisikö suodatetun portin katsoa olevan avoin satama - ja sen vuoksi merkitä, että tässä IP-osoitteessa on laite kiinnitettynä?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Pitäisikö meidän pitää avointa ja suodatettua satamaa avoimena porttina - ja sen vuoksi merkitä tämä IP-osoite laitteena?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Muutetaanko isäntänimi pikkuasiakkaaksi?';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Pitäisikö meidän luoda tiedosto, joka perustuu tarkastuksen tulokseen?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Pitäisikö meidän paljastaa tämä ryhmä web-käyttöliittymässä.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Pitäisikö meidän paljastaa tämä kysely raporttien luettelossa raportin valikosta web-käyttöliittymässä.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Pitäisikö meidän paljastaa tämä kysely raporttien luettelossa raporttien valikossa web-käyttöliittymässä.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Pitäisikö komentoikkuna piilottaa?';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Pitäisikö meidän jättää huomiotta virheellinen tai itse allekirjoitettu SSL-sertifikaatti ja toimittaa tulos joka tapauksessa.';

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

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Pitäisikö meidän hakea kaikki DNS nimet?';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Pitäisikö meidän tehdä tarkastus ja toimittaa se (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Pitäisikö meidän testata SNMP käyttäen UDP port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Pitäisikö meidän testata SSH TCP portti 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Pitäisikö meidän testata WMI TCP portilla 135?';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Pitäisikö meidän poistaa agentti (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Pitäisikö meidän käyttää järjestelmää tai käyttäjätason välityspalvelinta toimittaaksemme tarkastuksen tuloksen.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Pitäisikö meidän käyttää win32_product WMI luokan (ei suositella Microsoft) noutaessa asennettuja ohjelmistoja.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Pitäisikö meidän käyttää tätä menetelmää käyttäjätunnusten todentamiseen? Aseta <code>y</code> tai <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Pitäisikö meidän käyttää tätä menetelmää käyttäjien roolit. Kenttä <code>use_auth</code> on asetettava <code>y</code> Käyttää tätä. Aseta <code>y</code> tai <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Pitäisikö käyttää tätä arvoa vastaamaan ulkoisia ja sisäisiä laitteita. Oletuksena integraatio käyttää IP ja UUID täällä. Jos jompikumpi näistä täsmää ulkoisen ja sisäisen laitteen välillä, ne ovat sama laite.';

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

$GLOBALS["lang"]['Slovak'] = 'Slovakia';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakia (Slovakin tasavalta)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenia';

$GLOBALS["lang"]['Slovenian'] = 'Slovenia';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Joten käsikirjoitus ei toimi vastahakoisen laitteen kanssa. Grrr. Windowsin, Linuxin ja MacOSin skriptit hyväksyvät vianetsintäparametrin. Tämä voidaan asettaa komentosarjaan itse tai komentoriville. Suorita skripti käyttämällä tätä valintaa 5 ja sinun pitäisi nähdä missä osassa komentosarjaa vika tapahtuu. Esimerkiksi';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Joten lukuun ottamatta säännöllisesti sana, mitä muita vaihtoehtoja on olemassa - Olen iloinen, että kysyit! Kuten standardin Open-AudIT API, meillä on useita operaattoreita suodatus. Operaattorit, jotka voivat edeltää arvoa ovat';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Joten sinulla on ongelma antaa Open-AudIT-tunnuksia löytää laitteita. Minulla on vastaus - älä sitten! Löytö on parasta sitten viipaloidun leivän. Sinun ei tarvitse tietää etukäteen. <i>Mitä verkossasi on?</i>. Mutta miten voit poimia tietoja laitteista antamatta valtuuksia?<br/><br/>Tietokoneiden tapauksessa helppo vaihtoehto on kopioida asianmukainen tarkastusskripti kohdekoneille ja asettaa se suorittamaan aikataulun mukaisesti. Lisää yksityiskohtia wikistä. Koneet lähettävät tietonsa Open-AudIT: lle tuossa aikataulussa, melkein kuin olisit tekemässä löytöä. Laite yksinkertaisesti ajaa audit skriptiä aikataulussa (taas, voit lukea audit skript) käyttäjä käsket sitä ja lähettää tuotoksen palvelimelle. Asiaan ei liity mitään.<br/><br/>Nyt meillä on Windowsin agentteja. Todellisen asennetun agentin edut ovat';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Ohjelmisto';

$GLOBALS["lang"]['Software'] = 'Ohjelmisto';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Ohjelmisto löytyi viimeiset 7 päivää';

$GLOBALS["lang"]['Software Found Today'] = 'Ohjelmisto löytyi tänään';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Ohjelmisto löytyi eilen';

$GLOBALS["lang"]['software_key'] = 'Ohjelmistonäppäin';

$GLOBALS["lang"]['Software Key'] = 'Ohjelmistonäppäin';

$GLOBALS["lang"]['Software License Reporting'] = 'Ohjelmistolisenssien raportointi';

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

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Joitakin kokoelmia voidaan toteuttaa - kyselyt jne. - katso alla.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Jotkut esimerkit ovat tämän sivun alareunassa. Kaikissa päätepisteissä on myös vähimmäisluettelo vaadituista kentistä. Nämä ovat alla.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Jotkut mallimme tukevat uutta siirtymistä dataTables käyttäen palvelimen puolella käsittelyä. Tämä massivley parantaa kuormitusaikoja.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'LDAP-palvelimen sitomisessa on tapahtunut myös toinen virhe. Se on yhteydessä (ts. <i>yhteys</i> (ks. kohta 4. 4) Tarkista LDAP-palvelimen lokit.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Jokin on mennyt pahasti pieleen. Open-AudIT ei voi lukea <i>orgs</i> Pöytä.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Jokin on mennyt pahasti pieleen. Open-AudIT ei voi lukea <i>roolit</i> Pöytä.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Joskus agenttiton löytö ei sovi käyttötapaukseesi. Ehkä tietokoneissasi on tiukat palomuurit. Ehkä ne eivät ole verkossa, kun löytösi on suunniteltu. Ehkä etätyöntekijät käyttävät niitä. Mitä tahansa, täällä agentti voi auttaa. Asenna se kohde koneeseen ja se <i>lähtöselvitys</i> Open-AudIT-palvelimellasi aikataulussa ja hyväksy tehtävät. Yleisin tehtävä palvelin pyytää on, että asiamies itse tarkastaa ja lähettää tulos.';

$GLOBALS["lang"]['Sort'] = 'Järjestä';

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

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Vaihe 1: Asiakirjojen arviointi';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Vaihe 2: Täytäntöönpanon ja tehokkuuden arviointi';

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

$GLOBALS["lang"]['Start a web browser and go to'] = 'Käynnistä selain ja mene';

$GLOBALS["lang"]['started_date'] = 'Aloituspäivä';

$GLOBALS["lang"]['Started Date'] = 'Aloituspäivä';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Kesäkuusta 2018 alkaen Google on ottanut käyttöön Google Maps -alustan sovellusliittymien maksullisen hinnoittelumallin. Aiemmin useimmat kohtuullisen käytön käyttäjät voisivat käyttää Google Mapsia, joka on upotettu opChartsiin ja Open-AudIT Professional/Enterprise, ilmaiseksi. Tässä hahmotellaan uutta politiikkaa.';

$GLOBALS["lang"]['Starts With'] = 'Alkaa';

$GLOBALS["lang"]['state'] = 'Tila';

$GLOBALS["lang"]['State'] = 'Tila';

$GLOBALS["lang"]['Stats'] = 'Tilasto';

$GLOBALS["lang"]['status'] = 'Tila';

$GLOBALS["lang"]['Status'] = 'Tila';

$GLOBALS["lang"]['Storage'] = 'Varastointi';

$GLOBALS["lang"]['storage_count'] = 'Varastointi';

$GLOBALS["lang"]['Storage Count'] = 'Varastointi';

$GLOBALS["lang"]['Storage area network'] = 'Varastoalueverkko';

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

$GLOBALS["lang"]['Submit Online'] = 'Lähetä online';

$GLOBALS["lang"]['Submitted From'] = 'Lähetetty';

$GLOBALS["lang"]['Subnet'] = 'Aliverkko';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet Discoveries';

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

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Tiivistelmät ovat yksi kysely vastaan tietokantaa kanssa <i>ryhmä</i> Komento. Tämän yksinkertaisen menetelmän avulla voimme helposti luoda yhteenvedon lähes mistä tahansa ominaisuudesta.<br/><br/>Emme tarvitse enää erillistä raporttia jokaisesta <i>tyyppi</i> laite. Nyt meillä on yksinkertaisesti yhteenveto, että ryhmät <i>laitteet. tyyppi</i> ja näyttää tuloksen. Voit sitten napsauttaa tiettyä tyyppiä luettelosta ja nähdä vastaavat laitteet. Tässä tapauksessa yksi yhteenveto korvaa (mahdollisesti) 78 raporttia (eli 78 laitetyyppiä).<br/><br/>Tiivistelmä eroaa kyselystä siinä, että yhteenveto on suunniteltu ryhmittelemään kohteita tietyllä ominaisuudella ja antaa <i>klikkaa läpi</i> linkki varsinaisiin laitteisiin. Kysely on vain luettelo kohteista, joilla ei ole muita linkkejä. Kuten edellä - tämä yhteenvetona <i>raportti + osakertomus</i>, kun taas kysely on yksinkertaisesti yksi raportti.<br/><br/>Tiivistelmät ovat erilaisia kokoelmamalli kuin muut resurssit Open-AudIT. Tämä malli näyttää Summary kuten odottaa ja myös näyttää painikkeet muiden resurssien. Tämä sivu on suunniteltu olemaan Open-AudITin kotisivu.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Tiivistelmät on suunniteltu ryhmittelemään kohteita tietyn vastaavan sarakkeen avulla ja sitten tarjoamaan linkki yksittäisiin laitteisiin. Open-AudITin aiemmissa versioissa tämä olisi ollut kaksi eri kohtaa - raportti ja alakertomus. Olemme nyt liittäneet nämä yhteenvetoon.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Tiivistelmät tarjoavat porauksen raportointiominaisuudet. Yksinkertainen, intuitiivinen, voimakas.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Tiivistelmät käyttävät samoja argumentteja kuin kyselyt.';

$GLOBALS["lang"]['Summary'] = 'Yhteenveto';

$GLOBALS["lang"]['Sunday'] = 'Sunnuntai';

$GLOBALS["lang"]['supplier'] = 'Toimittaja';

$GLOBALS["lang"]['Supplier'] = 'Toimittaja';

$GLOBALS["lang"]['Support'] = 'Tuki';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Tuetut tyypit ovat <code>subnet</code>, <code>seed</code> sekä <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Tukee oikeudellisten ja sääntelyvaatimusten noudattamista';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Valvontatarkastukset: Vuosittaiset tarkastukset sertifioinnin ylläpitämiseksi';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Swazimaa';

$GLOBALS["lang"]['Sweden'] = 'Ruotsi';

$GLOBALS["lang"]['Swedish'] = 'Ruotsi';

$GLOBALS["lang"]['switch_device_id'] = 'Vaihda laitteen tunnistetta';

$GLOBALS["lang"]['Switch Device ID'] = 'Vaihda laitteen tunnistetta';

$GLOBALS["lang"]['switch_port'] = 'Vaihda porttia';

$GLOBALS["lang"]['Switch Port'] = 'Vaihda porttia';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Sveitsi';

$GLOBALS["lang"]['Symptom'] = 'Oire';

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

$GLOBALS["lang"]['Table'] = 'Taulukko';

$GLOBALS["lang"]['tag'] = 'Merkitys';

$GLOBALS["lang"]['Tag'] = 'Merkitys';

$GLOBALS["lang"]['tag_1'] = 'Merkintä 1';

$GLOBALS["lang"]['Tag 1'] = 'Merkintä 1';

$GLOBALS["lang"]['tag_2'] = 'Merkintä 2';

$GLOBALS["lang"]['Tag 2'] = 'Merkintä 2';

$GLOBALS["lang"]['tag_3'] = 'Merkintä 3';

$GLOBALS["lang"]['Tag 3'] = 'Merkintä 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Tunnisteet';

$GLOBALS["lang"]['Tags'] = 'Tunnisteet';

$GLOBALS["lang"]['Tags :: '] = 'Tunnisteet:: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadžikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Pane tarvittaessa merkille kaikki tulokset ja toimet.';

$GLOBALS["lang"]['Tanzania'] = 'Tansania';

$GLOBALS["lang"]['Target Computer'] = 'Kohdetietokone';

$GLOBALS["lang"]['task'] = 'Tehtävä';

$GLOBALS["lang"]['Task'] = 'Tehtävä';

$GLOBALS["lang"]['tasks'] = 'Tehtävät';

$GLOBALS["lang"]['Tasks'] = 'Tehtävät';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Tehtävät voivat olla yksi monista eri tyypeistä: Lähtötilanne, Discovery, Raportti, kysely, yhteenveto tai Kerääjä.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp-satamat';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp-satamat';

$GLOBALS["lang"]['Technical Details'] = 'Tekniset yksityiskohdat';

$GLOBALS["lang"]['tenant'] = 'Vuokra';

$GLOBALS["lang"]['Tenant'] = 'Vuokra';

$GLOBALS["lang"]['Tenant ID'] = 'Vuokratunnistus';

$GLOBALS["lang"]['Tennant ID'] = 'Telnnan tunnus';

$GLOBALS["lang"]['ternary'] = 'Ternaari';

$GLOBALS["lang"]['Ternary'] = 'Ternaari';

$GLOBALS["lang"]['Test 1'] = 'Testi 1';

$GLOBALS["lang"]['Test 2'] = 'Testi 2';

$GLOBALS["lang"]['Test 3'] = 'Testi 3';

$GLOBALS["lang"]['Test Email'] = 'Testisähköposti';

$GLOBALS["lang"]['test_minutes'] = 'Testipöytäkirja';

$GLOBALS["lang"]['Test Minutes'] = 'Testipöytäkirja';

$GLOBALS["lang"]['test_os'] = 'Testi Os';

$GLOBALS["lang"]['Test Os'] = 'Testi Os';

$GLOBALS["lang"]['test_subnet'] = 'Testin aliverkko';

$GLOBALS["lang"]['Test Subnet'] = 'Testin aliverkko';

$GLOBALS["lang"]['tests'] = 'Testit';

$GLOBALS["lang"]['Tests'] = 'Testit';

$GLOBALS["lang"]['Text'] = 'Teksti';

$GLOBALS["lang"]['Thai'] = 'Thai';

$GLOBALS["lang"]['Thailand'] = 'Thaimaa';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Kiitos matkasi aloittamisesta paras löytö ja inventaario työkalu noin.';

$GLOBALS["lang"]['Thanks to'] = 'Kiitos';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Nyt riitti! Olet juuri muokannut niin monen laitteen ominaisuuksia kuin tarvitset.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = '• <i>Roolit</i> päätetapahtuman avulla voit hallita joukko käyttölupia(Luo, Lue, Päivitä, Poista), jotka myönnetään käyttäjille ja sovelletaan kunkin päätepisteen.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API käyttää keksiä. Voit pyytää evästeen lähettämällä POST-postin alla olevaan URL-osoitteeseen, joka sisältää käyttäjätunnuksen ja salasanan ominaisuudet ja arvot:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Aktiivisen hakemiston verkkotunnus, josta voit hakea listan aliverkoista.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory -palvelin, jolta voit hakea listan aliverkoista.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Sovellusten päätepisteen avulla voit määritellä sovelluksen, jonka voit liittää laitteeseen (tai laitteisiin).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Attribuuttien päätetapahtuman avulla voit lisätä mukautetut arvot Open-AudIT:n eri attribuuteille, tällä hetkellä tämä ominaisuus toimii Devices-luokan, ympäristön, tilan ja tyypin attribuutteihin, sekä sijaintien että orgien tyyppiattribuutteihin sekä kyselyjen valikkokategoriaan. Jos näet jonkin tyypistä (say view a Lkocation), huomaat, että tyyppi-attribuutti on valittava pudotusruudusta. Tähän nämä arvot tallennetaan. Joten, jos haluat lisätä uuden tyyppi valitaan Sijainti, Lisää se käyttäen attribuutit ominaisuus.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatable metri kaappaa vastauksen kysymykseen <strong>Voiko hyökkääjä automatisoida hyväksikäyttötapahtumat tämän haavoittuvuuden takia useissa kohteissa?</strong> Se perustuu tappoketjun vaiheisiin 1-4. Nämä vaiheet ovat tiedustelu, aseistus, toimitus ja hyväksikäyttö (ei määritelty, Ei, Kyllä).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE on merkitty pätemättömäksi tai vedetty pois CVE-luettelosta. Se on edelleen NVD mutta jätetään oletushakutuloksiin.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE on julkaistu CVE-listalle ja sisällytetty NVD-tietokantaan. Vain alkuannoksena.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE on päivitetty ensimmäisen analyysin jälkeen. NVD-rikastamistietoja on voitu tarkistaa.';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE-tunniste.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE:tä rikastutetaan aktiivisesti CVSS-pisteillä, CWE-luokituksilla, viitetunnisteilla ja CPE-soveltuvuudella.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE:tä ei ole tällä hetkellä asetettu etusijalle rikastuksen kannalta resurssien puutteen tai muiden syiden vuoksi.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'NVD-analyytikot jonottavat CVE:tä. Ei vielä yksityiskohtaisia metatietoja.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Pilvi, joka omistaa tämän esineen. Linkit <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Device Seed Discovery tyyppi on uusin erittäin tehokas menetelmä verkon ryömiminen, antaa sinulle mahdollisuuden kohdistaa verkkosi niin kapea tai laajalle kuin tarvitset. Se on nopea, se toimii ja se on suuri.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Discovery Scan Alla olevassa taulukossa esitetään yksityiskohtaiset vaihtoehdot. Kuten edellä, Enterprise käyttäjät voivat luoda enemmän näitä tai muokata lähetettyjä kohteita.';

$GLOBALS["lang"]['The Elevated User query'] = 'Kohonnut käyttäjäkysely';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Suoritettavat tiedostot skannaavat laitteen levyn osana tarkastusta ja tarkistavat, että kaikki suoritettavat tiedostot ovat paketinhallinnan tiedossa. Koska se käyttää paketinhallintaa, ominaisuus koskee vain Linux-kohdelaitteita ja sen lisäksi vain rpm- tai deb-pohjaisia jakeluja. Minkä tahansa Redhat tai Debianin perusteella pitäisi toimia.';

$GLOBALS["lang"]['The FROM'] = 'MISTÄ';

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

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO/IEC 27001 -sertifiointiprosessi ja sen keskeiset osatekijät.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP tai Telco tarjoaa tämän linkin.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Json-levy Mitreltä.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON-levy NVD-syötteestä.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Tämän käyttäjän LDAP OU (jos käytetään LDAP:tä).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'LDAP- palvelinta ei voitu yhdistää. Ei ollenkaan. Tarkista, että se on pingable Open-AudIT-palvelimelta. Tarkista oikea portti Open-AudIT-palvelimelle. NMap Open-AudIT-palvelimelta näyttää tämän. Korvaa LDAP-palvelimet IP $ip. Kokeile:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'LDAP- palvelintyyppi on virheellinen. Sen pitäisi olla joko <i>aktiivinen kansio</i> tai <i>openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'LDAP-palvelin liitettiin ja käyttäjätunnukset hyväksyttiin sidottavaksi.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Linux Open-AudIT -asentaja testaa ja asentaa tarvittaessa Open-AudITs -riippuvuustiedot jakeluarkistostasi, mukaan lukien Nmap SetuIDin asetus. Tätä edellytetään SNMP:n (UDP 161) toteamiseen ei-juurikäyttäjän toimesta. Tämä on tuettu RedHat/CentOS ja Debian/Ubuntu. Jos tarvitset manuaalisesti asentaa Nmap:<br/><br/>RedHat/CentOS do (HUOMAUTUS - Jos päivität käyttämällä namia, sinun täytyy soveltaa tätä uudelleen <i>chmod</i> asetus).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Sijainti, joka sisältää tämän verkon. Linkit <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD:n antama perusasema.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Kansallinen standardointi- ja teknologiainstituutti on liittovaltion teknologiavirasto. Ne edistävät virallista teknologiaa, mittaustiedettä ja standardeja.';

$GLOBALS["lang"]['The Network to Discover'] = 'Verkosta etsittävä';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmapin ajoitus asetettu.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Käyttöönotto tästä paketista on ilmoitettava. Tyhjä kaikille. Käytä prosenttimerkkiä % villinä korttina. Testataan os_groupia, os_perhettä ja os_name tässä järjestyksessä.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Yhdistetyn pilven Open-AudIT-tunniste. Linkit <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open-Aud Tietopalvelimen koodi poistettiin tästä tiedostosta.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open-Aud IT-palvelimen koodi poistettiin tässä funktiossa.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'OpenSCAP-ekosysteemi tarjoaa useita työkaluja, joiden avulla hallinnoijat ja tilintarkastajat voivat arvioida, mitata ja valvoa tietoturvan lähtökohtia, mukaan lukien laajan valikoiman karkaistuja oppaita ja konfiguraatioita, jotka avoimen lähdekoodin yhteisö on kehittänyt, varmistaen, että voit valita organisaatiosi tarpeisiin parhaiten sopivan turvallisuuspolitiikan sen koosta riippumatta.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAP-hanke on kokoelma avoimen lähdekoodin työkaluja tämän standardin täytäntöönpanemiseksi ja täytäntöönpanemiseksi, ja sille on myönnetty SCAP 1.2 -sertifiointi NIST:ltä vuonna 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organisaatio, joka omistaa tämän esineen. Linkit <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Juoksevan löydön prosessitunniste.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Tämän laitteen yläosan rautatieasema.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Racks-ominaisuudella hallitaan ja visualisoidaan telineen käyttöä organisaation, sijainnin, rakennuksen, lattian, huoneen ja rivin avulla.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP on eritelmä, joka ilmaisee ja käsittelee tietoturvatietoja standardoiduilla tavoilla. SCAP käyttää useita yksittäisiä eritelmiä yhdessä jatkuvan seurannan, haavoittuvuuden hallinnan ja turvallisuuspolitiikan vaatimustenmukaisuuden arvioinnin automatisoimiseksi.';

$GLOBALS["lang"]['The SELECT'] = 'SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Kyselyn SELECT-osiossa on käytettävä täyttä pistemerkintää ja pyydettävä myös kenttää täydellä pistenimellä. IE - SELECT-laitteet. id AS  Jokainen kenttä on valittava tällä tavalla, jotta GUI-ominaisuus suodatus.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'SQL:n SELECT-osassa on oltava täysin pätevät sarakkeet ja tietyt sarakkeet.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP-yhteisön merkkijono.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 -todentamislause.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 -todentamisprotokolla.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 turvataso.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 turvanimi.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3-kontekstimoottorin tunnus (valinnainen).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3-kontekstin nimi (valinnainen).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL ei voi sisältää <strong>MISSÄ @suodatin TAI</strong>. Että SQL ei kuitenkaan teloitetaan, <strong>@filter JA</strong> Kysymykset ovat sallittuja.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Open-AudIT:ssä käytetyt SQL-kyselyt vaativat backtickin käyttöä. Useimmissa US Windowsin näppäimistöissä backtick-näppäin sijaitsee näppäimistön ylävasemmalla näppäimistöllä yhdessä kallistuksen ~ kanssa. US Mac -näppäimistöllä backtick-näppäin sijaitsee SHIFT-näppäimen vieressä. Standardin mukaista yksittäistä tarjousta käytetään edelleen arvojen liittämiseen, kuten jäljempänä esitetyt esimerkit osoittavat.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL-kysely on pääosin jaettu kolmeen osaan.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Open-AudITin Standards-toiminnon avulla voit täyttää kysymykset, joita tilintarkastajat vaativat ISO 27001 -sertifioinnin valmistuttua.';

$GLOBALS["lang"]['The URL of the external system.'] = 'Ulkoisen järjestelmän URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Avoimen audittisi URL Palvelin, jolle tämä keräilijä raportoi (ei jälkiviivaa).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Tarkastusskriptien on toimitettava tulos URL-osoitteeseen.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Käyttäjän päätetapahtuman avulla voit hallita käyttäjätilejä Open-AudIT:ssä.';

$GLOBALS["lang"]['The WHERE'] = 'MISTÄ?';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'SQL-osio <em>on</em> sisältää';

$GLOBALS["lang"]['The Windows'] = 'Ikkunat';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Windows-loki voi sanoa seuraavaa:';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Tilillä on oltava salasana; WMI ei salli tyhjiä salasanoja.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Tilin salasana ei saa sisältää \" (kaksinkertaiset lainaukset). Tämä johtuu siitä, että käsikirjoitus (ja wscript) ei voi tulkita argumenttiarvoja, jotka sisältävät kaksinkertainen lainausmerkkejä. Ne on riisuttu. Ei (ennen kuin kysyt) paeta ei toimi. Tämä on käsikirjoitusrajoitus eikä liity Open-AudIT:iin.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Tämän käyttäjän varsinainen koko nimi.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Open-AudIT-palvelimen osoite lähettää sivun.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Hallinnoija toimitti tiedot, joita käytettiin LDAP:n sitomiseen.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'LDAP-palvelimen ylläpitäjä toimitti tiedot, mutta LDAP-server ei ole hyväksynyt niitä. Tarkista LDAP-palvelimen tunnustiedot ja tarkista (tai nollaa ne) Open-AudIT LDAP Server -syötteestä.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Agentti ja palvelin ovat myös riittävän älykkäitä päivittääkseen agentin itse, jos uudempi versio asennetaan palvelimelle (sano sen jälkeen, kun Open-AudIT on päivitetty).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Edustajan on ladattava uusi kopio tilintarkastusskriptistä, tehtävä se ja toimitettava tulos palvelimelle.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Sovellus luo tilapäisiä auditointeja, kopioi ne kohdekoneisiin ja poistaa ne.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Tähän liittyvä perustaso. Linkit <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Tähän liittyvä löytö (tarvittaessa). Linkit <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Määrite testattavaksi (alkaen <code>devices</code> Taulukko).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Testattava attribuutti (on vastattava ulkoista kentän nimeä jäljempänä).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Etsi skannausvalintojen ominaisuudet ovat alla.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Auditointi skripti, johon voit perustaa räätälöinnit.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Auditointiskripti käyttää tiedostoja[ ] ja noutaa tiedoston tiedot.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Kaikki tarkastusskriptit hyväksyvät vianetsintä argumentin. Voit ajaa käsikirjoituksen käyttäen sitä ja nähdä tarkemmin, mikä on ongelma. Ja jos et tajua sitä - sitä varten olemme täällä! Avaa tukitapaus, niin saamme asiat käyntiin.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Peruspolku, josta etsiä käyttäjiä.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Alla olevat vaiheet eivät ole Open-AudITin vika tai ainutlaatuinen ja vaikuttaisivat <strong>mikä tahansa</strong> löytösovellus käyttäen WMI:tä ja/tai Windowsia.';

$GLOBALS["lang"]['The benchmark type.'] = 'Vertailukohdetyyppi.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Rakennuksessa teline sijaitsee.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Ulkoisesti luotavien laitteiden laskettu määrä.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT:ssä luotujen laitteiden laskettu määrä.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Asiakastunnus on Azure Active Directory -sovelluksen tunniste. Asiakassalaisuus on avain, jonka annat hakemukselle.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Keräin on pohjimmiltaan täydellinen asennus Open-AudIT in <i>keräilijä</i> tila. Kerääjä on suunniteltu tekemään löytöä verkossa, jossa se sijaitsee. Se ei rajoitu ainoastaan kyseiseen verkkoon, vaan se olisi ihannetapauksessa yksi keräin aliverkkoa kohden, jos sitä tarvitaan. Palvelin ajaa keräilijän ajamaan aikataulun mukaan ja suorittaa löydön verkossa siten kuin on määritelty.<br/>Kun seisoo Yksin Collector toimii itsenäisenä palvelimena, yksinkertaisesti siirtäen kaikki löydetyt laitteet pääpalvelimelle.<br/><br/>Asennuksen jälkeen Collectorin ohjaus suoritetaan Palvelimella (ei Stand Alone -tilassa).<br/><br/>Ainoat tarvittavat verkkoportit kerääjän ja palvelimen välillä ovat 80 tai 443 (TCP-yhteys luotu Collectorista Serveriin). Open-AudIT-tietokantaa ei jaeta (ja sitä ei voida jakaa) näiden asennusten kesken.<br/><br/>Oletuksena keräilijä (ei Stand Alone -tilassa) pyytää palvelimelta kaikki löytötehtävät 5 minuutin välein (voit määrittää tämän palvelimelle uusille keräilijöille käyttäen konfiguraatiolaitteen keräin_check_minuutteja), jotta mahdolliset löytötehtävät keräilijä olisi ajoitettu 0, 5, 10, 15 jne minuuttia.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Keräin on pohjimmiltaan täydellinen asennus Open-AudIT in <i>keräilijä</i> tila. Tämä tila vähentäisi näkyvää toiminnallisuutta pyrkiessään yksinkertaistamaan ja kohdentamaan sovellusta. Sen tarkoituksena on kerätä tietoa paikallisista verkoista ja laitteista, joissa palomuuri ja/tai verkkotransversaali on ongelma palvelimelta.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Keräilijöiden sisäinen IP käytetään, kun se tekee löydön.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Vieraan pöydän sarakkeen nimi. Olisi oltava yksi: luokka, ympäristö, tila, tyyppi tai valikko_ luokka.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Kohdelaitteessa tai Open-AudIT-palvelimen koodissa suoritettu komento.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Klusterin kokoonpano voi olla: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> tai tyhjä.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Valtakirjan salasana. Jos tunnusluvut ovat SSH-avain, tämä on salasana, jota käytetään avaimen avaamiseen ja on valinnainen.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Käyttäjän antamat tiedot ovat epäonnistuneet.';

$GLOBALS["lang"]['The credentials username.'] = 'Henkilötunnukset.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Nykyinen päivämäärä ja kellonaika muodossa: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Nykyinen päivämäärä Y-m-d-muodossa.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Pilvilöydön nykytila.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Löydön nykytila.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Kojelauta, joka näytetään oletuksena tälle käyttäjälle. Linkit <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Tietokantaan tallennetut tiedot eivät näy hakemuksessa käännettynä. Jätämme tiedot ennalleen. Mikään ei kuitenkaan estä sinua, käyttäjää, vaihtamasta tietokannan kohteen nimeä (esimerkiksi) kielellesi.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Syöttämiäsi tietoja käytetään <code>LIKE</code> lauseke, ei (API:n mukaisesti) a <code>equals</code> kohta. Toinen esimerkki - jos syötät <code>comput</code>, Se silti palauttaa kaikki tietokoneet. Ja koska käytämme <code>LIKE</code> lauseke, se on tapausherkkä.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Tietokannan skeema löytyy sovelluksesta, jos käyttäjällä on tietokanta::Lue lupa menemällä valikkoon: Admin -> Tietokanta ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Tietokannan versio ja web-versio ovat epäjohdonmukaisia.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Luvan voimassaolon päättymispäivä.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Päivämäärä, jona valmistaja lopettaa ohjelmiston. Yleensä se korvataan uudemmalla versiolla. Huolto voi olla vielä käytettävissä.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Päivä, jona ohjelmisto ei enää saa päivityksiä, ja se lakkautetaan kokonaan. Huolto lopetetaan.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Päivä, jona tätä kohtaa muutettiin tai lisättiin (lue vain). HUOM - Tämä on aikaleima palvelimelta.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Päivä/aika, jolloin tulos luotiin.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Kuukauden päivä, jona tämä tehtävä on suoritettava (* joka päivä).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Viikon päivä, jolloin tämä tehtävä on suoritettava (* joka päivä).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Vianetsintätaso (ulostulo komentokehotuksen ikkunaan). Alempi tarkoittaa vähemmän tuotosta, kun 0 ei ole ulostuloa.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Oletuslöydön skannausvaihtoehto on UltraFast-asetus.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Oletuskieli annetaan kaikille käyttäjille luotu tällä menetelmällä.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Laitteen on vastattava Nmap ping ennen sitä pidetään verkossa.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Laite Open-AudITissa. Linkit <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Skriptin suora linkki on';

$GLOBALS["lang"]['The email address of the reciever'] = 'Vastaanottajan sähköpostiosoite';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Yrityksen binary FirstWave vaaditaan lisenssi. Lataa Open-AudIT';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Koko tähän liittyvä tulos on saatu.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Hyödynnetty haavoittuvuus voi vaikuttaa resursseihin, jotka ylittävät heikossa asemassa olevan osan turvallisuusviranomaisen. Tämä tarkoittaa yleensä etu- tai luottamusrajan ylittämistä (esimerkiksi säiliöstä pakenemista isäntäkäyttöjärjestelmään).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Hyödynnetty haavoittuvuus vaikuttaa ainoastaan saman turvallisuusviranomaisen resursseihin kuin haavoittuvan osan resursseihin. Toisin sanoen hyökkääjän toimet pysyvät alkuperäisen luottamusrajan sisällä.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Ulkoinen sijaintitunnus. Yleensä asutetaan pilviauditoinnit.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Integraatioon liittyvät kentät tallennetaan tietokantaan JSONin objektien sarjana. Kussakin kentässä on seuraavat ominaisuudet:';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Ensimmäinen kerta, kun Open-AudIT sai tiedot tästä laitteesta.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Lattia teline sijaitsee.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Ulkomainen pöytä. Pitäisi olla yksi: laitteet, sijainnit, orgs tai kyselyt.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Tietosi tulisi olla muodossa';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Lähetettävässä tulosteessa käytettävä muoto.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Täysin pätevä sarake, johon ryhmitellään. HUOMAUTUS: Kun tyyppi = liikenne, tämä edustaa punaista kyselyn tunnistetta.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Ulkoisen järjestelmän palauttama täysin pätevä nimi. EG: NMIS käytämme asetuksia. rooli Kirjoita.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Täysin pätevä taulukko. sarake. Pilkussa voi olla useita välilyöntejä.';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Luotu SQL kysely testata tätä haavoittuvuutta. Tämä kenttä voidaan muokata korjaamaan kyselyn tarpeen mukaan.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Laiteryhmä, jolla perustasoa on vastustettu.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Ryhmä, joka toimittaa luettelon laitteista integrointia varten. Linkit <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Päivän tunti, jolloin tämä tehtävä on suoritettava (* joka tunti).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Linkitetyn laitteen tunniste. Linkit <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Tietokannan tunnistesarake (integer) (lue vain).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Tämän perustason merkitys (ei vielä käytössä).';

$GLOBALS["lang"]['The integer of severity.'] = 'Tarkkuuden kokonaisluku.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Sisäinen arvo, uudistettu tässä muodossa.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth-menetelmän IP-osoite.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Kieli kääntää web-käyttöliittymän käyttäjälle.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Tämän erän viimeinen toteutuspäivä ja -aika (lue vain).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Viimeksi kun Open-AudIT sai tiedot tästä laitteesta.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Viimeksi nämä vertailuarvot toteutettiin.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Viimeksi tämä kotoutuminen tehtiin.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Lisenssin päätepisteen avulla voit seurata laitteissasi olevien lisenssien määrää.';

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

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Looginen laitteen yhteensovittaminen sisältyy devices_helper.php-tiedostoon, joka on Linux-asennus löytyy täältä';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Kone-oletuslupa-asetukset eivät myönnä paikallista aktivointilupaa COM-palvelimen sovellukselle';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Suurin fyysinen paino (KG:inä) tämä teline kestää.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Maksimi BTUs tämä teline on luokiteltu.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Määritteitä koskevat vähimmäisvaatimukset ovat';

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

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Uudella agentilla on PowerShell-versio vanhasta tilintarkastusskriptistä valmisteltaessa VBScriptin poistoa (kyllä, se on tulossa).';

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

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Ohitus on niiden laitteiden määrä, joista haluat palauttaa tiedot.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Ainoa tarvittava lupa / politiikan nimi (testauksessa) on';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Valinnainen toissijainen sarake. HUOM: Kun tyyppi = liikenne, tämä edustaa keltaista kyselyn tunniste.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Valinnainen kolmas sarake. HUOM: Kun tyyppi = liikenne, tämä edustaa vihreää kyselyn tunniste.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Tiedonhakujärjestys on snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Tämän laitteen suunta.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Salasana (jos käyttäjä ei käytä komentosarjaa).';

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

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Ensisijainen menetelmä luvan (mitä käyttäjä voi tehdä) perustuu nyt käyttäjien Roolit. Roolit määritellään admin, org_admin, toimittaja, ja käyttäjä oletuksena. Jokaisella roolilla on kunkin päätepisteen käyttöoikeudet (Luo, Lue, Päivitä, Poista). Lähetettyjen vakioroolejen tulisi kattaa 99,9 prosenttia käyttötapauksista. Open-AudIT Enterprisessa on mahdollista määritellä lisärooleja ja muokata olemassa olevia rooleja.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Tämän jonon kohteen prosessitunniste.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Prosessi, jota käytettiin viimeksi hakemaan yksityiskohtia laitteesta';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Tämän lisenssisivun tarkoituksena on listata Firstwave Commercial -tuotteisiin sisältyvät tuotteet ja lisenssit, mukaan lukien avoimen lähdekoodin teoksiin perustuvat tuotteet. Open-AudIT on lisensoitu Firstwave nojalla AGPLv3 tai myöhemmin Enterprise ja Professional toiminnallisuutta lisensoitu kaupallisin ehdoin. Open-AudIT, kun se ladataan FirstWavesta, voi sisältää seuraavat kirjastot ja projektit, jotka toimitetaan muuttamattomana ja lisensoituna seuraavasti:';

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

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Pyydetyt kiinteistöt pitäisi olla pilkulla eroteltuina. Ominaisuudet pitäisi olla täysin päteviä - eli, system.hotname (ei vain isäntänimi).';

$GLOBALS["lang"]['The result of the command.'] = 'Käskyn tulos.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Huone, jossa teline sijaitsee.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Rivi teline sijaitsee.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'LDAP-palvelimen ryhmähaku epäonnistui. Tarkista LDAP-palvelinlokit. Oletko luonut nämä ryhmät (rooleja ja orgeja varten) LDAP-palvelimelle ja määrännyt heille LDAP-käyttäjät?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Salainen avain käytetään yhdessä AWS EC2 API-avain.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Ohjelmiston päättymispäivä.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Ohjelmiston käyttöiän päättymispäivä.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Erityinen tietokantasarake määritetystä tietokantataulukosta.';

$GLOBALS["lang"]['The specific database table.'] = 'Tietokantataulukko.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Normaali Nmap ajoitus vaihtoehtoja. Aiemmin asetettu T4 (aggressiivinen).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Normaali Nmap ajoitus vaihtoehtoja. Käytämme yleensä -T4 (Aggressiivinen) koska tätä suositellaan kunnollinen laajakaista- tai eetteriyhteys.';

$GLOBALS["lang"]['The status of this integration'] = 'Tämän yhdentymisen asema';

$GLOBALS["lang"]['The status of this queued item.'] = 'Tämän jonotetun kohteen tila.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Jäljempänä esitettävät vaiheet kuvaavat prosessia.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Kohde IP tämän loki merkintä viitteeksi (jos on).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Kohdetietokone auditoitavaksi.';

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

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Suodattamaton tila tarkoittaa, että portti on käytettävissä, mutta Nmap ei pysty määrittämään, onko se auki vai suljettu. Vain CAC-skannaus, jota käytetään palomuurin sääntöjen kartoitukseen, luokittelee portit tähän tilaan. Suodattamattomien porttien skannaus muilla skannaustyypeillä, kuten Window- skannauksella, SYN-skannauksella tai FIN-skannauksella, voi auttaa ratkaisemaan, onko portti auki.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Tämän palvelimen yksilöllinen tunniste.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Käyttäjätili, jota keräilijä käyttää. Linkit <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Käyttäjän Active Directory / OpenLDAP on oltava suora jäsen vaaditut Open-AudIT ryhmien roolit ja orgit. Ryhmään kuuluva toinen Open-AudIT-ryhmän jäsen ei toimi.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Käyttäjä on LDAP ja niiden tiedot ovat voimassa, mutta se ei ole missään Open-AudIT LDAP-ryhmissä.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Käyttäjä on LDAP ja niiden tiedot ovat voimassa, mutta ei ole missään Open-AudIT LDAP ryhmiä Roles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Käyttäjä on LDAP ja niiden tiedot ovat voimassa, mutta ei missään vaaditussa Open-AudIT LDAP-ryhmässä.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Käyttäjä on LDAP-ryhmässä, joka vastaa tätä Orgia.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Käyttäjä on LDAP-ryhmässä, joka sopii tähän rooliin.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Käyttäjä ei ole LDAP-ryhmässä, joka vastaa tätä Orgia.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Käyttäjä ei ole LDAP ryhmä, joka vastaa tätä Role.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Käyttäjä, joka oli määritetty LDAP, mutta Open-AudIT ei ole määritetty kuluttaa LDAP ryhmien rooleja ja että käyttäjä ei ole olemassa Open-AudIT. Valitse <i>Käytä LDAP roolit</i> Open-AudIT LDAP:stä Palvelimen näyttö tai luoda tämän käyttäjän Open-AudIT ja määrittää rooleja ja orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Käyttäjätunnus (jos ei käytä komentosarjan käyttäjää).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Käyttäjätunnus, jota käytettiin ulkoiseen järjestelmään.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Käyttäjien tietoja ei saatu LDAP:stä. Tarkista LDAP-palvelinlokit.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Käyttäjätiedot saatiin LDAP:stä.';

$GLOBALS["lang"]['The users email address.'] = 'Käyttäjien sähköpostiosoite.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Tavalliset aukioloajat.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Kappaleelle annettu arvo.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Tätä kohtaa varten tallennettava arvo.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'CPE-merkinnän mukainen myyjän nimi.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'CPE:stä viety myyjä.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Open-AudIT-palvelimen verkkohakemisto (vaatii jälkiviivan).';

$GLOBALS["lang"]['The widget at position '] = 'Asema ';

$GLOBALS["lang"]['The width of this device.'] = 'Tämän laitteen leveys.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Heidän OrgID ja heidän jälkeläisensä';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Vain heidän orgID:nsä';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Heidän OrgID, ylösnousemus ja jälkeläiset';

$GLOBALS["lang"]['Then'] = 'Sitten';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Luo sitten uusi Auth-menetelmä Open-AudITissa menemällä valikkoon -> Hallinto Tuotantomenetelmät -> Luo Auth. Anna nimi ja aseta <i>tyyppi</i> Entralle.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Sitten voit käyttää Open-AudIT (tukikelvottoma) saada tarkastustiedot suoraan asiakkailta. Discovery <strong>epäonnistuu</strong>, mutta jos et käytä Discovery (pääominaisuus Open-AudIT on suunniteltu ympärille), voit silti saada laitetietoja. Sinun pitäisi tehdä audit skriptit suoraan asiakkaille käyttämällä cron, tai käyttää Windows Agent ominaisuus (vain Enterprise).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Jsonille on vietävä nappi. Tämä näyttää vain laitetaulukon ominaisuuksia. Jos haluat viedä laitteen, jossa on kaikki siihen liittyvät komponenttitaulukot, katso laitteen tiedot ja lisää sitten';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Jokaiseen yksittäiseen laitteeseen ei ole mitään manuaalista muokkausta.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Mitään ei tarvitse tehdä, jos suoritat Open-AudIT-palvelimella.<br/><br/>Windows-asiakkaat ovat aivan kunnossa eivätkä vaadi erityisiä toimia, mutta... jotta tämä ominaisuus voidaan suorittaa paikallisesti kohde Windows-järjestelmässä. Sitä ei voi ajaa etäältä, kuten WMI-puheluilla, kun suoritamme yhden Windows-koneen tarkastusskriptiä, samalla kun kohdistamme toisen Windows-koneen. Voit tehdä tämän meidän täytyy kopioida tarkastus skripti kohde Windows kone ja sitten ajaa sen. Valitettavasti Apachen palvelutili on paikallisjärjestelmän tili. Tällä tilillä ei ole pääsyä etäresursseihin (verkkoihin). Tätä asiaa varten palvelu on hoidettava toisella tilillä. On helpointa käyttää paikallista hallintovirkamiestiliä, mutta voit kokeilla mitä tahansa tiliä niin kauan kuin sillä on tarvittavat oikeudet. Paikallisjärjestelmän tilillä on yhtä paljon paikallista käyttöä kuin paikallishallinnon tilillä.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Nämä ovat vain esimerkkejä. Saatat joutua muuttamaan näitä ominaisuuksia sopivaksi oman LDAP.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Näiden parametrien avulla voit tarkastaa vain sen, mikä on sinulle hyödyllistä ja olennaista, säästää käsittelyaikaa ja mahdollistaa verkkosi löytämisen järjestelmällisesti.';

$GLOBALS["lang"]['Thing'] = 'Asia';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Ajattele mail.domain1.com ja mail.domain2.com - sama isäntänimi.';

$GLOBALS["lang"]['Third'] = 'Kolmas';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Tämä CVE haetaan ja korvaa olemassa olevan CVE:n, jos se on olemassa.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Tämä Org ei ole määritetty AD ryhmä. Tarkista roolien yksityiskohdat Open-AudITissa.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Tämä Org ei ole määritetty AD ryhmä. Tarkista roolien yksityiskohdat Open-AudITissa. <span class=\'\"confluence-link\"\'>Oletko luonut nämä ryhmät (orgeja varten) LDAP-palvelimelle ja määrännyt heille LDAP-käyttäjät?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Tämä rooli ei ole mitään AD ryhmä määritetty. Tarkista roolien yksityiskohdat Open-AudITissa.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Tämä ominaisuus tallennetaan JSON objektina. Se on luettelo kaikista kokoelmista ja sisältää kokoelman nimen yhdessä <code>c</code>, <code>r</code>, <code>u</code> ja,tai <code>d</code> jotka edustavat luoda, lukea, päivittää ja poistaa. Nämä ovat toimia käyttäjä voi suorittaa kohteita kyseisen kokoelman.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Tämä voi olla joko varichar (tekstikenttä), luettelo (luettelo arvoista, jotka voidaan valita) tai päivämäärä.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Tämä koodi perustuu suuren työn tehnyt';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Tämä keräilijä universaalisti yksilöllinen tunniste.';

$GLOBALS["lang"]['This column is required by'] = 'Tämä sarake vaaditaan';

$GLOBALS["lang"]['This column is required by '] = 'Tämä sarake vaaditaan ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Tämä kuvaus on automaattisesti asutettu ja olisi mieluiten jätettävä sellaisenaan.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Tämän päätepisteen avulla voit lisätä yhteydet, jotka ovat osa verkkoinfrastruktuuria, sen avulla voit muokata erilaisia ominaisuuksia, määrittää missä tämä yhteys sijaitsee ja organisaatio, että se kuuluu.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Tämä virhe osoittaa, että SMB1 on pois päältä tai poistettu kohdekoneesta. Tämä on normaalia modernille versiolle Windowsista ja näet tämän viestin vain silloin, kun SBB2-yhteysyritys on epäonnistunut. Jos SBB2-yhteys epäonnistuu, yritämme SBB1 mahdollistaa löydön Windowsin vanhoista versioista. Jos kohde Windows kone <i>on</i> käynnissä vanha versio Windows, on todennäköistä, että tunnuslukusi ovat epäonnistuneet. Siinä tapauksessa';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Tämä virhe osoittaa, että käytettävissä ei ole tarpeeksi virtuaalista muistia tai hakutiedostojen kiintiötä suorittaa tietyn operaation. Yritä uudestaan myöhemmin.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Tämä virhe osoittaa, että käytetyt tunnusluvut ovat joko virheellisiä, niitä ei ole tai niillä ei ole riittäviä oikeuksia kirjautua etänä kohde Windows-laitteeseen. Sinun pitäisi tarkistaa tiedot ja tarkistaa alla.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Tämä esimerkki luo luettelon kaikista moduulit merkitty';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Tämä esimerkki luo luettelon laitteista sekä NMAP-skannauksessa löydetyistä avoimista porteista, protokollasta ja ohjelmista.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Tämä esimerkki luo luettelon laitteista, joissa toiminto tai kuvaus kentät ovat tyhjiä TAI ostopäivä on oletus.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Tämä esimerkkihaku hakee luettelon laitteista yli 3 vuotta vanha. Kysely käyttää tänään';

$GLOBALS["lang"]['This example uses'] = 'Tämä esimerkki käyttää';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Tämä ominaisuus vaatii Professional tai Enterprise lisenssi.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Tämä ominaisuus, koska sillä on kyky vaikuttaa kohdelaitteisiin tavallista enemmän, on oltava manuaalisesti käytössä. Salliaksesi tämän ominaisuuden, muuta asetusominaisuus_suoritetiedostoihin <i>kyllä</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Tämä tiedosto kehottaa Linuxia tekemään kyselyn sovelluksesta selvittääkseen, onko olemassa suunniteltuja tehtäviä, jotka pitäisi suorittaa.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Tämä lomake tarjoaa yksinkertaisen tavan aloittaa laitteiden löytäminen verkossa. Lisätietoja (paljon enemmän) yksityiskohtaisia vaihtoehtoja, voit luoda yksilöllisesti';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Näin myös PAExec toimii.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Tämä on valinnainen asetusvaihtoehto, joka on valittu asettamalla löytö_use_org_id_match maailmanlaajuisessa konfiguraatiossa.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Tämä on yleensä ensisijainen sarake, ellei toisin määrätä. HUOM: Kun tyyppi = liikenne, tämä on toissijainen teksti.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Tämä johtuu todennäköisesti MySQL-ajan kulumisesta. MySQL käyttää yleensä isäntälaitteiden aikaa. Voit tarkistaa tämän';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Tämä on käyttäjien asettamaa, ja vaikka sen pitäisi olla maailmanlaajuisesti ainutlaatuinen, siitä ei varmastikaan ole takeita.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Tämä on hakemisto, johon talletamme laitteita koskevat liitteet.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Tätä käytetään ensimmäisenä soittopisteenä, kun Open-AudIT -ongelmia tutkitaan. Voit napsauttaa Vie-painiketta oikealla yläkulmassa hakea tämän JSON-tiedostona (lisättävä tukilippuun / sähköpostiin).';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Asiaa tutkitaan parhaillaan.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Tämän kohteen on vastattava valitun ominaisuuden arvoa tai siinä on käytettävän kyselyn tunniste.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Tämän erän on vastattava valitun ominaisuuden arvoa.';

$GLOBALS["lang"]['This license expires on'] = 'Tämän lisenssin voimassaolo päättyy';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Tätä turvalupaa voidaan muuttaa Component Services -hallinnollisella työkalulla.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Tämä olisi kommentoitava jälkeen vianetsintä vianetsintätila tuottaa paljon lokit levylle ilman hyötyä.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Tämän pitäisi olla maailmanlaajuisesti ainutlaatuinen, mutta olen nähnyt tapauksia, joissa se ei ole.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Tämä olisi asetettava joko 1 tai korkeus teline.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Tämän pitäisi olla täysin pätevä kenttänimi tietokannassa. Tällä hetkellä järjestelmän, kenttien ja tunnustaulujen sarakkeita tuetaan. EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Tätä tilaa käytetään, kun Nmap ei pysty määrittämään, onko portti suljettu vai suodatettu. Sitä käytetään vain IP-tunnisteen joutokäynnissä.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Tämä pumppaa automaattisesti.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Tämä hidastaa huomattavasti löytöskannausta.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Tämä poistaa nykyiset rivit';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Tämä pysyvästi poistaa tämän lisenssin.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Tämä näyttää sinulle Bulk Edit-lomakkeen. Tämän lomakkeen ominaisuuksia sovelletaan kaikkiin valittuihin laitteisiin. Voit asettaa useita ominaisuuksia kerralla.';

$GLOBALS["lang"]['Thursday'] = 'Torstai';

$GLOBALS["lang"]['time_caption'] = 'Aikateksti';

$GLOBALS["lang"]['Time Caption'] = 'Aikateksti';

$GLOBALS["lang"]['time_daylight'] = 'Aika päivänvalo';

$GLOBALS["lang"]['Time Daylight'] = 'Aika päivänvalo';

$GLOBALS["lang"]['Time to Execute'] = 'Aika suorittaa';

$GLOBALS["lang"]['timeout'] = 'Aikakatkaisu';

$GLOBALS["lang"]['Timeout'] = 'Aikakatkaisu';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Aikakatkaisu kohdetta kohti (toisia)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Aikalisä kohdetta kohti. Odota X sekuntia kohdevastaukseen.';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Aikaleima';

$GLOBALS["lang"]['timing'] = 'Ajoitus';

$GLOBALS["lang"]['Timing'] = 'Ajoitus';

$GLOBALS["lang"]['Timor-Leste'] = 'Itä-Timor';

$GLOBALS["lang"]['Title'] = 'Osasto';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Uusi tiedosto nimeltä .env (samassa hakemistossa). Nyt muokata että uusi tiedosto ja uncomment (poistaa #) rivi alla (rivi 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Jos haluat suorittaa kyselyn, liitä / execute, jolloin /open-audit/index.php/queries/{$id}/ execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Voit tarkastaa koneen, sinulla on oltava valtakirjojen ja ylläpitäjän tasolla pääsy.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Auditoidaksesi etäkoneen Aktiivisen Directory-verkkotunnuksella, toimittamasi käyttäjän (tai jos sitä ei ole toimitettu, komentosarjan käyttäjän) on oltava kohdelaitteiden hallintoviranomaisten ryhmän (tai alaryhmän) jäsen.';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Jotta voit tarkastaa etäkoneen, joka ei ole verkkotunnuksessa, sinun täytyy käyttää ylläpitäjän tiliä (ei <i>a</i> admin-tili, <i>a</i> Hallitsijan tili) kohde PC. #1 ja #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Localhostin tarkastamiseksi kaikki toimitetut tiedot jätetään huomiotta ja yhteys tehdään käyttäen komentosarjan käyttäjän tietoja.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Ohjelmiston vertaamiseksi tarkistamme nimen ja version. Koska kaikki versionumerot eivät ole vakiomuotoisia, kun saamme tarkastuksen tulos luomme uuden ominaisuuden nimeltä software_padded jonka tallennamme tietokantaan yhdessä muiden ohjelmistojen yksityiskohtia kunkin paketin. Tästä syystä perusarvot, joissa käytetään ohjelmistopolitiikkaa, eivät toimi, kun niitä verrataan laitteeseen, jota ei ole tarkastettu 1.10:ssä (ainakaan). Ohjelmistokäytännöt voivat testata vastaan versio on <i>yhtä suuri kuin</i>, <i>suurempi kuin</i> tai <i>yhtä suuri tai suurempi kuin</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Luodaksesi uuden merkinnän napsauta Luo-painiketta oikeassa yläkulmassa.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Luodaksesi resurssin, sinun pitäisi julkaista tarvittavat tiedot.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Jotta etälaite (Vista tai sen yläpuolella oleva) voidaan tarkastaa, jos se ei ole verkkotunnuksella, hallintovirkamiesryhmän tilin toimesta, katso jäljempänä oleva UAC-osio.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Tämän mahdollistamiseksi luo uusi Auth-kohde menemällä valikkoon -> Hallinto Auth -> Luo Auth-menetelmä.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Suorittaaksesi Windows powershell -skriptin, avaa komentokehotus ylläpitäjänä ja käytä seuraavaa komentoa';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Suorittaaksesi tarkastusskriptin, avaa pääte ja käytä seuraavaa komentoa';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Jos haluat suodattaa kiinteistön arvon, käytä ominaisuuden nimeä. Operaattorit, joiden olisi ennen arvoa';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Jos haluat asentaa Nmapin Windowsiin, käy Nmap-sivulla osoitteessa';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Voit tehdä muutoksen, vain seuraavat vaiheet alla.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = '- Haen vuokralaisen paperit. Avaa Azure-portaali klikkaa Azure Active Directory, Properties ja Tenant ID näkyy Directory ID - älä syytä minua nimi epäsuhta, niin Microsoft rullaa.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Voit hakea avaimen, kirjaudu sisään AWS Console ja valitse käyttäjätunnuksesi, sitten My Security valtakirjat.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Palauttaaksesi tietyn osan.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Palauttaa kaikki kohteet tietyn laitetyypin osalta.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Palauttaa kaikki osat komponenttityyppi. Jos haluat kaikki ohjelmistot, käytä';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Peruuta lajitelma, lisää miinus, näin';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Suorittaa testiskripti kohde Windows PC';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Valitaksemme integroidut laitteet, käytämme nmis_manage = y, mutta saatat pitää (esimerkiksi) tyyppi = reititin. Voit myös käyttää Group tai Query jos haluat jotain monimutkaisempaa.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Jos haluat lajitella tietokantasarakkeen, käytä';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Voit käyttää tätä Enterprise ominaisuus, sinun täytyy ensin luoda käyttäjä Open-AudIT kuten tavallista. Salasanan antaminen ei ole tarpeen. Sinun täytyy määrätä Rooleja ja Orgas. Open-AudIT-käyttäjätunnuksen pitäisi vastata Entraa <i>ensisijainen käyttäjätunnus</i> ominaisuus. Ei ole tarvetta koko nimi tai sähköposti - nämä asutetaan Entra. Jos et tunne käyttäjiäsi <i>ensisijainen käyttäjätunnus</i>Älä pelkää. Voit luoda uuden Auth-metodin Open-AudITissa ja Enterprise-sovelluksessa Entrassa ja kun käyttäjä yrittää kirjautua Open-AudITiin ilman olemassa olevaa käyttäjää, tarkista lokit ja näet niiden <i>ensisijainen käyttäjätunnus</i> Kirjasit itseäsi varten.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Voit käyttää tätä Enterprise ominaisuus, sinun täytyy ensin luoda käyttäjä Open-AudIT kuten tavallista. Salasanan antaminen ei ole tarpeen. Sinun täytyy määrätä Rooleja ja Orgas. Open-AudITin käyttäjätunnuksen pitäisi olla OKTA <i>nimi</i> ominaisuus. Ei ole tarvetta koko nimi tai sähköposti - nämä on asutettu OKTA. Jos et tunne käyttäjiäsi <i>nimi<i>Älä pelkää. Voit luoda uuden Auth Menthodin Open-AudITissa ja Sovelluksessa OKTA:ssa ja kun käyttäjä yrittää kirjautua Open-AudIT:iin ilman nykyistä käyttäjää, tarkista lokit ja näet ne <i>nimi<i> Kirjasit itseäsi varten.<br/><p>Luo sitten uusi Auth-menetelmä Open-AudITissa menemällä valikkoon -> Hallinto Tuotantomenetelmät -> Luo Auth. Anna nimi ja aseta <i>tyyppi</i> Oktalle.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Käyttääksesi tätä toimintoa sinun on otettava käyttöön asetukset match_mac (AWS) ja match_hostname (Azure). Tämä tehdään automaattisesti ensimmäisen kerran, kun pilvi löytö tehdään. Lisätietoja Open-AudITs matching rules katso TÄSTÄ: Matching Devices';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Tarkastellaksesi kyselyn yksityiskohtia, vakiomuotoisen URL-rakenteen /open-audit/index. php/queries/{$id} tulee käyttää.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'TokelauCity name (optional, probably does not need a translation)';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Työkalupalkin tyyli';

$GLOBALS["lang"]['Toolbar Style'] = 'Työkalupalkin tyyli';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Portit';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. Top 10, 100, 1000 portit skannata kohti Nmaps "huippuportit" vaihtoehtoja.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP portit';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. Top 10, 100, 1000 portit skannata kohti Nmaps "huippuportit" vaihtoehtoja.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Perinteiset kiinalaiset';

$GLOBALS["lang"]['Traffic Light'] = 'Liikennevalo';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad ja Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Vianmääritys';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Vianmääritys';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Kokeile Open-AudIT Enterprise, meillä ei ole aikarajaa. Kaikki Enterprisen ominaisuudet. Rajoitettu 20 laitteeseen.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Kokeile uusia ominaisuuksia ilmaisella 100 laitteen lisenssillä Open-AudIT Enterprise. Lue ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Yritä kirjautua sisään LDAP-käyttäjän avulla. Oletamme, että tämä epäonnistuu (muuten, miksi vielä luet tätä?). Seuraavaksi kommentoi riviä yllä olevasta tiedostosta.';

$GLOBALS["lang"]['Tuesday'] = 'Tiistai';

$GLOBALS["lang"]['Tunisia'] = 'Tunisia';

$GLOBALS["lang"]['Turkey'] = 'Turkki';

$GLOBALS["lang"]['Turkish'] = 'turkki';

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

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Tyyppi: Tämä voi olla joko raja (tekstikenttä) tai luettelo (luettelo arvoista, jotka voidaan valita).';

$GLOBALS["lang"]['Types of Networks'] = 'Verkostotyypit';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Portit';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Portit';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina';

$GLOBALS["lang"]['Ukrainian'] = 'Ukraina';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Ensimmäisen vaiheen tarkastus (asiakirjojen tarkastelu)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Toinen vaihe (täytäntöönpanon arviointi)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Jatkuva analyysi';

$GLOBALS["lang"]['Unfiltered'] = 'Suodattamaton';

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

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Päivitä haavoittuvuus';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Päivitä {kokoelman} attribuutti.';

$GLOBALS["lang"]['Update attributes'] = 'Päivitä ominaisuudet';

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

$GLOBALS["lang"]['Urdu'] = 'Urdu';

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

$GLOBALS["lang"]['Use Proxy'] = 'Käytä välityspalvelinta';

$GLOBALS["lang"]['Use SNMP'] = 'Käytä SNMP:tä';

$GLOBALS["lang"]['Use SSH'] = 'Käytä SSH: ta';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Käyttää Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Käytä Palveluversion tunnistusta';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Käytä Palveluversion tunnistusta. Kun havaittu portti havaitaan avoimena, jos <i>y</i>, Nmap kysyy kohdelaitteen yrittää määrittää palvelun versio käynnissä tässä portissa.<br/>Tämä voi olla hyödyllistä tunnistettaessa salaamattomia laitteita. Tätä ei ole aiemmin käytetty.';

$GLOBALS["lang"]['Use WMI'] = 'Käytä WMI: tä';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Käytä <i>Kirjautumismenetelmä</i> OIDC - OpenID Connect ja <i>Sovellustyyppi</i> Web Application. Klikkaa <i>Seuraava</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Tunnistaminen';

$GLOBALS["lang"]['Use for Roles'] = 'Käyttö Roolit';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Käytä vakioasennusasetuksia, kun ne näytetään ja napsauta <i>Olen samaa mieltä.</i>, <i>Seuraava</i> sekä <i>Asenna</i> painikkeet asentaa Nmap.';

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

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Käyttäjät toimivat kuten Netstat Ports. Jos käyttäjä on olemassa, jossa on vastaava nimi, tila ja salasana tiedot (vaihdettavissa, voimassaolo päättyy, vaaditaan), sitten käytäntö kulkee.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Käyttäjät, roolit ja orgit';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Käyttää CodeIgniter PHP Framework.';

$GLOBALS["lang"]['Using'] = 'Käyttö';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entran käyttö Authille';

$GLOBALS["lang"]['Using LDAPS'] = 'LDAPSin käyttö';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA:n käyttö Authille';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Formaatin käyttö on hyödyllistä selaimen käytössä, mutta haluat nähdä tuloksen JSON-muodossa. Lisäämällä muotoa=json saavuttaa tämän. Normaalisti web-selain asettaa hyväksyvä otsikko HTML, joten siinä tapauksessa, palautamme renderöity sivu. Käyttämällä API noutaa JSON sinun pitäisi asettaa hyväksyä otsikko';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Yleensä Mbs, sijainnista A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Yleensä Mbs, sijainnista B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Yleensä Mbs, paikkaan A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Yleensä Mbs, paikkaan B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Yleensä pitäisi asettaa 3.';

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

$GLOBALS["lang"]['Value Types'] = 'Arvotyypit';

$GLOBALS["lang"]['values'] = 'Arvot';

$GLOBALS["lang"]['Values'] = 'Arvot';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Arvot Jos <i>luettelo</i> kenttä, tämän pitäisi olla pilkku erotettu luettelo voimassa olevista arvoista.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Muuttuja';

$GLOBALS["lang"]['Variable'] = 'Muuttuja';

$GLOBALS["lang"]['Various'] = 'Erilaisia';

$GLOBALS["lang"]['vendor'] = 'Valmistaja';

$GLOBALS["lang"]['Vendor'] = 'Valmistaja';

$GLOBALS["lang"]['Vendor Report'] = 'Valmistajaraportti';

$GLOBALS["lang"]['vendors'] = 'Valmistajat';

$GLOBALS["lang"]['Vendors'] = 'Valmistajat';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

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

$GLOBALS["lang"]['Vietnamese'] = 'vietnam';

$GLOBALS["lang"]['View'] = 'Näytä';

$GLOBALS["lang"]['View All'] = 'Näytä kaikki';

$GLOBALS["lang"]['View Details'] = 'Näytä yksityiskohdat';

$GLOBALS["lang"]['View Device'] = 'Näytä laite';

$GLOBALS["lang"]['View Discovery'] = 'Näytä Discovery';

$GLOBALS["lang"]['View Policy'] = 'Näytä käytäntö';

$GLOBALS["lang"]['View Racks'] = 'Näytä kansiot';

$GLOBALS["lang"]['View the'] = 'Näytä';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Tarkastele kyseessä olevaa löytöä ja napsauta tukipainiketta oikeassa yläkulmassa. Tämä antaa löytöasetukset, konfigit, löytölaiteluettelon sekä lokit tätä varten.';

$GLOBALS["lang"]['View the release notes on the'] = 'Näytä julkaisutiedotteet';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuaalinen yksityinen verkko';

$GLOBALS["lang"]['Virtual private network'] = 'Virtuaalinen yksityinen verkko';

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

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Haavoittuvuus ja tulokset';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Haavoittuvuus, joka on alun perin julkaistu ennen 1 päivää tammikuuta 2025 (oletuksena). Emme näe mitään järkeä palauttaa haavoittuvuuksia vuosia aiemmin. Tätä voidaan muuttaa konfiguraatiossa.';

$GLOBALS["lang"]['vulnerability_id'] = 'Haavoittuvuuden tunnus';

$GLOBALS["lang"]['Vulnerability ID'] = 'Haavoittuvuuden tunnus';

$GLOBALS["lang"]['Vulnerability Status'] = 'Haavoittuvuus';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'VAROITUS - Luotaessa perustasoa käyttäen ohjelmistopolitiikkaa, tällä hetkellä Centos ja RedHat paketti ytimen käyttäen nimiä <i>ydin</i> sekä <i>ytimen devel</i>. Voit asentaa useita paketteja tällä nimellä ja eri versioita samanaikaisesti. Debian-pohjaiset jakelut käyttävät nimiä kuten <i>linux-image-3.13.0-24-geneerinen</i>, Huomaa versionumero sisältyy paketin nimi. Koska RedHat-pohjaiset käyttöjärjestelmät käyttävät tätä muotoa ja sen jälkeen on useita identtisiä pakettien nimiä eri versioilla suljemme tällä hetkellä pois <i>ydin</i> sekä <i>ytimen devel</i> ohjelmistopolitiikasta. Tätä voidaan käsitellä tulevassa tarkistuksessa.';

$GLOBALS["lang"]['WHERE'] = 'MISTÄ';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI:n valtakirjavaatimukset';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Odota, että se valmistuu ja liitä seuraava rivi agentin asentamiseen.';

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

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Meillä on myös vaihtoehto Ping Ennen skannausta (tärkeää reitittimille, joilla on pitkään eläneet ARP-välimuistit). Tämä on yleensä hyvä ajatus.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Meillä on myös toimintamme kohteita (jotka toteutetaan järjestyksessä alla):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Meiltä kysytään usein tätä kysymystä ja vastaus on ehdottomasti <i>Riippuu</i>. Se riippuu luotattavien IP:ien määrästä, verkkoyhteyden nopeudesta, skannattavien laitteiden nopeudesta, skannattavien laitteiden tyypistä, testattavien eri tunnusten määrästä ja Open-AudIT-palvelimen nopeudesta. Meillä ei ole laskinta, jonka avulla voisimme syöttää nämä muuttujat ja palauttaa arvon. Se on yksinkertaisesti liian monimutkaista. Yleensä rajoitan löytöni 256 IP-osoitteeseen eli 24 aliverkkoon. Meillä on ollut asiakkaita skannaamassa 16 aliverkkoa (65k-osoitteet) ja se toimii - mutta se voi kestää kauan. On paljon parempi skannata 24 korttelia. Jos et yksinkertaisesti tiedä, mitä osoitealueesi ovat, tämä on hyvä asia Siemenlöytö.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Meillä on tarkempia ohjeita';

$GLOBALS["lang"]['We have tests for:'] = 'Meillä on testejä:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Toivottavasti löydät Open-AudIT yhtä hyödyllinen kuin mekin.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Alun perin asetamme oletuslistan skriptejä oletusvalinnoilla. Skriptiluettelo on nähtävillä /skripteissä. Näitä oletusskriptejä ei voida poistaa. Voit luoda lisäskriptejä, joita voit käyttää tarpeen mukaan. Skripti perustuu yhteen olemassa olevista skripteistä ja on mukautettuja vaihtoehtoja sovelletaan. Skriptit voidaan sitten ladata listalta valikosta: Discover -> Audit Scripts -> List Audit Scripts.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Tarvitsemme tietoja, jotta voimme puhua verkon laitteille.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Lähetämme vain vähimmäismäärän tietoja, emmekä mitään arkaluontoista. Lähetämme lisenssitietomme (nimi, tyyppi jne.), sovellustietomme (nimi, versio, alusta, aikavyöhyke jne.), kirjautuneet virheet, laitetyyppien määrän ja käytettyjen ominaisuuksien määrän. <i>Mikä tahansa</i> Ympäristössä on laitteita ja se on ainoa pala dataa lähetämme. Ja vain laitteen tyyppi ja lasku. Ei valmistaja, ei malli. Emme lähetä mitään erityistä. Ei verkostoja. Ei IP-osoitteita. Ei käyttöjärjestelmäversioita. Ei ohjelmistonimiä. UUID ja Palvelin kentät on koodattu sha256 (joten emme tiedä arvoa). Lähetämme juuri tarvittavat tiedot tuotteen parantamiseksi. Toivottavasti näette, miten tämä tieto hyödyttää meitä kaikkia. Se antaa meille opastusta minne keskittyä parannuksia ja uusia ominaisuuksia tuotteen.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Meillä on tapana käyttää Google Chrome-laajennusta nimeltä Postman testataksemme todellisia levottomia kysymyksiä. Kannattaisi asentaa ja testata sillä.';

$GLOBALS["lang"]['Web'] = 'Verkko';

$GLOBALS["lang"]['Web Application Routes'] = 'Verkkosovellusreitit';

$GLOBALS["lang"]['Web Server Discovery'] = 'Web Server Discovery';

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

$GLOBALS["lang"]['Welcome to'] = 'Tervetuloa';

$GLOBALS["lang"]['Western Sahara'] = 'Länsi-Sahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Mitä voin odottaa, jos minulla ei ole valtakirjaa';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Entä kentät, jotka haluan NMIS, jotka eivät ole Open-AudIT? Me suojaamme sinua. Kaikki ulkoisen järjestelmän (NMIS) kentät, joita ei ole olemassa Open-AudIT-järjestelmässä, luodaan automaattisesti Open-AudIT Custom -kentiksi.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Entä muut verkkolaitteet? Ajattelukytkimet, reitittimet, tulostimet jne. On tietenkin parasta, jos voit antaa joitakin SNMP-tunnuksia näille laitteille. He vain tarvitsevat. <i>pelkkä</i> Pääsy. Mutta jos et halua tehdä edes sitä, mikään ei estä sinua suorittamasta löytöä, löytää laitteet, ja tehdä sääntö tai kaksi tunnistaa ne (ehkä käyttää MAC-osoitteen etuliite yhdessä avointen porttien, esimerkiksi). Sinulla ei ole paljon tietoa, mutta tiedät, että ne ovat verkossa, mitä ne ovat ja milloin ne viimeksi nähtiin. Näet myös, näkyykö verkossa mitään uutta.';

$GLOBALS["lang"]['What do we send?'] = 'Mitä lähetämme?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Mitä tämä merkitsee sinulle?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Mikä tämän telineen tarkoitus on?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Millainen tämä paikka on? Sallittavat tyypit <code>attributes</code> Pöytä.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Kun Open-AudIT Linuxissa löytää Windows-koneen, suorittaa etäkomento käytämme';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Kun Open-AudIT Windows löytää Windows-kone, jotta suorittaa etäkomento käytämme';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Kun avoin IT vastaanottaa tietoja laitteesta joko löytämällä laitteen tarkastusajon aikana tai laitteen tuovan käyttäjän toimesta, sen on määritettävä, vastaako tämä löydetty laite tietokannassaan jo olevaa laitetta tai onko se uusi laite, joka olisi lisättävä. Open-AudIT käyttää 12 kiinteistöottelun sarjaa tämän määrittämiseksi. Ottelusäännöt toimivat OR-vertailuina, eivät JA. Tämä tarkoittaa ensimmäistä sääntöä, joka vastaa löydetyn laitteen kenttää, joka on olemassa olevana laitteena. Kaikkien Matching Rules täytyy epäonnistua, jotta laite on uusi ja johtaa uuden levyn luominen.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Kun lähetät tietoja, sinun täytyy sisältää käyttötunnus. Käyttötunnus luodaan jokaisella pyyntötyypillä, joten tee GET (esimerkiksi) ja Hyväksy: sovellus/json, tulkitse vastaus meta→ Access_tokenille ja lisää se pyyntösi kanssa. Tämä olisi sijoitettava kenttätiedot[ Access_token], IE, alkuun tasolla.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Kun laite on Löydetty tarkastus skripti ruiskutetaan tiedoston (tai hakemiston) tiedot. Sekä audit_linux.sh että audit_windows.vbs ovat asuttuja riippumatta tiedostopolusta. Jos ajattelet <i>Mutta Linux-polun laittaminen Windows-laitteeseen rikkoo asioita!</i>, se ei hajoa, et vain saa mitään tietoja, että tiedoston tai hakemiston merkintä.<br/>Noudetut tiedot tallennetaan <i>tiedosto</i> tietokanta taulukko ja tallennetaan kuten mikä tahansa muu ominaisuus. Tiedostotiedot tallennetaan kuten mikä tahansa muu ominaisuus ja luoda hälytyksiä, jos jokin seuraavista ominaisuuksista muuttuu - <i>koko_nimi</i>, <i>hash</i>, <i>inode</i>, <i>viimeksi_ muuttunut</i>. Taulukko sisältää system_id, first_seen, last_seen ja nykyiset sarakkeet sekä tiedostotiedot.<br/>Tallennetut ominaisuudet ovat:<br/><ul><li>Windows - nimi, koko, hakemisto, SHA1 hash (tiedoston sisältö), viimeksi muutettu, oikeudet, omistaja, versio (tiedoston hyväksyminen).</li><br/><li>Linux - nimi, koko, hakemisto, SHA1 hash (tiedoston sisällöstä), viimeksi muutettu, metatiedot viimeksi muutettu, oikeudet, omistaja, ryhmä, inode.</li></ul>Näet osion sekä Windows ja Linux tilintarkastus skriptit alla';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Kun löytö tehdään, valitaan löytöskannausvaihtoehto ja Nmap käyttää näitä asetuksia kohdelaitteiden skannaamiseen. Skannausvalinnat määrittävät, mitkä portit nmap skannaa, kuinka nopeasti ne skannaavat ja käytetäänkö ensin nanoap-pingiä sen määrittämiseksi, onko IP live vai ei.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Kun löytö tehdään, valitaan löytöskannausvaihtoehto ja Nmapin käyttämät asetukset kohdelaitteiden skannaukseen. Jos valittua vaihtoehtoa ei ole valittu, on valittu ja käytetty oletusasetuskohdetta (löytö_default_scan_optio). Open-AudIT-yhteisö käyttää oletusvalintoja kaikkien löytöjen konfiguroinnin mukaisesti.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Kun aliverkkolöytö suoritetaan, se suorittaa ensin, jos valittuna, Nmap-ping-skannauksen alueella tai IP-osoitteissa. Kaikki vastaavat laitteet skannataan. Jos Nmap ping skannaus ei ole tarpeen, jokainen IP on yksilöllisesti skannattu. Mitkä satamat? Tämä määräytyy';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Kun auditoit Linux-laitteen SSH:n kautta, jotkut Linux-jakelut eivät salli sudo-komentojen läpäisemistä ilman TY:tä (jota teemme). Täysin tarkastaa yksi näistä linux jakelut on parasta toimittaa juuri käyttäjätunnukset. Jos juuria ei toimiteta ja sudo ilman TY:tä ei ole mahdollista, tarkastusskripti suoritetaan, mutta se ei sisällä datan määrää kuten muuten. Seuraavat auditoinnit, joissa käytetään juuria (tai käytetään paikallisesti sudoa), antavat näin ollen lisätietoja järjestelmästä ja tuottavat useita <i>muutokset</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Laitteita yhdistettäessä mikä järjestelmä on arvovaltainen tiedon lähde.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Kun olet valmis, sulje komentoikkuna ja olet valmis!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Luotaessa elementtiä, jos valitset <i>Lisäasetukset</i> painike sinulla on kyky ladata oman mukautetun SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Kun integroimme ulkoisen järjestelmän laitteita, jos laitetta ei ole olemassa Open-AudITissa, pitäisikö meidän luoda se?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Kun integroimme laitteita ulkoisesta järjestelmästä, jos laite on päivitetty ulkoisessa järjestelmässä pitäisikö meidän päivittää sitä Open-AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Tutkittaessa Discovery, tuki pyytää Exported Discovery Lokit. Voit hakea nämä valikosta -> Löydökset ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Kun sovitamme Linux-pohjaisen laitteen, käytämme mieluummin Dbus id:tä, joka on liitetty isäntänimeen. Voimme käyttää myös muita vaihtoehtoja alla olevan taulukon mukaisesti, mutta voimme hakea Dbus-tunnuksen ilman juuria. Hakemaan UUID (emolevyltä), meidän täytyy ajaa dmidecode, joka vaatii root. Valitettavasti, kun kloonaat ESXi-vieraan, Dbus-tunnusta ei luoda uudelleen - joten liitämme sen isäntänimeen. Tässä yhteydessä on hyvä artikkeli, jossa yksityiskohtaisesti <i>Miksi</i> laitteistotunnisteet.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Kun pyydät JSONia, oletetusti mitään rajaa ei ole asetettu. Pyydettäessä näytön näyttö, raja on asetettu 1000 oletusarvoisesti. Tätä voidaan muuttaa konfiguraatiossa. Katso <i>sivu_koko</i> kohta';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Pitäisikö meidän tutkia ulkoinen laite?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Kun suoritat Open-AudIT Windowsissa Apache-palvelutilin täytyy olla <i>säännöllisesti</i> käyttäjä (tai hallintovirkamies). Tämä johtuu <i>Paikallinen järjestelmä</i> tilillä, jota tavallisesti käytetään Apachen johtamiseen, ei ole pääsyä verkkoresursseihin. IE - Emme voi käyttää Apachea paikallisjärjestelmän tilinä kopioidessamme auditointiskriptiä Windowsin tietokoneisiin.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Kun asetusvalinta on asetettu, otamme tämän huomioon tietyn ottelusääntöjen alajoukon laitteiden osalta, joissa asetuskohde on otettu käyttöön. Säännöt ovat seuraavat:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Kun säännöt toimivat löydössä, kaikki vastaavat säännöt näkyvät löytölokissa. Ks. esimerkki jäljempänä.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Kun tämä vertailuarvo on tarkoitus toteuttaa. Johdettu liitännäisestä <code>tasks.type</code> sekä <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kun loki luotiin.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kun tämä jonoerä alkoi prosessoida.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Kun käytät Open-AudIT Professional tai Enterprise, widgetit ovat saatavilla ja muokattavissa näyttää Dashboards.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Kun muutamme sisäisesti valitun laitteen ulkoisen järjestelmän kohteeksi, mitä ulkoisten tietojen tulisi olla. EG: kokonaisluku, merkkijono jne.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kun toteutamme tämän perustason, pitäisikö meidän tarkistaa laitteita, jotka eivät kuulu tämän perustason politiikkaan?';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kun vastaanotamme avoimen sataman, pitäisikö meidän yrittää testata palvelun nykyistä versiota? Tämä auttaa vahvistamaan todelliset juoksevat palvelut.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Kun käytät Clouds löytää Amazon AWS tapauksissa, tarvitset kaksi credential kohteita - avain ja salainen avain. Sinun ja salaisen avaimesi pitäisi jo olla tiedossa. Huomaa, että et voi hakea salainen avain käyttämällä AWS Console tarjoaa Amazon. Jos olet kadottanut sen, sinun täytyy luoda uusi.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Kun käytät Clouds löytää Microsoft Azure tapauksissa, tarvitset neljä credential kohteita - tilaus id, vuokralaisen ID, asiakkaan ID ja asiakassalaisuus.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Kun luot löydön, sinulla on mahdollisuus devices_asigned_to_org. Tämä tarkoittaa, että kaikki laitteet löydettiin tämän löydön osoitetaan (ovat <code>devices.org_id</code> valittu organisaatio.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Kun luot uuden löydön, jos napsautat Advanced-painiketta, sinulla on paljon enemmän vaihtoehtoja muuttaa, yksi niistä on tyyppi löytö. Tyypit ovat aina olleet Subnet (ylitetään edellä mainittu alue, aliverkko, ip vaihtoehtoja) ja Aktiivinen Directory. Kuten v4.1, Open-AudIT on uusi löytötyyppi nimeltä Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Kun mahdollistat kyselyn suorittamisen aikataulussa, kysely lähetetään sähköpostilla valitsemaasi osoitteeseen. Olet varmaan asettanut sähköpostin valikosta -> Hallinto Yritys -> Sähköpostiasetukset. Meillä on myös <i>testisähköposti<i> Nappi tuolla sivulla. Syötä tiedot, tallenna ne ja sitten testata sitä. Sinulla pitäisi olla modaalinen laatikko, joka ilmoittaa sinulle, onko se onnistunut vai ei ja ilmeisesti testi sähköpostin pitäisi saapua, jos se on onnistunut. Kun olet asettanut sähköpostin, ajoitettu kysely voidaan määrittää.<br/><br/>Anna nimi, valinnainen kuvaus, valitse <i>Kysely</i> kirjoita, valitse haluttu kysely, anna sähköpostiosoite, valitse muoto ja aseta aikataulu.<br/><br/>Tarjoa tunti (vain tunti, ei minuuttia vielä), anna tehtävälle nimi (tämä ei ole nimi varsinaisen aikataulun kyselyn itse), valitse mitkä päivät haluat kyselyn ajaa, valitse mitä kyselyä haluat suorittaa, anna sähköpostiosoite ja valitse kyselymuoto ja olet valmis.<br/>Kyselyt lähetetään sähköpostin kehon kyselyn (html-muodossa) ja kyselyn liitteenä pyydetyssä muodossa.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Kun kirjoitat tekstin johonkin sarakkeen otsikoista, voit yksinkertaisesti käyttää normaalia sanaa. Esimerkiksi kun syötät <code>computer</code> hakuruutuun yläpuolella <i>Tyyppi</i> sarake, haku palauttaa kaikki laitteet tietokoneen tyypin kanssa. Pohjimmiltaan Open-Aud IT pyytää tietoja URL-osoitteen avulla <code>devices?devices.type=computer</code>. Nyt on yksi merkittävä ero käytettäessä dataTables haku, verrattuna standardi';

$GLOBALS["lang"]['where'] = 'jossa';

$GLOBALS["lang"]['Where'] = 'jossa';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Missä $x on numero. Nämä monet LDAP merkinnät ovat DB ja on saatu.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Missä laitteen tiedot-näytössä haluat nähdä tämän kentän ilmestyvän.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Missä teline on rivissä.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Vaikuttaako haavoittuvuus omiin komponentteihinsa vaikutusten, saatavuuden ja luottamuksellisuuden avulla.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Tarvitaanko käyttäjien vuorovaikutusta (ei mitään, passiivinen, aktiivinen).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'OS, johon tätä vertailuarvoa sovelletaan.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Mitä laitteita Open-AudIT luo ulkoisesta järjestelmästä (jos sellainen on). Käyttämällä kaikkia, Ei yhtään tai tiettyä Attribuuttia.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Mikä verkosto pitäisi löytää. Tämän tulisi olla';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Mikä alivalikko meidän pitäisi näyttää tämä kysely.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kuka tämän teki?';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Miksi vain Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Miksi suljemme tämän politiikan ulkopuolelle?';

$GLOBALS["lang"]['Wide Area Network'] = 'Laaja alueverkko';

$GLOBALS["lang"]['Wide area network'] = 'Laaja alueverkko';

$GLOBALS["lang"]['Widget'] = 'WidgetComment';

$GLOBALS["lang"]['Widget #'] = 'Widget #';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Widget- tyyppi';

$GLOBALS["lang"]['widgets'] = 'Widgetit';

$GLOBALS["lang"]['Widgets'] = 'Widgetit';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgetit on suunniteltu käytettäväksi Dashboardeissa. Yrityskäyttäjillä on täydellinen vapaus luoda, päivittää ja poistaa widgetit tarpeen mukaan.';

$GLOBALS["lang"]['width'] = 'Leveys';

$GLOBALS["lang"]['Width'] = 'Leveys';

$GLOBALS["lang"]['windows'] = 'Ikkunat';

$GLOBALS["lang"]['Windows'] = 'Ikkunat';

$GLOBALS["lang"]['Windows Packages'] = 'Windows-paketit';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windowsin käyttäjän työyksikkö # 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windowsin käyttäjän työyksikkö # 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Myös Windows on saattanut estää palvelun käynnistymisen. Kohdekäynnistyksessä Windows Security -sovelma ja varmista, että WinExeSvc- suoritustiedostoa voidaan käyttää (klikkaa Salli laite ja käynnistä toiminnot).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe-sivu Sambassa';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe edellyttää seuraavien Windows-palveluiden aloittamista ja käyttöä: netlogon- ja rpc-palvelut käynnissä.<br/><br/>Kirjaudu kohde Windows kone ja tarkista palvelut netlogon ja rpc ovat käynnissä.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe käyttää admin$ ja RPC (net palvelun aloitus) asentaa ja käynnistää etäpalvelun (winexesvc). Tämä palvelu alustaa nimetyn putken, jota käytetään komentojen siirtämiseen Open-AudIT-palvelimelta kohteeseen ja tuotokseen käänteisellä tavalla. Kun olet valmis, nimetty putki sulkeutuu ja winexesvc odottaa lisää yhteyksiä tai poistaa asentaa (riippuen annetuista vaihtoehdoista).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Langaton lähiverkko';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Open-AudITin 3.3.0-julkaisun myötä olemme ottaneet käyttöön klusterin käsitteen. Tämä intuitiivisesti kartoittaa ajatukseen verkkoklusterista, tietokantaklusterista tai tiedostoklusterista (tai jostakin muusta tarkoituksesta) tiettyyn tyyppiin (korkea saatavuus, irtisanomiset, skaalautuminen jne.).<br/><br/>Valitun klusterin tarkoituksesta riippuen raportointi vaihtelee hieman.<br/><br/>Jos esimerkiksi luot klusterin, jolla on tarkoitus virtualisoida, kun olet lisännyt siihen laitteita, näet myös näiden laitteiden virtuaalikoneet.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Clouds-ominaisuuden käyttöönoton myötä voit antaa tietoja pilvestäsi, Amazon AWS:stä tai Microsoft Azuresta, ja Open-AudIT käyttää asianmukaista API:tä hakeakseen listan paikoista, verkoista ja tapauksista, sitten löytääkseen jokaisen näistä tapauksista.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi- epäonnistumiset';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi- epäonnistumiset';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Aikakatkaisu';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Aikakatkaisu';

$GLOBALS["lang"]['workgroup'] = 'Työryhmä';

$GLOBALS["lang"]['Workgroup'] = 'Työryhmä';

$GLOBALS["lang"]['Working Credentials'] = 'Työvaltakirjat';

$GLOBALS["lang"]['Wrap Up'] = 'Kääri';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Kirjoitettu PHP scripting kielellä.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Keltainen kysely';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Kyllä';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Voit määritellä ylimääräisiä hakemistoja skannattaviksi tietueiksi suoritustiedostojen kokoelmassa. Kun määrittelet hakemiston ja kaikki alihakemistot skannataan suoritettavien tiedostojen varalta. Voit myös määritellä kansiot ja tiedostot jätetään pois. Kun ne aktivoituvat, ne ruiskutetaan linux audit script ja suoritetaan aina kun se suoritetaan (yleensä osana löytö). Jos haluat nämä komentosarjassa, voit käsin kopioida kohteeseen, valitse -> Tutustu -> Skriptit -> Listaa Skriptit ja lataa skripti sieltä.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Voit aina vapaasti muokata tarkastus komentojonoja itse vastaamaan erityisiä vaatimuksia. Sinun tulee (uudelleen) sisällyttää nämä muutokset aina kun päivität, koska ne korvataan oletusskriptejä. Ehdotan, että tallennat master kopion muutetusta skriptistäsi, päivität Open-AudIT:tä, sitten käyt diffin uuden oletusskriptin ja muokatun skriptin välillä ja käytät eroja. Tarkastus skriptit ovat alkuperäisiä skriptejä (Windows on VBScript, kaikki muut ovat Bash). Yksinkertainen ja helppo muokata - varmista, että sinulla on kopio muutoksistasi ennen päivitystä.';

$GLOBALS["lang"]['You are running version'] = 'Olet käynnissä versio';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Voit käyttää kokoelmaa normaalilla Open-AudIT JSON -pohjaisella API:llä. Kuten muutkin kokoelmat. Katso';

$GLOBALS["lang"]['You can also'] = 'Voit myös';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Näet myös sivun alareunasta taulukon, jossa esitetään laitteet, joihin muutoksia sovelletaan.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Voit myös määrittää ominaisuudet alla olevalla lomakkeella.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Voit aina ajaa Firstwave VM virtuaalinen infrastruktuuri (ESX, Azure, et al). Firstwave VM käyttää Debian linuxia ja on vapaa käyttöjärjestelmän lisensoinnista. Tai asentaa oma Linux distro valinta. Tuemme Redhat 9, Ubuntu 20.04, 22.04 ja 24.04 sekä Debian 11 ja 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Voit määrittää laitteet paikkaan automaattisesti käyttäen';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Voit määrittää laitteet käyttämällä omia';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Voit tarkastaa etäkoneen ilman varsinaista Administrator-tiliä luomalla rekisterin avaimen. Luo alla oleva avain jokaiseen tarkastettavaan koneeseen ja varmista, että käytetyt käyttäjätunnukset ovat hallintovirkamiesryhmän jäseniä.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Voit varmasti tehdä löydön ilman kelvollisia tietoja laitteissa verkossa, mutta saadut tiedot ovat hyvin pieni osa mitä Open-AudIT on kyky hakea <i>kun</i> Valtakirja.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Voit luoda perustason, ajaa sen vastaan joukko laitteita ja tarkastella tuloksia, lisätä ajoitettu suoritus, lisätä enemmän taulukoita vertailuun (tällä hetkellä vain ohjelmistot, netstat portit ja käyttäjät ovat käytössä), paikan päällä perustason muokkaus, arkistointi tuloksia ja enemmän.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Voit luoda skriptin kaikilla vaihtoehdoilla minkä tahansa nykyisen auditointiskriptien - ei vain Windows. AIX, ESX, Linux, OSX ja Windows ovat kaikki katettu.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Voit muokata koko integraation alas mihin järjestelmä (NMIS tai Open-AudIT) on auktoriteetti kenttäkohtaisesti. On olemassa vaihtoehtoja, joilla voidaan luoda ja/tai päivittää laitteita Open-AudIT- tai NMIS-järjestelmässä. Pitäisikö meidän tehdä löytö luotu tai päivitetty laite ja niin paljon muuta. Sivun oikealla puolella on selityksiä jokaisesta kohdasta.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Voit määritellä sovelluksen ja liittää siihen laitteen. Laite voidaan liittää useampaan kuin yhteen sovellukseen. Sovellus voidaan liittää useampaan kuin yhteen laitteeseen.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Voit muokata lisäkentän arvoa jokaiselle yksittäiselle laitteelle laitteen tiedot-sivulla. Näytä laitteen tiedot näyttö, avaa osa, joka sisältää kentän ja (jos sinulla on';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Voit rajoittaa laitteen seed Discovery kuulua tiukka joukko parametreja, kuten: <i>Rajoita aliverkkoon</i> sekä <i>Rajoita yksityiseen</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Voit määrittää laitteet manuaalisesti';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Voit ohittaa tämän antamalla muotovalinnan URL-osoitteessa.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Voit valita yksittäisiä laitteita klikkaamalla niiden valintaruutuja oikealla puolella tai valitsemalla kaikki laitteet napsauttamalla valintaruutua pöydän oikeassa yläkulmassa (Edit-painikkeen alla, joka näyttää lyijykynältä).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Voit valita integroidut laitteet valitsemalla minkä tahansa ominaisuuden järjestelmän (laite) taulusta ja vastaavuudesta (ks. valikko → Admin → Tietokanta → Luettelotaulukot → järjestelmä luettelon kentistä). Määritys täsmää vain yhden arvon kanssa.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Voit muuttaa minkä tahansa palvelimen keräilijäksi menemällä valikkoon -> Hallinto Keräilijät -> Tee tästä keräilijä. Tarvitset tiedot kirjautuaksesi palvelimelle, johon tämä asennus ilmoittautuu.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Voit katsella klikkaamalla sinisen näkymän kuvaketta. Voit myös muokata tai poistaa, jos sinulla on käyttöoikeudet.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Sinulla ei ole PHP MBString laajennus asennettu. Tämä laajennus on tarpeen.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Sinulla ei ole PHP SNMP laajennus asennettu. Tämä laajennus on erittäin suositeltavaa.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Voit haluta kopioida ja liittää tämän URL-osoitteen sähköpostiin henkilöstöllesi.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Voit haluta Active Directory tai OpenLDAP todentaa käyttäjille, mutta et anna valtuutusta. Varmista, että voit tehdä tämän. <i>Tunnistaminen</i> on asetettu Y ja <i>Käyttö Roolit</i> on asetettu arvoon N. Valtakirjat validoi LDAP, mutta sinun täytyy olla käyttäjä jo luotu ja osoitettu Rooleja Open-AudIT. Tämä myös <i>automaattisesti</i> koskee';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Olet ehkä huomannut nämä ottelusäännöt ovat kohteita, jotka eivät ehkä ole maailmanlaajuisesti ainutlaatuisia. Esimerkkejä:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Sinun on poistettava nykyinen lisenssisi ennen uuden lisenssin lisäämistä.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Sinulla täytyy olla SSH-tunnuksia suorittaaksesi vertailuarvon. Tällä hetkellä tuetaan seuraavia käyttöjärjestelmiä: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Aiomme laajentaa niitä lisää julkaisuja.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Kopioi ja liitä koko tiedosto tekstilaatikkoon. Kopioi teksti alla olevassa tapauksessa.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Et saa sisällyttää muokattuja_by- ja editoitu_date-kenttiä. Nämä asetetaan automaattisesti.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Sinun pitäisi vain muuttaa toinen virke tekstin,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Sinun tulee korvata vaadittu sarake (esim. org_id) ATTRIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Käytä otsikkoriviä, joka sisältää niiden sarakkeiden nimet, joita haluat kansoittaa, ja sen alapuolella olevia tietorivejä.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Sinun pitäisi käyttää vain taulukoita, jotka sisältävät ominaisuuksia tarvitset. Käytän yleensä vasenta liittymää. Esimerkiksi';

$GLOBALS["lang"]['You will need a'] = 'Tarvitset';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Tarvitset portit WMI Windows palomuuri avattu jokaisen kohde Windows tietokone. Windowsille Core-palvelimet, varmista, että sallit palomuurin yhteydet kuten /';

$GLOBALS["lang"]['You will see a list of'] = 'Näet luettelon';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTuben tutoriaalit';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'AWS EC2-avain.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Google Compute -tunnuksesi JSONina.';

$GLOBALS["lang"]['Your Host is'] = 'Sinun Isäntä on';

$GLOBALS["lang"]['Your Licenses'] = 'Lisenssit';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft Azure -asiakaskorttisi.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure -tilaustunnuksesi.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your PHP version is'] = 'PHP-versiosi on';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Sinun SQL valita ominaisuuksia, jotka populate tämän kyselyn.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Sinun SQL valita laitteita, jotka kansoittavat tämän ryhmän.';

$GLOBALS["lang"]['Your SSH key.'] = 'Avaimesi.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Sinun pääsytunnuksesi, kuten se pilvi natiivi API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Tietosi ovat tietosi. Voit ottaa sen milloin haluat. Tarjoamme jopa hyödyllistä vientiä CSV, JSON ja XML. Ja meillä on JSONin API. Ja voit kirjoittaa mukautettuja raportteja ja saada nuo tulokset CSV, XML, ja JSON! Se on sinun tietosi, ei kenenkään muun. Voit olla varma, että tietojesi turvallisuus on käsissäsi.';

$GLOBALS["lang"]['Your database platform is'] = 'Tietokannan alusta on';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Kuvaus yhteyden tilasta (varattu, eläkkeellä jne.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Kuvaus tästä esineestä.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Tämän ohjelmiston yleisnimi';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Tavallinen versio tästä ohjelmistosta';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Käyttäjäsi pitäisi nyt pystyä kirjautumaan klikkaamalla <i>Logon Entran kanssa</i> Open-AudIT-kirjautumissivun painike. Kuten edellä mainittiin, jos kirjautuminen epäonnistuu, tarkista lokitiedosto ja tarkista käyttäjät <i>ensisijainen käyttäjätunnus</i>.<br/><br/>Siinä pitäisi olla kaikki. Nyt käyttäjilläsi pitäisi olla yksi vähemmän tietoa muistaa!<br/><br/>Kuten aina, jos sinulla on ongelmia tämän ominaisuuden, lähetä sähköpostia';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Käyttäjäsi pitäisi nyt pystyä kirjautumaan klikkaamalla <i>Logon OKTA:lla</i> Open-AudIT-kirjautumissivun painike. Kuten edellä mainittiin, jos kirjautuminen epäonnistuu, tarkista lokitiedosto ja tarkista käyttäjät <i>nimi</i>.<br/><br/>Siinä pitäisi olla kaikki. Nyt käyttäjilläsi pitäisi olla yksi vähemmän tietoa muistaa!<br/><br/>Kuten aina, jos sinulla on ongelmia tämän ominaisuuden, lähetä sähköpostia';

$GLOBALS["lang"]['Your web server is'] = 'Verkkopalvelin on';

$GLOBALS["lang"]['Zambia'] = 'Sambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'a Merkkijono';

$GLOBALS["lang"]['active'] = 'aktiivinen';

$GLOBALS["lang"]['active directory'] = 'aktiivinen kansio';

$GLOBALS["lang"]['active/active'] = 'aktiivinen/aktiivinen';

$GLOBALS["lang"]['active/passive'] = 'aktiivinen/passiivinen';

$GLOBALS["lang"]['advertisement'] = 'Mainos';

$GLOBALS["lang"]['alert'] = 'hälytys';

$GLOBALS["lang"]['all'] = 'kaikki';

$GLOBALS["lang"]['allocated'] = 'jaettu';

$GLOBALS["lang"]['amazon'] = 'amatsoni';

$GLOBALS["lang"]['an Integer'] = 'Integer';

$GLOBALS["lang"]['and'] = 'sekä';

$GLOBALS["lang"]['and / or'] = 'ja / tai';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'ja tukilippu luodaan ja toimintaa.';

$GLOBALS["lang"]['and another'] = 'ja toinen';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'ja lataa Uusin Release itse-asentaja. Voit joutua selaamaan sivua alaspäin löytääksesi sen.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'ja siirry Sovelluksiin -> Yrityssovellukset (vasen valikko), valitse <i>Uusi hakemus</i>.';

$GLOBALS["lang"]['and its current time is'] = 'ja sen nykyinen aika on';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'ja etsii takuun viimeinen voimassaolopäivä ennen tänään.';

$GLOBALS["lang"]['and review what is possible.'] = 'ja tarkastella, mikä on mahdollista.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'ja Sign-out ohjata URI olento';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'ja lopullinen linjat todennäköisesti eniten kiinnostusta. Näiden rivien pitäisi antaa sinulle tarkan pisteen, jossa kirjautuminen epäonnistui.';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'sovellus';

$GLOBALS["lang"]['approved'] = 'hyväksytty';

$GLOBALS["lang"]['are required.'] = 'ovat tarpeen.';

$GLOBALS["lang"]['are used.'] = 'käytetään.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'Laite reagoi tähän satamaan.<br/>Tämä on aiheuttanut joitakin asiakkaita kysymyksiä, joissa palomuurit vastaavat puolesta olematon laite, ja siten aiheuttaa vääriä positiivisia laitteita. Meillä on nyt tämä ominaisuus käytettävissä asettaa per skannaus.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'vertailupisteenä ja suodattaa kaikki virtuaalikoneet järjestelmän tarkastuksen avulla. VM:n sarjakenttä.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'Olettaen, että työ ja asiakasasutettu DNS';

$GLOBALS["lang"]['attribute'] = 'Ominaisuus';

$GLOBALS["lang"]['auto'] = 'Automaattinen';

$GLOBALS["lang"]['backup'] = 'varmuuskopio';

$GLOBALS["lang"]['banned'] = 'kielletty';

$GLOBALS["lang"]['blog'] = 'blogi';

$GLOBALS["lang"]['blue'] = 'sininen';

$GLOBALS["lang"]['bottom'] = 'pohja';

$GLOBALS["lang"]['building'] = 'rakennus';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'voidaan käyttää käyttäjän tunnistamiseen (on käyttäjän nimi ja salasana oikein) sekä käyttäjän valtuuttamiseen (mitä rooleja ja orgeja käyttäjällä on).<br/><br/>Jos käyttäjä ei ole määritetty LDAP mutta on Open-AudIT (esim.: <i>admin</i> käyttäjä), Open-AudIT varaudutaan käyttämään itseään sekä todentamista ja valtuutusta.<br/><br/>Open-Aud IT käyttää rooleihin ja orgeihin erityisiä LDAP-ryhmiä. Käyttäjän on oltava suoraan näiden ryhmien [s] jäsen, jotta Open-AudIT voi määrittää, että käyttäjät käyttävät.<br/><br/>Kun LDAP on määritetty oikein, se voi poistaa kokonaan tarpeen luoda käyttäjiä Open-AudITissa. Yksinkertaisesti määrittää Open-AudIT käyttää LDAP sekä todennus ja valtuutus. Jos käyttäjä ei ole Open-AudIT:ssä, mutta LDAP:ssä on, ja heidän tunnuksensa ovat oikeat ja he kuuluvat vaadittuihin ryhmiin Open-AudIT luo käyttäjätilin automaattisesti.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'voi nyt hakea tiedoston tai tiedostohakemiston tiedot ja seurata näitä tiedostoja muutosten varalta Open-AudIT-tietokannan muiden ominaisuuksien mukaisesti. Tämä ominaisuus toimii Linux Open-AudIT -palvelimien laatikosta, mutta tarvitsee muutoksen palvelutilinnimeen Windows Open-AudIT -palvelimella. Tuetut asiakkaat ovat Windows ja Linux.';

$GLOBALS["lang"]['changed'] = 'muuttunut';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'Valittu. Sieltä, jos WMI:n, SSH:n tai SNMP:n satama havaitaan reagoivan, laite tiedustellaan edelleen ';

$GLOBALS["lang"]['cloud'] = 'pilvi';

$GLOBALS["lang"]['code'] = 'Koodi';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'kokoelmia ja yksityiskohtia sivut on kuvake suorittaa.';

$GLOBALS["lang"]['collector'] = 'keräilijä';

$GLOBALS["lang"]['collectors'] = 'keräilijät';

$GLOBALS["lang"]['column'] = 'sarake';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'sarake sisältää joko <i>y</i> tai <i>n</i>. Tämä osoittaa, onko tämä rivi tällä hetkellä läsnä laitteessa. Esimerkiksi ohjelmistoja voidaan asentaa (mikä johtaisi <i>software.current = y</i>), mutta myöhemmässä tarkastuksessa sitä ei voida havaita. Open-AudIT muuttaa tämän rivin nykyisen ominaisuuden <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'sarake. •';

$GLOBALS["lang"]['compute'] = 'Laske';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'konsoli';

$GLOBALS["lang"]['contains'] = 'sisältää';

$GLOBALS["lang"]['create'] = 'luo';

$GLOBALS["lang"]['created'] = 'luotu';

$GLOBALS["lang"]['credentials'] = 'Valtakirja';

$GLOBALS["lang"]['critical'] = 'kriittinen';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'tietokanta';

$GLOBALS["lang"]['debug'] = 'vianetsintä';

$GLOBALS["lang"]['delegated'] = 'delegoitu';

$GLOBALS["lang"]['delete'] = 'Poista';

$GLOBALS["lang"]['deleted'] = 'poistettu';

$GLOBALS["lang"]['denied'] = 'hylätty';

$GLOBALS["lang"]['details'] = 'Yksityiskohdat';

$GLOBALS["lang"]['devices'] = 'laitteet';

$GLOBALS["lang"]['digitalocean'] = 'digitoseeni';

$GLOBALS["lang"]['discoveries'] = 'löydöt';

$GLOBALS["lang"]['documentation for further details.'] = 'asiakirjat lisätietoja varten.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'ei <strong>ei</strong> antaa haavoittuvuusraportteja seuraavista:';

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

$GLOBALS["lang"]['first'] = 'ensimmäinen';

$GLOBALS["lang"]['fixed'] = 'kiinteä';

$GLOBALS["lang"]['floor'] = 'lattia';

$GLOBALS["lang"]['for'] = 'B.';

$GLOBALS["lang"]['for authentication'] = 'todentamista varten';

$GLOBALS["lang"]['for this information.'] = 'Tämän tiedon vuoksi.';

$GLOBALS["lang"]['from Audit Script Result'] = 'alkaen Audit Script Tulos';

$GLOBALS["lang"]['from NMIS'] = 'NMIS:ltä';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'osoitteesta LocalHost (Käyttö LRCC) käynnissä hakemusastiassa';

$GLOBALS["lang"]['front'] = 'etu';

$GLOBALS["lang"]['front-left'] = 'etuvasen';

$GLOBALS["lang"]['front-right'] = 'etuoikea';

$GLOBALS["lang"]['github'] = 'githubi';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'suurempi tai yhtä suuri';

$GLOBALS["lang"]['greater than'] = 'suurempi kuin';

$GLOBALS["lang"]['group'] = 'ryhmä';

$GLOBALS["lang"]['has not been set'] = 'ei ole asetettu';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'on toimiva käänteistä DNS resolved IP kohde Windows PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'oltava kykenevä teloitettavaksi. Euroopan';

$GLOBALS["lang"]['head'] = 'pää';

$GLOBALS["lang"]['here'] = 'Tässä.';

$GLOBALS["lang"]['high availability'] = 'korkea saatavuus';

$GLOBALS["lang"]['howto'] = 'Miten';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Jos kloonaat Linuxin virtuaalikoneen, ellet manuaalisesti uudista tätä (ja minun kokemukseni mukaan ihmiset eivät) se pysyy samana.';

$GLOBALS["lang"]['ignored'] = 'jätetty huomiotta';

$GLOBALS["lang"]['import the example device data'] = 'Tuo esimerkkilaitteen tiedot';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['in Enterprise.'] = 'Enterprisella.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'in Inputs voi olla seuraavat arvot.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'Tuotoksissa voi olla seuraavat arvot:';

$GLOBALS["lang"]['inactive'] = 'ei aktiivinen';

$GLOBALS["lang"]['incomplete'] = 'epätäydellistä';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'asentaja testaa läsnäolo Nmap sen standardi asentaa paikkoja';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, teksti, bool (y/n), jne.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'on Yhdysvaltain standardi ylläpitää National Institute of Standards and Technology';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'on kansainvälinen standardi tietoturvan hallintaa. Se tarjoaa puitteet tietoturvan hallintajärjestelmän (ISMS) perustamiselle, täytäntöönpanolle, ylläpitämiselle ja jatkuvalle parantamiselle.';

$GLOBALS["lang"]['is based upon'] = 'perustuu';

$GLOBALS["lang"]['is licensed to'] = 'on lisensoitu';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'on seuraava listalla ja Open-AudIT voi käyttää salasanaa ja avaintunnistus. Open-AudIT voi käyttää myös sudo-käyttöistä käyttäjää eikä suoraan juurikäyttöä (vaikka se voi käyttää myös juuria). Parhaisiin tuloksiin olisi käytettävä juurikäyttäjää tai sudo-käyttöistä käyttäjää (katso Auditing Linux without root ja Target Client Configuration on the wiki). Windows-laitteet voivat myös ajaa ssh, mutta jos Open-AudIT havaitsee tämän, se pysäyttää SSH-kyselyt ja käyttää sen sijaan WMI:tä (oletettavasti toimivat WMI-tunnukset).';

$GLOBALS["lang"]['is the link to the'] = 'on linkki';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'kohta tarkastella erityisiä taulukoita ja niiden sarakkeita. Näin voit löytää juuri mitä tarvitset, eikä troolata läpi MySQL konsolin skeema luomisskripti.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'avain tarvitaan hakea lat / pitkä ja näyttää kartta. Katso';

$GLOBALS["lang"]['left'] = 'vasemmalle';

$GLOBALS["lang"]['less or equals'] = 'pienempi tai yhtä suuri';

$GLOBALS["lang"]['less than'] = 'alle';

$GLOBALS["lang"]['license'] = 'lisenssi';

$GLOBALS["lang"]['licenses'] = 'lisenssit';

$GLOBALS["lang"]['like'] = 'Kuten';

$GLOBALS["lang"]['line'] = 'rivi';

$GLOBALS["lang"]['list'] = 'luettelo';

$GLOBALS["lang"]['list View, using the Create button'] = 'luettelonäyttö, käyttäen Luo-painiketta';

$GLOBALS["lang"]['load balancing'] = 'kuorman tasapainotus';

$GLOBALS["lang"]['location'] = 'sijainti';

$GLOBALS["lang"]['locations'] = 'sijainti';

$GLOBALS["lang"]['managed'] = 'hoidettu';

$GLOBALS["lang"]['methods'] = 'menetelmät';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'kiinnityspiste';

$GLOBALS["lang"]['must'] = 'on';

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

$GLOBALS["lang"]['on devices where'] = 'laitteista, joissa';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimoitu';

$GLOBALS["lang"]['optionally '] = 'valinnaisesti ';

$GLOBALS["lang"]['or'] = 'tai';

$GLOBALS["lang"]['or the GitHub page at'] = 'tai GitHub-sivulla';

$GLOBALS["lang"]['other'] = 'muu';

$GLOBALS["lang"]['package'] = 'Pakkaus';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'sivu. Vie LDAP- palvelin valikosta -> Hallinto LDAP-palvelimet -> Yksityiskohdat JSONille ja tallenna ja sisällytä myös nämä tiedot.';

$GLOBALS["lang"]['partition'] = 'osio';

$GLOBALS["lang"]['pass'] = 'ohita';

$GLOBALS["lang"]['pending'] = 'vireillä';

$GLOBALS["lang"]['performance'] = 'suorituskyky';

$GLOBALS["lang"]['performed'] = 'suoritettu';

$GLOBALS["lang"]['permission'] = 'lupa';

$GLOBALS["lang"]['permissions required per endpoint'] = 'vaadittavat luvat päätetapahtumaa kohti';

$GLOBALS["lang"]['pie'] = 'piirakka';

$GLOBALS["lang"]['planning'] = 'suunnittelu';

$GLOBALS["lang"]['predictable'] = 'ennustettavissa';

$GLOBALS["lang"]['query'] = 'kysely';

$GLOBALS["lang"]['rear'] = 'taka';

$GLOBALS["lang"]['rear-left'] = 'takavasemmalla';

$GLOBALS["lang"]['rear-right'] = 'takaoikea';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'Julkaisu';

$GLOBALS["lang"]['removed from display, but has been set'] = 'poistetaan näytöltä, mutta on asetettu';

$GLOBALS["lang"]['reserved'] = 'varattu';

$GLOBALS["lang"]['right'] = 'oikea';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'oikeudet) voit napsauttaa kenttäarvoa muokataksesi sitä.';

$GLOBALS["lang"]['role'] = 'rooli';

$GLOBALS["lang"]['room'] = 'huone';

$GLOBALS["lang"]['row'] = 'rivi';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'palvelu ei käynnisty seuraavan virheen vuoksi';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Joten Open-AudIT tietää rajoittaa kyselysi asianmukaisiin orgeihin.';

$GLOBALS["lang"]['stand-alone'] = 'erillinen';

$GLOBALS["lang"]['standard'] = 'standardi';

$GLOBALS["lang"]['starts with'] = 'alkaa';

$GLOBALS["lang"]['storage'] = 'varastointi';

$GLOBALS["lang"]['subnet'] = 'aliverkko';

$GLOBALS["lang"]['table'] = 'taulukko';

$GLOBALS["lang"]['table and insert the original rows.'] = 'taulukko ja lisää alkuperäiset rivit.';

$GLOBALS["lang"]['team'] = 'ryhmä';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'tekstiviesti. Ensimmäinen on matriisi indeksi ja pitäisi jättää sellaisenaan. Indeksiä käytetään malleissa etsiä käännetty teksti.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'sitten klikkaamalla yksityiskohtia painiketta taulukon.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'sitten klikkaamalla yksityiskohtia painiketta taulukon. Laitetiedot tallennetaan';

$GLOBALS["lang"]['timestamp'] = 'aikaleima';

$GLOBALS["lang"]['to'] = '-';

$GLOBALS["lang"]['to create an item of this type'] = 'luodaksesi tämäntyyppisen kohteen';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'URL, saat koko tietokanta merkintä, mukaan lukien kaikki komponenttitaulukot, tietyn laitteen.';

$GLOBALS["lang"]['to the user'] = 'käyttäjälle';

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

$GLOBALS["lang"]['true or false (in JSON context)'] = 'tosi tai väärä (JSON-yhteydessä)';

$GLOBALS["lang"]['unallocated'] = 'kohdentamaton';

$GLOBALS["lang"]['unauthorised'] = 'luvaton';

$GLOBALS["lang"]['unchanged'] = 'muuttumaton';

$GLOBALS["lang"]['unknown'] = 'tuntematon';

$GLOBALS["lang"]['unmanaged'] = 'hoitamaton';

$GLOBALS["lang"]['unused'] = 'käyttämättä';

$GLOBALS["lang"]['update'] = 'päivitys';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'käyttää laitteistasi kerättyjä tietoja ja vastaa asennettua ohjelmistoa annettuun arvoon, se laskee osumat laskea kuinka monta lisenssiä on käytetty ja kuinka monta on jäljellä. Se mahdollistaa villikorttien käytön <i>täsmää</i> ohjelmistoa vastaava kenttä. nimiattribuutti.';

$GLOBALS["lang"]['using the main menu items.'] = 'käytetään päävalikkoa.';

$GLOBALS["lang"]['valid'] = 'voimassa';

$GLOBALS["lang"]['version'] = 'versio';

$GLOBALS["lang"]['virtualisation'] = 'Virtualisointi';

$GLOBALS["lang"]['warning'] = 'varoitus';

$GLOBALS["lang"]['web'] = 'verkko';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'Paikallis- ja kaukokäyttöoikeudet asetettu.';

$GLOBALS["lang"]['with devices::update permission.'] = 'laitteet::päivitetään lupa.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'Sign-On Re Direct-URIn kanssa';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'tarkoituksena on tarjota yksinkertainen ja intuitiivinen pääsy tavalla, joka on tuttu kehittäjille. Tämän lisäksi API, web-käyttöliittymä käyttää samaa pyyntömuotoa ja toimittaa joitakin muita toimia (esim.: HTML-lomakkeet luoda kohteita).';

$GLOBALS["lang"]['yes'] = 'kyllä';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'et tarvitse HighCharts lisenssi käyttää Firstwave tuotteita. Lisenssi';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'määrität kaikki löydetyt laitteet kyseiseen Orgaan tai Sijaintiin.';

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

