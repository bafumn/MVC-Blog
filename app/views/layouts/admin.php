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
                    <a href="index.html" class="nav-link active">Dashboard</a>
                </li>
                <li class="nav-item px-2">
                    <a href="posts.html" class="nav-link">Posts</a>
                </li>
                <li class="nav-item px-2">
                    <a href="categories.html" class="nav-link">Categories</a>
                </li>
                <li class="nav-item px-2">
                    <a href="users.html" class="nav-link">Users</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i>Welcome Vlad
                    </a>
                    <div class="dropdown-menu">
                        <a href="profile.html" class="dropdown-item">
                            <i class="fa fa-user-circle"></i>Profile
                        </a>
                        <a href="settings.html" class="dropdown-item">
                            <i class="fa fa-gear"></i>Settings
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="nav-link">
                        <i class="fa fa-user-times"></i>
                        Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php echo $content; ?>

<script src="../public/scripts/jquery.min.js"></script>
<script src="../public/scripts/popper.min.js"></script>
<script src="../public/scripts/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
</body>
</html>