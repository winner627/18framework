<?php
class App{
    //类的自动加载
    public function autoload($className){
        $filename = APP_PATH . '/' . str_replace('\\','/',$className) . '.php';
        if (!file_exists($filename)){
            echo 'Class [' . $className . '] is not exists'; exit;
        }
        require_once $filename;
    }
    //框架启动
    public function run(){
        $m = isset($_GET['m']) ? ucfirst($_GET['m']) :'Home';
        $c = isset($_GET['c']) ? ucfirst($_GET['c']) :'Index';
        $a = isset($_GET['a']) ? $_GET['a'] :'index';


        $controller = '\\Controllers\\' . $m . '\\' .$c . 'Controller';

        $obj = new $controller();
        if(!method_exists($obj, $a)){
            echo 'method ['. $a .'] is not exists in' . $controller;
            exit;
        }
        echo $obj -> $a();
    }
}

return new App();