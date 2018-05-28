<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <!-- content -->
  <button class="backButton fa fa-arrow-left fa-4x" onclick="history.go(-1);"></button>
  <div class="assignmentPage">
    <?php if(!$content): ?>
      <p>No content found, sorry.</p>
    <?php else: ?>
      <?php foreach ($content as $assignment): ?>

        <div class="fadeOnLoad assignment">
          <div class="assignmentLeft">
            <h2><?php echo e($assignment['title']); ?></h2>
            <img src="resources/uploads/<?php echo e($assignment['image']); ?>" alt="">
          </div>
          <div class="assignmentRight">
            <p><?php echo e($assignment['content']); ?></p>
            <a href="resources/uploads/<?php echo e($assignment['assignment']); ?>" target="_blank"><img src="resources/uploads/pdf.png" alt=""></a>
          </div>

        </div>

      <?php endforeach; ?>
  <?php endif; ?>

  </div>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>
