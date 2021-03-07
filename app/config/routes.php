<?php
return [
    '' => [
        'controller' => 'Main',
        'action' => 'index'
    ],
    'post/([0-9]+)' => [
        'controller' => 'Post',
        'action' => 'view'
    ],
];