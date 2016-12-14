<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/taa/Public/css/style.css">
		
    <title>
        shedule detail
    </title>

	</head>
	<body>
	<div>
	<span><a href="/taa">activity arrangement</a></span> &nbsp;
<span><a href="/taa/index.php/Home/Sign/signin">sign in</a></span> | <span><a href="/taa/index.php/Home/Sign/signup">sign up</a></span>

<span style="float:right"><a href="/taa/index.php/Home/User">user center</a></span>
</div> 
	
	<!-- main part -->
	
    <hr>
    <div>
        <h2>
            shedule
        </h2>
        <br>
        <div class="shedule_item">
            <h3 id="shedule_id" value="<?php echo ($shedule["shedule_id"]); ?>">
                shedule name : <?php echo ($shedule["name"]); ?>
            </h3>
            <p>
                description : <?php echo ($shedule["description"]); ?>
            </p>
            <p>
                deadline : 
                <input type="datetime-local" value="$shedule.deadline" readonly="true">
            </p>
            <p>
                finish : <?php echo ($shedule["finish"]); ?>
            </p>
            <p>
                <a href="/taa/index.php/Home/Shedule/edit/shedule_id/<?php echo ($shedule["shedule_id"]); ?>">edit</a>
                |
                <a href="">delete</a>
            </p>
        </div>
    </div>


	<hr>
<p style="text-align:center">powered by liuqi</p>
	</body>
</html>