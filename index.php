<?php
//use Controllers\Home\IndexController;
//require_once './Controllers/Home/IndexController.php';
//$obj = new IndexController();

//use Controllers\Admin\IndexController;
//require_once './Controllers/Admin/IndexController.php';
//$obj = new IndexController();

/**
 * 入口文件
 * @create_time 2020/12/1
 */
//初始化时区
date_default_timezone_set('PRC');

//定义常量
define('APP_PATH',__DIR__);

define('CONTROLLER_PATH',APP_PATH . '/' . 'View');

define('TPL_PATH',APP_PATH . '/' .'Views');

define('LIB_PATH',APP_PATH . '/' .'Libs');


//设置自动加载
$app = require_once './Bootstrap/App.php';

spl_autoload_register([$app,'autoload']);


//启动框架
call_user_func([$app,'run']);
//$obj -> index();