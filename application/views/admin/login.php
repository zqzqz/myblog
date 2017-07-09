
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="<?php echo base_url() . 'public/admin/' ?>css/login.css" />
	<script type="text/javascript" src="<?php echo base_url() . 'public/admin/' ?>js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'public/admin/' ?>js/login.js"></script>
	<title></title>
</head>
<body>
	<div id="divBox">
		<form action="<?php echo site_url('admin/login/login_in') ?>" method="POST" id="login">
			<input type="text" id="userName" name="username"/>
			<input type="password" id="psd" name="passwd"/>   
			<input type="submit" id="sub" value=""/>

		</form>
		<div class="four_bj">
			
			<p class="f_lt"></p>
			<p class="f_rt"></p>
			<p class="f_lb"></p>
			<p class="f_rb"></p>
		</div>

	</div>

</body>
</html>
