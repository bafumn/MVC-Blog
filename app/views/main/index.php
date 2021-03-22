<!-- Blog Entries Column -->
<title><?php echo $title; ?></title>
<div class="col-md-8">

    <h1 class="my-4">
        <small>Newest Posts</small>
    </h1>
    <!-- Blog Post -->
    <?php foreach ($posts as $post): ?>
        <div class="card mb-4">
            <?php if($post['picture']): ?>
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <?php endif; ?>
            <div class="card-body">
                <h2 class="card-title"><?php echo $post['title']; ?></h2>
                <p class="card-text"><?php echo $post['description'] ?></p>
                <a href="post/<?php echo $post['id'] ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on <?php echo date('d/m/Y | H:i', $post['created_at']) ?>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul>
</div>

<!-- Sidebar Widgets Column -->
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
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">Web Design</a>
                        </li>
                        <li>
                            <a href="#">HTML</a>
                        </li>
                        <li>
                            <a href="#">Freebies</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">JavaScript</a>
                        </li>
                        <li>
                            <a href="#">CSS</a>
                        </li>
                        <li>
                            <a href="#">Tutorials</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>