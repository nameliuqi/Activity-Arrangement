<?php
require_once('./includes/init.php');

$act = isset($_REQUEST['act'])?$_REQUEST['act']:'show_page';

if ($act == 'show_page')
{
	$add_activity_page = file_get_contents(TPLPATH.'add_activity.html');
	die($add_activity_page);
}
else if ($act == 'add_activity')
{
	//get info ,early version , to be changed
	$act_info = array();
	$act_info['user_id'] = getFormData('user_id',-1);
	$act_info['name'] = getFormData('name');
	$act_info['place'] = getFormData('place');
	$act_info['discription'] = getFormData('discription');

	if ($act_info['user_id'] == -1)
	{
		die(json_encode('wrong user'));
	}
	if ($act_info['name'] == '')
	{
		die(json_encode('wrong name'));
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
