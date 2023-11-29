<?php
include 'conexao.php';
session_start();
if (empty($_POST["usuario"]) || empty($_POST["senha"])) {
    header("Location: index.php");
    exit();
}
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$sql = "SELECT  id,usuario,administrador FROM usuario WHERE usuario='$usuario' AND senha='$senha'  LIMIT 1";
$res = mysqli_query($conexao, $sql);
//$row = $res->fetch_object();
// Vincule as variáveis à instrução preparada como parâmetros
$qtd = mysqli_num_rows($res);
// Verifique se o nome de usuário existe, se sim, verifique a senha
if (isset($qtd) == 1) {
    $row = mysqli_fetch_assoc($res);
    if ($row['administrador'] == '0') {
        $_SESSION['id'] = $row['id'];
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['administrador'] = 'user';
        header("Location: index.php");
        exit();
    }
    if ($row['administrador'] == '1') {
        $_SESSION['id'] = $row['id'];
        $_SESSION['usuario'] = $usuario;
        $_SESSION['administrador'] = 'admin';
        $_SESSION['nome'] = $row['nome'];
        header("Location: index.php");
        exit();
    } else {
        $_SESSION["nao_autenticado"] = true;
        header("Location: painel.php");
        exit();
    }
}
