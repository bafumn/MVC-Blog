<?php

namespace App\Controllers;

use App\Components\Pagination;
use App\Core\Controller;
use App\Models\Category;

class PostController extends Controller
{
    public function indexAction()
    {
        $category = new Category();
        $pagination = new Pagination($this->route, $this->model->countAllPosts());
        $vars = [
            'posts' => $this->model->getLatestPosts($this->route),
            'categories' => $category->getCategories(),
            'pagination' => $pagination->get()
        ];
        $this->view->render('Latest articles', $vars);
    }

    public function viewAction()
    {
        $vars = [
            'post' => $this->model->getPostById($this->route['id'])
        ];
        $this->view->render($vars['post']['title'], $vars);
    }
}