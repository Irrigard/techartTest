<?php
namespace application\controllers;
use application\core\Controller;


class ViewsController extends Controller
{
    public function show(){
        $id = !empty($_GET['id'])?$_GET['id']:1;
        $vars = [
            'text'=>$this->model->getText($id)[0],
        ];
        $this->view->render('Новость', $vars);
    }
}