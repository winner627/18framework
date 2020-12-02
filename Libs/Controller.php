<?php
namespace Libs;

/**
 *引入模板,将数据传递给模板
 **/
class Controller{
    public function response($tpl,$data = []){
        $filename = TPL_PATH .'/' . $tpl . '.php';

        if (!file_exists($filename)){
            return 'view ['. $filename .'] is not exists';
        }

        extract($data);

//        var_dump($message);exit;

        require_once $filename;
    }

    /**
     * 返回Json数据，用于ajax或者接口数据返回
     */

    public function responseJson($status = 200 , $message = '' , $data = []){
        return json_encode(compact('status', 'message' , 'data'));
    }
}