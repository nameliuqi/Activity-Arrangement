<?php

function getFormData($key = 'default',$default = '')
{
	return isset($_REQUEST[$key]) ? trim($_REQUEST[$key]) : $default;
}

function checkUserLogin()
{
	return isset($_SESSION['user_id']) && isset($_SESSION['user_name']);
}