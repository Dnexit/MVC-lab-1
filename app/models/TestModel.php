<?php


namespace app\models;

use app\core\Model;

class TestModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->validator->SetRule("fio", "checkFio");
        $this->validator->SetRule("if_then", "check_if_then");
        $this->validator->SetRule("boolean_question", "check_boolean_question");
    }

    public function Validate($postData){
        return $this->validator->Validate($postData);
    }
}