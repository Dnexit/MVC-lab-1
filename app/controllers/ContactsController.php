<?php

namespace app\controllers;

use app\core\Controller;

class ContactsController extends Controller
{

    public function indexAction(){
        $vars = [

        ];

        $this->view->render("Контакты", $vars);
    }

}