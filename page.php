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


    $vak = $_GET['page'];
    $content = $con->prepare("
      SELECT id, title, content, image, assignment
      FROM course
      WHERE vak = :vak
    ");
    $content->execute(['vak' => $vak]);
    $content = $content->fetchAll(PDO::FETCH_ASSOC);
  }



  require VIEW_ROOT . '/page/show.php';



?>
