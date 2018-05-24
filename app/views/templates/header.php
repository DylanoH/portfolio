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
      <div id="mySidenav" class="sidenav">
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
      </div>

      <div class="hamburger-container" onclick="OpenNav()">
        <div class="hamburger1"></div>
        <div class="hamburger2"></div>
        <div class="hamburger3"></div>
      </div>


    </header>
    <main>
