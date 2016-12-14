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
	
    <div>
        <h2>
            activity
        </h2>
        <div class="list_item">
                <h2 id="act_id" value="<?php echo ($activity["act_id"]); ?>">
                    activity name : <?php echo ($activity["name"]); ?>
                </h2>
                <p>
                    activity time : 
                    <input type="datetime-local" value="<?php echo ($activity["time"]); ?>" readonly="true">
                </p>
                <p>
                    activity place : <?php echo ($activity["place"]); ?>
                </p>
                <p>
                    activity discription : <?php echo ($activity["discription"]); ?>
                </p>
                <p>
                    <a href="/taa/index.php/Home/Shedule/add/act_id/<?php echo ($activity["act_id"]); ?>">add shedule</a>
                </p>
                <p>
                    <a href="/taa/index.php/Home/Activity/edit/act_id/<?php echo ($activity["act_id"]); ?>">edit</a>
                    |
                    <a href="">delete</a>
                </p>
            </div>
    </div>
    <hr>
    <div>
        <h2>
            shedule
        </h2>
        <br>
        <?php if(is_array($shedule)): foreach($shedule as $key=>$vo): ?><div class="shedule_item">
                <h3 id="shedule_id" value="<?php echo ($vo["shedule_id"]); ?>">
                    shedule name : <?php echo ($vo["name"]); ?>
                </h3>
                <p>
                    description : <?php echo ($vo["description"]); ?>
                </p>
                <p>
                    deadline : 
                    <input type="datetime-local" value="$vo.deadline" readonly="true">
                </p>
                <p>
                    finish : <?php echo ($vo["finish"]); ?>
                </p>
                <p>
                    <a href="/taa/index.php/Home/Shedule/detail/shedule_id/<?php echo ($vo["shedule_id"]); ?>">
                        查看详情        
                    </a>
                </p>
            </div><?php endforeach; endif; ?>
    </div>


	<hr>
<p style="text-align:center">powered by liuqi</p>
	</body>
</html>