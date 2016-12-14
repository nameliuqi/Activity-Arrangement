<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/taa/Public/css/style.css">
		
    <title>
        edit shedule 
    </title>

	</head>
	<body>
	<div>
	<span><a href="/taa">activity arrangement</a></span> &nbsp;
<span><a href="/taa/index.php/Home/Sign/signin">sign in</a></span> | <span><a href="/taa/index.php/Home/Sign/signup">sign up</a></span>

<span style="float:right"><a href="/taa/index.php/Home/User">user center</a></span>
</div> 
	
	<!-- main part -->
	
    <h2>
            edit shedule
    </h2>
    <div class="edit">
        <form action="/taa/index.php/Home/Shedule/doEdit" method="post">
            <p>shedule name:</p>
            <input type="text" name="name" required="required" value="<?php echo ($shedule["name"]); ?>">
            <input type="text" name="shedule_id" value="<?php echo ($shedule["shedule_id"]); ?>" class="none">
            <p>deadline:</p>
            <input type="datetime-local" name="time" value="<?php echo ($shedule["deadline"]); ?>" defaultVale="2016-11-11T11:11">
            <p>place:</p>
            <input type="text" name="finish" value="<?php echo ($shedule["finish"]); ?>">
            <p>discription:</p>
            <input type="text" name="discription" value="<?php echo ($shedule["discription"]); ?>">
            <br>
            <input type="submit">
        </form>         
    </div>


	<hr>
<p style="text-align:center">powered by liuqi</p>
	</body>
</html>