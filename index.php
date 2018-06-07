<?php
  session_start();
  require 'app/start.php';

  $pages = $con->query("
    SELECT id, label, slug
    FROM pages
    ORDER BY id
  ")->fetchAll(PDO::FETCH_ASSOC);

  require VIEW_ROOT . '/home.php';

?>
