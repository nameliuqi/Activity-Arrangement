<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/taa/Public/css/style.css">
		 
	</head>
	<body>
	<div>
	<span><a href="/taa">activity arrangement</a></span> &nbsp;
<span><a href="/taa/index.php/Home/Sign/signin">sign in</a></span> | <span><a href="/taa/index.php/Home/Sign/signup">sign up</a></span>

<span style="float:right"><a href="/taa/index.php/Home/User">user center</a></span>
</div> 
	
	<!-- main part -->
	

	<div class="c">
		<form action="dosignin" method="post">
			<p>user name</p>
			<input type="text" name='user_name'>
			<p>password</p>
			<input type="password" name="password">
			<br>
			<input type="submit">			
		</form>
	</div>


	<hr>
<p style="text-align:center">powered by liuqi</p>
	</body>
</html>