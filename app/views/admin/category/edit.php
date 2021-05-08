<!--actions-->

<section class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mr-auto">
                <a href="/admin" class="btn btn-light btn-block">
                    <i class="fa fa-arrow-left"></i> Back to Dashboard
                </a>
            </div>
            <div class="col-md-3">
                <a href="/admin/category/delete/<?php echo $category['id']; ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-remove"></i> Delete Post
                </a>
            </div>
        </div>
    </div>
</section>

<!--posts-->

<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Post</h4>
                    </div>
                    <div class="card-body">
                        <form action="/admin/category/edit/<?php echo $category['id']; ?>" method="post" id="form" class="form-validate">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $category['name']; ?>">
                            </div>
                            <div class="form-group mb-0 d-flex">
                                <button class="btn btn-success btn-block col-md-3" form="form">
                                    <i class="fa fa-check"></i> Save Post
                                </button>
                                <p class="result m-2"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>