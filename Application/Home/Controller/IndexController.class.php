<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $act = D('Activity');
        $activity = $act->getActivityWithEmail();
        $this->assign('activity',$activity);
        $this->display("Index:index");
    }
}