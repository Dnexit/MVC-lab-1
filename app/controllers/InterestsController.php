<?php

namespace app\controllers;

use app\core\Controller;

class InterestsController extends Controller
{

    public function indexAction(){
        $vars = [

        ];

        $this->view->render("Интересы", $vars);
    }

}