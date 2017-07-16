
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



<!-- publish all comments -->
<div id='main' >
	<div class='details'>
		<h2>评论区</h2>
	</div>
<?php 
foreach($comments as $comment): ?>

	<div id='main'>
		<div class='details'>
			
		<div class='base'>
			<em><?php echo $comment['name'] ?> 评论于 <?php echo $comment['time'] ?></em>
			
		</div>
		<div class='conyent'>
			<?php echo $comment['comment']; ?>
		</div>
		
		</div>
		
	</div>
	<br />
<?php endforeach ?>
</div>

<!-- publish new comment -->
<div class="row">
    <div class="col-md-8">
            <?php echo form_open('index/News/view/'.$news[0]['title']); ?>
            <form action="." method="post" class="form-horizontal">
                <h2>发表评论</h2>
                <hr />
                <div class="form-group">
                    <label class="col-md-2 control-label">姓名/昵称</label>
                    <div class="col-md-10">
                        <input type="input" class="form-control" name="name"  />
                        <?php echo form_error('name', '<span>', '</span>') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">我的评论</label>
                    <div class="col-md-10">
                        <textarea name="comment" class="form-control" style="width:500px;height:200px;" ></textarea>
                        <?php echo form_error('comment', '<span>', '</span>') ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="hidden" name="next" value="/" />
                        <button type="submit" class="btn btn-default" >提交</button>
                    </div>
                </div>
                
            </form>
    </div>
</div>
<hr />
