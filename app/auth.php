<?php
include("../config.php");
session_start();

if (isset($_POST["email"])) {
	$email = addslashes(trim($_POST["email"]));
}else{
	FALSE;
}

if (isset($_POST["senha"])) {
	$senha = md5(trim($_POST["senha"]));
}else{
	FALSE;
}

if(!$email || !$senha)
{
    echo "Você deve digitar sua senha e email!";
    exit;
}

$sql = "SELECT * FROM usuarios WHERE email = '" . $email . "'";
$result_id = @mysql_query($sql) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_id);

if($total)
{
    $dados = @mysql_fetch_array($result_id);
    if(!strcmp($senha, $dados["senha"]))
    {
        $_SESSION["id_usuario"]   = $dados["id"];
        $_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
        $_SESSION["tipo"] = stripslashes($dados["tipo"]);
        header("Location: posts/index.php");
        exit;
    }
    else
    {
        echo "Senha inválida!";
        exit;
    }
}

else
{
    echo "O login fornecido por você é inexistente!";
    exit;
}
?>
