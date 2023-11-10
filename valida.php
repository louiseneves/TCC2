<?php
include_once("conexao.php");
$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);
$result = "SELECT * FROM usuario WHERE usuario = '$email' LIMIT 1 ";
$resultado = mysqli_query($conexao, $resultado);
if (($resultado) and ($resultado->num_rows != 0)) {
    echo 'Acessar';
} else {
    echo 'Erro';
}
