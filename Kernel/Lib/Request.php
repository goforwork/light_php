<?php

/*******************************
 *
 *
 * 框架路由
 *
 *
 *******************************/
namespace Kernel\Lib;

class Request
{
    static $get  = []; // get 参数
    static $post = []; // post 参数
    static $file = []; // file 参数

    /**
     * 处理请求信息
     *
     * @param [type] $result
     * @return string
     */
    public function handle()
    {
        self::$get  = $_GET;
        self::$post = $_POST;
        self::$file = $_FILES;
    }
}
