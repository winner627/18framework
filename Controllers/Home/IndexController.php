<?php
namespace Controllers\Home;

use Libs\Controller;

class IndexController extends Controller{
    public function index(){
//        echo 'Welcome to 18FW PHP Framework!!';

        return $this -> response('home/index/index',['title'=>'PHP框架入门', 'message'=>'Welcome to 18FW PHP Framework!!']);
    }

//    public function response($tpl){
//        $filename = 'TPL_PATH' .'/' . $tpl . '.php';
//
//        if (!file_exists($filename)){
//            echo 'view[' . $filename .'] is not exists';
//            exit;
//        }
//        require_once $filename;
//    }

    public function jsonTest(){
        return $this->responseJson(200,'Hello World',['title' => 'hhh']);
    }
}