<?php
namespace Controllers\Home;

use Libs\Controller;

class UserController extends Controller{
    public function login(){
        return $this ->response('home/user/login');
    }
}