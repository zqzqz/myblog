<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

	<link rel="stylesheet" href="<?php echo base_url() . 'public/admin/' ?>css/public.css" />

</head>

<body>
	<table class = "table">
		<tr>
			<td class="ht" colspan="10"><?php echo $title ?></td>
		</tr>

		<tr>
			<td>标题</td>
			<td>时间</td>
			<td>评论人</td>
			<td>内容</td>
			<td>操作</td>
		<tr>

<?php 
foreach($comments as $comment): ?>

	<tr>
		<td>
			<?php echo $comment['slug']; ?>
		</td>
		<td>
			<?php echo $comment['time']; ?>
		</td>
		<td>
			<?php echo $comment['name']; ?>
		</td>
		<td>
			<?php echo $comment['comment']; ?>
		</td>
		<td>
			<a href="<?php echo site_url('/index/News/view/').$comment['slug'] ?>" class="pos" target="_blank" >[查看]</a>
		</td>
	</tr>

<?php endforeach ?>
	</table>

	<div class="page">
		<?php echo $links ?>
	</div>
</body>

