<div class="col-lg-12">
    <!-- Title -->
    <h1 class="mt-4"><?php echo $post['title'] ?></h1>
    <hr>
    <!-- Date/Time -->
    <p>Posted on <?php echo date('d/m/Y | H:i', $post['created_at']) ?></p>
    <hr>
    <!-- Preview Image -->
    <?php $imgPath = 'public/uploads/img/' . $post['id'] . '.jpg'; ?>
    <?php if (file_exists($imgPath)): ?>
        <img class="card-img-top img-fluid" src="/<?php  echo $imgPath ?>">
    <?php endif; ?>

    <?php echo $post['content']; ?>
</div>

