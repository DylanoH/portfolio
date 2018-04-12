<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <!-- content -->

  <?php if(!$content): ?>
    <p>No content found, sorry.</p>
  <?php else: ?>


    <?php foreach ($content as $assignment): ?>
      <h2><?php echo e($assignment['title']); ?></h2>

      <p>
        <?php echo e($assignment['content']); ?>
      </p>

    <?php endforeach; ?>




<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
