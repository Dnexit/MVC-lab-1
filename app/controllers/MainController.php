<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

    public function indexAction(){
        $vars = [

        ];

        $this->view->render("Главная страница", $vars);
    }

}