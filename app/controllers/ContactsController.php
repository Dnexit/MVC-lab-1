<?php

namespace app\controllers;

use app\core\Controller;

class ContactsController extends Controller
{

    public function indexAction(){
        $vars = [

        ];

        if( !empty( $_POST ) ){
            $vars["errors"] = $this->model->errors;
        }

        $this->view->render("Контакты", $vars);
    }

}