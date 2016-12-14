<?php
namespace Home\Model;

use Think\Model\RelationModel;

class ActivityModel extends RelationModel{
    protected $_validate = array(
    array('name','require','name is required'),
    );

    protected $_auto = array(
        array('time','time2',3,'callback')  // 对password字段在新增和编辑的时候使md5函数处理
        );

    protected $_link = array(
        'User'=>array(
            'mapping_type'      => self::BELONGS_TO,
            'class_name'        => 'User',
            'foreign_key'       => 'user_id',
            'mapping_name'      => 'u',
            'mapping_fields'    => 'email',

            // 定义更多的关联属性
            ),
        );

    public function getActivity($user_id=-1)
    {
        if ($user_id==-1)
        {
            $data = [];
        }
        else
        {
            $data['user_id'] = $user_id;
        }
        $res = $this->order('time desc')->where($data)->select();
        for ($i=0; $i < count($res); $i++) { 
            $time = $res[$i]['time'];
            $res[$i]['time'] = $this->time3($time);
        }
        return $res;
    }

    public function getActivityWithEmail($user_id=-1)
    {
        if ($user_id==-1)
        {
            $data = [];
        }
        else
        {
            $data['user_id'] = $user_id;
        }
        $res = $this->relation(true)->order('time desc')->where($data)->select();
        // die(json_encode($res));
        for ($i=0; $i < count($res); $i++) { 
            $time = $res[$i]['time'];
            $res[$i]['time'] = $this->time3($time);
            $res[$i]['email'] = $res[$i]['u']['email'];
        }
        return $res;
    }

    public function getOneActivity($act_id)
    {
        $data['act_id'] = $act_id;
        $res = $this->where($data)->find();
        $res['time'] = $this->time3($res['time']);
        return $res;
    }

    public function getActivityByCondition($condition)
    {
        $res = $this->where($condition)->select();
        for ($i=0; $i < count($res); $i++) { 
            $time = $res[$i]['time'];
            $res[$i]['time'] = $this->time3($time);
        }
        return $res;
    }

    public function validateUser($act_id)
    {
        //judge the act is belong to the user
        $data['act_id'] = $act_id;
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
        $time = I('post.time');
        return str_replace("T", ' ', $time);
    }

    public function time3($time)
    {
        return str_replace(" ", "T", $time);
    }

}   