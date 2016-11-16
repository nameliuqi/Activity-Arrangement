<?php
require_once('./includes/init.php');

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : 'show_lists';

if ($act == 'show_all')
{
	die(showActivityList(-1));
}
else if ($act == 'add')
{
	if (!checkUserLogin())
	{
		showMessage('please login','./login.html');
	}
	$user_id = $_SESSION['user_id'];
	$add_activity_page = file_get_contents(TPLPATH.'add_activity.html');
	$header_page = file_get_contents(TPLPATH.'header.html');
	$add_activity_page_rendered = render($add_activity_page,array('user_id' => $user_id,'header' => $header_page));
	die($add_activity_page_rendered);
}
else if ($act == 'insert')
{
	if (!checkUserLogin())
	{
		showMessage('please login','./login.html');
	}
	$act_info = array();
	$act_info['user_id'] = getFormData('user_id',-1);
	$act_info['name'] = getFormData('name');
	$act_info['place'] = getFormData('place');
	$act_info['discription'] = getFormData('discription');

	if ($act_info['user_id'] == -1)
	{
		//ready for ajax call
		die(json_encode('wrong user'));
	}
	if ($act_info['name'] == '')
	{
		showMessage('wrong activity name','./user.php');	
	}
	$db = new DAO();
	$res = $db->insert('activity',$act_info);
	if ($res)
	{
		showMessage('add activity success','./user.php');
	}
	else
	{
		showMessage('add activity fail','./user.php');
	}
}
//act == show_list is used in user.php