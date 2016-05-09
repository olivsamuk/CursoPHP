<?php 
	include("layout/header.php");
	include("../../config.php");
 ?>

 <?php 
 	if (isset($_POST['enviado'])) {
 		date_default_timezone_set('America/Belem');

 		$data = date("Y-m-d H:i:m");
 		print_r($data);
 		echo "<br />2016-02-02 00:00:00";
 		$sql = "INSERT INTO posts (titulo, conteudo, usuario_id, criado_em) VALUES('{$_POST['titulo']}', '{$_POST['conteudo']}', '{$_POST['usuario_id']}', '{$data}' )";
 		mysql_query($sql) or die(mysql_error());
 		echo "Post salvo com sucesso";
 		echo "<a href='index.php'><< Voltar</a>";
 	}
  ?>

 <form method="post" action="new.php">
 	<label>Titulo:</label><br/>
 	<input name="titulo" type="text" /><br/>
 	<label>Conteudo:</label><br />
 	<textarea name="conteudo"></textarea><br />
 	<input type="hidden" name="usuario_id" value="1" />
 	<input type="hidden" name="enviado" value="1" />
 	<input type="submit" value="Salvar" />

 </form>
<br />
 <a href="index.php"><< Voltar</a>