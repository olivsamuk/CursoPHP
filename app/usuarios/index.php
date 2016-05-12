<?php 
	include("layout/header.php");
	include("../../config.php");
 ?>

<table>
	<tr>
		<th>id</th>
		<th>Nome</th>
		<th>Email</th>
		<th colspan="2">Opções</th>
	</tr>
	<?php 
		$usuarios = mysql_query("SELECT * FROM `usuarios`") or trigger_error(mysql_error());
		while ($usuario = mysql_fetch_array($usuarios)) {
	 ?>
	<tr>
		<td><?php echo $usuario['id']; ?></td>
		<td><a href="show.php?id=<?php echo $usuario['id']?>"><?php echo $usuario['nome']; ?></a></td>
		<td><?php echo $usuario['email']; ?></td>
		<td><a href="edit.php?id=<?php echo $usuario['id']?>">Editar</a></td>
		<td><a href="delete.php?id=<?php echo $usuario['id']?>">Remover</a></td>
	</tr>
	<?php 
		}
	 ?>
</table>	
<br /><br />
<a href="new.php">[+] Novo Usuário</a>
