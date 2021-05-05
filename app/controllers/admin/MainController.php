<?php

namespace App\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;

class MainController extends AdminBase
{
    public function indexAction()
    {
        $post = new Post();
        $category = new Category();
        $vars = [
            'posts' => $post->getLatestPosts($this->route),
            'categories' => $category->getCategories(),
        ];
        $this->view->render('Admin Panel', $vars);
    }
}