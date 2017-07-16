
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="<?php echo base_url() . 'public/index/' ?>css/bootstrap.min.css" />
	<script type="text/javascript" src="<?php echo base_url() . 'public/index/' ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'public/index/' ?>js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>

<div class="row">
<div class="col-md-5">
<script>if($error != '') alert("<?php echo $error ?>");</script>
<form role="form" action="<?php echo site_url('admin/login/login_in') ?>" method="POST" id="login">
	<div class="form-group">
		<div class="col-md-8">
			<label for="name">Username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="username">
		</div>	
	</div>
	<div class="form-group">
		<div class="col-md-8">
			<label for="name">Password</label>
			<input type="password" class="form-control" id="psd" name="passwd" placeholder="password">
		</div>
	</div>
	<div class="form-group">
		<div class="clo-md-offset-2 col-md-8">
			<button type="submit" class="btn btn-default">Log in</button>
		</div>
	</div>
	
</form>
</div>
</div>


</body>
</html>
