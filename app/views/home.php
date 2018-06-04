<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php session_start(); ?>

  <div class="courses">
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




  <?php if (isset($_SESSION['user'])): ?>
      <a href="<?php echo BASE_URL ?>/admin/list.php" class="login-button">admin</a>
      <a href="<?php echo BASE_URL ?>/admin/logout.php" class="logout-button">log uit</a>
    <?php else: ?>
      <a href="<?php echo BASE_URL ?>/admin/login.php" class="login-button">log in</a>
  <?php endif; ?>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>
