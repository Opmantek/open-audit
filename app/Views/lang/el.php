<?php
$GLOBALS["lang"][' Default, currently '] = ' Προκαθορισμένο, επί του παρόντος ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' υποστηρίζεται τώρα με ένα αρχείο γλώσσας. Για να αλλάξετε το χρήστη σας για να χρησιμοποιήσετε αυτή τη γλώσσα, κάντε κλικ ';

$GLOBALS["lang"][' seconds'] = ' δευτερόλεπτα';

$GLOBALS["lang"]['10 Minutes'] = '10 λεπτά';

$GLOBALS["lang"]['15 Minutes'] = '15 λεπτά';

$GLOBALS["lang"]['30 Minutes'] = '30 λεπτά';

$GLOBALS["lang"]['5 Minutes'] = '5 λεπτά';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>ΣΗΜΕΙΩΣΗ</strong> - Έχετε πρόσβαση σε αυτό το URL από τον τοπικό εξυπηρετητή Open-AudIT. Το μεταφορτωμένο σενάριο δεν θα είναι σε θέση να υποβληθεί όταν εκτελείται σε άλλο μηχάνημα. Εάν χρειαστεί να ελέγξετε άλλα μηχανήματα, παρακαλούμε κατεβάστε το σενάριο από οποιοδήποτε απομακρυσμένο μηχάνημα, μη χρησιμοποιώντας ένα πρόγραμμα περιήγησης στον ίδιο τον εξυπηρετητή Open-AudIT.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">ΣΗΜΕΙΩΣΗ</strong> - Πρέπει να έχετε τα βασικά διαπιστευτήρια SSH ή SSH για να εκτελέσετε σημεία αναφοράς σε μια συσκευή-στόχο.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Έναρξη</strong> - Το γενικό έγγραφο που περιέχει τον βασικό ορισμό και τις επιμέρους δοκιμές πολιτικής.<br/> <br/> <strong>Πολιτικές</strong> - Τις ατομικές δοκιμές που περιέχονται στην αρχική γραμμή. Κάθε δοκιμή αφορά ένα συγκεκριμένο στοιχείο. Ένα παράδειγμα θα ήταν η δοκιμή για την έκδοση της SSH 1.2.3.<br/> <br/> <strong>Λεπτομέρειες</strong> - Οι βασικές γραμμές μπορούν να συγκρίνουν θύρες netstat, χρήστες και λογισμικό.<br/> <br/> <strong>Λογισμικό</strong> - Για να συγκρίνουμε το λογισμικό ελέγχουμε το όνομα και την έκδοση. Επειδή οι αριθμοί έκδοσης δεν είναι όλοι τυποποιημένοι σε μορφή, όταν λαμβάνουμε ένα αποτέλεσμα ελέγχου δημιουργούμε ένα νέο χαρακτηριστικό που ονομάζεται software_padded το οποίο αποθηκεύουμε στη βάση δεδομένων μαζί με τις υπόλοιπες λεπτομέρειες λογισμικού για κάθε πακέτο. Για το λόγο αυτό, οι γραμμές βάσης που χρησιμοποιούν πολιτικές λογισμικού δεν θα λειτουργήσουν όταν τρέξουν ενάντια σε μια συσκευή που δεν έχει ελεγχθεί από 1.10 (τουλάχιστον). Οι πολιτικές λογισμικού μπορούν να δοκιμαστούν κατά της έκδοσης είναι " ίση με", " μεγαλύτερη από" ή " ίση με ή μεγαλύτερη από".<br/> <br/> <strong>Λιμένες Netstat</strong> - Οι θύρες Netstat χρησιμοποιούν έναν συνδυασμό αριθμού θύρας, πρωτοκόλλου και προγράμματος. Αν είναι όλοι παρόντες, η πολιτική περνά.<br/> <br/> <strong>Χρήστες</strong> - Οι χρήστες εργάζονται παρόμοια με το Netstat Ports. Εάν ένας χρήστης υπάρχει με ένα ταιριαστό όνομα, κατάσταση και λεπτομέρειες κωδικού πρόσβασης (αλλάξιμο, λήγει, απαιτείται) τότε η πολιτική περνά.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Μια τοποθεσία είναι μια φυσική διεύθυνση που μπορεί να έχει συσκευές που συνδέονται με αυτό.<br/> <br/>Μπορείτε να του ορίσετε συντεταγμένες (lat/long) και αν υπάρχουν συσκευές που έχουν ανατεθεί, η τοποθεσία θα εμφανιστεί στο χάρτη Open-AudIT Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Ένα δίκτυο προέρχεται από καταχωρήσεις ανακάλυψης και χαρακτηριστικά συσκευής.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Μια περίληψη θα εμφανίσει μια λίστα των αντικειμένων, ομαδοποιημένη από τις διακριτές τιμές του χαρακτηριστικού που καθορίζεται από την <code>table</code> και <code>column</code> Χαρακτηριστικά.<br/> <br/>Όταν εκτελείται μια περίληψη, το αποτέλεσμα θα είναι μια λίστα διακριτών τιμών για αυτό <code>table</code> και <code>column</code>. Θα υπάρχουν σύνδεσμοι στις τιμές που επιτρέπουν στο χρήστη να δει τις συσκευές που ταιριάζουν.<br/> <br/>Εάν το χαρακτηριστικό του <code>extra_columns</code> είναι κατοικημένη, η σελίδα που προκύπτει θα περιέχει αυτές τις στήλες εκτός από τις τυποποιημένες στήλες συσκευών.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Οι πράκτορες σε αφήνουν να ελέγχεις τους υπολογιστές χωρίς καμία ανακάλυψη. Εγκαταστήστε τον πράκτορα και θα κάνει check-in με τον server κάθε μέρα και θα ελέγχει ο ίδιος. Δεν έχει σημασία αν οι υπολογιστές σας είναι firewalled, τα δεδομένα ελέγχου θα εξακολουθούν να εμφανίζονται στο Open-AudIT.</p><p>Κατά τη δοκιμή <strong>εάν</strong> ένας παράγοντας πρέπει να εκτελέσει ενέργειες, και οι τρεις δοκιμές πρέπει να περάσουν (εάν η δοκιμή έχει οριστεί). <strong>Τότε...</strong> τα μέτρα λαμβάνονται.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Οι εφαρμογές ορίζονται από εσάς, τον χρήστη και αποθηκεύονται για το Open-AudIT για χρήση και σύνδεση με συσκευές.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Τα χαρακτηριστικά αποθηκεύονται για το Open-AudIT για χρήση σε συγκεκριμένα πεδία.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Το να είναι σε θέση να καθορίσει ποιες μηχανές διαμορφώνονται το ίδιο είναι ένα σημαντικό μέρος της διαχείρισης συστημάτων και του ώντιτινγκ – και τώρα η υποβολή εκθέσεων σχετικά με αυτό θα γίνει απλή και αυτοματοποιημένη. Μόλις ορίσετε τη γραμμή βάσης σας θα τρέξει αυτόματα ενάντια σε ένα σύνολο συσκευών σε ένα προκαθορισμένο χρονοδιάγραμμα. Η έξοδος αυτών των εκτελεσμένων βασικών γραμμών θα είναι διαθέσιμη για προβολή ιστού, εισαγωγή σε ένα σύστημα τρίτων ή ακόμη και ως έντυπη αναφορά.<br/> <br/> Βασικές γραμμές σας επιτρέπουν να συνδυάσετε τα δεδομένα ελέγχου με ένα σύνολο χαρακτηριστικών που έχετε ορίσει προηγουμένως (την αρχική σας γραμμή) για να καθορίσετε τη συμμόρφωση των συσκευών.<br/> <br/> Για παράδειγμα - μπορεί να δημιουργήσετε μια βασική γραμμή από μια συσκευή που τρέχει Centos 6 η οποία λειτουργεί ως ένας από τους διακομιστές apache σας σε μια συστάδα. Ξέρετε ότι αυτός ο συγκεκριμένος εξυπηρετητής έχει ρυθμιστεί ακριβώς όπως τον θέλετε αλλά δεν είστε σίγουροι αν άλλοι servers στη συστάδα έχουν ρυθμιστεί ακριβώς το ίδιο. Οι γραμμές βάσης σας επιτρέπουν να προσδιορίσετε αυτό.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Οι συστάδες αποθηκεύονται στο Open-AudIT για να συνδέσουν συσκευές για την καλύτερη καταγραφή, διαχείριση και εκτίμηση του κόστους αδειοδότησης.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Τα συστατικά είναι ένας γενικός όρος που χρησιμοποιείται για τους πίνακες που αποθηκεύουν τα χαρακτηριστικά για μια συσκευή. Οι πίνακες αυτοί είναι: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, net, nmap, optical, pagefile, partition, policy, print_queue, processer, radio, route, scsi, server, server_item, service, share, software, software_key, work, usb, user_group, variable, video, vm, windows.</p><p> Επιπλέον, κατηγοριοποιούμε τους παρακάτω πίνακες επίσης ως συσκευή που σχετίζεται: εφαρμογή, συνημμένο, συστάδα, πιστοποίηση, εικόνα.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Οι πληροφορίες κρυπτογραφούνται όταν αποθηκεύονται στη βάση δεδομένων.<br/> <br/>Όταν ένα Discovery εκτελείται, μια συσκευή έχει τα διαπιστευτήριά της ανακτηθεί και ελεγχθεί για σύνδεση πρώτα (από το <code>credential</code> τραπέζι). Αν αυτά αποτύχουν, τότε διαπιστευτήρια που σχετίζονται με το δοσμένο Οργ <code>credentials.org_id</code> δοκιμάζεται επίσης κατά της συσκευής. Τα διαπιστευτήρια εργασίας αποθηκεύονται σε ατομικό επίπεδο συσκευής στον πίνακα πιστοποίησης (σημείωση - no "s" στο όνομα του πίνακα).<br/> <br/>Τα πλήκτρα SSH ελέγχονται πριν από το όνομα χρήστη SSH / κωδικό πρόσβασης. Κατά τον έλεγχο της SSH, τα διαπιστευτήρια θα σημειώνονται επίσης ως εργασία με sudo ή είναι ρίζα.<br/> <br/>Για ευκολία χρήσης, οι κωδικοί πρόσβασης των Windows δεν θα πρέπει να περιέχουν ένα ενιαίο ή διπλό απόσπασμα. Αυτός είναι ένας απομακρυσμένος περιορισμός WMI, όχι ένας περιορισμός Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Η εντολή χρησιμοποιείται για πρόσβαση σε συσκευές.<br/> <br/>Con διαπιστευτηρίων θα πρέπει να είναι ένα από τα πρώτα πράγματα που κάνετε μετά την εγκατάσταση Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Καθορίστε τα ράφια σας και εκχωρήστε συσκευές στις θέσεις τους. Έχετε ήδη τις συσκευές σας στο Open-AudIT και ξέρετε τις τοποθεσίες σας. Open-AudIT επεκτείνει αυτό για να σας επιτρέψει να δημιουργήσετε ένα ράφι και να εκχωρήσετε συσκευές σε αυτό. Το Open-AudIT θα παρέχει ακόμη και μια απεικόνιση της σχάρας και των συσκευών που περιέχονται μέσα. Εάν παρέχετε μια εικόνα συσκευής, η εικόνα αυτή θα χρησιμοποιηθεί στην απεικόνιση. Μπορείτε να κοιτάξετε το ράφι στην οθόνη και να δείτε τα ίδια αντικείμενα που θα δείτε αν στέκεστε μπροστά του.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Οι συσκευές στο δίκτυό σας πρέπει να διαχειριστούν. Αλλά πώς κρατάς τα αρχεία σου ενημερωμένα; Ένα υπολογιστικό φύλλο - deventley όχι. Αυτό θα είναι ξεπερασμένο σε ώρες, αν όχι μέρες. Γιατί με το χέρι προσπαθεί να συμβαδίσει. Χρησιμοποιήστε το Open-AudIT για να σαρώσετε αυτόματα τα δίκτυά σας και να καταγράψετε τις συσκευές σας - κατασκευαστής, μοντέλο, σειριακό και περισσότερα από 100 άλλα χαρακτηριστικά. Πλήρεις λίστες λογισμικού, υπηρεσιών, δίσκων, ανοικτών θυρών, χρηστών κ.λπ. Αυτόματα δείτε αν ένα χαρακτηριστικό έχει προστεθεί, αφαιρεθεί ή αλλάξει.<br/> <br/>Μόλις το Open-AudIT είναι στημένο, μπορείτε να καθίσετε πίσω και να χαλαρώσετε. Έχετε αλλάξει αναφορές σας έστειλε με email σε ένα πρόγραμμα, για παράδειγμα - τι νέες συσκευές ανακαλύψαμε αυτή την εβδομάδα; Ποιο νέο λογισμικό εγκαταστάθηκε αυτή την εβδομάδα; Υπήρξαν αλλαγές υλικού τον περασμένο μήνα;<br/> <br/>Επέκταση στα αποθηκευμένα πεδία εύκολα με τα δικά σας προσαρμοσμένα χαρακτηριστικά.<br/> <br/>Ακόμη και να προσθέσετε συσκευές που δεν είναι συνδεδεμένες στο δίκτυό σας ή σε αυτές τις συσκευές ο εξυπηρετητής Open-AudIT δεν μπορεί να φτάσει.<br/> <br/>Υπολογιστές, διακόπτες, δρομολογητές, εκτυπωτές ή οποιαδήποτε άλλη συσκευή στο δίκτυό σας - Open-AudIT μπορεί να τους ελέγξει όλους.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Οι ανακαλύψεις βρίσκονται στην καρδιά αυτού που κάνει το Open-AudIT.<br/> <br/>Πώς αλλιώς θα ξέρετε "Τι είναι στο δίκτυό μου?"<br/> <br/>Ανακαλύψεις είναι έτοιμα στοιχεία που σας επιτρέπουν να εκτελέσετε μια ανακάλυψη σε ένα δίκτυο με ένα μόνο κλικ, χωρίς να εισάγετε τις λεπτομέρειες του εν λόγω δικτύου κάθε φορά.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Ανακάλυψη Οι επιλογές είναι μια παγκόσμια ρύθμιση αλλάξει στο <a href="../configuration?configuration.name=discovery_default_scan_option">διαμόρφωση</a>. Εάν έχετε μια άδεια Open-AudIT Enterprise αυτά είναι ορατά ανά ανακάλυψη και επιπλέον futher προσαρμόσιμο όπως απαιτείται. Ανακάλυψη Οι επιλογές είναι οι ακόλουθες (συμπεριλαμβανομένου του ενδεικτικού χρόνου σάρωσης μιας μεμονωμένης IP):<br/><br/><strong>Εξαιρετικά Γρήγορο</strong>: <i>1 δευτερόλεπτο</i>. Σαρώστε μόνο τις θύρες που χρειάζεται το Open-AudIT για να μιλήσετε στη συσκευή και να ανιχνεύσετε μια συσκευή IOS (WMI, SSH, SNMP, Apple Sync). Α <code>open|filtered</code> Το λιμάνι θεωρείται ανοικτό. Α <code>filtered</code> το λιμάνι δεν θεωρείται ανοικτό. Η συσκευή πρέπει να ανταποκρίνεται σε ένα πινγκ Nmap. Χρησιμοποίησε επιθετικό συγχρονισμό.<br/><br><strong>Superfast</strong>: <i>5 δευτερόλεπτα</i>. Σάρωση των 10 κορυφαίων θυρών TCP και UDP, καθώς και θύρα 62078 (ανίχνευση Apple IOS). Α <code>open|filtered</code> Το λιμάνι θεωρείται ανοικτό. Α <code>filtered</code> το λιμάνι δεν θεωρείται ανοικτό. Η συσκευή πρέπει να ανταποκρίνεται σε ένα πινγκ Nmap. Χρησιμοποίησε επιθετικό συγχρονισμό.<br><br/><strong>Γρήγορα.</strong>: <i>40 δευτερόλεπτα.</i>. Σαρώστε τις κορυφαίες 100 θύρες TCP και UDP, καθώς και τη θύρα 62078 (ανίχνευση Apple IOS). Α <code>open|filtered</code> Το λιμάνι θεωρείται ανοικτό. Α <code>filtered</code> το λιμάνι δεν θεωρείται ανοικτό. Η συσκευή πρέπει να ανταποκρίνεται σε ένα πινγκ Nmap. Χρησιμοποίησε επιθετικό συγχρονισμό.<br/><br/><strong>Μεσαίο (κλασικό)</strong>: <i>90 δευτερόλεπτα</i>. Όσο πιο κοντά σε μια παραδοσιακή σάρωση Open-AudIT όσο μπορούμε να το κάνουμε. Σαρώστε τις κορυφαίες 1000 θύρες TCP, καθώς και 62078 (ανίχνευση Apple IOS) και UDP 161 (SNMP). Α <code>open|filtered</code> Το λιμάνι θεωρείται ανοικτό. Α <code>filtered</code> Η θύρα θεωρείται ανοικτή (και θα ενεργοποιήσει την ανίχνευση της συσκευής). Οι συσκευές σαρώνονται ανεξάρτητα από την απόκριση σε ένα πινγκ Nmap. Χρησιμοποίησε επιθετικό συγχρονισμό.<br/><br/><strong>Μεσαίο</strong>: <i>100 δευτερόλεπτα</i>. Σαρώστε τις κορυφαίες 1000 TCP και τις κορυφαίες 100 θύρες UDP, καθώς και τη θύρα 62078 (ανίχνευση Apple IOS). Α <code>open|filtered</code> Το λιμάνι θεωρείται ανοικτό. Α <code>filtered</code> το λιμάνι δεν θεωρείται ανοικτό. Η συσκευή πρέπει να ανταποκρίνεται σε ένα πινγκ Nmap. Χρησιμοποίησε επιθετικό συγχρονισμό.<br/><br/><strong>Αργά</strong>: <i>4 λεπτά</i>. Σαρώστε τις κορυφαίες 1000 TCP και τις κορυφαίες 100 θύρες UDP, καθώς και τη θύρα 62078 (ανίχνευση Apple IOS). Ενεργοποίηση ανίχνευσης έκδοσης. Α <code>open|filtered</code> Το λιμάνι θεωρείται ανοικτό. Α <code>filtered</code> Η θύρα θεωρείται ανοικτή (και θα ενεργοποιήσει την ανίχνευση της συσκευής). Η συσκευή πρέπει να ανταποκρίνεται σε ένα πινγκ Nmap. Χρησιμοποίησε κανονικό συγχρονισμό.<br/><br/><strong>Εξαιρετικά αργή</strong>: <i>20 λεπτά</i>. Δεν συνιστάται. Σαρώστε τις κορυφαίες 1000 θύρες TCP και UDP, καθώς και τη θύρα 62078 (ανίχνευση Apple IOS). Οι συσκευές σαρώνονται ανεξάρτητα από την απόκριση σε ένα πινγκ Nmap. Ενεργοποίηση ανίχνευσης έκδοσης. Α <code>open|filtered</code> Το λιμάνι θεωρείται ανοικτό. Α <code>filtered</code> Η θύρα θεωρείται ανοικτή (και θα ενεργοποιήσει την ανίχνευση της συσκευής). Χρησιμοποίησε ευγενικό συγχρονισμό.<br/><br/><strong>Προσαρμοσμένο</strong>: <i>Άγνωστος χρόνος</i>. Όταν οι επιλογές εκτός από αυτές που ορίζονται από ένα πρότυπο προκαθορισμένο ανακάλυψης τροποποιούνται.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Οι ομάδες χρησιμοποιούνται ως απλές λίστες συσκευών που ταιριάζουν στις απαιτούμενες συνθήκες. Εάν ζητηθεί χρησιμοποιώντας JSON επιστρέφουν μια λίστα με <code>devices.id</code> Μόνο. Εάν ζητηθεί χρησιμοποιώντας τη διασύνδεση ιστού, επιστρέφουν την τυπική λίστα χαρακτηριστικών στήλης.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Εάν ο χρήστης συνδεθεί στο Open-AudIT δεν έχει πρόσβαση στην αναζήτηση LDAP (και χρησιμοποιείτε το OpenLDAP), μπορείτε να χρησιμοποιήσετε έναν άλλο λογαριασμό που έχει αυτή την πρόσβαση. Χρήση του <code>ldap_dn_account</code> και <code>ldap_dn_password</code> για να ρυθμίσετε αυτό.<br/> <br/><strong>Βοηθητική Τεκμηρίωση</strong><br/> <br/><a href="/index.php/auth/help">Γενική βοήθεια Ωθ</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Χρήση Entra για Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Χρήση OKTA για Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Αντιμετώπιση προβλημάτων σύνδεσης LDAP</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Χρήστες, Ρόλοι και Οργανισμοί</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Αν προσθέσετε έναν τύπο συσκευής, για να εμφανίσετε το σχετικό εικονίδιο θα πρέπει να αντιγράψετε χειροκίνητα το σχηματοποιημένο αρχείο .svg στον κατάλογο:<br/><em>Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Παράθυρα</em>: γ:\xampp\htdocs\ open-audit\ device_images<br/> <br/>Αν προσθέσετε έναν τύπο τοποθεσίας, για να εμφανίσετε το σχετικό εικονίδιο θα πρέπει να αντιγράψετε χειροκίνητα το εικονίδιο 32x32px στον κατάλογο:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Παράθυρα</em>: γ:\xampp\htdocs\ open-audit\images\map_icons</p><p>Όταν το <i>πόρος</i> λέ <code>device</code>, έγκυρο <i>τύποι</i> είναι: <code>class</code>, <code>environment</code>, <code>status</code> και <code>type</code>. Εάν η <i>πόρος</i> λέ <code>locations</code> ή <code>org</code> η μόνη έγκυρη <i>τύπος</i> λέ <code>type</code>. Εάν η <i>πόρος</i> λέ <code>query</code> η μόνη έγκυρη <i>τύπος</i> λέ <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Εάν σκοπεύετε να ελέγξετε πλήρως τις μηχανές cloud σας, μην ξεχνάτε ότι θα χρειαστείτε επίσης τα διαπιστευτήρια που αποθηκεύονται στο Open-AudIT.</p><p>Βεβαιωθείτε ότι επιτρέπετε τις σωστές θύρες εάν χρησιμοποιείτε το Microsoft Azure (22 για SSH, κλπ). Ελέγξτε Virtual Machine σας -> Κανόνες δικτύωσης.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Εάν επιλέξετε έναν τύπο λίστας, το πεδίο "τιμών" θα ενεργοποιηθεί. Εδώ θα πρέπει να βάλετε μια χωρισμένη λίστα με τις επιλεγμένες τιμές. Αυτά θα εμφανίζονται σε ένα αναπτυσσόμενο πλαίσιο κάθε φορά που το πεδίο έχει επεξεργαστεί.<br/> <br/>Όπως και τα περισσότερα άλλα χαρακτηριστικά, τα πεδία μπορούν να επεξεργαστούν χύμα. Χρησιμοποιήστε τη λειτουργία Bulk Edit όπως θα κανονικά και θα δείτε τα πεδία είναι διαθέσιμα για είσοδο.<br/> <br/>Δείτε την οθόνη λεπτομερειών της συσκευής, ανοίξτε το τμήμα που περιέχει το πεδίο και (αν έχετε επαρκή πρόσβαση) μπορείτε να κάνετε κλικ στην τιμή πεδίου για να το επεξεργαστείτε.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Στον συνεχώς μεταβαλλόμενο κόσμο της ασφάλειας των υπολογιστών όπου ανακαλύπτονται και επιδιορθώνονται νέα τρωτά σημεία κάθε μέρα, η επιβολή της συμμόρφωσης με την ασφάλεια πρέπει να είναι μια συνεχής διαδικασία. Πρέπει επίσης να περιλαμβάνει έναν τρόπο προσαρμογής των πολιτικών, καθώς και περιοδική αξιολόγηση και παρακολούθηση των κινδύνων. Το οικοσύστημα OpenSCAP παρέχει εργαλεία και προσαρμόσιμες πολιτικές για μια γρήγορη, οικονομικά αποδοτική και ευέλικτη εφαρμογή αυτών των διαδικασιών.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Ενσωματώσεις σας επιτρέπουν να ρυθμίσετε την επιλογή συσκευών και τα προγράμματα για το Open-AudIT για να μιλήσετε με εξωτερικά συστήματα.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Λεπτομέρειες συγχρονισμού Nmap βρίσκονται στο κάτω μέρος αυτής της συνδεδεμένης σελίδας <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html Διεύθυνση:</a>. Από εκείνη τη σελίδα:<br/> <br/><em>Αν είστε σε μια αξιοπρεπή ευρυζωνική ή ethernet σύνδεση, θα ήθελα να συστήσω πάντα τη χρήση -T4 (Επιθετικό). Μερικοί άνθρωποι αγαπούν -T5 (τρελό) αν και είναι πολύ επιθετικό για το γούστο μου. Οι άνθρωποι μερικές φορές καθορίζουν -T2 (Polite) επειδή νομίζουν ότι είναι λιγότερο πιθανό να συντριβούν οικοδεσπότες ή επειδή θεωρούν ότι είναι ευγενικοί γενικά. Συχνά δεν συνειδητοποιούν πόσο αργό είναι πραγματικά το -T2. Η σάρωση τους μπορεί να διαρκέσει δέκα φορές περισσότερο από μια προεπιλεγμένη σάρωση. Συντριβές μηχανών και τα προβλήματα εύρους ζώνης είναι σπάνια με τις προεπιλεγμένες επιλογές συγχρονισμού -T3 (Κανονική) και έτσι συνήθως συνιστώ ότι για τους προσεκτικοί σαρωτές. Η παράλειψη ανίχνευσης έκδοσης είναι πολύ πιο αποτελεσματική από το παιχνίδι με τις τιμές χρονισμού στη μείωση αυτών των προβλημάτων.</em><footer>Γκόρντον. <i>Φιόντορ.</i> Λυών</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Το Open-AudIT μπορεί να ρυθμιστεί ώστε να χρησιμοποιεί διαφορετικές μεθόδους για την ταυτοποίηση ενός χρήστη και επιπλέον, για τη δημιουργία ενός λογαριασμού χρήστη χρησιμοποιώντας εκχωρημένους ρόλους και οργανισμούς με βάση την ιδιότητα μέλους της ομάδας.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Ανοιχτή Οδό Η IT μπορεί να ανακτήσει λεπτομέρειες σχετικά με ένα αρχείο ή κατάλογο αρχείων και να παρακολουθεί αυτά τα αρχεία για αλλαγές σύμφωνα με άλλα χαρακτηριστικά στη βάση δεδομένων Open-AudIT.<br/> <br/>Αυτή η λειτουργία λειτουργεί έξω από το πλαίσιο για τους εξυπηρετητές Linux Open-AudIT, αλλά χρειάζεται μια αλλαγή στο όνομα λογαριασμού υπηρεσίας κάτω από έναν εξυπηρετητή Open-AudIT Windows.<br/> <br/>Υποστηριγμένοι πελάτες είναι τα Windows και το Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Ανοιχτή Οδό Η IT μπορεί να ανακτήσει λεπτομέρειες για ένα αρχείο, να ρωτήσει τον τοπικό διαχειριστή πακέτων αν είναι γνωστοί σε αυτό και να παρακολουθεί αυτά τα αρχεία για αλλαγές σύμφωνα με άλλες ιδιότητες στη βάση δεδομένων Open-AudIT.<br/> <br/>Οι υποστηριζόμενοι πελάτες είναι μόνο Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Ανοιχτή Οδό IT μπορεί να αποθηκεύσει πληροφορίες σε προσαρμοσμένα πεδία που συνδέονται με κάθε συσκευή.<br/> <br/>Μόλις δημιουργηθεί ένα πρόσθετο πεδίο μπορεί να χρησιμοποιηθεί σε ερωτήματα και ομάδες όπως κάθε άλλο χαρακτηριστικό στη βάση δεδομένων.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Το Open-AudIT έρχεται με πολλά ερωτήματα ενσωματωμένα. Εάν χρειάζεστε ένα συγκεκριμένο ερώτημα και κανένα από τα προσυσκευασμένα ερωτήματα δεν ταιριάζει στις ανάγκες σας, είναι αρκετά εύκολο να δημιουργήσετε ένα νέο και να το φορτώσετε σε Open-AudIT για τρέξιμο.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Το Open-AudIT έρχεται με πολλές περιλήψεις ενσωματωμένες. Αν χρειάζεστε μια συγκεκριμένη περίληψη και καμία από τις προσυσκευασμένες περιλήψεις δεν ταιριάζει στις ανάγκες σας, είναι αρκετά εύκολο να δημιουργήσετε μια νέα και να την φορτώσετε σε Open-AudIT για τρέξιμο.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Το Open-AudIT υποστηρίζεται από το FirstWave με ένα εκπληκτικό επίπεδο υποστήριξης. Αν προτιμάτε μια ενεργό κοινότητα των δωρητών υποστήριξης, υπάρχει και αυτό. Πού αλλού μπορείτε να μιλήσετε απευθείας στους προγραμματιστές και να πάρετε μια απάντηση μέσα σε 24 ώρες; Δοκιμάστε το με άλλα προϊόντα! Καταπληκτική υποστήριξη. Πλήρης στάση. Χρειάζεσαι υποστήριξη, παρέχουμε υποστήριξη. Όχι αν ή αλλά. Μεγάλη υποστήριξη. Τέλος.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Το Open-AudIT παρέχει πολλαπλή διάρκεια έξω από το κουτί!<br/> <br/>Οργανισμοί (οργανισμοί) στο Open-AudIT είναι ένα βασικό στοιχείο. Ένας χρήστης έχει έναν πρωταρχικό Οργανισμό καθώς και μια λίστα των Οργών που μπορούν να έχουν πρόσβαση. Ένας χρήστης το συνδυάζει αυτό με μια λίστα των εκχωρημένων "Roles" που καθορίζουν ποιες ενέργειες μπορούν να αναλάβουν σε αντικείμενα που έχουν ανατεθεί στους οργανισμούς που έχουν πρόσβαση. Ο συνδυασμός ενός χρήστη "orgs" και "roles" καθορίζουν τι μπορούν και τι δεν μπορούν να κάνουν μέσα στο Open-AudIT.<br/> <br/>Τα περισσότερα αντικείμενα στο Open-AudIT ανατίθενται σε έναν Οργ. Συσκευές, Τοποθεσίες, Δίκτυα, κλπ.<br/> <br/>Τα όργκ μπορούν να κάνουν παιδιά. Σκεφτείτε μια οργανωτική δομή (δέντρο). Εάν ένας χρήστης έχει πρόσβαση σε συγκεκριμένο Οργ, έχουν επίσης πρόσβαση σε αυτούς τους Οργούς απογόνους. Για περισσότερες πληροφορίες, δείτε το <a href="/index.php/faq?name=Users, Roles and Orgs">Συχνές ερωτήσεις</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Το Open-AudIT παρέχει πολλαπλή διάρκεια έξω από το κουτί!<br/> <br/>Οργανισμοί (οργανισμοί) στο Open-AudIT είναι ένα βασικό στοιχείο. Ένας χρήστης έχει έναν πρωταρχικό Οργανισμό καθώς και μια λίστα των Οργών που μπορούν να έχουν πρόσβαση. Ένας χρήστης το συνδυάζει αυτό με μια λίστα των εκχωρημένων "Roles" που καθορίζουν ποιες ενέργειες μπορούν να αναλάβουν σε αντικείμενα που έχουν ανατεθεί στους οργανισμούς που έχουν πρόσβαση. Ο συνδυασμός ενός χρήστη "orgs" και "roles" καθορίζουν τι μπορούν και τι δεν μπορούν να κάνουν μέσα στο Open-AudIT.<br/> <br/>Τα περισσότερα αντικείμενα στο Open-AudIT ανατίθενται σε έναν Οργ. Συσκευές, Τοποθεσίες, Δίκτυα, κλπ.<br/> <br/>Τα όργκ μπορούν να κάνουν παιδιά. Σκεφτείτε μια οργανωτική δομή (δέντρο). Εάν ένας χρήστης έχει πρόσβαση σε συγκεκριμένο Οργ, έχουν επίσης πρόσβαση σε αυτούς τους Οργούς απογόνους.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Δείτε γρήγορα την κατάσταση των συσκευών στο δίκτυό σας.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Ρόλοι στο Open-Aud Είναι ένα βασικό στοιχείο. Ένας χρήστης έχει έναν πρωταρχικό Οργανισμό καθώς και μια λίστα των Οργών που μπορούν να έχουν πρόσβαση. Ένας χρήστης το συνδυάζει αυτό με μια λίστα με καθορισμένους Ρόλους που καθορίζουν ποιες ενέργειες μπορούν να αναλάβουν σε αντικείμενα που έχουν ανατεθεί στους Οργούς στους οποίους έχουν πρόσβαση. Ο συνδυασμός ενός χρήστη "orgs" και "roles" καθορίζουν τι μπορούν και τι δεν μπορούν να κάνουν μέσα στο Open-AudIT.<br/> <br/>Πάρτε την πλήρη εμπειρία Open-AudIT Enterprise. Η δημιουργία rolesόλων επιτρέπει τον λεπτοκομμένο έλεγχο του τι μπορούν να κάνουν οι χρήστες σας μέσα στο Open-AudIT.<br/> <br/>Η πρωταρχική μέθοδος για την αδειοδότηση (τι μπορεί να κάνει ένας χρήστης) βασίζεται στους ρόλους των χρηστών. Οι προκαθορισμένοι ρόλοι ορίζονται ως admin, org_admin, reporter και user. Κάθε ρόλος έχει ένα σύνολο αδειών (Δημιουργία, ανάγνωση, ενημέρωση, διαγραφή) για κάθε τελικό σημείο. Η δυνατότητα καθορισμού πρόσθετων rolesόλων και επεξεργασίας υφιστάμενων rolesόλων είναι ενεργοποιημένη στο Open-AudIT Enterprise.<br/> <br/>Οι ρόλοι μπορούν επίσης να χρησιμοποιηθούν με την άδεια LDAP (Active Directory και OpenLDAP). Οι εγκαταστάσεις με άδεια εκμετάλλευσης επιχειρήσεων έχουν τη δυνατότητα να προσαρμόζουν τον όμιλο LDAP για κάθε καθορισμένο ρόλο.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Οι κανόνες εξετάζουν τα χαρακτηριστικά και κάνουν cahnges με βάση τον κατάλληλο κανόνα.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Επιλογές σάρωσης σας επιτρέπουν να εφαρμόσετε εύκολα ένα σύνολο επιλογών σε μια ανακάλυψη.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Απλή, διαισθητική, ακριβής γεωγραφική χαρτογράφηση που παρέχεται από το Google Maps. Μετοχικοί τίτλοι Χάρτες Google για την παροχή ζωντανής, διαδραστικής γεωγραφικής χαρτογράφησης των θέσεων συσκευών. Αυτοματοποιημένη μετατροπή διευθύνσεων οδών σε γεωκωδικούς και γεωγραφικό μήκος / γεωγραφικό πλάτος.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Πακέτα λογισμικού χρησιμοποιούνται για να καθορίσουν αν είναι εγκατεστημένο λογισμικό antivirus, backup, firewall, εγκεκριμένο ή απαγορευμένο.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Μερικά παραδείγματα έγκυρων ιδιοτήτων του Subnet είναι: 192.168.1.1 (μια ενιαία διεύθυνση IP), 192.168.1.0/24 (ένα υποδίκτυο), 192.168.1-3.1-20 (μια σειρά διευθύνσεων IP).<br/> <br/><em>ΣΗΜΕΙΩΣΗ</em> - Μόνο ένα υποδίκτυο (σύμφωνα με τα παραδείγματα - 192.168.1.0/24) θα είναι σε θέση να δημιουργήσει αυτόματα ένα έγκυρο δίκτυο για το Open-AudIT. <br/> <br/>Εάν χρησιμοποιείτε έναν ενεργό τύπο καταλόγου, βεβαιωθείτε ότι έχετε τα κατάλληλα διαπιστευτήρια για να μιλήσετε με τον ελεγκτή τομέα σας ήδη σε <a href="../credentials">διαπιστευτήρια</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Τα πρότυπα αποθηκεύονται στο Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Οι υποστηριζόμενοι πελάτες είναι μόνο Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Οι εργασίες έχουν ένα πρόγραμμα που αντικατοπτρίζει το πρόγραμμα Unix Cron. Τα χαρακτηριστικά για το λεπτό, ώρα, ημέρα_του_μήνα, μήνα, ημέρα_της_εβδομάδας όλα λειτουργούν σύμφωνα με τους ορισμούς cron. Μπορείτε να επιλέξετε πολλαπλάσια αυτών χρησιμοποιώντας χωρισμένες τιμές κόμμα (χωρίς κενά). Μπορείτε να επιλέξετε κάθε τιμή χρησιμοποιώντας *.<br/> <br/>Η <code>type</code> του έργου μπορεί να είναι ένα από τα εξής: γραμμές βάσης, συλλέκτες, ανακαλύψεις, ερωτήματα, εκθέσεις ή περιλήψεις.<br/> <br/>Αν επιθυμείτε να προγραμματίσετε μια γραμμή βάσης ή Discovery, θα πρέπει να δημιουργήσετε αυτά πριν από τη δημιουργία των εργασιών. Πρέπει να χρησιμοποιήσετε το ID του τύπου του αντικειμένου στο <code>sub_resource_id</code>. Για παράδειγμα, αν επιθυμείτε να προγραμματίσετε ένα Discovery, χρησιμοποιήστε το συγκεκριμένο Discoveries ID στο <code>sub_resource_id</code>.<br/> <br/>Η τιμή για <code>uuid</code> είναι συγκεκριμένος σε κάθε εξυπηρετητή Open-AudIT. Η μοναδική σας αξία μπορεί να βρεθεί στις ρυθμίσεις.<br/> <br/>Η <code>options</code> χαρακτηριστικό είναι ένα έγγραφο JSON που περιέχει τυχόν επιπλέον χαρακτηριστικά που απαιτούνται για την εκτέλεση της εργασίας. Τα επιπλέον χαρακτηριστικά για εκθέσεις, ερωτήματα και περιλήψεις είναι: <code>email_address</code> και <code>format</code>. Το επιπλέον χαρακτηριστικό για Bselines είναι <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>Η <code>type</code> του τόπου θα εκχωρήσει το εικονίδιο του.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Το τελικό σημείο Χαρακτηριστικά σας επιτρέπει να προσθέσετε προσαρμοσμένες τιμές σε διαφορετικές ιδιότητες στο Open-AudIT, αυτή τη στιγμή αυτό το χαρακτηριστικό λειτουργεί για τις ιδιότητες Κλάσης, Περιβάλλοντος, Κατάστασης και Τύπου στις Συσκευές, το χαρακτηριστικό τύπου τόσο για τις Τοποθεσίες όσο και για τους Οργούς, καθώς και την Κατηγορία Μενού για Ερωτήσεις. Εάν δείτε ένα στοιχείο ενός από τους τύπους prvious (δείτε ένα Lkocatation) θα παρατηρήσετε ότι το χαρακτηριστικό τύπου πρέπει να επιλεγεί από ένα πλαίσιο drop-down. Εδώ αποθηκεύονται αυτές οι τιμές. Ως εκ τούτου, αν θέλετε να προσθέσετε ένα νέο τύπο που θα επιλεγεί για μια τοποθεσία, προσθέστε το χρησιμοποιώντας τη λειτουργία Χαρακτηριστικά.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Η λειτουργία Collectors σας δίνει τη δυνατότητα να διαχειριστείτε εύκολα πολλούς " Collector" υπολογιστές που εκτελούν ανακάλυψη δικτύου. Όλοι οι Συλλέκτες ελέγχονται κεντρικά από τον Διακομιστή. Οι μόνες απαιτούμενες θύρες δικτύου μεταξύ του Συλλέκτη και του Διακομιστή είναι 80 ή/και 443.<br/> <br/>Κάνει τη διαχείριση ανόμοιων δικτύων γρήγορη, εύκολη και απλή. Οι δικαιοδόχοι του Open-AudIT Enterprise παίρνουν μία μόνο άδεια συλλέκτη και έχουν τη δυνατότητα να αγοράσουν περισσότερα, όπως απαιτείται..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Το τμήμα SELECT του SQL σας <em>πρέπει</em> περιέχουν πλήρως εξειδικευμένες στήλες. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Το τμήμα WHO του SQL σας <em>πρέπει</em> περιέχει <code>WHERE @filter</code> Έτσι Open-AudIT ξέρει να περιορίσει το ερώτημά σας στα κατάλληλα Orgs. Το SQL που δεν περιέχει αυτή την κατάσταση θα έχει ως αποτέλεσμα το ερώτημα να αποτύχει να δημιουργηθεί, εκτός αν έχετε το ρόλο διαχειριστή.<br/> <br/>Ένα παράδειγμα ερώτημα SQL που εμφανίζει ιδιότητες σε συσκευές που έχουν <code>os_group</code> χαρακτηριστικό του "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Το τμήμα SELECT του SQL σας <em>πρέπει</em> μόνο περιέχει <code>DISTINCT(devices.id)</code>.<br/> <br/>Το τμήμα WHO του SQL σας <em>πρέπει</em> περιέχει <code>WHERE @filter</code> Έτσι Open-AudIT ξέρει να περιορίσει το ερώτημά σας στα κατάλληλα Orgs. Το SQL που δεν περιέχει αυτή την κατάσταση θα έχει ως αποτέλεσμα την αποτυχία δημιουργίας της ομάδας.<br/> <br/>Ένα παράδειγμα για το SQL για να επιλέξετε όλες τις συσκευές που εκτελούν το Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Το τελικό σημείο της άδειας σας επιτρέπει να παρακολουθείτε τον αριθμό των αδειών που βρέθηκαν στις συσκευές σας.<br/> <br/>Για να δημιουργήσετε μια καταχώρηση για να παρακολουθείτε τις άδειες σας <em>πρέπει</em> να παρέχει ένα όνομα, έναν οργανισμό, τον αριθμό των αδειών που έχουν αποκτηθεί και το όνομα του λογισμικού. Στο γήπεδο <code>match_string</code> πρέπει να παρέχει το όνομα του λογισμικού που θέλετε να παρακολουθείτε, μπορείτε να χρησιμοποιήσετε το ποσοστό σημάδι (%) ως μπαλαντέρ στο match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Το δίκτυο θα πρέπει να έχει τη μορφή 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Τα κύρια και προαιρετικά δευτερεύοντα αντικείμενα πρέπει να είναι πλήρως εξειδικευμένα - δηλαδή συσκευές. τύπος ή λογισμικό. Όνομα.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Δεν χρειάζεται να κάνετε τίποτα αν τρέχετε Open-AudIT σε έναν εξυπηρετητή Linux.<br/><br/>Οι πελάτες των Windows είναι μια χαρά και δεν απαιτούν ειδικές ενέργειες, ωστόσο... για να ενεργοποιήσετε αυτό το χαρακτηριστικό το σενάριο ελέγχου πρέπει να εκτελείται τοπικά στο σύστημα των Windows στόχο. Δεν μπορεί να εκτελεστεί εξ αποστάσεως όπως κάνουμε με τις κλήσεις WMI κατά την εκτέλεση του σεναρίου ελέγχου σε ένα μηχάνημα Windows, ενώ στοχεύει και μια δεύτερη μηχανή Windows. Για να το κάνουμε αυτό πρέπει να αντιγράψουμε το σενάριο ελέγχου στη μηχανή στόχο Windows και στη συνέχεια να το εκτελέσουμε. Δυστυχώς ο λογαριασμός υπηρεσιών που λειτουργεί ο Απάτσι είναι ο λογαριασμός του τοπικού συστήματος. Αυτός ο λογαριασμός δεν έχει πρόσβαση σε απομακρυσμένους (με βάση το δίκτυο) πόρους. Για να εργαστούμε γύρω από αυτό το ζήτημα, η υπηρεσία πρέπει να λειτουργεί σε άλλο λογαριασμό. Είναι πιο εύκολο να χρησιμοποιήσετε απλά τον τοπικό λογαριασμό διαχειριστή, αλλά μπορείτε να δοκιμάσετε οποιοδήποτε λογαριασμό σας αρέσει όσο έχει τα απαιτούμενα προνόμια. Ο λογαριασμός του τοπικού συστήματος έχει τόσο τοπική πρόσβαση όσο και ο τοπικός λογαριασμός διαχειριστή.<br/><br/>Δείτε τη σελίδα μας για την ενεργοποίηση <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Εκτέλεση υπηρεσίας Apache Open-Audit υπό Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Αυτές είναι οι συσκευές που ζουν μέσα σε ένα ράφι.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Αυτό το τελικό σημείο σας δίνει τη δυνατότητα να προσθέσετε τα στοιχεία υποδομής cloud σας. Το Open-AudIT στη συνέχεια θα προσεγγίσει τα σύννεφα σας χρησιμοποιώντας το εγγενές API τους και θα επιστρέψει τους διακομιστές σας, όπως κάθε άλλη συσκευή στο Open-AudIT.<br/> <br/><em>ΣΗΜΕΙΩΣΗ</em> - Για να χρησιμοποιήσουμε αυτό το χαρακτηριστικό, εμείς <em>πρέπει</em> ενεργοποιήστε τα στοιχεία ρυθμίσεων match_mac (για AWS) και match_hostname (για Azure). Αυτό θα γίνει αυτόματα την πρώτη φορά που θα εκτελεστεί μια ανακάλυψη σύννεφου.<br/> <br/>Έντυπο για το σύννεφο σας (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Αζούρ</a> ή <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) αpiαιτούνται.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Αναφορά ευπαθών στοιχείων με βάση τη ροή CVE NIST.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Αρχικά ρυθμίσαμε την προκαθορισμένη λίστα των σεναρίων με τις προεπιλεγμένες επιλογές. Αυτά τα προεπιλεγμένα σενάρια δεν μπορούν να διαγραφούν. Μπορείτε να δημιουργήσετε πρόσθετα σενάρια για χρήση από εσάς όπως απαιτείται. Το σενάριό σας θα βασίζεται σε ένα από τα υπάρχοντα σενάρια και θα έχει προσαρμοσμένες επιλογές. Τα σενάρια μπορούν στη συνέχεια να μεταφορτωθούν από τη σελίδα λίστα στο μενού -> Ανακαλύψτε -> Σενάρια ελέγχου -> Λίστα σεναρίων ελέγχου<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Όταν χρησιμοποιείτε Regex για ταίριασμα, μια χρήσιμη σελίδα μπορεί να βρεθεί στο <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Ιστοσελίδα PHP</a>. Ορισμένες διαφορές για Perl Regex μπορεί να βρεθεί <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Εδώ.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets μπορεί εύκολα να δημιουργηθεί για να δείξει ό, τι είναι συγκεκριμένο για το περιβάλλον σας στα ταμπλό σας.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Με Open-AudIT Επαγγελματικά και Enterprise μπορείτε να αυτοματοποιήσετε και να προγραμματίσετε ανακαλύψεις, την παραγωγή αναφοράς, ή τους ελέγχους βάσης για να εκτελέσετε όταν θέλετε, και όσο συχνά χρειάζεστε. Προγραμματίστε τις ανακαλύψεις σας για να εκτελέσετε νυχτερινά και τις αναφορές που πρέπει να δημιουργούνται και να αποστέλλονται με email στο βασικό προσωπικό κάθε πρωί. Σύνθετα ή απλά προγράμματα, η ανακάλυψη συσκευών και η παραγωγή αναφοράς είναι απλά ένα κλικ μακριά.<br/> <br/>Δημιουργήστε μεμονωμένα προγράμματα ανακάλυψης για κάθε υποδίκτυο ή χειριστήριο AD, προσθέστε τις αναφορές που θα δημιουργηθούν για στοχευμένο κοινό. Ανάπτυξη απλών ή πολύπλοκων χρονοδιαγραμμάτων για την υποστήριξη των αναγκών της εταιρείας, την αποφυγή αντιγράφων ασφαλείας ή επιπτώσεων στις λειτουργίες, ή απλά για την εξάπλωση του φορτίου και την επιτάχυνση της ολοκλήρωσης του ελέγχου.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Μπορείτε να δημιουργήσετε ένα σενάριο με όλες τις επιλογές για οποιοδήποτε από τα υπάρχοντα σενάρια ελέγχου - όχι μόνο τα Windows. Τα AIX, ESX, Linux, OSX και Windows καλύπτονται όλα.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Μπορείτε να χρησιμοποιήσετε το ποσοστό % σημάδι ως μπαλαντέρ στο match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Τα ράφια σας βοηθούν να βελτιώσετε ακριβώς πού βρίσκονται οι συσκευές σας.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Χάρτες Google API Το κλειδί απαιτείται για αυτή τη λειτουργία.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Μια σειρά από ταυτότητες συσκευών JSON που θα εκτελέσουν αυτό το σημείο αναφοράς.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Μια σειρά αντικειμένων JSON που ταιριάζουν με το όνομα λογισμικού που λαμβάνεται από το CVE, εμπλουτισμένο με το όνομα λογισμικού που ανακτήθηκε από το Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Μια σειρά τιμών JSON για να ελεγχθεί για αυτή την ευπάθεια.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Ένα έγγραφο JSON που περιέχει τους Οργάδες που έχουν ανατεθεί σε αυτόν τον χρήστη. Στοιχεία ταυτότητας που λαμβάνονται από <code>orgs.id</code>. Αν ένας χρήστης έχει πρόσβαση σε έναν Οργ, έχει πρόσβαση στους απογόνους των Οργών.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Ένα έγγραφο JSON που περιέχει τα απαιτούμενα χαρακτηριστικά ανάλογα με <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Ένα έγγραφο JSON που περιέχει τα απαιτούμενα χαρακτηριστικά υπερισχύει της επιλεγμένης ανακάλυψης_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Ένα έγγραφο JSON που περιέχει τα απαιτούμενα χαρακτηριστικά που υπερισχύουν των προεπιλεγμένων επιλογών ταιριάσματος της συσκευής.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Ένα έγγραφο JSON που περιέχει τους ρόλους που έχουν ανατεθεί σε αυτόν τον χρήστη. Όνομα ρόλου που λαμβάνεται από <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Ένα αντικείμενο JSON που περιέχει μια σειρά ιδιοτήτων για να αλλάξει αν συμβεί το ταίριασμα.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Ένα αντικείμενο JSON που περιέχει μια σειρά από χαρακτηριστικά που ταιριάζουν.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Ένα αντικείμενο JSON που περιέχει συγκεκριμένες επιλογές συλλογής.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Ένα αντικείμενο JSON κατοικήθηκε μέσω μιας ανακάλυψης Cloud.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Μια αναπαράσταση JSON που περιέχει τις λεπτομέρειες του αντικειμένου της ουράς προς εκτέλεση.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Μια εκπροσώπηση JSON των τομέων αυτής της ολοκλήρωσης.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Μια αναπαράσταση JSON των μεμονωμένων δοκιμών και τα αποτελέσματά τους σε όλες τις συσκευές αυτή η βάση έχει τρέξει ενάντια.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Μια αναπαράσταση JSON των δοκιμών που αποτελούν αυτή την πολιτική.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Ένα URL σε ένα αρχείο για λήψη.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Ένα υπολογισμένο πεδίο που εμφανίζει τον αριθμό των φορές αυτό το κομμάτι λογισμικού βρέθηκε στους υπολογιστές του επιλεγμένου Οργ (και των απογόνων του αν έχει ρυθμιστεί).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Ένας συλλέκτης είναι είτε σε λειτουργία Colector ή Stand-Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Διαχωρισμένος κατάλογος των εφαρμοστέων ΚΕΕ.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Μια διαχωρισμένη λίστα τιμών, μία από τις οποίες μπορεί να επιλεγεί.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Μια εντολή για να τρέξει. Όταν ο πράκτορας βασίζεται στα Windows, αυτή η εντολή εκτελείται μέσα από τον παράγοντα powershell.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Μια λίστα προσαρμοσμένων θυρών TCP για σάρωση (22 είναι SSH, 135 είναι WMI, 62078 είναι συγχρονισμός iPhone).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Μια λίστα με προσαρμοσμένες θύρες UDP για σάρωση (161 είναι SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Ένας μικρότερος αριθμός σημαίνει ότι θα εφαρμοστεί πριν από άλλους κανόνες.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Ένας μικρότερος αριθμός σημαίνει ότι θα εφαρμοστεί πριν από άλλους κανόνες. Το προκαθορισμένο βάρος είναι 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Ένας κωδικός πρόσβασης (αποθηκευμένος ως hash) που επιτρέπει το logon όταν χρησιμοποιεί την ταυτοποίηση της εφαρμογής.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Ένας χώρος δρομολόγησης ή διεύθυνσης όπου οι διευθύνσεις IP και οι διευθύνσεις MAC είναι μοναδικές.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Μια ζώνη ασφαλείας είναι ένας διοικητικός τομέας ή τομέας πολιτικής εντός του τομέα δικτύου.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Μια σύντομη περιγραφή της καταχώρησης του ημερολογίου.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Μια χορδή που ταιριάζει με την <code>software.name</code> χαρακτηριστικό γνώρισμα. Μπορείτε να χρησιμοποιήσετε το πρότυπο SQL wildcard του ποσοστού (%) για να ταιριάζει με έναν ή περισσότερους χαρακτήρες.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Μια ευπάθεια που επηρεάζει τη διαθεσιμότητα μπορεί να επιτρέψει στους επιτιθέμενους να διαταράξουν τις υπηρεσίες, τα συστήματα συντριβής ή να προκαλέσουν άρνηση υπηρεσίας (DoS) (Κανένα, Χαμηλό, Υψηλό).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Μια ευπάθεια που επηρεάζει το απόρρητο μπορεί να επιτρέψει στους επιτιθέμενους να διαβάσουν ευαίσθητα δεδομένα, όπως προσωπικές πληροφορίες, διαπιστευτήρια, ή ιδιόκτητα επιχειρηματικά δεδομένα (Κανένα, Χαμηλό, Υψηλό).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Μια ευπάθεια που επηρεάζει την ακεραιότητα μπορεί να επιτρέψει στους επιτιθέμενους να τροποποιήσουν τα δεδομένα, να εγχύσουν κακόβουλο κώδικα, ή να τροποποιήσουν τις ρυθμίσεις του συστήματος (Κανένα, Χαμηλό, Υψηλό).';

$GLOBALS["lang"]['AD Group'] = 'Ομάδα AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, κ.λπ.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ΟΛΕΣ οι IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Πρόσβαση στο διαδίκτυο';

$GLOBALS["lang"]['API Documentation'] = 'Τεκμηρίωση API';

$GLOBALS["lang"]['API Key required.'] = 'Απαιτείται κλειδί API.';

$GLOBALS["lang"]['API Result'] = 'Αποτέλεσμα API';

$GLOBALS["lang"]['About'] = 'Σχετικά';

$GLOBALS["lang"]['Accept'] = 'Αποδοχή';

$GLOBALS["lang"]['access_point'] = 'Σημείο πρόσβασης';

$GLOBALS["lang"]['Access Point'] = 'Σημείο πρόσβασης';

$GLOBALS["lang"]['access_token'] = 'Ένδειξη πρόσβασης';

$GLOBALS["lang"]['Access Token'] = 'Ένδειξη πρόσβασης';

$GLOBALS["lang"]['ack_by'] = 'Από τον';

$GLOBALS["lang"]['Ack By'] = 'Από τον';

$GLOBALS["lang"]['ack_date'] = 'Ημερομηνία Ack';

$GLOBALS["lang"]['Ack Date'] = 'Ημερομηνία Ack';

$GLOBALS["lang"]['ack_time'] = 'Ώρα Ack';

$GLOBALS["lang"]['Ack Time'] = 'Ώρα Ack';

$GLOBALS["lang"]['action'] = 'Δράση';

$GLOBALS["lang"]['Action'] = 'Δράση';

$GLOBALS["lang"]['action_audit'] = 'Έλεγχος δράσης';

$GLOBALS["lang"]['Action Audit'] = 'Έλεγχος δράσης';

$GLOBALS["lang"]['action_command'] = 'Εντολή ενέργειας';

$GLOBALS["lang"]['Action Command'] = 'Εντολή ενέργειας';

$GLOBALS["lang"]['action_date'] = 'Ημερομηνία δράσης';

$GLOBALS["lang"]['Action Date'] = 'Ημερομηνία δράσης';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Διατάξεις δράσης για την τοποθεσία';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Διατάξεις δράσης για την τοποθεσία';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Συσκευές δράσης που έχουν ανατεθεί στον Οργανισμό';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Συσκευές δράσης που έχουν ανατεθεί στον Οργανισμό';

$GLOBALS["lang"]['action_download'] = 'Λήψη ενέργειας';

$GLOBALS["lang"]['Action Download'] = 'Λήψη ενέργειας';

$GLOBALS["lang"]['action_uninstall'] = 'Απεγκατάσταση ενέργειας';

$GLOBALS["lang"]['Action Uninstall'] = 'Απεγκατάσταση ενέργειας';

$GLOBALS["lang"]['actioned'] = 'Ενεργήθηκε';

$GLOBALS["lang"]['Actioned'] = 'Ενεργήθηκε';

$GLOBALS["lang"]['actioned_by'] = 'Ενεργοποιήθηκε από';

$GLOBALS["lang"]['Actioned By'] = 'Ενεργοποιήθηκε από';

$GLOBALS["lang"]['actioned_date'] = 'Ημερομηνία ενέργειας';

$GLOBALS["lang"]['Actioned Date'] = 'Ημερομηνία ενέργειας';

$GLOBALS["lang"]['actions'] = 'Δράσεις';

$GLOBALS["lang"]['Actions'] = 'Δράσεις';

$GLOBALS["lang"]['Activate'] = 'Ενεργοποίηση';

$GLOBALS["lang"]['Activate Free License'] = 'Ενεργοποίηση δωρεάν άδειας';

$GLOBALS["lang"]['Activate Key'] = 'Ενεργοποίηση κλειδιού';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Ενεργοποίηση δωρεάν άδειας Enterprise';

$GLOBALS["lang"]['Active'] = 'Ενεργό';

$GLOBALS["lang"]['Active / Active'] = 'Ενεργό / ενεργό';

$GLOBALS["lang"]['Active / Passive'] = 'Ενεργό / παθητικό';

$GLOBALS["lang"]['Active Directory'] = 'Ενεργός κατάλογος';

$GLOBALS["lang"]['Active Directory Domain'] = 'Ενεργός τομέας καταλόγου';

$GLOBALS["lang"]['active_directory_ou'] = 'Ενεργός κατάλογος Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Ενεργός κατάλογος Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Ενεργός εξυπηρετητής καταλόγου';

$GLOBALS["lang"]['ad_domain'] = 'Τομέας διαφημίσεων';

$GLOBALS["lang"]['Ad Domain'] = 'Τομέας διαφημίσεων';

$GLOBALS["lang"]['ad_group'] = 'Ομάδα ad';

$GLOBALS["lang"]['Ad Group'] = 'Ομάδα ad';

$GLOBALS["lang"]['ad_server'] = 'Διακομιστής διαφημίσεων';

$GLOBALS["lang"]['Ad Server'] = 'Διακομιστής διαφημίσεων';

$GLOBALS["lang"]['Add'] = 'Προσθήκη';

$GLOBALS["lang"]['Add Credentials'] = 'Προσθήκη πληροφοριών';

$GLOBALS["lang"]['Add Device'] = 'Προσθήκη συσκευής';

$GLOBALS["lang"]['Add Device to Application'] = 'Προσθήκη συσκευής στην εφαρμογή';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Προσθήκη συσκευής στη συστάδα';

$GLOBALS["lang"]['Add Exception'] = 'Προσθήκη εξαίρεσης';

$GLOBALS["lang"]['Add Field'] = 'Προσθήκη πεδίου';

$GLOBALS["lang"]['Add If'] = 'Προσθήκη αν';

$GLOBALS["lang"]['Add Policies from Device'] = 'Προσθήκη πολιτικών από τη συσκευή';

$GLOBALS["lang"]['Add Policy'] = 'Προσθήκη πολιτικής';

$GLOBALS["lang"]['Add Then'] = 'Προσθήκη στη συνέχεια';

$GLOBALS["lang"]['Add image'] = 'Προσθήκη εικόνας';

$GLOBALS["lang"]['additional_items'] = 'Πρόσθετα αντικείμενα';

$GLOBALS["lang"]['Additional Items'] = 'Πρόσθετα αντικείμενα';

$GLOBALS["lang"]['address'] = 'Διεύθυνση';

$GLOBALS["lang"]['Address'] = 'Διεύθυνση';

$GLOBALS["lang"]['Admin'] = 'Διαχειριστής';

$GLOBALS["lang"]['admin_status'] = 'Κατάσταση διαχειριστή';

$GLOBALS["lang"]['Admin Status'] = 'Κατάσταση διαχειριστή';

$GLOBALS["lang"]['advanced'] = 'Προχωρημένα';

$GLOBALS["lang"]['Advanced'] = 'Προχωρημένα';

$GLOBALS["lang"]['Afghanistan'] = 'Αφγανιστάν';

$GLOBALS["lang"]['agents'] = 'Πράκτορες';

$GLOBALS["lang"]['Agents'] = 'Πράκτορες';

$GLOBALS["lang"]['Aggressive'] = 'Επιθετική';

$GLOBALS["lang"]['Aland Islands'] = 'Νήσοι Άλαντ';

$GLOBALS["lang"]['Albania'] = 'Αλβανία';

$GLOBALS["lang"]['alert_style'] = 'Στυλ ειδοποίησης';

$GLOBALS["lang"]['Alert Style'] = 'Στυλ ειδοποίησης';

$GLOBALS["lang"]['Algeria'] = 'Αλγερία';

$GLOBALS["lang"]['algorithm'] = 'Αλγόριθμος';

$GLOBALS["lang"]['Algorithm'] = 'Αλγόριθμος';

$GLOBALS["lang"]['alias'] = 'Ψευδώνυμο';

$GLOBALS["lang"]['Alias'] = 'Ψευδώνυμο';

$GLOBALS["lang"]['All'] = 'Όλα';

$GLOBALS["lang"]['All IPs'] = 'Όλες οι IPs';

$GLOBALS["lang"]['All Policies'] = 'Όλες οι πολιτικές';

$GLOBALS["lang"]['All Queued Items'] = 'Όλα τα αντικείμενα σε αναμονή';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Αμαζόνιο AWS Πεδία';

$GLOBALS["lang"]['American Samoa'] = 'Αμερικανική Σαμόα';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Μια σειρά από <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Μια σειρά από <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Μια σειρά αντικειμένων που αναπαριστούν εξωτερικούς συνδέσμους σε περισσότερες πληροφορίες.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Ένα κρυπτογραφημένο έγγραφο JSON που περιέχει τα απαιτούμενα χαρακτηριστικά ανάλογα με το <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Μια ένδειξη του επιπέδου υπηρεσίας που απαιτείται από αυτόν τον ιστότοπο.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Ένα εσωτερικό πεδίο που δείχνει αν η ανακάλυψη έχει ολοκληρωθεί.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Ένα προαιρετικό GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Ένας προαιρετικός κωδικός πρόσβασης για χρήση sudo.';

$GLOBALS["lang"]['Andorra'] = 'Ανδόρα';

$GLOBALS["lang"]['Angola'] = 'Αγκόλα';

$GLOBALS["lang"]['Anguilla'] = 'Ανγκουίλα';

$GLOBALS["lang"]['Antarctica'] = 'Ανταρκτική';

$GLOBALS["lang"]['AntiVirus'] = 'Αντιιοί';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Αντίγκουα και Μπαρμπούντα';

$GLOBALS["lang"]['Antivirus'] = 'Αντιιοί';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Οποιαδήποτε θύρα TCP (κόμμα διαχωρίζεται, δεν υπάρχουν κενά) επιθυμείτε να αποκλείσετε από αυτή την ανακάλυψη. Διατίθεται μόνο όταν χρησιμοποιείται το Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Οποιεσδήποτε θύρες UDP (κόμμα χωρισμένα, χωρίς κενά) επιθυμείτε να αποκλείσετε από αυτή την ανακάλυψη. Διατίθεται μόνο όταν χρησιμοποιείται το Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Οποιαδήποτε επιπλέον τεκμηρίωση χρειάζεστε.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Οποιαδήποτε επιπλέον σημειώσεις θέλεις να κάνεις.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Οποιεσδήποτε συσκευές θα ανατεθούν σε αυτόν τον Οργανισμό όταν εκτελέσουν το σενάριο ελέγχου τους (αν είναι καθορισμένο). Συνδέσεις <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Οποιαδήποτε ανακαλυφθείσα συσκευή θα ανατεθεί σε αυτή την τοποθεσία, αν οριστεί. Συνδέσεις <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Οποιεσδήποτε συσκευές που ανακαλύφθηκαν θα ανατεθούν σε αυτήν την Τοποθεσία όταν εκτελέσουν το σενάριο ελέγχου τους (αν είναι σετ). Συνδέσεις <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Οποιαδήποτε ανακαλυφθεί συσκευή θα ανατεθεί σε αυτόν τον Οργ αν οριστεί. Εάν δεν έχουν οριστεί, έχουν ανατεθεί στην <code>org_id</code> αυτής της ανακάλυψης. Συνδέσεις <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Κάθε απαιτούμενο φίλτρο. ΣΗΜΕΙΩΣΗ: Όταν ο τύπος = κυκλοφορία, αυτό αντιπροσωπεύει το εικονίδιο γραμματοσειράς-απίστευτο.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Οποιεσδήποτε συγκεκριμένες θύρες TCP επιθυμείτε δοκιμασμένες (κόμμα χωριστά, χωρίς κενά).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Οποιεσδήποτε συγκεκριμένες θύρες UDP επιθυμείτε δοκιμαστεί (κόμμα χωρισμένο, χωρίς κενά).';

$GLOBALS["lang"]['Application'] = 'Εφαρμογή';

$GLOBALS["lang"]['application_id'] = 'ID εφαρμογής';

$GLOBALS["lang"]['Application ID'] = 'ID εφαρμογής';

$GLOBALS["lang"]['Application Licenses'] = 'Άδειες εφαρμογής';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Εφαρμογή, Λειτουργικό Σύστημα ή Υλικό.';

$GLOBALS["lang"]['applications'] = 'Αιτήσεις';

$GLOBALS["lang"]['Applications'] = 'Αιτήσεις';

$GLOBALS["lang"]['applied'] = 'Εφαρμόζεται';

$GLOBALS["lang"]['Applied'] = 'Εφαρμόζεται';

$GLOBALS["lang"]['Approved'] = 'Εγκεκριμένο';

$GLOBALS["lang"]['April'] = 'Απρίλιος';

$GLOBALS["lang"]['architecture'] = 'Αρχιτεκτονική';

$GLOBALS["lang"]['Architecture'] = 'Αρχιτεκτονική';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Επιθυμείτε σίγουρα τη διαγραφή αυτού του αντικειμένου εισόδου;';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Επιθυμείτε σίγουρα τη διαγραφή αυτού του αντικειμένου εξόδου;';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Είσαι σίγουρος; Αυτό θα αφαιρέσει όλες τις καταχωρήσεις στην ουρά και θα αποτρέψει την ανακάλυψη των υπόλοιπων IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Είσαι σίγουρος; Αυτό θα επαναφέρει τον αριθμό επεξεργασίας ουράς και θα μπορούσε να προκαλέσει φορτίο στον εξυπηρετητή.';

$GLOBALS["lang"]['area'] = 'Περιοχή';

$GLOBALS["lang"]['Area'] = 'Περιοχή';

$GLOBALS["lang"]['Argentina'] = 'Αργεντινή';

$GLOBALS["lang"]['Armenia'] = 'Αρμενία';

$GLOBALS["lang"]['arp'] = 'Αρπ';

$GLOBALS["lang"]['Arp'] = 'Αρπ';

$GLOBALS["lang"]['Aruba'] = 'Αρούμπα';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Σύμφωνα με τα χαρακτηριστικά για περιβάλλοντα συσκευών. Παραγωγή, Κατάρτιση, κ.ά.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Καθώς έχετε τους συλλέκτες εγγεγραμμένους, παρακαλώ επιλέξτε πού θα εκτελέσετε αυτή την ανακάλυψη.';

$GLOBALS["lang"]['Ask me later'] = 'Ρώτα με αργότερα.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Ζητήστε βοήθεια από την Κοινότητα ή απαντήστε στους άλλους.';

$GLOBALS["lang"]['aspect_ratio'] = 'Αναλογία διαστάσεων';

$GLOBALS["lang"]['Aspect Ratio'] = 'Αναλογία διαστάσεων';

$GLOBALS["lang"]['Asset ID'] = 'Στοιχεία ενεργητικού';

$GLOBALS["lang"]['asset_ident'] = 'Στοιχεία ενεργητικού';

$GLOBALS["lang"]['Asset Ident'] = 'Στοιχεία ενεργητικού';

$GLOBALS["lang"]['asset_number'] = 'Αριθμός ενεργητικού';

$GLOBALS["lang"]['Asset Number'] = 'Αριθμός ενεργητικού';

$GLOBALS["lang"]['asset_tag'] = 'Ετικέτα περιουσιακού στοιχείου';

$GLOBALS["lang"]['Asset Tag'] = 'Ετικέτα περιουσιακού στοιχείου';

$GLOBALS["lang"]['Assign Device to Application'] = 'Ορισμός συσκευής σε εφαρμογή';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Ορισμός συσκευής στη συστάδα';

$GLOBALS["lang"]['Assign Device to Location'] = 'Ορισμός συσκευής στην τοποθεσία';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Ορισμός συσκευής για την οργάνωση';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Ορισμός συσκευών στην τοποθεσία';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Ορισμός συσκευών στην οργάνωση';

$GLOBALS["lang"]['Assign an Operator'] = 'Ορισμός φορέα εκμετάλλευσης';

$GLOBALS["lang"]['Assigned To'] = 'Ανατέθηκε σε';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Προς το παρόν μπορούμε να χρησιμοποιήσουμε netstat_ports, λογισμικό και χρήστες.';

$GLOBALS["lang"]['attached_device_id'] = 'Προσαρτημένο αναγνωριστικό συσκευής';

$GLOBALS["lang"]['Attached Device ID'] = 'Προσαρτημένο αναγνωριστικό συσκευής';

$GLOBALS["lang"]['attached_to'] = 'Προσαρτημένο στο';

$GLOBALS["lang"]['Attached To'] = 'Προσαρτημένο στο';

$GLOBALS["lang"]['attachment'] = 'Συνημμένο';

$GLOBALS["lang"]['Attachment'] = 'Συνημμένο';

$GLOBALS["lang"]['attachments'] = 'Συνημμένα';

$GLOBALS["lang"]['Attachments'] = 'Συνημμένα';

$GLOBALS["lang"]['attack_complexity'] = 'Πολυπλοκότητα επίθεσης';

$GLOBALS["lang"]['Attack Complexity'] = 'Πολυπλοκότητα επίθεσης';

$GLOBALS["lang"]['attack_requirements'] = 'Απαιτήσεις επίθεσης';

$GLOBALS["lang"]['Attack Requirements'] = 'Απαιτήσεις επίθεσης';

$GLOBALS["lang"]['attack_vector'] = 'Διάνυσμα Επίθεσης';

$GLOBALS["lang"]['Attack Vector'] = 'Διάνυσμα Επίθεσης';

$GLOBALS["lang"]['Attribute'] = 'Χαρακτηριστικά';

$GLOBALS["lang"]['attributes'] = 'Χαρακτηριστικά';

$GLOBALS["lang"]['Attributes'] = 'Χαρακτηριστικά';

$GLOBALS["lang"]['Audit'] = 'Έλεγχος';

$GLOBALS["lang"]['Audit AIX'] = 'Έλεγχος AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Έλεγχος ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Linux ελέγχου';

$GLOBALS["lang"]['audit_log'] = 'Καταγραφή ελέγχου';

$GLOBALS["lang"]['Audit Log'] = 'Καταγραφή ελέγχου';

$GLOBALS["lang"]['Audit My PC'] = 'Έλεγχος Ο υπολογιστής μου';

$GLOBALS["lang"]['Audit OSX'] = 'Έλεγχος OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Εισαγωγή αποτελέσματος ελέγχου';

$GLOBALS["lang"]['Audit Status'] = 'Κατάσταση ελέγχου';

$GLOBALS["lang"]['Audit Windows'] = 'Έλεγχος παραθύρων';

$GLOBALS["lang"]['Audit the Device'] = 'Έλεγχος της συσκευής';

$GLOBALS["lang"]['Audits'] = 'Έλεγχοι';

$GLOBALS["lang"]['August'] = 'Αύγουστος';

$GLOBALS["lang"]['Australia'] = 'Αυστραλία';

$GLOBALS["lang"]['Austria'] = 'Αυστρία';

$GLOBALS["lang"]['Auth'] = 'Οθόνη';

$GLOBALS["lang"]['auth'] = 'Οθόνη';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Φράση πρόσβασης ταυτοποίησης';

$GLOBALS["lang"]['authority_key_ident'] = 'Αναγνωριστικό κλειδιού αρχής';

$GLOBALS["lang"]['Authority Key Ident'] = 'Αναγνωριστικό κλειδιού αρχής';

$GLOBALS["lang"]['Auto'] = 'Αυτόματη';

$GLOBALS["lang"]['auto_renew'] = 'Αυτόματη ανανέωση';

$GLOBALS["lang"]['Auto Renew'] = 'Αυτόματη ανανέωση';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Αυτόματο κατοικείται από το Open-AudIT Server.';

$GLOBALS["lang"]['AutoRenew'] = 'Αυτόματη ανανέωση';

$GLOBALS["lang"]['automatable'] = 'Αυτόματο';

$GLOBALS["lang"]['Automatable'] = 'Αυτόματο';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Αυτόματα κατοικημένα με βάση το Collectors OS.';

$GLOBALS["lang"]['availability'] = 'Διαθεσιμότητα';

$GLOBALS["lang"]['Availability'] = 'Διαθεσιμότητα';

$GLOBALS["lang"]['Azerbaijan'] = 'Αζερμπαϊτζάν';

$GLOBALS["lang"]['BTU Max'] = 'Μέγιστη BTU';

$GLOBALS["lang"]['BTU Total'] = 'BTU Σύνολο';

$GLOBALS["lang"]['Backup'] = 'Δημιουργία αντιγράφων ασφαλείας';

$GLOBALS["lang"]['Bahamas the'] = 'Μπαχάμες';

$GLOBALS["lang"]['Bahrain'] = 'Μπαχρέιν';

$GLOBALS["lang"]['Bangladesh'] = 'Μπανγκλαντές';

$GLOBALS["lang"]['bank'] = 'Τράπεζα';

$GLOBALS["lang"]['Bank'] = 'Τράπεζα';

$GLOBALS["lang"]['Banned'] = 'Απαγόρευση';

$GLOBALS["lang"]['bar_code'] = 'Κωδικός γραμμής';

$GLOBALS["lang"]['Bar Code'] = 'Κωδικός γραμμής';

$GLOBALS["lang"]['Barbados'] = 'Μπαρμπάντος';

$GLOBALS["lang"]['Base DN'] = 'Βάση DN';

$GLOBALS["lang"]['base_score'] = 'Βαθμολογία βάσης';

$GLOBALS["lang"]['Base Score'] = 'Βαθμολογία βάσης';

$GLOBALS["lang"]['base_severity'] = 'Βασική σοβαρότητα';

$GLOBALS["lang"]['Base Severity'] = 'Βασική σοβαρότητα';

$GLOBALS["lang"]['based_on'] = 'Βασισμένο σε';

$GLOBALS["lang"]['Based On'] = 'Βασισμένο σε';

$GLOBALS["lang"]['baseline'] = 'Έναρξη';

$GLOBALS["lang"]['Baseline'] = 'Έναρξη';

$GLOBALS["lang"]['baseline_id'] = 'Αναγνωριστικό γραμμής';

$GLOBALS["lang"]['Baseline ID'] = 'Αναγνωριστικό γραμμής';

$GLOBALS["lang"]['baselines'] = 'Βασικές γραμμές';

$GLOBALS["lang"]['Baselines'] = 'Βασικές γραμμές';

$GLOBALS["lang"]['baselines_policies'] = 'Πολιτικές βασικών γραμμών';

$GLOBALS["lang"]['Baselines Policies'] = 'Πολιτικές βασικών γραμμών';

$GLOBALS["lang"]['Baselines Policy'] = 'Πολιτική βασικών γραμμών';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Λεπτομέρειες πολιτικής βασικών γραμμών';

$GLOBALS["lang"]['baselines_results'] = 'Αποτελέσματα βασικών γραμμών';

$GLOBALS["lang"]['Baselines Results'] = 'Αποτελέσματα βασικών γραμμών';

$GLOBALS["lang"]['Basic'] = 'Βασικό';

$GLOBALS["lang"]['Belarus'] = 'Λευκορωσία';

$GLOBALS["lang"]['Belgium'] = 'Βέλγιο';

$GLOBALS["lang"]['Belize'] = 'Μπελίζε';

$GLOBALS["lang"]['Benchmark'] = 'Σημείωμα';

$GLOBALS["lang"]['benchmark_id'] = 'Αναγνωριστικός κωδικός αναφοράς';

$GLOBALS["lang"]['Benchmark ID'] = 'Αναγνωριστικός κωδικός αναφοράς';

$GLOBALS["lang"]['benchmarks'] = 'Σημεία αναφοράς';

$GLOBALS["lang"]['Benchmarks'] = 'Σημεία αναφοράς';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Εξαιρέσεις';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Εξαιρέσεις';

$GLOBALS["lang"]['benchmarks_log'] = 'Καταγραφή σημάτων';

$GLOBALS["lang"]['Benchmarks Log'] = 'Καταγραφή σημάτων';

$GLOBALS["lang"]['benchmarks_policies'] = 'Πολιτικές αναφοράς';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Πολιτικές αναφοράς';

$GLOBALS["lang"]['benchmarks_result'] = 'Αποτέλεσμα benchmarks';

$GLOBALS["lang"]['Benchmarks Result'] = 'Αποτέλεσμα benchmarks';

$GLOBALS["lang"]['Benin'] = 'Μπενίν';

$GLOBALS["lang"]['Bermuda'] = 'Βερμούδες';

$GLOBALS["lang"]['best_practises'] = 'Οι καλύτερες πρακτικές';

$GLOBALS["lang"]['Best Practises'] = 'Οι καλύτερες πρακτικές';

$GLOBALS["lang"]['Bhutan'] = 'Μπουτάν';

$GLOBALS["lang"]['bios'] = 'Βιολογικά';

$GLOBALS["lang"]['Bios'] = 'Βιολογικά';

$GLOBALS["lang"]['body'] = 'Σώμα';

$GLOBALS["lang"]['Body'] = 'Σώμα';

$GLOBALS["lang"]['Bolivia'] = 'Βολιβία';

$GLOBALS["lang"]['Boolean'] = 'Δυαδικό';

$GLOBALS["lang"]['Boolean 1/0'] = 'Δυαδικό 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Δυαδικό y/n';

$GLOBALS["lang"]['boot_device'] = 'Συσκευή εκκίνησης';

$GLOBALS["lang"]['Boot Device'] = 'Συσκευή εκκίνησης';

$GLOBALS["lang"]['bootable'] = 'Εκκίνηση';

$GLOBALS["lang"]['Bootable'] = 'Εκκίνηση';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Βοσνία-Ερζεγοβίνη';

$GLOBALS["lang"]['Botswana'] = 'Μποτσουάνα';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Νήσος Μπουβέ (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Βραζιλία';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Πορτογαλικά Βραζιλίας';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Βρετανικό έδαφος Ινδικού Ωκεανού (Αρχιπέλαγος Τσάγκος)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Βρετανικές Παρθένοι Νήσοι';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Μπρουνέι Νταρουσαλάμ';

$GLOBALS["lang"]['btu_max'] = 'Μεγ. Btu';

$GLOBALS["lang"]['Btu Max'] = 'Μεγ. Btu';

$GLOBALS["lang"]['btu_total'] = 'Σύνολο';

$GLOBALS["lang"]['Btu Total'] = 'Σύνολο';

$GLOBALS["lang"]['build_number'] = 'Αριθμός κατασκευής';

$GLOBALS["lang"]['Build Number'] = 'Αριθμός κατασκευής';

$GLOBALS["lang"]['build_number_full'] = 'Πλήρης κατασκευή αριθμού';

$GLOBALS["lang"]['Build Number Full'] = 'Πλήρης κατασκευή αριθμού';

$GLOBALS["lang"]['Building'] = 'Κτίριο';

$GLOBALS["lang"]['Bulgaria'] = 'Βουλγαρία';

$GLOBALS["lang"]['Bulk Edit'] = 'Μαζική επεξεργασία';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Χαρακτηριστικά συσκευής μαζικής επεξεργασίας';

$GLOBALS["lang"]['Burkina Faso'] = 'Μπουρκίνα Φάσο';

$GLOBALS["lang"]['Burundi'] = 'Μπουρούντι';

$GLOBALS["lang"]['business_requirements'] = 'Επιχειρηματικές απαιτήσεις';

$GLOBALS["lang"]['Business Requirements'] = 'Επιχειρηματικές απαιτήσεις';

$GLOBALS["lang"]['Buy'] = 'Αγορά';

$GLOBALS["lang"]['Buy More'] = 'Αγορά περισσότερων';

$GLOBALS["lang"]['Buy More Licenses'] = 'Αγοράστε περισσότερες άδειες';

$GLOBALS["lang"]['By'] = 'Από';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Μάσκα';

$GLOBALS["lang"]['cli_config'] = 'CLI Conf';

$GLOBALS["lang"]['CLI Config'] = 'CLI Conf';

$GLOBALS["lang"]['CPU'] = 'ΚΜΕ';

$GLOBALS["lang"]['CPUs'] = 'ΚΜΕ';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'ΚΒΑ';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Υπολογίζεται από την ανακάλυψη.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Υπολογισμένος συνολικός αριθμός έγκυρων διευθύνσεων IP για αυτό το δίκτυο.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Υπολογίζεται μετά την ολοκλήρωση, ο χρόνος που απαιτείται για την εκτέλεση αυτού του αντικειμένου.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Υπολογίζεται όταν εκτελείται η ενσωμάτωση και περιέχει μια αναπαράσταση JSON των συσκευών σε αυτή την ενσωμάτωση. Κάθε σύνδεση με <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Υπολογίζεται όταν εκτελείται η ενσωμάτωση και περιέχει μια αναπαράσταση JSON των τοποθεσιών σε αυτή την ενσωμάτωση. Κάθε σύνδεση με <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Υπολογίζεται όταν εκτελείται η ενσωμάτωση και περιέχει τον αριθμό των συσκευών που επιλέχθηκαν από το Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Υπολογίζεται όταν εκτελείται η ολοκλήρωση και περιέχει τον αριθμό συσκευών που επιλέχθηκαν το εξωτερικό σύστημα.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Υπολογίζεται όταν εκτελείται η ολοκλήρωση και περιέχει τον αριθμό των συσκευών που πρέπει να ενημερώνονται στο εξωτερικό σύστημα.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Υπολογίζεται όταν εκτελείται ενσωμάτωση και περιέχει τον αριθμό των συσκευών που ενημερώνονται στο Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Καμπότζη';

$GLOBALS["lang"]['Cameroon'] = 'Καμερούν';

$GLOBALS["lang"]['Campus Area Network'] = 'Δίκτυο περιοχής Campus';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Μπορεί να είναι <code>active</code>, <code>passive</code> ή κενό.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Μπορεί να είναι <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> ή κενό.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Μπορεί να είναι <code>auto</code>, <code>fixed</code>, <code>other</code> ή κενό.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Μπορεί να είναι <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> ή κενό.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Μπορεί να είναι <code>line</code>, <code>pie</code> ή <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Μπορεί να είναι <code>user</code> ή <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Μπορεί να οριστεί από την ανακάλυψη ή το χρήστη.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Μπορεί να οριστεί από την ανακάλυψη ή το χρήστη. Χρησιμοποιεί την ταυτότητα από τον πίνακα θέσεων.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Μπορεί ο χρήστης να επεξεργαστεί αυτό το αντικείμενο.';

$GLOBALS["lang"]['Canada'] = 'Καναδάς';

$GLOBALS["lang"]['Cancel'] = 'Ακύρωση';

$GLOBALS["lang"]['capabilities'] = 'Δυνατότητες';

$GLOBALS["lang"]['Capabilities'] = 'Δυνατότητες';

$GLOBALS["lang"]['Capacity'] = 'Χωρητικότητα';

$GLOBALS["lang"]['Cape Verde'] = 'Πράσινο Ακρωτήριο';

$GLOBALS["lang"]['Capitalise'] = 'Κεφαλαιοποίηση';

$GLOBALS["lang"]['caption'] = 'Τίτλος';

$GLOBALS["lang"]['Caption'] = 'Τίτλος';

$GLOBALS["lang"]['Cayman Islands'] = 'Νήσοι Κέιμαν';

$GLOBALS["lang"]['Cellular Details'] = 'Λεπτομέρειες κελιού';

$GLOBALS["lang"]['Central African Republic'] = 'Κεντροαφρικανική Δημοκρατία';

$GLOBALS["lang"]['certificate'] = 'Πιστοποιητικό';

$GLOBALS["lang"]['Certificate'] = 'Πιστοποιητικό';

$GLOBALS["lang"]['certificate_file'] = 'Αρχείο πιστοποιητικού';

$GLOBALS["lang"]['Certificate File'] = 'Αρχείο πιστοποιητικού';

$GLOBALS["lang"]['certificate_name'] = 'Όνομα πιστοποιητικού';

$GLOBALS["lang"]['Certificate Name'] = 'Όνομα πιστοποιητικού';

$GLOBALS["lang"]['certificates'] = 'Πιστοποιητικά';

$GLOBALS["lang"]['Certificates'] = 'Πιστοποιητικά';

$GLOBALS["lang"]['Chad'] = 'Τσαντ';

$GLOBALS["lang"]['change_id'] = 'Τροποποίηση ID';

$GLOBALS["lang"]['Change ID'] = 'Τροποποίηση ID';

$GLOBALS["lang"]['change_log'] = 'Τροποποίηση καταγραφής';

$GLOBALS["lang"]['Change Log'] = 'Τροποποίηση καταγραφής';

$GLOBALS["lang"]['change_type'] = 'Τροποποίηση τύπου';

$GLOBALS["lang"]['Change Type'] = 'Τροποποίηση τύπου';

$GLOBALS["lang"]['check_minutes'] = 'Έλεγχος λεπτών';

$GLOBALS["lang"]['Check Minutes'] = 'Έλεγχος λεπτών';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Ελέγξτε για SSH σε αυτές τις θύρες';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Ελέγξτε αυτή τη θύρα για οποιαδήποτε υπηρεσία SSH.';

$GLOBALS["lang"]['Chile'] = 'Χιλή';

$GLOBALS["lang"]['China'] = 'Κίνα';

$GLOBALS["lang"]['Choose'] = 'Επιλογή';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Επιλέξτε (επιλέξτε το OS πρώτα)';

$GLOBALS["lang"]['Choose a Device'] = 'Επιλέξτε μια συσκευή';

$GLOBALS["lang"]['Choose a Table'] = 'Επιλογή πίνακα';

$GLOBALS["lang"]['Christmas Island'] = 'Νήσος των Χριστουγέννων';

$GLOBALS["lang"]['cidr'] = 'Σιδρ';

$GLOBALS["lang"]['Cidr'] = 'Σιδρ';

$GLOBALS["lang"]['circuit_count'] = 'Αριθμός κυκλωμάτων';

$GLOBALS["lang"]['Circuit Count'] = 'Αριθμός κυκλωμάτων';

$GLOBALS["lang"]['circuit_status'] = 'Κατάσταση κυκλώματος';

$GLOBALS["lang"]['Circuit Status'] = 'Κατάσταση κυκλώματος';

$GLOBALS["lang"]['city'] = 'Πόλη';

$GLOBALS["lang"]['City'] = 'Πόλη';

$GLOBALS["lang"]['class'] = 'Κλάση';

$GLOBALS["lang"]['Class'] = 'Κλάση';

$GLOBALS["lang"]['class_text'] = 'Κείμενο κλάσης';

$GLOBALS["lang"]['Class Text'] = 'Κείμενο κλάσης';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Κάντε κλικ στο κουμπί Διαγραφή για να αφαιρέσετε τις συσκευές του παραδείγματος από το Open-AudIT.<br/>Αυτό θα αφαιρέσει τις παρακάτω συσκευές από τη βάση δεδομένων. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Κάντε κλικ στο παρακάτω κουμπί Εισαγωγή για να γεμίσετε Open-AudIT με τα δεδομένα της συσκευής παράδειγμα.';

$GLOBALS["lang"]['Client ID'] = 'Ταυτότητα πελάτη';

$GLOBALS["lang"]['client_ident'] = 'Ταυτότητα πελάτη';

$GLOBALS["lang"]['Client Ident'] = 'Ταυτότητα πελάτη';

$GLOBALS["lang"]['client_secret'] = 'Μυστικό πελάτη';

$GLOBALS["lang"]['Client Secret'] = 'Μυστικό πελάτη';

$GLOBALS["lang"]['client_site_name'] = 'Όνομα ιστοσελίδας πελάτη';

$GLOBALS["lang"]['Client Site Name'] = 'Όνομα ιστοσελίδας πελάτη';

$GLOBALS["lang"]['Close'] = 'Κλείσιμο';

$GLOBALS["lang"]['Cloud'] = 'Σύννεφο';

$GLOBALS["lang"]['Cloud Details'] = 'Λεπτομέρειες Cloud';

$GLOBALS["lang"]['Cloud Discovery'] = 'Ανακάλυψη Cloud';

$GLOBALS["lang"]['cloud_id'] = 'ID Cloud';

$GLOBALS["lang"]['Cloud ID'] = 'ID Cloud';

$GLOBALS["lang"]['cloud_log'] = 'Καταγραφή Cloud';

$GLOBALS["lang"]['Cloud Log'] = 'Καταγραφή Cloud';

$GLOBALS["lang"]['cloud_name'] = 'Όνομα Cloud';

$GLOBALS["lang"]['Cloud Name'] = 'Όνομα Cloud';

$GLOBALS["lang"]['Cloud Network'] = 'Δίκτυο Cloud';

$GLOBALS["lang"]['clouds'] = 'Σύννεφα';

$GLOBALS["lang"]['Clouds'] = 'Σύννεφα';

$GLOBALS["lang"]['cluster'] = 'Σμήνος';

$GLOBALS["lang"]['Cluster'] = 'Σμήνος';

$GLOBALS["lang"]['cluster_id'] = 'Ταυτότητα συστάδας';

$GLOBALS["lang"]['Cluster ID'] = 'Ταυτότητα συστάδας';

$GLOBALS["lang"]['cluster_name'] = 'Όνομα συστάδας';

$GLOBALS["lang"]['Cluster Name'] = 'Όνομα συστάδας';

$GLOBALS["lang"]['cluster_type'] = 'Τύπος συστάδας';

$GLOBALS["lang"]['Cluster Type'] = 'Τύπος συστάδας';

$GLOBALS["lang"]['clusters'] = 'Σμήνη';

$GLOBALS["lang"]['Clusters'] = 'Σμήνη';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Νήσοι Κόκος (Keeling)';

$GLOBALS["lang"]['Collector'] = 'Συλλέκτης';

$GLOBALS["lang"]['Collector (UUID)'] = 'Συλλέκτης (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Όνομα συλλέκτη';

$GLOBALS["lang"]['collector_uuid'] = 'Συλλέκτης Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Συλλέκτης Uuid';

$GLOBALS["lang"]['collectors'] = 'Συλλέκτες';

$GLOBALS["lang"]['Collectors'] = 'Συλλέκτες';

$GLOBALS["lang"]['Colombia'] = 'Κολομβία';

$GLOBALS["lang"]['color'] = 'Χρώμα';

$GLOBALS["lang"]['Color'] = 'Χρώμα';

$GLOBALS["lang"]['column'] = 'Στήλη';

$GLOBALS["lang"]['Column'] = 'Στήλη';

$GLOBALS["lang"]['Columns'] = 'Στήλες';

$GLOBALS["lang"]['command'] = 'Εντολή';

$GLOBALS["lang"]['Command'] = 'Εντολή';

$GLOBALS["lang"]['command_options'] = 'Επιλογές εντολής';

$GLOBALS["lang"]['Command Options'] = 'Επιλογές εντολής';

$GLOBALS["lang"]['command_output'] = 'Έξοδος εντολής';

$GLOBALS["lang"]['Command Output'] = 'Έξοδος εντολής';

$GLOBALS["lang"]['command_status'] = 'Κατάσταση εντολής';

$GLOBALS["lang"]['Command Status'] = 'Κατάσταση εντολής';

$GLOBALS["lang"]['command_time_to_execute'] = 'Ώρα εντολής για εκτέλεση';

$GLOBALS["lang"]['Command Time To Execute'] = 'Ώρα εντολής για εκτέλεση';

$GLOBALS["lang"]['comment'] = 'Σχόλιο';

$GLOBALS["lang"]['Comment'] = 'Σχόλιο';

$GLOBALS["lang"]['comments'] = 'Σχόλια';

$GLOBALS["lang"]['Comments'] = 'Σχόλια';

$GLOBALS["lang"]['commercial'] = 'Εμπορικά';

$GLOBALS["lang"]['Commercial'] = 'Εμπορικά';

$GLOBALS["lang"]['common_name'] = 'Κοινή ονομασία';

$GLOBALS["lang"]['Common Name'] = 'Κοινή ονομασία';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Κοινώς αναφερόμενος ως πελάτηςId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Κοινώς αναφέρεται ως ο πελάτης Secret.';

$GLOBALS["lang"]['Community'] = 'Κοινότητα';

$GLOBALS["lang"]['Community Questions'] = 'Κοινοτικές ερωτήσεις';

$GLOBALS["lang"]['Community String'] = 'Κοινοτική συμβολοσειρά';

$GLOBALS["lang"]['Comoros the'] = 'Κομόρες';

$GLOBALS["lang"]['Compact'] = 'Συμπαγές';

$GLOBALS["lang"]['Company'] = 'Εταιρεία';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Πολυπλοκότητα της επίθεσης (Κάτω ή Ψηλά).';

$GLOBALS["lang"]['Component Table'] = 'Πίνακας συστατικών';

$GLOBALS["lang"]['Components (All Devices)'] = 'Εξαρτήματα (όλες οι συσκευές)';

$GLOBALS["lang"]['Compute'] = 'Υπολογισμός';

$GLOBALS["lang"]['Condition'] = 'Κατάσταση';

$GLOBALS["lang"]['Config'] = 'Conf';

$GLOBALS["lang"]['Config Default, currently '] = 'Προκαθορισμένο ρύθμισης, αυτή τη στιγμή ';

$GLOBALS["lang"]['config_file'] = 'Αρχείο ρύθμισης';

$GLOBALS["lang"]['Config File'] = 'Αρχείο ρύθμισης';

$GLOBALS["lang"]['config_manager_error_code'] = 'Κωδικός σφάλματος διαχειριστή ρυθμίσεων';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Κωδικός σφάλματος διαχειριστή ρυθμίσεων';

$GLOBALS["lang"]['configuration'] = 'Configuration';

$GLOBALS["lang"]['Configuration'] = 'Configuration';

$GLOBALS["lang"]['Configure'] = 'Configure';

$GLOBALS["lang"]['Congo'] = 'Κονγκό';

$GLOBALS["lang"]['Congo the'] = 'Κονγκό';

$GLOBALS["lang"]['Connected To'] = 'Σύνδεση με';

$GLOBALS["lang"]['connection'] = 'Σύνδεση';

$GLOBALS["lang"]['Connection'] = 'Σύνδεση';

$GLOBALS["lang"]['Connection Options'] = 'Επιλογές σύνδεσης';

$GLOBALS["lang"]['connection_status'] = 'Κατάσταση σύνδεσης';

$GLOBALS["lang"]['Connection Status'] = 'Κατάσταση σύνδεσης';

$GLOBALS["lang"]['connections'] = 'Συνδέσεις';

$GLOBALS["lang"]['Connections'] = 'Συνδέσεις';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Εξετάστε το φιλτραρισμένο Άνοιγμα θυρών';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Θεώρησέ το ανοιχτό. Άνοιγμα θυρών';

$GLOBALS["lang"]['contact'] = 'Επικοινωνία';

$GLOBALS["lang"]['Contact'] = 'Επικοινωνία';

$GLOBALS["lang"]['contact_name'] = 'Όνομα επαφής';

$GLOBALS["lang"]['Contact Name'] = 'Όνομα επαφής';

$GLOBALS["lang"]['contained_in'] = 'Περιεχόμενα';

$GLOBALS["lang"]['Contained In'] = 'Περιεχόμενα';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Περιέχει ένα αντικείμενο JSON λεπτομέρειες τα σχετικά widgets και τις θέσεις τους.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Περιέχει τα πεδία που καθορίζουν αν θα πρέπει να χρησιμοποιούμε ssh, snmp και wmi επιλογές ανακάλυψης. Ένα αντικείμενο JSON.';

$GLOBALS["lang"]['Context Engine ID'] = 'ID μηχανής κειμένου';

$GLOBALS["lang"]['Context Name'] = 'Όνομα κειμένου';

$GLOBALS["lang"]['contractual_obligations'] = 'Συμβατικές υποχρεώσεις';

$GLOBALS["lang"]['Contractual Obligations'] = 'Συμβατικές υποχρεώσεις';

$GLOBALS["lang"]['Cook Islands'] = 'Νήσοι Κουκ';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Αντιγραφή και επικόλληση αποτελέσματος ελέγχου';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Αντιγραφή και επικόλληση των παρακάτω στα φόρουμ, μια άλλη περίπτωση του Open-AudIT ή οπουδήποτε αλλού θα πρέπει να παρέχουν αυτό το στοιχείο.';

$GLOBALS["lang"]['core_count'] = 'Μέτρηση πυρήνα';

$GLOBALS["lang"]['Core Count'] = 'Μέτρηση πυρήνα';

$GLOBALS["lang"]['Cores'] = 'Πυρήνες';

$GLOBALS["lang"]['cost_center'] = 'Κέντρο κόστους';

$GLOBALS["lang"]['Cost Center'] = 'Κέντρο κόστους';

$GLOBALS["lang"]['cost_code'] = 'Κωδικός κόστους';

$GLOBALS["lang"]['Cost Code'] = 'Κωδικός κόστους';

$GLOBALS["lang"]['Costa Rica'] = 'Κόστα Ρίκα';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Ακτή Ελεφαντοστού';

$GLOBALS["lang"]['count'] = 'Αριθμός';

$GLOBALS["lang"]['Count'] = 'Αριθμός';

$GLOBALS["lang"]['country'] = 'Χώρες';

$GLOBALS["lang"]['Country'] = 'Χώρες';

$GLOBALS["lang"]['country_code'] = 'Κωδικός χώρας';

$GLOBALS["lang"]['Country Code'] = 'Κωδικός χώρας';

$GLOBALS["lang"]['cpu_count'] = 'Αριθμός Cpu';

$GLOBALS["lang"]['Cpu Count'] = 'Αριθμός Cpu';

$GLOBALS["lang"]['Create'] = 'Δημιουργία';

$GLOBALS["lang"]['Create Example Devices'] = 'Δημιουργία παραδειγμάτων συσκευών';

$GLOBALS["lang"]['create_external_count'] = 'Δημιουργία εξωτερικού αριθμού';

$GLOBALS["lang"]['Create External Count'] = 'Δημιουργία εξωτερικού αριθμού';

$GLOBALS["lang"]['create_external_from_internal'] = 'Δημιουργία εξωτερικού από το εσωτερικό';

$GLOBALS["lang"]['Create External From Internal'] = 'Δημιουργία εξωτερικού από το εσωτερικό';

$GLOBALS["lang"]['Create Geocode'] = 'Δημιουργία γεωκώδικα';

$GLOBALS["lang"]['create_internal_count'] = 'Δημιουργία εσωτερικού αριθμού';

$GLOBALS["lang"]['Create Internal Count'] = 'Δημιουργία εσωτερικού αριθμού';

$GLOBALS["lang"]['create_internal_from_external'] = 'Δημιουργία εσωτερικού από εξωτερικό';

$GLOBALS["lang"]['Create Internal From External'] = 'Δημιουργία εσωτερικού από εξωτερικό';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Δημιουργία συσκευών NMIS από Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Δημιουργία Open-AudIT Συσκευές από ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Δημιουργία Open-AudIT Συσκευές από το NMIS';

$GLOBALS["lang"]['created_by'] = 'Δημιουργία από';

$GLOBALS["lang"]['Created By'] = 'Δημιουργία από';

$GLOBALS["lang"]['created_date'] = 'Ημερομηνία δημιουργίας';

$GLOBALS["lang"]['Created Date'] = 'Ημερομηνία δημιουργίας';

$GLOBALS["lang"]['Creating'] = 'Δημιουργία';

$GLOBALS["lang"]['Creating Device'] = 'Δημιουργία συσκευής';

$GLOBALS["lang"]['Creating a Query'] = 'Δημιουργία ενός ερωτήματος';

$GLOBALS["lang"]['creator'] = 'Δημιουργός';

$GLOBALS["lang"]['Creator'] = 'Δημιουργός';

$GLOBALS["lang"]['credential'] = 'Κρητικό';

$GLOBALS["lang"]['Credential'] = 'Κρητικό';

$GLOBALS["lang"]['credentials'] = 'Καταχώριση';

$GLOBALS["lang"]['Credentials'] = 'Καταχώριση';

$GLOBALS["lang"]['Credentials Client ID'] = 'Ταυτότητα πελάτη';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Συνδρομές ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Ταυτότητα εντολοδόχου';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Έντυπο για το Amazon AWS που χρησιμοποιείται στο Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Έντυπο για τη Microsoft Azure χρησιμοποιείται στο Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Κρίσιμη';

$GLOBALS["lang"]['criticality'] = 'Κρισιμότητα';

$GLOBALS["lang"]['Criticality'] = 'Κρισιμότητα';

$GLOBALS["lang"]['Croatia'] = 'Κροατία';

$GLOBALS["lang"]['Cuba'] = 'Κούβα';

$GLOBALS["lang"]['current'] = 'Τρέχων';

$GLOBALS["lang"]['Current'] = 'Τρέχων';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Τρέχουσες διαδικασίες ανακάλυψης';

$GLOBALS["lang"]['Current date & time is '] = 'Τρέχουσα ημερομηνία & ώρα ';

$GLOBALS["lang"]['Currently Installed'] = 'Επί του παρόντος εγκατεστημένος';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Οι τύποι που υποστηρίζονται σήμερα είναι <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> ή <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Προσαρμοσμένες θύρες TCP';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Προσαρμοσμένο UDP Λιμάνια';

$GLOBALS["lang"]['Cve'] = 'Κυψέλη';

$GLOBALS["lang"]['Cyprus'] = 'Κύπρος';

$GLOBALS["lang"]['Czech'] = 'Τσεχικά';

$GLOBALS["lang"]['Czech Republic'] = 'Τσεχική Δημοκρατία';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Λογαριασμός DN (προαιρετικό)';

$GLOBALS["lang"]['DN Password (optional)'] = 'Κωδικός DN (προαιρετικό)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'Όνομα υπολογιστή DNS';

$GLOBALS["lang"]['dashboard_id'] = 'ID πίνακα';

$GLOBALS["lang"]['Dashboard ID'] = 'ID πίνακα';

$GLOBALS["lang"]['dashboards'] = 'Δακτύλιοι';

$GLOBALS["lang"]['Dashboards'] = 'Δακτύλιοι';

$GLOBALS["lang"]['Database'] = 'Βάση δεδομένων';

$GLOBALS["lang"]['db_action'] = 'Δράση βάσης δεδομένων';

$GLOBALS["lang"]['Database Action'] = 'Δράση βάσης δεδομένων';

$GLOBALS["lang"]['db_column'] = 'Στήλη βάσης δεδομένων';

$GLOBALS["lang"]['Database Column'] = 'Στήλη βάσης δεδομένων';

$GLOBALS["lang"]['Database Definition'] = 'Ορισμός βάσης δεδομένων';

$GLOBALS["lang"]['db_row'] = 'Γραμμή βάσης δεδομένων';

$GLOBALS["lang"]['Database Row'] = 'Γραμμή βάσης δεδομένων';

$GLOBALS["lang"]['Database Schema'] = 'Σχήμα βάσης δεδομένων';

$GLOBALS["lang"]['db_table'] = 'Πίνακας βάσης δεδομένων';

$GLOBALS["lang"]['Database Table'] = 'Πίνακας βάσης δεδομένων';

$GLOBALS["lang"]['dataset_title'] = 'Τίτλος συνόλου δεδομένων';

$GLOBALS["lang"]['Dataset Title'] = 'Τίτλος συνόλου δεδομένων';

$GLOBALS["lang"]['date'] = 'Ημερομηνία';

$GLOBALS["lang"]['Date'] = 'Ημερομηνία';

$GLOBALS["lang"]['Date D-M-Y'] = 'Ημερομηνία D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Ημερομηνία Μ-Δ-Υ';

$GLOBALS["lang"]['Date Now'] = 'Ημερομηνία τώρα';

$GLOBALS["lang"]['date_of_manufacture'] = 'Ημερομηνία κατασκευής';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Ημερομηνία κατασκευής';

$GLOBALS["lang"]['date_paid'] = 'Ημερομηνία πληρωμής';

$GLOBALS["lang"]['Date Paid'] = 'Ημερομηνία πληρωμής';

$GLOBALS["lang"]['date_received'] = 'Ημερομηνία παραλαβής';

$GLOBALS["lang"]['Date Received'] = 'Ημερομηνία παραλαβής';

$GLOBALS["lang"]['Date Y-M-D'] = 'Ημερομηνία Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Ημερομηνία και ώρα κατά την οποία το CVE ενημερώθηκε τελευταία φορά.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Ημερομηνία και ώρα δημοσίευσης του ΚΕΕ.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Ημερομηνία δημοσίευσης του ΚΕΕ.';

$GLOBALS["lang"]['DateTime Now'] = 'Ώρα ημερομηνίας τώρα';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Ώρα ημερομηνίας Υ-Μ-Δ H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Ημέρα του μήνα';

$GLOBALS["lang"]['Day Of Month'] = 'Ημέρα του μήνα';

$GLOBALS["lang"]['day_of_week'] = 'Ημέρα της εβδομάδας';

$GLOBALS["lang"]['Day Of Week'] = 'Ημέρα της εβδομάδας';

$GLOBALS["lang"]['Day of Month'] = 'Ημέρα του μήνα';

$GLOBALS["lang"]['dbus_identifier'] = 'Αναγνωριστικό Dbus';

$GLOBALS["lang"]['Dbus Identifier'] = 'Αναγνωριστικό Dbus';

$GLOBALS["lang"]['Debug'] = 'Αποσφαλμάτωση';

$GLOBALS["lang"]['December'] = 'Δεκέμβριος';

$GLOBALS["lang"]['Default'] = 'Προκαθορισμένο';

$GLOBALS["lang"]['Default Items'] = 'Προκαθορισμένα αντικείμενα';

$GLOBALS["lang"]['Default Value'] = 'Προκαθορισμένη τιμή';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Προκαθορισμένο του 389. Κανονικά 636 χρησιμοποιούνται για Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Προκαθορισμένο <code>3</code> για LDAP και ενεργό κατάλογο.';

$GLOBALS["lang"]['Defaults'] = 'Προκαθορισμένα';

$GLOBALS["lang"]['delay_minutes'] = 'Καθυστέρηση λεπτών';

$GLOBALS["lang"]['Delay Minutes'] = 'Καθυστέρηση λεπτών';

$GLOBALS["lang"]['Delete'] = 'Διαγραφή';

$GLOBALS["lang"]['Delete Example Devices'] = 'Διαγραφή παραδειγμάτων συσκευών';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Διαγραφή εξωτερικού από το εσωτερικό';

$GLOBALS["lang"]['Delete External From Internal'] = 'Διαγραφή εξωτερικού από το εσωτερικό';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Διαγραφή NMIS Συσκευές αν όχι στο Open-AudIT';

$GLOBALS["lang"]['Delete from Application'] = 'Διαγραφή από την εφαρμογή';

$GLOBALS["lang"]['Delete from Cluster'] = 'Διαγραφή από τη συστάδα';

$GLOBALS["lang"]['Denmark'] = 'Δανία';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Παράγωγα με έλεγχο ή χειροκίνητα ρυθμισμένα από το χρήστη.';

$GLOBALS["lang"]['Derived by audit.'] = 'Παράγωγα με έλεγχο.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Που προέρχονται από <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Που προέρχονται από <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Προέρχεται από την ανακάλυψη του Συλλέκτη.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Προέρχεται από το OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Προέρχεται από την ανακάλυψη νεφών.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Προέρχεται από ελέγχους συσκευών.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Παράγωγα από τον τύπο της συσκευής και το λειτουργικό σύστημα.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Προέρχεται από την ανακάλυψη.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Προέρχεται από το όνομα του υπολογιστή, το sysName, το dns Hostname και το IP με αυτή τη σειρά.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Προέρχεται από την ακέραια σοβαρότητα.';

$GLOBALS["lang"]['description'] = 'Περιγραφή εμπορευμάτων';

$GLOBALS["lang"]['Description'] = 'Περιγραφή εμπορευμάτων';

$GLOBALS["lang"]['destination'] = 'Προορισμός';

$GLOBALS["lang"]['Destination'] = 'Προορισμός';

$GLOBALS["lang"]['detail'] = 'Στοιχεία';

$GLOBALS["lang"]['Detail'] = 'Στοιχεία';

$GLOBALS["lang"]['Details'] = 'Λεπτομέρειες';

$GLOBALS["lang"]['details'] = 'Λεπτομέρειες';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Λεπτομέρειες για το ποιος είναι συνήθως contactable σε αυτό το site.';

$GLOBALS["lang"]['device'] = 'Συσκευή';

$GLOBALS["lang"]['Device'] = 'Συσκευή';

$GLOBALS["lang"]['Device Audits'] = 'Έλεγχοι συσκευών';

$GLOBALS["lang"]['Device ID'] = 'Ταυτότητα συσκευής';

$GLOBALS["lang"]['device_id'] = 'Ταυτότητα συσκευής';

$GLOBALS["lang"]['device_id_a'] = 'Ταυτότητα συσκευής A';

$GLOBALS["lang"]['Device ID A'] = 'Ταυτότητα συσκευής A';

$GLOBALS["lang"]['device_id_b'] = 'Ταυτότητα συσκευής B';

$GLOBALS["lang"]['Device ID B'] = 'Ταυτότητα συσκευής B';

$GLOBALS["lang"]['Device Name'] = 'Όνομα συσκευής';

$GLOBALS["lang"]['Device Result'] = 'Αποτέλεσμα συσκευής';

$GLOBALS["lang"]['Device Results'] = 'Αποτελέσματα συσκευής';

$GLOBALS["lang"]['Device Seed'] = 'Σπόροι συσκευής';

$GLOBALS["lang"]['Device Seed IP'] = 'IP σπόρων συσκευών';

$GLOBALS["lang"]['Device Status'] = 'Κατάσταση συσκευής';

$GLOBALS["lang"]['Device Types'] = 'Τύποι συσκευών';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Η συσκευή είναι στο Subnet';

$GLOBALS["lang"]['Devices'] = 'Συσκευές';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Συσκευές που έχουν ανατεθεί σε τοποθεσία';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Συσκευές που έχουν ανατεθεί σε τοποθεσία';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Συσκευές που έχουν ανατεθεί στον Οργανισμό';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Συσκευές που έχουν ανατεθεί στον Οργανισμό';

$GLOBALS["lang"]['Devices Audited'] = 'Ελεγχόμενες συσκευές';

$GLOBALS["lang"]['Devices Created in '] = 'Δημιουργήθηκαν συσκευές ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Οι συσκευές δημιουργήθηκαν στο Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Προκαθορισμένες στήλες εμφάνισης συσκευών';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Προκαθορισμένες στήλες εμφάνισης συσκευών';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Συσκευές που βρέθηκαν τις τελευταίες 7 ημέρες';

$GLOBALS["lang"]['Devices Found Today'] = 'Βρέθηκαν συσκευές σήμερα';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Βρέθηκαν συσκευές χθες';

$GLOBALS["lang"]['Devices Not Audited'] = 'Οι συσκευές δεν ελέγχθηκαν';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Οι συσκευές δεν βλέπουν 30 ημέρες';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Οι συσκευές δεν βλέπουν 7 ημέρες';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Οι συσκευές δεν βλέπουν 90 ημέρες';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Συσκευές Ανακτήθηκε μέσω API';

$GLOBALS["lang"]['Devices Selected from '] = 'Επιλέχθηκαν συσκευές από ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Οι συσκευές επιλέχθηκαν από το Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Ενημέρωση συσκευών ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Ενημέρωση συσκευών σε Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Οι συσκευές αξιολογούνται.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Οι συσκευές δεν αξιολογούνται.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Οι συσκευές θα μπορούσαν να αξιολογηθούν.';

$GLOBALS["lang"]['Devices in Running State'] = 'Συσκευές σε κατάσταση λειτουργίας';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Συσκευές σε κατάσταση διακοπής';

$GLOBALS["lang"]['Devices in this'] = 'Συσκευές σε αυτό';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Απεικόνιση από τύπο ή λειτουργικό σύστημα.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Ενεργοποίηση Dhcp';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Ενεργοποίηση Dhcp';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Λήγει η μίσθωση Dhcp';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Λήγει η μίσθωση Dhcp';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Μίσθωση Dhcp που αποκτήθηκε';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Μίσθωση Dhcp που αποκτήθηκε';

$GLOBALS["lang"]['dhcp_server'] = 'Εξυπηρετητής Dhcp';

$GLOBALS["lang"]['Dhcp Server'] = 'Εξυπηρετητής Dhcp';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Η εντολή ολοκληρώθηκε επιτυχώς και επέστρεψε τα αναμενόμενα δεδομένα.';

$GLOBALS["lang"]['direction'] = 'Κατεύθυνση';

$GLOBALS["lang"]['Direction'] = 'Κατεύθυνση';

$GLOBALS["lang"]['directory'] = 'Κατάλογος';

$GLOBALS["lang"]['Directory'] = 'Κατάλογος';

$GLOBALS["lang"]['disabled'] = 'Απενεργοποιημένο';

$GLOBALS["lang"]['Disabled'] = 'Απενεργοποιημένο';

$GLOBALS["lang"]['discard'] = 'Απόρριψη';

$GLOBALS["lang"]['Discard'] = 'Απόρριψη';

$GLOBALS["lang"]['Discover'] = 'Ανακαλύψτε';

$GLOBALS["lang"]['discoveries'] = 'Ανακαλύψεις';

$GLOBALS["lang"]['Discoveries'] = 'Ανακαλύψεις';

$GLOBALS["lang"]['Discovery'] = 'Ανακάλυψη';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Ανακάλυψη αλλαγών καταγραφής';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Διατήρηση δεδομένων ανακάλυψης';

$GLOBALS["lang"]['discovery_id'] = 'ID ανακάλυψης';

$GLOBALS["lang"]['Discovery ID'] = 'ID ανακάλυψης';

$GLOBALS["lang"]['Discovery Issues'] = 'Θέματα ανακάλυψης';

$GLOBALS["lang"]['discovery_log'] = 'Καταγραφή ανακάλυψης';

$GLOBALS["lang"]['Discovery Log'] = 'Καταγραφή ανακάλυψης';

$GLOBALS["lang"]['Discovery Match Options'] = 'Επιλογές ταιριάσματος ανακάλυψης';

$GLOBALS["lang"]['Discovery Name'] = 'Όνομα ανακάλυψης';

$GLOBALS["lang"]['Discovery Options'] = 'Επιλογές ανακάλυψης';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Αριθμός αναμονής ανακάλυψης';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Όριο αναμονής ανακάλυψης';

$GLOBALS["lang"]['discovery_run'] = 'Εκτέλεση ανακαλύψεων';

$GLOBALS["lang"]['Discovery Run'] = 'Εκτέλεση ανακαλύψεων';

$GLOBALS["lang"]['discovery_scan_options'] = 'Επιλογές ανίχνευσης Discovery';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Επιλογές ανίχνευσης Discovery';

$GLOBALS["lang"]['disk'] = 'Δίσκος';

$GLOBALS["lang"]['Disk'] = 'Δίσκος';

$GLOBALS["lang"]['display_version'] = 'Εμφάνιση έκδοσης';

$GLOBALS["lang"]['Display Version'] = 'Εμφάνιση έκδοσης';

$GLOBALS["lang"]['Display in Menu'] = 'Εμφάνιση σε μενού';

$GLOBALS["lang"]['district'] = 'Περιφέρεια';

$GLOBALS["lang"]['District'] = 'Περιφέρεια';

$GLOBALS["lang"]['Djibouti'] = 'Τζιμπουτί';

$GLOBALS["lang"]['dns'] = 'Δον';

$GLOBALS["lang"]['Dns'] = 'Δον';

$GLOBALS["lang"]['dns_domain'] = 'Τομέας Dns';

$GLOBALS["lang"]['Dns Domain'] = 'Τομέας Dns';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Ενεργοποίηση Reg τομέα Dns';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Ενεργοποίηση Reg τομέα Dns';

$GLOBALS["lang"]['dns_fqdn'] = 'ΔΝ Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'ΔΝ Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Όνομα υπολογιστή Dns';

$GLOBALS["lang"]['Dns Host Name'] = 'Όνομα υπολογιστή Dns';

$GLOBALS["lang"]['dns_hostname'] = 'Όνομα υπολογιστή Dns';

$GLOBALS["lang"]['Dns Hostname'] = 'Όνομα υπολογιστή Dns';

$GLOBALS["lang"]['dns_server'] = 'Εξυπηρετητής Dns';

$GLOBALS["lang"]['Dns Server'] = 'Εξυπηρετητής Dns';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Μην σαρώσετε αυτές τις θύρες TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Μην σκανάρετε αυτές τις θύρες UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Μην μου το ξαναδείς.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Θέλετε να χρησιμοποιήσετε ασφαλή μεταφορά (LDAPS) ή τακτική μη κρυπτογραφημένη LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Θέλετε να δείτε την τυπική πλευρική μπάρα στα αριστερά;';

$GLOBALS["lang"]['documentation'] = 'Τεκμηρίωση';

$GLOBALS["lang"]['Documentation'] = 'Τεκμηρίωση';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Η άδεια ισχύει για παιδιά Orgs.';

$GLOBALS["lang"]['domain'] = 'Τομέας';

$GLOBALS["lang"]['Domain'] = 'Τομέας';

$GLOBALS["lang"]['domain_controller_address'] = 'Διεύθυνση ελεγκτή τομέα';

$GLOBALS["lang"]['Domain Controller Address'] = 'Διεύθυνση ελεγκτή τομέα';

$GLOBALS["lang"]['domain_controller_name'] = 'Ελεγκτής τομέα Όνομα';

$GLOBALS["lang"]['Domain Controller Name'] = 'Ελεγκτής τομέα Όνομα';

$GLOBALS["lang"]['domain_role'] = 'Ρόλος τομέα';

$GLOBALS["lang"]['Domain Role'] = 'Ρόλος τομέα';

$GLOBALS["lang"]['domain_short'] = 'Συντόμευση τομέα';

$GLOBALS["lang"]['Domain Short'] = 'Συντόμευση τομέα';

$GLOBALS["lang"]['Dominica'] = 'Ντομίνικα';

$GLOBALS["lang"]['Dominican Republic'] = 'Δομινικανή Δημοκρατία';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Μην κρατάς το χέρι μου, ξέρω τι κάνω. Δεν υπάρχει φίλτρο και η δυνατότητα να ενταχθούν προσαρμοσμένα τραπέζια.';

$GLOBALS["lang"]['Download'] = 'Λήψη';

$GLOBALS["lang"]['Download a file from URL'] = 'Λήψη αρχείου από το URL';

$GLOBALS["lang"]['driver'] = 'Οδηγός';

$GLOBALS["lang"]['Driver'] = 'Οδηγός';

$GLOBALS["lang"]['duplex'] = 'Διπλό';

$GLOBALS["lang"]['Duplex'] = 'Διπλό';

$GLOBALS["lang"]['duration'] = 'Διάρκεια';

$GLOBALS["lang"]['Duration'] = 'Διάρκεια';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'ΕΕΛΑ';

$GLOBALS["lang"]['Ecuador'] = 'Ισημερινός';

$GLOBALS["lang"]['Edit'] = 'Επεξεργασία';

$GLOBALS["lang"]['edit_log'] = 'Επεξεργασία καταγραφής';

$GLOBALS["lang"]['Edit Log'] = 'Επεξεργασία καταγραφής';

$GLOBALS["lang"]['editable'] = 'Επεξεργασία';

$GLOBALS["lang"]['Editable'] = 'Επεξεργασία';

$GLOBALS["lang"]['edited_by'] = 'Επεξεργασία από';

$GLOBALS["lang"]['Edited By'] = 'Επεξεργασία από';

$GLOBALS["lang"]['edited_date'] = 'Επεξεργασία ημερομηνίας';

$GLOBALS["lang"]['Edited Date'] = 'Επεξεργασία ημερομηνίας';

$GLOBALS["lang"]['edition'] = 'Έκδοση';

$GLOBALS["lang"]['Edition'] = 'Έκδοση';

$GLOBALS["lang"]['Egypt'] = 'Αίγυπτος';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Είτε Amazon, Google ή Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Ή κανένα ή παρόν.

<strong>Καμία</strong> - Η επιτυχής επίθεση δεν εξαρτάται από τις συνθήκες ανάπτυξης και εκτέλεσης του ευάλωτου συστήματος. Ο επιτιθέμενος μπορεί να περιμένει να είναι σε θέση να φτάσει την ευπάθεια και να εκτελέσει την εκμετάλλευση κάτω από όλες ή τις περισσότερες περιπτώσεις της ευπάθειας.

<strong>Παρόν</strong> - Η επιτυχής επίθεση εξαρτάται από την παρουσία ειδικών συνθηκών ανάπτυξης και εκτέλεσης του ευάλωτου συστήματος που επιτρέπουν την επίθεση. Αυτά περιλαμβάνουν:

Μια κατάσταση φυλής πρέπει να κερδηθεί για να εκμεταλλευτεί επιτυχώς την ευπάθεια. Η επιτυχία της επίθεσης εξαρτάται από συνθήκες εκτέλεσης που δεν βρίσκονται υπό τον πλήρη έλεγχο του επιτιθέμενου. Η επίθεση μπορεί να χρειαστεί να ξεκινήσει πολλές φορές εναντίον ενός και μόνο στόχου πριν να είναι επιτυχής.

Ένεση δικτύου. Ο επιτιθέμενος πρέπει να εγχυθεί στη λογική διαδρομή δικτύου μεταξύ του στόχου και του πόρου που ζήτησε το θύμα (π.χ. τρωτά σημεία που απαιτούν επιτιθέμενο κατά τη διαδρομή).';

$GLOBALS["lang"]['El Salvador'] = 'Ελ Σαλβαδόρ';

$GLOBALS["lang"]['email'] = 'Ηλεκτρονικό ταχυδρομείο';

$GLOBALS["lang"]['Email'] = 'Ηλεκτρονικό ταχυδρομείο';

$GLOBALS["lang"]['email_address'] = 'Διεύθυνση ηλεκτρονικού ταχυδρομείου';

$GLOBALS["lang"]['Email Address'] = 'Διεύθυνση ηλεκτρονικού ταχυδρομείου';

$GLOBALS["lang"]['Email Configuration'] = 'Configuration email';

$GLOBALS["lang"]['Email to send test to'] = 'Email για να στείλετε τη δοκιμή';

$GLOBALS["lang"]['Enable'] = 'Ενεργοποίηση';

$GLOBALS["lang"]['enabled'] = 'Ενεργοποίηση';

$GLOBALS["lang"]['Enabled'] = 'Ενεργοποίηση';

$GLOBALS["lang"]['encryption'] = 'Κρυπτογράφηση';

$GLOBALS["lang"]['Encryption'] = 'Κρυπτογράφηση';

$GLOBALS["lang"]['encryption_method'] = 'Μέθοδος κρυπτογράφησης';

$GLOBALS["lang"]['Encryption Method'] = 'Μέθοδος κρυπτογράφησης';

$GLOBALS["lang"]['encryption_status'] = 'Κατάσταση κρυπτογράφησης';

$GLOBALS["lang"]['Encryption Status'] = 'Κατάσταση κρυπτογράφησης';

$GLOBALS["lang"]['end_date'] = 'Ημερομηνία λήξης';

$GLOBALS["lang"]['End Date'] = 'Ημερομηνία λήξης';

$GLOBALS["lang"]['End OF Life Product ID'] = 'ID προϊόντος τέλους ζωής';

$GLOBALS["lang"]['end_of_life'] = 'Τέλος της ζωής';

$GLOBALS["lang"]['End Of Life'] = 'Τέλος της ζωής';

$GLOBALS["lang"]['end_of_production'] = 'Τέλος παραγωγής';

$GLOBALS["lang"]['End Of Production'] = 'Τέλος παραγωγής';

$GLOBALS["lang"]['end_of_service'] = 'Τέλος υπηρεσίας';

$GLOBALS["lang"]['End Of Service'] = 'Τέλος υπηρεσίας';

$GLOBALS["lang"]['end_of_service_life'] = 'Τέλος της ζωής υπηρεσίας';

$GLOBALS["lang"]['End Of Service Life'] = 'Τέλος της ζωής υπηρεσίας';

$GLOBALS["lang"]['English'] = 'Αγγλικά';

$GLOBALS["lang"]['enterprise'] = 'Επιχείρηση';

$GLOBALS["lang"]['Enterprise'] = 'Επιχείρηση';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Ιδιωτικό δίκτυο επιχειρήσεων';

$GLOBALS["lang"]['Entitlement Type'] = 'Τύπος δικαιώματος';

$GLOBALS["lang"]['environment'] = 'Περιβάλλον';

$GLOBALS["lang"]['Environment'] = 'Περιβάλλον';

$GLOBALS["lang"]['Equal To'] = 'Ίση με';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Ίσα με ή Μεγαλύτερα από';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Ισότητα με ή λιγότερο από';

$GLOBALS["lang"]['Equals'] = 'Ισότητα';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Ισημερινή Γουινέα';

$GLOBALS["lang"]['Eritrea'] = 'Ερυθραία';

$GLOBALS["lang"]['Error'] = 'Σφάλμα';

$GLOBALS["lang"]['Error Code'] = 'Κωδικός σφάλματος';

$GLOBALS["lang"]['Established'] = 'Καθιερώθηκε';

$GLOBALS["lang"]['Estonia'] = 'Εσθονία';

$GLOBALS["lang"]['Ethernet MAC'] = 'MAC Ethernet';

$GLOBALS["lang"]['ethernet_mac'] = 'Εθερνέτ MacName';

$GLOBALS["lang"]['Ethernet Mac'] = 'Εθερνέτ MacName';

$GLOBALS["lang"]['Ethiopia'] = 'Αιθιοπία';

$GLOBALS["lang"]['Every'] = 'Κάθε';

$GLOBALS["lang"]['Every Day'] = 'Κάθε μέρα';

$GLOBALS["lang"]['Exceptions'] = 'Εξαιρέσεις';

$GLOBALS["lang"]['exclude'] = 'Εξαίρεση';

$GLOBALS["lang"]['Exclude'] = 'Εξαίρεση';

$GLOBALS["lang"]['exclude_ip'] = 'Εξαίρεση IP';

$GLOBALS["lang"]['Exclude IP'] = 'Εξαίρεση IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Εξαίρεση διευθύνσεων IP';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Εξαίρεση θυρών TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Εξαίρεση θυρών Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Εξαίρεση θυρών Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Εξαίρεση θυρών UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Εξαίρεση θυρών Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Εξαίρεση θυρών Udp';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Αποκλείστε αυτές τις διευθύνσεις IP από την σάρωση Nmap.';

$GLOBALS["lang"]['Excluded'] = 'Εξαιρούνται';

$GLOBALS["lang"]['exclusion_reasons'] = 'Λόγοι αποκλεισμού';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Λόγοι αποκλεισμού';

$GLOBALS["lang"]['executable'] = 'Εκτελέσιμο';

$GLOBALS["lang"]['Executable'] = 'Εκτελέσιμο';

$GLOBALS["lang"]['executable_id'] = 'Εκτελέσιμο ID';

$GLOBALS["lang"]['Executable ID'] = 'Εκτελέσιμο ID';

$GLOBALS["lang"]['executables'] = 'Εκτελέσιμα';

$GLOBALS["lang"]['Executables'] = 'Εκτελέσιμα';

$GLOBALS["lang"]['Execute'] = 'Εκτέλεση';

$GLOBALS["lang"]['Executing'] = 'Εκτέλεση';

$GLOBALS["lang"]['exemption_reason'] = 'Λόγος απαλλαγής';

$GLOBALS["lang"]['Exemption Reason'] = 'Λόγος απαλλαγής';

$GLOBALS["lang"]['Existing Building'] = 'Υφιστάμενο κτίριο';

$GLOBALS["lang"]['Existing Floor'] = 'Υφιστάμενος όροφος';

$GLOBALS["lang"]['Existing Room'] = 'Υπάρχον δωμάτιο';

$GLOBALS["lang"]['Existing Row'] = 'Υπάρχουσα γραμμή';

$GLOBALS["lang"]['expire_date'] = 'Ημερομηνία λήξης';

$GLOBALS["lang"]['Expire Date'] = 'Ημερομηνία λήξης';

$GLOBALS["lang"]['expire_minutes'] = 'Λήξη των συνοπτικών πρακτικών';

$GLOBALS["lang"]['Expire Minutes'] = 'Λήξη των συνοπτικών πρακτικών';

$GLOBALS["lang"]['expires'] = 'Λήγει';

$GLOBALS["lang"]['Expires'] = 'Λήγει';

$GLOBALS["lang"]['expiry_date'] = 'Ημερομηνία λήξης';

$GLOBALS["lang"]['Expiry Date'] = 'Ημερομηνία λήξης';

$GLOBALS["lang"]['exploit_maturity'] = 'Εκμετάλλευση Ωριμότητας';

$GLOBALS["lang"]['Exploit Maturity'] = 'Εκμετάλλευση Ωριμότητας';

$GLOBALS["lang"]['Export'] = 'Εξαγωγή';

$GLOBALS["lang"]['Export by Device'] = 'Εξαγωγή με συσκευή';

$GLOBALS["lang"]['Export by Policy'] = 'Εξαγωγή ανά πολιτική';

$GLOBALS["lang"]['Export data to'] = 'Εξαγωγή δεδομένων';

$GLOBALS["lang"]['expose'] = 'Εκθέστε';

$GLOBALS["lang"]['Expose'] = 'Εκθέστε';

$GLOBALS["lang"]['External'] = 'Εξωτερικό';

$GLOBALS["lang"]['External Field Name'] = 'Όνομα εξωτερικού πεδίου';

$GLOBALS["lang"]['External Field Type'] = 'Τύπος εξωτερικού πεδίου';

$GLOBALS["lang"]['external_ident'] = 'Εξωτερική ταυτότητα';

$GLOBALS["lang"]['External Ident'] = 'Εξωτερική ταυτότητα';

$GLOBALS["lang"]['external_link'] = 'Εξωτερικός δεσμός';

$GLOBALS["lang"]['External Link'] = 'Εξωτερικός δεσμός';

$GLOBALS["lang"]['extra_columns'] = 'Επιπλέον στήλες';

$GLOBALS["lang"]['Extra Columns'] = 'Επιπλέον στήλες';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Επιπλέον και περισσότερη καταγραφή verbose δημιουργείται για την αντιμετώπιση προβλημάτων.';

$GLOBALS["lang"]['FAQ'] = 'Συχνές ερωτήσεις';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Αναθεώρηση FW';

$GLOBALS["lang"]['Fail'] = 'Αποτυχία';

$GLOBALS["lang"]['Failed'] = 'Αποτυχία';

$GLOBALS["lang"]['Failed Severity'] = 'Αποτυχία σοβαρότητας';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Νήσοι Φώκλαντ (Μάλβινες)';

$GLOBALS["lang"]['Family'] = 'Οικογένεια';

$GLOBALS["lang"]['Faroe Islands'] = 'Νήσοι Φερόε';

$GLOBALS["lang"]['Features'] = 'Χαρακτηριστικά';

$GLOBALS["lang"]['February'] = 'Φεβρουάριος';

$GLOBALS["lang"]['field'] = 'Πεδίο';

$GLOBALS["lang"]['Field'] = 'Πεδίο';

$GLOBALS["lang"]['field_id'] = 'ID πεδίου';

$GLOBALS["lang"]['Field ID'] = 'ID πεδίου';

$GLOBALS["lang"]['Field Name'] = 'Όνομα πεδίου';

$GLOBALS["lang"]['Field Type'] = 'Τύπος πεδίου';

$GLOBALS["lang"]['Fields'] = 'Πεδία';

$GLOBALS["lang"]['fields'] = 'Πεδία';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Φίτζι τα νησιά Φίτζι';

$GLOBALS["lang"]['File'] = 'Αρχείο';

$GLOBALS["lang"]['File Import'] = 'Εισαγωγή αρχείου';

$GLOBALS["lang"]['File Input'] = 'Εισαγωγή αρχείου';

$GLOBALS["lang"]['file_name'] = 'Όνομα αρχείου';

$GLOBALS["lang"]['File Name'] = 'Όνομα αρχείου';

$GLOBALS["lang"]['file_size'] = 'Μέγεθος αρχείου';

$GLOBALS["lang"]['File Size'] = 'Μέγεθος αρχείου';

$GLOBALS["lang"]['filename'] = 'Όνομα αρχείου';

$GLOBALS["lang"]['Filename'] = 'Όνομα αρχείου';

$GLOBALS["lang"]['files'] = 'Αρχεία';

$GLOBALS["lang"]['Files'] = 'Αρχεία';

$GLOBALS["lang"]['files_id'] = 'ID αρχείων';

$GLOBALS["lang"]['Files ID'] = 'ID αρχείων';

$GLOBALS["lang"]['filter'] = 'Φίλτρο';

$GLOBALS["lang"]['Filter'] = 'Φίλτρο';

$GLOBALS["lang"]['filtered'] = 'Φιλτραρισμένο';

$GLOBALS["lang"]['Filtered'] = 'Φιλτραρισμένο';

$GLOBALS["lang"]['Finland'] = 'Φινλανδία';

$GLOBALS["lang"]['Firewall'] = 'Τοίχος πυρκαγιάς';

$GLOBALS["lang"]['firewall_rule'] = 'Κανόνας του τείχους πυρός';

$GLOBALS["lang"]['Firewall Rule'] = 'Κανόνας του τείχους πυρός';

$GLOBALS["lang"]['firmware'] = 'Υφασμάτινα είδη';

$GLOBALS["lang"]['Firmware'] = 'Υφασμάτινα είδη';

$GLOBALS["lang"]['firmware_revision'] = 'Αναθεώρηση firmware';

$GLOBALS["lang"]['Firmware Revision'] = 'Αναθεώρηση firmware';

$GLOBALS["lang"]['First Name'] = 'Όνομα';

$GLOBALS["lang"]['first_run'] = 'Πρώτη εκτέλεση';

$GLOBALS["lang"]['First Run'] = 'Πρώτη εκτέλεση';

$GLOBALS["lang"]['first_seen'] = 'Πρώτα Είδατε';

$GLOBALS["lang"]['First Seen'] = 'Πρώτα Είδατε';

$GLOBALS["lang"]['FirstWave'] = 'Πρώτη προβολή';

$GLOBALS["lang"]['Fix'] = 'Διόρθωση';

$GLOBALS["lang"]['Fixed'] = 'Σταθερό';

$GLOBALS["lang"]['Floor'] = 'Όροφος';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Ακολουθήστε οποιονδήποτε από τους παρακάτω συνδέσμους και ανακαλύψτε πώς να χρησιμοποιήσετε το Open-AudIT για να μάθετε <b>Τι Υπάρχει στο Δίκτυό Σας;</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Για μια ανακάλυψη σπόρων, θα πρέπει να ανακαλύψω μόνο τις IP στον ιδιωτικό χώρο διευθύνσεων IP.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Για μια ανακάλυψη σπόρων, θα πρέπει να ανακαλύψω μόνο IPs στο επιλεγμένο υποδίκτυο.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Για μια ανακάλυψη σπόρου, πρέπει να βρω το υποδίκτυο πριν εκτελέσω την ανακάλυψη.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Για προχωρημένη είσοδο ενός ακατέργαστου ερωτήματος SQL. Σύμφωνα με τις ερωτήσεις, πρέπει να συμπεριλάβετε <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Για άδειες που δεν είναι αέναες, πότε λήγει η άδεια.';

$GLOBALS["lang"]['form_factor'] = 'Συντελεστής μορφής';

$GLOBALS["lang"]['Form Factor'] = 'Συντελεστής μορφής';

$GLOBALS["lang"]['format'] = 'Μορφή';

$GLOBALS["lang"]['Format'] = 'Μορφή';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Γαλλία, Γαλλική Δημοκρατία';

$GLOBALS["lang"]['free'] = 'Δωρεάν';

$GLOBALS["lang"]['Free'] = 'Δωρεάν';

$GLOBALS["lang"]['French'] = 'Γαλλικά';

$GLOBALS["lang"]['French Guiana'] = 'Γαλλική Γουιάνα';

$GLOBALS["lang"]['French Polynesia'] = 'Γαλλική Πολυνησία';

$GLOBALS["lang"]['French Southern Territories'] = 'Γαλλικά Νότια Εδάφη';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Συχνές ερωτήσεις';

$GLOBALS["lang"]['Friday'] = 'Παρασκευή';

$GLOBALS["lang"]['From 100 Devices'] = 'Από 100 συσκευές';

$GLOBALS["lang"]['From 500 Devices'] = 'Από 500 συσκευές';

$GLOBALS["lang"]['full_name'] = 'Πλήρες όνομα';

$GLOBALS["lang"]['Full Name'] = 'Πλήρες όνομα';

$GLOBALS["lang"]['function'] = 'Συνάρτηση';

$GLOBALS["lang"]['Function'] = 'Συνάρτηση';

$GLOBALS["lang"]['GROUP BY'] = 'ΟΜΑΔΑ';

$GLOBALS["lang"]['Gabon'] = 'Γκαμπόν';

$GLOBALS["lang"]['Gambia the'] = 'Γκάμπια';

$GLOBALS["lang"]['gateway'] = 'Πύλη';

$GLOBALS["lang"]['Gateway'] = 'Πύλη';

$GLOBALS["lang"]['gateways'] = 'Πύλες';

$GLOBALS["lang"]['Gateways'] = 'Πύλες';

$GLOBALS["lang"]['Generated By'] = 'Δημιουργία από';

$GLOBALS["lang"]['geo'] = 'Γεω';

$GLOBALS["lang"]['Geo'] = 'Γεω';

$GLOBALS["lang"]['Georgia'] = 'Γεωργία';

$GLOBALS["lang"]['German'] = 'Γερμανικά';

$GLOBALS["lang"]['Germany'] = 'Γερμανία';

$GLOBALS["lang"]['Get Lat/Long'] = 'Πάρτε Lat / Long';

$GLOBALS["lang"]['Get Started'] = 'Ξεκινήστε';

$GLOBALS["lang"]['Get a Free License'] = 'Λήψη δωρεάν άδειας';

$GLOBALS["lang"]['Getting Started'] = 'Έναρξη';

$GLOBALS["lang"]['Ghana'] = 'Γκάνα';

$GLOBALS["lang"]['Gibraltar'] = 'Γιβραλτάρ';

$GLOBALS["lang"]['Global Discovery Options'] = 'Επιλογές παγκόσμιας ανακάλυψης';

$GLOBALS["lang"]['Go'] = 'Πήγαινε.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Υπολογίστε πεδία Google';

$GLOBALS["lang"]['Google Maps API Key'] = 'API χαρτών Google Κλειδί';

$GLOBALS["lang"]['Greater Than'] = 'Μεγαλύτερο από';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Μεγαλύτερο από ή ίσο';

$GLOBALS["lang"]['Greece'] = 'Ελλάδα';

$GLOBALS["lang"]['Green Query'] = 'Πράσινο ερώτημα';

$GLOBALS["lang"]['Greenland'] = 'Γροιλανδία';

$GLOBALS["lang"]['Grenada'] = 'Γρενάδα';

$GLOBALS["lang"]['Group'] = 'Ομάδα';

$GLOBALS["lang"]['group_by'] = 'Ομάδα από';

$GLOBALS["lang"]['Group By'] = 'Ομάδα από';

$GLOBALS["lang"]['group_id'] = 'ID ομάδας';

$GLOBALS["lang"]['Group ID'] = 'ID ομάδας';

$GLOBALS["lang"]['groups'] = 'Ομάδες';

$GLOBALS["lang"]['Groups'] = 'Ομάδες';

$GLOBALS["lang"]['Guadeloupe'] = 'Γουαδελούπη';

$GLOBALS["lang"]['Guam'] = 'Γκουάμ';

$GLOBALS["lang"]['Guatemala'] = 'Γουατεμάλα';

$GLOBALS["lang"]['Guernsey'] = 'Γκέρνσεϊ';

$GLOBALS["lang"]['guest_device_id'] = 'Ταυτότητα συσκευής του επισκέπτη';

$GLOBALS["lang"]['Guest Device ID'] = 'Ταυτότητα συσκευής του επισκέπτη';

$GLOBALS["lang"]['guid'] = 'Γκιντ';

$GLOBALS["lang"]['Guid'] = 'Γκιντ';

$GLOBALS["lang"]['Guinea'] = 'Γουινέα';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Γουινέα-Μπισσάου';

$GLOBALS["lang"]['Guyana'] = 'Γουιάνα';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'Αναθεώρηση HW';

$GLOBALS["lang"]['Haiti'] = 'Αϊτή';

$GLOBALS["lang"]['hard_drive_index'] = 'Δείκτης σκληρού δίσκου';

$GLOBALS["lang"]['Hard Drive Index'] = 'Δείκτης σκληρού δίσκου';

$GLOBALS["lang"]['hardware_revision'] = 'Αναθεώρηση υλικού';

$GLOBALS["lang"]['Hardware Revision'] = 'Αναθεώρηση υλικού';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Έχει εφαρμοστεί αυτή η πολιτική σε αυτόν τον οργανισμό.';

$GLOBALS["lang"]['hash'] = 'Χας.';

$GLOBALS["lang"]['Hash'] = 'Χας.';

$GLOBALS["lang"]['Head'] = 'Υπεύθυνος';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Νήσοι Χερντ και ΜακΝτόναλντ';

$GLOBALS["lang"]['height'] = 'Ύψος';

$GLOBALS["lang"]['Height'] = 'Ύψος';

$GLOBALS["lang"]['Height in RU'] = 'Ύψος σε ΕΣ';

$GLOBALS["lang"]['Help'] = 'Βοήθεια';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Βοήθεια και Συχνές Ερωτήσεις';

$GLOBALS["lang"]['high'] = 'Υψηλή';

$GLOBALS["lang"]['High'] = 'Υψηλή';

$GLOBALS["lang"]['High Availability'] = 'Υψηλή διαθεσιμότητα';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Αγία Έδρα (Πόλη του Βατικανού)';

$GLOBALS["lang"]['Home'] = 'Σπίτι';

$GLOBALS["lang"]['home'] = 'Σπίτι';

$GLOBALS["lang"]['Home Area Network'] = 'Δίκτυο Home Area';

$GLOBALS["lang"]['Honduras'] = 'Ονδούρα';

$GLOBALS["lang"]['Hong Kong'] = 'Χονγκ Κονγκ';

$GLOBALS["lang"]['host'] = 'Υπολογιστής';

$GLOBALS["lang"]['Host'] = 'Υπολογιστής';

$GLOBALS["lang"]['hostname'] = 'Όνομα υπολογιστή';

$GLOBALS["lang"]['Hostname'] = 'Όνομα υπολογιστή';

$GLOBALS["lang"]['hour'] = 'Ώρα';

$GLOBALS["lang"]['Hour'] = 'Ώρα';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Πώς και γιατί το Open-AudIT είναι πιο ασφαλές';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Πόση ώρα πήρε η εντολή για να εκτελεστεί.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Πόσο καιρό θα πρέπει να Nmap περιμένει για μια απάντηση, ανά συσκευή.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Πόσα κυκλώματα σε αυτό το ράφι.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Πόσες πολιτικές καταλήγουν σε αποτυχία.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Πόσες πολιτικές οδηγούν σε ένα πέρασμα.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Πόσες πρίζες σε αυτό το ράφι.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Πόσες μονάδες σε ύψος είναι αυτό το ράφι.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Πόσο συχνά θα πρέπει ο συλλέκτης να ζητήσει από το διακομιστή για μια εργασία.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Πώς θα πρέπει να επιλέξουμε συσκευές για να ενσωματωθούν (χρησιμοποιώντας ένα χαρακτηριστικό, ερωτηματικό ή μια ομάδα).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Πώς αξιοποιείται η ευπάθεια (π.χ., Δίκτυο, Επιφανές, Τοπικό, Φυσικό).';

$GLOBALS["lang"]['How to compare'] = 'Πώς να συγκρίνετε';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Ανθρώπινη εξήγηση της ευπάθειας.';

$GLOBALS["lang"]['Hungary'] = 'Ουγγαρία';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Υπερηχογράφημα';

$GLOBALS["lang"]['Hyperthreading'] = 'Υπερηχογράφημα';

$GLOBALS["lang"]['I have read the EULA.'] = 'Διάβασα την EULA.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'ΑΝ';

$GLOBALS["lang"]['IOS Version'] = 'Έκδοση IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Διεύθυνση IP';

$GLOBALS["lang"]['IP Addresses'] = 'Διευθύνσεις IP';

$GLOBALS["lang"]['IP Last Seen'] = 'Τελευταία προβολή IP';

$GLOBALS["lang"]['IP Set By'] = 'Ορισμός IP από';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Μόνο το ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Ισλανδία';

$GLOBALS["lang"]['icon'] = 'Εικονίδιο';

$GLOBALS["lang"]['Icon'] = 'Εικονίδιο';

$GLOBALS["lang"]['Icon and Text'] = 'Εικονίδιο και κείμενο';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Εικονίδιο μόνο, κείμενο μόνο ή εικονίδιο και κείμενο.';

$GLOBALS["lang"]['id_internal'] = 'Ταυτότητα εσωτερικού';

$GLOBALS["lang"]['Id Internal'] = 'Ταυτότητα εσωτερικού';

$GLOBALS["lang"]['id_number'] = 'Αριθμός αναγνώρισης';

$GLOBALS["lang"]['Id Number'] = 'Αριθμός αναγνώρισης';

$GLOBALS["lang"]['identification'] = 'Ταυτοποίηση';

$GLOBALS["lang"]['Identification'] = 'Ταυτοποίηση';

$GLOBALS["lang"]['If'] = 'Εάν';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Εάν μια θύρα ανταποκρίνεται με φίλτρο, θα πρέπει να το θεωρήσουμε διαθέσιμο.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Εάν μια θύρα ανταποκρίνεται με ανοιχτόφιλτρα, θα πρέπει να το θεωρήσουμε διαθέσιμο.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Εάν μια απομακρυσμένη συσκευή δεν υπάρχει στις επιλεγμένες συσκευές Open-AudIT, εάν τη διαγράψουμε από το εξωτερικό σύστημα.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Εάν έχει αλλάξει μια συσκευή Open-AudIT, θα πρέπει να ενημερώσουμε το εξωτερικό σύστημα.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Εάν μια συσκευή Open-AudIT δεν είναι στο εξωτερικό σύστημα, θα πρέπει να τη δημιουργήσουμε.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Εάν ένας πράκτορας αναφέρει την κύρια IP του είναι σε αυτό το υποδίκτυο, εκτελέστε τις ενέργειες.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Εάν ανιχνευθεί κάποια από αυτές τις θύρες (διαχωρισμένες από το κώμα, χωρίς κενά), υποθέστε ότι η SSH τρέχει πάνω τους και τις χρησιμοποιεί για ώντιτινγκ. Δεν χρειάζεται να προσθέσετε αυτή τη θύρα στις προσαρμοσμένες θύρες TCP - θα προστεθεί αυτόματα.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Αν οριστεί, κρατά μια σειρά JSON από συγκεκριμένες στήλες συσκευών που αυτός ο χρήστης έχει επιλέξει να δει, εκτός από τις προκαθορισμένες ρυθμίσεις.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Εάν η οικογένεια του παράγοντα OS (περίπτωση αναίσθητη) περιέχει αυτή τη συμβολοσειρά, εκτελέστε τις ενέργειες.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Εάν πληρούνται οι ακόλουθες προϋποθέσεις:<br/><ul><li>ένας ρόλος έχει ανατεθεί ad_group</li><li>ένας οργανισμός έχει μια καθορισμένη ad_group</li><li>LDAP Ο εξυπηρετητής έχει ρυθμίσει το y</li><li>ένας χρήστης υπάρχει στο LDAP (π.χ. Active Directory ή OpenLDAP) και είναι στις εκχωρημένες ad_groups</li></ul>Αυτός ο χρήστης μπορεί να συνδεθεί στο Open-AudIT χωρίς λογαριασμό στο Open-AudIT που χρειάζεται να δημιουργηθεί. Το Open-AudIT θα διερωτηθεί το LDAP εν προκειμένω και αν ο χρήστης βρίσκεται στις απαιτούμενες ομάδες αλλά όχι στο Open-AudIT, οι ιδιότητες χρήστη τους (όνομα, πλήρες όνομα, email, ρόλοι, οργς, κλπ) εντός του Open-AudIT θα κατοικηθούν αυτόματα και θα συνδεθούν.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Εάν ο χρήστης συνδεθεί στο Open-AudIT δεν έχει πρόσβαση στην αναζήτηση LDAP, μπορείτε να χρησιμοποιήσετε έναν άλλο λογαριασμό που έχει αυτή την πρόσβαση.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Εάν αυτά τα πολλά ή περισσότερα λεπτά έχουν περάσει από τότε που η συσκευή επικοινώνησε με τον εξυπηρετητή, εκτελέστε τις ενέργειες.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Αν επιλέξετε έναν Συλλέκτη, θα προγραμματιστεί να εκτελεστεί στο επόμενο όριο των 5 λεπτών.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus Αριθ. CAS:';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus Αριθ. CAS:';

$GLOBALS["lang"]['iflastchange'] = 'Η τελευταία αλλαγή';

$GLOBALS["lang"]['Iflastchange'] = 'Η τελευταία αλλαγή';

$GLOBALS["lang"]['Ignored'] = 'Παράβλεψη';

$GLOBALS["lang"]['image'] = 'Εικόνα';

$GLOBALS["lang"]['Image'] = 'Εικόνα';

$GLOBALS["lang"]['Images'] = 'Εικόνες';

$GLOBALS["lang"]['impact_availability'] = 'Διαθεσιμότητα επιπτώσεων';

$GLOBALS["lang"]['Impact Availability'] = 'Διαθεσιμότητα επιπτώσεων';

$GLOBALS["lang"]['impact_confidentiality'] = 'Εμπιστευτικότητα αντίκτυπου';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Εμπιστευτικότητα αντίκτυπου';

$GLOBALS["lang"]['impact_integrity'] = 'Ακεραιότητα αντίκτυπου';

$GLOBALS["lang"]['Impact Integrity'] = 'Ακεραιότητα αντίκτυπου';

$GLOBALS["lang"]['implementation_notes'] = 'Σημειώσεις εφαρμογής';

$GLOBALS["lang"]['Implementation Notes'] = 'Σημειώσεις εφαρμογής';

$GLOBALS["lang"]['Import'] = 'Εισαγωγή';

$GLOBALS["lang"]['Import Example Data'] = 'Εισαγωγή ενδεικτικών δεδομένων';

$GLOBALS["lang"]['improvement_opportunities'] = 'Ευκαιρίες βελτίωσης';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Ευκαιρίες βελτίωσης';

$GLOBALS["lang"]['In'] = 'Μέσα';

$GLOBALS["lang"]['Inactive'] = 'Ανενεργός';

$GLOBALS["lang"]['Include'] = 'Συμπερίληψη';

$GLOBALS["lang"]['Incomplete'] = 'Ατελής';

$GLOBALS["lang"]['Index'] = 'Ευρετήριο';

$GLOBALS["lang"]['India'] = 'Ινδία';

$GLOBALS["lang"]['Indonesia'] = 'Ινδονησία';

$GLOBALS["lang"]['Info'] = 'Πληροφορίες';

$GLOBALS["lang"]['Informational'] = 'Ενημέρωση';

$GLOBALS["lang"]['initial_size'] = 'Αρχικό μέγεθος';

$GLOBALS["lang"]['Initial Size'] = 'Αρχικό μέγεθος';

$GLOBALS["lang"]['inode'] = 'Ανώδιο';

$GLOBALS["lang"]['Inode'] = 'Ανώδιο';

$GLOBALS["lang"]['Input Type'] = 'Τύπος εισόδου';

$GLOBALS["lang"]['inputs'] = 'Εισροές';

$GLOBALS["lang"]['Inputs'] = 'Εισροές';

$GLOBALS["lang"]['Insane'] = 'Παράφρων';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Εισάγετε δεδομένα παραδείγματος και ανακαλύψτε όλα όσα μπορεί να σας πει το Open-AudIT.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Εισαγωγή Αγορασμένη άδεια Κλειδί';

$GLOBALS["lang"]['install'] = 'Εγκατάσταση';

$GLOBALS["lang"]['Install'] = 'Εγκατάσταση';

$GLOBALS["lang"]['install_date'] = 'Ημερομηνία εγκατάστασης';

$GLOBALS["lang"]['Install Date'] = 'Ημερομηνία εγκατάστασης';

$GLOBALS["lang"]['install_directory'] = 'Εγκατάσταση καταλόγου';

$GLOBALS["lang"]['Install Directory'] = 'Εγκατάσταση καταλόγου';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Εγκατάσταση OpenScap αν απαιτείται';

$GLOBALS["lang"]['install_source'] = 'Εγκατάσταση πηγαίου κώδικα';

$GLOBALS["lang"]['Install Source'] = 'Εγκατάσταση πηγαίου κώδικα';

$GLOBALS["lang"]['installed_by'] = 'Εγκαταστάθηκε από';

$GLOBALS["lang"]['Installed By'] = 'Εγκαταστάθηκε από';

$GLOBALS["lang"]['installed_on'] = 'Εγκαταστάθηκε On';

$GLOBALS["lang"]['Installed On'] = 'Εγκαταστάθηκε On';

$GLOBALS["lang"]['Installing on Linux'] = 'Εγκατάσταση στο Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Εγκατάσταση στο MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Εγκατάσταση στα Windows';

$GLOBALS["lang"]['instance'] = 'Υποθ.';

$GLOBALS["lang"]['Instance'] = 'Υποθ.';

$GLOBALS["lang"]['instance_ident'] = 'Ταυτότητα περιστατικού';

$GLOBALS["lang"]['Instance Ident'] = 'Ταυτότητα περιστατικού';

$GLOBALS["lang"]['instance_options'] = 'Επιλογές διαδικασίας';

$GLOBALS["lang"]['Instance Options'] = 'Επιλογές διαδικασίας';

$GLOBALS["lang"]['instance_provider'] = 'Παροχέας περιστατικών';

$GLOBALS["lang"]['Instance Provider'] = 'Παροχέας περιστατικών';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Επιφύλαξη του Πρωτοδικείου Ταυτοποίηση';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Επιφύλαξη του Πρωτοδικείου Ταυτοποίηση';

$GLOBALS["lang"]['instance_state'] = 'Υπόθεση';

$GLOBALS["lang"]['Instance State'] = 'Υπόθεση';

$GLOBALS["lang"]['instance_tags'] = 'Ετικέτα Πρωτοδικείου';

$GLOBALS["lang"]['Instance Tags'] = 'Ετικέτα Πρωτοδικείου';

$GLOBALS["lang"]['instance_type'] = 'Τύπος έργου';

$GLOBALS["lang"]['Instance Type'] = 'Τύπος έργου';

$GLOBALS["lang"]['Integer'] = 'Ακέραιος';

$GLOBALS["lang"]['Integration'] = 'Ολοκλήρωση';

$GLOBALS["lang"]['integrations'] = 'Ολοκληρώσεις';

$GLOBALS["lang"]['Integrations'] = 'Ολοκληρώσεις';

$GLOBALS["lang"]['integrations_id'] = 'ID ολοκληρωμένων';

$GLOBALS["lang"]['Integrations ID'] = 'ID ολοκληρωμένων';

$GLOBALS["lang"]['integrations_log'] = 'Καταγραφή ενσωμάτωσης';

$GLOBALS["lang"]['Integrations Log'] = 'Καταγραφή ενσωμάτωσης';

$GLOBALS["lang"]['interface'] = 'Διεπαφή';

$GLOBALS["lang"]['Interface'] = 'Διεπαφή';

$GLOBALS["lang"]['interface_id'] = 'ID διεπαφής';

$GLOBALS["lang"]['Interface ID'] = 'ID διεπαφής';

$GLOBALS["lang"]['interface_type'] = 'Τύπος διεπαφής';

$GLOBALS["lang"]['Interface Type'] = 'Τύπος διεπαφής';

$GLOBALS["lang"]['Internal'] = 'Εσωτερικό';

$GLOBALS["lang"]['Internal Field Name'] = 'Όνομα εσωτερικού πεδίου';

$GLOBALS["lang"]['Internal ID'] = 'Εσωτερικό αναγνωριστικό';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Εσωτερική σειρά έγκυρων σημείων πρόσβασης JSON για αυτόν τον χρήστη.';

$GLOBALS["lang"]['Introduction'] = 'Εισαγωγή';

$GLOBALS["lang"]['invoice'] = 'Τιμολόγιο';

$GLOBALS["lang"]['Invoice'] = 'Τιμολόγιο';

$GLOBALS["lang"]['invoice_id'] = 'Ταυτότητα τιμολογίου';

$GLOBALS["lang"]['Invoice ID'] = 'Ταυτότητα τιμολογίου';

$GLOBALS["lang"]['invoice_item'] = 'Θέση τιμολογίου';

$GLOBALS["lang"]['Invoice Item'] = 'Θέση τιμολογίου';

$GLOBALS["lang"]['ios_version'] = 'Έκδοση Ios';

$GLOBALS["lang"]['Ios Version'] = 'Έκδοση Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Διεύθυνση Ip Εξωτερικό A';

$GLOBALS["lang"]['Ip Address External A'] = 'Διεύθυνση Ip Εξωτερικό A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Διεύθυνση Ip Εξωτερικό B';

$GLOBALS["lang"]['Ip Address External B'] = 'Διεύθυνση Ip Εξωτερικό B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Διεύθυνση Ip Εσωτερικό A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Διεύθυνση Ip Εσωτερικό A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Διεύθυνση Ip Εσωτερικό Β';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Διεύθυνση Ip Εσωτερικό Β';

$GLOBALS["lang"]['ip_all_count'] = 'Ip Όλα Μέτρα';

$GLOBALS["lang"]['Ip All Count'] = 'Ip Όλα Μέτρα';

$GLOBALS["lang"]['ip_audited_count'] = 'Αριθμός ελέγχου Ip';

$GLOBALS["lang"]['Ip Audited Count'] = 'Αριθμός ελέγχου Ip';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Ανακαλύπτεται Κόμης';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Ανακαλύπτεται Κόμης';

$GLOBALS["lang"]['ip_enabled'] = 'Ενεργοποίηση IP';

$GLOBALS["lang"]['Ip Enabled'] = 'Ενεργοποίηση IP';

$GLOBALS["lang"]['ip_responding_count'] = 'Αντίστροφη μέτρηση Ip';

$GLOBALS["lang"]['Ip Responding Count'] = 'Αντίστροφη μέτρηση Ip';

$GLOBALS["lang"]['ip_scanned_count'] = 'Καταμέτρηση σάρωσης Ip';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Καταμέτρηση σάρωσης Ip';

$GLOBALS["lang"]['Iran'] = 'Ιράν';

$GLOBALS["lang"]['Iraq'] = 'Ιράκ';

$GLOBALS["lang"]['Ireland'] = 'Ιρλανδία';

$GLOBALS["lang"]['Is FRU'] = 'Είναι FRU';

$GLOBALS["lang"]['is_fru'] = 'Είναι ο Φρου;';

$GLOBALS["lang"]['Is Fru'] = 'Είναι ο Φρου;';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Είναι ο εξυπηρετητής NMIS τοπικός (σε αυτόν τον εξυπηρετητή Open-AudIT) ή απομακρυσμένος;';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Είναι ενεργός ο λογαριασμός; Εάν είναι προγραμματισμένο <code>n</code>, ο χρήστης δεν μπορεί να συνδεθεί.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Αυτό το ερώτημα περιορίζεται σε εξουσιοδοτημένους πελάτες.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Είναι ενεργοποιημένη αυτή η εργασία (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Νήσος Μαν';

$GLOBALS["lang"]['Israel'] = 'Ισραήλ';

$GLOBALS["lang"]['Issue'] = 'Θέμα';

$GLOBALS["lang"]['issuer'] = 'Εκδότης';

$GLOBALS["lang"]['Issuer'] = 'Εκδότης';

$GLOBALS["lang"]['issuer_name'] = 'Όνομα εκδότη';

$GLOBALS["lang"]['Issuer Name'] = 'Όνομα εκδότη';

$GLOBALS["lang"]['Issues'] = 'Θέματα';

$GLOBALS["lang"]['Italy'] = 'Ιταλία';

$GLOBALS["lang"]['Items not in Baseline'] = 'Αντικείμενα που δεν βρίσκονται στην αρχική γραμμή';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON για εισαγωγή';

$GLOBALS["lang"]['Jamaica'] = 'Τζαμάικα';

$GLOBALS["lang"]['January'] = 'Ιανουάριος';

$GLOBALS["lang"]['Japan'] = 'Ιαπωνία';

$GLOBALS["lang"]['Jersey'] = 'Τζέρσεϊ';

$GLOBALS["lang"]['Jordan'] = 'Ιορδανία';

$GLOBALS["lang"]['July'] = 'Ιούλιος';

$GLOBALS["lang"]['June'] = 'Ιούνιος';

$GLOBALS["lang"]['Kazakhstan'] = 'Καζακστάν';

$GLOBALS["lang"]['Kenya'] = 'Κένυα';

$GLOBALS["lang"]['kernel_version'] = 'Έκδοση πυρήνα';

$GLOBALS["lang"]['Kernel Version'] = 'Έκδοση πυρήνα';

$GLOBALS["lang"]['Key'] = 'Κλειδί';

$GLOBALS["lang"]['Key Password (optional)'] = 'Κωδικός πρόσβασης κλειδιού (προαιρετικό)';

$GLOBALS["lang"]['keys'] = 'Κλειδιά';

$GLOBALS["lang"]['Keys'] = 'Κλειδιά';

$GLOBALS["lang"]['Kiribati'] = 'Κιριμπάτι';

$GLOBALS["lang"]['Korea'] = 'Κορέα';

$GLOBALS["lang"]['Kuwait'] = 'Κουβέιτ';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Δημοκρατία της Κιργιζίας';

$GLOBALS["lang"]['lang'] = 'Λανγκ.';

$GLOBALS["lang"]['Lang'] = 'Λανγκ.';

$GLOBALS["lang"]['language'] = 'Γλώσσα';

$GLOBALS["lang"]['Language'] = 'Γλώσσα';

$GLOBALS["lang"]['Lao'] = 'Λάο';

$GLOBALS["lang"]['last_changed'] = 'Τελευταία αλλαγή';

$GLOBALS["lang"]['Last Changed'] = 'Τελευταία αλλαγή';

$GLOBALS["lang"]['last_finished'] = 'Τελευταία ολοκλήρωση';

$GLOBALS["lang"]['Last Finished'] = 'Τελευταία ολοκλήρωση';

$GLOBALS["lang"]['last_logon'] = 'Τελευταίο ημερολόγιο';

$GLOBALS["lang"]['Last Logon'] = 'Τελευταίο ημερολόγιο';

$GLOBALS["lang"]['Last Name'] = 'Επώνυμο';

$GLOBALS["lang"]['last_os_update'] = 'Τελευταία ενημέρωση Os';

$GLOBALS["lang"]['Last Os Update'] = 'Τελευταία ενημέρωση Os';

$GLOBALS["lang"]['last_result'] = 'Τελευταίο αποτέλεσμα';

$GLOBALS["lang"]['Last Result'] = 'Τελευταίο αποτέλεσμα';

$GLOBALS["lang"]['last_run'] = 'Τελευταία εκτέλεση';

$GLOBALS["lang"]['Last Run'] = 'Τελευταία εκτέλεση';

$GLOBALS["lang"]['last_seen'] = 'Τελευταία Είδατε';

$GLOBALS["lang"]['Last Seen'] = 'Τελευταία Είδατε';

$GLOBALS["lang"]['last_seen_by'] = 'Τελευταία Είδατε Από';

$GLOBALS["lang"]['Last Seen By'] = 'Τελευταία Είδατε Από';

$GLOBALS["lang"]['last_user'] = 'Τελευταίος χρήστης';

$GLOBALS["lang"]['Last User'] = 'Τελευταίος χρήστης';

$GLOBALS["lang"]['lastModified'] = 'Τελευταία τροποποίηση';

$GLOBALS["lang"]['LastModified'] = 'Τελευταία τροποποίηση';

$GLOBALS["lang"]['latitude'] = 'Γεωγραφικό πλάτος';

$GLOBALS["lang"]['Latitude'] = 'Γεωγραφικό πλάτος';

$GLOBALS["lang"]['Latvia'] = 'Λετονία';

$GLOBALS["lang"]['Layout'] = 'Διάταξη';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Βάση Ldap Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Βάση Ldap Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Λογαριασμός Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Λογαριασμός Ldap Dn';

$GLOBALS["lang"]['ldap_dn_password'] = 'Κωδικός πρόσβασης Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Κωδικός πρόσβασης Ldap Dn';

$GLOBALS["lang"]['Learn About'] = 'Μάθετε για';

$GLOBALS["lang"]['Learn More'] = 'Μάθετε Περισσότερα';

$GLOBALS["lang"]['lease_expiry_date'] = 'Ημερομηνία λήξης της μίσθωσης';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Ημερομηνία λήξης της μίσθωσης';

$GLOBALS["lang"]['Lebanon'] = 'Λίβανος';

$GLOBALS["lang"]['legal_requirements'] = 'Νομικές απαιτήσεις';

$GLOBALS["lang"]['Legal Requirements'] = 'Νομικές απαιτήσεις';

$GLOBALS["lang"]['Lesotho'] = 'Λεσόθο';

$GLOBALS["lang"]['Less Than'] = 'Λιγότερο από';

$GLOBALS["lang"]['Less Than or Equals'] = 'Λιγότερο από ή ίσοι';

$GLOBALS["lang"]['level'] = 'Επίπεδο';

$GLOBALS["lang"]['Level'] = 'Επίπεδο';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Επίπεδο των προνομίων που απαιτούνται για την εκμετάλλευση (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Λιβερία';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Αραβική Λιβύη Jamahiriya';

$GLOBALS["lang"]['License'] = 'Άδεια';

$GLOBALS["lang"]['License Key'] = 'Κλειδί άδειας χρήσης';

$GLOBALS["lang"]['License Required'] = 'Απαιτούμενη άδεια';

$GLOBALS["lang"]['licenses'] = 'Άδειες';

$GLOBALS["lang"]['Licenses'] = 'Άδειες';

$GLOBALS["lang"]['Liechtenstein'] = 'Λιχτενστάιν';

$GLOBALS["lang"]['Like'] = 'Όπως...';

$GLOBALS["lang"]['limit'] = 'Όριο';

$GLOBALS["lang"]['Limit'] = 'Όριο';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Περιορίστε το ερώτημα στα πρώτα αντικείμενα X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Περιορισμένη σε 100 σειρές.';

$GLOBALS["lang"]['line_amount'] = 'Ποσό γραμμής';

$GLOBALS["lang"]['Line Amount'] = 'Ποσό γραμμής';

$GLOBALS["lang"]['Line Graph'] = 'Γράφημα γραμμής';

$GLOBALS["lang"]['line_number_a'] = 'Αριθμός γραμμής A';

$GLOBALS["lang"]['Line Number A'] = 'Αριθμός γραμμής A';

$GLOBALS["lang"]['line_number_b'] = 'Αριθμός γραμμής Β';

$GLOBALS["lang"]['Line Number B'] = 'Αριθμός γραμμής Β';

$GLOBALS["lang"]['line_text'] = 'Κείμενο γραμμής';

$GLOBALS["lang"]['Line Text'] = 'Κείμενο γραμμής';

$GLOBALS["lang"]['link'] = 'Δεσμός';

$GLOBALS["lang"]['Link'] = 'Δεσμός';

$GLOBALS["lang"]['Link (Advanced)'] = 'Δεσμός (προχωρημένος)';

$GLOBALS["lang"]['Linked Files'] = 'Συνδεδεμένα αρχεία';

$GLOBALS["lang"]['links'] = 'Σύνδεσμοι';

$GLOBALS["lang"]['Links'] = 'Σύνδεσμοι';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Συνδέει αυτή την ανακάλυψη με το σχετικό σύννεφο (αν απαιτείται). Συνδέσεις <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Συνδέσεις <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Συνδέσεις <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Συνδέσεις <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Λίστα';

$GLOBALS["lang"]['list_table_format'] = 'Εμφάνιση μορφής πίνακα';

$GLOBALS["lang"]['List Table Format'] = 'Εμφάνιση μορφής πίνακα';

$GLOBALS["lang"]['Lithuania'] = 'Λιθουανία';

$GLOBALS["lang"]['Load Balancing'] = 'Εξισορρόπηση φορτίου';

$GLOBALS["lang"]['Local'] = 'Τοπικό';

$GLOBALS["lang"]['Local Area Network'] = 'Δίκτυο τοπικής περιοχής';

$GLOBALS["lang"]['local_port'] = 'Τοπική θύρα';

$GLOBALS["lang"]['Local Port'] = 'Τοπική θύρα';

$GLOBALS["lang"]['Localhost'] = 'Τοπικός υπολογιστής';

$GLOBALS["lang"]['Localisation'] = 'Εντοπισμός';

$GLOBALS["lang"]['Location'] = 'Τοποθεσία';

$GLOBALS["lang"]['Location A'] = 'Τοποθεσία A';

$GLOBALS["lang"]['Location B'] = 'Τοποθεσία B';

$GLOBALS["lang"]['location_id'] = 'ID τοποθεσίας';

$GLOBALS["lang"]['Location ID'] = 'ID τοποθεσίας';

$GLOBALS["lang"]['location_id_a'] = 'Ταυτότητα τοποθεσίας A';

$GLOBALS["lang"]['Location ID A'] = 'Ταυτότητα τοποθεσίας A';

$GLOBALS["lang"]['location_id_b'] = 'Ταυτότητα τοποθεσίας B';

$GLOBALS["lang"]['Location ID B'] = 'Ταυτότητα τοποθεσίας B';

$GLOBALS["lang"]['location_latitude'] = 'Γεωγραφικό πλάτος τοποθεσίας';

$GLOBALS["lang"]['Location Latitude'] = 'Γεωγραφικό πλάτος τοποθεσίας';

$GLOBALS["lang"]['location_level'] = 'Επίπεδο τοποθεσίας';

$GLOBALS["lang"]['Location Level'] = 'Επίπεδο τοποθεσίας';

$GLOBALS["lang"]['location_longitude'] = 'Γεωγραφικό μήκος τοποθεσίας';

$GLOBALS["lang"]['Location Longitude'] = 'Γεωγραφικό μήκος τοποθεσίας';

$GLOBALS["lang"]['location_rack'] = 'Θέση Rack';

$GLOBALS["lang"]['Location Rack'] = 'Θέση Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Θέση Rack';

$GLOBALS["lang"]['Location Rack Position'] = 'Θέση Rack';

$GLOBALS["lang"]['location_rack_size'] = 'Μέγεθος Rack τοποθεσίας';

$GLOBALS["lang"]['Location Rack Size'] = 'Μέγεθος Rack τοποθεσίας';

$GLOBALS["lang"]['location_room'] = 'Αίθουσα τοποθεσίας';

$GLOBALS["lang"]['Location Room'] = 'Αίθουσα τοποθεσίας';

$GLOBALS["lang"]['location_suite'] = 'Σουίτα τοποθεσίας';

$GLOBALS["lang"]['Location Suite'] = 'Σουίτα τοποθεσίας';

$GLOBALS["lang"]['locations'] = 'Τοποθεσίες';

$GLOBALS["lang"]['Locations'] = 'Τοποθεσίες';

$GLOBALS["lang"]['Locations in this'] = 'Τοποθεσίες σε αυτό';

$GLOBALS["lang"]['log'] = 'Καταγραφή';

$GLOBALS["lang"]['Log'] = 'Καταγραφή';

$GLOBALS["lang"]['log_format'] = 'Μορφή καταγραφής';

$GLOBALS["lang"]['Log Format'] = 'Μορφή καταγραφής';

$GLOBALS["lang"]['log_path'] = 'Διαδρομή καταγραφής';

$GLOBALS["lang"]['Log Path'] = 'Διαδρομή καταγραφής';

$GLOBALS["lang"]['log_rotation'] = 'Περιστροφή καταγραφής';

$GLOBALS["lang"]['Log Rotation'] = 'Περιστροφή καταγραφής';

$GLOBALS["lang"]['log_status'] = 'Κατάσταση καταγραφής';

$GLOBALS["lang"]['Log Status'] = 'Κατάσταση καταγραφής';

$GLOBALS["lang"]['Logical Cores '] = 'Λογικοί πυρήνες ';

$GLOBALS["lang"]['logical_count'] = 'Λογικός αριθμός';

$GLOBALS["lang"]['Logical Count'] = 'Λογικός αριθμός';

$GLOBALS["lang"]['Logout'] = 'Αποσύνδεση';

$GLOBALS["lang"]['Logs'] = 'Καταγραφές';

$GLOBALS["lang"]['longitude'] = 'Γεωγραφικό μήκος';

$GLOBALS["lang"]['Longitude'] = 'Γεωγραφικό μήκος';

$GLOBALS["lang"]['low'] = 'Χαμηλή';

$GLOBALS["lang"]['Low'] = 'Χαμηλή';

$GLOBALS["lang"]['Lower Case'] = 'Κάτω περίπτωση';

$GLOBALS["lang"]['Luxembourg'] = 'Λουξεμβούργο';

$GLOBALS["lang"]['MAC Address'] = 'Διεύθυνση MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Παραγωγός';

$GLOBALS["lang"]['mac'] = 'Μακ';

$GLOBALS["lang"]['Mac'] = 'Μακ';

$GLOBALS["lang"]['Mac Address'] = 'Διεύθυνση Mac';

$GLOBALS["lang"]['MacOS'] = 'ΜΑΚΟΣ';

$GLOBALS["lang"]['Macao'] = 'Μακάο';

$GLOBALS["lang"]['Macedonia'] = 'ΠΓΔΜ';

$GLOBALS["lang"]['Madagascar'] = 'Μαδαγασκάρη';

$GLOBALS["lang"]['maintenance_expires'] = 'Λήγει η συντήρηση';

$GLOBALS["lang"]['Maintenance Expires'] = 'Λήγει η συντήρηση';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Κάντε το προκαθορισμένο ταμπλό μου';

$GLOBALS["lang"]['Make this install a Collector'] = 'Κάντε αυτό την εγκατάσταση ενός συλλέκτη';

$GLOBALS["lang"]['Malawi'] = 'Μαλάουι';

$GLOBALS["lang"]['Malaysia'] = 'Μαλαισία';

$GLOBALS["lang"]['Maldives'] = 'Μαλδίβες';

$GLOBALS["lang"]['Mali'] = 'Μάλι';

$GLOBALS["lang"]['Malta'] = 'Μάλτα';

$GLOBALS["lang"]['Manage'] = 'Διαχείριση';

$GLOBALS["lang"]['Manage Licenses'] = 'Διαχείριση αδειών';

$GLOBALS["lang"]['Manage in NMIS'] = 'Διαχείριση σε NMIS';

$GLOBALS["lang"]['Managed'] = 'Διαχείριση';

$GLOBALS["lang"]['managed_by'] = 'Διαχείριση από';

$GLOBALS["lang"]['Managed By'] = 'Διαχείριση από';

$GLOBALS["lang"]['Manual Input'] = 'Χειροκίνητη είσοδος';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Χειροκίνητα ρυθμίζονται από το χρήστη, προεπιλεγμένα στην παραγωγή.';

$GLOBALS["lang"]['Manually set by user.'] = 'Χειροκίνητα ρυθμίζονται από το χρήστη.';

$GLOBALS["lang"]['manufacture_date'] = 'Ημερομηνία κατασκευής';

$GLOBALS["lang"]['Manufacture Date'] = 'Ημερομηνία κατασκευής';

$GLOBALS["lang"]['manufacturer'] = 'Παραγωγός';

$GLOBALS["lang"]['Manufacturer'] = 'Παραγωγός';

$GLOBALS["lang"]['manufacturer_code'] = 'Κωδικός κατασκευαστή';

$GLOBALS["lang"]['Manufacturer Code'] = 'Κωδικός κατασκευαστή';

$GLOBALS["lang"]['Map'] = 'Χάρτης';

$GLOBALS["lang"]['maps'] = 'Χάρτες';

$GLOBALS["lang"]['Maps'] = 'Χάρτες';

$GLOBALS["lang"]['March'] = 'Μάρτιος';

$GLOBALS["lang"]['Marshall Islands'] = 'Νήσοι Μάρσαλ';

$GLOBALS["lang"]['Martinique'] = 'Μαρτινίκα';

$GLOBALS["lang"]['mask'] = 'Μάσκα';

$GLOBALS["lang"]['Mask'] = 'Μάσκα';

$GLOBALS["lang"]['Match'] = 'Ταίριασμα';

$GLOBALS["lang"]['match_options'] = 'Επιλογές ταιριάσματος';

$GLOBALS["lang"]['Match Options'] = 'Επιλογές ταιριάσματος';

$GLOBALS["lang"]['match_string'] = 'Ταίριασμα συμβολοσειρών';

$GLOBALS["lang"]['Match String'] = 'Ταίριασμα συμβολοσειρών';

$GLOBALS["lang"]['Matching Attribute'] = 'Ταίριασμα χαρακτηριστικών';

$GLOBALS["lang"]['maturity_level'] = 'Επίπεδο ληκτότητας';

$GLOBALS["lang"]['Maturity Level'] = 'Επίπεδο ληκτότητας';

$GLOBALS["lang"]['maturity_score'] = 'Βαθμός ληκτότητας';

$GLOBALS["lang"]['Maturity Score'] = 'Βαθμός ληκτότητας';

$GLOBALS["lang"]['Mauritania'] = 'Μαυριτανία';

$GLOBALS["lang"]['Mauritius'] = 'Μαυρίκιος';

$GLOBALS["lang"]['max_file_size'] = 'Μέγιστο μέγεθος αρχείου';

$GLOBALS["lang"]['Max File Size'] = 'Μέγιστο μέγεθος αρχείου';

$GLOBALS["lang"]['Max Length'] = 'Μέγιστο μήκος';

$GLOBALS["lang"]['max_size'] = 'Μέγιστο μέγεθος';

$GLOBALS["lang"]['Max Size'] = 'Μέγιστο μέγεθος';

$GLOBALS["lang"]['May'] = 'Μάιος';

$GLOBALS["lang"]['Mayotte'] = 'Μαγιότ';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Μετράει την πιθανότητα επίθεσης της ευπάθειας, και βασίζεται στην τρέχουσα κατάσταση των τεχνικών εκμετάλλευσης, εκμετάλλευση της διαθεσιμότητας κώδικα, ή ενεργός, “in-the-wild” εκμετάλλευση.';

$GLOBALS["lang"]['medium'] = 'Μεσαίο';

$GLOBALS["lang"]['Medium'] = 'Μεσαίο';

$GLOBALS["lang"]['members'] = 'Μέλη';

$GLOBALS["lang"]['Members'] = 'Μέλη';

$GLOBALS["lang"]['memory'] = 'Μνήμη';

$GLOBALS["lang"]['Memory'] = 'Μνήμη';

$GLOBALS["lang"]['memory_count'] = 'Αριθμός μνήμης';

$GLOBALS["lang"]['Memory Count'] = 'Αριθμός μνήμης';

$GLOBALS["lang"]['memory_slot_count'] = 'Αριθμός Slot μνήμης';

$GLOBALS["lang"]['Memory Slot Count'] = 'Αριθμός Slot μνήμης';

$GLOBALS["lang"]['menu_category'] = 'Κατηγορία μενού';

$GLOBALS["lang"]['Menu Category'] = 'Κατηγορία μενού';

$GLOBALS["lang"]['menu_display'] = 'Εμφάνιση μενού';

$GLOBALS["lang"]['Menu Display'] = 'Εμφάνιση μενού';

$GLOBALS["lang"]['message'] = 'Μήνυμα';

$GLOBALS["lang"]['Message'] = 'Μήνυμα';

$GLOBALS["lang"]['meta_last_changed'] = 'Τελευταία αλλαγή Meta';

$GLOBALS["lang"]['Meta Last Changed'] = 'Τελευταία αλλαγή Meta';

$GLOBALS["lang"]['metric'] = 'Μετρικό';

$GLOBALS["lang"]['Metric'] = 'Μετρικό';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Δίκτυο Μητροπολιτικής Περιοχής';

$GLOBALS["lang"]['Mexico'] = 'Μεξικό';

$GLOBALS["lang"]['Micronesia'] = 'Μικρονησία';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Πεδία Azure της Microsoft';

$GLOBALS["lang"]['microtime'] = 'Μικροχρόνος';

$GLOBALS["lang"]['Microtime'] = 'Μικροχρόνος';

$GLOBALS["lang"]['minute'] = 'Λεπτό';

$GLOBALS["lang"]['Minute'] = 'Λεπτό';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Πρακτικά Από την τελευταία επιθεώρηση είναι μεγαλύτερη από ό, τι';

$GLOBALS["lang"]['model'] = 'Μοντέλο';

$GLOBALS["lang"]['Model'] = 'Μοντέλο';

$GLOBALS["lang"]['model_family'] = 'Υπόδειγμα Οικογένειας';

$GLOBALS["lang"]['Model Family'] = 'Υπόδειγμα Οικογένειας';

$GLOBALS["lang"]['module'] = 'Ενότητα';

$GLOBALS["lang"]['Module'] = 'Ενότητα';

$GLOBALS["lang"]['module_index'] = 'Δείκτης ενότητας';

$GLOBALS["lang"]['Module Index'] = 'Δείκτης ενότητας';

$GLOBALS["lang"]['Modules'] = 'Ενότητες';

$GLOBALS["lang"]['Moldova'] = 'Μολδαβία';

$GLOBALS["lang"]['Monaco'] = 'Μονακό';

$GLOBALS["lang"]['Monday'] = 'Δευτέρα';

$GLOBALS["lang"]['Mongolia'] = 'Μογγολία';

$GLOBALS["lang"]['monitor'] = 'Παρακολούθηση';

$GLOBALS["lang"]['Monitor'] = 'Παρακολούθηση';

$GLOBALS["lang"]['Montenegro'] = 'Μαυροβούνιο';

$GLOBALS["lang"]['month'] = 'Μήνας';

$GLOBALS["lang"]['Month'] = 'Μήνας';

$GLOBALS["lang"]['Montserrat'] = 'Μονσεράτ';

$GLOBALS["lang"]['Morocco'] = 'Μαρόκο';

$GLOBALS["lang"]['motherboard'] = 'Μητρική πλακέτα';

$GLOBALS["lang"]['Motherboard'] = 'Μητρική πλακέτα';

$GLOBALS["lang"]['mount_point'] = 'Σημείο προσάρτησης';

$GLOBALS["lang"]['Mount Point'] = 'Σημείο προσάρτησης';

$GLOBALS["lang"]['mount_type'] = 'Τύπος προσάρτησης';

$GLOBALS["lang"]['Mount Type'] = 'Τύπος προσάρτησης';

$GLOBALS["lang"]['Mozambique'] = 'Μοζαμβίκη';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Πρέπει να απαντήσετε στο Ping';

$GLOBALS["lang"]['Myanmar'] = 'Μιανμάρ';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+Μ';

$GLOBALS["lang"]['N-to-1'] = 'N-προς-1';

$GLOBALS["lang"]['N-to-N'] = 'Ν- σε-Ν';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service (Υπηρεσία Επιχειρήσεων)';

$GLOBALS["lang"]['NMIS Customer'] = 'Πελάτης NMIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'Επιλογές συσκευής NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Επιλογή συσκευής NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Όνομα πεδίου NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Τύπος πεδίου NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'Ομάδα NMIS';

$GLOBALS["lang"]['NMIS Poller'] = 'Πολίτης NMIS';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Ρόλος';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'ΣΗΜΕΙΩΣΗ - Μπορείτε να αποτρέψετε τα διαπιστευτήρια απλού κειμένου που εμφανίζονται παρακάτω με τον καθορισμό του αντικειμένου ρυθμίσεων για <code>decrypt_credentials</code> προς <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Όνομα';

$GLOBALS["lang"]['Name'] = 'Όνομα';

$GLOBALS["lang"]['Namibia'] = 'Ναμίμπια';

$GLOBALS["lang"]['Nauru'] = 'Ναούρου';

$GLOBALS["lang"]['Nepal'] = 'Νεπάλ';

$GLOBALS["lang"]['net_index'] = 'Καθαρός δείκτης';

$GLOBALS["lang"]['Net Index'] = 'Καθαρός δείκτης';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Ολλανδικές Αντίλλες';

$GLOBALS["lang"]['Netherlands the'] = 'Κάτω Χώρες';

$GLOBALS["lang"]['netmask'] = 'Μάσκα δικτύου';

$GLOBALS["lang"]['Netmask'] = 'Μάσκα δικτύου';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Πολιτικές Netstat';

$GLOBALS["lang"]['Network'] = 'Δίκτυο';

$GLOBALS["lang"]['network_address'] = 'Διεύθυνση δικτύου';

$GLOBALS["lang"]['Network Address'] = 'Διεύθυνση δικτύου';

$GLOBALS["lang"]['network_domain'] = 'Τομέας δικτύου';

$GLOBALS["lang"]['Network Domain'] = 'Τομέας δικτύου';

$GLOBALS["lang"]['Network Types'] = 'Τύποι δικτύου';

$GLOBALS["lang"]['networks'] = 'Δίκτυα';

$GLOBALS["lang"]['Networks'] = 'Δίκτυα';

$GLOBALS["lang"]['Networks Generated By'] = 'Δίκτυα που δημιουργήθηκαν από';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Δίκτυα που χρησιμοποιούν μάσκα CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Όνομα νέου κτιρίου';

$GLOBALS["lang"]['New Caledonia'] = 'Νέα Καληδονία';

$GLOBALS["lang"]['New Floor Name'] = 'Όνομα νέου ορόφου';

$GLOBALS["lang"]['New Room Name'] = 'Όνομα νέου δωματίου';

$GLOBALS["lang"]['New Row Name'] = 'Νέο όνομα γραμμής';

$GLOBALS["lang"]['New Zealand'] = 'Νέα Ζηλανδία';

$GLOBALS["lang"]['News'] = 'Νέα';

$GLOBALS["lang"]['next_hop'] = 'Επόμενη πτώση';

$GLOBALS["lang"]['Next Hop'] = 'Επόμενη πτώση';

$GLOBALS["lang"]['next_run'] = 'Επόμενη εκτέλεση';

$GLOBALS["lang"]['Next Run'] = 'Επόμενη εκτέλεση';

$GLOBALS["lang"]['Nicaragua'] = 'Νικαράγουα';

$GLOBALS["lang"]['Niger'] = 'Νίγηρας';

$GLOBALS["lang"]['Nigeria'] = 'Νιγηρία';

$GLOBALS["lang"]['Niue'] = 'Νιούε';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Ανταποκρίσεις σάρωσης θύρας Nmap';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Λιμάνια Nmap Tcp';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Λιμάνια Nmap Tcp';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Λιμάνια Nmap Udp';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Λιμάνια Nmap Udp';

$GLOBALS["lang"]['nmis_business_service'] = 'Υπηρεσία Επιχειρήσεων Nmis';

$GLOBALS["lang"]['Nmis Business Service'] = 'Υπηρεσία Επιχειρήσεων Nmis';

$GLOBALS["lang"]['nmis_customer'] = 'Πελάτης Nmis';

$GLOBALS["lang"]['Nmis Customer'] = 'Πελάτης Nmis';

$GLOBALS["lang"]['nmis_group'] = 'Ομάδα Nmis';

$GLOBALS["lang"]['Nmis Group'] = 'Ομάδα Nmis';

$GLOBALS["lang"]['nmis_manage'] = 'Διαχείριση Nmis';

$GLOBALS["lang"]['Nmis Manage'] = 'Διαχείριση Nmis';

$GLOBALS["lang"]['nmis_name'] = 'Όνομα Nmis';

$GLOBALS["lang"]['Nmis Name'] = 'Όνομα Nmis';

$GLOBALS["lang"]['nmis_notes'] = 'Σημειώσεις Nmis';

$GLOBALS["lang"]['Nmis Notes'] = 'Σημειώσεις Nmis';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Πολίτης Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Πολίτης Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Ρόλος Nmis';

$GLOBALS["lang"]['Nmis Role'] = 'Ρόλος Nmis';

$GLOBALS["lang"]['No'] = 'Όχι.';

$GLOBALS["lang"]['No Devices Returned'] = 'Δεν επιστράφηκαν οι συσκευές';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Χωρίς χάρτες Google API Παρόν κλειδιού, δεν θα μπορείτε να εμφανίσετε το χάρτη.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Χωρίς Άδεια για Επαγγελματίες ή Επιχειρήσεις';

$GLOBALS["lang"]['No Results'] = 'Χωρίς αποτελέσματα';

$GLOBALS["lang"]['No data in License Key'] = 'Δεν υπάρχουν δεδομένα στο κλειδί άδειας χρήσης';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Δεν απαιτείται αναβάθμιση της βάσης δεδομένων αυτή τη στιγμή.';

$GLOBALS["lang"]['Node'] = 'Κόμβος';

$GLOBALS["lang"]['None'] = 'Καμία';

$GLOBALS["lang"]['Norfolk Island'] = 'Νήσος Νόρφολκ';

$GLOBALS["lang"]['Normal'] = 'Κανονικό';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Νήσοι Βόρειες Μαριάνες';

$GLOBALS["lang"]['Norway'] = 'Νορβηγία';

$GLOBALS["lang"]['Not Applicable'] = 'Δεν εφαρμόζεται';

$GLOBALS["lang"]['Not Checked'] = 'Δεν ελέγχθηκε';

$GLOBALS["lang"]['Not Equals'] = 'Όχι Ίσες';

$GLOBALS["lang"]['Not In'] = 'Όχι.';

$GLOBALS["lang"]['Not Like'] = 'Όχι σαν';

$GLOBALS["lang"]['Not Set'] = 'Χωρίς ρύθμιση';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Δεν χρησιμοποιείται κανονικά. Αν ρυθμιστεί, αυτό απαιτεί η συσκευή να έχει μια ανοικτή θύρα (ως προς τις επιλογές σάρωσης) να θεωρείται ότι ανταποκρίνεται. Μια διεύθυνση MAC, απόκριση arp ή απόκριση ping δεν θεωρείται επαρκής για να θεωρηθεί ότι ανταποκρίνεται. Χρήσιμο εάν ένας δρομολογητής ή ένα τείχος προστασίας μεταξύ του εξυπηρετητή Open-AudIT και του IP στόχου ανταποκρίνεται στις σαρώσεις θύρας για λογαριασμό των IPs.';

$GLOBALS["lang"]['Note'] = 'Σημείωση';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Σημείωση - Η επιλογή γονέα θα παρέχει αυτόματα πρόσβαση στα παιδιά του (αν και δεν θα εμφανίζεται εδώ).';

$GLOBALS["lang"]['Notes'] = 'Σημειώσεις';

$GLOBALS["lang"]['notes'] = 'Σημειώσεις';

$GLOBALS["lang"]['Notice'] = 'Ανακοίνωση';

$GLOBALS["lang"]['notin'] = 'Σημείωση';

$GLOBALS["lang"]['Notin'] = 'Σημείωση';

$GLOBALS["lang"]['November'] = 'Νοέμβριος';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ΔΙΑΤΑΞΗ ΑΠΟ';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'Οικογένειες OS';

$GLOBALS["lang"]['OS Family'] = 'Οικογένεια OS';

$GLOBALS["lang"]['OS Group'] = 'Ομάδα OS';

$GLOBALS["lang"]['oae_manage'] = 'Διαχείριση Oae';

$GLOBALS["lang"]['Oae Manage'] = 'Διαχείριση Oae';

$GLOBALS["lang"]['object_ident'] = 'Ταυτότητα αντικειμένου';

$GLOBALS["lang"]['Object Ident'] = 'Ταυτότητα αντικειμένου';

$GLOBALS["lang"]['October'] = 'Οκτώβριος';

$GLOBALS["lang"]['Oman'] = 'Ομάν';

$GLOBALS["lang"]['omk_uuid'] = 'Ομκ Ουίντ';

$GLOBALS["lang"]['Omk Uuid'] = 'Ομκ Ουίντ';

$GLOBALS["lang"]['On'] = 'Εμπρός';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Ένα από τα <code>3x2</code>, <code>4x2</code>, <code>4x3</code> ή <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Ένα από τα Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Ένα από την ανάπτυξη, ανάκτηση καταστροφών, αξιολόγηση, προ-παραγωγή, παραγωγή, δοκιμές, κατάρτιση, δοκιμή αποδοχής χρηστών';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Ένα από τα κατανεμημένα, εκχωρημένα, σχεδιασμό, κρατημένα, μη τοποθετημένα, άγνωστα, μη διαχειριζόμενα. Προκαθορισμένα προς κατανομή.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Ένα από τα δύο <code>active directory</code> ή <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Ένα από: antivirus, backup, firewall, εγκεκριμένο, απαγορευμένο, αγνοείται ή άλλο.';

$GLOBALS["lang"]['Online Documentation'] = 'Ηλεκτρονική τεκμηρίωση';

$GLOBALS["lang"]['Open-AudIT'] = 'Ανοιχτό διάδρομο';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Κοινότητα Ανοιχτών Ενόδων';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Επιλογή συσκευής Open-Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Επιχείρηση Open-Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Ανοιχτό Εντερπράιζ. Υψηλής κλίμακας ευέλικτη λύση ανακάλυψης και ελέγχου για μεγάλα δίκτυα. Όλα τα χαρακτηριστικά του Professional συν: Βασικές γραμμές, Ελέγχου αρχείων, Cloud Discovery, Διαχείριση Rack, Ρυθμιζόμενος έλεγχος πρόσβασης Basedόλων συμπεριλαμβανομένου του Ενεργού καταλόγου και LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Όνομα πεδίου Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Άδειες Open-Audit';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Επιλογές Open-Audit';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Ανοιχτό επαγγελματίας';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Ανοιχτός επαγγελματίας. Ο κόσμος...';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT και Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'Το OpenScap είναι εγκατεστημένο';

$GLOBALS["lang"]['openldap_user_dn'] = 'Dn χρήστη Openldap';

$GLOBALS["lang"]['Openldap User Dn'] = 'Dn χρήστη Openldap';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Χαρακτηριστικά ιδιότητας μέλους χρήστη Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Χαρακτηριστικά ιδιότητας μέλους χρήστη Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Ανοιχτά';

$GLOBALS["lang"]['Open|filtered'] = 'Ανοιχτά';

$GLOBALS["lang"]['Operating System'] = 'Λειτουργικό σύστημα';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Λειτουργικό σύστημα Οικογένεια περιέχει';

$GLOBALS["lang"]['Operating Systems'] = 'Λειτουργικά συστήματα';

$GLOBALS["lang"]['optical'] = 'Οπτική';

$GLOBALS["lang"]['Optical'] = 'Οπτική';

$GLOBALS["lang"]['Optimized'] = 'Βελτιστοποιημένο';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Προαιρετική έκδοση όπως ελέγχθηκε από το Open-AudIT. Χρησιμοποίησε το ποσοστό % ως μπαλαντέρ.';

$GLOBALS["lang"]['options'] = 'Επιλογές';

$GLOBALS["lang"]['Options'] = 'Επιλογές';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Ή επιλέξτε από τα παρακάτω πεδία.';

$GLOBALS["lang"]['org_descendants'] = 'Απόγονοι Οργών';

$GLOBALS["lang"]['Org Descendants'] = 'Απόγονοι Οργών';

$GLOBALS["lang"]['org_id'] = 'Ταυτότητα Org';

$GLOBALS["lang"]['Org ID'] = 'Ταυτότητα Org';

$GLOBALS["lang"]['Organisation'] = 'Εισαγωγή';

$GLOBALS["lang"]['organisation'] = 'Εισαγωγή';

$GLOBALS["lang"]['Organisation Descendants'] = 'Οργάνωση απογόνων';

$GLOBALS["lang"]['Organisations'] = 'Οργανώσεις';

$GLOBALS["lang"]['orgs'] = 'Οργανισμοί';

$GLOBALS["lang"]['Orgs'] = 'Οργανισμοί';

$GLOBALS["lang"]['Orgs Name'] = 'Όνομα Οργών';

$GLOBALS["lang"]['orientation'] = 'Προσανατολισμός';

$GLOBALS["lang"]['Orientation'] = 'Προσανατολισμός';

$GLOBALS["lang"]['os'] = 'Οσ';

$GLOBALS["lang"]['Os'] = 'Οσ';

$GLOBALS["lang"]['os_arch'] = 'Ος Αψίδα';

$GLOBALS["lang"]['Os Arch'] = 'Ος Αψίδα';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Έκδοση εμφάνισης Os';

$GLOBALS["lang"]['Os Display Version'] = 'Έκδοση εμφάνισης Os';

$GLOBALS["lang"]['os_family'] = 'Οικογένεια Os';

$GLOBALS["lang"]['Os Family'] = 'Οικογένεια Os';

$GLOBALS["lang"]['os_group'] = 'Ομάδα Os';

$GLOBALS["lang"]['Os Group'] = 'Ομάδα Os';

$GLOBALS["lang"]['os_installation_date'] = 'Ημερομηνία εγκατάστασης Os';

$GLOBALS["lang"]['Os Installation Date'] = 'Ημερομηνία εγκατάστασης Os';

$GLOBALS["lang"]['os_licence_expiry'] = 'Λήξη άδειας Os';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Λήξη άδειας Os';

$GLOBALS["lang"]['os_license'] = 'Άδεια Os';

$GLOBALS["lang"]['Os License'] = 'Άδεια Os';

$GLOBALS["lang"]['os_license_code'] = 'Κωδικός άδειας Os';

$GLOBALS["lang"]['Os License Code'] = 'Κωδικός άδειας Os';

$GLOBALS["lang"]['os_license_mode'] = 'Λειτουργία άδειας Os';

$GLOBALS["lang"]['Os License Mode'] = 'Λειτουργία άδειας Os';

$GLOBALS["lang"]['os_license_type'] = 'Τύπος άδειας Os';

$GLOBALS["lang"]['Os License Type'] = 'Τύπος άδειας Os';

$GLOBALS["lang"]['os_name'] = 'Όνομα Os';

$GLOBALS["lang"]['Os Name'] = 'Όνομα Os';

$GLOBALS["lang"]['os_version'] = 'Έκδοση Os';

$GLOBALS["lang"]['Os Version'] = 'Έκδοση Os';

$GLOBALS["lang"]['Other'] = 'Άλλα';

$GLOBALS["lang"]['Others'] = 'Άλλα';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Το τάιμ άουτ μας για μια απάντηση SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Το τάιμ άουτ μας για μια απάντηση WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Το τάιμ άουτ μας για μια απάντηση SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Χρονικό όριο για μια απάντηση σεναρίων ελέγχου';

$GLOBALS["lang"]['output'] = 'Έξοδος';

$GLOBALS["lang"]['Output'] = 'Έξοδος';

$GLOBALS["lang"]['outputs'] = 'Έξοδα';

$GLOBALS["lang"]['Outputs'] = 'Έξοδα';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Συνολική βαθμολογία σοβαρότητας (0–10).';

$GLOBALS["lang"]['overwrite'] = 'Αντικατάσταση';

$GLOBALS["lang"]['Overwrite'] = 'Αντικατάσταση';

$GLOBALS["lang"]['owner'] = 'Ιδιοκτήτης';

$GLOBALS["lang"]['Owner'] = 'Ιδιοκτήτης';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Συσκευασία';

$GLOBALS["lang"]['packages'] = 'Πακέτα';

$GLOBALS["lang"]['Packages'] = 'Πακέτα';

$GLOBALS["lang"]['pagefile'] = 'Αρχείο σελίδας';

$GLOBALS["lang"]['Pagefile'] = 'Αρχείο σελίδας';

$GLOBALS["lang"]['Pakistan'] = 'Πακιστάν';

$GLOBALS["lang"]['Palau'] = 'Παλάου';

$GLOBALS["lang"]['Palestinian Territory'] = 'Παλαιστινιακό Έδαφος';

$GLOBALS["lang"]['Panama'] = 'Παναμάς';

$GLOBALS["lang"]['Papua New Guinea'] = 'Παπουασία-Νέα Γουινέα';

$GLOBALS["lang"]['Paraguay'] = 'Παραγουάη';

$GLOBALS["lang"]['Paranoid'] = 'Παρανοϊκός';

$GLOBALS["lang"]['Parent'] = 'Γονέας';

$GLOBALS["lang"]['parent_id'] = 'Ταυτότητα γονέα';

$GLOBALS["lang"]['Parent ID'] = 'Ταυτότητα γονέα';

$GLOBALS["lang"]['parent_name'] = 'Όνομα γονέα';

$GLOBALS["lang"]['Parent Name'] = 'Όνομα γονέα';

$GLOBALS["lang"]['part_number'] = 'Αριθμός μέρους';

$GLOBALS["lang"]['Part Number'] = 'Αριθμός μέρους';

$GLOBALS["lang"]['part_of_domain'] = 'Μέρος τομέα';

$GLOBALS["lang"]['Part Of Domain'] = 'Μέρος τομέα';

$GLOBALS["lang"]['Partition'] = 'Κατάτμηση';

$GLOBALS["lang"]['partition_count'] = 'Αριθμός κατατμήσεων';

$GLOBALS["lang"]['Partition Count'] = 'Αριθμός κατατμήσεων';

$GLOBALS["lang"]['partition_disk_index'] = 'Δείκτης δίσκων κατάτμησης';

$GLOBALS["lang"]['Partition Disk Index'] = 'Δείκτης δίσκων κατάτμησης';

$GLOBALS["lang"]['Pass'] = 'Πάσο';

$GLOBALS["lang"]['Passed'] = 'Πέρασε';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Παθητικό οπτικό τοπικό δίκτυο περιοχής';

$GLOBALS["lang"]['Password'] = 'Κωδικός πρόσβασης';

$GLOBALS["lang"]['password'] = 'Κωδικός πρόσβασης';

$GLOBALS["lang"]['password_changeable'] = 'Αλλαγή κωδικού πρόσβασης';

$GLOBALS["lang"]['Password Changeable'] = 'Αλλαγή κωδικού πρόσβασης';

$GLOBALS["lang"]['password_disabled'] = 'Απενεργοποιημένος κωδικός πρόσβασης';

$GLOBALS["lang"]['Password Disabled'] = 'Απενεργοποιημένος κωδικός πρόσβασης';

$GLOBALS["lang"]['password_expires'] = 'Λήγει ο κωδικός πρόσβασης';

$GLOBALS["lang"]['Password Expires'] = 'Λήγει ο κωδικός πρόσβασης';

$GLOBALS["lang"]['password_last_changed'] = 'Τελευταία αλλαγή κωδικού πρόσβασης';

$GLOBALS["lang"]['Password Last Changed'] = 'Τελευταία αλλαγή κωδικού πρόσβασης';

$GLOBALS["lang"]['password_required'] = 'Απαιτούμενος κωδικός πρόσβασης';

$GLOBALS["lang"]['Password Required'] = 'Απαιτούμενος κωδικός πρόσβασης';

$GLOBALS["lang"]['patch_panel'] = 'Πίνακας διόρθωσης';

$GLOBALS["lang"]['Patch Panel'] = 'Πίνακας διόρθωσης';

$GLOBALS["lang"]['patch_panel_port'] = 'Θύρα πίνακα patch';

$GLOBALS["lang"]['Patch Panel Port'] = 'Θύρα πίνακα patch';

$GLOBALS["lang"]['path'] = 'Διαδρομή';

$GLOBALS["lang"]['Path'] = 'Διαδρομή';

$GLOBALS["lang"]['Performance'] = 'Επιδόσεις';

$GLOBALS["lang"]['Performed'] = 'Εκτέλεση';

$GLOBALS["lang"]['permission'] = 'Άδεια';

$GLOBALS["lang"]['Permission'] = 'Άδεια';

$GLOBALS["lang"]['permissions'] = 'Άδειες';

$GLOBALS["lang"]['Permissions'] = 'Άδειες';

$GLOBALS["lang"]['Personal Area Network'] = 'Δίκτυο προσωπικής περιοχής';

$GLOBALS["lang"]['Peru'] = 'Περού';

$GLOBALS["lang"]['Philippines'] = 'Φιλιππίνες';

$GLOBALS["lang"]['phone'] = 'Τηλέφωνο';

$GLOBALS["lang"]['Phone'] = 'Τηλέφωνο';

$GLOBALS["lang"]['Physical CPUs'] = 'Φυσικές ΚΜΕ';

$GLOBALS["lang"]['physical_count'] = 'Αριθμός φυσικών στοιχείων';

$GLOBALS["lang"]['Physical Count'] = 'Αριθμός φυσικών στοιχείων';

$GLOBALS["lang"]['physical_depth'] = 'Φυσικό βάθος';

$GLOBALS["lang"]['Physical Depth'] = 'Φυσικό βάθος';

$GLOBALS["lang"]['physical_height'] = 'Φυσικό Ύψος';

$GLOBALS["lang"]['Physical Height'] = 'Φυσικό Ύψος';

$GLOBALS["lang"]['physical_width'] = 'Φυσικό Πλάτος';

$GLOBALS["lang"]['Physical Width'] = 'Φυσικό Πλάτος';

$GLOBALS["lang"]['picture'] = 'Εικόνα';

$GLOBALS["lang"]['Picture'] = 'Εικόνα';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Γράφημα πίτας';

$GLOBALS["lang"]['ping'] = 'Πινγκ';

$GLOBALS["lang"]['Ping'] = 'Πινγκ';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Νήσοι Πίτκερν';

$GLOBALS["lang"]['placement'] = 'Τοποθέτηση';

$GLOBALS["lang"]['Placement'] = 'Τοποθέτηση';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Παρακαλώ έχετε ένα λογότυπο διαχειριστή Open-AudIT και την αναβάθμιση της βάσης δεδομένων.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Παρακαλώ σημειώστε ότι το επιλεγμένο πλαίσιο θα παρακάμψει το πλαίσιο εισαγωγής κειμένου.';

$GLOBALS["lang"]['Please set using'] = 'Παρακαλώ ρυθμίστε τη χρήση';

$GLOBALS["lang"]['pod'] = 'Σκόνη';

$GLOBALS["lang"]['Pod'] = 'Σκόνη';

$GLOBALS["lang"]['Poland'] = 'Πολωνία';

$GLOBALS["lang"]['Policies'] = 'Πολιτικές';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Οι πολιτικές έχουν εξαιρέσεις.';

$GLOBALS["lang"]['policy'] = 'Πολιτική';

$GLOBALS["lang"]['Policy'] = 'Πολιτική';

$GLOBALS["lang"]['policy_id'] = 'ID πολιτικής';

$GLOBALS["lang"]['Policy ID'] = 'ID πολιτικής';

$GLOBALS["lang"]['Policy Result'] = 'Αποτέλεσμα πολιτικής';

$GLOBALS["lang"]['Policy Results'] = 'Αποτελέσματα πολιτικής';

$GLOBALS["lang"]['Polite'] = 'Ευγενικό';

$GLOBALS["lang"]['Populated by audit.'] = 'Με έλεγχο.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Διαμορφώθηκε από την ανακάλυψη και τον έλεγχο.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Διαμορφώθηκε δυναμικά.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Είναι από το DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Από την ανακάλυψη του SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Εκδίδεται από ελέγχους συσκευών.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Διαμορφώθηκε από το όνομα υπολογιστή.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Δημιουργήθηκε από το machine-id στο Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Δημιουργήθηκε από την IP για την προκαθορισμένη διαδρομή ή την IP ανιχνεύθηκε στην ανακάλυψη.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Διατυπώθηκε από την εντολή hostname.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Δημιουργήθηκε με πρόσθετα δεδομένα από το εξωτερικό σύστημα, σε μια αναπαράσταση JSON.';

$GLOBALS["lang"]['port'] = 'Θύρα';

$GLOBALS["lang"]['Port'] = 'Θύρα';

$GLOBALS["lang"]['port_name'] = 'Όνομα θύρας';

$GLOBALS["lang"]['Port Name'] = 'Όνομα θύρας';

$GLOBALS["lang"]['port_number'] = 'Αριθμός θύρας';

$GLOBALS["lang"]['Port Number'] = 'Αριθμός θύρας';

$GLOBALS["lang"]['ports_in_order'] = 'Λιμάνια σε τάξη';

$GLOBALS["lang"]['Ports In Order'] = 'Λιμάνια σε τάξη';

$GLOBALS["lang"]['ports_stop_after'] = 'Οι θύρες σταματούν μετά';

$GLOBALS["lang"]['Ports Stop After'] = 'Οι θύρες σταματούν μετά';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Πορτογαλία, Πορτογαλική Δημοκρατία';

$GLOBALS["lang"]['position'] = 'Θέση';

$GLOBALS["lang"]['Position'] = 'Θέση';

$GLOBALS["lang"]['postcode'] = 'Ταχυδρομικός κώδικας';

$GLOBALS["lang"]['Postcode'] = 'Ταχυδρομικός κώδικας';

$GLOBALS["lang"]['power_circuit'] = 'Κύκλωμα ισχύος';

$GLOBALS["lang"]['Power Circuit'] = 'Κύκλωμα ισχύος';

$GLOBALS["lang"]['power_sockets'] = 'Ηλεκτρικές υποδοχές';

$GLOBALS["lang"]['Power Sockets'] = 'Ηλεκτρικές υποδοχές';

$GLOBALS["lang"]['Predictable'] = 'Προβλεπόμενο';

$GLOBALS["lang"]['Preferences'] = 'Προτιμήσεις';

$GLOBALS["lang"]['Prerequisites'] = 'Προαπαιτούμενα';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Προαπαιτούμενα και δοκιμές';

$GLOBALS["lang"]['present'] = 'Παρόν';

$GLOBALS["lang"]['Present'] = 'Παρόν';

$GLOBALS["lang"]['previous_value'] = 'Προηγούμενη τιμή';

$GLOBALS["lang"]['Previous Value'] = 'Προηγούμενη τιμή';

$GLOBALS["lang"]['primary'] = 'Πρωτοβάθμια';

$GLOBALS["lang"]['Primary'] = 'Πρωτοβάθμια';

$GLOBALS["lang"]['Primary Key'] = 'Βασικό κλειδί';

$GLOBALS["lang"]['print_queue'] = 'Σε αναμονή εκτύπωσης';

$GLOBALS["lang"]['Print Queue'] = 'Σε αναμονή εκτύπωσης';

$GLOBALS["lang"]['printer_color'] = 'Χρώμα εκτυπωτή';

$GLOBALS["lang"]['Printer Color'] = 'Χρώμα εκτυπωτή';

$GLOBALS["lang"]['printer_duplex'] = 'Διπλότυπο εκτυπωτή';

$GLOBALS["lang"]['Printer Duplex'] = 'Διπλότυπο εκτυπωτή';

$GLOBALS["lang"]['printer_port_name'] = 'Όνομα θύρας εκτυπωτή';

$GLOBALS["lang"]['Printer Port Name'] = 'Όνομα θύρας εκτυπωτή';

$GLOBALS["lang"]['printer_shared'] = 'Κοινόχρηστος εκτυπωτής';

$GLOBALS["lang"]['Printer Shared'] = 'Κοινόχρηστος εκτυπωτής';

$GLOBALS["lang"]['printer_shared_name'] = 'Όνομα κοινόχρηστου εκτυπωτή';

$GLOBALS["lang"]['Printer Shared Name'] = 'Όνομα κοινόχρηστου εκτυπωτή';

$GLOBALS["lang"]['priority'] = 'Προτεραιότητα';

$GLOBALS["lang"]['Priority'] = 'Προτεραιότητα';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Απόρρητη φράση πρόσβασης';

$GLOBALS["lang"]['privileges_required'] = 'Απαιτούμενα προνόμια';

$GLOBALS["lang"]['Privileges Required'] = 'Απαιτούμενα προνόμια';

$GLOBALS["lang"]['processor'] = 'Επεξεργαστής';

$GLOBALS["lang"]['Processor'] = 'Επεξεργαστής';

$GLOBALS["lang"]['processor_count'] = 'Αριθμός επεξεργαστή';

$GLOBALS["lang"]['Processor Count'] = 'Αριθμός επεξεργαστή';

$GLOBALS["lang"]['processor_slot_count'] = 'Αριθμός Slot επεξεργαστή';

$GLOBALS["lang"]['Processor Slot Count'] = 'Αριθμός Slot επεξεργαστή';

$GLOBALS["lang"]['processor_type'] = 'Τύπος επεξεργαστή';

$GLOBALS["lang"]['Processor Type'] = 'Τύπος επεξεργαστή';

$GLOBALS["lang"]['Processors'] = 'Επεξεργαστές';

$GLOBALS["lang"]['product_name'] = 'Ονομασία προϊόντος';

$GLOBALS["lang"]['Product Name'] = 'Ονομασία προϊόντος';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Όνομα προϊόντος Ταίριασμα από CPE: ';

$GLOBALS["lang"]['products'] = 'Προϊόντα';

$GLOBALS["lang"]['Products'] = 'Προϊόντα';

$GLOBALS["lang"]['profile'] = 'Προφίλ';

$GLOBALS["lang"]['Profile'] = 'Προφίλ';

$GLOBALS["lang"]['program'] = 'Πρόγραμμα';

$GLOBALS["lang"]['Program'] = 'Πρόγραμμα';

$GLOBALS["lang"]['protocol'] = 'Πρωτόκολλο';

$GLOBALS["lang"]['Protocol'] = 'Πρωτόκολλο';

$GLOBALS["lang"]['provider'] = 'Παροχέας';

$GLOBALS["lang"]['Provider'] = 'Παροχέας';

$GLOBALS["lang"]['published'] = 'Δημοσίευση';

$GLOBALS["lang"]['Published'] = 'Δημοσίευση';

$GLOBALS["lang"]['published_date'] = 'Ημερομηνία δημοσίευσης';

$GLOBALS["lang"]['Published Date'] = 'Ημερομηνία δημοσίευσης';

$GLOBALS["lang"]['publisher'] = 'Εκδότης';

$GLOBALS["lang"]['Publisher'] = 'Εκδότης';

$GLOBALS["lang"]['Puerto Rico'] = 'Πουέρτο Ρίκο';

$GLOBALS["lang"]['Purchase'] = 'Αγορά';

$GLOBALS["lang"]['purchase_amount'] = 'Ποσό αγοράς';

$GLOBALS["lang"]['Purchase Amount'] = 'Ποσό αγοράς';

$GLOBALS["lang"]['purchase_cost_center'] = 'Αγορά Cost Center';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Αγορά Cost Center';

$GLOBALS["lang"]['purchase_count'] = 'Αριθμός αγοράς';

$GLOBALS["lang"]['Purchase Count'] = 'Αριθμός αγοράς';

$GLOBALS["lang"]['purchase_date'] = 'Ημερομηνία αγοράς';

$GLOBALS["lang"]['Purchase Date'] = 'Ημερομηνία αγοράς';

$GLOBALS["lang"]['purchase_invoice'] = 'Τιμολόγιο αγοράς';

$GLOBALS["lang"]['Purchase Invoice'] = 'Τιμολόγιο αγοράς';

$GLOBALS["lang"]['purchase_order'] = 'Παραγγελία αγοράς';

$GLOBALS["lang"]['Purchase Order'] = 'Παραγγελία αγοράς';

$GLOBALS["lang"]['purchase_order_number'] = 'Αριθμός παραγγελίας αγοράς';

$GLOBALS["lang"]['Purchase Order Number'] = 'Αριθμός παραγγελίας αγοράς';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Αριθμός σύμβασης υπηρεσιών αγοράς';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Αριθμός σύμβασης υπηρεσιών αγοράς';

$GLOBALS["lang"]['purchase_vendor'] = 'Αγορά Προμηθευτή';

$GLOBALS["lang"]['Purchase Vendor'] = 'Αγορά Προμηθευτή';

$GLOBALS["lang"]['purpose'] = 'Αντικείμενο';

$GLOBALS["lang"]['Purpose'] = 'Αντικείμενο';

$GLOBALS["lang"]['Qatar'] = 'Κατάρ';

$GLOBALS["lang"]['queries'] = 'Ερωτήματα';

$GLOBALS["lang"]['Queries'] = 'Ερωτήματα';

$GLOBALS["lang"]['Query'] = 'Ερώτηση';

$GLOBALS["lang"]['queue'] = 'Σε αναμονή';

$GLOBALS["lang"]['Queue'] = 'Σε αναμονή';

$GLOBALS["lang"]['Queue Limit'] = 'Όριο αναμονής';

$GLOBALS["lang"]['Queued Device Audits'] = 'Έλεγχος συσκευών σε αναμονή';

$GLOBALS["lang"]['Queued IP Scans'] = 'Σε αναμονή σάρωσης IP';

$GLOBALS["lang"]['Queued Items'] = 'Αντικείμενα σε αναμονή';

$GLOBALS["lang"]['RU Start'] = 'Έναρξη ΕΣ';

$GLOBALS["lang"]['RX Bitrate'] = 'Ρυθμός bit RX';

$GLOBALS["lang"]['RX Freq'] = 'ΡΧ Freq';

$GLOBALS["lang"]['RX Level'] = 'Επίπεδο RX';

$GLOBALS["lang"]['RX Power'] = 'Ισχύς RX';

$GLOBALS["lang"]['RX Profile'] = 'Προφίλ RX';

$GLOBALS["lang"]['Rack'] = 'Ρακ';

$GLOBALS["lang"]['rack_devices'] = 'Συσκευές Rack';

$GLOBALS["lang"]['Rack Devices'] = 'Συσκευές Rack';

$GLOBALS["lang"]['rack_id'] = 'Ταυτότητα Rack';

$GLOBALS["lang"]['Rack ID'] = 'Ταυτότητα Rack';

$GLOBALS["lang"]['Racks'] = 'Ρακς';

$GLOBALS["lang"]['racks'] = 'Ρακς';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Συνέπειες';

$GLOBALS["lang"]['Rationale'] = 'Συνέπειες';

$GLOBALS["lang"]['raw'] = 'Ακατέργαστο';

$GLOBALS["lang"]['Raw'] = 'Ακατέργαστο';

$GLOBALS["lang"]['read'] = 'Ανάγνωση';

$GLOBALS["lang"]['Read'] = 'Ανάγνωση';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Διαβάστε τα διαδικτυακά μας έγγραφα για το Open-AudIT Wiki.';

$GLOBALS["lang"]['Red Query'] = 'Κόκκινο ερώτημα';

$GLOBALS["lang"]['Redirect URI'] = 'Ανακατεύθυνση URI';

$GLOBALS["lang"]['redirect_uri'] = 'Ανακατεύθυνση Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Ανακατεύθυνση Uri';

$GLOBALS["lang"]['references'] = 'Παραπομπές';

$GLOBALS["lang"]['References'] = 'Παραπομπές';

$GLOBALS["lang"]['region'] = 'Περιφέρεια';

$GLOBALS["lang"]['Region'] = 'Περιφέρεια';

$GLOBALS["lang"]['registered_user'] = 'Εγγεγραμμένος χρήστης';

$GLOBALS["lang"]['Registered User'] = 'Εγγεγραμμένος χρήστης';

$GLOBALS["lang"]['rel'] = 'Ρελ';

$GLOBALS["lang"]['Rel'] = 'Ρελ';

$GLOBALS["lang"]['Release'] = 'Αποδέσμευση';

$GLOBALS["lang"]['remediation'] = 'Αποκατάσταση';

$GLOBALS["lang"]['Remediation'] = 'Αποκατάσταση';

$GLOBALS["lang"]['Remote'] = 'Απομακρυσμένο';

$GLOBALS["lang"]['remote_address'] = 'Απομακρυσμένη διεύθυνση';

$GLOBALS["lang"]['Remote Address'] = 'Απομακρυσμένη διεύθυνση';

$GLOBALS["lang"]['remote_port'] = 'Απομακρυσμένη θύρα';

$GLOBALS["lang"]['Remote Port'] = 'Απομακρυσμένη θύρα';

$GLOBALS["lang"]['Remove'] = 'Αφαίρεση';

$GLOBALS["lang"]['Remove Exception'] = 'Αφαίρεση εξαίρεσης';

$GLOBALS["lang"]['Report'] = 'Έκθεση';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Αναφορά για τις συσκευές, τα δίκτυα και πολλά άλλα';

$GLOBALS["lang"]['reportable'] = 'Αναφέρσιμο';

$GLOBALS["lang"]['Reportable'] = 'Αναφέρσιμο';

$GLOBALS["lang"]['Reports'] = 'Εκθέσεις';

$GLOBALS["lang"]['request'] = 'Αίτηση';

$GLOBALS["lang"]['Request'] = 'Αίτηση';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Αίτηση ειδικού χαρακτήρα ΚΒΑ';

$GLOBALS["lang"]['requested'] = 'Αιτήθηκε';

$GLOBALS["lang"]['Requested'] = 'Αιτήθηκε';

$GLOBALS["lang"]['require_port'] = 'Απαίτηση θύρας';

$GLOBALS["lang"]['Require Port'] = 'Απαίτηση θύρας';

$GLOBALS["lang"]['Require an Open Port'] = 'Απαίτηση μιας ανοικτής θύρας';

$GLOBALS["lang"]['Required'] = 'Απαιτούμενη';

$GLOBALS["lang"]['Reset'] = 'Επαναφορά';

$GLOBALS["lang"]['Reset All Data'] = 'Επαναφορά όλων των δεδομένων';

$GLOBALS["lang"]['Reset to Default'] = 'Επαναφορά στο προκαθορισμένο';

$GLOBALS["lang"]['resource'] = 'Πόρος';

$GLOBALS["lang"]['Resource'] = 'Πόρος';

$GLOBALS["lang"]['Resource Name'] = 'Όνομα πόρου';

$GLOBALS["lang"]['Resources'] = 'Πόροι';

$GLOBALS["lang"]['response'] = 'Ανταπόκριση';

$GLOBALS["lang"]['Response'] = 'Ανταπόκριση';

$GLOBALS["lang"]['responsibility'] = 'Ευθύνη';

$GLOBALS["lang"]['Responsibility'] = 'Ευθύνη';

$GLOBALS["lang"]['Restore my Licenses'] = 'Επαναφορά των αδειών μου';

$GLOBALS["lang"]['Restrict to Private'] = 'Περιορισμός στο Ιδιωτικό';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Περιορισμός στο υποδίκτυο';

$GLOBALS["lang"]['result'] = 'Αποτέλεσμα';

$GLOBALS["lang"]['Result'] = 'Αποτέλεσμα';

$GLOBALS["lang"]['Results'] = 'Αποτελέσματα';

$GLOBALS["lang"]['retrieved'] = 'Ανακτήθηκε';

$GLOBALS["lang"]['Retrieved'] = 'Ανακτήθηκε';

$GLOBALS["lang"]['retrieved_ident'] = 'Αναζητημένο Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Αναζητημένο Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Ανακτήθηκε το όνομα';

$GLOBALS["lang"]['Retrieved Name'] = 'Ανακτήθηκε το όνομα';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Ανακτήθηκε από τη συσκευή - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostvc/host conclusion, HP-UX:machifo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Reϋνιόν';

$GLOBALS["lang"]['revision'] = 'Αναθεώρηση';

$GLOBALS["lang"]['Revision'] = 'Αναθεώρηση';

$GLOBALS["lang"]['risk_assesment_result'] = 'Αποτέλεσμα αξιολόγησης κινδύνου';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Αποτέλεσμα αξιολόγησης κινδύνου';

$GLOBALS["lang"]['role'] = 'Ρόλος';

$GLOBALS["lang"]['Role'] = 'Ρόλος';

$GLOBALS["lang"]['roles'] = 'Ρόλοι';

$GLOBALS["lang"]['Roles'] = 'Ρόλοι';

$GLOBALS["lang"]['Romania'] = 'Ρουμανία';

$GLOBALS["lang"]['Room'] = 'Δωμάτιο';

$GLOBALS["lang"]['route'] = 'Οδός';

$GLOBALS["lang"]['Route'] = 'Οδός';

$GLOBALS["lang"]['Row'] = 'Γραμμή';

$GLOBALS["lang"]['Row Count'] = 'Αριθμός γραμμών';

$GLOBALS["lang"]['row_position'] = 'Θέση γραμμής';

$GLOBALS["lang"]['Row Position'] = 'Θέση γραμμής';

$GLOBALS["lang"]['Rows'] = 'Γραμμές';

$GLOBALS["lang"]['ru_height'] = 'Ύψος Ru';

$GLOBALS["lang"]['Ru Height'] = 'Ύψος Ru';

$GLOBALS["lang"]['ru_start'] = 'RU Εκκίνηση';

$GLOBALS["lang"]['Ru Start'] = 'RU Εκκίνηση';

$GLOBALS["lang"]['rule_group'] = 'Ομάδα Κανόνα';

$GLOBALS["lang"]['Rule Group'] = 'Ομάδα Κανόνα';

$GLOBALS["lang"]['rules'] = 'Κανόνες';

$GLOBALS["lang"]['Rules'] = 'Κανόνες';

$GLOBALS["lang"]['Run Discovery'] = 'Εκτέλεση ανακάλυψης';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Εκτέλεση ανακάλυψης σε συσκευές';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Κάνε μια ανακάλυψη και μάθε. <b>Τι Υπάρχει στο Δίκτυό Σας;</b>';

$GLOBALS["lang"]['Run this Command'] = 'Εκτέλεση αυτής της εντολής';

$GLOBALS["lang"]['runas'] = 'Ρούνες';

$GLOBALS["lang"]['Runas'] = 'Ρούνες';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Εκτέλεση υπηρεσίας Apache Open-Audit υπό Windows';

$GLOBALS["lang"]['Russian Federation'] = 'Ρωσική Ομοσπονδία';

$GLOBALS["lang"]['Rwanda'] = 'Ρουάντα';

$GLOBALS["lang"]['rx_bitrate'] = 'Ρx ρυθμός bit';

$GLOBALS["lang"]['Rx Bitrate'] = 'Ρx ρυθμός bit';

$GLOBALS["lang"]['rx_freq'] = 'Ρx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Ρx Freq';

$GLOBALS["lang"]['rx_level'] = 'Επίπεδο Rx';

$GLOBALS["lang"]['Rx Level'] = 'Επίπεδο Rx';

$GLOBALS["lang"]['rx_power'] = 'Ισχύς Rx';

$GLOBALS["lang"]['Rx Power'] = 'Ισχύς Rx';

$GLOBALS["lang"]['rx_profile'] = 'Προφίλ Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Προφίλ Rx';

$GLOBALS["lang"]['SELECT'] = 'ΕΠΙΛΟΓΗ';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Έκδοση SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Λεπτομέρειες';

$GLOBALS["lang"]['SNMP OID'] = 'ΟΦΠ SNMP';

$GLOBALS["lang"]['SNMP Version'] = 'Έκδοση SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (προχωρημένο)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Δηλώσεις δημιουργίας SQL';

$GLOBALS["lang"]['SSH'] = 'SH';

$GLOBALS["lang"]['SSH Key'] = 'SH Κλειδί';

$GLOBALS["lang"]['SW Revision'] = 'Αναθεώρηση SW';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Άγιος Βαρθολομαίος';

$GLOBALS["lang"]['Saint Helena'] = 'Αγία Ελένη';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Άγιος Χριστόφορος και Νέβις';

$GLOBALS["lang"]['Saint Lucia'] = 'Αγία Λουκία';

$GLOBALS["lang"]['Saint Martin'] = 'Άγιος Μαρτίνος';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Σεν Πιερ και Μικελόν';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Άγιος Βικέντιος και Γρεναδίνες';

$GLOBALS["lang"]['Samoa'] = 'Σαμόα';

$GLOBALS["lang"]['san'] = 'Σαν.';

$GLOBALS["lang"]['San'] = 'Σαν.';

$GLOBALS["lang"]['San Marino'] = 'Άγιος Μαρίνος';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Σάο Τομέ και Πρίνσιπε';

$GLOBALS["lang"]['Saturday'] = 'Σάββατο';

$GLOBALS["lang"]['Saudi Arabia'] = 'Σαουδική Αραβία';

$GLOBALS["lang"]['Save as Default'] = 'Αποθήκευση ως προκαθορισμένο';

$GLOBALS["lang"]['scaling'] = 'Σκάλιση';

$GLOBALS["lang"]['Scaling'] = 'Σκάλιση';

$GLOBALS["lang"]['scan_options'] = 'Επιλογές σάρωσης';

$GLOBALS["lang"]['Scan Options'] = 'Επιλογές σάρωσης';

$GLOBALS["lang"]['Scan Options ID'] = 'ID επιλογών σάρωσης';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Σαρώστε τον κορυφαίο αριθμό θυρών TCP του Nmap.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Σαρώστε τον κορυφαίο αριθμό θυρών UDP του Nmap.';

$GLOBALS["lang"]['schedule'] = 'Πρόγραμμα';

$GLOBALS["lang"]['Schedule'] = 'Πρόγραμμα';

$GLOBALS["lang"]['scope'] = 'Πεδίο εφαρμογής';

$GLOBALS["lang"]['Scope'] = 'Πεδίο εφαρμογής';

$GLOBALS["lang"]['script_timeout'] = 'Χρονικό όριο σεναρίου';

$GLOBALS["lang"]['Script Timeout'] = 'Χρονικό όριο σεναρίου';

$GLOBALS["lang"]['scripts'] = 'Σενάρια';

$GLOBALS["lang"]['Scripts'] = 'Σενάρια';

$GLOBALS["lang"]['scsi'] = 'Σκι.';

$GLOBALS["lang"]['Scsi'] = 'Σκι.';

$GLOBALS["lang"]['scsi_bus'] = 'Λεωφορείο Scsi';

$GLOBALS["lang"]['Scsi Bus'] = 'Λεωφορείο Scsi';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Λογική μονάδα Scsi';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Λογική μονάδα Scsi';

$GLOBALS["lang"]['scsi_port'] = 'Θύρα Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Θύρα Scsi';

$GLOBALS["lang"]['Search'] = 'Αναζήτηση';

$GLOBALS["lang"]['Search For a Device'] = 'Αναζήτηση μιας συσκευής';

$GLOBALS["lang"]['Search for Device'] = 'Αναζήτηση συσκευής';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Αναζήτηση χρησιμοποιώντας πίνακες δεδομένων';

$GLOBALS["lang"]['secondary'] = 'Δευτερεύον';

$GLOBALS["lang"]['Secondary'] = 'Δευτερεύον';

$GLOBALS["lang"]['Secondary Text'] = 'Δευτεροβάθμιο κείμενο';

$GLOBALS["lang"]['section'] = 'Τμήμα';

$GLOBALS["lang"]['Section'] = 'Τμήμα';

$GLOBALS["lang"]['secure'] = 'Ασφαλής';

$GLOBALS["lang"]['Secure'] = 'Ασφαλής';

$GLOBALS["lang"]['Security Name'] = 'Όνομα ασφαλείας';

$GLOBALS["lang"]['Security Status'] = 'Καθεστώς ασφαλείας';

$GLOBALS["lang"]['security_zone'] = 'Ζώνη ασφαλείας';

$GLOBALS["lang"]['Security Zone'] = 'Ζώνη ασφαλείας';

$GLOBALS["lang"]['seed_ip'] = 'IP σπόρων';

$GLOBALS["lang"]['Seed IP'] = 'IP σπόρων';

$GLOBALS["lang"]['seed_ping'] = 'Πινγκ σπόρων';

$GLOBALS["lang"]['Seed Ping'] = 'Πινγκ σπόρων';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Σπόροι Περιορισμός σε Ιδιωτικό';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Σπόροι Περιορισμός σε Ιδιωτικό';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Οι σπόροι περιορίζονται στο υποδίκτυο';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Οι σπόροι περιορίζονται στο υποδίκτυο';

$GLOBALS["lang"]['Select'] = 'Επιλογή';

$GLOBALS["lang"]['Select All'] = 'Επιλογή όλων';

$GLOBALS["lang"]['select_external_attribute'] = 'Επιλογή εξωτερικού χαρακτηριστικού';

$GLOBALS["lang"]['Select External Attribute'] = 'Επιλογή εξωτερικού χαρακτηριστικού';

$GLOBALS["lang"]['select_external_count'] = 'Επιλογή εξωτερικού αριθμού';

$GLOBALS["lang"]['Select External Count'] = 'Επιλογή εξωτερικού αριθμού';

$GLOBALS["lang"]['select_external_type'] = 'Επιλογή εξωτερικού Τύπος';

$GLOBALS["lang"]['Select External Type'] = 'Επιλογή εξωτερικού Τύπος';

$GLOBALS["lang"]['select_external_value'] = 'Επιλογή εξωτερικού Τιμή';

$GLOBALS["lang"]['Select External Value'] = 'Επιλογή εξωτερικού Τιμή';

$GLOBALS["lang"]['select_internal_attribute'] = 'Επιλογή εσωτερικών χαρακτηριστικών';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Επιλογή εσωτερικών χαρακτηριστικών';

$GLOBALS["lang"]['select_internal_count'] = 'Επιλογή εσωτερικού αριθμού';

$GLOBALS["lang"]['Select Internal Count'] = 'Επιλογή εσωτερικού αριθμού';

$GLOBALS["lang"]['select_internal_type'] = 'Επιλογή εσωτερικού Τύπος';

$GLOBALS["lang"]['Select Internal Type'] = 'Επιλογή εσωτερικού Τύπος';

$GLOBALS["lang"]['select_internal_value'] = 'Επιλογή εσωτερικού Τιμή';

$GLOBALS["lang"]['Select Internal Value'] = 'Επιλογή εσωτερικού Τιμή';

$GLOBALS["lang"]['Select a Table'] = 'Επιλογή πίνακα';

$GLOBALS["lang"]['Senegal'] = 'Σενεγάλη';

$GLOBALS["lang"]['sensitivity'] = 'Ευαισθησία';

$GLOBALS["lang"]['Sensitivity'] = 'Ευαισθησία';

$GLOBALS["lang"]['September'] = 'Σεπτέμβριος';

$GLOBALS["lang"]['Serbia'] = 'Σερβία';

$GLOBALS["lang"]['serial'] = 'Σειριακό';

$GLOBALS["lang"]['Serial'] = 'Σειριακό';

$GLOBALS["lang"]['serial_imei'] = 'Σειριακή Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Σειριακή Imei';

$GLOBALS["lang"]['serial_sim'] = 'Σειριακή προσομοίωση';

$GLOBALS["lang"]['Serial Sim'] = 'Σειριακή προσομοίωση';

$GLOBALS["lang"]['series'] = 'Σειρά';

$GLOBALS["lang"]['Series'] = 'Σειρά';

$GLOBALS["lang"]['server'] = 'Διακομιστής';

$GLOBALS["lang"]['Server'] = 'Διακομιστής';

$GLOBALS["lang"]['server_id'] = 'ID εξυπηρετητή';

$GLOBALS["lang"]['Server ID'] = 'ID εξυπηρετητή';

$GLOBALS["lang"]['Server Is'] = 'Ο εξυπηρετητής είναι';

$GLOBALS["lang"]['server_item'] = 'Αντικείμενο εξυπηρετητή';

$GLOBALS["lang"]['Server Item'] = 'Αντικείμενο εξυπηρετητή';

$GLOBALS["lang"]['Server Status'] = 'Κατάσταση εξυπηρετητή';

$GLOBALS["lang"]['Servers'] = 'Εξυπηρετητές';

$GLOBALS["lang"]['service'] = 'Υπηρεσία';

$GLOBALS["lang"]['Service'] = 'Υπηρεσία';

$GLOBALS["lang"]['service_identifier'] = 'Αναγνωριστικό υπηρεσίας';

$GLOBALS["lang"]['Service Identifier'] = 'Αναγνωριστικό υπηρεσίας';

$GLOBALS["lang"]['service_level_a'] = 'Επίπεδο υπηρεσίας A';

$GLOBALS["lang"]['Service Level A'] = 'Επίπεδο υπηρεσίας A';

$GLOBALS["lang"]['service_level_b'] = 'Επίπεδο υπηρεσίας Β';

$GLOBALS["lang"]['Service Level B'] = 'Επίπεδο υπηρεσίας Β';

$GLOBALS["lang"]['service_network'] = 'Δίκτυο υπηρεσιών';

$GLOBALS["lang"]['Service Network'] = 'Δίκτυο υπηρεσιών';

$GLOBALS["lang"]['service_number'] = 'Αριθμός υπηρεσίας';

$GLOBALS["lang"]['Service Number'] = 'Αριθμός υπηρεσίας';

$GLOBALS["lang"]['service_pack'] = 'Πακέτο υπηρεσιών';

$GLOBALS["lang"]['Service Pack'] = 'Πακέτο υπηρεσιών';

$GLOBALS["lang"]['service_plan'] = 'Σχέδιο εξυπηρέτησης';

$GLOBALS["lang"]['Service Plan'] = 'Σχέδιο εξυπηρέτησης';

$GLOBALS["lang"]['service_provider'] = 'Παροχέας υπηρεσιών';

$GLOBALS["lang"]['Service Provider'] = 'Παροχέας υπηρεσιών';

$GLOBALS["lang"]['service_tag'] = 'Ετικέτα υπηρεσίας';

$GLOBALS["lang"]['Service Tag'] = 'Ετικέτα υπηρεσίας';

$GLOBALS["lang"]['service_type'] = 'Τύπος υπηρεσίας';

$GLOBALS["lang"]['Service Type'] = 'Τύπος υπηρεσίας';

$GLOBALS["lang"]['service_version'] = 'Έκδοση υπηρεσίας';

$GLOBALS["lang"]['Service Version'] = 'Έκδοση υπηρεσίας';

$GLOBALS["lang"]['Set'] = 'Ορισμός';

$GLOBALS["lang"]['set_by'] = 'Ορισμός by';

$GLOBALS["lang"]['Set By'] = 'Ορισμός by';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Ορισμός του μεγέθους (κανονικό ή συμπαγές) των πινάκων στις οθόνες της Λίστας.';

$GLOBALS["lang"]['severity'] = 'Σοβαρότητα';

$GLOBALS["lang"]['Severity'] = 'Σοβαρότητα';

$GLOBALS["lang"]['severity_text'] = 'Κείμενο σοβαρότητας';

$GLOBALS["lang"]['Severity Text'] = 'Κείμενο σοβαρότητας';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Η σοβαρότητα υπολογίζεται από το <code>base_score</code> και μπορεί να είναι ένα από: Κανένα, χαμηλό, μεσαίο, υψηλό, κρίσιμο.';

$GLOBALS["lang"]['Seychelles'] = 'Σεϋχέλλες';

$GLOBALS["lang"]['share'] = 'Μερίδιο';

$GLOBALS["lang"]['Share'] = 'Μερίδιο';

$GLOBALS["lang"]['Share Name'] = 'Όνομα μετοχής';

$GLOBALS["lang"]['shared'] = 'Κοινή χρήση';

$GLOBALS["lang"]['Shared'] = 'Κοινή χρήση';

$GLOBALS["lang"]['shared_name'] = 'Κοινόχρηστο όνομα';

$GLOBALS["lang"]['Shared Name'] = 'Κοινόχρηστο όνομα';

$GLOBALS["lang"]['shell'] = 'Κέλυφος';

$GLOBALS["lang"]['Shell'] = 'Κέλυφος';

$GLOBALS["lang"]['Ship Date'] = 'Ημερομηνία πλοίου';

$GLOBALS["lang"]['short'] = 'Σύντομη';

$GLOBALS["lang"]['Short'] = 'Σύντομη';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Να αφαιρέσω όλα τα μη τρέχοντα δεδομένα από αυτή τη συσκευή;';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Εάν αυτό το αρχείο (ή μοτίβο) χρησιμοποιηθεί για να αποκλειστεί η αναφορά αρχείων. Κανονικά, για τα αρχεία ελέγχου, αυτό είναι καθορισμένο για <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Σε περίπτωση που αυτός ο πωλητής χρησιμοποιηθεί κατά την ανάκτηση τρωτά σημεία από FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Θα πρέπει να προσθέσουμε συσκευές από την απομακρυσμένη υπηρεσία, τοπικά.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Να εφαρμόσουμε αυτή την άδεια στον επιλεγμένο Οργ καθώς και στα παιδιά των Οργάδων;';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Θα πρέπει να θεωρήσουμε μια διηθημένη θύρα ως ανοικτή θύρα - και συνεπώς να επισημάνουμε ότι αυτή η IP έχει μια συσκευή προσαρτημένη;';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Θα πρέπει να θεωρήσουμε μια ανοικτή θύρα ως ανοικτή θύρα - και επομένως να επισημάνουμε ότι αυτή η IP έχει προσαρτημένη μια συσκευή;';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Πρέπει να εκθέσουμε αυτή την ομάδα στο διαδίκτυο.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Εάν εκθέσουμε αυτό το ερώτημα στη λίστα των αναφορών στο μενού Αναφορά στη διασύνδεση ιστού.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Θα πρέπει να εκθέσουμε αυτό το ερώτημα στη λίστα των αναφορών κάτω από το μενού Reports στη διασύνδεση ιστού.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Θα πρέπει να εγκαταστήσετε Open-Scap στο μηχάνημα στόχο.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Θα πρέπει να ταιριάζει με μια συσκευή που βασίζεται mac διεύθυνση ακόμα και αν είναι ένα γνωστό πιθανό αντίγραφο από VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση το DNS fqdn της.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση το όνομα υπολογιστή του DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Πρέπει να ταιριάξουμε μια συσκευή βασισμένη στο UUID της.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση την ταυτότητα του.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση το FQDN της.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση το όνομα του υπολογιστή και το UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση το όνομα του υπολογιστή και την ταυτότητα του dbus.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση το όνομα του υπολογιστή και τη σειρά της.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση το ip της αν έχουμε μια υπάρχουσα συσκευή χωρίς δεδομένα.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση το ip του.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση την διεύθυνση mac της.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση τον σειριακό και τον τύπο της.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση τον σειριακό της αριθμό.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Θα πρέπει να ταιριάξουμε μια συσκευή με βάση μόνο το SNMP sysName και το σειριακό.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Θα πρέπει να ταιριάξουμε μια συσκευή με βάση μόνο το SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Πρέπει να ταιριάξουμε μια συσκευή με βάση μόνο το όνομά της.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Να εντοπίσουμε την IP πριν προσπαθήσουμε να το σαρώσουμε; Εάν δεν ανταποκριθεί στο ping, παραλείψτε αυτή τη συσκευή.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Πρέπει να κατοικήσουμε το εξωτερικό σύστημα από τις τοπικές μας συσκευές.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Πρέπει να τρέξουμε έναν έλεγχο και να τον υποβάλουμε (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Θα πρέπει να εξετάσουμε για SNMP χρησιμοποιώντας UDP θύρα 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Θα πρέπει να εξετάσουμε για SSH χρησιμοποιώντας TCP θύρα 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Θα πρέπει να εξετάσουμε για WMI χρησιμοποιώντας TCP θύρα 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Πρέπει να απεγκαταστήσουμε τον πράκτορα (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Πρέπει να χρησιμοποιήσουμε αυτή τη μέθοδο για να επιβεβαιώσουμε τα διαπιστευτήρια των χρηστών. Ορισμός σε <code>y</code> ή <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Πρέπει να χρησιμοποιήσουμε αυτή τη μέθοδο για να γεμίσουμε τους ρόλους των χρηστών. Το πεδίο <code>use_auth</code> πρέπει να είναι ρυθμισμένη <code>y</code> Για να χρησιμοποιήσω αυτό. Ορισμός σε <code>y</code> ή <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Εμφάνιση όλων';

$GLOBALS["lang"]['sid'] = 'Σιντ.';

$GLOBALS["lang"]['Sid'] = 'Σιντ.';

$GLOBALS["lang"]['sidebar'] = 'Πλευρική μπάρα';

$GLOBALS["lang"]['Sidebar'] = 'Πλευρική μπάρα';

$GLOBALS["lang"]['Sierra Leone'] = 'Σιέρα Λεόνε';

$GLOBALS["lang"]['Singapore'] = 'Σιγκαπούρη';

$GLOBALS["lang"]['Site A'] = 'Ιστοσελίδα A';

$GLOBALS["lang"]['Site B'] = 'Τόπος Β';

$GLOBALS["lang"]['site_hours_a'] = 'Ώρες site A';

$GLOBALS["lang"]['Site Hours A'] = 'Ώρες site A';

$GLOBALS["lang"]['site_hours_b'] = 'Ώρες τοποθεσίας B';

$GLOBALS["lang"]['Site Hours B'] = 'Ώρες τοποθεσίας B';

$GLOBALS["lang"]['size'] = 'Μέγεθος';

$GLOBALS["lang"]['Size'] = 'Μέγεθος';

$GLOBALS["lang"]['slaves'] = 'Σκλάβοι';

$GLOBALS["lang"]['Slaves'] = 'Σκλάβοι';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Σλοβακία (Σλοβακική Δημοκρατία)';

$GLOBALS["lang"]['Slovenia'] = 'Σλοβενία';

$GLOBALS["lang"]['Smart Status'] = 'Έξυπνη κατάσταση';

$GLOBALS["lang"]['smversion'] = 'Μετατροπή';

$GLOBALS["lang"]['Smversion'] = 'Μετατροπή';

$GLOBALS["lang"]['Sneaky'] = 'Ύπουλο';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Όνομα επιχείρησης Snmp';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Όνομα επιχείρησης Snmp';

$GLOBALS["lang"]['snmp_oid'] = 'Σνμπ Οιντ';

$GLOBALS["lang"]['Snmp Oid'] = 'Σνμπ Οιντ';

$GLOBALS["lang"]['snmp_timeout'] = 'Χρονικό όριο Snmp';

$GLOBALS["lang"]['Snmp Timeout'] = 'Χρονικό όριο Snmp';

$GLOBALS["lang"]['snmp_version'] = 'Έκδοση Snmp';

$GLOBALS["lang"]['Snmp Version'] = 'Έκδοση Snmp';

$GLOBALS["lang"]['socket'] = 'Υποδοχή';

$GLOBALS["lang"]['Socket'] = 'Υποδοχή';

$GLOBALS["lang"]['software'] = 'Λογισμικό';

$GLOBALS["lang"]['Software'] = 'Λογισμικό';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Λογισμικό βρέθηκαν τις τελευταίες 7 ημέρες';

$GLOBALS["lang"]['Software Found Today'] = 'Βρέθηκε λογισμικό σήμερα';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Λογισμικό Βρέθηκε Χθες';

$GLOBALS["lang"]['software_key'] = 'Κλειδί λογισμικού';

$GLOBALS["lang"]['Software Key'] = 'Κλειδί λογισμικού';

$GLOBALS["lang"]['software_name'] = 'Όνομα λογισμικού';

$GLOBALS["lang"]['Software Name'] = 'Όνομα λογισμικού';

$GLOBALS["lang"]['Software Policies'] = 'Πολιτικές λογισμικού';

$GLOBALS["lang"]['software_revision'] = 'Αναθεώρηση λογισμικού';

$GLOBALS["lang"]['Software Revision'] = 'Αναθεώρηση λογισμικού';

$GLOBALS["lang"]['software_version'] = 'Έκδοση λογισμικού';

$GLOBALS["lang"]['Software Version'] = 'Έκδοση λογισμικού';

$GLOBALS["lang"]['Solaris'] = 'Σολάρις';

$GLOBALS["lang"]['Solomon Islands'] = 'Νήσοι Σολομώντος';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Σομαλία, Σομαλία';

$GLOBALS["lang"]['sound'] = 'Ήχος';

$GLOBALS["lang"]['Sound'] = 'Ήχος';

$GLOBALS["lang"]['source'] = 'Πηγή';

$GLOBALS["lang"]['Source'] = 'Πηγή';

$GLOBALS["lang"]['South Africa'] = 'Νότια Αφρική';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Νότια Γεωργία και Νότιοι Νήσοι Σάντουιτς';

$GLOBALS["lang"]['Spain'] = 'Ισπανία';

$GLOBALS["lang"]['Spanish'] = 'Ισπανικά';

$GLOBALS["lang"]['Specific to Azure.'] = 'Ειδικά για την Αζούρ.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Ειδικά στην OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Καθορίζει μια λίστα χωρισμένων με κόμματα στόχων (χωρίς κενά) που πρέπει να εξαιρεθούν από τη σάρωση. Η λίστα που περνάτε χρησιμοποιεί κανονική σύνταξη Nmap, έτσι ώστε να μπορεί να περιλαμβάνει ονόματα host, CIDR netblocks, ectet ranges, κλπ.';

$GLOBALS["lang"]['speed'] = 'Ταχύτητα';

$GLOBALS["lang"]['Speed'] = 'Ταχύτητα';

$GLOBALS["lang"]['speed_down_a'] = 'Ταχύτητα κάτω Α';

$GLOBALS["lang"]['Speed Down A'] = 'Ταχύτητα κάτω Α';

$GLOBALS["lang"]['speed_down_b'] = 'Ταχύτητα κάτω Β';

$GLOBALS["lang"]['Speed Down B'] = 'Ταχύτητα κάτω Β';

$GLOBALS["lang"]['speed_up_a'] = 'Ταχύτητα A';

$GLOBALS["lang"]['Speed Up A'] = 'Ταχύτητα A';

$GLOBALS["lang"]['speed_up_b'] = 'Ταχύτητα B';

$GLOBALS["lang"]['Speed Up B'] = 'Ταχύτητα B';

$GLOBALS["lang"]['sql'] = 'Ι';

$GLOBALS["lang"]['Sql'] = 'Ι';

$GLOBALS["lang"]['Sri Lanka'] = 'Σρι Λάνκα';

$GLOBALS["lang"]['ssh_ports'] = 'Θύρα Ssh';

$GLOBALS["lang"]['Ssh Ports'] = 'Θύρα Ssh';

$GLOBALS["lang"]['ssh_timeout'] = 'Χρονικό όριο Ssh';

$GLOBALS["lang"]['Ssh Timeout'] = 'Χρονικό όριο Ssh';

$GLOBALS["lang"]['Stand-Alone'] = 'Σταθερά Μόνος';

$GLOBALS["lang"]['Standard'] = 'Πρότυπο';

$GLOBALS["lang"]['standard_id'] = 'Τυποποιημένο ID';

$GLOBALS["lang"]['Standard ID'] = 'Τυποποιημένο ID';

$GLOBALS["lang"]['standards'] = 'Πρότυπα';

$GLOBALS["lang"]['Standards'] = 'Πρότυπα';

$GLOBALS["lang"]['standards_policies'] = 'Πολιτικές προτύπων';

$GLOBALS["lang"]['Standards Policies'] = 'Πολιτικές προτύπων';

$GLOBALS["lang"]['standards_results'] = 'Αποτελέσματα προτύπων';

$GLOBALS["lang"]['Standards Results'] = 'Αποτελέσματα προτύπων';

$GLOBALS["lang"]['start_date'] = 'Ημερομηνία έναρξης';

$GLOBALS["lang"]['Start Date'] = 'Ημερομηνία έναρξης';

$GLOBALS["lang"]['start_mode'] = 'Λειτουργία εκκίνησης';

$GLOBALS["lang"]['Start Mode'] = 'Λειτουργία εκκίνησης';

$GLOBALS["lang"]['started_date'] = 'Ημερομηνία έναρξης';

$GLOBALS["lang"]['Started Date'] = 'Ημερομηνία έναρξης';

$GLOBALS["lang"]['state'] = 'Κατάσταση';

$GLOBALS["lang"]['State'] = 'Κατάσταση';

$GLOBALS["lang"]['Stats'] = 'Στατιστικά';

$GLOBALS["lang"]['status'] = 'Κατάσταση';

$GLOBALS["lang"]['Status'] = 'Κατάσταση';

$GLOBALS["lang"]['Storage'] = 'Αποθήκευση';

$GLOBALS["lang"]['storage_count'] = 'Αριθμός αποθήκευσης';

$GLOBALS["lang"]['Storage Count'] = 'Αριθμός αποθήκευσης';

$GLOBALS["lang"]['Storage-Area Network'] = 'Δίκτυο αποθήκευσης-περιοχής';

$GLOBALS["lang"]['string'] = 'Στρινγκ';

$GLOBALS["lang"]['String'] = 'Στρινγκ';

$GLOBALS["lang"]['sub_resource_id'] = 'Υπο ID πόρου';

$GLOBALS["lang"]['Sub Resource ID'] = 'Υπο ID πόρου';

$GLOBALS["lang"]['sub_type'] = 'Υποκατηγορία';

$GLOBALS["lang"]['Sub Type'] = 'Υποκατηγορία';

$GLOBALS["lang"]['subject_key_ident'] = 'Ταυτότητα κλειδιού θέματος';

$GLOBALS["lang"]['Subject Key Ident'] = 'Ταυτότητα κλειδιού θέματος';

$GLOBALS["lang"]['Submit'] = 'Υποβολή';

$GLOBALS["lang"]['Submitted From'] = 'Υποβλήθηκε από';

$GLOBALS["lang"]['subnet'] = 'Υποδίκτυο';

$GLOBALS["lang"]['Subnet'] = 'Υποδίκτυο';

$GLOBALS["lang"]['Subscription ID'] = 'ID συνδρομής';

$GLOBALS["lang"]['suburb'] = 'Προάστιο';

$GLOBALS["lang"]['Suburb'] = 'Προάστιο';

$GLOBALS["lang"]['Success'] = 'Επιτυχία';

$GLOBALS["lang"]['Sudan'] = 'Σουδάν';

$GLOBALS["lang"]['Sudo Password'] = 'Κωδικός πρόσβασης Sudo';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Κωδικός πρόσβασης Sudo (προαιρετικό)';

$GLOBALS["lang"]['suite'] = 'Σουίτα';

$GLOBALS["lang"]['Suite'] = 'Σουίτα';

$GLOBALS["lang"]['summaries'] = 'Περιλήψεις';

$GLOBALS["lang"]['Summaries'] = 'Περιλήψεις';

$GLOBALS["lang"]['Summary'] = 'Περίληψη';

$GLOBALS["lang"]['Sunday'] = 'Κυριακή';

$GLOBALS["lang"]['supplier'] = 'Προμηθευτής';

$GLOBALS["lang"]['Supplier'] = 'Προμηθευτής';

$GLOBALS["lang"]['Support'] = 'Υποστήριξη';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Υποστηριγμένοι τύποι είναι <code>subnet</code>, <code>seed</code> και <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Σουρινάμ';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Νήσοι Σβάλμπαρντ & Γιαν Μάγεν';

$GLOBALS["lang"]['Swaziland'] = 'Σουαζιλάνδη';

$GLOBALS["lang"]['Sweden'] = 'Σουηδία';

$GLOBALS["lang"]['switch_device_id'] = 'Εναλλαγή ID συσκευής';

$GLOBALS["lang"]['Switch Device ID'] = 'Εναλλαγή ID συσκευής';

$GLOBALS["lang"]['switch_port'] = 'Εναλλαγή θύρας';

$GLOBALS["lang"]['Switch Port'] = 'Εναλλαγή θύρας';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Ελβετία, Ελβετική Συνομοσπονδία';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Αραβική Δημοκρατία της Συρίας';

$GLOBALS["lang"]['sysContact'] = 'Επικοινωνία Sys';

$GLOBALS["lang"]['SysContact'] = 'Επικοινωνία Sys';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr (Υπουργείο Υγείας και Προστασίας των Καταναλωτών)';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr (Υπουργείο Υγείας και Προστασίας των Καταναλωτών)';

$GLOBALS["lang"]['sysLocation'] = 'SysΤοποθεσία';

$GLOBALS["lang"]['SysLocation'] = 'SysΤοποθεσία';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'Συστοιχίες';

$GLOBALS["lang"]['SysObjectID'] = 'Συστοιχίες';

$GLOBALS["lang"]['sysUpTime'] = 'Χρόνος SysUp';

$GLOBALS["lang"]['SysUpTime'] = 'Χρόνος SysUp';

$GLOBALS["lang"]['system_component'] = 'Συστατικό συστήματος';

$GLOBALS["lang"]['System Component'] = 'Συστατικό συστήματος';

$GLOBALS["lang"]['System-Area Network'] = 'Δίκτυο συστήματος-περιοχής';

$GLOBALS["lang"]['TX Bitrate'] = 'Ρυθμός bit TX';

$GLOBALS["lang"]['TX Freq'] = 'ΤΧ Freq';

$GLOBALS["lang"]['TX Level'] = 'Επίπεδο TX';

$GLOBALS["lang"]['TX Power'] = 'Ισχύς TX';

$GLOBALS["lang"]['TX Profile'] = 'Προφίλ TX';

$GLOBALS["lang"]['table'] = 'Πίνακας';

$GLOBALS["lang"]['Table'] = 'Πίνακας';

$GLOBALS["lang"]['tag'] = 'Ετικέτα';

$GLOBALS["lang"]['Tag'] = 'Ετικέτα';

$GLOBALS["lang"]['tag_1'] = 'Ετικέτα 1';

$GLOBALS["lang"]['Tag 1'] = 'Ετικέτα 1';

$GLOBALS["lang"]['tag_2'] = 'Ετικέτα 2';

$GLOBALS["lang"]['Tag 2'] = 'Ετικέτα 2';

$GLOBALS["lang"]['tag_3'] = 'Ετικέτα 3';

$GLOBALS["lang"]['Tag 3'] = 'Ετικέτα 3';

$GLOBALS["lang"]['tags'] = 'Ετικέτες';

$GLOBALS["lang"]['Tags'] = 'Ετικέτες';

$GLOBALS["lang"]['Tags :: '] = 'Ετικέτες :: ';

$GLOBALS["lang"]['Taiwan'] = 'Ταϊβάν';

$GLOBALS["lang"]['Tajikistan'] = 'Τατζικιστάν';

$GLOBALS["lang"]['Tanzania'] = 'Τανζανία';

$GLOBALS["lang"]['task'] = 'Εργασία';

$GLOBALS["lang"]['Task'] = 'Εργασία';

$GLOBALS["lang"]['tasks'] = 'Καθήκοντα';

$GLOBALS["lang"]['Tasks'] = 'Καθήκοντα';

$GLOBALS["lang"]['tcp_ports'] = 'Θύρα Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Θύρα Tcp';

$GLOBALS["lang"]['tenant'] = 'Ένοικος';

$GLOBALS["lang"]['Tenant'] = 'Ένοικος';

$GLOBALS["lang"]['ternary'] = 'Τεταρτημόριο';

$GLOBALS["lang"]['Ternary'] = 'Τεταρτημόριο';

$GLOBALS["lang"]['Test 1'] = 'Δοκιμή 1';

$GLOBALS["lang"]['Test 2'] = 'Δοκιμή 2';

$GLOBALS["lang"]['Test 3'] = 'Δοκιμή 3';

$GLOBALS["lang"]['test_minutes'] = 'Πρακτικά δοκιμής';

$GLOBALS["lang"]['Test Minutes'] = 'Πρακτικά δοκιμής';

$GLOBALS["lang"]['test_os'] = 'Δοκιμή Os';

$GLOBALS["lang"]['Test Os'] = 'Δοκιμή Os';

$GLOBALS["lang"]['test_subnet'] = 'Δοκιμή υποδίκτυο';

$GLOBALS["lang"]['Test Subnet'] = 'Δοκιμή υποδίκτυο';

$GLOBALS["lang"]['tests'] = 'Δοκιμές';

$GLOBALS["lang"]['Tests'] = 'Δοκιμές';

$GLOBALS["lang"]['Text'] = 'Κείμενο';

$GLOBALS["lang"]['Thailand'] = 'Ταϊλάνδη';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Το πεδίο Active Directory για την ανάκτηση μιας λίστας υποδικτύων από.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Ο εξυπηρετητής Active Directory για να ανακτήσει μια λίστα υποδικτύων από.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Η αυτόματη μέτρηση αποτυπώνει την απάντηση στην ερώτηση <strong>Μπορεί ένας επιτιθέμενος να αυτοματοποιήσει γεγονότα εκμετάλλευσης για αυτή την ευπάθεια σε πολλούς στόχους;</strong> Βάσει των βημάτων 1-4 της αλυσίδας θανάτου. Αυτά τα βήματα είναι η αναγνώριση, ο οπλισμός, η παράδοση και η εκμετάλλευση (Not Defined, Όχι, Ναι).';

$GLOBALS["lang"]['The CVE identifier.'] = 'Το αναγνωριστικό CVE.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Το Σύννεφο που κατέχει αυτό το αντικείμενο. Συνδέσεις <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Η ομάδα διοικούσε την βασική γραμμή. Συνδέσεις <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'Το ID από τον πίνακα συσκευών (οι συσκευές.όνομα θα εμφανίζονται) του NTU σε αυτό το τέλος της σύνδεσης. Συνδέσεις <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Το ID από την εισαγόμενη πολιτική αναφοράς.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Η ταυτότητα από τον πίνακα των τοποθεσιών (οι τοποθεσίες.όνομα θα εμφανίζονται) αυτής της κατάληξης της σύνδεσης. Συνδέσεις <code>locations.id</code>. Η τοποθεσία Α είναι συνήθως η <code>FROM</code> τοποθεσία.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Η ταυτότητα από τον πίνακα των τοποθεσιών (οι τοποθεσίες.όνομα θα εμφανίζονται) αυτής της κατάληξης της σύνδεσης. Συνδέσεις <code>locations.id</code>. Η θέση Β είναι συνήθως η <code>TO</code> τοποθεσία.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Το αναγνωριστικό της συνδεδεμένης συσκευής (εάν υπάρχει). Συνδέσεις <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Η ταυτότητα της σχετικής ανακάλυψης. Σύνδεση με <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Το ID του στοιχείου του σχετικού τύπου.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Η ταυτότητα αυτού του οργανισμού. Σύνδεση με <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Η ταυτότητα που παρέχεται από τον πάροχο.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Η ταυτότητα ανακτήθηκε από μια ανακάλυψη του Cloud.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Η διεύθυνση IP αυτού του συλλέκτη που χρησιμοποιείται για την επικοινωνία με τον εξυπηρετητή.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'Η IP της συσκευής για να ξεκινήσει μια ανακάλυψη σπόρων με.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'Η IP της εξωτερικής διεπαφής.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'Η IP της εσωτερικής διεπαφής.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'Ο ISP ή το Telco παρέχει αυτή τη σύνδεση.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Το ρεκόρ του JSON από τον Μίτρε.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Το αρχείο JSON από την NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Το LDAP OU αυτού του χρήστη (αν χρησιμοποιείται LDAP).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Η τοποθεσία που περιέχει αυτό το δίκτυο. Συνδέσεις <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Το καθεστώς βάσης της NVD.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Η προεπιλεγμένη χρονική στιγμή του Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Το λειτουργικό σύστημα αυτό το πακέτο πρέπει να αναφέρεται κατά. Κενό για όλους. Χρησιμοποίησε το ποσοστό % ως μπαλαντέρ. Θα δοκιμαστεί κατά os_group, os_family και os_name με αυτή τη σειρά.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Το Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Η ταυτότητα Open-AudIT του συνδεδεμένου σύννεφου. Συνδέσεις <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Το Open-Aud Ο κωδικός του εξυπηρετητή IT ήταν exucted μέσα σε αυτό το αρχείο.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Το Open-Aud Ο κωδικός εξυπηρετητή IT ήταν exucted μέσα σε αυτή τη λειτουργία.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Ο Οργανισμός που κατέχει αυτό το στοιχείο. Συνδέσεις <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Ο αναγνωριστικός διεργασίας της εκτελούμενης σχετικής ανακάλυψης.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Το RU ποζιτόν της κορυφής αυτής της συσκευής.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Η χορδή της κοινότητας SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'Η φράση πρόσβασης ταυτοποίησης SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Το πρωτόκολλο ταυτοποίησης SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'Η φράση SNMP v3 Privacy Pass.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Το SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Το επίπεδο ασφαλείας SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Το SNMP v3 όνομα ασφαλείας.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Το SNMPv3 πλαίσιο Engine ID (προαιρετικό).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Το όνομα πλαισίου SNMPv3 (προαιρετικό).';

$GLOBALS["lang"]['The URL of the external system.'] = 'Το URL του εξωτερικού συστήματος.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Το URL του Open-AudIT σας Εξυπηρετητής στον οποίο θα αναφερθεί αυτός ο Συλλέκτης (δεν θα ακολουθήσει slap).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Το URL τα σενάρια ελέγχου θα πρέπει να υποβάλουν το αποτέλεσμα τους.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Το πραγματικό πλήρες όνομα αυτού του χρήστη.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Η σχετική βάση. Συνδέσεις <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Η σχετική ανακάλυψη (εφόσον απαιτείται). Συνδέσεις <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Το χαρακτηριστικό προς δοκιμή (από το <code>devices</code> τραπέζι).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Το χαρακτηριστικό δοκιμής (πρέπει να ταιριάζει με ένα εξωτερικό όνομα πεδίου από κάτω).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Το σενάριο ελέγχου πάνω στο οποίο θα βασίσετε τις παραμετροποιήσεις σας.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Η βασική διαδρομή από την οποία να αναζητήσετε τους χρήστες.';

$GLOBALS["lang"]['The benchmark type.'] = 'Ο τύπος του δείκτη αναφοράς.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Το κτίριο στο ράφι βρίσκεται.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Ο υπολογισμένος αριθμός των συσκευών που θα δημιουργηθούν εξωτερικά.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Ο υπολογισμένος αριθμός συσκευών που θα δημιουργηθούν στο Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Το εσωτερικό IP συλλέκτη χρησιμοποιείται όταν τρέχει μια ανακάλυψη.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Το όνομα της στήλης από τον ξένο πίνακα. Θα πρέπει να είναι ένα από: τάξη, περιβάλλον, κατάσταση, τύπος ή menu_κατηγορία.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Η εντολή που εκτελέστηκε επί της συσκευής προορισμού ή του κώδικα εξυπηρετητή Open-AudIT που εκτελέστηκε κατά τη διάρκεια της ανακάλυψης.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Η διαμόρφωση της συστάδας σας μπορεί να είναι: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> ή κενό.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Ο κωδικός αναγνώρισης. Εάν τα διαπιστευτήρια είναι ένα κλειδί SSH, αυτός είναι ο κωδικός πρόσβασης που χρησιμοποιείται για να ξεκλειδώσετε το κλειδί και είναι προαιρετικό.';

$GLOBALS["lang"]['The credentials username.'] = 'Τα διαπιστευτήρια όνομα χρήστη.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Η τρέχουσα κατάσταση του Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Η τρέχουσα κατάσταση της ανακάλυψης.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Το ταμπλό που θα εμφανιστεί από προεπιλογή για αυτόν τον χρήστη. Συνδέσεις <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Η έκδοση της βάσης δεδομένων και η έκδοση ιστού είναι ασυνεπείς.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Η ημερομηνία λήξης της άδειας.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Η ημερομηνία διακοπής του λογισμικού από τον κατασκευαστή. Συνήθως αντικαθίσταται από μια νεότερη έκδοση. Η συντήρηση μπορεί να είναι ακόμα διαθέσιμη.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Η ημερομηνία που το λογισμικό δεν λαμβάνει πλέον ενημερώσεις και διακόπτεται αποτελεσματικά εντελώς. Η συντήρηση διακόπτεται.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Η ημερομηνία που αυτό το στοιχείο άλλαξε ή προστέθηκε (διαβάστε μόνο). ΣΗΜΕΙΩΣΗ - Αυτή είναι η χρονοσφραγίδα από τον εξυπηρετητή.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Η ημερομηνία/ώρα που δημιουργήθηκε αυτό το αποτέλεσμα.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Η ημέρα του μήνα κατά την οποία αυτή η εργασία θα πρέπει να εκτελέσει (* για κάθε ημέρα).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Η ημέρα της εβδομάδας κατά την οποία αυτή η εργασία θα πρέπει να εκτελέσει (* για κάθε ημέρα).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Η προεπιλεγμένη γλώσσα που αποδίδεται σε κάθε χρήστη που δημιουργείται με αυτή τη μέθοδο.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Η συσκευή πρέπει να ανταποκρίνεται σε ένα πινγκ Nmap πριν θεωρηθεί online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Η συσκευή μέσα στο Open-AudIT. Συνδέσεις <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Ο άμεσος σύνδεσμος για το σενάριο είναι';

$GLOBALS["lang"]['The email address of the reciever'] = 'Η διεύθυνση ηλεκτρονικού ταχυδρομείου του ανταποκριτή';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Το δυαδικό της επιχείρησης από το FirstWave απαιτείται για μια άδεια. Παρακαλώ κατεβάστε το Open-AudIT από';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Το σύνολο της σχετικής βάσης του αποτελέσματος αυτού είναι από.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Η εξωτερικά αναφερόμενη τοποθεσία ID. Συνήθως κατοικείται από ελέγχους Cloud.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Την πρώτη φορά που το Open-AudIT ανέκτησε λεπτομέρειες αυτής της συσκευής.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Το πάτωμα στο ράφι βρίσκεται.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Ο ξένος πίνακας αναφοράς. Θα πρέπει να είναι μία από: συσκευές, τοποθεσίες, οργ ή ερωτήματα.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Η μορφή που χρησιμοποιείται για την έξοδο προς αποστολή ηλεκτρονικού ταχυδρομείου.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Η στήλη με τα πλήρως προσόντα πάνω στην οποία θα ομαδοποιηθεί. ΣΗΜΕΙΩΣΗ: Όταν ο τύπος = κυκλοφορία, αυτό αντιπροσωπεύει το κόκκινο id ερώτημα.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Ο πλήρως καταρτισμένος πίνακας.στήλη. Μπορούν να παρέχονται πολλαπλάσια, χωρισμένα με κόμμα (χωρίς κενά).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Το παραγόμενο ερώτημα SQL για τη δοκιμή αυτής της ευπάθειας. Αυτό το πεδίο μπορεί να επεξεργαστεί για να διορθώσει το ερώτημα όπως απαιτείται.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Η ομάδα των συσκευών στις οποίες ήταν σε λειτουργία η γραμμή βάσης.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Η ομάδα που παρέχει μια λίστα συσκευών για την ενσωμάτωση. Συνδέσεις <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Η ώρα της ημέρας κατά την οποία αυτή η εργασία θα πρέπει να εκτελέσει (* για κάθε ώρα).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Η ταυτότητα της συνδεδεμένης συσκευής. Συνδέσεις <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Η στήλη αναγνώρισης (ακεραιωτής) στη βάση δεδομένων (διαβάστε μόνο).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Η σημασία αυτής της βάσης (δεν έχει χρησιμοποιηθεί ακόμη).';

$GLOBALS["lang"]['The integer of severity.'] = 'Ο ακέραιος της σοβαρότητας.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Η διεύθυνση IP της μεθόδου Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Η γλώσσα για τη μετάφραση της διεπαφής ιστού για το χρήστη.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Η τελευταία ημερομηνία και ώρα που εκτελέστηκε αυτό το στοιχείο (διαβάστε μόνο).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Την τελευταία φορά που το Open-AudIT ανακάλυψε λεπτομέρειες αυτής της συσκευής.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Την τελευταία φορά που εκτελέστηκαν αυτά τα κριτήρια.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Την τελευταία φορά που έγινε αυτή η ενσωμάτωση.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Ο αριθμός γραμμής που εκχωρείται από τον πάροχο στη γραμμή στο τέλος της σύνδεσης.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Η τοποθεσία στο ράφι βρίσκεται. Συνδέσεις <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Η διεύθυνση της τοποθεσίας.';

$GLOBALS["lang"]['The locations area.'] = 'Η περιοχή των τοποθεσιών.';

$GLOBALS["lang"]['The locations city.'] = 'Οι τοποθεσίες της πόλης.';

$GLOBALS["lang"]['The locations country.'] = 'Οι τοποθεσίες της χώρας.';

$GLOBALS["lang"]['The locations district.'] = 'Η περιοχή των τοποθεσιών.';

$GLOBALS["lang"]['The locations latitude.'] = 'Οι τοποθεσίες γεωγραφικό πλάτος.';

$GLOBALS["lang"]['The locations level.'] = 'Το επίπεδο των τοποθεσιών.';

$GLOBALS["lang"]['The locations longitude.'] = 'Οι τοποθεσίες γεωγραφικό μήκος.';

$GLOBALS["lang"]['The locations phone.'] = 'Οι τοποθεσίες τηλεφωνούν.';

$GLOBALS["lang"]['The locations postcode.'] = 'Οι τοποθεσίες ταχυδρομικός κώδικας.';

$GLOBALS["lang"]['The locations region.'] = 'Οι περιοχές.';

$GLOBALS["lang"]['The locations room.'] = 'Το δωμάτιο των τοποθεσιών.';

$GLOBALS["lang"]['The locations state.'] = 'Οι τοποθεσίες δηλώνουν.';

$GLOBALS["lang"]['The locations suburb.'] = 'Οι τοποθεσίες προάστιο.';

$GLOBALS["lang"]['The locations suite.'] = 'Η σουίτα των τοποθεσιών.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Το μέγιστο φυσικό βάρος (σε KGs) αυτό το ράφι μπορεί να κρατήσει.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Το μέγιστο σύνολο BTUs αυτό το ράφι έχει βαθμολογηθεί για.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Το λεπτό της ώρας που η εργασία αυτή θα πρέπει να εκτελέσει (* για κάθε λεπτό).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Ο μήνας του έτους κατά τον οποίο η εργασία αυτή πρέπει να εκτελείται (* για κάθε μήνα).';

$GLOBALS["lang"]['The name given to this item.'] = 'Το όνομα που δίνεται σε αυτό το στοιχείο.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Το όνομα που δίνεται σε αυτό το στοιχείο. Ιδανικά θα πρέπει να είναι μοναδικό.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Το όνομα που δόθηκε σε αυτόν τον χρήστη (χρησιμοποιήθηκε για σύνδεση). Ιδανικά θα πρέπει να είναι μοναδικό.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Το όνομα του σχετικού νέφους (εάν απαιτείται).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Το όνομα του πακέτου λογισμικού, όπως ελέγχεται από το Open-AudIT. Χρησιμοποίησε το ποσοστό % ως μπαλαντέρ.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Το όνομα του χρήστη που τελευταία άλλαξε ή πρόσθεσε αυτό το στοιχείο (διαβάστε μόνο).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Το όνομα που παρέχεται από τον πάροχο.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Το δίκτυο με τη μορφή 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Το δίκτυο υποδικτύων για την εκτέλεση της ανακάλυψης.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Ο αριθμός των ΕΣ που καταλαμβάνει αυτή η συσκευή.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Ο αριθμός των σχετικών θέσεων. Συνδέσεις <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Ο αριθμός των συνδεδεμένων δικτύων. Συνδέσεις <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Ο αριθμός των ελεγχόμενων συσκευών σε αυτό το σύννεφο. Συνδέσεις <code>devices.cloud_id</code> και <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Ο αριθμός των τρωτών σημείων κρίσιμης σοβαρότητας που κατέχει το FirstWave (όχι στη βάση δεδομένων σας).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Ο αριθμός των συσκευών που βρέθηκαν από αυτή την ανακάλυψη.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Ο αριθμός των συσκευών της συνδεδεμένης ομάδας.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Ο αριθμός των συσκευών σε αυτό το σύννεφο με μια κατάσταση λειτουργίας. Συνδέσεις <code>devices.cloud_id</code> και <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Ο αριθμός των συσκευών σε αυτό το σύννεφο με μια κατάσταση σταμάτησε. Συνδέσεις <code>devices.cloud_id</code> και <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Ο αριθμός των συσκευών σε αυτό το σύννεφο. Συνδέσεις <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Ο αριθμός των συσκευών που θα εκτελεστεί αυτό το σημείο αναφοράς. Που προέρχονται από <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Ο αριθμός των συσκευών για τον περιορισμό αυτής της ανακάλυψης.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Ο αριθμός των υψηλής σοβαρότητας τρωτά σημεία που κατέχει η FirstWave (όχι στη βάση δεδομένων σας).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Ο αριθμός των τρωτά σημεία χαμηλής σοβαρότητας που κατέχει το FirstWave (όχι στη βάση δεδομένων σας).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Ο αριθμός των τρωτά σημεία μέσης σοβαρότητας που κατέχει η FirstWave (όχι στη βάση δεδομένων σας).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Ο αριθμός των αγορασμένων αδειών.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Ο αριθμός των δευτερολέπτων για να προσπαθήσουμε να επικοινωνήσουμε με το στόχο IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Ο αριθμός των τρωτών σημείων χωρίς σοβαρότητα που κατέχει το FirstWave (όχι στη βάση δεδομένων σας).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Η προαιρετική δευτερεύουσα στήλη. ΣΗΜΕΙΩΣΗ: Όταν ο τύπος = κυκλοφορία, αυτό αντιπροσωπεύει το κίτρινο id ερώτημα.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Η προαιρετική τρίτη στήλη. ΣΗΜΕΙΩΣΗ: Όταν ο τύπος = κυκλοφορία, αυτό αντιπροσωπεύει το πράσινο id ερώτημα.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Ο προσανατολισμός αυτής της συσκευής.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Ο κωδικός πρόσβασης για το χαρακτηριστικό dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Ο κωδικός πρόσβασης που χρησιμοποιείται για την πρόσβαση στο εξωτερικό σύστημα.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Η διαδρομή προς το αρχείο ή τον κατάλογο.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Η διαδρομή προς το αρχείο ή τον κατάλογο. Οι κατάλογοι θα πρέπει να τελειώνουν με ένα ίχνος.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Το φυσικό βάθος (σε CMs) της σχάρας.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Το φυσικό ύψος (σε CMs) της σχάρας.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Το φυσικό βάρος (σε KGs) της σχάρας προς το παρόν.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Το φυσικό βάρος (σε KGs) της σχάρας όταν είναι άδειο.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Το φυσικό πλάτος (σε CMs) της σχάρας.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Το λοβό (αν υπάρχει) που αυτό το ράφι είναι μέρος του.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Το κύκλωμα ρεύματος που συνδέεται με αυτό το ράφι.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Ο κύριος πίνακας βάσης δεδομένων πάνω στον οποίο θα βασιστεί αυτό το γραφικό συστατικό.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Το αναγνωριστικό διεργασίας αυτού του στοιχείου ουράς.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Η διαδικασία που χρησιμοποιήθηκε τελευταία για την ανάκτηση λεπτομερειών σχετικά με τη συσκευή';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Το ερώτημα που παρέχει μια λίστα συσκευών για την ενσωμάτωση. Συνδέσεις <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Ο αριθμός του περιουσιακού στοιχείου.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Η ταμπέλα με τα λεφτά.';

$GLOBALS["lang"]['The rack bar code.'] = 'Ο κωδικός του μπαρ.';

$GLOBALS["lang"]['The rack model.'] = 'Το μοντέλο του σχάρα.';

$GLOBALS["lang"]['The rack serial.'] = 'Το σειριακό ράφι.';

$GLOBALS["lang"]['The rack series.'] = 'Η σειρά με τα ράφια.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Το ράφι που βρίσκεται αυτή η συσκευή. Συνδέσεις <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Η συνιστώμενη διαδικασία αντιμετώπισης και καθορισμού των διαπιστωθέντων τρωτών σημείων ασφαλείας. Αυτό συνήθως περιλαμβάνει την εφαρμογή patches, ενημερώσεις, ή άλλα μέτρα για την εξάλειψη του κινδύνου που τίθεται από τα τρωτά σημεία.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Η κανονική σημειογραφία τομέα του καταλόγου σας. Π.χ. <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'Το αποτέλεσμα της εντολής.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Το δωμάτιο στο οποίο βρίσκεται το ράφι.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Η σειρά στο ράφι βρίσκεται.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Το μυστικό κλειδί που χρησιμοποιείται σε συνδυασμό με το κλειδί AWS EC2 API σας.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Η ημερομηνία λήξης της ζωής του λογισμικού.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Η ημερομηνία λήξης της χρήσης λογισμικού.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Η συγκεκριμένη στήλη βάσης δεδομένων από τον καθορισμένο πίνακα βάσης δεδομένων.';

$GLOBALS["lang"]['The specific database table.'] = 'Ο συγκεκριμένος πίνακας δεδομένων.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Οι τυπικές επιλογές συγχρονισμού Nmap. Συνήθως χρησιμοποιούμε το -T4 (Επιθετικό) καθώς αυτό συνιστάται για μια αξιοπρεπή ευρυζωνική ή ethernet σύνδεση.';

$GLOBALS["lang"]['The status of this integration'] = 'Η κατάσταση αυτής της ολοκλήρωσης';

$GLOBALS["lang"]['The status of this queued item.'] = 'Η κατάσταση αυτού του αντικειμένου σε αναμονή.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Ο στόχος IP αυτή η καταχώρηση καταγραφής referers σε (αν υπάρχει).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Το πρότυπο για τον σύνδεσμο που θα δημιουργηθεί ανά γραμμή αποτελέσματος.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Το κείμενο για το κάτω μέρος του χάρτη σε ένα διάγραμμα γραμμής (μόνο).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Το κείμενο που εμφανίζεται.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Η χρονοσφραγίδα μετά την οποία, αυτή η εργασία θα πρέπει να τρέξει. Για παράδειγμα, εκτελέστε μια εργασία μετά την 1η Ιουνίου 2017 στις 10 π.μ., που να <code>2017-06-01 09:59:00</code>. Η τιμή αυτή πρέπει να είναι μηδενική (δηλαδή 09, όχι 9). Προκαθορισμένες τιμές <code>2000-01-01 00:00:00</code> που σημαίνει εξ ορισμού, μια προγραμματισμένη εργασία θα εκτελεστεί στον επόμενο προγραμματισμένο χρόνο εκτέλεσης.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Οι κορυφές 10, 100 ή 1000 (ή καμία) θύρες TCP που χρησιμοποιούνται συνήθως σύμφωνα με το Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Τα top 10, 100 ή 1000 (ή κανένα) UDP λιμάνια συνήθως σε χρήση σύμφωνα με το Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Η συνολική έξοδος BTU από αυτό το ράφι.';

$GLOBALS["lang"]['The type of device.'] = 'Ο τύπος της συσκευής.';

$GLOBALS["lang"]['The type of organisation.'] = 'Ο τύπος της οργάνωσης.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Ο τύπος της σχάρας (υπολογιστής, ισχύς, δίκτυο, κλπ).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Το είδος της εργασίας που πρέπει να εκτελέσετε. Ένα από τα εξής: βάση, σημείο αναφοράς, ανακάλυψη νεφών, ανακάλυψη, ενσωμάτωση, αναφορά, ερώτημα.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Ο τύπος της ενσωμάτωσης (συνήθως πήρε το όνομά του από το εξωτερικό σύστημα).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Το μοναδικό αναγνωριστικό αυτού του εξυπηρετητή.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Ο λογαριασμός χρήστη αυτός ο συλλέκτης χρησιμοποιεί. Συνδέσεις <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Το όνομα χρήστη που χρησιμοποιείται για την πρόσβαση στο εξωτερικό σύστημα.';

$GLOBALS["lang"]['The users email address.'] = 'Η διεύθυνση ηλεκτρονικού ταχυδρομείου των χρηστών.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Οι συνήθεις ώρες λειτουργίας σε αυτό το site.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Η τιμή που αποδίδεται στο στοιχείο.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Η τιμή που αποθηκεύεται για το συγκεκριμένο στοιχείο.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Το όνομα του πωλητή σύμφωνα με τις εγγραφές CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Ο πωλητής που πήρε από το CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Ο κατάλογος ιστού στον υπολογιστή που εγκαθίσταται το Open-AudIT (απαιτεί μια οριζοντίωση).';

$GLOBALS["lang"]['The widget at position '] = 'Το γραφικό συστατικό στη θέση ';

$GLOBALS["lang"]['The width of this device.'] = 'Το πλάτος αυτής της συσκευής.';

$GLOBALS["lang"]['Then'] = 'Τότε...';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Αυτό το CVE θα ανακτηθεί και θα αντικαταστήσει το υπάρχον CVE εάν υπάρχει.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Αυτή η ιδιότητα αποθηκεύεται ως αντικείμενο JSON. Είναι ο κατάλογος όλων των συλλογών και περιέχει το όνομα συλλογής μαζί με <code>c</code>, <code>r</code>, <code>u</code> και, ή <code>d</code> που αντιπροσωπεύουν δημιουργία, ανάγνωση, ενημέρωση και διαγραφή. Αυτές είναι οι ενέργειες που μπορεί να εκτελέσει ένας χρήστης σε αντικείμενα από τη συγκεκριμένη συλλογή.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Αυτό μπορεί να είναι είτε ένα varchar (ένα πεδίο κειμένου), μια λίστα (μια λίστα τιμών που μπορεί να επιλεγεί) είτε μια ημερομηνία.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Αυτός ο συλλέκτης παγκοσμίως μοναδικό αναγνωριστικό.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Αυτή η περιγραφή είναι αυτόματη-πληθυσμός και θα πρέπει ιδανικά να μείνει όπως-είναι.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Αυτό το χαρακτηριστικό απαιτεί μια επαγγελματική ή μια άδεια Enterprise.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Αυτή είναι γενικά η κύρια στήλη, εκτός εάν άλλως ρυθμιστεί. ΣΗΜΕΙΩΣΗ: Όταν ο τύπος = κυκλοφορία, αυτό αντιπροσωπεύει το δευτερεύον κείμενο.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Αυτό το στοιχείο πρέπει να ταιριάζει με την τιμή του χαρακτηριστικού που επιλέχθηκε ή περιέχει το ID του ερωτήματος που θα χρησιμοποιηθεί.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Αυτό το στοιχείο πρέπει να ταιριάζει με την τιμή του επιλεγμένου χαρακτηριστικού.';

$GLOBALS["lang"]['This license expires on'] = 'Αυτή η άδεια λήγει στις';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Αυτό πρέπει να ρυθμιστεί είτε στο 1 είτε στο ύψος της σχάρας.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Αυτό θα γίνει αυτόματα.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Αυτό θα επιβραδύνει σημαντικά την σάρωση ανακάλυψης.';

$GLOBALS["lang"]['Thursday'] = 'Πέμπτη';

$GLOBALS["lang"]['time_caption'] = 'Τίτλος χρόνου';

$GLOBALS["lang"]['Time Caption'] = 'Τίτλος χρόνου';

$GLOBALS["lang"]['time_daylight'] = 'Χρονικό φως';

$GLOBALS["lang"]['Time Daylight'] = 'Χρονικό φως';

$GLOBALS["lang"]['Time to Execute'] = 'Ώρα για εκτέλεση';

$GLOBALS["lang"]['timeout'] = 'Χρονικό όριο';

$GLOBALS["lang"]['Timeout'] = 'Χρονικό όριο';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Χρονικό όριο ανά στόχο (δευτερεύοντα)';

$GLOBALS["lang"]['Timesatamp'] = 'Χρονοσφραγίδα';

$GLOBALS["lang"]['Timestamp'] = 'Χρονοσφραγίδα';

$GLOBALS["lang"]['timing'] = 'Χρόνος';

$GLOBALS["lang"]['Timing'] = 'Χρόνος';

$GLOBALS["lang"]['Timor-Leste'] = 'Τιμόρ-Λέστε';

$GLOBALS["lang"]['Title'] = 'Τίτλος';

$GLOBALS["lang"]['Togo'] = 'Τόγκο';

$GLOBALS["lang"]['Tokelau'] = 'Τοκελάου';

$GLOBALS["lang"]['Tonga'] = 'Τόνγκα';

$GLOBALS["lang"]['toolbar_style'] = 'Στυλ γραμμής εργαλείων';

$GLOBALS["lang"]['Toolbar Style'] = 'Στυλ γραμμής εργαλείων';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Κορυφαίες θύρες TCP Nmap';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Κορυφαίες θύρες UDP Nmap';

$GLOBALS["lang"]['Traditional Chinese'] = 'Παραδοσιακοί Κινέζοι';

$GLOBALS["lang"]['Traffic Light'] = 'Φως κίνησης';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Τρινιδάδ και Τομπάγκο';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Αντιμετώπιση προβλημάτων σύνδεσης LDAP';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Δοκιμάστε όλα τα τελευταία χαρακτηριστικά με άδεια χρήσης δωρεάν 100 συσκευών του Open-AudIT Enterprise. Παρακαλώ διαβάστε το < a href=\""';

$GLOBALS["lang"]['Tuesday'] = 'Τρίτη';

$GLOBALS["lang"]['Tunisia'] = 'Τυνησία';

$GLOBALS["lang"]['Turkey'] = 'Τουρκία';

$GLOBALS["lang"]['Turkmenistan'] = 'Τουρκμενιστάν';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Νήσοι Τερκς και Κάικος';

$GLOBALS["lang"]['Tuvalu'] = 'Τουβαλού';

$GLOBALS["lang"]['tx_bitrate'] = 'Ρυθμός bit Tx';

$GLOBALS["lang"]['Tx Bitrate'] = 'Ρυθμός bit Tx';

$GLOBALS["lang"]['tx_freq'] = 'Tx Φρεκ';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Φρεκ';

$GLOBALS["lang"]['tx_level'] = 'Επίπεδο Tx';

$GLOBALS["lang"]['Tx Level'] = 'Επίπεδο Tx';

$GLOBALS["lang"]['tx_power'] = 'Ισχύς Tx';

$GLOBALS["lang"]['Tx Power'] = 'Ισχύς Tx';

$GLOBALS["lang"]['tx_profile'] = 'Προφίλ Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Προφίλ Tx';

$GLOBALS["lang"]['type'] = 'Τύπος';

$GLOBALS["lang"]['Type'] = 'Τύπος';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Λιμάνια Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Λιμάνια Udp';

$GLOBALS["lang"]['Uganda'] = 'Ουγκάντα';

$GLOBALS["lang"]['Ukraine'] = 'Ουκρανία';

$GLOBALS["lang"]['uninstall'] = 'Αποεγκατάσταση';

$GLOBALS["lang"]['Uninstall'] = 'Αποεγκατάσταση';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Απεγκαταστήστε τον πράκτορα';

$GLOBALS["lang"]['United Arab Emirates'] = 'Ηνωμένα Αραβικά Εμιράτα';

$GLOBALS["lang"]['United Kingdom'] = 'Ηνωμένο Βασίλειο';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Ηνωμένες Πολιτείες';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Ηνωμένες Πολιτείες';

$GLOBALS["lang"]['United States of America'] = 'Ηνωμένες Πολιτείες της Αμερικής';

$GLOBALS["lang"]['Unknown'] = 'Άγνωστο';

$GLOBALS["lang"]['unlock_pin'] = 'Ξεκλείδωμα καρφίτσας';

$GLOBALS["lang"]['Unlock Pin'] = 'Ξεκλείδωμα καρφίτσας';

$GLOBALS["lang"]['Unscheduled'] = 'Μη προγραμματισμένο';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Χωρίς χρήση όπως στο 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Χωρίς χρήση.';

$GLOBALS["lang"]['Update'] = 'Ενημέρωση';

$GLOBALS["lang"]['update_external_count'] = 'Ενημέρωση αριθμού εξωτερικών';

$GLOBALS["lang"]['Update External Count'] = 'Ενημέρωση αριθμού εξωτερικών';

$GLOBALS["lang"]['update_external_from_internal'] = 'Ενημέρωση εξωτερικών από το εσωτερικό';

$GLOBALS["lang"]['Update External From Internal'] = 'Ενημέρωση εξωτερικών από το εσωτερικό';

$GLOBALS["lang"]['update_internal_count'] = 'Ενημέρωση εσωτερικού αριθμού';

$GLOBALS["lang"]['Update Internal Count'] = 'Ενημέρωση εσωτερικού αριθμού';

$GLOBALS["lang"]['update_internal_from_external'] = 'Ενημέρωση Εσωτερικού από Εξωτερικό';

$GLOBALS["lang"]['Update Internal From External'] = 'Ενημέρωση Εσωτερικού από Εξωτερικό';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Ενημέρωση συσκευών NMIS από Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Ενημέρωση Open-Audit Συσκευές από ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Ενημέρωση Open-Audit Συσκευές από το NMIS';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Ενημέρωση κάθε φορά ανακάλυψη έχει εκτελεστεί με IPs ανιχνεύονται να ανταποκρίνονται.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Ενημέρωση κάθε φορά ανακάλυψη έχει εκτελεστεί με IPs που έχουν σαρωθεί από Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Ενημέρωση κάθε φορά ανακάλυψη έχει εκτελεστεί με συσκευές που μπορέσαμε να ελέγξουμε.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Ενημέρωση κάθε φορά ανακάλυψη έχει εκτελεστεί με συσκευές ήμασταν σε θέση να διερευνήσει.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Ενημέρωση κάθε φορά που η ανακάλυψη έχει εκτελεστεί.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Ενημέρωση κάθε φορά που η ανακάλυψη έχει εκτελεστεί.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Ενημέρωση κάθε φορά που η ανακάλυψη έχει ολοκληρώσει την εκτέλεση.';

$GLOBALS["lang"]['Updating'] = 'Ενημέρωση';

$GLOBALS["lang"]['Upgrade'] = 'Αναβάθμιση';

$GLOBALS["lang"]['Upload an audit result file'] = 'Αποστολή αρχείου αποτελέσματος ελέγχου';

$GLOBALS["lang"]['Upper Case'] = 'Άνω περίπτωση';

$GLOBALS["lang"]['uptime'] = 'Χρόνος αναμονής';

$GLOBALS["lang"]['Uptime'] = 'Χρόνος αναμονής';

$GLOBALS["lang"]['url'] = 'Ουρλ';

$GLOBALS["lang"]['Url'] = 'Ουρλ';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Ουρουγουάη, Ανατολική Δημοκρατία';

$GLOBALS["lang"]['usb'] = 'Μύδια';

$GLOBALS["lang"]['Usb'] = 'Μύδια';

$GLOBALS["lang"]['use'] = 'Χρήση';

$GLOBALS["lang"]['Use'] = 'Χρήση';

$GLOBALS["lang"]['use_authentication'] = 'Χρήση ταυτοποίησης';

$GLOBALS["lang"]['Use Authentication'] = 'Χρήση ταυτοποίησης';

$GLOBALS["lang"]['use_authorisation'] = 'Άδεια χρήσης';

$GLOBALS["lang"]['Use Authorisation'] = 'Άδεια χρήσης';

$GLOBALS["lang"]['Use SNMP'] = 'Χρήση SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Χρήση SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Χρήση ασφαλούς (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Χρήση ανίχνευσης έκδοσης υπηρεσιών';

$GLOBALS["lang"]['Use WMI'] = 'Χρήση WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Χρήση για ταυτοποίηση';

$GLOBALS["lang"]['Use for Roles'] = 'Χρήση για ρόλους';

$GLOBALS["lang"]['used'] = 'Χρήση';

$GLOBALS["lang"]['Used'] = 'Χρήση';

$GLOBALS["lang"]['used_count'] = 'Αριθμός χρήσης';

$GLOBALS["lang"]['Used Count'] = 'Αριθμός χρήσης';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Χρησιμοποιείται μόνο από το OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Χρησιμοποιείται εσωτερικά κατά την ανακάλυψη μιας μόνο συσκευής.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Χρησιμοποιείται εσωτερικά κατά την ανακάλυψη μιας μόνο συσκευής. Συνδέσεις <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Χρησιμοποιείται όταν οι εξυπηρετητές LDAP έχουν ρυθμιστεί για να γεμίσουν τις λεπτομέρειες των χρηστών - αυτό περιλαμβάνει τους οργανισμούς στους οποίους έχουν πρόσβαση. Αν ένας χρήστης είναι σε αυτή την ομάδα LDAP, του ανατίθεται αυτός ο οργανισμός.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Χρησιμοποιείται όταν οι εξυπηρετητές LDAP έχουν ρυθμιστεί για να γεμίσουν τις λεπτομέρειες των χρηστών - αυτό περιλαμβάνει τους ρόλους που τους ανατίθενται. Εάν ένας χρήστης είναι σε αυτή την ομάδα LDAP, τους ανατίθεται αυτός ο ρόλος.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Χρησιμοποιείται κατά την αναζήτηση του OpenLDAP για να ταιριάξει ένα χρήστη uid με ένα μέλος ομάδων. Προκαθορισμένο <code>memberUid</code>. Χρησιμοποιείται μόνο από το OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Χρησιμοποιείται με εφαρμογές Integrations και FirstWave παρακολούθησης.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Χρησιμοποιείται με εφαρμογές Integrations και FirstWave παρακολούθησης. Ρυθμίστε σε y αν λειτουργεί SNMP ανιχνεύεται με την ανακάλυψη.';

$GLOBALS["lang"]['user'] = 'Χρήστης';

$GLOBALS["lang"]['User'] = 'Χρήστης';

$GLOBALS["lang"]['User DN'] = 'Χρήστης DN';

$GLOBALS["lang"]['user_group'] = 'Ομάδα χρηστών';

$GLOBALS["lang"]['User Group'] = 'Ομάδα χρηστών';

$GLOBALS["lang"]['user_id'] = 'ID χρήστη';

$GLOBALS["lang"]['User ID'] = 'ID χρήστη';

$GLOBALS["lang"]['user_interaction'] = 'Αλληλεπίδραση χρήστη';

$GLOBALS["lang"]['User Interaction'] = 'Αλληλεπίδραση χρήστη';

$GLOBALS["lang"]['User Membership Attribute'] = 'Χαρακτηριστικά ιδιότητας μέλους χρήστη';

$GLOBALS["lang"]['user_name'] = 'Όνομα χρήστη';

$GLOBALS["lang"]['User Name'] = 'Όνομα χρήστη';

$GLOBALS["lang"]['User Policies'] = 'Πολιτικές χρηστών';

$GLOBALS["lang"]['Username'] = 'Όνομα χρήστη';

$GLOBALS["lang"]['username'] = 'Όνομα χρήστη';

$GLOBALS["lang"]['users'] = 'Χρήστες';

$GLOBALS["lang"]['Users'] = 'Χρήστες';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Χρήστες, Ρόλοι και Οργανισμοί';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Χρήση Entra για Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Χρήση OKTA για Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Συνήθως Mb/s, από την τοποθεσία A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Συνήθως Mb/s, από την τοποθεσία B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Συνήθως Mb/s, στην τοποθεσία A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Συνήθως Mb/s, στην τοποθεσία B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Ουζμπεκιστάν';

$GLOBALS["lang"]['VLAN'] = 'ΒΛΑΝ';

$GLOBALS["lang"]['VLAN ID'] = 'Ταυτότητα VLAN';

$GLOBALS["lang"]['valid_from'] = 'Ισχύει από';

$GLOBALS["lang"]['Valid From'] = 'Ισχύει από';

$GLOBALS["lang"]['valid_from_raw'] = 'Ισχύει από ακατέργαστο';

$GLOBALS["lang"]['Valid From Raw'] = 'Ισχύει από ακατέργαστο';

$GLOBALS["lang"]['valid_to'] = 'Ισχύει για';

$GLOBALS["lang"]['Valid To'] = 'Ισχύει για';

$GLOBALS["lang"]['valid_to_raw'] = 'Ισχύει για ωμό';

$GLOBALS["lang"]['Valid To Raw'] = 'Ισχύει για ωμό';

$GLOBALS["lang"]['Valid Values'] = 'Έγκυρες τιμές';

$GLOBALS["lang"]['value'] = 'Τιμή';

$GLOBALS["lang"]['Value'] = 'Τιμή';

$GLOBALS["lang"]['values'] = 'Τιμές';

$GLOBALS["lang"]['Values'] = 'Τιμές';

$GLOBALS["lang"]['Vanuatu'] = 'Βανουάτου';

$GLOBALS["lang"]['VarChar'] = 'Βαρσάρ';

$GLOBALS["lang"]['Varchar'] = 'Βαρσάρ.';

$GLOBALS["lang"]['variable'] = 'Μεταβλητή';

$GLOBALS["lang"]['Variable'] = 'Μεταβλητή';

$GLOBALS["lang"]['vendor'] = 'Προμηθευτής';

$GLOBALS["lang"]['Vendor'] = 'Προμηθευτής';

$GLOBALS["lang"]['vendors'] = 'Προμηθευτές';

$GLOBALS["lang"]['Vendors'] = 'Προμηθευτές';

$GLOBALS["lang"]['Venezuela'] = 'Βενεζουέλα';

$GLOBALS["lang"]['version'] = 'Έκδοση';

$GLOBALS["lang"]['Version'] = 'Έκδοση';

$GLOBALS["lang"]['version_padded'] = 'Προσαρμοσμένη έκδοση';

$GLOBALS["lang"]['Version Padded'] = 'Προσαρμοσμένη έκδοση';

$GLOBALS["lang"]['version_raw'] = 'Έκδοση Raw';

$GLOBALS["lang"]['Version Raw'] = 'Έκδοση Raw';

$GLOBALS["lang"]['version_string'] = 'συμβολοσειρά έκδοσης';

$GLOBALS["lang"]['Version String'] = 'συμβολοσειρά έκδοσης';

$GLOBALS["lang"]['video'] = 'Βίντεο';

$GLOBALS["lang"]['Video'] = 'Βίντεο';

$GLOBALS["lang"]['Vietnam'] = 'Βιετνάμ';

$GLOBALS["lang"]['View'] = 'Προβολή';

$GLOBALS["lang"]['View All'] = 'Προβολή όλων';

$GLOBALS["lang"]['View Details'] = 'Προβολή λεπτομερειών';

$GLOBALS["lang"]['View Device'] = 'Προβολή συσκευής';

$GLOBALS["lang"]['View Discovery'] = 'Προβολή ανακάλυψης';

$GLOBALS["lang"]['View Policy'] = 'Πολιτική προβολής';

$GLOBALS["lang"]['Virtual Private Network'] = 'Εικονικό ιδιωτικό δίκτυο';

$GLOBALS["lang"]['Virtualisation'] = 'Εικονισμός';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Επισκεφθείτε το κανάλι μας στο YouTube για εκπαιδευτικά βίντεο.';

$GLOBALS["lang"]['vlan'] = 'Βαν';

$GLOBALS["lang"]['Vlan'] = 'Βαν';

$GLOBALS["lang"]['vlan_id'] = 'Ταυτότητα Vlan';

$GLOBALS["lang"]['Vlan ID'] = 'Ταυτότητα Vlan';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Ταυτότητα συσκευής Vm';

$GLOBALS["lang"]['Vm Device ID'] = 'Ταυτότητα συσκευής Vm';

$GLOBALS["lang"]['vm_group'] = 'Ομάδα Vm';

$GLOBALS["lang"]['Vm Group'] = 'Ομάδα Vm';

$GLOBALS["lang"]['vm_ident'] = 'Αναγνωριστικός κωδικός Vm';

$GLOBALS["lang"]['Vm Ident'] = 'Αναγνωριστικός κωδικός Vm';

$GLOBALS["lang"]['vm_server_name'] = 'Όνομα εξυπηρετητή Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Όνομα εξυπηρετητή Vm';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Προμηθευτής';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Προμηθευτής';

$GLOBALS["lang"]['vuln_status'] = 'Κατάσταση Vuln';

$GLOBALS["lang"]['Vuln Status'] = 'Κατάσταση Vuln';

$GLOBALS["lang"]['vulnerabilities'] = 'Ευπάθεια';

$GLOBALS["lang"]['Vulnerabilities'] = 'Ευπάθεια';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Λοίμωξη ευπαθειών';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Λοίμωξη ευπαθειών';

$GLOBALS["lang"]['vulnerability_id'] = 'Ταυτότητα ευπάθειας';

$GLOBALS["lang"]['Vulnerability ID'] = 'Ταυτότητα ευπάθειας';

$GLOBALS["lang"]['WHERE'] = 'ΟΠΟΥ';

$GLOBALS["lang"]['wall_port'] = 'Θύρα τοίχου';

$GLOBALS["lang"]['Wall Port'] = 'Θύρα τοίχου';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Γουόλις και Φουτούνα';

$GLOBALS["lang"]['Want to know more?'] = 'Θέλεις να μάθεις περισσότερα;';

$GLOBALS["lang"]['Warning'] = 'Προειδοποίηση';

$GLOBALS["lang"]['warranty'] = 'Εγγύηση';

$GLOBALS["lang"]['Warranty'] = 'Εγγύηση';

$GLOBALS["lang"]['warranty_duration'] = 'Διάρκεια εγγύησης';

$GLOBALS["lang"]['Warranty Duration'] = 'Διάρκεια εγγύησης';

$GLOBALS["lang"]['warranty_expires'] = 'Λήγει η εγγύηση';

$GLOBALS["lang"]['Warranty Expires'] = 'Λήγει η εγγύηση';

$GLOBALS["lang"]['warranty_status'] = 'Καθεστώς εγγύησης';

$GLOBALS["lang"]['Warranty Status'] = 'Καθεστώς εγγύησης';

$GLOBALS["lang"]['warranty_type'] = 'Τύπος εγγύησης';

$GLOBALS["lang"]['Warranty Type'] = 'Τύπος εγγύησης';

$GLOBALS["lang"]['Web'] = 'Ιστός';

$GLOBALS["lang"]['Webserver'] = 'Εξυπηρετητής ιστού';

$GLOBALS["lang"]['Website'] = 'Ιστοσελίδα';

$GLOBALS["lang"]['Wednesday'] = 'Τετάρτη';

$GLOBALS["lang"]['weight'] = 'Βάρος';

$GLOBALS["lang"]['Weight'] = 'Βάρος';

$GLOBALS["lang"]['weight_current'] = 'Τρέχον βάρος';

$GLOBALS["lang"]['Weight Current'] = 'Τρέχον βάρος';

$GLOBALS["lang"]['weight_empty'] = 'Άδειο βάρος';

$GLOBALS["lang"]['Weight Empty'] = 'Άδειο βάρος';

$GLOBALS["lang"]['weight_max'] = 'Μέγιστο βάρος';

$GLOBALS["lang"]['Weight Max'] = 'Μέγιστο βάρος';

$GLOBALS["lang"]['Welcome'] = 'Καλωσόρισμα';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Καλωσορίστε τον πίνακα';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Καλωσήλθατε στο Open-AudIT της ΠρώτηςWave';

$GLOBALS["lang"]['Western Sahara'] = 'Δυτική Σαχάρα';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Τι Μπορώ να Αναμένω αν Δεν Έχω Εντολή';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Ποιος είναι ο σκοπός αυτού του ράφι.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Ποιος είναι ο τύπος αυτής της τοποθεσίας. Επιτρεπόμενοι τύποι που τηρούνται σε <code>attributes</code> τραπέζι.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Κατά την ενσωμάτωση συσκευών από το εξωτερικό σύστημα, αν η συσκευή δεν υπάρχει στο Open-AudIT θα πρέπει να τη δημιουργήσουμε;';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Κατά την ενσωμάτωση συσκευών από το εξωτερικό σύστημα, εάν η συσκευή έχει ενημερωθεί στο εξωτερικό σύστημα θα πρέπει να την ενημερώσουμε στο Open-AudIT;';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Όταν ανακτήσουμε μια εξωτερική συσκευή, πρέπει να την ανακαλύψουμε;';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Όταν αυτό το σημείο αναφοράς είναι προγραμματισμένο να εκτελεστεί. Παράγωγα από τα σχετικά <code>tasks.type</code> και <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Όταν δημιουργήθηκε αυτό το αρχείο καταγραφής.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Όταν αυτό το στοιχείο ουράς ξεκίνησε την επεξεργασία.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Όταν εκτελούμε αυτή τη γραμμή βάσης, θα πρέπει να ελέγξουμε για αντικείμενα σε συσκευές που δεν είναι σε μια πολιτική για αυτή τη γραμμή βάσης.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Όταν λαμβάνουμε μια ανοικτή θύρα, θα πρέπει να προσπαθήσουμε να δοκιμάσουμε για την έκδοση της υπηρεσίας που αυτή τη στιγμή τρέχει πάνω της; Αυτό βοηθά στην επιβεβαίωση των πραγματικών υπηρεσιών λειτουργίας.';

$GLOBALS["lang"]['where'] = 'Πού;';

$GLOBALS["lang"]['Where'] = 'Πού;';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Πού στην οθόνη Λεπτομέρειες συσκευής θα θέλατε να δείτε αυτό το πεδίο να εμφανίζεται.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Εκεί που είναι το ράφι στη σειρά.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Αν η ευπάθεια επηρεάζει τα συστατικά πέρα από τη δική της χρήση Impact, Διαθεσιμότητα και Εμπιστευτικότητα.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Αν απαιτείται αλληλεπίδραση χρήστη (Κανένας, Παθητικός, Ενεργός).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Σε ποιο λειτουργικό σύστημα εφαρμόζεται αυτό το σημείο αναφοράς.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Ποιες συσκευές πρέπει να δημιουργούν Open-AudIT από το εξωτερικό σύστημα (αν υπάρχουν). Χρησιμοποιώντας όλα, Κανένα ή ένα δεδομένο χαρακτηριστικό.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Σε ποιο υπο-μενού πρέπει να επιδείξουμε αυτό το ερώτημα.';

$GLOBALS["lang"]['Who made this rack.'] = 'Ποιος έφτιαξε αυτό το ράφι.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Γιατί μόνο Windows Server;';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Γιατί αποκλείουμε αυτή την πολιτική;';

$GLOBALS["lang"]['Wide Area Network'] = 'Δίκτυο ευρείας περιοχής';

$GLOBALS["lang"]['Widget'] = 'Γραφικό συστατικό';

$GLOBALS["lang"]['Widget # '] = 'Γραφικό συστατικό # ';

$GLOBALS["lang"]['Widget Type'] = 'Τύπος συστατικού';

$GLOBALS["lang"]['widgets'] = 'Γραφικά συστατικά';

$GLOBALS["lang"]['Widgets'] = 'Γραφικά συστατικά';

$GLOBALS["lang"]['width'] = 'Πλάτος';

$GLOBALS["lang"]['Width'] = 'Πλάτος';

$GLOBALS["lang"]['windows'] = 'Παράθυρα';

$GLOBALS["lang"]['Windows'] = 'Παράθυρα';

$GLOBALS["lang"]['Windows Test Script'] = 'Σενάριο δοκιμής παραθύρων';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Ασύρματο δίκτυο τοπικής περιοχής';

$GLOBALS["lang"]['wmi_fails'] = 'Αποτυχία Wmi';

$GLOBALS["lang"]['Wmi Fails'] = 'Αποτυχία Wmi';

$GLOBALS["lang"]['wmi_timeout'] = 'Χρονικό όριο Wmi';

$GLOBALS["lang"]['Wmi Timeout'] = 'Χρονικό όριο Wmi';

$GLOBALS["lang"]['workgroup'] = 'Ομάδα εργασίας';

$GLOBALS["lang"]['Workgroup'] = 'Ομάδα εργασίας';

$GLOBALS["lang"]['Working Credentials'] = 'Ένταξη εργασίας';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Κίτρινο ερώτημα';

$GLOBALS["lang"]['Yemen'] = 'Υεμένη';

$GLOBALS["lang"]['Yes'] = 'Ναι.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Μπορεί να θέλετε να αντιγράψετε και να επικολλήσετε αυτό το URL σε ένα email στο προσωπικό σας.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Πρέπει να διαγράψετε την υπάρχουσα άδειά σας πριν προσθέσετε μια νέα άδεια.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Μαθήματα στο YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Το κλειδί AWS EC2 API σας.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Το Google σας Compute διαπιστευτήρια ως JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Οι Άδειές Σας';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Η ταυτότητα του πελάτη σας Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Το μυστικό πελάτη της Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Το Microsoft Azure ID συνδρομής σας.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Η ταυτότητα του Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Το SQL σας για να επιλέξετε χαρακτηριστικά που θα γεμίσουν αυτό το ερώτημα.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Το SQL σας για να επιλέξετε συσκευές που θα γεμίσουν αυτή την ομάδα.';

$GLOBALS["lang"]['Your SSH key.'] = 'Το κλειδί σου.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Τα διαπιστευτήριά σας πρόσβασης, σύμφωνα με τα σύννεφα αυτόχθονα API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Η περιγραφή σας για την κατάσταση αυτής της σύνδεσης (παρέχεται, συνταξιοδοτείται, κλπ).';

$GLOBALS["lang"]['Your description of this item.'] = 'Η περιγραφή σας αυτού του αντικειμένου.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Το γενικό σας όνομα για αυτό το κομμάτι του λογισμικού';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Η γενική έκδοση σας για αυτό το κομμάτι του λογισμικού';

$GLOBALS["lang"]['Zambia'] = 'Ζάμπια';

$GLOBALS["lang"]['Zimbabwe'] = 'Ζιμπάμπουε';

$GLOBALS["lang"]['active'] = 'ενεργό';

$GLOBALS["lang"]['active directory'] = 'ενεργός κατάλογος';

$GLOBALS["lang"]['active/active'] = 'ενεργό/ενεργό';

$GLOBALS["lang"]['active/passive'] = 'ενεργό/παθητικό';

$GLOBALS["lang"]['advertisement'] = 'διαφήμιση';

$GLOBALS["lang"]['alert'] = 'Συναγερμός';

$GLOBALS["lang"]['all'] = 'όλα';

$GLOBALS["lang"]['allocated'] = 'κατανεμημένη';

$GLOBALS["lang"]['amazon'] = 'αμαζόνη';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'αίτηση';

$GLOBALS["lang"]['approved'] = 'εγκεκριμένη';

$GLOBALS["lang"]['attribute'] = 'χαρακτηριστικό';

$GLOBALS["lang"]['auto'] = 'αυτόματη';

$GLOBALS["lang"]['backup'] = 'αντίγραφο ασφαλείας';

$GLOBALS["lang"]['banned'] = 'απαγορεύεται';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['bottom'] = 'κάτω';

$GLOBALS["lang"]['browser_lang'] = 'Περιηγητής_ lang';

$GLOBALS["lang"]['building'] = 'κτίριο';

$GLOBALS["lang"]['cloud'] = 'νέφος';

$GLOBALS["lang"]['code'] = 'κωδικός';

$GLOBALS["lang"]['collector'] = 'συλλέκτης';

$GLOBALS["lang"]['compute'] = 'υπολογισμός';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['contains'] = 'περιέχει';

$GLOBALS["lang"]['create'] = 'δημιουργία';

$GLOBALS["lang"]['created'] = 'δημιουργήθηκε';

$GLOBALS["lang"]['critical'] = 'κρίσιμη';

$GLOBALS["lang"]['cve'] = 'ΚΕΦ';

$GLOBALS["lang"]['database'] = 'βάση δεδομένων';

$GLOBALS["lang"]['debug'] = 'αποσφαλμάτωση';

$GLOBALS["lang"]['delegated'] = 'εξουσιοδότηση';

$GLOBALS["lang"]['delete'] = 'διαγραφή';

$GLOBALS["lang"]['deleted'] = 'διαγράφεται';

$GLOBALS["lang"]['denied'] = 'απορρίπτεται';

$GLOBALS["lang"]['devices'] = 'συσκευές';

$GLOBALS["lang"]['digitalocean'] = 'διπολική';

$GLOBALS["lang"]['does not equal'] = 'δεν είναι ίσο';

$GLOBALS["lang"]['emergency'] = 'έκτακτης ανάγκης';

$GLOBALS["lang"]['entra'] = 'Έντρα';

$GLOBALS["lang"]['equals'] = 'ίσον';

$GLOBALS["lang"]['error'] = 'σφάλμα';

$GLOBALS["lang"]['established'] = 'καθιερωμένη';

$GLOBALS["lang"]['excluded'] = 'εκτός';

$GLOBALS["lang"]['expired'] = 'Λήξη';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'ακραίο - Χωρίς το οποίο, η οργάνωση θα αποτύχει.

πολύ υψηλές - λειτουργίες που είναι απαραίτητες για την επιβίωση των οργανισμών και πρέπει να αποκατασταθούν αμέσως.

υψηλές - σημαντικές λειτουργίες που πρέπει να αποκατασταθούν γρήγορα αλλά μπορεί να έχουν λίγο μεγαλύτερο χρόνο ανάρρωσης.

medium - Λειτουργίες που είναι απαραίτητες, αλλά μπορούν να ανεχθούν περισσότερο χρόνο downtime.

χαμηλές - μη βασικές λειτουργίες που μπορεί να καθυστερήσει χωρίς σημαντικό αντίκτυπο.

χωρίς ανάθεση - Η προεπιλογή μέχρι να οριστεί.';

$GLOBALS["lang"]['fail'] = 'αποτυχία';

$GLOBALS["lang"]['false'] = 'ψευδές';

$GLOBALS["lang"]['file'] = 'αρχείο';

$GLOBALS["lang"]['firewall'] = 'τείχος προστασίας';

$GLOBALS["lang"]['fixed'] = 'σταθερό';

$GLOBALS["lang"]['floor'] = 'δάπεδο';

$GLOBALS["lang"]['front'] = 'εμπρός';

$GLOBALS["lang"]['front-left'] = 'εμπρόσθια-αριστερά';

$GLOBALS["lang"]['front-right'] = 'Μπροστινή δεξιά';

$GLOBALS["lang"]['github'] = 'γιθούβη';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'μεγαλύτερο ή ίσο';

$GLOBALS["lang"]['greater than'] = 'μεγαλύτερη από';

$GLOBALS["lang"]['group'] = 'ομάδα';

$GLOBALS["lang"]['head'] = 'κεφαλή';

$GLOBALS["lang"]['here'] = 'Εδώ.';

$GLOBALS["lang"]['high availability'] = 'υψηλή διαθεσιμότητα';

$GLOBALS["lang"]['howto'] = 'Πώς να';

$GLOBALS["lang"]['ignored'] = 'αγνοείται';

$GLOBALS["lang"]['in'] = 'μέσα';

$GLOBALS["lang"]['inactive'] = 'ανενεργό';

$GLOBALS["lang"]['incomplete'] = 'ατελής';

$GLOBALS["lang"]['info'] = 'Πληροφορίες';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, κείμενο, bool (y/n), κ.λπ.';

$GLOBALS["lang"]['is licensed to'] = 'έχει άδεια για';

$GLOBALS["lang"]['left'] = 'αριστερά';

$GLOBALS["lang"]['less or equals'] = 'λιγότερο ή ίσο';

$GLOBALS["lang"]['less than'] = 'λιγότερο από';

$GLOBALS["lang"]['license'] = 'άδεια';

$GLOBALS["lang"]['like'] = 'Όπως';

$GLOBALS["lang"]['line'] = 'γραμμή';

$GLOBALS["lang"]['load balancing'] = 'εξισορρόπηση φορτίου';

$GLOBALS["lang"]['location'] = 'τοποθεσία';

$GLOBALS["lang"]['managed'] = 'διαχείριση';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'Σημείο προσάρτησης';

$GLOBALS["lang"]['network'] = 'δίκτυο';

$GLOBALS["lang"]['news'] = 'Νέα';

$GLOBALS["lang"]['no'] = 'Όχι';

$GLOBALS["lang"]['node'] = 'κόμβος';

$GLOBALS["lang"]['none'] = 'κανένα';

$GLOBALS["lang"]['normal'] = 'φυσιολογικό';

$GLOBALS["lang"]['not applicable'] = 'Άνευ αντικειμένου';

$GLOBALS["lang"]['not in'] = 'όχι σε';

$GLOBALS["lang"]['not like'] = 'Όχι όπως';

$GLOBALS["lang"]['notice'] = 'ειδοποίηση';

$GLOBALS["lang"]['notification'] = 'κοινοποίηση';

$GLOBALS["lang"]['okta'] = 'Εντάξει.';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'βελτιστοποιημένο';

$GLOBALS["lang"]['optionally '] = 'προαιρετικά ';

$GLOBALS["lang"]['other'] = 'Άλλα';

$GLOBALS["lang"]['package'] = 'συσκευασία';

$GLOBALS["lang"]['partition'] = 'κατάτμηση';

$GLOBALS["lang"]['pass'] = 'Πάσο';

$GLOBALS["lang"]['pending'] = 'εκκρεμεί';

$GLOBALS["lang"]['performance'] = 'απόδοση';

$GLOBALS["lang"]['performed'] = 'που εκτελέστηκαν';

$GLOBALS["lang"]['pie'] = 'πίτα';

$GLOBALS["lang"]['planning'] = 'σχεδιασμός';

$GLOBALS["lang"]['predictable'] = 'προβλέψιμο';

$GLOBALS["lang"]['query'] = 'Ερώτηση';

$GLOBALS["lang"]['rear'] = 'πίσω';

$GLOBALS["lang"]['rear-left'] = 'πίσω-αριστερά';

$GLOBALS["lang"]['rear-right'] = 'πίσω δεξιά';

$GLOBALS["lang"]['regex'] = 'regγκέξ';

$GLOBALS["lang"]['release'] = 'απελευθέρωση';

$GLOBALS["lang"]['reserved'] = 'δεσμευμένη';

$GLOBALS["lang"]['right'] = 'δεξιά';

$GLOBALS["lang"]['room'] = 'δωμάτιο';

$GLOBALS["lang"]['row'] = 'γραμμή';

$GLOBALS["lang"]['stand-alone'] = 'αυτόνομη';

$GLOBALS["lang"]['standard'] = 'πρότυπο';

$GLOBALS["lang"]['starts with'] = 'ξεκινά με';

$GLOBALS["lang"]['storage'] = 'αποθήκευση';

$GLOBALS["lang"]['timestamp'] = 'χρονοσφραγίδα';

$GLOBALS["lang"]['top'] = 'πάνω';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'top secret - Στρατιωτική / Κυβερνητική ταξινόμηση. Η αποκάλυψη θα προκαλούσε εξαιρετικά σοβαρό κίνδυνο για την εθνική ασφάλεια.

μυστικό - Στρατιωτική / κυβερνητική ταξινόμηση. Η αποκάλυψη θα προκαλούσε σοβαρή ζημιά στην εθνική ασφάλεια.

εμπιστευτική - Στρατιωτική / Κυβερνητική και Ιδιωτική ταξινόμηση τομέα. Τα δεδομένα που είναι εμπιστευτικά περιλαμβάνουν εμπορικά μυστικά, διανοητικά δεδομένα, κώδικα προγραμματισμού εφαρμογών, και άλλα δεδομένα που θα μπορούσαν να επηρεάσουν σοβαρά τον οργανισμό αν συμβεί μη εξουσιοδοτημένη αποκάλυψη. Τα δεδομένα σε αυτό το επίπεδο θα είναι διαθέσιμα μόνο στο προσωπικό του οργανισμού του οποίου οι ανάγκες εργασίας ή σχετίζονται άμεσα με τα προσπελάσιμα δεδομένα. Η πρόσβαση σε εμπιστευτικά δεδομένα απαιτεί συνήθως άδεια για κάθε πρόσβαση.

private - Ταξινόμηση ιδιωτικού τομέα. Τα δεδομένα που είναι ιδιωτικά περιλαμβάνουν κάθε πληροφορία που σχετίζεται με το προσωπικό, συμπεριλαμβανομένων των αρχείων ανθρώπινου δυναμικού, ιατρικών αρχείων και πληροφοριών μισθού, που χρησιμοποιείται μόνο εντός του οργανισμού.

ευαίσθητο - Στρατιωτική / Κυβερνητική και Ιδιωτική ταξινόμηση τομέα. Τα δεδομένα που είναι ευαίσθητα περιλαμβάνουν οργανωτικές οικονομικές πληροφορίες και απαιτούν επιπλέον μέτρα για να διασφαλιστεί η CIA και η ακρίβειά της. Η αποκάλυψη μπορεί να βλάψει την εθνική ασφάλεια.

δημόσιο - Ταξινόμηση Ιδιωτικού Τομέα. Τα δημόσια δεδομένα είναι δεδομένα που γενικά μοιράζονται με το κοινό και δεν θα προκαλούσαν αρνητικό αντίκτυπο στον οργανισμό. Παραδείγματα δημόσιων δεδομένων περιλαμβάνουν το πόσοι άνθρωποι εργάζονται στον οργανισμό και τι προϊόντα κατασκευάζει ή πωλεί ένας οργανισμός.

μη ταξινομημένα - Στρατιωτική / Κυβερνητική ταξινόμηση. Οποιαδήποτε πληροφορία μπορεί γενικά να διανεμηθεί στο κοινό χωρίς καμία απειλή για το εθνικό συμφέρον.

χωρίς ανάθεση - Η προεπιλογή μέχρι να οριστεί.';

$GLOBALS["lang"]['traffic'] = 'κυκλοφορία';

$GLOBALS["lang"]['true'] = 'αλήθεια';

$GLOBALS["lang"]['unallocated'] = 'μη διαχωρισμένο';

$GLOBALS["lang"]['unauthorised'] = 'μη εξουσιοδοτημένη';

$GLOBALS["lang"]['unknown'] = 'άγνωστο';

$GLOBALS["lang"]['unmanaged'] = 'μη επανδρωμένο';

$GLOBALS["lang"]['unused'] = 'αχρησιμοποίητα';

$GLOBALS["lang"]['update'] = 'ενημέρωση';

$GLOBALS["lang"]['valid'] = 'έγκυρο';

$GLOBALS["lang"]['virtualisation'] = 'εικονικοποίηση';

$GLOBALS["lang"]['warning'] = 'προειδοποίηση';

$GLOBALS["lang"]['web'] = 'Ιστός';

$GLOBALS["lang"]['yes'] = 'Ναι';

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

