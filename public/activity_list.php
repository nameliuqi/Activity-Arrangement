<?php
require_once('..\\db\\DAOClass.php');
$db = new DAO();
$sql = 'select * from activity';
$activities = $db->select($sql);
var_dump(json_encode($activities));