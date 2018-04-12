<?php
  require 'app/start.php';

  if (empty($_GET['page'])) {
    $page = false;
  }
  else {
    $slug = $_GET['page'];

    $page = $con->prepare("
      SELECT *
      FROM pages
      WHERE slug = :slug
    ");




    $page->execute(['slug' => $slug]);

    $page = $page->fetch(PDO::FETCH_ASSOC);

    //
    // if ($page) {
    //   $page['created'] = new DateTime($page['created']);
    //
    //   if ($page['updated']) {
    //     $page['updated'] = new DateTime($page['updated']);
    //   }
    // }

    $vak = $_GET['page'];

    $content = $con->prepare("
      SELECT *
      FROM course

    ");

    $content->execute();

    $content = $content->fetch(PDO::FETCH_ASSOC);
  }



  require VIEW_ROOT . '/page/show.php';



?>
