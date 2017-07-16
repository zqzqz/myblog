<h2><?php echo $title; ?></h2>

<!-- publish all news -->


<div id='main'>
	<div class='sidebar'>
			<div class='item'>
				<h2>所有标签</h2>
				<ul class='flink'>
					<?php
					foreach($all_tags as $tag){
						echo "<li><a href=".site_url('tag/').$tag['tag']." >".$tag['tag']."</a></li>";
					}  ?>
				</ul>
			</div>
			
		</div>
	<?php foreach($news as $news_item): ?>
		
	<?php	
		$news_info = $news_item[0];
		$tag_info = $news_item[1]; ?>
		<div class='details'>
			<h2><?php echo $news_info['title']; ?></h2>
			<a href="<?php echo site_url('news/view/').$news_info['title'] ?>">显示全文</a>
		<div class='base'>
			<em>发表于 <?php echo $news_info['time'] ?></em></br>
			<strong>标签：
			<?php
			foreach($tag_info as $tag){
				echo "<a href=".site_url('tag/').$tag['tag']." >".$tag['tag']."</a>  ";
			}  ?></strong>
		</div>
		<div class='conyent'>
			<?php echo $news_info['summary']; ?>
		</div>
		<div class='content'>
			<?php echo $news_info['text']; ?>
		</div>
		</div>
		
		<?php endforeach ?>
	</div>
	<br /><br /><br />

<div class="page">
	<?php echo $links ?>
</div>

<div id='main'>

</div>




