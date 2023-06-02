<?php

namespace app\controllers;

use app\core\Controller;

class HistoryController extends Controller
{

    public function indexAction(){
        $vars = [

        ];

        $this->view->render("История", $vars);
    }

}