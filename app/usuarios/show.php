<?php 
	include("layout/header.php");
	include("../../config.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$usuario = mysql_fetch_assoc(mysql_query($sql));
}

 ?>

<b>Nome:</b><br />
<?php echo $usuario['nome']; ?><br />
<b>email:</b><br />
<?php echo $usuario['email']; ?><br />
<b>Tipo:</b><br />

<?php 
	if ($usuario['tipo'] == 1) {
		echo "Administrador<br />";
	}else if ($usuario['tipo'] == 0) {
		echo "Editor<br />";
	}else{
		echo "Erro.";
	}

 ?>

<a href="index.php"><< Voltar</a> | <a href="edit.php?id=<?php echo $id; ?>"> Editar</a>
