<h2><?php echo $title ?></h2>
<br />
<?php echo $error; ?>
<br />
<?php if($upload_data){
	foreach ($upload_data as $item => $value)
		echo "<li>".$item.": ".$value."</li>";
	} ?>

<br />

<?php echo form_open_multipart('admin/Upload/do_upload'); ?> 
<div id='slug'>
	<input type="input" name="title"  />
</div>
<div id='upload'>
	<input type="file" name="userfile" />
</div>
<br /><br />

<input type="submit" value="upload" />

</form>

