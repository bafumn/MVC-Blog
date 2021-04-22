<?php

namespace App\Controllers;

use App\Components\Pagination;
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
        $category = $this->model->getCategory($this->route['name']);
        $pagination = new Pagination($this->route, $post->countAllPosts());
        $vars = [
            'posts' => $post->getPostsByCategory($category['id'], $this->route),
            'categories' => $this->model->getCategories(),
            'pagination' => $pagination->get()
        ];
        $this->view->render($category['name'], $vars);
    }
}