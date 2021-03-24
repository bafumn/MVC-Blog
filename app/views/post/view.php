<div class="col-lg-12">
    <!-- Title -->
    <h1 class="mt-4"><?php echo $post['title'] ?></h1>
    <hr>
    <!-- Date/Time -->
    <p>Posted on <?php echo date('d/m/Y | H:i', $post['created_at']) ?></p>
    <hr>
    <!-- Preview Image -->
    <?php if ($post['picture']): ?>
        <img class="img-fluid rounded" src="http://placehold.it/1200x400" alt="">
        <hr>
    <?php endif; ?>
    <?php echo $post['content']; ?>
</div>

