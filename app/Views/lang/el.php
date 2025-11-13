<?php
$GLOBALS["lang"][' Default, currently '] = ' Προκαθορισμένο, επί του παρόντος ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Εάν κάτι δεν λειτουργεί όπως αναμενόταν, το πρώτο πράγμα που πρέπει να κάνετε είναι να ελέγξετε τα αρχεία καταγραφής.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' υποστηρίζεται τώρα με ένα αρχείο γλώσσας. Για να αλλάξετε το χρήστη σας για να χρησιμοποιήσετε αυτή τη γλώσσα, κάντε κλικ ';

$GLOBALS["lang"][' seconds'] = ' δευτερόλεπτα';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', αλλά δεν θα χρειαστεί να θυμόμαστε ένα ξεχωριστό σύνολο logon διαπιστευτήρια.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', εκ των οποίων παρέχουμε πάνω από τριάντα ως ένα προκαθορισμένο σύνολο. Οι επαγγελματίες χρήστες δεν μπορούν να τα αλλάξουν αυτά, αλλά ένας χρήστης του Enterprise έχει πλήρεις ικανότητες προσαρμογής - συμπεριλαμβανομένης της δημιουργίας των δικών σας.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', εσύ <i>πρέπει</i> να χρησιμοποιεί https στον εξυπηρετητή Open-AudIT για να χρησιμοποιήσει το Entra για Auth. Παρακαλώ ρυθμίστε Apache για χρήση <strong>https</strong> πριν από τη διαμόρφωση Entra για τη auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Για να το ενεργοποιήσετε αυτό, επεξεργαστείτε το αντικείμενο ρυθμίσεων για ';

$GLOBALS["lang"]['10 Minutes'] = '10 λεπτά';

$GLOBALS["lang"]['15 Minutes'] = '15 λεπτά';

$GLOBALS["lang"]['30 Minutes'] = '30 λεπτά';

$GLOBALS["lang"]['5 Minutes'] = '5 λεπτά';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 έλεγχοι ομαδοποιημένοι σε οργανωτικές, ανθρώπινες, φυσικές και τεχνολογικές κατηγορίες';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>ΣΗΜΕΙΩΣΗ</strong> - Έχετε πρόσβαση σε αυτό το URL από τον τοπικό εξυπηρετητή Open-AudIT. Το μεταφορτωμένο σενάριο δεν θα είναι σε θέση να υποβληθεί όταν εκτελείται σε άλλο μηχάνημα. Εάν χρειαστεί να ελέγξετε άλλα μηχανήματα, παρακαλούμε κατεβάστε το σενάριο από οποιοδήποτε απομακρυσμένο μηχάνημα, μη χρησιμοποιώντας ένα πρόγραμμα περιήγησης στον ίδιο τον εξυπηρετητή Open-AudIT.';

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

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Τα συστήματα Windows desktop έχουν περιορισμούς δικτύου που μπορεί να επηρεάσουν την απόδοση του Open-AudIT. Η στοίβα TCP/IP περιορίζει τον αριθμό των ταυτόχρονων ατελών προσπαθειών σύνδεσης εξόδου TCP. Μετά την επίτευξη του ορίου, οι επακόλουθες προσπάθειες σύνδεσης τίθενται σε σειρά αναμονής και θα επιλυθούν με σταθερό επιτόκιο (10 ανά δευτερόλεπτο). Αν μπουν πολλοί στην ουρά, μπορεί να πέσουν. Και τέλος, οι Απάτσι θα επανεκκινηθούν από το λειτουργικό σύστημα. Για το λόγο αυτό, η εγκατάσταση Open-AudIT σε ένα λειτουργικό σύστημα Windows desktop δεν υποστηρίζεται.<br/><br/>Δεν υπάρχει τίποτα λάθος με τον κώδικα Open-AudIT, ούτε μπορούμε να κάνουμε τίποτα για να αντιμετωπίσουμε αυτό το θέμα στις μηχανές των πελατών των Windows.</p>';

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

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>ΣΗΜΕΙΩΣΗ</strong> - Έχετε πρόσβαση σε αυτό το URL από τον τοπικό εξυπηρετητή Open-AudIT. Το μεταφορτωμένο σενάριο δεν θα είναι σε θέση να υποβληθεί όταν εκτελείται σε άλλο μηχάνημα. Εάν χρειαστεί να ελέγξετε άλλα μηχανήματα, παρακαλούμε κατεβάστε το σενάριο από οποιοδήποτε απομακρυσμένο μηχάνημα, μη χρησιμοποιώντας ένα πρόγραμμα περιήγησης στον ίδιο τον εξυπηρετητή Open-AudIT.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Ένα στοιχείο CVE που δεν περιέχει φίλτρο για τον προσδιορισμό του(των) επηρεαζόμενου(ων).';

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

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Ένα LAN μπορεί να συνδεθεί με ένα WAN χρησιμοποιώντας ένα router.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Ένα δίκτυο μητροπολιτικής περιοχής (MAN) είναι ένα μεγάλο δίκτυο υπολογιστών που συνήθως εκτείνεται σε μια πόλη ή μια μεγάλη πανεπιστημιούπολη.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'Α Η ανακάλυψη σπόρων χρησιμοποιεί ένα αρχικό IP για να ανακτήσει τις IP των άλλων συσκευών που γνωρίζει, προσθέτει αυτές τις IP στη λίστα και σαρώνει αυτές - και πάλι ζητώντας τυχόν IP που γνωρίζει αυτές οι πρόσθετες συσκευές. Ξεπλύνετε και επαναλάβετε. Είναι αρκετά ευφυές να γνωρίζουμε αν έχει ήδη σαρώσει μια δεδομένη IP κατά την εκτέλεσή της και απορρίπτει οποιαδήποτε ήδη σαρωθεί (ή ακόμα και στη λίστα που πρέπει να σαρωθεί).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Μια ανακάλυψη του Subnet θα σαρώσει τα IP που παρέχονται.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Ένα URL που παρέχεται στον πράκτορα το οποίο στη συνέχεια θα κατεβάσει το αρχείο και θα το αποθηκεύσει στον τοπικό δίσκο.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Ένα URL σε ένα αρχείο για λήψη.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Ένα δίκτυο ραχοκοκαλιάς είναι μέρος μιας υποδομής δικτύου υπολογιστών που παρέχει μια διαδρομή για την ανταλλαγή πληροφοριών μεταξύ διαφορετικών LAN ή υποδικτύων. Μια ραχοκοκαλιά μπορεί να συνδέσει διαφορετικά δίκτυα μέσα στο ίδιο κτίριο, σε διαφορετικά κτίρια ή σε μια ευρεία περιοχή.<br/><br/>Για παράδειγμα, μια μεγάλη εταιρεία μπορεί να εφαρμόσει ένα δίκτυο ραχοκοκαλιάς για τη σύνδεση τμημάτων που βρίσκονται σε όλο τον κόσμο. Ο εξοπλισμός που συνδέει τα δίκτυα του τμήματος αποτελεί τη ραχοκοκαλιά του δικτύου. Κατά το σχεδιασμό μιας ραχοκοκαλιάς δικτύου, οι επιδόσεις του δικτύου και η συμφόρηση του δικτύου είναι κρίσιμοι παράγοντες που πρέπει να λαμβάνονται υπόψη. Κανονικά, η χωρητικότητα του δικτύου ραχοκοκαλιάς είναι μεγαλύτερη από εκείνη των επιμέρους δικτύων που συνδέονται με αυτό.<br/><br/>Ένα άλλο παράδειγμα ενός δικτύου ραχοκοκαλιάς είναι η ραχοκοκαλιά του Διαδικτύου, η οποία είναι το σύνολο των δικτύων ευρείας περιοχής (WANs) και των δρομολογητών πυρήνα που συνδέουν όλα τα δίκτυα που συνδέονται με το Διαδίκτυο.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Ένα υπολογισμένο πεδίο που εμφανίζει τον αριθμό των φορές αυτό το κομμάτι λογισμικού βρέθηκε στους υπολογιστές του επιλεγμένου Οργ (και των απογόνων του αν έχει ρυθμιστεί).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Ένα δίκτυο περιοχής πανεπιστημιούπολης (CAN) αποτελείται από μια διασύνδεση των LAN εντός μιας περιορισμένης γεωγραφικής περιοχής. Ο εξοπλισμός δικτύωσης (διακόπτες, δρομολογητές) και τα μέσα μετάδοσης (οπτικές ίνες, εργοστάσιο χαλκού, καλωδίωση Cat5 κ.λπ.) ανήκουν σχεδόν εξ ολοκλήρου στον ενοικιαστή / ιδιοκτήτη της πανεπιστημιούπολης (επιχείρηση, πανεπιστήμιο, κυβέρνηση κ.λπ.).<br/><br/>Για παράδειγμα, ένα δίκτυο πανεπιστημιούπολης είναι πιθανό να συνδέει μια ποικιλία κτιρίων πανεπιστημιούπολης για να συνδέσει ακαδημαϊκά κολέγια ή τμήματα, τη βιβλιοθήκη και αίθουσες διαμονής φοιτητών.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Μια κλειστή θύρα είναι προσβάσιμη (παρέχεται και απαντά σε πακέτα καθετήρα Nmap), αλλά δεν υπάρχει εφαρμογή που να ακούει πάνω της. Μπορούν να είναι χρήσιμοι στην επίδειξη ότι ένας ξενιστής είναι επάνω σε μια διεύθυνση IP (ανακάλυψη υποδοχής, ή σάρωση ping), και ως μέρος της ανίχνευσης OS. Επειδή οι κλειστές θύρες είναι προσβάσιμες, ίσως αξίζει να σαρώσουμε αργότερα σε περίπτωση που κάποιοι ανοίξουν. Οι διαχειριστές μπορεί να θέλουν να εξετάσουν το ενδεχόμενο να μπλοκάρουν αυτές τις θύρες με ένα τείχος προστασίας. Στη συνέχεια, θα εμφανιστούν σε φιλτραρισμένη κατάσταση, συζητούνται στη συνέχεια.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Ένας συλλέκτης είναι είτε σε λειτουργία Colector ή Stand-Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Διαχωρισμένος κατάλογος των εφαρμοστέων ΚΕΕ.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Μια διαχωρισμένη λίστα τιμών, μία από τις οποίες μπορεί να επιλεγεί.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Μια εντολή για να τρέξει. Όταν ο πράκτορας βασίζεται στα Windows, αυτή η εντολή εκτελείται μέσα από τον παράγοντα powershell.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Ένα ταμπλό αποτελείται από τρεις στήλες και δύο σειρές αυτού που αποκαλούμε <i>γραφικών συστατικών</i>. Ένα widget είναι πολύ παρόμοιο με μια περίληψη, μόνο που παίρνουμε τη συνοπτική έννοια λίγο περισσότερο. Τα Widgets δημιουργούνται με έναν απλό τρόπο χρησιμοποιώντας μερικά drop down κουτιά - ή μπορείτε να επιλέξετε να χρησιμοποιήσετε το δικό σας SQL για την πλήρη προσαρμοστικότητα.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Μια διηθημένη θύρα θεωρείται ανοιχτή (και θα ενεργοποιήσει την ανίχνευση της συσκευής).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Ένα παγκόσμιο δίκτυο περιοχής (GAN) είναι ένα δίκτυο που χρησιμοποιείται για την υποστήριξη των κινητών μέσω ενός αυθαίρετου αριθμού ασύρματων LAN, δορυφορικών περιοχών κάλυψης, κλπ. Η βασική πρόκληση στις κινητές επικοινωνίες είναι η παράδοση των επικοινωνιών των χρηστών από μια τοπική περιοχή κάλυψης στην επόμενη. Στο IEEE Project 802, αυτό περιλαμβάνει μια διαδοχή χερσαίων ασύρματων LAN.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Ένα δίκτυο home area (HAN) είναι ένα οικιστικό LAN που χρησιμοποιείται για την επικοινωνία μεταξύ ψηφιακών συσκευών που συνήθως αναπτύσσονται στο σπίτι, συνήθως ένας μικρός αριθμός προσωπικών υπολογιστών και εξαρτημάτων, όπως εκτυπωτές και κινητές υπολογιστικές συσκευές. Μια σημαντική λειτουργία είναι η κοινή χρήση της πρόσβασης στο Διαδίκτυο, συχνά μια ευρυζωνική υπηρεσία μέσω μιας καλωδιακής τηλεόρασης ή της ψηφιακής συνδρομητικής γραμμής (DSL) πάροχος.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Μια λίστα προσαρμοσμένων θυρών TCP για σάρωση (22 είναι SSH, 135 είναι WMI, 62078 είναι συγχρονισμός iPhone).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Μια λίστα με προσαρμοσμένες θύρες UDP για σάρωση (161 είναι SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Ένα τοπικό δίκτυο (LAN) είναι ένα δίκτυο που συνδέει υπολογιστές και συσκευές σε περιορισμένη γεωγραφική περιοχή όπως ένα σπίτι, σχολείο, κτίριο γραφείων, ή στενά τοποθετημένη ομάδα κτιρίων. Κάθε υπολογιστής ή συσκευή στο δίκτυο είναι κόμβος. Τα ενσύρματα LAN είναι πιθανό να βασίζονται στην τεχνολογία Ethernet. Νεότερα πρότυπα όπως το ITU-T G.hn παρέχουν επίσης έναν τρόπο για να δημιουργήσετε ένα ενσύρματο LAN χρησιμοποιώντας υπάρχουσα καλωδίωση, όπως ομοαξονικά καλώδια, τηλεφωνικές γραμμές, και γραμμές ρεύματος.<br/><br/>Τα καθοριστικά χαρακτηριστικά ενός LAN, σε αντίθεση με ένα δίκτυο ευρείας περιοχής (WAN), περιλαμβάνουν υψηλότερα ποσοστά μεταφοράς δεδομένων, περιορισμένο γεωγραφικό εύρος και έλλειψη εξάρτησης από μισθωμένες γραμμές για την παροχή συνδεσιμότητας. Οι τρέχουσες τεχνολογίες Ethernet ή άλλες τεχνολογίες IEEE 802.3LAN λειτουργούν με ποσοστά μεταφοράς δεδομένων έως 100 Gbit/s, τυποποιημένες από την IEEE το 2010. Επί του παρόντος, 400 Gbit/s Το Ethernet αναπτύσσεται.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Μια τοποθεσία είναι μια φυσική διεύθυνση που μπορεί να έχει συσκευές που συνδέονται με αυτό. Μπορείτε να του ορίσετε συντεταγμένες και αν υπάρχουν συσκευές που έχουν ανατεθεί, η τοποθεσία θα εμφανιστεί στον χάρτη όταν έχετε άδεια Open-AudIT Enterprise.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Ένα όνομα τοποθεσίας θα σας βοηθήσει να βρείτε αυτές τις συσκευές στο μέλλον.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Ένας μικρότερος αριθμός σημαίνει ότι θα εφαρμοστεί πριν από άλλους κανόνες.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Ένας μικρότερος αριθμός σημαίνει ότι θα εφαρμοστεί πριν από άλλους κανόνες. Το προκαθορισμένο βάρος είναι 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Ένας νέος χρήστης συνδέθηκε στο Open-AudIT και επικυρώθηκε και εγκρίθηκε από το LDAP sever. Αυτός ο χρήστης δημιουργήθηκε τότε στο Open-AudIT και συνδέθηκε. Επιτυχία.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Ένα πακέτο είναι ένα κομμάτι εγκατεστημένο softare. Ένα πακέτο έχει έναν τύπο - antivirus, εγκεκριμένο, εφεδρικό, απαγορευμένο, σύννεφο, τείχος προστασίας, αγνοείται, άδεια ή άλλο.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Ένας κωδικός πρόσβασης (αποθηκευμένος ως hash) που επιτρέπει το logon όταν χρησιμοποιεί την ταυτοποίηση της εφαρμογής.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Ένα άτομο έχει λογαριασμό στην εφαρμογή Open-AudIT. Ο λογαριασμός χρηστών τους έχει μια λίστα με συναφείς Ρόλους και Οργανώσεις. Οι ρόλοι που έχει ο χρήστης καθορίζουν τι μπορούν να κάνουν. Οι Οργανώσεις που ένας χρήστης έχει καθορίσει ποια στοιχεία μπορούν να ενεργήσουν.<br/><br/>Όταν ένας χρήστης ζητά να εκτελέσει μια λειτουργία (δημιουργήστε, διαβάστε, ενημερώστε, διαγράψτε) σε ένα αντικείμενο συλλογής, ζητείται η γνώμη των rolesόλων για να δείτε αν τους επιτρέπεται να εκτελέσουν αυτή την ενέργεια, τότε ζητείται η γνώμη των οργ για να καθοριστεί αν το αντικείμενο συλλογής ανήκει σε έναν οργανισμό ο χρήστης έχει την άδεια να δράσει.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Ένα προσωπικό δίκτυο περιοχής (PAN) είναι ένα δίκτυο υπολογιστών που χρησιμοποιείται για την επικοινωνία μεταξύ υπολογιστών και διαφορετικών τεχνολογικών συσκευών πληροφοριών κοντά σε ένα άτομο. Μερικά παραδείγματα συσκευών που χρησιμοποιούνται σε ένα PAN είναι προσωπικοί υπολογιστές, εκτυπωτές, φαξ, τηλέφωνα, PDA, σαρωτές, ακόμη και κονσόλες βιντεοπαιχνιδιών. Ένα PAN μπορεί να περιλαμβάνει ενσύρματες και ασύρματες συσκευές. Η εμβέλεια ενός PAN τυπικά εκτείνεται στα 10 μέτρα. Ένα ενσύρματο PAN κατασκευάζεται συνήθως με συνδέσεις USB και FireWire ενώ τεχνολογίες όπως το Bluetooth και η υπέρυθρη επικοινωνία σχηματίζουν τυπικά ένα ασύρματο PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Ένα ερώτημα είναι ουσιαστικά μια δήλωση SQL. Αυτή η δήλωση εκτελείται κατά της βάσης δεδομένων με την αυτόματη προσθήκη του ορίου, φιλτράρεται για να εφαρμοστεί μόνο σε εκείνα τα ζητούμενα αντικείμενα και μόνο τα αντικείμενα που ο χρήστης έχει την άδεια να δει. Ένα ερώτημα μπορεί να δημιουργηθεί χρησιμοποιώντας το μενού -> Διαχείριση -> Ερωτήσεις -> Δημιουργία ερωτημάτων. Τα ερωτήματα περιέχουν ένα org_id και επομένως περιορίζονται στους κατάλληλους χρήστες. Ένας χρήστης πρέπει να έχει τον (τους) ρόλο(-ους) org_admin ή reporter για να δημιουργήσει, να ενημερώσει ή να διαγράψει ένα ερώτημα. Όλοι οι χρήστες μπορούν να εκτελέσουν ένα ερώτημα. Ένα ερώτημα έχει ένα χαρακτηριστικό όνομα που χρησιμοποιείται για το στοιχείο μενού καθώς και ένα χαρακτηριστικό κατηγορίας μενού. Αυτό λέει στο Open-Audit GUI που υπομενού να τοποθετήσει το ερώτημα. Υπάρχει επίσης εμφάνιση μενού που θα πρέπει να οριστεί <i>y</i> για την ενεργοποίηση του ερωτήματος στο GUI (<i>n</i> για να αποτρέψει την εμφάνιση του ερωτήματος). Το ερώτημα θα συνεχίσει να εκτελείται αν κληθεί χρησιμοποιώντας το <code>id</code>, ανεξάρτητα από την αξία του μενού.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Ένα ράφι είναι μια συλλογή από συσκευές που έχουν οριστεί μια θέση και το ύψος μέσα στο ράφι. Μια συσκευή μπορεί προαιρετικά να έχει μια εικόνα συνδεδεμένη με αυτήν. Ένα ράφι τοποθετείται στη σειρά. Έχουμε δημιουργήσει ένα πολύ κοκκώδες σύστημα για την τοποθέτηση των ράφια, το οποίο είναι ως εξής. Στο κορυφαίο επίπεδο (όπως πάντα) βρίσκεται ο Οργανισμός (Org). Ένας Οργανισμός μπορεί να έχει πολλαπλές τοποθεσίες (όπως ήταν πάντα η περίπτωση). Με την προσθήκη της λειτουργίας Racks, μια τοποθεσία μπορεί τώρα να περιέχει ένα ή περισσότερα Κτίρια. Ένα κτίριο μπορεί να περιέχει έναν ή περισσότερους ορόφους. Ένας όροφος μπορεί να περιέχει ένα ή περισσότερα δωμάτια. Ένα δωμάτιο μπορεί να περιέχει μία ή περισσότερες σειρές. Αυτό ακούγεται σαν πολλή δουλειά, αλλά τα προεπιλεγμένα δημιουργούνται για σας. Δημιουργήστε μια νέα Τοποθεσία και τα υποσυστήματα θα δημιουργηθούν αυτόματα για εσάς. Αν χρειάζεστε περισσότερα αντικείμενα (κτίρια, δωμάτια, κλπ) μπορείτε να τα προσθέσετε όπως θέλετε. Ένα ράφι μπορεί επίσης να είναι μέρος ενός <i>λοβός</i> - Ναι. Το χαρακτηριστικό pod λειτουργεί ως ετικέτα, αντί για ένα αυστηρό ιεραρχικό μοντέλο κληρονομιάς όπως ανά κτίρια, δάπεδα, κλπ.<br/><br/>Οι Racks είναι ένα χαρακτηριστικό που διατίθεται στους πελάτες με άδεια Open-AudIT Enterprise.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Ένας χώρος δρομολόγησης ή διεύθυνσης όπου οι διευθύνσεις IP και οι διευθύνσεις MAC είναι μοναδικές.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Ένα δείγμα cron αρχείο για το Linux είναι παρακάτω. Αυτό θα πρέπει να τοποθετηθεί';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Μια ζώνη ασφαλείας είναι ένας διοικητικός τομέας ή τομέας πολιτικής εντός του τομέα δικτύου.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Μια ανακάλυψη σπόρων είναι ένας άλλος τύπος ανακάλυψης, όπου παρέχει την IP ενός μόνο <i>σπόροι προς σπορά</i> συσκευή. Αυτή η συσκευή ελέγχεται, και τυχόν IPs που γνωρίζει προστίθενται στη συνέχεια στον κατάλογο των IP που πρέπει να ελεγχθούν. Στη συνέχεια, οι εν λόγω συσκευές ελέγχονται και τυχόν IPs που γνωρίζουν προστίθενται επίσης στον κατάλογο των IP για το ώντιτινγκ. Αυτή η διαδικασία συνεχίζεται στη συνέχεια μέσα στις παραμέτρους που έχει διαμορφώσει ο χρήστης.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Μια σύντομη περιγραφή της καταχώρησης του ημερολογίου.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Ένα δίκτυο χώρου αποθήκευσης (SAN) είναι ένα εξειδικευμένο δίκτυο που παρέχει πρόσβαση σε ενοποιημένη αποθήκευση δεδομένων σε επίπεδο μπλοκ. Τα SAN χρησιμοποιούνται κυρίως για την κατασκευή συσκευών αποθήκευσης, όπως οι συστοιχίες δίσκων, οι βιβλιοθήκες ταινιών και τα οπτικά jukebox, προσβάσιμα στους διακομιστές έτσι ώστε οι συσκευές να εμφανίζονται σαν τοπικά προσαρτημένες συσκευές στο λειτουργικό σύστημα. Ένα SAN τυπικά έχει το δικό του δίκτυο συσκευών αποθήκευσης που γενικά δεν είναι προσβάσιμες μέσω του τοπικού δικτύου από άλλες συσκευές. Το κόστος και η πολυπλοκότητα των SAN μειώθηκαν στις αρχές της δεκαετίας του 2000 σε επίπεδα που επιτρέπουν την ευρύτερη υιοθέτηση τόσο σε επιχειρηματικό όσο και σε μικρομεσαίο επιχειρηματικό περιβάλλον.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Μια χορδή που ταιριάζει με την <code>software.name</code> χαρακτηριστικό γνώρισμα. Μπορείτε να χρησιμοποιήσετε το πρότυπο SQL wildcard του ποσοστού (%) για να ταιριάζει με έναν ή περισσότερους χαρακτήρες.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Δομημένο σύστημα διαχείρισης ευαίσθητων πληροφοριών';

$GLOBALS["lang"]['A timestamp.'] = 'Μια χρονοσφραγίδα.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Ένας χρήστης έχει έναν πρωταρχικό Οργανισμό καθώς και μια λίστα των Οργών που μπορούν να έχουν πρόσβαση. Ένας χρήστης το συνδυάζει αυτό με μια λίστα με καθορισμένους ρόλους που καθορίζουν ποιες ενέργειες μπορούν να αναλάβουν σε αντικείμενα που έχουν ανατεθεί στους Οργούς στους οποίους έχουν πρόσβαση. Ο συνδυασμός των χρηστών <i>Οργάδες</i> και <i>ρόλοι</i> καθορίζει τι μπορούν και τι δεν μπορούν να κάνουν μέσα στο Open-AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Ένας χρήστης θα έχει μια λίστα των συναφών οργανισμών (orgs). Κάθε οργανισμός που έχει ο χρήστης θα τους επιτρέπει να ενεργούν πάνω σε αντικείμενα μέσα σε αυτόν τον οργανισμό σύμφωνα με το ρόλο τους.<br/><br/>Όλοι οι οργανισμοί εκτός από τον προεπιλεγμένο οργανισμό έχουν γονιό. Σκέψου ένα οργανόγραμμα. Αν ένας χρήστης έχει άδεια σε έναν Οργ, έχουν επίσης άδεια για τυχόν απογόνους αυτού του Οργ.<br/><br/>Επιτρέπεται επίσης στους χρήστες να δουν τα αντικείμενα από τους γονείς τους για ορισμένες συλλογές. Αυτά είναι: ταμπλό, ανακάλυψη_scan_options, πεδία, αρχεία, ομάδες, ερωτήματα, εκθέσεις, ρόλους, κανόνες, σενάρια, περιλήψεις, widgets.<br/><br/>Μην ξεχνάτε ότι έχετε κοκκώδη έλεγχο πάνω στο τι μπορούν να δουν και να κάνουν οι χρήστες χρησιμοποιώντας Roles in Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Ένας χρήστης θα έχει μια λίστα των συναφών οργανισμών (orgs). Κάθε οργανισμός που έχει ο χρήστης θα τους επιτρέπει να ενεργούν πάνω σε αντικείμενα μέσα σε αυτόν τον οργανισμό σύμφωνα με το ρόλο τους.<br/><br/>Όλοι οι οργανισμοί εκτός από τον προεπιλεγμένο οργανισμό έχουν γονιό. Σκέψου ένα οργανόγραμμα. Αν ένας χρήστης έχει άδεια σε έναν Οργ, έχουν επίσης άδεια για τυχόν απογόνους αυτού του Οργ.<br/><br/>Έχουμε επίσης επιτρέψει σε έναν χρήστη με άδεια για ένα παιδί org να δει τα αντικείμενα από τους γονείς orgs για ορισμένες συλλογές. Αυτά είναι: ταμπλό, ανακάλυψη_scan_options, πεδία, αρχεία, ομάδες, ερωτήματα, ρόλους, κανόνες, σενάρια, περιλήψεις, widgets.<br/><br/>Μην ξεχνάτε ότι έχετε κοκκώδη έλεγχο πάνω σε αυτό που οι χρήστες μπορούν να δουν και να κάνουν χρησιμοποιώντας';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Ένα εικονικό ιδιωτικό δίκτυο (VPN) είναι ένα δίκτυο επικάλυψης στο οποίο μερικοί από τους συνδέσμους μεταξύ κόμβων μεταφέρονται από ανοικτές συνδέσεις ή εικονικά κυκλώματα σε κάποιο μεγαλύτερο δίκτυο (π.χ., το Διαδίκτυο) αντί από φυσικά καλώδια. Τα πρωτόκολλα του εικονικού δικτύου συνδέσεων δεδομένων λέγεται ότι διοχετεύονται μέσω του μεγαλύτερου δικτύου όταν συμβαίνει αυτό. Μια κοινή εφαρμογή είναι οι ασφαλείς επικοινωνίες μέσω του δημόσιου Διαδικτύου, αλλά ένας VPN δεν χρειάζεται να έχει σαφή χαρακτηριστικά ασφαλείας, όπως η ταυτοποίηση ή η κρυπτογράφηση περιεχομένου. VPNs, για παράδειγμα, μπορεί να χρησιμοποιηθεί για τον διαχωρισμό της κυκλοφορίας των διαφόρων κοινοτήτων χρηστών σε ένα υποκείμενο δίκτυο με ισχυρά χαρακτηριστικά ασφαλείας.<br/><br/>Η VPN μπορεί να έχει επιδόσεις καλύτερης επίδοσης, ή μπορεί να έχει μια καθορισμένη συμφωνία επιπέδου υπηρεσιών (SLA) μεταξύ του πελάτη VPN και του παρόχου υπηρεσιών VPN. Γενικά, ένα VPN έχει μια τοπολογία πιο περίπλοκη από το σημείο προς το σημείο.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Μια ευπάθεια που επηρεάζει τη διαθεσιμότητα μπορεί να επιτρέψει στους επιτιθέμενους να διαταράξουν τις υπηρεσίες, τα συστήματα συντριβής ή να προκαλέσουν άρνηση υπηρεσίας (DoS) (Κανένα, Χαμηλό, Υψηλό).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Μια ευπάθεια που επηρεάζει το απόρρητο μπορεί να επιτρέψει στους επιτιθέμενους να διαβάσουν ευαίσθητα δεδομένα, όπως προσωπικές πληροφορίες, διαπιστευτήρια, ή ιδιόκτητα επιχειρηματικά δεδομένα (Κανένα, Χαμηλό, Υψηλό).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Μια ευπάθεια που επηρεάζει την ακεραιότητα μπορεί να επιτρέψει στους επιτιθέμενους να τροποποιήσουν τα δεδομένα, να εγχύσουν κακόβουλο κώδικα, ή να τροποποιήσουν τις ρυθμίσεις του συστήματος (Κανένα, Χαμηλό, Υψηλό).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Μια ευπάθεια μπορεί να επεξεργαστεί και πιο συγκεκριμένα ονόματα πακέτων που παρέχονται όταν τα δεδομένα εμπλουτισμού είναι ανεπαρκή ή το παραγόμενο SQL δεν είναι αρκετά σωστό.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Ένα στοιχείο ευπάθειας στο Open-AudIT μπορεί να θεωρηθεί ως ουσιαστικά ένα ερώτημα κατά της βάσης δεδομένων σας για να καθορίσει την πιθανή έκθεσή σας σε μια δεδομένη έκθεση CVE. Η έκθεση CVE περιλαμβάνει μια ευπάθεια, καθώς και στοιχεία εμπλουτισμού από την FirstWave. Αυτά τα δύο αντικείμενα συνδυάζονται για να παράγουν ένα κατάλληλο ερώτημα που μεταφορτώνεται αυτόματα από το FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Ένα δίκτυο ευρείας περιοχής (WAN) είναι ένα δίκτυο υπολογιστών που καλύπτει μια μεγάλη γεωγραφική περιοχή όπως μια πόλη, χώρα, ή εκτείνεται ακόμη και διηπειρωτικές αποστάσεις. Ένα WAN χρησιμοποιεί ένα κανάλι επικοινωνιών που συνδυάζει πολλούς τύπους μέσων όπως τηλεφωνικές γραμμές, καλώδια και κύματα αέρα. Ένα WAN κάνει συχνά χρήση των εγκαταστάσεων μεταφοράς που παρέχονται από κοινού μεταφορείς, όπως τηλεφωνικές εταιρείες. Οι τεχνολογίες WAN λειτουργούν γενικά στα χαμηλότερα τρία στρώματα του μοντέλου αναφοράς OSI: το φυσικό στρώμα, το στρώμα σύνδεσης δεδομένων, και το στρώμα δικτύου.';

$GLOBALS["lang"]['AD Group'] = 'Ομάδα AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, κ.λπ.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ΟΛΕΣ οι IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Πρόσβαση στο διαδίκτυο';

$GLOBALS["lang"]['API Documentation'] = 'Τεκμηρίωση API';

$GLOBALS["lang"]['API Key required.'] = 'Απαιτείται κλειδί API.';

$GLOBALS["lang"]['API Result'] = 'Αποτέλεσμα API';

$GLOBALS["lang"]['About'] = 'Σχετικά';

$GLOBALS["lang"]['Above are the only required items.'] = 'Πάνω είναι τα μόνα απαιτούμενα στοιχεία.';

$GLOBALS["lang"]['Accept'] = 'Αποδοχή';

$GLOBALS["lang"]['Access Model'] = 'Μοντέλο πρόσβασης';

$GLOBALS["lang"]['access_point'] = 'Σημείο πρόσβασης';

$GLOBALS["lang"]['Access Point'] = 'Σημείο πρόσβασης';

$GLOBALS["lang"]['access_token'] = 'Ένδειξη πρόσβασης';

$GLOBALS["lang"]['Access Token'] = 'Ένδειξη πρόσβασης';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Πρόσβαση στο admin$ μετοχή και RPC χρησιμοποιεί το πρωτόκολλο SMB2.';

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

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Ενεργός κατάλογος και OpenLDAP';

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

$GLOBALS["lang"]['Add Your Credentials'] = 'Προσθήκη της Εντολής σας';

$GLOBALS["lang"]['Add image'] = 'Προσθήκη εικόνας';

$GLOBALS["lang"]['additional_items'] = 'Πρόσθετα αντικείμενα';

$GLOBALS["lang"]['Additional Items'] = 'Πρόσθετα αντικείμενα';

$GLOBALS["lang"]['address'] = 'Διεύθυνση';

$GLOBALS["lang"]['Address'] = 'Διεύθυνση';

$GLOBALS["lang"]['Address any nonconformities'] = 'Αντιμετώπιση τυχόν μη συμμόρφωσης';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Διεύθυνση των πορισμάτων του ελέγχου και διορθωτικά μέτρα';

$GLOBALS["lang"]['Admin'] = 'Διαχειριστής';

$GLOBALS["lang"]['admin_status'] = 'Κατάσταση διαχειριστή';

$GLOBALS["lang"]['Admin Status'] = 'Κατάσταση διαχειριστή';

$GLOBALS["lang"]['advanced'] = 'Προχωρημένα';

$GLOBALS["lang"]['Advanced'] = 'Προχωρημένα';

$GLOBALS["lang"]['Afghanistan'] = 'Αφγανιστάν';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Μετά από μια ενσωμάτωση έχει δημιουργηθεί, όταν βλέπετε τις λεπτομέρειες μιας ολοκλήρωσης θα παρατηρήσετε ένα πεδίο που ονομάζεται Debug. Αυτό έχει οριστεί σε όχι από προεπιλογή. Η αλλαγή του σε ναι παρέχει επιπλέον καταγραφή όταν εκτελείται μια ενσωμάτωση. Η αποσφαλμάτωση δεν πρέπει να μείνει ως ναι. Αυτό συμβαίνει επειδή η έξοδος αποσφαλμάτωσης θα περιέχει τα πάντα που ανακτώνται από εξωτερικά συστήματα - συμπεριλαμβανομένων στοιχείων όπως τα διαπιστευτήρια WMI και SNMP. Η επιλογή αποσφαλμάτωσης θα πρέπει να χρησιμοποιείται μόνο όταν ένα θέμα έχει συμβεί και θέλετε να ψάξετε βαθύτερα για να δείτε αν μπορείτε να καθορίσετε το γιατί.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Μετά την ολοκλήρωση των παραπάνω, απεγκαταστήστε τον πράκτορα.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Πράκτορα; Ανακάλυψη; Εντολή;';

$GLOBALS["lang"]['agents'] = 'Πράκτορες';

$GLOBALS["lang"]['Agents'] = 'Πράκτορες';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Οι εγγραφές των πρακτόρων μπορούν να δημιουργηθούν που καθορίζουν μια διάρκεια, ένα δίκτυο και ένα λειτουργικό σύστημα. Εάν όλα τα τεστ ταιριάζουν, τότε ο διακομιστής ζητά από τον πράκτορα να εκτελέσει ενέργειες. Εάν δεν έχει οριστεί κάποια δοκιμή, αποκλείεται από το <i>όλα πρέπει να ταιριάζουν</i> απαίτηση.<br/><br/>Μπορείτε να δημιουργήσετε πολλαπλούς πράκτορες και να έχετε τον εξυπηρετητή να ελέγχει μία ή όλες τις καταχωρήσεις πράκτορα. Μπορείτε (για παράδειγμα) να ορίσετε έναν πράκτορα που λέει <i>Αν ο πράκτορας IP είναι σε αυτό το υποδίκτυο, ρυθμίστε την τοποθεσία_id της συσκευής</i>.<br/><br/>Ένα άλλο παράδειγμα μπορεί να μην είναι η εκτέλεση ενός ελέγχου καθόλου, μάλλον κατεβάστε ένα σενάριο και εκτελέστε το. Αν ο πράκτορας είναι εγκατεστημένος με δικαιώματα διαχειριστή, μπορείτε τώρα να διαχειριστείτε τις μηχανές σας χωρίς άνοιγμα <strong>Οποιοδήποτε</strong> λιμάνια από αυτό στον κόσμο.<p>Ενεργοποίηση προηγμένων πρακτόρων σημαίνει ότι ένας πράκτορας μπορεί να καθοδηγηθεί να κατεβάσει οποιοδήποτε αρχείο και να εκτελέσει οποιαδήποτε εντολή. <strong>ΠΡΟΕΙΔΟΠΟΙΗΣΗ</strong>: Αυτό έρχεται με κινδύνους ασφαλείας. Αυτή η ρύθμιση θα <strong>μόνο</strong> λειτουργία κατά την εκτέλεση Open-AudIT με χρήση HTTPS και έγκυρου πιστοποιητικού (παρέχεται Αρχή Πιστοποιητικού) για </p>';

$GLOBALS["lang"]['Aggressive'] = 'Επιθετική';

$GLOBALS["lang"]['Aland Islands'] = 'Νήσοι Άλαντ';

$GLOBALS["lang"]['Albania'] = 'Αλβανία';

$GLOBALS["lang"]['Albanian'] = 'Αλβανικά';

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

$GLOBALS["lang"]['All collections URLs use the format'] = 'Όλες οι συλλογές URL χρησιμοποιούν τη μορφή';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Όλα τα υπο- τραπέζια συσκευών περιέχουν μερικές σημαντικές στήλες.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Όλες οι συσκευές με έναν τύπο όπως ο υπολογιστής.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Όλες οι συσκευές με έναν τύπο υπολογιστή ή δρομολογητή.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Όλες οι συσκευές χωρίς διακόπτη και εκτυπωτή.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Όλες οι συσκευές χωρίς διακόπτη και εκτυπωτή. Ουσιαστικά το ίδιο με το παραπάνω ερώτημα.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Όλες οι τακτικές επιλογές ανακάλυψης είναι επίσης διαθέσιμες για χρήση σε Device Seed Discoveries.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Όλες οι εργασίες μπορούν να δημιουργηθούν το ίδιο σε Windows και Linux. Οι εργασίες χρησιμοποιούν τη μέθοδο CRON για τον προγραμματισμό της εκτέλεσης.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Μαζί με αυτό το αίτημα για πληροφορίες, στέλνουμε πίσω στο FirstWave σημεία δεδομένων που θα μας δώσει μερικές πολύ απαραίτητες πληροφορίες σχετικά με τη χρήση χαρακτηριστικών και την εγκατάστασή σας.';

$GLOBALS["lang"]['Also can be created from the'] = 'Επίσης μπορεί να δημιουργηθεί από το';

$GLOBALS["lang"]['Alternatives'] = 'Εναλλακτικές';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Αμαζόνιο AWS Πεδία';

$GLOBALS["lang"]['American Samoa'] = 'Αμερικανική Σαμόα';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Μια ανακάλυψη Active Directory θα διερωτηθεί Active Directory για μια λίστα δικτύων και θα σαρώσει τις σχετικές IPs ακριβώς όπως μια κανονική ανακάλυψη Subnet.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Ένας Οργανισμός (οργάνωση) είναι ο ιδιοκτήτης των περισσότερων αντικειμένων σε συλλογές εντός του Open-AudIT. Με εξαίρεση τα παγκόσμια αντικείμενα όπως <i>διαμόρφωση</i>, τα περισσότερα στοιχεία έχουν ανατεθεί σε (ιδιοκτησία από) έναν Οργ. Ένας χρήστης έχει πρόσβαση σε αυτά τα αντικείμενα σε μια συλλογή, που παρακάτω σε έναν Οργανισμό ο χρήστης έχει άδεια.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Μια εφαρμογή δέχεται ενεργά συνδέσεις TCP, UDP datagrams ή SCTP ενώσεις σε αυτή τη θύρα. Η εύρεση αυτών είναι συχνά ο πρωταρχικός στόχος της σάρωσης της θύρας. Οι άνθρωποι της ασφάλειας γνωρίζουν ότι κάθε ανοιχτό λιμάνι είναι μια λεωφόρος για επίθεση. Οι επιτιθέμενοι και οι pen-testers θέλουν να εκμεταλλευτούν τις ανοικτές θύρες, ενώ οι διαχειριστές προσπαθούν να τις κλείσουν ή να τις προστατεύσουν με τείχη προστασίας χωρίς να ματαιώνουν νόμιμους χρήστες. Οι ανοικτές θύρες είναι επίσης ενδιαφέρουσες για τις σαρώσεις μη ασφαλείας επειδή δείχνουν υπηρεσίες διαθέσιμες για χρήση στο δίκτυο.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Μια σειρά από <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Μια σειρά από <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Μια σειρά αντικειμένων που αναπαριστούν εξωτερικούς συνδέσμους σε περισσότερες πληροφορίες.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Μια μορφωμένη εικασία στην ταυτότητα και τον τύπο της συσκευής';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Ένα κρυπτογραφημένο έγγραφο JSON που περιέχει τα απαιτούμενα χαρακτηριστικά ανάλογα με το <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Ένα ιδιωτικό δίκτυο επιχειρήσεων είναι ένα δίκτυο που ένας ενιαίος οργανισμός χτίζει για να διασυνδέσει τις τοποθεσίες γραφείων του (π.χ. εγκαταστάσεις παραγωγής, κεντρικά γραφεία, απομακρυσμένα γραφεία, καταστήματα) ώστε να μπορούν να μοιράζονται τους πόρους των υπολογιστών.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Μια καταχώρηση μπορεί να δημιουργηθεί χρησιμοποιώντας τη διασύνδεση ιστού αν ο τρέχων χρήστης έχει έναν ρόλο που περιέχει το';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Ένα παράδειγμα JSON POST σώμα είναι κάτω. Αυτό πρέπει να επισυνάπτεται στο έντυπο "δεδομένα".';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Ένα παράδειγμα γραφικού συστατικού SQL που δείχνει τις συσκευές που μετρήθηκαν ανά τοποθεσία.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Ένας υπάρχων χρήστης Open-AudIT επικυρώθηκε και εγκρίθηκε από τον εξυπηρετητή LDAP. Επιτυχία.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Μια ένδειξη του επιπέδου υπηρεσίας που απαιτείται από αυτόν τον ιστότοπο.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Ένα εσωτερικό πεδίο που δείχνει αν η ανακάλυψη έχει ολοκληρωθεί.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Μια ανοικτή θύρα θεωρείται ανοικτή (και θα ενεργοποιήσει την ανίχνευση της συσκευής).<br/>Στα προηγούμενα επεισόδια... Η ΤΠ εξέτασε την ανταπόκριση του Nmap';

$GLOBALS["lang"]['An optional GeoCode'] = 'Ένα προαιρετικό GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Ένας προαιρετικός κωδικός πρόσβασης για χρήση sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Αναλυμένο';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Και τέλος, κάντε κλικ στο Υποβολή για να εκτελέσετε αυτή την ανακάλυψη.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Και αν κάτι πάει στραβά;';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Και τελευταίο κλικ <i>Υποβολή</i> για να δημιουργήσετε τη μέθοδο Open-AudIT Auth σας για Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Και τέλος, όχι τόσο ένα θέμα ασφάλειας - περισσότερη ειρήνη του μυαλού. Οι δομές δεδομένων είναι ανοικτές και τεκμηριωμένες. Μπορείς να τα δεις.';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Και παρέχετε ένα όνομα - σας συνιστούμε ταπεινά Open-AudIT 😀, αλλά μπορείτε να το ονομάσετε ό, τι θέλετε. Βεβαιωθείτε ότι η επιλογή για <i>Ενσωματώστε οποιαδήποτε άλλη εφαρμογή που δεν θα βρείτε στη γκαλερί (Μη-gallery)</i> επιλέγεται. Και μετά κάντε κλικ <i>Δημιουργία<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Και πολλά άλλα.';

$GLOBALS["lang"]['Andorra'] = 'Ανδόρα';

$GLOBALS["lang"]['Angola'] = 'Αγκόλα';

$GLOBALS["lang"]['Anguilla'] = 'Ανγκουίλα';

$GLOBALS["lang"]['Annex A Controls'] = 'Παράρτημα A Έλεγχοι';

$GLOBALS["lang"]['Antarctica'] = 'Ανταρκτική';

$GLOBALS["lang"]['AntiVirus'] = 'Αντιιοί';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Πακέτα AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Αντίγκουα και Μπαρμπούντα';

$GLOBALS["lang"]['Antivirus'] = 'Αντιιοί';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Οποιαδήποτε θύρα TCP (κόμμα διαχωρίζεται, δεν υπάρχουν κενά) επιθυμείτε να αποκλείσετε από αυτή την ανακάλυψη. Διατίθεται μόνο όταν χρησιμοποιείται το Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Οποιεσδήποτε θύρες UDP (κόμμα χωρισμένα, χωρίς κενά) επιθυμείτε να αποκλείσετε από αυτή την ανακάλυψη. Διατίθεται μόνο όταν χρησιμοποιείται το Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Οποιαδήποτε επιπλέον τεκμηρίωση χρειάζεστε.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Οποιαδήποτε επιπλέον σημειώσεις θέλεις να κάνεις.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Οποιαδήποτε χαρακτηριστικά ακολουθούμενα από ένα * δείχνουν ότι τα δεδομένα CVSS λιγότερο από v4 χρησιμοποιήθηκαν για την ολοκλήρωση αυτού του πεδίου. Εξ ορισμού, επιχειρούμε να χρησιμοποιήσουμε τα πεδία v4, ωστόσο αν δεν είναι κατοικημένα θα επιστρέψουμε στην προηγούμενη έκδοση(ες) για χαρακτηριστικά.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Οποιεσδήποτε συσκευές θα ανατεθούν σε αυτόν τον Οργανισμό όταν εκτελέσουν το σενάριο ελέγχου τους (αν είναι καθορισμένο).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Οποιεσδήποτε συσκευές θα ανατεθούν σε αυτόν τον Οργανισμό όταν εκτελέσουν το σενάριο ελέγχου τους (αν είναι καθορισμένο). Συνδέσεις <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Οποιαδήποτε ανακαλυφθείσα συσκευή θα ανατεθεί σε αυτή την τοποθεσία, αν οριστεί. Συνδέσεις <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Οποιεσδήποτε συσκευές που ανακαλύφθηκαν θα ανατεθούν σε αυτήν την Τοποθεσία όταν εκτελέσουν το σενάριο ελέγχου τους (αν είναι σετ).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Οποιεσδήποτε συσκευές που ανακαλύφθηκαν θα ανατεθούν σε αυτήν την Τοποθεσία όταν εκτελέσουν το σενάριο ελέγχου τους (αν είναι σετ). Συνδέσεις <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Οποιαδήποτε ανακαλυφθεί συσκευή θα ανατεθεί σε αυτόν τον Οργ αν οριστεί. Εάν δεν έχουν οριστεί, έχουν ανατεθεί στην <code>org_id</code> αυτής της ανακάλυψης. Συνδέσεις <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Τυχόν αρχεία που βρέθηκαν με αυτόν τον τρόπο αποθηκεύονται στο <i>εκτελέσιμο</i> πίνακα σύμφωνα με οποιοδήποτε άλλο εξάρτημα της συσκευής.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Κάθε απαιτούμενο φίλτρο. ΣΗΜΕΙΩΣΗ: Όταν ο τύπος = κυκλοφορία, αυτό αντιπροσωπεύει το εικονίδιο γραμματοσειράς-απίστευτο.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Οποιεσδήποτε συγκεκριμένες θύρες TCP επιθυμείτε δοκιμασμένες (κόμμα χωριστά, χωρίς κενά).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Οποιεσδήποτε συγκεκριμένες θύρες UDP επιθυμείτε δοκιμαστεί (κόμμα χωρισμένο, χωρίς κενά).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Κάθε χρήστης που αναρτήθηκε εικόνες τοποθετούνται εδώ.';

$GLOBALS["lang"]['Application'] = 'Εφαρμογή';

$GLOBALS["lang"]['Application Definitions'] = 'Ορισμοί εφαρμογής';

$GLOBALS["lang"]['application_id'] = 'ID εφαρμογής';

$GLOBALS["lang"]['Application ID'] = 'ID εφαρμογής';

$GLOBALS["lang"]['Application Licenses'] = 'Άδειες εφαρμογής';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Εφαρμογή, Λειτουργικό Σύστημα ή Υλικό.';

$GLOBALS["lang"]['applications'] = 'Αιτήσεις';

$GLOBALS["lang"]['Applications'] = 'Αιτήσεις';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Οι αιτήσεις είναι ένα μόνο χαρακτηριστικό του Enterprise.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Οι εφαρμογές εισάγονται στο Open-AudIT 2.2 με σκοπό την επέκταση της έννοιας καθώς γίνεται περαιτέρω ανάπτυξη.';

$GLOBALS["lang"]['applied'] = 'Εφαρμόζεται';

$GLOBALS["lang"]['Applied'] = 'Εφαρμόζεται';

$GLOBALS["lang"]['Approved'] = 'Εγκεκριμένο';

$GLOBALS["lang"]['Approved Packages'] = 'Εγκεκριμένες συσκευασίες';

$GLOBALS["lang"]['April'] = 'Απρίλιος';

$GLOBALS["lang"]['Arabic'] = 'Αραβικά';

$GLOBALS["lang"]['architecture'] = 'Αρχιτεκτονική';

$GLOBALS["lang"]['Architecture'] = 'Αρχιτεκτονική';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Επιθυμείτε σίγουρα τη διαγραφή αυτού του αντικειμένου εισόδου;';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Επιθυμείτε σίγουρα τη διαγραφή αυτού του αντικειμένου εξόδου;';

$GLOBALS["lang"]['Are you sure?'] = 'Είσαι σίγουρος;';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Είσαι σίγουρος; Αυτό θα αφαιρέσει όλες τις καταχωρήσεις στην ουρά και θα αποτρέψει την ανακάλυψη των υπόλοιπων IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Είσαι σίγουρος; Αυτό θα επαναφέρει τον αριθμό επεξεργασίας ουράς και θα μπορούσε να προκαλέσει φορτίο στον εξυπηρετητή.';

$GLOBALS["lang"]['area'] = 'Περιοχή';

$GLOBALS["lang"]['Area'] = 'Περιοχή';

$GLOBALS["lang"]['Argentina'] = 'Αργεντινή';

$GLOBALS["lang"]['Armenia'] = 'Αρμενία';

$GLOBALS["lang"]['arp'] = 'Αρπ';

$GLOBALS["lang"]['Arp'] = 'Αρπ';

$GLOBALS["lang"]['Aruba'] = 'Αρούμπα';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Ως υπενθύμιση του τρόπου λειτουργίας των αδειών στο Open-AudIT, βλ.';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Ως εκ τούτου, <strong>πρέπει</strong> έχουν το admin$ μερίδιο στη διάθεση του χρήστη διαπιστευτήρια ανακάλυψη. Παρακαλώ ελέγξτε το στόχο μηχανή Windows παρέχει <i>Γράφω</i> πρόσβαση για τον χρήστη διαπιστευτηρίων ανακάλυψης.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Όπως προαναφέρθηκε, οι προγραμματιστές δεν μιλούν όλες τις γλώσσες μετάφρασης που προσφέρονται. Αυτό σημαίνει ότι δεν μπορούμε να ανασκοπήσουμε με ακουράσι, το μεταφρασμένο κείμενο. Προσπαθούμε να κάνουμε μια βιαστική ανασκόπηση. Αν δείτε κάτι που δεν μεταφράζεται σωστά, μπορείτε να το αλλάξετε ο ίδιος. Επεξεργασία του κατάλληλου αρχείου γλώσσας (όπως παρακάτω) και βρείτε το κείμενο να αλλάξει. Ίσως δεν υπάρχει και πρέπει να το προσθέσεις. Απλά αλλάξτε το κείμενο, αποθηκεύστε το αρχείο και ανανεώστε τη σελίδα σας. Δεν χρειάζεται επανεκκίνηση υπηρεσιών/δαιμόνων για να τεθεί σε ισχύ. Ίσως χρειαστεί να ανανεώσετε τον περιηγητή σας.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Σύμφωνα με τα κριτήρια του OpenSCAP - <i>Μην επιχειρήσετε να εφαρμόσετε καμία από τις ρυθμίσεις σε αυτό το σημείο αναφοράς χωρίς πρώτα να τις δοκιμάσετε σε μη λειτουργικό περιβάλλον. Οι δημιουργοί αυτού του σημείου αναφοράς δεν αναλαμβάνουν καμία ευθύνη για τη χρήση του από άλλα μέρη, και δεν παρέχουν εγγυήσεις, εκφρασμένες ή υπονοούμενες, για την ποιότητα, την αξιοπιστία ή οποιοδήποτε άλλο χαρακτηριστικό του.</i><br/><br/>Σοβαρά, μην αρχίζεις τυφλά. <i>καθορισμός</i> θέματα που αποκαλύφθηκαν μετά την εκτέλεση ενός δείκτη αναφοράς χωρίς πρώτα να δοκιμαστούν διεξοδικά σε ένα μη παραγωγικό, πανομοιότυπο περιβάλλον.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Σύμφωνα με τα χαρακτηριστικά για περιβάλλοντα συσκευών. Παραγωγή, Κατάρτιση, κ.ά.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Καθώς το σενάριο ελέγχου χρησιμοποιεί bash, μπορείτε να χρησιμοποιήσετε το wildcard του * όταν ορίζετε καταλόγους και αποκλεισμούς.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Ως συνήθως, πηγαίνετε στο μενού → Διαχείριση → Ενσωμάτωση → Δημιουργία ενσωμάτωσης. Όπως παραπάνω, αν τρέχετε σε Linux και έχετε NMIS στον ίδιο εξυπηρετητή, δεν χρειάζεται να κάνετε τίποτα άλλο από το να κάνετε κλικ <i>Υποβολή</i>. Δεν μπορώ να το κάνω ευκολότερο.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Καθώς τρέχουμε τις Ανακαλύψεις και συλλέγουμε τα αποτελέσματα των συσκευών, καταγράφουμε τη λίστα των δικτύων. Η λειτουργία Ευλογημένων Υποδικτύων χρησιμοποιεί αυτή τη λίστα δικτύων για να δέχεται μόνο δεδομένα από συσκευές σε αυτά τα δίκτυα.';

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

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Ορισμός διαχειριστή ή ομάδας ISMS';

$GLOBALS["lang"]['Assign an Operator'] = 'Ορισμός φορέα εκμετάλλευσης';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Αναθέστε οποιεσδήποτε ελεγμένες συσκευές σε αυτόν τον Οργανισμό. Αφήστε το κενό για να αφήσει τη συσκευή σε αυτή την εκχωρημένη Org (ή να οριστεί προεπιλεγμένη).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Ορισμός της συσκευής σε τοποθεσία';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Ορισμός της συσκευής σε έναν Οργανισμό';

$GLOBALS["lang"]['Assigned To'] = 'Ανατέθηκε σε';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Ορισμός ανακαλυφθεισών συσκευών';

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

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Προσπάθησε να εντοπίσεις τη συσκευή αν δεν ελέγχουμε το τοπικό παρουσιαστή.';

$GLOBALS["lang"]['Attribute'] = 'Χαρακτηριστικά';

$GLOBALS["lang"]['attributes'] = 'Χαρακτηριστικά';

$GLOBALS["lang"]['Attributes'] = 'Χαρακτηριστικά';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Τα χαρακτηριστικά αποθηκεύονται για το Open-AudIT που χρησιμοποιείται για συγκεκριμένα πεδία, προς το παρόν όλα τα πεδία βασίζονται στις συσκευές, τις τοποθεσίες, τα όργκ και τους πίνακες ερωτήσεων. Τα χαρακτηριστικά που μπορείτε να επεξεργαστείτε σχετίζονται με τις ακόλουθες στήλες: Κλάση, Περιβάλλον, Κατάσταση & Τύπος.';

$GLOBALS["lang"]['Audit'] = 'Έλεγχος';

$GLOBALS["lang"]['Audit AIX'] = 'Έλεγχος AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Έλεγχος DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Έλεγχος ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Linux ελέγχου';

$GLOBALS["lang"]['audit_log'] = 'Καταγραφή ελέγχου';

$GLOBALS["lang"]['Audit Log'] = 'Καταγραφή ελέγχου';

$GLOBALS["lang"]['Audit Mount Point'] = 'Σημείο προσάρτησης ελέγχου';

$GLOBALS["lang"]['Audit My PC'] = 'Έλεγχος Ο υπολογιστής μου';

$GLOBALS["lang"]['Audit Netstat'] = 'Έλεγχος Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Έλεγχος OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Εισαγωγή αποτελέσματος ελέγχου';

$GLOBALS["lang"]['Audit Software'] = 'Λογισμικό ελέγχου';

$GLOBALS["lang"]['Audit Status'] = 'Κατάσταση ελέγχου';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Έλεγχος Win32 Προϊόν';

$GLOBALS["lang"]['Audit Windows'] = 'Έλεγχος παραθύρων';

$GLOBALS["lang"]['Audit the Device'] = 'Έλεγχος της συσκευής';

$GLOBALS["lang"]['Audits'] = 'Έλεγχοι';

$GLOBALS["lang"]['August'] = 'Αύγουστος';

$GLOBALS["lang"]['Australia'] = 'Αυστραλία';

$GLOBALS["lang"]['Austria'] = 'Αυστρία';

$GLOBALS["lang"]['Auth'] = 'Οθόνη';

$GLOBALS["lang"]['auth'] = 'Οθόνη';

$GLOBALS["lang"]['Auth Methods'] = 'Μέθοδοι Ωθών';

$GLOBALS["lang"]['Authenticate only'] = 'Μόνο ταυτοποίηση';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Φράση πρόσβασης ταυτοποίησης';

$GLOBALS["lang"]['Authentication Protocol'] = 'Πρωτόκολλο ταυτοποίησης';

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

$GLOBALS["lang"]['Available Benchmarks'] = 'Διαθέσιμα σημεία αναφοράς';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Αναμονή Ανάλυσης';

$GLOBALS["lang"]['Azerbaijan'] = 'Αζερμπαϊτζάν';

$GLOBALS["lang"]['Azerbaijani'] = 'Αζερμπαϊτζάν';

$GLOBALS["lang"]['Azure Active Directory'] = 'Ενεργός κατάλογος Azure';

$GLOBALS["lang"]['BTU Max'] = 'Μέγιστη BTU';

$GLOBALS["lang"]['BTU Total'] = 'BTU Σύνολο';

$GLOBALS["lang"]['Backbone network'] = 'Δίκτυο ράχης';

$GLOBALS["lang"]['Backup'] = 'Δημιουργία αντιγράφων ασφαλείας';

$GLOBALS["lang"]['Bahamas the'] = 'Μπαχάμες';

$GLOBALS["lang"]['Bahrain'] = 'Μπαχρέιν';

$GLOBALS["lang"]['Bangladesh'] = 'Μπανγκλαντές';

$GLOBALS["lang"]['bank'] = 'Τράπεζα';

$GLOBALS["lang"]['Bank'] = 'Τράπεζα';

$GLOBALS["lang"]['Banned'] = 'Απαγόρευση';

$GLOBALS["lang"]['Banned Packages'] = 'Απαγόρευση πακέτων';

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

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Οι βασικές γραμμές μπορούν να συγκρίνουν τις θύρες netstat, τους χρήστες και το λογισμικό.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Βασικές γραμμές σας επιτρέπουν να συνδυάσετε τα δεδομένα ελέγχου με ένα σύνολο χαρακτηριστικών που έχετε ορίσει προηγουμένως (την αρχική σας γραμμή) για να καθορίσετε τη συμμόρφωση των συσκευών.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Βασικές γραμμές σύγκρισης συσκευών';

$GLOBALS["lang"]['Basic'] = 'Βασικό';

$GLOBALS["lang"]['Basque'] = 'Βασκικά';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Επειδή προσπαθούμε να είμαστε όσο το δυνατόν πιο διαφανείς, εδώ είναι τα πραγματικά δεδομένα σας που στέλνουμε.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Το να είναι σε θέση να καθορίσει ποιες μηχανές διαμορφώνονται με τον ίδιο τρόπο είναι ένα σημαντικό μέρος της διαχείρισης συστημάτων και του ώντιτινγκ – και τώρα η αναφορά σχετικά με αυτό θα γίνει απλή και αυτοματοποιημένη. Μόλις ορίσετε τη γραμμή βάσης σας θα τρέξει αυτόματα ενάντια σε ένα σύνολο συσκευών σε ένα προκαθορισμένο χρονοδιάγραμμα. Η έξοδος αυτών των εκτελεσμένων βασικών γραμμών θα είναι διαθέσιμη για προβολή ιστού, εισαγωγή σε ένα σύστημα τρίτων ή ακόμη και ως έντυπη αναφορά.<br/><br/>Για σκοπούς ελέγχου και διαχείρισης μπορεί να είναι συμφέρουσα για τις επιμέρους συσκευές βάσης έναντι μιας σταθερής, γνωστής καλής συσκευής. Βασικές γραμμές σας επιτρέπουν να συνδυάσετε τα δεδομένα ελέγχου με ένα σύνολο χαρακτηριστικών που έχετε ορίσει προηγουμένως (την αρχική σας γραμμή) για να καθορίσετε τη συμμόρφωση των συσκευών.';

$GLOBALS["lang"]['Belarus'] = 'Λευκορωσία';

$GLOBALS["lang"]['Belgium'] = 'Βέλγιο';

$GLOBALS["lang"]['Belize'] = 'Μπελίζε';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Παρακάτω είναι ένα παράδειγμα της απαιτούμενης μορφής csv.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Κάτω από αυτές τις γραμμές εγχέονται οι μεταβλητές στο σενάριο. Μετά από το προηγούμενο παράδειγμά μας, το σενάριο ελέγχου του Linux είναι γεμάτο με τον κατάλογο μας έτσι';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Παρακάτω μπορείτε να δείτε ένα παράδειγμα Org Chart. Εάν ένας χρήστης έχει άδεια για το <i>Χρηματοδότηση Α</i> Org, έχουν επίσης άδεια για τον απόγονο Orgs του Dept A, B & C. Αυτό είναι ανεξάρτητα από τη συλλογή που ζητείται.<br/><br/>Εάν η συλλογή που ζητείται επιτρέπει την άνοδο, τότε ο χρήστης θα έχει επίσης πρόσβαση στην Εταιρεία #1 και Προκαθορισμένα αντικείμενα Οργ. Αυτό είναι για (όπως παραπάνω) ερωτήματα, ομάδες, et al.<br/><br/>Σημείωση - Ένας χρήστης μπορεί να έχει πρόσβαση σε ένα ερώτημα από το Default Org, αλλά αυτό είναι το ίδιο το ερώτημα όχι το αποτέλεσμα. Το αποτέλεσμα θα δείξει μόνο τις συσκευές που ο χρήστης έχει πρόσβαση σε - συσκευές IE από τα Finance A και Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Σημείωμα';

$GLOBALS["lang"]['benchmark_id'] = 'Αναγνωριστικός κωδικός αναφοράς';

$GLOBALS["lang"]['Benchmark ID'] = 'Αναγνωριστικός κωδικός αναφοράς';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Οι εργασίες Benchmark δημιουργούνται αυτόματα όταν δημιουργείται ένα σημείο αναφοράς.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Η εκτέλεση και η επεξεργασία της Benchmark μπορεί να πάρει μεγάλο χρονικό διάστημα, εξ ου και η προτίμηση να τους προγραμματίσει και να μην εκτελέσετε τους ad-hoc.';

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

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Τα benchmarks δημιουργούνται παρέχοντας ένα λειτουργικό σύστημα και έκδοση, σε συνδυασμό με έναν συγκεκριμένο οδηγό και έναν κατάλογο μηχανών για την εκτέλεσή του. Μετά τη δημιουργία, τα σημεία αναφοράς εκτελούνται κατά τον κατάλογο των μηχανών σε ένα χρονοδιάγραμμα.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Σημεία αναφοράς για την καλύτερη ρύθμιση εξάσκησης';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Τα Benchmarks παρέχουν συστάσεις ασφαλείας για τους υπολογιστές σας, χρησιμοποιώντας τα εργαλεία και τις πολιτικές του OpenSCAP.<p><i>Από την αρχική σελίδα του OpenSCAP:</i> Στον συνεχώς μεταβαλλόμενο κόσμο της ασφάλειας των υπολογιστών όπου ανακαλύπτονται και επιδιορθώνονται νέα τρωτά σημεία κάθε μέρα, η επιβολή της συμμόρφωσης με την ασφάλεια πρέπει να είναι μια συνεχής διαδικασία. Πρέπει επίσης να περιλαμβάνει έναν τρόπο προσαρμογής των πολιτικών, καθώς και περιοδική αξιολόγηση και παρακολούθηση των κινδύνων. Το οικοσύστημα OpenSCAP παρέχει εργαλεία και προσαρμόσιμες πολιτικές για μια γρήγορη, οικονομικά αποδοτική και ευέλικτη εφαρμογή αυτών των διαδικασιών.</p>';

$GLOBALS["lang"]['Benefits'] = 'Οφέλη';

$GLOBALS["lang"]['Bengali'] = 'Μπενγκάλι';

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

$GLOBALS["lang"]['Both forms of'] = 'Αμφότερες οι μορφές';

$GLOBALS["lang"]['Botswana'] = 'Μποτσουάνα';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Νήσος Μπουβέ (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Βραζιλία';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Πορτογαλικά Βραζιλίας';

$GLOBALS["lang"]['Breaking it Down'] = 'Σπάστε το κάτω';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Βρετανικό έδαφος Ινδικού Ωκεανού (Αρχιπέλαγος Τσάγκος)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Βρετανικές Παρθένοι Νήσοι';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Περιήγηση κάτω από το δέντρο σε Console Root -> Συνιστώσες Υπηρεσίες -> Υπολογιστές -> Ο υπολογιστής μου<br/><br/>Δεξί κλικ <i>Ο υπολογιστής μου</i> και επιλέξτε ιδιότητες<br/><br/>Επιλέξτε το <i>Προκαθορισμένες ιδιότητες</i> καρτέλα';

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

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Χτίζει εμπιστοσύνη σε πελάτες και συνεργάτες';

$GLOBALS["lang"]['Bulgaria'] = 'Βουλγαρία';

$GLOBALS["lang"]['Bulgarian'] = 'Βουλγαρικά';

$GLOBALS["lang"]['Bulk Edit'] = 'Μαζική επεξεργασία';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Μαζική μορφή επεξεργασίας';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Χαρακτηριστικά συσκευής μαζικής επεξεργασίας';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Μαζικές επιλογές επεξεργασίας δεν θα παραμείνουν επιλεγμένοι μετά από κλικ στην επόμενη σελίδα.';

$GLOBALS["lang"]['Burkina Faso'] = 'Μπουρκίνα Φάσο';

$GLOBALS["lang"]['Burundi'] = 'Μπουρούντι';

$GLOBALS["lang"]['business_requirements'] = 'Επιχειρηματικές απαιτήσεις';

$GLOBALS["lang"]['Business Requirements'] = 'Επιχειρηματικές απαιτήσεις';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Αλλά έχω μόνο τα Windows Client Machines διαθέσιμα!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Αλλά δεν θέλω να χρειάζεται να αλλάξει το αρχείο γλώσσας κάθε φορά που ενημερώνομαι!';

$GLOBALS["lang"]['Buy'] = 'Αγορά';

$GLOBALS["lang"]['Buy More'] = 'Αγορά περισσότερων';

$GLOBALS["lang"]['Buy More Licenses'] = 'Αγοράστε περισσότερες άδειες';

$GLOBALS["lang"]['By'] = 'Από';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Προκαθορισμένα ενσωματώνουμε όλες τις συσκευές με το χαρακτηριστικό nmis_manage τους σε <i>y</i>. Με 4.2.0 στέλνουμε επίσης έναν κανόνα που λέει <i>Αν ανακαλύψουμε μια συσκευή και έχει έγκυρο OID SNMP, σημειώστε αυτή τη συσκευή όπως διαχειρίζεται το NMIS</i>. Προφανώς μπορείς να το απενεργοποιήσεις αν δεν είναι αυτό που θέλεις.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Εξ ορισμού, παραλείπουμε την επικύρωση πιστοποιητικών επειδή οι πελάτες τείνουν να χρησιμοποιούν αυτο-υπογραφόμενα πιστοποιητικά. Για να ενεργοποιήσετε την επικύρωση πιστοποιητικού, επεξεργαστείτε το παρακάτω αρχείο';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Μάσκα';

$GLOBALS["lang"]['cli_config'] = 'CLI Conf';

$GLOBALS["lang"]['CLI Config'] = 'CLI Conf';

$GLOBALS["lang"]['CPU'] = 'ΚΜΕ';

$GLOBALS["lang"]['CPUs'] = 'ΚΜΕ';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'ΚΒΑ';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'Το CVE με καθεστώς παραλαβής, εν αναμονή ανάλυσης, που υποβλήθηκε σε ανάλυση, απορρίφθηκε. Αυτές οι ΚΕΕ (κυρίως) δεν περιέχουν επαρκείς πληροφορίες για να μας επιτρέψουν να δημιουργήσουμε ένα σωστό ερώτημα SQL.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Υπολογίζεται από την ανακάλυψη.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Υπολογισμένος συνολικός αριθμός έγκυρων διευθύνσεων IP για αυτό το δίκτυο.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Υπολογίζεται μετά την ολοκλήρωση, ο χρόνος που απαιτείται για την εκτέλεση αυτού του αντικειμένου.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Υπολογίζεται όταν εκτελείται η ενσωμάτωση και περιέχει μια αναπαράσταση JSON των συσκευών σε αυτή την ενσωμάτωση. Κάθε σύνδεση με <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Υπολογίζεται όταν εκτελείται η ενσωμάτωση και περιέχει μια αναπαράσταση JSON των τοποθεσιών σε αυτή την ενσωμάτωση. Κάθε σύνδεση με <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Υπολογίζεται όταν εκτελείται η ενσωμάτωση και περιέχει τον αριθμό των συσκευών που επιλέχθηκαν από το Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Υπολογίζεται όταν εκτελείται η ολοκλήρωση και περιέχει τον αριθμό συσκευών που επιλέχθηκαν το εξωτερικό σύστημα.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Υπολογίζεται όταν εκτελείται η ολοκλήρωση και περιέχει τον αριθμό των συσκευών που πρέπει να ενημερώνονται στο εξωτερικό σύστημα.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Υπολογίζεται όταν εκτελείται ενσωμάτωση και περιέχει τον αριθμό των συσκευών που ενημερώνονται στο Open-AudIT.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Καλέστε μια εντολή προτροπή κάνοντας κλικ στο Start and search for <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Καμπότζη';

$GLOBALS["lang"]['Cameroon'] = 'Καμερούν';

$GLOBALS["lang"]['Campus Area Network'] = 'Δίκτυο περιοχής Campus';

$GLOBALS["lang"]['Campus area network'] = 'Δίκτυο περιοχής Campus';

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

$GLOBALS["lang"]['Catalan'] = 'Καταλανικά';

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

$GLOBALS["lang"]['Certification'] = 'Πιστοποίηση';

$GLOBALS["lang"]['Certification Audit'] = 'Έλεγχος πιστοποίησης';

$GLOBALS["lang"]['Certification Process'] = 'Διαδικασία πιστοποίησης';

$GLOBALS["lang"]['Chad'] = 'Τσαντ';

$GLOBALS["lang"]['Change'] = 'Αλλαγή';

$GLOBALS["lang"]['change_id'] = 'Τροποποίηση ID';

$GLOBALS["lang"]['Change ID'] = 'Τροποποίηση ID';

$GLOBALS["lang"]['change_log'] = 'Τροποποίηση καταγραφής';

$GLOBALS["lang"]['Change Log'] = 'Τροποποίηση καταγραφής';

$GLOBALS["lang"]['Change Logs'] = 'Τροποποίηση καταγραφών';

$GLOBALS["lang"]['change_type'] = 'Τροποποίηση τύπου';

$GLOBALS["lang"]['Change Type'] = 'Τροποποίηση τύπου';

$GLOBALS["lang"]['check_minutes'] = 'Έλεγχος λεπτών';

$GLOBALS["lang"]['Check Minutes'] = 'Έλεγχος λεπτών';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Ελέγξτε για SSH σε αυτές τις θύρες';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Ελέγξτε αυτή τη θύρα για οποιαδήποτε υπηρεσία SSH.';

$GLOBALS["lang"]['Chile'] = 'Χιλή';

$GLOBALS["lang"]['China'] = 'Κίνα';

$GLOBALS["lang"]['Chinese'] = 'Κινέζικα';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Κινέζικα (παραδοσιακά)';

$GLOBALS["lang"]['Choose'] = 'Επιλογή';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Επιλέξτε (επιλέξτε το OS πρώτα)';

$GLOBALS["lang"]['Choose a Device'] = 'Επιλέξτε μια συσκευή';

$GLOBALS["lang"]['Choose a Table'] = 'Επιλογή πίνακα';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Επιλέξτε τον τύπο της εργασίας από την πρώτη πτώση. Αυτό θα ρυθμίσει τα πρόσθετα πεδία που απαιτούνται ανάλογα με το είδος της εργασίας.';

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

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Κλικ <i>Νέο μυστικό πελάτη</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Κλικ Υποβολή για Εκτέλεση';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Κλικ σε <i>Ιδιότητες</i> κάτω από το <i>Διαχείριση</i> Κεφαλίδα στην κεντρική στήλη μενού. Αντιγραφή του <i>URL πρόσβασης χρήστη</i>. Μόλις αντιγραφεί, επικολλήστε το στον επεξεργαστή κειμένου σας. Θα πρέπει να αντιγράψετε ένα τμήμα αυτού του πεδίου.<br/><br/>Το πεδίο παραδειγμάτων μας μοιάζει με αυτό<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Το τμήμα που χρειαζόμαστε είναι <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (η ταυτότητα του ενοικιαστή). Αυτό χρησιμοποιείται στο Open-AudIT ως το <i>Ένοικος</i> Πεδίο, έτσι κολλήστε εκεί.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Κάντε κλικ στο App Registrations για να δημιουργήσετε μια νέα εφαρμογή, στη συνέχεια, κάντε κλικ στο New Application Registration. Δώστε του ένα όνομα (Χρησιμοποίησα Open-AudIT), επιλέξτε Web app / API ως τον τύπο και να παρέχει οποιοδήποτε URL (το URL δεν είναι σημαντικό) και τώρα κάντε κλικ στο Δημιουργία.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Κάντε κλικ στο OK και κλείστε το παράθυρο DCOMCNFG.<br/><br/>Οι παραπάνω αλλαγές απαιτούν επανεκκίνηση για να τεθεί σε ισχύ.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Κάντε κλικ στην εφαρμογή που μόλις δημιουργήσατε. Το αναγνωριστικό εφαρμογής που εμφανίζεται είναι το αναγνωριστικό πελάτη.<br/><br/>Για να δημιουργήσετε το μυστικό του πελάτη, κάντε κλικ στις Settings και μετά στα Κλειδιά. Δώστε ένα όνομα κλειδί και επιλέξτε μια κατάλληλη ημερομηνία λήξης, στη συνέχεια, κάντε κλικ στο Αποθήκευση.<br/><br/>Η τιμή θα είναι κατοικημένη για σας - αυτό είναι το μυστικό πελάτη.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Κάντε κλικ στο κουμπί Διαγραφή για να αφαιρέσετε τις συσκευές του παραδείγματος από το Open-AudIT.<br/>Αυτό θα αφαιρέσει τις παρακάτω συσκευές από τη βάση δεδομένων. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Κάντε κλικ στο κουμπί Επεξεργασία για <i>Βασικό SAML Configuration</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Κάντε κλικ στο παρακάτω κουμπί Εισαγωγή για να γεμίσετε Open-AudIT με τα δεδομένα της συσκευής παράδειγμα.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Κάντε κλικ στο εικονίδιο στα δεξιά του πεδίου που επιθυμείτε να επεξεργαστείτε. Αλλάξτε το πεδίο και κάντε κλικ στο πράσινο εικονίδιο για να υποβάλετε.';

$GLOBALS["lang"]['Client ID'] = 'Ταυτότητα πελάτη';

$GLOBALS["lang"]['Client ID and Secret'] = 'Ταυτότητα πελάτη και μυστικό';

$GLOBALS["lang"]['client_ident'] = 'Ταυτότητα πελάτη';

$GLOBALS["lang"]['Client Ident'] = 'Ταυτότητα πελάτη';

$GLOBALS["lang"]['client_secret'] = 'Μυστικό πελάτη';

$GLOBALS["lang"]['Client Secret'] = 'Μυστικό πελάτη';

$GLOBALS["lang"]['client_site_name'] = 'Όνομα ιστοσελίδας πελάτη';

$GLOBALS["lang"]['Client Site Name'] = 'Όνομα ιστοσελίδας πελάτη';

$GLOBALS["lang"]['Close'] = 'Κλείσιμο';

$GLOBALS["lang"]['Closed'] = 'Κλειστό';

$GLOBALS["lang"]['Cloud'] = 'Σύννεφο';

$GLOBALS["lang"]['Cloud Details'] = 'Λεπτομέρειες Cloud';

$GLOBALS["lang"]['Cloud Discovery'] = 'Ανακάλυψη Cloud';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery και Auditing';

$GLOBALS["lang"]['cloud_id'] = 'ID Cloud';

$GLOBALS["lang"]['Cloud ID'] = 'ID Cloud';

$GLOBALS["lang"]['cloud_log'] = 'Καταγραφή Cloud';

$GLOBALS["lang"]['Cloud Log'] = 'Καταγραφή Cloud';

$GLOBALS["lang"]['cloud_name'] = 'Όνομα Cloud';

$GLOBALS["lang"]['Cloud Name'] = 'Όνομα Cloud';

$GLOBALS["lang"]['Cloud Network'] = 'Δίκτυο Cloud';

$GLOBALS["lang"]['clouds'] = 'Σύννεφα';

$GLOBALS["lang"]['Clouds'] = 'Σύννεφα';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Τα Clouds είναι ένα χαρακτηριστικό που διατίθεται στους πελάτες με άδεια Open-AudIT Enterprise.';

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

$GLOBALS["lang"]['Clusters and Reporting'] = 'Σμήνη και υποβολή εκθέσεων';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Νήσοι Κόκος (Keeling)';

$GLOBALS["lang"]['Collection'] = 'Συλλογή';

$GLOBALS["lang"]['Collections'] = 'Συλλογές';

$GLOBALS["lang"]['Collector'] = 'Συλλέκτης';

$GLOBALS["lang"]['Collector (UUID)'] = 'Συλλέκτης (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Συλλέκτης / Server είναι ένα Enterprise μόνο χαρακτηριστικό. Οι πελάτες των επιχειρήσεων λαμβάνουν μια άδεια Collector δωρεάν. Πρόσθετες άδειες συλλογής μπορούν να αγοραστούν όπως απαιτείται.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Συλλέκτης / Server έχει σχεδιαστεί έτσι ώστε να μπορείτε να έχετε ένα απομακρυσμένο ή <i>συλλέκτης</i> παράδειγμα Open-AudIT τρέχει σε ένα απομακρυσμένο μηχάνημα. Αυτό το συλλέκτη παράδειγμα μπορεί να είναι σε μια άλλη ζώνη ασφαλείας, υποδικτύωμα, cloud hosting ή σε μια ιστοσελίδα πελατών. Ο απομακρυσμένος συλλέκτης στη συνέχεια κάνει όλη την ανακάλυψη και τον έλεγχο των συσκευών τοπικά αποφεύγοντας τη δικτύωση και την πολυπλοκότητα firewalling. Ο Συλλέκτης μόλις καταχωρηθεί ελέγχεται πλήρως από το <i>εξυπηρετητής</i>. Αυτό σημαίνει ότι χρειάζεστε μόνο μια σύνδεση HTTP ή HTTPS από αυτόν τον Συλλέκτη στον Server.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Πίνακας συλλογής';

$GLOBALS["lang"]['Collector Name'] = 'Όνομα συλλέκτη';

$GLOBALS["lang"]['collector_uuid'] = 'Συλλέκτης Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Συλλέκτης Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Οι εργασίες συλλογής ρυθμίζονται αυτόματα όταν ενεργοποιηθεί η λειτουργία συλλογής. Οι εργασίες συλλογής δεν πρέπει να δημιουργούνται απευθείας από τους χρήστες. Οι εργασίες συλλογής μπορούν να επεξεργαστούν τη συχνότητά τους μετά τη δημιουργία. Εάν ο εξυπηρετητής Open-AudIT έχει συλλέκτες αναφοράς σε αυτό, παρέχεται μια επιπλέον πτώση προς τα κάτω. Μπορείτε να επιλέξετε αυτό για να καθορίσετε ποιος Συλλέκτης η εργασία θα πρέπει να εκτελείται. Μόνο εργασίες Discovery υποστηρίζονται για Συλλέκτες.';

$GLOBALS["lang"]['Collectors'] = 'Συλλέκτες';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Οι συλλέκτες μπορούν να λειτουργήσουν σε έναν από τους δύο τρόπους: Collector και StandAlone. Όταν σε λειτουργία Collector, η περίπτωση του Open-AudIT ελέγχεται από τον κεντρικό εξυπηρετητή. Όταν είστε σε λειτουργία Stand Alone, η περίπτωση διαχειρίζεται τοπικά και προωθεί οποιαδήποτε συσκευή βρεθεί στον κεντρικό εξυπηρετητή.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Συλλέκτες για απομακρυσμένη ανακάλυψη';

$GLOBALS["lang"]['Colombia'] = 'Κολομβία';

$GLOBALS["lang"]['color'] = 'Χρώμα';

$GLOBALS["lang"]['Color'] = 'Χρώμα';

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

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Σχολιάστε την παρακάτω γραμμή (περίπου γραμμή 49 περίπου). Απλά τοποθετήστε ένα hash # στην αρχή της γραμμής.';

$GLOBALS["lang"]['comments'] = 'Σχόλια';

$GLOBALS["lang"]['Comments'] = 'Σχόλια';

$GLOBALS["lang"]['commercial'] = 'Εμπορικά';

$GLOBALS["lang"]['Commercial'] = 'Εμπορικά';

$GLOBALS["lang"]['Commercial Support'] = 'Εμπορική υποστήριξη';

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

$GLOBALS["lang"]['Complete these steps.'] = 'Ολοκληρώστε αυτά τα βήματα.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Πολυπλοκότητα της επίθεσης (Κάτω ή Ψηλά).';

$GLOBALS["lang"]['Component Table'] = 'Πίνακας συστατικών';

$GLOBALS["lang"]['Components (All Devices)'] = 'Εξαρτήματα (όλες οι συσκευές)';

$GLOBALS["lang"]['Compute'] = 'Υπολογισμός';

$GLOBALS["lang"]['Condition'] = 'Κατάσταση';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Διεξαγωγή εκτίμησης κινδύνου';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Διεξαγωγή προγραμμάτων ευαισθητοποίησης και κατάρτισης';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Συνεδριάσεις για την επανεξέταση της διαχείρισης της διεξαγωγής';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Διεξαγωγή τακτικών ελέγχων επιτήρησης (συνήθως ετησίως)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Διεξαγωγή από διαπιστευμένο φορέα σε δύο στάδια';

$GLOBALS["lang"]['Config'] = 'Conf';

$GLOBALS["lang"]['Config Default, currently '] = 'Προκαθορισμένο ρύθμισης, αυτή τη στιγμή ';

$GLOBALS["lang"]['config_file'] = 'Αρχείο ρύθμισης';

$GLOBALS["lang"]['Config File'] = 'Αρχείο ρύθμισης';

$GLOBALS["lang"]['config_manager_error_code'] = 'Κωδικός σφάλματος διαχειριστή ρυθμίσεων';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Κωδικός σφάλματος διαχειριστή ρυθμίσεων';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Ρυθμιζόμενος έλεγχος πρόσβασης βάσει Roleόλων (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Configuration';

$GLOBALS["lang"]['Configuration'] = 'Configuration';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Configuration ανίχνευσης και αναφοράς αλλαγών';

$GLOBALS["lang"]['Configure'] = 'Configure';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Configure της πλευράς του εξυπηρετητή για την εκτέλεση ελέγχων σε ένα πρόγραμμα';

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

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Συμβουλευτικές υπηρεσίες, υλοποίηση και άλλες υπηρεσίες είναι διαθέσιμες μέσω';

$GLOBALS["lang"]['contact'] = 'Επικοινωνία';

$GLOBALS["lang"]['Contact'] = 'Επικοινωνία';

$GLOBALS["lang"]['contact_name'] = 'Όνομα επαφής';

$GLOBALS["lang"]['Contact Name'] = 'Όνομα επαφής';

$GLOBALS["lang"]['contained_in'] = 'Περιεχόμενα';

$GLOBALS["lang"]['Contained In'] = 'Περιεχόμενα';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Περιέχει ένα αντικείμενο JSON λεπτομέρειες τα σχετικά widgets και τις θέσεις τους.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Περιέχει τα πεδία που καθορίζουν αν θα πρέπει να χρησιμοποιούμε ssh, snmp και wmi επιλογές ανακάλυψης. Ένα αντικείμενο JSON.';

$GLOBALS["lang"]['Context & Leadership'] = 'Πλαίσιο & Ηγεσία';

$GLOBALS["lang"]['Context Engine ID'] = 'ID μηχανής κειμένου';

$GLOBALS["lang"]['Context Name'] = 'Όνομα κειμένου';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Συνεχής βελτίωση του ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Συμβατικές υποχρεώσεις';

$GLOBALS["lang"]['Contractual Obligations'] = 'Συμβατικές υποχρεώσεις';

$GLOBALS["lang"]['Cook Islands'] = 'Νήσοι Κουκ';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Αντιγραφή και επικόλληση αποτελέσματος ελέγχου';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Αντιγραφή και επικόλληση των παρακάτω στα φόρουμ, μια άλλη περίπτωση του Open-AudIT ή οπουδήποτε αλλού θα πρέπει να παρέχουν αυτό το στοιχείο.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Αντιγραφή του <i>ID εφαρμογής</i> πεδίο και επικολλήστε το στο Open-AudIT <i>Ταυτότητα πελάτη</i> πεδίο για τη νέα μέθοδο Auth.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Αντιγραφή του <i>Ταυτότητα πελάτη</i> και επικολλήστε το στο Open-AudIT <i>Ταυτότητα πελάτη</i> Πεδίο.<br/>Αν δεν υπάρχει μυστικό, κάντε κλικ <i>Δημιουργία νέου μυστικού</i>, στη συνέχεια, αντιγράψτε την αξία και επικολλήστε την στο Open-AudIT <i>Μυστικό πελάτη</i> Πεδίο.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Αντιγραφή της τιμής και επικόλληση στη φόρμα Open-AudIT για το <i>Μυστικό πελάτη</i> Πεδίο.';

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

$GLOBALS["lang"]['Create File'] = 'Δημιουργία αρχείου';

$GLOBALS["lang"]['Create Geocode'] = 'Δημιουργία γεωκώδικα';

$GLOBALS["lang"]['create_internal_count'] = 'Δημιουργία εσωτερικού αριθμού';

$GLOBALS["lang"]['Create Internal Count'] = 'Δημιουργία εσωτερικού αριθμού';

$GLOBALS["lang"]['create_internal_from_external'] = 'Δημιουργία εσωτερικού από εξωτερικό';

$GLOBALS["lang"]['Create Internal From External'] = 'Δημιουργία εσωτερικού από εξωτερικό';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Δημιουργία συσκευών NMIS από Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Δημιουργία Open-AudIT Συσκευές από ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Δημιουργία Open-AudIT Συσκευές από το NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Δημιουργία μιας βασικής γραμμής για παράδειγμα συσκευής';

$GLOBALS["lang"]['Create a Discovery'] = 'Δημιουργία μιας ανακάλυψης';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Δημιουργία μιας Δήλωσης Εφαρμογής (SoA)';

$GLOBALS["lang"]['created_by'] = 'Δημιουργία από';

$GLOBALS["lang"]['Created By'] = 'Δημιουργία από';

$GLOBALS["lang"]['created_date'] = 'Ημερομηνία δημιουργίας';

$GLOBALS["lang"]['Created Date'] = 'Ημερομηνία δημιουργίας';

$GLOBALS["lang"]['Creating'] = 'Δημιουργία';

$GLOBALS["lang"]['Creating Credentials'] = 'Δημιουργία εντολής';

$GLOBALS["lang"]['Creating Device'] = 'Δημιουργία συσκευής';

$GLOBALS["lang"]['Creating Widgets'] = 'Δημιουργία γραφικών συστατικών';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Δημιουργία μιας Ανακάλυψης Εισαγωγή επιλογών σάρωσης';

$GLOBALS["lang"]['Creating a Query'] = 'Δημιουργία ενός ερωτήματος';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Δημιουργία μιας δήλωσης SQL για ομάδες';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Δημιουργία δήλωσης SQL για ερωτήσεις';

$GLOBALS["lang"]['Creating an Integration'] = 'Δημιουργία μιας Ολοκλήρωσης';

$GLOBALS["lang"]['creator'] = 'Δημιουργός';

$GLOBALS["lang"]['Creator'] = 'Δημιουργός';

$GLOBALS["lang"]['credential'] = 'Κρητικό';

$GLOBALS["lang"]['Credential'] = 'Κρητικό';

$GLOBALS["lang"]['Credentials'] = 'Καταχώριση';

$GLOBALS["lang"]['Credentials Client ID'] = 'Ταυτότητα πελάτη';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Συνδρομές ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Ταυτότητα εντολοδόχου';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Η κατάρτιση αποθηκεύεται στο <i>διαπιστευτήρια</i> Πίνακας βάσης δεδομένων. Οι πραγματικές πληροφορίες είναι κρυπτογραφημένες στην αποθήκευση. Όταν εκτελείται ένα Discovery, μια συσκευή έχει τα συγκεκριμένα διαπιστευτήριά της που ανακτήθηκαν από τη βάση δεδομένων, αποκρυπτογραφημένα και δοκιμασμένα. Εάν αυτά αποτύχουν ο κατάλογος των διαπιστευτηρίων ανακτήθηκε, αποκρυπτογραφήθηκε και στη συνέχεια δοκιμάστηκε κατά της συσκευής ξεκινώντας με διαπιστευτήρια που είναι γνωστό ότι είχαν εργαστεί προηγουμένως. Τα ειδικά διαπιστευτήρια συσκευής αποθηκεύονται σε ατομικό επίπεδο συσκευής στο <i>καζαντιάλ</i> Πίνακας (σημείωση - όχι <i>α</i> στο όνομα του τραπεζιού). Τα πλήκτρα SSH ελέγχονται πριν από το όνομα χρήστη SSH / κωδικό πρόσβασης. Κατά τον έλεγχο της SSH, τα διαπιστευτήρια θα σημειώνονται επίσης ως εργασία με sudo ή είναι ρίζα.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Η ενότητα μπορεί να έχει έναν από μερικούς διαφορετικούς τύπους - snmp v.1 / v.2, snmp v.3, ssh, ssh key, τα παράθυρα είναι όλα υλοποιημένα. CAVEAT - τα πλήκτρα ssh δεν εφαρμόζονται ακόμα για τους διακομιστές Open-AudIT των Windows.';

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

$GLOBALS["lang"]['Custom Fields'] = 'Προσαρμοσμένα πεδία';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Προσαρμοσμένες θύρες TCP';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Προσαρμοσμένες θύρες TCP. Οποιεσδήποτε συγκεκριμένες θύρες θα liuke σαρωθεί εκτός από το Top TCP Ports. Διαχωρισμένο, χωρίς κενά.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Προσαρμοσμένο UDP Λιμάνια';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Προσαρμοσμένες θύρες UDP. Οποιεσδήποτε συγκεκριμένες θύρες θα liuke σαρωθεί εκτός από το Top UDP Ports. Διαχωρισμένο, χωρίς κενά.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Προσαρμόσιμες επιλογές σάρωσης ανά ανακάλυψη';

$GLOBALS["lang"]['Cve'] = 'Κυψέλη';

$GLOBALS["lang"]['Cyprus'] = 'Κύπρος';

$GLOBALS["lang"]['Czech'] = 'Τσεχικά';

$GLOBALS["lang"]['Czech Republic'] = 'Τσεχική Δημοκρατία';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Λογαριασμός DN (προαιρετικό)';

$GLOBALS["lang"]['DN Password (optional)'] = 'Κωδικός DN (προαιρετικό)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'Όνομα υπολογιστή DNS';

$GLOBALS["lang"]['Danish'] = 'Δανικά';

$GLOBALS["lang"]['dashboard_id'] = 'ID πίνακα';

$GLOBALS["lang"]['Dashboard ID'] = 'ID πίνακα';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Γραφικά συστατικά ταμπλό';

$GLOBALS["lang"]['dashboards'] = 'Δακτύλιοι';

$GLOBALS["lang"]['Dashboards'] = 'Δακτύλιοι';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards και Widgets επιτρέπουν στους πελάτες με άδεια Enterprise να δημιουργήσουν, να διαβάσουν, να ενημερώσουν και να διαγράψουν και τις δύο αυτές συλλογές για να εξασφαλίσουν ότι η αρχική τους σελίδα είναι ακριβώς αυτό που πρέπει να δουν. Όχι μόνο αυτό, αλλά ένας χρήστης είναι σε θέση να θέσει ένα δεδομένο ταμπλό ως δική τους αρχική σελίδα. Όλοι δεν χρειάζεται να χρησιμοποιούν την ίδια αρχική σελίδα (dashboard), ούτε τα ίδια widgets σε αυτό το ταμπλό. Οι επαγγελματίες αδειοδοτημένοι πελάτες μπορούν να επιλέξουν ανάμεσα σε δύο προκαθορισμένα ταμπλό για να ορίσουν ως δική τους αρχική σελίδα.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Οι πίνακες παρέχουν <i>Με μια ματιά</i> σημαντική ορατότητα για αλλαγές που συμβαίνουν στο δίκτυό σας, καθώς και την παροχή γρήγορων συνδέσεων με τύπους συσκευών, κατασκευαστές, και λειτουργικά συστήματα και πολλά άλλα.';

$GLOBALS["lang"]['Dashboards use'] = 'Χρήση ταμπλό';

$GLOBALS["lang"]['Data'] = 'Δεδομένα';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Εξαγωγή δεδομένων - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Διατήρηση δεδομένων';

$GLOBALS["lang"]['Database'] = 'Βάση δεδομένων';

$GLOBALS["lang"]['db_action'] = 'Δράση βάσης δεδομένων';

$GLOBALS["lang"]['Database Action'] = 'Δράση βάσης δεδομένων';

$GLOBALS["lang"]['db_column'] = 'Στήλη βάσης δεδομένων';

$GLOBALS["lang"]['Database Column'] = 'Στήλη βάσης δεδομένων';

$GLOBALS["lang"]['Database Definition'] = 'Ορισμός βάσης δεδομένων';

$GLOBALS["lang"]['db_row'] = 'Γραμμή βάσης δεδομένων';

$GLOBALS["lang"]['Database Row'] = 'Γραμμή βάσης δεδομένων';

$GLOBALS["lang"]['Database Schema'] = 'Σχήμα βάσης δεδομένων';

$GLOBALS["lang"]['Database Server Discovery'] = 'Ανακάλυψη εξυπηρετητή βάσης δεδομένων';

$GLOBALS["lang"]['db_table'] = 'Πίνακας βάσης δεδομένων';

$GLOBALS["lang"]['Database Table'] = 'Πίνακας βάσης δεδομένων';

$GLOBALS["lang"]['Database Tables'] = 'Πίνακες βάσης δεδομένων';

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

$GLOBALS["lang"]['Debugging'] = 'Αποσφαλμάτωση';

$GLOBALS["lang"]['Debugging a Script'] = 'Αποσφαλμάτωση σεναρίου';

$GLOBALS["lang"]['December'] = 'Δεκέμβριος';

$GLOBALS["lang"]['Decommission'] = 'Παροπλισμός';

$GLOBALS["lang"]['Default'] = 'Προκαθορισμένο';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Προκαθορισμένη ταυτοποίηση Επίπεδο - Ορισμός σύνδεσης';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Προκαθορισμένη προσωποποίηση Επίπεδο - Ορισμός για ταυτοποίηση';

$GLOBALS["lang"]['Default Items'] = 'Προκαθορισμένα αντικείμενα';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Προκαθορισμένες ομάδες οργάνων';

$GLOBALS["lang"]['Default Roles Groups'] = 'Προκαθορισμένες ομάδες Roleόλων';

$GLOBALS["lang"]['Default Value'] = 'Προκαθορισμένη τιμή';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Προκαθορισμένο του 389. Κανονικά 636 χρησιμοποιούνται για Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Προκαθορισμένο <code>3</code> για LDAP και ενεργό κατάλογο.';

$GLOBALS["lang"]['Defaults'] = 'Προκαθορισμένα';

$GLOBALS["lang"]['Deferred'] = 'Αναβαλλόμενη';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Καθορισμός του πεδίου εφαρμογής και των στόχων του έργου';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Ορισμός του πεδίου εφαρμογής ISMS';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Καθορίστε το πλαίσιο του οργανισμού (εσωτερικά/εξωτερικά θέματα)';

$GLOBALS["lang"]['delay_minutes'] = 'Καθυστέρηση λεπτών';

$GLOBALS["lang"]['Delay Minutes'] = 'Καθυστέρηση λεπτών';

$GLOBALS["lang"]['Delete'] = 'Διαγραφή';

$GLOBALS["lang"]['Delete Example Devices'] = 'Διαγραφή παραδειγμάτων συσκευών';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Διαγραφή εξωτερικού από το εσωτερικό';

$GLOBALS["lang"]['Delete External From Internal'] = 'Διαγραφή εξωτερικού από το εσωτερικό';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Διαγραφή NMIS Συσκευές αν όχι στο Open-AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Διαγράψτε μια καταχώρηση {συλλογή}.';

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

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Λεπτομέρειες για το ποιος είναι συνήθως contactable σε αυτό το site.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Καθορίστε πόσο συχνά θέλετε να εκτελέσετε τον έλεγχο της γραμμής βάσης κατά τη βάση δεδομένων και να δημιουργήσετε μια προγραμματισμένη αναφορά';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Προσδιορισμός επιλογών θεραπείας κινδύνου';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Ανάπτυξη Σχεδίου Θεραπείας Κινδύνου';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Ανάπτυξη πολιτικών, διαδικασιών και ελέγχων';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Ανάπτυξη της απαιτούμενης τεκμηρίωσης ISMS (πολιτικές, διαδικασίες κ.λπ.)';

$GLOBALS["lang"]['device'] = 'Συσκευή';

$GLOBALS["lang"]['Device'] = 'Συσκευή';

$GLOBALS["lang"]['Device Audits'] = 'Έλεγχοι συσκευών';

$GLOBALS["lang"]['Device Component Names'] = 'Ονόματα συστατικών συσκευών';

$GLOBALS["lang"]['Device ID'] = 'Ταυτότητα συσκευής';

$GLOBALS["lang"]['device_id'] = 'Ταυτότητα συσκευής';

$GLOBALS["lang"]['device_id_a'] = 'Ταυτότητα συσκευής A';

$GLOBALS["lang"]['Device ID A'] = 'Ταυτότητα συσκευής A';

$GLOBALS["lang"]['device_id_b'] = 'Ταυτότητα συσκευής B';

$GLOBALS["lang"]['Device ID B'] = 'Ταυτότητα συσκευής B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Κανόνες αντιστοιχίας συσκευής';

$GLOBALS["lang"]['Device Name'] = 'Όνομα συσκευής';

$GLOBALS["lang"]['Device Result'] = 'Αποτέλεσμα συσκευής';

$GLOBALS["lang"]['Device Results'] = 'Αποτελέσματα συσκευής';

$GLOBALS["lang"]['Device Seed'] = 'Σπόροι συσκευής';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Σπόροι συσκευής Οι ανακαλύψεις είναι μια καλή επιλογή αν γνωρίζετε ότι το δίκτυό σας αποτελείται από μια σειρά υποδικτύων, αλλά δεν είστε σίγουροι τι είναι. Σπόροι την ανακάλυψη με ένα τοπικό δρομολογητή και να παρακολουθήσετε το δίκτυό σας ξετυλίγονται μπροστά στα μάτια σας.';

$GLOBALS["lang"]['Device Seed IP'] = 'IP σπόρων συσκευών';

$GLOBALS["lang"]['Device Status'] = 'Κατάσταση συσκευής';

$GLOBALS["lang"]['Device Types'] = 'Τύποι συσκευών';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Έλεγχος συσκευών και λογισμικού και υλικού';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Η συσκευή είναι στο Subnet';

$GLOBALS["lang"]['Devices'] = 'Συσκευές';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Συσκευές που έχουν ανατεθεί σε τοποθεσία';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Συσκευές που έχουν ανατεθεί σε τοποθεσία';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Συσκευές που έχουν ανατεθεί στον Οργανισμό';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Συσκευές που έχουν ανατεθεί στον Οργανισμό';

$GLOBALS["lang"]['Devices Audited'] = 'Ελεγχόμενες συσκευές';

$GLOBALS["lang"]['Devices Collection'] = 'Συλλογή συσκευών';

$GLOBALS["lang"]['Devices Created in '] = 'Δημιουργήθηκαν συσκευές ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Οι συσκευές δημιουργήθηκαν στο Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Προκαθορισμένες στήλες εμφάνισης συσκευών';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Προκαθορισμένες στήλες εμφάνισης συσκευών';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Συσκευές που βρέθηκαν τις τελευταίες 7 ημέρες';

$GLOBALS["lang"]['Devices Found Today'] = 'Βρέθηκαν συσκευές σήμερα';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Βρέθηκαν συσκευές χθες';

$GLOBALS["lang"]['Devices Missing Information'] = 'Λείπουν πληροφορίες για συσκευές';

$GLOBALS["lang"]['Devices Not Audited'] = 'Οι συσκευές δεν ελέγχθηκαν';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Οι συσκευές δεν βλέπουν 30 ημέρες';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Οι συσκευές δεν βλέπουν 7 ημέρες';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Οι συσκευές δεν βλέπουν 90 ημέρες';

$GLOBALS["lang"]['Devices Older Than X'] = 'Συσκευές παλιότερες του X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Συσκευές Ανακτήθηκε μέσω API';

$GLOBALS["lang"]['Devices Selected from '] = 'Επιλέχθηκαν συσκευές από ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Οι συσκευές επιλέχθηκαν από το Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Ενημέρωση συσκευών ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Ενημέρωση συσκευών σε Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Οι συσκευές αξιολογούνται.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Οι συσκευές δεν αξιολογούνται.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Οι συσκευές θα μπορούσαν να αξιολογηθούν.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Συσκευές από Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Συσκευές σε κατάσταση λειτουργίας';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Συσκευές σε κατάσταση διακοπής';

$GLOBALS["lang"]['Devices in this'] = 'Συσκευές σε αυτό';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Οι συσκευές δεν θα ταιριάξουν αν η κατάστασή τους είναι καθορισμένη <i>διαγράφεται</i>. Οποιαδήποτε άλλη κατάσταση θα επιτρέψει ένα ταίριασμα να συμβεί.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Συσκευές με Λήγει εγγυήσεις';

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

$GLOBALS["lang"]['Discoveries'] = 'Ανακαλύψεις';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Οι ανακαλύψεις βρίσκονται στην καρδιά αυτού που κάνει το Open-AudIT. Πώς αλλιώς να το ξέρεις; <i>Τι Υπάρχει στο Δίκτυό Σας;</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Ανακαλύψεις είναι καταχωρήσεις που σας επιτρέπουν να εκτελέσετε μια ανακάλυψη σε ένα δίκτυο με ένα μόνο κλικ, χωρίς να εισάγετε τις λεπτομέρειες αυτού του δικτύου κάθε φορά.';

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

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Σάρωση ανακαλύψεων Οι επιλογές είναι απλά μια άλλη συλλογή στοιχείων. Οι χρήστες των επιχειρήσεων μπορούν να δημιουργήσουν, να διαβάσουν, να ενημερώσουν και να διαγράψουν καταχωρήσεις όπως απαιτείται. Οι επαγγελματίες χρήστες μπορούν να διαβάσουν όλες τις καταχωρήσεις, αλλά δεν δημιουργούν νέες καταχωρήσεις, να ενημερώσουν τις υπάρχουσες καταχωρήσεις ή να διαγράψουν καταχωρήσεις. Οι χρήστες της Κοινότητας δεν έχουν GUI που να επιτρέπει την πρόσβαση σε αυτή τη συλλογή.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Ανακαλύψτε τύπους σάρωσης';

$GLOBALS["lang"]['Discovery Support'] = 'Υποστήριξη ανακάλυψης';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Το Discovery σταμάτησε να λειτουργεί';

$GLOBALS["lang"]['disk'] = 'Δίσκος';

$GLOBALS["lang"]['Disk'] = 'Δίσκος';

$GLOBALS["lang"]['display_version'] = 'Εμφάνιση έκδοσης';

$GLOBALS["lang"]['Display Version'] = 'Εμφάνιση έκδοσης';

$GLOBALS["lang"]['Display in Menu'] = 'Εμφάνιση σε μενού';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Εμφανίζει μια τυποποιημένη φόρμα ιστού για υποβολή σε POST /{collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Εμφανίζει μια τυποποιημένη φόρμα ιστού για υποβολή στην POST /{collection}/εισαγωγή.';

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

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Μην ξεχάσετε το Open-AudIT wiki για όλα τα έγγραφα σας.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Μην ξεχνάτε υπάρχει ένα βουνό τεκμηρίωσης για το wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Μην σαρώσετε αυτές τις θύρες TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Μην σκανάρετε αυτές τις θύρες UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Μην μου το ξαναδείς.';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Έχετε ένα τέλειο παράδειγμα αυτής της διαμόρφωσης; Ίσως μια συσκευή που βρίσκεται σε ένα εργαστηριακό περιβάλλον ή ένα σταθμό εργασίας που χρησιμοποιείτε για να κλωνοποιήσει VM σταθμό εργασίας από.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Θέλετε να χρησιμοποιήσετε ασφαλή μεταφορά (LDAPS) ή τακτική μη κρυπτογραφημένη LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Θέλετε να δείτε την τυπική πλευρική μπάρα στα αριστερά;';

$GLOBALS["lang"]['documentation'] = 'Τεκμηρίωση';

$GLOBALS["lang"]['Documentation'] = 'Τεκμηρίωση';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Τεκμηρίωση για μια συγκεκριμένη συλλογή.';

$GLOBALS["lang"]['Does Not Equal'] = 'Δεν Είναι Ίσος';

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

$GLOBALS["lang"]['Download a File'] = 'Λήψη ενός αρχείου';

$GLOBALS["lang"]['Download a file from URL'] = 'Λήψη αρχείου από το URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Κατεβάστε απευθείας το σενάριο test_windows_client.vbs';

$GLOBALS["lang"]['Download your updated version from'] = 'Κατεβάστε την ενημερωμένη έκδοση σας από';

$GLOBALS["lang"]['driver'] = 'Οδηγός';

$GLOBALS["lang"]['Driver'] = 'Οδηγός';

$GLOBALS["lang"]['duplex'] = 'Διπλό';

$GLOBALS["lang"]['Duplex'] = 'Διπλό';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Διπλές συσκευές / ελλείπουσες συσκευές';

$GLOBALS["lang"]['duration'] = 'Διάρκεια';

$GLOBALS["lang"]['Duration'] = 'Διάρκεια';

$GLOBALS["lang"]['Dutch'] = 'Ολλανδικά';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'ΕΕΛΑ';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Κάθε IP σαρώνεται με τις διαμορφωμένες επιλογές ανακάλυψης (βλ. Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). Γενικά, το Nmap θα υποβληθεί σε δοκιμή για τις θύρες 22 (ssh), 135 (wmi), 62078 (iPhone) και 161 (snmp). Εάν 22, 135 ή 161 απαντήσουν ο κατάλογος του πιστοποιητικού ανακτηθεί και κάθε πιστοποιητικό δοκιμαστεί με τη σειρά του. Τα πρώτα διαπιστευτήρια χρησιμοποιούνται για περαιτέρω ερωτήσεις απευθείας από τη συσκευή. Σημείωση - εάν μια συσκευή έχει προηγουμένως ανακαλυφθεί και έχει τα διαπιστευτήρια εργασίας, αυτά τα διαπιστευτήρια ελέγχονται πρώτα. Μόνο αν αποτύχουν αυτά είναι τα άλλα διαπιστευτήρια που τότε επιχείρησαν.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Κάθε φορά που μια συσκευή ανακαλύπτεται ή ένα αποτέλεσμα ελέγχου υποβάλλεται σε επεξεργασία, όλοι οι κανόνες ανακτώνται από τη βάση δεδομένων και τρέχουν ενάντια στα χαρακτηριστικά της συγκεκριμένης συσκευής. Κανόνες εναντίον μιας συσκευής κάθε φορά - δεν υπάρχει δυνατότητα να πούμε <i>Εκτέλεση των κανόνων κατά όλων των συσκευών<i> ή <i>Εκτέλεση των κανόνων ενάντια σε αυτές τις συσκευές<i>. Ένας ατομικός κανόνας θα δοκιμάσει ένα ή περισσότερα χαρακτηριστικά της συσκευής και αν ταιριάζουν με τον κανόνα, το αποτέλεσμα θα εφαρμοστεί. Πολλά χαρακτηριστικά μπορούν να δοκιμαστούν. Μπορούν να οριστούν αρκετά χαρακτηριστικά. Σκέψου το σαν ένα αν αυτό, τότε αυτό το σύστημα για το Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Εκτελέστε εύκολα μια ανακάλυψη σε ένα δίκτυο με ένα μόνο κλικ, χωρίς να εισάγετε τις λεπτομέρειες του εν λόγω δικτύου κάθε φορά.';

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

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Ενεργοποίηση κατανεμημένης COM σε αυτόν τον υπολογιστή - Η επιλογή είναι ενεργοποιημένη';

$GLOBALS["lang"]['enabled'] = 'Ενεργοποίηση';

$GLOBALS["lang"]['Enabled'] = 'Ενεργοποίηση';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Ενεργοποίηση της λειτουργίας κάτω από τα Windows';

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

$GLOBALS["lang"]['Endpoint'] = 'Τελικό σημείο';

$GLOBALS["lang"]['English'] = 'Αγγλικά';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Ενίσχυση της κανονιστικής συμμόρφωσης';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Ο εμπλουτισμός ολοκληρώθηκε. Το CVE έχει πλήρη μεταδεδομένα και θεωρείται σταθερό.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Διασφάλιση ελέγχου και πρόσβασης της τεκμηρίωσης';

$GLOBALS["lang"]['enterprise'] = 'Επιχείρηση';

$GLOBALS["lang"]['Enterprise'] = 'Επιχείρηση';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Ιδιωτικό δίκτυο επιχειρήσεων';

$GLOBALS["lang"]['Enterprise private network'] = 'Ιδιωτικό δίκτυο επιχειρήσεων';

$GLOBALS["lang"]['Entitlement Type'] = 'Τύπος δικαιώματος';

$GLOBALS["lang"]['Entra'] = 'Έντρα';

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

$GLOBALS["lang"]['Esperanto'] = 'Εσπεράντο';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Καθιέρωση σχεδίου και χρονοδιαγράμματος του έργου';

$GLOBALS["lang"]['Establish an information security policy'] = 'Καθιέρωση πολιτικής ασφάλειας των πληροφοριών';

$GLOBALS["lang"]['Established'] = 'Καθιερώθηκε';

$GLOBALS["lang"]['Estonia'] = 'Εσθονία';

$GLOBALS["lang"]['Estonian'] = 'Εσθονικά';

$GLOBALS["lang"]['Ethernet MAC'] = 'MAC Ethernet';

$GLOBALS["lang"]['ethernet_mac'] = 'Εθερνέτ MacName';

$GLOBALS["lang"]['Ethernet Mac'] = 'Εθερνέτ MacName';

$GLOBALS["lang"]['Ethiopia'] = 'Αιθιοπία';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Αξιολόγηση του ISMS εσωτερικά';

$GLOBALS["lang"]['Every'] = 'Κάθε';

$GLOBALS["lang"]['Every Day'] = 'Κάθε μέρα';

$GLOBALS["lang"]['Example'] = 'Παράδειγμα';

$GLOBALS["lang"]['Example Devices'] = 'Παράδειγμα συσκευών';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Παράδειγμα γραφήματος οργάνων με πρόσβαση';

$GLOBALS["lang"]['Example text from'] = 'Παράδειγμα κειμένου από';

$GLOBALS["lang"]['Examples'] = 'Παραδείγματα';

$GLOBALS["lang"]['Exceptions'] = 'Εξαιρέσεις';

$GLOBALS["lang"]['exclude'] = 'Εξαίρεση';

$GLOBALS["lang"]['Exclude'] = 'Εξαίρεση';

$GLOBALS["lang"]['exclude_ip'] = 'Εξαίρεση IP';

$GLOBALS["lang"]['Exclude IP'] = 'Εξαίρεση IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Εξαίρεση διευθύνσεων IP';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Εξαιρούνται οι διευθύνσεις IP (ατομικές IP - 192.168.1.20, εύρος - 192.168.1.30-40 ή υποδίκτυα - 192.168.1.100/30) που αναφέρονται από τη σάρωση. Διαχωρισμένο, χωρίς κενά.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Εξαίρεση θυρών TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Εξαίρεση θυρών Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Εξαίρεση θυρών Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Εξαίρεση θυρών UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Εξαίρεση θυρών Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Εξαίρεση θυρών Udp';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Αποκλείστε τυχόν θύρες που αναφέρονται από τη σάρωση. Διαχωρισμένο, χωρίς κενά.';

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

$GLOBALS["lang"]['Exporting a Device'] = 'Εξαγωγή μιας συσκευής';

$GLOBALS["lang"]['expose'] = 'Εκθέστε';

$GLOBALS["lang"]['Expose'] = 'Εκθέστε';

$GLOBALS["lang"]['External'] = 'Εξωτερικό';

$GLOBALS["lang"]['External Field Name'] = 'Όνομα εξωτερικού πεδίου';

$GLOBALS["lang"]['External Field Type'] = 'Τύπος εξωτερικού πεδίου';

$GLOBALS["lang"]['External Field Types'] = 'Εξωτερικοί τύποι πεδίου';

$GLOBALS["lang"]['external_ident'] = 'Εξωτερική ταυτότητα';

$GLOBALS["lang"]['External Ident'] = 'Εξωτερική ταυτότητα';

$GLOBALS["lang"]['external_link'] = 'Εξωτερικός δεσμός';

$GLOBALS["lang"]['External Link'] = 'Εξωτερικός δεσμός';

$GLOBALS["lang"]['extra_columns'] = 'Επιπλέον στήλες';

$GLOBALS["lang"]['Extra Columns'] = 'Επιπλέον στήλες';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Έξτρα και Time based Reporting';

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

$GLOBALS["lang"]['Fields attributes are'] = 'Χαρακτηριστικά πεδίων';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Φίτζι τα νησιά Φίτζι';

$GLOBALS["lang"]['File'] = 'Αρχείο';

$GLOBALS["lang"]['File Auditing'] = 'Έλεγχος αρχείων';

$GLOBALS["lang"]['File Import'] = 'Εισαγωγή αρχείου';

$GLOBALS["lang"]['File Input'] = 'Εισαγωγή αρχείου';

$GLOBALS["lang"]['file_name'] = 'Όνομα αρχείου';

$GLOBALS["lang"]['File Name'] = 'Όνομα αρχείου';

$GLOBALS["lang"]['File Share Discovery'] = 'Ανακάλυψη κοινής χρήσης αρχείων';

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

$GLOBALS["lang"]['Filtered Ports'] = 'Φιλτραρισμένες θύρες';

$GLOBALS["lang"]['Finland'] = 'Φινλανδία';

$GLOBALS["lang"]['Finnish'] = 'Φινλανδικά';

$GLOBALS["lang"]['Firewall'] = 'Τοίχος πυρκαγιάς';

$GLOBALS["lang"]['Firewall Packages'] = 'Πακέτα τοίχου';

$GLOBALS["lang"]['firewall_rule'] = 'Κανόνας του τείχους πυρός';

$GLOBALS["lang"]['Firewall Rule'] = 'Κανόνας του τείχους πυρός';

$GLOBALS["lang"]['firmware'] = 'Υφασμάτινα είδη';

$GLOBALS["lang"]['Firmware'] = 'Υφασμάτινα είδη';

$GLOBALS["lang"]['firmware_revision'] = 'Αναθεώρηση firmware';

$GLOBALS["lang"]['Firmware Revision'] = 'Αναθεώρηση firmware';

$GLOBALS["lang"]['First'] = 'Πρώτο';

$GLOBALS["lang"]['First Name'] = 'Όνομα';

$GLOBALS["lang"]['first_run'] = 'Πρώτη εκτέλεση';

$GLOBALS["lang"]['First Run'] = 'Πρώτη εκτέλεση';

$GLOBALS["lang"]['first_seen'] = 'Πρώτα Είδατε';

$GLOBALS["lang"]['First Seen'] = 'Πρώτα Είδατε';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Πρώτη εστίαση σε ποια είναι η τελική ανάγκη είναι: προσπαθείτε να βασικό λογισμικό, χρήστες ή δεδομένα Netstat; Ποιο είναι το σημαντικό(-α) πράγμα(-α) για τη σύγκριση και την αναφορά;';

$GLOBALS["lang"]['FirstWave'] = 'Πρώτη προβολή';

$GLOBALS["lang"]['Fix'] = 'Διόρθωση';

$GLOBALS["lang"]['Fixed'] = 'Σταθερό';

$GLOBALS["lang"]['Fixing the Issue'] = 'Διόρθωση του Θέματος';

$GLOBALS["lang"]['Floor'] = 'Όροφος';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Ακολουθήστε οποιονδήποτε από τους παρακάτω συνδέσμους και ανακαλύψτε πώς να χρησιμοποιήσετε το Open-AudIT για να μάθετε <b>Τι Υπάρχει στο Δίκτυό Σας;</b>';

$GLOBALS["lang"]['For'] = 'Για';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Για <i>Τύπος</i> Βεβαιωθείτε ότι επιλέγετε την αρχική γραμμή και για την ομάδα θα πρέπει να επιλέξετε μια ομάδα συσκευών, εάν ισχύει για αυτή την αρχική γραμμή, που αντιπροσωπεύουν καλύτερα τις συσκευές για την εφαρμογή της αρχικής γραμμής έναντι. Αυτό θα αποτρέψει εσφαλμένες καταχωρήσεις.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Για εκτέλεση Debian/Ubuntu, συμπεριλαμβανομένης της ρύθμισης dpkg για να θυμάστε την παράκαμψή σας ώστε μια αναβάθμιση apt-get να μην σπάσει';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Για SNMP Open-AudIT μπορεί να χρησιμοποιήσει v1, v2 και v3 διαπιστευτήρια. Η συσκευή είναι queried ανεξάρτητα από το αν είναι ένα router, switch (κανονική συσκευές δικτύου) ή ένας υπολογιστής (Linux και Windows συχνά τρέχουν SNMP για εργαλεία παρακολούθησης).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Για ένα αστάρι στην cron, δείτε αυτή τη σελίδα Wikipedia';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Για μια ανακάλυψη σπόρων, θα πρέπει να ανακαλύψω μόνο τις IP στον ιδιωτικό χώρο διευθύνσεων IP.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Για μια ανακάλυψη σπόρων, θα πρέπει να ανακαλύψω μόνο IPs στο επιλεγμένο υποδίκτυο.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Για μια ανακάλυψη σπόρου, πρέπει να βρω το υποδίκτυο πριν εκτελέσω την ανακάλυψη.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Για προχωρημένη είσοδο ενός ακατέργαστου ερωτήματος SQL. Σύμφωνα με τις ερωτήσεις, πρέπει να συμπεριλάβετε <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Για κάθε αναπαραγωγική διαδικασία, συμβαίνουν τα παρακάτω.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Για παράδειγμα - μπορεί να δημιουργήσετε μια βασική γραμμή από μια συσκευή που τρέχει Redhat 9 η οποία λειτουργεί ως ένας από τους διακομιστές Apache σας σε μια συστάδα. Ξέρετε ότι αυτός ο συγκεκριμένος εξυπηρετητής έχει ρυθμιστεί ακριβώς όπως τον θέλετε αλλά δεν είστε σίγουροι αν άλλοι servers στη συστάδα έχουν ρυθμιστεί ακριβώς το ίδιο. Οι βασικές γραμμές σας επιτρέπουν να προσδιορίσετε αυτό.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Για παράδειγμα - μπορεί να δημιουργήσετε μια βασική γραμμή από μια συσκευή που τρέχει Redhat 9 η οποία λειτουργεί ως ένας από τους διακομιστές Apache σας σε μια συστάδα. Ξέρετε ότι αυτός ο συγκεκριμένος εξυπηρετητής έχει ρυθμιστεί ακριβώς όπως τον θέλετε αλλά δεν είστε σίγουροι αν άλλοι servers στη συστάδα έχουν ρυθμιστεί ακριβώς το ίδιο. Οι γραμμές βάσης σας επιτρέπουν να προσδιορίσετε αυτό.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Για περισσότερες πληροφορίες, δείτε το wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Για άδειες που δεν είναι αέναες, πότε λήγει η άδεια.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Για περισσότερες πληροφορίες, ελέγξτε τη Βάση Γνώσης Open-AudIT.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Για περισσότερες πληροφορίες ανατρέξτε στον παρακάτω οδηγό που περιλαμβάνει ένα βίντεο. Χρήση';

$GLOBALS["lang"]['For more information, see'] = 'Για περισσότερες πληροφορίες, βλ.';

$GLOBALS["lang"]['form_factor'] = 'Συντελεστής μορφής';

$GLOBALS["lang"]['Form Factor'] = 'Συντελεστής μορφής';

$GLOBALS["lang"]['format'] = 'Μορφή';

$GLOBALS["lang"]['Format'] = 'Μορφή';

$GLOBALS["lang"]['Forth'] = 'Φουντωτό';

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

$GLOBALS["lang"]['From that page'] = 'Από εκείνη τη σελίδα';

$GLOBALS["lang"]['full_name'] = 'Πλήρες όνομα';

$GLOBALS["lang"]['Full Name'] = 'Πλήρες όνομα';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Πλήρες ώντιτινγκ cloud με όλες τις λεπτομέρειες από έναν κανονικό έλεγχο Open-AudIT και λεπτομέρειες όπως ο τύπος και το μέγεθος μηχανών.';

$GLOBALS["lang"]['function'] = 'Συνάρτηση';

$GLOBALS["lang"]['Function'] = 'Συνάρτηση';

$GLOBALS["lang"]['GROUP BY'] = 'ΟΜΑΔΑ';

$GLOBALS["lang"]['Gabon'] = 'Γκαμπόν';

$GLOBALS["lang"]['Galician'] = 'Γαλικιακά';

$GLOBALS["lang"]['Gambia the'] = 'Γκάμπια';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Ανάλυση Gap (προαιρετική)';

$GLOBALS["lang"]['gateway'] = 'Πύλη';

$GLOBALS["lang"]['Gateway'] = 'Πύλη';

$GLOBALS["lang"]['gateways'] = 'Πύλες';

$GLOBALS["lang"]['Gateways'] = 'Πύλες';

$GLOBALS["lang"]['Generated By'] = 'Δημιουργία από';

$GLOBALS["lang"]['geo'] = 'Γεω';

$GLOBALS["lang"]['Geo'] = 'Γεω';

$GLOBALS["lang"]['Geographical Maps'] = 'Γεωγραφικοί χάρτες';

$GLOBALS["lang"]['Georgia'] = 'Γεωργία';

$GLOBALS["lang"]['German'] = 'Γερμανικά';

$GLOBALS["lang"]['Germany'] = 'Γερμανία';

$GLOBALS["lang"]['Get Lat/Long'] = 'Πάρτε Lat / Long';

$GLOBALS["lang"]['Get News'] = 'Λήψη ειδήσεων';

$GLOBALS["lang"]['Get Started'] = 'Ξεκινήστε';

$GLOBALS["lang"]['Get a Free License'] = 'Λήψη δωρεάν άδειας';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Εξοικειωθείτε με την πλατφόρμα Open-AudIT και εξερευνήστε μερικά από τα χαρακτηριστικά της.';

$GLOBALS["lang"]['Getting Started'] = 'Έναρξη';

$GLOBALS["lang"]['Ghana'] = 'Γκάνα';

$GLOBALS["lang"]['Gibraltar'] = 'Γιβραλτάρ';

$GLOBALS["lang"]['Github'] = 'Γκιθουμπ';

$GLOBALS["lang"]['Global Discovery Options'] = 'Επιλογές παγκόσμιας ανακάλυψης';

$GLOBALS["lang"]['Global area network'] = 'Παγκόσμιο δίκτυο περιοχής';

$GLOBALS["lang"]['Go'] = 'Πήγαινε.';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Επιστρέψτε στον εξυπηρετητή σας Open-AudIT και δημιουργήστε μια ανακάλυψη με το στόχο Windows υπολογιστές IP Address ως το υποδίκτυο (αυτό θα σώσει την ανάγκη να ανακαλύψετε ξανά ολόκληρο το υποδίκτυο). Εκτελέστε την ανακάλυψη, λαμβάνοντας υπόψη τυχόν ζητήματα. Για τυχόν ζητήματα που ανακύπτουν, λάβετε τα κατάλληλα μέτρα.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Πηγαίνετε το στόχο Windows PC (ή χρησιμοποιήστε RDP) και συνδεθείτε ως ο χρήστης που χρησιμοποιείται από την ανακάλυψή σας credential set.';

$GLOBALS["lang"]['Go to menu'] = 'Μετάβαση στο μενού';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Πήγαινε στο <i>Αιτήσεις</i> -> <i>Καταχωρήσεις εφαρμογών</i> αντικείμενο μενού στα αριστερά. Αναζήτηση για Open-AudIT. Κάντε κλικ στην καταχώρηση Open-AudIT στη λίστα (υποθέτοντας ότι έχετε ονομάσει την εφαρμογή Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Πήγαινε στο <i>Πιστοποιητικά και μυστικά</i> Στοιχείο μενού <i>Διαχείριση</i> στο μενού του κέντρου.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Πήγαινε στο <i>Ένα σήμα</i> αντικείμενο μενού και κάντε κλικ στο SAML για <i>Επιλέξτε μία μόνο μέθοδο σύνδεσης</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Υπολογίστε πεδία Google';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Καταχώριση';

$GLOBALS["lang"]['Google Maps API Key'] = 'API χαρτών Google Κλειδί';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Τέλεια, τότε μπορείς να βοηθήσεις! Αποστολή πρώτου Κίνησε το κείμενο που φαίνεται στο γραφικό περιβάλλον και τι πρέπει να εμφανίζεται. Θα συμπεριλάβουμε ότι στο αρχείο γλώσσα έτσι πηγαίνει προς τα εμπρός, η μετάφραση έχει βελτιωθεί και δεν χρειάζεται να ανησυχείτε για την ενημέρωση του για κάθε κυκλοφορία!';

$GLOBALS["lang"]['Greater Than'] = 'Μεγαλύτερο από';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Μεγαλύτερο από ή ίσο';

$GLOBALS["lang"]['Greece'] = 'Ελλάδα';

$GLOBALS["lang"]['Greek'] = 'Ελληνικά';

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

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Οι ομάδες χρησιμοποιούνται ως απλές λίστες συσκευών που ταιριάζουν στις απαιτούμενες συνθήκες. Εάν ζητηθεί χρησιμοποιώντας JSON επιστρέφουν μια λίστα με <i>συσκευές.id</i> Μόνο. Εάν ζητηθεί χρησιμοποιώντας τη διασύνδεση ιστού, επιστρέφουν την τυπική λίστα χαρακτηριστικών στήλης. Οι ομάδες μπορούν να χρησιμοποιηθούν για ενσωμάτωση, βασικές γραμμές και άλλα αντικείμενα.';

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

$GLOBALS["lang"]['Hardware'] = 'Υλικό';

$GLOBALS["lang"]['hardware_revision'] = 'Αναθεώρηση υλικού';

$GLOBALS["lang"]['Hardware Revision'] = 'Αναθεώρηση υλικού';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Έχει εφαρμοστεί αυτή η πολιτική σε αυτόν τον οργανισμό.';

$GLOBALS["lang"]['hash'] = 'Χας.';

$GLOBALS["lang"]['Hash'] = 'Χας.';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Βάλε τον πράκτορα να τρέξει πάντα το τελευταίο σενάριο ελέγχου (αν αναβαθμίσετε το Open-AudIT και αντιγράψετε χειροκίνητα τα σενάρια στους στόχους, τότε ρυθμίστε το cron - θα χρειαστεί να ενημερώσετε αυτά τα σενάρια για κάθε αναβάθμιση).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Βάλε το χρήστη σου να ανοίξει μια εντολή (χρησιμοποιώντας <i>Εκτέλεση ως διαχειριστής</i>). Επικολλήστε τα παρακάτω στην άμεση λήψη του Agent.';

$GLOBALS["lang"]['Head'] = 'Υπεύθυνος';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Νήσοι Χερντ και ΜακΝτόναλντ';

$GLOBALS["lang"]['Hebrew'] = 'Εβραϊκά';

$GLOBALS["lang"]['height'] = 'Ύψος';

$GLOBALS["lang"]['Height'] = 'Ύψος';

$GLOBALS["lang"]['Height in RU'] = 'Ύψος σε ΕΣ';

$GLOBALS["lang"]['Help'] = 'Βοήθεια';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Βοήθεια και Συχνές Ερωτήσεις';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Βοηθά στη διαχείριση και μετριασμό των κινδύνων για την ασφάλεια των πληροφοριών';

$GLOBALS["lang"]['Hide Audit Window'] = 'Απόκρυψη παραθύρου ελέγχου';

$GLOBALS["lang"]['high'] = 'Υψηλή';

$GLOBALS["lang"]['High'] = 'Υψηλή';

$GLOBALS["lang"]['High Availability'] = 'Υψηλή διαθεσιμότητα';

$GLOBALS["lang"]['Hindi'] = 'Χίντι';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Αγία Έδρα (Πόλη του Βατικανού)';

$GLOBALS["lang"]['Home'] = 'Σπίτι';

$GLOBALS["lang"]['home'] = 'Σπίτι';

$GLOBALS["lang"]['Home Area Network'] = 'Δίκτυο Home Area';

$GLOBALS["lang"]['Home area network'] = 'Δίκτυο αρχικής περιοχής';

$GLOBALS["lang"]['Honduras'] = 'Ονδούρα';

$GLOBALS["lang"]['Hong Kong'] = 'Χονγκ Κονγκ';

$GLOBALS["lang"]['host'] = 'Υπολογιστής';

$GLOBALS["lang"]['Host'] = 'Υπολογιστής';

$GLOBALS["lang"]['hostname'] = 'Όνομα υπολογιστή';

$GLOBALS["lang"]['Hostname'] = 'Όνομα υπολογιστή';

$GLOBALS["lang"]['hour'] = 'Ώρα';

$GLOBALS["lang"]['Hour'] = 'Ώρα';

$GLOBALS["lang"]['How Does It Work?'] = 'Πώς Λειτουργεί;';

$GLOBALS["lang"]['How Does it Work?'] = 'Πώς λειτουργεί;';

$GLOBALS["lang"]['How Long Does it Take'] = 'Πόσο καιρό παίρνει;';

$GLOBALS["lang"]['How and Why is'] = 'Πώς και γιατί';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Πώς και γιατί το Open-AudIT είναι πιο ασφαλές';

$GLOBALS["lang"]['How do they work?'] = 'Πώς λειτουργούν;';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Πώς βρίσκει μια συσκευή Discovery γνωστό IP;';

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

$GLOBALS["lang"]['Hungarian'] = 'Ουγγρικά';

$GLOBALS["lang"]['Hungary'] = 'Ουγγαρία';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Υπερηχογράφημα';

$GLOBALS["lang"]['Hyperthreading'] = 'Υπερηχογράφημα';

$GLOBALS["lang"]['I have read the EULA.'] = 'Διάβασα την EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Ελπίζω αυτή η θέση να έχει ανακουφίσει κάθε ανησυχία που έχετε για το Open-AudIT και την ασφάλεια. Εάν έχετε οποιεσδήποτε ερωτήσεις, παρακαλώ μην διστάσετε να επικοινωνήσετε μαζί μας εδώ στο FirstWave. Είμαστε πάντα στην ευχάριστη θέση να συζητήσουμε τις ανησυχίες και τις ανάγκες σας. Και ίσως αν η ερώτησή σας δεν είναι κάτι που έχω αντιμετωπίσει εδώ, μπορώ να την προσθέσω εδώ για τους μελλοντικούς χρήστες';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'ΑΝ';

$GLOBALS["lang"]['IMPORTANT'] = 'ΣΗΜΑΝΤΙΚΟ';

$GLOBALS["lang"]['INPUTS'] = 'ΕΝΕΡΓΗΤΙΚΟ';

$GLOBALS["lang"]['IOS Version'] = 'Έκδοση IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Διεύθυνση IP';

$GLOBALS["lang"]['IP Addresses'] = 'Διευθύνσεις IP';

$GLOBALS["lang"]['IP Last Seen'] = 'Τελευταία προβολή IP';

$GLOBALS["lang"]['IP Set By'] = 'Ορισμός IP από';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

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

$GLOBALS["lang"]['Identify information assets'] = 'Προσδιορισμός περιουσιακών στοιχείων πληροφοριών';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Προσδιορίστε τα ενδιαφερόμενα μέρη και τις απαιτήσεις τους';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Προσδιορισμός βασικών φορέων και ανάθεση rolesόλων';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Προσδιορίστε τη συσκευή ή τις συσκευές που είναι υποδειγματικές σας, ή <i>χρυσή εικόνα</i> θέλετε να συγκρίνετε παρόμοιες συσκευές εναντίον.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Προσδιορισμός και αξιολόγηση των κινδύνων ασφαλείας';

$GLOBALS["lang"]['If'] = 'Εάν';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Εάν μια συσκευή ανακαλυφθεί μεμονωμένα χρησιμοποιώντας το <i>Ανακαλύψτε τη συσκευή</i> σύνδεση στη σελίδα λεπτομερειών της συσκευής, πρώτα ελέγχουμε αν αυτή η συσκευή έχει ανακαλυφθεί προηγουμένως (από την Discovery) και αν ναι, χρησιμοποιήστε τις επιλογές ανακάλυψης από την εν λόγω σάρωση. Αν δεν έχει προηγουμένως ανακαλυφθεί, επιστρέφουμε στην ανακάλυψη στοιχείων ρυθμίσεων_default_scan_option τις ρυθμίσεις.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Εάν δημιουργηθεί ένας νέος Οργανισμός, ένα όνομα ομάδας LDAP προκύπτει αυτόματα από το όνομα. Για παράδειγμα, αν δημιουργηθεί ένας νέος Οργανισμός και ονομαστεί Δοκιμή, η αντίστοιχη ομάδα LDAP θα ονομαστεί open-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Εάν μια θύρα ανταποκρίνεται με φίλτρο, θα πρέπει να το θεωρήσουμε διαθέσιμο.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Εάν μια θύρα ανταποκρίνεται με ανοιχτόφιλτρα, θα πρέπει να το θεωρήσουμε διαθέσιμο.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Εάν μια απομακρυσμένη συσκευή δεν υπάρχει στις επιλεγμένες συσκευές Open-AudIT, εάν τη διαγράψουμε από το εξωτερικό σύστημα.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Εάν έχει αλλάξει μια συσκευή Open-AudIT, θα πρέπει να ενημερώσουμε το εξωτερικό σύστημα.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Εάν μια συσκευή Open-AudIT δεν είναι στο εξωτερικό σύστημα, θα πρέπει να τη δημιουργήσουμε.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Εάν ένας πράκτορας αναφέρει την κύρια IP του είναι σε αυτό το υποδίκτυο, εκτελέστε τις ενέργειες.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Εάν ανιχνευθεί κάποια από αυτές τις θύρες (διαχωρισμένες από το κώμα, χωρίς κενά), υποθέστε ότι η SSH τρέχει πάνω τους και τις χρησιμοποιεί για ώντιτινγκ. Δεν χρειάζεται να προσθέσετε αυτή τη θύρα στις προσαρμοσμένες θύρες TCP - θα προστεθεί αυτόματα.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Εάν δεν ορίζεται χειριστής, η προεπιλογή είναι =. Ιδιότητες πρέπει να είναι πλήρως καταρτισμένες - δηλαδή, συσκευές.hostname (όχι μόνο hostname).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Αν δεν υπάρχει αξία, παράδωσε αυτή την τιμή. EG: για το system.nmis_group / ρύθμιση. ομάδα που χρησιμοποιούμε';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Αν οριστεί, κρατά μια σειρά JSON από συγκεκριμένες στήλες συσκευών που αυτός ο χρήστης έχει επιλέξει να δει, εκτός από τις προκαθορισμένες ρυθμίσεις.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Εάν η Οικογένεια OS (όπως αναφέρεται από τη συσκευή) περιέχει αυτό το στοιχείο, περάστε.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Εάν ο εξυπηρετητής Open-AudIT έχει συλλέκτες αναφοράς σε αυτό, παρέχεται μια επιπλέον πτώση προς τα κάτω. Μπορείτε να επιλέξετε αυτό για να καθορίσετε ποιος Συλλέκτης η εργασία θα πρέπει να εκτελείται. Μόνο εργασίες Discovery υποστηρίζονται για Συλλέκτες.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Εάν η οικογένεια του παράγοντα OS (περίπτωση αναίσθητη) περιέχει αυτή τη συμβολοσειρά, εκτελέστε τις ενέργειες.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Αν το δυαδικό δεν βρεθεί σε καμία από αυτές τις τοποθεσίες, ένα προειδοποιητικό μήνυμα θα εμφανιστεί στον εγκαταστάτη.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Εάν πληρούνται οι ακόλουθες προϋποθέσεις:<br/><ul><li>ένας ρόλος έχει ανατεθεί ad_group</li><li>ένας οργανισμός έχει μια καθορισμένη ad_group</li><li>LDAP Ο εξυπηρετητής έχει ρυθμίσει το y</li><li>ένας χρήστης υπάρχει στο LDAP (π.χ. Active Directory ή OpenLDAP) και είναι στις εκχωρημένες ad_groups</li></ul>Αυτός ο χρήστης μπορεί να συνδεθεί στο Open-AudIT χωρίς λογαριασμό στο Open-AudIT που χρειάζεται να δημιουργηθεί. Το Open-AudIT θα διερωτηθεί το LDAP εν προκειμένω και αν ο χρήστης βρίσκεται στις απαιτούμενες ομάδες αλλά όχι στο Open-AudIT, οι ιδιότητες χρήστη τους (όνομα, πλήρες όνομα, email, ρόλοι, οργς, κλπ) εντός του Open-AudIT θα κατοικηθούν αυτόματα και θα συνδεθούν.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Εάν το τοπικό πεδίο είναι αληθινό (bool) ή y (string) ή Y (string) ή 1 (integer) τότε ρυθμίστε τα εξωτερικά δεδομένα στο 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Εάν το τοπικό πεδίο είναι αληθές (bool) ή y (string) ή Y (string) ή 1 (integer) τότε ρυθμίστε τα εξωτερικά δεδομένα σε y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Εάν η κύρια IP (όπως αναφέρεται από τη συσκευή) βρίσκεται σε αυτό το υποδίκτυο, περάστε.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Εάν ο λογαριασμός χρήστη δεν υπάρχει πραγματικά εντός Open-AudIT και <code>use_authorisation</code> είναι ρυθμισμένο, ο χρήστης θα δημιουργηθεί. Αν όντως υπάρχει, λεπτομέρειες όπως email, πλήρες όνομα, κλπ. θα κατοικηθούν.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Εάν ο χρήστης είτε δεν έχει έγκυρα διαπιστευτήρια είτε δεν είναι σε τουλάχιστον έναν ρόλο Open-AudIT και ομάδα (κατά τη χρήση <code>use_authorisation</code>), το Open-AudIT θα επιστρέψει στη χρήση των τοπικών στοιχείων χρήστη Open-AudIT και να προσπαθήσει την ταυτοποίηση και την εξουσιοδότηση εκεί. Αν αποτύχει αυτό, ο χρήστης θα στερηθεί την πρόσβαση.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Εάν ο χρήστης συνδεθεί στο Open-AudIT δεν έχει πρόσβαση στην αναζήτηση LDAP, μπορείτε να χρησιμοποιήσετε έναν άλλο λογαριασμό που έχει αυτή την πρόσβαση.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Εάν ο χρήστης συνδεθεί στο Open-AudIT δεν έχει πρόσβαση στην αναζήτηση OpenLDAP, μπορείτε να χρησιμοποιήσετε έναν άλλο λογαριασμό που έχει αυτή την πρόσβαση. Χρήση του dn_account και του dn_password για τη ρύθμιση αυτού.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Εάν η τιμή δεν οριστεί, θα χρησιμοποιηθεί η τρέχουσα χρονοσφραγίδα.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Εάν οριστεί η τιμή, θα χρησιμοποιηθεί η τιμή της χρονοσφραγίδας.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Αν αυτή η αλλαγή δεν λειτουργήσει για σας, όλα δεν έχουν χαθεί. Έχουμε προσθέσει ένα αντικείμενο ρυθμίσεων (που στο n από προεπιλογή, έτσι δεν θα χρησιμοποιήσει αυτή τη νέα επιλογή από το πλαίσιο) που ονομάζεται ανακάλυψη_use_org_id_match. Εάν το αλλάξετε σε y τότε το OrgID που έχει ανατεθεί στη συσκευή από την ανακάλυψη θα χρησιμοποιηθεί στους σχετικούς κανόνες αντιστοιχίας.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Εάν αυτά τα πολλά λεπτά (ή περισσότερα) έχουν περάσει από την τελευταία φορά που ο διακομιστής είδε τη συσκευή, περάστε.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Εάν αυτά τα πολλά ή περισσότερα λεπτά έχουν περάσει από τότε που η συσκευή επικοινώνησε με τον εξυπηρετητή, εκτελέστε τις ενέργειες.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Εάν αυτό συμβεί τότε το ζήτημα που βλέπετε σχετίζεται με τον έλεγχο πίνακα που χρησιμοποιείται στην ιστοσελίδα. Αποθηκεύει μόνο στη μνήμη την κατάσταση των κουτιών ελέγχου για την τρέχουσα σελίδα που προβάλλεται. Αν κάνετε επιλογές, τότε η σελίδα εμπρός/πίσω αυτές οι επιλογές θα χαθούν. Μπορείτε, ωστόσο, να πετύχετε αυτό που θέλετε επεκτείνοντας τον αριθμό των συσκευών που εμφανίζονται σε κάθε σελίδα. Στην πάνω αριστερή γωνία είναι ένα drop-down ετικέτα “records ανά σελίδα”? Χρησιμοποιήστε αυτό για να επεκτείνετε τον αριθμό των καταχωρήσεων που εμφανίζονται μέχρι να δείτε όλα όσα θέλετε να επιλέξετε για Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Αν εντοπίσουμε το λογισμικό διαχείρισης του Σαν, θα πρέπει να τρέξουμε ένα αυτόματο-ανακαλύψτε πριν το ερώτημα.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Αν προσθέσετε έναν τύπο τοποθεσίας, προσθέστε τα εικονίδια σε';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Αν προσθέσετε έναν τύπο συσκευής, για να εμφανίσετε το σχετικό εικονίδιο θα πρέπει να αντιγράψετε χειροκίνητα το σχηματοποιημένο αρχείο .svg στον κατάλογο';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Αν είστε ένας υποστηριζόμενος πελάτης FirstWave, μερικά αντικείμενα θα κάνουν ευκολότερη τη βοήθειά σας. Ανοίξτε ένα εισιτήριο υποστήριξης με το FirstWave και επισυνάψτε το αρχείο καταγραφής. Επίσης περιλαμβάνει την έξοδο από το κουμπί υποστήριξης στο πάνω δεξιά του';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Εάν είστε υποστηριζόμενος πελάτης και ανοίξετε ένα εισιτήριο υποστήριξης με το FirstWave, παρακαλούμε επισυνάψτε αυτά τα αρχεία.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Εάν έχετε προβλήματα με τα πλήκτρα API χαρτών Google ή η εταιρεία σας δεν έχει πρόσβαση για να δημιουργήσει τα πλήκτρα API χαρτών Google, παρακαλώ επικοινωνήστε με την ομάδα υποστήριξης FirstWave.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Εάν είστε στα Windows ή ο διακομιστής NMIS σας είναι απομακρυσμένος, θα πρέπει να δώσετε το URL, το όνομα χρήστη και τον κωδικό πρόσβασης για να αποκτήσετε πρόσβαση σε αυτόν τον εξυπηρετητή.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Αν είστε σε μια αξιοπρεπή ευρυζωνική ή ethernet σύνδεση, θα ήθελα να συστήσω πάντα τη χρήση -T4 (Επιθετικό). Μερικοί άνθρωποι αγαπούν -T5 (τρελό) αν και είναι πολύ επιθετικό για το γούστο μου. Οι άνθρωποι μερικές φορές καθορίζουν -T2 (Polite) επειδή νομίζουν ότι είναι λιγότερο πιθανό να συντριβούν οικοδεσπότες ή επειδή θεωρούν ότι είναι ευγενικοί γενικά. Συχνά δεν συνειδητοποιούν πόσο αργό είναι πραγματικά το -T2. Η σάρωση τους μπορεί να διαρκέσει δέκα φορές περισσότερο από μια προεπιλεγμένη σάρωση. Συντριβές μηχανών και τα προβλήματα εύρους ζώνης είναι σπάνια με τις προεπιλεγμένες επιλογές συγχρονισμού -T3 (Κανονική) και έτσι συνήθως συνιστώ ότι για τους προσεκτικοί σαρωτές. Η παράλειψη ανίχνευσης έκδοσης είναι πολύ πιο αποτελεσματική από το παιχνίδι με τις τιμές χρονισμού στη μείωση αυτών των προβλημάτων.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Εάν τρέχετε ένα σύστημα RedHat ή Centos και έχετε αναβαθμίσει το Nmap, παρακαλώ επαναφέρετε το SUID στο δυαδικό από';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Αν τρέχετε έναν εξυπηρετητή Open-AudIT στο Linux, αυτό δεν σας επηρεάζει.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Εάν χρησιμοποιείτε Open-AudIT στα Windows ή εάν ο διακομιστής NMIS δεν είναι στον εξυπηρετητή Open-AudIT (στην περίπτωση κάποιων εγκαταστάσεων Linux), θα πρέπει να προμηθεύσετε διαπιστευτήρια πρόσβασης και ένα URL στο απομακρυσμένο NMIS - αλλά αυτό είναι όλο! Ναι - Ενσωματώσεις μεταξύ NMIS και Open-AudIT λειτουργούν ακόμη και με τα Windows που βασίζονται Open-AudIT τώρα!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Αν επιλέξετε έναν Συλλέκτη, θα προγραμματιστεί να εκτελεστεί στο επόμενο όριο των 5 λεπτών.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Αν κανονικά ορίσετε συσκευές_αποστολή_to_org και ενεργοποιηθεί το αντικείμενο ρυθμίσεων, τότε το OrgID θα χρησιμοποιηθεί για περαιτέρω βελτίωση του ταίριασματος.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Αν κανονικά δεν ορίσετε συσκευές_αποστολή_to_org, τότε δεν θα έχει αποτέλεσμα. Ελέγχουμε μόνο χρησιμοποιώντας το OrgID αν έχει οριστεί στην ανακάλυψη (ή χειροκίνητα σε ένα σενάριο ελέγχου) και ενεργοποιηθεί στη διαμόρφωση.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Εάν ενεργοποιήσετε το στοιχείο ρύθμισης, χρησιμοποιήστε την ανακάλυψη για να εκχωρήσετε έναν Οργανισμό και στη συνέχεια αλλάξτε τον ΟΡΓID μιας συσκευής μετά την ανακάλυψη τότε πιθανότατα θα έχετε μια νέα συσκευή που θα δημιουργηθεί την επόμενη φορά που θα τρέξει η ανακάλυψη. Σε αυτή την περίπτωση, μάλλον θα πρέπει να απενεργοποιήσετε τις συσκευές_αποστολή_to_org πριν εκτελέσετε τις επόμενες ανακαλύψεις. Αυτό συμβαίνει επειδή (σε αυτή την περίπτωση) έχετε πει Open-AudIT <i>Αυτές οι συσκευές από αυτή την ανακάλυψη ανήκουν στον Org X.<i>, αλλά στη συνέχεια άλλαξε το Org της συσκευής. Έχετε αλλάξει τις αποθηκευμένες πληροφορίες συσκευών. Σε αυτή την περίπτωση - δεν υπάρχει πλέον μια συσκευή που ανήκει στον Org X, έτσι δημιουργούμε μια νέα.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Εάν έχετε το λογισμικό Anti-Virus που εκτελείται, επιτρέποντας τις υπηρεσίες του Opmantek (omkd), Apache (apache2.2) και MySQL (mysql) για την αυτόματη εκκίνηση και εκτέλεση είναι απαραίτητη. Οι υπηρεσίες αυτές χρησιμοποιούνται από το Open-AudIT. Θα πρέπει να το κάνεις μόνο μια φορά. Εάν το πρόγραμμα Anti-Virus σας συνεχίζει να σας παρακινεί για το Open-AudIT, παρακαλούμε να δημοσιεύσετε στα φόρουμ ή να στείλετε ένα email για να υποστηρίξει με το όνομα και την έκδοση του λογισμικού Anti-Virus σας.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Εάν έχετε διαπιστευτήρια εργασίας, μπορείτε να περιμένετε την πλήρη ποσότητα των πληροφοριών που είναι δυνατόν.<br/><br/>Προφανώς, ο καλύτερος τρόπος για να χρησιμοποιήσετε Open-AudIT είναι να έχετε τα διαπιστευτήρια εργασίας για τις συσκευές που ανακαλύπτονται (είτε είναι WMI, SSH, ή SNMP διαπιστευτήρια).<br/><br/>Έχουμε επίσης μια σελίδα για το ώντιτινγκ χωρίς διαπιστευτήρια.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Εάν συμπεριλάβετε το πεδίο \"id\" <strong>και</strong> να το ρυθμίσετε με έναν αριθμό, αυτό το στοιχείο θα ενημερωθεί και όχι θα δημιουργηθεί.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Εάν χρειαστεί να ρυθμίσετε την πρόσβαση Active Directory, μπορείτε συνήθως να χρησιμοποιήσετε το παράδειγμα του <code>cn=Users,dc=your,dc=domain,dc=com</code> για σένα <code>base_dn</code>. Δεν χρειάζεται να ορίσετε <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Αν χρειαστεί να ρυθμίσετε την πρόσβαση OpenLDAP για τους χρήστες σας και μια δεδομένη πρόσβαση χρηστών DN είναι κανονικά <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> τότε θα πρέπει να ορίσετε <code>base_dn</code> προς <code>dc=your,dc=domain,dc=com</code> και <code>user_dn</code> προς <code>uid=@username@@domain,cn=People</code>. Οι ειδικές λέξεις <code>@username</code> και <code>@domain</code> θα αντικατασταθεί από τα στοιχεία σύνδεσης που παρέχονται από το χρήστη σας στη σελίδα σύνδεσης.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Εάν εκτελέσετε την ανακάλυψη σε ένα υποδίκτυο ότι ο διακομιστής (ή συλλέκτης) είναι άμεσα εγκατεστημένος, μπορείτε να περιμένετε τα ακόλουθα για τις συσκευές απάντησης';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Εάν εκτελέσετε την ανακάλυψη σε ένα υποδίκτυο ότι ο διακομιστής σας (ή ο συλλέκτης) δεν είναι άμεσα εγκατεστημένος, μπορείτε να περιμένετε τα ακόλουθα για τις συσκευές απάντησης';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Αν επιλέξετε έναν τύπο λίστας, θα εμφανιστεί ένα πρόσθετο πεδίο που ονομάζεται Τιμές. Εδώ θα πρέπει να βάλετε μια χωρισμένη λίστα με τις επιλεγμένες τιμές. Αυτά θα εμφανίζονται σε ένα αναπτυσσόμενο πλαίσιο κάθε φορά που το πεδίο έχει επεξεργαστεί.';

$GLOBALS["lang"]['If you set the values for'] = 'Εάν ορίσετε τις τιμές για';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Αν θέλετε να πιέσετε τους Πράκτορές σας να χρησιμοποιήσουν μια συγκεκριμένη ρύθμιση, μπορείτε να προμηθεύσετε την ταυτότητα των πρακτόρων που θα χρησιμοποιηθούν, όπως παρακάτω (αντικαταστήστε το $id με τον αριθμό της καταχώρησης Πράκτορες). Όταν αυτός ο Πράκτορας εγκατασταθεί, θα κάνει check-in με το Sevrer και <strong>μόνο</strong> Ελέγξτε ότι ένα άτομο Χαρακτηριστικά καταχωρήσεων πρακτόρων (δοκιμές και δράσεις). Αυτό μπορεί να είναι χρήσιμο αν είστε MSP - δημιουργήστε μια καταχώρηση Agents για έναν συγκεκριμένο πελάτη και να έχουν τις συσκευές τους όλες χρησιμοποιούν αυτή την καταχώρηση, η οποία τους αναθέτει σε έναν Οργανισμό και Τοποθεσία.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Αν επιθυμείτε να σκάψετε και να προσαρμόσετε την ενσωμάτωση, κάντε κλικ στο κουμπί Advanced (και προσπαθήστε να μην κατακλυστείτε!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Αν επιθυμείτε να εκτελέσετε ένα Discovery σε μια εξωτερικά παρεχόμενη συσκευή, επιλέξτε την επιλογή και όταν δημιουργηθεί η Integration, έτσι είναι το Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Αν θέλετε να χρησιμοποιήσετε το σενάριο έξω από το Discovery δημιουργήσαμε ένα άλλο τελικό σημείο που ονομάζεται <i>σενάρια</i>. Βλέπε την τεκμηρίωση';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Εάν ο χρήστης σας δεν έχει <i>Εκτέλεση ως διαχειριστής</i> δικαιώματα, μπορούν ακόμα να κατεβάσουν τον πράκτορα (πρώτη εντολή παραπάνω) και να το εκτελέσουν για να υποβάλουν έναν έλεγχο όπως παρακάτω. Θα είναι ένας εφάπαξ έλεγχος χωρίς να εγκατασταθεί ή να προγραμματιστεί ο πράκτορας.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus Αριθ. CAS:';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus Αριθ. CAS:';

$GLOBALS["lang"]['iflastchange'] = 'Η τελευταία αλλαγή';

$GLOBALS["lang"]['Iflastchange'] = 'Η τελευταία αλλαγή';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Παράβλεψη μη έγκυρου SSL';

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

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Εφαρμογή επιλεγμένων ελέγχων και διαδικασιών';

$GLOBALS["lang"]['Implementation'] = 'Εφαρμογή';

$GLOBALS["lang"]['implementation_notes'] = 'Σημειώσεις εφαρμογής';

$GLOBALS["lang"]['Implementation Notes'] = 'Σημειώσεις εφαρμογής';

$GLOBALS["lang"]['Import'] = 'Εισαγωγή';

$GLOBALS["lang"]['Import Example Data'] = 'Εισαγωγή ενδεικτικών δεδομένων';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Εισαγωγή πολλαπλού {συλλογή} με χρήση CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Ευκαιρίες βελτίωσης';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Ευκαιρίες βελτίωσης';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Βελτιώνει τη συνέχεια και την ανθεκτικότητα των επιχειρήσεων';

$GLOBALS["lang"]['In'] = 'Μέσα';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Σε μια δεύτερη καρτέλα ή παράθυρο πηγαίνετε στην κονσόλα OKTA και κάντε κλικ <i>Δημιουργία ενσωμάτωσης εφαρμογών</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Σε μια δεύτερη καρτέλα ή παράθυρο ign-on σας';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Κατά την προσωπική μου γνώμη, ο καλύτερος τρόπος για να βρείτε και να ελέγξετε κάθε στοιχείο στο δίκτυό σας είναι ένα Seed Discovery για κάθε υποδίκτυο, που περιορίζεται σε αυτό το υποδίκτυο (χρησιμοποιώντας διαπιστευτήρια). Ανακαλύψεις σπόρων χρησιμοποιούν διακόπτη, δρομολογητή και υπολογιστή MAC πίνακες διευθύνσεων για να μην χάσετε μια ενιαία συσκευή. Αν είναι συνδεδεμένο στο δίκτυο και χρησιμοποιεί TCP/IP, ένας διακόπτης/router/υπολογιστής πρέπει να γνωρίζει ότι είναι εκεί - έτσι ακριβώς λειτουργεί το TCP/IP. Συνδυάστε αυτό με προσαρμοσμένες θύρες TCP ή/και UDP και στη συνέχεια θα πρέπει να είναι σε θέση να καθορίσει τον τύπο της συσκευής, καθώς και. Αλλά αυτή είναι η προσωπική μου προτίμηση.';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Προκειμένου το Open-AudIT να είναι σε θέση να εφαρμόσει τις άδειες χρήσης σε αντικείμενα, δίνουμε εντολή στο χρήστη του <code>WHERE @filter</code>. Αν δεν χρησιμοποιήσετε αυτή τη μορφή, το ερώτημαCreateForm θα ρίξει μια προειδοποίηση. Μόνο οι χρήστες με το ρόλο διαχειριστή επιτρέπεται να δημιουργήσουν ερωτήματα που στερούνται αυτής της ιδιότητας και ακόμη και τότε, μόνο μετά το στοιχείο ρύθμισης για <i>Προηγμένες_queries</i> έχει ενεργοποιηθεί.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Για να ενεργοποιήσετε τους χάρτες Google θα πρέπει να ακολουθήσετε αυτό το σύνδεσμο και να συνδεθείτε με το κλειδί Google API Λογαριασμός Google,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Για να χρησιμοποιήσετε το Azure Rest API, θα πρέπει να δημιουργήσετε μια Azure Active Directory Application που χρησιμοποιείται για ταυτοποίηση.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Για να χρησιμοποιηθεί αυτή η λειτουργικότητα, πρέπει να ενεργοποιηθεί στις ρυθμίσεις - κλικ';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Στη λίστα (comma seferated)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Στην περίπτωση της <code>in</code> και <code>notin</code>, θα πρέπει να περικλείσετε τις τιμές σε στρογγυλές αγκύλες και να τις διαχωρίσετε χρησιμοποιώντας ένα κόμμα (μόνο ένα κόμμα, όχι ένα κόμμα, τότε χώρο).<br/><br/>Με αυτούς τους χειριστές μπορείτε να φιλτράρετε αρκετά διεξοδικά.<br/><br/>Όταν προσθέτετε δεδομένα και φιλτράρετε σε πολλαπλές στήλες, αυτές οι στήλες συνδυάζονται χρησιμοποιώντας <strong>ΚΑΙ</strong>. Δεν μπορείτε να φιλτράρετε χρησιμοποιώντας ένα <strong>Ή</strong> κατάσταση. Με την ένταξη <code>notin</code>, θα πρέπει να είναι σε θέση να κάνει τις περισσότερες αναζητήσεις εργασίας. Και για εκείνους που πραγματικά απαιτούν μη υποστηριζόμενες και σύνθετες επιλογές, μπορείτε πάντα να γράψετε ένα πραγματικό ερώτημα.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Στην περίπτωση που αποθηκεύουμε αρκετά πεδία (συνήθως σε μορφή JSON) μέσα σε ένα πεδίο BIGTEXT MySQL (π.χ.: διαπιστευτήρια. διαπιστευτήρια - η στήλη διαπιστευτηρίων στον πίνακα διαπιστευτηρίων), θα πρέπει να χρησιμοποιήσετε τη μορφή';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Στο αρχικό κέλυφος εντολών, πλοηγηθείτε στον κατάλογο λήψης (πιθανόν <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Ανενεργός';

$GLOBALS["lang"]['Incomplete'] = 'Ατελής';

$GLOBALS["lang"]['Index'] = 'Ευρετήριο';

$GLOBALS["lang"]['India'] = 'Ινδία';

$GLOBALS["lang"]['Indonesia'] = 'Ινδονησία';

$GLOBALS["lang"]['Indonesian'] = 'Ινδονησιακά';

$GLOBALS["lang"]['Info'] = 'Πληροφορίες';

$GLOBALS["lang"]['Information only.'] = 'Μόνο πληροφορίες.';

$GLOBALS["lang"]['Informational'] = 'Ενημέρωση';

$GLOBALS["lang"]['initial_size'] = 'Αρχικό μέγεθος';

$GLOBALS["lang"]['Initial Size'] = 'Αρχικό μέγεθος';

$GLOBALS["lang"]['Initial login credentials are'] = 'Αρχική διαπιστευτήρια σύνδεσης είναι';

$GLOBALS["lang"]['Initiation'] = 'Έναρξη';

$GLOBALS["lang"]['inode'] = 'Ανώδιο';

$GLOBALS["lang"]['Inode'] = 'Ανώδιο';

$GLOBALS["lang"]['Input'] = 'Εισαγωγή';

$GLOBALS["lang"]['Input Type'] = 'Τύπος εισόδου';

$GLOBALS["lang"]['inputs'] = 'Εισροές';

$GLOBALS["lang"]['Inputs'] = 'Εισροές';

$GLOBALS["lang"]['Insane'] = 'Παράφρων';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Εισάγετε μια νέα καταχώρηση {συλλογή}.';

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

$GLOBALS["lang"]['Install Support'] = 'Εγκατάσταση υποστήριξης';

$GLOBALS["lang"]['installed_by'] = 'Εγκαταστάθηκε από';

$GLOBALS["lang"]['Installed By'] = 'Εγκαταστάθηκε από';

$GLOBALS["lang"]['installed_on'] = 'Εγκαταστάθηκε On';

$GLOBALS["lang"]['Installed On'] = 'Εγκαταστάθηκε On';

$GLOBALS["lang"]['Installing'] = 'Εγκατάσταση';

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

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Η ολοκλήρωση μπορεί να προγραμματιστεί όπως επιθυμείτε. Αυτό αφήνεται στον χρήστη.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Η ολοκλήρωση μπορεί να προγραμματιστεί σύμφωνα με τις Ανακαλύψεις, Ερωτήματα, κ.λπ.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Διαδραστικοί πίνακες';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Τα διαδραστικά ταμπλό παρέχουν άμεση ορατότητα στην κατάσταση της απογραφής του δικτύου επιτρέποντας στις ομάδες πληροφορικής να εντοπίσουν πρόσφατα ανακαλυφθείσες συσκευές και ασυνήθιστη συμπεριφορά συσκευών με μια ματιά.';

$GLOBALS["lang"]['interface'] = 'Διεπαφή';

$GLOBALS["lang"]['Interface'] = 'Διεπαφή';

$GLOBALS["lang"]['interface_id'] = 'ID διεπαφής';

$GLOBALS["lang"]['Interface ID'] = 'ID διεπαφής';

$GLOBALS["lang"]['interface_type'] = 'Τύπος διεπαφής';

$GLOBALS["lang"]['Interface Type'] = 'Τύπος διεπαφής';

$GLOBALS["lang"]['Internal'] = 'Εσωτερικό';

$GLOBALS["lang"]['Internal Audit'] = 'Εσωτερικός έλεγχος';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Εσωτερικός έλεγχος & αναθεώρηση';

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

$GLOBALS["lang"]['Irish'] = 'Ιρλανδικά';

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

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Είναι <i>Απλά λειτουργεί</i> με NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Είναι διαθέσιμο στο μενού -> Βοήθεια ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Είναι σημαντικό να σημειωθεί ότι όταν Open-AudIT καθορίζει ένα ταίριασμα οποιεσδήποτε ιδιότητες που έχουν οριστεί για <i>y</i> πρέπει να ταιριάζει ακριβώς (και να μην είναι κενό) προκειμένου το Open-AudIT να καθορίσει ότι η συσκευή που ανακαλύφθηκε ταιριάζει με μια συσκευή ήδη στη βάση δεδομένων. Εάν καμία από τις χαρακτηρισμένες ιδιότητες <i>y</i> Ταίριασμα, τότε θα δημιουργηθεί μια νέα καταχώρηση συσκευής, η οποία θα μπορούσε να οδηγήσει σε εγγραφές διπλής συσκευής. Σε περιπτώσεις όπου αναπαράγονται ιδιότητες, για παράδειγμα ένα dbus_id αντιγράφεται κατά τη διάρκεια ενός κλώνου VM, τότε μια υπάρχουσα συσκευή μπορεί λανθασμένα να αντικατασταθεί/ενημερωθεί μάλλον στη συνέχεια μια νέα καταχώρηση που δημιουργείται με αποτέλεσμα να λείπουν συσκευές.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Δεν είναι ασυνήθιστο να υπάρχει ένας αλληλοεπικαλυπτόμενος χώρος διευθύνσεων σε μια δεδομένη οργάνωση. Όχι ιδανικό, αλλά όχι ασυνήθιστο.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Είναι πολύ συχνό για τους κατασκευαστές μητρικής πλακέτας δεύτερης βαθμίδας να μην το ρυθμίσετε αυτό, να το ρυθμίσετε σε όλους <i>0</i>s ή ακόμη και όλα <i>ΣΤ</i>Σ.';

$GLOBALS["lang"]['Italian'] = 'Ιταλικά';

$GLOBALS["lang"]['Italy'] = 'Ιταλία';

$GLOBALS["lang"]['Items not in Baseline'] = 'Αντικείμενα που δεν βρίσκονται στην αρχική γραμμή';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON για εισαγωγή';

$GLOBALS["lang"]['Jamaica'] = 'Τζαμάικα';

$GLOBALS["lang"]['January'] = 'Ιανουάριος';

$GLOBALS["lang"]['Japan'] = 'Ιαπωνία';

$GLOBALS["lang"]['Japanese'] = 'Ιαπωνικά';

$GLOBALS["lang"]['Jersey'] = 'Τζέρσεϊ';

$GLOBALS["lang"]['Jordan'] = 'Ιορδανία';

$GLOBALS["lang"]['July'] = 'Ιούλιος';

$GLOBALS["lang"]['June'] = 'Ιούνιος';

$GLOBALS["lang"]['Kazakhstan'] = 'Καζακστάν';

$GLOBALS["lang"]['Kenya'] = 'Κένυα';

$GLOBALS["lang"]['kernel_version'] = 'Έκδοση πυρήνα';

$GLOBALS["lang"]['Kernel Version'] = 'Έκδοση πυρήνα';

$GLOBALS["lang"]['Key'] = 'Κλειδί';

$GLOBALS["lang"]['Key Components'] = 'Βασικά συστατικά';

$GLOBALS["lang"]['Key Password (optional)'] = 'Κωδικός πρόσβασης κλειδιού (προαιρετικό)';

$GLOBALS["lang"]['keys'] = 'Κλειδιά';

$GLOBALS["lang"]['Keys'] = 'Κλειδιά';

$GLOBALS["lang"]['Kiribati'] = 'Κιριμπάτι';

$GLOBALS["lang"]['Korea'] = 'Κορέα';

$GLOBALS["lang"]['Korean'] = 'Κορεάτικα';

$GLOBALS["lang"]['Kuwait'] = 'Κουβέιτ';

$GLOBALS["lang"]['Kyrgyz'] = 'Κιργιζία';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Δημοκρατία της Κιργιζίας';

$GLOBALS["lang"]['LDAP Group'] = 'Ομάδα LDAP';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'Το LDAP αναζητήθηκε για αυτόν τον χρήστη και βρέθηκε ο λογαριασμός τους.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'Το LDAP αναζητήθηκε για αυτόν τον χρήστη και ο λογαριασμός τους δεν βρέθηκε. Ελέγξτε τα αρχεία καταγραφής του εξυπηρετητή LDAP. Τα διαπιστευτήρια του χρήστη έχουν λειτουργήσει, αλλά ο χρήστης δεν βρέθηκε. Επίσης ελέγξτε ότι έχετε καθορίσει το σωστό χαρακτηριστικό βάσης DN όταν δημιουργήσατε τον εξυπηρετητή LDAP στο Open-AudIT.';

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

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Το τελευταίο είναι WMI. Για τα Windows όπως και στο Linux, προτιμάται ένας χρήστης με πρόσβαση επιπέδου Διαχειριστή (βλ. Target Client Configuration on the wiki).';

$GLOBALS["lang"]['lastModified'] = 'Τελευταία τροποποίηση';

$GLOBALS["lang"]['LastModified'] = 'Τελευταία τροποποίηση';

$GLOBALS["lang"]['latitude'] = 'Γεωγραφικό πλάτος';

$GLOBALS["lang"]['Latitude'] = 'Γεωγραφικό πλάτος';

$GLOBALS["lang"]['Latvia'] = 'Λετονία';

$GLOBALS["lang"]['Latvian'] = 'Λετονικά';

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

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Ας ρυθμίσουμε την καταγραφή σε αποσφαλμάτωση. Αντιγραφή του αρχείου:';

$GLOBALS["lang"]['level'] = 'Επίπεδο';

$GLOBALS["lang"]['Level'] = 'Επίπεδο';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Επίπεδο των προνομίων που απαιτούνται για την εκμετάλλευση (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Λιβερία';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Βιβλιοθήκες (δηλαδή, κώδικα ότι ένα άλλο πρόγραμμα μπορεί να περιλαμβάνει). Αυτά είναι τυπικά αντικείμενα όπως επεκτάσεις Wordpress, drupal extensions, node.js βιβλιοθήκες, Android / iPhone / Windows βιβλιοθήκες, βιβλιοθήκες python, κλπ.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Αραβική Λιβύη Jamahiriya';

$GLOBALS["lang"]['License'] = 'Άδεια';

$GLOBALS["lang"]['License Key'] = 'Κλειδί άδειας χρήσης';

$GLOBALS["lang"]['License Required'] = 'Απαιτούμενη άδεια';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Οι κάτοχοι άδειας χρήσης είναι ελεύθεροι να προσθέσουν ή να τροποποιήσουν τους κανόνες όπως σας αρμόζει. Εάν έχετε μια συσκευή με ένα OID SNMP που δεν ταιριάζει με ένα μοντέλο ήδη στο αρχείο - τώρα μπορείτε να το προσθέσετε εύκολα. Όχι πια να περιμένουμε να σας δώσουμε ένα έμπλαστρο και να το προσθέσουμε στη βάση κώδικα.<br/><br/>Όταν δημιουργήσετε μια καταχώρηση κανόνων, θα πρέπει να παρέχουν ένα όνομα και μια λίστα των εισροών και εξόδους. Οι είσοδοι και οι έξοδοι αποθηκεύονται ως συστοιχίες JSON μέσα στη βάση δεδομένων.<br/><br/>Οι εισροές έχουν πίνακα και χαρακτηριστικό, έναν χειριστή και μια τιμή. Κατά την εκτέλεση του όρου, λειτουργεί έτσι: Αν $table . $ χαρακτηριστικά $ operator $ αξία τότε εφαρμόστε τις εξόδους.<br/><br/>Ένας κανόνας παράδειγμα για να ταιριάζει με ένα OID SNMP και να ρυθμίσετε το μοντέλο είναι παρακάτω.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Άδειες';

$GLOBALS["lang"]['Liechtenstein'] = 'Λιχτενστάιν';

$GLOBALS["lang"]['Like'] = 'Όπως...';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Όπως και τα περισσότερα άλλα χαρακτηριστικά, τα πρόσθετα πεδία μπορούν να επεξεργαστούν χύμα. Χρησιμοποιήστε τη λειτουργία Bulk Edit όπως κανονικά θα κάνατε και θα δείτε τα πρόσθετα πεδία είναι διαθέσιμα για είσοδο.';

$GLOBALS["lang"]['Like versus Equals'] = 'Όπως εναντίον Ίσων';

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

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Τα διαγράμματα γραμμών πρέπει να επιστρέφουν ημερομηνία ή ημερομηνία, περιγραφή ή περιγραφή και να μετρούν.';

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

$GLOBALS["lang"]['Linux Packages'] = 'Πακέτα Linux';

$GLOBALS["lang"]['List'] = 'Λίστα';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Λίστα όλων των θυρών NMAP, πρωτοκόλλων και προγραμμάτων για κάθε συσκευή';

$GLOBALS["lang"]['List Devices'] = 'Λίστα συσκευών';

$GLOBALS["lang"]['List Discoveries'] = 'Ανακαλύψεις λίστας';

$GLOBALS["lang"]['list_table_format'] = 'Εμφάνιση μορφής πίνακα';

$GLOBALS["lang"]['List Table Format'] = 'Εμφάνιση μορφής πίνακα';

$GLOBALS["lang"]['List Tables'] = 'Λίστα πινάκων';

$GLOBALS["lang"]['Lithuania'] = 'Λιθουανία';

$GLOBALS["lang"]['Lithuanian'] = 'Λιθουανικά';

$GLOBALS["lang"]['Load Balancing'] = 'Εξισορρόπηση φορτίου';

$GLOBALS["lang"]['Local'] = 'Τοπικό';

$GLOBALS["lang"]['Local Area Network'] = 'Δίκτυο τοπικής περιοχής';

$GLOBALS["lang"]['local_port'] = 'Τοπική θύρα';

$GLOBALS["lang"]['Local Port'] = 'Τοπική θύρα';

$GLOBALS["lang"]['Local area network'] = 'Δίκτυο τοπικής περιοχής';

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

$GLOBALS["lang"]['Location Name'] = 'Όνομα τοποθεσίας';

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

$GLOBALS["lang"]['Locations'] = 'Τοποθεσίες';

$GLOBALS["lang"]['Locations in this'] = 'Τοποθεσίες σε αυτό';

$GLOBALS["lang"]['log'] = 'Καταγραφή';

$GLOBALS["lang"]['Log'] = 'Καταγραφή';

$GLOBALS["lang"]['log_format'] = 'Μορφή καταγραφής';

$GLOBALS["lang"]['Log Format'] = 'Μορφή καταγραφής';

$GLOBALS["lang"]['Log Line'] = 'Γραμμή καταγραφής';

$GLOBALS["lang"]['log_path'] = 'Διαδρομή καταγραφής';

$GLOBALS["lang"]['Log Path'] = 'Διαδρομή καταγραφής';

$GLOBALS["lang"]['log_rotation'] = 'Περιστροφή καταγραφής';

$GLOBALS["lang"]['Log Rotation'] = 'Περιστροφή καταγραφής';

$GLOBALS["lang"]['log_status'] = 'Κατάσταση καταγραφής';

$GLOBALS["lang"]['Log Status'] = 'Κατάσταση καταγραφής';

$GLOBALS["lang"]['Logging in'] = 'Σύνδεση';

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

$GLOBALS["lang"]['Lowercase Hostname'] = 'Κατώτερο όνομα υπολογιστή';

$GLOBALS["lang"]['Luxembourg'] = 'Λουξεμβούργο';

$GLOBALS["lang"]['MAC Address'] = 'Διεύθυνση MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Παραγωγός';

$GLOBALS["lang"]['mac'] = 'Μακ';

$GLOBALS["lang"]['Mac'] = 'Μακ';

$GLOBALS["lang"]['Mac Address'] = 'Διεύθυνση Mac';

$GLOBALS["lang"]['MacOS'] = 'ΜΑΚΟΣ';

$GLOBALS["lang"]['MacOS Packages'] = 'Πακέτα MacOS';

$GLOBALS["lang"]['Macao'] = 'Μακάο';

$GLOBALS["lang"]['Macedonia'] = 'ΠΓΔΜ';

$GLOBALS["lang"]['Madagascar'] = 'Μαδαγασκάρη';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Διατήρηση αρχείων αξιολογήσεων κινδύνου και θεραπειών';

$GLOBALS["lang"]['maintenance_expires'] = 'Λήγει η συντήρηση';

$GLOBALS["lang"]['Maintenance Expires'] = 'Λήγει η συντήρηση';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Κάντε το προκαθορισμένο ταμπλό μου';

$GLOBALS["lang"]['Make this install a Collector'] = 'Κάντε αυτό την εγκατάσταση ενός συλλέκτη';

$GLOBALS["lang"]['Malawi'] = 'Μαλάουι';

$GLOBALS["lang"]['Malay'] = 'Μαλαϊκή';

$GLOBALS["lang"]['Malaysia'] = 'Μαλαισία';

$GLOBALS["lang"]['Maldives'] = 'Μαλδίβες';

$GLOBALS["lang"]['Mali'] = 'Μάλι';

$GLOBALS["lang"]['Malta'] = 'Μάλτα';

$GLOBALS["lang"]['Manage'] = 'Διαχείριση';

$GLOBALS["lang"]['Manage Licenses'] = 'Διαχείριση αδειών';

$GLOBALS["lang"]['Manage in NMIS'] = 'Διαχείριση σε NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Διαχείριση συμβάντων και μη συμμόρφωσης';

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

$GLOBALS["lang"]['Match Order'] = 'Ταίριασμα σειράς';

$GLOBALS["lang"]['Match Process'] = 'Ταίριασμα διεργασίας';

$GLOBALS["lang"]['match_string'] = 'Ταίριασμα συμβολοσειρών';

$GLOBALS["lang"]['Match String'] = 'Ταίριασμα συμβολοσειρών';

$GLOBALS["lang"]['Matching Attribute'] = 'Ταίριασμα χαρακτηριστικών';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Συσκευές που ταιριάζουν - Συμπεριλαμβανομένου του OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Ταίριασμα συσκευών Linux';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Ταίριασμα διεξάγεται με την ακόλουθη σειρά';

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

$GLOBALS["lang"]['Metropolitan area network'] = 'Δίκτυο μητροπολιτικής περιοχής';

$GLOBALS["lang"]['Mexico'] = 'Μεξικό';

$GLOBALS["lang"]['Micronesia'] = 'Μικρονησία';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Πεδία Azure της Microsoft';

$GLOBALS["lang"]['microtime'] = 'Μικροχρόνος';

$GLOBALS["lang"]['Microtime'] = 'Μικροχρόνος';

$GLOBALS["lang"]['minute'] = 'Λεπτό';

$GLOBALS["lang"]['Minute'] = 'Λεπτό';

$GLOBALS["lang"]['Minutes'] = 'Πρακτικά';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Πρακτικά Από την τελευταία επιθεώρηση είναι μεγαλύτερη από ό, τι';

$GLOBALS["lang"]['model'] = 'Μοντέλο';

$GLOBALS["lang"]['Model'] = 'Μοντέλο';

$GLOBALS["lang"]['model_family'] = 'Υπόδειγμα Οικογένειας';

$GLOBALS["lang"]['Model Family'] = 'Υπόδειγμα Οικογένειας';

$GLOBALS["lang"]['Modified'] = 'Τροποποιήθηκε';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Τροποποίηση υπάρχοντος σεναρίου';

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

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Επιδόσεις παρακολούθησης και μέτρησης ISMS';

$GLOBALS["lang"]['Montenegro'] = 'Μαυροβούνιο';

$GLOBALS["lang"]['month'] = 'Μήνας';

$GLOBALS["lang"]['Month'] = 'Μήνας';

$GLOBALS["lang"]['Montserrat'] = 'Μονσεράτ';

$GLOBALS["lang"]['More Information'] = 'Περισσότερες πληροφορίες';

$GLOBALS["lang"]['More Secure'] = 'Πιο ασφαλής';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Πιο περίτεχνη SQL μπορεί να χρησιμοποιηθεί για την ομαδοποίηση ιδιοτήτων μέσα σε ένα εύρος. Παρακάτω εμφανίζεται το SQL για συσκευές που δεν φαίνονται σε ένα διάγραμμα πίτας που ομαδοποιούνται από τα τελευταία αποτελέσματα.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Περισσότερες πληροφορίες σχετικά με την αποσφαλμάτωση αυτό μπορεί να βρεθεί σε ένα χρήσιμο νήμα στοίβας υπερχείλισης';

$GLOBALS["lang"]['Morocco'] = 'Μαρόκο';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Πιθανότατα το τείχος προστασίας των Windows (ή ένα τείχος προστασίας τρίτων) αρνείται την προσπάθεια σύνδεσης.<br/><br/>Παρακαλώ συνδεθείτε στη μηχανή προορισμού Windows και ελέγξτε τις ρυθμίσεις τείχους προστασίας.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Το μεγαλύτερο μέρος του Open-AudIT έχει άδεια χρήσης GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Μητρική πλακέτα';

$GLOBALS["lang"]['Motherboard'] = 'Μητρική πλακέτα';

$GLOBALS["lang"]['mount_point'] = 'Σημείο προσάρτησης';

$GLOBALS["lang"]['Mount Point'] = 'Σημείο προσάρτησης';

$GLOBALS["lang"]['mount_type'] = 'Τύπος προσάρτησης';

$GLOBALS["lang"]['Mount Type'] = 'Τύπος προσάρτησης';

$GLOBALS["lang"]['Mozambique'] = 'Μοζαμβίκη';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Πρέπει να απαντήσω στον Πινγκ. Εάν ρυθμιστεί, το Nmap θα προσπαθήσει να στείλει και να ακούσει για μια απάντηση ICMP. Εάν η συσκευή δεν ανταποκριθεί, δεν θα γίνει περαιτέρω σάρωση.<br/>Προηγουμένως μια συσκευή δεν χρειαζόταν να ανταποκριθεί σε ένα ping για το Open-AudIT για να συνεχίσει τη σάρωση.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Πρέπει να απαντήσετε στο Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Το AntiVirus μου με παρακινεί να αρνηθώ/επιτρέπω πράγματα';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Ο χρόνος μου τελείωσε στο Open-AudIT';

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

$GLOBALS["lang"]['NOTE'] = 'ΣΗΜΕΙΩΣΗ';

$GLOBALS["lang"]['NOTE #2'] = 'ΣΗΜΕΙΩΣΗ #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'ΣΗΜΕΙΩΣΗ - Για περισσότερες πληροφορίες σχετικά με μορφές DateTime, δείτε';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'ΣΗΜΕΙΩΣΗ - Αν ζητήσετε ένα download CSV, XML ή JSON μορφή (είτε ένα ενιαίο πιστοποιητικό, ή την πλήρη συλλογή) τα πραγματικά πιστοποιητικά θα σταλεί. Όχι η κρυπτογραφημένη συμβολοσειρά, το πραγματικό όνομα χρήστη, κωδικός πρόσβασης, συμβολοσειρά κοινότητας, κλπ. Οποιαδήποτε ευαίσθητα στοιχεία δεν εμφανίζονται στο web GUI, αλλά διατίθενται μέσω άλλων μορφών. Για την πρόληψη αυτής της εξαγωγής ένα στοιχείο ρύθμισης είναι διαθέσιμο με την ονομασία decrypter_credentials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'ΣΗΜΕΙΩΣΗ - Οι σγουρά παρενθέσεις στα δεδομένα που κατατίθενται θα πρέπει να χρησιμοποιούνται όπως-είναι (δεν αντικαθίσταται όπως σε άλλα παραδείγματα παραπάνω).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'ΣΗΜΕΙΩΣΗ - Μπορείτε να αποτρέψετε τα διαπιστευτήρια απλού κειμένου που εμφανίζονται παρακάτω με τον καθορισμό του αντικειμένου ρυθμίσεων για <code>decrypt_credentials</code> προς <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Όνομα';

$GLOBALS["lang"]['Name'] = 'Όνομα';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Όνομα: Το όνομα που δίνετε σε αυτό το πεδίο. Ιδανικά θα πρέπει να είναι μοναδικό.';

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

$GLOBALS["lang"]['Netstat Ports'] = 'Λιμένες Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Οι θύρες Netstat χρησιμοποιούν συνδυασμό αριθμού θύρας, πρωτοκόλλου και προγράμματος. Αν είναι όλοι παρόντες, η πολιτική περνά.';

$GLOBALS["lang"]['Network'] = 'Δίκτυο';

$GLOBALS["lang"]['network_address'] = 'Διεύθυνση δικτύου';

$GLOBALS["lang"]['Network Address'] = 'Διεύθυνση δικτύου';

$GLOBALS["lang"]['Network Discovery'] = 'Ανακάλυψη δικτύου';

$GLOBALS["lang"]['network_domain'] = 'Τομέας δικτύου';

$GLOBALS["lang"]['Network Domain'] = 'Τομέας δικτύου';

$GLOBALS["lang"]['Network Types'] = 'Τύποι δικτύου';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Ο τύπος δικτύου έχει οριστεί στο τοπικό δίκτυο περιοχής από προεπιλογή, αλλά μπορεί να αλλάξει από το χρήστη, όπως αυτοί θεωρούν κατάλληλο. Οι τύποι που υποστηρίζονται είναι παρακάτω (χάρη στη Βικιπαίδεια).<br/><br/>Ένα δίκτυο μπορεί να χαρακτηριστεί από τη φυσική του ικανότητα ή από τον οργανωτικό του σκοπό. Η χρήση του δικτύου, συμπεριλαμβανομένης της άδειας χρήσης και των δικαιωμάτων πρόσβασης, διαφέρει ανάλογα.';

$GLOBALS["lang"]['networks'] = 'Δίκτυα';

$GLOBALS["lang"]['Networks'] = 'Δίκτυα';

$GLOBALS["lang"]['Networks Generated By'] = 'Δίκτυα που δημιουργήθηκαν από';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Τα δίκτυα ενημερώνονται με κάθε ανακάλυψη. Αντικείμενα όπως τα IPs Available και τα IP Used, μαζί με Gateways, DHCP και DNS Servers προστίθενται όπως βρέθηκαν.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Τα δίκτυα ανταποκρίνονται διαφορετικά ανάλογα με το πώς ρυθμίζονται. Μερικοί δρομολογητές ή/και τείχη προστασίας μπορούν να ανταποκριθούν <i>εξ ονόματος</i> των IPs στην άλλη πλευρά των διεπαφών τους με τον εξυπηρετητή Open-AudIT. Είναι αρκετά συνηθισμένο να δούμε Nmap έκθεση ένα καθετήρα για SNMP (UDP θύρα 161) να ανταποκρίνεται ως open Αυτό είναι παραπλανητικό καθώς δεν υπάρχει συσκευή στην εν λόγω IP, ωστόσο καταλήγει με μια καταχώρηση συσκευής στη βάση δεδομένων. 99,9% του χρόνου, δεν είναι Open-AudIT, ούτε καν Nmap, αλλά το δίκτυο που προκαλεί αυτό το ζήτημα. Τώρα που έχουμε τις επιλογές να αντιμετωπίσουμε τις ανοικτές ή κλειστές θύρες, μπορούμε να εξαλείψουμε πολύ από αυτή τη σύγχυση. Οι χρήστες των επιχειρήσεων έχουν ακόμη και τη δυνατότητα να το αλλάξουν αυτό σε βάση ανά ανακάλυψη (περισσότερο από ό,τι μόνο χρησιμοποιώντας το Μεσαίο (Classic) στοιχείο, όπως παραπάνω).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Δίκτυα που χρησιμοποιούν μάσκα CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Όνομα νέου κτιρίου';

$GLOBALS["lang"]['New Caledonia'] = 'Νέα Καληδονία';

$GLOBALS["lang"]['New Floor Name'] = 'Όνομα νέου ορόφου';

$GLOBALS["lang"]['New Room Name'] = 'Όνομα νέου δωματίου';

$GLOBALS["lang"]['New Row Name'] = 'Νέο όνομα γραμμής';

$GLOBALS["lang"]['New Zealand'] = 'Νέα Ζηλανδία';

$GLOBALS["lang"]['News'] = 'Νέα';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Νέα check-in κάθε φορά που θα συνδεθείτε για ενημερωμένα ερωτήματα & πακέτα, συστάσεις διαμόρφωσης, ανακοινώσεις, δημοσιεύσεις blog και πολλά άλλα.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Τα νέα είναι ο τρόπος μας να σας κρατάμε ενήμερους με τις τελευταίες διορθώσεις, ανακοινώσεις, ενημερώσεις ερωτήσεων, εκδόσεις λογισμικού και πολλά άλλα.<br/><br/>Δεν χρειάζεται να κρατήσει πάνω από το wiki ή να ελέγξετε για νέες κυκλοφορίες, μπορούμε να σας στείλουμε αυτά!';

$GLOBALS["lang"]['next_hop'] = 'Επόμενη πτώση';

$GLOBALS["lang"]['Next Hop'] = 'Επόμενη πτώση';

$GLOBALS["lang"]['next_run'] = 'Επόμενη εκτέλεση';

$GLOBALS["lang"]['Next Run'] = 'Επόμενη εκτέλεση';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Επόμενο κλικ <i>Δημιουργία δικής σας εφαρμογής</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Στη συνέχεια, κάντε κλικ στο OK, στη συνέχεια, κάντε δεξί κλικ στην υπηρεσία Apache 2.4 και κάντε κλικ στο Restart. Έγινε!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Στη συνέχεια, κάντε δεξί κλικ στην υπηρεσία Apache2.4 και επιλέξτε Properties, και στη συνέχεια κάντε κλικ στην καρτέλα Log On.';

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

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Ο χάρτης Nmap δεν μπορεί να καθορίσει αν η θύρα είναι ανοιχτή επειδή το φιλτράρισμα πακέτων εμποδίζει τους καθετήρες του να φτάσουν στη θύρα. Το φιλτράρισμα θα μπορούσε να είναι από μια ειδική συσκευή τείχους προστασίας, κανόνες δρομολογητή, ή λογισμικό τείχους προστασίας με βάση τον υπολογιστή. Αυτά τα λιμάνια αποτρέπουν τους επιτιθέμενους επειδή παρέχουν τόσο λίγες πληροφορίες. Μερικές φορές απαντούν με μηνύματα λάθους ICMP όπως ο κωδικός 3 13 (προορισμός απρόσιτος: επικοινωνία διοικητικά απαγορευμένη), αλλά φίλτρα που απλά ρίχνουν καθετήρες χωρίς ανταπόκριση είναι πολύ πιο συνηθισμένα. Αυτό αναγκάζει τον Nmap να ξαναδοκιμάσει αρκετές φορές μόνο σε περίπτωση που ο ανιχνευτής έπεφτε λόγω συμφόρησης δικτύου και όχι φιλτραρίσματος. Αυτό επιβραδύνει τη σάρωση δραματικά.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Το Nmap τοποθετεί τις θύρες σε αυτή την κατάσταση όταν δεν είναι σε θέση να καθορίσει αν μια θύρα είναι ανοικτή ή φιλτραρισμένη. Αυτό συμβαίνει για τύπους σάρωσης στους οποίους οι ανοικτές θύρες δεν δίνουν καμία απάντηση. Η έλλειψη απάντησης μπορεί επίσης να σημαίνει ότι ένα φίλτρο πακέτου έριξε τον καθετήρα ή οποιαδήποτε απάντηση που προκάλεσε. Έτσι ο Nmap δεν γνωρίζει με βεβαιότητα αν η θύρα είναι ανοιχτή ή φιλτραριστεί. Το UDP, το πρωτόκολλο IP, το FIN, το NULL, και οι σαρώσεις Xmas ταξινομούν τις θύρες με αυτόν τον τρόπο.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Λεπτομέρειες συγχρονισμού Nmap βρίσκονται στο κάτω μέρος αυτής της συνδεδεμένης σελίδας';

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

$GLOBALS["lang"]['No devices are in the database.'] = 'Δεν υπάρχουν συσκευές στη βάση δεδομένων.';

$GLOBALS["lang"]['Node'] = 'Κόμβος';

$GLOBALS["lang"]['None'] = 'Καμία';

$GLOBALS["lang"]['Norfolk Island'] = 'Νήσος Νόρφολκ';

$GLOBALS["lang"]['Normal'] = 'Κανονικό';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Νήσοι Βόρειες Μαριάνες';

$GLOBALS["lang"]['Norway'] = 'Νορβηγία';

$GLOBALS["lang"]['Norwegian'] = 'Νορβηγικά';

$GLOBALS["lang"]['Not Applicable'] = 'Δεν εφαρμόζεται';

$GLOBALS["lang"]['Not Checked'] = 'Δεν ελέγχθηκε';

$GLOBALS["lang"]['Not Equals'] = 'Όχι Ίσες';

$GLOBALS["lang"]['Not In'] = 'Όχι.';

$GLOBALS["lang"]['Not Like'] = 'Όχι σαν';

$GLOBALS["lang"]['Not Set'] = 'Χωρίς ρύθμιση';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Δεν θα είναι σε θέση κάθε υπολογιστής να ολοκληρώσει επιτυχώς ένα σημείο αναφοράς. Είδαμε σε κάποια αποτυχία στις δοκιμές για λόγους πέρα από τον έλεγχό μας. Τα αρχεία καταγραφής θα σας βοηθήσουν να δείξετε τη σωστή κατεύθυνση για αυτά τα αντικείμενα.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Όχι στη (διαχωρισμένη) λίστα του συγκροτήματος';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Δεν χρησιμοποιείται κανονικά. Αν ρυθμιστεί, αυτό απαιτεί η συσκευή να έχει μια ανοικτή θύρα (ως προς τις επιλογές σάρωσης) να θεωρείται ότι ανταποκρίνεται. Μια διεύθυνση MAC, απόκριση arp ή απόκριση ping δεν θεωρείται επαρκής για να θεωρηθεί ότι ανταποκρίνεται. Χρήσιμο εάν ένας δρομολογητής ή ένα τείχος προστασίας μεταξύ του εξυπηρετητή Open-AudIT και του IP στόχου ανταποκρίνεται στις σαρώσεις θύρας για λογαριασμό των IPs.';

$GLOBALS["lang"]['Note'] = 'Σημείωση';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Σημείωση - Η επιλογή γονέα θα παρέχει αυτόματα πρόσβαση στα παιδιά του (αν και δεν θα εμφανίζεται εδώ).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Σημειώστε ότι η άδεια χρήσης 100 συσκευών Enterprise δεν περιλαμβάνει υποστήριξη.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Σημείωση, μπορεί να χρειαστεί να κάνετε το εκτελέσιμο σεναρίου με';

$GLOBALS["lang"]['Notes'] = 'Σημειώσεις';

$GLOBALS["lang"]['notes'] = 'Σημειώσεις';

$GLOBALS["lang"]['Notice'] = 'Ανακοίνωση';

$GLOBALS["lang"]['notin'] = 'Σημείωση';

$GLOBALS["lang"]['Notin'] = 'Σημείωση';

$GLOBALS["lang"]['November'] = 'Νοέμβριος';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Τώρα για το ID συνδρομής, κάντε κλικ σε όλες τις Υπηρεσίες, Συνδρομές και αντιγράψτε το.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Τώρα πρέπει να παρέχουμε την Azure Active Directory εφαρμογή πρόσβαση στη συνδρομή σας.<br/><br/>Κάντε κλικ στις ομάδες πόρων και στη συνέχεια την ομάδα πόρων που θα θέλατε Azure Active Directory εφαρμογή σας να έχουν πρόσβαση σε.<br/><br/>Κάντε κλικ στο Προσθήκη. Ο ρόλος θα πρέπει να είναι ο Συνεργάτης και στη συνέχεια να αναζητήσει την εφαρμογή (Open-AudIT). Στη συνέχεια, κάντε κλικ στο Αποθήκευση.<br/><br/>Τώρα η εφαρμογή έχει πρόσβαση στη συνδρομή, έτσι ώστε να μπορούμε να κάνουμε API κλήσεις. Οι κλήσεις API θα ζητηθούν εκ μέρους της εφαρμογής, όχι του χρήστη σας.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ΔΙΑΤΑΞΗ ΑΠΟ';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'Οικογένειες OS';

$GLOBALS["lang"]['OS Family'] = 'Οικογένεια OS';

$GLOBALS["lang"]['OS Group'] = 'Ομάδα OS';

$GLOBALS["lang"]['OUTPUTS'] = 'ΕΞΟΔΟΙ';

$GLOBALS["lang"]['oae_manage'] = 'Διαχείριση Oae';

$GLOBALS["lang"]['Oae Manage'] = 'Διαχείριση Oae';

$GLOBALS["lang"]['object_ident'] = 'Ταυτότητα αντικειμένου';

$GLOBALS["lang"]['Object Ident'] = 'Ταυτότητα αντικειμένου';

$GLOBALS["lang"]['Obtain top management support'] = 'Αποκτήστε κορυφαία υποστήριξη διαχείρισης';

$GLOBALS["lang"]['October'] = 'Οκτώβριος';

$GLOBALS["lang"]['Offset'] = 'Μετατόπιση';

$GLOBALS["lang"]['Okta'] = 'Όκτα';

$GLOBALS["lang"]['Oman'] = 'Ομάν';

$GLOBALS["lang"]['omk_uuid'] = 'Ομκ Ουίντ';

$GLOBALS["lang"]['Omk Uuid'] = 'Ομκ Ουίντ';

$GLOBALS["lang"]['On'] = 'Εμπρός';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Στα Windows, το Open-AudIT χρησιμοποιεί το WMI καθώς είναι η πρωταρχική μέθοδος του ώντιτινγκ. Τα Windows έχουν διαβόητη φήμη όσον αφορά το απομακρυσμένο WMI. Ταιριάζουν με τα δύο. <i>Απλά δουλειά.</i> ή κάποιο μυστηριώδες αντικείμενο στον στόχο απαιτεί αλλαγή. Εάν αντιμετωπίζετε δυσκολία ελέγχου απομακρυσμένων υπολογιστών Windows, έχουμε δημιουργήσει ένα σενάριο που ονομάζεται test_windows_client.vbs. Μπορείτε να εκτελέσετε αυτό το σενάριο <strong>τοπικά</strong> στο εν λόγω μηχάνημα, μετά την υπογραφή του ως χρήστη που χρησιμοποιείται από το Open-AudIT για την εκτέλεση του ελέγχου. Το σενάριο κάνει <strong>δεν υπάρχουν αλλαγές</strong> στις συσκευές στόχου. Ελέγχει τα περισσότερα (όχι όλα) από τα παρακάτω στοιχεία και δημιουργεί ετικέτες PASS, FAIL και INFO για διάφορες ιδιότητες. ΣΗΜΕΙΩΣΗ - Εάν το σύστημα-στόχος σας ελέγχεται σωστά, δεν πρέπει να αλλάξετε καμία ρύθμιση. Μερικά από τα παρακάτω δεν υπάρχουν σε υπολογιστές Windows που είναι σε θέση να ελεγχθούν και μερικά υπάρχουν. Αλλαγή ρυθμίσεων μόνο αν οι ανακαλύψεις σας σε συγκεκριμένους υπολογιστές δεν λειτουργούν όπως προβλέπεται.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Στη σελίδα λίστα εργασιών, κάντε κλικ στο <i>Προσθήκη νέου</i> κουμπί για τη ρύθμιση μιας εργασίας.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Στο γήπεδο <i>Ταίριασμα συμβολοσειρών</i> θα πρέπει να παρέχει το όνομα του λογισμικού που θέλετε να παρακολουθείτε. Μπορείτε να χρησιμοποιήσετε το σημάδι ποσοστό (%) ως μπαλαντέρ όπου απαιτείται.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Στην επόμενη σελίδα θα μπορείτε να επιλέξετε Access Keys και να δείτε το κλειδί σας ή να δημιουργήσετε ένα νέο κλειδί.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Στο στόχο Windows PC, εκτελέστε τη χρησιμότητα DCOM και επαληθεύστε (ή ρυθμίστε) τα παρακάτω χαρακτηριστικά. Έναρξη -> Τρέξτε, εισάγετε DCOMCNFG και πατήστε OK. Αυτό θα ανοίξει το παράθυρο DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Πάνω δεξιά (κάτω από τη γραμμή μενού) θα δείτε αρκετά κουμπιά. Αυτά σας επιτρέπουν να επιλέξετε ένα άλλο ταμπλό, να ρυθμίσετε το τρέχον ταμπλό ως αρχική σελίδα σας (αν δεν είναι ήδη) και να επεξεργαστείτε το τρέχον ταμπλό (αν έχετε άδεια).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On-Premise, Όχι Σύννεφο';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Μόλις δημιουργηθεί ένα πρόσθετο πεδίο μπορεί να χρησιμοποιηθεί σε ερωτήματα και ομάδες όπως κάθε άλλο χαρακτηριστικό στη βάση δεδομένων.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Μόλις σχολιάσει έξω, το πιστοποιητικό σας θα επικυρωθεί, αλλά μπορεί επίσης να αποτύχει αυτή την επικύρωση, αν χρησιμοποιείτε αυτο-υπογεγραμμένα πιστοποιητικά και δεν έχουν ρυθμίσει σωστά το διακομιστή σας.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Μόλις το σενάριο τρέξει σε έναν στόχο, αν το σενάριο διαγραφεί από μόνο του.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Μόλις ολοκληρωθούν αυτά τα αρχικά ερωτήματα (snmp, ssh, wmi), εάν η συσκευή υποστηρίζεται από τα σενάρια ελέγχου (Windows, Linux, OSX, AIX, HP-UX, Solaris και ESXi), το σωστό σενάριο ελέγχου θα αντιγραφεί στον στόχο και θα εκτελεστεί. Το σενάριο ελέγχου θα αυτοδιαγραφεί μόλις ολοκληρωθεί. Το αποτέλεσμα θα αποθηκευτεί στη μηχανή προορισμού ως αρχείο XML. Ο εξυπηρετητής Open-AudIT θα ανακτήσει στη συνέχεια το αρχείο αποτελεσμάτων για την επεξεργασία και τη διαγραφή του αρχείου αποτελεσμάτων στον στόχο. Η τοποθεσία στην οποία αντιγράφεται το σενάριο ελέγχου στη συσκευή προορισμού (τουλάχιστον για ελέγχους SSH) είναι παραμετροποιήσιμη με την επεξεργασία του αντικειμένου discovery_linux_script_directory config. Εξ ορισμού έχει οριστεί στο /tmp/. Αυτό μπορεί να χρειαστεί αλλαγή αν / tmp έχει noexec σύνολο. Στη συνέχεια, το αρχείο αποτελεσμάτων επεξεργάζεται και τα στοιχεία της συσκευής ενημερώνονται εντός Open-AudIT.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Μόλις κάνετε κλικ στο κουμπί εκτέλεσης, το Open-AudIT θα δημιουργήσει μια διαδικασία για την έναρξη της ανακάλυψης και την επιστροφή του χρήστη στη σελίδα λεπτομέρειες ανακάλυψης. Η νεοαναγεννημένη διαδικασία παίρνει τις ρυθμισμένες επιλογές ανακάλυψης και εκτελεί εντολές Nmap για να καθορίσει την αρχική λίστα των διευθύνσεων IP που θα σαρωθούν (ή ερωτήματα Active Directory αν χρησιμοποιείται αυτός ο τύπος). Κάθε IP που θα σαρωθεί τοποθετείται σε μια ουρά. Μόλις ολοκληρωθεί η αρχική διαδικασία (και υπάρχουν IP που πρέπει να σαρωθούν στην ουρά) θα δημιουργηθεί ένας αριθμός διαδικασιών για την περαιτέρω σάρωση κάθε IP παράλληλα. Αυτός ο αριθμός διαδικασιών είναι παραμετροποιήσιμος στις ρυθμίσεις, επεξεργασία του χαρακτηριστικού <i>_Όριο ουράς</i>. Εξ ορισμού αυτό είναι ρυθμισμένο στο 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Μόλις επιλέξετε τις συσκευές σας για να επεξεργαστείτε, κάντε κλικ στο κουμπί μολύβι στο επάνω δεξί μέρος του τραπεζιού.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Μόλις το κάνετε αυτό, το Open-AudIT θα προσπαθήσει να επαληθεύσει τις λεπτομέρειες του logon χρήστη σας ενάντια στη ρυθμισμένη μέθοδο Auth. Εάν ο χρήστης έχει έγκυρα διαπιστευτήρια και <code>use_authorisation</code> set, Open-AudIT θα ζητήσει τη λίστα των ομάδων στις οποίες ανήκει ο χρήστης. Εάν ο χρήστης βρίσκεται στις αντίστοιχες ομάδες για τους ρόλους και τους οργανισμούς Open-AudIT, αυτοί οι ρόλοι και οι οργανισμοί θα εφαρμοστούν σε αυτόν τον χρήστη.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Μόλις έχετε δημιουργήσει ένα βασικό ορισμό, μπορείτε να προγραμματίσετε να τρέξει ενάντια σε μια καθορισμένη ομάδα συσκευών.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Μόλις έχετε αυτά τα αντικείμενα, στο Open-AudIT Εντερπράιζ μπορείτε να πάτε στο μενού -> Ανακαλύψτε -> Σύννεφα -> Δημιουργία Σύννεφα, επιλέξτε το <i>Αμαζόνιο AWS</i> δακτυλογραφήστε και επικολλήστε τα. Έγινε.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Μόλις έχετε αυτά τα αντικείμενα, στο Open-AudIT Εντερπράιζ μπορείτε να πάτε στο μενού -> Ανακαλύψτε -> Σύννεφα -> Δημιουργία Σύννεφα, επιλέξτε το <i>Microsoft Azure</i> δακτυλογραφήστε και επικολλήστε τα. Έγινε.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Μόλις έχετε τα διαπιστευτήριά σας για το σύννεφο, είναι απλώς θέμα δημιουργίας ενός νέου σύννεφου και λειτουργίας της ανακάλυψης - ή προγραμματισμού πρώτες / μελλοντικές ανακαλύψεις. Βεβαιωθείτε ότι έχετε επίσης τα διαπιστευτήρια που απαιτούνται για να συνδεθείτε στις μηχανές σύννεφο σας, και όλα γίνονται για σας ακριβώς όπως μια κανονική ανακάλυψη. Καταχώρηση για το σύννεφο σας';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Ένα από τα <code>3x2</code>, <code>4x2</code>, <code>4x3</code> ή <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Ένα από τα Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Ένα από την ανάπτυξη, ανάκτηση καταστροφών, αξιολόγηση, προ-παραγωγή, παραγωγή, δοκιμές, κατάρτιση, δοκιμή αποδοχής χρηστών';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Ένα από τα κατανεμημένα, εκχωρημένα, σχεδιασμό, κρατημένα, μη τοποθετημένα, άγνωστα, μη διαχειριζόμενα. Προκαθορισμένα προς κατανομή.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Ένα από τα δύο <code>active directory</code> ή <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Ένα από: antivirus, backup, firewall, εγκεκριμένο, απαγορευμένο, αγνοείται ή άλλο.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Ένα άλλο στοιχείο για να είστε προσεκτικοί - βεβαιωθείτε ότι χρησιμοποιείτε το όνομα του υπολογιστή (ή fqdn) σας LDAP Server που ταιριάζει με αυτό που υπάρχει στο πιστοποιητικό (όχι μόνο τη διεύθυνση IP των εξυπηρετητών LDAP) κατά τη δημιουργία της καταχώρησης LDAP στο Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Ηλεκτρονική τεκμηρίωση';

$GLOBALS["lang"]['Open'] = 'Άνοιγμα';

$GLOBALS["lang"]['Open Data'] = 'Άνοιγμα δεδομένων';

$GLOBALS["lang"]['Open Source'] = 'Άνοιγμα πηγαίου κώδικα';

$GLOBALS["lang"]['Open-AudIT'] = 'Ανοιχτό διάδρομο';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Ανοιχτό διάδρομο Ο κοινοτικός πηγαίος κώδικας διατίθεται στο GitHub. Ενθαρρύνεστε να επιθεωρήσετε οποιονδήποτε κώδικα για τον οποίο έχετε ανησυχίες, και επειδή είναι ανοικτός κώδικας - σας ενθαρρύνουμε επίσης να μας ρωτήσετε για οποιαδήποτε ζητήματα έχετε ή αναφέρετε τυχόν ευρήματα. Είμαστε πάντα περισσότερο από ευτυχείς να δεχόμαστε συνεισφορές κώδικα, αναφορές ευπάθειας, ή ακόμα και απλές ερωτήσεις. Είμαστε εδώ για να βοηθήσουμε.<br/><br/>Τα ίδια τα σενάρια ελέγχου (Windows, Linux, MacOS, et al) γράφονται εσκεμμένα σε αναγνώσιμο εγγενές σενάριο κελύφους (VBScript for Windows, Bash for *nix). Μπορείτε να δείτε ακριβώς ποιες εντολές εκτελούνται. Μπορείτε να αφαιρέσετε οποιεσδήποτε εντολές αισθάνεστε ότι δεν χρειάζεστε. Μπορείτε να ζητήσετε από ένα τρίτο μέρος να επιθεωρήσει τον κώδικα για σας και (αν θέλετε) να αναφέρετε τυχόν ευρήματα.<br/><br/>Ανοιχτό διάδρομο Η επιχείρηση εκτελεί τις πρόσθετες εμπορικές λειτουργίες για την Κοινότητα Open-AudIT. Περιλαμβάνεται ως ένα ενιαίο μεταγλωττισμένο αρχείο χωρίς εξωτερικές εξαρτήσεις. Όταν η ίδια η επιχείρηση εκτελεί τη (τις) λειτουργία(-εις), εάν σας απασχολεί οποιοδήποτε θέμα Το Firstwave είναι στην ευχάριστη θέση να δουλέψει μαζί τους - απλά ask! Δοκιμάστε αυτό με έναν άλλο πωλητή λογισμικού!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Επιλογή συσκευής Open-Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Ανοιχτό διάδρομο Το Enterprise έχει τη δυνατότητα να επιλέξει από μια προκαθορισμένη λίστα επιλογών ανίχνευσης ανακάλυψης και επίσης να προσαρμόσει μεμονωμένες επιλογές ανά ανακάλυψη.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Ανοιχτό Εντερπράιζ. Υψηλής κλίμακας ευέλικτη λύση ανακάλυψης και ελέγχου για μεγάλα δίκτυα. Όλα τα χαρακτηριστικά του Professional συν: Βασικές γραμμές, Ελέγχου αρχείων, Cloud Discovery, Διαχείριση Rack, Ρυθμιζόμενος έλεγχος πρόσβασης Basedόλων συμπεριλαμβανομένου του Ενεργού καταλόγου και LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Όνομα πεδίου Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Άδειες Open-Audit';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Επιλογές Open-Audit';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Το Open-AudIT Professional and Enterprise περιλαμβάνει βελτιωμένα χαρακτηριστικά αναφοράς, συμπεριλαμβανομένων χρονικών, ιστορικών, και muti-query που βασίζονται χαρακτηριστικά αναφοράς σε πολλαπλές μορφές.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Ανοιχτό διάδρομο Ο επαγγελματίας έχει τη δυνατότητα να επιλέξει από μια προκαθορισμένη λίστα επιλογών ανίχνευσης ανακάλυψης, ανά ανακάλυψη.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Ανοιχτός επαγγελματίας. Ο κόσμος...';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Ανοιχτή Οδό IT μπορεί να ρυθμιστεί για να χρησιμοποιήσει τους εξυπηρετητές LDAP (Microsoft Active Directory ή/και OpenLDAP) για να επικυρώσει και να εξουσιοδοτήσει έναν χρήστη και επιπλέον, για να δημιουργήσει ένα λογαριασμό χρήστη στο Open-AudIT χρησιμοποιώντας εκχωρημένους ρόλους και οργκ με βάση την ιδιότητα μέλους του ομίλου LDAP. Μπορεί επίσης να χρησιμοποιήσει';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Ανοιχτή Οδό IT μπορεί να εκτελεστεί στο διακομιστή σας στο κέντρο δεδομένων σας. Δεν χρειάζεται καθόλου πρόσβαση στο διαδίκτυο. Ακόμα και η εγκατάσταση στο Linux όπου χρησιμοποιούμε το διαχειριστή πακέτων διανομής για τις προϋποθέσεις μας μπορεί να αναβληθεί από εσάς χρησιμοποιώντας ένα εσωτερικό και εγκεκριμένο πακέτο ασφαλείας.<br/><br/>Ανοιχτή Οδό Δεν αποθηκεύει κανένα από τα δεδομένα σας στο σύννεφο. Ακόμη και πληροφορίες αδειοδότησης μπορούν να παρέχονται χωρίς να χρειάζεται να έχουν πρόσβαση στο διαδίκτυο από τον εξυπηρετητή Open-AudIT.<br/><br/>Σίγουρα, είναι ευκολότερο να του επιτραπεί να έχει πρόσβαση στο διαδίκτυο για να κατεβάσει πακέτα (συμπεριλαμβανομένων των διορθώσεων ασφαλείας) για τη διανομή σας, αλλά αυτό εξαρτάται από εσάς και τις πολιτικές ασφαλείας σας. Το Open-AudIT δεν χρειάζεται το διαδίκτυο.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Το Open-AudIT μπορεί να κατεβάσει, να αναλύσει και να χρησιμοποιήσει αναφορές ευπάθειας NIST CVE.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Ανοιχτή Οδό Μπορεί να εμφανιστεί σε μια από τις διάφορες γλώσσες. Πώς μπορείς να το βελτιώσεις αυτό;';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Ανοιχτή Οδό IT μπορεί να αποθηκεύσει πληροφορίες σε πρόσθετα πεδία που συνδέονται με κάθε συσκευή.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Το Open-AudIT μπορεί να χρησιμοποιήσει τη Microsoft Entra (παλαιότερα γνωστή ως Microsoft Azure Active Directory) ως μέθοδο ταυτοποίησης. Αυτό σημαίνει ότι ο χρήστης σας στο Open-AudIT μπορεί να κάνει κλικ στο Logon χρησιμοποιώντας το κουμπί Entra στη σελίδα του logon και να χρησιμοποιήσει τα διαπιστευτήρια Entra για το logon. Αυτός ο χρήστης θα πρέπει να υπάρχει ήδη εντός Open-AudIT (και να ανατεθεί';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Το Open-AudIT μπορεί να χρησιμοποιήσει την OKTA ως μέθοδο ταυτοποίησης. Αυτό σημαίνει ότι ο χρήστης σας στο Open-AudIT μπορεί να κάνει κλικ στο Logon χρησιμοποιώντας το κουμπί OKTA στη σελίδα logon και να χρησιμοποιήσει τα διαπιστευτήριά τους OKTA για logon. Αυτός ο χρήστης θα πρέπει να υπάρχει ήδη μέσα στο Open-AudIT (και να έχει ανατεθεί Ρόλοι και Οργανισμοί), αλλά δεν θα χρειάζεται να θυμάστε ένα ξεχωριστό σύνολο logon διαπιστευτήρια.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Το Open-AudIT έρχεται με πολλά ερωτήματα ενσωματωμένα. Εάν χρειάζεστε ένα συγκεκριμένο ερώτημα και κανένα από τα προσυσκευασμένα ερωτήματα δεν ταιριάζει στις ανάγκες σας, είναι αρκετά εύκολο να δημιουργήσετε ένα νέο και να το φορτώσετε σε Open-AudIT για τρέξιμο.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Το Open-AudIT έχει ένα JSON Restful API που θα χρησιμοποιηθεί τόσο στη διασύνδεση ιστού όσο και μέσω αιτημάτων JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Ανοιχτή Οδό IT έχει ένα σύστημα κοκκωδών αδειών για να καθορίσει τι ένας χρήστης μέσα στο Open-AudIT μπορεί να κάνει, και τα στοιχεία που μπορεί να το κάνει. Το Open-AudIT μπορεί να είναι εντελώς αυτοτελές, ή να χρησιμοποιεί Active Directory ή OpenLDAP για ταυτοποίηση ή/και εξουσιοδότηση.<br/><br/>Εξαρτάται εξ ολοκλήρου από τον διαχειριστή του Open-AudIT πώς θα ήθελαν να λειτουργήσει ο Έλεγχος Πρόσβασης με βάση το Ρόλο.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Ανοιχτή Οδό IT έχει μια ισχυρή μηχανή ανίχνευσης αλλαγών. Οποιεσδήποτε ιδιότητες συσκευής προστίθενται, αφαιρούνται ή τροποποιούνται θα ανιχνευθούν και θα αποθηκευτούν. Αυτές οι αλλαγές μπορούν να αναφερθούν και τα σχετικά δεδομένα επιβεβαιώνονται ως προς το τι αναμενόταν από τη διαδικασία αλλαγής και απελευθέρωσης της εταιρείας σας.<br/><br/>Όταν μια συσκευή ελέγχεται, τα χαρακτηριστικά διαιρούνται σε τμήματα που αντιστοιχούν σε πίνακες στη βάση δεδομένων.<br/><br/>Κάθε συσκευή (υπολογιστής, δρομολογητής, εκτυπωτής, κ.λπ.) έχει μια καταχώρηση στο <code>devices</code> τραπέζι. Κάθε εγγραφή στον πίνακα συσκευών έχει <code>id</code> στήλη. Αυτή η τιμή είναι μοναδική - είναι ένα auto-incrementing id.<br/><br/>Κατά την επεξεργασία του αποτελέσματος του ελέγχου, κάθε στοιχείο σε κάθε τμήμα έχει το αποτέλεσμα του ελέγχου σε σύγκριση με το τι υπάρχει στη βάση δεδομένων.<br/><br/>Για κάθε τμήμα, εάν οι βασικές στήλες (βλ. παρακάτω πίνακα) περιέχουν τις ίδιες τιμές, θεωρείται ήδη εγκατεστημένη και έχει την <code>last_seen</code> Ανακαινισμένο χαρακτηριστικό. Δεν δημιουργήθηκε καταχώρηση change_log.<br/><br/>Εάν κάποια από τις στήλες-κλειδιά δεν ταιριάζουν, θεωρείται νέο χαρακτηριστικό και εισάγεται. Α <code>change_log</code> η είσοδος δημιουργείται εάν η συσκευή είχε άλλα χαρακτηριστικά ήδη παρόντα στον πίνακα.<br/><br/>Κατά την ολοκλήρωση της επεξεργασίας του ελέγχου, θεωρείται ότι δεν υπάρχουν στοιχεία της βάσης δεδομένων που δεν έχουν ενημερωθεί (ή εισαχθεί). Η <code>current</code> το χαρακτηριστικό για το στοιχείο αυτό ορίζεται στο <i>n</i> και δημιουργείται μια καταχώρηση change_log.<br/><br/>Έτσι, μπορούμε να προσδιορίσουμε αν κάτι είναι εγκατεστημένο - η τρέχουσα στήλη είναι <i>y</i>.<br/><br/>Μπορούμε να προσδιορίσουμε πότε εντοπίστηκε αρχικά κάτι. <i>πρώτη_ προβολή</i>.<br/><br/>Μπορούμε να καθορίσουμε αν κάτι έχει εγκατασταθεί μετά τον αρχικό έλεγχο - που πρωτοεμφανίστηκε θα είναι διαφορετικό στους πίνακες εξαρτημάτων και συσκευών.<br/><br/>Μπορούμε να προσδιορίσουμε αν κάτι δεν είναι εγκατεστημένο αυτή τη στιγμή, αλλά προηγουμένως ήταν - ρεύμα = <i>n</i>.<br/><br/>Μπορούμε να προσδιορίσουμε την τελευταία φορά που εντοπίσαμε ένα αντικείμενο - τελευταία φορά.<br/><br/>Σε οποιοδήποτε σημείο, μπορούμε να καθορίσουμε τι υπήρχε σε ένα σύστημα - χρησιμοποιώντας τον πίνακα control_log και επιλέγοντας τα σχετικά συστατικά με βάση το first_seen και το last_seen.<br/><br/>Κάθε τμήμα και οι αντιστοιχισμένες βασικές στήλες του είναι παρακάτω.<br/><br/>ΣΗΜΕΙΩΣΗ - Υπάρχουν ορισμένες εξαιρέσεις όπως περιγράφονται παρακάτω.<br/><br/>*1 - Για τις κάρτες δικτύου, αν ο υπολογιστής είναι ένα μηχάνημα VMware Esx χρησιμοποιεί επίσης το net_index και τις στήλες σύνδεσης.<br/><br/>*2 - Για τις κατατμήσεις, f ο υπολογιστής είναι μια μηχανή AIX, χρησιμοποιούμε το όνομα κατάτμησης.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT είναι ένα πρόγραμμα που έχει σχεδιαστεί για να παρακολουθείτε και να αναφέρετε σχετικά με την πληροφορική σας και τις σχετικές λεπτομέρειες των περιουσιακών στοιχείων και τη διαμόρφωση. Το Open-Audit μπορεί να πει <i>Τι υπάρχει στο δίκτυό σας;</i>, πώς έχει ρυθμιστεί και αν έχουν υπάρξει αλλαγές. Το Open-AudIT παρέχει μια κομψή, ευέλικτη και εύκολη στη χρήση πλατφόρμα για την ανακάλυψη της συσκευής, το IT ώντιτινγκ και τον αυτοματισμό διαχείρισης αποθεμάτων κατευθείαν έξω από το κουτί.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Ανοιχτή Οδό IT καθιστά εύκολη την επεξεργασία των ιδιοτήτων των πολλαπλών συσκευών ταυτόχρονα.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Ανοιχτή Οδό Η IT χρειάζεται συγκεκριμένες άδειες καταλόγου για να είναι σε θέση να δημιουργήσει αρχεία, να φορτώσει τα αποτελέσματα, κλπ. Παρακαλώ ορίσατε ως ακολούθως.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Το Open-AudIT παρέχει πολλά ενσωματωμένα ερωτήματα και το καθιστά απλό να δημιουργήσετε το δικό σας.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Ανοιχτή Οδό IT πλοία με ενσωματωμένους ρόλους για admin, org_admin και χρήστη.<br/><br/>Γενικά, ένας χρήστης που είναι διαχειριστής της εφαρμογής Open-AudIT θα πρέπει να έχει το admin και πιθανούς ρόλους org_admin.<br/><br/>Ένας χρήστης μπορεί να έχει πολλαπλούς ρόλους. Η άδεια θα εφαρμοστεί στο πιο ανεκτικό επίπεδο - IE, αν ένας χρήστης έχει τους ρόλους του χρήστη και org_admin, θα είναι σε θέση να δημιουργήσουν τοποθεσίες επειδή org_admin χορηγεί αυτή την άδεια, παρόλο που ο ρόλος του χρήστη δεν το κάνει.<br/><br/>Ο ρόλος του διαχειριστή επιτρέπει την πρόσβαση σε συλλογές όπως η διαμόρφωση, η βάση δεδομένων, οι ομάδες, οι εξυπηρετητές ldap, τα αρχεία καταγραφής, τα ερωτήματα και οι ρόλοι. Παγκόσμια αντικείμενα που επηρεάζουν ολόκληρη την εφαρμογή.<br/><br/>Ο ρόλος org_admin επιτρέπει συνήθως τη δημιουργία, ανάγνωση, ενημέρωση και διαγραφή ενεργειών για οποιαδήποτε συλλογή που περιέχει τη στήλη org_id. Σχεδόν όλα τα δεδομένα εκτός από ορισμένες από τις παραπάνω συλλογές θα περιέχουν <code>org_id</code> στήλη.<br/><br/>Ο ρόλος χρήστη επιτρέπει γενικά την ανάγνωση μόνο πρόσβασης σε όλα τα αντικείμενα με μια στήλη org_id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Ανοιχτή Οδό IT πλοία με ενσωματωμένους ρόλους για admin, org_admin και χρήστη.<br/><br/>Γενικά, ένας χρήστης που είναι διαχειριστής της εφαρμογής Open-AudIT θα πρέπει να έχει το admin και πιθανούς ρόλους org_admin.<br/><br/>Ένας χρήστης μπορεί να έχει πολλαπλούς ρόλους. Η άδεια θα εφαρμοστεί στο πιο ανεκτικό επίπεδο - IE, αν ένας χρήστης έχει τους ρόλους του χρήστη και org_admin, θα είναι σε θέση να δημιουργήσουν τοποθεσίες επειδή org_admin χορηγεί αυτή την άδεια, παρόλο που ο ρόλος του χρήστη δεν το κάνει.<br/><br/>Ο ρόλος του διαχειριστή επιτρέπει την πρόσβαση σε συλλογές όπως η διαμόρφωση, η βάση δεδομένων, οι ομάδες, οι εξυπηρετητές ldap, τα αρχεία καταγραφής, τα ερωτήματα και οι ρόλοι. Παγκόσμια αντικείμενα που επηρεάζουν ολόκληρη την εφαρμογή.<br/><br/>Ο ρόλος org_admin επιτρέπει συνήθως τη δημιουργία, ανάγνωση, ενημέρωση και διαγραφή ενεργειών για οποιαδήποτε συλλογή που περιέχει τη στήλη org_id. Σχεδόν όλα τα δεδομένα εκτός από μερικές από τις παραπάνω συλλογές θα περιέχουν μια στήλη org_id.<br/><br/>Ο ρόλος χρήστη επιτρέπει γενικά την ανάγνωση μόνο πρόσβασης σε όλα τα αντικείμενα με μια στήλη org_id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Σκάφη Open-AudIT με αρκετές προ-ρυθμισμένες Dashboards. Αν είστε επαγγελματίας χρήστης, μπορείτε να επιλέξετε ανάμεσα σε δύο από αυτά και να το ορίσετε ως προεπιλεγμένη σελίδα σας όταν συνδεθείτε. Εάν είστε χρήστης του Enterprise, μπορείτε όχι μόνο να επιλέξετε μεταξύ των πέντε προσχεδιασμένων Dashboards, αλλά έχετε επίσης τη δυνατότητα να δημιουργήσετε το δικό σας.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Το Open-AudIT θα πρέπει να εγκατασταθεί στα 64bit Windows <strong>Διακομιστής</strong> Μόνο συστήματα. Τα Windows 10 και τα Windows 11 είναι <strong>όχι</strong> Υποστηρίζεται.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Το Open-AudIT χρησιμοποιεί το Nmap στη λειτουργία του Discovery. Το Nmap ανιχνεύει συσκευές για ανοικτές θύρες. Οι συσκευές θα πρέπει ιδανικά να ανταποκρίνονται με ανοιχτές θύρες εργασίας. Οι συσκευές συχνά δεν ανταποκρίνονται με αυτό. Οι ποικίλες απαντήσεις περιγράφονται παρακάτω.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Το Open-AudIT χρησιμοποιεί το Nmap στη λειτουργία του Discovery. Χωρίς Nmap, το Open-AudIT δεν θα λειτουργεί σωστά. Κάθε εγκατάσταση Open-AudIT υποθέτει ότι ο Nmap είναι εγκατεστημένος και θα δοκιμαστεί επίσης στις ιστοσελίδες του Discovery. Περισσότερες πληροφορίες για Open-AudIT και Nmap είναι διαθέσιμες εδώ';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Το Open-AudIT χρησιμοποιεί το Nmap στη λειτουργία του Discovery. Χωρίς Nmap, το Open-AudIT δεν θα λειτουργεί σωστά. Κάθε εγκατάσταση Open-AudIT υποθέτει ότι το Nmap είναι εγκατεστημένο και θα το δοκιμάσει στις ιστοσελίδες του Discovery.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Ανοιχτή Οδό Χρησιμοποιεί διαπιστευτήρια για να έχει πρόσβαση στις συσκευές σας. Αυτά είναι κρυπτογραφημένα και αποθηκευμένα, όπως θα περίμενες.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Το Open-AudIT γράφτηκε από έναν αγγλόφωνο Αυστραλό. Όλα στην εφαρμογή χρησιμοποιούν την αγγλική διατύπωση. Ωστόσο, το Open-AudIT πάντα υποστήριζε πολλαπλές γλώσσες για εμφάνιση. Αυτές οι μεταφράσεις δεν είναι πάντα σωστές, επειδή οι προγραμματιστές δεν μιλούν τη γλώσσα κάθε μετάφρασης που προσφέρεται.<br/><br/>Τι μπορείτε να κάνετε αν κάτι δεν είναι σωστό στη μετάφραση;';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'Το OpenScap είναι εγκατεστημένο';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Ανοίγοντας ένα εισιτήριο υποστήριξης;';

$GLOBALS["lang"]['openldap_user_dn'] = 'Dn χρήστη Openldap';

$GLOBALS["lang"]['Openldap User Dn'] = 'Dn χρήστη Openldap';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Χαρακτηριστικά ιδιότητας μέλους χρήστη Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Χαρακτηριστικά ιδιότητας μέλους χρήστη Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Ανοιχτά';

$GLOBALS["lang"]['Open|filtered'] = 'Ανοιχτά';

$GLOBALS["lang"]['Operating System'] = 'Λειτουργικό σύστημα';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Λειτουργικό σύστημα Οικογένεια περιέχει';

$GLOBALS["lang"]['Operating Systems'] = 'Λειτουργικά συστήματα';

$GLOBALS["lang"]['Operators'] = 'Φορείς εκμετάλλευσης';

$GLOBALS["lang"]['optical'] = 'Οπτική';

$GLOBALS["lang"]['Optical'] = 'Οπτική';

$GLOBALS["lang"]['Optimized'] = 'Βελτιστοποιημένο';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Επιλογή # 1 - Αλλαγή των δεδομένων';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Επιλογή # 2 - Αλλαγή του αρχείου μεταφράσεων';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Προαιρετικός έλεγχος με βάση τον πράκτορα';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Προαιρετική έκδοση όπως ελέγχθηκε από το Open-AudIT. Χρησιμοποίησε το ποσοστό % ως μπαλαντέρ.';

$GLOBALS["lang"]['options'] = 'Επιλογές';

$GLOBALS["lang"]['Options'] = 'Επιλογές';

$GLOBALS["lang"]['Options, options, options'] = 'Επιλογές, επιλογές, επιλογές';

$GLOBALS["lang"]['Or'] = 'Ή';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Ή επιλέξτε από τα παρακάτω πεδία.';

$GLOBALS["lang"]['org_descendants'] = 'Απόγονοι Οργών';

$GLOBALS["lang"]['Org Descendants'] = 'Απόγονοι Οργών';

$GLOBALS["lang"]['org_id'] = 'Ταυτότητα Org';

$GLOBALS["lang"]['Org ID'] = 'Ταυτότητα Org';

$GLOBALS["lang"]['Organisation'] = 'Εισαγωγή';

$GLOBALS["lang"]['organisation'] = 'Εισαγωγή';

$GLOBALS["lang"]['Organisation Descendants'] = 'Οργάνωση απογόνων';

$GLOBALS["lang"]['Organisations'] = 'Οργανώσεις';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Οι οργανισμοί μπορούν να επεκτείνουν και να ενισχύσουν το επίπεδο λεπτομέρειας που αποθηκεύεται σε κάθε συσκευή που ανακαλύφθηκε χρησιμοποιώντας προσαρμοσμένα πεδία και ο ανοικτός πυρήνας επιτρέπει την εύκολη ενσωμάτωση σε συστήματα CMDB, διαχείρισης γεγονότων και έκδοσης εισιτηρίων.';

$GLOBALS["lang"]['orgs'] = 'Οργανισμοί';

$GLOBALS["lang"]['Orgs'] = 'Οργανισμοί';

$GLOBALS["lang"]['Orgs Name'] = 'Όνομα Οργών';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Οι οργανισμοί στο Open-AudIT είναι ένα βασικό στοιχείο. Ένας χρήστης έχει έναν πρωταρχικό Οργανισμό καθώς και μια λίστα των Οργών που μπορούν να έχουν πρόσβαση. Ένας χρήστης το συνδυάζει αυτό με μια λίστα με καθορισμένους ρόλους που καθορίζουν ποιες ενέργειες μπορούν να αναλάβουν σε αντικείμενα που έχουν ανατεθεί στους Οργούς στους οποίους έχουν πρόσβαση. Ο συνδυασμός των χρηστών <i>Οργάδες</i> και <i>ρόλοι</i> καθορίζει τι μπορούν και τι δεν μπορούν να κάνουν μέσα στο Open-AudIT.<br/><br/>Τα περισσότερα αντικείμενα στο Open-AudIT ανατίθενται σε έναν Οργ. Συσκευές, Τοποθεσίες, Δίκτυα, κ.λπ.<br/><br/>Τα όργκ μπορούν να κάνουν παιδιά. Σκεφτείτε μια οργανωτική δομή (δέντρο). Εάν ένας χρήστης έχει πρόσβαση σε συγκεκριμένο Οργ, τις περισσότερες φορές (όχι πάντα) έχουν επίσης πρόσβαση σε αυτούς τους Οργούς απογόνους.';

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

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Εκτός από αυτόν τον περιορισμό, είστε ελεύθεροι να επιλέξετε χαρακτηριστικά όπως απαιτείται. Είναι καλή ιδέα να χρησιμοποιήσετε το μενού';

$GLOBALS["lang"]['Others'] = 'Άλλα';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Προεπιλεγμένη Ένταξη μας επιτρέπει επίσης μια ανακάλυψη σε οποιαδήποτε εξωτερική παρεχόμενες συσκευές. Έτσι θα στείλουμε μια προκαθορισμένη ανακάλυψη για την Προκαθορισμένη Ενσωμάτωση έξω από το κουτί. Αυτά χρησιμοποιούν τους προκαθορισμένους κανόνες αντιστοίχισης, αλλά και ενεργοποιούν την αντιστοίχιση στη διεύθυνση IP.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Τα παραδείγματα μας θα χρησιμοποιήσουν το <i>τύπος</i> στήλη.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Το πλαίσιο μας ανεβάζει τα αρχεία εδώ για επεξεργασία και μετά τα διαγράφει. Η σκέψη υποβλήθηκε αποτελέσματα ελέγχου, κλπ.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Στόχος μας με την αρχική έκδοση ενσωμάτωσης ήταν ειδικά η ενσωμάτωση του NDIS στο Open-AudIT <i>Απλά δουλειά.</i>. Αν χρησιμοποιείτε τα προγράμματα στο Linux, μπορείτε κυριολεκτικά να κάνετε κλικ σε ένα μόνο κουμπί για να εκτελέσετε την ενσωμάτωση. Τίποτα άλλο δεν απαιτείται. Τούτου λεχθέντος, η ίδια η ολοκλήρωση είναι εξαιρετικά παραμετροποιήσιμη - επομένως, αν κάτι δεν είναι στην προτίμησή σας, μπορεί εύκολα να αλλάξει.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Το νέο μας χαρακτηριστικό που ονομάζεται Ευάλωτα σας δίνει τη δυνατότητα να καθορίσετε γρήγορα εάν οποιεσδήποτε συσκευές επηρεάζονται από οποιαδήποτε CVE (Κοινή Έκθεση Ευαισθητότητας) - αλλά πώς;<br/><br/>Το FirstWave καταναλώνει συνεχώς την παραγωγή από το Nist NVD feed. Παίρνουμε αυτό και εφαρμόζουμε μερικούς περιορισμούς, κατόπιν εξάγουμε τα επηρεαζόμενα προγράμματα και δημιουργούμε ένα ερώτημα SQL για την αναφορά. Η εκπομπή Open-AudIT σας φτάνει στο FirstWave και ζητά οποιαδήποτε νέα τρωτά σημεία σε τακτική βάση. Όταν λαμβάνει ένα νέο αρχείο ευπάθειας, εκτελείται ενάντια στη βάση δεδομένων και το αποτέλεσμα αποθηκεύεται. Κάθε φορά που μια συσκευή υποβάλλεται σε επεξεργασία, εκτελούνται και πάλι όλα τα αντίστοιχα τρωτά σημεία και το αποτέλεσμα αποθηκεύεται. Αυτό σημαίνει ότι όταν βλέπουμε έναν κατάλογο ευπάθειας, δεν χρειάζεται να υπολογίζουμε όλες τις συσκευές που επηρεάζονται - έχουμε ήδη το αποτέλεσμα. Όταν βλέπετε ένα ατομικό αρχείο ευπάθειας, υπολογίζουμε εκ νέου το αποτέλεσμα για αυτή τη μοναδική ευπάθεια.<br/><br/>Έτσι, είστε πάντα ενημερωμένοι!<br/><br/>Εκτός από αυτό, υπολογίζουμε και το αποτέλεσμα όλων των τρωτών σημείων για όλες τις συσκευές καθημερινά (συνήθως σε μια ήσυχη ώρα, ας πούμε 2πμ).<br/><br/>Στην περίπτωσή σας του Open-AudIT, σας επιτρέπουμε να επιλέξετε ποιους πωλητές σας ενδιαφέρει. Δηλαδή δεν υπάρχει καμία χρήση ανάκτησης αρχείων ευπάθειας από πωλητή του οποίου το λογισμικό δεν χρησιμοποιείτε ή έχετε εγκαταστήσει. Εξ ορισμού, η λίστα προμηθευτών μας είναι Adobe, Apple, Cisco, Google, Microsoft, Mozilla, και Redhat.<br/><br/>Όλα αυτά ακούγονται πολύ απλά, αλλά παρασκηνιακά <b>Παρτίδα</b> Αυτό συμβαίνει. Για παράδειγμα, η εγγραφή CVE περιέχει μια λίστα επηρεαζόμενων λογισμικού - αλλά αυτά τα ονόματα λογισμικού δεν ταιριάζουν με αυτά που λαμβάνουμε όταν ελέγχουμε έναν υπολογιστή. Ένα καλό παράδειγμα είναι οι Απάτσι. Τυπικά, μια εγγραφή CVE θα πει ότι το επηρεασμένο λογισμικό είναι το http_server. Στην πραγματικότητα, αυτό εμφανίζεται ως apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - και άλλοι. Έτσι, πρέπει πρώτα να προσδιορίσουμε ποιο είναι το πραγματικό όνομα του προγράμματος που λαμβάνουμε όταν ζητάμε έναν υπολογιστή, και μπορεί να υπάρχουν πολλαπλά ονόματα. Μετά από αυτό πρέπει να αναλύσουμε την εγγραφή CVE και να δημιουργήσουμε μια αντίστοιχη δήλωση SQL. Επιτρέποντας πολλαπλά ονόματα προγραμμάτων όπως παραπάνω, και πολλαπλές εκδόσεις, σειρές εκδόσεων, ακόμη και πολλαπλά διαφορετικά κομμάτια λογισμικού (ένα παράδειγμα είναι Thunderbird και Firefox σε ένα ενιαίο CVE). Και η περίπτωση του Open-AudIT πρέπει να πάρει αυτό και να εφαρμόσει το φίλτρο Orgs, καθώς και. Και αυτό είναι μόνο ένα CVE. Τι γίνεται με τον καθορισμό ποια CVE έχετε και δεν έχετε; Τι λες να προσθέσεις έναν πωλητή στη λίστα αργότερα; Τόσα πολλά πράγματα να σκεφτείς!<br/><br/>Όπως και η συνήθης αναφορά, έχουμε επίσης μερικά νέα widgets διαθέσιμα για Dashboards, με βάση τα στοιχεία ευπάθειας.';

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

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'Το PAExec είναι ένα ελεύθερα διανεμήσιμο re-application του δημοφιλούς προγράμματος PsExec SysInternal/Microsofts. Το PAExec στοχεύει να είναι μια πτώση στην αντικατάσταση του PsExec, έτσι η χρήση γραμμής εντολών είναι πανομοιότυπη, με επιπλέον επιλογές που υποστηρίζονται επίσης. Το έργο αυτό εμπνεύστηκε αρχικά από την Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Δεδομένα posting';

$GLOBALS["lang"]['Package'] = 'Συσκευασία';

$GLOBALS["lang"]['packages'] = 'Πακέτα';

$GLOBALS["lang"]['Packages'] = 'Πακέτα';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Τα πακέτα χρησιμοποιούνται για να αναφέρουν πράγματα όπως <i>απαγορευμένο λογισμικό</i>, AntiVirus σε servers, κλπ.<br/><br/>Το Open-AudIT παρέχει widgets που χτίζουν πάνω επίσης παρέχονται repots για να detemine την κατάσταση του antivirus, τείχος προστασίας και άλλο λογισμικό.';

$GLOBALS["lang"]['pagefile'] = 'Αρχείο σελίδας';

$GLOBALS["lang"]['Pagefile'] = 'Αρχείο σελίδας';

$GLOBALS["lang"]['Pakistan'] = 'Πακιστάν';

$GLOBALS["lang"]['Palau'] = 'Παλάου';

$GLOBALS["lang"]['Palestinian Territory'] = 'Παλαιστινιακό Έδαφος';

$GLOBALS["lang"]['Panama'] = 'Παναμάς';

$GLOBALS["lang"]['Papua New Guinea'] = 'Παπουασία-Νέα Γουινέα';

$GLOBALS["lang"]['Paraguay'] = 'Παραγουάη';

$GLOBALS["lang"]['Parameters'] = 'Παράμετροι';

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

$GLOBALS["lang"]['Permission'] = 'Άδεια';

$GLOBALS["lang"]['Permission Required'] = 'Απαιτούμενη άδεια';

$GLOBALS["lang"]['permissions'] = 'Άδειες';

$GLOBALS["lang"]['Permissions'] = 'Άδειες';

$GLOBALS["lang"]['Persian'] = 'Περσικά';

$GLOBALS["lang"]['Personal Area Network'] = 'Δίκτυο προσωπικής περιοχής';

$GLOBALS["lang"]['Personal area network'] = 'Δίκτυο προσωπικής περιοχής';

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

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Τα διαγράμματα πίτας πρέπει να επιστρέφουν το όνομα ή το όνομα, την περιγραφή ή την περιγραφή μου και να μετρούν.';

$GLOBALS["lang"]['ping'] = 'Πινγκ';

$GLOBALS["lang"]['Ping'] = 'Πινγκ';

$GLOBALS["lang"]['Ping Target'] = 'Στόχος Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Νήσοι Πίτκερν';

$GLOBALS["lang"]['placement'] = 'Τοποθέτηση';

$GLOBALS["lang"]['Placement'] = 'Τοποθέτηση';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Σχέδιο και διεξαγωγή εσωτερικών ελέγχων';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Παρακαλώ έχετε ένα λογότυπο διαχειριστή Open-AudIT και την αναβάθμιση της βάσης δεδομένων.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Παρακαλώ συνδεθείτε και αλλάξτε τα αμέσως.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Παρακαλώ συνδεθείτε στον εξυπηρετητή Open-AudIT (είτε Windows είτε Linux) και τρέξτε <code>nslookup IP_ADDRESS_OF_TARGET</code> στην εντολή ή στο κέλυφος. Πρέπει να είναι σε θέση να επιλύσει την IP σε ένα όνομα.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Παρακαλώ σημειώστε ότι το επιλεγμένο πλαίσιο θα παρακάμψει το πλαίσιο εισαγωγής κειμένου.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Παρακαλώ δείτε τις Συχνές Ερωτήσεις';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Παρακαλώ στείλτε και τα τρία αρχεία στην επαφή υποστήριξης σας στο Opmantek και περιγράψτε το θέμα σας.';

$GLOBALS["lang"]['Please set using'] = 'Παρακαλώ ρυθμίστε τη χρήση';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Παρακαλώ επισκεφθείτε την αρχική σελίδα στο';

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

$GLOBALS["lang"]['Polish'] = 'Πολωνικά';

$GLOBALS["lang"]['Polite'] = 'Ευγενικό';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Σχηματίστε τις ακόλουθες τιμές:';

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

$GLOBALS["lang"]['Portuguese'] = 'Πορτογαλικά';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Πορτογαλικά (Βραζιλία)';

$GLOBALS["lang"]['position'] = 'Θέση';

$GLOBALS["lang"]['Position'] = 'Θέση';

$GLOBALS["lang"]['Post-Certification'] = 'Μετά την πιστοποίηση';

$GLOBALS["lang"]['postcode'] = 'Ταχυδρομικός κώδικας';

$GLOBALS["lang"]['Postcode'] = 'Ταχυδρομικός κώδικας';

$GLOBALS["lang"]['power_circuit'] = 'Κύκλωμα ισχύος';

$GLOBALS["lang"]['Power Circuit'] = 'Κύκλωμα ισχύος';

$GLOBALS["lang"]['power_sockets'] = 'Ηλεκτρικές υποδοχές';

$GLOBALS["lang"]['Power Sockets'] = 'Ηλεκτρικές υποδοχές';

$GLOBALS["lang"]['Predictable'] = 'Προβλεπόμενο';

$GLOBALS["lang"]['Preferences'] = 'Προτιμήσεις';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Προετοιμασία για επαναπιστοποίηση κάθε 3 χρόνια';

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

$GLOBALS["lang"]['Privacy Protocol'] = 'Πρωτόκολλο Προστασίας Προσωπικών Δεδομένων';

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

$GLOBALS["lang"]['Professional'] = 'Επαγγελματική';

$GLOBALS["lang"]['profile'] = 'Προφίλ';

$GLOBALS["lang"]['Profile'] = 'Προφίλ';

$GLOBALS["lang"]['program'] = 'Πρόγραμμα';

$GLOBALS["lang"]['Program'] = 'Πρόγραμμα';

$GLOBALS["lang"]['Properties'] = 'Ιδιότητες';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Ιδιοκτησία. Εάν θέλετε να τροποποιήσετε HighCharts μπορεί να χρειαστείτε ένα';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Προστατεύει την εμπιστευτικότητα, την ακεραιότητα και τη διαθεσιμότητα πληροφοριών';

$GLOBALS["lang"]['protocol'] = 'Πρωτόκολλο';

$GLOBALS["lang"]['Protocol'] = 'Πρωτόκολλο';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Αναφέρατε περιγραφή και επιλέξτε και λήγει η διάρκεια.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Δώστε ένα όνομα - εμείς ταπεινά εντολή Open-AudIT 😀, αλλά μπορείτε να το ονομάσετε ό, τι θέλετε.<br/>Από το έντυπο Open-AudIT, αντιγράψτε την τιμή για το <i>Ανακατεύθυνση URI</i> το πεδίο και επικολλήστε το στο <i>Ενσωματώνονται URIs</i> πεδίο στην OKTA.<br/>Το Sign-out ανακατευθύνει URIs είναι προαιρετικό, αλλά αν θέλετε μπορείτε να χρησιμοποιήσετε το open-audit/index. php/logout με τους διακομιστές σας Open-AudIT http address, σύμφωνα με το screenshot.<br/>Κανονικά σας Το URL Open-Audit θα μοιάζει με';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Εφόσον έχετε τα σωστά διαπιστευτήρια, το Device Seed Discovery λειτουργεί ως εξής';

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

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Οι ερωτήσεις αποτελούν σημαντικό μέρος του Open-AudIT. Είναι αυτό που σας επιτρέπει να πάρετε σημαντικές πληροφορίες από όλα τα δεδομένα της συσκευής που έχετε ανακαλύψει. Μαζί με περιλήψεις και ομάδες, παρέχουν έναν ισχυρό μηχανισμό για την εξαγωγή κρίσιμων πληροφοριών.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Ερωτήματα για ομάδες θα πρέπει να επιλέξετε μόνο το';

$GLOBALS["lang"]['Query'] = 'Ερώτηση';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Ερώτηση αυτό το χαρακτηριστικό Active Directory για τον καθορισμό της μονάδας εργασίας των χρηστών.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Ερώτηση αυτού του ενεργού καταλόγου χαρακτηριστικό δεύτερο για τον καθορισμό της μονάδας εργασίας των χρηστών.';

$GLOBALS["lang"]['queue'] = 'Σε αναμονή';

$GLOBALS["lang"]['Queue'] = 'Σε αναμονή';

$GLOBALS["lang"]['Queue Limit'] = 'Όριο αναμονής';

$GLOBALS["lang"]['Queued Device Audits'] = 'Έλεγχος συσκευών σε αναμονή';

$GLOBALS["lang"]['Queued IP Scans'] = 'Σε αναμονή σάρωσης IP';

$GLOBALS["lang"]['Queued Items'] = 'Αντικείμενα σε αναμονή';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC για ενεργό κατάλογο και openLDAP';

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

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Διαχείριση και υποβολή εκθέσεων Rack';

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

$GLOBALS["lang"]['Read through the log file at'] = 'Διαβάστε μέσω του αρχείου καταγραφής στο';

$GLOBALS["lang"]['Received'] = 'Ελήφθη';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Πρόσφατα μας τέθηκε η ερώτηση - θεωρείτε το Open-AudIT πιο ασφαλές από άλλα παρόμοια προγράμματα; Όπως και με τα περισσότερα πράγματα, η απάντηση είναι <i>Εξαρτάται.</i>.<br/><br/>Ανοιχτή Οδό Μπορεί να λειτουργήσει με τρόπο που να είναι εξαιρετικά ασφαλής. Αλλά ως συνήθως με την ασφάλεια των υπολογιστών, όσο πιο ασφαλές θέλετε να κάνετε κάτι, τόσο πιο άβολο γίνεται να χρησιμοποιηθεί. Η παλιά φράση <i>Ο πιο ασφαλής υπολογιστής είναι απενεργοποιημένος και στο ντουλάπι.<i> Μου έρχεται στο μυαλό.<br/><br/>Παρακάτω θα σκιαγραφήσουμε κάποιες επιλογές που μπορούν να χρησιμοποιηθούν με Open-AudIT που θα αυξήσουν την ασφάλεια. Όπως τα περισσότερα αντικείμενα μέσα στο Open-AudIT, αυτές είναι επιλογές και δεν είναι υποχρεωτικές. Πόσο μακριά θα πάτε την ασφάλεια εξαρτάται από εσάς.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Επαναπιστοποίηση: Απαιτούμενη ανά τριετία';

$GLOBALS["lang"]['Red Query'] = 'Κόκκινο ερώτημα';

$GLOBALS["lang"]['Redirect URI'] = 'Ανακατεύθυνση URI';

$GLOBALS["lang"]['redirect_uri'] = 'Ανακατεύθυνση Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Ανακατεύθυνση Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Μειώνει τον κίνδυνο παραβίασης δεδομένων και απειλών στον κυβερνοχώρο';

$GLOBALS["lang"]['references'] = 'Παραπομπές';

$GLOBALS["lang"]['References'] = 'Παραπομπές';

$GLOBALS["lang"]['region'] = 'Περιφέρεια';

$GLOBALS["lang"]['Region'] = 'Περιφέρεια';

$GLOBALS["lang"]['registered_user'] = 'Εγγεγραμμένος χρήστης';

$GLOBALS["lang"]['Registered User'] = 'Εγγεγραμμένος χρήστης';

$GLOBALS["lang"]['Rejected'] = 'Απορρίπτεται';

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

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Επαναλάβετε μέχρι να έχετε ένα πλήρως ανακαλυφθεί και ελεγχθεί Windows PC.';

$GLOBALS["lang"]['Report'] = 'Έκθεση';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Αναφορά για τις συσκευές, τα δίκτυα και πολλά άλλα';

$GLOBALS["lang"]['reportable'] = 'Αναφέρσιμο';

$GLOBALS["lang"]['Reportable'] = 'Αναφέρσιμο';

$GLOBALS["lang"]['Reports'] = 'Εκθέσεις';

$GLOBALS["lang"]['request'] = 'Αίτηση';

$GLOBALS["lang"]['Request'] = 'Αίτηση';

$GLOBALS["lang"]['Request Method'] = 'Μέθοδος αίτησης';

$GLOBALS["lang"]['Request Vulnerability'] = 'Αίτηση ευπάθειας';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Αίτηση ειδικού χαρακτήρα ΚΒΑ';

$GLOBALS["lang"]['requested'] = 'Αιτήθηκε';

$GLOBALS["lang"]['Requested'] = 'Αιτήθηκε';

$GLOBALS["lang"]['require_port'] = 'Απαίτηση θύρας';

$GLOBALS["lang"]['Require Port'] = 'Απαίτηση θύρας';

$GLOBALS["lang"]['Require an Open Port'] = 'Απαίτηση μιας ανοικτής θύρας';

$GLOBALS["lang"]['Required'] = 'Απαιτούμενη';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Απαιτούμενες άδειες χρήστη AWS';

$GLOBALS["lang"]['Required Fields'] = 'Απαιτούμενα πεδία';

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

$GLOBALS["lang"]['Resulting Function'] = 'Αποτέλεσμα συνάρτησης';

$GLOBALS["lang"]['Results'] = 'Αποτελέσματα';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Ανάκτηση μιας λίστας συσκευών στο';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Ανακτήστε μια λίστα συσκευών με OS Name όπως τα Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Ανάκτηση όλων των λεπτομερειών σχετικά με τη συσκευή με id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Ανάκτηση όλων των συσκευών που τρέχουν τα Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Ανάκτηση όλων των συσκευών με τις τυποποιημένες στήλες';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Ανάκτηση των 10 πρώτων συσκευών που τρέχουν τα Windows που παραγγέλθηκαν με το όνομα υπολογιστή';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Ανάκτηση του id ιδιοτήτων, ip, hostname, domain, type από όλες τις συσκευές';

$GLOBALS["lang"]['retrieved'] = 'Ανακτήθηκε';

$GLOBALS["lang"]['Retrieved'] = 'Ανακτήθηκε';

$GLOBALS["lang"]['retrieved_ident'] = 'Αναζητημένο Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Αναζητημένο Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Ανακτήθηκε το όνομα';

$GLOBALS["lang"]['Retrieved Name'] = 'Ανακτήθηκε το όνομα';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Ανακτήθηκε από τη συσκευή - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostvc/host conclusion, HP-UX:machifo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Ανάκτηση Καταλόγου Εντολής';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Ανάκτηση ή Δημιουργία';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Επιστροφή μιας συλλογής συσκευών με το προκαθορισμένο σύνολο στηλών (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Επιστροφή μιας λίστας με όλες τις ενότητες που είναι εγκατεστημένες στους Routers';

$GLOBALS["lang"]['Return an individual device details'] = 'Επιστρέψτε μια μεμονωμένη συσκευή\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Επιστρέφει μια λίστα με {συλλογή}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Επιστρέφει τις λεπτομέρειες μιας συλλογής.';

$GLOBALS["lang"]['Reunion'] = 'Reϋνιόν';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Επανεξέταση των τρεχουσών πρακτικών έναντι των απαιτήσεων ISO 27001';

$GLOBALS["lang"]['revision'] = 'Αναθεώρηση';

$GLOBALS["lang"]['Revision'] = 'Αναθεώρηση';

$GLOBALS["lang"]['risk_assesment_result'] = 'Αποτέλεσμα αξιολόγησης κινδύνου';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Αποτέλεσμα αξιολόγησης κινδύνου';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Αξιολόγηση και Θεραπεία Κινδύνου';

$GLOBALS["lang"]['Risk Management'] = 'Διαχείριση Κινδύνου';

$GLOBALS["lang"]['Role'] = 'Ρόλος';

$GLOBALS["lang"]['roles'] = 'Ρόλοι';

$GLOBALS["lang"]['Roles'] = 'Ρόλοι';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Οι ρόλοι μπορούν να δημιουργηθούν και να επεξεργαστούν μόνο αν έχετε άδεια Open-AudIT Enterprise. Για τους περισσότερους χρήστες, το προκαθορισμένο σύνολο Ρόλων θα πρέπει να είναι το μόνο που απαιτείται.';

$GLOBALS["lang"]['Romania'] = 'Ρουμανία';

$GLOBALS["lang"]['Romanian'] = 'Romanianά';

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

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Οι κανόνες δημιουργούνται και τρέχουν ενάντια σε μια συσκευή όταν η συσκευή ανακαλυφθεί ή ένα αποτέλεσμα ελέγχου υποβάλλεται σε επεξεργασία. Οι κανόνες μπορούν να χρησιμοποιηθούν για τον καθορισμό ενός χαρακτηριστικού συσκευής με βάση άλλα χαρακτηριστικά.<br/><br/>ΣΗΜΕΙΩΣΗ - Προς το παρόν δεν μπορούμε να διαγράψουμε μια εισαγωγή κανόνα ή έξοδο που περιέχει a /. Αυτό συμβαίνει επειδή το πλαίσιο αναλύει το / ως μέρος του URL και επιστρέφει ένα 404, ακόμη και πριν τρέξει ο κωδικός μας. Η εργασία γύρω από αυτό είναι να διαγραφεί ο ίδιος ο κανόνας, στη συνέχεια, αναδημιουργήστε τις εισόδους και εξόδους, όπως απαιτείται. Ευτυχώς οι είσοδοι και οι έξοδοι που περιέχουν a / είναι σπάνιοι (πραγματικά, καμία δεν υπάρχει εξ ορισμού).';

$GLOBALS["lang"]['Run Discovery'] = 'Εκτέλεση ανακάλυψης';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Εκτέλεση ανακάλυψης σε συσκευές';

$GLOBALS["lang"]['Run Your Discovery'] = 'Εκτελέστε την Ανακάλυψη Σας';

$GLOBALS["lang"]['Run a Command'] = 'Εκτέλεση εντολής';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Κάνε μια ανακάλυψη και μάθε. <b>Τι Υπάρχει στο Δίκτυό Σας;</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Εκτέλεση του σεναρίου πληκτρολογώντας <code>cscript test_windows_client.vbs</code> Στην κονσόλα.';

$GLOBALS["lang"]['Run this Command'] = 'Εκτέλεση αυτής της εντολής';

$GLOBALS["lang"]['runas'] = 'Ρούνες';

$GLOBALS["lang"]['Runas'] = 'Ρούνες';

$GLOBALS["lang"]['Running'] = 'Εκτέλεση';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Εκτέλεση υπηρεσίας Apache Open-Audit υπό Windows';

$GLOBALS["lang"]['Russian'] = 'Ρωσικά';

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

$GLOBALS["lang"]['SAN Audit'] = 'Έλεγχος SAN';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'Αυτόματη ανακάλυψη SAN';

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

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'Το SQL που δεν περιέχει αυτή την κατάσταση θα έχει ως αποτέλεσμα την αποτυχία εκτέλεσης του widget.';

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

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Αποθήκευση και εκτέλεση του αρχείου. Βεβαιωθείτε ότι τρέχετε το αρχείο ως Διαχειριστής προκειμένου να το εγκαταστήσετε (δεξιό κλικ, Εκτέλεση ως Διαχειριστής).';

$GLOBALS["lang"]['Save as Default'] = 'Αποθήκευση ως προκαθορισμένο';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Αποθήκευση του μεταφορτωμένου αρχείου.';

$GLOBALS["lang"]['scaling'] = 'Σκάλιση';

$GLOBALS["lang"]['Scaling'] = 'Σκάλιση';

$GLOBALS["lang"]['scan_options'] = 'Επιλογές σάρωσης';

$GLOBALS["lang"]['Scan Options'] = 'Επιλογές σάρωσης';

$GLOBALS["lang"]['Scan Options ID'] = 'ID επιλογών σάρωσης';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Σάρωση για αυτή τη θύρα(ές) και αν εντοπιστεί ανοικτή, χρησιμοποιήστε αυτή τη θύρα για επικοινωνία SSH. Αυτό προστίθεται στον παραπάνω κατάλογο των προσαρμοσμένων θυρών TCP (αν δεν έχουν ήδη συμπεριληφθεί), οπότε δεν χρειάζεται να συμπεριληφθεί και στον εν λόγω κατάλογο. Διαχωρισμένο, χωρίς κενά.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Σαρώστε τον κορυφαίο αριθμό θυρών TCP του Nmap.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Σαρώστε τον κορυφαίο αριθμό θυρών UDP του Nmap.';

$GLOBALS["lang"]['schedule'] = 'Πρόγραμμα';

$GLOBALS["lang"]['Schedule'] = 'Πρόγραμμα';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Η προγραμματισμένη ανακάλυψη και αναφορά συσκευών καθιστούν το Open-AudIT Professional μια αποτελεσματική λύση για πολυάσχολους επαγγελματίες πληροφορικής που αναζητούν να μειώσουν τα γενικά έξοδα και να αυξήσουν τις διορατικές γνώσεις.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Προγραμματισμός - ανακάλυψη, αναφορά & περισσότερα';

$GLOBALS["lang"]['scope'] = 'Πεδίο εφαρμογής';

$GLOBALS["lang"]['Scope'] = 'Πεδίο εφαρμογής';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Το πεδίο εφαρμογής είναι γνωστό ως πεδίο εφαρμογής εξουσιοδότησης, που αντιπροσωπεύει το κατά πόσον μια ευπάθεια επηρεάζει πόρους πέραν της αρχικής αρχής ασφάλειας του ευάλωτου στοιχείου.<br/><br/>Οι μόνες δύο έγκυρες τιμές για αυτό το χαρακτηριστικό γνώρισμα είναι';

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

$GLOBALS["lang"]['Searching Using DataTables'] = 'Αναζήτηση χρησιμοποιώντας πίνακες δεδομένων';

$GLOBALS["lang"]['Second'] = 'Δεύτερη';

$GLOBALS["lang"]['secondary'] = 'Δευτερεύον';

$GLOBALS["lang"]['Secondary'] = 'Δευτερεύον';

$GLOBALS["lang"]['Secondary Text'] = 'Δευτεροβάθμιο κείμενο';

$GLOBALS["lang"]['Secret Key'] = 'Μυστικό κλειδί';

$GLOBALS["lang"]['section'] = 'Τμήμα';

$GLOBALS["lang"]['Section'] = 'Τμήμα';

$GLOBALS["lang"]['secure'] = 'Ασφαλής';

$GLOBALS["lang"]['Secure'] = 'Ασφαλής';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Πρωτόκολλο Αυτοματισμού Περιεχομένου Ασφαλείας';

$GLOBALS["lang"]['Security Level'] = 'Επίπεδο ασφαλείας';

$GLOBALS["lang"]['Security Name'] = 'Όνομα ασφαλείας';

$GLOBALS["lang"]['Security Status'] = 'Καθεστώς ασφαλείας';

$GLOBALS["lang"]['security_zone'] = 'Ζώνη ασφαλείας';

$GLOBALS["lang"]['Security Zone'] = 'Ζώνη ασφαλείας';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Δείτε παραπάνω. ΣΗΜΕΙΩΣΗ - Αυτό θα μπορούσε επίσης να προκληθεί από ένα αυτο-υπογεγραμμένο πιστοποιητικό στον εξυπηρετητή LDAP. Προσπαθούμε να το επιτρέψουμε αυτό σε μια μελλοντική απελευθέρωση.';

$GLOBALS["lang"]['See our page on enabling'] = 'Δείτε τη σελίδα μας για την ενεργοποίηση';

$GLOBALS["lang"]['Seed Discoveries'] = 'Ανακαλύψεις σπόρων';

$GLOBALS["lang"]['seed_ip'] = 'IP σπόρων';

$GLOBALS["lang"]['Seed IP'] = 'IP σπόρων';

$GLOBALS["lang"]['seed_ping'] = 'Πινγκ σπόρων';

$GLOBALS["lang"]['Seed Ping'] = 'Πινγκ σπόρων';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Σπόροι Περιορισμός σε Ιδιωτικό';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Σπόροι Περιορισμός σε Ιδιωτικό';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Οι σπόροι περιορίζονται στο υποδίκτυο';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Οι σπόροι περιορίζονται στο υποδίκτυο';

$GLOBALS["lang"]['Select'] = 'Επιλογή';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Επιλογή διαχειριστή -> Καθήκοντα -> Δημιουργία Εργασία από το μενού.';

$GLOBALS["lang"]['Select All'] = 'Επιλογή όλων';

$GLOBALS["lang"]['Select All Devices'] = 'Επιλογή όλων των συσκευών';

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

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Επιλέξτε μενού -> Διαχείριση -> Βασικές γραμμές -> Κατάλογος Βασικές γραμμές.';

$GLOBALS["lang"]['Select a Table'] = 'Επιλογή πίνακα';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Επιλέξτε έναν διαπιστευμένο οργανισμό πιστοποίησης';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Επιλογή και εφαρμογή κατάλληλων ελέγχων (παράρτημα Α)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Επιλέξτε το <i>COM Ασφάλεια</i> καρτέλα<br/><br/>Κάντε κλικ στις άδειες πρόσβασης Επεξεργασία προκαθορισμένου';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Επιλέξτε το <i>Υπογραφή σε λειτουργία</i> καρτέλα και αντιγραφή της τιμής για <i>Εκδότης</i> (μόνο το ίδιο το URL). Επικολλήστε αυτό στο Open-AudIT <i>Εκδότης</i> Πεδίο.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Επιλέξτε το <i>Ο λογαριασμός αυτός</i> checkbox και να παρέχει το όνομα του λογαριασμού και τον κωδικό πρόσβασης.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Επιλέξτε το μενού έναρξης και πληκτρολογήστε <i>υπηρεσίες<.i>. Κάντε κλικ στο εικονίδιο Services.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Επιλέξτε τον τύπο του Auth Menthod για να δημιουργήσετε και να εισάγετε τις σχετικές λεπτομέρειες.';

$GLOBALS["lang"]['Self Delete'] = 'Αυτοδιαγραφή';

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

$GLOBALS["lang"]['Servers Only'] = 'Μόνο εξυπηρετητές';

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

$GLOBALS["lang"]['Service Under Windows'] = 'Υπηρεσία κάτω από τα Windows';

$GLOBALS["lang"]['service_version'] = 'Έκδοση υπηρεσίας';

$GLOBALS["lang"]['Service Version'] = 'Έκδοση υπηρεσίας';

$GLOBALS["lang"]['Set'] = 'Ορισμός';

$GLOBALS["lang"]['set_by'] = 'Ορισμός by';

$GLOBALS["lang"]['Set By'] = 'Ορισμός by';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Ορισμός από τη λειτουργία Discovery - μην το ρυθμίσετε κανονικά χειροκίνητα.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Ορισμός από το control_domain ή ανακαλύψτε_domain σενάρια. Μην ορίσετε.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Ορισμός του εξωτερικού κειμένου στην κεφαλαιοποιημένη έκδοση των εσωτερικών δεδομένων.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Ορισμός του εξωτερικού κειμένου σε πεζά.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Ορισμός του εξωτερικού κειμένου σε κεφαλαία.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Ορισμός του μεγέθους (κανονικό ή συμπαγές) των πινάκων στις οθόνες της Λίστας.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Ορίστε αυτό αν θέλετε να εισάγετε συστήματα από το AD τα οποία μπορεί να μην είναι εφικτά, αλλά έχουν εμφανιστεί από το AD από εκείνη την ημερομηνία.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Η εγκατάσταση του Discovery σε ένα subnet είναι σχεδόν πανομοιότυπη με την εκτέλεση ενός κανονικού Discovery μέσω της διασύνδεσης ιστού. Τα μόνα επιπλέον στοιχεία είναι η προγραμματισμένη ώρα και ημέρα και ένα όνομα για την ίδια την προγραμματισμένη εργασία. Μπορείτε να επωφεληθείτε από αυτό για να προγραμματίσετε πολλαπλές ανακαλύψεις χρησιμοποιώντας διαφορετικά σύνολα διαπιστευτηρίων.<br/><br/>Σύμφωνα με το Subnet Discovery, το Active Directory Discovery είναι επίσης απλά τα ίδια πεδία με ένα κανονικό Active Directory Discovery με την προσθήκη μιας ημέρας, μιας ώρας(ες) και του ονόματος.<br/><br/>Εάν ο εξυπηρετητής Open-AudIT έχει συλλέκτες αναφοράς σε αυτό, παρέχεται μια επιπλέον πτώση προς τα κάτω. Μπορείτε να επιλέξετε αυτό για να καθορίσετε ποιος Συλλέκτης η εργασία θα πρέπει να εκτελείται. Μόνο εργασίες Discovery υποστηρίζονται για Συλλέκτες. Προσδιορίστε τα ίδια αντικείμενα με ένα κανονικό Discovery, αλλά παρέχουν τον εναλλακτικό Συλλέκτη για να εκτελέσετε αυτή την εργασία.';

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

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Το Shipped είναι ένα σύνολο προκαθορισμένων αντικειμένων. Αυτά μπορούν να βρεθούν πηγαίνοντας στο μενού';

$GLOBALS["lang"]['short'] = 'Σύντομη';

$GLOBALS["lang"]['Short'] = 'Σύντομη';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Να αφαιρέσω όλα τα μη τρέχοντα δεδομένα από αυτή τη συσκευή;';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Εάν αυτό το αρχείο (ή μοτίβο) χρησιμοποιηθεί για να αποκλειστεί η αναφορά αρχείων. Κανονικά, για τα αρχεία ελέγχου, αυτό είναι καθορισμένο για <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Σε περίπτωση που αυτός ο πωλητής χρησιμοποιηθεί κατά την ανάκτηση τρωτά σημεία από FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Θα πρέπει να προσθέσουμε συσκευές από την απομακρυσμένη υπηρεσία, τοπικά.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Να εφαρμόσουμε αυτή την άδεια στον επιλεγμένο Οργ καθώς και στα παιδιά των Οργάδων;';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Θα πρέπει να ελέγξουμε ένα SAN αν το λογισμικό διαχείρισης ανιχνεύεται.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Πρέπει να ελέγξουμε τα σημεία.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Θα πρέπει να ελέγχουμε τις θύρες netstat (ναι, όχι, servers μόνο).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Πρέπει να ελέγξουμε το εγκατεστημένο λογισμικό.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Θα πρέπει να θεωρήσουμε μια διηθημένη θύρα ως ανοικτή θύρα - και συνεπώς να επισημάνουμε ότι αυτή η IP έχει μια συσκευή προσαρτημένη;';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Θα πρέπει να θεωρήσουμε μια ανοικτή θύρα ως ανοικτή θύρα - και επομένως να επισημάνουμε ότι αυτή η IP έχει προσαρτημένη μια συσκευή;';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Πρέπει να μετατρέψουμε το όνομα του υπολογιστή σε πεζό.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Πρέπει να δημιουργήσουμε ένα αρχείο βασισμένο στο αποτέλεσμα του ελέγχου.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Πρέπει να εκθέσουμε αυτή την ομάδα στο διαδίκτυο.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Εάν εκθέσουμε αυτό το ερώτημα στη λίστα των αναφορών στο μενού Αναφορά στη διασύνδεση ιστού.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Θα πρέπει να εκθέσουμε αυτό το ερώτημα στη λίστα των αναφορών κάτω από το μενού Reports στη διασύνδεση ιστού.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Αν κρύψουμε το παράθυρο του σεναρίου ελέγχου κατά την εκτέλεση.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Εάν αγνοήσουμε ένα μη έγκυρο ή αυτό υπογεγραμμένο πιστοποιητικό SSL και υποβάλουμε το αποτέλεσμα ούτως ή άλλως.';

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

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Πρέπει να ανακτήσουμε όλα τα ονόματα DNS';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Πρέπει να τρέξουμε έναν έλεγχο και να τον υποβάλουμε (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Θα πρέπει να εξετάσουμε για SNMP χρησιμοποιώντας UDP θύρα 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Θα πρέπει να εξετάσουμε για SSH χρησιμοποιώντας TCP θύρα 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Θα πρέπει να εξετάσουμε για WMI χρησιμοποιώντας TCP θύρα 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Πρέπει να απεγκαταστήσουμε τον πράκτορα (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Πρέπει να χρησιμοποιήσουμε το σύστημα ή το διαμεσολαβητή επίπεδο χρήστη για να υποβάλει το αποτέλεσμα του ελέγχου.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Θα πρέπει να χρησιμοποιήσουμε την κατηγορία WMI win32_product (δεν συνιστάται από τη Microsoft) κατά την ανάκτηση του εγκατεστημένου λογισμικού.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Πρέπει να χρησιμοποιήσουμε αυτή τη μέθοδο για να επιβεβαιώσουμε τα διαπιστευτήρια των χρηστών. Ορισμός σε <code>y</code> ή <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Πρέπει να χρησιμοποιήσουμε αυτή τη μέθοδο για να γεμίσουμε τους ρόλους των χρηστών. Το πεδίο <code>use_auth</code> πρέπει να είναι ρυθμισμένη <code>y</code> Για να χρησιμοποιήσω αυτό. Ορισμός σε <code>y</code> ή <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Πρέπει να χρησιμοποιήσουμε αυτή την τιμή για να ταιριάξουμε εξωτερικές και εσωτερικές συσκευές. Προεπιλεγμένη Ένταξη μας χρησιμοποιεί IP και UUID εδώ. Αν κάποιο από αυτά ταιριάζει μεταξύ εξωτερικής και εσωτερικής συσκευής, θεωρούμε ότι είναι η ίδια συσκευή.';

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

$GLOBALS["lang"]['Slovak'] = 'Σλοβακικά';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Σλοβακία (Σλοβακική Δημοκρατία)';

$GLOBALS["lang"]['Slovenia'] = 'Σλοβενία';

$GLOBALS["lang"]['Slovenian'] = 'Σλοβενικά';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Άρα ένα σενάριο δεν δουλεύει πάνω σε μια συσκευή υπαναχώρησης. Γκρρ. Τα σενάρια για Windows, Linux και MacOS δέχονται όλα το επιχείρημα αποσφαλμάτωσης. Αυτό μπορεί να οριστεί στο ίδιο το σενάριο, ή παρέχεται στη γραμμή εντολών. Εκτελέστε το σενάριο χρησιμοποιώντας αυτή την επιλογή στο 5 και θα πρέπει να δείτε σε ποιο τμήμα του σεναρίου εμφανίζεται η αποτυχία. Για παράδειγμα';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Έτσι, εκτός από μια κανονική λέξη, ποιες άλλες επιλογές υπάρχουν - χαίρομαι που ρώτησες! Σύμφωνα με το πρότυπο Open-AudIT API, έχουμε αρκετούς φορείς για το φιλτράρισμα. Οι φορείς εκμετάλλευσης που μπορούν να προηγούνται της τιμής είναι';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Έτσι, έχετε ένα θέμα που παρέχει τα διαπιστευτήρια Open-AudIT για να ανακαλύψετε τις συσκευές σας. Έχω μια απάντηση - μην το κάνεις τότε! Φυσικά, εννοώ, η ανακάλυψη είναι το καλύτερο πράγμα μετά από φέτες ψωμί. Δεν χρειάζεται να ξέρετε από πριν <i>Τι Υπάρχει στο Δίκτυό Σας</i>. Αλλά πώς μπορείς να εξάγεις δεδομένα από συσκευές χωρίς να παρέχεις διαπιστευτήρια;<br/><br/>Στην περίπτωση των υπολογιστών, μια εύκολη επιλογή είναι να αντιγράψετε το κατάλληλο σενάριο ελέγχου στα μηχανήματα-στόχους και να το ρυθμίσετε να εκτελέσει σε ένα χρονοδιάγραμμα. Περισσότερες λεπτομέρειες για το wiki. Τα μηχανήματα θα στείλουν τα δεδομένα τους στο Open-AudIT με αυτό το πρόγραμμα, σχεδόν σαν να τρέχεις την ανακάλυψη. Η συσκευή απλά τρέχει το σενάριο ελέγχου σε ένα πρόγραμμα (ξανά, μπορείτε να διαβάσετε το σενάριο ελέγχου) ως ο χρήστης που το λέτε και στέλνει την έξοδο στον εξυπηρετητή. Δεν υπάρχουν καθόλου διαπιστευτήρια.<br/><br/>Και τώρα έχουμε πράκτορες για Windows. Τα πλεονεκτήματα ενός εγκατεστημένου πράκτορα είναι';

$GLOBALS["lang"]['socket'] = 'Υποδοχή';

$GLOBALS["lang"]['Socket'] = 'Υποδοχή';

$GLOBALS["lang"]['software'] = 'Λογισμικό';

$GLOBALS["lang"]['Software'] = 'Λογισμικό';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Λογισμικό βρέθηκαν τις τελευταίες 7 ημέρες';

$GLOBALS["lang"]['Software Found Today'] = 'Βρέθηκε λογισμικό σήμερα';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Λογισμικό Βρέθηκε Χθες';

$GLOBALS["lang"]['software_key'] = 'Κλειδί λογισμικού';

$GLOBALS["lang"]['Software Key'] = 'Κλειδί λογισμικού';

$GLOBALS["lang"]['Software License Reporting'] = 'Αναφορά άδειας λογισμικού';

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

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Μερικές συλλογές μπορούν να εκτελεστούν - ερωτήματα, κλπ - δείτε παρακάτω.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Μερικά παραδείγματα βρίσκονται στο κάτω μέρος αυτής της σελίδας. Όλα τα τελικά σημεία διαθέτουν επίσης έναν ελάχιστο κατάλογο των απαιτούμενων πεδίων. Αυτά είναι κάτω.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Μερικά από τα πρότυπα μας υποστηρίζουν τη νέα κίνηση στους πίνακες δεδομένων, χρησιμοποιώντας την επεξεργασία πλευρά του διακομιστή. Αυτός ο μασίβλι βελτιώνει τους χρόνους φόρτωσης.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Συνέβη κάποιο άλλο σφάλμα κατά την προσπάθεια σύνδεσης με τον εξυπηρετητή LDAP. Εpiικοινωνείται (δηλαδή, η <i>σύνδεση</i> παραπάνω έχει λειτουργήσει), αλλά για κάποιο άλλο λόγο, δεν έχει συμβεί δέσμευση. Ελέγξτε τα αρχεία καταγραφής στον εξυπηρετητή LDAP.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Κάτι πήγε πολύ στραβά. Το Open-Audit δεν μπορεί να διαβάσει το <i>Οργάδες</i> τραπέζι.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Κάτι πήγε πολύ στραβά. Το Open-Audit δεν μπορεί να διαβάσει το <i>ρόλοι</i> τραπέζι.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Μερικές φορές η ανακάλυψή σου δεν ταιριάζει με την υπόθεση χρήσης. Ίσως οι υπολογιστές σας να έχουν στενά τείχη προστασίας. Ίσως δεν είναι στο δίκτυο όταν είναι προγραμματισμένες οι ανακαλύψεις σου. Ίσως χρησιμοποιούνται από απομακρυσμένους εργάτες. Όπως και να \'χει, εδώ μπορεί να βοηθήσει ένας πράκτορας. Εγκαταστήστε το στη μηχανή στόχου και θα <i>check-in (στα Αγγλικά)</i> με το Open-AudIT server σας σε ένα πρόγραμμα και να δέχονται εργασίες. Η πιο συνηθισμένη εργασία που ζητά ο διακομιστής είναι να ελέγξει ο ίδιος ο πράκτορας και να στείλει το αποτέλεσμα.';

$GLOBALS["lang"]['Sort'] = 'Ταξινόμηση';

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

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Στάδιο 1: ανασκόπηση τεκμηρίωσης';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Στάδιο 2: Αξιολόγηση της εφαρμογής και της αποτελεσματικότητας';

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

$GLOBALS["lang"]['Start a web browser and go to'] = 'Ξεκινήστε ένα πρόγραμμα περιήγησης ιστού και πηγαίνετε στο';

$GLOBALS["lang"]['started_date'] = 'Ημερομηνία έναρξης';

$GLOBALS["lang"]['Started Date'] = 'Ημερομηνία έναρξης';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Έναρξη Ιουνίου 2018 Η Google έχει εφαρμόσει ένα μοντέλο τιμολόγησης pay-as-you-go για την πλατφόρμα APIs της Google Maps. Προηγουμένως, οι περισσότεροι χρήστες με μέτρια χρήση θα μπορούσαν να χρησιμοποιήσουν χάρτες Google, οι οποίοι είναι ενσωματωμένοι σε opCharts και Open-AudIT Professional/Enterprise, δωρεάν. Googles νέα πολιτική περιγράφεται εδώ,';

$GLOBALS["lang"]['Starts With'] = 'Αρχίζει με';

$GLOBALS["lang"]['state'] = 'Κατάσταση';

$GLOBALS["lang"]['State'] = 'Κατάσταση';

$GLOBALS["lang"]['Stats'] = 'Στατιστικά';

$GLOBALS["lang"]['status'] = 'Κατάσταση';

$GLOBALS["lang"]['Status'] = 'Κατάσταση';

$GLOBALS["lang"]['Storage'] = 'Αποθήκευση';

$GLOBALS["lang"]['storage_count'] = 'Αριθμός αποθήκευσης';

$GLOBALS["lang"]['Storage Count'] = 'Αριθμός αποθήκευσης';

$GLOBALS["lang"]['Storage area network'] = 'Δίκτυο περιοχής αποθήκευσης';

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

$GLOBALS["lang"]['Submit Online'] = 'Υποβολή σε απευθείας σύνδεση';

$GLOBALS["lang"]['Submitted From'] = 'Υποβλήθηκε από';

$GLOBALS["lang"]['Subnet'] = 'Υποδίκτυο';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Ανακαλύψεις υποδικτύων';

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

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Περιλήψεις είναι ένα ενιαίο ερώτημα κατά της βάσης δεδομένων με <i>ομάδα κατά</i> Διοίκηση. Χρησιμοποιώντας αυτή την απλή μέθοδο μπορούμε εύκολα να δημιουργήσουμε μια περίληψη για σχεδόν οποιοδήποτε χαρακτηριστικό.<br/><br/>Δεν χρειαζόμαστε πλέον μια ξεχωριστή έκθεση για κάθε <i>τύπος</i> μιας συσκευής. Συζητήσεις του Ευρωπαϊκού Κοινοβουλίου <i>συσκευές. τύπος</i> και δείχνει το αποτέλεσμα. Στη συνέχεια, μπορείτε να κάνετε κλικ σε ένα συγκεκριμένο τύπο από τη λίστα και να δείτε τις συσκευές που ταιριάζουν. Στην περίπτωση αυτή, μία Περίληψη αντικαθιστά (πιθανώς) 78 αναφορές (υπάρχουν 78 τύποι συσκευών).<br/><br/>Μια περίληψη είναι διαφορετική από ένα ερώτημα στο ότι μια περίληψη έχει σχεδιαστεί για την ομαδοποίηση στοιχείων από ένα δεδομένο χαρακτηριστικό στη συνέχεια παρέχουν ένα <i>Κάντε κλικ μέσα</i> σύνδεση με τις πραγματικές συσκευές. Ένα ερώτημα είναι απλά μια λίστα αντικειμένων χωρίς περαιτέρω συνδέσμους. Όπως προαναφέρθηκε - αυτό της Περίληψης σε συνδυασμό <i>έκθεση + υποέκθεση</i>, ενώ ένα ερώτημα είναι απλά μια ενιαία έκθεση.<br/><br/>Οι περιλήψεις έχουν διαφορετικό πρότυπο συλλογής από τους άλλους πόρους εντός του Open-AudIT. Αυτό το πρότυπο εμφανίζει την Περίληψη όπως θα περιμένατε και επίσης εμφανίζει κουμπιά με μετρήσεις άλλων πόρων. Αυτή η σελίδα έχει σχεδιαστεί για να είναι η αρχική σελίδα του Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Οι περιλήψεις έχουν σχεδιαστεί για να ομαδοποιούν τα αντικείμενα από μια συγκεκριμένη στήλη που ταιριάζει και στη συνέχεια να παρέχουν ένα σύνδεσμο με μεμονωμένες συσκευές. Στις προηγούμενες εκδόσεις του Open-AudIT, αυτό θα ήταν δύο διαφορετικά στοιχεία - μια έκθεση και μια υποέκθεση. Τώρα τα βάλαμε σε μια περίληψη.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Οι περιλήψεις παρέχουν δυνατότητες αναφοράς για άσκηση. Απλό, διαισθητικό, ισχυρό.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Οι περιλήψεις παίρνουν τα ίδια επιχειρήματα με τις ερωτήσεις.';

$GLOBALS["lang"]['Summary'] = 'Περίληψη';

$GLOBALS["lang"]['Sunday'] = 'Κυριακή';

$GLOBALS["lang"]['supplier'] = 'Προμηθευτής';

$GLOBALS["lang"]['Supplier'] = 'Προμηθευτής';

$GLOBALS["lang"]['Support'] = 'Υποστήριξη';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Υποστηριγμένοι τύποι είναι <code>subnet</code>, <code>seed</code> και <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Υποστηρίζει τη συμμόρφωση με τις νομικές και κανονιστικές απαιτήσεις';

$GLOBALS["lang"]['Suriname'] = 'Σουρινάμ';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Έλεγχοι επιτήρησης: Ετήσιοι έλεγχοι για τη διατήρηση της πιστοποίησης';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Νήσοι Σβάλμπαρντ & Γιαν Μάγεν';

$GLOBALS["lang"]['Swaziland'] = 'Σουαζιλάνδη';

$GLOBALS["lang"]['Sweden'] = 'Σουηδία';

$GLOBALS["lang"]['Swedish'] = 'Σουηδικά';

$GLOBALS["lang"]['switch_device_id'] = 'Εναλλαγή ID συσκευής';

$GLOBALS["lang"]['Switch Device ID'] = 'Εναλλαγή ID συσκευής';

$GLOBALS["lang"]['switch_port'] = 'Εναλλαγή θύρας';

$GLOBALS["lang"]['Switch Port'] = 'Εναλλαγή θύρας';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Ελβετία, Ελβετική Συνομοσπονδία';

$GLOBALS["lang"]['Symptom'] = 'Συμπτώματα';

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

$GLOBALS["lang"]['Table'] = 'Πίνακας';

$GLOBALS["lang"]['tag'] = 'Ετικέτα';

$GLOBALS["lang"]['Tag'] = 'Ετικέτα';

$GLOBALS["lang"]['tag_1'] = 'Ετικέτα 1';

$GLOBALS["lang"]['Tag 1'] = 'Ετικέτα 1';

$GLOBALS["lang"]['tag_2'] = 'Ετικέτα 2';

$GLOBALS["lang"]['Tag 2'] = 'Ετικέτα 2';

$GLOBALS["lang"]['tag_3'] = 'Ετικέτα 3';

$GLOBALS["lang"]['Tag 3'] = 'Ετικέτα 3';

$GLOBALS["lang"]['Tagalog'] = 'Ταγκαλόγκ';

$GLOBALS["lang"]['tags'] = 'Ετικέτες';

$GLOBALS["lang"]['Tags'] = 'Ετικέτες';

$GLOBALS["lang"]['Tags :: '] = 'Ετικέτες :: ';

$GLOBALS["lang"]['Taiwan'] = 'Ταϊβάν';

$GLOBALS["lang"]['Tajikistan'] = 'Τατζικιστάν';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Σημειώστε το σύνολο της εξόδου και της δράσης κάθε είδους ανάλογα με την περίπτωση.';

$GLOBALS["lang"]['Tanzania'] = 'Τανζανία';

$GLOBALS["lang"]['Target Computer'] = 'Υπολογιστής προορισμού';

$GLOBALS["lang"]['task'] = 'Εργασία';

$GLOBALS["lang"]['Task'] = 'Εργασία';

$GLOBALS["lang"]['tasks'] = 'Καθήκοντα';

$GLOBALS["lang"]['Tasks'] = 'Καθήκοντα';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Οι εργασίες μπορούν να είναι ένας από τους διάφορους διαφορετικούς τύπους: Βάση, Ανακάλυψη, Αναφορά, Ερώτηση, Περίληψη ή Συλλέκτης.';

$GLOBALS["lang"]['tcp_ports'] = 'Θύρα Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Θύρα Tcp';

$GLOBALS["lang"]['Technical Details'] = 'Τεχνικές λεπτομέρειες';

$GLOBALS["lang"]['tenant'] = 'Ένοικος';

$GLOBALS["lang"]['Tenant'] = 'Ένοικος';

$GLOBALS["lang"]['Tenant ID'] = 'Ταυτότητα εντολοδόχου';

$GLOBALS["lang"]['Tennant ID'] = 'Αναγνωριστικός κωδικόςtennant';

$GLOBALS["lang"]['ternary'] = 'Τεταρτημόριο';

$GLOBALS["lang"]['Ternary'] = 'Τεταρτημόριο';

$GLOBALS["lang"]['Test 1'] = 'Δοκιμή 1';

$GLOBALS["lang"]['Test 2'] = 'Δοκιμή 2';

$GLOBALS["lang"]['Test 3'] = 'Δοκιμή 3';

$GLOBALS["lang"]['Test Email'] = 'Δοκιμή ηλεκτρονικού ταχυδρομείου';

$GLOBALS["lang"]['test_minutes'] = 'Πρακτικά δοκιμής';

$GLOBALS["lang"]['Test Minutes'] = 'Πρακτικά δοκιμής';

$GLOBALS["lang"]['test_os'] = 'Δοκιμή Os';

$GLOBALS["lang"]['Test Os'] = 'Δοκιμή Os';

$GLOBALS["lang"]['test_subnet'] = 'Δοκιμή υποδίκτυο';

$GLOBALS["lang"]['Test Subnet'] = 'Δοκιμή υποδίκτυο';

$GLOBALS["lang"]['tests'] = 'Δοκιμές';

$GLOBALS["lang"]['Tests'] = 'Δοκιμές';

$GLOBALS["lang"]['Text'] = 'Κείμενο';

$GLOBALS["lang"]['Thai'] = 'Ταϊλάνδη';

$GLOBALS["lang"]['Thailand'] = 'Ταϊλάνδη';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Σας ευχαριστούμε για την έναρξη του ταξιδιού σας με το καλύτερο εργαλείο ανακάλυψης και απογραφής γύρω.';

$GLOBALS["lang"]['Thanks to'] = 'Χάρη στην';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Αυτό είναι! Μόλις έχετε επεξεργαστεί τα χαρακτηριστικά όσες συσκευές χρειάζεστε.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'Η <i>Ρόλοι</i> Το τελικό σημείο σας επιτρέπει να διαχειριστείτε το σύνολο των αδειών (Δημιουργία, ανάγνωση, ενημέρωση, διαγραφή) που χορηγούνται στους χρήστες και εφαρμόζονται σε κάθε τελικό σημείο.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'Το API χρησιμοποιεί ένα cookie. Μπορείτε να ζητήσετε ένα cookie στέλνοντας ένα POST στο παρακάτω URL, που περιέχει τα χαρακτηριστικά και τις τιμές του ονόματος χρήστη και του κωδικού πρόσβασης:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Το πεδίο Active Directory για την ανάκτηση μιας λίστας υποδικτύων από.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Ο εξυπηρετητής Active Directory για να ανακτήσει μια λίστα υποδικτύων από.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Το τελικό σημείο εφαρμογών σας επιτρέπει να ορίσετε μια εφαρμογή την οποία μπορείτε στη συνέχεια να συνδέσετε με μια συσκευή (ή συσκευές).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Το τελικό σημείο Χαρακτηριστικά σας επιτρέπει να προσθέσετε προσαρμοσμένες τιμές σε διαφορετικές ιδιότητες στο Open-AudIT, αυτή τη στιγμή αυτό το χαρακτηριστικό λειτουργεί για τις ιδιότητες Κλάσης, Περιβάλλοντος, Κατάστασης και Τύπου στις Συσκευές, το χαρακτηριστικό τύπου τόσο για τις Τοποθεσίες όσο και για τους Οργούς, καθώς και την Κατηγορία Μενού για Ερωτήσεις. Εάν δείτε ένα στοιχείο ενός από τους τύπους prvious (δείτε ένα Lkocatation) θα παρατηρήσετε ότι το χαρακτηριστικό τύπου πρέπει να επιλεγεί από ένα πλαίσιο drop-down. Εδώ αποθηκεύονται αυτές οι τιμές. Ως εκ τούτου, αν θέλετε να προσθέσετε ένα νέο τύπο που θα επιλεγεί για μια τοποθεσία, προσθέστε το χρησιμοποιώντας τη λειτουργία Χαρακτηριστικά.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Η αυτόματη μέτρηση αποτυπώνει την απάντηση στην ερώτηση <strong>Μπορεί ένας επιτιθέμενος να αυτοματοποιήσει γεγονότα εκμετάλλευσης για αυτή την ευπάθεια σε πολλούς στόχους;</strong> Βάσει των βημάτων 1-4 της αλυσίδας θανάτου. Αυτά τα βήματα είναι η αναγνώριση, ο οπλισμός, η παράδοση και η εκμετάλλευση (Not Defined, Όχι, Ναι).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'Το CVE έχει επισημανθεί ως άκυρο ή έχει αποσυρθεί στον κατάλογο CVE. Παραμένει στην NVD αλλά αποκλείεται από τα προεπιλεγμένα αποτελέσματα αναζήτησης.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'Το CVE έχει δημοσιευθεί στον κατάλογο CVE και περιλαμβάνεται στο σύνολο δεδομένων της NVD. Αρχική κατάποση μόνο.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'Το ΚΕΕ ενημερώθηκε μετά την αρχική ανάλυση. Τα δεδομένα εμπλουτισμού της NVD μπορεί να έχουν αναθεωρηθεί.';

$GLOBALS["lang"]['The CVE identifier.'] = 'Το αναγνωριστικό CVE.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'Το CVE εμπλουτίζεται ενεργά με βαθμολογία CVSS, ταξινομήσεις CWE, ετικέτες αναφοράς και δυνατότητα εφαρμογής CPE.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'Το ΚΕΕ δεν έχει επί του παρόντος προτεραιότητα για τον εμπλουτισμό λόγω περιορισμών πόρων ή άλλων λόγων.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'Το CVE βρίσκεται στην ουρά για εμπλουτισμό από αναλυτές της NVD. Δεν υπάρχουν λεπτομερή μεταδεδομένα ακόμα.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Το Σύννεφο που κατέχει αυτό το αντικείμενο. Συνδέσεις <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Ο τύπος Device Seed Discovery είναι η νεότερη εξαιρετικά αποτελεσματική μέθοδος για το συρσιμο του δικτύου, δίνοντάς σας τη δυνατότητα να στοχεύετε το δίκτυό σας όσο στενά ή όσο ευρύτερα χρειάζεστε. Είναι γρήγορο, λειτουργεί και είναι υπέροχο.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Η σάρωση ανακάλυψης Επιλογές που στέλνουμε αναλυτικά στον παρακάτω πίνακα. Όπως και παραπάνω, οι χρήστες των επιχειρήσεων μπορούν να δημιουργήσουν περισσότερα από αυτά ή να επεξεργαστούν τα αντικείμενα που αποστέλλονται.';

$GLOBALS["lang"]['The Elevated User query'] = 'Το αυξημένο ερώτημα χρήστη';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Η λειτουργία εκτελέσιμων σαρώνει το δίσκο μιας συσκευής ως μέρος του ελέγχου και ελέγχει ότι κάθε εκτελέσιμο αρχείο είναι γνωστό στον διαχειριστή πακέτων. Επειδή χρησιμοποιεί το διαχειριστή πακέτων, το χαρακτηριστικό ισχύει μόνο για συσκευές Linux στόχους, και παραπέρα, μόνο rpm ή deb με βάση διανομές. Οτιδήποτε βασισμένο στο Redhat ή στο Debian πρέπει να δουλέψει.';

$GLOBALS["lang"]['The FROM'] = 'ΤΟ ΑΠΟ';

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

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'Η διαδικασία πιστοποίησης ISO/IEC 27001 και τα βασικά στοιχεία της.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'Ο ISP ή το Telco παρέχει αυτή τη σύνδεση.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Το ρεκόρ του JSON από τον Μίτρε.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Το αρχείο JSON από την NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Το LDAP OU αυτού του χρήστη (αν χρησιμοποιείται LDAP).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Ο εξυπηρετητής LDAP δεν μπορεί να συνδεθεί. Καθόλου. Ελέγξτε ότι είναι pingable από τον εξυπηρετητή Open-AudIT. Ελέγξτε ότι η σωστή θύρα είναι ανοικτή στον εξυπηρετητή Open-AudIT. Ένα nmap από τον εξυπηρετητή Open-AudIT θα δείξει αυτό. Αντικατάσταση σας LDAP servers IP για $ip. Προσπάθησε:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Ο τύπος εξυπηρετητή LDAP δεν είναι έγκυρος. Θα πρέπει να είναι είτε <i>ενεργός κατάλογος</i> ή <i>openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'Ο εξυπηρετητής LDAP ήταν συνδεδεμένος και τα διαπιστευτήρια χρήστη έγιναν αποδεκτά για δέσμευση.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Ο εγκαταστάτης Open-AudIT του Linux θα δοκιμάσει και, αν χρειαστεί, θα εγκαταστήσει εξαρτήσεις Open-AudITs από το αποθετήριο διανομών σας, συμπεριλαμβανομένου του καθορισμού του SetUID Nmap. Αυτό απαιτείται για την ανίχνευση SNMP (UDP 161) από μη ριζικό χρήστη. Αυτό υποστηρίζεται στο RedHat/CentOS και στο Debian/Ubuntu. Αν χρειάζεται χειροκίνητη εγκατάσταση Nmap:<br/><br/>Για RedHat / CentOS do (NOTE - αν αναβαθμίσετε χρησιμοποιώντας yum, θα πρέπει να κάνετε εκ νέου την αίτηση <i>μώδ</i> setting).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Η τοποθεσία που περιέχει αυτό το δίκτυο. Συνδέσεις <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Το καθεστώς βάσης της NVD.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Το Εθνικό Ινστιτούτο Προτύπων και Τεχνολογίας είναι η ομοσπονδιακή υπηρεσία τεχνολογίας. Προωθούν την επίσημη τεχνολογία, την επιστήμη μέτρησης και τα πρότυπα.';

$GLOBALS["lang"]['The Network to Discover'] = 'Το Δίκτυο για Ανακάλυψη';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Η προεπιλεγμένη χρονική στιγμή του Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Το λειτουργικό σύστημα αυτό το πακέτο πρέπει να αναφέρεται κατά. Κενό για όλους. Χρησιμοποίησε το ποσοστό % ως μπαλαντέρ. Θα δοκιμαστεί κατά os_group, os_family και os_name με αυτή τη σειρά.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Το Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Η ταυτότητα Open-AudIT του συνδεδεμένου σύννεφου. Συνδέσεις <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Το Open-Aud Ο κωδικός του εξυπηρετητή IT ήταν exucted μέσα σε αυτό το αρχείο.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Το Open-Aud Ο κωδικός εξυπηρετητή IT ήταν exucted μέσα σε αυτή τη λειτουργία.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'Το οικοσύστημα OpenSCAP παρέχει πολλαπλά εργαλεία για να βοηθήσει τους διαχειριστές και τους ελεγκτές να αξιολογήσουν, να μετρήσουν και να εφαρμόσουν τις βασικές γραμμές ασφαλείας, συμπεριλαμβανομένων μιας ευρείας ποικιλίας οδηγών σκλήρυνσης και βάσεων διαμόρφωσης που αναπτύσσονται από την κοινότητα ανοιχτού κώδικα, εξασφαλίζοντας ότι μπορείτε να επιλέξετε μια πολιτική ασφάλειας που ταιριάζει καλύτερα στις ανάγκες του οργανισμού σας, ανεξάρτητα από το μέγεθός της.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Το έργο OpenSCAP είναι μια συλλογή εργαλείων ανοιχτού κώδικα για την εφαρμογή και επιβολή αυτού του προτύπου, και έχει απονεμηθεί η πιστοποίηση SCAP 1.2 από την NIST το 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Ο Οργανισμός που κατέχει αυτό το στοιχείο. Συνδέσεις <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Ο αναγνωριστικός διεργασίας της εκτελούμενης σχετικής ανακάλυψης.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Το RU ποζιτόν της κορυφής αυτής της συσκευής.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Η λειτουργία Racks χρησιμοποιείται για να διαχειριστεί και να οπτικοποιήσει τη χρήση ράφι σας με μια οργάνωση, τοποθεσία, κτίριο, όροφο, δωμάτιο και σειρά.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'Το SCAP είναι μια προδιαγραφή για την έκφραση και τη διαχείριση δεδομένων ασφαλείας με τυποποιημένους τρόπους. Η SCAP χρησιμοποιεί αρκετές επιμέρους προδιαγραφές σε συνδυασμό με την αυτοματοποίηση της συνεχούς παρακολούθησης, της διαχείρισης ευπάθειας και της αξιολόγησης της συμμόρφωσης της πολιτικής ασφάλειας';

$GLOBALS["lang"]['The SELECT'] = 'Η ΕΠΙΛΟΓΗ';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Το τμήμα SELECT του ερωτήματος θα πρέπει να χρησιμοποιεί πλήρη σημειογραφία κουκκίδων και επίσης να ζητά το πεδίο με το πλήρες όνομα τελείας. IE - Ηλεκτρικές συσκευές. id AS «συσκευές.id». Κάθε πεδίο πρέπει να επιλέγεται με αυτόν τον τρόπο ώστε να ενεργοποιείται το φιλτράρισμα χαρακτηριστικών GUI.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'Το τμήμα SELECT του SQL πρέπει να περιέχει πλήρως εξειδικευμένες στήλες και να καθορίζει ορισμένες στήλες.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Η χορδή της κοινότητας SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'Η φράση πρόσβασης ταυτοποίησης SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Το πρωτόκολλο ταυτοποίησης SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'Η φράση SNMP v3 Privacy Pass.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Το SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Το επίπεδο ασφαλείας SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Το SNMP v3 όνομα ασφαλείας.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Το SNMPv3 πλαίσιο Engine ID (προαιρετικό).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Το όνομα πλαισίου SNMPv3 (προαιρετικό).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'Το SQL δεν μπορεί να περιέχει <strong>Όπου @ filter Ή</strong>. Ωστόσο, η SQL δεν θα εκτελεστεί. <strong>Όπου @ filter AND</strong> Τα ερωτήματα επιτρέπονται.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Τα ερωτήματα SQL που χρησιμοποιούνται στο Open-AudIT απαιτούν τη χρήση της backtick - ` χαρακτήρα και ΟΧΙ η τυπική ενιαία προσφορά για τα πεδία. Στα περισσότερα πληκτρολόγια των Windows των ΗΠΑ το πλήκτρο backtick βρίσκεται στο πάνω-αριστερά του πληκτρολογίου μαζί με το tilde ~. Σε ένα πληκτρολόγιο US Mac το πλήκτρο backtick βρίσκεται δίπλα στο πλήκτρο SHIFT. Το τυποποιημένο ενιαίο απόσπασμα χρησιμοποιείται ακόμα για να περικλείσει τις τιμές, όπως δείχνουν τα παρακάτω παραδείγματα.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'Το ερώτημα SQL ουσιαστικά διασπάται σε τρία μέρη.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Η λειτουργία Πρότυπα στο Open-AudIT σας επιτρέπει να ολοκληρώσετε τις ερωτήσεις που απαιτούν οι ελεγκτές κατά την ολοκλήρωση της πιστοποίησης ISO 27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'Το URL του εξωτερικού συστήματος.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Το URL του Open-AudIT σας Εξυπηρετητής στον οποίο θα αναφερθεί αυτός ο Συλλέκτης (δεν θα ακολουθήσει slap).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Το URL τα σενάρια ελέγχου θα πρέπει να υποβάλουν το αποτέλεσμα τους.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Το τελικό σημείο χρήστη σας επιτρέπει να διαχειρίζεστε τους λογαριασμούς χρηστών μέσα στο Open-AudIT.';

$GLOBALS["lang"]['The WHERE'] = 'ΟΠΟΥ';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Το τμήμα WHO του SQL σας <em>πρέπει</em> περιέχει';

$GLOBALS["lang"]['The Windows'] = 'Τα Windows';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Η καταγραφή των Windows μπορεί να λέει τα ακόλουθα';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Ο λογαριασμός πρέπει να έχει κωδικό πρόσβασης· το WMI δεν επιτρέπει κενούς κωδικούς πρόσβασης.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Ο κωδικός πρόσβασης λογαριασμού δεν πρέπει να περιέχει \" (διπλές εισαγωγικές λέξεις). Αυτό συμβαίνει επειδή ο γραφέας (και ο wscript) δεν μπορεί να αναλύσει τις τιμές επιχειρημάτων που περιέχουν διπλά εισαγωγικά. Είναι απλά απογυμνωμένα. Όχι (πριν ρωτήσεις) η απόδραση δεν θα πετύχει. Αυτό είναι ένας περιορισμός γραφίτη και τίποτα να κάνει με Open-AudIT.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Το πραγματικό πλήρες όνομα αυτού του χρήστη.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Η διεύθυνση του εξυπηρετητή Open-AudIT υποβάλλει σελίδα.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Ο διαχειριστής παρείχε διαπιστευτήρια που χρησιμοποιήθηκαν επιτυχώς για να δεσμευτούν με το LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Ο διαχειριστής παρείχε διαπιστευτήρια για να δεσμευθεί στον εξυπηρετητή LDAP, αλλά δεν έχουν γίνει αποδεκτά από το LDAP sevrer. Διπλός έλεγχος των διαπιστευτηρίων εργασίας στον εξυπηρετητή LDAP, και στη συνέχεια έλεγχος (ή επαναφορά τους) στην είσοδο Open-AudIT LDAP Server.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Ο πράκτορας και ο διακομιστής είναι επίσης αρκετά ευφυής για να αυτοενημερώσει τον πράκτορα αν μια νεότερη έκδοση είναι εγκατεστημένη στον διακομιστή (δείτε μετά την αναβάθμιση του Open-AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Ο πράκτορας θα πρέπει να κατεβάσει ένα νέο αντίγραφο του σεναρίου ελέγχου, να το τρέξει και να υποβάλει το αποτέλεσμα στον εξυπηρετητή.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Η εφαρμογή δημιουργεί προσωρινές εξετάσεις ελέγχου εδώ, τις αντιγράφει στις μηχανές-στόχους και στη συνέχεια τις διαγράφει.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Η σχετική βάση. Συνδέσεις <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Η σχετική ανακάλυψη (εφόσον απαιτείται). Συνδέσεις <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Το χαρακτηριστικό προς δοκιμή (από το <code>devices</code> τραπέζι).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Το χαρακτηριστικό δοκιμής (πρέπει να ταιριάζει με ένα εξωτερικό όνομα πεδίου από κάτω).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Τα χαρακτηριστικά για τις επιλογές ανίχνευσης ανακάλυψης είναι τα παρακάτω.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Το σενάριο ελέγχου πάνω στο οποίο θα βασίσετε τις παραμετροποιήσεις σας.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Το σενάριο ελέγχου θα χρησιμοποιήσει τη σειρά αρχείων[ ] και θα ανακτήσει τις λεπτομέρειες του αρχείου.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Τα σενάρια ελέγχου δέχονται όλα ένα επιχείρημα αποσφαλμάτωσης. Μπορείτε να εκτελέσετε το σενάριο χρησιμοποιώντας αυτό και να δείτε με περισσότερες λεπτομέρειες ποιο είναι το θέμα. Και αν δεν μπορείς να το καταλάβεις - γι\' αυτό είμαστε εδώ! Ανοίξτε μια υπόθεση υποστήριξης και θα κάνουμε τα πράγματα να λειτουργούν σε χρόνο μηδέν.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Η βασική διαδρομή από την οποία να αναζητήσετε τους χρήστες.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Τα παρακάτω βήματα δεν είναι το σφάλμα ή μοναδικό για το Open-AudIT και θα επηρεάσει <strong>Οποιοδήποτε</strong> εφαρμογή ανακάλυψης χρησιμοποιώντας απομακρυσμένο WMI ή/και Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'Ο τύπος του δείκτη αναφοράς.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Το κτίριο στο ράφι βρίσκεται.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Ο υπολογισμένος αριθμός των συσκευών που θα δημιουργηθούν εξωτερικά.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Ο υπολογισμένος αριθμός συσκευών που θα δημιουργηθούν στο Open-AudIT.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Η ταυτότητα του πελάτη είναι η ταυτότητα μιας εφαρμογής Azure Active Directory. Το μυστικό του πελάτη είναι το κλειδί που δίνεις στην αίτηση.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Ο συλλέκτης είναι ουσιαστικά μια πλήρης εγκατάσταση του Open-AudIT σε <i>συλλέκτης</i> Λειτουργία. Ο συλλέκτης έχει σχεδιαστεί για να εκτελεί την ανακάλυψη στο δίκτυο που βρίσκεται. Δεν περιορίζεται μόνο σε αυτό το δίκτυο, αλλά ιδανικά θα ήταν ουσιαστικά ένας συλλέκτης ανά υποδίκτυο όπου απαιτείται. Ο συλλέκτης οδηγείται σε ένα πρόγραμμα από τον διακομιστή και εκτελεί την ανακάλυψη στο δίκτυο όπως ορίζεται.<br/>Πότε στο Stand Μόνο λειτουργία ο Συλλέκτης ενεργεί ως ανεξάρτητος διακομιστής, απλά προωθεί όλες τις συσκευές που βρίσκονται στον κεντρικό εξυπηρετητή.<br/><br/>Μόλις εγκατασταθεί και εγκατασταθεί, ο έλεγχος του Συλλέκτη εκτελείται στον Server (όχι σε λειτουργία Stand Alone).<br/><br/>Οι μόνες απαιτούμενες θύρες δικτύου μεταξύ του συλλέκτη και του διακομιστή είναι 80 ή 443 (συνδέσεις TCP που έχουν καθιερωθεί από τον Συλλέκτη στον Διακομιστή). Η βάση δεδομένων Open-AudIT δεν είναι (και δεν μπορεί να είναι) κοινή μεταξύ αυτών των εγκαταστάσεων.<br/><br/>Εξ ορισμού ο συλλέκτης (όχι σε λειτουργία Stand Alone) θα ζητήσει από τον εξυπηρετητή οποιεσδήποτε εργασίες ανακάλυψης κάθε 5 λεπτά (μπορείτε να ρυθμίσετε αυτό στον εξυπηρετητή για νέους συλλέκτες χρησιμοποιώντας το αντικείμενο διαμόρφωσης συλλέκτη_check_minutes) γι \'αυτό οποιεσδήποτε εργασίες ανακάλυψης για τον συλλέκτη θα πρέπει να προγραμματιστεί για 0, 5, 10, 15, κλπ. λεπτά.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Ο συλλέκτης είναι ουσιαστικά μια πλήρης εγκατάσταση του Open-AudIT σε <i>συλλέκτης</i> Λειτουργία. Αυτή η λειτουργία θα μείωνε την ορατή λειτουργικότητα σε μια προσπάθεια απλοποίησης και εστίασης της εφαρμογής. Έχει σχεδιαστεί για να συλλέγει πληροφορίες σχετικά με τοπικά δίκτυα και συσκευές, όπου το τείχος προστασίας ή/και το πέρασμα του δικτύου είναι ένα θέμα από τον εξυπηρετητή.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Το εσωτερικό IP συλλέκτη χρησιμοποιείται όταν τρέχει μια ανακάλυψη.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Το όνομα της στήλης από τον ξένο πίνακα. Θα πρέπει να είναι ένα από: τάξη, περιβάλλον, κατάσταση, τύπος ή menu_κατηγορία.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Η εντολή που εκτελέστηκε επί της συσκευής προορισμού ή του κώδικα εξυπηρετητή Open-AudIT που εκτελέστηκε κατά τη διάρκεια της ανακάλυψης.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Η διαμόρφωση της συστάδας σας μπορεί να είναι: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> ή κενό.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Ο κωδικός αναγνώρισης. Εάν τα διαπιστευτήρια είναι ένα κλειδί SSH, αυτός είναι ο κωδικός πρόσβασης που χρησιμοποιείται για να ξεκλειδώσετε το κλειδί και είναι προαιρετικό.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Τα διαπιστευτήρια που παρέχει ο χρήστης έχουν αποτύχει.';

$GLOBALS["lang"]['The credentials username.'] = 'Τα διαπιστευτήρια όνομα χρήστη.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Η τρέχουσα ημερομηνία και ώρα στη μορφή: Υ-μ-δ Η:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Η τρέχουσα ημερομηνία σε μορφή Y-m-d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Η τρέχουσα κατάσταση του Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Η τρέχουσα κατάσταση της ανακάλυψης.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Το ταμπλό που θα εμφανιστεί από προεπιλογή για αυτόν τον χρήστη. Συνδέσεις <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Τα δεδομένα που αποθηκεύονται στη βάση δεδομένων δεν εμφανίζονται στη μεταφρασμένη εφαρμογή. Αφήνουμε τα δεδομένα όπως είναι. Ωστόσο, δεν υπάρχει τίποτα για να σας σταματήσει, ο χρήστης, αλλάζοντας το όνομα (για παράδειγμα) ενός αντικειμένου στη βάση δεδομένων στη γλώσσα σας.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Τα δεδομένα που εισάγετε θα χρησιμοποιηθούν σε ένα <code>LIKE</code> ρήτρα, όχι (σύμφωνα με το API) <code>equals</code> ρήτρα. Ένα άλλο παράδειγμα - αν εισαγάγετε <code>comput</code>Θα επιστρέψει όλους τους υπολογιστές. Και επειδή χρησιμοποιούμε ένα <code>LIKE</code> Ρήτρα, είναι αναίσθητη.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Το σχήμα βάσης δεδομένων μπορεί να βρεθεί στην εφαρμογή αν ο χρήστης έχει βάση δεδομένων:: διαβάστε την άδεια πηγαίνοντας στο μενού: Admin -> Βάση δεδομένων ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Η έκδοση της βάσης δεδομένων και η έκδοση ιστού είναι ασυνεπείς.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Η ημερομηνία λήξης της άδειας.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Η ημερομηνία διακοπής του λογισμικού από τον κατασκευαστή. Συνήθως αντικαθίσταται από μια νεότερη έκδοση. Η συντήρηση μπορεί να είναι ακόμα διαθέσιμη.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Η ημερομηνία που το λογισμικό δεν λαμβάνει πλέον ενημερώσεις και διακόπτεται αποτελεσματικά εντελώς. Η συντήρηση διακόπτεται.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Η ημερομηνία που αυτό το στοιχείο άλλαξε ή προστέθηκε (διαβάστε μόνο). ΣΗΜΕΙΩΣΗ - Αυτή είναι η χρονοσφραγίδα από τον εξυπηρετητή.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Η ημερομηνία/ώρα που δημιουργήθηκε αυτό το αποτέλεσμα.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Η ημέρα του μήνα κατά την οποία αυτή η εργασία θα πρέπει να εκτελέσει (* για κάθε ημέρα).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Η ημέρα της εβδομάδας κατά την οποία αυτή η εργασία θα πρέπει να εκτελέσει (* για κάθε ημέρα).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Το επίπεδο αποσφαλμάτωσης (θα βγει στο παράθυρο εντολών). Χαμηλότερη σημαίνει λιγότερη έξοδος με 0 να μην είναι έξοδος.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Η προεπιλεγμένη επιλογή ανίχνευσης ανακάλυψης είναι το σύνολο UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Η προεπιλεγμένη γλώσσα που αποδίδεται σε κάθε χρήστη που δημιουργείται με αυτή τη μέθοδο.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Η συσκευή πρέπει να ανταποκρίνεται σε ένα πινγκ Nmap πριν θεωρηθεί online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Η συσκευή μέσα στο Open-AudIT. Συνδέσεις <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Ο άμεσος σύνδεσμος για το σενάριο είναι';

$GLOBALS["lang"]['The email address of the reciever'] = 'Η διεύθυνση ηλεκτρονικού ταχυδρομείου του ανταποκριτή';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Το δυαδικό της επιχείρησης από το FirstWave απαιτείται για μια άδεια. Παρακαλώ κατεβάστε το Open-AudIT από';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Το σύνολο της σχετικής βάσης του αποτελέσματος αυτού είναι από.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Η εκμεταλλευόμενη ευπάθεια μπορεί να επηρεάσει πόρους πέραν της αρχής ασφαλείας του ευάλωτου στοιχείου. Αυτό συνήθως σημαίνει ότι διασχίζεται ένα προνόμιο ή όριο εμπιστοσύνης (για παράδειγμα, η απόδραση από ένα δοχείο στο ξενιστή OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Η εκμετάλλευση ευπάθειας επηρεάζει μόνο τους πόρους εντός της ίδιας αρχής ασφαλείας με το ευάλωτο συστατικό στοιχείο. Με άλλα λόγια, οι πράξεις του επιτιθέμενου παραμένουν εντός του αρχικού ορίου εμπιστοσύνης.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Η εξωτερικά αναφερόμενη τοποθεσία ID. Συνήθως κατοικείται από ελέγχους Cloud.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Τα πεδία που σχετίζονται με μια ενσωμάτωση αποθηκεύονται στη βάση δεδομένων ως μια σειρά αντικειμένων JSON. Κάθε πεδίο έχει τα ακόλουθα χαρακτηριστικά';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Την πρώτη φορά που το Open-AudIT ανέκτησε λεπτομέρειες αυτής της συσκευής.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Το πάτωμα στο ράφι βρίσκεται.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Ο ξένος πίνακας αναφοράς. Θα πρέπει να είναι μία από: συσκευές, τοποθεσίες, οργ ή ερωτήματα.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Η μορφή των δεδομένων σας θα πρέπει να είναι στη μορφή';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Η μορφή που χρησιμοποιείται για την έξοδο προς αποστολή ηλεκτρονικού ταχυδρομείου.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Η στήλη με τα πλήρως προσόντα πάνω στην οποία θα ομαδοποιηθεί. ΣΗΜΕΙΩΣΗ: Όταν ο τύπος = κυκλοφορία, αυτό αντιπροσωπεύει το κόκκινο id ερώτημα.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Το πλήρως ειδικευμένο όνομα επέστρεψε από το εξωτερικό σύστημα. EG: για το NMIS χρησιμοποιούμε ρυθμίσεις. ρόλος Πληκτρολογήστε.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Ο πλήρως καταρτισμένος πίνακας.στήλη. Μπορούν να παρέχονται πολλαπλάσια, χωρισμένα με κόμμα (χωρίς κενά).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Το παραγόμενο ερώτημα SQL για τη δοκιμή αυτής της ευπάθειας. Αυτό το πεδίο μπορεί να επεξεργαστεί για να διορθώσει το ερώτημα όπως απαιτείται.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Η ομάδα των συσκευών στις οποίες ήταν σε λειτουργία η γραμμή βάσης.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Η ομάδα που παρέχει μια λίστα συσκευών για την ενσωμάτωση. Συνδέσεις <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Η ώρα της ημέρας κατά την οποία αυτή η εργασία θα πρέπει να εκτελέσει (* για κάθε ώρα).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Η ταυτότητα της συνδεδεμένης συσκευής. Συνδέσεις <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Η στήλη αναγνώρισης (ακεραιωτής) στη βάση δεδομένων (διαβάστε μόνο).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Η σημασία αυτής της βάσης (δεν έχει χρησιμοποιηθεί ακόμη).';

$GLOBALS["lang"]['The integer of severity.'] = 'Ο ακέραιος της σοβαρότητας.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Η εσωτερική αξία, αναμορφωμένη σε αυτή τη μορφή.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Η διεύθυνση IP της μεθόδου Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Η γλώσσα για τη μετάφραση της διεπαφής ιστού για το χρήστη.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Η τελευταία ημερομηνία και ώρα που εκτελέστηκε αυτό το στοιχείο (διαβάστε μόνο).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Την τελευταία φορά που το Open-AudIT ανακάλυψε λεπτομέρειες αυτής της συσκευής.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Την τελευταία φορά που εκτελέστηκαν αυτά τα κριτήρια.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Την τελευταία φορά που έγινε αυτή η ενσωμάτωση.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Το τελικό σημείο της άδειας σας επιτρέπει να παρακολουθείτε τον αριθμό των αδειών που βρέθηκαν στις συσκευές σας.';

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

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Η λογική για το ταίριασμα της συσκευής περιέχεται στο αρχείο devices_helper.php, το οποίο σε μια εγκατάσταση Linux μπορεί να βρεθεί εδώ';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Οι ρυθμίσεις άδειας προεπιλογής μηχανών δεν χορηγούν άδεια τοπικής ενεργοποίησης για την εφαρμογή COM Server με';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Το μέγιστο φυσικό βάρος (σε KGs) αυτό το ράφι μπορεί να κρατήσει.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Το μέγιστο σύνολο BTUs αυτό το ράφι έχει βαθμολογηθεί για.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Τα ελάχιστα απαιτούμενα χαρακτηριστικά για τα χαρακτηριστικά γνωρίσματα είναι';

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

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Η νέα Agent τρέχει μια έκδοση Powershell του παλιού σεναρίου ελέγχου στην προετοιμασία για την απόσβεση του VBScript (ναι, έρχεται).';

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

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Η όφσετ είναι η καταμέτρηση των συσκευών από τις οποίες θέλετε να επιστρέψετε τα δεδομένα.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Το μόνο απαιτούμενο όνομα άδειας / πολιτικής (στις δοκιμές μας) είναι';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Η προαιρετική δευτερεύουσα στήλη. ΣΗΜΕΙΩΣΗ: Όταν ο τύπος = κυκλοφορία, αυτό αντιπροσωπεύει το κίτρινο id ερώτημα.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Η προαιρετική τρίτη στήλη. ΣΗΜΕΙΩΣΗ: Όταν ο τύπος = κυκλοφορία, αυτό αντιπροσωπεύει το πράσινο id ερώτημα.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Η σειρά της ανάκτησης πληροφοριών είναι snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Ο προσανατολισμός αυτής της συσκευής.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Ο κωδικός πρόσβασης (αν δεν χρησιμοποιείται ο χρήστης που εκτελεί το σενάριο).';

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

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Η κύρια μέθοδος για την εξουσιοδότηση (τι μπορεί να κάνει ένας χρήστης) βασίζεται πλέον στους ρόλους των χρηστών. Οι ρόλοι ορίζονται ως admin, org_admin, reporter και user από προεπιλογή. Κάθε ρόλος έχει ένα σύνολο αδειών (Δημιουργία, ανάγνωση, ενημέρωση, διαγραφή) για κάθε τελικό σημείο. Οι τυπικοί ρόλοι όπως αποστέλλονται πρέπει να καλύπτουν το 99,9% των περιπτώσεων χρήσης. Η δυνατότητα καθορισμού πρόσθετων rolesόλων και επεξεργασίας υφιστάμενων rolesόλων είναι ενεργοποιημένη στο Open-AudIT Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Το αναγνωριστικό διεργασίας αυτού του στοιχείου ουράς.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Η διαδικασία που χρησιμοποιήθηκε τελευταία για την ανάκτηση λεπτομερειών σχετικά με τη συσκευή';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Ο σκοπός αυτής της σελίδας αδειοδότησης είναι να απαριθμήσει τα προϊόντα και τις άδειες που περιλαμβάνονται στο Firstwave Εμπορικά προϊόντα, συμπεριλαμβανομένων των προϊόντων που βασίζονται σε έργα ανοικτού κώδικα. Το Open-AudIT έχει άδεια από το Firstwave υπό την AGPLv3 ή αργότερα με την άδεια Enterprise and Professional λειτουργικότητας υπό εμπορικούς όρους. Το Open-AudIT όταν μεταφορτώνεται από το FirstWave μπορεί να περιλαμβάνει τις ακόλουθες βιβλιοθήκες και έργα, τα οποία παρέχονται χωρίς τροποποίηση και άδεια όπως αναφέρεται:';

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

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Οι ζητούμενες ιδιότητες θα πρέπει να βρίσκονται σε λίστα χωρισμένη με κόμματα. Ιδιότητες θα πρέπει να είναι πλήρως προσόντα - δηλαδή, το σύστημα.hostname (όχι μόνο hostname).';

$GLOBALS["lang"]['The result of the command.'] = 'Το αποτέλεσμα της εντολής.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Το δωμάτιο στο οποίο βρίσκεται το ράφι.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Η σειρά στο ράφι βρίσκεται.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Η αναζήτηση ομάδας στον εξυπηρετητή LDAP απέτυχε. Ελέγξτε τα αρχεία καταγραφής του εξυπηρετητή LDAP. Έχετε δημιουργήσει αυτές τις ομάδες (για ρόλους και οργανισμούς) στον εξυπηρετητή LDAP και τους έχετε αναθέσει χρήστες LDAP σε αυτούς;';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Το μυστικό κλειδί που χρησιμοποιείται σε συνδυασμό με το κλειδί AWS EC2 API σας.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Η ημερομηνία λήξης της ζωής του λογισμικού.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Η ημερομηνία λήξης της χρήσης λογισμικού.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Η συγκεκριμένη στήλη βάσης δεδομένων από τον καθορισμένο πίνακα βάσης δεδομένων.';

$GLOBALS["lang"]['The specific database table.'] = 'Ο συγκεκριμένος πίνακας δεδομένων.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Οι τυπικές επιλογές συγχρονισμού Nmap. Στα προηγούμενα επεισόδια...';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Οι τυπικές επιλογές συγχρονισμού Nmap. Συνήθως χρησιμοποιούμε το -T4 (Επιθετικό) καθώς αυτό συνιστάται για μια αξιοπρεπή ευρυζωνική ή ethernet σύνδεση.';

$GLOBALS["lang"]['The status of this integration'] = 'Η κατάσταση αυτής της ολοκλήρωσης';

$GLOBALS["lang"]['The status of this queued item.'] = 'Η κατάσταση αυτού του αντικειμένου σε αναμονή.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Τα παρακάτω βήματα περιγράφουν τη διαδικασία.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Ο στόχος IP αυτή η καταχώρηση καταγραφής referers σε (αν υπάρχει).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Ο υπολογιστής-στόχος προς έλεγχο.';

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

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Η αφιλτράριστη κατάσταση σημαίνει ότι μια θύρα είναι προσβάσιμη, αλλά ο Nmap αδυνατεί να καθορίσει αν είναι ανοικτή ή κλειστή. Μόνο η σάρωση ACK, η οποία χρησιμοποιείται για να χαρτογραφήσει τα σύνολα κανόνων τείχους προστασίας, ταξινομεί τις θύρες σε αυτή την κατάσταση. Η σάρωση αφιλτράριστων θυρών με άλλους τύπους σάρωσης όπως σάρωση παραθύρου, σάρωση SYN ή σάρωση FIN, μπορεί να βοηθήσει στην επίλυση του αν η θύρα είναι ανοιχτή.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Το μοναδικό αναγνωριστικό αυτού του εξυπηρετητή.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Ο λογαριασμός χρήστη αυτός ο συλλέκτης χρησιμοποιεί. Συνδέσεις <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Ο χρήστης στο Active Directory / OpenLDAP πρέπει να είναι άμεσο μέλος των απαιτούμενων ομάδων Open-AudIT για Ρόλους και Οργανισμούς. Ένα μέλος μιας ομάδας που είναι μέλος μιας άλλης ομάδας που είναι μέλος της ομάδας Open-AudIT δεν θα λειτουργήσει.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Ο χρήστης είναι σε LDAP και τα διαπιστευτήριά τους είναι έγκυρα, αλλά δεν είναι σε καμία από τις ομάδες Open-AudIT LDAP για Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Ο χρήστης είναι σε LDAP και τα διαπιστευτήριά τους είναι έγκυρα, αλλά δεν είναι σε καμία από τις ομάδες Open-AudIT LDAP για Ρόλους.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Ο χρήστης είναι σε LDAP και τα διαπιστευτήριά τους είναι έγκυρα, αλλά δεν είναι σε καμία από τις απαιτούμενες ομάδες Open-AudIT LDAP.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Ο χρήστης είναι στην ομάδα LDAP που ταιριάζει με αυτόν τον Οργανισμό.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Ο χρήστης είναι στην ομάδα LDAP που ταιριάζει με αυτόν τον Ρόλο.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Ο χρήστης δεν είναι στην ομάδα LDAP που ταιριάζει με αυτόν τον Οργανισμό.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Ο χρήστης δεν είναι στην ομάδα LDAP που ταιριάζει με αυτόν τον Ρόλο.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Ο χρήστης που ορίστηκε υπάρχει στο LDAP, αλλά το Open-AudIT δεν έχει ρυθμιστεί για να καταναλώνει τις ομάδες LDAP για ρόλους και ότι ο χρήστης δεν υπάρχει μέσα στο Open-AudIT. Επιλογή είτε <i>Χρήση LDAP για ρόλους</i> στο Open-AudIT LDAP Εξυπηρετητής οθόνη ή να δημιουργήσετε αυτό το χρήστη εντός Open-AudIT και να εκχωρήσετε ρόλους και οργ.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Το όνομα χρήστη (αν δεν χρησιμοποιείται ο χρήστης που εκτελεί το σενάριο).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Το όνομα χρήστη που χρησιμοποιείται για την πρόσβαση στο εξωτερικό σύστημα.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Οι λεπτομέρειες των χρηστών δεν ανακτήθηκαν από το LDAP. Ελέγξτε τα αρχεία καταγραφής του εξυπηρετητή LDAP.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Οι λεπτομέρειες των χρηστών ανακτήθηκαν από το LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Η διεύθυνση ηλεκτρονικού ταχυδρομείου των χρηστών.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Οι συνήθεις ώρες λειτουργίας σε αυτό το site.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Η τιμή που αποδίδεται στο στοιχείο.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Η τιμή που αποθηκεύεται για το συγκεκριμένο στοιχείο.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Το όνομα του πωλητή σύμφωνα με τις εγγραφές CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Ο πωλητής που πήρε από το CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Ο κατάλογος ιστού στον υπολογιστή που εγκαθίσταται το Open-AudIT (απαιτεί μια οριζοντίωση).';

$GLOBALS["lang"]['The widget at position '] = 'Το γραφικό συστατικό στη θέση ';

$GLOBALS["lang"]['The width of this device.'] = 'Το πλάτος αυτής της συσκευής.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Τα OrgID και οι απόγονοί τους';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Μόνο τα OrgID τους';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Τα ΟΡΓΑ, οι ανιόντες και οι απόγονοί τους';

$GLOBALS["lang"]['Then'] = 'Τότε...';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Στη συνέχεια, δημιουργήστε μια νέα μέθοδο Auth στο Open-AudIT πηγαίνοντας στο μενού -> Διαχειριστής -> Μέθοδοι Ωθ -> Δημιουργήστε την Ωθ. Δώστε ένα όνομα και ορίστε το <i>τύπος</i> προς Έντρα.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Στη συνέχεια, μπορείτε να χρησιμοποιήσετε το Open-AudIT (μη υποστηριζόμενο) για να λάβετε τα στοιχεία ελέγχου απευθείας από τους πελάτες. Ανακάλυψη <strong>Θα αποτύχει.</strong>, αλλά αν δεν χρησιμοποιείτε Discovery (το κύριο χαρακτηριστικό Open-AudIT σχεδιάστηκε γύρω), μπορείτε ακόμα να πάρετε τα δεδομένα της συσκευής. Θα πρέπει να εκτελέσετε τα σενάρια ελέγχου απευθείας στους πελάτες χρησιμοποιώντας cron, ή να χρησιμοποιήσετε τη λειτουργία Windows Agent (Enterprise μόνο).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Υπάρχει ένα κουμπί για εξαγωγή στο JSON. Αυτό θα εμφανίσει μόνο τον πίνακα χαρακτηριστικών της συσκευής. Για την εξαγωγή της συσκευής με όλους τους σχετικούς πίνακες συστατικών, δείτε τις λεπτομέρειες της συσκευής, στη συνέχεια προσθέστε';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Δεν υπάρχει απολύτως καμία ανάγκη χειροκίνητης επεξεργασίας κάθε μεμονωμένης συσκευής.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Δεν χρειάζεται να κάνετε τίποτα αν τρέχετε Open-AudIT σε έναν εξυπηρετητή Linux.<br/><br/>Οι πελάτες των Windows είναι μια χαρά και δεν απαιτούν ειδικές ενέργειες, ωστόσο... για να ενεργοποιήσετε αυτό το χαρακτηριστικό το σενάριο ελέγχου πρέπει να εκτελείται τοπικά στο σύστημα των Windows στόχο. Δεν μπορεί να εκτελεστεί εξ αποστάσεως όπως κάνουμε με τις κλήσεις WMI κατά την εκτέλεση του σεναρίου ελέγχου σε ένα μηχάνημα Windows, ενώ στοχεύει και μια δεύτερη μηχανή Windows. Για να το κάνουμε αυτό πρέπει να αντιγράψουμε το σενάριο ελέγχου στη μηχανή στόχο Windows και στη συνέχεια να το εκτελέσουμε. Δυστυχώς ο λογαριασμός υπηρεσιών που λειτουργεί ο Απάτσι είναι ο λογαριασμός του τοπικού συστήματος. Αυτός ο λογαριασμός δεν έχει πρόσβαση σε απομακρυσμένους (με βάση το δίκτυο) πόρους. Για να εργαστούμε γύρω από αυτό το ζήτημα, η υπηρεσία πρέπει να λειτουργεί σε άλλο λογαριασμό. Είναι πιο εύκολο να χρησιμοποιήσετε απλά τον τοπικό λογαριασμό διαχειριστή, αλλά μπορείτε να δοκιμάσετε οποιοδήποτε λογαριασμό σας αρέσει όσο έχει τα απαιτούμενα προνόμια. Ο λογαριασμός του τοπικού συστήματος έχει τόσο τοπική πρόσβαση όσο και ο τοπικός λογαριασμός διαχειριστή.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Αυτά είναι μόνο παραδείγματα. Μπορεί να χρειαστεί να προσαρμόσετε αυτά τα χαρακτηριστικά ανάλογα με το συγκεκριμένο LDAP σας.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Αυτές οι παράμετροι σας επιτρέπουν να ελέγχετε μόνο ό,τι είναι χρήσιμο και σχετικό με εσάς, εξοικονομώντας χρόνο επεξεργασίας και επιτρέποντάς σας να ανακαλύψετε το δίκτυό σας με εύτακτο τρόπο.';

$GLOBALS["lang"]['Thing'] = 'Πράγμα';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Σκεφτείτε το mail.domain1.com και mail.domain2.com - ίδιο όνομα υπολογιστή.';

$GLOBALS["lang"]['Third'] = 'Τρίτη';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Αυτό το CVE θα ανακτηθεί και θα αντικαταστήσει το υπάρχον CVE εάν υπάρχει.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Αυτός ο Οργανισμός δεν έχει ορίσει ομάδα AD. Ελέγξτε τις λεπτομέρειες των rolesόλων στο Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Αυτός ο Οργανισμός δεν έχει ορίσει ομάδα AD. Ελέγξτε τις λεπτομέρειες των rolesόλων στο Open-AudIT. <span class=\'\"confluence-link\"\'>Έχετε δημιουργήσει αυτές τις ομάδες (για οργανισμούς) στον εξυπηρετητή LDAP και τους έχετε αναθέσει χρήστες LDAP σε αυτούς;</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Ο ρόλος αυτός δεν έχει καθοριστεί. Ελέγξτε τις λεπτομέρειες των rolesόλων στο Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Αυτή η ιδιότητα αποθηκεύεται ως αντικείμενο JSON. Είναι ο κατάλογος όλων των συλλογών και περιέχει το όνομα συλλογής μαζί με <code>c</code>, <code>r</code>, <code>u</code> και, ή <code>d</code> που αντιπροσωπεύουν δημιουργία, ανάγνωση, ενημέρωση και διαγραφή. Αυτές είναι οι ενέργειες που μπορεί να εκτελέσει ένας χρήστης σε αντικείμενα από τη συγκεκριμένη συλλογή.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Αυτό μπορεί να είναι είτε ένα varchar (ένα πεδίο κειμένου), μια λίστα (μια λίστα τιμών που μπορεί να επιλεγεί) είτε μια ημερομηνία.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Αυτός ο κώδικας βασίζεται στο μεγάλο έργο που γίνεται από την';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Αυτός ο συλλέκτης παγκοσμίως μοναδικό αναγνωριστικό.';

$GLOBALS["lang"]['This column is required by'] = 'Η στήλη αυτή απαιτείται από';

$GLOBALS["lang"]['This column is required by '] = 'Η στήλη αυτή απαιτείται από ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Αυτή η περιγραφή είναι αυτόματη-πληθυσμός και θα πρέπει ιδανικά να μείνει όπως-είναι.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Αυτό το τελικό σημείο σας επιτρέπει να προσθέσετε τις συνδέσεις που αποτελούν μέρος της υποδομής του δικτύου σας, σας επιτρέπει να προσαρμόσετε μια ποικιλία ιδιοτήτων, να καθορίσετε πού βρίσκεται αυτή η σύνδεση και τον οργανισμό που ανήκει.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Αυτό το σφάλμα δείχνει ότι το SMB1 έχει απενεργοποιηθεί ή αφαιρεθεί από τη μηχανή προορισμού. Αυτό είναι φυσιολογικό για τη σύγχρονη έκδοση των Windows και θα δείτε αυτό το μήνυμα μόνο όταν η προσπάθεια σύνδεσης SMB2 έχει αποτύχει. Εάν η σύνδεση SMB2 αποτύχει, επιχειρούμε SMB1 για να ενεργοποιήσουμε την ανακάλυψη σε παλιές εκδόσεις των Windows. Αν η μηχανή Windows στόχο <i>λέ</i> εκτελώντας μια παλιά έκδοση των Windows, είναι πιθανό τα διαπιστευτήριά σας να έχουν αποτύχει. Στην περίπτωση αυτή, βλ.';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Αυτό το σφάλμα δείχνει ότι δεν υπάρχει αρκετή εικονική μνήμη ή ποσόστωση αρχείου σελιδοποίησης για την ολοκλήρωση της καθορισμένης λειτουργίας. Πρέπει να ξαναπροσπαθήσεις αργότερα.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Αυτό το σφάλμα υποδεικνύει ότι τα διαπιστευτήρια που χρησιμοποιούνται είτε είναι λανθασμένα, δεν υπάρχουν ή δεν έχουν επαρκή δικαιώματα για να συνδεθούν εξ αποστάσεως με το μηχάνημα των Windows. Θα πρέπει να επαληθεύσετε τα διαπιστευτήρια και να ελέγξετε τα παρακάτω.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Αυτό το παράδειγμα δημιουργεί μια λίστα με όλες τις ενότητες που σημειώνονται ως';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Αυτό το παράδειγμα δημιουργεί μια λίστα με συσκευές και τις ανοικτές θύρες, πρωτόκολλα, και προγράμματα που βρέθηκαν από τη σάρωση NMAP.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Αυτό το παράδειγμα δημιουργεί μια λίστα συσκευών όπου τα πεδία Λειτουργία ή Περιγραφή είναι κενά Ή η ημερομηνία αγοράς είναι η προκαθορισμένη.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Αυτό το ερώτημα παράδειγμα ανακτά μια λίστα συσκευών άνω των 3 ετών. Το ερώτημα χρησιμοποιεί σήμερα';

$GLOBALS["lang"]['This example uses'] = 'Αυτό το παράδειγμα χρησιμοποιεί';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Αυτό το χαρακτηριστικό απαιτεί μια επαγγελματική ή μια άδεια Enterprise.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Αυτό το χαρακτηριστικό, επειδή έχει τη δυνατότητα να επηρεάζει τις συσκευές στόχου περισσότερο από το συνηθισμένο, πρέπει να είναι χειροκίνητα ενεργοποιημένο. Για να ενεργοποιήσετε αυτή τη λειτουργία, αλλάξτε τη λειτουργία_ εκτελέσιμο στοιχείου ρυθμίσεων σε <i>Ναι</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Αυτό το αρχείο λέει στο Linux να δημοσκοπήσει την εφαρμογή για να καθορίσει αν υπάρχουν προγραμματισμένες εργασίες που πρέπει να εκτελεστούν.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Αυτή η φόρμα παρέχει έναν απλό τρόπο για να ξεκινήσετε την ανακάλυψη των συσκευών στο δίκτυό σας. Για περισσότερες (πολύ περισσότερες) λεπτομερείς επιλογές, μπορείτε να δημιουργήσετε μεμονωμένα';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Έτσι λειτουργεί και το PAExec.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Αυτή είναι μια προαιρετική επιλογή ρύθμισης, ενεργοποιημένη με τον ορισμό discovery_use_org_id_match στις καθολικές ρυθμίσεις.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Αυτή είναι γενικά η κύρια στήλη, εκτός εάν άλλως ρυθμιστεί. ΣΗΜΕΙΩΣΗ: Όταν ο τύπος = κυκλοφορία, αυτό αντιπροσωπεύει το δευτερεύον κείμενο.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Αυτό είναι πιθανό λόγω του χρόνου MySQL είναι μακριά. MySQL χρησιμοποιεί συνήθως το χρόνο συσκευών υποδοχής. Μπορείς να το ελέγξεις.';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Αυτό είναι οριζόμενο από τους χρήστες και έτσι αν και θα πρέπει να είναι παγκοσμίως μοναδικό, σίγουρα δεν υπάρχει καμία εγγύηση για αυτό.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Αυτός είναι ο κατάλογος όπου αποθηκεύουμε τυχόν συνημμένα σε συσκευές.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Αυτό πρόκειται να χρησιμοποιηθεί ως το πρώτο σημείο κλήσης κατά την αντιμετώπιση προβλημάτων Open-AudIT. Μπορείτε να κάνετε κλικ στο κουμπί εξαγωγής πάνω δεξιά για να ανακτήσετε αυτό ως ένα αρχείο JSON (για να προστεθεί στο εισιτήριο / email υποστήριξης.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Το θέμα είναι υπό έρευνα.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Αυτό το στοιχείο πρέπει να ταιριάζει με την τιμή του χαρακτηριστικού που επιλέχθηκε ή περιέχει το ID του ερωτήματος που θα χρησιμοποιηθεί.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Αυτό το στοιχείο πρέπει να ταιριάζει με την τιμή του επιλεγμένου χαρακτηριστικού.';

$GLOBALS["lang"]['This license expires on'] = 'Αυτή η άδεια λήγει στις';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Αυτή η άδεια ασφαλείας μπορεί να τροποποιηθεί χρησιμοποιώντας το διοικητικό εργαλείο Component Services.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Αυτό θα πρέπει να σχολιαστεί μετά την αντιμετώπιση προβλημάτων ως λειτουργία αποσφαλμάτωσης θα δημιουργήσει πολλά αρχεία καταγραφής στο δίσκο για κανένα όφελος.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Αυτό θα πρέπει να είναι παγκοσμίως μοναδικό, αλλά έχω δει περιπτώσεις όπου δεν είναι.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Αυτό πρέπει να ρυθμιστεί είτε στο 1 είτε στο ύψος της σχάρας.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Αυτό θα πρέπει να είναι το πλήρως ειδικευμένο όνομα πεδίου στη βάση δεδομένων. Αυτή τη στιγμή υποστηρίζονται στήλες από το σύστημα, πεδία και πίνακες διαπιστευτηρίων. EG: σύστημα.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Αυτή η κατάσταση χρησιμοποιείται όταν ο χάρτης Nmap αδυνατεί να καθορίσει εάν μια θύρα είναι κλειστή ή φιλτράρεται. Χρησιμοποιείται μόνο για την αδρανή σάρωση IP ID.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Αυτό θα γίνει αυτόματα.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Αυτό θα επιβραδύνει σημαντικά την σάρωση ανακάλυψης.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Αυτό θα διαγράψει τις τρέχουσες σειρές στο';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Αυτό θα διαγράψει μόνιμα αυτή την άδεια.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Αυτό θα σας δείξει τη φόρμα Μαζικής Επεξεργασίας. Οποιεσδήποτε ιδιότητες που ορίσατε σε αυτή τη φόρμα θα εφαρμοστούν σε όλες τις επιλεγμένες συσκευές. Μπορείτε να ορίσετε πολλαπλές ιδιότητες αμέσως.';

$GLOBALS["lang"]['Thursday'] = 'Πέμπτη';

$GLOBALS["lang"]['time_caption'] = 'Τίτλος χρόνου';

$GLOBALS["lang"]['Time Caption'] = 'Τίτλος χρόνου';

$GLOBALS["lang"]['time_daylight'] = 'Χρονικό φως';

$GLOBALS["lang"]['Time Daylight'] = 'Χρονικό φως';

$GLOBALS["lang"]['Time to Execute'] = 'Ώρα για εκτέλεση';

$GLOBALS["lang"]['timeout'] = 'Χρονικό όριο';

$GLOBALS["lang"]['Timeout'] = 'Χρονικό όριο';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Χρονικό όριο ανά στόχο (δευτερεύοντα)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Χρονικό όριο ανά στόχο. Περιμένετε για X δευτερόλεπτα για μια απόκριση στόχου.';

$GLOBALS["lang"]['Timesatamp'] = 'Χρονοσφραγίδα';

$GLOBALS["lang"]['Timestamp'] = 'Χρονοσφραγίδα';

$GLOBALS["lang"]['timing'] = 'Χρόνος';

$GLOBALS["lang"]['Timing'] = 'Χρόνος';

$GLOBALS["lang"]['Timor-Leste'] = 'Τιμόρ-Λέστε';

$GLOBALS["lang"]['Title'] = 'Τίτλος';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Σε ένα νέο αρχείο που ονομάζεται .env (στον ίδιο κατάλογο). Τώρα επεξεργαστείτε το νέο αρχείο και αποσυνδέστε (αφαιρέστε το #) τη γραμμή παρακάτω (γραμμή 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Για να εκτελέσετε πραγματικά το ερώτημα, προσαρτήστε ένα /execute, έτσι /open-audit/index.php/queries/{$id}/ εκτελέστε.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Για να ελέγξετε ένα μηχάνημα, πρέπει να έχετε διαπιστευτήρια και πρόσβαση σε επίπεδο διαχειριστή.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Για τον έλεγχο μιας απομακρυσμένης μηχανής σε έναν τομέα Active Directory, ο παρεχόμενος χρήστης σας (ή αν δεν παρέχεται, ο χρήστης που εκτελεί το σενάριο) πρέπει να είναι μέλος της ομάδας χρηστών μηχανών-στόχων (ή υποομάδα).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Για να ελέγξετε ένα απομακρυσμένο μηχάνημα που δεν είναι σε ένα domain, πρέπει να χρησιμοποιήσετε το λογαριασμό διαχειριστή (όχι <i>α</i> λογαριασμό διαχείρισης, <i>το</i> Λογαριασμός διαχειριστή) στον υπολογιστή-στόχο. #1 και #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Για τον έλεγχο localhost, οποιαδήποτε παρεχόμενα διαπιστευτήρια δεν λαμβάνονται υπόψη και η σύνδεση γίνεται χρησιμοποιώντας τις λεπτομέρειες του χρήστη που τρέχει το σενάριο.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Για να συγκρίνουμε το λογισμικό ελέγχουμε το όνομα και την έκδοση. Επειδή οι αριθμοί έκδοσης δεν είναι όλοι τυποποιημένοι σε μορφή, όταν λαμβάνουμε ένα αποτέλεσμα ελέγχου δημιουργούμε ένα νέο χαρακτηριστικό που ονομάζεται software_padded το οποίο αποθηκεύουμε στη βάση δεδομένων μαζί με τις υπόλοιπες λεπτομέρειες λογισμικού για κάθε πακέτο. Για το λόγο αυτό, οι γραμμές βάσης που χρησιμοποιούν πολιτικές λογισμικού δεν θα λειτουργήσουν όταν τρέξουν ενάντια σε μια συσκευή που δεν έχει ελεγχθεί από 1.10 (τουλάχιστον). Οι πολιτικές λογισμικού μπορούν να δοκιμάσουν ενάντια στην έκδοση είναι <i>ίσο με</i>, <i>μεγαλύτερη από</i> ή <i>ίσο ή μεγαλύτερο από</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Για να δημιουργήσετε μια νέα καταχώρηση κάντε κλικ στο κουμπί Δημιουργία στην πάνω δεξιά γωνία.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Για να δημιουργήσετε έναν πόρο, θα πρέπει να POST τα απαιτούμενα δεδομένα.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Για να καταστεί δυνατή ο έλεγχος μιας απομακρυσμένης μηχανής (Vista ή παραπάνω) που δεν βρίσκεται σε έναν τομέα, από λογαριασμό στον όμιλο διαχειριστών, εκτός από τον πραγματικό λογαριασμό διαχειριστή δείτε την παρακάτω ενότητα για την UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Για να το ενεργοποιήσετε αυτό, δημιουργήστε ένα νέο αντικείμενο Auth πηγαίνοντας στο μενού -> Διαχειριστής -> Auth -> Δημιουργήστε τη μέθοδο Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Για να εκτελέσετε το σενάριο powershell των Windows, ανοίξτε μια εντολή ως Διαχειριστής και χρησιμοποιήστε την ακόλουθη εντολή';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Για την εκτέλεση του σεναρίου ελέγχου, ανοίξτε ένα τερματικό και χρησιμοποιήστε την ακόλουθη εντολή';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Για να φιλτράρετε με μια τιμή ιδιοκτησίας, χρησιμοποιήστε το όνομα ιδιοκτησίας. Οι φορείς εκμετάλλευσης που θα πρέπει να προηγούνται της τιμής είναι';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Για να εγκαταστήσετε Nmap στα Windows, επισκεφθείτε τη σελίδα Nmap στο';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Για να κάνετε την αλλαγή, ακολουθήστε τα παρακάτω βήματα.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Για να ανακτήσω την ταυτότητα του Τέναντ. Ανοίξτε το Azure portal κάντε κλικ στο Azure Active Directory, Properties and the Tenant ID is showed as your Directory ID - μην κατηγορείτε εμένα για το όνομα αναντιστοιχία, έτσι είναι η Microsoft ρολό.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Για να ανακτήσετε το κλειδί σας, συνδεθείτε στην Κονσόλα AWS και επιλέξτε το όνομα χρήστη σας, και στη συνέχεια την Εντολή Ασφαλείας Μου.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Για να επιστρέψετε ένα συγκεκριμένο στοιχείο.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Για να επιστρέψετε όλα τα αντικείμενα για έναν τύπο compnent για μια συγκεκριμένη συσκευή.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Για να επιστρέψετε όλα τα αντικείμενα για έναν τύπο συστατικού. Αν θέλατε όλο το λογισμικό θα χρησιμοποιούσατε';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Για να αντιστραφεί το είδος, εισάγετε ένα μείον, έτσι';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Για να εκτελέσετε το σενάριο δοκιμής στο στόχο Windows PC';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Για να επιλέξουμε συσκευές που θα ενσωματωθούν, χρησιμοποιούμε nmis_manage = y, αλλά μπορεί να σας αρέσει (για παράδειγμα) τύπος = router. Μπορείτε επίσης να χρησιμοποιήσετε μια ομάδα ή ερώτηση αν προτιμάτε κάτι πιο περίπλοκο.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Για ταξινόμηση ανά στήλη βάσης δεδομένων, χρησιμοποιήστε';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Για να χρησιμοποιήσετε αυτή τη λειτουργία Enterprise, πρέπει πρώτα να δημιουργήσετε το χρήστη σας στο Open-AudIT όπως συνήθως. Η ανάθεση κωδικού πρόσβασης δεν είναι απαραίτητη. Πρέπει να αναθέσετε τους Ρόλους και τους Οργ. Το όνομα χρήστη στο Open-AudIT πρέπει να ταιριάζει με το Entra <i>προτιμώμενο όνομα χρήστη</i> χαρακτηριστικό γνώρισμα. Δεν υπάρχει καμία ανάγκη για ένα πλήρες όνομα ή ηλεκτρονικό ταχυδρομείο - αυτά θα κατοικούνται από Entra. Εάν δεν γνωρίζετε τους χρήστες σας <i>προτιμώμενο όνομα χρήστη</i>Μην φοβάσαι. Μπορείτε να δημιουργήσετε τη νέα μέθοδο Auth στο Open-AudIT και την εφαρμογή Enterprise στο Entra και όταν ένας χρήστης προσπαθεί να συνδεθεί στο Open-AudIT χωρίς προϋπάρχοντα χρήστη, ελέγξτε τα αρχεία καταγραφής και θα δείτε τους <i>προτιμώμενο όνομα χρήστη</i> Καταχωρήθηκε για τη συνείδησή σας.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Για να χρησιμοποιήσετε αυτή τη λειτουργία Enterprise, πρέπει πρώτα να δημιουργήσετε το χρήστη σας στο Open-AudIT όπως συνήθως. Η ανάθεση κωδικού πρόσβασης δεν είναι απαραίτητη. Πρέπει να αναθέσετε τους Ρόλους και τους Οργ. Το όνομα χρήστη στο Open-AudIT πρέπει να ταιριάζει με το OKTA <i>όνομα</i> χαρακτηριστικό γνώρισμα. Δεν υπάρχει ανάγκη για πλήρες όνομα ή ηλεκτρονικό ταχυδρομείο - αυτά θα κατοικηθούν από την OKTA. Εάν δεν γνωρίζετε τους χρήστες σας <i>όνομα<i>Μην φοβάσαι. Μπορείτε να δημιουργήσετε το νέο Auth Menthod στο Open-AudIT και την εφαρμογή στην OKTA και όταν ένας χρήστης προσπαθεί να συνδεθεί στο Open-AudIT χωρίς έναν προϋπάρχοντα χρήστη, ελέγξτε τα αρχεία καταγραφής και θα δείτε τους <i>όνομα<i> Καταχωρήθηκε για τη συνείδησή σας.<br/><p>Στη συνέχεια, δημιουργήστε μια νέα μέθοδο Auth στο Open-AudIT πηγαίνοντας στο μενού -> Διαχειριστής -> Μέθοδοι Ωθ -> Δημιουργήστε την Ωθ. Δώστε ένα όνομα και ορίστε το <i>τύπος</i> στην Όκτα.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Για να χρησιμοποιήσετε αυτή τη λειτουργία πρέπει να ενεργοποιήσετε τα στοιχεία ρυθμίσεων match_mac (για AWS) και match_hostname (για Azure). Αυτό θα γίνει αυτόματα την πρώτη φορά που θα εκτελεστεί μια ανακάλυψη σύννεφου. Για περισσότερα στο Open-AudITs ταιριάζουν κανόνες δείτε ΕΔΩ: Συνδυάζοντας συσκευές';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Για να δείτε τις λεπτομέρειες ενός ερωτήματος, η τυπική δομή URL του /open-audit/index. php/queries/ {$id} θα πρέπει να χρησιμοποιείται.';

$GLOBALS["lang"]['Togo'] = 'Τόγκο';

$GLOBALS["lang"]['Tokelau'] = 'Τοκελάου';

$GLOBALS["lang"]['Tonga'] = 'Τόνγκα';

$GLOBALS["lang"]['toolbar_style'] = 'Στυλ γραμμής εργαλείων';

$GLOBALS["lang"]['Toolbar Style'] = 'Στυλ γραμμής εργαλείων';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Κορυφαίες θύρες TCP Nmap';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Κορυφαίες θύρες TCP Nmap. Οι κορυφαίες 10, 100, 1000 θύρες για σάρωση σύμφωνα με Nmaps "top θύρες" επιλογές.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Κορυφαίες θύρες UDP Nmap';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Κορυφαίες θύρες UDP. Οι κορυφαίες 10, 100, 1000 θύρες για σάρωση σύμφωνα με Nmaps "top θύρες" επιλογές.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Παραδοσιακοί Κινέζοι';

$GLOBALS["lang"]['Traffic Light'] = 'Φως κίνησης';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Τρινιδάδ και Τομπάγκο';

$GLOBALS["lang"]['Troubleshooting'] = 'Αντιμετώπιση προβλημάτων';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Αντιμετώπιση προβλημάτων σύνδεσης LDAP';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Δοκιμάστε Open-Audit Εντερπράιζ, πάνω μας χωρίς χρονικό περιορισμό. Όλα τα χαρακτηριστικά του Εντερπράιζ. Περιορισμένη σε 20 συσκευές.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Δοκιμάστε όλα τα τελευταία χαρακτηριστικά με άδεια χρήσης δωρεάν 100 συσκευών του Open-AudIT Enterprise. Παρακαλώ διαβάστε το ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Δοκιμάστε να συνδεθείτε χρησιμοποιώντας έναν χρήστη LDAP. Υποθέτουμε ότι αυτό θα αποτύχει (αλλιώς, γιατί το διαβάζετε ακόμα αυτό;). Στη συνέχεια, σχολιάστε τη γραμμή από το αρχείο ther παραπάνω.';

$GLOBALS["lang"]['Tuesday'] = 'Τρίτη';

$GLOBALS["lang"]['Tunisia'] = 'Τυνησία';

$GLOBALS["lang"]['Turkey'] = 'Τουρκία';

$GLOBALS["lang"]['Turkish'] = 'Τουρκικά';

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

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Τύπος: Αυτό μπορεί να είναι είτε ένα varchar (ένα πεδίο κειμένου) είτε μια λίστα (μια λίστα τιμών που μπορεί να επιλεγεί).';

$GLOBALS["lang"]['Types of Networks'] = 'Τύποι δικτύων';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Λιμάνια Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Λιμάνια Udp';

$GLOBALS["lang"]['Uganda'] = 'Ουγκάντα';

$GLOBALS["lang"]['Ukraine'] = 'Ουκρανία';

$GLOBALS["lang"]['Ukrainian'] = 'Ουκρανικά';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Έλεγχο του σταδίου 1 (ελέγχος εγγράφων)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Έλεγχο undergo Στάδιο 2 (ελέγχος υλοποίησης)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Υπό εξέλιξη Ανάλυση';

$GLOBALS["lang"]['Unfiltered'] = 'Μη φιλτραρισμένο';

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

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Ενημέρωση Ευπάθειας';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Ενημέρωση ενός χαρακτηριστικού μιας καταχώρησης {collection}.';

$GLOBALS["lang"]['Update attributes'] = 'Ενημέρωση ιδιοτήτων';

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

$GLOBALS["lang"]['Urdu'] = 'Ούρντου';

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

$GLOBALS["lang"]['Use Proxy'] = 'Χρήση διαμεσολαβητή';

$GLOBALS["lang"]['Use SNMP'] = 'Χρήση SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Χρήση SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Χρήση ασφαλούς (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Χρήση ανίχνευσης έκδοσης υπηρεσιών';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Χρήση ανίχνευσης έκδοσης υπηρεσιών. Όταν ανιχνεύεται μια ανιχνεύσιμη θύρα ως ανοικτή, εάν είναι ρυθμισμένη προς <i>y</i>, Nmap θα εξετάσει τη συσκευή προορισμού σε μια προσπάθεια να καθορίσει την έκδοση της υπηρεσίας που εκτελείται σε αυτή τη θύρα.<br/>Αυτό μπορεί να είναι χρήσιμο κατά την αναγνώριση μη ταξινομημένων συσκευών. Αυτό δεν χρησιμοποιήθηκε προηγουμένως.';

$GLOBALS["lang"]['Use WMI'] = 'Χρήση WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Χρήση α <i>Μέθοδος εισόδου</i> OIDC - OpenID Connect και ένα <i>Τύπος εφαρμογής</i> του Web Application. Κλικ <i>Επόμενο</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Χρήση για ταυτοποίηση';

$GLOBALS["lang"]['Use for Roles'] = 'Χρήση για ρόλους';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Χρήση των τυπικών επιλογών εγκατάστασης όταν εμφανίζεται και κάντε κλικ στο <i>Συμφωνώ.</i>, <i>Επόμενο</i> και <i>Εγκατάσταση</i> κουμπιά για την εγκατάσταση Nmap.';

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

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Οι χρήστες εργάζονται παρόμοια με το Netstat Ports. Εάν ένας χρήστης υπάρχει με ένα ταιριαστό όνομα, κατάσταση και λεπτομέρειες κωδικού πρόσβασης (αλλάξιμο, λήγει, απαιτείται) τότε η πολιτική περνά.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Χρήστες, Ρόλοι και Οργανισμοί';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Χρησιμοποιεί το πλαίσιο PHP CodeIgniter.';

$GLOBALS["lang"]['Using'] = 'Χρήση';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Χρήση Entra για Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Χρήση LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Χρήση OKTA για Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Χρησιμοποιώντας την επιλογή μορφής είναι χρήσιμη όταν χρησιμοποιείτε ένα πρόγραμμα περιήγησης ιστού, αλλά θέλετε να δείτε το αποτέλεσμα σε μορφή JSON. Προσθήκη μορφής=Json επιτυγχάνει αυτό. Κανονικά ένας περιηγητής ιστού θα ορίσει την κεφαλίδα αποδοχής του σε HTML, έτσι σε αυτή την περίπτωση, επιστρέφουμε την παρεχόμενη σελίδα. Χρησιμοποιώντας ένα API για να ανακτήσει JSON θα πρέπει να ρυθμίσετε την κεφαλίδα αποδοχής';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Συνήθως Mbs, από την τοποθεσία A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Συνήθως Mbs, από την τοποθεσία B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Συνήθως Mbs, στην τοποθεσία A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Συνήθως Mbs, στην τοποθεσία B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Συνήθως πρέπει να οριστεί στο 3.';

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

$GLOBALS["lang"]['Value Types'] = 'Τύποι τιμών';

$GLOBALS["lang"]['values'] = 'Τιμές';

$GLOBALS["lang"]['Values'] = 'Τιμές';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Τιμές: Στην περίπτωση α <i>λίστα</i> πεδίο, αυτός θα πρέπει να είναι ένας χωρισμένος από κόμμα κατάλογος έγκυρων τιμών.';

$GLOBALS["lang"]['Vanuatu'] = 'Βανουάτου';

$GLOBALS["lang"]['VarChar'] = 'Βαρσάρ';

$GLOBALS["lang"]['Varchar'] = 'Βαρσάρ.';

$GLOBALS["lang"]['variable'] = 'Μεταβλητή';

$GLOBALS["lang"]['Variable'] = 'Μεταβλητή';

$GLOBALS["lang"]['Various'] = 'Διάφορα';

$GLOBALS["lang"]['vendor'] = 'Προμηθευτής';

$GLOBALS["lang"]['Vendor'] = 'Προμηθευτής';

$GLOBALS["lang"]['Vendor Report'] = 'Έκθεση Προμηθευτή';

$GLOBALS["lang"]['vendors'] = 'Προμηθευτές';

$GLOBALS["lang"]['Vendors'] = 'Προμηθευτές';

$GLOBALS["lang"]['Venezuela'] = 'Βενεζουέλα';

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

$GLOBALS["lang"]['Vietnamese'] = 'Βιετναμέζικα';

$GLOBALS["lang"]['View'] = 'Προβολή';

$GLOBALS["lang"]['View All'] = 'Προβολή όλων';

$GLOBALS["lang"]['View Details'] = 'Προβολή λεπτομερειών';

$GLOBALS["lang"]['View Device'] = 'Προβολή συσκευής';

$GLOBALS["lang"]['View Discovery'] = 'Προβολή ανακάλυψης';

$GLOBALS["lang"]['View Policy'] = 'Πολιτική προβολής';

$GLOBALS["lang"]['View Racks'] = 'Προβολή Racks';

$GLOBALS["lang"]['View the'] = 'Προβολή του';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Δείτε την ανακάλυψη εν λόγω, στη συνέχεια, κάντε κλικ στο κουμπί Υποστήριξη στην επάνω δεξιά γραμμή εργαλείων. Αυτό θα παρέχει τις ρυθμίσεις ανακάλυψης, τα στοιχεία ρυθμίσεων, τη λίστα συσκευών ανακάλυψης καθώς και τα αρχεία καταγραφής για τη συγκεκριμένη ανακάλυψη.';

$GLOBALS["lang"]['View the release notes on the'] = 'Δείτε τις σημειώσεις για την έκδοση';

$GLOBALS["lang"]['Virtual Private Network'] = 'Εικονικό ιδιωτικό δίκτυο';

$GLOBALS["lang"]['Virtual private network'] = 'Εικονικό ιδιωτικό δίκτυο';

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

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Ευπάθεια και αποτελέσματα';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerabilities αρχικά δημοσιεύθηκε πριν από την 1η Ιανουαρίου, 2025 (από προεπιλογή). Δεν βλέπουμε κανένα νόημα στην επιστροφή τρωτά σημεία από χρόνια πριν. Αυτό μπορεί να αλλάξει στις ρυθμίσεις.';

$GLOBALS["lang"]['vulnerability_id'] = 'Ταυτότητα ευπάθειας';

$GLOBALS["lang"]['Vulnerability ID'] = 'Ταυτότητα ευπάθειας';

$GLOBALS["lang"]['Vulnerability Status'] = 'Κατάσταση ευπάθειας';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'ΠΡΟΕΙΔΟΠΟΙΗΣΗ - Κατά τη δημιουργία μιας βάσης δεδομένων χρησιμοποιώντας πολιτικές λογισμικού, προς το παρόν το πακέτο Centos και RedHat ο πυρήνας χρησιμοποιεί τα ονόματα <i>πυρήνες</i> και <i>Επικάλυψη πυρήνα</i>. Μπορεί να υπάρχουν πολλαπλά πακέτα με αυτό το όνομα και διαφορετικές εκδόσεις ταυτόχρονα εγκατεστημένες. Οι διανομές με βάση το Debian χρησιμοποιούν ονόματα όπως <i>linux-image-3.13.0-24-γενικό</i>, σημειώστε ότι ο αριθμός έκδοσης περιλαμβάνεται στο όνομα του πακέτου. Επειδή τα λειτουργικά συστήματα με βάση το RedHat χρησιμοποιούν αυτή τη μορφή και στη συνέχεια έχουν πολλαπλά πανομοιότυπα ονόματα πακέτων με διαφορετικές εκδόσεις που αποκλείουμε σήμερα <i>πυρήνες</i> και <i>Επικάλυψη πυρήνα</i> από τις πολιτικές λογισμικού. Αυτό μπορεί να αντιμετωπιστεί σε μελλοντική ενημέρωση.';

$GLOBALS["lang"]['WHERE'] = 'ΟΠΟΥ';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'Απαιτήσεις για την κατάρτιση του WMI';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Περιμένετε για να ολοκληρωθεί, στη συνέχεια, επικολλήστε σε αυτή την επόμενη γραμμή για να εγκαταστήσετε τον πράκτορα.';

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

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Έχουμε επίσης μια επιλογή για Ping Before Scan (σημαντικό για routers με λανθάνουσες κρύπτες ARP). Συνήθως είναι καλή ιδέα.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Έχουμε επίσης τα στοιχεία δράσης μας (τα οποία εκτελούνται με τη σειρά που ακολουθεί):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Συχνά μας κάνουν αυτή την ερώτηση και η απάντηση είναι σίγουρα: <i>Εξαρτάται.</i>. Εξαρτάται από τον αριθμό των IP που πρέπει να σαρωθούν, την ταχύτητα σύνδεσης δικτύου, την ταχύτητα των συσκευών που σαρώνονται, τον τύπο των συσκευών που σαρώνονται, τον αριθμό των διαφορετικών διαπιστευτηρίων που δοκιμάζονται και την ταχύτητα του εξυπηρετητή Open-AudIT. Δεν έχουμε έναν υπολογιστή που θα μας επέτρεπε να εισάγουμε αυτές τις μεταβλητές και να επιστρέψουμε μια τιμή. Είναι απλά πολύ περίπλοκο. Γενικά περιορίζω τις ανακαλύψεις μου σε 256 διευθύνσεις IP - δηλαδή, ένα υποδίκτυο /24. Είχαμε πελάτες σάρωση /16 subnets (65k διευθύνσεις) και λειτουργεί - αλλά μπορεί να πάρει πολύ χρόνο. Είστε πολύ καλύτερα από σάρωση σε /24 μπλοκ. Εάν απλά δεν ξέρετε ποια είναι τα όρια διευθύνσεων σας, τότε αυτή είναι μια καλή περίπτωση για μια ανακάλυψη σπόρων.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Έχουμε πιο λεπτομερείς οδηγίες για';

$GLOBALS["lang"]['We have tests for:'] = 'Έχουμε εξετάσεις για:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Ελπίζουμε να βρείτε το Open-AudIT τόσο χρήσιμο όσο εμείς.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Αρχικά ρυθμίσαμε την προκαθορισμένη λίστα των σεναρίων με τις προεπιλεγμένες επιλογές. Η λίστα του σεναρίου είναι ορατή στο /scripts. Αυτά τα προεπιλεγμένα σενάρια δεν μπορούν να διαγραφούν. Μπορείτε να δημιουργήσετε πρόσθετα σενάρια για χρήση από εσάς όπως απαιτείται. Το σενάριό σας θα βασίζεται σε ένα από τα υπάρχοντα σενάρια και θα έχει προσαρμοσμένες επιλογές. Τα σενάρια μπορούν στη συνέχεια να μεταφορτωθούν από τη σελίδα της λίστας στο μενού: Discover -> Σενάρια ελέγχου -> Σενάρια ελέγχου λίστας.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Χρειαζόμαστε κάποια διαπιστευτήρια για να μπορέσουμε να μιλήσουμε αποτελεσματικά στις συσκευές του δικτύου σας.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Στέλνουμε μόνο την ελάχιστη ποσότητα δεδομένων και τίποτα ευαίσθητο. Στέλνουμε τα δεδομένα της άδειας χρήσης μας (όνομα, τύπος, κ.λπ.), τα δεδομένα της εφαρμογής μας (όνομα, έκδοση, πλατφόρμα, ζώνη ώρας κ.λπ.), τυχόν καταγεγραμμένα λάθη, μια καταμέτρηση των τύπων συσκευών και μια καταμέτρηση των χαρακτηριστικών που χρησιμοποιούνται. <i>Οποιοδήποτε</i> περιβάλλον έχει συσκευές και αυτό είναι το μόνο κομμάτι των δεδομένων σας στέλνουμε. Και μόνο ο τύπος της συσκευής και η καταμέτρηση. Ούτε ο κατασκευαστής, ούτε το μοντέλο. Δεν στέλνουμε τίποτα ιδιαίτερο. Όχι δίκτυα. Δεν υπάρχουν διευθύνσεις IP. Δεν υπάρχουν εκδόσεις OS. Δεν υπάρχουν ονόματα λογισμικού. Τα πεδία UUID και Server είναι Sha256 κωδικοποιημένα (έτσι δεν γνωρίζουμε την τιμή). Στέλνουμε μόνο τα δεδομένα που χρειαζόμαστε για να βελτιώσουμε το προϊόν. Ελπίζουμε να δείτε το όφελος για όλους μας με αυτές τις πληροφορίες. Θα μας καθοδηγήσει στο πού να εστιάσουμε τις βελτιώσεις και τα νέα χαρακτηριστικά του προϊόντος.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Τείνουμε να χρησιμοποιούμε την επέκταση Google Chrome που ονομάζεται Ταχυδρόμος για τη δοκιμή πραγματικά ξεκούραστα ερωτήματα. Μπορεί να θέλετε να εγκαταστήσετε και να ελέγξετε με αυτό.';

$GLOBALS["lang"]['Web'] = 'Ιστός';

$GLOBALS["lang"]['Web Application Routes'] = 'Διαδρομές εφαρμογής ιστού';

$GLOBALS["lang"]['Web Server Discovery'] = 'Ανακάλυψη εξυπηρετητή ιστού';

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

$GLOBALS["lang"]['Welcome to'] = 'Καλώς ήρθατε στο';

$GLOBALS["lang"]['Western Sahara'] = 'Δυτική Σαχάρα';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Τι Μπορώ να Αναμένω αν Δεν Έχω Εντολή';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Τι γίνεται με τα πεδία που θέλω από το NMIS που δεν είναι στο Open-Audit; Σε καλύπτουμε. Οποιαδήποτε πεδία στο εξωτερικό σύστημα (NMIS) που δεν υπάρχουν στο Open-AudIT θα δημιουργηθούν αυτόματα ως προσαρμοσμένα πεδία Open-AudIT.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Τι γίνεται με άλλες συσκευές δικτύου; Διακόπτες σκέψης, δρομολογητές, εκτυπωτές, κλπ. Προφανώς, είναι καλύτερο αν μπορείτε να παράσχετε κάποια διαπιστευτήρια SNMP για αυτές τις συσκευές. Το μόνο που χρειάζονται <i>μόνο για ανάγνωση</i> πρόσβαση. Αλλά αν δεν θέλετε να κάνετε ακόμα και αυτό, δεν υπάρχει τίποτα που να σας εμποδίζει από το να εκτελέσετε την ανακάλυψη, την εύρεση των συσκευών, και τη δημιουργία ενός κανόνα ή δύο για την αναγνώριση τους (ίσως να χρησιμοποιήσετε το πρόθεμα MAC Address σε συνδυασμό με ανοικτές θύρες, για παράδειγμα). Δεν θα έχεις πολλές πληροφορίες, αλλά θα ξέρεις ότι είναι στο δίκτυο, τι είναι, και πότε ήταν η τελευταία φορά που τους είδαν. Θα δείτε επίσης αν κάτι νέο εμφανίζεται στο δίκτυο.';

$GLOBALS["lang"]['What do we send?'] = 'Τι θα στείλουμε;';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Τι σημαίνει αυτό για σένα;';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Ποιος είναι ο σκοπός αυτού του ράφι.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Ποιος είναι ο τύπος αυτής της τοποθεσίας. Επιτρεπόμενοι τύποι που τηρούνται σε <code>attributes</code> τραπέζι.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Όταν το Open-AudIT στο Linux ανακαλύπτει μια μηχανή Windows, προκειμένου να εκτελέσει μια απομακρυσμένη εντολή που χρησιμοποιούμε';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Όταν το Open-AudIT στα Windows ανακαλύπτει μια μηχανή Windows, προκειμένου να εκτελέσει μια απομακρυσμένη εντολή που χρησιμοποιούμε';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Όταν ανοιγοκλείνετε το παράθυρο Η IT λαμβάνει δεδομένα σχετικά με μια συσκευή, είτε με την ανακάλυψη της συσκευής κατά τη διάρκεια μιας λειτουργίας ελέγχου είτε από τον χρήστη που εισάγει τη συσκευή, πρέπει να καθορίσει αν αυτή η συσκευή που ανακαλύφθηκε ταιριάζει με μια συσκευή που υπάρχει ήδη στη βάση δεδομένων της, ή αν είναι μια νέα συσκευή που θα πρέπει να προστεθεί. Το Open-AudIT χρησιμοποιεί μια σειρά από δώδεκα αγώνες ιδιοκτησίας για να καθορίσει αυτό. Οι κανόνες αγώνα λειτουργούν ως ή συγκρίσεις, όχι και. Αυτό σημαίνει ότι ο πρώτος κανόνας που ταιριάζει με ένα πεδίο στη συσκευή που ανακαλύφθηκε με ένα στα dB υποχωρεί ως υπάρχουσα συσκευή. Όλοι οι κανόνες ταιριάσματος πρέπει να αποτύχουν προκειμένου μια συσκευή να είναι νέα και να έχει ως αποτέλεσμα να δημιουργηθεί μια νέα εγγραφή.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Όταν POSTing δεδομένα, θα πρέπει να περιλαμβάνει ένα σημείο πρόσβασης. Μια πρόσβαση token δημιουργείται με κάθε τύπο αίτησης, γι \'αυτό κάντε ένα GET (για παράδειγμα) και Accept: εφαρμογή / json, αναλύστε την απάντηση για meta→access_token, και συμπεριλάβετε ότι με το αίτημά σας. Αυτό θα πρέπει να τοποθετηθεί στο πεδίο δεδομένων[access_token], IE, το ανώτατο επίπεδο.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Όταν μια συσκευή ανακαλυφθεί το σενάριο ελέγχου θα εγχυθεί με τις λεπτομέρειες του αρχείου (ή καταλόγου). Τόσο ο control_linux.sh όσο και ο control_windows.vbs θα κατοικηθούν, ανεξάρτητα από τη διαδρομή του αρχείου. Αν σκέφτεσαι <i>Αλλά η τοποθέτηση μιας διαδρομής Linux σε μια μηχανή των Windows θα σπάσει τα πράγματα!</i>, δεν θα σπάσει, απλά δεν θα λάβετε δεδομένα από αυτό το αρχείο ή καταχώρηση καταλόγου.<br/>Οι αναγραφόμενες λεπτομέρειες θα αποθηκευτούν στο <i>αρχείο</i> πίνακα βάσης δεδομένων και αποθηκεύονται όπως κάθε άλλο χαρακτηριστικό. Λεπτομέρειες αρχείων θα αποθηκευτούν ως οποιοδήποτε άλλο χαρακτηριστικό και θα δημιουργήσουν ειδοποιήσεις εάν κάποιο από τα ακόλουθα χαρακτηριστικά αλλάξει - <i>πλήρες όνομα</i>, <i>χασίς</i>, <i>ινόδη</i>, <i>τελευταία_ τροποποίηση</i>. Ο πίνακας περιέχει ένα system_id, first_seen, last_seen και τρέχουσες στήλες καθώς και τις λεπτομέρειες του αρχείου.<br/>Χαρακτηριστικά που καταγράφονται είναι:<br/><ul><li>Windows - όνομα, μέγεθος, κατάλογος, SHA1 hash (του περιεχομένου του αρχείου), τελευταία αλλαγή, άδειες, ιδιοκτήτης, έκδοση (επιτρέποντας το αρχείο).</li><br/><li>Linux - όνομα, μέγεθος, κατάλογος, SHA1 hash (του περιεχομένου του αρχείου), τελευταία αλλαγή, μετα δεδομένα τελευταία αλλαγή, άδειες, ιδιοκτήτης, ομάδα, inode.</li></ul>Θα δείτε μια ενότητα και στα σενάρια ελέγχου Windows και Linux όπως παρακάτω';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Όταν εκτελείται μια ανακάλυψη, επιλέγεται η σχετική επιλογή ανίχνευσης ανακάλυψης και αυτές οι ρυθμίσεις χρησιμοποιούνται από τον Nmap για τη σάρωση των συσκευών στόχου. Οι επιλογές σάρωσης καθορίζουν ποιες θύρες σάρωσης nmap, πόσο γρήγορα σαρώνουν και αν χρησιμοποιείται για πρώτη φορά το nmap ping για να προσδιοριστεί αν η IP είναι ζωντανή ή όχι.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Όταν εκτελείται μια ανακάλυψη, επιλέγεται η σχετική επιλογή σάρωσης ανακάλυψης και οι ρυθμίσεις αυτές χρησιμοποιούνται από τον Nmap για τη σάρωση των συσκευών προορισμού. Αν δεν επιλεχθεί επιλογή, επιλέγεται και χρησιμοποιείται το προκαθορισμένο αντικείμενο ρυθμίσεων (discovery_default_scan_option). Η Κοινότητα Open-AudIT θα χρησιμοποιήσει τις προεπιλεγμένες επιλογές σύμφωνα με τη διαμόρφωση για όλες τις ανακαλύψεις.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Όταν εκτελείται μια ανακάλυψη υποδικτύου εκτελείται για πρώτη φορά, αν επιλεγεί, μια σάρωση ping Nmap στο εύρος ή τις διευθύνσεις IP. Κάθε συσκευή που ανταποκρίνεται θα σαρωθεί. Εάν δεν ζητηθεί σάρωση ping Nmap, κάθε IP σαρώνεται μεμονωμένα. Ποια λιμάνια; Αυτό καθορίζεται από την';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Κατά το ώντιτινγκ μιας συσκευής Linux μέσω SSH, ορισμένες διανομές Linux δεν επιτρέπουν να περάσουν εντολές sudo χωρίς ένα TTY (που κάνουμε). Για τον πλήρη έλεγχο μιας από αυτές τις διανομές linux είναι καλύτερο να παρέχει τα διαπιστευτήρια χρήστη ρίζα. Εάν δεν παρέχεται ρίζα και το sudo χωρίς TTY δεν είναι δυνατόν, το σενάριο ελέγχου θα εκτελεστεί αλλά δεν θα περιέχει το ποσό των δεδομένων όπως διαφορετικά. Οι επόμενοι έλεγχοι που χρησιμοποιούν το root (ή τρέχουν τοπικά χρησιμοποιώντας το sudo) θα παρέχουν επιπλέον λεπτομέρειες για το σύστημα και θα δημιουργήσουν αρκετές <i>αλλαγές</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Όταν συνδυάζουμε συσκευές, ποιο σύστημα είναι η έγκυρη πηγή πληροφοριών.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Όταν ολοκληρωθεί, κλείστε το παράθυρο εντολής και είστε έτοιμοι!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Κατά τη δημιουργία ενός γραφικού συστατικού, αν επιλέξετε το <i>Προχωρημένα</i> κουμπί θα έχετε τη δυνατότητα να ανεβάσετε το δικό σας προσαρμοσμένο SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Κατά την ενσωμάτωση συσκευών από το εξωτερικό σύστημα, αν η συσκευή δεν υπάρχει στο Open-AudIT θα πρέπει να τη δημιουργήσουμε;';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Κατά την ενσωμάτωση συσκευών από το εξωτερικό σύστημα, εάν η συσκευή έχει ενημερωθεί στο εξωτερικό σύστημα θα πρέπει να την ενημερώσουμε στο Open-AudIT;';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Κατά την έρευνα ενός Discovery, η υποστήριξη θα ζητήσει τα εξαγωγικά αρχεία καταγραφής Discovery. Για να ανακτήσετε αυτά, μεταβείτε στο μενού -> Ανακαλύψεις ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Όταν ταιριάζουμε μια συσκευή με βάση το Linux, προτιμούμε να χρησιμοποιήσουμε το Dbus id συμπυκνωμένο με το όνομα υπολογιστή. Μπορούμε επίσης να χρησιμοποιήσουμε άλλες επιλογές σύμφωνα με τον παρακάτω πίνακα, αλλά μπορούμε να ανακτήσουμε το Dbus ID χωρίς ρίζα. Για να ανακτήσουμε το UUID (από τη μητρική πλακέτα), πρέπει να τρέξουμε dmidecode, ο οποίος απαιτεί ρίζα. Δυστυχώς, όταν κλωνοποιείτε έναν επισκέπτη του ESXi, το Dbus ID δεν αναδημιουργείται - εξ ου και η σύγκρισή μας με το όνομα του υπολογιστή. Υπάρχει ένα καλό άρθρο που συνδέεται εδώ ότι λεπτομέρειες του <i>Γιατί;</i> των ταυτοτήτων υλικού.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Όταν ζητάτε JSON, εξ ορισμού δεν ορίζεται όριο. Όταν ζητάτε οθόνη, το όριο ορίζεται στο 1000 από προεπιλογή. Αυτό μπορεί να αλλάξει στις ρυθμίσεις. Δείτε το <i>_μέγεθος σελίδας</i> Θέση';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Όταν ανακτήσουμε μια εξωτερική συσκευή, πρέπει να την ανακαλύψουμε;';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Κατά την εκτέλεση Open-AudIT στα Windows ο λογαριασμός υπηρεσιών Apache πρέπει να είναι αυτός ενός <i>τακτική</i> ο χρήστης (ή ο Διαχειριστής). Αυτό είναι επειδή το <i>Τοπικό σύστημα</i> Ο λογαριασμός που χρησιμοποιείται συνήθως για τη λειτουργία των Απάτσι δεν έχει πρόσβαση σε πόρους δικτύου. IE - Δεν μπορούμε να χρησιμοποιήσουμε τους Apache όταν τρέχουν ως λογαριασμός τοπικού συστήματος για να αντιγράψουμε το σενάριο ελέγχου σε υπολογιστές Windows.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Όταν οριστεί η επιλογή ρύθμισης, το λαμβάνουμε υπόψη για τις συσκευές για ένα συγκεκριμένο υποσύνολο κανόνων ταιριάσματος όπου το στοιχείο ρύθμισης έχει ενεργοποιηθεί. Οι κανόνες αυτοί είναι:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Όταν οι κανόνες τρέχουν στην ανακάλυψη, τυχόν κανόνες που ταιριάζουν θα εμφανίζονται στο ημερολόγιο ανακάλυψης. Δείτε παρακάτω για παράδειγμα.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Όταν αυτό το σημείο αναφοράς είναι προγραμματισμένο να εκτελεστεί. Παράγωγα από τα σχετικά <code>tasks.type</code> και <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Όταν δημιουργήθηκε αυτό το αρχείο καταγραφής.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Όταν αυτό το στοιχείο ουράς ξεκίνησε την επεξεργασία.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Όταν χρησιμοποιείτε Open-AudIT Professional ή Enterprise, τα widgets είναι διαθέσιμα και προσαρμόσιμα για να εμφανίζονται σε πίνακες.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Όταν μετατρέπουμε μια εσωτερικά επιλεγμένη συσκευή σε ένα αντικείμενο για το εξωτερικό σύστημα, τι θα πρέπει να είναι τα εξωτερικά δεδομένα. EG: ακέραιος, συμβολοσειρά κ.λπ.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Όταν εκτελούμε αυτή τη γραμμή βάσης, θα πρέπει να ελέγξουμε για αντικείμενα σε συσκευές που δεν είναι σε μια πολιτική για αυτή τη γραμμή βάσης.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Όταν λαμβάνουμε μια ανοικτή θύρα, θα πρέπει να προσπαθήσουμε να δοκιμάσουμε για την έκδοση της υπηρεσίας που αυτή τη στιγμή τρέχει πάνω της; Αυτό βοηθά στην επιβεβαίωση των πραγματικών υπηρεσιών λειτουργίας.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Όταν χρησιμοποιείτε Σύννεφα για να ανακαλύψετε τις περιπτώσεις AWS Amazon σας, θα χρειαστείτε δύο διαπιστευτήρια - κλειδί και μυστικό κλειδί. Το κλειδί σου πρέπει να είναι ήδη γνωστό σε σένα και το μυστικό σου κλειδί επίσης. Σημειωτέον είναι ότι δεν μπορείτε να ανακτήσετε το μυστικό κλειδί σας χρησιμοποιώντας το AWS Console που παρέχεται από την Amazon. Εάν το έχετε χάσει, θα πρέπει να δημιουργήσετε ένα νέο.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Όταν χρησιμοποιείτε Clouds για να ανακαλύψετε τις περιπτώσεις Microsoft Azure σας, θα χρειαστείτε τέσσερα διαπιστευτήρια - ταυτότητα συνδρομής, ταυτότητα ενοικιαστών, ταυτότητα πελάτη και μυστικό πελάτη.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Όταν δημιουργείτε μια ανακάλυψη έχετε μια επιλογή για συσκευές_αποστολή_to_org. Αυτό σημαίνει ότι κάθε συσκευή που ανακαλύπτεται για αυτή την ανακάλυψη θα ανατεθεί (έχουν <code>devices.org_id</code> set to) τον επιλεγμένο οργανισμό σας.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Όταν δημιουργείτε μια νέα ανακάλυψη αν κάνετε κλικ στο κουμπί Advanced, έχετε πολλές περισσότερες επιλογές για να αλλάξετε, μία από αυτές είναι ο τύπος της ανακάλυψης. Οι τύποι ήταν πάντα Subnet (συμπεραίνοντας το παραπάνω εύρος, subnet, επιλογές ip) και Active Directory. Όπως και στο v4.1, το Open-AudIT έχει έναν νέο τύπο ανακάλυψης που ονομάζεται Σπόρος.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Όταν ενεργοποιείτε μια ερώτηση για να εκτελεστεί σε ένα πρόγραμμα, το ερώτημα αποστέλλεται με email στην επιλεγμένη διεύθυνση. Πρέπει να έχετε δημιουργήσει email μέσω μενού -> Διαχειριστής -> Enterprise -> Διαμόρφωση email. Έχουμε επίσης ένα <i>test email<i> Κουμπί σε αυτή τη σελίδα. Βάλε τα στοιχεία σου, κράτα τα και μετά δοκίμασέ τα. Θα πρέπει να έχετε ένα πλαίσιο modal που σας ενημερώνει αν είναι επιτυχής ή όχι και προφανώς ένα test email θα πρέπει να φτάσει αν είναι επιτυχής. Μόλις ρυθμίσετε το email σας, το προγραμματισμένο ερώτημα μπορεί να ρυθμιστεί.<br/><br/>Δώστε ένα όνομα, προαιρετική περιγραφή, επιλέξτε <i>Ερώτηση</i> πληκτρολογήστε, επιλέξτε το επιθυμητό ερώτημα, παρέχετε μια διεύθυνση ηλεκτρονικού ταχυδρομείου, επιλέξτε μια μορφή και ορίσετε το πρόγραμμα.<br/><br/>Δώστε μια ώρα (μόνο ώρα, όχι λεπτά μέχρι στιγμής), δώστε στην εργασία ένα όνομα (αυτό δεν είναι το όνομα του πραγματικού προγραμματισμένου ερωτήματος από μόνο του), επιλέξτε ποιες ημέρες θα θέλατε να εκτελέσετε το ερώτημα, επιλέξτε ποιο ερώτημα θα θέλατε να εκτελέσετε, προμηθεύστε μια διεύθυνση ηλεκτρονικού ταχυδρομείου και επιλέξτε μια μορφή ερωτήματος και είστε έτοιμοι.<br/>Οι ερωτήσεις θα σταλούν με ένα σώμα ηλεκτρονικού ταχυδρομείου του ερωτήματος (σε μορφή html) και το ερώτημα που επισυνάπτεται στην αιτούμενη μορφή.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Όταν εισάγετε κείμενο σε έναν από τους τίτλους στήλης, μπορείτε απλά να χρησιμοποιήσετε μια κανονική λέξη. Για παράδειγμα, όταν μπαίνετε <code>computer</code> στο πλαίσιο αναζήτησης πάνω από το <i>Τύπος</i> στήλη, η αναζήτηση θα επιστρέψει όλες τις συσκευές με τον τύπο του υπολογιστή. Ουσιαστικά, Open-Aud Η IT ζητά δεδομένα χρησιμοποιώντας ένα URL όπως <code>devices?devices.type=computer</code>. Τώρα υπάρχει μια σημαντική διαφορά κατά τη χρήση της αναζήτησης των πινάκων δεδομένων, έναντι του προτύπου';

$GLOBALS["lang"]['where'] = 'Πού;';

$GLOBALS["lang"]['Where'] = 'Πού;';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Όπου $x είναι ένας αριθμός. Αυτές οι πολλές καταχωρήσεις LDAP είναι στο DB και έχουν ανακτηθεί.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Πού στην οθόνη Λεπτομέρειες συσκευής θα θέλατε να δείτε αυτό το πεδίο να εμφανίζεται.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Εκεί που είναι το ράφι στη σειρά.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Αν η ευπάθεια επηρεάζει τα συστατικά πέρα από τη δική της χρήση Impact, Διαθεσιμότητα και Εμπιστευτικότητα.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Αν απαιτείται αλληλεπίδραση χρήστη (Κανένας, Παθητικός, Ενεργός).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Σε ποιο λειτουργικό σύστημα εφαρμόζεται αυτό το σημείο αναφοράς.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Ποιες συσκευές πρέπει να δημιουργούν Open-AudIT από το εξωτερικό σύστημα (αν υπάρχουν). Χρησιμοποιώντας όλα, Κανένα ή ένα δεδομένο χαρακτηριστικό.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Ποιο δίκτυο πρέπει να ανακαλύψουμε. Αυτό θα πρέπει να γίνεται με τη μορφή';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Σε ποιο υπο-μενού πρέπει να επιδείξουμε αυτό το ερώτημα.';

$GLOBALS["lang"]['Who made this rack.'] = 'Ποιος έφτιαξε αυτό το ράφι.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Γιατί μόνο Windows Server;';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Γιατί αποκλείουμε αυτή την πολιτική;';

$GLOBALS["lang"]['Wide Area Network'] = 'Δίκτυο ευρείας περιοχής';

$GLOBALS["lang"]['Wide area network'] = 'Δίκτυο ευρείας περιοχής';

$GLOBALS["lang"]['Widget'] = 'Γραφικό συστατικό';

$GLOBALS["lang"]['Widget #'] = 'Γραφικό συστατικό #';

$GLOBALS["lang"]['Widget # '] = 'Γραφικό συστατικό # ';

$GLOBALS["lang"]['Widget Type'] = 'Τύπος συστατικού';

$GLOBALS["lang"]['widgets'] = 'Γραφικά συστατικά';

$GLOBALS["lang"]['Widgets'] = 'Γραφικά συστατικά';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Τα συστατικά έχουν σχεδιαστεί για να χρησιμοποιούνται σε πίνακες. Οι χρήστες των επιχειρήσεων έχουν πλήρη ελευθερία δημιουργίας, ενημέρωσης και διαγραφής γραφικών συστατικών, όπως απαιτείται.';

$GLOBALS["lang"]['width'] = 'Πλάτος';

$GLOBALS["lang"]['Width'] = 'Πλάτος';

$GLOBALS["lang"]['windows'] = 'Παράθυρα';

$GLOBALS["lang"]['Windows'] = 'Παράθυρα';

$GLOBALS["lang"]['Windows Packages'] = 'Πακέτα Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Σενάριο δοκιμής παραθύρων';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Μονάδα εργασίας χρήστη των Windows # 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Μονάδα εργασίας χρήστη των Windows # 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Τα Windows μπορεί επίσης να έχουν εμποδίσει την εκκίνηση της υπηρεσίας. Στην εκκίνηση του στόχου η μικροεφαρμογή ασφαλείας των Windows και η διασφάλιση του εκτελέσιμου WinExeSvc επιτρέπεται να εκτελείται (κάντε κλικ στο Επιτρέπετε στη συσκευή και στη συνέχεια Ξεκινήστε τις Ενέργειες).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Σελίδα Winexe στη Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Το Winexe απαιτεί να ξεκινήσουν και να λειτουργήσουν οι ακόλουθες υπηρεσίες Windows: netlogon και rpc υπηρεσίες προς λειτουργία.<br/><br/>Παρακαλώ συνδεθείτε στη μηχανή στόχο Windows και ελέγξτε τις υπηρεσίες για netlogon και rpc λειτουργούν.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe χρησιμοποιεί το admin$ και RPC (καθαρή εκκίνηση υπηρεσιών) για να εγκαταστήσει και να ξεκινήσει μια απομακρυσμένη υπηρεσία (winexesvc). Αυτή η υπηρεσία αρχικοποιεί ένα όνομα σωλήνα που χρησιμοποιείται για τη μεταφορά εντολών από τον εξυπηρετητή Open-AudIT στον στόχο και την έξοδο με τον αντίστροφο τρόπο. Όταν ολοκληρωθεί, το όνομα σωλήνα κλείνει και το winexesvc περιμένει για περισσότερες συνδέσεις ή απεγκαταστάσεις (ανάλογα με τις επιλογές που δίνονται).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Ασύρματο δίκτυο τοπικής περιοχής';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Με την έκδοση 3.3.0 του Open-AudIT έχουμε εισαγάγει την έννοια ενός Σμήνους. Αυτό το διαισθητικό χάρτες στην ιδέα μιας συστάδας ιστού, συστάδας βάσεων δεδομένων ή συστάδα αρχείων (ή ένας από πολλούς άλλους σκοπούς) σε ένα δεδομένο τύπο (υψηλή διαθεσιμότητα, πλεονασμός, κλιμάκωση, κλπ).<br/><br/>Ανάλογα με τον σκοπό της επιλεγμένης συστάδας, η αναφορά θα είναι ελαφρώς διαφορετική.<br/><br/>Για παράδειγμα, αν δημιουργήσετε ένα σμήνος με σκοπό την εικονικοποίηση, όταν έχετε προσθέσει συσκευές σε αυτό θα δείτε επίσης τις εικονικές μηχανές σε αυτές τις συσκευές.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Με την εισαγωγή της λειτουργίας Clouds, μπορείτε να προμηθεύσετε λεπτομέρειες του cloud σας, Amazon AWS ή Microsoft Azure, και το Open-AudIT θα χρησιμοποιήσει το σχετικό API για να ανακτήσει μια λίστα με τις τοποθεσίες, τα δίκτυα, και τις περιπτώσεις, στη συνέχεια να ανακαλύψετε κάθε μία από αυτές τις περιπτώσεις.';

$GLOBALS["lang"]['wmi_fails'] = 'Αποτυχία Wmi';

$GLOBALS["lang"]['Wmi Fails'] = 'Αποτυχία Wmi';

$GLOBALS["lang"]['wmi_timeout'] = 'Χρονικό όριο Wmi';

$GLOBALS["lang"]['Wmi Timeout'] = 'Χρονικό όριο Wmi';

$GLOBALS["lang"]['workgroup'] = 'Ομάδα εργασίας';

$GLOBALS["lang"]['Workgroup'] = 'Ομάδα εργασίας';

$GLOBALS["lang"]['Working Credentials'] = 'Ένταξη εργασίας';

$GLOBALS["lang"]['Wrap Up'] = 'Τύλιγμα';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Γραμμένο στη γλώσσα σεναρίου του PHP.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Κίτρινο ερώτημα';

$GLOBALS["lang"]['Yemen'] = 'Υεμένη';

$GLOBALS["lang"]['Yes'] = 'Ναι.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Μπορείτε να ορίσετε επιπλέον καταλόγους που θα σαρωθούν ως καταχωρήσεις στη συλλογή εκτελέσιμων. Όταν ορίζεται, ο κατάλογος και όλα τα υποκαταστήματα σαρώνονται για αρχεία που είναι εκτελέσιμα. Μπορείτε επίσης να ορίσετε καταλόγους και αρχεία που πρέπει να αποκλειστούν. Όταν ενεργοποιηθούν, εγχέονται στο σενάριο ελέγχου linux και εκτελούνται όποτε εκτελείται (συνήθως ως μέρος μιας ανακάλυψης). Αν θέλετε αυτά σε ένα σενάριο μπορείτε να αντιγράψετε χειροκίνητα στο στόχο, χρησιμοποιήστε το μενού -> Ανακαλύψτε -> Scripts -> List Scripts και κατεβάστε το σενάριο από εκεί.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Είστε πάντα ελεύθεροι να τροποποιήσετε τα ίδια τα σενάρια ελέγχου για να ταιριάζει στις συγκεκριμένες απαιτήσεις σας. Θα χρειαστεί να (επαν)ενσωματώσετε αυτές τις αλλαγές κάθε φορά που θα αναβαθμίσετε, καθώς θα αντικατασταθούν από τα προεπιλεγμένα σενάρια. Θα πρότεινα την αποθήκευση ενός κύριου αντιγράφου του τροποποιημένου σεναρίου σας, την αναβάθμιση του Open-AudIT, έπειτα την εκτέλεση ενός diff μεταξύ του νέου προεπιλεγμένου σεναρίου και του τροποποιημένου σεναρίου σας και την εφαρμογή των διαφορών. Τα σενάρια ελέγχου είναι ιθαγενή σενάρια (Windows είναι VBScript, όλα τα άλλα είναι Bash). Απλό και εύκολο να τροποποιηθεί - απλά βεβαιωθείτε ότι έχετε ένα αντίγραφο των αλλαγών σας πριν από την αναβάθμιση.';

$GLOBALS["lang"]['You are running version'] = 'Τρέχετε την έκδοση';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Μπορείτε να έχετε πρόσβαση στη συλλογή χρησιμοποιώντας το κανονικό API βασισμένο στο Open-AudIT JSON. Όπως κάθε άλλη συλλογή. Παρακαλώ δείτε.';

$GLOBALS["lang"]['You can also'] = 'Μπορείτε επίσης να';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Μπορείτε επίσης να δείτε στο κάτω μέρος της σελίδας έναν πίνακα που δείχνει τις συσκευές στις οποίες θα εφαρμοστούν οι αλλαγές.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Μπορείτε επίσης να καθορίσετε ιδιότητες χρησιμοποιώντας την παρακάτω μορφή.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Μπορείτε πάντα να εκτελέσετε το Firstwave VM στην εικονική υποδομή σας (ESX, Azure, et al). Το Firstwave VM τρέχει το Debian linux και είναι απαλλαγμένο από ανησυχίες και περιορισμούς αδειοδότησης OS. Ή να εγκαταστήσετε στο δικό σας Linux distro της επιλογής σας. Υποστηρίζουμε το Redhat 9, το Ubuntu 20.04, το 22.04 και το 24.04 καθώς και το Debian 11 και το 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Μπορείτε να εκχωρήσετε συσκευές σε μια τοποθεσία αυτόματα χρησιμοποιώντας';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Μπορείτε να ορίσετε συσκευές χρησιμοποιώντας προσαρμοσμένες';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Μπορείτε να ελέγξετε ένα απομακρυσμένο μηχάνημα χωρίς τη χρήση του πραγματικού λογαριασμού διαχειριστή δημιουργώντας ένα κλειδί μητρώου. Δημιουργήστε το παρακάτω κλειδί σε κάθε μηχάνημα που θα ελεγχθεί και βεβαιωθείτε ότι τα διαπιστευτήρια χρήστη που χρησιμοποιούνται είναι μέλος της ομάδας Διαχειριστών.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Μπορείτε σίγουρα να εκτελέσετε μια ανακάλυψη χωρίς έγκυρα διαπιστευτήρια στις συσκευές μέσα στο δίκτυο, ωστόσο, οι πληροφορίες που ανακτήθηκαν θα είναι ένα πολύ μικρό υποσύνολο του τι Open-AudIT έχει τη δυνατότητα να ανακτήσει <i>με</i> διαπιστευτήρια.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Μπορείτε να δημιουργήσετε μια βασική γραμμή, να την εκτελέσετε σε μια ομάδα συσκευών και να δείτε τα αποτελέσματα, να προσθέσετε προγραμματισμένη εκτέλεση, να προσθέσετε περισσότερους πίνακες για σύγκριση (προς το παρόν μόνο λογισμικό, θύρες netstat και χρήστες είναι ενεργοποιημένοι), στη θέση αρχική επεξεργασία, αρχειοθέτηση των αποτελεσμάτων και πολλά άλλα.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Μπορείτε να δημιουργήσετε ένα σενάριο με όλες τις επιλογές για οποιοδήποτε από τα υπάρχοντα σενάρια ελέγχου - όχι μόνο τα Windows. Τα AIX, ESX, Linux, OSX και Windows καλύπτονται όλα.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Μπορείτε να προσαρμόσετε ολόκληρη την ενσωμάτωση σε ποιο σύστημα (NMIS ή Open-AudIT) είναι η αρχή ανά τομέα βάσης. Υπάρχουν επιλογές για τη δημιουργία ή/και ενημέρωση συσκευών σε Open-AudIT ή NMIS. Πρέπει να τρέξουμε μια ανακάλυψη σε μια δημιουργημένη ή ενημερωμένη συσκευή και πολλά άλλα. Υπάρχουν εξηγήσεις για κάθε αντικείμενο στη δεξιά πλευρά της σελίδας.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Μπορείτε να ορίσετε μια εφαρμογή και να συνδέσετε μια συσκευή με αυτή την εφαρμογή. Μια διάταξη μπορεί να συνδέεται με περισσότερες από μία εφαρμογές. Μια εφαρμογή μπορεί να συνδέεται με περισσότερες από μία συσκευές.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Μπορείτε να επεξεργαστείτε την αξία του πρόσθετου πεδίου για κάθε μεμονωμένη συσκευή στη σελίδα λεπτομερειών της συσκευής. Δείτε την οθόνη λεπτομερειών της συσκευής, ανοίξτε το τμήμα που περιέχει το πεδίο και (αν έχετε';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Μπορείτε να περιορίσετε το Device Seed Discovery να εμπίπτει σε ένα αυστηρό σύνολο παραμέτρων, συμπεριλαμβανομένων: <i>Περιορισμός στο υποδίκτυο</i> και <i>Περιορισμός στο Ιδιωτικό</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Μπορείτε να ορίσετε χειροκίνητα συσκευές χρησιμοποιώντας';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Μπορείτε να παρακάμψετε αυτό παρέχοντας την επιλογή μορφής στο URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Μπορείτε να επιλέξετε μεμονωμένες συσκευές κάνοντας κλικ στα κουτιά ελέγχου τους στη δεξιά πλευρά ή επιλέγοντας όλες τις συσκευές κάνοντας κλικ στο πλαίσιο ελέγχου πάνω δεξιά του πίνακα (κάτω από το κουμπί Επεξεργασία που μοιάζει με μολύβι).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Μπορείτε να επιλέξετε τις συσκευές που θα ενσωματωθούν επιλέγοντας οποιαδήποτε ιδιότητα στον πίνακα του συστήματος (συσκευή) και ταιριάζοντας (δείτε το μενού → Admin → Βάση δεδομένων → Κατάλογος Πίνακες → σύστημα για μια λίστα πεδίων). Ένα χαρακτηριστικό ταιριάζει μόνο με μία τιμή.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Μπορείτε να μετατρέψετε κάθε διακομιστή σε συλλέκτη πηγαίνοντας στο μενού -> Διαχειριστής -> Συλλέκτες -> Κάντε αυτό την εγκατάσταση ενός Συλλέκτη. Θα χρειαστείτε διαπιστευτήρια για να συνδεθείτε στον εξυπηρετητή αυτή η εγκατάσταση θα αναφέρει.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Μπορείτε να δείτε κάνοντας κλικ στο εικονίδιο μπλε προβολή. Μπορείτε επίσης να επεξεργαστείτε ή να διαγράψετε αν έχετε άδειες.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Δεν έχετε εγκατεστημένη την επέκταση PHP MBString. Αυτή η επέκταση είναι απαραίτητη.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Δεν έχετε εγκατεστημένη την επέκταση PHP SNMP. Αυτή η επέκταση συνιστάται ιδιαίτερα.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Μπορεί να θέλετε να αντιγράψετε και να επικολλήσετε αυτό το URL σε ένα email στο προσωπικό σας.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Μπορεί να θέλετε να έχετε το Active Directory ή το OpenLDAP επικυρώσει τους χρήστες σας, αλλά δεν παρέχουν εξουσιοδότηση. Για να το κάνεις αυτό, σιγουρέψου <i>Χρήση για ταυτοποίηση</i> ορίζεται σε Y και <i>Χρήση για ρόλους</i> έχει οριστεί για N. Τα διαπιστευτήρια θα επικυρωθούν από το LDAP, αλλά θα χρειαστεί να έχετε τον χρήστη ήδη δημιουργήσει και αναθέσει Ρόλους στο Open-AudIT. Αυτό επίσης <i>αυτόματα</i> ισχύει για';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Μπορεί να έχετε παρατηρήσει ότι αυτοί οι κανόνες είναι για αντικείμενα που μπορεί να μην είναι παγκοσμίως μοναδικά. Μερικά παραδείγματα:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Πρέπει να διαγράψετε την υπάρχουσα άδειά σας πριν προσθέσετε μια νέα άδεια.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Πρέπει να έχετε τα διαπιστευτήρια της SSH για να εκτελέσετε ένα σημείο αναφοράς. Σήμερα υποστηρίζονται τα ακόλουθα Λειτουργικά Συστήματα: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Σχεδιάζουμε να επεκταθούμε σε αυτά με περαιτέρω κυκλοφορίες.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Θα πρέπει να αντιγράψετε και να επικολλήσετε ολόκληρο το αρχείο στο πλαίσιο κειμένου. Στην παρακάτω περίπτωση, αντιγράψτε ΟΛΑ τα κείμενα.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Δεν πρέπει να συμπεριλάβετε τα πεδία μοντάζ και μοντάζ. Αυτά θα ρυθμιστούν αυτόματα.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Θα πρέπει να αλλάξετε μόνο τη δεύτερη πρόταση του κειμένου, το';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Πρέπει να αντικαταστήσετε την απαιτούμενη στήλη (π.χ. org_id) για το ATTERIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Θα πρέπει να χρησιμοποιήσετε μια γραμμή κεφαλίδας που περιέχει τα ονόματα των στηλών που θέλετε να γεμίσετε, και μετά τις γραμμές δεδομένων σας κάτω από αυτό.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Θα πρέπει να χρησιμοποιείτε μόνο τους πίνακες που περιέχουν χαρακτηριστικά που χρειάζεστε. Συνήθως χρησιμοποιώ μια αριστερή ομάδα. Για παράδειγμα';

$GLOBALS["lang"]['You will need a'] = 'Θα χρειαστείτε ένα';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Θα χρειαστείτε τις θύρες για WMI στο τείχος προστασίας των Windows άνοιξε σε κάθε υπολογιστή Windows στόχο. Για Windows Εξυπηρετητές πυρήνα, βεβαιωθείτε ότι επιτρέπετε τις συνδέσεις τείχους προστασίας σύμφωνα με το';

$GLOBALS["lang"]['You will see a list of'] = 'Θα δείτε μια λίστα με';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Μαθήματα στο YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Το κλειδί AWS EC2 API σας.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Το Google σας Compute διαπιστευτήρια ως JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Το δικό σου Ο υπολογιστής είναι';

$GLOBALS["lang"]['Your Licenses'] = 'Οι Άδειές Σας';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Η ταυτότητα του πελάτη σας Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Το μυστικό πελάτη της Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Το Microsoft Azure ID συνδρομής σας.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Η ταυτότητα του Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your PHP version is'] = 'Η έκδοση PHP σας είναι';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Το SQL σας για να επιλέξετε χαρακτηριστικά που θα γεμίσουν αυτό το ερώτημα.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Το SQL σας για να επιλέξετε συσκευές που θα γεμίσουν αυτή την ομάδα.';

$GLOBALS["lang"]['Your SSH key.'] = 'Το κλειδί σου.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Τα διαπιστευτήριά σας πρόσβασης, σύμφωνα με τα σύννεφα αυτόχθονα API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Τα δεδομένα σου είναι τα δεδομένα σου. Μπορείς να το βγάλεις όποτε θέλεις. Παρέχουμε μάλιστα χρήσιμες εξαγωγές σε CSV, JSON και XML. Και έχουμε ένα JSON API. Και μπορείτε να γράψετε προσαρμοσμένες αναφορές και να έχετε αυτές τις εξόδους σε CSV, XML, και JSON! Και πάλι, είναι τα δεδομένα σου - όχι κανένας άλλος. Μπορείτε να είστε βέβαιοι ότι η ασφάλεια των δεδομένων σας είναι στα χέρια σας.';

$GLOBALS["lang"]['Your database platform is'] = 'Η πλατφόρμα δεδομένων σας είναι';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Η περιγραφή σας για την κατάσταση αυτής της σύνδεσης (παρέχεται, συνταξιοδοτείται, κλπ).';

$GLOBALS["lang"]['Your description of this item.'] = 'Η περιγραφή σας αυτού του αντικειμένου.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Το γενικό σας όνομα για αυτό το κομμάτι του λογισμικού';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Η γενική έκδοση σας για αυτό το κομμάτι του λογισμικού';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Ο χρήστης σας θα πρέπει τώρα να είναι σε θέση να συνδεθείτε κάνοντας κλικ στο <i>Σύνδεση με την Entra</i> κουμπί στη σελίδα logon Open-AudIT. Όπως προαναφέρθηκε, εάν το λογότυπο αποτύχει, παρακαλούμε ελέγξτε το αρχείο καταγραφής και επαληθεύστε τους χρήστες <i>προτιμώμενο όνομα χρήστη</i>.<br/><br/>Και αυτό πρέπει να είναι όλο. Τώρα οι χρήστες σας θα πρέπει να έχουν ένα σύνολο διαπιστευτηρίων λιγότερο για να θυμάστε!<br/><br/>Όπως πάντα, αν έχετε προβλήματα με αυτό το χαρακτηριστικό, παρακαλούμε email';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Ο χρήστης σας θα πρέπει τώρα να είναι σε θέση να συνδεθείτε κάνοντας κλικ στο <i>Σύνδεση με την OKTA</i> κουμπί στη σελίδα logon Open-AudIT. Όπως προαναφέρθηκε, εάν το λογότυπο αποτύχει, παρακαλούμε ελέγξτε το αρχείο καταγραφής και επαληθεύστε τους χρήστες <i>όνομα</i>.<br/><br/>Και αυτό πρέπει να είναι όλο. Τώρα οι χρήστες σας θα πρέπει να έχουν ένα σύνολο διαπιστευτηρίων λιγότερο για να θυμάστε!<br/><br/>Όπως πάντα, αν έχετε προβλήματα με αυτό το χαρακτηριστικό, παρακαλούμε email';

$GLOBALS["lang"]['Your web server is'] = 'Ο διακομιστής ιστού σας είναι';

$GLOBALS["lang"]['Zambia'] = 'Ζάμπια';

$GLOBALS["lang"]['Zimbabwe'] = 'Ζιμπάμπουε';

$GLOBALS["lang"]['a String'] = 'Μια χορδή';

$GLOBALS["lang"]['active'] = 'ενεργό';

$GLOBALS["lang"]['active directory'] = 'ενεργός κατάλογος';

$GLOBALS["lang"]['active/active'] = 'ενεργό/ενεργό';

$GLOBALS["lang"]['active/passive'] = 'ενεργό/παθητικό';

$GLOBALS["lang"]['advertisement'] = 'διαφήμιση';

$GLOBALS["lang"]['alert'] = 'Συναγερμός';

$GLOBALS["lang"]['all'] = 'όλα';

$GLOBALS["lang"]['allocated'] = 'κατανεμημένη';

$GLOBALS["lang"]['amazon'] = 'αμαζόνη';

$GLOBALS["lang"]['an Integer'] = 'Ακέραιος';

$GLOBALS["lang"]['and'] = 'και';

$GLOBALS["lang"]['and / or'] = 'και / ή';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'και θα δημιουργηθεί ένα εισιτήριο υποστήριξης και θα αναληφθεί δράση.';

$GLOBALS["lang"]['and another'] = 'και ένα άλλο';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'και να κατεβάσετε την τελευταία έκδοση αυτο-εγκαταστάτη. Ίσως χρειαστεί να μετακινηθείτε προς τα κάτω στη σελίδα για να τη βρείτε.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'και πηγαίνετε σε Εφαρμογές -> Enterprise Εφαρμογές (μακρά αριστερά μενού), στη συνέχεια, κάντε κλικ <i>Νέα αίτηση</i>.';

$GLOBALS["lang"]['and its current time is'] = 'και ο τρέχων χρόνος του';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'και ψάχνει για εγγύηση λήξης πριν από σήμερα.';

$GLOBALS["lang"]['and review what is possible.'] = 'και να επανεξετάσει ό, τι είναι δυνατόν.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'και το Sign-out ανακατευθύνει URI είναι';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'και οι τελικές γραμμές πιθανότατα θα έχουν το μεγαλύτερο ενδιαφέρον. Αυτές οι γραμμές θα σας δώσουν το ακριβές σημείο στο οποίο απέτυχε η σύνδεση.';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'αίτηση';

$GLOBALS["lang"]['approved'] = 'εγκεκριμένη';

$GLOBALS["lang"]['are required.'] = 'απαιτούνται.';

$GLOBALS["lang"]['are used.'] = 'χρησιμοποιούνται.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'ως συσκευή που ανταποκρίνεται σε αυτή τη θύρα.<br/>Αυτό έχει προκαλέσει ορισμένα ζητήματα πελατών όπου τα τείχη προστασίας ανταποκρίνονται για λογαριασμό μιας μη υπάρχουσας συσκευής, και ως εκ τούτου προκαλούν ψευδή θετική ανίχνευση συσκευών. Τώρα έχουμε αυτό το χαρακτηριστικό διαθέσιμο για να ορίσουμε ανά σάρωση.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'ως σημείο αναφοράς και φίλτρα όλων των εικονικών μηχανών μέσω ελέγχου του συστήματος. Σειριακό πεδίο για VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'υποθέτοντας ότι λειτουργεί και ο πελάτης κατοικείται DNS';

$GLOBALS["lang"]['attribute'] = 'χαρακτηριστικό';

$GLOBALS["lang"]['auto'] = 'αυτόματη';

$GLOBALS["lang"]['backup'] = 'αντίγραφο ασφαλείας';

$GLOBALS["lang"]['banned'] = 'απαγορεύεται';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['blue'] = 'μπλε';

$GLOBALS["lang"]['bottom'] = 'κάτω';

$GLOBALS["lang"]['building'] = 'κτίριο';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'μπορεί να χρησιμοποιηθεί για την ταυτοποίηση του χρήστη (είναι το όνομα χρήστη και ο κωδικός πρόσβασης σωστός) καθώς και την εξουσιοδότηση του χρήστη (ποιοι ρόλοι και οργανισμοί έχει ένας χρήστης).<br/><br/>Εάν ένας χρήστης δεν είναι στη ρυθμισμένη LDAP αλλά είναι στο Open-AudIT (π.χ.: το <i>διαχειριστής</i> user), το Open-AudIT θα επιστρέψει στη χρήση του για την ταυτοποίηση και την έγκριση.<br/><br/>Ανοιχτή Οδό Η IT χρησιμοποιεί συγκεκριμένες ομάδες LDAP για ρόλους και οργανισμούς. Ένας χρήστης πρέπει να είναι άμεσο μέλος αυτών των ομάδων προκειμένου το Open-AudIT να καθορίσει την πρόσβαση των χρηστών.<br/><br/>Όταν ρυθμιστεί σωστά, η χρήση LDAP μπορεί να αφαιρέσει εντελώς την ανάγκη δημιουργίας χρηστών στο Open-AudIT. Απλά ρυθμίστε το Open-AudIT για να χρησιμοποιήσετε το LDAP τόσο για ταυτοποίηση όσο και για εξουσιοδότηση. Εάν ο χρήστης δεν υπάρχει στο Open-AudIT αλλά υπάρχει στο LDAP και τα διαπιστευτήριά τους είναι σωστά και είναι μέλος των απαιτούμενων ομάδων Το Open-AudIT θα δημιουργήσει τον λογαριασμό χρήστη αυτόματα.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'μπορεί τώρα να ανακτήσει λεπτομέρειες σχετικά με ένα αρχείο ή κατάλογο των αρχείων και να παρακολουθεί αυτά τα αρχεία για τις αλλαγές σύμφωνα με άλλες ιδιότητες στη βάση δεδομένων Open-AudIT. Αυτή η λειτουργία λειτουργεί έξω από το πλαίσιο για τους εξυπηρετητές Linux Open-AudIT, αλλά χρειάζεται μια αλλαγή στο όνομα λογαριασμού υπηρεσίας κάτω από έναν εξυπηρετητή Open-AudIT Windows. Υποστηριγμένοι πελάτες είναι τα Windows και το Linux.';

$GLOBALS["lang"]['changed'] = 'αλλαγμένο';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'Επιλέχθηκε. Από εκεί αν ανιχνευθεί μια θύρα για WMI, SSH ή SNMP που ανταποκρίνεται στη συσκευή τίθεται περαιτέρω υπό αμφισβήτηση χρησιμοποιώντας ';

$GLOBALS["lang"]['cloud'] = 'νέφος';

$GLOBALS["lang"]['code'] = 'κωδικός';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'συλλογές και σελίδες λεπτομερειών είναι ένα εικονίδιο για να εκτελέσει.';

$GLOBALS["lang"]['collector'] = 'συλλέκτης';

$GLOBALS["lang"]['collectors'] = 'συλλέκτες';

$GLOBALS["lang"]['column'] = 'στήλη';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'στήλη θα περιέχει είτε <i>y</i> ή <i>n</i>. Αυτό δείχνει εάν αυτή η γραμμή είναι παρούσα στη συσκευή. Για παράδειγμα, το λογισμικό μπορεί να εγκατασταθεί (που θα οδηγήσει σε <i>λογισμικό.τρέχων = y</i>) αλλά σε μεταγενέστερο έλεγχο δεν μπορεί να εντοπιστεί. Το Open-AudIT θα αλλάξει στη συνέχεια αυτή την τρέχουσα ιδιότητα γραμμών σε <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'στήλη. Η';

$GLOBALS["lang"]['compute'] = 'υπολογισμός';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'κονσόλα';

$GLOBALS["lang"]['contains'] = 'περιέχει';

$GLOBALS["lang"]['create'] = 'δημιουργία';

$GLOBALS["lang"]['created'] = 'δημιουργήθηκε';

$GLOBALS["lang"]['credentials'] = 'διαπιστευτήρια';

$GLOBALS["lang"]['critical'] = 'κρίσιμη';

$GLOBALS["lang"]['cve'] = 'ΚΕΦ';

$GLOBALS["lang"]['database'] = 'βάση δεδομένων';

$GLOBALS["lang"]['debug'] = 'αποσφαλμάτωση';

$GLOBALS["lang"]['delegated'] = 'εξουσιοδότηση';

$GLOBALS["lang"]['delete'] = 'διαγραφή';

$GLOBALS["lang"]['deleted'] = 'διαγράφεται';

$GLOBALS["lang"]['denied'] = 'απορρίπτεται';

$GLOBALS["lang"]['details'] = 'λεπτομέρειες';

$GLOBALS["lang"]['devices'] = 'συσκευές';

$GLOBALS["lang"]['digitalocean'] = 'διπολική';

$GLOBALS["lang"]['discoveries'] = 'ανακαλύψεις';

$GLOBALS["lang"]['documentation for further details.'] = 'τεκμηρίωση για περαιτέρω λεπτομέρειες.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'κάνει <strong>όχι</strong> παρέχει εκθέσεις ευπάθειας για τα ακόλουθα:';

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

$GLOBALS["lang"]['first'] = 'πρώτη';

$GLOBALS["lang"]['fixed'] = 'σταθερό';

$GLOBALS["lang"]['floor'] = 'δάπεδο';

$GLOBALS["lang"]['for'] = 'για';

$GLOBALS["lang"]['for authentication'] = 'για ταυτοποίηση';

$GLOBALS["lang"]['for this information.'] = 'για τις πληροφορίες αυτές.';

$GLOBALS["lang"]['from Audit Script Result'] = 'Αποτέλεσμα σεναρίου ελέγχου';

$GLOBALS["lang"]['from NMIS'] = 'από NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'από τη διεύθυνση LocalHost (Χρησιμοποιώντας LRPC) που εκτελείται στο δοχείο εφαρμογής';

$GLOBALS["lang"]['front'] = 'εμπρός';

$GLOBALS["lang"]['front-left'] = 'εμπρόσθια-αριστερά';

$GLOBALS["lang"]['front-right'] = 'Μπροστινή δεξιά';

$GLOBALS["lang"]['github'] = 'γιθούβη';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'μεγαλύτερο ή ίσο';

$GLOBALS["lang"]['greater than'] = 'μεγαλύτερη από';

$GLOBALS["lang"]['group'] = 'ομάδα';

$GLOBALS["lang"]['has not been set'] = 'δεν έχει οριστεί';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'έχουν ένα λειτουργικό αντίστροφο DNS resolvable IP στο στόχο Windows PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'έχουν την ικανότητα να εκτελεστούν. Στο';

$GLOBALS["lang"]['head'] = 'κεφαλή';

$GLOBALS["lang"]['here'] = 'Εδώ.';

$GLOBALS["lang"]['high availability'] = 'υψηλή διαθεσιμότητα';

$GLOBALS["lang"]['howto'] = 'Πώς να';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'αν κλωνοποιήσετε μια εικονική μηχανή Linux, εκτός αν το αναγεννήσετε χειροκίνητα (και κατά την εμπειρία μου, οι άνθρωποι δεν το κάνουν) θα παραμείνει το ίδιο.';

$GLOBALS["lang"]['ignored'] = 'αγνοείται';

$GLOBALS["lang"]['import the example device data'] = 'εισαγωγή των δεδομένων της συσκευής παράδειγμα';

$GLOBALS["lang"]['in'] = 'μέσα';

$GLOBALS["lang"]['in Enterprise.'] = 'στο Εντερπράιζ.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'στις εισροές μπορούν να έχουν τις ακόλουθες τιμές.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'στο Outputs μπορούν να έχουν τις ακόλουθες τιμές.';

$GLOBALS["lang"]['inactive'] = 'ανενεργό';

$GLOBALS["lang"]['incomplete'] = 'ατελής';

$GLOBALS["lang"]['info'] = 'Πληροφορίες';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'Ο εγκαταστάτης θα δοκιμάσει για την παρουσία του Nmap στις τυπικές θέσεις εγκατάστασης του';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, κείμενο, bool (y/n), κ.λπ.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'είναι αμερικανικό πρότυπο που διατηρείται από το Εθνικό Ινστιτούτο Προτύπων και Τεχνολογίας';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'είναι ένα διεθνές πρότυπο για τη διαχείριση της ασφάλειας των πληροφοριών. Παρέχει ένα πλαίσιο για τη δημιουργία, εφαρμογή, διατήρηση και συνεχή βελτίωση ενός Συστήματος Διαχείρισης Ασφάλειας Πληροφοριών (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'βασίζεται σε';

$GLOBALS["lang"]['is licensed to'] = 'έχει άδεια για';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'είναι το επόμενο στη λίστα και το Open-AudIT μπορεί να χρησιμοποιήσει τον κωδικό πρόσβασης και την ταυτοποίηση κλειδιού. Το Open-AudIT μπορεί επίσης να χρησιμοποιήσει έναν ενεργοποιημένο χρήστη sudo σε αντίθεση με τη χρήση ρίζας άμεσα (αν και μπορεί επίσης να χρησιμοποιήσει ρίζα). Για καλύτερα αποτελέσματα, ο χρήστης root ή ένας ενεργοποιημένος χρήστης sudo θα πρέπει να χρησιμοποιείται (δείτε Auditing Linux χωρίς root και Target Client Configuration on the wiki). Οι συσκευές των Windows μπορούν επίσης να τρέξουν ssh, ωστόσο αν το Open-AudIT ανιχνεύσει αυτό θα σταματήσει τα ερωτήματα SSH και αντ \'αυτού να χρησιμοποιήσετε WMI (υποθέτοντας τα διαπιστευτήρια WMI που λειτουργούν).';

$GLOBALS["lang"]['is the link to the'] = 'είναι η σύνδεση με το';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'στοιχείο για την προβολή των συγκεκριμένων πινάκων και των στηλών τους. Αυτό θα σας δώσει τη δυνατότητα να βρείτε ακριβώς αυτό που χρειάζεστε, αντί να κάνετε τράτα μέσω της κονσόλας MySQL του σεναρίου δημιουργίας σχήματος.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'κλειδί που απαιτείται για την ανάκτηση Lat / long και χάρτη επίδειξης. Βλέπεις;';

$GLOBALS["lang"]['left'] = 'αριστερά';

$GLOBALS["lang"]['less or equals'] = 'λιγότερο ή ίσο';

$GLOBALS["lang"]['less than'] = 'λιγότερο από';

$GLOBALS["lang"]['license'] = 'άδεια';

$GLOBALS["lang"]['licenses'] = 'Άδειες';

$GLOBALS["lang"]['like'] = 'Όπως';

$GLOBALS["lang"]['line'] = 'γραμμή';

$GLOBALS["lang"]['list'] = 'λίστα';

$GLOBALS["lang"]['list View, using the Create button'] = 'προβολή λίστας, χρησιμοποιώντας το κουμπί Δημιουργία';

$GLOBALS["lang"]['load balancing'] = 'εξισορρόπηση φορτίου';

$GLOBALS["lang"]['location'] = 'τοποθεσία';

$GLOBALS["lang"]['locations'] = 'τοποθεσίες';

$GLOBALS["lang"]['managed'] = 'διαχείριση';

$GLOBALS["lang"]['methods'] = 'μέθοδοι';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'Σημείο προσάρτησης';

$GLOBALS["lang"]['must'] = 'πρέπει';

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

$GLOBALS["lang"]['on devices where'] = 'σε συσκευές όπου';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'βελτιστοποιημένο';

$GLOBALS["lang"]['optionally '] = 'προαιρετικά ';

$GLOBALS["lang"]['or'] = 'ή';

$GLOBALS["lang"]['or the GitHub page at'] = 'ή τη σελίδα GitHub στο';

$GLOBALS["lang"]['other'] = 'Άλλα';

$GLOBALS["lang"]['package'] = 'συσκευασία';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'Σελίδα. Εξαγωγή εξυπηρετητή LDAP από το μενού -> Διαχειριστής -> Διακομιστές LDAP -> Λεπτομέρειες για JSON και αποθήκευση και περιλαμβάνουν αυτά τα δεδομένα, καθώς και.';

$GLOBALS["lang"]['partition'] = 'κατάτμηση';

$GLOBALS["lang"]['pass'] = 'Πάσο';

$GLOBALS["lang"]['pending'] = 'εκκρεμεί';

$GLOBALS["lang"]['performance'] = 'απόδοση';

$GLOBALS["lang"]['performed'] = 'που εκτελέστηκαν';

$GLOBALS["lang"]['permission'] = 'άδεια';

$GLOBALS["lang"]['permissions required per endpoint'] = 'Απαιτούμενες άδειες ανά τελικό σημείο';

$GLOBALS["lang"]['pie'] = 'πίτα';

$GLOBALS["lang"]['planning'] = 'σχεδιασμός';

$GLOBALS["lang"]['predictable'] = 'προβλέψιμο';

$GLOBALS["lang"]['query'] = 'Ερώτηση';

$GLOBALS["lang"]['rear'] = 'πίσω';

$GLOBALS["lang"]['rear-left'] = 'πίσω-αριστερά';

$GLOBALS["lang"]['rear-right'] = 'πίσω δεξιά';

$GLOBALS["lang"]['regex'] = 'regγκέξ';

$GLOBALS["lang"]['release'] = 'απελευθέρωση';

$GLOBALS["lang"]['removed from display, but has been set'] = 'έχει αφαιρεθεί από την οθόνη, αλλά έχει οριστεί';

$GLOBALS["lang"]['reserved'] = 'δεσμευμένη';

$GLOBALS["lang"]['right'] = 'δεξιά';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'δικαιώματα) μπορείτε να κάνετε κλικ στην αξία πεδίου για να την επεξεργαστείτε.';

$GLOBALS["lang"]['role'] = 'ρόλος';

$GLOBALS["lang"]['room'] = 'δωμάτιο';

$GLOBALS["lang"]['row'] = 'γραμμή';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'η υπηρεσία απέτυχε να ξεκινήσει λόγω του ακόλουθου σφάλματος';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Έτσι Open-AudIT ξέρει να περιορίσει το ερώτημά σας στα κατάλληλα Orgs.';

$GLOBALS["lang"]['stand-alone'] = 'αυτόνομη';

$GLOBALS["lang"]['standard'] = 'πρότυπο';

$GLOBALS["lang"]['starts with'] = 'ξεκινά με';

$GLOBALS["lang"]['storage'] = 'αποθήκευση';

$GLOBALS["lang"]['subnet'] = 'υποδίκτυο';

$GLOBALS["lang"]['table'] = 'τραπέζι';

$GLOBALS["lang"]['table and insert the original rows.'] = 'πίνακα και εισάγετε τις αρχικές σειρές.';

$GLOBALS["lang"]['team'] = 'ομάδα';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'μήνυμα. Το πρώτο είναι ο δείκτης συστοιχίας και πρέπει να μείνει ως έχει. Ο δείκτης χρησιμοποιείται στα πρότυπα για την αναζήτηση του μεταφρασμένου κειμένου.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'Στη συνέχεια, κάντε κλικ στο κουμπί λεπτομέρειες για το τραπέζι.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'Στη συνέχεια, κάντε κλικ στο κουμπί λεπτομέρειες για το τραπέζι. Οι λεπτομέρειες της συσκευής αποθηκεύονται στο';

$GLOBALS["lang"]['timestamp'] = 'χρονοσφραγίδα';

$GLOBALS["lang"]['to'] = 'προς';

$GLOBALS["lang"]['to create an item of this type'] = 'για τη δημιουργία ενός αντικειμένου αυτού του τύπου';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'στο URL, θα πάρετε την πλήρη καταχώρηση της βάσης δεδομένων, συμπεριλαμβανομένων όλων των πινάκων συστατικών, μιας δεδομένης συσκευής.';

$GLOBALS["lang"]['to the user'] = 'στον χρήστη';

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

$GLOBALS["lang"]['true or false (in JSON context)'] = 'αληθές ή ψευδές (στο πλαίσιο JSON)';

$GLOBALS["lang"]['unallocated'] = 'μη διαχωρισμένο';

$GLOBALS["lang"]['unauthorised'] = 'μη εξουσιοδοτημένη';

$GLOBALS["lang"]['unchanged'] = 'αμετάβλητο';

$GLOBALS["lang"]['unknown'] = 'άγνωστο';

$GLOBALS["lang"]['unmanaged'] = 'μη επανδρωμένο';

$GLOBALS["lang"]['unused'] = 'αχρησιμοποίητα';

$GLOBALS["lang"]['update'] = 'ενημέρωση';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'χρησιμοποιεί τα δεδομένα που συλλέγονται από τις συσκευές σας και ταιριάζει με το λογισμικό που έχει εγκατασταθεί με την τιμή που παρέχεται, μετράει τους αγώνες υπολογίζει πόσες άδειες έχουν χρησιμοποιηθεί και πόσες έχουν απομείνει. Επιτρέπει τη χρήση μπαλαντέρ στο <i>ταίριασμα συμβολοσειράς</i> πεδίο που ταιριάζει με το λογισμικό. χαρακτηριστικό όνομα.';

$GLOBALS["lang"]['using the main menu items.'] = 'χρησιμοποιώντας τα κύρια στοιχεία του μενού.';

$GLOBALS["lang"]['valid'] = 'έγκυρο';

$GLOBALS["lang"]['version'] = 'έκδοση';

$GLOBALS["lang"]['virtualisation'] = 'εικονικοποίηση';

$GLOBALS["lang"]['warning'] = 'προειδοποίηση';

$GLOBALS["lang"]['web'] = 'Ιστός';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'με άδεια τοπικής και απομακρυσμένης πρόσβασης.';

$GLOBALS["lang"]['with devices::update permission.'] = 'με συσκευές::ενημερωμένη άδεια.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'με το Sign-On Redirect URI';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'με την πρόθεση να παρέχει απλή και διαισθητική πρόσβαση κατά τρόπο οικείο στους προγραμματιστές. Εκτός από αυτό το API, το web interface θα χρησιμοποιήσει την ίδια μορφή αίτησης και θα παρέχει κάποιες πρόσθετες ενέργειες (π.χ.: φόρμες HTML για τη δημιουργία αντικειμένων).';

$GLOBALS["lang"]['yes'] = 'Ναι';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'δεν χρειάζεστε άδεια HighCharts για να χρησιμοποιήσετε τα προϊόντα Firstwave. Άδεια';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'θα εκχωρήσετε οποιεσδήποτε συσκευές βρέθηκαν σε αυτό το Org ή τοποθεσία.';

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

