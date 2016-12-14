<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/taa/Public/css/style.css">
		
    <title>
        add shedule
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
            add shedule
    </h2>
    <div class="add">
        <form action="/taa/index.php/Home/Shedule/doAdd" method="post">
            <p>activity name:</p>
            <input type="text" name="act_id" value="<?php echo ($act_id); ?>" class="none">
            <input type="text" name="name" required="required">
            <p>deadline:</p>
            <input type="datetime-local" name="deadline" value="2016-12-12T00:00">
            <p>finish:</p>
            <input type="text" name="discription">
            <p>discription:</p>
            <input type="text" name="discription">
            <br>
            <input type="submit">
        </form>         
    </div>


	<hr>
<p style="text-align:center">powered by liuqi</p>
	</body>
</html>