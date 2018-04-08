<?php

  ini_set('display_errors', 'On');

  define('APP_ROOT', __DIR__);
  define('VIEW_ROOT', APP_ROOT . '/views');
  define('BASE_URL', 'http://localhost/portfolio');

  $dbserver = 'mysql.stackcp.com:50366';
  $dbname = '	portfolio-33355b88';
  $dbpass = 'cnimjm096d';

  try {
    $con = new PDO('mysql:host=' . $dbserver . '; dbname=' . $dbname, $dbname, $dbpass);
    //echo "connection succesful";
  }
  catch(PDOException  $e) {
    $error_message = $e->getMessage();
    echo "an error has occured: $error_message";
  }


 require 'functions.php';

 ?>
