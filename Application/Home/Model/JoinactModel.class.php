<?php
namespace Home\Model;

use Think\Model;

class JoinactModel extends Model{
    protected $_auto = array(
        array('time','time',3,'function')  // 对password字段在新增和编辑的时候使md5函数处理
        );
    protected $_validate = array(
        array('user_id','require','用户名必须！'), // 用户名必须
        array('act_id','require','wrong activity'), // 验证密码是否在指定长度范围
        );

    public function setValidate($data)
    {
        if (isset($data['validate']))
        {
            $_validate = $date['validate'];
        }
    }
}