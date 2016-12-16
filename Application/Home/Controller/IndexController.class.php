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
    public function send()
    {
        $act = D('Activity');
        $now = date("Y-m-d H:i:s");
        $tomorrow = date("Y-m-d H:i:s",time()+60*60*48);
        $data['time'] = array('between',array($now,$tomorrow));
        $res1 = $act->where($data)->select();
        $joinuser = [];
        foreach ($res1 as $key => $value) {
            $joinuser[$value['act_id']] = $this->getUser1($value['act_id']);
        }
        foreach ($joinuser as $key => $value) {
            foreach ($value as $k => $v) {
                # code...
                $res = think_send_mail($v['email'],$v['user_name'],"notice from activity arrangement","您关注的活动http://192.168.43.77/taa/index.php/Home/activity/detail/act_id/".$v['act_id'] . " 即将开始");
                dump($res); 
            }
        }
        $she = D('Shedule');
        $res2 = $she->where($data)->select();
        // dump($joinuser);
        // dump($this->getUser1(22));
        // $res = think_send_mail('nameliuqi@outlook.com','发送人名称，即你的名称','来自日程安排网站的提示','www.01ty.com 学PHP，来沃德学院！');
        // die(json_encode($res));
    }
    private function getUser1($act_id)
    {
        $joi = D('Joinact');
        $data['act_id'] = $act_id;
        $users = $joi->where($data)->select();
        $res = [];
        $u = D('User');
        foreach ($users as $key => $value) {
            $user_id = $value['user_id'];
            $data2['user_id'] = $user_id;
            $uu = $u->where($data2)->find();
            if ($uu)
            {
                $res[] = $uu;
            }
        }
        return $res;
    }
}