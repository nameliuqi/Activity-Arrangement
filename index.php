<?php
require_once("./db/DAOClass.php");
require_once('./includes/init.php');
require_once('./includes/lib_common.php');
$db = new DAO();
$arr = array(
	"name" => "liuqi",
	"password" => "123"
	);
showMessage();