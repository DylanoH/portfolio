<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <?php if(empty($pages)): ?>
    <p>No pages at the moment.</p>
  <?php else: ?>
    <table>
      <thead>
        <tr>
          <?php foreach($pages as $page): ?>
            <th><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo e($page['slug']) ?>" class="course"><?php echo $page['slug'];?></a></td>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach($assignments as $assignment): ?>
          <tr>
            <td><?php if ($assignment['vak'] == "uxu"): ?>       <a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($assignment['id']) ?>">  <?php echo e($assignment['title']); ?></a>    <a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($assignment['id']); ?>"> Del</a> <?php endif; ?></td>
            <td><?php if ($assignment['vak'] == "ded"): ?>         <a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($assignment['id']) ?>">  <?php echo e($assignment['title']); ?></a>    <a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($assignment['id']); ?>"> Del</a> <?php endif; ?></td>
            <td><?php if ($assignment['vak'] == "sco"): ?>         <a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($assignment['id']) ?>">  <?php echo e($assignment['title']); ?></a>    <a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($assignment['id']); ?>"> Del</a> <?php endif; ?></td>
            <td><?php if ($assignment['vak'] == "pt"): ?>         <a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($assignment['id']) ?>">  <?php echo e($assignment['title']); ?></a>    <a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($assignment['id']); ?>"> Del</a> <?php endif; ?></td>
            <td><?php if ($assignment['vak'] == "me"): ?>          <a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($assignment['id']) ?>">  <?php echo e($assignment['title']); ?></a>    <a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($assignment['id']); ?>"> Del</a> <?php endif; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>








  <a href="<?php echo BASE_URL; ?>/admin/add.php">Add new assignment</a>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
