<?php
namespace application\controllers;
use application\core\Controller;

class NewsController extends Controller
{
    public function show(){
        $this->view->render('Новости');
    }
}