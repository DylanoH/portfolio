<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php session_start(); ?>
<div class="assignmentPage">
  <h1><?php echo e($page['body']); ?></h1>
<?php switch ($slug): ?>
<?php case "ded": ?> <!-- DED -->

  <div class="fadeOnLoad dedpage">
    <a href="https://github.com/DylanoH/portfolio" target="_blank" class="fa fa-github fa-1x"> <span>Link naar GitHub repo.</span></a>
    <div class="sprint1">

      <h2>Sprint 1</h2>
      <p>
        Ik kom dit vak binnen met geen enkele PHP-voorkennis. Wel heb ik al enkele Javascript en
        JQuery kennis. PHP was wel iets wat ik nog graag wou leren, dus dit komt goed uit omdat
        dit nu ook moet. Om PHP te leren heb ik een de SoloLearn PHP-cursus afgerond om de basis
        te leren en nu volg ik een cursus op Udemy. Deze cursus gaat ook over de basis maar geeft
        je kleine projecten om de kennis daadwerkelijk in de praktijk te gebruiken.
      </p>
      <p>
        Ik heb een contactformulier opgezet met een PHP en Javascript validatie. Als alles correct
        is ingevuld wordt de mail verstuurd.
      </p>
      <p>
        Ik had best wel moeite met het verzinnen van een ontwerp voor mijn portfolio pagina.
        Ik heb erg veel inspiratie websites bekeken en verschillende schetsen gemaakt. Ik heb
        uiteindelijk besloten om een aantal elementen die ik wilde te combineren in één. Een
        belangrijk element dat ik er graag bij wilde is een kleine mini game als navigatie bij
        de pagina over mijzelf. Dit wil ik omdat games een belangrijk element van mezelf sinds ik
        dat zelf graag doe en ook een opleiding heb afgerond als Game Developer.
      </p>
      <p>
        Na de schetsen ben ik begonnen het ontwerp te maken in Adobe XD.
      </p>
      <p><b>Iteratie 1: schets</b></p>
      <img src="<?php echo BASE_URL ?>/resources/uploads/schets1.png" alt="">
      <img src="<?php echo BASE_URL ?>/resources/uploads/schets2.png" alt="">
      <img src="<?php echo BASE_URL ?>/resources/uploads/schets3.png" alt="">
      <p><b>Feedback / Reflectie:</b></p>
      <p>
        Ik heb het concept laten zien aan de leraar en hij was er erg tevreden mee. Als tip over
        de mini game kreeg ik mee om een eerst heel simpele navigatie op te zetten, daarna mooi
        te maken en daarna pas echt interactief te maken. Ook leek het hem een nog leuker idee om
        in plaats van statische images op de landingspagina een filmpje te gebruiken zodat ik als
        wijzer niet zo statisch ben.
      </p>
      <p><b>Iteratie 2: Adobe XD</b></p>
      <img src="<?php echo BASE_URL ?>/resources/uploads/xd1.png" alt="" class="xd">
      <p><b>Feedback / Reflectie:</b></p>
        Ik heb een tweede iteratie gemaakt van de schetsen die ik heb gemaakt. Ik ben er zelf nog
        steeds niet echt tevreden mee. Ik “voel” het design nog niet echt.

        Feedback
        Als tip heb ik gekregen om echt te kijken naar inspiratie sites voor onderdelen die ik
        tof vind, en die na te maken. Er is een grote kans dat dan ook goed uitziet bij mij.
      </p>
      <a href="<?php echo BASE_URL ?>/process/sprint1" target="_blank" class="fa fa-link"> <span>Sprint 1</span></a>
    </div>
    <hr>
    <div class="sprint2">
      <h2>Sprint 2</h2>
      <p>Ik heb mij in de tweede sprint vooral beziggehouden met het volgen van een tutorial en
        het opbouwen van een CMS systeem. Deze tutorial heb ik succesvol afgerond en heb hier veel van geleerd.
        Ik zal veel aan de tutorial hebben voor het opbouwen van mijn eigen portfolio.
      </p>
      <p>
        Ik vond dit eigenlijk best lastig, vooral door de weinige PHP ervaring dat ik heb. Ik heb
        veel geleerd van de tutorial en zal hier veel van kunnen gebruiken. Graag wil ik een nieuwe
        CMS starten met zo min mogelijk hulp van de tutorial om te zorgen dat ik het wel echt
        zelf kan. Ik zou zelf zowiezo een aantal code gerelateerde dingen anders doen dan de
        tutorial.
      </p>
      <a href="<?php echo BASE_URL ?>/process/sprint2" target="_blank" class="fa fa-link"> <span>Sprint 2</span></a>
    </div>
    <hr>
    <div class="sprint3">
      <h2>Sprint 3</h2>
      <p>Ik heb me in de derde sprint vooral bezig gehouden met de back-end van het portfolio. Deze is compleet klaar
         op een paar kleine details die beter of anders kunnen. De front-end heb ik nog niet veel mee gedaan, maar ik vind
         het belangrijker dat de back-end volledig werkt. Ik zie het alsof de fundering nu goed staat. Hierop is makkelijk
         bovenop te bouwen.</p>
      <a href="<?php echo BASE_URL ?>/process/sprint3" target="_blank" class="fa fa-link"> <span>Sprint 3</span></a>
    </div>
    <hr>
    <div class="sprint4">
      <h2>Sprint 4</h2>
      <p>Deze sprint heb ik me vooral beziggehouden met image en file upload. Het heeft me even geduurd om dit te begrijpen.
         Ik weet nu niet echt waarom ik hier zo veel moeite mee had. Nu ik hierop terugkijk valt t wel mee en lijkt het vrij simpel.</p>
      <p>Verder heb ik me deze sprint beziggehouden met een nieuwe huisstijl, een paar kleine aanpassingen in de back-end en begonnen
         aan het opbouwen van de front-end. Ik heb het huisstijl omgegooid van een donkere stijl naar een simplistische witte stijl.
         Dit heb ik gedaan omdat ik deze stijl ergens anders zag en ik vond het zelf erg prettig. Voor het eerst begon ik het design
         ook zelf goed te vinden.
      </p>
      <a href="<?php echo BASE_URL ?>/process/sprint4" target="_blank" class="fa fa-link"> <span>Sprint 4</span></a>
    </div>
    <hr>
    <div class="sprint5">
      <h2>Sprint 5</h2>
      <p>Deze sprint zijn er de meeste aanpassingen geweest aan het portfolio. Ik heb hier een login systeem gemaakt, styling gedaan voor
         vrijwel iedere pagina, een navigatie gemaakt, veel knoppen en icoontjes toegevoegd, alle content toegevoegd, javascript toegevoegd
         en delen van mijn code opgeschoond.
      </p>
      <p>
        Ik voelde me inmiddels vrij comfortabel met PHP en heb ook daadwerkelijk het gevoel alsof ik hier producten mee zou kunnen maken.
        Javascript heb ik niet heel erg veel gedaan dit semester. Wel heb ik er een aantal animaties mee gemaakt.
      </p>
      <a href="<?php echo BASE_URL ?>" target="_blank" class="fa fa-link"> <span>Sprint 5</span></a>
    </div>
    <div class="sprint5">
      <h2>Nieuwe doelen</h2>
      <p><b>PHP</b></p>
      <p>Ik wil iets comfortabeler zijn met PHP voodat ik een framework als CodeIgnitor of Laravel ga proberen. Wel wil hier al vrij snel
         mee beginnen, omdat dit soort frameworks erg veel worden gebruikt binnen de industrie, en ze bepaalde dingen makkelijker maken, zoals queries uitvoeren.
       </p>
       <p><b>Javascript</b></p>
       <p>Ik wil iets meer oefenen met JavaScript om hier beter in te worden. Mijn probleem met JavaScript op moment is nog steeds wel dat ik vaak niet
          weet wat ik er nou mee wil doen. Verder wil ik letten op ES6 en hoger te gaan gebruiken zodat ik bij blijf met de huidige versies.
        </p>
       <p><b>SCSS</b></p>
       <p>Ik gebruik al een tijdje comfortabel SCSS als extensie van CSS, maar ik doe er ook nog heel veel fout mee of gebruik het niet optimaal. 
          Ik wil strenger letten op dat ik niet val in de nesting trap, omdat dit zorgt voor te specifieke selectors. Ook wil ik gebruik maken van Mixins(functies) en
          condities.
       </p>
       <p><b>CSS Grid</b></p>
       <p>
         Ik wil al een tijdje CSS Grid leren, maar heb hier nog niet veel mee gedaan. CSS Grid is extreem krachtig in het positioneren en het maken van (responsive)layouts.
         Ik heb nu nog vrijwel niet gekeken naar het resonsive maken van een website, maar ik weet dat grid er erg mee zou helpen.
       </p>
    </div>
    <hr>
    <div class="codes">
      <h2>Code snippits</h2>
      <div class="code">
        <h3>Login</h3>
        <img src="<?php echo BASE_URL ?>/resources/uploads/logincode.png" class="codesnippit" alt="">
        <p>Hier is te zien hoe ik mijn login script heb gemaakt.</p>
        <p>Als eerste checked het script of het form is gesubmit met een "POST" method. Als dit gedaan is gaat het script verder.</p>
        <p>Het ingevulde username en wachtwoord wordt opgeslagen in een variable.</p>
        <p>Nu wordt er een database query uitgevoerd die het ID selecteerd van alle users waar de username en wachtwoord overeen komen met de ingevulde username en wachtwoord</p>
        <p>Daarna worden de rijen geteld en opgeslagen met een true of false of er een rij is of niet.</p>
        <p>Nu komt er een check die checked of het true of false is. Als het true is wordt er een session variable aangemaakt met de user. Als het false is komt er een error message.</p>
        <p>Nu kan er overal waar ik zou willen een session gestart kunnen worden en checken of er een gebruiker is ingelogd of niet.</p>
      </div>
      <div class="clearfix"></div>
      <div class="code">
        <h3>Delete</h3>
        <img src="<?php echo BASE_URL ?>/resources/uploads/delete.png" class="codesnippit" alt="">
        <p>Dit is het klein scriptje om een opdracht te verwijderen uit de database.</p>
        <p>Als er op een knop wordt geklikt wordt er een id meegegeven in de URL. Als eerste wordt er gechecked of er ook daadwerkelijk een ID is meegegeven.</p>
        <p>Als dit zo is wordt er een query uitgevoerd die een hele rij verwijderd met dat ID.</p>

      </div>
      <div class="clearfix"></div>
      <div class="code">
        <h3>Edit</h3>
        <img src="<?php echo BASE_URL ?>/resources/uploads/edit1.png" class="codesnippit" alt="">
        <img src="<?php echo BASE_URL ?>/resources/uploads/edit2.png" class="codesnippit" alt="">
        <p>Het edit script is vooral een uitgebreide versie van het toevoegen van een pagina. In de html zit er vooral het verschil dat er text uit de database gehaald wordt en er neer zet.</p>
        <p>Als de pagina niet leeg is worden er als eerste variablen gemaakt voor de netheid.</p>
        <p>Als de global variable Edit bestaat wordt te file en image upload voorbereid. Hiervoor worden een aantal variablen opgezet. Deze zijn voor de naam, map locatie en file types te bepalen. </p>
        <p>Dan wordt er gechecked of the file types hetzelfde zijn als eerder vastgesteld en dan kan de pagina updaten.</p>
        <p>De update query zorgt ervoor dat de database wordt geupdate door de nieuwe inhoud die door de gebruiker is geupdate.</p>
        <p>Nadat de update query is uitgevoerd wordt er een true of false opgeslagen als er wel of niet rijen bestaan. Als dit zo is worden de images en pdf opgeslagen in een map. Als niet dan is er dus is fout gegaan met het uploaden.</p>
        <p>Verder wordt er nog een query uitgevoerd om alle informatie te achterhalen van de opdrachten, zodat deze in het form kunnen worden geplaats.</p>


      </div>
      <div class="clearfix"></div>
      <div class="code">
        <h3>List</h3>
        <img src="<?php echo BASE_URL ?>/resources/uploads/list1.png" class="codesnippit" alt="">
        <img src="<?php echo BASE_URL ?>/resources/uploads/list2.png" class="codesnippit" alt="">
        <p>Deze code snippits laat de queries voor de database zien en hoe de lijst op de pagina verschijnt met de juiste content erin. </p>
        <p>Er worden 2 queries gebruikt hier, de eerste selecteert alle id's, titles en vakken en de tweede seleect alleen de Distinct vakken uit de tabel. </p>
        <p>Om de alle opdrachten netjes bij het goede vak in de lijst neer te zetten begint eerst een foreach loop die door alle Distinct vakken loopt.</p>
        <p>Deze vakken worden bovenaan neergezet als titel.</p>
        <p>Daarna begint er nog een foreach loop die door alle opdrachten loopt. Bij iedere iteratie wordt er gechecked of het vak van de opdracht overeen komt met het vak. </p>
        <p>Als dit klopt wordt de opdracht onder het juiste vak geplaats.</p>

      </div>
      <div class="clearfix"></div>
      <div class="code">
        <h3>Page</h3>
        <img src="<?php echo BASE_URL ?>/resources/uploads/page.png" class="codesnippit" alt="">
        <p>Dit is de code die ik gebruik voor het laten zien van de content op de vak pagina's.</p>
        <p>Ik heb hier een switch staan die checked welke slug er is op een pagina. Als het DED of ME is zet ik er op een andere manier content in. Dit komt doordat er bij DED of over mij geen opdrachten
           zijn. Deze switch zie ik als een dirty fix van de pagina's, want ik weet zeker als ik in eerste instantie iets beter had nagedacht over hoe de content geplaats zou worden ik dit zo had kunnen voorkomen.</p>
        <p>De default content worden displayed doormiddel van een foreach loop. Deze loop loopt door alle rijen in de database. Bij iedere iteratie laat ik de titel, text, juiste image en juiste link zien naar de opdracht.</p>
        <p>Verder zijn er nog een paar checks of er een user is, en als wel verschijnt er een knop om de opdracht meteen te editen, en een knop om een opdracht toe te voegen.</p>
      </div>
      <div class="clearfix"></div>
      <div class="code">
        <h3>Fade in left</h3>
        <img src="<?php echo BASE_URL ?>/resources/uploads/fadeleft.png" class="codesnippit" alt="">
        <p>Dit stukje code zorgt ervoor dat alle items met de fadeInLeft class verschijnen met een fade.</p>
        <p>Bij ieder item wordt er gekeken naar de positie van de bovenkant van het item. </p>
        <p>Ook word ter bij iedere scroll de positie bepaald van het scherm.</p>
        <p>Dan wordt er gekeken of de positie van het scherm groter is dan de positie van de bovenkant van het item, en dan wordt de animatie uitgevoerd.</p>
        <p>Ik heb de boven positie van een item nog -300 meegegeven zodat de animatie eerder gebeurd dan als je er pas op zit.</p>
      </div>
      <div class="clearfix"></div>
      <div class="code">
        <h3>Fade on load</h3>
        <img src="<?php echo BASE_URL ?>/resources/uploads/fadeload.png" class="codesnippit" alt="">
        <p>Dit is een stukje code dat ervoor zorgt dat opdrachten inladen zodra de pagina laad.</p>
        <p>Eerst zorgt er een regel voor dat de fadeOnLoad class wordt verwijderd bij iedere opdracht na de eerste 3. Deze krijgen de class fadeInLeft.</p>
        <p>Dit doet de :gt() functie. Dit staat eigenlijk voor Greater Than. In mijn geval is dit 2, dus na de derde (0, 1, 2).</p>
        <p>Bij ieder item met de fadeOnLoad class veranderd de opacity naar 1 en de margin-left wordt weggehaald.</p>
        <p>De setTimeOut() zorgt ervoor dat dit gebeurt na iedere aangegeven tijd (800 ms in mijn geval).</p>
      </div>
      <div class="clearfix"></div>
      <div class="code">
        <h3>SCSS nest trap</h3>
        <img src="<?php echo BASE_URL ?>/resources/uploads/scss.png" class="codesnippit" alt="">
        <img src="<?php echo BASE_URL ?>/resources/uploads/css.png" class="codesnippit" alt="">
        <p>SCSS is soort van uitbreiding voor CSS. SCSS geeft je de onder andere mogelijkheid om variablen aan te maken, functies te maken en nests te gebruiken.</p>
        <p>Dit compile je dan om naar normaal CSS.</p>
        <p>Ik ben zelf een beetje in de nest trap gevallen. Dit is door erg diep te gaan in de nests met styling. In SCSS lijkt dit heel fijn en goed te gaan, maar uiteindelijk zorgt dit voor extreem specifieken selectors.</p>
        <p>Dit is in het algemeen niet per se een probleem, maar het kan er wel voor zorgen dat het minder overzichterlijk wordt en je mischien meer styling toevoegd dan nodig is.</p>
      </div>
      <div class="clearfix"></div>


    </div>

  </div>

  <?php break; ?>
<?php case "me": ?> <!-- ME -->
  <?php echo "yo" ?>
  <?php break; ?>
<?php default: ?> <!-- UXXU / SCO / PT -->

    <?php foreach ($content as $assignment): ?>
      <div class="fadeOnLoad assignment">
        <div class="assignmentLeft">
          <img src="resources/uploads/<?php echo e($assignment['image']); ?>" alt="">
        </div>
        <div class="assignmentRight">
          <h2><?php echo e($assignment['title']); ?></h2>
          <p><?php echo nl2br($assignment['content']); ?></p>
          <a href="resources/uploads/<?php echo e($assignment['assignment']); ?>" target="_blank"><img src="resources/uploads/pdf.png" alt="" class="pdfImg "></a>
          <?php if (isset($_SESSION['user'])): ?>
            <a href="<?php echo BASE_URL ?>/admin/edit.php?id=<?php echo e($assignment['id']); ?>" class="editButton fa fa-edit fa-3x"></a>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>

  <?php break; ?>
  </div>
<?php endswitch; ?>


  <!-- <button class="pageButton downButton fa fa-arrow-down fa-4x"></button> -->
  <?php if (isset($_SESSION['user'])): ?>
      <a href="<?php echo BASE_URL; ?>/admin/add.php" class="addButton fa fa-plus fa-3x"></a>
  <?php endif; ?>

  <button class="pageButton upButton fa fa-arrow-up fa-3x"></button>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
