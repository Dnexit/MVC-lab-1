<?php

namespace app\controllers;

use app\core\Controller;

class AboutController extends Controller
{

    public function indexAction(){
        $vars = [

        ];

        $this->view->render("Обо мне", $vars);
    }

}