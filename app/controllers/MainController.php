<?php

namespace App\Controllers;

use App\Core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Main page');
    }
}