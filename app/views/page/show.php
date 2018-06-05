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
        het opbouwen van een CMS systeem. Deze is inmiddels helemaal werken en zal dit goed
        gebruiken bij mijn eigen portfolio.
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
      <a href="<?php echo BASE_URL ?>/process/sprint3" target="_blank" class="fa fa-link"> <span>Sprint 3</span></a>
    </div>
    <hr>
    <div class="sprint4">
      <h2>Sprint 4</h2>
      <a href="<?php echo BASE_URL ?>/process/sprint4" target="_blank" class="fa fa-link"> <span>Sprint 4</span></a>
    </div>
    <hr>
    <div class="sprint5">
      <h2>Sprint 5</h2>
      <a href="<?php echo BASE_URL ?>" target="_blank" class="fa fa-link"> <span>Sprint 5</span></a>
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
        <p>Als de pagina niet leeg is worden er als eerste variablen gemaakt v</p>

      </div>
      <div class="clearfix"></div>
      <div class="code">
        <h3>List</h3>
        <img src="<?php echo BASE_URL ?>/resources/uploads/list1.png" class="codesnippit" alt="">
        <img src="<?php echo BASE_URL ?>/resources/uploads/list2.png" class="codesnippit" alt="">
        <p>asndakjsnd kjasndkj asnkjdnasndakjsnd kjasndkj asnkjdn kjas kjasn</p>
      </div>
      <div class="clearfix"></div>
      <div class="code">
        <h3>Page</h3>
        <img src="<?php echo BASE_URL ?>/resources/uploads/page.png" class="codesnippit" alt="">
        <p>asndakjsnd kjasndkj asnkjdnasndakjsnd kjasndkj asnkjdn kjas kjasn</p>
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
