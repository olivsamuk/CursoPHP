<?php include("layout_home/header.php") ?>

<?php  
include("config.php");
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM posts WHERE id = $id";
	$post = mysql_fetch_assoc(mysql_query($sql));
}

 ?>

 <style type="text/css">
 .conteudo {
 	background-color: #fff;
 	text-align: justify;
 	line-height: 26px;
 }
 </style>

 <div class="container">
 	<div class="row">
		<div class="col-md-8 conteudo">
			
			<h3><?php echo $post['titulo']; ?></h3>
			<hr />
			<?php echo $post['conteudo']; ?><br />
			<b>Data:</b><br />
			<?php echo $post['criado_em']; ?><br />

			<a href="index.php"><< Voltar</a> 

			<hr />

			<div id="disqus_thread"></div>
<script>
/**
* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//samueldeoliveira.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<h3>Ultimos Posts</h3>
			<?php include("menu_direito.php"); ?>
		</div>
	</div>
</div>


<?php include("layout_home/footer.php") ?>
