
<h2><?php echo $news[0]['title']; ?></h2>
<br>
<div class='summary'>
    <?php echo $news[0]['time'] ?>
</div>
<br>
<div class='tag'>
  <li>
    <?php 
      foreach($news[1] as $tag)
        echo "<a href=".site_url('tag/'.$tag['tag']).">".$tag['tag']."</a>   ";       
    ?>
  </li>
</div>
<div class='summary'>
  <p>
    <?php echo $news[0]['summary'] ?>
  </p>
</div>
<br>
<div class='text'>
  <p>
    <?php echo $news[0]['text'] ?>
  </p>
</div>
