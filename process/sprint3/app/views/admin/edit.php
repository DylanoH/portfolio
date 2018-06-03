<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <h2>Edit page</h2>

  <form class="" action="<?php echo BASE_URL; ?>/admin/edit.php" method="post" autocomplete="off">
    <label for="title">
      Title
      <input type="text" name="title" id="title" value="<?php echo e($assignment['title']); ?>">
    </label>
    <label for="content">
      Content
      <textarea name="body" id="content" rows="10" cols="30"><?php  echo e($assignment['content']); ?></textarea>
    </label>
    <label for="image">
      Image
      <input type="text" name="image" id="image" value="<?php echo e($assignment['image']); ?>">
    </label>
    <label for="vak">
      Vak
      <input type="text" name="vak" id="vak" value="<?php echo e($assignment['vak']); ?>">
    </label>


    <input type="hidden" name="id" value="<?php echo e($assignment['id']); ?>">

    <input type="submit" value="Edit Assignment">
  </form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
