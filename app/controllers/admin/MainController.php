<?php

namespace App\Controllers\Admin;


class MainController extends AdminBase
{
    public function indexAction()
    {
        $this->view->render('Admin Panel');
    }
}