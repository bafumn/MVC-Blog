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

    public function addAction()
    {
        if (!empty($_POST)) {
            $this->model->categoryValidate($_POST);
            if (!$this->model->categoryValidate($_POST)) {
                $this->view->message($this->model->error);
            }
            $this->model->addCategory($_POST);
            $this->view->message(['url' => 'admin']);
        }
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->categoryValidate($_POST)) {
                $this->view->message($this->model->error);
            }
            $_POST['id'] = $this->route['id'];
            $this->model->updateCategory($_POST);
            $this->view->message('Changes saved');
        }
        $vars = [
            'category' => $this->model->getCategory($this->route['id']),
        ];
        $this->view->render('Edit category', $vars);
    }

    public function deleteAction()
    {
        if (!empty($this->route['id'])) {
            $category = $this->model->getCategory($this->route['id']);
            $this->model->deleteCategory($category);
            header('Location: /admin');
        }
    }
}