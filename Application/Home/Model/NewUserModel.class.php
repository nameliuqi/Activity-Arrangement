<?php
namespace Home\Model;

use Think\Model;

class NewUserModel extends Model{
     protected $tableName = 'user';
     protected $_validate = array(
        array('user_name','require','用户名必须！'), // 用户名必须
        array('user_name','','帐号名称已经存在！',0,'unique',1),
        array('email','email','Email格式错误！',2), // 如果输入则验证Email格式是否正确
        array('email','','Email已经存在！',0,'unique',1),
        array('password','4,30','密码长度不正确',0,'length'), // 验证密码是否在指定长度范围
        array('repassword','password','确认密码不一致',0,'confirm'), // 验证确认密码是否和密码一致     
        );
}