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

    public function index()
    {
        $act = D('Activity');
        $activity = $act->getActivity(session('user_id'));
        $this->assign('activity',$activity);
        $this->assign('user_name',session('user_name'));
        $this->display();
    }

    public function editInfo()
    {
        $user = M('User');
        $res = $user->where(array('user_id'=>session('user_id')))->find();
        $this->assign('email',$res['email']);
        $this->display('edit_info');
    }

    public function doEditInfo()
    {
        $validate = array(
            array('email','email','Email格式错误！',2), // 如果输入则验证Email格式是否正确
            array('password','4,30','密码长度不正确',0,'length'), // 验证密码是否在指定长度范围
            array('repassword','password','确认密码不一致',0,'confirm')
            );
        $user = new \Home\Model\UserModel();
        $user->setValidate(array('validate'=>$validate));
        $oldpassword = I('post.oldpassword');
        //verify the old pw
        $data = array(
            'password' => $oldpassword,
            'user_id' => session('user_id')
            );
        $res = $user->where($data)->find();
        if ($res)
        {
            $data = array(
                'email' => I('post.email')
                );
            $res = $user->where($data)->find();
            if ($res)
            {
                if ($res['user_id'] != session('user_id'))
                {
                    $this->error("email 已经存在123213",__MODULE__ .'/User/editInfo');
                }
            }
        }
        else
        {
            $this->error("wrong passowrd",__MODULE__ .'/User/editInfo');
        }

        if ($user->create())
        {
            $user->where("user_id = ".session('user_id'))->save();
            $this->success('edit infomation success',__MODULE__ .'/User');
        }
        else
        {
            $this->error($user->getError(),__MODULE__ .'/User/editInfo');
        }
    }

    public function join()
    {
        $joi = D('joinact');
        if ($joi->create())
        {
            if ($joi->user_id != session('user_id'))
            {
                $this->error('hack attemp');
            }
            $res = $joi->add();
            if ($res)
            {
                $this->success('关注成功',__MODULE__ . '/User/index');
            }
            else
            {
                $this->error('关注失败');
            }
        }
        else
        {
            $this->error($joi->getError());
        }

    }

    public function test(){
    	$m = D('User');
    	$res = $m->select();
    	var_dump($res);
    }
}