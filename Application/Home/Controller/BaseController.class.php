<?php
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller {
    public function index(){
        $this->display("Index:index");
    }

    public function isSignin()
    {
        $user_id = session('user_id');
        if (!$user_id || $user_id<=0)
        {
            $user_id = 0;
            $this->error('please sign in',__MODULE__ .'/Sign/index');
            exit(1);
        }
    }
}