<?php

namespace App\Controllers;

use App\Core\Controller;

class PostController extends Controller
{
    public function viewAction()
    {
        $vars = [
            'post' => $this->model->getPostById($this->route['param'])
        ];

        $this->view->render($vars['post']['title'], $vars);
    }
}