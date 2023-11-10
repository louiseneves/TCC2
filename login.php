<?php
include 'conexao.php';
session_start();
if (empty($_POST["usuario"]) || empty($_POST["senha"])) {
    header("Location: index.php");
    exit();
}
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$sql = "SELECT  id,usuario FROM usuario WHERE usuario='$usuario' AND senha='$senha'";
$res = mysqli_query($conexao, $sql);
//$row = $res->fetch_object();
// Vincule as variáveis à instrução preparada como parâmetros
$qtd = mysqli_num_rows($res);
// Verifique se o nome de usuário existe, se sim, verifique a senha
if ($qtd == 1) {
    $_SESSION['usuario'] = $usuario;
    header("Location: index.php");
    exit();
} else {
    $_SESSION["nao_autenticado"] = true;
    header("Location: painel.php");
    exit();
}


//$usuario = $_POST['usuario'];
//$senha = $_POST['senha'];
//$sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND senha='$senha'";
//$res = $conexao->query($sql) or die($conexao->error);
//$row = $res->fetch_object();
//$qtd = $res->num_rows;
//if ($qtd > 0) {
//$_SESSION['usuario'] = $usuario;
//$_SESSION['nome'] = $row->nome;
//$_SESSION['administrador'] = $row->administrador;
//print "<script> location.href='welcome.php';</script>";
//} else {
// print "<script> location.href='index.php';</script>";
