<?php

/*******************************
 *
 * 
 * 注册器模式
 * 
 * 
 *******************************/
namespace Kernel\Lib;

class Register
{
    public static $list = [];

    public static function set($alias, $obj)
    {
        self::$list[$alias] = $obj;
    }

    public static function get($alias)
    {
        return self::$list[$alias];
    }

    public static function _unset($alias)
    {
        unset(self::$list[$alias]);
    }
}

?>