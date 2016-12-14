<?php
namespace Home\Model;

use Think\Model;

class SheduleModel extends Model{
    protected $_validate = array(
    array('name','require','name is required'),
    );

    protected $_auto = array(
        array('deadline','time2',3,'callback')  // 对password字段在新增和编辑的时候使md5函数处理
        );

    public function getShedule($act_id=-1)
    {
        $data = [];
        if ($act_id==-1)
        {
            $data['user_id'] = session('user_id');
        }
        else
        {
            $data['act_id'] = $act_id;
        }
        $res = $this->order('deadline desc')->where($data)->select();
        for ($i=0; $i < count($res); $i++) { 
            $time = $res[$i]['deadline'];
            $res[$i]['deadline'] = $this->time3($time);
        }
        return $res;
    }

    public function getOneShedule($shedule_id)
    {
        $data['shedule_id'] = $shedule_id;
        $res = $this->where($data)->find();
        $res['deadline'] = $this->time3($res['deadline']);
        return $res;
    }

    public function getActivityByCondition($condition)
    {
        $res = $this->where($condition)->select();
        for ($i=0; $i < count($res); $i++) { 
            $time = $res[$i]['deadline'];
            $res[$i]['deadline'] = $this->time3($time);
        }
        return $res;
    }

    public function getAcitvityId($shedule_id)
    {
        $data['shedule_id'] = $shedule_id;
        $res = $this->where($data)->field('act_id')->find();
        return $res;
    }

    public function validateUser($shedule_id)
    {
        //judge the act is belong to the user
        $data['shedule_id'] = $shedule_id;
        $data['user_id'] = session('user_id');
        $res = $this->where($data)->find();
        if ($res)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function time2()
    {
        $time = I('post.deadline');
        return str_replace("T", ' ', $time);
    }

    public function time3($time)
    {
        return str_replace(" ", "T", $time);
    }

}   