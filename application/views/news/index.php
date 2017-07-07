<h2><?php echo $title; ?></h2>

<!-- publish all news -->
<?php 
foreach($news as $news_item): ?>
<?php	
	$news_info = $news_item[0];
	$tag_info = $news_item[1]; ?>

	<div>
		<div class='title'>
			<h2><?php echo $news_info['title']; ?></h2>
		</div>
		<div>
			<?php
			foreach($tag_info as $tag){
				echo "<a href=".site_url('tag/').$tag['tag']." >".$tag['tag']."</a>  ";
			}  ?>
		</div>
		<div class='summary'>
			<p><?php echo $news_info['summary']; ?></p>
		</div>
		<div class='text'>
			<p><?php echo $news_info['text']; ?></p>
		</div>
		<a href="<?php echo site_url('news/view/').$news_info['title'] ?>">显示全文</a>
	</div>
	<br />

<?php endforeach ?>
<div class="page">
	<?php echo $links ?>
</div>

