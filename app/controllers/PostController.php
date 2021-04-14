<?php

namespace App\Controllers;

use App\Core\Controller;

class PostController extends Controller
{
    public function viewAction()
    {
        $vars = [
            'post' => $this->model->getPostById($this->route['id'])
        ];

        $this->view->render($vars['post']['title'], $vars);
    }
}