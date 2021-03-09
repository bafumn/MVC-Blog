<?php
return [
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    'post/([0-9]+)' => [
        'controller' => 'post',
        'action' => 'view'
    ],
];