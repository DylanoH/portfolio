<?php require VIEW_ROOT . '/templates/header.php'; ?>
<?php session_start(); ?>
  <!-- content -->
  <button class="backButton fa fa-arrow-left fa-4x" onclick="history.go(-1);"></button>
  <div class="assignmentPage">
    <?php foreach ($content as $assignment): ?>

      <div class="fadeOnLoad assignment">
        <div class="assignmentLeft">
          <h2><?php echo e($assignment['title']); ?></h2>
          <img src="resources/uploads/<?php echo e($assignment['image']); ?>" alt="">
        </div>
        <div class="assignmentRight">
          <p><?php echo e($assignment['content']); ?></p>
          <a href="resources/uploads/<?php echo e($assignment['assignment']); ?>" target="_blank"><img src="resources/uploads/pdf.png" alt=""></a>
          <?php if (isset($_SESSION['user'])): ?>
            <a href="<?php echo BASE_URL ?>/admin/edit.php?id=<?php echo e($assignment['id']); ?>" class="editButton fa fa-edit fa-4x"></a>
          <?php endif; ?>
        </div>

      </div>

    <?php endforeach; ?>
  </div>
  <!-- <button class="pageButton downButton fa fa-arrow-down fa-4x"></button> -->
  <button class="pageButton upButton fa fa-arrow-up fa-4x"></button>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
