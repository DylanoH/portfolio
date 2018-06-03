<?php

  require '../app/start.php';

  //needs validation! check my other course

  if (!empty($_POST)) {
    $title    = $_POST['title'];
    $content  = $_POST['content'];
    $vak    = $_POST['vak'];
    $image    = $_POST['image'];

    $insertAssignment = $con->prepare("
      INSERT INTO course(title, content, image, vak)
      VALUES(:title, :content, :image, :vak)
    ");

    $insertAssignment->execute([
      'title' => $title,
      'content' => $content,
      'image'  => $image,
      'vak'  => $vak,
    ]);

    header('Location: ' . BASE_URL . '/admin/list.php');
  }


  require VIEW_ROOT . '/admin/add.php';


 ?>
