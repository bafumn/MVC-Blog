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
                <a href="/admin/post/delete/<?php echo $post['id']; ?>" class="btn btn-danger btn-block">
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
                        <form action="/admin/post/edit/<?php echo $post['id']; ?>" method="post" id="form" class="form-validate">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="title">Description</label>
                                <input type="text" name="description" class="form-control" value="<?php echo $post['description']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="title">Category</label>
                                <select name="category" class="form-control">
                                    <?php foreach ($categories as $category): ?>
                                    <?php $current = $category['id'] == $post['category_id'] ? 'selected' : ''; ?>
                                        <option <?php echo $current ?> value="<?php echo $category['id'] ?>"><?php echo $category['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="file">Image Upload</label>
                                <input type="file" name="image" class="form-control-file">
                                <small class="form-text text-muted">Max Size 3mb</small>
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea name="editor" class="form-control editor">
                                    <?php echo $post['content']; ?>
                                </textarea>
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