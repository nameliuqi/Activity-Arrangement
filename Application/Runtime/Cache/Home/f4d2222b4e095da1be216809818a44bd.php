<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/taa/Public/css/style.css">
		
    <title>
        edit activity
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
            edit activity
    </h2>
    <div class="edit">
        <form action="/taa/index.php/Home/Activity/doEdit" method="post">
            <p>activity name:</p>
            <input type="text" name="name" required="required" value="<?php echo ($activity["name"]); ?>">
            <input type="text" name="act_id" value="<?php echo ($activity["act_id"]); ?>" class="none">
            <p>time:</p>
            <input type="datetime-local" name="time" value="<?php echo ($activity["time"]); ?>">
            <p>place:</p>
            <input type="text" name="place" value="<?php echo ($activity["place"]); ?>">
            <p>discription:</p>
            <input type="text" name="discription" value="<?php echo ($activity["discription"]); ?>">
            <br>
            <input type="submit">
        </form>         
    </div>


	<hr>
<p style="text-align:center">powered by liuqi</p>
	</body>
</html>