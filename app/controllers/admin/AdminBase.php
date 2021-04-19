<?php

namespace App\Controllers\Admin;

use App\Core\Controller;

abstract class AdminBase extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        if (!isset($_SESSION['admin'])) {
            header('Location: /admin/login');
        }
        $this->view->layout = 'admin';
    }
}