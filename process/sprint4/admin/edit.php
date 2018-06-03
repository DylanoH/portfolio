<?php

  require '../app/start.php';

  $ded = "ded";
  $uxu = "uxu";
  $sco = "sco";
  $pt = "pt";
  $me = "me";

  if (!empty($_POST)) {
    $id       = $_POST['id'];
    $title    = $_POST['title'];
    $content  = $_POST['content'];
    $vak      = $_POST['vak'];

    if (isset($_POST['edit'])) {
      $name = $_FILES['image']['name']; // Naam van bestand dat je hebt geupload
      $target_directory = "/Portfolio/resources/uploads/"; // Je file directory
      $target_file = $target_directory . basename($name); // target_directory en naam van bestand
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // file extensie .png bijvoorbeeld
      $extensions_array = array("jpg", "jpeg", "png", "gif", "pdf"); // extensies die jij ok vindt

      if (in_array($imageFileType, $extensions_array)) {

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
            'image'  => $name,
            'vak'   => $vak
          ]);




          $result = $updateAssignment->rowCount() ? true : false;

          if ($result === true) {
            move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_file); // zet bestand in de goeie map
            echo("Het bestand is geupload.");
          }
          elseif ($result === false) {
            echo("Er ging iets mis met het uploaden van het bestand.");
          }
          else {
            echo("Oeps, er ging iets mis.");
          }


      }
      else {
        echo("Het type bestand is niet jpg, jpeg, png of gif.");
      }
    }
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
