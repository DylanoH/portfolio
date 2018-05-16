<?php

  require '../app/start.php';



  if (!empty($_POST)) {
    $title    = $_POST['title'];
    $content  = $_POST['content'];
    $vak    = $_POST['vak'];

    if (isset($_POST['add'])) { // Check if goeie 'post'
        $name = $_FILES['image']['name']; // Naam van bestand dat je hebt geupload
        $target_directory = "/Portfolio/resources/uploads/"; // Je file directory
        $target_file = $target_directory . basename($name); // target_directory en naam van bestand
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // file extensie .png bijvoorbeeld
        $extensions_array = array("jpg", "jpeg", "png", "gif", "pdf"); // extensies die jij ok vindt

        if (in_array($imageFileType, $extensions_array)) { // check if extensie erbij zit
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $target_file) == false) { // als bestand nog niet bestaat doe je dit
            $insertAssignment = $con->prepare("
              INSERT INTO course(title, content, image, vak)
              VALUES(:title, :content, :image, :vak)
            ");

            $insertAssignment->execute([
              'title' => $title,
              'content' => $content,
              'image'  => $name,
              'vak'  => $vak,
            ]);
            $result = $insertAssignment->rowCount() ? true : false;

            if ($result === true){
                move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_file); // zet bestand in de goeie map
                echo("Het bestand is geupload.");
            }
            elseif ($result === false){
                echo("Er ging iets mis met het uploaden van het bestand.");
            }
            else {
                echo("Oeps, er ging iets mis.");
            }
        }
        else {
            echo("Een bestand met deze naam bestaat al.");
        }
    }
    else {
        echo("Het type bestand is niet jpg, jpeg, png of gif.");
    }
  }
}
else {
    require VIEW_ROOT . '/admin/add.php';
}

 ?>
