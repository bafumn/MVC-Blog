<?php

namespace App\Controllers\Admin;

use App\Core\Controller;

class UserController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }

    public function loginAction()
    {
        if (isset($_SESSION['admin'])) {
            header('Location: /admin');
        }
        $this->view->layout = 'login';

        if (!empty($_POST)) {
            if (!$this->model->login()) {
                $this->view->message('Wrong login or password!');
            } else {
                $this->view->message(['url' => 'admin']);
            }
        }
        $this->view->render('Login');
    }

    public function logoutAction()
    {
        unset($_SESSION['admin']);
        header('Location: /');
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->userValidate($_POST)) {
                $this->view->message($this->model->error);
            }
            $this->model->addUser($_POST);
            $this->view->message(['url' => 'admin']);
        }
    }

    public function profileAction()
    {
        $vars = [
            'user' => $this->model->getUserById($this->route['id'])
        ];
        $this->view->render('Profile', $vars);
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->profileValidate($_POST)) {
                $this->view->message($this->model->error);
            }
            $_POST['id'] = $this->route['id'];
            $this->model->updateUser($_POST);
            $this->view->message('User updated!');
        }
    }

    public function deleteAction()
    {
        $this->model->deleteUser($this->route['id']);
        self::logoutAction();
    }
}