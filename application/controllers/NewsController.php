<?php
namespace application\controllers;
use application\core\Controller;

class NewsController extends Controller
{
    public function show(){
        $page = !empty($_GET['page'])?$_GET['page']:1;
        $offset = ($page - 1) * 5;
        $lines = $this->model->countNews();
        $vars = [
            'news'=>$this->model->getNews($offset),
            'pages'=>ceil($lines[0]['count']/5),
            'page'=>$page,
        ];
        $this->view->render('Новости', $vars);
    }
}