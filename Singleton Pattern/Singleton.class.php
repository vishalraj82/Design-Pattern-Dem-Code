<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 4/28/15
 * Time: 6:11 AM
 */

class Singleton
{
    private static $instance = null;

    private $instanceId;

    public static function getInstance($instanceId=1) {
        if (self::$instance === null) {
            $class = __CLASS__;
            self::$instance = new $class($instanceId);
        }
        return self::$instance;
    }

    private function __construct ($instanceId) {
        $this->instanceId = $instanceId;
    }

    public function getInstanceId () {
        return $this->instanceId;
    }
}