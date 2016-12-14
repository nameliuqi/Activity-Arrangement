<?php
require_once('./includes/init.php');

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : 'show_shedule';
if ($act == 'show_shedule')
{
	if (!checkUserLogin())
	{
		showMessage('please login','./login.html');
	}
	die(showShedule());
}
else if ($act == 'add')
{
	if (!checkUserLogin())
	{
		showMessage('please login','./login.html');
	}
	if (!isset($_REQUEST['act_id']))
	{
		showMessage('choose a action to add shedule','./user.php');
	}
	$header_page = file_get_contents(TPLPATH.'header.html');
	$act_id = getFormData('act_id');
	$render_data = array(
		'act_id' => $act_id,
		'header' => $header_page
		);
	$add_shedule_page = file_get_contents(TPLPATH.'add_shedule.html');
	$add_shedule_page_rendered = render($add_shedule_page,$render_data);
	die($add_shedule_page_rendered);
}
else if ($act == 'insert')
{
	if (!checkUserLogin())
	{
		showMessage('please login','./login.html');
	}
	if (!isset($_REQUEST['act_id']))
	{
		showMessage('choose a action','./user.php');
	}
	if (!isset($_REQUEST['name']))
	{
		showMessage('enter a shedule name','./user.php');
	}
	if ($_REQUEST['name'] == '')
	{
		showMessage('enter a shedule name','./user.php');	
	}
	$act_id = getFormData('act_id');
	$name = getFormData('name');
	$deadline = date('Y-m-d',strtotime(getFormData('deadline')));
	$description = getFormData('description');
	$finish = getFormData('finish');

	$db = new DAO();
	$user_res = $db->select('activity',array('act_id' => $act_id),' AND ',' limit 1 ','user_id');
	$user_id = $user_res['user_id'];
 
	$shedule_data = array(
		'act_id' => $act_id,
		'user_id' => $user_id,
		'name'	 => $name,
		'deadline' => $deadline,
		'description' => $description,
		'finish'	=> $finish
		);
	
	$res = $db->insert('shedule',$shedule_data);
	if ($res)
	{
		showMessage('add shedule success','./user.php');
	}
	else
	{
		showMessage('add shedule fail','./user.php');
	}
}