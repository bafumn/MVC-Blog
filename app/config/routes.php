<?php
return [
    'articles' => [
        'controller' => 'post',
        'action' => 'view'
    ],
    'post/([0-9]+)' => [
        'controller' => 'post',
        'action' => 'view'
    ],
    'categories' => [
        'controller' => 'category',
        'action' => 'index'
    ],
    'category/([a-z]+|[0-9]+)' => [
        'controller' => 'category',
        'action' => 'view'
    ],
    'about' => [
        'controller' => 'main',
        'action' => 'about'
    ],
    'contact' => [
        'controller' => 'main',
        'action' => 'contact'
    ],
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
];