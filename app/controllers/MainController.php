<?php

namespace App\Controllers;

use App\Core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Blog Engine');
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