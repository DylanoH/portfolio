<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <h2>Add page</h2>

  <form class="" action="<?php echo BASE_URL; ?>/admin/add.php" method="post" autocomplete="off">
    <label for="title">
      Title
      <input type="text" name="title" id="title">
    </label>
    <label for="content">
      Content
      <textarea name="content" id="content" rows="10" cols="30"></textarea>
    </label>
    <label for="image">
      Image
    <input type="text" name="image" id="image">
    </label>
    <label for="vak">
      Vak
    <input type="text" name="vak" id="vak">
    </label>

    <input type="submit" value="Add Assignment">
  </form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
