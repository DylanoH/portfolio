<?php
  require '../app/start.php';
  session_start();
  if (isset($_SESSION['user'])) {


    $query = "
    SELECT id, label, title, slug
    FROM pages
    ORDER BY id
    ";

    $pages = $con->query($query)->fetchAll(PDO::FETCH_ASSOC);

    $query = "
    SELECT id, title, vak
    FROM course
    ORDER BY id, vak
    ";

    $assignments = $con->query($query)->fetchAll(PDO::FETCH_ASSOC);

    $query = "
      SELECT DISTINCT vak
      FROM course
      ORDER BY id
    ";

    $vakken = $con->query($query)->fetchAll(PDO::FETCH_ASSOC);

    require VIEW_ROOT . '/admin/list.php';
  }
  else {
    header('Location: ' . BASE_URL . '/admin/login.php');
  }

 ?>
