<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <h2>Add page</h2>

  <form class="" action="<?php echo BASE_URL; ?>/admin/add.php" method="post" autocomplete="off" enctype="multipart/form-data">
    <label for="title">
      <p>Title</p>
      <input type="text" name="title" id="title">
    </label>
    <label for="content">
      <p>Content</p>
      <textarea name="content" id="content" rows="10" cols="30"></textarea>
    </label>
    <label for="image">
      <p>Image</p>
    <input type="file" name="image" id="image">
    </label>
    <label for="vak">
      <p>Vak</p>

    <input type="radio" name="vak" id="vak" value="uxu">uxu</input>
    <input type="radio" name="vak" id="vak" value="ded">ded</input>
    <input type="radio" name="vak" id="vak" value="sco">sco</input>
    <input type="radio" name="vak" id="vak" value="pt">pt</input>
    <input type="radio" name="vak" id="vak" value="me">me</input>
    </label>

    <input type="submit" value="Add Assignment">
  </form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
