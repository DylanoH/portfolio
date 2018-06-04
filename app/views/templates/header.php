<!DOCTYPE html>
<html>
  <head>
    <title>My CMS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/stylesheets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
  </head>

  <body>
    <header>
      <nav>
        <div class="hamburger-container">
          <div class="hamburger1"></div>
          <div class="hamburger2"></div>
          <div class="hamburger3"></div>
        </div>


        <div class="nav">
          <div class="sidenav">

            <a href="<?php echo BASE_URL ?>">home</a>
            <a href="<?php echo BASE_URL ?>/page.php?page=uxu">uxu</a>
            <a href="<?php echo BASE_URL ?>/page.php?page=ded">ded</a>
            <a href="<?php echo BASE_URL ?>/page.php?page=sco">sco</a>
            <a href="<?php echo BASE_URL ?>/page.php?page=pt">pt</a>
            <a href="<?php echo BASE_URL ?>/page.php?page=me">me</a>

            <?php /* ?>
            <?php foreach($pages as $page): ?>
              <a href="<?php echo BASE_URL;?>/page.php?page=<?php echo $page['slug'];?>">
                <?php echo $page['label']; ?>
              </a>
            <?php endforeach; ?>
            <?php */ ?>
          </div>
        </div>
      </nav>





    </header>
    <main>

      <?php $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

      <?php if ($url != "localhost/portfolio/"): ?>
        <!-- <button class="backButton fa fa-arrow-left fa-3x" onclick="history.go(-1);"></button> -->
        <a href="<?php echo BASE_URL; ?>" class="backButton fa fa-home fa-3x"></a>
      <?php endif; ?>
