<?php
   session_start();
   require '../app/start.php';


   if(session_destroy()) {
    header('Location: ' . BASE_URL);
   }
?>
