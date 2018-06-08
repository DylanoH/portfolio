<div class="fadeOnLoad dedpage">
  <a href="https://github.com/DylanoH/portfolio" target="_blank" class="fa fa-github fa-1x"> <span>Link naar GitHub repo.</span></a>
  <div class="sprint1">

    <h2>Sprint 1</h2>
    <p>
      Ik kwam dit vak binnen met geen PHP-voorkennis. Wel heb ik al enige Javascript en
      JQuery kennis. PHP was wel iets wat ik nog graag wilde leren, dus dit komt goed uit omdat
      dit nu ook moet. Om PHP te leren heb ik een de SoloLearn PHP-cursus afgerond om de basis
      te leren en volgde ik een cursus op Udemy. Deze cursus gaat ook over de basis maar geeft
      je kleine projecten om de kennis daadwerkelijk in de praktijk te gebruiken.
    </p>
    <p>
      Ik had een contactformulier opgezet met een PHP en Javascript validatie. Als alles correct
      is ingevuld wordt de mail verstuurd.
    </p>
    <img src="<?php echo BASE_URL ?>/resources/downloads/formval.png" class="pagestyling" alt="">
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
    <img src="<?php echo BASE_URL ?>/resources/uploads/schets1.png" class="schets" alt="">
    <img src="<?php echo BASE_URL ?>/resources/uploads/schets2.png" class="schets" alt="">
    <img src="<?php echo BASE_URL ?>/resources/uploads/schets3.png" class="schets" alt="">
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
    <a href="<?php echo BASE_URL ?>/process/sprint1" target="_blank" class="fa fa-link"> <span>Link naar portfolio versie van Sprint 1</span></a>
  </div>

  <hr>

  <div class="sprint2">
    <h2>Sprint 2</h2>
    <p>Ik heb mij in de tweede sprint vooral beziggehouden met het volgen van de CMS tutorial die op canvas staat.
      Deze tutorial heb ik succesvol afgerond en heb hier veel van geleerd. Wat ik hier vooral van heb geleerd is queries uitvoeren met PHP en deze gebruiken door de output in een array te stoppen.
      Door op deze manier alle informatie uit de database te halen die ik nodig heb was het ook duidelijk hoe mijn logica gerelateerde code gescheide is van mijn views. Ik ben erachter gekomen dat dit
      een basis opzet is van een Model View Controller.
    </p>
    <p>Ook heb ik hier geleerd om een alternatieve syntax te gebruiken voor control structures als IF statements en FOREACH loops. Wat ik hier mee bedoel is om in plaats van de standaard
       "if(..) { echo html hier }" syntax te gebruiken, gebruik ik nu if(): html endif; Dit zorgt ervoor dat de html overzichterlijk blijft.
    </p>
    <img src="<?php echo BASE_URL ?>/resources/downloads/altsyntax.png" alt="">
    <p> Graag wil ik een nieuwe CMS starten met zo min mogelijk hulp van de tutorial om te zorgen dat ik het wel echt zelf kan. (toevoeging eind sprint 5: dit heb ik uiteindelijk niet gedaan. Wel voel ik me comfortabel genoeg met PHP dat ik zeker weet dat ik dat kan.)</p>
    <a href="<?php echo BASE_URL ?>/process/sprint2" target="_blank" class="fa fa-link"> <span>Link naar portfolio versie van Sprint 2</span></a>
  </div>

  <hr>

  <div class="sprint3">
    <h2>Sprint 3</h2>
    <p>Ik heb me in de derde sprint vooral bezig gehouden met de back-end van het portfolio. Deze is compleet op image en file upload na. De front-end had ik nog niet veel mee gedaan, maar ik vind
       het belangrijker dat de back-end volledig werkt. Ik zie het alsof de fundering nu goed staat. Hierop is makkelijk bovenop te bouwen.</p>

       <p><b>Admin panel verandering</b></p>
       <p>Ik had in eerste instantie het admin panel opgebouwd met een tabel, omdat ik het ook zag als een soort tabel. Het probleem hiermee was dat de opdrachten wel onder het juiste kopje kwamen te staan, maar niet direct onder elkaar
          Er kon maar 1 opdracht staan op 1 rij, dus er was heel veel onnodige white space tussen veel opdrachten.
       </p>
       <p>
         Ik had het hier met Frank over en kwamen er achter dat het beter is om een list te gebruiken, want ieder list item komt beter in een list te staan. Hier was een extra loop en if statement nodig om goed te checken welke opdracht bij welk vak hoorden.
       </p>
       <img src="<?php echo BASE_URL ?>/resources/downloads/listcode.png" class="pagestyling" alt="">
    <a href="<?php echo BASE_URL ?>/process/sprint3" target="_blank" class="fa fa-link"> <span>Link naar portfolio versie van Sprint 3</span></a>
  </div>

  <hr>

  <div class="sprint4">
    <h2>Sprint 4</h2>
    <p>Deze sprint heb ik me vooral beziggehouden met image en file upload. Het heeft me even geduurd om dit te begrijpen.
       Het grootste probleem dat ik hiermee had is begrijpen wat er nou met de image moest gebeuren in de database. Hier kwamen allerlei vragen bij me op;
       Moet de hele afbeelding in de databse? Moet het hele pad in de database? Kan de image opgeslagen worden in een map?
    </p>
    <p>Ik kwam er al gauw achter dat de hele afbeelding NIET in de database moet.</p>
    <p>Max heeft me geholpen om de image upload op te zetten. Door zijn eigen code erbij te pakken en die uit te leggen werd het me duidelijk.
       In de database worden alleen de namen van de afbeeldingen opgeslagen en de afbeeldingen worden gekopieerd en in een map in de site gezet. Op deze manier
       hoeft er bij het ophalen van de afbeelding alleen maar de afbeelding naam uit de database gehaald te worden terwijl de locatie hetzelfde blijft bij iedere afbeelding.
    </p>
    <p><b>Instagram API</b></p>
    <p>Ik heb in deze sprint een Instagram API opgezet in de website voor Moeders Mooiste.</p>
    <p>Dit was me toch een gedoe. Ik heb allerlei tutorials gevolgd om er uiteindelijk achter te komen dat het niet mogelijk is om afbeeldingen op te halen van een andere gebruiker dan jezelf zonder toestemming.
       Hiervoor vond ik de Instagram documentatie veel te wazig omdat je een of ander SandBox link moest sturen waarvan ik nog steeds niet weet hoe dat werkt. Ik heb het geprobeerd met 2 verschillende accounts van mijzelf en snapte het nog steeds niet.
       Na een tijdje het hebben opgegeven kwam ik deze library tegen: <a href="http://instafeedjs.com/">http://instafeedjs.com/</a>. Dit gaf me hoop om het toch te proberen.
    </p>
    <p>
       Ik heb als "dirty fix" foto's van Moeders Mooiste gekopieerd en op een eigen account geupload genaamd "Moeders Mooisten". Doordat dit mijn eigen account is kon ik dit wel gebruiken binnen de API call en kon ik met de library erg makkelijk foto's van Instagram zien op onze site.
    </p>
    <img src="<?php echo BASE_URL ?>/resources/downloads/instafeed.png" alt="" class="pagestyling">
    <p>Met de library is het erg makkelijk om de feed te laden door een div aan te maken en de template van de library te gebruiken.</p>
    <img src="<?php echo BASE_URL ?>/resources/downloads/instafeed.jpg" alt="" class="pagestyling">
    <p>Verder heb ik me deze sprint beziggehouden met een nieuwe huisstijl, een paar kleine aanpassingen in de back-end en begonnen
       aan het opbouwen van de front-end. Ik heb het huisstijl omgegooid van een donkere stijl naar een simplistische witte stijl.
       Dit heb ik gedaan omdat ik deze stijl ergens anders zag en ik vond het zelf erg prettig. Voor het eerst begon ik het design
       ook zelf goed te vinden.
    </p>
    <img src="<?php echo BASE_URL ?>/resources/downloads/homestyling.png" class="pagestyling" alt="">
    <a href="<?php echo BASE_URL ?>/process/sprint4" target="_blank" class="fa fa-link"> <span>Link naar portfolio versie van Sprint 4</span></a>
  </div>

  <hr>

  <div class="sprint5">
    <h2>Sprint 5</h2>
    <p>Deze sprint zijn er de meeste aanpassingen geweest aan het portfolio.</p>
    <p><b>Login systeem</b></p>
    <p>Ik heb deze tutorial gebruikt bij het maken van het login systeem: <a href="https://www.tutorialspoint.com/php/php_mysql_login.html">https://www.tutorialspoint.com/php/php_mysql_login.htm</a></p>
    <p>Het eerste probleem dat ik tegen kwam was dat ik moest begrijpen hoe sessions werken. Een kijkje op Google doet wonderen en dus kwam ik er al gauw achter hoe sessions werken.</p>
    <p>Verder was er nog een probleem dat in de code van de tutorial gebruik wordt gemaakt van de mysqli manier in plaats van de PDO manier die ik gebruik.</p>
    <p>Dit bleek achteraf ook niet echt een probleem te zijn omdat ik comfortabel genoeg ben met PHP om dit om te zetten naar PDO.</p>

    <p><b>Styling voor pagina's gemaakt, knoppen en icoontjes toegevoegd.</b></p>
    <p>Ik heb voor alle pagina's de styling gemaakt in de simplistische huisstijl die ik heb opgezet.</p>
    <img src="<?php echo BASE_URL; ?>/resources/downloads/pagestyling.png" class="pagestyling" alt="">
    <img src="<?php echo BASE_URL; ?>/resources/downloads/addstyling.png" class="pagestyling" alt="">

    <p><b>Javascript animaties</b></p>
    <p>Ik bij de vakken van de opdrachten JavaScript animaties toegevoegd. Dit geeft extra dynamiek op de site en maakt het net iets meer levendig.</p>
    <video  controls width="100%">
      <source src="<?php echo BASE_URL ?>/resources/downloads/animaties.mp4" type="video/mp4">
    </video>
    <p>Ik voelde me inmiddels vrij comfortabel met PHP en heb ook daadwerkelijk het gevoel alsof ik hier producten mee zou kunnen maken.</p>

    <a href="<?php echo BASE_URL ?>" target="_blank" class="fa fa-link"> <span>Link naar portfolio versie van Sprint 5</span></a>
  </div>

  <hr>

  <div class="leerdoelen">
    <h2>Leerdoelen voor de aankomende tijd</h2>
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

  <!-- Code snippits -->
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
      <h3>Shows API voor Moeders Mooiste</h3>
      <img src="<?php echo BASE_URL ?>/resources/uploads/shows.png" class="codesnippit" alt="">
      <p>Dit is code die zorgt voor de show sectie van onze Moeders Mooiste site.</p>
      <p>Als eerste worden er een paar variablen aangemaakt voor voor selectors</p>
      <p>Ik heb 3 functies die gebruikt worden in de AJAX API call naar BandsInTown.</p>
      <p>De eerste functie zorgt ervoor dat bij dagen en maanden een "0" wordt toegevoegd als de dag en maand minder is als 10. Dus dag "3" wordt "03". Dit is nodig voor de API call.</p>
      <p>De tweede functie checked in de API call of er al tickets te koop zijn op dagen waar een show is. Als er tickets te koop zijn verschijnt er een knop die linkt naar de kaart verkoop, als niet verschijnt er een knop die linkt naar meer info over het optreden.</p>
      <p>De derde functie voegt alle informatie toe in een rij van shows. De Date functie wordt hier gebruikt om de juiste datums te laten zien.</p>
      <p>Deze functies worden gebruikt in de AJAX API call. De API stuurt JSON informatie terug die makkelijk te gebruiken is de code.</p>

    </div>
    <div class="clearfix"></div>
    <div class="code">
      <h3>SCSS nest trap</h3>
      <img src="<?php echo BASE_URL ?>/resources/uploads/scss.png" class="codesnippit" alt="">
      <img src="<?php echo BASE_URL ?>/resources/uploads/css.png" class="codesnippit" alt="">
      <p>SCSS is soort van uitbreiding voor CSS. SCSS geeft je de onder andere mogelijkheid om variablen aan te maken, functies te maken en nests te gebruiken.</p>
      <p>Dit compile je dan om naar normaal CSS.</p>
      <p>Ik ben zelf een beetje in de nest trap gevallen. Dit is door erg diep te gaan in de nests met styling. In SCSS lijkt dit heel fijn en goed te gaan, maar uiteindelijk zorgt dit voor extreem specifieken selectors.</p>
      <p>Dit is in het algemeen niet per se een probleem, maar het kan er wel voor zorgen dat het minder overzichterlijk wordt en je misschien meer styling toevoegd dan nodig is.</p>
    </div>
    <div class="clearfix"></div>
    <h2>Checklist</h2>
    <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRnIhKorK2A0AV0Ecy2cdjtU1bUfrl2FJbrn1_cUHWOsujtdZh41sTW8LdkdZE46oM7HiXoUI6Ik8GS/pubhtml?gid=730650373&amp;single=true&amp;widget=true&amp;headers=false" width="100%" height="640px"></iframe>
  </div>

</div>
