

<?php 
	include("layout/header.php");

	include("../../config.php");

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sql = "DELETE FROM posts where id=$id";
		mysql_query($sql);

		if (mysql_affected_rows()) {
			echo "Registro Removido";
		}else{
			echo "Houve um erro";
		}
		echo "<a href='index.php'><< Voltar</a>";
	}

	
 ?>