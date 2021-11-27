<?php
namespace application\core;
use application\core\View;
class Controller
{
    public $params;
    public $view;
    public $model;

    public function __construct($params)
    {
       $this->params = $params;
       $this->view = new View($params);
       $this->model = $this->loadModel($params['controller']);
    }

    public function loadModel($name){
        $modelName = ucfirst($name);
        $pathModel = APP_ROOT_DIR . '\application\models\\'.$modelName. '.php';
        $fp = '\application\models\\' . $modelName;
        return new $fp;
    }
}