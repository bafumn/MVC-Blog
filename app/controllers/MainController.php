<?php

namespace App\Controllers;

use App\Components\Pagination;
use App\Core\Controller;
use App\Models\Post;
use App\Models\Category;

class MainController extends Controller
{
    public function indexAction()
    {
        $post = new Post;
        $category = new Category;
        $pagination = new Pagination($this->route, $post->countAllPosts(), 'articles');
        $vars = [
            'posts' => $post->getLatestPosts($this->route),
            'categories' => $category->getCategories(),
            'pagination' => $pagination->get()
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