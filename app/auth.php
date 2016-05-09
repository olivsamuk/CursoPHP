<?php 
include("../config.php");
session_start();
if (isset($_POST['email'])) {
		$email = addslashes(trim($_POST['email']));
	}else{
		FALSE;
}
if (isset($_POST['senha'])) {
		$senha = md5(trim($_POST['senha']));
	}else{
		FALSE;
}
if (!$email || !$senha) {
	echo "Digite o email e a senha";
}
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = mysql_query($sql) or die(mysql_error());
$total = mysql_num_rows($resultado);
if ($total) {
	$dados = mysql_fetch_array($resultado);
	if (!strcmp($senha, $dados['senha'])) {
		$_SESSION["usuario_id"] = $dados["id"];
		$_SESSION["usuario_nome"] = $dados["nome"];
		$_SESSION["usuario_tipo"] = $dados["tipo"];
		header("Location: posts/index.php");
		exit;
	}else{
		echo "Senha Inválida";
		exit;
	}
}else{
	echo "Email inexistente";
	exit;
}

 ?>