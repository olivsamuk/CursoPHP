
 <ul class="nav nav-pills nav-stacked">
 <?php 
	$posts = mysql_query("SELECT * FROM posts ORDER BY id DESC");			 	
	while ($post = mysql_fetch_array($posts)) {
 ?>
     <li> <a href="show.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></li>
 <?php } ?>
 </ul>