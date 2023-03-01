<?php

namespace grammar;

class Grammar
{
    private static $nameSize = 120;
    private static $emailSize = 120;


    /**
     *return true if the name is not empty and <120 char
     * @param $name
     * @return bool
     */
    public static function isName($name){
        if(!empty($name) && strlen($name)<self::$nameSize){
            return true;
        }
        return false;
    }

    /**
     *check if email and return true if it's ok
     * @param $email
     * @return bool
     */
    public static function isEmail($email){
        if(!empty($email) && strlen($email)<self::$emailSize && filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }
}