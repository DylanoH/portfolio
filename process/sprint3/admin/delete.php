<?php

  require '../app/start.php';

  if (isset($_GET['id'])) {
    $deleteAssignment = $con->prepare("
      DELETE FROM course
      WHERE id = :id
    ");

    $deleteAssignment->execute([
      'id' => $_GET['id']
    ]);
  }

  header('Location: ' . BASE_URL . '/admin/list.php');

 ?>
