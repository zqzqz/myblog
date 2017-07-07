
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后台管理首页</title>

	<link rel="stylesheet" href="<?php echo base_url() . 'public/admin/' ?>css/admin.css" />
	<script type="text/javascript" src="<?php echo base_url() . 'public/admin/' ?>js/jquery-1.7.2.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url() . 'public/admin/' ?>js/admin.js" ></script>
<!-- 默认打开目标 -->
<base target="iframe"/>
</head>
<body>
<!-- 头部 -->
	<div id="top_box">
		<div id="top">
			<p id="top_font">后台管理首页</p>
		</div>
		<div class="top_bar">
			<p class="adm">
				<span>管理员：</span>
				<span class="adm_pic">&nbsp&nbsp&nbsp&nbsp</span>
				<span class="adm_people">[<?php echo "username" ?>]</span>
			</p>
			<p class="now_time">
				今天是：2014.7.1
				您的当前位置是：
				<span>首页</span>
			</p>
			<p class="out">
				<span class="out_bg">&nbsp&nbsp&nbsp&nbsp</span>&nbsp
				<a href="<?php echo site_url('admin/login/login_out') ?>" target="_self">退出</a>
			</p>
		</div>
	</div>
<!-- 左侧菜单 -->
		<div id="left_box">
			<p class="use">功能管理</p>
			<div class="menu_box">
				<h2>文章管理</h2>
				<div class="text">
				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('/admin/AdminNews/publish') ?>" class="pos">发表文章</a>				        	
				        </li> 
				    </ul>
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('/admin/AdminNews/index') ?>" class="pos">查看文章</a>				        	
				        </li> 
				    </ul>
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('/admin/Upload/do_upload') ?>" class="pos">上传图片</a>				        	
				        </li> 
				    </ul>

				</div>
			</div>		
			<div class="menu_box">
				<h2>常用菜单</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url() ?>" class="pos" target="_blank">前台首页</a>				        	
				        </li> 
				    </ul>
				  	<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('admin/admin/copy') ?>" class="pos">系统信息</a>				        	
				        </li> 
				    </ul>
				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('admin/admin/change') ?>" class="pos">密码修改</a>				        	
				        </li> 
				    </ul>
				</div>
			</div>			
		</div>
		<!-- 右侧 -->
		<div id="right">
			<iframe  frameboder="0" border="0" 	scrolling="yes" name="iframe" src="<?php echo site_url() . '/admin/admin/copy' ?>"></iframe>
		</div>
	<!-- 底部 -->
	<div id="foot_box">
		<div class="foot">
			<p>@Copyright © 2013-2013 houdunwang.com All Rights Reserved. 京ICP备0000000号</p>
		</div>
	</div>

</body>
</html>
<!--[if IE 6]>
    <script type="text/javascript" src="<?php echo base_url() . 'style/admin/' ?>js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('.adm_pic, #left_box .pos, .span_server, .span_people', 'background');
    </script>
<![endif]-->
