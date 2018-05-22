<?php
   session_start();

   if(session_destroy()) {
      header('Location: ' . VIEW_ROOT . '/home.php');
   }
?>
