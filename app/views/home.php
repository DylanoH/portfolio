<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php session_start(); ?>

  <?php  if (empty($pages)): ?>
    <p>Sorry, no pages at the moment.</p>
  <?php  else: ?>
    <div class="courses">
      <?php //shuffle($pages); ?>
      <?php //print_r($pages); ?>
      <?php foreach($pages as $page): ?>
          <a href="<?php echo BASE_URL;?>/page.php?page=<?php echo $page['slug'];?>"  class="course <?php echo $page['slug']; ?>">
          <div>
            <p class="course">
              <?php echo $page['label']; ?>
            </p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  <?php  endif; ?>


  <a href="<?php echo BASE_URL ?>/admin/login.php" class="login-button">login</a>
  <?php if (isset($_SESSION['user'])): ?>
      <a href="<?php echo BASE_URL ?>/admin/logout.php" class="logout-button">logout</a>
  <?php endif; ?>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>
