<?php

namespace app\controllers;

use app\core\Controller;
use app\models\TestModel;

class TestController extends Controller
{
    public function indexAction(){
        $errors = [];

        if( !empty( $_POST ) ){
            $errors = $this->model->Validate($_POST);
        }

        $this->view->render("Тест", [
            "errors" => $errors,
        ]);
    }
}