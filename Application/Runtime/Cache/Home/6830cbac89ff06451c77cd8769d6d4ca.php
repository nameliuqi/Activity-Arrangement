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
	
    <div class="c welcome">
        welcome <?php echo ($user_name); ?> 
        <p>
            <a href="/taa/index.php/Home/User/editInfo">编辑个人信息</a>
            |
            <a href="/taa/index.php/Home/Sign/signout">登出</a>
        </p>
    </div>
    <hr>
    <div>
    <?php if(is_array($activity)): foreach($activity as $key=>$vo): ?><div class="list_item">
            <h2 id="act_id" value="<?php echo ($vo["act_id"]); ?>">
                activity name : <?php echo ($vo["name"]); ?>
            </h2>
            <p>
                activity time : 
                <input type="datetime-local" value="<?php echo ($vo["time"]); ?>" readonly="true">
            </p>
            <p>
                activity place : <?php echo ($vo["place"]); ?>
            </p>
            <p>
                activity discription : <?php echo ($vo["discription"]); ?>
            </p>
            <p>
                <a href="__MODELE__/Shedule/add/act_id/<?php echo ($vo["act_id"]); ?>">add shedule</a>
            </p>
            <p>
                <a href="/taa/index.php/Home/Activity/detail/act_id/<?php echo ($vo["act_id"]); ?>">查看详情</a>
            </p>
        </div><?php endforeach; endif; ?>
    <hr>
    <div>
        <p>
            <a href="/taa/index.php/Home/Activity/add">add activity</a>
        </p>
    </div>
</div>


	<hr>
<p style="text-align:center">powered by liuqi</p>
	</body>
</html>