<h2><?php echo $title; ?></h2>

<?php echo form_open('admin/AdminNews/publish'); ?>

<form action="" method="POST" enctype="multipart/form-data">
<table class="table">
  <tr class="th">
    <td colspan="10">编辑文章</td>
  </tr>
  <tr>
    <td>标题</td>
    <td>
      <input type="input" name="title" value="<?php echo set_value('title') ?>" />
      <?php echo form_error('title', '<span>', '</span>') ?>
    </td>
  </tr>
  <tr>
    <td>标签</td>
    <td>
      <input type="input" name="tag" />
    </td>
  </tr>
  <tr>
    <td>摘要</td>    
    <td>
      <textarea name="summary" style="width:500px;height:200px;" value="<?php echo set_value('summary') ?>" ></textarea><br/>
      <?php echo form_error('summary', '<span>', '</span>') ?>
    </td>
  </tr>
  <tr>
    <td>内容</td>    
    <td>
      <textarea name="text" style="width:500px;height:500px;" value="<?php echo set_value('text') ?>" ></textarea><br/>
      <?php echo form_error('text', '<span>', '</span>') ?>
    </td>
  </tr>
    
</table>

  <input type="submit" name="submit" value="Create news item" />
</form>
