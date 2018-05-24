<?php

require '../../start.php';

$pages = $con->query("
  SELECT id, label, slug
  FROM pages
  ORDER BY id
")->fetchAll(PDO::FETCH_ASSOC);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>My CMS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/scripts/jquery/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/stylesheets/style.css">
  </head>

  <body>
    <header>
      <nav>
        <div class="nav">
          <div class="sidenav">
            <?php foreach($pages as $page): ?>
              <a href="<?php echo BASE_URL;?>/page.php?page=<?php echo $page['slug'];?>">
                <?php echo $page['label']; ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </nav>



      <div class="hamburger-container">
        <div class="hamburger1"></div>
        <div class="hamburger2"></div>
        <div class="hamburger3"></div>
      </div>


    </header>
    <main>
