<?php require VIEW_ROOT . '/templates/header.php'; ?>
  <h2>Edit page</h2>

  <form class="" action="<?php echo BASE_URL; ?>/admin/edit.php" method="post" autocomplete="off" enctype="multipart/form-data">
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
      <input type="file" name="image" id="image" value="<?php echo e($assignment['image']); ?>">
    </label>
    <label for="vak">
      <p>Vak</p>

      <input type="radio" name="vak" id="vak" value="uxu" <?php
      if (e($assignment['vak']) == $uxu ) {
        echo 'checked = "checked"';
      }
      ?>>uxu</input>
      <input type="radio" name="vak" id="vak" value="uxu" <?php
      if (e($assignment['vak']) == $ded ) {
        echo 'checked = "checked"';
      }
      ?>>ded</input>
      <input type="radio" name="vak" id="vak" value="uxu" <?php
      if (e($assignment['vak']) == $sco ) {
        echo 'checked = "checked"';
      }
      ?>>sco</input>
      <input type="radio" name="vak" id="vak" value="uxu" <?php
      if (e($assignment['vak']) == $pt ) {
        echo 'checked = "checked"';
      }
      ?>>pt</input>
      <input type="radio" name="vak" id="vak" value="uxu" <?php
      if (e($assignment['vak']) == $me ) {
        echo 'checked = "checked"';
      }
      ?>>me</input>




    </label>


    <input type="hidden" name="id" value="<?php echo e($assignment['id']); ?>">

    <input type="submit" value="Edit Assignment">
  </form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
