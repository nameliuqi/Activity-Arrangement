<?php
require_once('./includes/init.php');

//init act
if (isset($_GET['act']))
{
	$act = $_GET['act'];
}
else
{
	$act = 'user_center';
}

if ($act == 'user_center')
{
	if (isset($_SESSION['user_name']) && isset($_SESSION['user_id']))
	{
		$user_name = $_SESSION['user_name'];
		$user_id = $_SESSION['user_id'];
		$header_page = file_get_contents(TPLPATH.'header.html');
		$activity_list_page = showActivityList($user_id);
		$render_data = array(
			'user_name' => $user_name,
			'header'	=> $header_page,
			'activity_list' => $activity_list_page
			);
		$user_center_page = file_get_contents(TPLPATH.'user.html');
		echo render($user_center_page,$render_data);
		exit;
	}
	else
	{
		showMessage('please login','./login.html');
	}	
}
else if ($act == 'logout')
{
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	showMessage('logout success','./index.php');
}	
