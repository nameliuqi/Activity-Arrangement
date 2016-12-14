<?php
require_once('./includes/init.php');
require_once('./includes/lib_common.php');
require_once('./db/DAOClass.php');

$user_name = getFormData('user_name');
$password = getFormData('password');

if ($user_name == '')
{
	showMessage('empty user_name');
}
else if ($password == '')
{
	showMessage('empty password');
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
			showMessage("<a href='./user.php'>login success<a>");
		}
		else
		{

			showMessage("<a href='./user.php'>login fail<a>");
		}
	}
	else
	{
		showMessage('wrong user or password','./login.html');
	}
}