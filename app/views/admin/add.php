<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <div class="forms">
    <h2>Add page</h2>

    <form class="fadeOnLoad addAssignment" action="<?php echo BASE_URL; ?>/admin/add.php" method="post" autocomplete="off" enctype="multipart/form-data">
      <label for="title">
        <p>Titel</p>
        <input type="text" name="title" id="title" required>
      </label>
      <label for="content">
        <p>Content</p>
        <textarea name="content" id="content" rows="10" cols="30" required></textarea>
      </label>
      <label for="image">
        <p>Foto</p>
        <input type="file" name="image" id="image" required>
      </label>
      <label for="assignmentfile">
        <p>File</p>
        <input type="file" name="assignmentfile" id="assignmentfile" required>
      </label>
      <label for="vak">
        <p>Vak</p>

        <input type="radio" name="vak" id="vak" value="uxu"></input> <span>uxu</span>
        <input type="radio" name="vak" id="vak" value="ded"></input> <span>ded</span>
        <input type="radio" name="vak" id="vak" value="sco"></input> <span>sco</span>
        <input type="radio" name="vak" id="vak" value="pt"></input> <span>pt</span>
        <input type="radio" name="vak" id="vak" value="me"></input> <span>me</span>
      </label>

      <input type="submit" name="upload" value="Toevoegen" class="formSubmit">
    </form>
  </div>




<?php require VIEW_ROOT . '/templates/footer.php'; ?>
