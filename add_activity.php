<!DOCTYPE HTML>
<html>
	<head>
		<title>
			添加活动
		</title>
		<meta charset="utf-8" /> 
	</head>
	<body>
		<form action="add_activity.php" method="post">
			<input type="text" name="user_id" value="0" style="display:none">
			<input type="text" name="name">
			<input type="text" name="place">
			<input type="text" name="discription">
			<input type="submit">
		</form>
	</body>
</html>

<?php

//get info 
$act_info = array();
$act_info['user_id'] = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : -1;
$act_info['name'] = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$act_info['place'] = isset($_REQUEST['place']) ? $_REQUEST['place'] : '';
$act_info['discription'] = isset($_REQUEST['discription']) ? $_REQUEST['discription'] : '';

if ($act_info['user_id'] == -1)
{
	die(json_encode('wrong user'));
}
if ($act_info['name'] == '')
{
	die(json_encode('wrong name'));
}
$sql = "insert into activity(user_id,name,place,discription) values('{$act_info['user_id']}', '{$act_info['name']}', '{$act_info['place']}', '{$act_info['discription']}')";
var_dump($sql);
require_once('.\\db\\DAOClass.php');
$db = new DAO();
$res = $db->query($sql);
if ($res)
{
	die("success");
}
else
{
	die("fail");
}