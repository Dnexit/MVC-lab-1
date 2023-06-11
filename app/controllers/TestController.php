<?php

namespace app\controllers;

use app\core\Controller;
use app\models\TestModel;

class TestController extends Controller
{
    public function indexAction(){
        $errors = [];
        $testData = [];
        $testResults = TestModel::all("created_at");

        if( !empty( $_POST ) ){
            $errors = $this->model->Validate($_POST);

            if( count( $errors ) == 0 ){
                $testData = $this->save();
            }
        }

        $this->view->render("Тест по дисциплине", [
            "errors" => $errors,
            "testData" => $testData,
            "testResults" => $testResults,
        ]);
    }

    function save(){
        $test = new TestModel();

        $test->fio = $_POST["fio"];
        $test->created_at = date('Y-m-d');
        $test->q_1 = $_POST["boolean_question"] == "operation";
        $test->q_2 = $_POST["equality"] == "condition";
        $test->q_3 = $_POST["if_then"] == "Импликация";

        $test->save();
        return $test;
    }
}