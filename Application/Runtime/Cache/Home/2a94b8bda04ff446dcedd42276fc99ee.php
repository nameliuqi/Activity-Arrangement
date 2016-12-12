<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/taa/Public/css/style.css">
		
	<title>
		welcome to activity arrangement website
	</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="/taa/Public/css/slide/reset.css">
	<link rel="stylesheet" href="/taa/Public/css/slide/style.css">


	</head>
	<body>
	<div>
	<span><a href="/taa">activity arrangement</a></span> &nbsp;
<span><a href="/taa/index.php/Home/Sign/signin">sign in</a></span> | <span><a href="/taa/index.php/Home/Sign/signup">sign up</a></span>

<span style="float:right"><a href="/taa/index.php/Home/User">user center</a></span>
</div> 
	
	<!-- main part -->
	
<div id="slider">
	<ul class="slides clearfix">
		<li><img class="responsive" src="/taa/Public/img/1.jpg"></li>
		<li><img class="responsive" src="/taa/Public/img/2.jpg"></li>
		<li><img class="responsive" src="/taa/Public/img/3.jpg"></li>
		<li><img class="responsive" src="/taa/Public/img/4.jpg"></li>
	</ul>
	<ul class="controls">
		<li><img src="/taa/Public/img/prev.png" alt="previous"></li>
		<li><img src="/taa/Public/img/next.png" alt="next"></li>
	</ul>
	<ul class="pagination">
		<li class="active"></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<script src="/taa/Public/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="/taa/Public/js/slide/easySlider.js"></script>
<script type="text/javascript">
	$(function() {
		$("#slider").easySlider( {
			slideSpeed: 500,
			paginationSpacing: "15px",
			paginationDiameter: "12px",
			paginationPositionFromBottom: "20px",
			slidesClass: ".slides",
			controlsClass: ".controls",
			paginationClass: ".pagination"					
		});
	});
</script>

<hr>

<h1>
	activity list
</h1>



	<hr>
<p style="text-align:center">powered by liuqi</p>
	</body>
</html>