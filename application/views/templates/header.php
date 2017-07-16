<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">
    <title>BLOGs</title>
	<link rel="stylesheet" href="<?php echo base_url() . 'public/index/' ?>css/bootstrap.min.css" />
	<script type="text/javascript" src="<?php echo base_url() . 'public/index/' ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'public/index/' ?>js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() . 'public/index/' ?>css/common.css" />
	<link rel="stylesheet" href="<?php echo base_url() . 'public/index/' ?>css/details.css" />
    	<link rel="stylesheet" type="text/css" hhref="<?php echo base_url() . 'public/index/' ?>css/site.css" />

</head>
<body>
<!--
<div id="top">
	</div>
	<div id="header">
		<div class='logo'>
			<a href="<?php echo site_url(''); ?>">张晴钊的博客首页</a> 
		</div>
		<div class='navigation'>
			<a href="<?php echo site_url(''); ?>">首页</a>
			<a href="<?php echo site_url('news/'); ?>">文章</a>
			<a href="<?php echo site_url('about/'); ?>">关于我</a>
			
		</div>
		<form action="<?php echo site_url('news') ?>" class="form-inline" role="form" method="POST" enctype="multipart/form-data">
		<div class='form-group'>
			
			<input type="input" class="form-control" name="search" placeholder="输入搜索" />
		</div>
		<div class='submit'>
			<input type="submit" name="submit" value="搜索" />
		</div>
		
		</form>
	</div>
-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
    <div class="container-fluid"> 
    <div class="navbar-header navbar-left"> 
        <a class="navbar-brand" href="<?php echo site_url(''); ?>">张晴钊的博客首页</a> 
    </div> 
    <div> 
        <ul class="nav navbar-nav navbar-right"> 
	    <li><a href="<?php echo site_url(''); ?>">首页</a></li>
            <li ><a href="<?php echo site_url('news/'); ?>">文章</a></li> 
            <li ><a href="<?php echo site_url('about/'); ?>">关于我</a></li> 
                
        </ul> 
    </div> 
    <div>
        <form action="<?php echo site_url('news') ?>" class="navbar-form navbar-right" role="search" method="POST" enctype="multipart/form-data">
		<div class='form-group'>
			
			<input type="input" class="form-control" name="search" placeholder="输入搜索" />
		</div>
		<button type="submit" name="submit" class="btn btn-default" />搜索</button>
		
	</form>
    </div>
    </div> 
</nav>
<!-- unsolved problem: text covered -->
<br>
<br>
<div class="container body-content">
