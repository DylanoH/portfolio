<?php
   require $_SERVER['DOCUMENT_ROOT']. '/Portfolio/app/start.php';
   session_start();

   $user_check = $_SESSION['user'];

   $query = "
   SELECT username
   FROM users
   WHERE username = '$user_check'
   ";

   $row = $con->query($query)->fetch();
   $_SESSION['username'] = $row[0];

   if(!isset($_SESSION['user'])){
      header('location: ' . BASE_URL . '/admin/login.php');
   }
?>
