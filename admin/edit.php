<?php
  session_start();
  require '../app/start.php';


  if (isset($_SESSION['user'])) {

    if (!empty($_POST)) {
      $id       = $_POST['id'];
      $title    = $_POST['title'];
      $content  = $_POST['content'];
      $vak      = $_POST['vak'];

      if (isset($_POST['edit'])) {
        $name = $_FILES['image']['name'];
        $assignment = $_FILES['assignmentfile']['name'];
        $target_directory = "/Portfolio/resources/uploads/";
        //$target_directory = "../resources/uploads/";
        $target_file_image = $target_directory . basename($name);
        $target_file_document = $target_directory . basename($assignment);
        $imageFileType = strtolower(pathinfo($target_file_image, PATHINFO_EXTENSION));
        $documentFileType = strtolower(pathinfo($target_file_document, PATHINFO_EXTENSION));
        $extensions_array = array("jpg", "jpeg", "png", "gif");


        if ((in_array($imageFileType, $extensions_array)) && ($documentFileType == "pdf")) {

            $updateAssignment = $con->prepare("
            UPDATE course
            SET
              title = :title,
              content = :content,
              image = :image,
              assignment = :assignment,
              vak = :vak
              WHERE id = :id
            ");

            $updateAssignment->execute([
              'id'    => $id,
              'title' => $title,
              'content'  => $content,
              'image'  => $name,
              'assignment' => $assignment,
              'vak'   => $vak
            ]);

            $result = $updateAssignment->rowCount() ? true : false;

            if ($result === true) {
              move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_file_image); // zet bestand in de goeie map
              move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_file_image); // zet bestand in de goeie map
              //move_uploaded_file($_FILES['assignmentfile']['tmp_name'], $target_file_document); // zet bestand in de goeie map
              //move_uploaded_file($_FILES['assignmentfile']['tmp_name'], $target_file_document); // zet bestand in de goeie map
              echo("Het bestand is geupload.");
            }
            elseif ($result === false) {
              echo("Er ging iets mis met het uploaden van het bestand.");
            }
            else {
              echo("Oeps, er ging iets mis.");
            }
        }
        elseif ($documentFileType !== "pdf"){
            echo("Het document is geen pdf");
        }
        elseif (in_array($imageFileType, $extensions_array) == false){
            echo("De foto is niet jpg, jpeg, png of gif.");
        }
        else {
            echo("Er ging iets mis!");
        } // end of if in_array
      }
    }
    else {
      if (!isset($_GET['id'])) {
        header('Location: ' . BASE_URL . '/admin/list.php');
        die();
      }
      $assignment = $con->prepare("
        SELECT id, title, content, image, vak, assignment
        FROM course
        WHERE id = :id
      ");
      $assignment->execute(['id' => $_GET['id']]);
      $assignment = $assignment->fetch(PDO::FETCH_ASSOC);

      require VIEW_ROOT . '/admin/edit.php';
    }
  }
  else {
    header('Location: ' . BASE_URL . '/admin/login.php');
  }
?>
