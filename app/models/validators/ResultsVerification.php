<?php


namespace app\models\validators;


class ResultsVerification extends CustomFormValidation {

    public static function check_boolean_question($str){

        return $str != "operation";
    }
    public static function check_equality($str){

        return $str != "condition";
    }
    public static function check_if_then($str){

        return $str != "Импликация";
    }
}