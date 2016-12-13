<?php
namespace Home\Controller;
use Think\Controller;

class ActivityController extends BaseController {
    public function index(){
        $this->display("Index:index");
    }

    public function detail()
    {
        $act = D('Activity');
        $act_id = I('get.act_id');
        $activity = $act->getOneActivity($act_id);

        $she = D('Shedule');
        $shedule = $she->getShedule();
        $this->assign('shedule',$shedule);
        $this->assign('activity',$activity);
        $this->display('detail');   
    }

    public function add()
    {
        $this->isSignin();
        $this->display();
    }

    public function doAdd()
    {
        $this->isSignin();
        $act = D('Activity');
        if ($act->create())
        {
            $act->user_id = session('user_id');
            $act->act_id = null;
            $res = $act->add();
            if ($res>0)
            {
                $this->success('add activity success',__MODULE__ . '/User/index');
            }
        }
        else
        {
            $this->error($act->getError(),__MODULE__ .'/User/index');
        }
    }

    public function edit()
    {
        $act_id = I('get.act_id');
        $act = D('Activity');
        $activity = $act->getOneActivity($act_id);
        $this->assign('activity',$activity);
        $this->display();
    }

    public function doEdit()
    {
        $act_id = I('post.act_id');
        $act = D('Activity');
        if ($act_id)
        {
            if (!$act->validateUser($act_id))
            {
                $this->error('illeagle access',__MODULE__ . '/User/index');
            }
        }
        else
        {
            $this->error('illeagle access',__MODULE__ . '/User/index');
        }
        if ($act->create())
        {
            $res = $act->save();
            // die($act->getLastSql());
            if ($res)
            {
                $this->success('edit success',__MODULE__ .'/Activity/detail/act_id/' . $act_id);
            }
            else
            {
                $this->error('edit fail',__MODULE__ . '/User/index');
            }
        }
        else 
        {
            $this->error($act->getError(),__MODULE__ . '/User/index');
        }
    }
}