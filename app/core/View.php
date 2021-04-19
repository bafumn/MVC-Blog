<?php

namespace App\Core;


class View
{
    public $route;
    public $view;
    public $layout;

    public function __construct($route, $layout = 'default')
    {
        $this->route = $route;
        $this->layout = $layout;
        $this->view = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars);
        $view = 'app/views/' . $this->route['prefix'] . $this->view . '.php';
        if (file_exists($view)) {
            ob_start();
            require $view;
            $content = ob_get_clean();
            require 'app/views/layouts/' . $this->layout . '.php';
        }
    }

    public static function errorPage($code)
    {
        http_response_code($code);
        $path = 'app/views/errors/' . $code . '.php';
        if (file_exists($path)) {
            require $path;
        }
    }
}