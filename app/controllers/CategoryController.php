<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Post;

class CategoryController extends Controller
{
    public function indexAction()
    {
        $vars = [
            'categories' => $this->model->getCategories()
        ];
        $this->view->render('Categories page', $vars);
    }

    public function viewAction()
    {
        $post = new Post;
        $category = $this->model->getCategory($this->route['param']);
        $vars = [
            'posts' => $post->getPostsByCategory($category['id']),
            'categories' => $this->model->getCategories(),
        ];
        $this->view->render($category['name'], $vars);
    }
}