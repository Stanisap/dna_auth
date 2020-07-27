<?php
/**
 * 
 */
namespace app\core;


class Controller
{
    public $route;
    public $model;
    public $view;

    function __construct($route)
    {
        $this->route = $route;
        $this->model = $this->loadModel($route['controller']);
        $this->view = new View($route);
    }

    public function loadModel($model)
    {
        $path = 'app\models\\' . ucfirst($model) . 'Model';
        if (class_exists($path)) return new $path();
    }
}