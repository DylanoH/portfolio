<?php

  require '../app/start.php';

  $query = "
  SELECT id, label, title, slug
  FROM pages
  ORDER BY id
  ";

  $pages = $con->query($query)->fetchAll(PDO::FETCH_ASSOC);

  $query = "
  SELECT id, title, vak
  FROM course
  ORDER BY id, vak
  ";

  $assignments = $con->query($query)->fetchAll(PDO::FETCH_ASSOC);


















  require VIEW_ROOT . '/admin/list.php'

 ?>
