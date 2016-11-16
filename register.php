<?php
require_once('./includes/lib_common.php');
require_once('./db/DAOClass.php');
require_once('./includes/init.php');

showHeader();
$act = getFormData('act');
$return  ="<a href='./register.html'> return</a>";
if ($act = 'register')
{
	$user_name = getFormData('user_name');
	$password = getFormData('password');
	$password_repeate = getFormData('password_repeate');
	$email = getFormData('email');
	if ($password_repeate != $password)
	{
		echo "<script>alert('重复密码错误！'); </script> $return";
		exit;
	}
	else if ($user_name == '')
	{
		echo "<script>alert('用户名为空！'); </script> $return";
		exit;
	}
	else if ($email == '')
	{
		echo "<script>alert('邮箱为空！'); </script> $return";
		exit;
	}
	else if ($email == '')
	{
		echo "<script>alert('密码为空！'); </script> $return";
		exit;
	}
	else
	{
		$db = new DAO();
		$user_data = array(
			'user_name' => $user_name,
			'password'  => $password,
			'email'		=> $email,
			);
		$user_id = $db->select('user',array("user_name"=>$user_name));
		if ($user_id)
		{
			echo "<p>用户名重复</p> <a href='./register.html'> return</a>";	
			exit;
		}
		if ($db->insert('user',$user_data))
		{
		//	echo "<script>alert('登录成功！'); setTimeout('',2000); windows.location.href='./index.php';</script>";	
			$res = $db->select('user',array("user_name"=>$user_name));
			$_SESSION['uesr_id'] = $res['user_id'];
			$_SESSION['user_name'] = $res['user_name'];
			exit;
		}
		else
		{
			die('注册失败');
		}
	}
}