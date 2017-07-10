<h2><?php echo $title; ?></h2>

<?php echo form_open('admin/AdminNews/publish'); ?>
<?php	
	$news_info = $news_item[0];
	$tag_info = $news_item[1]; ?>
<form action="" method="POST" enctype="multipart/form-data">
<table class="table">
  <tr class="th">
    <td colspan="10">修改文章</td>
  </tr>
  <tr>
    <td>标题</td>
    <td>
      <input type="input" name="title" value="<?php echo $news_info['title'] ?>" />
      <?php echo form_error('title', '<span>', '</span>') ?>
    </td>
  </tr>
  <tr>
    <td>标签</td>
    <td>
      <input type="input" name="tag" value="<?php foreach($tag_info as $tag){echo $tag['tag']." ";} ?>"/>
    </td>
  </tr>
  <tr>
    <td>摘要</td>    
    <td>
      <textarea name="summary" style="width:500px;height:200px;" ><?php echo $news_info['summary'] ?></textarea><br/>
      <?php echo form_error('summary', '<span>', '</span>') ?>
    </td>
  </tr>
  <tr>
    <td>内容</td>    
    <td>
      <textarea name="text" style="width:500px;height:500px;" ><?php echo $news_info['text'] ?></textarea><br/>
      <?php echo form_error('text', '<span>', '</span>') ?>
    </td>
  </tr>
    
</table>
  
  <input type="submit" name="submit" value="完成" />
</form>
