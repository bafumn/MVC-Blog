<!--posts-->

<section id="posts" class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Posts</h4>
                    </div>
                    <table class="table table-striped">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Date Posted</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($posts as $post): ?>
                            <tr>
                                <td scope="row"><?php echo $post['id']; ?></td>
                                <td><?php echo $post['title']; ?></td>
                                <td><?php echo $post['category_name'] ?></td>
                                <td><?php echo date('d/m/Y', $post['created_at']) ?></td>
                                <td><a href="/admin/post/edit/<?php echo $post['id'] ?>" class="btn btn-secondary"> <i class="fa fa-angle-double-right"></i>
                                        Details</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                    <nav class="ml-4">
                        <?php echo $pagination; ?>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</section>

<footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="lead text-center">Copyright &copy; 2018 Blogen</p>
            </div>
        </div>
    </div>
</footer>
