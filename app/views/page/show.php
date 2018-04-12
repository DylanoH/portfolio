<?php require VIEW_ROOT . '/templates/header.php'; ?>

<?php if(!$page): ?>
  <p>No page found, sorry.</p>
<?php else: ?>

  <h2><?php echo e($page['title']); ?></h2>

  <p>
    <?php echo e($page['body']); ?>
  </p>

  <?php endif; ?>

  <?php if(!$content): ?>
    <p>No content found, sorry.</p>
  <?php else: ?>

    <h2><?php echo e($content['title']); ?></h2>

    <p>
      <?php echo e($content['content']); ?>
    </p>

  <!-- <p class="faded">
    Created on <?php// echo $page['created']->format('d M Y'); ?>
    <?php //if($page['updated']): ?>
      Last updated <?php //echo $page['updated']->format('d M Y'); ?>
    <?php //endif; ?>
  </p> -->

<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
