<?php

namespace app\controllers;

use app\core\Controller;

class TestController extends Controller
{

    public function indexAction(){
        $vars = [

        ];

        $this->view->render("Тест", $vars);
    }

}