<?php

namespace App\Controllers;

use App\Core\Controller;

class PostController extends Controller
{
    public function viewAction()
    {
        $post = $this->model->getPostById($this->route['param']);
        $this->view->render($post['title'], ['post' => $post]);
    }
}