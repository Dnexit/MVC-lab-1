<?php


namespace app\models\validators;


class CustomFormValidation extends FormValidation {

    public static function check_if_then($str){

        return strlen( $str ) < 10;
    }

}