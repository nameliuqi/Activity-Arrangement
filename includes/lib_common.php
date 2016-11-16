<?php

function getFormData($key = 'default',$default = '')
{
	return isset($_REQUEST[$key]) ? trim($_REQUEST[$key]) : $default;
}

//template function
function showMessage($msg = 'default',$href='./index.php')
{
	$header = file_get_contents(TPLPATH.'header.html');
	$msgtpl = file_get_contents(TPLPATH.'show message.html');
	$msgtpl = render($msgtpl,array('message' => $msg, 'href'=>$href,'header'=>$header));
	echo $msgtpl;
	die();
}

function showHeader()
{
	$header = file_get_contents(TPLPATH.'header.html');
	echo $header;
}

function render($tpl,$data)
{
	foreach ($data as $key => $value) {
		$pattern = '{$' . $key . '}';
		$tpl = str_replace($pattern, $value, $tpl);
	}
	return $tpl;
}