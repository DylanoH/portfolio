<?php
  require '../app/start.php';
  session_start();
  $error = "";

  if($_SERVER["REQUEST_METHOD"] == "POST") {
     // username and password sent from form

     $username = e($_POST['username']);
     $password = e(md5($_POST['password']));


     $query = "
     SELECT id
     FROM users
     WHERE username = :username and password = :password
     ";

     $loginAttempt = $con->prepare($query);
     $loginAttempt->execute([
       'username' => $username,
       'password' => $password
     ]);

     $row = $loginAttempt->fetch(PDO::FETCH_ASSOC);

     $result = $loginAttempt->rowCount() ? true : false;

     if($result === true) {
        $_SESSION['user'] = $username;
        header('Location: ' . BASE_URL . '/admin/list.php');

     }
     elseif($result === false) {
       $error = "De gebruikersnaam of wachtwoord is fout.";
     }
     else {
       $error = "Oeps, er ging iets mis.";
     }
  }


  require VIEW_ROOT . '/page/login.php';
?>
