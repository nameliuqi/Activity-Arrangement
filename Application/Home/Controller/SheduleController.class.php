<?php
namespace Home\Controller;
use Think\Controller;

class SheduleController extends BaseController {
    public function index(){
        $this->display("Index:index");
    }

    public function detail()
    {
        $this->isSignin();
        $she = D('Shedule');
        $shedule_id = I('get.shedule_id');
        $she->validateUser($shedule_id);
        $shedule = $she->getOneShedule($shedule_id);
        $this->assign('shedule',$shedule);
        $this->display('detail');   
    }

    public function add()
    {
        $this->isSignin();
        $act_id = I('get.act_id');
        $this->assign('act_id',$act_id);
        $this->display();
    }

    public function doAdd()
    {
        $this->isSignin();
        $she = D('Shedule');
        if ($she->create())
        {
            $she->user_id = session('user_id');
            $res = $she->add();
            if ($res>0)
            {
                $this->success('add shedule success',__MODULE__ . '/Activity/detail/act_id/' . I('post.act_id'));
            }
        }
        else
        {
            $this->error($act->getError(),__MODULE__ .'/User/index');
        }
    }

    public function edit()
    {
        $shedule_id = I('get.shedule_id');
        $she = D('Shedule');
        $shedule = $she->getOneShedule($shedule_id);
        $this->assign('shedule',$shedule);
        $this->display();
    }

    public function doEdit()
    {
        $shedule_id = I('post.shedule_id');
        $she = D('Shedule');
        if ($shedule_id)
        {
            if (!$she->validateUser($shedule_id))
            {
                $this->error('illeagle access1',__MODULE__ . '/User/index');
            }
        }
        else
        {
            $this->error('illeagle access2',__MODULE__ . '/User/index');
        }
        if ($she->create())
        {
            $res = $she->save();
            // die($act->getLastSql());
            if ($res)
            {
                $this->success('edit success',__MODULE__ .'/Shedule/detail/shedule_id/' . $shedule_id);
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