<h2><?php echo $title; ?></h2>

<?php foreach ($tag_news as $news_item): ?>
	
	<div id='main'>
		<div class='details'>
			<h2><?php echo $news_item['title']; ?></h2>
			<a href="<?php echo site_url('news/view/').$news_item['slug'] ?>">显示全文</a>
		
		<div class='base'>
			<em>发表于 <?php echo $news_item['time'] ?></em>
			
		</div>
		<div class='conyent'>
			<?php echo $news_item['summary']; ?>
		</div>
		<div class='content'>
			<?php echo $news_item['text']; ?>
		</div>
		</div>
		
		
	</div>
	<br /><br /><br />

<?php endforeach; ?>

<div class="page">
	<?php echo $links ?>
</div>
