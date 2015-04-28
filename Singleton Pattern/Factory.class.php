<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 4/28/15
 * Time: 6:10 AM
 */

class Factory {
    public static function getSingletonInstance () {
        return Singleton::getInstance();
    }
}