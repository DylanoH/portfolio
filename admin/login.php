<?php
  session_start();
  require '../app/start.php';

  $error = "";

  if($_SERVER["REQUEST_METHOD"] == "POST") {

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
