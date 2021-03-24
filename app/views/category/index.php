<div class="col m-3">
    <ul class="list-group">
        <?php foreach ($categories as $category): ?>
            <a href="/category/<?php echo lcfirst($category['name']); ?>" class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $category['name']; ?>
                <span class="badge badge-primary badge-pill"><?php echo $category['count'];?></span>
            </a>
        <?php endforeach; ?>
    </ul>
</div>