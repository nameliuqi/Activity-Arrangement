<?php
require_once('./includes/init.php');

$header_page = file_get_contents(TPLPATH.'header.html');
$activity_list_page = showActivityList(-1);
$render_data = array(
	'header' => $header_page,
	'activity_list' => $activity_list_page
	);
$index_page = file_get_contents(TPLPATH.'index.html');
die(render($index_page,$render_data));