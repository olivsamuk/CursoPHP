<?php 
	include("layout/header.php");
	include("../../config.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM posts WHERE id = $id";
	$post = mysql_fetch_assoc(mysql_query($sql));
}

 ?>

<b>Titulo:</b><br />
<?php echo $post['titulo']; ?><br />
<b>Conteudo:</b><br />
<?php echo $post['conteudo']; ?><br />
<b>Data de Criação</b><br />
<?php echo $post['criado_em']; ?><br />

<a href="index.php"><< Voltar</a>
