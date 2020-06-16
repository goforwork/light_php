<?php

/*******************************
 *
 * 
 * 工厂模式
 * 
 * 
 *******************************/

namespace Kernel\Lib;

class Factory
{
    function createDatabase()
    {
        Register::set('db1', Database::getInstance());
    }
}

?>