<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>BLOGs</title>
        <link rel="stylesheet" href="<?php echo base_url() . 'public/bootstrap/css/custom.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'public/bootstrap/css/bootstrap.min.css' ?>">
	<script src="<?php echo base_url() . 'public/bootstrap/js/jquery.js' ?>"></script>
	<script src="<?php echo base_url() . 'public/bootstrap/js/bootstrap.min.js' ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url() . 'public/index/' ?>css/common.css" />
	<link rel="stylesheet" href="<?php echo base_url() . 'public/index/' ?>css/details.css" />
    	<link rel="stylesheet" type="text/css" hhref="<?php echo base_url() . 'public/index/' ?>css/site.css" />

</head>
<body>

<div id="top">
	</div>
	<div id="header">
		<div class='logo'>
			<a href="<?php echo site_url(''); ?>">BLOG</a> 
		</div>
		<div class='navigation'>
			<a href="<?php echo site_url(''); ?>">首页</a>
			<a href="<?php echo site_url('news/'); ?>">文章</a>
			<a href="<?php echo site_url('about/'); ?>">关于我</a>
			
		</div>
		<form action="<?php echo site_url('news') ?>" method="POST" enctype="multipart/form-data">
		<div class='search'>
			
			<input type="input" name="search" placeholder="输入搜索" />
			<div class='submit'>
			<input type="submit" name="submit" value="搜索" />
			</div>
		</div>
		</form>
	</div>
<!--
<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
    <div class="container-fluid"> 
    <div class="navbar-header navbar-left"> 
        <a class="navbar-brand" href="<?php echo site_url(''); ?>">BLOG</a> 
    </div> 
    <div> 
        <ul class="nav navbar-nav navbar-right"> 
            <li ><a href="<?php echo site_url('news/'); ?>">View Articles</a></li> 
            <li ><a href="<?php echo site_url('about/'); ?>">About Me</a></li> 
                
        </ul> 
    </div> 
    </div> 
</nav>-->
<!-- unsolved problem: text covered -->
<br>
<br>
<div class="container body-content">
