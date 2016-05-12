<?php 
	include("../../checagem.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<style>
		.menu ul li {display: inline;}
	</style>
	<title>Meu Blog</title>
</head>
<body>
<div class="menu">
	<ul>
		<li>Bem vindo, <?php echo $_SESSION['nome_usuario']; ?> | </li>
	    <li><a href="">Posts</a></li>
	    <li><a href="../usuarios/">Usuários</a></li>
	    <li><a href="">Trocar Senha</a></li>
	    <li><a href="../../sair.php">Sair</a></li>
	</ul>
</div>
