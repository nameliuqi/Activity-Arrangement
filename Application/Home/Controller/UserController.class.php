<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

	static private $user_id;
    static private $user_name;

	public function _initialize()
	{
		$user_id = session('user_id');
		if (!$user_id || $user_id<=0)
		{
			$user_id = 0;
			$this->error('please sign in',__MODULE__ .'/Sign/index');
		}
        $user_name = session('user_name');
	}

    public function index(){
        $this->assign('user_name',session('user_name'));
        $this->display();
    }
    public function test(){
    	$m = D('User');
    	$res = $m->select();
    	var_dump($res);
    }
}