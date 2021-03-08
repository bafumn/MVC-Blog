<?php

namespace App\Core;

abstract class Controller
{
    public $route;
    public $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->model = $this->loadModel($this->route['controller']);
        $this->view = new View($this->route['controller']);
    }

    public function loadModel($modelName)
    {
        $model = 'App\Models\\' . $modelName;
        if(class_exists($model)) {
            return new $model;
        }
    }
}