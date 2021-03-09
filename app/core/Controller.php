<?php

namespace App\Core;

abstract class Controller
{
    public $route;
    public $view;
    public $model;

    public function __construct($route)
    {
        $this->route = $route;
        $this->model = $this->loadModel($this->route['controller']);
        $this->view = new View($this->route);
    }

    public function loadModel($modelName)
    {
        $model = 'App\Models\\' . ucfirst($modelName);
        if(class_exists($model)) {
            return new $model;
        }
    }
}