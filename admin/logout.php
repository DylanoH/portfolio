<?php
   require '../app/start.php';
   session_start();

   if(session_destroy()) {
    header('Location: ' . BASE_URL);
   }
?>
