<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/taa/Public/css/style.css">
		
    <title>
        edit your infomation
    </title>

	</head>
	<body>
	<div>
	<span><a href="/taa">activity arrangement</a></span> &nbsp;
<span><a href="/taa/index.php/Home/Sign/signin">sign in</a></span> | <span><a href="/taa/index.php/Home/Sign/signup">sign up</a></span>

<span style="float:right"><a href="/taa/index.php/Home/User">user center</a></span>
</div> 
	
	<!-- main part -->
	
    <div class="c">
        <form action="doEditInfo" method="POST">
            <p>邮箱</p>
            <input type="text" name="email" value="<?php echo ($email); ?>">
            <p>旧密码</p>
            <input type="password" name="oldpassword">
            <p>新密码</p>
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