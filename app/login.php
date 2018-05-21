<?php require 'start.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/scripts/jquery/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/stylesheets/style.css">
  </head>
  <body>
    <main class="login">
      <form class="formLogin" autocomplete="off" method="post">
        <label for="title">
          <h2>ACCOUNT LOGIN</h2>
        </label>
        <label for="username">
          <input type="text" id="username" name="username" placeholder="username"  autofocus required>
        </label>
        <label for="password">
          <input type="password" id="password" name="password" placeholder="password"  required>
        </label>
          <input type="submit" id="submitLogin" name="submitLogin" value="Login">
        </form>
    </main>
  <script src="<?php echo BASE_URL; ?>/scripts/jquery/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>/scripts/javascript/script.js"></script>
</body>
</html>
