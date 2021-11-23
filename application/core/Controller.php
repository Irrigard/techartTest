<?php
namespace application\core;
use application\core\View;
class Controller
{
    public $params;
    public $view;

    public function __construct($params)
    {
       $this->params = $params;
       $this->view = new View($params);
    }
}