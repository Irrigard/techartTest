<?php
namespace application\core;


class View
{
    public $route;
    public $path;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '\\' . $route['action'];
    }

    public function render($title, $vars = []){
        ob_start();
        require_once APP_ROOT_DIR . '\application\views\\' . $this->path . '.php';
        $content = ob_get_clean();
        require_once APP_ROOT_DIR . '\application\views\layouts\\' . $this->layout . '.php';
    }

}