<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body class="pt-0">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
        <a href="/admin" class="navbar-brand">Admin Panel</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="/admin" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item px-2">
                    <a href="/admin/posts" class="nav-link">Posts</a>
                </li>
                <li class="nav-item px-2">
                    <a href="/admin/categories" class="nav-link">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i> <?php echo $_SESSION['admin']['username']; ?>
                    </a>
                    <div class="dropdown-menu">
                        <a href="/admin/profile/<?php echo $_SESSION['admin']['id'] ?>" class="dropdown-item">
                            <i class="fa fa-user-circle"></i>Profile
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/admin/logout" class="nav-link">
                        <i class="fa fa-user-times"></i>
                        Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fa fa-gear"></i> <?php echo $title; ?></h1>
            </div>
        </div>
    </div>
</header>

<?php echo $content; ?>

<script src="/public/scripts/jquery.min.js"></script>
<script src="/public/scripts/popper.min.js"></script>
<script src="/public/scripts/bootstrap.min.js"></script>
<script src="/public/scripts/scripts.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '.editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>