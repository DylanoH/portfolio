<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php session_start(); ?>
<div class="assignmentPage">
  <h1><?php echo e($page['body']); ?></h1>
<?php switch ($slug): ?>
<?php case "ded": ?> <!-- DED -->

  <div class="fadeOnLoad dedpage">
    <a href="https://github.com/DylanoH/portfolio" target="_blank">LINK TO GITHUB REPO</a>
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
      <a href="<?php echo BASE_URL ?>/process/sprint1" target="_blank">Sprint 1</a>
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
      <a href="<?php echo BASE_URL ?>/process/sprint2" target="_blank">Sprint 2</a>
    </div>
    <hr>
    <div class="sprint3">
      <h2>Sprint 3</h2>
      <a href="<?php echo BASE_URL ?>/process/sprint3" target="_blank">Sprint 3</a>
    </div>
    <hr>
    <div class="sprint4">
      <h2>Sprint 4</h2>
      <a href="<?php echo BASE_URL ?>/process/sprint4" target="_blank">Sprint 4</a>
    </div>
    <hr>
    <div class="sprint5">
      <h2>Sprint 5</h2>
      <a href="<?php echo BASE_URL ?>" target="_blank">Sprint 5</a>
    </div>
    <hr>
    <div class="codes">
      <h2>Code snippits</h2>

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
