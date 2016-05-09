
<?php 
	include("layout/header.php");
	include("../../config.php");
 ?>

<table>
	<tr>
		<th>Titulo</th>
		<th>Usuario</th>
		<th>Data de criação</th>
		<th colspan="2">Opções</th>
	</tr>
	<?php 
		$posts = mysql_query("SELECT * FROM `posts`") or trigger_error(mysql_error());
		while ($post = mysql_fetch_array($posts)) {
	 ?>
	<tr>
		<td><a href="show.php?id=<?php echo $post['id']?>"><?php echo $post['titulo']; ?></a></td>
		<td><a href="show.php?id=<?php echo $post['id']?>"><?php echo $post['usuario']; ?></a></td>
		<td><a href="show.php?id=<?php echo $post['id']?>"><?php echo $post['criado_em']; ?></a></td>
		<td><a href="edit.php?id=<?php echo $post['id']?>">Editar</a></td>
		<td><a href="delete.php?id=<?php echo $post['id']?>">Remover</a></td>
	</tr>
	<?php 
		}
	 ?>
</table>	
<br /><br />
<a href="new.php">[+] Novo Post</a>


