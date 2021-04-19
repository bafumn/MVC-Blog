<?php
return [
    // article
    'articles' => ['controller' => 'post', 'action' => 'view'],
    'post/(?P<id>[0-9]+)' => ['controller' => 'post', 'action' => 'view'],
    // category
    'categories' => ['controller' => 'category','action' => 'index'],
    'category/(?P<name>[a-z]+|[0-9]+)' => ['controller' => 'category', 'action' => 'view'],
    // admin panel
    'admin' => ['controller' => 'main', 'action' => 'index', 'prefix' => 'admin'],
    // main part
    'about' => ['controller' => 'main', 'action' => 'about'],
    'contact' => ['controller' => 'main', 'action' => 'contact'],
    '' => ['controller' => 'main', 'action' => 'index'],
];