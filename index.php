<?php

/*******************************
 *
 * 
 * 项目入口
 * 
 * 
 *******************************/

use App\Controller\Index;
use Kernel\Lib\Factory;
use Kernel\Lib\Register;
use App\Route\Route;

require_once __DIR__ . '/Kernel/Core.php';

// 调用路由
Route::run();

?>