
<div id="main">
		<div class='details'>
			<h1><?php echo $news[0]['title'] ?></h1>
			<div class='info'>
				<div class='base'>
					<em>发表于 <?php echo $news[0]['time'] ?></em>
					, 分类：<strong><?php 
							foreach($news[1] as $tag)
								echo "<a href=".site_url('tag/'.$tag['tag']).">".$tag['tag']."</a>   ";       
							?></strong>
				</div>
			</div>
			<div class='content'>
				<?php echo $news[0]['summary'] ?>
			</dic>
			<div class='content'>
				<?php echo $news[0]['text'] ?>
			</div>
		</div>

	</div>
