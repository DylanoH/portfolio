<?php require VIEW_ROOT . '/templates/header.php'; ?>

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

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
