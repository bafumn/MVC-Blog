<?php
return [
    // article
    'articles' => ['controller' => 'post', 'action' => 'view'],
    'post/(?P<id>[0-9]+)' => ['controller' => 'post', 'action' => 'view'],
    // category
    'categories' => ['controller' => 'category','action' => 'index'],
    'category/(?P<name>[a-z]+|[0-9]+)' => ['controller' => 'category', 'action' => 'view'],
    // admin panel
    'admin/login' => ['controller' => 'user', 'action' => 'login', 'prefix' => 'admin'],
    'admin/logout' => ['controller' => 'user', 'action' => 'logout', 'prefix' => 'admin'],
    'admin' => ['controller' => 'main', 'action' => 'index', 'prefix' => 'admin'],
    // main part
    'about' => ['controller' => 'main', 'action' => 'about'],
    'contact' => ['controller' => 'main', 'action' => 'contact'],
    '' => ['controller' => 'main', 'action' => 'index'],
];