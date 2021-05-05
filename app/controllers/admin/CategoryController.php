<?php

namespace App\Controllers\Admin;

class CategoryController extends AdminBase
{
    public function indexAction()
    {
        $vars = [
            'categories' => $this->model->getCategories(),
        ];
        $this->view->render('Categories', $vars);
    }
}