<?php 

// Conexão com o MySQL
$connect = mysql_connect("localhost", "root", "@c4vv_");

// Critica de erro na conexão
if (!$connect) {
	die("Falha na conexão");
}
// Seleção da base de dados
mysql_select_db("meublog");

 ?>