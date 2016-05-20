<?php 
	include("layout_home/header.php");
	include("config.php");
	$imagensdopost = mysql_query("SELECT * FROM posts ORDER BY id DESC LIMIT 3 OFFSET 1");
	$primeiroPost = mysql_fetch_assoc(mysql_query("SELECT * from posts order by id desc limit 1")); 

?>

<style type="text/css">
	.carousel-inner{
  width:100%;
  max-height: 320px !important;
}

.carousel-caption {
    right: 20%;
    left: 20%;
    top: 40%;
    padding-bottom: 30px;
}

.carousel-caption a {
	color:#fff;
	font-weight: bold;
}

</style>
		<div class="contanier">
			<div class="row">
	       		<div class="col-md-8 col-lg-8" style="background-color:#efefef;">  
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
					  </ol>

					  <!-- primeiro post -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img style="width:100%" src="app/posts/<?php echo $primeiroPost['imagem']; ?>" alt="<?php echo $primeiroPost['titulo']; ?>">
					      <div class="carousel-caption">
					        <a href="show.php?id=<?php echo $primeiroPost['id']; ?>"><?php echo $primeiroPost['titulo']; ?></a>
					      </div>
					    </div>
					  <!-- fecha primeiro post -->

					  	<!-- Demais -->
					  	<?php 
					  		while ($imagem = mysql_fetch_array($imagensdopost)) {
					  	 ?>
						    <div class="item">
						      <img style="width:100%" src="app/posts/<?php echo $imagem['imagem']; ?>" alt="<?php echo $imagem['titulo']; ?>">
						      <div class="carousel-caption">
						        <a href="show.php?id=<?php echo $imagem['id']; ?>"><?php echo $imagem['titulo']; ?></a>
						      </div>
						    </div>
						<?php } ?>
					    <!-- Fecha demais -->

					  </div>
					  

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
	       			<div class="divisor" style="margin-bottom:20px;"><hr></div>
	       	
					<?php 
	            	// Paginação
	            	$numreg = 6;
	            	if (!isset($pg)) {
	            		$pg = 0;
	            	}
	            	$inicial = @$_GET['pg'] * $numreg; 
	            	$conta_posts = mysql_query("SELECT * FROM posts");
	            	$quantreg = mysql_num_rows($conta_posts);	            	
				 	$contador = 1;
				 	$posts = mysql_query("SELECT * FROM posts ORDER BY id DESC LIMIT $inicial, $numreg");
				 	while ($post = mysql_fetch_array($posts)) {
				 	$resultado = $contador%2;	
				 		?>
				 			
						<?php if (!$resultado == 0){ ?>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<a class="painel" href="show.php?id=<?php echo $post['id']; ?>">
										<div class="panel panel-default">
											
											<div class="panel-heading" style="font-size:"><?php echo $post['titulo'] . $result; ?></div>
											
											<?php 
												$strip = strip_tags($post['conteudo']);
												$text = substr($strip,0,176); 
											?>

											<div class="panel-body">
											<?php if(!$post['imagem'] == ""){ ?>
												<img class="img-responsive" src="app/posts/<?php echo $post['imagem']; ?>" alt="">
											<? } ?>
											</div>
											<div class="panel-body"><?php echo wordwrap($text, 18, "<br\> \n", true)."..."; ?></div>
										
											<div class="panel-footer text-center hidden-xs hidden-md"><?php echo " Publicado: ".$post['criado_em'];
											if ($post['atualizado_em']!= "0000-00-00") {
												echo " > > Atualizado: ".$post['atualizado_em'];
											}
											 ?></div>
											<div class="panel-footer text-center visible-xs visible-md"><?php echo " Publicado >>> ".$post['criado_em'];
											if ($post['atualizado_em']!= "0000-00-00") {
												echo "<br/>Atualizado >>> ".$post['atualizado_em'];
											}
											 ?></div>
											
										</div>
									</a>
								</div> 	
							
						<?php }else{ ?>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<a class="painel" href="show.php?id=<?php echo $post['id']; ?>">
									<div class="panel panel-default">
										
										<div class="panel-heading" style="font-size:"><?php echo $post['titulo'] . $result; ?></div>
										
										<?php 
											$strip = strip_tags($post['conteudo']);
											$text = substr($strip,0,176); 
										?>

										<div class="panel-body">
										<?php if(!$post['imagem'] == ""){ ?>
											<img class="img-responsive" src="app/posts/<?php echo $post['imagem']; ?>" alt="">
										<? } ?>
										</div>
										<div class="panel-body"><?php echo wordwrap($text, 18, "<br\> \n", true)."..."; ?></div>
									
										<div class="panel-footer text-center hidden-xs hidden-md"><?php echo " Publicado: ".$post['criado_em'];
										if ($post['atualizado_em']!= "0000-00-00") {
											echo " > > Atualizado: ".$post['atualizado_em'];
										}
										 ?></div>
										<div class="panel-footer text-center visible-xs visible-md"><?php echo " Publicado >>> ".$post['criado_em'];
										if ($post['atualizado_em']!= "0000-00-00") {
											echo "<br/>Atualizado >>> ".$post['atualizado_em'];
										}
										 ?></div>
										
									</div>
								</a>
							</div> 
						</div>
						
						<?php } ?>
	             		
	          		<?php $contador++; } ?>
	          		</div>
	          		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	          			<h3>Ultimos Posts</h3>
	          			<?php include("menu_direito.php"); ?>
	          		</div>
	          	</div> <!-- /row -->
	          	<div class='row'>
	          		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8' style='background-color:#efefef; text-align:center;'>
	          			<?php include("paginacao.php"); ?>
	          		</div>
	          	</div>
	        </div>
	          		

		
		

		
<?php 

include("layout_home/footer.php"); ?>
	