<?php
return array(
	  //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'activity_arrangement', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
    'SHOW_PAGE_TRACE'=>true,
    //默认错误跳转对应的模板文件
    'TMPL_ACTION_ERROR' => MODULE_PATH . 'View/Public/dispatch_jump.tpl',
    //默认成功跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' => MODULE_PATH . 'View/Public/dispatch_jump.tpl',
    'THINK_EMAIL' => array(

        'SMTP_HOST' => 'smtp.qq.com', //SMTP服务器

        'SMTP_PORT' => '465', //SMTP服务器端口

        'SMTP_USER' => '372210728@qq.com', //SMTP服务器用户名

        'SMTP_PASS' => 'tiaTVB372210728', //SMTP服务器密码

        'FROM_EMAIL' => '372210728@qq.com',

        'FROM_NAME' => 'liuqi', //发件人名称

        'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）

        'REPLY_NAME' => '', //回复名称（留空则为发件人名称）

        'SESSION_EXPIRE'=>'72',
        ), 
    );