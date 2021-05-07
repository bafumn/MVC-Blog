<?php

namespace App\Controllers\Admin;

use App\Components\Pagination;
use App\Models\Category;
use App\Models\Post;

class PostController extends AdminBase
{
    public function indexAction()
    {
        $pagination = new Pagination($this->route, $this->model->countAllPosts());
        $vars = [
            'posts' => $this->model->getLatestPosts($this->route),
            'pagination' => $pagination->get(),
        ];
        $this->view->render('Posts', $vars);
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->postValidate($_POST)) {
                $this->view->message($this->model->error);
            }
            $id = $this->model->addPost($_POST);
            if (!$id) {
                $this->view->message('Processing error');
            }
            if (!empty($_FILES['image']['tmp_name'])) {
                $this->model->postUploadImage($_FILES['image']['tmp_name'], $id);
            }
            $this->view->message(['url' => 'admin']);
        }
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->postValidate($_POST)) {
                $this->view->message($this->model->error);
            }
            if (!empty($_FILES['image']['tmp_name'])) {
                $this->model->postUploadImage($_FILES['image']['tmp_name'], $this->route['id']);
            }
            $_POST['id'] = $this->route['id'];
            $this->model->updatePost($_POST);
            $this->view->message('Post saved');
        }
        $category = new Category();
        $vars = [
            'post' => $this->model->getPostById($this->route['id']),
            'categories' => $category->getCategories()
        ];
        $this->view->render('Edit post', $vars);
    }

    public function deleteAction()
    {
        if (!empty($this->route['id'])) {
            $post = $this->model->getPostById($this->route['id']);
            $imagePath = ROOT . '/public/uploads/img/' . $this->route['id'] . '.jpg';
            $this->model->deletePost($post);
            $this->model->postDeleteImage($imagePath);
            header('Location: /admin');
        }
    }
}