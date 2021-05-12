<!------------------------------------Actions------------------------->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mr-auto">
                <a href="index.html" class="btn btn-light btn-block">
                    <i class="fa fa-arrow-left"></i> Back to Dashboard
                </a>
            </div>
            <div class="col-md-3">
                <a href="/admin/user/delete/<?php echo $user['id']; ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-remove"></i> Delete Account
                </a>
            </div>
        </div>
    </div>
</section>

<!-----------------------------------------PROFILE EDIT-------------------------------------------->

<section id="posts" class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col -md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form action="/admin/user/edit/<?php echo $user['id']; ?>" method="post" class="form-validate">
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="title">First name</label>
                                <input type="text" name="firstName" class="form-control" value="<?php echo $user['firstName']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="title">Last name</label>
                                <input type="text" name="lastName" class="form-control" value="<?php echo $user['lastName']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $user['email']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" name="confirmPass" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update password">
                                <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Close">
                                <p class="result pt-2 text-danger float-right"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
