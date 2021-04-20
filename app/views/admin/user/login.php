<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
        <a href="/" class="navbar-brand">Blog</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

        </div>
    </div>
</nav>
<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fa fa-user"></i> Admin panel</h1>
            </div>
        </div>
    </div>
</header>

<!-- actions -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>

<!-- login -->
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Account Login
                        </h4>
                        <div class="card-body">
                            <form action="/admin/login" method="post" class="form-validate">
                                <div class="form-group">
                                    <label for="email">Name or email</label>
                                    <input type="text" class="form-control" name="login">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" value="Login">
                            </form>
                        </div>
                        <p class="result pt-2 text-danger"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>