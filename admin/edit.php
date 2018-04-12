<?php

  require '../app/start.php';

  if (!empty($_POST)) {
    $id       = $_POST['id'];
    $title    = $_POST['title'];
    $content  = $_POST['content'];
    $image    = $_POST['image'];
    $vak      = $_POST['vak'];

    $updateAssignment = $con->prepare("
          UPDATE course
          SET
            title = :title,
            content = :content,
            image = :image,
            vak = :vak
            WHERE id = :id
    ");

    $updateAssignment->execute([
      'id'    => $id,
      'title' => $title,
      'content'  => $content,
      'image'  => $image,
      'vak'   => $vak
    ]);

    header('Location: ' . BASE_URL . '/admin/list.php');
  }

  if (!isset($_GET['id'])) {
    header('Location: ' . BASE_URL . '/admin/list.php');
    die();
  }

  $assignment = $con->prepare("
    SELECT id, title, content, image, vak
    FROM course
    WHERE id = :id
  ");

  $assignment->execute(['id' => $_GET['id']]);

  $assignment = $assignment->fetch(PDO::FETCH_ASSOC);

  require VIEW_ROOT . '/admin/edit.php';

?>
