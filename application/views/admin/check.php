
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
			<td>标签</td>
			<td>摘要</td>
			<td>操作</td>
		<tr>

<?php 
foreach($news as $news_item): ?>
<?php	
	$news_info = $news_item[0];
	$tag_info = $news_item[1]; ?>

	<tr>
		<td class='title'>
			<h2><?php echo $news_info['title']; ?></h2>
		</td>
		<td>
			<?php
			foreach($tag_info as $tag){
				echo $tag['tag']." ";
			}  ?>
		</td>
		<td>
			<p><?php echo $news_info['summary']; ?></p>
		</td>
		<td>
			<p><?php echo $news_info['text']; ?></p>
		</td>
		<td>
			<a href="">[删除]</a><a href="">[修改]</a>
		</td>
	</tr>

<?php endforeach ?>
	</table>

	<div class="page">
		<?php echo $links ?>
	</div>
</body>


