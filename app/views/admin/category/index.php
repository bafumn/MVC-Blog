<!--categories-->

<section id="categories" class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Categories</h4>
                    </div>
                    <table class="table table-striped">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tr>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td scope="row"><?php echo $category['id']; ?></td>
                                <td><?php echo $category['name']; ?></td>
                                <td><a href="/admin/category/edit/<?php  echo $category['id']; ?>">Edit</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>