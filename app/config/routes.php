<?php
return [
    // article
    'post/(?P<id>[0-9]+)' => ['controller' => 'post', 'action' => 'view'],
    'articles/(?P<page>[0-9]+)' => ['controller' => 'post', 'action' => 'index'],
    'articles' => ['controller' => 'post', 'action' => 'index'],
    // category
    'category/(?P<name>[a-z]+|[0-9]+)' => ['controller' => 'category', 'action' => 'view'],
    'category/(?P<name>[a-z]+|[0-9]+)/(?P<page>[0-9]+)' => ['controller' => 'category', 'action' => 'view'],
    'categories' => ['controller' => 'category','action' => 'index'],
    // article control
    'admin/posts/(?P<page>[0-9]+)' => ['controller' => 'post', 'action' => 'index', 'prefix' => 'admin'],
    'admin/posts' => ['controller' => 'post', 'action' => 'index', 'prefix' => 'admin'],
    // category control
    'admin/categories' => ['controller' => 'category', 'action' => 'index', 'prefix' => 'admin'],
    // user control
    'admin/login' => ['controller' => 'user', 'action' => 'login', 'prefix' => 'admin'],
    'admin/logout' => ['controller' => 'user', 'action' => 'logout', 'prefix' => 'admin'],
    // admin panel
    'admin' => ['controller' => 'main', 'action' => 'index', 'prefix' => 'admin'],
    // main part
    'about' => ['controller' => 'main', 'action' => 'about'],
    'contact' => ['controller' => 'main', 'action' => 'contact'],
    '' => ['controller' => 'main', 'action' => 'index'],
];