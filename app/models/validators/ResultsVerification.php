<?php


namespace app\models\validators;


class ResultsVerification extends CustomFormValidation {

    public static function check_boolean_question($str){
        $strArr = explode (" ", $str);

        return count( $strArr ) < 10;
    }

}