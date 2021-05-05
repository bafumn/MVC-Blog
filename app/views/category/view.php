<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        <?php foreach ($categories as $category): ?>
                            <a href="/category/<?php echo lcfirst($category['name']); ?>" class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo $category['name']?>
                                <span class="badge badge-primary badge-pill"><?php echo $category['count'] ?></span>
                            </a>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-8">

    <h1 class="my-4">
        <small><?php echo $title; ?></small>
    </h1>
    <!-- Blog Post -->
    <?php foreach ($posts as $post): ?>
        <div class="card mb-4">
            <?php $imgPath = 'public/uploads/img/' . $post['id'] . '.jpg'; ?>
            <?php if (file_exists($imgPath)): ?>
                <img class="card-img-top img-fluid" src="/<?php  echo $imgPath ?>">
            <?php endif; ?>
            <div class="card-body">
                <h2 class="card-title"><?php echo $post['title']; ?></h2>
                <p class="card-text"><?php echo $post['description'] ?></p>
                <a href="/post/<?php echo $post['id'] ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on <?php echo date('d/m/Y', $post['created_at']) . ' | '?> <a href="/category/<?php echo lcfirst($post['category_name']) ?>"><?php echo $title; ?></a>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Pagination -->

    <?php echo $pagination; ?>

</div>
