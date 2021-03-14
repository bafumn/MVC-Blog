<?php
return [

    'post/([0-9]+)' => [
        'controller' => 'post',
        'action' => 'view'
    ],
    'about' => [
        'controller' => 'main',
        'action' => 'about'
    ],
    'categories' => [
        'controller' => 'main',
        'action' => 'category'
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