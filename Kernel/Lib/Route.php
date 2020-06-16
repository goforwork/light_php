<?php

/*******************************
 *
 * 
 * 框架路由
 * 
 * 
 *******************************/
namespace Kernel\Lib;

use Kernel\Lib\Response;
use Kernel\Lib\Request;

class Route {
    public $response = null;
    public $request = null;

    public function __construct()
    {
        $this->response = new Response();
        $this->request = new Request();
    }

    /**
     * 数据处理
     *
     * @param [type] $className 控制器名带命名空间
     * @param [type] $method    方法名
     * @param [type] $callback  回调函数
     * @return string
     */
    public function handle($className, $method, $callback = function(){})
    {
        // 匹配uri

        $controller = new $className;
        $res = $controller->$method();
        $res = $callback();
        return $res;
    }

    /**
     * get 请求
     *
     * @param [type] $className 控制器名带命名空间
     * @param [type] $method    方法名
     * @param [type] $callback  回调函数
     * @return string
     */
    public function get($className, $method, $callback = function(){})
    {
        $res =$this->handle($className, $method, $callback = function(){});
        $this->response->handle($res);
    }

    /**
     * post 请求
     *
     * @param [type] $className 控制器名带命名空间
     * @param [type] $method    方法名
     * @param [type] $callback  回调函数
     * @return string
     */
    public function post($className, $method, $callback = function(){})
    {
        $res =$this->handle($className, $method, $callback = function(){});
        $this->response->handle($res);
    }
}

?>