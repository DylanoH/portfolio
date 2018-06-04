<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <?php if(empty($pages)): ?>
    <p>No pages at the moment.</p>
  <?php else: ?>
    <div class="overview">
    <?php foreach ($vakken as $vak):?>
      <div class="list-wrapper">
        <h2 class="list-headers"><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo e($vak['vak']) ?>" class="course"><?php echo e($vak['vak']); ?></a></h2>

        <ul class="list">
            <?php foreach ($assignments as $assignment): ?>
                <?php if ($assignment['vak'] == $vak['vak']): ?>
                   <li><a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($assignment['id']) ?>">  <?php echo e($assignment['title']); ?></a>    <a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($assignment['id']); ?>"><div class="fa fa-remove fa-1x"></div></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>


      </div>
    <?php endforeach; ?>

  <?php endif; ?>
    </div>

  <a href="<?php echo BASE_URL; ?>/admin/add.php">Add new assignment</a>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
