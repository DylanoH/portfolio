<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php session_start(); ?>
  <!-- content -->


  <div class="assignmentPage">
    <h1><?php echo e($page['body']); ?></h1>
    <?php foreach ($content as $assignment): ?>

      <div class="fadeOnLoad assignment">
        <div class="assignmentLeft">
          <img src="resources/uploads/<?php echo e($assignment['image']); ?>" alt="">
        </div>
        <div class="assignmentRight">
          <h2><?php echo e($assignment['title']); ?></h2>
          <p><?php echo nl2br($assignment['content']); ?></p>
          <a href="resources/uploads/<?php echo e($assignment['assignment']); ?>" target="_blank"><img src="resources/uploads/pdf.png" alt="" class="pdfImg "></a>
          <?php if (isset($_SESSION['user'])): ?>
            <a href="<?php echo BASE_URL ?>/admin/edit.php?id=<?php echo e($assignment['id']); ?>" class="editButton fa fa-edit fa-3x"></a>
          <?php endif; ?>
        </div>

      </div>

    <?php endforeach; ?>
  </div>
  <!-- <button class="pageButton downButton fa fa-arrow-down fa-4x"></button> -->
  <?php if (isset($_SESSION['user'])): ?>
      <a href="<?php echo BASE_URL; ?>/admin/add.php" class="addButton fa fa-plus fa-3x"></a>
  <?php endif; ?>

  <button class="pageButton upButton fa fa-arrow-up fa-3x"></button>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
