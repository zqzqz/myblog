<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<form action="" method="POST" enctype="multipart/form-data">
<table class="table">
  <tr class="th">
    <td colspan="10">发表文章</td>
  </tr>
  <tr>
    <td>标题</td>
    <td><input type="input" name="title" /></td>
  </tr>
  <tr>
    <td>标签</td>
    <td><li>unfinished</li></td>
  </tr>
  <tr>
    <td>摘要</td>    
    <td><li>unfinished</li></td>
  </tr>
  <tr>
    <td>内容</td>    
    <td><textarea name="text" style="width:500px;height:500px;"></textarea><br/></td>
  </tr>
    
</table>

  <input type="submit" name="submit" value="Create news item" />
</form>
