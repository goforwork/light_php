<?php

/*******************************
 *
 * 
 * 单例模式
 * 
 * 
 *******************************/
namespace Kernel\Lib;

class Database
{
    private static $db;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(!self::$db){
            self::$db = new self();
        }
        return self::$db;
    }

    public function where()
    {
        return $this;
    }

    public function limit()
    {
        return $this;
    }
}

?>