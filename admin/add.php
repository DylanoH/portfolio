<?php
  session_start();
  require '../app/start.php';


  if (isset($_SESSION['user'])) {
    if (!empty($_POST)) {
      $title    = $_POST['title'];
      $content  = $_POST['content'];
      $vak      = $_POST['vak'];

      if (isset($_POST['add'])) { // Check if goeie 'post'
          $name = $_FILES['image']['name']; // Naam van image dat je hebt geupload
          $assignment = $_FILES['assignmentfile']['name']; // Naam van bestand dat je hebt geupload
          $target_directory = "/Portfolio/resources/uploads/"; // Je file directory
          $target_file_image = $target_directory . basename($name); // target_directory en naam van bestand
          $target_file_document = $target_directory . basename($assignment); // target_directory en naam van bestand
          $imageFileType = strtolower(pathinfo($target_file_image, PATHINFO_EXTENSION)); // file extensie .png bijvoorbeeld
          $documentFileType = strtolower(pathinfo($target_file_document, PATHINFO_EXTENSION)); // file extensie .png bijvoorbeeld
          $extensions_array = array("jpg", "JPG", "jpeg", "png", "gif"); // extensies die jij ok vindt

          if ((in_array($imageFileType, $extensions_array)) && ($documentFileType == "pdf")) { // check if extensie erbij zit
            $insertAssignment = $con->prepare("
              INSERT INTO course(title, content, image, vak, assignment)
              VALUES(:title, :content, :image, :vak, :assignment)
            ");

            $insertAssignment->execute([
              'title' => $title,
              'content' => $content,
              'image'  => $name,
              'vak'  => $vak,
              'assignment' => $assignment
            ]);
            $result = $insertAssignment->rowCount() ? true : false;

            if ($result === true){
                move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_file_image); // zet image in de goeie map
                move_uploaded_file($_FILES['assignmentfile']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_file_document); // zet bestand in de goeie map
                echo("Het bestand is geupload.");
                header('Location ' . BASE_URL . '/admin/list.php');
            }
            elseif ($result === false){
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
        }
      }
    }
    else {
        require VIEW_ROOT . '/admin/add.php';
    }
  }
  else {
    header('Location: ' . BASE_URL . '/admin/login.php');
  }



 ?>
