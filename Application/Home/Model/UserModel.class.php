<?php
namespace Home\Model;

use Think\Model;

class UserModel extends Model{
    protected $_auto = array (
     );
    protected $_validate = array(
        array('user_name','require','用户名必须！'), // 用户名必须
        array('password','4,30','密码长度不正确',0,'length'), // 验证密码是否在指定长度范围
        );

    public function setValidate($data)
    {
        if (isset($data['validate']))
        {
            $_validate = $date['validate'];
        }
    }
}