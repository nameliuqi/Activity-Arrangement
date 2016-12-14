<?php
namespace Home\Controller;
use Think\Controller;
class SignController extends BaseController {

    public function index(){
        $this->display('sign_in');
    }

    public function signin()
    {
    	$this->display('sign_in');
    }

    public function doSignin()
    {
    	$user = D('User');
    	if (!$user->create())
    	{
    		$this->error($user->getError());
    	}
    	else
    	{
 			$data = array('user_name' => $user->user_name,'password' => $user->password);
    		$res = $user->where($data)->find();
    		if ($res)
    		{
    			$_SESSION['user_id'] = $res['user_id'];
    			$_SESSION['user_name'] = $res['user_name'];
    			$this->success('sign in success',__MODULE__ .'/User/index');
    		}
    		else
    		{
    			$this->error('wrong user or password');
    		}
    	}
    }

    public function signup($value='')
    {
        $this->display('sign_up');
    }

    public function doSignup()
    {
        $new_user = D('NewUser');
        //die(json_encode($_POST));
        if (!$new_user->create())
        {
            $this->error($new_user->getError());
        }
        else
        {
            $user_name = $new_user->user_name;
            $new_user->add();
            $user_id = $this->getUserId($user_name);
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_id'] = $user_id;
            $this->success('sign up success',__MODULE__ .'/User/index');
        }
    }

    public function signout()
    {
        session('user_name',null);
        session('user_id',null);
        $this->success('sign out success',__MODULE__ . '/Index/index');
    }

    public function test(){
        var_dump($this->getUserId('liuqi'));
    }

    private function getUserName($user_id)
    {
        $user = M('User');
        $data = array('user_id' => $user_id);
        $res = $user->where($data)->find();
        if ($res)
        {
            return $res['user_name'];
        }
        else
        {
            return $res;
        }
    }

    private function getUserId($user_name)
    {
        $user = M('User');
        $data = array('user_name' => $user_name);
        $res = $user->where($data)->find();
        if ($res)
        {
            return $res['user_id'];
        }
        else
        {
            return $res;
        }
    }
}