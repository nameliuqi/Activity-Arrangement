<?php
require_once('./includes/init.php');
require_once('./includes/lib_common.php');
require_once('./db/DAOClass.php');

showHeader();
$user_name = getFormData('user_name');
$password = getFormData('password');

if ($user_name == '')
{
	die('empty user_name');
}
else if ($password == '')
{
	die('empty password');
}
else
{
	$db = new DAO();
	$user_data = array(
		'user_name' => $user_name,
		'password' => $password
		);
	$res = $db->select('user',$user_data);
	if ($res)
	{
		if (isset($res['user_id']))
		{
			$user_id = $res['user_id'];
			$_SESSION['user_id'] = $user_id;
			$_SESSION['user_name'] = $user_name;
			echo "<a href='./user.php'>login success<a>";
		}
		else
		{

			die("<a href='./user.php'>login fail<a>");
		}
	}
	else
	{
		die('data base error');
	}
}