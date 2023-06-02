<?php

namespace app\controllers;

use app\core\Controller;

class LearningController extends Controller
{

    public function indexAction(){
        $vars = [

        ];

        $this->view->render("Учёба", $vars);
    }

}