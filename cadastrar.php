<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro_index.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro_index.php');
exit;
?>

<?php
//Verifico se o arquivo existe
if(file_exists("verifica_login.php")) {
require "verifica_login.php";		
} else {
echo "Arquivo verifica_login.php nao foi encontrado";
exit;
}
//verifico se a função que eu criei existe, vai que alguem pegou meu script e apagou ela = )
if(!function_exists("Abre_Conexao")) {
echo "Erro o arquivo verifica_login.php foi auterado, nao existe a função Abre_Conexao";
exit;
}

Abre_Conexao();
$re = mysql_query("select * from estados order by estado");
//verifico se nao deu erro de mysql
if(mysql_errno() != 0) {
               //verifico se a $errros existe, mesma coisa vai que alguem meche no script e apagou ela
if(!isset($erros)) {
	echo "Erro o arquivo verifica_login.php foi auterado, nao existe \$erros";
	exit;
}
echo $erros[mysql_errno()];
exit;
}	
?>
