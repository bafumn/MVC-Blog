<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Post;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->model = new Post;
        $posts = $this->model->getPosts();
        $this->view->render('Blog Engine', ['posts'=>$posts]);
    }

    public function aboutAction()
    {
        $this->view->render('About page');
    }

    public function categoryAction()
    {
        $this->view->render('Categories page');
    }

    public function contactAction()
    {
        $this->view->render('Contact page');
    }
}