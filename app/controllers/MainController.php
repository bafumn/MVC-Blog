<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Post;
use App\Models\Category;

class MainController extends Controller
{
    public function indexAction()
    {
        $post = new Post;
        $category = new Category;
        $vars = [
            'posts' => $post->getPosts(),
            'categories' => $category->getCategories()
        ];
        $this->view->render('Blog Engine', $vars);
    }

    public function aboutAction()
    {
        $this->view->render('About page');
    }

    public function contactAction()
    {
        $this->view->render('Contact page');
    }
}