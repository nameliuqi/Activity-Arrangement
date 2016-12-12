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
        <form action="dosignup" method="POST">
            <p>用户名</p>
            <input type="text" name="user_name">
            <p>邮箱</p>
            <input type="text" name="email">
            <p>密码</p>
            <input type="password" name="password">
            <p>重复密码</p>
            <input type="password" name="repassword">
            <br>
            <input type="submit">
        </form>
    </div>


	<hr>
<p style="text-align:center">powered by liuqi</p>
	</body>
</html>