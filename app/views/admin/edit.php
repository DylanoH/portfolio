<?php require VIEW_ROOT . '/templates/header.php'; ?>
  <div class="forms">
    <h2>Edit page</h2>

    <form class="fadeOnLoad editAssignment" action="<?php echo BASE_URL; ?>/admin/edit.php" method="post" autocomplete="off" enctype="multipart/form-data">
      <label for="title">
        <p>Title</p>
        <input type="text" name="title" id="title" value="<?php echo e($assignment['title']); ?>">
      </label>
      <label for="content">
        <p>Content</p>
        <textarea name="content" id="content" rows="10" cols="30"><?php  echo e($assignment['content']); ?></textarea>
      </label>
      <label for="image">
        <p>Image</p>
        <input type="file" name="image" id="image">
      </label>
      <label for="assignmentfile">
        <p>File</p>
        <input type="file" name="assignmentfile" id="assignmentfile">
      </label>
      <label for="vak">
        <p>Vak</p>

        <input type="radio" name="vak" id="vak" value="uxu" <?php
        if (e($assignment['vak']) == "uxu" ) {
          echo 'checked = "checked"';
        }
        ?>></input> <span>uxu</span>
        <input type="radio" name="vak" id="vak" value="ded" <?php
        if (e($assignment['vak']) == "ded" ) {
          echo 'checked = "checked"';
        }
        ?>></input> <span>ded</span>
        <input type="radio" name="vak" id="vak" value="sco" <?php
        if (e($assignment['vak']) == "sco" ) {
          echo 'checked = "checked"';
        }
        ?>></input> <span>sco</span>
        <input type="radio" name="vak" id="vak" value="pt" <?php
        if (e($assignment['vak']) == "pt" ) {
          echo 'checked = "checked"';
        }
        ?>></input> <span>pt</span>
        <input type="radio" name="vak" id="vak" value="me" <?php
        if (e($assignment['vak']) == "me" ) {
          echo 'checked = "checked"';
        }
        ?>></input> <span>me</span>
      </label>


      <input type="hidden" name="id" value="<?php echo e($assignment['id']); ?>">

      <input type="submit" value="Aanpassen" class="formSubmit">
    </form>
  </div>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
