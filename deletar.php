<?php
session_start();
include "conexao.php";
$id = $_GET['id'];
$result = mysqli_query($conexao, "DELETE FROM produto WHERE id=$id");
echo "Produto removido com sucesso!";
header("Location: vender.php");
