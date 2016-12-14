<?php
namespace Home\Model;

use Think\Model;

class JoinactModel extends Model{
    protected $_auto = array(
        );
    protected $_validate = array(
        array('act_id','require','wrong activity'), 
        );

    public function getJoinActivity($user_id)
    {
        $data['user_id'] = $user_id;
        $temp = $this->where($data)->select();
        $res = [];
        foreach ($temp as $key => $value) {
            $act = D('Activity');
            $res[] = $act->getOneActivity($value['act_id']);
        }
        return $res;
    }

    public function setValidate($data)
    {
        if (isset($data['validate']))
        {
            $_validate = $date['validate'];
        }
    }
}